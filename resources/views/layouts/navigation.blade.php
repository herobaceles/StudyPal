<nav x-data="{ open: false }" class="w-full px-4 py-3 sm:px-6 sm:py-4 bg-white border-b border-blue-100 shadow-sm">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center space-x-4">
      <a href="{{ route('dashboard') }}">
        <span class="text-xl sm:text-2xl font-bold bg-gradient-to-r from-blue-500 to-blue-700 bg-clip-text text-transparent">
          StudyPal
        </span>
      </a>

      <!-- Desktop Navigation Links -->
      <div class="hidden sm:flex space-x-4">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
          <span class="text-gray-800 hover:text-blue-700 font-medium">{{ __('Dashboard') }}</span>
        </x-nav-link>
        <x-nav-link href="#">
          <span class="text-gray-800 hover:text-blue-700 font-medium">{{ __('Courses') }}</span>
        </x-nav-link>
      </div>
    </div>

    <!-- Right Side -->
    <div class="hidden sm:flex sm:items-center space-x-3">
      <x-dropdown align="right" width="48">
        <x-slot name="trigger">
          <button class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-800 hover:text-blue-700 hover:bg-blue-100/50 focus:outline-none transition">
            <div>{{ Auth::user()->name }}</div>
            <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path fill="currentColor" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </button>
        </x-slot>

        <x-slot name="content">
          <x-dropdown-link :href="route('profile.edit')">
            {{ __('Profile') }}
          </x-dropdown-link>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
              onclick="event.preventDefault(); this.closest('form').submit();">
              {{ __('Log Out') }}
            </x-dropdown-link>
          </form>
        </x-slot>
      </x-dropdown>
    </div>

    <!-- Hamburger -->
    <div class="sm:hidden flex items-center">
      <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-700 hover:bg-blue-100 focus:outline-none transition">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden mt-2 rounded-md border border-blue-100 bg-white shadow-sm">
    <div class="space-y-1 pb-3 px-4">
      <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        <span class="text-gray-800 hover:text-blue-700 font-medium">{{ __('Dashboard') }}</span>
      </x-responsive-nav-link>
      <x-responsive-nav-link href="#">
        <span class="text-gray-800 hover:text-blue-700 font-medium">{{ __('Courses') }}</span>
      </x-responsive-nav-link>
    </div>
    <div class="border-t border-gray-200 pt-4 pb-2">
      <div class="px-4">
        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
      </div>
      <div class="mt-3 space-y-1 px-4">
        <x-responsive-nav-link :href="route('profile.edit')">
          {{ __('Profile') }}
        </x-responsive-nav-link>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
</nav>
