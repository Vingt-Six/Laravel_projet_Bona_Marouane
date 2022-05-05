<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Avatar') }}
        </h2>
    </x-slot>


    <section class="container p-6 mx-auto bg-slate-50">
        <div class="flex items-center justify-center">
            <div class="grid grid-cols-3 gap-36 mt-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($avatars as $avatar)
                    @if ($avatar->id != 1)
                        <div class="w-full max-w-xs text-center">
                            <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                                src="{{ asset('storage/' . $avatar->src) }}" alt="avatar" />

                            <div class="mt-2">
                                <h3 class="text-lg font-medium text-gray-700">{{ $avatar->name }}
                                </h3>
                            </div>
                            <div class="flex justify-around mt-5">
                                <form action="/avatar/{{ $avatar->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="border-[1px] border-red-500 w-16 h-8 rounded-lg hover:text-white hover:bg-red-500 transition-colors duration-200 transform">Delete</button>
                                </form>
                                <div
                                    class="border-[1px] border-sky-500 w-16 h-8 rounded-lg hover:text-white hover:bg-sky-500 transition-colors duration-200 transform flex items-center justify-center">
                                    <a href="">Edit</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @can('max-avatar', $avatars)
        <a href="/avatar/create">
            <svg class="w-14 h-14 text-amber-400 hover:text-amber-800 transition-colors duration-150 transform absolute top-20 right-5"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 18V16H8V14H10V12H12V14H14V16H12V18H10Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z"
                    fill="currentColor" />
            </svg>
        </a>
    @endcan

    @include('layouts.social')
</x-app-layout>
