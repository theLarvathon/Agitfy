```blade
@extends('layouts.app')

@section('title', 'Arus Bolak-Balik (AC)')

@section('content')

    <div class="mx-auto max-w-4xl px-4 py-8 sm:px-6 sm:py-12">

        {{-- Breadcrumb --}}
        <x-breadcrumb :items="[
            ['label' => 'Beranda', 'href' => route('home')],
            ['label' => $subject->name, 'href' => route('subjects.show', $subject)],
            ['label' => $topic->title],
        ]" />

        {{-- Header --}}
        <header class="mb-8">
            <div class="mb-3 flex items-center gap-3">
                <span class="tab-badge bg-primary-600 text-white">
                    Bab {{ $topic->number }}
                </span>

                <span class="text-sm text-slate-500 dark:text-ink-400">
                    {{ $subject->name }}
                </span>
            </div>

            <h1 class="font-display text-3xl font-bold text-slate-900 dark:text-ink-100">
                Arus Bolak-Balik (AC)
            </h1>

            <p class="mt-2 text-slate-600 dark:text-ink-400">
                Rangkuman materi arus bolak-balik untuk Kelas 12.
            </p>
        </header>


        {{-- ============ DAFTAR ISI — mobile-first, full width ============ --}}
        <aside class="hidden lg:block">
            <div class="surface mb-8 rounded-xl p-4 sm:p-5 lg:p-6">

                <p
                    class="mb-3 font-mono text-[11px] font-bold uppercase tracking-wide
               text-slate-400 dark:text-ink-400">
                    Daftar Isi
                </p>

                <ol class="space-y-2 text-sm sm:text-[15px]">
                    <li>
                        <a href="#pengertian-arus-bolak-balik"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            1. Pengertian Arus Bolak-Balik
                        </a>
                    </li>

                    <li>
                        <a href="#arus-dan-tegangan-ac"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            2. Arus dan Tegangan AC
                        </a>
                    </li>

                    <li>
                        <a href="#nilai-maksimum"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            3. Nilai Maksimum
                        </a>
                    </li>

                    <li>
                        <a href="#nilai-efektif-rms"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            4. Nilai Efektif (RMS)
                        </a>
                    </li>

                    <li>
                        <a href="#resistor-pada-rangkaian-ac"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            5. Resistor pada Rangkaian AC
                        </a>
                    </li>

                    <li>
                        <a href="#induktor-pada-rangkaian-ac"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            6. Induktor pada Rangkaian AC
                        </a>
                    </li>

                    <li>
                        <a href="#kapasitor-pada-rangkaian-ac"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            7. Kapasitor pada Rangkaian AC
                        </a>
                    </li>

                    <li>
                        <a href="#rangkaian-rlc-seri"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            8. Rangkaian RLC Seri
                        </a>
                    </li>

                    <li>
                        <a href="#impedansi"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            9. Impedansi
                        </a>
                    </li>

                    <li>
                        <a href="#resonansi"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            10. Resonansi
                        </a>
                    </li>

                    <li>
                        <a href="#daya-pada-rangkaian-ac"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            11. Daya pada Rangkaian AC
                        </a>
                    </li>

                    <li>
                        <a href="#transformator"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            12. Transformator
                        </a>
                    </li>

                    <li>
                        <a href="#rumus-penting"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            13. Rumus Penting
                        </a>
                    </li>

                    <li>
                        <a href="#ringkasan-super-singkat"
                            class="block text-slate-500 transition-colors
                       hover:text-primary-600
                       dark:text-ink-400
                       dark:hover:text-primary-300">
                            14. Ringkasan Super Singkat
                        </a>
                    </li>
                </ol>

            </div>
        </aside>
        {{-- Materi --}}
        <article class="prose prose-slate max-w-none dark:prose-invert">

            <section id="pengertian-ac">

                <h2>1. Pengertian Arus Bolak-Balik</h2>

                <p>
                    Arus bolak-balik atau <strong>Alternating Current (AC)</strong>
                    adalah arus listrik yang besar dan arahnya berubah secara
                    periodik terhadap waktu.
                </p>

                <p>
                    Berbeda dengan arus searah (DC), arus AC dapat berubah arah
                    secara terus-menerus. Listrik yang digunakan pada jaringan
                    rumah umumnya merupakan listrik AC.
                </p>

                <div class="surface rounded-xl p-4">
                    <strong>Ingat:</strong>
                    AC → arah dan besar arus berubah terhadap waktu.
                    DC → arah arus tetap.
                </div>

            </section>


            <section id="arus-dan-tegangan-ac">

                <h2>2. Arus dan Tegangan AC</h2>

                <p>
                    Arus dan tegangan AC ideal umumnya berbentuk gelombang sinus.
                </p>

                <p class="text-center text-lg font-semibold">
                    i = I<sub>m</sub> sin(ωt)
                </p>

                <p class="text-center text-lg font-semibold">
                    v = V<sub>m</sub> sin(ωt)
                </p>

                <ul>
                    <li>
                        <strong>i</strong> = arus sesaat (A)
                    </li>
                    <li>
                        <strong>I<sub>m</sub></strong> = arus maksimum (A)
                    </li>
                    <li>
                        <strong>v</strong> = tegangan sesaat (V)
                    </li>
                    <li>
                        <strong>V<sub>m</sub></strong> = tegangan maksimum (V)
                    </li>
                    <li>
                        <strong>ω</strong> = frekuensi sudut (rad/s)
                    </li>
                    <li>
                        <strong>t</strong> = waktu (s)
                    </li>
                </ul>

            </section>


            <section id="nilai-maksimum">

                <h2>3. Nilai Maksimum</h2>

                <p>
                    Nilai maksimum adalah nilai terbesar yang dapat dicapai
                    oleh arus atau tegangan AC.
                </p>

                <p>
                    Arus maksimum:
                </p>

                <p class="text-center text-lg font-semibold">
                    I<sub>m</sub>
                </p>

                <p>
                    Tegangan maksimum:
                </p>

                <p class="text-center text-lg font-semibold">
                    V<sub>m</sub>
                </p>

                <p>
                    Nilai maksimum tidak sama dengan nilai yang biasanya
                    ditampilkan pada alat ukur listrik rumah tangga.
                </p>

            </section>


            <section id="nilai-rms">

                <h2>4. Nilai Efektif (RMS)</h2>

                <p>
                    Nilai efektif atau <strong>RMS (Root Mean Square)</strong>
                    adalah nilai AC yang memberikan efek yang sama dengan
                    arus atau tegangan DC tertentu.
                </p>

                <p class="text-center text-lg font-semibold">
                    I<sub>rms</sub> = I<sub>m</sub> / √2
                </p>

                <p class="text-center text-lg font-semibold">
                    V<sub>rms</sub> = V<sub>m</sub> / √2
                </p>

                <p>
                    Sebaliknya:
                </p>

                <p class="text-center text-lg font-semibold">
                    I<sub>m</sub> = √2 I<sub>rms</sub>
                </p>

                <p class="text-center text-lg font-semibold">
                    V<sub>m</sub> = √2 V<sub>rms</sub>
                </p>

                <div class="surface rounded-xl p-4">
                    <strong>Contoh penting:</strong>
                    Jika tegangan rumah dinyatakan 220 V AC, nilai 220 V
                    merupakan nilai efektif (RMS), bukan tegangan maksimum.
                </div>

                <h3>Contoh</h3>

                <p>
                    Jika tegangan efektif adalah 220 V, tentukan tegangan
                    maksimumnya.
                </p>

                <p>
                    V<sub>m</sub> = √2 V<sub>rms</sub>
                </p>

                <p>
                    V<sub>m</sub> = √2 × 220
                </p>

                <p>
                    V<sub>m</sub> ≈ 311 V
                </p>

                <p>
                    Jadi, tegangan maksimum sekitar
                    <strong>311 V</strong>.
                </p>

            </section>


            <section id="resistor-ac">

                <h2>5. Resistor pada Rangkaian AC</h2>

                <p>
                    Pada resistor murni, tegangan dan arus memiliki fase yang sama.
                </p>

                <p>
                    Artinya, ketika tegangan maksimum, arus juga maksimum pada
                    saat yang sama.
                </p>

                <p class="text-center text-lg font-semibold">
                    V = IR
                </p>

                <p>
                    Hubungan RMS juga mengikuti hukum Ohm:
                </p>

                <p class="text-center text-lg font-semibold">
                    V<sub>rms</sub> = I<sub>rms</sub> R
                </p>

                <div class="surface rounded-xl p-4">
                    <strong>Resistor:</strong>
                    arus dan tegangan <strong>sefase</strong>.
                </div>

            </section>


            <section id="induktor-ac">

                <h2>6. Induktor pada Rangkaian AC</h2>

                <p>
                    Induktor adalah komponen yang memiliki induktansi dan
                    menimbulkan hambatan terhadap perubahan arus AC.
                </p>

                <p>
                    Hambatan yang muncul akibat induktor disebut
                    <strong>reaktansi induktif</strong>.
                </p>

                <p class="text-center text-lg font-semibold">
                    X<sub>L</sub> = ωL
                </p>

                <p>
                    Karena:
                </p>

                <p class="text-center text-lg font-semibold">
                    ω = 2πf
                </p>

                <p>
                    maka:
                </p>

                <p class="text-center text-lg font-semibold">
                    X<sub>L</sub> = 2πfL
                </p>

                <ul>
                    <li>X<sub>L</sub> = reaktansi induktif (Ω)</li>
                    <li>f = frekuensi (Hz)</li>
                    <li>L = induktansi (H)</li>
                </ul>

                <h3>Hubungan Fase</h3>

                <p>
                    Pada induktor murni, <strong>arus tertinggal terhadap
                        tegangan sebesar 90°</strong>.
                </p>

                <div class="surface rounded-xl p-4">
                    <strong>Ingat:</strong>
                    Pada induktor, <strong>V mendahului I</strong> sebesar 90°.
                </div>

                <h3>Arus pada Induktor</h3>

                <p class="text-center text-lg font-semibold">
                    I<sub>rms</sub> = V<sub>rms</sub> / X<sub>L</sub>
                </p>

            </section>


            <section id="kapasitor-ac">

                <h2>7. Kapasitor pada Rangkaian AC</h2>

                <p>
                    Kapasitor juga memberikan hambatan terhadap arus AC.
                    Hambatan ini disebut <strong>reaktansi kapasitif</strong>.
                </p>

                <p class="text-center text-lg font-semibold">
                    X<sub>C</sub> = 1 / (ωC)
                </p>

                <p>
                    Karena ω = 2πf:
                </p>

                <p class="text-center text-lg font-semibold">
                    X<sub>C</sub> = 1 / (2πfC)
                </p>

                <ul>
                    <li>X<sub>C</sub> = reaktansi kapasitif (Ω)</li>
                    <li>f = frekuensi (Hz)</li>
                    <li>C = kapasitansi (F)</li>
                </ul>

                <h3>Hubungan Fase</h3>

                <p>
                    Pada kapasitor murni, <strong>arus mendahului tegangan
                        sebesar 90°</strong>.
                </p>

                <div class="surface rounded-xl p-4">
                    <strong>Ingat:</strong>
                    Pada kapasitor, <strong>I mendahului V</strong> sebesar 90°.
                </div>

                <h3>Arus pada Kapasitor</h3>

                <p class="text-center text-lg font-semibold">
                    I<sub>rms</sub> = V<sub>rms</sub> / X<sub>C</sub>
                </p>

            </section>


            <section id="rangkaian-rlc">

                <h2>8. Rangkaian RLC Seri</h2>

                <p>
                    Rangkaian RLC seri terdiri dari resistor (R), induktor (L),
                    dan kapasitor (C) yang dihubungkan secara seri.
                </p>

                <p>
                    Pada rangkaian ini, resistor tidak menyebabkan pergeseran
                    fase, sedangkan induktor dan kapasitor menyebabkan
                    pergeseran fase yang berlawanan.
                </p>

                <p>
                    Selisih reaktansi:
                </p>

                <p class="text-center text-lg font-semibold">
                    X<sub>L</sub> − X<sub>C</sub>
                </p>

                <p>
                    Impedansi rangkaian RLC:
                </p>

                <p class="text-center text-lg font-semibold">
                    Z = √(R² + (X<sub>L</sub> − X<sub>C</sub>)²)
                </p>

                <p>
                    Arus efektif:
                </p>

                <p class="text-center text-lg font-semibold">
                    I<sub>rms</sub> = V<sub>rms</sub> / Z
                </p>

            </section>


            <section id="impedansi">

                <h2>9. Impedansi</h2>

                <p>
                    Impedansi adalah hambatan total yang dialami arus AC
                    dalam suatu rangkaian.
                </p>

                <p>
                    Simbol impedansi adalah <strong>Z</strong> dan satuannya
                    Ohm (Ω).
                </p>

                <p>
                    Untuk rangkaian RLC seri:
                </p>

                <p class="text-center text-lg font-semibold">
                    Z = √(R² + (X<sub>L</sub> − X<sub>C</sub>)²)
                </p>

                <h3>Kondisi Rangkaian</h3>

                <ul>
                    <li>
                        Jika X<sub>L</sub> &gt; X<sub>C</sub> →
                        rangkaian bersifat induktif.
                    </li>

                    <li>
                        Jika X<sub>L</sub> &lt; X<sub>C</sub> →
                        rangkaian bersifat kapasitif.
                    </li>

                    <li>
                        Jika X<sub>L</sub> = X<sub>C</sub> →
                        rangkaian mengalami resonansi.
                    </li>
                </ul>

            </section>


            <section id="resonansi">

                <h2>10. Resonansi</h2>

                <p>
                    Resonansi pada rangkaian RLC terjadi ketika reaktansi
                    induktif sama dengan reaktansi kapasitif.
                </p>

                <p class="text-center text-lg font-semibold">
                    X<sub>L</sub> = X<sub>C</sub>
                </p>

                <p>
                    Karena:
                </p>

                <p class="text-center text-lg">
                    2πfL = 1 / (2πfC)
                </p>

                <p>
                    diperoleh frekuensi resonansi:
                </p>

                <p class="text-center text-lg font-semibold">
                    f<sub>r</sub> =
                    1 / (2π√LC)
                </p>

                <h3>Saat Resonansi</h3>

                <ul>
                    <li>X<sub>L</sub> = X<sub>C</sub></li>
                    <li>X<sub>L</sub> − X<sub>C</sub> = 0</li>
                    <li>Z = R</li>
                    <li>Arus rangkaian menjadi maksimum.</li>
                    <li>Faktor daya menjadi 1.</li>
                </ul>

                <div class="surface rounded-xl p-4">
                    <strong>Kunci resonansi:</strong>
                    induktor dan kapasitor saling meniadakan efek reaktifnya.
                </div>

            </section>


            <section id="daya-ac">

                <h2>11. Daya pada Rangkaian AC</h2>

                <p>
                    Daya listrik pada rangkaian AC dipengaruhi oleh tegangan,
                    arus, dan beda fase antara keduanya.
                </p>

                <p class="text-center text-lg font-semibold">
                    P = V<sub>rms</sub>I<sub>rms</sub> cos φ
                </p>

                <p>
                    Keterangan:
                </p>

                <ul>
                    <li>P = daya rata-rata (W)</li>
                    <li>V<sub>rms</sub> = tegangan efektif (V)</li>
                    <li>I<sub>rms</sub> = arus efektif (A)</li>
                    <li>cos φ = faktor daya</li>
                </ul>

                <h3>Faktor Daya</h3>

                <p>
                    Faktor daya menunjukkan seberapa besar daya listrik
                    yang benar-benar digunakan sebagai daya aktif.
                </p>

                <p class="text-center text-lg font-semibold">
                    cos φ = R / Z
                </p>

                <p>
                    Pada resistor murni:
                </p>

                <p class="text-center text-lg font-semibold">
                    cos φ = 1
                </p>

                <p>
                    sehingga:
                </p>

                <p class="text-center text-lg font-semibold">
                    P = V<sub>rms</sub>I<sub>rms</sub>
                </p>

            </section>


            <section id="transformator">

                <h2>12. Transformator</h2>

                <p>
                    Transformator adalah alat yang digunakan untuk menaikkan
                    atau menurunkan tegangan AC melalui induksi elektromagnetik.
                </p>

                <p>
                    Perbandingan tegangan dengan jumlah lilitan:
                </p>

                <p class="text-center text-lg font-semibold">
                    V<sub>s</sub> / V<sub>p</sub>
                    =
                    N<sub>s</sub> / N<sub>p</sub>
                </p>

                <ul>
                    <li>V<sub>p</sub> = tegangan primer</li>
                    <li>V<sub>s</sub> = tegangan sekunder</li>
                    <li>N<sub>p</sub> = jumlah lilitan primer</li>
                    <li>N<sub>s</sub> = jumlah lilitan sekunder</li>
                </ul>

                <h3>Step-Up</h3>

                <p>
                    Transformator step-up menaikkan tegangan.
                </p>

                <p>
                    Ciri:
                </p>

                <p class="text-center">
                    N<sub>s</sub> &gt; N<sub>p</sub>
                </p>

                <p>
                    sehingga:
                </p>

                <p class="text-center">
                    V<sub>s</sub> &gt; V<sub>p</sub>
                </p>

                <h3>Step-Down</h3>

                <p>
                    Transformator step-down menurunkan tegangan.
                </p>

                <p>
                    Ciri:
                </p>

                <p class="text-center">
                    N<sub>s</sub> &lt; N<sub>p</sub>
                </p>

                <p>
                    sehingga:
                </p>

                <p class="text-center">
                    V<sub>s</sub> &lt; V<sub>p</sub>
                </p>

                <h3>Transformator Ideal</h3>

                <p>
                    Pada transformator ideal, daya masuk sama dengan daya keluar:
                </p>

                <p class="text-center text-lg font-semibold">
                    V<sub>p</sub>I<sub>p</sub>
                    =
                    V<sub>s</sub>I<sub>s</sub>
                </p>

                <div class="surface rounded-xl p-4">
                    <strong>Ingat:</strong>
                    Step-up → tegangan naik, arus turun.
                    Step-down → tegangan turun, arus naik.
                </div>

            </section>


            <section id="rumus-penting">

                <h2>13. Rumus Penting</h2>

                <div class="overflow-x-auto">

                    <table>

                        <thead>
                            <tr>
                                <th>Konsep</th>
                                <th>Rumus</th>
                                <th>Satuan</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Frekuensi sudut</td>
                                <td>ω = 2πf</td>
                                <td>rad/s</td>
                            </tr>

                            <tr>
                                <td>Arus sesaat</td>
                                <td>i = I<sub>m</sub> sin(ωt)</td>
                                <td>A</td>
                            </tr>

                            <tr>
                                <td>Tegangan sesaat</td>
                                <td>v = V<sub>m</sub> sin(ωt)</td>
                                <td>V</td>
                            </tr>

                            <tr>
                                <td>Arus RMS</td>
                                <td>I<sub>rms</sub> = I<sub>m</sub>/√2</td>
                                <td>A</td>
                            </tr>

                            <tr>
                                <td>Tegangan RMS</td>
                                <td>V<sub>rms</sub> = V<sub>m</sub>/√2</td>
                                <td>V</td>
                            </tr>

                            <tr>
                                <td>Reaktansi induktif</td>
                                <td>X<sub>L</sub> = 2πfL</td>
                                <td>Ω</td>
                            </tr>

                            <tr>
                                <td>Reaktansi kapasitif</td>
                                <td>X<sub>C</sub> = 1/(2πfC)</td>
                                <td>Ω</td>
                            </tr>

                            <tr>
                                <td>Impedansi RLC</td>
                                <td>Z = √(R² + (X<sub>L</sub> − X<sub>C</sub>)²)</td>
                                <td>Ω</td>
                            </tr>

                            <tr>
                                <td>Arus RMS</td>
                                <td>I<sub>rms</sub> = V<sub>rms</sub>/Z</td>
                                <td>A</td>
                            </tr>

                            <tr>
                                <td>Frekuensi resonansi</td>
                                <td>f<sub>r</sub> = 1/(2π√LC)</td>
                                <td>Hz</td>
                            </tr>

                            <tr>
                                <td>Daya AC</td>
                                <td>P = V<sub>rms</sub>I<sub>rms</sub>cosφ</td>
                                <td>W</td>
                            </tr>

                            <tr>
                                <td>Transformator</td>
                                <td>V<sub>s</sub>/V<sub>p</sub> = N<sub>s</sub>/N<sub>p</sub></td>
                                <td>-</td>
                            </tr>

                            <tr>
                                <td>Daya trafo ideal</td>
                                <td>V<sub>p</sub>I<sub>p</sub> = V<sub>s</sub>I<sub>s</sub></td>
                                <td>W</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </section>


            <section id="ringkasan-cepat">

                <h2>14. Ringkasan Super Singkat</h2>

                <p>
                    <strong>AC</strong> → arus dan tegangan berubah secara periodik.
                </p>

                <p>
                    <strong>RMS</strong> → nilai efektif AC.
                </p>

                <p>
                    <strong>Resistor</strong> → V dan I sefase.
                </p>

                <p>
                    <strong>Induktor</strong> → V mendahului I sebesar 90°.
                </p>

                <p>
                    <strong>Kapasitor</strong> → I mendahului V sebesar 90°.
                </p>

                <p>
                    <strong>Rangkaian RLC</strong> → memiliki R, X<sub>L</sub>,
                    dan X<sub>C</sub>.
                </p>

                <p>
                    <strong>Resonansi</strong> → X<sub>L</sub> = X<sub>C</sub>.
                </p>

                <p>
                    <strong>Step-up</strong> → tegangan naik.
                </p>

                <p>
                    <strong>Step-down</strong> → tegangan turun.
                </p>

                <div class="surface rounded-xl p-4">

                    <strong>Kunci hafalan:</strong>

                    <ul>
                        <li>Induktor → arus tertinggal.</li>
                        <li>Kapasitor → arus mendahului.</li>
                        <li>R → tidak ada beda fase.</li>
                        <li>Resonansi → X<sub>L</sub> = X<sub>C</sub>.</li>
                        <li>RMS → maksimum dibagi √2.</li>
                    </ul>

                </div>

            </section>

        </article>

    </div>

@endsection
```
