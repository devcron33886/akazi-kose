<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

<body class="font-sans antialiased bg-gray-100">

    <x-menu-component />
    <div class="relative flex flex-col-reverse py-8 lg:pt-0 lg:flex-col lg:pb-0 bg-white">
        <div
            class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
            <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block"
                viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
                <path d="M50 0H100L50 100H0L50 0Z"></path>
            </svg>
            <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
                src="{{ asset('images/akazikose.jpg') }}" alt="" />
        </div>
        <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
            <div class="mb-8 lg:my-20 lg:max-w-lg lg:pr-5">

                <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    Welcome to akazikose.com,<br class="hidden md:block" />
                    where opportunities meet talents.
                </h2>
                <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
                    Whether you are seeking opportunities or hiring talents, look no further. Akazikose.com has
                    everything you need. Enjoy exploring!
                </p>
                <div class="flex items-center">
                    <livewire:search />
                </div>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-6 w-full max-w-screen-xl mx-auto">
                <div class="overflow-hidden rounded-md border border-blue-500 bg-blue-500 p-1">
                    <ul class="flex items-center gap-2 text-sm font-medium">
                        @foreach ($categories as $category)
                            <li class="py-1 px-1">
                                <a href="{{ route('category.show', $category->slug) }}"
                                    class="inline-flex text-blue-400 bg-gray-100 cursor-pointer items-center gap-2 rounded-lg px-3 py-2 hover:bg-white hover:text-black hover:shadow"
                                    wire:navigate>
                                    {{ $category->name }} <span
                                        class="rounded-full bg-green-300 px-2 py-0.5 text-xs font-semibold ">
                                        {{ $category->adverts->count() }}
                                    </span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @foreach ($adverts as $advert)
                    <div class="mt-4 sm:px-4">
                        <div class="flex flex-col bg-white border border-blue-500 rounded-lg px-4 py-2 md:flex-row sm:flex-row">
                            <div class="md:mr-4 mb-2 md:mb-0">
                                <img src="/storage/{{ $advert->institution->logo ?? '-' }}" alt="{{ $advert->institution->name ?? '-' }}" class="h-12 object-cover h-auto">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-md font-semibold text-blue-600 mb-1">{{ $advert->title ?? '-'}}</h2>
                                <p class="text-gray-900">
                                    {{ $advert->institution->name ?? '-' }}|
                                    {{ $advert->location ?? '-'}}| Published on: {{ $advert->formatted_date ?? '-' }}| Deadline:
                                    {{ $advert->formatted_deadline ?? '-' }}| Experience:
                                    {{ $advert->desired_experience ?? 'Not specified' }}
                                </p>
                                <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded">{{ $advert->category->name ?? '-' }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-footer-component />

</body>

</html>
