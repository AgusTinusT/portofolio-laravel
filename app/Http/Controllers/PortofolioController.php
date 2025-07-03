<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Menampilkan halaman portofolio utama dengan daftar proyek.
     */
    public function index(): View
    {
        $projects = Project::latest()->get();

        return view('welcome', [
            'projects' => $projects,
        ]);
    }
}
