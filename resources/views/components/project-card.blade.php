@props(['project', 'delay' => '100ms'])

<div
    {{ $attributes->merge([
        'class' =>
            'group bg-white dark:bg-gray-dark rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl fade-in-element',
        'style' => "animation-delay: {$delay};",
    ]) }}>
    <div class="relative">
        <img src="{{ asset($project->image_path) }}" alt="Screenshot untuk {{ $project->title }}"
            class="w-full h-56 object-cover">
        <div
            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 transition-all duration-300 flex items-center justify-center gap-4">
            <a href="{{ $project->project_url }}" target="_blank"
                class="text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 flex items-center gap-2 bg-primary-600 hover:bg-primary-700 px-4 py-2 rounded-lg shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                </svg>
                Live Demo
            </a>
            <a href="{{ $project->github_url }}" target="_blank"
                class="text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 delay-75 flex items-center gap-2 bg-gray-800 hover:bg-gray-900 px-4 py-2 rounded-lg shadow-lg">
                <svg class="w-5 h-5" role="img" viewBox="0 0 24 24" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <title>GitHub</title>
                    <path
                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12z" />
                </svg>
                Kode
            </a>
        </div>
    </div>
    <div class="p-6">
        <h3 class="font-heading text-2xl font-bold text-gray-heading dark:text-white mb-2">{{ $project->title }}</h3>
        <p class="font-body text-base text-gray-text dark:text-gray-400 mb-6">{{ $project->description }}</p>
        <div class="flex flex-wrap gap-2">
            @foreach ($project->tags as $tag)
                @php
                    // 1. Ubah tag menjadi huruf kecil
                    $lowerTag = strtolower($tag);

                    // 2. Hapus karakter '.' dari nama tag untuk membuat kunci yang aman
                    $safeKey = str_replace('.', '', $lowerTag);

                    // 3. Gunakan kunci yang aman untuk mencari di config
                $tagColorClass = config('theme.tag_colors.' . $safeKey, config('theme.tag_colors.default')); @endphp
                <span class="font-mono text-sm px-3 py-1 rounded-full {{ $tagColorClass }}">{{ $tag }}</span>
            @endforeach
        </div>
    </div>
</div>
