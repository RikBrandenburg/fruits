<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-gray-100 rounded-lg shadow-md">
                    <div class="space-y-3">
                        <a href="{{ route('fruit.index') }}"
                            class="block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
                            Manage Fruits
                        </a>
                        <a href="{{ route('family.index') }}"
                            class="block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
                            Manage Families
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
