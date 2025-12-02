<?php

namespace App\Http\Controllers;

use App\Services\WakatimeStats;
use Illuminate\View\View;

class StaticPageController extends Controller
{
    /**
     * Display the Site Welcome / Index page
     */
    public function home(WakatimeStats $wakatime): View
    {
        $snapshotDate = $wakatime->latestSnapshotDate();

        $cards = [
            'categories' => [
                'title' => 'Categories',
                'items' => $wakatime->sectionForLatest('Categories', 4),
            ],
            'projects' => [
                'title' => 'Top Projects',
                'items' => $wakatime->sectionForLatest('Projects', 5),
            ],
            'languages' => [
                'title' => 'Languages',
                'items' => $wakatime->sectionForLatest('Languages', 6),
            ],
            'machines' => [
                'title' => 'Machines',
                'items' => $wakatime->sectionForLatest('Machines', 4),
            ],
        ];

        return view('static.welcome', [
            'snapshotDate' => $snapshotDate,
            'wakaCards' => $cards,
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
