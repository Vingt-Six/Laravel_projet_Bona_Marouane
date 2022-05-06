<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('URL Image') }}
        </h2>
    </x-slot>

    <div class="h-[90vh] bg-indigo-100 flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full" action="/imageurl" method="POST">
                @csrf
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Add Image in Gallery</h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="name">Name</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="name" placeholder="name" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Category</label>
                    <select name="categorie_id" class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none">
                        <option selected>Select a Category</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie -> id }}">{{ $categorie -> categorie }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md">Image URL</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text"
                        name="url" />
                </div>
                <button type="submit"
                    class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Add Image</button>
            </form>
        </div>
    </div>

    @include('layouts.social')
</x-app-layout>
