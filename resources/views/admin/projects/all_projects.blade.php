<x-admin.layouts title="All Projects">




    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Draft</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">In Progress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3">Closed</a>
                </li>
            </ul>



            <div class="ml-auto">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                    Timer <i class="fas fa-clock"></i>
                </button>

                <div class="btn-group">
                    <select class="form-select" aria-label="Default select example">
                        <option>Reports</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="btn-group">
                    <select class="form-select" aria-label="Default select example" id="project-select">
                        <option selected>New Project</option>
                        <option value="project1">Draft</option>
                        <option value="project2">In Progress</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <div class="d-flex">
                                    <input type="search" placeholder="search draft projects" style="width: 1011px;">

                                    <div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>All Projects (0)</option>
                                            <option value="1">All projects</option>
                                            <option value="2">Assigned to me</option>

                                        </select>
                                    </div>

                                    <div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Contact</option>
                                            <option value="1">Contact</option>
                                            <option value="2">Deadline</option>
                                            <option value="3">Project Name</option>
                                        </select>
                                    </div>
                                </div>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="text-center">
                                <p>No draft projects</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">

                                <div class="d-flex">
                                    <input type="search" placeholder="search in progress projects"
                                        style="width: 1011px;">

                                    <div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>All Projects (0)</option>
                                            <option value="1">All projects</option>
                                            <option value="2">Assigned to me</option>

                                        </select>
                                    </div>

                                    <div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Contact</option>
                                            <option value="1">Contact</option>
                                            <option value="2">Deadline</option>
                                            <option value="3">Project Name</option>
                                        </select>
                                    </div>
                                </div>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="text-center">
                                <p>No projects in progress</p>
                                <p> Create a new project from the New project button</p>
                                <p>Add tasks, enter time and keep track of your spending</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">


                                <div class="d-flex">
                                    <input type="search" placeholder="search closed projects" style="width: 1011px;">

                                    <div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>All Projects (0)</option>
                                            <option value="1">All projects</option>
                                            <option value="2">Assigned to me</option>

                                        </select>
                                    </div>

                                    <div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Contact</option>
                                            <option value="1">Contact</option>
                                            <option value="2">Deadline</option>
                                            <option value="3">Project Name</option>
                                        </select>
                                    </div>
                                </div>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="text-center">
                                <p>No closed projects</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>






    {{-- Timeer --}}
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Modal title</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    {{-- Draft --}}
    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">New draft project</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form action="" id="draft_form">
                        @csrf
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="draft_contact">
                            <label for="" id="error_draft_contact" class="text-danger fw-bold"
                                style="display: none">Contact is
                                required</label>
                        </div>
                        <div class="mb-3">
                            <label for="project" class="form-label">Project name</label>
                            <input type="text" class="form-control" id="draft_project">
                            <label for="" id="error_draft_project" class="text-danger fw-bold"
                                style="display: none">Project is
                                required</label>

                        </div>
                        <div class="mb-3">
                            <label for="project" class="form-label">Deadline</label>
                            <input type="date" class="form-control" id="draft_deadline">
                            <label for="" id="error_draft_deadline" class="text-danger fw-bold"
                                style="display: none">Deadline is
                                required</label>

                        </div>
                        <div class="mb-3">
                            <label for="project" class="form-label">Estimate</label>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="draft_estimate">
                                <label for="" id="error_draft_estimate" class="text-danger fw-bold"
                                    style="display: none">Estimate is
                                    required</label>
                                <label class="form-check-label" for="exampleCheck1">Calculate form tasks & estimate
                                    expenses</label>
                                <input type="text" class="form-control my-2" name="" id="draft_money">
                                <label for="" id="error_draft_money" class="text-danger fw-bold"
                                    style="display: none">Money is
                                    required</label>
                                <span>excl.tax</span>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="project" class="form-label">Who can view this project</label>
                            <div class="mb-3 form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="draft_public">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Public: Anyone with access to Projects
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="draft_private">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Private: Admin, standard, or assigned users
                                    </label>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="draft_Validate()">create</button>
                </div>
            </div>
        </div>
    </div>


    {{-- In progress --}}
    <div class="modal fade" tabindex="-1" id="kt_modal_3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">New in progress project</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form action="" id="inprogress_form">
                        @csrf
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="inprogress_contact">

                        </div>
                        <div class="mb-3">
                            <label for="project" class="form-label">Project name</label>
                            <input type="text" class="form-control" id="inprogress_project">

                        </div>
                        <div class="mb-3">
                            <label for="project" class="form-label">Deadline</label>
                            <input type="date" class="form-control" id="inprogress_deadline">

                        </div>
                        <div class="mb-3">
                            <label for="project" class="form-label">Estimate</label>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="inprogress_estimate">
                                <label class="form-check-label" for="exampleCheck1">Calculate form tasks & estimate
                                    expenses</label>
                                <input type="text" class="form-control my-2" name=""
                                    id="inprogress_money">
                                <span>excl.tax</span>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="project" class="form-label">Who can view this project</label>
                            <div class="mb-3 form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="inprogress_public">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Public: Anyone with access to Projects
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="inprogress_private">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Private: Admin, standard, or assigned users
                                    </label>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="inprogress_Validate()">create</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        $('#project-select').on('change', function() {
            var selectedValue = $(this).val();

            if (selectedValue === 'project1') {
                $('#kt_modal_2').modal('show');
            } else if (selectedValue === 'project2') {
                $('#kt_modal_3').modal('show');
            }
        });



        function draft_Validate() {
            if ($("#draft_contact").val() == "") {
                $("#draft_contact").addClass("is-invalid");
                $("#error_draft_contact").show();
                return false;
            } else {
                $("#draft_contact").removeClass("is-invalid");
                $("#error_draft_contact").hide();
            }
            if ($("#draft_project").val() == "") {
                $("#draft_project").addClass("is-invalid");
                $("#error_draft_project").show();
                return false;
            } else {
                $("#draft_project").removeClass("is-invalid");
                $("#error_draft_project").hide();
            }
            if ($("#draft_deadline").val() == "") {
                $("#draft_deadline").addClass("is-invalid");
                $("#error_draft_deadline").show();
                return false;
            } else {
                $("#draft_deadline").removeClass("is-invalid");
                $("#error_draft_deadline").hide();
            }
            if (!$("#draft_estimate").is(":checked")) {
                $("#draft_estimate").addClass("is-invalid");
                $("#error_draft_estimate").show();
                isValid = false;
            } else {
                $("#draft_estimate").removeClass("is-invalid");
                $("#error_draft_estimate").hide();
            }


            if ($("#draft_estimate").is(":checked") && $("#draft_money").val() == "") {
                $("#draft_money").addClass("is-invalid");
                $("#error_draft_money").show();
                isValid = false;
            } else {
                $("#draft_money").removeClass("is-invalid");
                $("#error_draft_money").hide();
            }
            if ($("#draft_money").val() == "") {
                $("#draft_money").addClass("is-invalid");
                $("#error_draft_money").show();
                return false;
            } else {
                $("#draft_money").removeClass("is-invalid");
                $("#error_draft_money").hide();
            }



            $("#draft_form").submit();
        }

        function inprogress_Validate() {
            if ($("#inprogress_contact").val() == "") {
                $("#inprogress_contact").addClass("is-invalid");
                $("#error_inprogress_contact").show();
                return false;
            } else {
                $("#inprogress_contact").removeClass("is-invalid");
                $("#error_inprogress_contact").hide();
            }
            if ($("#inprogress_project").val() == "") {
                $("#inprogress_project").addClass("is-invalid");
                $("#error_inprogress_project").show();
                return false;
            } else {
                $("#inprogress_project").removeClass("is-invalid");
                $("#error_inprogress_project").hide();
            }
            if ($("#inprogress_deadline").val() == "") {
                $("#inprogress_deadline").addClass("is-invalid");
                $("#error_inprogress_deadline").show();
                return false;
            } else {
                $("#inprogress_deadline").removeClass("is-invalid");
                $("#error_inprogress_deadline").hide();
            }
            if ($("#inprogress_estimate").is(":checked") && $("#inprogress_money").val() == "") {
                $("#inprogress_money").addClass("is-invalid");
                $("#error_inprogress_money").show();
                isValid = false;
            } else {
                $("#inprogress_money").removeClass("is-invalid");
                $("#error_inprogress_money").hide();
            }
            if ($("#inprogress_money").val() == "") {
                $("#inprogress_money").addClass("is-invalid");
                $("#error_inprogress_money").show();
                return false;
            } else {
                $("#inprogress_money").removeClass("is-invalid");
                $("#error_inprogress_money").hide();
            }



            $("#inprogress_form").submit();
        }
    </script>
</x-admin.layouts>
