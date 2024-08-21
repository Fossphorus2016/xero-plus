<x-admin.layouts title="Payment Services">


    <div class="container">
        <div class="row card shadow p-5">
            <div class="col-md-12">
                <h3>Accept online payments and </h3>
                <h3>give customers more ways to pay</h3>
                <br>
                <p>Add a ‘pay now’ button to your online invoices and get paid up to twice as fast</p>

                <ul>
                    <li>Free to set up, no monthly subscription costs</li>
                    <li>Customers can pay invoices by card, direct debit and other online methods</li>
                    <li>Powered by secure and trusted payment service providers</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href="#payment_div" class="btn btn-info"> Start set up</a>
                </div>
            </div>
        </div>



        <div class="container my-5" id="payment_div">
            <div class="row">
                <div class="col-md-12 card p-5 border border-dark">
                    <div>
                        <h2>Available Payment Services</h2>
                        <h4>See all payment service options.</h4>
                    </div>

                    <div>
                        <button id="buttonAOther" class="btn btn-primary">Add Other</button>

                        <!-- Dropdown Menu -->
                        <div id="dropdownMenu" class="dropdown-menu">
                            <a class="dropdown-item" href="" data-bs-toggle="modal"
                                data-bs-target="#paypal_modal">
                                Paypal
                            </a>
                            <a class="dropdown-item" href="" data-bs-toggle="modal"
                                data-bs-target="#stripe_modal">
                                Stripe
                            </a>
                            <a class="dropdown-item" href="" data-bs-toggle="modal"
                                data-bs-target="#custom_url_modal">
                                Custom url
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- PayPal Modal -->
    <div class="modal fade" id="paypal_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add PayPal connection</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="paypal_form">
                        <div class="mb-3">
                            <label for="" class="form-label">Account Name</label>
                            <input type="email" class="form-control" id="paypal_account_name">
                            <label for="" id="error_paypal_account_name" class="text-danger fw-bold"
                                style="display: none">Name is required</label>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Account Email</label>
                            <input type="email" class="form-control" id="paypal_account_email">
                            <label for="invalid_email" id="invalid_paypal_account_email" class="text-danger fw-bold"
                                style="display: none;">Invalid
                                email</label>
                            <label for="" id="error_paypal_account_email" class="text-danger fw-bold "
                                style="display: none">
                                Email is required
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Payment account</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                id="paypal_payment_account">
                                <option value=""></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <label for="" id="error_paypal_payment_account" class="text-danger fw-bold"
                                style="display: none">Account is required</label>
                        </div>

                        <div class="form-check form-switch mb-5">
                            <input class="form-check-input" type="checkbox" role="switch" id="automate_paypal_fee">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Automate my fees.</label>
                        </div>

                        <div id="hidden_paypal_automate_div" style="display: none">
                            <div class="bm-5">

                                <p>When your customer pays an online invoice with PayPal, Xero will automatically create
                                    a
                                    spend money transaction for the fee PayPal charges.</p>
                                <a href="">Learn more</a>about PayPal fees and FAQs, or review the PayPal<a
                                    href="">Terms of Service.</a>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Fees account</label>
                                <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                    id="paypal_account_fee">
                                    <option value=""></option>
                                    <option value="0">310 - Cost of Goods Sold</option>
                                    <option value="1">400 - Advertising</option>
                                    <option value="2">404 - Bank Fees</option>
                                    <option value="3">408 - Cleaning</option>
                                    <option value="4">412 - Consulting & Accounting</option>
                                    <option value="5">416 - Depreciation</option>
                                    <option value="6">420 - Entertainment</option>
                                    <option value="7">425 - Freight & Courier</option>
                                    <option value="8">429 - General Expenses</option>
                                    <option value="9">433 - Insurance</option>
                                    <option value="10">437 - Interest Expense</option>
                                    <option value="11">441 - Legal expenses</option>
                                    <option value="12">445 - Light, Power, Heating</option>
                                    <option value="13">449 - Motor Vehicle Expenses</option>
                                    <option value="14">453 - Office Expenses</option>
                                    <option value="15">461 - Printing & Stationery</option>
                                    <option value="16">469 - Rent</option>
                                    <option value="17">473 - Repairs and Maintenance</option>
                                    <option value="18">477 - Wages and Salaries</option>
                                    <option value="19">478 - Superannuation</option>
                                    <option value="20">485 - Subscriptions</option>
                                    <option value="21">489 - Telephone & Internet</option>
                                    <option value="22">493 - Travel - National</option>
                                    <option value="23">494 - Travel - International</option>
                                    <option value="24">497 - Bank Revaluations</option>
                                    <option value="25">498 - Unrealised Currency Gains</option>
                                    <option value="26">499 - Realised Currency Gains</option>
                                    <option value="27">505 - Income Tax Expense</option>
                                </select>
                                <label for="" id="error_paypal_account_fee" class="text-danger fw-bold "
                                    style="display: none">
                                    required
                                </label>
                            </div>


                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="paypal_validate()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Stripe Modal -->
    <div class="modal fade" id="stripe_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Stripe connection</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="stripe_form">
                        <div class="mb-3">
                            <label for="" class="form-label">Account Name</label>
                            <input type="email" class="form-control" id="stripe_account_name">
                            <p class="text-muted">How you’ll identify it from other online payment services you have
                                connected.</p>
                            <label for="" id="error_stripe_account_name" class="text-danger fw-bold"
                                style="display: none">Name is required</label>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Payment account</label>
                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
                                id="stripe_payment_account">
                                <option value=""></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <p class="text-muted">Where the money will be deposited.</p>
                            <label for="" id="error_stripe_account_name" class="text-danger fw-bold"
                                style="display: none">Account is required</label>


                        </div>
                        <div class="form-check form-switch mb-5">
                            <input class="form-check-input" type="checkbox" role="switch" id="automate_stripe_fee">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Automate my fees.</label>
                        </div>
                        <div class="form-check form-switch mb-5">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="processing_stripe_fee">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Charge my customers a card
                                processing fee.</label>
                        </div>

                        <div id="hidden_stripe_automate_div" style="display: none">

                            <div class="mb-3">
                                <label for="" class="form-label">Fees account</label>
                                <select class="form-select" data-control="select2"
                                    data-placeholder="Select an option">
                                    <option value=""></option>
                                    <option value="0">310 - Cost of Goods Sold</option>
                                    <option value="1">400 - Advertising</option>
                                    <option value="2">404 - Bank Fees</option>
                                    <option value="3">408 - Cleaning</option>
                                    <option value="4">412 - Consulting & Accounting</option>
                                    <option value="5">416 - Depreciation</option>
                                    <option value="6">420 - Entertainment</option>
                                    <option value="7">425 - Freight & Courier</option>
                                    <option value="8">429 - General Expenses</option>
                                    <option value="9">433 - Insurance</option>
                                    <option value="10">437 - Interest Expense</option>
                                    <option value="11">441 - Legal expenses</option>
                                    <option value="12">445 - Light, Power, Heating</option>
                                    <option value="13">449 - Motor Vehicle Expenses</option>
                                    <option value="14">453 - Office Expenses</option>
                                    <option value="15">461 - Printing & Stationery</option>
                                    <option value="16">469 - Rent</option>
                                    <option value="17">473 - Repairs and Maintenance</option>
                                    <option value="18">477 - Wages and Salaries</option>
                                    <option value="19">478 - Superannuation</option>
                                    <option value="20">485 - Subscriptions</option>
                                    <option value="21">489 - Telephone & Internet</option>
                                    <option value="22">493 - Travel - National</option>
                                    <option value="23">494 - Travel - International</option>
                                    <option value="24">497 - Bank Revaluations</option>
                                    <option value="25">498 - Unrealised Currency Gains</option>
                                    <option value="26">499 - Realised Currency Gains</option>
                                    <option value="27">505 - Income Tax Expense</option>
                                </select>
                                <p class="text-muted">Where the Stripe fees will go.</p>
                            </div>


                        </div>

                        <div id="hidden_stripe_processing_div" style="display: none">
                            <div class="mb-3">

                                <p>Xero allows you to set a surcharge rate that will take a percent of the invoice total
                                    and pass on a processing fee to your customer.</p>
                                <a href="">Learn more about processing fee</a>
                            </div>
                            <div class="mb-3">
                                <p> <strong>Note:</strong> In some jurisdictions it is prohibited to charge processing
                                    fees to your
                                    customers. It is your responsibility to comply with applicable laws concerning
                                    surcharging.</p>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-4">
                                    <label for="" class="form-label">Processing fee</label>
                                    <input type="text" class="form-control" id="stripe_process_fee"
                                        placeholder="0">
                                </div>
                                <div class="col-md-4">

                                    <input type="text" class="form-control" placeholder="% of total invoice"
                                        disabled style="margin-top: 26px;">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Reimbursement Account</label>
                                <select class="form-select" data-control="select2"
                                    data-placeholder="Select an option" id="stripe_reimburse_account">
                                    <option value=""></option>
                                    <option value="200">200 - Sales</option>
                                    <option value="260">260 - Other Revenue</option>
                                    <option value="270">270 - Interest Income</option>
                                </select>
                                <p class="text-muted">Where the surcharge reimbursements should go.</p>
                            </div>


                        </div>

                        <div>
                            <div class="mb-2">
                                <p>Credit card logos to appear on your invoice</p>
                            </div>
                            <div class="mb-2">
                                <p class="text-muted">Logos limited by your merchant provider, but Visa Visa logo and
                                    Mastercard Mastercard logo are assumed</p>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 border border-dark p-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="american_express">
                                        <label class="form-check-label" for="american_express">
                                            American Express
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 border border-dark p-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="discover">
                                        <label class="form-check-label" for="discover">
                                            Discover
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 border border-dark p-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="jcb_bank">
                                        <label class="form-check-label" for="jcb_bank">
                                            JCB Bank
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 border border-dark p-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="diners_club">
                                        <label class="form-check-label" for="diners_club">
                                            Diners Club
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary">Connect to Stripe</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Payment URL Modal -->
    <div class="modal fade" id="custom_url_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add custom URL connection</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-5">
                        <p>A custom URL is designed for payment services that Xero does not officially integrate with.
                        </p>
                    </div>

                    <form action="" id="custom_form">
                        <div class="mb-3">
                            <label for="" class="form-label">Account Name</label>
                            <input type="email" class="form-control" id="custom_account_name">
                            <label for="" id="error_custom_account_name" class="text-danger fw-bold"
                                style="display: none">Name is required</label>
                            <span class="text-muted">How you’ll identify it from other online payment services you have
                                connected.</span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Your custom URL</label>
                            <input type="email" class="form-control" id="custom_url">
                            <label for="" id="error_custom_url" class="text-danger fw-bold"
                                style="display: none">Url is required</label>
                            <span class="text-muted">Contact your payment service provider for the required URL.</span>

                            <a href="#" id="detail" onclick="toggleDetail(event)">Show detail</a>

                            <div id="detail_div" style=" display: none;">
                                These placeholders are:
                                [INVOICENUMBER], [CURRENCY], [AMOUNTDUE] & [SHORTCODE].
                                An example URL might look like:
                                https://www.paymentservice.com/?invoiceNo=[INVOICENUMBER]&currency=[CURRENCY]&amount=[AMOUNTDUE]&shortCode=[SHORTCODE]
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Pay now button text</label>
                                <input type="text" class="form-control" id="paynow" maxlength="30">
                                <label for="" id="error_paynow" class="text-danger fw-bold"
                                    style="display: none">Button text is required</label>
                                <span class="text-muted">Text to show on online invoice - 30 max characters.</span>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary" onclick="custom_validate()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleDetail(event) {
            event.preventDefault();

            var detailDiv = document.getElementById('detail_div');
            var detail = document.getElementById('detail');

            if (detailDiv.style.display === 'none') {
                detailDiv.style.display = 'block';
                detail.textContent = 'Hide detail';
            } else {
                detailDiv.style.display = 'none';
                detail.textContent = 'Show detail';
            }
        }
        document.getElementById('buttonAOther').addEventListener('click', function() {
            var dropdownMenu = document.getElementById('dropdownMenu');
            if (dropdownMenu.style.display === 'block') {
                dropdownMenu.style.display = 'none';
            } else {
                dropdownMenu.style.display = 'block';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('automate_paypal_fee');
            const hidden_paypal_automate_div = document.getElementById('hidden_paypal_automate_div');


            function update_hidden_paypal_automate_div() {
                if (checkbox.checked) {
                    hidden_paypal_automate_div.style.display = 'block';

                } else {
                    hidden_paypal_automate_div.style.display = 'none';

                }
            }


            update_hidden_paypal_automate_div();


            checkbox.addEventListener('change', update_hidden_paypal_automate_div);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('automate_stripe_fee');
            const hidden_stripe_automate_div = document.getElementById('hidden_stripe_automate_div');


            function update_hidden_stripe_automate_div() {
                if (checkbox.checked) {
                    hidden_stripe_automate_div.style.display = 'block';

                } else {
                    hidden_stripe_automate_div.style.display = 'none';

                }
            }


            update_hidden_stripe_automate_div();


            checkbox.addEventListener('change', update_hidden_stripe_automate_div);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('processing_stripe_fee');
            const hidden_stripe_processing_div = document.getElementById('hidden_stripe_processing_div');


            function update_hidden_stripe_processing_div() {
                if (checkbox.checked) {
                    hidden_stripe_processing_div.style.display = 'block';

                } else {
                    hidden_stripe_processing_div.style.display = 'none';

                }
            }


            update_hidden_stripe_processing_div();


            checkbox.addEventListener('change', update_hidden_stripe_processing_div);
        });



        function paypal_validate() {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var isAutomateChecked = $("#automate_paypal_fee").is(":checked");
            if ($("#paypal_account_name").val() == "") {
                $("#paypal_account_name").addClass("is-invalid");
                $("#error_paypal_account_name").show();
                return;
            } else {
                $("#paypal_account_name").removeClass("is-invalid");
                $("#error_paypal_account_name").hide();
            }
            var email = $("#paypal_account_email").val();
            if ($("#paypal_account_email").val() == "") {
                $("#paypal_account_email").addClass("is-invalid");
                $("#error_paypal_account_email").show();
                return;

            } else {
                $("#paypal_account_email").removeClass("is-invalid");
                $("#error_paypal_account_email").hide();
                $("#invalid_paypal_account_email").hide();
            }

            if (!emailRegex.test(email)) {
                $("#paypal_account_email").addClass("is-invalid");
                $("#invalid_paypal_account_email").show();
                return;
            } else {
                $("#paypal_account_email").removeClass("is-invalid");
                $("#error_paypal_account_email").hide();
                $("#invalid_paypal_account_email").hide();
            }
            if ($("#paypal_payment_account").val() == "") {
                $("#paypal_payment_account").addClass("is-invalid");
                $("#error_paypal_payment_account").show();
                return;
            } else {
                $("#paypal_payment_account").removeClass("is-invalid");
                $("#error_paypal_payment_account").hide();
            }

            if (isAutomateChecked) {
                var feesAccount = $("#paypal_account_fee").val();
                if (feesAccount == "") {
                    $("#paypal_account_fee").addClass("is-invalid");
                    $("#error_paypal_account_fee").show();
                    return;
                } else {
                    $("#paypal_account_fee").removeClass("is-invalid");
                    $("#error_paypal_account_fee").hide();
                }
            }

            $("#paypal_form").submit();
        }

        function custom_validate() {

            var hasErrors = false;


            if ($("#custom_account_name").val() === "") {
                $("#custom_account_name").addClass("is-invalid");
                $("#error_custom_account_name").text("This field cannot be empty.").show();
                hasErrors = true;
            } else {
                $("#custom_account_name").removeClass("is-invalid");
                $("#error_custom_account_name").hide();
            }


            if ($("#custom_url").val() === "") {
                $("#custom_url").addClass("is-invalid");
                $("#error_custom_url").text("This field cannot be empty.").show();
                hasErrors = true;
            } else {
                $("#custom_url").removeClass("is-invalid");
                $("#error_custom_url").hide();
            }

           var inputField = $("#paynow");
            var errorField = $("#error_paynow");
            var inputValue = inputField.val();

            if (inputValue === "") {
                inputField.addClass("is-invalid");
                errorField.text("This field cannot be empty.").show();
                hasErrors = true;
            } else if (inputValue.length > 30) {
                inputField.addClass("is-invalid");
                errorField.text("The input must be less than 30 characters.").show();
                hasErrors = true;
            } else {
                inputField.removeClass("is-invalid");
                errorField.hide();
            }


            if (!hasErrors) {
                $('#custom_form').submit();
            }
        }
    </script>

</x-admin.layouts>
