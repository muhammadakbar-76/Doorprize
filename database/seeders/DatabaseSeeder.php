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
        //* departemen yang dihapus berdasar nik = 1, 2, 3, 8, 11, 13, 15, 16, 17, 18, 19, 20, 21
        Department::insert(
            [
                ['department_name' => 'Administration'], #1
                ['department_name' => 'Corporate Social Responsibility'], #2
                ['department_name' => 'Cost Control'], #3
                ['department_name' => 'Drilling'], #4
                ['department_name' => 'Exploration'], #5
                ['department_name' => 'HSE'], #6
                ['department_name' => 'Laboratory'], #7
                ['department_name' => 'Local Government'], #8
                ['department_name' => 'Maintenance Mobile Plant'], #9
                ['department_name' => 'Mine Geo Services'], #10
                ['department_name' => 'Mining'], #11
                ['department_name' => 'Processing Plant'], #12
                ['department_name' => 'Special Projects'], #13
                ['department_name' => 'Supply Chain Management'], #14
                ['department_name' => 'Underground'], #15
                ['department_name' => 'Admin & Cost Control'], #16
                ['department_name' => 'Adm-PKY & PT IMA'], #17
                ['department_name' => 'CSR & SP & Permitiing'], #18
                ['department_name' => 'Mining & Underground'], #19
                ['department_name' => 'IMA'], #20
                ['department_name' => 'Adm-PKY'], #21
                ['department_name' => 'Kontraktor'], #22
            ]
        );

        Prize::insert(
            [
                [
                    'prize_name' => 'Sepeda Motor',
                    'prize_value' => 1,
                    'prize_foto' => 'motor.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 5,
                ],
                [
                    'prize_name' => 'Emas Batang 5 Gram',
                    'prize_value' => 4,
                    'prize_foto' => 'gold.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 4,
                ],
                [
                    'prize_name' => 'Sepeda Listrik',
                    'prize_value' => 4,
                    'prize_foto' => 'sepeda_listrik.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 4,
                ],
                [
                    'prize_name' => 'TV LED Sharp 24 Inch',
                    'prize_value' => 6,
                    'prize_foto' => 'tv.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 3,
                ],
                [
                    'prize_name' => 'Kulkas 1 Pintu',
                    'prize_value' => 6,
                    'prize_foto' => 'kulkas.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 3,
                ],
                [
                    'prize_name' => 'Mesin cuci 2 Tabung',
                    'prize_value' => 6,
                    'prize_foto' => 'mesin_cuci_2.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 3,
                ],
                [
                    'prize_name' => 'Rice Cooker',
                    'prize_value' => 24,
                    'prize_foto' => 'rice_cooker.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Blender',
                    'prize_value' => 24,
                    'prize_foto' => 'blender.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Airfryer',
                    'prize_value' => 24,
                    'prize_foto' => 'airfryer.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Coffee Maker',
                    'prize_value' => 24,
                    'prize_foto' => 'coffee_maker.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Sandwich Maker',
                    'prize_value' => 24,
                    'prize_foto' => 'sandwich_maker.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Panci Listrik',
                    'prize_value' => 24,
                    'prize_foto' => 'panci.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Payung logo IMK',
                    'prize_value' => 36,
                    'prize_foto' => 'payung.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Handuk bordir IMK',
                    'prize_value' => 40,
                    'prize_foto' => 'handuk.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Emas Antam 1/2 gram',
                    'prize_value' => 3,
                    'prize_foto' => 'gold.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Xiaomi Redmi Buds',
                    'prize_value' => 11,
                    'prize_foto' => 'kiip.png',
                    'rules_field' => 'lama_kerja',
                    'rules_operator' => '>=',
                    'rules_value' => 0,
                ],
                [
                    'prize_name' => 'Xiaomi Smart Band',
                    'prize_value' => 4,
                    'prize_foto' => 'mi_band.png',
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
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 2,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 3,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 4,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 5,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 6,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 7,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 8,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 9,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 10,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 11,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 12,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 13,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 14,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 1,
                    'id_department' => 15,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 1,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 2,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 3,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 4,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 5,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 6,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 7,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 8,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 9,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 10,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 11,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 12,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 13,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 14,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 2,
                    'id_department' => 15,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 1,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 2,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 3,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 4,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 5,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 6,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 7,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 8,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 9,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 10,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 11,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 12,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 13,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 14,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 3,
                    'id_department' => 15,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 21,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 12,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 4,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 7,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 14,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 4,
                    'id_department' => 11,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 18,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 5,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 9,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 10,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 5,
                    'id_department' => 12,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 1,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 11,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 6,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 10,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 6,
                    'id_department' => 12,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 16,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 17,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 14,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 18,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 4,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 5,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 6,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 7,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 9,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 10,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 19,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 12,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 17,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 7,
                    'id_department' => 10,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 16,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 17,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 14,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 18,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 4,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 5,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 6,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 7,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 9,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 10,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 19,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 12,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 7,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 8,
                    'id_department' => 18,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 16,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 17,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 14,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 18,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 4,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 5,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 6,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 7,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 9,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 10,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 19,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 12,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 12,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 9,
                    'id_department' => 19,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 16,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 17,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 14,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 18,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 4,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 5,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 6,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 7,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 9,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 10,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 19,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 12,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 4,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 10,
                    'id_department' => 6,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 16,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 17,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 14,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 18,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 4,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 5,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 6,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 7,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 9,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 10,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 19,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 12,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 9,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 11,
                    'id_department' => 14,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 16,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 17,
                    'max_count' => 1,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 14,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 18,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 4,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 5,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 6,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 7,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 9,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 10,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 19,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 12,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 16,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 12,
                    'id_department' => 5,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 16,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 17,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 14,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 18,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 4,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 5,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 6,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 7,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 9,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 10,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 19,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 12,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 16,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 17,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 18,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 13,
                    'id_department' => 19,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 16,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 17,
                    'max_count' => 2,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 14,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 18,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 4,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 5,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 6,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 7,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 9,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 10,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 19,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 12,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 4,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 16,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 17,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 18,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 14,
                    'id_department' => 19,
                    'max_count' => 1,
                    'status_site' => 'cuti',
                ],
                [
                    'id_prize' => 15,
                    'id_department' => 22,
                    'max_count' => 3,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 16,
                    'id_department' => 22,
                    'max_count' => 11,
                    'status_site' => 'onsite',
                ],
                [
                    'id_prize' => 17,
                    'id_department' => 22,
                    'max_count' => 4,
                    'status_site' => 'onsite',
                ],
            ]
        );
    }
}
