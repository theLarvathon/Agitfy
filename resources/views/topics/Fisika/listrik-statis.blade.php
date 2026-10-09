@extends('layouts.app')

@section('title', $topic['title'] ?? 'Rangkuman')

@section('content')

    @php
        // Would normally come from TopicController@show
        $subject ??= ['code' => 'MTK', 'name' => 'Matematika'];
        $topic ??= ['number' => 'Bab 4', 'title' => 'Turunan Fungsi', 'read' => 10];
        $toc ??= ['Konsep Dasar Turunan', 'Aturan Turunan', 'Turunan Fungsi Trigonometri', 'Aplikasi Turunan'];
    @endphp

    <div class="mx-auto max-w-6xl px-4 py-8 sm:px-6 sm:py-12">

        <x-breadcrumb :items="[
            ['label' => 'Beranda', 'href' => route('home')],
            ['label' => $subject['name'], 'href' => route('subjects.show', $subject)],
            ['label' => $topic['number']],
        ]" />

        <div class="lg:grid lg:grid-cols-[1fr_240px] lg:items-start lg:gap-10">

            {{-- ============ MAIN CONTENT ============ --}}
            <article class="max-w-2xl">
                <div class="mb-6 flex items-center gap-3">
                    <span class="tab-badge bg-accent-500 font-mono text-white">{{ $topic['number'] }}</span>
                    <span class="font-mono text-xs text-slate-400 dark:text-ink-400">{{ $topic['read'] }} menit baca</span>
                </div>

                <h1 class="font-display text-2xl font-bold text-slate-900 dark:text-ink-100 sm:text-3xl">
                    {{ $topic['title'] }}
                </h1>

                <div
                    class="prose-summary mt-6 space-y-5 text-sm leading-relaxed text-slate-700 dark:text-ink-100 sm:text-base">

                    <h2>1. Pengertian Listrik Statis</h2>

                    <p>Listrik statis adalah kumpulan muatan listrik yang berada dalam keadaan relatif diam pada suatu
                        benda. Muatan listrik terdiri dari dua jenis, yaitu muatan positif dan muatan negatif.</p>

                    <h3>Jenis Muatan Listrik</h3>

                    <ul>
                        <li>Muatan positif (+), terjadi ketika suatu benda kehilangan elektron.</li>
                        <li>Muatan negatif (−), terjadi ketika suatu benda mendapatkan elektron.</li>
                    </ul>

                    <p>Interaksi antara muatan:</p>

                    <ul>
                        <li>Muatan sejenis → tolak-menolak.</li>
                        <li>Muatan berbeda jenis → tarik-menarik.</li>
                    </ul>

                    <div class="note">
                        <strong>Ingat:</strong> Elektron bermuatan negatif. Jika benda kehilangan elektron, benda menjadi
                        positif. Jika benda mendapatkan elektron, benda menjadi negatif.
                    </div>

                    <h2>2. Muatan Listrik</h2>

                    <p>Muatan listrik dilambangkan dengan <strong>Q</strong> dan memiliki satuan Coulomb (C).</p>

                    <p>Muatan elementer elektron dan proton memiliki besar:</p>

                    <p><strong>e = 1,6 × 10<sup>−19</sup> C</strong></p>

                    <p>Jumlah muatan dapat dihitung menggunakan:</p>

                    <p><strong>Q = n e</strong></p>

                    <ul>
                        <li><strong>Q</strong> = muatan listrik (C)</li>
                        <li><strong>n</strong> = jumlah elektron</li>
                        <li><strong>e</strong> = muatan elementer (1,6 × 10<sup>−19</sup> C)</li>
                    </ul>

                    <h3>Contoh</h3>

                    <p>Sebuah benda mendapatkan 2 × 10<sup>12</sup> elektron. Tentukan muatannya.</p>

                    <p>Q = n e</p>

                    <p>Q = (2 × 10<sup>12</sup>)(1,6 × 10<sup>−19</sup>)</p>

                    <p>Q = 3,2 × 10<sup>−7</sup> C</p>

                    <p>Karena benda mendapatkan elektron, muatannya negatif.</p>

                    <p><strong>Q = −3,2 × 10<sup>−7</sup> C</strong></p>

                    <h2>3. Hukum Coulomb</h2>

                    <p>Hukum Coulomb digunakan untuk menentukan besar gaya listrik antara dua muatan.</p>

                    <p><strong>F = k |Q<sub>1</sub>Q<sub>2</sub>| / r<sup>2</sup></strong></p>

                    <ul>
                        <li><strong>F</strong> = gaya listrik (N)</li>
                        <li><strong>Q<sub>1</sub>, Q<sub>2</sub></strong> = muatan listrik (C)</li>
                        <li><strong>r</strong> = jarak antara kedua muatan (m)</li>
                        <li><strong>k</strong> = konstanta Coulomb = 9 × 10<sup>9</sup> N m<sup>2</sup>/C<sup>2</sup></li>
                    </ul>

                    <h3>Hubungan Gaya dengan Jarak</h3>

                    <p>Dari persamaan Coulomb:</p>

                    <p><strong>F ∝ 1/r<sup>2</sup></strong></p>

                    <p>Artinya, gaya listrik berbanding terbalik dengan kuadrat jarak.</p>

                    <p>Jika jarak antara dua muatan menjadi 2 kali lebih besar:</p>

                    <p><strong>F' = F / 2<sup>2</sup> = 1/4 F</strong></p>

                    <div class="note">
                        <strong>Ingat:</strong> Jika jarak menjadi 2 kali, gaya menjadi 1/4 kali. Jika jarak menjadi 3 kali,
                        gaya menjadi 1/9 kali.
                    </div>

                    <h2>4. Medan Listrik</h2>

                    <p>Medan listrik adalah daerah di sekitar muatan listrik yang masih dipengaruhi oleh gaya listrik.</p>

                    <p>Medan listrik dilambangkan dengan <strong>E</strong> dan memiliki satuan N/C.</p>

                    <p>Medan listrik yang dihasilkan oleh sebuah muatan titik:</p>

                    <p><strong>E = k |Q| / r<sup>2</sup></strong></p>

                    <p>Hubungan antara gaya listrik dan medan listrik:</p>

                    <p><strong>F = qE</strong></p>

                    <ul>
                        <li><strong>E</strong> = medan listrik (N/C)</li>
                        <li><strong>F</strong> = gaya listrik (N)</li>
                        <li><strong>q</strong> = muatan yang berada dalam medan (C)</li>
                    </ul>

                    <h3>Arah Medan Listrik</h3>

                    <p>Arah medan listrik didefinisikan sebagai arah gaya yang dialami oleh muatan uji positif.</p>

                    <ul>
                        <li>Muatan positif → garis medan keluar dari muatan.</li>
                        <li>Muatan negatif → garis medan menuju muatan.</li>
                    </ul>

                    <div class="note">
                        <strong>Cara mengingat:</strong> Muatan positif "mengeluarkan" garis medan, sedangkan muatan negatif
                        "menerima" garis medan.
                    </div>

                    <h2>5. Medan Listrik oleh Beberapa Muatan</h2>

                    <p>Jika terdapat lebih dari satu muatan, medan listrik total diperoleh dengan menjumlahkan medan listrik
                        dari setiap muatan secara vektor.</p>

                    <p><strong>E<sub>total</sub> = E<sub>1</sub> + E<sub>2</sub> + E<sub>3</sub> + ...</strong></p>

                    <p>Arah setiap medan harus diperhatikan sebelum melakukan penjumlahan.</p>

                    <h3>Contoh Sederhana</h3>

                    <p>Di suatu titik terdapat medan listrik 10 N/C ke kanan dan 4 N/C ke kiri.</p>

                    <p>Karena arahnya berlawanan:</p>

                    <p><strong>E<sub>total</sub> = 10 − 4 = 6 N/C</strong></p>

                    <p>Jadi, medan listrik total adalah <strong>6 N/C ke kanan</strong>.</p>

                    <h2>6. Potensial Listrik</h2>

                    <p>Potensial listrik adalah energi potensial listrik per satuan muatan.</p>

                    <p>Potensial listrik dilambangkan dengan <strong>V</strong> dan memiliki satuan Volt (V).</p>

                    <p>Potensial listrik akibat sebuah muatan titik:</p>

                    <p><strong>V = kQ / r</strong></p>

                    <ul>
                        <li><strong>V</strong> = potensial listrik (V)</li>
                        <li><strong>Q</strong> = muatan sumber (C)</li>
                        <li><strong>r</strong> = jarak dari muatan (m)</li>
                        <li><strong>k</strong> = konstanta Coulomb</li>
                    </ul>

                    <div class="note">
                        <strong>Perbedaan penting:</strong> Medan listrik berbanding terbalik dengan r<sup>2</sup>,
                        sedangkan potensial listrik berbanding terbalik dengan r.
                    </div>

                    <h2>7. Energi Potensial Listrik</h2>

                    <p>Energi potensial listrik adalah energi yang dimiliki suatu muatan karena posisinya dalam medan
                        listrik.</p>

                    <p>Untuk dua muatan:</p>

                    <p><strong>E<sub>p</sub> = k Q<sub>1</sub>Q<sub>2</sub> / r</strong></p>

                    <p>Hubungan energi potensial dengan potensial listrik:</p>

                    <p><strong>E<sub>p</sub> = qV</strong></p>

                    <ul>
                        <li><strong>E<sub>p</sub></strong> = energi potensial listrik (J)</li>
                        <li><strong>q</strong> = muatan (C)</li>
                        <li><strong>V</strong> = potensial listrik (V)</li>
                    </ul>

                    <h2>8. Hubungan Medan Listrik dan Potensial</h2>

                    <p>Pada medan listrik seragam, hubungan antara medan listrik dan beda potensial dapat dituliskan:</p>

                    <p><strong>E = ΔV / d</strong></p>

                    <p>atau:</p>

                    <p><strong>ΔV = Ed</strong></p>

                    <ul>
                        <li><strong>E</strong> = medan listrik (N/C atau V/m)</li>
                        <li><strong>ΔV</strong> = beda potensial (V)</li>
                        <li><strong>d</strong> = jarak (m)</li>
                    </ul>

                    <h2>9. Kapasitor</h2>

                    <p>Kapasitor adalah komponen listrik yang dapat menyimpan muatan dan energi listrik.</p>

                    <p>Kemampuan kapasitor dalam menyimpan muatan disebut kapasitansi.</p>

                    <p><strong>C = Q / V</strong></p>

                    <ul>
                        <li><strong>C</strong> = kapasitansi (F)</li>
                        <li><strong>Q</strong> = muatan (C)</li>
                        <li><strong>V</strong> = beda potensial (V)</li>
                    </ul>

                    <p>Satuan kapasitansi adalah <strong>Farad (F)</strong>.</p>

                    <h2>10. Kapasitor Keping Sejajar</h2>

                    <p>Untuk kapasitor keping sejajar tanpa bahan dielektrik:</p>

                    <p><strong>C = ε<sub>0</sub>A / d</strong></p>

                    <p>Jika terdapat bahan dielektrik:</p>

                    <p><strong>C = κ ε<sub>0</sub>A / d</strong></p>

                    <ul>
                        <li><strong>A</strong> = luas keping (m<sup>2</sup>)</li>
                        <li><strong>d</strong> = jarak antara keping (m)</li>
                        <li><strong>ε<sub>0</sub></strong> = permitivitas vakum</li>
                        <li><strong>κ</strong> = konstanta dielektrik</li>
                    </ul>

                    <h3>Hubungan Kapasitansi</h3>

                    <p>Dari persamaan tersebut:</p>

                    <ul>
                        <li>Luas keping semakin besar → kapasitansi semakin besar.</li>
                        <li>Jarak antarkeping semakin besar → kapasitansi semakin kecil.</li>
                        <li>Dielektrik dengan κ lebih besar → kapasitansi semakin besar.</li>
                    </ul>

                    <h2>11. Energi yang Tersimpan dalam Kapasitor</h2>

                    <p>Energi yang tersimpan dalam kapasitor dapat dihitung dengan beberapa bentuk persamaan:</p>

                    <p><strong>E = 1/2 CV<sup>2</sup></strong></p>

                    <p><strong>E = 1/2 QV</strong></p>

                    <p><strong>E = Q<sup>2</sup> / 2C</strong></p>

                    <p>Ketiga persamaan tersebut memberikan hasil yang sama. Pilih persamaan berdasarkan besaran yang
                        diketahui dalam soal.</p>

                    <h2>12. Strategi Mengerjakan Soal Listrik Statis</h2>

                    <ol>
                        <li>Tuliskan besaran yang diketahui.</li>
                        <li>Pastikan semua satuan sudah sesuai dengan SI.</li>
                        <li>Tentukan apa yang ditanyakan.</li>
                        <li>Pilih rumus berdasarkan besaran yang tersedia.</li>
                        <li>Perhatikan arah gaya atau medan jika soal melibatkan vektor.</li>
                        <li>Periksa kembali satuan dan hasil akhir.</li>
                    </ol>

                    <h2>13. Rumus Penting</h2>

                    <table>
                        <thead>
                            <tr>
                                <th>Konsep</th>
                                <th>Rumus</th>
                                <th>Satuan utama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Muatan</td>
                                <td>Q = ne</td>
                                <td>C</td>
                            </tr>
                            <tr>
                                <td>Gaya Coulomb</td>
                                <td>F = k|Q<sub>1</sub>Q<sub>2</sub>|/r<sup>2</sup></td>
                                <td>N</td>
                            </tr>
                            <tr>
                                <td>Medan listrik</td>
                                <td>E = k|Q|/r<sup>2</sup></td>
                                <td>N/C</td>
                            </tr>
                            <tr>
                                <td>Gaya dalam medan</td>
                                <td>F = qE</td>
                                <td>N</td>
                            </tr>
                            <tr>
                                <td>Potensial listrik</td>
                                <td>V = kQ/r</td>
                                <td>V</td>
                            </tr>
                            <tr>
                                <td>Energi potensial</td>
                                <td>E<sub>p</sub> = qV</td>
                                <td>J</td>
                            </tr>
                            <tr>
                                <td>Kapasitansi</td>
                                <td>C = Q/V</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>Kapasitor keping sejajar</td>
                                <td>C = ε<sub>0</sub>A/d</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>Energi kapasitor</td>
                                <td>E = 1/2 CV<sup>2</sup></td>
                                <td>J</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>14. Ringkasan Super Singkat</h2>

                    <p><strong>Muatan:</strong> kehilangan elektron → positif, mendapatkan elektron → negatif.</p>

                    <p><strong>Coulomb:</strong> semakin besar muatan, semakin besar gaya. Semakin jauh jaraknya, semakin
                        kecil gaya.</p>

                    <p><strong>Medan:</strong> berasal dari muatan dan arahnya keluar dari positif serta menuju negatif.</p>

                    <p><strong>Potensial:</strong> energi potensial per satuan muatan.</p>

                    <p><strong>Kapasitor:</strong> menyimpan muatan dan energi listrik.</p>

                    <div class="note">
                        <strong>Empat hubungan yang wajib diingat:</strong><br>
                        F ∝ Q<sub>1</sub>Q<sub>2</sub>/r<sup>2</sup><br>
                        E ∝ Q/r<sup>2</sup><br>
                        V ∝ Q/r<br>
                        C ∝ A/d
                    </div>

                </div>

                <div class="mt-10 flex items-center justify-between border-t border-slate-200 pt-4 dark:border-ink-700">
                    <a href="{{ route('subjects.show', $subject) }}"
                        class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-300">
                        ← Kembali ke daftar bab
                    </a>
                    <button type="button"
                        class="rounded-lg bg-accent-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-accent-600">
                        Tandai sudah dibaca
                    </button>
                </div>
            </article>

            {{-- ============ TOC — sticky on desktop, hidden on mobile ============ --}}
            <aside class="hidden lg:block">
                <div class="surface sticky top-20 rounded-xl p-4">
                    <p
                        class="mb-3 font-mono text-[11px] font-bold uppercase tracking-wide text-slate-400 dark:text-ink-400">
                        Daftar Isi
                    </p>
                    <ul class="space-y-2 text-sm">
                        @foreach ($toc as $i => $section)
                            <li>
                                <a href="#{{ \Illuminate\Support\Str::slug($section) }}"
                                    class="text-slate-500 hover:text-primary-600 dark:text-ink-400 dark:hover:text-primary-300">
                                    {{ $i + 1 }}. {{ $section }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>

@endsection
