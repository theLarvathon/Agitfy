@extends('layouts.app')

@section('title', $subject->name ?? 'Mata Pelajaran')

@section('content')



    <div class="mx-auto max-w-3xl px-4 py-8 sm:px-6 sm:py-12">

        <x-breadcrumb :items="[
        ['label' => 'Beranda', 'href' => route('home')],
        ['label' => $subject->name]
         ]" />

        <div class="mb-6 flex items-center gap-3">
            <span class="tab-badge bg-primary-600 text-lg text-white">{{ $subject->code }}</span>
            <div>
                <h1 class="font-display text-xl font-bold text-slate-900 dark:text-ink-100 sm:text-2xl">
                    {{ $subject->name }}
                </h1>
                <p class="text-xs text-slate-500 dark:text-ink-400">{{ $subject->topic_count }} bab tersedia</p>
            </div>
        </div>

        <div class="space-y-2">
           @foreach ($topics as $topic)
                <x-topic-item
                    :number="$topic->number"
                    :title="$topic->title"
                    :href="route('topics.show', [$subject, $topic->slug])"
                />
            @endforeach
        </div>
    </div>

@endsection
