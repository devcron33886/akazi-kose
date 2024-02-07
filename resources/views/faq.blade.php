<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Faqs - {{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Here is the list of all questions and answes you may ask yourself nad thier answers about Akazi kose company that is located in Kigali Rwanda">
    <meta name="keywords"
        content="Faqs,faq,help,ubufasha,questions,answers,adverts,jobs,tender,consultancy,internships,internship,job,Kigali, Rwanda">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:400,500,600,700" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <x-menu-component />

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <livewire:search />
                <div class="container mx-auto flex flex-wrap py-6">

                    <!-- Posts Section -->
                    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

                        <article class="flex flex-col shadow-sm my-4">
                            <div class="bg-white flex flex-col rounded-md justify-start p-6">




                            </div>
                        </article>
                    </section>

                    <!-- Sidebar Section -->
                    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

                        <div class="w-full bg-white shadow-sm rounded-md flex flex-col my-4 p-6">
                            <p class="text-xl font-semibold capitalize pb-5">
                                Subscribe to our Newsletter
                            </p>
                            <div class="overflow-hidden rounded-md bg-white shadow">

                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
