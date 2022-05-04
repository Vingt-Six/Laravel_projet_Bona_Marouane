<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Avatar') }}
        </h2>
    </x-slot>


    <section class="container p-6 mx-auto bg-slate-50">
        <div class="flex items-center justify-center">
            <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($avatars as $avatar)
                    @if ($avatar->id != 1)
                        <div class="w-full max-w-xs text-center">
                            <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                                src="{{ asset('storage/' . $avatar->src) }}" alt="avatar" />

                            <div class="mt-2">
                                <h3 class="text-lg font-medium text-gray-700">{{ $avatar->name }}
                                </h3>
                            </div>
                            <div class="flex justify-around">
                                <form action="/avatar/{{ $avatar->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-[1px] border-red-500 w-24 h-8 rounded-xl hover:text-white hover:bg-red-500">Delete</button>
                                </form>
                                <div class="border-[1px] border-sky-500 w-24 h-8 rounded-xl hover:text-white hover:bg-sky-500 flex items-center justify-center">
                                    <a href="" >Edit</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @include('layouts.social')
</x-app-layout>
