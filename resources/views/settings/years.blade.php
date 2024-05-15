<div class="max-w-4xl mx-auto">

  <div class="flex justify-start gap-6">

    @include('components.left-menu')

    <div class="col-span-11 lg:col-span-10">

      <div class="flex pt-2">

        <div class="flex flex-col ps-4">

          <h1 class="flex items-center gap-2 text-2xl mb-6">

            <x-tabler-settings class="w-7 h-7" />

            <span>Academic Settings</span>

          </h1>

          <div class="mb-4">

            <article
              class="grid gap-4 grid-cols-2">

              @if ($latest_school_year_id == $current_school_year_id)

                <section>

                  <div class="p-3 border bg-gray-100 shadow rounded h-full">

                    <h6 class="mb-4 border-b pb-2">Create school session</h6>

                    {{-- action="{{route('school.session.store')}}" method="POST" --}}
                    <x-splade-form>

                      <div class="mb-3">

                        <x-splade-input
                          type="text"
                          class="w-full"
                          label="Session name"
                          placeholder="E.g. 2021 - 2022"
                          aria-label="Current Session"
                          name="session_name" />

                      </div>

                      <x-splade-submit
                        type="submit"
                        class="flex items-center gap-2">

                        <x-tabler-device-floppy class="w-5 h-5" />

                        <span>Add</span>

                      </x-splade-submit>

                    </x-splade-form>

                    <div class="text-gray-500 flex items-start gap-2 mt-4 text-xs border-t pt-2">

                      <x-tabler-info-square class="shrink-0 w-5 h-5" />

                      <span>
                        Last created session will be considered as the active school session. You can create only one
                        school session per academic year.
                      </span>

                    </div>

                  </div>

                </section>

              @endif

              <section>

                <div class="p-3 border bg-gray-100 shadow rounded flex flex-col h-full">

                  <h6 class="mb-4 border-b pb-2">Browse by session</h6>

                  {{-- action="{{route('school.session.browse')}}" method="POST" --}}
                  <x-splade-form>

                    <div class="mb-3">

                      <x-splade-select
                        label="Select session"
                        name="session_id"
                        choices>

                        {{-- @isset($school_sessions)

                          @foreach ($school_sessions as $school_session)

                            <option value="{{$school_session->id}}">{{$school_session->session_name}}</option>

                          @endforeach

                        @endisset --}}

                      </x-splade-select>

                    </div>

                    <x-splade-submit
                      class="flex items-center gap-2"
                      type="submit">
                      <x-tabler-check class="w-5 h-5" />
                      <span>Set</span>
                    </x-splade-submit>

                  </x-splade-form>

                  <div class="flex-1"></div>

                  <div class="text-gray-500 flex items-start gap-2 mt-4 text-xs border-t pt-2">

                    <x-tabler-info-square class="w-5 h-5 shrink-0" />

                    <span>
                      Only use this when you want to browse data from previous Sessions.
                    </span>

                  </div>

                </div>

              </section>

              @if ($latest_school_year_id == $current_school_year_id)

                <section>

                  <div class="p-3 border bg-gray-100 shadow rounded h-full">

                    <h6 class="mb-4 border-b pb-2">New semester/term for current session</h6>

                    {{-- action="{{route('school.semester.create')}}" method="POST" --}}
                    <x-splade-form class="flex flex-col gap-6">

                      <input type="hidden" name="session_id" value="{{ $current_school_year_id }}">

                      <div class="mt-2">

                        <x-splade-input
                          type="text"
                          label="Semester name"
                          placeholder="First Semester"
                          aria-label="Semester name"
                          name="semester_name" />

                      </div>

                      <div>

                        <x-splade-input
                          type="date"
                          class="w-full"
                          label="Start date"
                          placeholder="Start date"
                          name="start_date"
                          required />

                      </div>

                      <div>

                        <x-splade-input
                          type="date"
                          class="w-full"
                          label="End date"
                          placeholder="End date"
                          name="end_date" required />

                      </div>

                      <x-splade-submit
                        type="submit"
                        class="mt-3 flex items-center gap-2">
                        <x-tabler-device-floppy class="w-5 h-5" />
                        <span>Create</span>
                      </x-splade-submit>

                    </x-splade-form>

                  </div>

                </section>

                <section>

                  <div class="p-3 border bg-gray-100 shadow rounded h-full">

                    <h6>Attendance Type</h6>

                    <p class="text-danger">

                      <small>

                        <i class="bi bi-exclamation-diamond-fill me-2"></i>

                        <span>Do not change the type in the middle of a Semester.</span>

                      </small>

                    </p>

                    {{-- <form action="{{route('school.attendance.type.update')}}" method="POST">
                        @csrf
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="attendance_type" id="attendance_type_section" {{($academic_setting->attendance_type == 'section')?'checked="checked"':null}} value="section">
                            <label class="form-check-label" for="attendance_type_section">
                                Attendance by Section
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="attendance_type" id="attendance_type_course" {{($academic_setting->attendance_type == 'course')?'checked="checked"':null}} value="course">
                            <label class="form-check-label" for="attendance_type_course">
                                Attendance by Course
                            </label>
                        </div>

                        <button type="submit" class="mt-3 btn btn-sm btn-outline-primary"><i class="bi bi-check2"></i> Save</button>
                    </form> --}}

                  </div>

                </section>

                <section>

                  <div class="p-3 border bg-gray-100 shadow rounded">

                    <h6>Create Class</h6>

                    {{-- <form action="{{route('school.class.create')}}" method="POST">
                        @csrf
                        <input type="hidden" name="session_id" value="{{$current_school_session_id}}">
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-sm" name="class_name" placeholder="Class name" aria-label="Class name" required>
                        </div>
                        <button class="btn btn-sm btn-outline-primary" type="submit"><i class="bi bi-check2"></i> Create</button>
                    </form> --}}

                  </div>

                </section>

                <section>

                  <div class="p-3 border bg-gray-100 shadow rounded h-full">

                  <h6>Create Section</h6>

                    {{-- <form action="{{route('school.section.create')}}" method="POST">
                        @csrf
                        <input type="hidden" name="session_id" value="{{$current_school_session_id}}">
                        <div class="mb-3">
                            <input class="form-control form-control-sm" name="section_name" type="text" placeholder="Section name" required>
                        </div>
                        <div class="mb-3">
                            <input class="form-control form-control-sm" name="room_no" type="text" placeholder="Room No." required>
                        </div>

                        <div>
                            <p>Assign section to class:</p>

                            <select class="form-select form-select-sm" aria-label=".form-select-sm" name="class_id" required>
                                @isset($school_classes)
                                    @foreach ($school_classes as $school_class)
                                    <option value="{{$school_class->id}}">{{$school_class->class_name}}</option>
                                    @endforeach
                                @endisset
                            </select>

                        </div>

                        <button type="submit" class="mt-3 btn btn-sm btn-outline-primary"><i class="bi bi-check2"></i> Save</button>

                    </form> --}}

                  </div>

                </section>

                <section>

                  <div class="p-3 border bg-gray-100 shadow rounded h-full">

                    <h6>Create Course</h6>

                    {{-- <form action="{{route('school.course.create')}}" method="POST">
                        @csrf
                        <input type="hidden" name="session_id" value="{{$current_school_session_id}}">

                        <div class="mb-1">
                            <input type="text" class="form-control form-control-sm" name="course_name" placeholder="Course name" aria-label="Course name" required>
                        </div>

                        <div class="mb-3">
                            <p class="mt-2">Course Type:<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                            <select class="form-select form-select-sm" name="course_type" aria-label=".form-select-sm" required>
                                <option value="Core">Core</option>
                                <option value="General">General</option>
                                <option value="Elective">Elective</option>
                                <option value="Optional">Optional</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <p>Assign to semester:<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm" name="semester_id" required>
                                @isset($semesters)
                                    @foreach ($semesters as $semester)
                                    <option value="{{$semester->id}}">{{$semester->semester_name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>

                        <div class="mb-3">
                            <p>Assign to class:<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm" name="class_id" required>
                                @isset($school_classes)
                                    @foreach ($school_classes as $school_class)
                                    <option value="{{$school_class->id}}">{{$school_class->class_name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>

                        <button class="btn btn-sm btn-outline-primary" type="submit"><i class="bi bi-check2"></i> Create</button>

                    </form> --}}

                  </div>

                </section>

                <section>

                  <div class="p-3 border bg-gray-100 shadow rounded h-full">

                    <h6>Assign Teacher</h6>

                    {{-- <form action="{{route('school.teacher.assign')}}" method="POST">
                        @csrf
                        <input type="hidden" name="session_id" value="{{$current_school_session_id}}">
                        <div class="mb-3">
                            <p class="mt-2">Select Teacher:<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm" name="teacher_id" required>
                                @isset($teachers)
                                    @foreach ($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{$teacher->first_name}} {{$teacher->last_name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="mb-3">
                            <p>Assign to semester:<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm" name="semester_id" required>
                                @isset($semesters)
                                    @foreach ($semesters as $semester)
                                    <option value="{{$semester->id}}">{{$semester->semester_name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div>
                            <p>Assign to class:<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                            <select onchange="getSectionsAndCourses(this);" class="form-select form-select-sm" aria-label=".form-select-sm" name="class_id" required>
                                @isset($school_classes)
                                    <option selected disabled>Please select a class</option>
                                    @foreach ($school_classes as $school_class)
                                    <option value="{{$school_class->id}}">{{$school_class->class_name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div>
                            <p class="mt-2">Assign to section:<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                            <select class="form-select form-select-sm" id="section-select" aria-label=".form-select-sm" name="section_id" required>
                            </select>
                        </div>
                        <div>
                            <p class="mt-2">Assign to course:<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                            <select class="form-select form-select-sm" id="course-select" aria-label=".form-select-sm" name="course_id" required>
                            </select>
                        </div>
                        <button type="submit" class="mt-3 btn btn-sm btn-outline-primary"><i class="bi bi-check2"></i> Save</button>
                    </form> --}}

                  </div>

                </section>

                <section>

                  <div class="p-3 border bg-gray-100 shadow rounded h-full">

                    <h6>Allow Final Marks Submission</h6>

                    {{-- <form action="{{route('school.final.marks.submission.status.update')}}" method="POST">
                        @csrf
                        <p class="text-danger">
                            <small><i class="bi bi-exclamation-diamond-fill me-2"></i> Usually teachers are allowed to submit final marks just before the end of a "Semester".</small>
                        </p>
                        <p class="text-primary">
                            <small><i class="bi bi-exclamation-diamond-fill me-2"></i> Disallow at the start of a "Semester".</small>
                        </p>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="marks_submission_status" id="marks_submission_status_check" {{($academic_setting->marks_submission_status == 'on')?'checked="checked"':null}}>
                            <label class="form-check-label" for="marks_submission_status_check">{{($academic_setting->marks_submission_status == 'on')?'Allowed':'Disallowed'}}</label>
                        </div>
                        <button type="submit" class="mt-3 btn btn-sm btn-outline-primary"><i class="bi bi-check2"></i> Save</button>
                    </form> --}}

                  </div>

                </section>

              @endif

            </article>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<script>

  /* function getSectionsAndCourses(obj) {

    var class_id = obj.options[obj.selectedIndex].value;

    {{-- var url = "{{ route('get.sections.courses.by.classId') }}?class_id=" + class_id --}}

    fetch(url)
      .then((resp) => resp.json())
      .then(function(data) {

        var sectionSelect = document.getElementById('section-select');

        sectionSelect.options.length = 0;

        data.sections.unshift({'id': 0,'section_name': 'Please select a section'})

        data.sections.forEach(function(section, key) {

          sectionSelect[key] = new Option(section.section_name, section.id);

        });

        var courseSelect = document.getElementById('course-select');

        courseSelect.options.length = 0;

        data.courses.unshift({'id': 0,'course_name': 'Please select a course'})

        data.courses.forEach(function(course, key) {

          courseSelect[key] = new Option(course.course_name, course.id);

        });
    })
    .catch(function(error) {

      console.log(error);

    });

  } */

</script>
