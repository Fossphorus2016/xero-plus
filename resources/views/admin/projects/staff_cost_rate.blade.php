<x-admin.layouts title="Staff Rate">




    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="h6 mb-0">Current</span>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_modal">
                    Edit
                </button>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar bg-warning text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 40px; height: 40px;">
                        <span class="font-weight-bold">FA</span>
                    </div>
                    <div class="ml-3">
                        <strong>Faraz Ahmed</strong><br>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="edit_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cost rate for</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="edit_form">
                        <div class="mb-3">
                            <label for="" class="form-label">Cost rate / hr</label>
                            <input type="text" class="form-control" id="cost_rate" placeholder="0.00">
                            <label for="" id="error_cost_rate" class="text-danger fw-bold"
                                style="display: none">Cost rate/hr is
                                required</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="edit_validate()">Save</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        function edit_validate() {
    var isValid = true;

    // Validate cost rate
    if ($("#cost_rate").val() == "") {
        $("#cost_rate").addClass("is-invalid");
        $("#error_cost_rate").show();
        isValid = false;
    } else {
        $("#cost_rate").removeClass("is-invalid");
        $("#error_cost_rate").hide();
    }

    // If the form is valid, submit it; otherwise, prevent submission
    if (isValid) {
        $("#edit_form").submit();
    } else {
        return false;
    }
}

    </script>
</x-admin.layouts>
