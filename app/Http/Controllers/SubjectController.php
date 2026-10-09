<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\View\View;
class SubjectController extends Controller
{
   // $subject sudah otomatis jadi model Subject dari slug di URL
    // berkat route model binding (lihat routes/web.php).
    public function show(Subject $subject): View
    {
        $topics = $subject->topic; // relasi sudah diurutkan by number di model

        return view('subjects.show', compact('subject', 'topics'));
    }
}
