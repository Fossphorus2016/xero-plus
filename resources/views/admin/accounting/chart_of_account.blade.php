<x-admin.layouts title="Invite a user">


    <div class="container">
        <div class="card p-5 shadow">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="me-3">
                        <a href="{{ route('bank.search') }}" target="_blank">Add account</a>
                    </div>

                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#add_account_modal">
                            Add Account
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="add_account_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="add_account_form">
                        <div class="mb-3">
                            <label for="" class="form-label">Account Type</label>
                            <select class="form-select" id="account_type">

                                <option value="" disabled>Assets</option>
                                <option value="current_asset">Current Asset</option>
                                <option value="fixed_asset">Fixed Asset</option>
                                <option value="inventory">Inventory</option>
                                <option value="non_current_asset">Non-current Asset</option>
                                <option value="prepayment">Prepayment</option>


                                <option disabled>Equity</option>
                                <option value="equity">Equity</option>


                                <option disabled>EXPENSES</option>
                                <option value="depreciation">Depreciation</option>
                                <option value="direct_costs">Direct Costs</option>
                                <option value="expense">Expense</option>
                                <option value="overhead">Overhead</option>


                                <option disabled>LIABILITIES</option>
                                <option value="current_liability">Current Liability</option>
                                <option value="liability">Liability</option>
                                <option value="non_current_liability">Non-current Liability</option>


                                <option disabled>REVENUE</option>
                                <option value="other_income">Other Income</option>
                                <option value="revenue">Revenue</option>
                                <option value="sales">Sales</option>

                            </select>
                            <label for="" id="error_account_type" class="text-danger fw-bold"
                                style="display: none">Type required</label>

                        </div>

                        <div class="mb-3">
                            <label for="code" class="form-label">Code</label><br>
                            <span>A unique code/number for this account (limited to 10 characters)</span>
                            <input type="text" class="form-control" id="code">
                            <label for="" id="error_code" class="text-danger fw-bold" style="display: none">Code
                                required</label>


                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label><br>
                            <span>A short title for this account (limited to 150 characters)</span>
                            <input type="text" class="form-control" id="name">
                            <label for="" id="error_name" class="text-danger fw-bold" style="display: none">Name
                                required</label>

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description (optional)</label><br>
                            <span>A short title for this account (limited to 150 characters)</span>
                            <input type="text" class="form-control" id="description">


                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Tax</label><br>
                            <span>The default tax setting for this account</span>
                            <select class="form-select" id="tax">
                                <option value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="" id="error_tax" class="text-danger fw-bold" style="display: none">Tax
                                required</label>

                        </div>
                        <div class="mb-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="watchlist">
                                <label class="form-check-label" for="watchlist">
                                    Show on Dashboard Watchlist
                                </label>
                                <label for="" id="error_watchlist" class="text-danger fw-bold"
                                    style="display: none">
                                    required</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="claims">
                                <label class="form-check-label" for="claims">
                                    Show in Expense Claims
                                </label>
                                <label for="" id="error_claims" class="text-danger fw-bold"
                                    style="display: none">
                                    required</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="account">
                                <label class="form-check-label" for="account">
                                    Enable payments to this account
                                </label>
                                <label for="" id="error_account" class="text-danger fw-bold"
                                    style="display: none">
                                    required</label>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="validate()">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>










    <script>
        function validate() {
            var isValid = true;

            if ($("#account_type").val() == "") {
                $("#account_type").addClass("is-invalid");
                $("#error_account_type").show();
                isValid = false;
            } else {
                $("#account_type").removeClass("is-invalid");
                $("#error_account_type").hide();
            }
            if ($("#code").val() == "") {
                $("#code").addClass("is-invalid");
                $("#error_code").show();
                isValid = false;
            } else {
                $("#code").removeClass("is-invalid");
                $("#error_code").hide();
            }
            if ($("#name").val() == "") {
                $("#name").addClass("is-invalid");
                $("#error_name").show();
                isValid = false;
            } else {
                $("#name").removeClass("is-invalid");
                $("#error_name").hide();
            }
            if ($("#tax").val() == "") {
                $("#tax").addClass("is-invalid");
                $("#error_tax").show();
                isValid = false;
            } else {
                $("#tax").removeClass("is-invalid");
                $("#error_tax").hide();
            }

            $("#add_account_form").submit();
        }
    </script>
</x-admin.layouts>
