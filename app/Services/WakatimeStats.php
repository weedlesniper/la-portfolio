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

    /**
     * Load CSV rows into a Collection of assoc arrays.
     */
    protected function load(): Collection
    {
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

        $header = null;
        $rows = [];

        while (($data = fgetcsv($handle)) !== false) {
            if ($header === null) {
                $header = $data;

                continue;
            }

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
     * Get all entries for a given section in the latest snapshot,
     * sorted by minutes desc, limited.
     */
    public function sectionForLatest(string $section, int $limit = 5): Collection
    {
        $latest = $this->latestSnapshotDate();

        if (! $latest) {
            return collect();
        }

        return $this->load()
            ->where('snapshot_date', $latest)
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
}
