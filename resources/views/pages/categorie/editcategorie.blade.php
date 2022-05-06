<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Edit Categorie') }}
        </h2>
    </x-slot>

    <div class="flex flex-col h-[90vh] bg-gradient-to-b from-[#063970] to-blue-200">
        <div class="grid place-items-center mx-2 my-20 sm:my-auto" x-data="{ showPass: true }">
            <div
                class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 px-6 py-10 sm:px-10 sm:py-6 bg-white rounded-lg shadow-md lg:shadow-lg">
                <div class="text-center mb-4">
                    <h6 class="font-semibold text-[#063970] text-xl">Edit a category</h6>
                </div>
                <form class="space-y-5" action="/categorie/{{ $categorie->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <input type="text" name="categorie" value="{{old('categorie') == '' ? $categorie->categorie : old('categorie')}}" class="block w-full py-3 px-3 mt-2 text-gray-800 appearance-none border-2 border-gray-100 focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" />
                    </div>

                    <button type="submit" class="w-full py-3 mt-10 bg-[#063970] rounded-md font-medium text-white uppercase focus:outline-none hover:shadow-none">
                        Edit Category
                    </button>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.social')
</x-app-layout>
