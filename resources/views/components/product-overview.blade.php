
@props(['overview'])

<div>

<div class="bg-white">
    <div class="pt-6">
     

      {{-- Model Viewer --}}

      <div class="flex justify-center w-3/4 h-6 sm:h-1/4 md:h-2/4 lg:h-3/4 p-6 mx-auto"> 
        <model-viewer
          src="{{ asset('storage/' .$overview->model3d->filePath) }}"
          alt="3D Model"
          auto-rotate
          camera-controls
          ar
          environment-image="/storage/blue_photo_studio_4k.hdr"
          skybox-image="/storage/blue_photo_studio_4k.hdr"
          shadow-intensity="1"
          shadow-softness="0.5"
          exposure="2"
          style="width: 100%; height: 100%;">
          <button slot="ar-button" style="background-color: white; border-radius: 4px; border: none; position: absolute; top: 16px; right: 16px;">
            👋 Activate AR
          </button>
        </model-viewer>
      </div>

      <!-- Image gallery -->

      
      <div class="mx-auto mt-6 max-w-2xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:px-6 sm:gap-x-2 md:gap-2 lg:max-w-7xl lg:gap-x-2 lg:px-8">
          @foreach($overview->images->take(4) as $image)
            <div class="overflow-hidden rounded-lg">
              <img 
                src="{{ asset('storage/' . $image->imagePath) }}"
                alt=""
                class="w-full h-full object-cover transition-transform duration-500 hover:scale-120"
              >
            </div>
          @endforeach

          {{-- if you want empty placeholders for missing images: --}}
          @for($i = $overview->images->count(); $i < 4; $i++)
            <div class="overflow-hidden rounded-lg bg-gray-100">
              <p class="text-center text-gray-400 py-20">No Image</p>
            </div>
          @endfor
      </div>
      {{-- <div class="mx-auto mt-6 max-w-2xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4  sm:px-6 sm:gap-x-2 md:gap-2 lg:max-w-7xl lg:gap-x-2 lg:px-8 ">
        @foreach($overview->images as $image)
        <div class="overflow-hidden">
          <img src="{{ asset('storage/' . $image->imagePath) }}" 
               class="transition-transform duration-1000 hover:scale-120 size-full rounded-lg object-cover  ">
        </div>
        <div class="overflow-hidden">
          <img src="{{ asset('storage/' . $image->imagePath) }}" 
               class="transition-transform duration-1000 hover:scale-120 size-full rounded-lg object-cover">
        </div>
        <div class="overflow-hidden">
          <img src="{{ asset('storage/' . $image->imagePath) }}" 
               class="transition-transform duration-1000 hover:scale-120 size-full rounded-lg object-cover">
        </div>
        <div class="overflow-hidden">
          <img src="{{ asset('storage/' . $image->imagePath) }}" 
               class="transition-transform duration-1000 hover:scale-120 size-full rounded-lg object-cover">
        </div>
        @endforeach
      </div> --}}
  
      <!-- Product info -->
      <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $overview->costumeName }}</h1>
        </div>
  
        <!-- Options -->
        <div class="mt-4 lg:row-span-3 lg:mt-0">
          <h2 class="sr-only">Product information</h2>
          <p class="text-3xl tracking-tight text-gray-900">Rental Price</p>
  
          <form class="mt-2">

            <span class="inline-flex items-center bg-green-50 text-green-500 text-mg font-medium ml-1 px-3 py-0.5 rounded-full mt-5">
              <span class="w-1.5 h-1.5 mr-1 bg-green-400 rounded-full"></span>
              Available for rent
          </span>

          <span class="inline-flex items-center bg-red-50 text-red-500 text-mg font-medium ml-1 px-3 py-0.5 rounded-full mt-5">
            <span class="w-1.5 h-1.5 mr-1 bg-red-400 rounded-full"></span>
            Not Available for rent
        </span>
  
            <button type="submit" class="mt-5 flex w-full items-center justify-center rounded-md border border-transparent bg-blue-600 px-8 py-3 text-base font-medium text-white hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-hidden">Book Rental</button>
          </form>
        </div>
  
        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
          <!-- Description and details -->
          <div>
            <h3 class="sr-only">Description</h3>
  
            <div class="space-y-6">
              <p class="text-base text-gray-900">{{($overview->description) }}</p>
            </div>
          </div>
  
          <div class="mt-10">
            <h3 class="text-sm font-medium text-gray-900">Highlights</h3>
  
            <div class="mt-4">
              <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span></li>
                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>
                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>
                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
              </ul>
            </div>
          </div>
  
          <div class="mt-10">
            <h2 class="text-sm font-medium text-gray-900">Details</h2>
  
            <div class="mt-4 space-y-6">
              <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus culpa, ipsum magnam ab esse quis laborum quasi! Cum, odit maiores, perferendis a autem tempore fuga voluptates sunt molestiae blanditiis deleniti!</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  