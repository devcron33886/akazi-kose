@foreach ($adverts as $advert)
    <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
        <article class="relative isolate flex flex-col gap-8 lg:flex-row">
            <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                    alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
            </div>
            <div>

                <div class="group relative max-w-xl">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="{{ route('adverts.show', $advert->slug) }}">
                            <span class="absolute inset-0"></span>
                            {{ $advert->title }}
                        </a>
                    </h3>
                    <p class="mt-5 text-sm leading-6 text-gray-600">{!! Str::limit($advert->body, 350) !!}</p>
                </div>
                <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                    <div class="relative flex items-center gap-x-4">
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-300 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $advert->location }}</a>
                        <a href="#"
                            class="relative z-10 rounded-full bg-blue-200 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $advert->deadline }}</a>
                        <a href="#"
                            class="relative z-10 rounded-full bg-blue-200 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $advert->contract_type }}</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endforeach
