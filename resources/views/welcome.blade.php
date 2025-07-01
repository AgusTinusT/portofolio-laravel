<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<header>
    <nav class="bg-gray-800 text-white">
        <div class="container mx-auto flex justify-between items-center py-4">
            <a href="">
                <img class="h-10 w-10" src="{{ asset('images/java.png') }}" alt="">
            </a>
            <div class="flex">
                <a href="" class="text-xl hover:text-indigo-600 transition duration-300 pr-6">home</a>
                <a href="" class="text-xl hover:text-indigo-600 transition duration-300 pr-6">about</a>
                <a href="" class="text-xl hover:text-indigo-600 transition duration-300">contact</a>
            </div>
        </div>
    </nav>
</header>

<body>
    <section id="introduction" class="bg-gray-100 py-16 min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-center gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-7xl font-extrabold text-gray-800 mb-8">Agus Tinus Turnip</h2>
                <h2 class="text-4xl font-extrabold text-gray-800 mb-8">Full-Stack Developer</h2>

                <p class="text-3xl text-gray-700 leading-relaxed mb-12 max-w-3xl mx-auto">
                    Saya seorang Full-Stack Developer dengan pengalaman dalam mengembangkan aplikasi mobile dan
                    website yang dinamis dan efisien. Saya antusias dalam membangun solusi digital yang inovatif dan
                    berorientasi pada pengguna.
                </p>

                <div class="flex justify-center md:justify-start gap-4 mb-8"> <a
                        href="https://www.linkedin.com/in/agus-tinus-turnip" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center text-xl px-4 py-2 border border-transparent  font-medium rounded-md shadow-sm text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                        <i class="fab fa-linkedin mr-2"></i> LinkedIn
                    </a>
                    <a href="https://github.com/AgusTinusT" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center text-xl px-4 py-2 border border-transparent font-medium rounded-md shadow-sm text-gray-800 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 transition duration-300">
                        <i class="fab fa-github mr-2"></i> GitHub
                    </a>
                </div>
            </div>

            <div class="md:w-1/2 flex justify-center"> <img src="{{ asset('images/undraw_web-devices.svg') }}"
                    alt="Ilustrasi Pengembangan Web dan Mobile" class="">
            </div>
        </div>
    </section>
    <section id="what-i-do" class="bg-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-12">Apa yang Saya Lakukan?</h2>

            <div class="flex flex-col items-center gap-10">

                <div class="p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 w-full">
                    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                        <div class="md:w-1/2 flex justify-center flex-shrink-0">
                            <img src="{{ asset('images/undraw_mobile-dev-illustration.svg') }}" alt="Mobile Development"
                                class="w-auto">
                        </div>
                        <div class="md:w-1/2 text-center md:text-left flex-grow">
                            <h3 class="text-5xl font-bold text-blue-600 mb-3">Pengembangan Mobile</h3>
                            <div class="flex justify-center md:justify-center gap-4 text-4xl my-6">
                                <i class="fab fa-android text-green-500" title="Android"></i>
                                <i class="fab fa-java text-orange-500" title="Java"></i>
                                <i class="fab fa-flutter text-blue-500" title="Flutter"></i>
                                <i class="fab fa-dart-lang text-blue-500" title="Dart"></i>

                            </div>
                            <p class="text-gray-700 text-xl mb-3">Berpengalaman dengan:</p>
                            <ul class="text-gray-600 mt-2 text-left">
                                <li class="flex items-start text-xl mb-2"> <i
                                        class="fas fa-bolt text-blue-500 mr-2 pt-1"></i>
                                    <div><strong>Android Kotlin</strong>: Membangun aplikasi Android native yang
                                        performa tinggi dan
                                        user-friendly menggunakan Kotlin untuk pengalaman pengguna yang optimal.
                                        Fokus
                                        pada arsitektur modern seperti MVVM dan integrasi API yang mulus.</div>
                                </li>
                                <li class="flex items-start text-xl"> <i
                                        class="fas fa-bolt text-blue-500 mr-2 pt-1"></i>
                                    <div><strong>Flutter</strong>: Mengembangkan aplikasi lintas platform yang indah
                                        dan fungsional untuk
                                        iOS dan Android dari satu codebase. Mahir dalam desain UI/UX responsif,
                                        manajemen state, dan integrasi fitur perangkat keras.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 w-full">
                    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                        <div class="md:w-1/2 flex justify-center flex-shrink-0">
                            <img src="{{ asset('images/undraw_web-dev-illustration.svg') }}" alt="Web Development"
                                class="w-auto">
                        </div>
                        <div class="md:w-1/2 text-center md:text-left flex-grow">
                            <h3 class="text-5xl font-bold text-green-600 mb-3">Pengembangan Web</h3>
                            <div class="flex justify-center md:justify-center gap-4 text-4xl my-6">
                                <i class="fab fa-laravel text-red-500" title="Laravel"></i>
                                <i class="fab fa-html5 text-orange-500" title="HTML5"></i>
                                <i class="fab fa-css3-alt text-blue-500" title="CSS3"></i>
                                <i class="fab fa-js-square text-yellow-500" title="JavaScript"></i>
                            </div>
                            <p class="text-gray-700 text-xl mb-3">Mahir dalam:</p>
                            <ul class="text-gray-600 mt-2 text-left">
                                <li class="flex text-xl mb-2"> <i
                                        class="fas fa-bolt text-green-500 mr-2 flex-shrink-0 mt-1"></i>
                                    <div> <strong>Laravel</strong>: Membangun backend yang kokoh, scalable, dan aman
                                        menggunakan framework PHP Laravel. Pengalaman dalam pengembangan RESTful
                                        API, otentikasi, database ORM, dan pengujian unit/integrasi.
                                    </div>
                                </li>
                                <li class="flex text-xl mb-2">
                                    <i class="fas fa-bolt text-green-500 mr-2 flex-shrink-0 mt-1"></i>
                                    <div>
                                        <strong>Tailwind CSS</strong>: Desain UI yang cepat dan responsif dengan
                                        pendekatan utility-first. Mampu membangun komponen kustom dan mengoptimalkan
                                        performa CSS.
                                    </div>
                                </li>
                                <li class="flex text-xl">
                                    <i class="fas fa-bolt text-green-500 mr-2 flex-shrink-0 mt-1"></i>
                                    <div>
                                        <strong>HTML, CSS, JavaScript</strong>: Fondasi utama pengembangan web.
                                        Menguasai struktur semantik HTML, styling CSS yang canggih, dan
                                        fungsionalitas interaktif dengan JavaScript modern.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 w-full">
                    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                        <div class="md:w-1/2 flex justify-center flex-shrink-0">
                            <img src="{{ asset('images/undraw_tools-illustration.svg') }}" alt="Supporting Tools"
                                class="w-auto">
                        </div>
                        <div class="md:w-1/2 text-center md:text-left flex-grow">
                            <h3 class="text-5xl font-bold text-purple-600 mb-3">Komponen Pendukung</h3>
                            <div class="flex justify-center md:justify-center gap-4 text-4xl my-6">
                                <i class="fas fa-database text-gray-700" title="Database"></i>
                                <i class="fab fa-git-alt text-orange-600" title="Git"></i>
                            </div>
                            <p class="text-gray-700 text-xl mb-3">Mampu bekerja dengan:</p>
                            <ul class="text-gray-600 mt-2 text-left">
                                <li class="flex items-start text-xl mb-2"> <i
                                        class="fas fa-bolt text-purple-500 mr-2 pt-1"></i>
                                    <div><strong>Database (MySQL,
                                            PostgreSQL)</strong>: Desain skema database yang efisien, optimasi
                                        query,
                                        dan manajemen
                                        data untuk aplikasi berskala besar.</div>
                                </li>
                                <li class="flex items-start text-xl mb-2"> <i
                                        class="fas fa-bolt text-purple-500 mr-2 pt-1"></i>
                                    <div><strong>Sistem Kontrol
                                            Versi
                                            (Git)</strong>: Mahir dalam manajemen kode sumber, kolaborasi tim
                                        menggunakan Git, dan
                                        alur kerja seperti Gitflow atau Trunk-Based Development.</div>
                                </li>
                                <li class="flex items-start text-xl"> <i
                                        class="fas fa-bolt text-purple-500 mr-2 pt-1"></i>
                                    <div>

                                        <strong>Deployment & Optimasi</strong>: Pengalaman dalam deployment aplikasi
                                        ke
                                        lingkungan
                                        produksi, pemantauan performa, dan optimasi kecepatan aplikasi.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
