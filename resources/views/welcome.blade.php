<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&family=Source+Sans+3:wght@400;600;700&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<!-- Header - Sticky, Responsive, Themed -->
<header class="bg-white/90 dark:bg-gray-darker/90 backdrop-blur-lg sticky top-0 z-50 shadow-md">
    <nav class="container mx-auto flex justify-between items-center px-6 py-4">

        <!-- Branding / Logo -->
        <a href="#introduction"
            class="font-heading font-bold text-2xl text-gray-heading dark:text-white hover:text-primary-500 transition-colors">
            ATT.
        </a>

        <!-- Menu Navigasi Desktop -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="#introduction"
                class="font-body text-base text-gray-text dark:text-gray-300 hover:text-primary-500 transition-colors">Home</a>
            <a href="#what-i-do"
                class="font-body text-base text-gray-text dark:text-gray-300 hover:text-primary-500 transition-colors">Layanan</a>
            <a href="#projects"
                class="font-body text-base text-gray-text dark:text-gray-300 hover:text-primary-500 transition-colors">Proyek</a>
            <a href="#contact"
                class="font-body text-base text-gray-text dark:text-gray-300 hover:text-primary-500 transition-colors">Kontak</a>
            <!-- Tombol Dark Mode untuk Desktop -->
            <button class="dark-mode-toggler ml-4 p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700">
                <span class="sr-only">Toggle Dark Mode</span>
                <span class="dark:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-gray-heading">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                    </svg>
                </span>
                <span class="hidden dark:inline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-yellow-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.95-4.243l-1.59-1.591M3.75 12H6m4.95-7.757l-1.59 1.591" />
                    </svg>
                </span>
            </button>
        </div>

        <!-- Tombol Hamburger untuk Mobile -->
        <div class="md:hidden">
            <button id="hamburger-button" class="text-gray-heading dark:text-white">
                <span class="sr-only">Buka Menu</span>
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Menu Navigasi Mobile (Disembunyikan secara default) -->
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-3">
        <a href="#introduction"
            class="block font-semibold text-gray-text dark:text-gray-300 hover:bg-gray-light dark:hover:bg-gray-700 p-2 rounded-md">Home</a>
        <a href="#what-i-do"
            class="block font-semibold text-gray-text dark:text-gray-300 hover:bg-gray-light dark:hover:bg-gray-700 p-2 rounded-md">Layanan</a>
        <a href="#projects"
            class="block font-semibold text-gray-text dark:text-gray-300 hover:bg-gray-light dark:hover:bg-gray-700 p-2 rounded-md">Proyek</a>
        <a href="#contact"
            class="block font-semibold text-gray-text dark:text-gray-300 hover:bg-gray-light dark:hover:bg-gray-700 p-2 rounded-md">Kontak</a>
        <hr class="border-gray-200 dark:border-gray-700 my-2">
        <div
            class="dark-mode-toggler flex justify-between items-center text-gray-text dark:text-gray-300 hover:bg-gray-light dark:hover:bg-gray-700 p-2 rounded-md">
            <span>Mode Tampilan</span>
            <span class="dark:hidden">🌙</span>
            <span class="hidden dark:inline">☀️</span>
        </div>
    </div>
</header>

<body>
    <section id="introduction" class="bg-gray-light dark:bg-gray-darker">
        <div class="container mx-auto px-6 min-h-screen flex items-center justify-center">
            <!-- Padding vertikal untuk memberi ruang -->
            <div class="py-20 w-full grid grid-cols-1 gap-8 items-center lg:grid-cols-5 lg:gap-16">

                <!-- Kolom Gambar - Muncul pertama di mobile secara default -->
                <div class="lg:col-span-2 lg:order-2 flex justify-center items-center">
                    <img src="{{ asset('images/undraw_web-devices.svg') }}" alt="Ilustrasi Pengembangan Web dan Mobile"
                        class="w-full max-w-sm md:max-w-md">
                </div>

                <!-- Kolom Teks - Muncul kedua di mobile -->
                <div class="lg:col-span-3 lg:order-1 text-center lg:text-left">
                    <p class="font-body font-bold text-primary-500 uppercase tracking-widest mb-4">
                        Full-Stack Developer
                    </p>
                    <!-- Font size responsif: kecil di mobile, besar di desktop -->
                    <h1
                        class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-heading dark:text-white leading-tight mb-6">
                        Agus Tinus Turnip
                    </h1>
                    <!-- max-w diatur agar tidak terlalu lebar di mobile -->
                    <p
                        class="font-body text-lg text-gray-text dark:text-gray-300 leading-relaxed max-w-xl mx-auto lg:mx-0 mb-10">
                        Saya merancang dan membangun aplikasi web dan mobile yang modern, intuitif, dan berkinerja
                        tinggi, mengubah ide menjadi solusi digital yang nyata.
                    </p>

                    <!-- Tombol CTA - Responsif -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#projects"
                            class="px-8 py-3 bg-primary-600 text-white font-bold rounded-lg hover:bg-primary-700 transition-colors shadow-lg transform hover:scale-105 duration-300">
                            Lihat Proyek Saya
                        </a>
                        <a href="https://github.com/AgusTinusT" target="_blank" rel="noopener noreferrer"
                            class="px-8 py-3 bg-white dark:bg-gray-700 text-gray-heading dark:text-white font-bold rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors shadow-lg transform hover:scale-105 duration-300 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" role="img" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>GitHub</title>
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                            GitHub
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="what-i-do" class="bg-white py-24">
        <div class="container mx-auto px-6">

            <!-- Judul Section -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-heading text-5xl font-extrabold text-gray-heading mb-4">Layanan & Keahlian</h2>
                <p class="font-body text-xl text-gray-text">
                    Saya menawarkan solusi end-to-end, mulai dari pengembangan aplikasi mobile native hingga backend web
                    yang tangguh dan skalabel.
                </p>
            </div>

            <!-- Grid untuk Kartu Layanan -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- KARTU 1: PENGEMBANGAN MOBILE -->
                <div
                    class="group bg-gray-light p-8 rounded-xl shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Ikon Besar -->
                    <div class="p-4 bg-blue-100 rounded-full inline-block mb-6">
                        <!-- SVG Heroicon: device-phone-mobile -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>
                    <!-- Konten Teks -->
                    <h3 class="font-heading text-2xl font-bold text-gray-heading mb-3">Pengembangan Mobile</h3>
                    <p class="font-body text-base text-gray-text mb-6">
                        Membangun aplikasi native dan cross-platform yang responsif dan kaya fitur, dengan fokus pada
                        user experience yang optimal.
                    </p>
                    <!-- Badge Teknologi -->
                    <div class="flex flex-wrap gap-2">
                        <span class="font-mono text-sm bg-blue-200 text-blue-800 px-3 py-1 rounded-full">Kotlin</span>
                        <span class="font-mono text-sm bg-blue-200 text-blue-800 px-3 py-1 rounded-full">Flutter</span>
                        <span class="font-mono text-sm bg-blue-200 text-blue-800 px-3 py-1 rounded-full">MVVM</span>
                    </div>
                </div>

                <!-- KARTU 2: PENGEMBANGAN WEB -->
                <div
                    class="group bg-gray-light p-8 rounded-xl shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Ikon Besar -->
                    <div class="p-4 bg-green-100 rounded-full inline-block mb-6">
                        <!-- SVG Heroicon: code-bracket -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
                    </div>
                    <!-- Konten Teks -->
                    <h3 class="font-heading text-2xl font-bold text-gray-heading mb-3">Pengembangan Web</h3>
                    <p class="font-body text-base text-gray-text mb-6">
                        Merancang backend yang kuat dan aman dengan Laravel, serta antarmuka dinamis menggunakan
                        Tailwind CSS dan JavaScript.
                    </p>
                    <!-- Badge Teknologi -->
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="font-mono text-sm bg-green-200 text-green-800 px-3 py-1 rounded-full">Laravel</span>
                        <span class="font-mono text-sm bg-green-200 text-green-800 px-3 py-1 rounded-full">Tailwind
                            CSS</span>
                        <span class="font-mono text-sm bg-green-200 text-green-800 px-3 py-1 rounded-full">RESTful
                            API</span>
                    </div>
                </div>

                <!-- KARTU 3: TOOLS & DEPLOYMENT -->
                <div
                    class="group bg-gray-light p-8 rounded-xl shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Ikon Besar -->
                    <div class="p-4 bg-purple-100 rounded-full inline-block mb-6">
                        <!-- SVG Heroicon: cloud-arrow-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 16.5V9.75m0 0l-3.75 3.75M12 9.75l3.75 3.75M17.25 21L21 17.25l-3.75-3.75M12 21l-3.75-3.75M12 21l3.75-3.75M3 17.25l3.75 3.75L12 21l-3.75-3.75m3.75-3.75L12 12m0 0l-3.75 3.75" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 16.5V9.75m0 0l-3.75 3.75M12 9.75l3.75 3.75m-7.5-3L4.5 12l3.75-3.75" />
                        </svg>
                    </div>
                    <!-- Konten Teks -->
                    <h3 class="font-heading text-2xl font-bold text-gray-heading mb-3">Tools & DevOps</h3>
                    <p class="font-body text-base text-gray-text mb-6">
                        Manajemen kode sumber dengan Git, desain database, dan proses deployment aplikasi ke server
                        produksi.
                    </p>
                    <!-- Badge Teknologi -->
                    <div class="flex flex-wrap gap-2">
                        <span class="font-mono text-sm bg-purple-200 text-purple-800 px-3 py-1 rounded-full">Git</span>
                        <span
                            class="font-mono text-sm bg-purple-200 text-purple-800 px-3 py-1 rounded-full">MySQL</span>
                        <span
                            class="font-mono text-sm bg-purple-200 text-purple-800 px-3 py-1 rounded-full">CI/CD</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="projects" class="bg-gray-light py-24">
        <div class="container mx-auto px-6">

            <!-- Judul Section -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-heading text-5xl font-extrabold text-gray-heading mb-4">Proyek Unggulan</h2>
                <p class="font-body text-xl text-gray-text">
                    Berikut adalah beberapa proyek yang telah saya kerjakan, menunjukkan aplikasi dari keahlian saya
                    dalam pengembangan nyata.
                </p>
            </div>

            <!-- Grid untuk Kartu Proyek -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- KARTU PROYEK 1 -->
                <div
                    class="group bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Gambar Proyek -->
                    <div class="relative">
                        <img src="{{ asset('images/project-1.jpg') }}" alt="Screenshot Proyek E-Commerce Kamera"
                            class="w-full h-56 object-cover">
                        <!-- Overlay saat hover untuk menampilkan link -->
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-300 flex items-center justify-center gap-4">
                            <a href="#" target="_blank"
                                class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform_ translate-y-4 group-hover:translate-y-0 flex items-center gap-2 bg-primary-600 px-4 py-2 rounded-lg">
                                <svg class="w-5 h-5" ...>...</svg> <!-- Ikon "link" -->
                                Live Demo
                            </a>
                            <a href="#" target="_blank"
                                class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-4 group-hover:translate-y-0 flex items-center gap-2 bg-gray-700 px-4 py-2 rounded-lg">
                                <svg class="w-5 h-5" ...>...</svg> <!-- Ikon "github" -->
                                Kode
                            </a>
                        </div>
                    </div>
                    <!-- Konten Teks Proyek -->
                    <div class="p-6">
                        <h3 class="font-heading text-2xl font-bold text-gray-heading mb-2">Sistem E-Commerce Kamera
                        </h3>
                        <p class="font-body text-base text-gray-text mb-6">
                            Platform e-commerce fungsional dengan fitur katalog produk, keranjang belanja, dan halaman
                            checkout yang responsif.
                        </p>
                        <!-- Badge Teknologi -->
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="font-mono text-sm bg-red-100 text-red-800 px-3 py-1 rounded-full">Laravel</span>
                            <span
                                class="font-mono text-sm bg-blue-100 text-blue-800 px-3 py-1 rounded-full">Tailwind</span>
                            <span
                                class="font-mono text-sm bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full">JavaScript</span>
                        </div>
                    </div>
                </div>

                <!-- KARTU PROYEK 2 (Contoh Lain) -->
                <div
                    class="group bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Gambar Proyek -->
                    <div class="relative">
                        <img src="{{ asset('images/project-2.jpg') }}" alt="Screenshot Aplikasi Task Management"
                            class="w-full h-56 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-300 flex items-center justify-center gap-4">
                            <!-- Links... -->
                        </div>
                    </div>
                    <!-- Konten Teks Proyek -->
                    <div class="p-6">
                        <h3 class="font-heading text-2xl font-bold text-gray-heading mb-2">Aplikasi Task Management
                        </h3>
                        <p class="font-body text-base text-gray-text mb-6">
                            Aplikasi web untuk mengelola tugas harian, dibuat dengan TALL Stack (Tailwind, Alpine,
                            Livewire, Laravel).
                        </p>
                        <!-- Badge Teknologi -->
                        <div class="flex flex-wrap gap-2">
                            <span class="font-mono text-sm bg-gray-200 text-gray-800 px-3 py-1 rounded-full">TALL
                                Stack</span>
                            <span
                                class="font-mono text-sm bg-purple-100 text-purple-800 px-3 py-1 rounded-full">Livewire</span>
                        </div>
                    </div>
                </div>

                <!-- KARTU PROYEK 3 (Placeholder) -->
                <div
                    class="group bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Konten kartu ketiga... -->
                </div>

            </div>

        </div>
    </section>
    <section id="contact" class="bg-white py-24 sm:py-32">
        <div class="container mx-auto px-6">

            <!-- Kontainer Konten dengan Batasan Lebar -->
            <div class="max-w-4xl mx-auto text-center">

                <!-- Tagline Kecil -->
                <p class="font-body font-bold text-primary-600 uppercase tracking-widest mb-4">
                    Punya Ide?
                </p>

                <!-- Judul Utama Section -->
                <h2
                    class="font-heading text-4xl sm:text-5xl md:text-6xl font-extrabold text-gray-heading leading-tight mb-6">
                    Mari Wujudkan Bersama
                </h2>

                <!-- Deskripsi Ajakan -->
                <p class="font-body text-xl text-gray-text max-w-2xl mx-auto mb-12">
                    Saya selalu terbuka untuk mendiskusikan proyek pengembangan produk, kemitraan, atau peluang
                    kolaborasi yang menarik. Jangan ragu untuk menghubungi saya.
                </p>
                <!-- Tombol Aksi Utama -->
                <a href="mailto:agus.tinus.turnip.work@gmail.com"
                    class="inline-block px-12 py-5 bg-primary-600 font-bold text-lg rounded-lg shadow-lg hover:bg-primary-700 transition-all duration-300 transform hover:-translate-y-1">
                    <span class="flex items-center gap-3">
                        <!-- Ikon Surat (SVG Heroicon) -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        Hubungi Saya via Email
                    </span>
                </a>

                <!-- Pemisah dan Link Sosial -->
                <div class="mt-16">
                    <p class="text-gray-500 mb-4">Atau temukan saya di platform lain:</p>
                    <div class="flex justify-center space-x-8">
                        <!-- Ikon LinkedIn -->
                        <a href="https://www.linkedin.com/in/agus-tinus-turnip" target="_blank"
                            rel="noopener noreferrer" class="text-gray-400 hover:text-primary-500 transition-colors"
                            title="LinkedIn">
                            <span class="sr-only">LinkedIn</span> <!-- Untuk aksesibilitas screen reader -->
                            <svg class="w-8 h-8" fill="currentColor" role="img" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z" />
                            </svg>
                        </a>
                        <!-- Ikon GitHub -->
                        <a href="https://github.com/AgusTinusT" target="_blank" rel="noopener noreferrer"
                            class="text-gray-400 hover:text-primary-500 transition-colors" title="GitHub">
                            <span class="sr-only">GitHub</span> <!-- Untuk aksesibilitas -->
                            <svg class="w-8 h-8" fill="currentColor" role="img" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

</body>
<footer id="footer" class="bg-gray-darker">
    <div class="container mx-auto px-6 py-6">
        <p class="text-center text-sm text-gray-400">
            © {{ date('Y') }} Agus Tinus Turnip. All Rights Reserved.
            <span class="hidden sm:inline-block mx-2">|</span>
            <br class="sm:hidden">
            Dibangun dengan <span class="text-red-500">♥</span> menggunakan Laravel & Tailwind CSS.
        </p>
    </div>
</footer>

</html>
