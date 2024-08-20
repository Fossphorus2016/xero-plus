<x-admin.layouts title="Add bank accounts">

    <nav class="bg-white p-5">
        <h1>Add account</h1>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="alert alert-white alert-dismissible fade show my-5 " role="alert">
                    You are adding an account without a connected bank feed. Transactions can only be added to this
                    account by manually importing bank statements into Xero.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>



            </div>

            <div class="col-md-8 my-5">
                <div class="card shadow p-5">
                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="card-header px-0 align-content-center">
                                <h1>
                                    Account details
                                </h1>
                            </div>

                            <div>
                                <form action="" id="add_form">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Bank name</label>
                                        <input type="text" class="form-control" id="bank_name">
                                        <label for="" id="error_bank_name" class="text-danger fw-bold"
                                            style="display: none">Bank name required</label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Account name</label>
                                        <input type="text" class="form-control" id="account_name"
                                            placeholder="e.g. Business Account">
                                        <label for="" id="error_account_name" class="text-danger fw-bold"
                                            style="display: none">Account name required</label>

                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Account type</label>
                                        <select class="form-select" id="account_type"
                                            aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="Credit card">Credit card</option>
                                            <option value="Other">Other</option>
                                        </select>

                                    </div>

                                    <div id="card_number" style="display: none;">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Credit card number</label>
                                            <input type="text" class="form-control" id="credit_card_number"
                                                placeholder="Last 4 digits: e.g. 1234">
                                            <label for="" id="error_credit_card_number"
                                                class="text-danger fw-bold" style="display: none">Card number
                                                required</label>
                                        </div>
                                    </div>

                                    <div id="others" style="display: none;">
                                        <p>Bank feeds are not available for Other account types</p>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Account number</label>
                                            <input type="text" class="form-control" id="account_number"
                                                placeholder="e.g. 12-1234-12345-01">
                                            <label for="" id="error_account_number" class="text-danger fw-bold"
                                                style="display: none">Account number required</label>
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label for="" class="form-label">Currency</label>
                                        <select class="form-select" id="currency">
                                            <option value=""></option>
                                            <option value="AFN Afghan Afghani">AFN Afghan Afghani</option>
                                            <option value="ALL Albanian Lek">ALL Albanian Lek</option>
                                            <option value="VES Venezuelan Bolívar">VES Venezuelan Bolívar</option>
                                        </select>
                                        <label for="" id="error_currency" class="text-danger fw-bold"
                                            style="display: none">Currency required</label>

                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('bank.search') }}" class="btn btn-primary">Back</a>
                                        <button type="button" onclick="validate()"
                                            class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            
            $('#account_type').change(function() {
                var accountType = $(this).val();

                if (accountType === 'Credit card') {
                    $('#card_number').show();
                    $('#others').hide();
                } else if (accountType === 'Other') {
                    $('#others').show();
                    $('#card_number').hide();
                } else {
                    $('#card_number').hide();
                    $('#others').hide();
                }
            });


            function validate() {
                var isValid = true;

                if ($("#bank_name").val() == "") {
                    $("#bank_name").addClass("is-invalid");
                    $("#error_bank_name").show();
                    isValid = false;
                } else {
                    $("#bank_name").removeClass("is-invalid");
                    $("#error_bank_name").hide();
                }

                if ($("#account_name").val() == "") {
                    $("#account_name").addClass("is-invalid");
                    $("#error_account_name").show();
                    isValid = false;
                } else {
                    $("#account_name").removeClass("is-invalid");
                    $("#error_account_name").hide();
                }

                var accountType = $('#account_type').val();

                if (accountType === 'Credit card') {
                    if ($("#credit_card_number").val() == "") {
                        $("#credit_card_number").addClass("is-invalid");
                        $("#error_credit_card_number").show();
                        isValid = false;
                    } else {
                        $("#credit_card_number").removeClass("is-invalid");
                        $("#error_credit_card_number").hide();
                    }
                } else if (accountType === 'Other') {
                    if ($("#account_number").val() == "") {
                        $("#account_number").addClass("is-invalid");
                        $("#error_account_number").show();
                        isValid = false;
                    } else {
                        $("#account_number").removeClass("is-invalid");
                        $("#error_account_number").hide();
                    }
                }

                if ($("#currency").val() == "") {
                    $("#currency").addClass("is-invalid");
                    $("#error_currency").show();
                    isValid = false;
                } else {
                    $("#currency").removeClass("is-invalid");
                    $("#error_currency").hide();
                }

                if (isValid) {
                    $("#add_form").submit();
                }
            }


            $("button[onclick='validate()']").click(validate);
        });
    </script>

</x-admin.layouts>
