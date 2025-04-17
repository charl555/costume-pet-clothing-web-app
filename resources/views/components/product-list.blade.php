@props(['costumes'])

<div x-data="{ open: false, modelUrl: '' }">
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Costumes</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach($costumes as $costume)
                <div class="group border rounded-lg p-4 hover:shadow-md transition">
                    <img src="{{ asset('storage/' .$costume->thumbnail) }}"
                        alt='{{ $costume->costumeName }}'
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">{{ $costume->costumeName }}</h3>
                    <h3 class="mt-1 text-sm text-gray-700">{{ $costume->category }}</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">{{ Str::limit($costume->description, 80) }}</p>
                    
                    <button @click="open = true; modelUrl = '{{ asset('storage/' . $costume->file_path) }}'"
                        type="button"
                        class="mt-4 py-2 px-4 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">
                        View 3D Model
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div x-show="open" x-transition class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center">
        <div @click.away="open = false" class="bg-white p-6 rounded-lg max-w-4xl w-full shadow-lg">
            <h2 class="text-xl text-black font-bold mb-4 ">3D Costume Preview</h2>
            <model-viewer
                x-bind:src="modelUrl"
                alt="3D Model"
                auto-rotate
                camera-controls
                ar
                style="width: 100%; height: 500px;">
            </model-viewer>
            <div class="text-right mt-4">
                <button @click="open = false" class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-800">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
