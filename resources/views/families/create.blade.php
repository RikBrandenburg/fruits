<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Family') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="bg-red text-white px-4 py-2 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="post" action="{{ route('family.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('name') }}"
                                required autofocus />
                        </div>
                        <x-primary-button type="submit">Create</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
