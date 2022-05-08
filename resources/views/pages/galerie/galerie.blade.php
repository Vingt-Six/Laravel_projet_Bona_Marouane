<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Galerie') }}
        </h2>
    </x-slot>

    {{-- <section class="overflow-hidden text-gray-700 ">
        <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
            <div class="flex flex-wrap -m-1 md:-m-2">
                @foreach ($images as $image)
                    <div class="flex flex-wrap w-1/3">
                        <div class="w-full p-1 md:p-2">
                            @if ($image->src == null)
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('storage/' . $image->name . '.png') }}">
                            @elseif ($image->url == null)
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('storage/' . $image->src) }}">
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section> --}}

    <!-- component -->
    <main class="grid place-items-center p-5 bg-gradient-to-t from-blue-200 to-indigo-900 h-[90vh] overflow-scroll">
        <div>
            <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold text-white mb-10 mt-5">Gallery</h1>
            <section class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach ($images as $image)
                    <div class="bg-gray-900 shadow-lg rounded p-3">
                        <div class="group relative">
                            @if ($image->src == null)
                                <img alt="gallery" class="w-full md:w-72 block rounded"
                                    src="{{ asset('storage/' . $image->name . '.png') }}">
                            @elseif ($image->url == null)
                                <img alt="gallery" class="w-full md:w-72 block rounded"
                                    src="{{ asset('storage/' . $image->src) }}">
                            @endif
                            <div
                                class="absolute bg-black rounded bg-opacity-0 group-hover:bg-opacity-60 w-full h-full top-0 flex items-center group-hover:opacity-100 transition justify-evenly">

                                <button
                                    class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">

                                    @if ($image->url == null)
                                        <a href="/download/image/{{ $image->id }}">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11 5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5V12.1578L16.2428 8.91501L17.657 10.3292L12.0001 15.9861L6.34326 10.3292L7.75748 8.91501L11 12.1575V5Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M4 14H6V18H18V14H20V18C20 19.1046 19.1046 20 18 20H6C4.89543 20 4 19.1046 4 18V14Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </a>
                                    @elseif ($image->src == null)
                                        <a href="/download/url/{{ $image->id }}">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11 5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5V12.1578L16.2428 8.91501L17.657 10.3292L12.0001 15.9861L6.34326 10.3292L7.75748 8.91501L11 12.1575V5Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M4 14H6V18H18V14H20V18C20 19.1046 19.1046 20 18 20H6C4.89543 20 4 19.1046 4 18V14Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </a>
                                    @endif
                                </button>

                                @can('admin')
                                    <form action="/enlevetoi/{{ $image->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17 5V4C17 2.89543 16.1046 2 15 2H9C7.89543 2 7 2.89543 7 4V5H4C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H5V18C5 19.6569 6.34315 21 8 21H16C17.6569 21 19 19.6569 19 18V7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H17ZM15 4H9V5H15V4ZM17 7H7V18C7 18.5523 7.44772 19 8 19H16C16.5523 19 17 18.5523 17 18V7Z"
                                                    fill="currentColor" />
                                                <path d="M9 9H11V17H9V9Z" fill="currentColor" />
                                                <path d="M13 9H15V17H13V9Z" fill="currentColor" />
                                            </svg>
                                        </button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </main>

    @include('layouts.social')
</x-app-layout>
