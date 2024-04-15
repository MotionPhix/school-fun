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

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">

  <div class="container mx-auto sm:px-4">
      <div class="flex flex-wrap  justify-start">

          <div class="sm:w-5/6 pr-4 pl-4 md:w-5/6 lg:w-4/5 xl:w-4/5">

              <div class="flex flex-wrap pt-3">

                  <div class="relative flex-grow max-w-full flex-1 px-4 ps-4">

                      <h1 class="display-6 mb-3">

                        <i class="ms-auto bi bi-grid"></i>

                        {{ __('Dashboard') }}

                      </h1>

                      <div class="flex flex-wrap  dashboard">

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

                      </div>

                      @if($studentCount > 0)

                      <div class="mt-3 flex items-center">

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

                              <div
                                class="progress-bar progress-bar-striped" role="progressbar" {!!$maleStudentPercentageStyle!!} aria-valuenow="{{$maleStudentPercentage}}" aria-valuemin="0" aria-valuemax="100">
                                {{$maleStudentPercentage}}%
                              </div>

                              <div
                                class="progress-bar progress-bar-striped" role="progressbar" {!!$femaleStudentPercentageStyle!!} aria-valuenow="{{$femaleStudentPercentage}}" aria-valuemin="0" aria-valuemax="100">
                                {{$femaleStudentPercentage}}%
                              </div>

                          </div>

                      </div>

                      @endif

                      <div class="flex flex-wrap  md:items-stretch mt-4">

                          <div class="relative flex-grow max-w-full flex-1 px-4">

                              <div class="p-6 text-white bg-gray-900 rounded-3">

                                  <h3>Welcome to Unifiedtransform!</h3>
                                  <p><i class="bi bi-emoji-heart-eyes"></i> Thanks for your love and support.</p>

                              </div>

                          </div>

                          <div class="relative flex-grow max-w-full flex-1 px-4">

                              <div
                                class="p-6 bg-white border rounded-3"
                                style="height: 100%;">
                                  <h3>Manage school better</h3>

                                  <p class="text-end">
                                    with <i class="bi bi-lightning"></i>
                                    <a
                                      href="https://github.com/changeweb/Unifiedtransform" target="_blank" style="text-decoration: none;">
                                      Unifiedtransform
                                    </a>
                                    <i class="bi bi-lightning"></i>.
                                  </p>

                              </div>

                          </div>

                      </div>

                      <div class="flex flex-wrap  mt-4">

                          <div class="lg:w-1/2 pr-4 pl-4">

                              <div
                                class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3">

                                  <div
                                    class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900 bg-transparent">
                                    <i class="bi bi-calendar-event me-2"></i> Events
                                  </div>

                                  <div class="flex-auto p-6 text-gray-900">
                                      {{-- @include('components.events.event-calendar', ['editable' => 'false', 'selectable' => 'false']) --}}

                                      <div class="overflow-auto" style="height: 250px;">

                                          <div
                                            class="flex flex-col pl-0 mb-0 border rounded border-gray-300">
                                              <a
                                                href="#" class="relative block py-3 px-6 -mb-px border border-r-0 border-l-0 border-gray-300 no-underline w-full">

                                                  <div class="flex w-full justify-between">

                                                    <h5
                                                      class="mb-1">
                                                      List group item heading
                                                    </h5>

                                                    <small>3 days ago</small>

                                                  </div>

                                                  <p
                                                    class="mb-1">
                                                    Some placeholder content in a paragraph
                                                  </p>

                                                  <small>And some small print.</small>
                                              </a>
                                          </div>

                                      </div>

                                  </div>

                              </div>

                          </div>

                          <div
                            class="lg:w-1/2 pr-4 pl-4">

                              <div
                                class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3">

                                  <div
                                    class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900 bg-transparent flex justify-between">

                                    <span>
                                      <i class="bi bi-megaphone me-2"></i> Notices
                                    </span>

                                    {{-- {{ $notices->links() }} --}}
                                  </div>

                                  <div
                                    class="flex-auto p-6 text-gray-900">

                                      <div>
                                          @isset($notices)

                                          <div
                                            class="accordion accordion-flush" id="noticeAccordion">

                                              @foreach ($notices as $notice)

                                              <div
                                                class="accordion-item">
                                                  <h2
                                                    class="accordion-header" id="flush-heading{{$notice->id}}">
                                                      <button
                                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$notice->id}}" aria-expanded={{($loop->first)?"true":"false"}} aria-controls="flush-collapse{{$notice->id}}">
                                                          Published at: {{$notice->created_at}}
                                                      </button>
                                                  </h2>

                                                  <div
                                                    id="flush-collapse{{$notice->id}}" class="accordion-collapse hidden {{($loop->first)?"show":"hide"}}" aria-labelledby="flush-heading{{$notice->id}}" data-bs-parent="#noticeAccordion">
                                                      <div
                                                        class="accordion-body overflow-auto">{!!Purify::clean($notice->notice)!!}
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
