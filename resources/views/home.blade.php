@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- ================= HERO ================= --}}
    <section class="border-b border-slate-200 bg-gradient-to-b from-primary-50 to-white
                     dark:border-ink-700 dark:from-ink-900 dark:to-ink-950">
        <div class="mx-auto max-w-6xl px-4 py-12 sm:px-6 sm:py-16 lg:py-20">
          

            <h1 class="mt-4 max-w-xl font-display text-3xl font-bold leading-tight text-slate-900
                       dark:text-ink-100 sm:text-4xl lg:text-5xl">
                Rangkuman Setiap materi, jauh lebih mudah
            </h1>

            <p class="mt-3 max-w-lg text-sm text-slate-600 dark:text-ink-400 sm:text-base">
                Tidak perlu buka ulang buku paket. Pilih mata pelajaran, pilih bab, dan baca poin-poin
                pentingnya dalam hitungan menit.
            </p>

            {{-- Quick jump search — the fastest path to a specific bab --}}
            <form action="{{ route('search') ?? '#' }}" method="GET" class="mt-6 flex max-w-md gap-2">
                <label for="q" class="sr-only">Cari mapel atau bab</label>
                <input
                    id="q" name="q" type="search" autocomplete="off"
                    placeholder="Cari mapel atau bab, misal: &quot;Turunan&quot;"
                    class="w-full rounded-lg border border-slate-200 bg-white px-4 py-2.5 text-sm
                           text-slate-800 placeholder:text-slate-400 focus:border-primary-400
                           focus:outline-none focus:ring-2 focus:ring-primary-200
                           dark:border-ink-700 dark:bg-ink-900 dark:text-ink-100 dark:placeholder:text-ink-400"
                >
                <button type="submit"
                        class="shrink-0 rounded-lg bg-primary-600 px-4 py-2.5 text-sm font-semibold text-white
                               transition hover:bg-primary-700">
                    Cari
                </button>
            </form>
        </div>
    </section>

    {{-- ================= SUBJECT GRID ================= --}}
    <section class="mx-auto max-w-6xl px-4 py-10 sm:px-6 sm:py-14">
        <div class="mb-6 flex items-end justify-between">
            <h2 class="font-display text-lg font-semibold text-slate-800 dark:text-ink-100 sm:text-xl">
                Pilih Mata Pelajaran
            </h2>
        </div>

       
      

        <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 lg:grid-cols-4">
            @foreach ($subjects as $s)
                <x-subject-card
                    :code="$s['code']"
                    :name="$s['name']"
                    :category="$s['category']"
                    :topicsCount="$s->topic_count"
                    :href="route('subjects.show', $s) ?? '#'"
                />
            @endforeach
        </div>
    </section>

    {{-- ================= WHY SECTION ================= --}}
    <section class="border-t border-slate-200 bg-white dark:border-ink-700 dark:bg-ink-900">
        <div class="mx-auto grid max-w-6xl gap-6 px-4 py-10 sm:grid-cols-3 sm:px-6 sm:py-14">
            @foreach ([
                ['title' => 'Padat, tanpa basa-basi', 'body' => 'Setiap bab dirangkum jadi poin-poin inti yang bisa dibaca ulang menjelang ujian.'],
                ['title' => 'Ditandai per bab', 'body' => 'Lihat estimasi waktu baca dan tandai bab yang sudah kamu pelajari.'],
                ['title' => 'Nyaman siang atau malam', 'body' => 'Mode gelap otomatis mengikuti pengaturan perangkatmu, atau ganti manual kapan saja.'],
            ] as $f)
                <div>
                    <span class="tab-badge bg-primary-50 text-primary-700 dark:bg-primary-900/30 dark:text-primary-300">✓</span>
                    <h3 class="mt-3 font-display text-sm font-semibold text-slate-800 dark:text-ink-100">{{ $f['title'] }}</h3>
                    <p class="mt-1 text-sm text-slate-500 dark:text-ink-400">{{ $f['body'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection
