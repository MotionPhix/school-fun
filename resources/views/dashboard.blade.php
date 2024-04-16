@seoTitle(__('Dashboard'))

<x-app-layout>

  <x-slot:header>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">

      {{ __('Dashboard') }}

    </h2>

  </x-slot>

  <div class="py-12">

    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 flex">

      <article>

        <SideMenu class="sticky top-24" />

        {{-- <x-settings-menu /> --}}

      </article>

      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg col-span-3">

        @include('components.welcome')

      </div>

    </div>

  </div>


</x-app-layout>
