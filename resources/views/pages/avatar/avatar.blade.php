<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Avatar') }}
        </h2>
    </x-slot>


    <section class="bg-slate-50 mt-14">
        <div>
            <div class="mt-8 flex justify-evenly flex-wrap">
                @foreach ($avatars as $avatar)
                    @if ($avatar->id != 1)
                        <div class="w-80 text-center rounded-xl shadow-xl mb-20 pb-10">
                            @if ($avatar->src == null)
                                <img class="h-56 object-center mx-auto rounded-lg"
                                    src="{{ asset('storage/' . $avatar->name . '.png') }}" alt="avatar" />
                            @elseif ($avatar->url == null)
                                <img class="h-56 object-center mx-auto rounded-lg"
                                    src="{{ asset('storage/' . $avatar->src) }}" alt="avatar" />
                            @endif

                            <div class="mt-2">
                                <h3 class="text-lg font-medium text-gray-700">{{ $avatar->name }}
                                </h3>
                            </div>
                            <div class="flex justify-center mt-5">
                                <form action="/avatar/{{ $avatar->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="border-[1px] border-red-500 w-60 h-10 rounded-lg hover:text-white hover:bg-red-500 transition-colors duration-200 transform">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @can('max-avatar', $avatars)
        <div class="h-[10vh] absolute bottom-10 left-9 flex items-center w-44 justify-evenly">
            <a href="/avatar/create" class="flex flex-col items-center">
                <svg class="w-10 h-10 text-amber-400 hover:text-amber-800" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 18V16H8V14H10V12H12V14H14V16H12V18H10Z" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z"
                        fill="currentColor" />
                </svg>
                <span class="text-amber-400">file</span>
            </a>
            <a href="/avatar/url/create" class="flex flex-col items-center">
                <svg class="w-10 h-10 text-emerald-400 hover:text-emerald-700" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.8284 12L16.2426 13.4142L19.071 10.5858C20.6331 9.02365 20.6331 6.49099 19.071 4.9289C17.509 3.3668 14.9763 3.3668 13.4142 4.9289L10.5858 7.75732L12 9.17154L14.8284 6.34311C15.6095 5.56206 16.8758 5.56206 17.6568 6.34311C18.4379 7.12416 18.4379 8.39049 17.6568 9.17154L14.8284 12Z"
                        fill="currentColor" />
                    <path
                        d="M12 14.8285L13.4142 16.2427L10.5858 19.0711C9.02372 20.6332 6.49106 20.6332 4.92896 19.0711C3.36686 17.509 3.36686 14.9764 4.92896 13.4143L7.75739 10.5858L9.1716 12L6.34317 14.8285C5.56212 15.6095 5.56212 16.8758 6.34317 17.6569C7.12422 18.4379 8.39055 18.4379 9.1716 17.6569L12 14.8285Z"
                        fill="currentColor" />
                    <path
                        d="M14.8285 10.5857C15.219 10.1952 15.219 9.56199 14.8285 9.17147C14.4379 8.78094 13.8048 8.78094 13.4142 9.17147L9.1716 13.4141C8.78107 13.8046 8.78107 14.4378 9.1716 14.8283C9.56212 15.2188 10.1953 15.2188 10.5858 14.8283L14.8285 10.5857Z"
                        fill="currentColor" />
                </svg>
                <span class="text-emerald-400">url</span>
            </a>
        </div>
    @endcan

    @include('layouts.social')
</x-app-layout>
