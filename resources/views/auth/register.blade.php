<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>StudyPal - Register</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-white to-blue-50 min-h-screen flex flex-col items-center justify-center px-4 py-8">

  <!-- Back Button -->
  <div class="w-full max-w-sm mb-4">
    <a href="{{ url('/') }}" class="flex items-center text-sm text-blue-600 hover:text-blue-800">
      <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
      Back to Home
    </a>
  </div>

  <!-- Register Form -->
  <div class="w-full max-w-sm space-y-6">
    <h1 class="text-2xl sm:text-3xl font-bold text-center bg-gradient-to-r from-blue-400 to-blue-700 bg-clip-text text-transparent">
      Create Your Account
    </h1>
    <p class="text-sm text-center text-blue-600">
      Start learning with StudyPal today
    </p>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
      @csrf

      <!-- Name -->
      <div>
        <label for="name" class="block text-sm text-gray-700">Name</label>
        <input
          id="name"
          name="name"
          type="text"
          value="{{ old('name') }}"
          required
          autofocus
          autocomplete="name"
          class="block w-full mt-1 rounded-md border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 text-sm"
        />
        @error('name')
          <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
        @enderror
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm text-gray-700">Email</label>
        <input
          id="email"
          name="email"
          type="email"
          value="{{ old('email') }}"
          required
          autocomplete="username"
          class="block w-full mt-1 rounded-md border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 text-sm"
        />
        @error('email')
          <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
        @enderror
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm text-gray-700">Password</label>
        <input
          id="password"
          name="password"
          type="password"
          required
          autocomplete="new-password"
          class="block w-full mt-1 rounded-md border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 text-sm"
        />
        @error('password')
          <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
        @enderror
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="password_confirmation" class="block text-sm text-gray-700">Confirm Password</label>
        <input
          id="password_confirmation"
          name="password_confirmation"
          type="password"
          required
          autocomplete="new-password"
          class="block w-full mt-1 rounded-md border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 text-sm"
        />
        @error('password_confirmation')
          <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
        @enderror
      </div>

      <!-- Actions -->
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mt-4">
        <a
          class="text-xs text-blue-600 hover:text-blue-800 underline text-center sm:text-left"
          href="{{ route('login') }}"
        >
          Already registered?
        </a>

        <button
          type="submit"
          class="inline-block w-full sm:w-auto bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white text-sm font-medium px-4 py-2 rounded-md transition duration-200"
        >
          Register
        </button>
      </div>
    </form>
  </div>
</body>
</html>
