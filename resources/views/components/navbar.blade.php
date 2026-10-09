<header
    class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur
               dark:border-ink-700 dark:bg-ink-950/90">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6">

        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <span class="tab-badge  text-white">
                <img src="{{ asset('images/Agitfy-logo.png') }}" alt="Agitfy" class="h-10 w-auto">
            </span>
            <span class="font-display text-base font-semibold sm:text-lg">Agitfy<span
                    class="text-accent-500">.</span></span>
        </a>

        <button type="button" @click="dark = !dark"
            class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-slate-200
                   text-slate-600 transition hover:bg-slate-100
                   dark:border-ink-700 dark:text-ink-100 dark:hover:bg-ink-800"
            aria-label="Ganti mode tampilan">
            {{-- sun icon (shown in dark mode) --}}
            <svg x-show="dark" x-cloak class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v1.5m0 15V21m9-9h-1.5M4.5 12H3m15.36 6.36l-1.06-1.06M6.7 6.7 5.64 5.64m12.72 0-1.06 1.06M6.7 17.3l-1.06 1.06M12 7.5a4.5 4.5 0 100 9 4.5 4.5 0 000-9Z" />
            </svg>
            {{-- moon icon (shown in light mode) --}}
            <svg x-show="!dark" x-cloak class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79Z" />
            </svg>
        </button>
    </div>
</header>
