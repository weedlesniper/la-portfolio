<?php

namespace App\Http\Controllers;

use App\Services\WakatimeStats;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StaticPageController extends Controller
{
    /**
     * Display the Site Welcome / Index page
     */
    public function home(Request $request, WakatimeStats $wakatime): View
    {
        $snapshotDates = $wakatime->allSnapshotDates();

        if ($snapshotDates->isEmpty()) {
            return view('static.welcome', [
                'snapshotDate' => null,
                'snapshotDates' => collect(),
                'wakaCards' => [],
                'codingByWeek' => collect(),
                'languagesForSnapshot' => collect(),
            ]);
        }

        $selectedSnapshot = $request->query('snapshot');

        if (! $selectedSnapshot || ! $snapshotDates->contains($selectedSnapshot)) {
            $selectedSnapshot = $snapshotDates->first();
        }

        $cards = [
            'categories' => [
                'title' => 'Categories',
                'items' => $wakatime->sectionForDate('Categories', $selectedSnapshot, 4),
            ],
            'projects' => [
                'title' => 'Top Projects',
                'items' => $wakatime->sectionForDate('Projects', $selectedSnapshot, 5),
            ],
            'languages' => [
                'title' => 'Languages',
                'items' => $wakatime->sectionForDate('Languages', $selectedSnapshot, 6),
            ],
            'machines' => [
                'title' => 'Machines',
                'items' => $wakatime->sectionForDate('Machines', $selectedSnapshot, 4),
            ],
        ];

        $languagesForSnapshot = $wakatime->languagesForSnapshot($selectedSnapshot, 8);

        // NEW: pie chart data for selected week
        $categoriesForSnapshot = $wakatime->categoriesForSnapshot($selectedSnapshot);
        $projectsForSnapshot = $wakatime->projectsForSnapshot($selectedSnapshot, 6);
        $machinesForSnapshot = $wakatime->machinesForSnapshot($selectedSnapshot);

        return view('static.welcome', [
            'snapshotDate' => $selectedSnapshot,
            'snapshotDates' => $snapshotDates,
            'wakaCards' => $cards,
            'languagesForSnapshot' => $languagesForSnapshot,
            'categoriesForSnapshot' => $categoriesForSnapshot,
            'projectsForSnapshot' => $projectsForSnapshot,
            'machinesForSnapshot' => $machinesForSnapshot,
        ]);

    }

    public function about(): View
    {
        return view('static.about');
    }

    public function contact(): View
    {
        //        return view('static.contact');
    }

    public function privacy(): View
    {
        //        return view('static.privacy');
    }

    public function terms(): View
    {
        //        return view('static.terms');
    }
}
