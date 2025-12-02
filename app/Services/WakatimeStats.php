<?php

namespace App\Services;

use Illuminate\Support\Collection;

class WakatimeStats
{
    protected string $csvPath;

    protected ?Collection $rows = null;

    public function __construct(?string $csvPath = null)
    {
        // Adjust this if your folder is somewhere else
        $this->csvPath = $csvPath
            ?? base_path('waka-parsing/parsed/wakatime-data.csv');
    }

    public function allSnapshotDates(): Collection
    {
        return $this->load()
            ->pluck('snapshot_date')
            ->unique()
            ->sortDesc()
            ->values();
    }

    /**
     * Get entries for a given section + snapshot date.
     */
    public function sectionForDate(string $section, string $snapshotDate, int $limit = 5): Collection
    {
        return $this->load()
            ->where('snapshot_date', $snapshotDate)
            ->where('section', $section)
            ->sortByDesc('minutes')
            ->take($limit)
            ->values()
            ->map(function (array $row) {
                $minutes = $row['minutes'] ?? 0;

                return [
                    'name' => $row['name'] ?? '',
                    'minutes' => $minutes,
                    'raw_time' => $row['raw_time'] ?? null,
                    'formatted_time' => $this->formatMinutes($minutes),
                ];
            });
    }

    /**
     * Load CSV rows into a Collection of assoc arrays.
     */
    protected function load(): Collection
    {
        // read csv file once, turn into laravel collection of rows, otherwise just use cached
        if ($this->rows !== null) {
            return $this->rows;
        }

        if (! file_exists($this->csvPath)) {
            return $this->rows = collect();
        }

        $handle = fopen($this->csvPath, 'r');

        if (! $handle) {
            return $this->rows = collect();
        }

        // column names
        $header = null;
        $rows = [];

        // while there are rows in the csv
        while (($data = fgetcsv($handle)) !== false) {
            if ($header === null) {
                $header = $data;

                continue;
            }
            /*
            Example, combined
            $header = ['snapshot_date', 'section', 'name', 'minutes', 'raw_time'];
            $data   = ['2025-11-30', 'Projects', 'innovation-prj-device-tracker-barcode', '515', '8 hrs 35 mins'];

            into

            $row = [
            'snapshot_date' => '2025-11-30',
            'section'       => 'Projects',
            'name'          => 'innovation-prj-device-tracker-barcode',
            'minutes'       => '515',
            'raw_time'      => '8 hrs 35 mins',
            ];

            */
            // combine header + row into assoc array
            $row = array_combine($header, $data);

            // normalise types a bit
            if (isset($row['minutes'])) {
                $row['minutes'] = (int) $row['minutes'];
            }

            $rows[] = $row;
        }

        fclose($handle);

        return $this->rows = collect($rows);
    }

    /**
     * Get the latest snapshot_date in the CSV (e.g. '2025-11-30').
     */
    public function latestSnapshotDate(): ?string
    {
        return $this->load()
            ->max('snapshot_date'); // returns null if empty
    }

    /**
     * Keep sectionForLatest if you still want a convenience helper.
     */
    public function sectionForLatest(string $section, int $limit = 5): Collection
    {
        $latest = $this->latestSnapshotDate();

        if (! $latest) {
            return collect();
        }

        return $this->sectionForDate($section, $latest, $limit);
    }

    /**
     * Convert minutes -> 'Xh Ym' / 'Xm'.
     */
    public function formatMinutes(int $minutes): string
    {
        $hours = intdiv($minutes, 60);
        $mins = $minutes % 60;

        if ($hours && $mins) {
            return "{$hours}h {$mins}m";
        }

        if ($hours) {
            return "{$hours}h";
        }

        return "{$mins}m";
    }

    /**
     * Category breakdown (e.g. Coding vs Writing Docs) for a snapshot.
     */
    public function categoriesForSnapshot(string $snapshotDate): Collection
    {
        return $this->load()
            ->where('snapshot_date', $snapshotDate)
            ->where('section', 'Categories')
            ->sortByDesc('minutes')
            ->values()
            ->map(function (array $row) {
                $minutes = $row['minutes'] ?? 0;

                return [
                    'name' => $row['name'] ?? '',
                    'minutes' => $minutes,
                    'formatted_time' => $this->formatMinutes($minutes),
                ];
            });
    }

    /**
     * Project breakdown for a snapshot.
     * You can limit to top N to keep the pie readable.
     */
    public function projectsForSnapshot(string $snapshotDate, int $limit = 6): Collection
    {
        return $this->load()
            ->where('snapshot_date', $snapshotDate)
            ->where('section', 'Projects')
            ->sortByDesc('minutes')
            ->take($limit)
            ->values()
            ->map(function (array $row) {
                $minutes = $row['minutes'] ?? 0;

                return [
                    'name' => $row['name'] ?? '',
                    'minutes' => $minutes,
                    'formatted_time' => $this->formatMinutes($minutes),
                ];
            });
    }

    /**
     * Machine breakdown for a snapshot.
     */
    public function machinesForSnapshot(string $snapshotDate): Collection
    {
        return $this->load()
            ->where('snapshot_date', $snapshotDate)
            ->where('section', 'Machines')
            ->sortByDesc('minutes')
            ->values()
            ->map(function (array $row) {
                $minutes = $row['minutes'] ?? 0;

                return [
                    'name' => $row['name'] ?? '',
                    'minutes' => $minutes,
                    'formatted_time' => $this->formatMinutes($minutes),
                ];
            });
    }

    /**
     * Language breakdown for a specific snapshot.
     * Returns: Collection of [name, minutes, formatted_time]
     */
    public function languagesForSnapshot(string $snapshotDate, int $limit = 8): Collection
    {
        return $this->load()
            ->where('snapshot_date', $snapshotDate)
            ->where('section', 'Languages')
            ->sortByDesc('minutes')
            ->take($limit)
            ->values()
            ->map(function (array $row) {
                $minutes = $row['minutes'] ?? 0;

                return [
                    'name' => $row['name'] ?? '',
                    'minutes' => $minutes,
                    'formatted_time' => $this->formatMinutes($minutes),
                ];
            });
    }
}
