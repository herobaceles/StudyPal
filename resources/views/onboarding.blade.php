<x-app-layout>
    <section class="flex flex-col items-center justify-center w-full max-w-2xl mx-auto text-center space-y-5 sm:space-y-6 px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl sm:text-4xl font-bold tracking-tight leading-tight">
            <span class="bg-gradient-to-r from-blue-400 to-blue-700 bg-clip-text text-transparent">
                Complete Your Onboarding
            </span>
        </h1>
        <p class="text-sm sm:text-base text-blue-600 max-w-md mx-auto">
            Tell us a bit more about yourself so we can personalize your experience.
        </p>

        @if ($errors->any())
    <div class="mb-4 text-red-600">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form method="POST" action="{{ route('onboarding.complete') }}" class="w-full bg-white/80 backdrop-blur rounded-md shadow px-4 py-6 sm:px-6 space-y-4">
            @csrf

            <div class="text-left">
                <label class="block text-sm font-medium text-blue-700 mb-1">Current College Course</label>
                <input type="text" name="college_course" value="{{ old('college_course') }}" class="w-full border border-blue-200 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="text-left">
                <label class="block text-sm font-medium text-blue-700 mb-1">Goal for Studying</label>
                <textarea name="study_goal" class="w-full border border-blue-200 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('study_goal') }}</textarea>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-blue-400 to-blue-600 hover:from-blue-500 hover:to-blue-700 text-white font-medium px-5 py-2 rounded transition duration-200">
                Complete Onboarding
            </button>
        </form>
    </section>
</x-app-layout>
