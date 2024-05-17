<x-splade-rehydrate on="refresh-navigation-menu, profile-information-updated">

  <nav class="flex justify-between sticky top-0 shadow z-40 items-center px-12 h-16 bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">

    <section class="flex items-center gap-4">

      <x-splade-link
        class="flex items-center gap-2"
        href="{{ route('dashboard') }}">

        <x-application-logo class="w-8 h-8" />

        <span class="font-semibold font-display text-2xl">
          Logic
        </span>
        {{-- config('app.name', 'Laravel') --}}

      </x-splade-link>

      <!-- Left Side Of Navbar -->
      @auth

        @php

          $latest_school_session = \App\Models\SchoolYear::latest()->first();

          $current_school_session_name = null;

          if($latest_school_session) {

            $current_school_session_name = $latest_school_session->session_name;

          }

        @endphp

        <ul class="flex">

          <li>

            @if (session()->has('browse_session_name') && session('browse_session_name') !== $current_school_session_name)

              <a
                class="nav-link text-danger disabled"
                href="#"
                tabindex="-1"
                aria-disabled="true">

                <i class="bi bi-exclamation-diamond-fill me-2"></i>

                <span>Browsing as Academic Session {{ session('browse_session_name') }}</span>

              </a>

            @elseif(\App\Models\SchoolYear::latest()->count() > 0)

              <a
                class="nav-link disabled"
                href="#"
                tabindex="-1"
                aria-disabled="true">

                Current Academic Session {{ $current_school_session_name }}

              </a>

            @else

              <x-splade-link
                class="text-xs text-rose-500 flex items-center gap-2"
                href="{{ route('settings.schoolyear') }}">

                <x-tabler-info-triangle class="w-4 h-4" />

                <span>Add an academic year to get started.</span>

              </x-splade-link>

            @endif

          </li>

        </ul>

      @endauth

      <!-- Navigation Links -->
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

        <x-nav-link
          class="h-16"
          :href="route('dashboard')"
          :active="request()->routeIs('dashboard')">
          {{ __('Dashboard') }}
        </x-nav-link>

        <x-nav-link
          class="h-16"
          :href="route('dashboard')"
          :active="request()->routeIs('dashboard')">
          {{ __('Classes') }}
        </x-nav-link>

        <x-nav-link
          class="h-16"
          :href="route('dashboard')"
          :active="request()->routeIs('dashboard')">
          {{ __('Students') }}
        </x-nav-link>

        <x-nav-link
          class="h-16"
          :href="route('dashboard')"
          :active="request()->routeIs('dashboard')">
          {{ __('Teachers') }}
        </x-nav-link>

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
          {{ __('Grades') }}
        </x-nav-link>

        <x-nav-link
          class="h-16"
          :href="route('settings.schoolyear')"
          :active="request()->routeIs('settings.*')">
          {{ __('Settings') }}
        </x-nav-link>

      </div>

    </section>

    <ul class="text-gray-800">

      @guest

        @if (Route::has('login'))

          <li class="nav-item">

            <x-splade-link
              href="{{ route('login') }}">

              <x-tabler-login class="h-5 w-5" />

              <span>{{ __('Login') }}</span>

            </x-splade-link>

          </li>

        @endif

      @else

        <li class="flex items-center gap-2">

          <span
            class="capitalize bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300">
            {{ auth()->user()->role }}
          </span>

          <x-splade-dropdown>

            <x-slot:trigger>

              @if(\Laravel\Jetstream\Jetstream::managesProfilePhotos())

                <button
                  class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">

                  <img
                    class="h-8 w-8 rounded-full object-cover"
                    src="{{ auth()->user()->profile_photo_url }}"
                    alt="{{ auth()->user()->full_name }}">

                </button>

              @else

                <span class="inline-flex rounded-md">

                  <button
                    type="button"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">

                    {{ auth()->user()->full_name }}

                    <svg
                      class="ml-2 -mr-0.5 h-4 w-4"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>

                  </button>

                </span>

              @endif

              </x-slot>

              <div class="w-48 mt-2 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 py-1 bg-white">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">

                  {{ __('Manage Account') }}

                </div>

                <x-dropdown-link :href="route('profile.show')">

                  {{ __('Profile') }}

                </x-dropdown-link>

                @if(\Laravel\Jetstream\Jetstream::hasApiFeatures())

                  <x-dropdown-link :href="route('api-tokens.index')">

                    {{ __('API Tokens') }}

                  </x-dropdown-link>

                @endif

                <div class="border-t border-gray-200"></div>

                <!-- Authentication -->
                <x-splade-form :action="route('logout')">

                  <x-dropdown-link as="button">

                    {{ __('Log Out') }}

                  </x-dropdown-link>

                </x-splade-form>

              </div>

          </x-splade-dropdown>

        </li>

      @endguest

    </ul>

  </nav>

</x-splade-rehydrate>
