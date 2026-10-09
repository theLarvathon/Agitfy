
@props([
    'number',
    'title',
    'href' => '#',
])

<a href="{{ $href }}"
   class="surface group flex items-center gap-4 rounded-lg p-4 transition
          hover:border-primary-300 dark:hover:border-primary-600">

    {{-- Nomor bab --}}
    <span class="tab-badge shrink-0 bg-slate-100 text-slate-500
                 dark:bg-ink-800 dark:text-ink-400 font-mono">
        Bab {{ $number }}
    </span>

    {{-- Judul bab --}}
    <span class="min-w-0 flex-1">
        <span class="block truncate font-display text-sm font-medium
                     text-slate-800 dark:text-ink-100 sm:text-base">
            {{ $title }}
        </span>
    </span>

    {{-- Icon arrow --}}
    <svg
        class="h-4 w-4 shrink-0 text-slate-300 transition
               group-hover:translate-x-0.5 group-hover:text-primary-500
               dark:text-ink-700"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M9 5l7 7-7 7"
        />
    </svg>

</a>
