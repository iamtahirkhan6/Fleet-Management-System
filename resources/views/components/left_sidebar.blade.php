<div class="flex h-screen overflow-hidden bg-gray-100">
    <div class="md:hidden" x-show="leftSidebar" x-cloak>
        <div class="fixed inset-0 z-40 flex">
            <div class="fixed inset-0" aria-hidden="true"
                x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
            </div>
            <div class="relative flex flex-col flex-1 w-full max-w-xs bg-indigo-700"
                x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
                <div class="absolute top-0 right-0 pt-2 -mr-12">
                    <button @click="leftSidebar = false"
                        class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: x -->
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <img class="w-auto h-8" src="http://127.0.0.1:8000/img/theme/asklogistiek.png" alt="Workflow">
                    </div>
                    <nav class="px-2 mt-5 space-y-1">
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center px-2 py-2 text-base font-medium text-white bg-indigo-800 rounded-md group">
                            <!-- Heroicon name: home -->
                            <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="/employees"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                            <!-- Heroicon name: users -->
                            <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Employees
                        </a>

                        <a href="/projects"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                            <!-- Heroicon name: folder -->
                            <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Projects
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                            <!-- Heroicon name: calendar -->
                            <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Calendar
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                            <!-- Heroicon name: inbox -->
                            <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            Documents
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                            <!-- Heroicon name: chart-bar -->
                            <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Reports
                        </a>
                    </nav>
                </div>
                <div class="flex flex-shrink-0 p-4 border-t border-indigo-800">
                    <a href="#" class="flex-shrink-0 block group">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block w-10 h-10 rounded-full"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-base font-medium text-white">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="text-sm font-medium text-indigo-200 group-hover:text-white">
                                    View profile
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden bg-indigo-800 md:flex md:flex-shrink-0">
        <div class="flex flex-col w-60">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-1 h-0">
                <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <img class="w-auto h-8" src="http://127.0.0.1:8000/img/theme/asklogistiek.png" alt="Workflow">
                    </div>
                    <nav class="flex-1 px-2 mt-5 space-y-1">
                        <a href="{{ route('dashboard') }}"
                            class="group flex items-center px-2 py-2 text-sm font-medium text-white rounded-md 
                            @if (Route::currentRouteName() == 'employees') bg-indigo-700 @else hover:bg-indigo-600 hover:bg-opacity-75 @endif">
              <!-- Heroicon name: users -->
              <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              Employees
            </a>

            <a href="/projects" class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
              <!-- Heroicon name: folder -->
              <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              Projects
            </a>

            <a href="/consignees" class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
              <!-- Heroicon name: truck -->
              <?xml version="1.0" encoding="utf-8"?>
              <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <defs>
                  <filter id="filter_1">
                    <feColorMatrix in="SourceGraphic" type="matrix" values="0 0 0 0 0.64705884 0 0 0 0 0.7058824 0 0 0 0 0.9882353 0 0 0 1 0" />
                  </filter>
                  <path d="M0 0L24 0L24 24L0 24L0 0Z" id="path_1" />
                  <clipPath id="mask_1">
                    <use xlink:href="#path_1" />
                  </clipPath>
                </defs>
                <g id="svg-3" filter="url(#filter_1)">
                  <path d="M0 0L24 0L24 24L0 24L0 0Z" id="Background" fill="none" fill-rule="evenodd" stroke="none" />
                  <g clip-path="url(#mask_1)">
                    <path d="M20.3191 2.68065L21.1025 2.68065L21.2665 2.1579L18.283 2.1579L18.1191 2.68065L19.1682 2.68065C19.5713 2.68065 19.9099 2.94124 20.0335 3.30142L18.283 3.30142L18.1191 3.82417L20.0537 3.82417C19.9514 4.21807 19.5955 4.51028 19.1682 4.51028L18.1191 4.51028L18.1191 4.91176L20.0534 6.86267L20.7419 6.86267L20.7419 6.79733L18.9059 4.96769C19.067 4.96769 19.2582 4.96769 19.2993 4.96769C19.9813 4.96769 20.5433 4.47265 20.6532 3.82417L21.1025 3.82417L21.2665 3.30142L20.6428 3.30142C20.5911 3.06514 20.4757 2.8542 20.3191 2.68065L20.3191 2.68065ZM12.0487 0.522752L12.8321 0.522752L12.996 0L10.0126 0L9.84863 0.522752L10.8978 0.522752C11.3009 0.522752 11.6395 0.783344 11.763 1.14352L10.0126 1.14352L9.84863 1.66627L11.7832 1.66627C11.6809 2.06017 11.325 2.35239 10.8978 2.35239L9.84863 2.35239L9.84863 2.75386L11.783 4.70477L12.4715 4.70477L12.4715 4.63943L10.6355 2.80979C10.7965 2.80979 10.9877 2.80979 11.0289 2.80979C11.7108 2.80979 12.2729 2.31475 12.3828 1.66627L12.8321 1.66627L12.996 1.14352L12.3723 1.14352C12.3206 0.907237 12.2052 0.696306 12.0487 0.522752L12.0487 0.522752ZM2.20002 2.69621L2.98345 2.69621L3.14738 2.17346L0.163926 2.17346L0 2.69621L1.04913 2.69621C1.45225 2.69621 1.79086 2.95681 1.91439 3.31698L0.163926 3.31698L0 3.83974L1.93459 3.83974C1.8323 4.23363 1.47638 4.52585 1.04913 4.52585L0 4.52585L0 4.92732L1.93433 6.87823L2.62282 6.87823L2.62282 6.81289L0.786845 4.98326C0.947886 4.98326 1.13909 4.98326 1.18027 4.98326C1.8622 4.98326 2.42427 4.48821 2.53416 3.83974L2.98345 3.83974L3.14738 3.31698L2.52367 3.31698C2.472 3.0807 2.3566 2.86977 2.20002 2.69621L2.20002 2.69621ZM11.2169 6.85202C9.45626 6.85202 8.01923 8.2841 8.01923 10.0386C8.01923 11.7931 9.45626 13.2252 11.2169 13.2252C12.9774 13.2252 14.4145 11.7931 14.4145 10.0386C14.4145 8.2841 12.9774 6.85202 11.2169 6.85202L11.2169 6.85202ZM3.0666 7.30909C2.81728 7.30977 2.56469 7.36041 2.32251 7.46646C1.35407 7.89056 0.909867 9.03258 1.32147 10.0093L2.77217 13.7054C2.77389 13.7099 2.77567 13.7143 2.77753 13.7187C2.88816 13.9758 3.05283 14.2059 3.25931 14.3944C4.54119 15.7345 5.82322 17.0749 7.10557 18.415L7.10557 25.0612L7.10557 30.5239C7.10557 31.7725 8.13668 32.8 9.38959 32.8C10.1533 32.8 10.8012 32.394 11.2168 31.8131C11.6324 32.394 12.2803 32.8 13.044 32.8C14.2969 32.8 15.328 31.7725 15.328 30.5239L15.328 25.0612L15.328 18.415C16.6104 17.0749 17.892 15.7345 19.1743 14.3944C19.3805 14.2059 19.5461 13.9763 19.657 13.7187C19.6588 13.7143 19.6606 13.7099 19.6623 13.7054L21.1121 10.0093C21.5238 9.03252 21.0799 7.89012 20.1111 7.46646C19.1425 7.0429 18.0049 7.50868 17.5933 8.48539C17.5918 8.48922 17.5903 8.49307 17.5889 8.49695L16.3032 11.8062C15.4539 12.7347 14.6051 13.6626 13.756 14.5909L8.67761 14.5909C7.82853 13.6626 6.97967 12.7347 6.1304 11.8062L4.84474 8.49695C4.84331 8.49307 4.84182 8.48922 4.84028 8.48539C4.53163 7.7529 3.81457 7.30711 3.0666 7.30909L3.0666 7.30909ZM11.2168 7.76248C12.4837 7.76248 13.5008 8.77615 13.5008 10.0386C13.5008 11.3011 12.4837 12.3148 11.2168 12.3148C9.94998 12.3148 8.9328 11.3011 8.9328 10.0386C8.9328 8.77615 9.94998 7.76248 11.2168 7.76248L11.2168 7.76248ZM3.07821 8.21508C3.2072 8.21368 3.33344 8.23816 3.45115 8.28621C3.68581 8.382 3.88438 8.57196 3.99628 8.83569L5.30959 12.2134C5.32997 12.2659 5.35991 12.3141 5.39792 12.3557C6.31143 13.3544 7.22504 14.354 8.13874 15.3529C8.22524 15.4474 8.34764 15.5013 8.47599 15.5014L13.9576 15.5014C14.086 15.5013 14.2084 15.4474 14.2949 15.3529C15.2086 14.354 16.1222 13.3544 17.0357 12.3557C17.0737 12.3141 17.1037 12.2659 17.124 12.2134L18.4374 8.83569C18.6615 8.30743 19.2356 8.07794 19.7444 8.30044C20.2538 8.5232 20.4933 9.12635 20.2699 9.65634C20.2687 9.65988 20.2675 9.66344 20.2664 9.66701L18.8156 13.3613C18.7527 13.5066 18.659 13.6362 18.5417 13.7392C18.5318 13.7479 18.5223 13.7571 18.5132 13.7667C17.1889 15.1506 15.8645 16.535 14.5402 17.9189C14.4595 18.0035 14.4144 18.1159 14.4144 18.2327L14.4144 25.0612L14.4144 30.5239C14.4144 31.2728 13.7956 31.8896 13.044 31.8896C12.2925 31.8896 11.6736 31.2728 11.6736 30.5239C11.6738 30.5087 11.6732 30.4936 11.6718 30.4785C11.6692 30.4481 11.6635 30.418 11.6549 30.3887C11.6421 30.3452 11.6228 30.3039 11.5978 30.266C11.5809 30.2408 11.5614 30.2172 11.5398 30.1958C11.5075 30.1635 11.4705 30.1362 11.4301 30.1149C11.4164 30.1077 11.4024 30.1011 11.3881 30.0953C11.3599 30.0838 11.3306 30.0752 11.3007 30.0695C11.2104 30.0529 11.1171 30.0637 11.033 30.1007C11.019 30.1068 11.0053 30.1136 10.992 30.1211C10.9653 30.1361 10.9402 30.1536 10.917 30.1736C10.894 30.1937 10.8731 30.216 10.8546 30.2403C10.8453 30.2523 10.8367 30.2647 10.8287 30.2776C10.8127 30.3032 10.7992 30.3303 10.7886 30.3585C10.7834 30.3728 10.7789 30.3873 10.7752 30.4021C10.7712 30.4167 10.7679 30.4316 10.7654 30.4465C10.7631 30.4616 10.7616 30.4767 10.7609 30.4919C10.7602 30.5025 10.7599 30.5132 10.76 30.5239C10.76 31.2728 10.1411 31.8896 9.3896 31.8896C8.63805 31.8896 8.01919 31.2728 8.01919 30.5239L8.01919 25.0612L8.01919 18.2327C8.01925 18.116 7.97424 18.0036 7.89347 17.919C6.56915 16.535 5.24426 15.1506 3.92045 13.7667C3.91135 13.7568 3.90183 13.7473 3.8919 13.7383C3.7748 13.6358 3.68013 13.506 3.6171 13.3595L2.16728 9.66701C2.16614 9.66344 2.16495 9.65988 2.16371 9.65634C1.94035 9.12629 2.18033 8.52279 2.69011 8.29955C2.81748 8.24377 2.94922 8.21649 3.07821 8.21508L3.07821 8.21508ZM11.2187 22.7903C11.0993 22.7903 10.9789 22.8324 10.8921 22.9166C10.851 22.9621 10.8195 23.0122 10.7967 23.0669C10.7738 23.1215 10.7601 23.1811 10.7601 23.2402C10.7601 23.2994 10.7738 23.359 10.7967 23.4136C10.8195 23.4682 10.851 23.5184 10.8921 23.5639C10.9789 23.6458 11.0981 23.6955 11.2169 23.6955C11.3356 23.6955 11.4548 23.6458 11.5416 23.5639C11.5827 23.5184 11.6143 23.4682 11.6371 23.4136C11.6645 23.359 11.6737 23.2994 11.6737 23.2402C11.6737 23.1811 11.6645 23.1215 11.6371 23.0669C11.6143 23.0122 11.5827 22.9621 11.5416 22.9166C11.4571 22.8324 11.338 22.7903 11.2187 22.7903L11.2187 22.7903ZM11.2169 24.606C10.9656 24.606 10.7601 24.8108 10.7601 25.0612C10.7601 25.3116 10.9656 25.5164 11.2169 25.5164C11.4681 25.5164 11.6737 25.3116 11.6737 25.0612C11.6737 24.8108 11.4681 24.606 11.2169 24.606L11.2169 24.606ZM11.2169 26.4268C10.9656 26.4268 10.7601 26.6317 10.7601 26.882C10.7601 27.1324 10.9656 27.3373 11.2169 27.3373C11.4681 27.3373 11.6737 27.1324 11.6737 26.882C11.6737 26.6317 11.4681 26.4268 11.2169 26.4268L11.2169 26.4268ZM11.2169 28.2477C10.9656 28.2477 10.7601 28.4526 10.7601 28.703C10.7601 28.9533 10.9656 29.1582 11.2169 29.1582C11.4681 29.1582 11.6737 28.9533 11.6737 28.703C11.6737 28.4526 11.4681 28.2477 11.2169 28.2477L11.2169 28.2477Z" transform="translate(1.9335938 2)" id="Shape" fill="#A5B4FC" fill-rule="evenodd" stroke="none" />
                  </g>
                </g>
              </svg>
              Consignees
            </a>

            {{-- <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: inbox -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                Documents
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: chart-bar -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                Reports
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: house -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Houses
                            </a> --}}

                            <a href="/parties"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: truck -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Parties
                            </a>

                            <a href="/vehicles"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: truck -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <defs>
                                        <path d="M0 0L24 0L24 24L0 24L0 0Z" id="path_1" />
                                        <clipPath id="mask_1">
                                            <use xlink:href="#path_1" />
                                        </clipPath>
                                    </defs>
                                    <g id="icons8-semi-truck">
                                        <path d="M0 0L24 0L24 24L0 24L0 0Z" id="Background" fill="none"
                                            fill-rule="evenodd" stroke="none" />
                                        <g clip-path="url(#mask_1)">
                                            <path
                                                d="M3.015 0C2.1675 0 1.485 0.6825 1.485 1.53L1.485 5.235L1.875 5.235C2.46 5.235 2.98125 5.50875 3.36 5.925C3.72937 4.26563 6.10875 3.45 10.605 3.45C15.6731 3.45 18.4256 4.31625 18.81 6C19.1869 5.57062 19.74 5.295 20.355 5.295L20.685 5.295L20.685 1.53C20.685 0.6825 19.9687 0 19.095 0L3.015 0ZM10.605 4.41C8.28187 4.41 4.37062 4.66125 4.275 6.315L3.93 8.97L3.66 10.935L3.465 12.48L3.015 12.48C2.85562 12.48 2.715 12.4987 2.565 12.525C2.48625 12.54 2.4 12.5625 2.325 12.585C2.265 12.6019 2.20313 12.6244 2.145 12.645C2.04375 12.6825 1.95375 12.7162 1.86 12.765C1.8375 12.7762 1.8225 12.7987 1.8 12.81C1.69313 12.8719 1.5825 12.93 1.485 13.005C1.35187 13.1081 1.23563 13.2375 1.125 13.365C1.10437 13.3894 1.08375 13.4006 1.065 13.425C0.999375 13.5094 0.939375 13.6031 0.885 13.695C0.84375 13.7644 0.79875 13.845 0.765 13.92C0.7425 13.9687 0.725625 14.0194 0.705 14.07C0.66 14.1881 0.613125 14.3025 0.585 14.43C0.5775 14.46 0.575625 14.49 0.57 14.52C0.54375 14.6662 0.525 14.8144 0.525 14.97L0.525 18.24L21.645 18.24L21.645 14.97C21.645 14.8144 21.6262 14.6662 21.6 14.52C21.5944 14.49 21.5906 14.46 21.585 14.43C21.5569 14.3025 21.525 14.1881 21.48 14.07C21.4612 14.0194 21.4275 13.9687 21.405 13.92C21.3712 13.845 21.3262 13.7644 21.285 13.695C21.2306 13.6031 21.1725 13.5094 21.105 13.425C21.0862 13.4006 21.0656 13.3894 21.045 13.365C20.9344 13.2356 20.8181 13.1081 20.685 13.005C20.5875 12.93 20.4769 12.8719 20.37 12.81C20.3475 12.7987 20.3325 12.7762 20.31 12.765C20.2162 12.7144 20.1262 12.6825 20.025 12.645C19.9669 12.6244 19.9069 12.6019 19.845 12.585C19.77 12.5625 19.6837 12.54 19.605 12.525C19.455 12.4969 19.3125 12.48 19.155 12.48L18.705 12.48L18.495 10.845L18.3 9.345L17.895 6.36C17.7862 4.51312 11.8031 4.41 10.605 4.41L10.605 4.41ZM10.605 5.37C14.6512 5.37 16.7681 6.08812 16.95 6.45L17.43 10.14C16.7194 10.26 14.61 10.56 11.085 10.56C7.56 10.56 5.45062 10.2619 4.74 10.14L5.235 6.405C5.24625 6.19875 6.23437 5.37 10.605 5.37L10.605 5.37ZM1.095 6.195C0.52125 6.195 0 6.71625 0 7.29L0 9.93C0 10.5394 0.511875 11.085 1.095 11.085L1.815 11.085C2.42437 11.085 2.97 10.575 2.97 9.99L2.97 7.35C2.97 6.74062 2.45813 6.195 1.875 6.195L1.095 6.195ZM20.355 6.255C19.7512 6.255 19.26 6.74625 19.26 7.35L19.26 9.99C19.26 10.5956 19.7512 11.085 20.355 11.085L21.075 11.085C21.6487 11.085 22.17 10.5637 22.17 9.99L22.17 7.35C22.17 6.74625 21.6787 6.255 21.075 6.255L20.355 6.255ZM8.49 12.96L13.68 12.96C14.01 12.96 14.2744 13.155 14.385 13.44C14.4206 13.5281 14.445 13.6219 14.445 13.725L14.445 16.035C14.445 16.4662 14.1112 16.8 13.68 16.8L8.49 16.8C8.05875 16.8 7.725 16.4662 7.725 16.035L7.725 13.725C7.725 13.6219 7.75125 13.5281 7.785 13.44C7.89562 13.155 8.16 12.96 8.49 12.96L8.49 12.96ZM3.255 14.88L5.475 14.88C5.66625 14.88 5.805 15.0188 5.805 15.21L5.805 16.47C5.805 16.6612 5.66625 16.8 5.475 16.8L3.255 16.8C3.06375 16.8 2.925 16.6612 2.925 16.47L2.925 15.21C2.925 15.0188 3.06375 14.88 3.255 14.88L3.255 14.88ZM16.695 14.88L18.915 14.88C19.1062 14.88 19.245 15.0188 19.245 15.21L19.245 16.47C19.245 16.6612 19.1062 16.8 18.915 16.8L16.695 16.8C16.5037 16.8 16.365 16.6612 16.365 16.47L16.365 15.21C16.365 15.0188 16.5037 14.88 16.695 14.88L16.695 14.88ZM0.525 19.2L0.525 21.6L21.645 21.6L21.645 19.2L0.525 19.2ZM0.525 22.56C0.525 23.3531 1.17187 24 1.965 24L3.885 24C4.67812 24 5.325 23.3531 5.325 22.56L0.525 22.56ZM16.845 22.56C16.845 23.3531 17.4919 24 18.285 24L20.205 24C20.9981 24 21.645 23.3531 21.645 22.56L16.845 22.56Z"
                                                transform="translate(0.9150009 0)" id="Shape" fill="#A5B4FC"
                                                fill-rule="evenodd" stroke="none" />
                                        </g>
                                    </g>
                                </svg>
                                Vehicles
                            </a>

                            <a href="/payments"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: rupee -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Payments
                            </a>

                            <a href="/expenses"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: rupee -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <defs>
                                        <path d="M0 0L24 0L24 24L0 24L0 0Z" id="path_1" />
                                        <clipPath id="mask_1">
                                            <use xlink:href="#path_1" />
                                        </clipPath>
                                    </defs>
                                    <g id="svg">
                                        <path d="M0 0L24 0L24 24L0 24L0 0Z" id="Background" fill="none"
                                            fill-rule="evenodd" stroke="none" />
                                        <g clip-path="url(#mask_1)">
                                            <path
                                                d="M1.875 0C0.84375 0 0 0.84375 0 1.875C0 2.90625 0.84375 3.75 1.875 3.75L3.1875 3.75L3.1875 19.125C3.1875 19.4437 3.43125 19.6875 3.75 19.6875C4.06875 19.6875 4.3125 19.4437 4.3125 19.125L4.3125 1.875L16.3125 1.875L16.3125 19.6501L15.3937 18.7313C15.1687 18.5063 14.8126 18.5063 14.6063 18.7313L13.125 20.2126L11.6437 18.7313C11.4187 18.5063 11.0626 18.5063 10.8563 18.7313L9.375 20.2126L7.89368 18.7313C7.66868 18.5063 7.31257 18.5063 7.10632 18.7313L5.23132 20.6063C5.00632 20.8313 5.00632 21.1874 5.23132 21.3937C5.45632 21.6187 5.81243 21.6187 6.01868 21.3937L7.5 19.9124L8.98132 21.3937C9.20632 21.6187 9.56243 21.6187 9.76868 21.3937L11.25 19.9124L12.7313 21.3937C12.9563 21.6187 13.3124 21.6187 13.5187 21.3937L15 19.9124L16.4813 21.3937C16.5938 21.5062 16.725 21.5625 16.875 21.5625C16.95 21.5625 17.0249 21.5439 17.0812 21.5251C17.2874 21.4314 17.4375 21.225 17.4375 21L17.4375 3.75L18.75 3.75C19.7813 3.75 20.625 2.90625 20.625 1.875C20.625 0.84375 19.7813 0 18.75 0L1.875 0L1.875 0ZM6.5625 4.875C6.24375 4.875 6 5.11875 6 5.4375C6 5.75625 6.24375 6 6.5625 6L14.0625 6C14.3812 6 14.625 5.75625 14.625 5.4375C14.625 5.11875 14.3812 4.875 14.0625 4.875L6.5625 4.875L6.5625 4.875ZM6.5625 7.6875C6.24375 7.6875 6 7.93125 6 8.25C6 8.56875 6.24375 8.8125 6.5625 8.8125L14.0625 8.8125C14.3812 8.8125 14.625 8.56875 14.625 8.25C14.625 7.93125 14.3812 7.6875 14.0625 7.6875L6.5625 7.6875L6.5625 7.6875ZM6.5625 10.5C6.24375 10.5 6 10.7438 6 11.0625C6 11.3812 6.24375 11.625 6.5625 11.625L14.0625 11.625C14.3812 11.625 14.625 11.3812 14.625 11.0625C14.625 10.7438 14.3812 10.5 14.0625 10.5L6.5625 10.5L6.5625 10.5ZM14.0625 13.2986C14.025 13.2986 13.9876 13.3031 13.9501 13.3125C13.9126 13.3125 13.8751 13.3311 13.8376 13.3499C13.8001 13.3686 13.7814 13.3875 13.7439 13.4063C13.7064 13.425 13.6876 13.4438 13.6688 13.4813C13.5563 13.5751 13.5 13.725 13.5 13.875C13.5 13.9125 13.4999 13.9499 13.5187 13.9874C13.5187 14.0249 13.5376 14.0624 13.5564 14.0999C13.5751 14.1374 13.5937 14.1749 13.6124 14.1936C13.6312 14.2311 13.65 14.2499 13.6875 14.2874C13.8 14.3999 13.9312 14.4562 14.0812 14.4562C14.2312 14.4562 14.3811 14.3999 14.4749 14.2874C14.4936 14.2686 14.5312 14.2311 14.5499 14.1936C14.5687 14.1561 14.5876 14.1374 14.6063 14.0999C14.6251 14.0624 14.6249 14.0249 14.6437 13.9874C14.6437 13.9499 14.6624 13.9125 14.6624 13.875C14.6624 13.725 14.6064 13.5751 14.4939 13.4813C14.4376 13.4438 14.3999 13.425 14.3811 13.4063C14.3436 13.3875 14.3249 13.3686 14.2874 13.3499C14.2499 13.3311 14.2124 13.3312 14.1749 13.3125C14.1374 13.3031 14.1 13.2986 14.0625 13.2986L14.0625 13.2986ZM6.5625 13.3125C6.24375 13.3125 6 13.5563 6 13.875C6 14.1937 6.24375 14.4375 6.5625 14.4375L12.1875 14.4375C12.5062 14.4375 12.75 14.1937 12.75 13.875C12.75 13.5563 12.5062 13.3125 12.1875 13.3125L6.5625 13.3125L6.5625 13.3125Z"
                                                transform="translate(1.6875 1.875)" id="Shape" fill="#A5B4FC"
                                                fill-rule="evenodd" stroke="none" />
                                        </g>
                                    </g>
                                </svg>
                                Expenses
                            </a>
                            <a href="/fleets"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: rupee -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path fill="#fff"
                                        d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                </svg>
                                Fleet Management
                            </a>

                            <a href="/search_vehicle_rc"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: rupee -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                                </svg>
                                Search Vehicle RC
                            </a>

                            <a href="/sectors"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: rupee -->
                                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            Sectors
            </a>
                            <a href="/mines" class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md group hover:bg-indigo-600 hover:bg-opacity-75">
                                <!-- Heroicon name: mining -->
                                <?xml version="1.0" encoding="utf-8"?>
                                <svg class="w-6 h-6 mr-3 text-indigo-300" viewbox="0 0 24 24" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                  <defs>
                                    <path d="M0 0L24 0L24 24L0 24L0 0Z" id="path_1" />
                                    <clipPath id="mask_1">
                                      <use xlink:href="#path_1" />
                                    </clipPath>
                                  </defs>
                                  <g id="mining">
                                    <path d="M0 0L24 0L24 24L0 24L0 0Z" id="Background" fill="none" fill-rule="evenodd" stroke="none" />
                                    <g clip-path="url(#mask_1)">
                                      <path d="M14.2057 3.7364L14.3824 3.5594C14.4555 3.48618 14.4555 3.36749 14.3824 3.29427L14.9126 2.76365C15.059 2.61721 15.059 2.37983 14.9126 2.2334L13.8521 1.1729C13.7818 1.1025 13.6864 1.06295 13.587 1.06295C13.4875 1.06295 13.3921 1.1025 13.3219 1.1729L12.7912 1.70315C12.7557 1.66869 12.708 1.64968 12.6585 1.65027C12.609 1.64968 12.5613 1.66869 12.5257 1.70315L12.3491 1.88015C10.9108 0.7935 9.18734 0.149032 7.38897 0.0253966C7.32218 -0.0134275 7.23841 -0.0073092 7.17797 0.0408075C7.11753 0.0889242 7.09278 0.169188 7.11565 0.242985C7.13851 0.316781 7.20429 0.369001 7.28135 0.374522C8.6379 1.16934 9.91139 2.09811 11.0827 3.1469L10.935 3.29502C10.8997 3.3302 10.8799 3.37796 10.8799 3.42777C10.8799 3.47758 10.8997 3.52535 10.935 3.56052L7.60122 6.89427C7.50648 6.98899 7.46946 7.12706 7.50413 7.25647C7.5388 7.38587 7.63987 7.48695 7.76928 7.52162C7.89869 7.55628 8.03676 7.51927 8.13147 7.42452L11.4652 4.09077L11.9955 4.62102L8.66173 7.95477C8.5153 8.1012 8.5153 8.3386 8.66173 8.48502C8.80815 8.63145 9.04555 8.63145 9.19198 8.48502L12.5257 5.15127C12.5608 5.18673 12.6086 5.20667 12.6585 5.20667C12.7083 5.20667 12.7561 5.18673 12.7912 5.15127L12.939 5.00352C13.9878 6.17472 14.9165 7.44808 15.7114 8.80452C15.7552 8.87987 15.8452 8.91507 15.9285 8.88948C16.0118 8.86388 16.0665 8.78424 16.0605 8.69728C15.9368 6.89869 15.2924 5.17496 14.2057 3.7364L14.2057 3.7364ZM13.3215 2.23375L13.587 1.96863L14.1172 2.49888L13.8521 2.76438L13.3215 2.23375L13.3215 2.23375ZM8.2042 0.497873C9.6092 0.731329 10.9377 1.29831 12.0783 2.15125L11.3463 2.88325C10.3662 2.00326 9.31524 1.20544 8.20419 0.497864L8.2042 0.497873ZM12.6588 4.75261L12.5265 4.62023L11.3332 3.42698L12.4972 2.26298L12.4987 2.26186L12.6588 2.10098L13.8521 3.29423L13.9845 3.42661L12.6588 4.75261L12.6588 4.75261ZM13.2022 4.73952L13.9346 4.00714C14.7873 5.14782 15.3542 6.47633 15.5876 7.88126C14.8801 6.77028 14.0823 5.71948 13.2022 4.73952L13.2022 4.73952ZM7.60158 9.0149L1.38933 15.2268C1.29462 15.3215 1.15655 15.3585 1.02714 15.3239C0.897732 15.2892 0.796654 15.1881 0.761988 15.0587C0.727321 14.9293 0.764334 14.7912 0.859082 14.6965L7.07133 8.48427C7.16606 8.38954 7.20305 8.25146 7.16836 8.12206C7.13367 7.99266 7.03258 7.8916 6.90317 7.85695C6.77375 7.82231 6.63569 7.85935 6.54099 7.95411L0.328456 14.1663C-0.109486 14.6061 -0.109486 15.3172 0.328456 15.757C0.539366 15.9682 0.825758 16.0865 1.12421 16.0859C1.42252 16.0864 1.70876 15.9681 1.91958 15.757L8.13183 9.54515C8.22658 9.45043 8.26359 9.31236 8.22892 9.18295C8.19426 9.05355 8.09318 8.95247 7.96377 8.9178C7.83437 8.88313 7.6963 8.92015 7.60158 9.0149L7.60158 9.0149Z" transform="translate(4.6069336 4.037384)" id="Shape" fill="#C7D2FE" fill-rule="evenodd" stroke="none" />
                                      <path d="M9.05732 8.37144C8.95785 8.37155 8.86244 8.33201 8.7922 8.26157L1.17032 0.640069C1.02391 0.493662 1.02389 0.256296 1.17027 0.109865C1.31665 -0.0365675 1.55402 -0.036629 1.70048 0.109727L9.32207 7.73132C9.42962 7.83838 9.46196 7.99976 9.40396 8.14C9.34595 8.28024 9.20908 8.37163 9.05732 8.37144L9.05732 8.37144ZM7.99645 9.43195C7.89697 9.43205 7.80156 9.39251 7.73132 9.32208L0.109818 1.70095C-0.0365882 1.55454 -0.0366082 1.31718 0.109772 1.17075C0.256154 1.02432 0.49352 1.02425 0.639977 1.17061L8.26157 8.79183C8.36917 8.89894 8.40148 9.06041 8.34338 9.20068C8.28529 9.34095 8.14827 9.43229 7.99644 9.43195L7.99645 9.43195Z" transform="translate(9.699417 9.4823)" id="Shape" fill="#C7D2FE" fill-rule="evenodd" stroke="none" />
                                      <path d="M1.51336 3.82224C1.44527 3.82232 1.38251 3.78541 1.34948 3.72586L0.0234854 1.33936C-0.0169501 1.26609 -0.00427794 1.17494 0.0546105 1.11549L1.11549 0.0549867C1.17461 -0.00419998 1.2658 -0.0170517 1.33899 0.0234869L3.72549 1.34911C3.77705 1.37762 3.81218 1.42875 3.8203 1.48711C3.82842 1.54547 3.80857 1.60424 3.76674 1.64574L1.64536 3.76711C1.61061 3.80256 1.563 3.82245 1.51336 3.82224L1.51336 3.82224ZM0.420227 1.28049L1.55685 3.32611L3.32648 1.55611L1.28085 0.419861L0.420227 1.28049L0.420227 1.28049Z" transform="translate(7.8980255 7.6812744)" id="Shape" fill="#C7D2FE" fill-rule="evenodd" stroke="none" />
                                      <path d="M0.0549194 0.320085C-0.0183048 0.246862 -0.018307 0.128144 0.0549152 0.0549194C0.128137 -0.0183048 0.246855 -0.018307 0.32008 0.0549152C0.393304 0.128137 0.393306 0.246855 0.320085 0.32008C0.246862 0.393304 0.128144 0.393306 0.0549194 0.320085Z" transform="translate(9.886597 9.139587)" id="Ellipse" fill="#C7D2FE" fill-rule="evenodd" stroke="none" />
                                      <path d="M0.0549194 0.320085C-0.0183048 0.246862 -0.018307 0.128144 0.0549152 0.0549194C0.128137 -0.0183048 0.246855 -0.018307 0.32008 0.0549152C0.393304 0.128137 0.393306 0.246855 0.320085 0.32008C0.246862 0.393304 0.128144 0.393306 0.0549194 0.320085Z" transform="translate(9.356232 9.669617)" id="Ellipse" fill="#C7D2FE" fill-rule="evenodd" stroke="none" />
                                      <path d="M3.26184 7.87985C3.16237 7.87995 3.06695 7.84041 2.99671 7.76997L0.990463 5.76335C0.164195 4.94265 -0.177205 3.75208 0.0885887 2.61823L0.510089 0.791225C0.542302 0.651384 0.651497 0.542189 0.791338 0.509975L2.61834 0.0884753C3.75219 -0.177094 4.94265 0.164275 5.76346 0.99035L7.76971 2.99697C7.84029 3.06715 7.87998 3.16257 7.87998 3.2621C7.87998 3.36163 7.84029 3.45705 7.76971 3.52722L6.62071 4.67585C6.47431 4.82226 6.23694 4.82228 6.09051 4.67589C5.94408 4.52951 5.94402 4.29215 6.09037 4.14569L6.97434 3.2621L5.23321 1.5206C4.59515 0.877567 3.66893 0.612039 2.78709 0.81935L1.18846 1.18797L0.81984 2.7866C0.612925 3.66849 0.878557 4.59458 1.52146 5.23272L3.26259 6.97423L4.05796 6.17885C4.20437 6.03244 4.44174 6.03242 4.58817 6.1788C4.7346 6.32518 4.73466 6.56255 4.58831 6.70901L3.52771 7.7696C3.45646 7.8401 3.36121 7.87985 3.26184 7.87985L3.26184 7.87985ZM14.7278 16.4613C14.4878 16.4613 14.2478 16.3698 14.0648 16.1872L13.5346 15.657C13.4614 15.5838 13.4614 15.4651 13.5346 15.3918L15.3908 13.5356C15.4652 13.4652 15.5816 13.4652 15.6559 13.5356L16.1862 14.0658C16.5518 14.4322 16.5518 15.0255 16.1862 15.3918L15.3908 16.1872C15.215 16.363 14.9765 16.4617 14.7278 16.4613L14.7278 16.4613ZM13.9325 15.5242L14.3303 15.9221C14.5504 16.1411 14.906 16.1411 15.1261 15.9221L15.9215 15.1267C16.1409 14.9068 16.1409 14.5508 15.9215 14.331L15.5236 13.9331L13.9325 15.5242L13.9325 15.5242Z" transform="translate(4.29364 4.076294)" id="Shape" fill="#C7D2FE" fill-rule="evenodd" stroke="none" />
                                      <path d="M1.24815 3.28945C1.1984 3.28946 1.15068 3.26977 1.1154 3.2347L0.0548973 2.1742C-0.0182991 2.10098 -0.0182991 1.98229 0.0548973 1.90907L1.91115 0.0528231C1.98549 -0.0176082 2.10193 -0.0176082 2.17627 0.0528231L3.23677 1.11332C3.30784 1.18689 3.30683 1.30384 3.2345 1.37617C3.16217 1.4485 3.04522 1.44951 2.97165 1.37845L2.04352 0.450324L0.452398 2.04145L1.38052 2.96957C1.43397 3.02319 1.44993 3.10369 1.42098 3.17365C1.39204 3.2436 1.32386 3.28928 1.24815 3.28945L1.24815 3.28945Z" transform="translate(17.243088 17.028809)" id="Shape" fill="#C7D2FE" fill-rule="evenodd" stroke="none" />
                                    </g>
                                  </g>
                                </svg>
              Mines
            </a>
          </nav>
        </div>
        <div class="flex flex-shrink-0 p-4 border-t border-indigo-600">
          <a href="#" class="flex-shrink-0 block w-full group">
            <div class="flex items-center">
              <div>
                <img class="inline-block rounded-full h-9 w-9" src="{{ Auth::user()->profile_photo_url }}" alt="">
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-white">
                  {{ Auth::user()->name }}
                </p>
                <p class="text-xs font-medium text-indigo-200 group-hover:text-white">
                  View profile
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
