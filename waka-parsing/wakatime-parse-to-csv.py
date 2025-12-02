import re
import csv
from pathlib import Path
from datetime import date

# ---------- Config ----------
snapshot_date = date.today().isoformat()
INPUT_PATTERN = "stats-week-ending-*.txt" 
OUTPUT_DIR = Path("parsed")               
AGGREGATE_CSV = OUTPUT_DIR / "wakatime-data.csv"

SECTIONS = [
    "Categories",
    "Projects",
    "Languages",
    "Editors",
    "Operating Systems",
    "Machines",
]


def time_to_minutes(time_str: str) -> int:
    """
    Convert:
      '8 hrs 35 mins', '1 hr 5 mins', '31 mins', '2 hrs'
    into total minutes.
    """
    hours = 0
    minutes = 0

    h_match = re.search(r"(\d+)\s*hrs?", time_str)
    if h_match:
        hours = int(h_match.group(1))

    m_match = re.search(r"(\d+)\s*mins?", time_str)
    if m_match:
        minutes = int(m_match.group(1))

    return hours * 60 + minutes


def parse_section_block(text: str, section_name: str):
    """
    Extract lines under a section like:

    Projects:
    innovation-prj-device-tracker-barcode   8 hrs 35 mins
    la-saas-jokes-app                       7 hrs 50 mins

    Returns list of (name, raw_time_str, minutes).
    """
    pattern = rf"{section_name}:\s*\n(.+?)(\n\n|\Z)"
    m = re.search(pattern, text, flags=re.DOTALL)
    if not m:
        return []

    block = m.group(1).strip()
    lines = [ln.strip() for ln in block.splitlines() if ln.strip()]

    results = []

    for line in lines:
        tm = re.search(
            r"(\d+\s*hrs?\s*\d+\s*mins|\d+\s*hrs?|\d+\s*mins)$", line
        )
        if not tm:
            continue

        raw_time = tm.group(1).strip()
        name = line[: tm.start()].rstrip(" \t–-")
        minutes = time_to_minutes(raw_time)
        results.append((name, raw_time, minutes))

    return results


def get_snapshot_date_from_filename(path: Path) -> str:
    """
    Extract 'YYYY-MM-DD' from filenames like:
      stats-week-ending-2025-11-16.txt
    """
    m = re.search(r"(\d{4}-\d{2}-\d{2})", path.stem)
    if not m:
        raise ValueError(f"Could not find date in filename: {path.name}")
    return m.group(1)  # already 'YYYY-MM-DD'


def main():
    OUTPUT_DIR.mkdir(parents=True, exist_ok=True)

    input_files = sorted(Path(".").glob(INPUT_PATTERN))
    if not input_files:
        print("No input files found.")
        return

    # Check if aggregate CSV already exists
    file_exists = AGGREGATE_CSV.exists()

    with AGGREGATE_CSV.open("a", encoding="utf-8", newline="") as f_out:
        fieldnames = ["snapshot_date", "section", "name", "minutes", "raw_time"]
        writer = csv.DictWriter(f_out, fieldnames=fieldnames)

        if not file_exists:
            writer.writeheader()

        total_rows = 0

        for path in input_files:
            snapshot_date = get_snapshot_date_from_filename(path)
            text = path.read_text(encoding="utf-8")

            for section in SECTIONS:
                entries = parse_section_block(text, section)
                for name, raw_time, minutes in entries:
                    writer.writerow(
                        {
                            "snapshot_date": snapshot_date,
                            "section": section,
                            "name": name,
                            "minutes": minutes,
                            "raw_time": raw_time,
                        }
                    )
                    total_rows += 1

            print(f"Processed {path.name} -> snapshot {snapshot_date}")

    print(f"Appended {total_rows} rows to {AGGREGATE_CSV}")


if __name__ == "__main__":
    main()
