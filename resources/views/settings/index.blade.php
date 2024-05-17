<x-app-layout>

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
                            placeholder="Enter an academic year e.g. 2021 - 2022"
                            aria-label="Current academic year"
                            name="school_year_name" />

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

                    <h6 class="mb-4 border-b pb-2">Browse by school year</h6>

                    {{-- action="{{route('school.session.browse')}}" method="POST" --}}
                    <x-splade-form>

                      <div class="mb-3">

                        <x-splade-select
                          placeholder="Pick an academic year"
                          name="school_year_id"
                          choices>

                          @isset($school_years)

                            @foreach ($school_years as $school_year)

                              <option value="{{ $school_year->id }}">

                                {{ $school_year->school_year_name }}

                              </option>

                            @endforeach

                          @endisset

                        </x-splade-select>

                      </div>

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

                        <input type="hidden" name="school_year_id" value="{{ $current_school_year_id }}">

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
                            label="Semester start date"
                            placeholder="Start date"
                            name="start_date"
                            required
                            date/>

                        </div>

                        <div>

                          <x-splade-input
                            type="date"
                            class="w-full"
                            label="Semester end date"
                            placeholder="End date"
                            name="end_date"
                            required
                            date />

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

                    <div class="p-3 border bg-gray-100 shadow rounded flex flex-col h-full">

                      <h6 class="mb-4 border-b pb-2">
                      Attendance Type
                      </h6>

                      {{-- action="{{route('school.attendance.type.update')}}" method="POST" --}}
                      <x-splade-form>

                        <x-splade-group
                          name="attendance_type"
                          label="Preferred attendance type">

                          {{-- {{ ($academic_setting?->attendance_type == 'section') ? 'checked="checked"' : null }} --}}

                          <x-splade-radio
                            name="attendance_type"
                            :show-errors="false"
                            value="section"
                            label="Section" />

                          <x-splade-radio
                            name="attendance_type"
                            :show-errors="false"
                            value="course"
                            label="Course" />

                        </x-splade-group>

                      </x-splade-form>

                      <div class="flex-1"></div>

                      <div class="text-gray-500 flex items-center gap-2 mt-4 text-xs border-t pt-2">

                        <x-tabler-info-square class="w-5 h-5 shrink-0" />

                        <span>
                          Do not change the type in the middle of a Semester.
                        </span>

                      </div>

                    </div>

                  </section>

                  <section>

                    <div class="p-3 border bg-gray-100 shadow rounded h-full">

                      <h6 class="mb-4 border-b pb-2">
                      Add class
                      </h6>

                      {{-- action="{{route('school.class.create')}}" method="POST" --}}
                      <x-splade-form>

                        <input type="hidden" name="school_year_id" value="{{ $current_school_year_id }}">

                        <div class="mb-3">

                          <x-splade-input
                            type="text"
                            class="w-full"
                            name="class_name"
                            placeholder="Class name"
                            required />

                        </div>

                        <x-splade-submit
                          class="flex items-center gap-2">

                          <x-tabler-device-floppy class="w-5 h-5" />

                          <span>Add</span>

                        </x-splade-submit>

                      </x-splade-form>

                    </div>

                  </section>

                  <section>

                    <div class="p-3 border bg-gray-100 shadow rounded h-full">

                      <h6 class="mb-4 border-b pb-2">
                      Add class subdivision / section
                      </h6>

                      {{-- action="{{route('school.section.create')}}" method="POST" --}}
                      <x-splade-form class="flex flex-col gap-6">

                        <input type="hidden" name="school_year_id" value="{{ $current_school_year_id }}">

                        <div class="mb-3">

                          <x-splade-input
                            class="w-full"
                            placeholder="Section name"
                            name="section_name"
                            type="text"
                            required />

                        </div>

                        <div class="mb-3">

                          <x-splade-input
                            class="w-full"
                            name="room_no"
                            type="text"
                            placeholder="Room No." />

                        </div>

                        <div>

                          <x-splade-select
                            name="class_id"
                            label="Assign section to class"
                            choices required>

                            <option value="">

                              Pick a class

                            </option>

                            @isset($school_classes)

                              @foreach ($school_classes as $school_class)

                                <option value="{{ $school_class->id }}">

                                  {{ $school_class->class_name }}

                                </option>

                              @endforeach

                            @endisset

                          </x-splade-select>

                        </div>

                        <x-splade-submit
                          class="mt-3 flex items-center gap-2">

                          <x-tabler-device-floppy class="w-5 h-5" />

                          <span>Save</span>

                        </x-splade-submit>

                      </x-splade-form>

                    </div>

                  </section>

                  <section>

                    <div class="p-3 border bg-gray-100 shadow rounded h-full">

                      <h6 class="mb-4 border-b pb-2">
                        Add course/subject
                      </h6>

                      {{-- action="{{route('school.course.create')}}" method="POST" --}}
                      <x-splade-form class="flex flex-col gap-6">
                          <input type="hidden" name="school_year_id" value="{{$current_school_year_id}}">

                          <div>
                            <x-splade-input
                              type="text"
                              class="w-full"
                              name="course_name"
                              placeholder="Course/subject name"
                              aria-label="Course name"
                              required />
                          </div>

                          <div>

                            <x-splade-select
                              name="course_type"
                              label="Course type"
                              choices="{ searchEnabled: false }" required>

                              <option value="">Pick a type for the course</option>

                              <option value="Core">Core</option>

                              <option value="General">General</option>

                              <option value="Elective">Elective</option>

                              <option value="Optional">Optional</option>

                            </x-splade-select>

                          </div>

                          <div>

                            <x-splade-select
                              label="Assign course to a semester/term"
                              name="semester_id"
                              choices required>

                              <option value="">

                                Pick a semester

                              </option>

                              @isset($semesters)

                                @foreach ($semesters as $semester)

                                  <option value="{{ $semester->id }}">

                                    {{ $semester->semester_name }}

                                  </option>

                                @endforeach

                              @endisset

                            </x-splade-select>

                          </div>

                          <div>

                            <x-splade-select
                              label="Assign course to a class"
                              name="class_id"
                              choices required>

                              <option value="">

                                Pick a class

                              </option>

                              @isset($school_classes)

                                @foreach ($school_classes as $school_class)

                                  <option value="{{ $school_class->id }}">

                                    {{ $school_class->class_name }}

                                  </option>

                                @endforeach

                              @endisset

                            </x-splade-select>

                          </div>

                          <x-splade-submit
                            class="flex items-center gap-2" >
                            <x-tabler-check class="w-5 h-5" />
                            <span>Add</span>
                          </x-splade-submit>

                      </x-splade-form>

                    </div>

                  </section>

                  <section>

                    <div class="p-3 border bg-gray-100 shadow rounded h-full">

                      <h6 class="mb-4 border-b pb-2">
                        Teacher allocations
                      </h6>

                      {{-- action="{{ route('school.teacher.assign') }}" method="POST" --}}
                      <x-splade-form class="flex flex-col gap-6">

                        <input type="hidden" name="school_year_id" value="{{ $current_school_year_id }}">

                        <div>

                          <x-splade-select
                            name="teacher_id"
                            choices required>

                            <option value="">

                              Pick a teacher

                            </option>

                            @isset($teachers)

                              @foreach ($teachers as $teacher)

                                <option value="{{ $teacher->id }}">

                                  {{ $teacher->first_name }} {{ $teacher->last_name }}

                                </option>

                              @endforeach

                            @endisset

                          </x-splade-select>

                        </div>

                        <div>

                          <x-splade-select
                            name="semester_id"
                            label="Assign teacher to semester"
                            choices="{ searchEnabled: false }"
                            required>

                            <option value="">

                              Pick a semester

                            </option>

                            @isset($semesters)

                              @foreach ($semesters as $semester)

                                <option value="{{ $semester->id }}">

                                  {{ $semester->semester_name }}

                                </option>

                              @endforeach

                            @endisset

                          </x-splade-select>

                        </div>

                        <div>

                          <x-splade-select
                            onchange="getSectionsAndCourses(this);"
                            label="Assign teacher to class"
                            name="class_id"
                            choices required>

                            <option value="">Pick a class</option>

                            @isset($school_classes)

                              @foreach ($school_classes as $school_class)

                                <option value="{{$school_class->id}}">

                                  {{ $school_class->class_name }}

                                </option>

                              @endforeach

                            @endisset
                          </x-splade-select>
                        </div>

                        <div>

                          <x-splade-select
                            label="Assign teacher to class section"
                            name="section_id"
                            choices="{ searchEnabled: false }" required>

                            <option value="">Pick a subdivision</option>

                          </x-splade-select>

                        </div>

                        <div>

                          <x-splade-select
                            label="Assign teacher to courses"
                            name="course_id"
                            choices required>

                            <option value="">Pick a subject</option>

                          </x-splade-select>

                        </div>

                        <x-splade-submit
                          class="flex items-center gap-2">

                          <x-tabler-check class="w-5 h-5" />
                          <span>Save</span>

                        </x-splade-submit>

                      </x-splade-form>

                    </div>

                  </section>

                  <section>

                    <div class="p-3 border bg-gray-100 shadow rounded flex flex-col h-full">

                      <h6 class="mb-4 border-b pb-2">

                        Allow final marks submission

                      </h6>

                      {{-- action="{{route('school.final.marks.submission.status.update')}}" method="POST" --}}
                      <x-splade-form class="flex flex-col gap-6">

                        <div class="form-check form-switch">

                          <x-splade-checkbox
                            name="marks_submission_status"
                            label="Disallow at the start of a 'Semester'">
                            {{ ($academic_setting?->marks_submission_status == 'on') ? 'Allowed' : 'Disallowed' }}
                          </x-splade-checkbox>

                        </div>

                      </x-splade-form>

                      <div class="flex-1"></div>

                      <div class="text-gray-500 flex items-start gap-2 mt-4 text-xs border-t pt-2">

                        <x-tabler-info-square class="w-5 h-5 shrink-0" />

                        <span>
                          Usually teachers are allowed to submit final marks just before the end of a semester/term.
                        </span>

                      </div>

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

{{-- var url = "{{ route('get.sections.courses.by.classId') }}?class_id=" + class_id --}}

<script>

  function getSectionsAndCourses(obj) {

    const class_id = obj.options[obj.selectedIndex].value;

    const url = '/sections/' + class_id

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

  }

</script>

</x-app-layout>
