<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - {{ config('app.name', 'Laravel') }}</title>
    <meta
        description="Akazi kose company that is located in Kigali Rwanda. It helps in finding jobs,tenders,consultancy,training and internships.">
    <meta
        keywords="Home,Rwanda,Kigali,akazi kose,jobs,job,online job,online jobs,jobs online,consultancy,training,training online,internships">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
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
                    <div class="overflow-hidden rounded-md border border-blue-600 bg-gray-100 p-1">
                        <ul class="flex items-center gap-2 text-sm font-medium">
                            @foreach ($categories as $category)
                                <li class="py-1 px-1">
                                    <a href="{{ route('category.show', $category->slug) }}"
                                        class="inline-flex cursor-pointer items-center gap-2 rounded-lg px-3 py-2 hover:bg-white hover:text-gray-700 hover:shadow"
                                        wire:navigate>
                                        {{ $category->name }} <span
                                            class="rounded-full bg-green-300 px-2 py-0.5 text-xs font-semibold ">
                                            {{ $category->adverts->count() }}
                                        </span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="py-6 w-full">
                        @foreach ($adverts as $advert)
                            <div class="mt-16 space-y-6 lg:mt-20 lg:space-y-20">

                                <a href="{{ route('adverts.show', $advert->slug) }}"
                                    class="flex flex-col items-center bg-white border border-blue-600 rounded-lg shadow md:flex-row md:max-w-full">
                                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                        src="/storage/{{ $advert->institution->logo }}" alt="{{ $advert->title }}">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $advert->title }}</h5>
                                        <div class="md:inline-flex sm:col-span-1 items-center gap-2">
                                            <p class="text-blue-700">{{ $advert->institution->name }}</p>|
                                            <p>Location: {{ $advert->location }} |</p>
                                            <p>Published on: {{ $advert->formatted_date }} |</p>
                                            <p>Deadline: {{ $advert->formatted_deadline }} |</p>
                                            <p>{{ $advert->desired_experience }}</p>

                                        </div>

                                    </div>
                                    <div class="mt-2">
                                        <span
                                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">{{ $advert->category->name }}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>
    <x-footer-component />

</body>

</html>
