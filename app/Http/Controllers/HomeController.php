<?php

namespace App\Http\Controllers;


use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $subjects = Subject::query()
            ->withCount('topic')   // isi otomatis $subject->topics_count, dipakai di subject-card
            ->orderBy('order')
            ->get();

        return view('home', compact('subjects'));
    }
}
