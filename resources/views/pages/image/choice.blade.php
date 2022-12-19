<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Choice how to upload image') }}
        </h2>
    </x-slot>

    <div class="h-[90vh] bg-gradient-to-t from-indigo-300 to-orange-300 pt-28">
        <div class="max-w-screen-lg bg-orange-500 shadow-2xl rounded-lg mx-auto text-center py-12">
            <h2 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
                Add an Image from your files
            </h2>
            <div class="mt-8 flex justify-center">
                <div class="inline-flex rounded-md bg-white shadow">
                    <a href="/galerie/create" class="text-gray-700 font-bold py-2 px-6">
                        Add
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Bg indigo -->
        <div class="max-w-screen-lg bg-indigo-500 shadow-2xl rounded-lg mx-auto text-center py-12 mt-4">
            <h2 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
                Add Image with url
            </h2>
            <div class="mt-8 flex justify-center">
                <div class="inline-flex rounded-md bg-white shadow">
                    <a href="/imageurl/create" class="text-gray-700 font-bold py-2 px-6">
                        Add
                    </a>
                </div>
            </div>
        </div>
    </div>
        
    @include('layouts.social')
</x-app-layout>
