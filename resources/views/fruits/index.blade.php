<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fruits') }}
        </h2>
    </x-slot>

    @if (session('success'))
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-green-500 text-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="{{ route('fruit.create') }}"><x-primary-button>Create Fruit</x-primary-button></a>
                </div>

                <div class="p-6">
                    @foreach ($fruits as $fruit)
                        <div class="mb-4 flex flex-col sm:flex-row justify-between sm:items-center">
                            <div class="sm:w-1/2 mb-2 sm:mb-0">
                                <h2 class="text-xl font-bold">
                                    <a href="{{ route('fruit.show', $fruit->id) }}" class="text-blue-500 hover:underline">
                                        {{ $fruit->name }}
                                    </a>
                                </h2>
                            </div>

                            <div class="flex flex-col sm:flex-row sm:items-center space-y-2 sm:space-x-2 sm:space-y-0">
                                <a href="{{ route('fruit.edit', $fruit->id) }}">
                                    <x-primary-button>Edit</x-primary-button>
                                </a>
                                <!-- Delete Button -->
                                <form method="POST" action="{{ route('fruit.destroy', $fruit->id) }}"
                                    onsubmit="return confirm('Are you sure you want to delete this fruit?');">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button type="submit">Delete</x-danger-button>
                                </form>
                            </div>
                        </div>
                        <hr class="my-4">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
