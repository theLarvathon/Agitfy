# Rangkuman Kelas 12 — Frontend (Laravel 12 + Tailwind)

## Cara lihat hasilnya cepat
Buka `preview/preview.html` langsung di browser (double-click). File ini berdiri sendiri
(pakai Tailwind CDN) supaya bisa dilihat tanpa perlu install project Laravel — flow
landing → mapel → rangkuman + toggle dark mode sudah interaktif di situ.

## Struktur untuk project Laravel
Copy folder `resources/` dan `routes/web.php` ke root project Laravel 12 kamu (timpa file
yang sudah ada bila perlu), lalu:

```
resources/
  css/app.css              -> import di app.blade.php lewat @vite (ganti tag <link> manual)
  views/
    layouts/app.blade.php  -> layout utama, tempat dark mode di-inisialisasi
    components/
      navbar.blade.php
      footer.blade.php
      subject-card.blade.php
      topic-item.blade.php
      callout.blade.php
      breadcrumb.blade.php
    home.blade.php          -> landing page
    subjects/show.blade.php -> daftar bab per mapel
    topics/show.blade.php   -> halaman rangkuman
routes/web.php              -> nama route yang dipakai di dalam view (home, subjects.show, topics.show)
tailwind.config.js          -> token warna & font, sudah darkMode: 'class'
```

Setelah `npm install tailwindcss` di project asli, aktifkan build asset dengan:
```blade
@vite(['resources/css/app.css'])
```
menggantikan tag `<link>` manual di `layouts/app.blade.php`.

## Kenapa dibangun begini (biar gampang di-maintain)

- **Semua bagian berulang jadi Blade component** (`<x-subject-card>`, `<x-topic-item>`,
  `<x-callout>`, `<x-breadcrumb>`). Menambah mapel atau bab baru = menambah data,
  bukan menulis HTML baru.
- **Data dummy ditandai jelas** (`??=` di tiap view) supaya gampang dicabut begitu
  Controller/Model sudah siap — tinggal kirim variabel dengan nama yang sama.
- **Warna & font cuma didefinisikan sekali** di `tailwind.config.js` (`primary`,
  `accent`, `ink`) dan dipakai lewat utility class — ganti nuansa warna cukup edit
  satu file, tidak perlu cari-cari hex code di banyak tempat.
- **Dark mode** pakai `class` strategy Tailwind + Alpine (`x-data`/`localStorage`),
  jadi tidak butuh reload halaman dan preferensi tersimpan di browser siswa.
- **Mobile-first**: semua layout dasar ditulis tanpa prefix (otomatis untuk HP),
  baru ditambah `sm:`/`lg:` untuk memperluas ke tablet/desktop (grid 2 kolom → 3 → 4
  di landing, TOC yang baru muncul di layar besar pada halaman rangkuman).

## Konsep visual (ringkas)
- **Warna**: biru (`primary`, #1B4D89) sebagai warna utama/chrome, hijau (`accent`,
  #1FAE72) untuk aksi & progres (baca "tanda sudah dibaca").
- **Font**: Lexend untuk judul (dirancang untuk keterbacaan — cocok untuk konten belajar),
  Inter untuk teks isi rangkuman, JetBrains Mono untuk kode mapel/nomor bab/menit baca.
- **Elemen ciri khas**: badge "tab index" ala pembatas buku/binder (kode mapel,
  nomor bab) yang warnanya dikelompokkan per kategori (Sains = biru, Sosial = hijau),
  supaya grid mapel di landing langsung terasa terorganisir seperti map pelajaran asli,
  bukan sekadar kotak generik.

## Catatan penting: Tailwind v4 (default di Laravel 12)

Laravel 12 men-scaffold project baru dengan **Tailwind v4**, yang cara konfigurasinya beda
dari v3:

- Tidak pakai `tailwind.config.js` lagi (sudah dihapus dari paket ini) — semua warna & font
  custom (`primary`, `accent`, `ink`, `font-display`, dst.) sekarang didefinisikan lewat
  blok `@theme { ... }` langsung di `resources/css/app.css`.
- `@tailwind base/components/utilities` diganti satu baris `@import "tailwindcss";`.
- Dark mode berbasis class (`.dark` di `<html>`, dikontrol Alpine) butuh baris tambahan:
  `@custom-variant dark (&:where(.dark, .dark *));` — tanpa ini, `dark:` akan mengikuti
  pengaturan sistem, bukan toggle di navbar.

Pastikan juga `vite.config.js` di project kamu sudah include plugin `@tailwindcss/vite()`
(sudah default kalau project di-generate lewat `laravel new` versi terbaru). Kalau masih
pakai Tailwind v3 di project kamu, tinggal balikkan `app.css` ke sintaks lama
(`@tailwind base;` dst.) dan aktifkan lagi `tailwind.config.js` versi sebelumnya.
