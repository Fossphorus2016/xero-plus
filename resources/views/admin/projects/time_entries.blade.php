<x-admin.layouts title="Time Entries">


    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-0">Time entries</h1>

            <div class="ml-auto d-flex">
                <button type="button" class="btn  me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                    Timer <i class="fas fa-clock"></i>
                </button>

                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#kt_modal_2">
                    New Time Entry
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control">
                        <option value="19-25 Aug">19 - 25 Aug</option>
                    </select>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Mon 19 <span class="float-right">0:00</span></li>
                    <li class="list-group-item">Tue 20 <span class="float-right">0:00</span></li>
                    <li class="list-group-item">Wed 21 <span class="float-right">0:00</span></li>
                    <li class="list-group-item">Thu 22 <span class="float-right">0:00</span></li>
                    <li class="list-group-item">Fri 23 <span class="float-right">0:00</span></li>
                    <li class="list-group-item">Sat 24 <span class="float-right">0:00</span></li>
                    <li class="list-group-item">Sun 25 <span class="float-right">0:00</span></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Monday, 19 August 2024 0:00
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fas fa-clock"></i>
                        </div>
                        <p class="text-center">You have no time entries</p>
                        <p class="text-center">Add a time entry from the New time entry button</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"></h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form action="" id="time_form">
                        @csrf
                        <div class="mb-3">
                            <label for="project" class="form-label">Project</label>
                            <input type="text" class="form-control" id="project">
                            <label for="" id="error_project" class="text-danger fw-bold"
                                style="display: none">Project is
                                required</label>
                        </div>

                        <div class="mb-3">
                            <label for="task" class="form-label">Task</label>
                            <input type="text" class="form-control" id="task">
                            <label for="" id="error_task" class="text-danger fw-bold" style="display: none">Task
                                is
                                required</label>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description(optional)</label>
                            <input type="text" class="form-control" id="description">
                            <label for="" id="error_description" class="text-danger fw-bold"
                                style="display: none">Description is
                                required</label>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="validate_Time()">Save </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">New time entry</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form action="" id="time_form">
                        @csrf
                        <div class="mb-3">
                            <label for="project" class="form-label">Project</label>
                            <input type="text" class="form-control" id="new_project">
                            <label for="" id="error_new_project" class="text-danger fw-bold"
                                style="display: none">Project is
                                required</label>
                        </div>

                        <div class="mb-3">
                            <label for="task" class="form-label">Task</label>
                            <input type="text" class="form-control" id="new_task">
                            <label for="" id="error_new_task" class="text-danger fw-bold"
                                style="display: none">Task
                                is
                                required</label>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description(optional)</label>
                            <input type="text" class="form-control" id="new_description">
                            <label for="" id="error_new_description" class="text-danger fw-bold"
                                style="display: none">Description is
                                required</label>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Enter time as</label>
                            <div>
                                <input type="radio" class="form-check-input" id="duration" name="time"
                                    value="duration">
                                <label for="duration">Duration</label>
                                <input type="radio" class="form-check-input" id="start_end" name="time"
                                    value="start_end">
                                <label for="start_end">Start & end</label>
                            </div>
                        </div>

                        <div id="duration_fields" style="display:none;">
                            <label for="duration-time">Duration</label>
                            <input type="text" id="duration-time" class="form-control" readonly value="0:00">
                            <div>
                                <button type="button" onclick="addTime(10)">+ 0:10</button>
                                <button type="button" onclick="addTime(15)">+ 0:15</button>
                                <button type="button" onclick="addTime(30)">+ 0:30</button>
                                <button type="button" onclick="addTime(60)">+ 1:00</button>
                            </div>
                        </div>

                        <div id="start_end_fields" style="display:none;">
                            <label for="start_time">Start Time</label>
                            <input type="time" class="form-control" id="start_time">
                            <label for="end_time">End Time</label>
                            <input type="time" class="form-control" id="end_time">
                            <label for="end_time">Duration</label>
                            <input type="time" class="form-control" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="text" class="form-control" id="new_date">
                            <label for="" id="error_new_date" class="text-danger fw-bold"
                                style="display: none">Date is
                                required</label>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>







    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const durationRadio = document.getElementById('duration');
            const startEndRadio = document.getElementById('start_end');
            const durationFields = document.getElementById('duration_fields');
            const startEndFields = document.getElementById('start_end_fields');

            durationRadio.addEventListener('change', function() {
                if (this.checked) {
                    durationFields.style.display = 'block';
                    startEndFields.style.display = 'none';
                }
            });

            startEndRadio.addEventListener('change', function() {
                if (this.checked) {
                    startEndFields.style.display = 'block';
                    durationFields.style.display = 'none';
                }
            });
        });

        function addTime(minutes) {
            let timeInput = document.getElementById('duration_time');
            let currentTime = timeInput.value.split(':');
            let minutesAdded = parseInt(currentTime[0]) * 60 + parseInt(currentTime[1]) + minutes;

            let hours = Math.floor(minutesAdded / 60);
            let mins = minutesAdded % 60;

            timeInput.value = `${hours}:${mins < 10 ? '0' + mins : mins}`;
        }


        function validate_Time() {
            let isValid = true;

            if ($("#new_project").val() == "") {
                $("#new_project").addClass("is-invalid");
                $("#error_new_project").show();
                isValid = false;
            } else {
                $("#new_project").removeClass("is-invalid");
                $("#error_new_project").hide();
            }

            if ($("#new_task").val() == "") {
                $("#new_task").addClass("is-invalid");
                $("#error_new_task").show();
                isValid = false;
            } else {
                $("#new_task").removeClass("is-invalid");
                $("#error_new_task").hide();
            }

            // Validate description only if not empty (optional)
            if ($("#new_description").val() == "") {
                $("#new_description").addClass("is-invalid");
                $("#error_new_description").show();
                isValid = false;
            } else {
                $("#new_description").removeClass("is-invalid");
                $("#error_new_description").hide();
            }

            if ($("#new_date").val() == "") {
                $("#new_date").addClass("is-invalid");
                $("#error_new_date").show();
                isValid = false;
            } else {
                $("#new_date").removeClass("is-invalid");
                $("#error_new_date").hide();
            }

            // Validate fields based on selected radio button
            if ($("#duration").is(":checked")) {
                if ($("#duration-time").val() == "0:00") {
                    alert("Please add a valid duration.");
                    isValid = false;
                }
            } else if ($("#start_end").is(":checked")) {
                if ($("#start_time").val() == "") {
                    $("#start_time").addClass("is-invalid");
                    alert("Start time is required.");
                    isValid = false;
                } else {
                    $("#start_time").removeClass("is-invalid");
                }

                if ($("#end_time").val() == "") {
                    $("#end_time").addClass("is-invalid");
                    alert("End time is required.");
                    isValid = false;
                } else {
                    $("#end_time").removeClass("is-invalid");
                }
            } else {
                alert("Please select either Duration or Start & End.");
                isValid = false;
            }

            if (isValid) {
                $("#time_form").submit();
            }
        }
    </script>

</x-admin.layouts>
