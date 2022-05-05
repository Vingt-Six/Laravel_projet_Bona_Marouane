<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="max-w-sm mx-auto overflow-hidden rounded-lg shadow-lg bg-gray-800 w-96 mt-20">
            @if (Auth::user()->avatar_id == null)
                <img class="object-cover object-center w-full h-56" src="{{ asset('storage/' . $avatar[0]->src) }}"
                    alt="avatar">
            @else
                <img class="object-cover object-center w-full h-56"
                    src="{{ asset('storage/' . Auth::user()->avatar->src) }}" alt="avatar">
            @endif
        <div class="flex items-center px-6 py-3 bg-gray-900">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8 11C10.2091 11 12 9.20914 12 7C12 4.79086 10.2091 3 8 3C5.79086 3 4 4.79086 4 7C4 9.20914 5.79086 11 8 11ZM8 9C9.10457 9 10 8.10457 10 7C10 5.89543 9.10457 5 8 5C6.89543 5 6 5.89543 6 7C6 8.10457 6.89543 9 8 9Z"
                    fill="currentColor" />
                <path
                    d="M11 14C11.5523 14 12 14.4477 12 15V21H14V15C14 13.3431 12.6569 12 11 12H5C3.34315 12 2 13.3431 2 15V21H4V15C4 14.4477 4.44772 14 5 14H11Z"
                    fill="currentColor" />
                <path d="M22 11H16V13H22V11Z" fill="currentColor" />
                <path d="M16 15H22V17H16V15Z" fill="currentColor" />
                <path d="M22 7H16V9H22V7Z" fill="currentColor" />
            </svg>

            <h1 class="mx-3 text-lg font-semibold text-white">{{ Auth::user()->role->role }}</h1>
        </div>

        <div class="px-6 py-4">
            <div class="flex">
                <h1 class="text-xl font-semibold text-gray-800 dark:text-white">
                    {{ ucfirst(Auth::user()->name) . ' ' . ucfirst(Auth::user()->firstname) }}</h1>
                <a href="/user/{{ Auth::user()->id }}/edit" class="ml-6 text-sky-600">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z"
                            fill="currentColor" />
                        <path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z" fill="currentColor" />
                    </svg>
                </a>
            </div>

            <p class="py-2 text-gray-700 dark:text-gray-400">Full Stack nothing & nothing Designer , love nothing
                music
                Author of Nothing.</p>

            <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15 17C16.1046 17 17 16.1046 17 15C17 13.8954 16.1046 13 15 13C13.8954 13 13 13.8954 13 15C13 16.1046 13.8954 17 15 17Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM5 18V7H19V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18Z"
                        fill="currentColor" />
                </svg>

                <h1 class="px-2 text-sm">{{ Auth::user()->age }} ans</h1>
            </div>

            <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.9759 9C10.9759 9.55228 10.5282 10 9.97589 10C9.42361 10 8.97589 9.55228 8.97589 9C8.97589 8.44771 9.42361 8 9.97589 8C10.5282 8 10.9759 8.44771 10.9759 9Z"
                        fill="currentColor" />
                    <path
                        d="M13.9712 10C14.5235 10 14.9712 9.55228 14.9712 9C14.9712 8.44771 14.5235 8 13.9712 8C13.4189 8 12.9712 8.44771 12.9712 9C12.9712 9.55228 13.4189 10 13.9712 10Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19 20.9999V10C19 6.13401 15.866 3 12 3C8.13401 3 5 6.13401 5 10V21L7.82846 21L9.24264 19.5858L10.6569 21L13.3433 21L14.7574 19.5858L16.1717 21L19 20.9999ZM17 10C17 7.23858 14.7614 5 12 5C9.23858 5 7 7.23858 7 10V19L9.24264 16.7573L12 19.5147L14.7574 16.7573L17 18.9999V10Z"
                        fill="currentColor" />
                </svg>

                @if (Auth::user()->avatar_id == null)
                    <h1 class="px-2 text-sm">{{ $avatar[0]->name }}</h1>
                @else
                    <h1 class="px-2 text-sm">{{ Auth::user()->avatar->name }}</h1>
                @endif
            </div>

            <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z" />
                </svg>

                <h1 class="px-2 text-sm">{{ Auth::user()->email }}</h1>
            </div>
        </div>
    </div>
    @include('layouts.social')
</x-app-layout>
