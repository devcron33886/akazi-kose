<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:400,500,600,700" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <x-menu-component />

        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="min-w-0 flex-1">
                        <h1 class="text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight">
                            {{ $advert->title }}
                        </h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container mx-auto flex flex-wrap py-6">

                    <!-- Posts Section -->
                    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

                        <article class="flex flex-col shadow-sm my-4">
                            <div class="bg-white flex flex-col rounded-md justify-start p-6">


                                <p " class="pb-6">{!! $advert->body !!}</p>
                                
                            </div>
                        </article>
                    </section>

                    <!-- Sidebar Section -->
                    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

                        <div class="w-full bg-white shadow-sm rounded-md flex flex-col my-4 p-6">
                            <p class="text-xl font-semibold capitalize pb-5">{{ $advert->category->name }} Summary</p>
                            <div class="overflow-hidden rounded-md bg-white shadow">
                                <ul role="list" class="divide-y divide-gray-200">
                                  <li class="px-6 py-4">
                                    <!-- Your content -->
                                  </li>
                              
                                  <!-- More items... -->
                                </ul>
                            </div>
                            
                        </div>
                        <div class="w-full bg-white shadow-sm rounded-md flex flex-col my-4 p-6">
                            <p class="text-xl font-semibold pb-5 capitalize">Related {{ $advert->category->name }}</p>
                            <ul role="list" class="divide-y divide-gray-100">
                                <li class="flex items-center justify-between gap-x-6 py-5">
                                    <div class="min-w-0">
                                        <div class="flex items-start gap-x-3">
                                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            <p class="text-sm font-semibold leading-6 text-gray-900">GraphQL API</p>
                                            <p
                                            class="rounded-md whitespace-nowrap mt-0.5 px-1.5 py-0.5 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">
                                            Complete</p>
                                        </div>
                                        <div class="mt-1 flex items-center gap-x-2 text-xs leading-5 text-gray-500">
                                            <p class="whitespace-nowrap">Due on <time datetime="2023-03-17T00:00Z">March 17, 2023</time></p>
                                            <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 fill-current">
                                                <circle cx="1" cy="1" r=" 1" />
                                </svg>
                                <p class="truncate"> by Leslie Alexander</p>
                            </div>
                </div>
                </li>
                </ul>
            </div>
            </aside>
        </div>
    </div>

</body>

</html>
