<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl sm:text-2xl font-bold bg-gradient-to-r from-blue-400 to-blue-700 bg-clip-text text-transparent">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-white [background:radial-gradient(circle_at_center,white,rgba(219,234,254,0.6))] text-gray-900 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-white via-white to-blue-50 bg-opacity-80 backdrop-blur shadow-md transition transform hover:scale-[1.01] hover:shadow-lg sm:rounded-xl p-8 text-center">
                <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-blue-700 mb-2">
                    🎉 {{ __("You're logged in!") }}
                </h3>
                <p class="text-sm text-blue-600 max-w-md mx-auto">
                    Welcome back to <span class="font-bold text-blue-600 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-blue-700">StudyPal</span>.
                    Start exploring your learning dashboard and stay on track!
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
