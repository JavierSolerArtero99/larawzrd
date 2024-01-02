@php
    $menuItems = [
        'product' => [
            'title' => 'Product',
            'link' => '#',
            'icon' => '<svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                    </svg>',
            'sublevels' => [
                'analytics' => [
                    'title' => 'Analytics',
                    'description' => 'Get a better understanding of your traffic',
                    'icon' => '<svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                    </svg>',
                ],
                'engagement' => [
                    'title' => 'Engagement',
                    'description' => 'Speak directly to your customers',
                    'icon' => '<svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                    </svg>',
                ],
                'security' => [
                    'title' => 'Security',
                    'description' => 'Your customers’ data will be safe and secure',
                    'icon' => '<svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                    </svg>',
                ],
                'integrations' => [
                    'title' => 'Integrations',
                    'description' => 'Connect with third-party tools',
                    'icon' => '<svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                    </svg>',
                ],
                'automations' => [
                    'title' => 'Automations',
                    'description' => 'Build strategic funnels that will convert',
                    'icon' => '<svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>',
                ],
            ],
        ],
        'features' => [
            'title' => 'Features',
            'link' => '#',
            'sublevels' => [],
        ],
        'marketplace' => [
            'title' => 'Marketplace',
            'link' => '#',
            'sublevels' => [],
        ],
        'company' => [
            'title' => 'Company',
            'link' => '#',
            'sublevels' => [],
        ],
    ];

    $caretDownSvg = '<svg class="h-5 w-5 flex-none text-gray-400 cursor-pointer" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>';
@endphp


<script>
    function menuItem() {
        return {
            @foreach ($menuItems as $itemKey => $item)
                open{{ $itemKey }}: false,
            @endforeach
        }
    }
</script>

<div class="flex gap-x-12">
    @foreach ($menuItems as $itemKey => $item)
        <div x-data="menuItem()" class="flex items-center gap-0.5" @mouseover="open{{ $itemKey }} = true">
            <a href={{ $item['link'] }} class="text-sm font-semibold leading-6 text-gray-900">
                {{ $item['title'] }}
            </a>
            @if ($item['sublevels'])
                <div class="relative">
                    <?= $caretDownSvg ?>
                    <div x-show="open{{ $itemKey }}" x-cloak @mouseout="open{{ $itemKey }} = false"
                        class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                        <div class="p-4">
                            @foreach ($item['sublevels'] as $subKey => $subItem)
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div
                                        class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <?= $subItem['icon'] ?>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold text-gray-900">
                                            {{$subItem['title']}}
                                        </a>
                                        <p class="mt-1 text-gray-600">{{$subItem['description']}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endforeach
</div>
