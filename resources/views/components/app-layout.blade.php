{{-- <x-banner />

<div class="min-h-screen bg-gray-100">

  <x-navigation />

  @isset($header)

    <header class="bg-white shadow sticky top-0">

      <div class="max-w-5xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

        {{ $header }}

      </div>

    </header>

  @endif

  <main>

    {{ $slot }}

  </main>
</div> --}}

<div>

  <x-navigation-alt />

  <main>

    {{ $slot }}

  </main>

</div>
