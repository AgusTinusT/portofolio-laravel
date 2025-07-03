<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();

        Project::create([
            'title' => 'Sistem E-Commerce Kamera',
            'description' => 'Platform e-commerce fungsional dengan fitur katalog produk, keranjang belanja, dan halaman checkout yang responsif.',
            'image_path' => 'images/projects/project-1.jpg',
            'project_url' => '#',
            'github_url' => '#',
            'tags' => ['Laravel', 'Tailwind CSS', 'Alpine.js'],
        ]);

        Project::create([
            'title' => 'Aplikasi Task Management',
            'description' => 'Aplikasi web untuk mengelola tugas harian, dibuat dengan TALL Stack (Tailwind, Alpine, Livewire, Laravel).',
            'image_path' => 'images/projects/project-2.jpg',
            'project_url' => '#',
            'github_url' => '#',
            'tags' => ['Livewire', 'TALL Stack', 'Blade'],
        ]);

        Project::create([
            'title' => 'Dashboard Analitik',
            'description' => 'Visualisasi data interaktif untuk memantau metrik bisnis penting, dibangun menggunakan Vue.js dan Inertia.js.',
            'image_path' => 'images/projects/project-3.jpg',
            'project_url' => '#',
            'github_url' => '#',
            'tags' => ['Vue.js', 'Inertia.js', 'Chart.js'],
        ]);
    }
}
