<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::create([
            'nis' => '16010',
            'name' => 'Roshit',
            'class' => 10,
            'major' => 'Rekayasa Perangkat Lunak',
            'gender' => 'L',
        ]);

        Student::create([
            'nis' => '16011',
            'name' => 'Aldi',
            'class' => 11,
            'major' => 'Desain Komunikasi Visual',
            'gender' => 'L',
        ]);

        Student::create([
            'nis' => '16012',
            'name' => 'Dewi',
            'class' => 12,
            'major' => 'Akuntansi Keuangan Lembaga',
            'gender' => 'P',
        ]);

        Student::create([
            'nis' => '16013',
            'name' => 'Isal',
            'class' => 11,
            'major' => 'Rekayasa Perangkat Lunak',
            'gender' => 'L',
        ]);

        Student::create([
            'nis' => '16014',
            'name' => 'Nesa',
            'class' => 12,
            'major' => 'Desain Komunikasi Visual',
            'gender' => 'P',
        ]);
    }
}
