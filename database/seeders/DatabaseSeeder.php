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
                ['department_name' => 'Administration'], #1
                ['department_name' => 'CSR/IMA'], #2
                ['department_name' => 'Drilling'], #3
                ['department_name' => 'Exploration'], #4
                ['department_name' => 'HSE'], #5
                ['department_name' => 'Laboratory'], #6
                ['department_name' => 'Maintenance Mobile Plant'], #7
                ['department_name' => 'Mine Geo Services'], #8
                ['department_name' => 'Mining'], #9
                ['department_name' => 'Processing Plant'], #10
                ['department_name' => 'Supply Chain Management'], #11
                ['department_name' => 'Special Projects'], #12
                ['department_name' => 'Kontraktor/Mitra Kerja'], #13
                ['department_name' => 'Local Government'], #14
                ['department_name' => 'Corporate Social Responsibility'], #15
                ['department_name' => 'CSR/SP'], #16
            ]
        );

        Prize::insert(
            [
                [
                    'prize_name' => 'TV',
                    'prize_value' => 12,
                    'prize_foto' => 'tv.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 7,
                ],
                [
                    'prize_name' => 'Mesin Cuci',
                    'prize_value' => 12,
                    'prize_foto' => 'mesin_cuci.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 5,
                ],
                [
                    'prize_name' => 'Airfryer',
                    'prize_value' => 12,
                    'prize_foto' => 'airfryer.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 3,
                ],
                [
                    'prize_name' => 'Backpack',
                    'prize_value' => 24,
                    'prize_foto' => 'daypack.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Jas Hujan',
                    'prize_value' => 24,
                    'prize_foto' => 'jas_hujan.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Tumbler',
                    'prize_value' => 24,
                    'prize_foto' => 'tumbler.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Headset BT',
                    'prize_value' => 24,
                    'prize_foto' => 'kiip.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Juicer',
                    'prize_value' => 24,
                    'prize_foto' => 'juicer.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Coffee Mug',
                    'prize_value' => 24,
                    'prize_foto' => 'coffee_mug.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Waist Bag',
                    'prize_value' => 24,
                    'prize_foto' => 'waistbag.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Tas NH10',
                    'prize_value' => 24,
                    'prize_foto' => 'tas_nh10.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
            ]
        );

        Prize_dept_counter::insert(
            [
                [
                    'id_prize' => 1,
                    'id_department' => 1,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 1,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 1,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 1,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 1,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 1,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 1,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 1,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 1,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 1,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 1,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 2,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 2,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 2,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 2,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 2,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 2,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 2,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 2,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 3,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 3,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 3,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 3,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 3,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 3,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 3,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 3,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 3,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 3,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 3,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 4,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 4,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 4,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 4,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 4,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 4,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 4,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 4,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 4,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 4,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 4,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 5,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 5,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 5,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 5,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 5,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 5,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 5,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 5,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 5,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 5,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 5,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 6,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 6,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 6,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 6,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 6,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 6,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 6,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 6,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 6,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 6,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 6,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 7,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 7,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 7,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 7,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 7,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 7,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 7,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 7,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 7,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 7,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 7,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 8,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 8,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 8,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 8,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 8,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 8,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 8,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 8,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 8,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 8,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 8,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 9,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 9,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 9,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 9,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 9,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 9,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 9,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 9,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 9,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 9,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 9,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 10,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 10,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 10,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 10,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 10,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 10,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 10,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 10,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 10,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 10,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 10,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 11,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 11,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 11,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 11,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 11,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 11,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 11,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 11,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 11,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 11,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 11,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 12,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 12,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 12,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 12,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 12,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 12,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 12,
                    'max_count' => 2
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 12,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 12,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 13,
                    'max_count' => 8
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 13,
                    'max_count' => 8
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 13,
                    'max_count' => 8
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 14,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 14,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 14,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 15,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 15,
                    'max_count' => 1
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 16,
                    'max_count' => 1
                ],
            ]
        );
    }
}
