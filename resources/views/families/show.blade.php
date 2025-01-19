<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Family') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Display Family Name -->
                    <div class="mb-4">
                        <h2 class="text-xl font-bold">{{ $family->name }}</h2>
                    </div>

                    <!-- Display Associated Fruits -->
                    <div class="mb-4">
                        <h2 class="text-xl font-bold">All associated fruits:</h2>
                        @if ($family->fruits->isEmpty())
                            <p class="text-red-500">No fruits associated with this family</p>
                        @else
                            @foreach ($family->fruits as $fruit)
                                <p>{{ $fruit->name }}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
