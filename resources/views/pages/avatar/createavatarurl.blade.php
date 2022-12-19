<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Create Avatar') }}
        </h2>
    </x-slot>

    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto">
            <h1 class="text-2xl font-bold text-center text-indigo-600 sm:text-3xl">Add a Avatar</h1>

            <form action="/avatar/url" class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl" method="POST">
                @csrf
                <div>
                    <label for="email" class="text-sm font-medium">Name of Avatar</label>

                    <div class="relative mt-1"> 
                        <input type="text"
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                            placeholder="Enter a name" name="name" value="{{ old('name') }}"/>
                    </div>
                </div>

                <div>
                    <label for="URL" class="text-sm font-medium">URL</label>

                    <div class="relative mt-1">
                        <input type="text" name="url" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter a url"/>
                    </div>
                </div>

                <button type="submit"
                    class="block w-full px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                    Add Avatar
                </button>
            </form>
        </div>
    </div>

    @include('layouts.social')
</x-app-layout>
