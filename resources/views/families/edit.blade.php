<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Family') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="post" action="{{ route('family.update', $family->id) }}">
                        @method('PUT')
                        @csrf
                        <label for="name" id="name">Name</label>
                        <input type="text" id="name" name="name" class="form-input rounded-md shadow-sm mt-1 mb-4 block w-full" value="{{ old('name', $family->name)}}" />
                        <x-primary-button type="submit">Update</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
