<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- <div>
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Open main menu</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            <div class="relative">
              <button type="button" class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
                Product
                <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
              </button>
      
              <!--
                'Product' flyout menu, show/hide based on flyout menu state.
      
                Entering: "transition ease-out duration-200"
                  From: "opacity-0 translate-y-1"
                  To: "opacity-100 translate-y-0"
                Leaving: "transition ease-in duration-150"
                  From: "opacity-100 translate-y-0"
                  To: "opacity-0 translate-y-1"
              -->
              <div class="absolute top-full -left-8 z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                <div class="p-4">
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Analytics
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                    </div>
                  </div>
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Engagement
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                    </div>
                  </div>
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Security
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                    </div>
                  </div>
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Integrations
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Connect with third-party tools</p>
                    </div>
                  </div>
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">
                        Automations
                        <span class="absolute inset-0"></span>
                      </a>
                      <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                  <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
                    <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                      <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd" />
                    </svg>
                    Watch demo
                  </a>
                  <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
                    <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                      <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />
                    </svg>
                    Contact sales
                  </a>
                </div>
              </div>
            </div>
      
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Features</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Marketplace</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Company</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
          </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-10"></div>
          <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
              </a>
              <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <div class="-mx-3">
                    <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                      Product
                      <!--
                        Expand/collapse icon, toggle classes based on menu open state.
      
                        Open: "rotate-180", Closed: ""
                      -->
                      <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                      </svg>
                    </button>
                    <!-- 'Product' sub-menu, show/hide based on menu state. -->
                    <div class="mt-2 space-y-2" id="disclosure-1">
                      <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
                      <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
                      <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>
                      <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Integrations</a>
                      <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Automations</a>
                      <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Watch demo</a>
                      <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Contact sales</a>
                    </div>
                  </div>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                </div>
                <div class="py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>




      <div
      x-data="{ 
        openProductMenu: false,    // controls the desktop “Product” dropdown 
        openMobileMenu: false      // controls the mobile menu 
      }"
    >
      <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
          <!-- Logo / Home link -->
          <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
          </div>
    
          <!-- Mobile menu button -->
          <div class="flex lg:hidden">
            <button
              @click="openMobileMenu = !openMobileMenu"
              type="button"
              class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
              :aria-expanded="openMobileMenu.toString()"
            >
              <span class="sr-only">Toggle mobile menu</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
    
          <!-- Desktop menu -->
          <div class="hidden lg:flex lg:gap-x-12">
            <div class="relative" @click.away="openProductMenu = false">
              <!-- Dropdown trigger -->
              <button
                @click="openProductMenu = !openProductMenu"
                type="button"
                class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900"
                :aria-expanded="openProductMenu.toString()"
              >
                Product
                <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
                </svg>
              </button>
    
              <!-- Flyout panel -->
              <div
                x-show="openProductMenu"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-1"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-1"
                class="absolute top-full -left-8 z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5"
                style="display: none;"
              >
                <div class="p-4">
                  <!-- Repeat this block for each item -->
                  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <!-- icon -->
                      <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                      </svg>
                    </div>
                    <div class="flex-auto">
                      <a href="#" class="block font-semibold text-gray-900">Analytics<span class="absolute inset-0"></span></a>
                      <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                    </div>
                  </div>
                  <!-- ...other items -->
                </div>
              </div>
            </div>
    
            <!-- Other desktop links -->
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Features</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Marketplace</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Company</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
          </div>
        </nav>
      </header>
    
      <!-- Mobile menu panel -->
      <div
        x-show="openMobileMenu"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="lg:hidden absolute inset-0 z-20 bg-white p-6"
        style="display: none;"
      >
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button @click="openMobileMenu = false" type="button" class="-m-2.5 p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 space-y-6">
          <a href="#" class="block text-gray-900">Product</a>
          <a href="#" class="block text-gray-900">Features</a>
          <a href="#" class="block text-gray-900">Marketplace</a>
          <a href="#" class="block text-gray-900">Company</a>
        </div>
      </div>
    </div>
     --}}

    
<div
x-data="{
  openProductMenu: false,         // desktop “Product” flyout
  openMobileMenu: false,          // mobile slide-over
  openMobileProduct: false        // mobile “Product” disclosure
}"
class="relative"
>
<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <!-- Logo -->
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://scontent.fdvo1-2.fna.fbcdn.net/v/t39.30808-6/305464939_508958237897691_6681873665478123931_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHqIfc6H0BZcZ2tBPRLqy61Q8-iOAWA2JhDz6I4BYDYmADiZp12PRhOuKjGy6Qrp9HT87dxwsI90Ak36WCI6vbo&_nc_ohc=sLCRFEKhbQsQ7kNvwHV68nD&_nc_oc=AdmICFuIuV31Dd1xs6WC-GzTCpC3HlP7hPe5e9pTlpTaAHUSHX3eZsrTqHfdxLVN8UQ&_nc_zt=23&_nc_ht=scontent.fdvo1-2.fna&_nc_gid=VxBkc8HEqcytBpdNxzIJ-Q&oh=00_AfGlUFZBB5lSRc87WBVol9gq-7-6YzsAbV7A3pOVJ1r_Eg&oe=68062D1C" alt="">
      </a>
    </div>

    <!-- Mobile menu button -->
    <div class="flex lg:hidden">
      <button
        @click="openMobileMenu = true"
        type="button"
        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
        aria-label="Open menu"
      >
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>

    <!-- Desktop menu -->
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative" @click.away="openProductMenu = false">
        <!-- Product trigger -->
        <button
          @click="openProductMenu = !openProductMenu"
          type="button"
          class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900"
          :aria-expanded="openProductMenu.toString()"
        >
          Product
          <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
              clip-rule="evenodd" />
          </svg>
        </button>

        <!-- Product flyout -->
        <div
          x-show="openProductMenu"
          x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 translate-y-1"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 translate-y-0"
          x-transition:leave-end="opacity-0 translate-y-1"
          class="absolute top-full -left-8 z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5"
          style="display: none;"
        >
          <div class="p-4">
            <!-- Example item -->
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <!-- icon -->
                <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">Analytics<span class="absolute inset-0"></span></a>
                <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
              </div>
            </div>
            <!-- …other items… -->
          </div>
        </div>
      </div>

      <!-- Other desktop links -->
      <a href="#" class="text-sm/6 font-semibold text-gray-900">placeholder</a>
      <a href="#" class="text-sm/6 font-semibold text-gray-900">placeholder</a>
      <a href="#" class="text-sm/6 font-semibold text-gray-900">placeholder</a>
    </div>

    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-sm/6 font-semibold text-gray-900">placeholder <span aria-hidden="true">→</span></a>
    </div>
  </nav>
</header>

<!-- Mobile slide-over -->
<div
  x-show="openMobileMenu"
  x-transition:enter="transition ease-out duration-200"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in duration-150"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="lg:hidden fixed inset-0 z-10"
  aria-modal="true"
  style="display: none;"
>
  <!-- backdrop -->
  <div class="fixed inset-0 bg-black/50" @click="openMobileMenu = false"></div>

  <!-- panel -->
  <div class="fixed inset-y-0 right-0 z-20 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
    <div class="flex items-center justify-between">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
      <button
        @click="openMobileMenu = false"
        type="button"
        class="-m-2.5 rounded-md p-2.5 text-gray-700"
        aria-label="Close menu"
      >
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="mt-6 flow-root">
      <div class="-my-6 divide-y divide-gray-500/10">
        <div class="space-y-2 py-6">
          <!-- Mobile “Product” disclosure -->
          <div class="-mx-3">
            <button
              @click="openMobileProduct = !openMobileProduct"
              type="button"
              class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50"
              :aria-expanded="openMobileProduct.toString()"
              aria-controls="mobile-product-panel"
            >
              Product
              <svg
                :class="{ 'rotate-180': openMobileProduct }"
                class="size-5 transition-transform"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path fill-rule="evenodd"
                  d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                  clip-rule="evenodd" />
              </svg>
            </button>
            <div
              x-show="openMobileProduct"
              x-transition
              class="mt-2 space-y-2 px-3"
              id="mobile-product-panel"
              style="display: none;"
            >
              <a href="#" class="block rounded-lg py-2 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
              <a href="#" class="block rounded-lg py-2 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
              <a href="#" class="block rounded-lg py-2 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>
              <a href="#" class="block rounded-lg py-2 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Integrations</a>
              <a href="#" class="block rounded-lg py-2 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Automations</a>
              <a href="#" class="block rounded-lg py-2 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Watch demo</a>
              <a href="#" class="block rounded-lg py-2 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Contact sales</a>
            </div>
          </div>

          <!-- other mobile links -->
          <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
          <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
          <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
        </div>

        <div class="py-6">
          <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>