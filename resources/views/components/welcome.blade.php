<div class="p-6 lg:p-8 bg-white border-b border-gray-200">

  <x-application-logo class="block h-12 w-auto" />

  <h1 class="mt-8 text-2xl font-medium text-gray-900">
    Welcome to {{ config('app.name') }}!
  </h1>

  <p class="mt-6 text-gray-500 leading-relaxed">
    Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
    to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
    you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
    ecosystem to be a breath of fresh air. We hope you love it.
  </p>

</div>

<div>

  <div class="mx-auto sm:px-4">

    <div class="flex flex-wrap  justify-start">

      <div>

        <div class="flex flex-wrap pt-3">

          <div class="relative flex-grow max-w-full flex-1">

            <h1 class="flex items-center gap-2 mb-3">

              <x-tabler-layout-grid class="h-7 w-7" stroke="0.5" />

              <span>{{ __('Dashboard') }}</span>

            </h1>

            {{-- <div class="flex flex-wrap  dashboard">

              <div class="relative flex-grow max-w-full flex-1 px-4">

                <div class="relative flex flex-col min-w-0 break-words border bg-white border-1 border-gray-300 rounded-full py-2 px-4">

                  <div class="flex-auto p-6">

                    <div class="flex justify-between items-start">

                      <div class="ms-2 me-auto">

                        <div class="fw-bold"><i class="bi bi-person-lines-fill me-3"></i>
                          Total Students
                        </div>
                      </div>

                      <span class="inline-block p-1 text-center font-semibold text-sm align-baseline leading-none bg-gray-900 rounded-full py-2 px-4">
                        {{ $studentCount }}
                      </span>

                    </div>

                  </div>

                </div>

              </div>

              <div class="relative flex-grow max-w-full flex-1 px-4">

                <div class="relative flex flex-col min-w-0 break-words border bg-white border-1 border-gray-300 rounded-full py-2 px-4">

                  <div class="flex-auto p-6">

                    <div class="flex justify-between items-start">

                      <div class="ms-2 me-auto">

                        <div class="fw-bold"><i class="bi bi-person-lines-fill me-3"></i> Total Teachers</div>
                      </div>

                      <span class="inline-block p-1 text-center font-semibold text-sm align-baseline leading-none bg-gray-900 rounded-full py-2 px-4">{{$teacherCount}}</span>
                    </div>

                  </div>

                </div>

              </div>

              <div class="relative flex-grow max-w-full flex-1 px-4">

                <div class="relative flex flex-col min-w-0 break-words border bg-white border-1 border-gray-300 rounded-full py-2 px-4">

                  <div class="flex-auto p-6">

                    <div class="flex justify-between items-start">

                      <div class="ms-2 me-auto">
                        <div class="fw-bold"><i class="bi bi-diagram-3 me-3"></i> Total Classes</div>
                      </div>

                      <span class="inline-block p-1 text-center font-semibold text-sm align-baseline leading-none bg-gray-900 rounded-full py-2 px-4">{{ $classCount }}</span>

                    </div>

                  </div>

                </div>

              </div>

              <div class="relative flex-grow max-w-full flex-1 px-4">
                <div class="relative flex flex-col min-w-0 break-words border bg-white border-1 border-gray-300 rounded-full py-2 px-4">
                  <div class="flex-auto p-6">
                    <div class="flex justify-between items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Total Books</div>
                      </div>
                      <span class="inline-block p-1 text-center font-semibold text-sm align-baseline leading-none bg-gray-900 rounded-full py-2 px-4">800</span>
                    </div>
                  </div>
                </div>
              </div>

            </div> --}}

            <div class="grid sm:grid-cols-4 border-y border-gray-200 dark:border-neutral-800">
    <!-- Card -->
    <div class="p-4 md:p-5 relative before:absolute before:top-0 before:start-0 before:w-full before:h-px sm:before:w-px sm:before:h-full before:bg-gray-200 before:first:bg-transparent dark:before:bg-neutral-800">
      <div>
        <svg class="flex-shrink-0 size-5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>

        <div class="mt-3">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
              Total users
            </p>
            <div class="hs-tooltip">
              <div class="hs-tooltip-toggle">
                <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                  The number of daily users
                </span>
              </div>
            </div>
          </div>
          <div class="mt-1 lg:flex lg:justify-between lg:items-center">

            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
              72,540
            </h3>

          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="p-4 md:p-5 relative before:absolute before:top-0 before:start-0 before:w-full before:h-px sm:before:w-px sm:before:h-full before:bg-gray-200 before:first:bg-transparent dark:before:bg-neutral-800">
      <div>
        <svg class="flex-shrink-0 size-5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 22h14"/><path d="M5 2h14"/><path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22"/><path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2"/></svg>

        <div class="mt-3">
          <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
            Sessions
          </p>

          <div class="mt-1 lg:flex lg:justify-between lg:items-center">

            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
              29.4%
            </h3>

          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="p-4 md:p-5 relative before:absolute before:top-0 before:start-0 before:w-full before:h-px sm:before:w-px sm:before:h-full before:bg-gray-200 before:first:bg-transparent dark:before:bg-neutral-800">
      <div>
        <svg class="flex-shrink-0 size-5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6"/><path d="m12 12 4 10 1.7-4.3L22 16Z"/></svg>

        <div class="mt-3">
          <div class="flex items-center gap-x-2">

            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
              Avg. Click Rate
            </p>

          </div>

          <div class="mt-1 lg:flex lg:justify-between lg:items-center">

            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
              56.8%
            </h3>

          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="p-4 md:p-5 relative before:absolute before:top-0 before:start-0 before:w-full before:h-px sm:before:w-px sm:before:h-full before:bg-gray-200 before:first:bg-transparent dark:before:bg-neutral-800">
      <div>
        <svg class="flex-shrink-0 size-5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z"/><path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/><path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2"/><path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2"/></svg>

        <div class="mt-3">
          <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
            Pageviews
          </p>
          <div class="mt-1 lg:flex lg:justify-between lg:items-center">

            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
              92,913
            </h3>

          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>

            @if($studentCount > 0)

            {{-- <div class="mt-3 flex items-center">

              <div class="w-1/4">
                <span class="ps-2 me-2">Students %</span>
                <span class="inline-block p-1 text-center font-semibold text-sm align-baseline leading-none rounded-full py-2 px-4 border" style="background-color: #0678c8;">Male</span>
                <span class="inline-block p-1 text-center font-semibold text-sm align-baseline leading-none rounded-full py-2 px-4 border" style="background-color: #49a4fe;">Female</span>
              </div>

              @php
              $maleStudentPercentage = round(($maleStudentsBySession/$studentCount), 2) * 100;
              $maleStudentPercentageStyle = "style='background-color: #0678c8; width: $maleStudentPercentage%'";

              $femaleStudentPercentage = round((($studentCount - $maleStudentsBySession)/$studentCount), 2) * 100;
              $femaleStudentPercentageStyle = "style='background-color: #49a4fe; width: $femaleStudentPercentage%'";
              @endphp

              <div class="w-3/4 progress">

                <div class="progress-bar progress-bar-striped" role="progressbar" {!!$maleStudentPercentageStyle!!} aria-valuenow="{{$maleStudentPercentage}}" aria-valuemin="0" aria-valuemax="100">
                  {{$maleStudentPercentage}}%
                </div>

                <div class="progress-bar progress-bar-striped" role="progressbar" {!!$femaleStudentPercentageStyle!!} aria-valuenow="{{$femaleStudentPercentage}}" aria-valuemin="0" aria-valuemax="100">
                  {{$femaleStudentPercentage}}%
                </div>

              </div>

            </div> --}}

            @endif

            <div class="flex flex-wrap  md:items-stretch mt-4">

              <div class="relative flex-grow max-w-full flex-1 px-4">

                <div class="p-6 text-white bg-gray-900 rounded-3">

                  <h3>Welcome to Unifiedtransform!</h3>
                  <p><i class="bi bi-emoji-heart-eyes"></i> Thanks for your love and support.</p>

                </div>

              </div>

              <div class="relative flex-grow max-w-full flex-1 px-4">

                <div class="p-6 bg-white border rounded-3" style="height: 100%;">
                  <h3>Manage school better</h3>

                  <p class="text-end">
                    with <i class="bi bi-lightning"></i>
                    <a href="https://github.com/changeweb/Unifiedtransform" target="_blank" style="text-decoration: none;">
                      Unifiedtransform
                    </a>
                    <i class="bi bi-lightning"></i>.
                  </p>

                </div>

              </div>

            </div>

            <div class="flex flex-wrap  mt-4">

              <div class="lg:w-1/2 pr-4 pl-4">

                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3">

                  <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900 bg-transparent">
                    <i class="bi bi-calendar-event me-2"></i> Events
                  </div>

                  <div class="flex-auto p-6 text-gray-900">
                    {{-- @include('components.events.event-calendar', ['editable' => 'false', 'selectable' => 'false']) --}}

                    <div class="overflow-auto" style="height: 250px;">

                      <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300">
                        <a href="#" class="relative block py-3 px-6 -mb-px border border-r-0 border-l-0 border-gray-300 no-underline w-full">

                          <div class="flex w-full justify-between">

                            <h5 class="mb-1">
                              List group item heading
                            </h5>

                            <small>3 days ago</small>

                          </div>

                          <p class="mb-1">
                            Some placeholder content in a paragraph
                          </p>

                          <small>And some small print.</small>
                        </a>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="lg:w-1/2 pr-4 pl-4">

                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3">

                  <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900 bg-transparent flex justify-between">

                    <span>
                      <i class="bi bi-megaphone me-2"></i> Notices
                    </span>

                    {{-- {{ $notices->links() }} --}}
                  </div>

                  <div class="flex-auto p-6 text-gray-900">

                    <div>
                      @isset($notices)

                      <div class="accordion accordion-flush" id="noticeAccordion">

                        @foreach ($notices as $notice)

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading{{$notice->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$notice->id}}" aria-expanded={{($loop->first)?"true":"false"}} aria-controls="flush-collapse{{$notice->id}}">
                              Published at: {{$notice->created_at}}
                            </button>
                          </h2>

                          <div id="flush-collapse{{$notice->id}}" class="accordion-collapse hidden {{($loop->first)?"show":"hide"}}" aria-labelledby="flush-heading{{$notice->id}}" data-bs-parent="#noticeAccordion">
                            <div class="accordion-body overflow-auto">{!!Purify::clean($notice->notice)!!}
                            </div>
                          </div>

                        </div>

                        @endforeach

                      </div>

                      @endisset

                      {{-- @if(count($notices) < 1)
                                                  <div class="p-6">No notices</div>
                                              @endif --}}
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>
