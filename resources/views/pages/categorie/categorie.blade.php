<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Categorie') }}
        </h2>
    </x-slot>

    <table class="rounded-t-lg m-5 w-5/6 mx-auto">
        <thead class="rounded-t-lg bg-pink-700 text-pink-100">
            <tr class="text-left border-b-2 border-pink-200 font-bold">
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">Categorie</th>
                <th class="px-4 py-3"></th>
                <th class="px-4 py-3"></th>
            </tr>
        </thead>
        @foreach ($categories as $categorie)
            <tr class="font-semibold">
                <td class="px-4 py-3 border-b border-pink-500 text-pink-700">{{ $categorie->id }}</td>
                <td class="px-4 py-3 border-b border-pink-500 text-pink-700">{{ $categorie->categorie }}</td>
                <td class="px-4 py-3 border-b border-pink-500">
                    <a href="/categorie/{{ $categorie->id }}/edit">
                        <svg width="24" height="24" class="text-sky-500 hover:text-sky-300" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.2635 2.29289C20.873 1.90237 20.2398 1.90237 19.8493 2.29289L18.9769 3.16525C17.8618 2.63254 16.4857 2.82801 15.5621 3.75165L4.95549 14.3582L10.6123 20.0151L21.2189 9.4085C22.1426 8.48486 22.338 7.1088 21.8053 5.99367L22.6777 5.12132C23.0682 4.7308 23.0682 4.09763 22.6777 3.70711L21.2635 2.29289ZM16.9955 10.8035L10.6123 17.1867L7.78392 14.3582L14.1671 7.9751L16.9955 10.8035ZM18.8138 8.98525L19.8047 7.99429C20.1953 7.60376 20.1953 6.9706 19.8047 6.58007L18.3905 5.16586C18 4.77534 17.3668 4.77534 16.9763 5.16586L15.9853 6.15683L18.8138 8.98525Z"
                                fill="currentColor" />
                            <path d="M2 22.9502L4.12171 15.1717L9.77817 20.8289L2 22.9502Z" fill="currentColor" />
                        </svg>
                    </a>
                </td>
                <td class="px-4 py-3 border-b border-pink-500">
                    <form action="/categorie/{{ $categorie->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <svg width="24" height="24" class="text-red-600 hover:text-red-300" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17 5V4C17 2.89543 16.1046 2 15 2H9C7.89543 2 7 2.89543 7 4V5H4C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H5V18C5 19.6569 6.34315 21 8 21H16C17.6569 21 19 19.6569 19 18V7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H17ZM15 4H9V5H15V4ZM17 7H7V18C7 18.5523 7.44772 19 8 19H16C16.5523 19 17 18.5523 17 18V7Z"
                                    fill="currentColor" />
                                <path d="M9 9H11V17H9V9Z" fill="currentColor" />
                                <path d="M13 9H15V17H13V9Z" fill="currentColor" />
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/categorie/create" class="absolute bottom-24 left-[6.5rem]">
        <svg class="text-pink-500 hover:text-pink-700 w-14 h-14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 18V16H8V14H10V12H12V14H14V16H12V18H10Z" fill="currentColor" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z"
                fill="currentColor" />
        </svg>
    </a>

    @include('layouts.social')
</x-app-layout>
