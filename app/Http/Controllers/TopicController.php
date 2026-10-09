<?php

namespace App\Http\Controllers;


use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Support\TocExtractor;

class TopicController extends Controller
{
    public function show(
        Subject $subject,
        string $topicslug
    ): View {
        $topic = $subject
            ->topic()
            ->where('slug', $topicslug)
            ->firstOrFail();

        $view = "topics.{$subject->slug}.{$topic->slug}"; if (!view()->exists($view)) { abort(404); }

        return view($view, compact(
            'subject',
            'topic',
        ));
    }
}
