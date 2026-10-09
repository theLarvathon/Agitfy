@props(['items']) {{-- array of ['label' => string, 'href' => string|null] --}}

<nav class="mb-4 flex flex-wrap items-center gap-1.5 font-mono text-xs text-slate-400 dark:text-ink-400">
    @foreach ($items as $i => $item)
        @if ($item['href'] ?? null)
            <a href="{{ $item['href'] }}" class="hover:text-primary-600 dark:hover:text-primary-300">{{ $item['label'] }}</a>
        @else
            <span class="text-slate-600 dark:text-ink-100">{{ $item['label'] }}</span>
        @endif
        @if (!$loop->last)
            <span>/</span>
        @endif
    @endforeach
</nav>
