@foreach ($adverts as $advert)
    <div class="py-1">
        <div class="border rounded-md shadow-sm p-6 dark:bg-gray-900 dark:border-slate-700">
            <h1 class="text-xl font-bold text-black dark:text-gray-100">{{ $advert->title }}</h1>
        </div>
    </div>
@endforeach
