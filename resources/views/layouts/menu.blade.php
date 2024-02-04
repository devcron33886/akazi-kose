<nav class="bg-white shadow" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex px-2 lg:px-0">
                <div class="flex flex-shrink-0 items-center">
                    <img class="block h-10 w-auto lg:hidden" src="{{ asset('images/Logo.png') }}"
                        alt="{{ config('app.name') }}">
                    <img class="hidden h-14 w-auto lg:block" src="{{ asset('images/Logo.png') }}"
                        alt="{{ config('app.name') }}">
                </div>

                <div class="hidden lg:ml-6 lg:flex lg:space-x-8">
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('employers')" :active="request()->routeIs('employers')" wire:navigate>
                            {{ __('Employers') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')" wire:navigate>
                            {{ __('Contact us') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                <div class="flex items-center lg:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                </div>

            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div :class="{ 'block': open, 'hidden': !open }" class="lg:hidden" id="mobile-menu">
            <div class="space-y-1 pb-3 pt-2">
                <a href="#"
                    class="block border-l-4 border-blue-500 bg-blue-50 py-2 pl-3 pr-4 text-base font-medium text-blue-700">Dashboard</a>
                <a href="#"
                    class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Team</a>
                <a href="#"
                    class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Projects</a>
                <a href="#"
                    class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Calendar</a>
            </div>

        </div>
    </div>
</nav>
