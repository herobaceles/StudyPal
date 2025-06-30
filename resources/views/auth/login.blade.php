<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>StudyPal - Login</title>
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

  <!-- Login Form -->
  <div class="w-full max-w-sm space-y-6">
    <h1 class="text-2xl sm:text-3xl font-bold text-center bg-gradient-to-r from-blue-400 to-blue-700 bg-clip-text text-transparent">
      Welcome Back
    </h1>
    <p class="text-sm sm:text-base text-center text-blue-600">
      Log in to your StudyPal account
    </p>

    @if (session('status'))
      <div class="mb-4 text-sm text-green-600 text-center">
        {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
      @csrf

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm text-gray-700">Email</label>
        <input
          id="email"
          name="email"
          type="email"
          value="{{ old('email') }}"
          required
          autofocus
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
          autocomplete="current-password"
          class="block w-full mt-1 rounded-md border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-200 text-sm"
        />
        @error('password')
          <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
        @enderror
      </div>

      <!-- Remember Me -->
      <div class="flex items-center">
        <input
          id="remember_me"
          name="remember"
          type="checkbox"
          class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
        />
        <label for="remember_me" class="ml-2 text-sm text-gray-600">
          Remember me
        </label>
      </div>

      <!-- Actions -->
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mt-4">
        @if (Route::has('password.request'))
          <a
            class="text-xs text-blue-600 hover:text-blue-800 underline"
            href="{{ route('password.request') }}"
          >
            Forgot your password?
          </a>
        @endif

        <button
          type="submit"
          class="w-full sm:w-auto inline-block bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white text-sm font-medium px-4 py-2 rounded-md transition duration-200 text-center"
        >
          Log in
        </button>
      </div>
    </form>
  </div>
</body>
</html>
