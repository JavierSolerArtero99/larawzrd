@php
    $footerSections = [
        'about' => [
            'title' => 'About',
            'link' => '#',
        ],
        'policy' => [
            'title' => 'Privacy Policy',
            'link' => '#',
        ],
        'licensing' => [
            'title' => 'Licensing',
            'link' => '#',
        ],
        'contact' => [
            'title' => 'Contact',
            'link' => '#',
        ],
    ];
@endphp

<footer class="bg-white rounded-lg shadow m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">

            @include('WzrdTheme::WzrdTheme.sections.header.logo')

            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-900 sm:mb-0">
                @foreach ($footerSections as $section)
                    <li>
                        <a href="{{ $section['link'] }}" class="hover:underline me-4 md:me-6">{{ $section['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <span class="block text-sm text-gray-900 sm:text-center">
            © 2024 <a href="/" class="hover:underline">LaraWzrd</a>. All Rights Reserved.
        </span>
    </div>
</footer>
