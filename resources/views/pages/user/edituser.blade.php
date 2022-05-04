<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-right">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <form action="/user/{{ $edit->id }}/updateuser" method="POST">
        @csrf
        @method('PUT')
        <div class="mx-40 mt-24">
            <div class="flex flex-col">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="rounded-lg" value="{{ $edit->name }}">
            </div>
            <div class="flex flex-col mt-3">
                <label for="">FirstName</label>
                <input type="text" name="firstname" id="" class="rounded-lg" value="{{ $edit->firstname }}">
            </div>
            <div class="flex flex-col mt-3">
                <label for="">Age</label>
                <input type="number" name="age" id="" class="rounded-lg" value="{{ $edit->age }}">
            </div>
            <div class="flex flex-col mt-3">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="rounded-lg" value="{{ $edit->email }}">
            </div>
            <div class="flex flex-col mt-3">
                <label for="">Avatar</label>
                <select name="avatar_id" id="" class="rounded-lg">
                    @foreach ($avatars as $avatar)
                        @if ($avatar->id != 1)
                            <option value="{{ $avatar->id }}"
                                {{ $avatar->id == $edit->avatar_id ? 'selected' : null }}>{{ $avatar->name }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="border-[1px] rounded-lg w-5/6 h-10 border-green-500 hover:bg-green-500 hover:text-white transition-colors duration-200 transform mt-10">Update</button>
            </div>
        </div>
    </form>

    @include('layouts.social')
</x-app-layout>
