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
</body>

</html>
