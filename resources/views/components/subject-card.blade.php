@props([
    'code',            // e.g. 'MTK'
    'name',            // e.g. 'Matematika'
    'category',        // 'sains' | 'sosial' | 'bahasa' — decides the tab color
    'topicsCount' => 0,
    'href' => '#',
])

@php
    // Category groups get a distinct tab color so the grid reads like a
    // color-coded set of book dividers rather than uniform gray tiles.
    $tabColor = match ($category) {
        'sains'  => 'bg-primary-600',
        'sosial' => 'bg-accent-500',
        default  => 'bg-primary-400', // bahasa / lainnya
    };
@endphp

<a href="{{ $href }}"
   class="group surface relative flex flex-col justify-between overflow-hidden rounded-xl p-4 transition
          hover:-translate-y-0.5 hover:shadow-lg sm:p-5">

    <span class="absolute left-0 top-0 h-1.5 w-10 {{ $tabColor }} rounded-br-md"></span>

    <div class="mt-2 flex items-start justify-between">
        <span class="tab-badge {{ $tabColor }} text-white">{{ $code }}</span>
        <svg class="h-4 w-4 text-slate-300 transition group-hover:translate-x-0.5 group-hover:text-primary-500
                    dark:text-ink-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
    </div>

    <div class="mt-4">
        <h3 class="font-display text-sm font-semibold text-slate-800 dark:text-ink-100 sm:text-base">
            {{ $name }}
        </h3>
        <p class="mt-1 text-xs text-slate-500 dark:text-ink-400">
            {{ $topicsCount }} bab
        </p>
    </div>
</a>
