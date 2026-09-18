<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Corta — Pemesanan Lapangan',
            'description' => 'Aplikasi web pemesanan lapangan olahraga berbasis PHP Native dan MySQL dengan antarmuka interaktif HTML, CSS, dan JavaScript.'
        ]);

        Project::create([
            'title' => 'Resty Fotocopy & Printing',
            'description' => 'Desain prototipe antarmuka dan aset visual untuk platform pemesanan percetakan online yang dirancang menggunakan Figma dan Canva.'
        ]);

        Project::create([
            'title' => 'Soundwave — Music Streaming',
            'description' => 'Platform pemutar musik berbasis web yang dibangun dengan PHP Native, database MySQL, serta pemrosesan frontend HTML, CSS, dan JS.'
        ]);
    }
}