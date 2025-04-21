@props(['costumes'])

<div>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Costumes</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-1 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach($costumes as $costume)
                @php
                $thumb = $costume->images->firstWhere('thumbnail', true);
              @endphp
                <div class="group border rounded-lg p-4 hover:shadow-md transition">
                    <a href="{{ route('product.overview', ['id' => $costume->costumeId]) }}" class="block group border rounded-lg p-4">
                        <img src="{{ asset('storage/' . $thumb->imagePath) }}"
                             alt="{{ $costume->costumeName }}"
                             class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <h3 class="mt-4 text-lg sm:text-lg text-gray-700">{{ $costume->costumeName }}</h3>
                        <h3 class="mt-1 text-lg sm:text-lg text-gray-700">{{ $costume->ageCategory }}</h3>
                        <h3 class="mt-1 text-lg sm:text-lg text-gray-700">{{ $costume->costumeCategory }}</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ Str::limit($costume->description, 80) }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
