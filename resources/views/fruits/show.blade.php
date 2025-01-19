<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fruits') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <h2 class="text-xl font-bold">{{ $fruit->name }}</h2>
                        <p class="text-xl font-bold">Colour: {{ $fruit->colour }}</p>
                        <p class="text-xl font-bold">Weight: {{ $fruit->weight }}</p>
                        @if ($fruit->family)
                            <p class="text-xl font-bold">Family: {{ $fruit->family->name }}</p>
                        @else
                        <p class="text-xl font-bold text-red-500">No family associated on this fruit.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
