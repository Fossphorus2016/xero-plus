<x-admin.layouts title="Fixed assets">

    <div class="container">
        <form action="" id="add_asset_form">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow p-5">
                        <div class="card-header">
                            <h1>Details</h1>
                        </div>
                        <div class="card-body">

                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Asset Name</label>
                                    <input type="text" class="form-control" id="asset_name">
                                    <label for="" id="error_asset_name" class="text-danger fw-bold"
                                        style="display: none">Asset Name is required</label>
                                </div>
                                <div class="col-md-6">
                                    <label for="assetNumber" class="form-label">Asset Number</label>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            FA-0001
                                        </button>
                                        <ul class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <div class="mb-2">
                                                    <label for="prefix" class="form-label">Prefix</label>
                                                    <input type="text" id="prefix" class="form-control"
                                                        value="FA">

                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <label for="nextNumber" class="form-label">Next Number</label>
                                                    <input type="text" id="nextNumber" class="form-control"
                                                        value="0001">
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <button class="btn btn-success" id="saveAssetNumber">OK</button>
                                                <button class="btn btn-secondary"
                                                    data-bs-dismiss="dropdown">Cancel</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>

                            <div class="row mb-5">
                                <div class="col-md-3 mb-5">
                                    <label for="purchase_date" class="form-label">Purchase Date</label>
                                    <input type="date" class="form-control" id="purchase_date">
                                    <label for="" id="error_purchase_date" class="text-danger fw-bold"
                                        style="display: none">Purchase Date is required</label>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <label for="purchase_price" class="form-label">Purchase Price</label>
                                    <input type="text" class="form-control" id="purchase_price">
                                    <label for="" id="error_purchase_price" class="text-danger fw-bold"
                                        style="display: none">Purchase Price is required</label>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <label for="warranty_exp" class="form-label">Warrenty Expiry</label>
                                    <input type="date" class="form-control" id="warranty_exp">
                                    <label for="" id="error_warranty_exp" class="text-danger fw-bold"
                                        style="display: none">Warrenty Expiry is required</label>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <label for="serail_number" class="form-label">Serial Number</label>
                                    <input type="text" class="form-control" id="serail_number">
                                    <label for="" id="error_serail_number" class="text-danger fw-bold"
                                        style="display: none">Serial Number is required</label>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6">

                                    <label for="asset_type" class="form-label">Asset Type</label>
                                    <select class="form-select" id="asset_type">
                                        <option value=""></option>
                                        <option value="1">1</option>

                                    </select>
                                    <label for="" id="error_asset_type" class="text-danger fw-bold"
                                        style="display: none">Asset Type is required</label>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-12">

                                    <label for="" class="form-label">Descriptiopn</label>
                                    <textarea name="" class="form-control" id="description" cols="30" rows="10"></textarea>
                                    <label for="" id="error_description" class="text-danger fw-bold"
                                        style="display: none">Descriptiopn is required</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <h2>Book Value</h2>

                                <div class="row mb-5">
                                    <div class="col-md-3">
                                        <label for="depreciation_date" class="form-label">Depreciation Start
                                            Date</label>
                                        <input type="text" class="form-control" id="depreciation_date">
                                        <label for="" id="error_depreciation_date"
                                            class="text-danger fw-bold" style="display: none">Depreciation Start Date
                                            is required</label>
                                    </div>

                                    <div class="col-md-3 d-flex align-items-end">
                                        <span id="toggle_options" style="cursor: pointer;">+ Show more options</span>
                                    </div>

                                    <div id="more_fields" class="col-md-6" style="display: none">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="cost_limit" class="form-label">Cost Limit</label>
                                                <input type="text" class="form-control" id="cost_limit">
                                                <label for="" id="error_cost_limit"
                                                    class="text-danger fw-bold" style="display: none">Cost Limit
                                                    is required</label>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="residual_value" class="form-label">Residual Value</label>
                                                <input type="text" class="form-control" id="residual_value">
                                                <label for="" id="error_residual_value"
                                                    class="text-danger fw-bold" style="display: none">Residual Value
                                                    is required</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="depreciation_method" class="form-label">Depreciation Method</label>
                                    <select class="form-select" id="depreciation_method">
                                        <option value="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="" id="error_depreciation_method" class="text-danger fw-bold"
                                        style="display: none">Depreciation Method
                                        is required</label>
                                </div>

                                <div class="col-md-3">
                                    <label for="averaging_method" class="form-label">Averaging Method</label>
                                    <select class="form-select" id="averaging_method">

                                        <option value=""></option>
                                        <option value="Full Months">Full Months</option>
                                        <option value="Actual Days">Actual Days</option>
                                    </select>
                                    <label for="" id="error_averaging_method" class="text-danger fw-bold"
                                        style="display: none">Averaging Method
                                        is required</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rate">Rate</label>
                                        <div class="input-group">

                                            <input type="number" class="form-control" id="rate">
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                            <label for="" id="error_rate" class="text-danger fw-bold"
                                                style="display: none">Rate
                                                is required</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="effective_life">Effective Life (Years)</label>

                                        <input type="number" class="form-control" id="effective_life">
                                        <label for="" id="error_effective_life" class="text-danger fw-bold"
                                            style="display: none">Effective Life (Years)
                                            is required</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-success" onclick="validate()">Save as Draft</button>
                        </div>
                    </div>

                </div>


            </div>


        </form>
    </div>


    <script>
        document.getElementById('toggle_options').addEventListener('click', function() {
            var moreFields = document.getElementById('more_fields');
            var toggleText = this;

            if (moreFields.style.display === 'none') {
                moreFields.style.display = 'block';
                toggleText.textContent = '- Hide options';
            } else {
                moreFields.style.display = 'none';
                toggleText.textContent = '+ Show more options';
            }
        });


        function validate() {
            if ($("#asset_name").val() == "") {
                $("#asset_name").addClass("is-invalid");
                $("#error_asset_name").show();
                return false;
            } else {
                $("#asset_name").removeClass("is-invalid");
                $("#error_asset_name").hide();
            }
            if ($("#purchase_date").val() == "") {
                $("#purchase_date").addClass("is-invalid");
                $("#error_purchase_date").show();
                return false;
            } else {
                $("#purchase_date").removeClass("is-invalid");
                $("#error_purchase_date").hide();
            }
            if ($("#purchase_price").val() == "") {
                $("#purchase_price").addClass("is-invalid");
                $("#error_purchase_price").show();
                return false;
            } else {
                $("#purchase_price").removeClass("is-invalid");
                $("#error_purchase_price").hide();
            }
            if ($("#warranty_exp").val() == "") {
                $("#warranty_exp").addClass("is-invalid");
                $("#error_warranty_exp").show();
                return false;
            } else {
                $("#warranty_exp").removeClass("is-invalid");
                $("#error_warranty_exp").hide();
            }
            if ($("#serail_number").val() == "") {
                $("#serail_number").addClass("is-invalid");
                $("#error_serail_number").show();
                return false;
            } else {
                $("#serail_number").removeClass("is-invalid");
                $("#error_serail_number").hide();
            }
            if ($("#asset_type").val() == "") {
                $("#asset_type").addClass("is-invalid");
                $("#error_asset_type").show();
                return false;
            } else {
                $("#asset_type").removeClass("is-invalid");
                $("#error_asset_type").hide();
            }
            if ($("#description").val() == "") {
                $("#description").addClass("is-invalid");
                $("#error_description").show();
                return false;
            } else {
                $("#description").removeClass("is-invalid");
                $("#error_description").hide();
            }
            if ($("#depreciation_date").val() == "") {
                $("#depreciation_date").addClass("is-invalid");
                $("#error_depreciation_date").show();
                return false;
            } else {
                $("#depreciation_date").removeClass("is-invalid");
                $("#error_depreciation_date").hide();
            }
            
            if ($("#depreciation_method").val() == "") {
                $("#depreciation_method").addClass("is-invalid");
                $("#error_depreciation_method").show();
                return false;
            } else {
                $("#depreciation_method").removeClass("is-invalid");
                $("#error_depreciation_method").hide();
            }
            if ($("#averaging_method").val() == "") {
                $("#averaging_method").addClass("is-invalid");
                $("#error_averaging_method").show();
                return false;
            } else {
                $("#averaging_method").removeClass("is-invalid");
                $("#error_averaging_method").hide();
            }
            if ($("#rate").val() == "") {
                $("#rate").addClass("is-invalid");
                $("#error_rate").show();
                return false;
            } else {
                $("#rate").removeClass("is-invalid");
                $("#error_rate").hide();
            }
            if ($("#effective_life").val() == "") {
                $("#effective_life").addClass("is-invalid");
                $("#error_effective_life").show();
                return false;
            } else {
                $("#effective_life").removeClass("is-invalid");
                $("#error_effective_life").hide();
            }

            $("#add_asset_form").submit();


        }
    </script>

</x-admin.layouts>
