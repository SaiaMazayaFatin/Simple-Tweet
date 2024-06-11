<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">{{ __("You're logged in!") }}</h3>
                    <p class="mb-4">Welcome to your dashboard. Here you can see the list of current users.</p>

                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h4 class="text-lg font-medium mb-4">Current Users</h4>
                        <ul class="list-disc list-inside">
                            @foreach ($users as $user)
                                <li>{{ $user->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
