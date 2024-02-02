<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home-{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:400,500,600,700" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white dark:bg-gray-900">
        <x-menu-component />
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <livewire:search />

                <div x-data="{ activeTab: 0 }" class="mt-12">
                    <div class="overflow-hidden rounded-md border border-gray-100 bg-gray-50 p-1">
                        <ul class="flex items-center gap-2 text-sm font-medium">
                            @foreach ($categories as $category)
                                <li class="py-1 px-1">
                                    <a @click="activeTab = {{ $loop->index }}"
                                        :class="{ 'bg-white shadow text-gray-700': activeTab === {{ $loop->index }} }"
                                        class="inline-flex cursor-pointer items-center gap-2 rounded-lg px-3 py-2 hover:bg-white hover:text-gray-700 hover:shadow">
                                        {{ $category->name }} <span
                                            class="rounded-full bg-green-300 px-2 py-0.5 text-xs font-semibold ">
                                            {{ $category->adverts->count() }}
                                        </span></a>
                                </li>
                            @endforeach


                        </ul>
                    </div>

                    <hr class="mt-5 my-8 h-px border-0 bg-gray-300" />

                    <div class="py-6">
                        <div :class="{ '!block': activeTab === 0 }"
                            x-show.transition.in.opacity.duration.600="activeTab === 0" class="hidden">
                            <x-job-component />
                        </div>
                        <div :class="{ '!block': activeTab === 1 }"
                            x-show.transition.in.opacity.duration.600="activeTab === 1" class="hidden">
                            <x-tender-component />
                        </div>
                        <div :class="{ '!block': activeTab === 2 }"
                            x-show.transition.in.opacity.duration.600="activeTab === 2" class="hidden">
                            <x-consultancy-component />
                        </div>
                        <div :class="{ '!block': activeTab === 3 }"
                            x-show.transition.in.opacity.duration.600="activeTab === 3" class="hidden">
                            <x-internship-component />
                        </div>
                        <div :class="{ '!block': activeTab === 4 }"
                            x-show.transition.in.opacity.duration.600="activeTab === 4" class="hidden">
                            <x-other-component />
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>
