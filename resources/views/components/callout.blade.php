@props([
    'type' => 'point', // 'point' (poin penting, green) | 'note' (rumus/catatan, blue)
    'label' => null,
])

@php
    $styles = $type === 'note'
        ? ['border' => 'border-primary-500', 'bg' => 'bg-primary-50 dark:bg-primary-900/20', 'label' => 'text-primary-700 dark:text-primary-300']
        : ['border' => 'border-accent-500', 'bg' => 'bg-accent-50 dark:bg-accent-800/20', 'label' => 'text-accent-700 dark:text-accent-300'];
    $defaultLabel = $type === 'note' ? 'Rumus / Catatan' : 'Poin Penting';
@endphp

<div class="my-4 rounded-r-lg border-l-4 {{ $styles['border'] }} {{ $styles['bg'] }} px-4 py-3">
    <p class="mb-1 font-mono text-[11px] font-bold uppercase tracking-wide {{ $styles['label'] }}">
        {{ $label ?? $defaultLabel }}
    </p>
    <div class="text-sm leading-relaxed text-slate-700 dark:text-ink-100">
        {{ $slot }}
    </div>
</div>
