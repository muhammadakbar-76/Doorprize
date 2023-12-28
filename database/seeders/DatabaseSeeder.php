<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Prize;
use App\Models\Prize_dept_counter;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Department::insert(
            [
                ['department_name' => 'Administration'],
                ['department_name' => 'CSR/IMA'],
                ['department_name' => 'Drilling'],
                ['department_name' => 'Exploration'],
                ['department_name' => 'HSE'],
                ['department_name' => 'Laboratory'],
                ['department_name' => 'Maintenance Mobile Plant'],
                ['department_name' => 'Mine Geo Services'],
                ['department_name' => 'Mining'],
                ['department_name' => 'Processing Plant'],
                ['department_name' => 'Supply Chain Management'],
                ['department_name' => 'Permit/SP'],
                ['department_name' => 'Kontraktor'],
                ['department_name' => 'Mitra Kerja'],
            ]
        );

        Prize::insert(
            [
                [
                    'prize_name' => 'Sepeda Lipat 1',
                    'prize_value' => 1,
                    'prize_foto' => 'sepeda_1.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 7,
                    'max_count' => 1,
                ],
                [
                    'prize_name' => 'Sepeda Lipat 2',
                    'prize_value' => 1,
                    'prize_foto' => 'sepeda_2.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 7,
                    'max_count' => 1,
                ],
                [
                    'prize_name' => 'Smartphone',
                    'prize_value' => 12,
                    'prize_foto' => 'hp.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 5,
                    'max_count' => 1,
                ],
                [
                    'prize_name' => 'Logam Mulia 0.5gr',
                    'prize_value' => 12,
                    'prize_foto' => 'gold.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 5,
                    'max_count' => 1,
                ],
                [
                    'prize_name' => 'Tumbler',
                    'prize_value' => 24,
                    'prize_foto' => 'tumbler.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                    'max_count' => 2,
                ],
                [
                    'prize_name' => 'Hand Juicer',
                    'prize_value' => 24,
                    'prize_foto' => 'juicer.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                    'max_count' => 2,
                ],
                [
                    'prize_name' => 'Panci Listrik',
                    'prize_value' => 24,
                    'prize_foto' => 'panci.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                    'max_count' => 2,
                ],
                [
                    'prize_name' => 'Kiip Wireless Bluetooth',
                    'prize_value' => 24,
                    'prize_foto' => 'kiip.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                    'max_count' => 2,
                ],
                [
                    'prize_name' => 'Daypack',
                    'prize_value' => 24,
                    'prize_foto' => 'daypack.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                    'max_count' => 2,
                ],
                [
                    'prize_name' => 'Travel Towel',
                    'prize_value' => 24,
                    'prize_foto' => 'towel.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                    'max_count' => 2,
                ],
                [
                    'prize_name' => 'Lunch Box',
                    'prize_value' => 24,
                    'prize_foto' => 'lunch.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                    'max_count' => 2,
                ],
                [
                    'prize_name' => 'Termos Kopi',
                    'prize_value' => 24,
                    'prize_foto' => 'termos.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                    'max_count' => 2,
                ],
                [
                    'prize_name' => 'Tas Quechua',
                    'prize_value' => 24,
                    'prize_foto' => 'tas.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                    'max_count' => 12,
                ],
            ]
        );

        Prize_dept_counter::insert([
            [
                'id_prize' => 1,
                'id_department' => 1,
            ],
            [
                'id_prize' => 1,
                'id_department' => 8,
            ],
            [
                'id_prize' => 1,
                'id_department' => 9,
            ],
            [
                'id_prize' => 1,
                'id_department' => 10,
            ],
            [
                'id_prize' => 2,
                'id_department' => 5,
            ],
            [
                'id_prize' => 2,
                'id_department' => 6,
            ],
            [
                'id_prize' => 2,
                'id_department' => 7,
            ],
            [
                'id_prize' => 2,
                'id_department' => 8,
            ],
            [
                'id_prize' => 2,
                'id_department' => 9,
            ],
            [
                'id_prize' => 2,
                'id_department' => 10,
            ],
            [
                'id_prize' => 2,
                'id_department' => 11,
            ],
            [
                'id_prize' => 2,
                'id_department' => 12,
            ],
            [
                'id_prize' => 3,
                'id_department' => 1,
            ],
            [
                'id_prize' => 3,
                'id_department' => 2,
            ],
            [
                'id_prize' => 3,
                'id_department' => 3,
            ],
            [
                'id_prize' => 3,
                'id_department' => 4,
            ],
            [
                'id_prize' => 3,
                'id_department' => 5,
            ],
            [
                'id_prize' => 3,
                'id_department' => 6,
            ],
            [
                'id_prize' => 3,
                'id_department' => 7,
            ],
            [
                'id_prize' => 3,
                'id_department' => 8,
            ],
            [
                'id_prize' => 3,
                'id_department' => 9,
            ],
            [
                'id_prize' => 3,
                'id_department' => 10,
            ],
            [
                'id_prize' => 3,
                'id_department' => 11,
            ],
            [
                'id_prize' => 3,
                'id_department' => 12,
            ],
            [
                'id_prize' => 4,
                'id_department' => 1,
            ],
            [
                'id_prize' => 4,
                'id_department' => 2,
            ],
            [
                'id_prize' => 4,
                'id_department' => 3,
            ],
            [
                'id_prize' => 4,
                'id_department' => 4,
            ],
            [
                'id_prize' => 4,
                'id_department' => 5,
            ],
            [
                'id_prize' => 4,
                'id_department' => 6,
            ],
            [
                'id_prize' => 4,
                'id_department' => 7,
            ],
            [
                'id_prize' => 4,
                'id_department' => 8,
            ],
            [
                'id_prize' => 4,
                'id_department' => 9,
            ],
            [
                'id_prize' => 4,
                'id_department' => 10,
            ],
            [
                'id_prize' => 4,
                'id_department' => 11,
            ],
            [
                'id_prize' => 4,
                'id_department' => 12,
            ],
            [
                'id_prize' => 5,
                'id_department' => 1,
            ],
            [
                'id_prize' => 5,
                'id_department' => 2,
            ],
            [
                'id_prize' => 5,
                'id_department' => 3,
            ],
            [
                'id_prize' => 5,
                'id_department' => 4,
            ],
            [
                'id_prize' => 5,
                'id_department' => 5,
            ],
            [
                'id_prize' => 5,
                'id_department' => 6,
            ],
            [
                'id_prize' => 5,
                'id_department' => 7,
            ],
            [
                'id_prize' => 5,
                'id_department' => 8,
            ],
            [
                'id_prize' => 5,
                'id_department' => 9,
            ],
            [
                'id_prize' => 5,
                'id_department' => 10,
            ],
            [
                'id_prize' => 5,
                'id_department' => 11,
            ],
            [
                'id_prize' => 5,
                'id_department' => 12,
            ],
            [
                'id_prize' => 6,
                'id_department' => 1,
            ],
            [
                'id_prize' => 6,
                'id_department' => 2,
            ],
            [
                'id_prize' => 6,
                'id_department' => 3,
            ],
            [
                'id_prize' => 6,
                'id_department' => 4,
            ],
            [
                'id_prize' => 6,
                'id_department' => 5,
            ],
            [
                'id_prize' => 6,
                'id_department' => 6,
            ],
            [
                'id_prize' => 6,
                'id_department' => 7,
            ],
            [
                'id_prize' => 6,
                'id_department' => 8,
            ],
            [
                'id_prize' => 6,
                'id_department' => 9,
            ],
            [
                'id_prize' => 6,
                'id_department' => 10,
            ],
            [
                'id_prize' => 6,
                'id_department' => 11,
            ],
            [
                'id_prize' => 6,
                'id_department' => 12,
            ],
            [
                'id_prize' => 7,
                'id_department' => 1,
            ],
            [
                'id_prize' => 7,
                'id_department' => 2,
            ],
            [
                'id_prize' => 7,
                'id_department' => 3,
            ],
            [
                'id_prize' => 7,
                'id_department' => 4,
            ],
            [
                'id_prize' => 7,
                'id_department' => 5,
            ],
            [
                'id_prize' => 7,
                'id_department' => 6,
            ],
            [
                'id_prize' => 7,
                'id_department' => 7,
            ],
            [
                'id_prize' => 7,
                'id_department' => 8,
            ],
            [
                'id_prize' => 7,
                'id_department' => 9,
            ],
            [
                'id_prize' => 7,
                'id_department' => 10,
            ],
            [
                'id_prize' => 7,
                'id_department' => 11,
            ],
            [
                'id_prize' => 7,
                'id_department' => 12,
            ],
            [
                'id_prize' => 8,
                'id_department' => 1,
            ],
            [
                'id_prize' => 8,
                'id_department' => 2,
            ],
            [
                'id_prize' => 8,
                'id_department' => 3,
            ],
            [
                'id_prize' => 8,
                'id_department' => 4,
            ],
            [
                'id_prize' => 8,
                'id_department' => 5,
            ],
            [
                'id_prize' => 8,
                'id_department' => 6,
            ],
            [
                'id_prize' => 8,
                'id_department' => 7,
            ],
            [
                'id_prize' => 8,
                'id_department' => 8,
            ],
            [
                'id_prize' => 8,
                'id_department' => 9,
            ],
            [
                'id_prize' => 8,
                'id_department' => 10,
            ],
            [
                'id_prize' => 8,
                'id_department' => 11,
            ],
            [
                'id_prize' => 8,
                'id_department' => 12,
            ],
            [
                'id_prize' => 9,
                'id_department' => 1,
            ],
            [
                'id_prize' => 9,
                'id_department' => 2,
            ],
            [
                'id_prize' => 9,
                'id_department' => 3,
            ],
            [
                'id_prize' => 9,
                'id_department' => 4,
            ],
            [
                'id_prize' => 9,
                'id_department' => 5,
            ],
            [
                'id_prize' => 9,
                'id_department' => 6,
            ],
            [
                'id_prize' => 9,
                'id_department' => 7,
            ],
            [
                'id_prize' => 9,
                'id_department' => 8,
            ],
            [
                'id_prize' => 9,
                'id_department' => 9,
            ],
            [
                'id_prize' => 9,
                'id_department' => 10,
            ],
            [
                'id_prize' => 9,
                'id_department' => 11,
            ],
            [
                'id_prize' => 9,
                'id_department' => 12,
            ],
            [
                'id_prize' => 10,
                'id_department' => 1,
            ],
            [
                'id_prize' => 10,
                'id_department' => 2,
            ],
            [
                'id_prize' => 10,
                'id_department' => 3,
            ],
            [
                'id_prize' => 10,
                'id_department' => 4,
            ],
            [
                'id_prize' => 10,
                'id_department' => 5,
            ],
            [
                'id_prize' => 10,
                'id_department' => 6,
            ],
            [
                'id_prize' => 10,
                'id_department' => 7,
            ],
            [
                'id_prize' => 10,
                'id_department' => 8,
            ],
            [
                'id_prize' => 10,
                'id_department' => 9,
            ],
            [
                'id_prize' => 10,
                'id_department' => 10,
            ],
            [
                'id_prize' => 10,
                'id_department' => 11,
            ],
            [
                'id_prize' => 10,
                'id_department' => 12,
            ],
            [
                'id_prize' => 11,
                'id_department' => 1,
            ],
            [
                'id_prize' => 11,
                'id_department' => 2,
            ],
            [
                'id_prize' => 11,
                'id_department' => 3,
            ],
            [
                'id_prize' => 11,
                'id_department' => 4,
            ],
            [
                'id_prize' => 11,
                'id_department' => 5,
            ],
            [
                'id_prize' => 11,
                'id_department' => 6,
            ],
            [
                'id_prize' => 11,
                'id_department' => 7,
            ],
            [
                'id_prize' => 11,
                'id_department' => 8,
            ],
            [
                'id_prize' => 11,
                'id_department' => 9,
            ],
            [
                'id_prize' => 11,
                'id_department' => 10,
            ],
            [
                'id_prize' => 11,
                'id_department' => 11,
            ],
            [
                'id_prize' => 11,
                'id_department' => 12,
            ],
            [
                'id_prize' => 12,
                'id_department' => 1,
            ],
            [
                'id_prize' => 12,
                'id_department' => 2,
            ],
            [
                'id_prize' => 12,
                'id_department' => 3,
            ],
            [
                'id_prize' => 12,
                'id_department' => 4,
            ],
            [
                'id_prize' => 12,
                'id_department' => 5,
            ],
            [
                'id_prize' => 12,
                'id_department' => 6,
            ],
            [
                'id_prize' => 12,
                'id_department' => 7,
            ],
            [
                'id_prize' => 12,
                'id_department' => 8,
            ],
            [
                'id_prize' => 12,
                'id_department' => 9,
            ],
            [
                'id_prize' => 12,
                'id_department' => 10,
            ],
            [
                'id_prize' => 12,
                'id_department' => 11,
            ],
            [
                'id_prize' => 12,
                'id_department' => 12,
            ],
            [
                'id_prize' => 13,
                'id_department' => 13,
            ],
            [
                'id_prize' => 13,
                'id_department' => 14,
            ],
        ]);
    }
}
