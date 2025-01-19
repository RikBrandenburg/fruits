<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Fruit') }}
        </h2>
    </x-slot>

    @if ($errors->any())
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="bg-red-500 text-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="post" action="{{ route('fruit.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('name') }}"
                                required autofocus />
                        </div>
                        <div class="mb-4">
                            <label for="colour" class="block text-sm font-medium text-gray-700">Colour</label>
                            <input type="text" id="colour" name="colour"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('colour') }}"
                                required autofocus />
                        </div>
                        <div class="mb-4">
                            <label for="weight" class="block text-sm font-medium text-gray-700">Weight</label>
                            <input type="number" id="weight" name="weight"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('weight') }}"
                                required autofocus />
                        </div>
                        <div class="mb-4">
                            <label for="family_id" class="block text-sm font-medium text-gray-700">Family</label>
                            <select name="family_id" id="family_id" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                @foreach ($families as $family)
                                    <option value="{{ $family->id }}">{{ $family->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <x-primary-button type="submit">Create</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
