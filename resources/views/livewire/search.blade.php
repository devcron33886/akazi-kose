<div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
    <div class="flex items-center px-6 py-4 md:mx-auto md:max-w-3xl lg:mx-0 lg:max-w-none xl:px-0">
        <div class="w-full">
            <label for="search" class="sr-only">Search</label>
            <div class="relative " x-data="{
                searchJobs(event) {
                    document.getElementById('searchInput').focus();
                    event.preventDefault();
                }
            
            }">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input wire:model.live.throttle.150ms="search" id="searchInput" @keydown.slash.window="searchJobs"
                    class="block w-full rounded-md border-0 bg-white py-1.5 pl-10 pr-3 text-blue-900 ring-1 ring-inset ring-blue-500 placeholder:text-blue-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6"
                    placeholder="Start typing" type="search" autocomplete="off">
                <div class="absolute mt-2 w-full overflow-hidden rounded-md bg-blue-100">
                    @foreach ($results as $result)
                        <div class="cursor-pointer py-2 px-3">
                            <p class="text-sm font-semibold text-gray-900">{{ $result->title }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
