<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('User') }}
        </h2>
    </x-slot>

    <!-- component -->
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <div class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-gray-800 text-emerald-500">
                        <tr>
                            <th class="p-3 text-left rounded-md text-gray-500">#</th>
                            <th class="p-3 text-left rounded-md">User</th>
                            <th class="p-3 text-left rounded-md">Age</th>
                            <th class="p-3 text-left rounded-md">Rôle</th>
                            <th class="p-3 text-left rounded-md">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="bg-gray-800">
                                <td class="p-3 rounded-md">{{ $user->id }}</td>
                                <td class="p-3 rounded-md">
                                    <div class="flex align-items-center">
                                        @if ($user->avatar_id == null)
                                            <img class="rounded-full h-12 w-12  object-cover"
                                                src="{{ asset('storage/' . $avatars[0]->src) }}"
                                                alt="unsplash image">
                                        @else
                                            <img class="rounded-full h-12 w-12  object-cover"
                                                src="{{ asset('storage/' . $user->avatar->src) }}"
                                                alt="unsplash image">
                                        @endif
                                        <div class="ml-3">
                                            <div class="">{{ $user->name . ' ' . $user->firstname }}
                                            </div>
                                            <div class="text-gray-500">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-3 font-bold rounded-md">{{ $user->age }}</td>
                                <td class="p-3 font-bold rounded-md">{{ $user->role->role }}</td>
                                @can('admin-user', $user)
                                    <td class="p-3 rounded-md flex pt-6">
                                        <a href="/user/{{ $user->id }}" class="text-gray-400 hover:text-gray-100 mx-2">
                                            <i class="material-icons-outlined text-base">visibility</i>
                                        </a>
                                        <a href="/user/{{ $user->id }}/edituser"
                                            class="text-gray-400 hover:text-sky-500  mx-2">
                                            <i class="material-icons-outlined text-base">edit</i>
                                        </a>
                                        @can('delete', $user)
                                            <form action="/user/{{ $user->id }}" method="POST"
                                                class="text-gray-400 hover:text-red-500 mx-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    <i class="material-icons-round text-base">delete_outline</i>
                                                </button>
                                            </form>
                                        @endcan
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('layouts.social')
</x-app-layout>
