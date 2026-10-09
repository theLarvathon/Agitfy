<?php

namespace Database\Seeders;

use App\Models\subject;
use App\Models\topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'code' => 'FIS',
                'name' => 'Fisika',
                'category' => 'sains',
                'order' => 1,
                'topics' => [
                    [
                        'name' => 'Listrik Statis',
                        'summary' => [
                            'title' => 'Rangkuman Listrik Statis',
                        ],
                    ],
                    [
                        'name' => 'Arus Bolak-Balik / AC',
                        'summary' => [
                            'title' => 'Rangkuman Arus Bolak-Balik / AC',
                        ],
                    ],
                    [
                        'name' => 'Listrik Arus Searah / DC',
                        'summary' => [
                            'title' => 'Rangkuman Listrik Arus Searah / DC',
                        ],
                    ],
                    [
                        'name' => 'Medan Magnet',
                        'summary' => [
                            'title' => 'Rangkuman Medan Magnet',
                        ],
                    ],
                    [
                        'name' => 'Induksi Elektromagnetik',
                        'summary' => [
                            'title' => 'Rangkuman Induksi Elektromagnetik',
                        ],
                    ],
                ],
            ],
            [
                'code' => 'BIG-TL',
                'name' => 'Bahasa Inggris Tingkat Lanjut',
                'category' => 'bahasa',
                'order' => 2,
                'topics' => [
                    [
                        'name' => 'Passive Voice',
                        'summary' => [
                            'title' => 'Rangkuman Passive Voice',
                        ],
                    ],
                    [
                        'name' => 'Analytical Exposition Text',
                        'summary' => [
                            'title' => 'Rangkuman Analytical Exposition Text',
                        ],
                    ],
                ],
            ],
            [
                'code' => 'BIN',
                'name' => 'Bahasa Indonesia',
                'category' => 'bahasa',
                'order' => 3,
                'topics' => [
                    [
                        'name' => 'Surat Lamaran Pekerjaan',
                        'summary' => [
                            'title' => 'Rangkuman Surat Lamaran Pekerjaan',
                        ],
                    ],
                    [
                        'name' => 'Karya Ilmiah',
                        'summary' => [
                            'title' => 'Rangkuman Karya Ilmiah',
                        ],
                    ],
                    [
                        'name' => 'Teks Prosedur',
                        'summary' => [
                            'title' => 'Rangkuman Teks Prosedur',
                        ],
                    ],
                ],
            ],
            [
                'code' => 'MTK',
                'name' => 'Matematika',
                'category' => 'sains',
                'order' => 4,
                'topics' => [
                    [
                        'name' => 'Kaidah Pencacahan',
                        'summary' => [
                            'title' => 'Rangkuman Kaidah Pencacahan',
                        ],
                    ],
                    [
                        'name' => 'Transformasi Fungsi',
                        'summary' => [
                            'title' => 'Rangkuman Transformasi Fungsi',
                        ],
                    ],
                    [
                        'name' => 'Peluang Kejadian Majemuk',
                        'summary' => [
                            'title' => 'Rangkuman Peluang Kejadian Majemuk',
                        ],
                    ],
                ],
            ],
            [
                'code' => 'BIG',
                'name' => 'Bahasa Inggris',
                'category' => 'bahasa',
                'order' => 5,
                'topics' => [
                    [
                        'name' => 'Procedure Text',
                        'summary' => [
                            'title' => 'Rangkuman Procedure Text',
                        ],
                    ],
                    [
                        'name' => 'Discussion Text',
                        'summary' => [
                            'title' => 'Rangkuman Discussion Text',
                        ],
                    ],
                    [
                        'name' => 'Recount Text',
                        'summary' => [
                            'title' => 'Rangkuman Recount Text',
                        ],
                    ],
                ],
            ],
        ];

        foreach ($subjects as $subjectData) {
            // SUBJECT

            $subject = Subject::create([
                'code' => $subjectData['code'],
                'name' => $subjectData['name'],
                'slug' => Str::slug($subjectData['name']),
                'category' => $subjectData['category'],
                'order' => $subjectData['order'],
            ]);

            // TOPIC

            foreach ($subjectData['topics'] as $index => $topicData) {
                $topic = $subject->topic()->create([
                    'number' => $index + 1,
                    'title' => $topicData['name'],
                    'slug' => Str::slug($topicData['name']),
                ]);

            
            }

            // [
            //     'name' => 'Kimia',
            //     'topics' => [
            //         [
            //             'name' => '',
            //             'Summaries' => [
            //                 'title' => 'Rangkuman ',
            //        
            //             ],
            //         ],
            //     ],
            // ],
            // [
            //     'name' => 'Biologi',
            //     'topics' => [
            //         [
            //             'name' => '',
            //             'Summaries' => [
            //                 'title' => 'Rangkuman ',
            //        
            //             ],
            //         ],
            //     ],
            // ],
        }
    }
}
