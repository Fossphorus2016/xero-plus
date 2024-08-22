<x-admin.layouts title="Product">

    <nav class="bg-white p-5 d-flex justify-content-between align-items-center">
        <div>
            <h2>Products</h2>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#product_modal">
            Add product
        </button>
    </nav>




    <div class="modal fade" id="product_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New item</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code">

                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name">

                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="track_inventory">
                                <label class="form-check-label" for="track_inventory">
                                    <strong>Track Inventory item</strong>
                                </label>
                                <p>Track the quantity and value of stock on hand. This option is suitable for
                                    organisations with less than 4,000 products or services, who purchase items before
                                    they are sold, and who calculate the average cost of items.</p>
                            </div>

                            <div id="track_div" style="display: none">
                                <div class="alert alert-primary" role="alert">
                                    Items can’t be untracked once they appear on a transaction. This includes the
                                    opening balance, an adjustment, or a bill or an invoice.
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="code" class="form-label">Inventory Asset
                                                account(required)</label>
                                            <select class="form-select" id="asset_account">

                                                <option value="630 - Inventory" selected>630 - Inventory</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="purchase_check"
                                    checked>
                                <label class="form-check-label" for="purchase_check">
                                    <strong>Purchase</strong>
                                </label>

                            </div>

                            <div id="purchase_div" style="display: none">
                                <div class="my-4">
                                    <p>Add item to bills, purchase orders, and other purchase transactions</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="cost_price" class="form-label">Cost price</label>
                                            <input type="text" class="form-control" id="cost_price">

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="code" class="form-label">Purchase account</label>
                                            <select name="account" class="form-select" id="purchase_account">
                                                <option value="None">None</option>
                                                <optgroup label="Expenses">
                                                    <option value="310 - Cost of Goods Sold">310 - Cost of Goods Sold
                                                    </option>
                                                    <option value="400 - Advertising">400 - Advertising</option>
                                                    <option value="404 - Bank Fees">404 - Bank Fees</option>
                                                    <option value="408 - Cleaning">408 - Cleaning</option>
                                                    <option value="412 - Consulting & Accounting">412 - Consulting &
                                                        Accounting</option>
                                                    <option value="416 - Depreciation">416 - Depreciation</option>
                                                    <option value="420 - Entertainment">420 - Entertainment</option>
                                                    <option value="425 - Freight & Courier">425 - Freight & Courier
                                                    </option>
                                                    <option value="429 - General Expenses">429 - General Expenses
                                                    </option>
                                                    <option value="433 - Insurance">433 - Insurance</option>
                                                    <option value="437 - Interest Expense">437 - Interest Expense
                                                    </option>
                                                    <option value="441 - Legal expenses">441 - Legal expenses</option>
                                                    <option value="445 - Light, Power, Heating">445 - Light, Power,
                                                        Heating</option>
                                                    <option value="449 - Motor Vehicle Expenses">449 - Motor Vehicle
                                                        Expenses</option>
                                                    <option value="453 - Office Expenses">453 - Office Expenses</option>
                                                    <option value="461 - Printing & Stationery">461 - Printing &
                                                        Stationery</option>
                                                    <option value="469 - Rent">469 - Rent</option>
                                                    <option value="473 - Repairs and Maintenance">473 - Repairs and
                                                        Maintenance</option>
                                                    <option value="477 - Wages and Salaries">477 - Wages and Salaries
                                                    </option>
                                                    <option value="478 - Superannuation">478 - Superannuation</option>
                                                </optgroup>
                                                <option value="485 - Subscriptions">485 - Subscriptions</option>
                                                <option value="489 - Telephone & Internet">489 - Telephone & Internet
                                                </option>
                                                <option value="493 - Travel - National">493 - Travel - National
                                                </option>
                                                <option value="494 - Travel - International">494 - Travel -
                                                    International</option>
                                                <option value="499 - Realised Currency Gains">499 - Realised Currency
                                                    Gains</option>
                                                <option value="505 - Income Tax Expense">505 - Income Tax Expense
                                                </option>
                                                <option value="620 - Prepayments">620 - Prepayments</option>
                                                <option value="710 - Office Equipment">710 - Office Equipment</option>
                                                <option
                                                    value="711 - Less Accumulated Depreciation on Office Equipment">711
                                                    - Less Accumulated Depreciation on Office Equipment</option>
                                                <option value="720 - Computer Equipment">720 - Computer Equipment
                                                </option>
                                                <option
                                                    value="721 - Less Accumulated Depreciation on Computer Equipment">
                                                    721 - Less Accumulated Depreciation on Computer Equipment</option>
                                                <option value="820 - Sales Tax">820 - Sales Tax</option>
                                                <option value="825 - Employee Tax Payable">825 - Employee Tax Payable
                                                </option>
                                                <option value="826 - Superannuation Payable">826 - Superannuation
                                                    Payable</option>
                                                <option value="830 - Income Tax Payable">830 - Income Tax Payable
                                                </option>
                                                <option value="840 - Historical Adjustment">840 - Historical Adjustment
                                                </option>
                                                <option value="850 - Suspense">850 - Suspense</option>
                                                <option value="860 - Rounding">860 - Rounding</option>
                                                <option value="880 - Owner A Drawings">880 - Owner A Drawings</option>
                                                <option value="881 - Owner A Funds Introduced">881 - Owner A Funds
                                                    Introduced</option>
                                                <option value="900 - Loan">900 - Loan</option>
                                                <option value="960 - Retained Earnings">960 - Retained Earnings
                                                </option>
                                                <option value="970 - Owner A Share Capital">970 - Owner A Share Capital
                                                </option>
                                                <option value="200 - Sales">200 - Sales</option>
                                                <option value="260 - Other Revenue">260 - Other Revenue</option>
                                                <option value="270 - Interest Income">270 - Interest Income</option>
                                            </select>


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="code" class="form-label">Tax rate</label>
                                            <select name="account" class="form-select" id="purchase_tax_rate">
                                                <option value="">None</option>
                                                <option value="Sales Tax on Imports">Sales Tax on Imports
                                                </option>
                                                <option value="Tax Exempt">Tax Exempt</option>
                                                <option value="Tax on Purchase">Tax on Purchase</option>
                                                <option value="Tax on Sales">Tax on Sales</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="purchase_description">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="sell_check"
                                    checked>
                                <label class="form-check-label" for="sell_check">
                                    <strong>Sell</strong>
                                </label>

                            </div>

                            <div id="sell_div" style="display: none">
                                <div class="my-4">
                                    <p>Add item to invoices, quotes, and other sales transactions</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="sale_price" class="form-label">Sale price</label>
                                            <input type="text" class="form-control" id="sale_price">

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="code" class="form-label">Sales account</label>
                                            <select name="account" class="form-select" id="sales_account">
                                                <option value="None">None</option>
                                                <optgroup label="Expenses">
                                                    <option value="310 - Cost of Goods Sold">310 - Cost of Goods Sold
                                                    </option>
                                                    <option value="400 - Advertising">400 - Advertising</option>
                                                    <option value="404 - Bank Fees">404 - Bank Fees</option>
                                                    <option value="408 - Cleaning">408 - Cleaning</option>
                                                    <option value="412 - Consulting & Accounting">412 - Consulting &
                                                        Accounting</option>
                                                    <option value="416 - Depreciation">416 - Depreciation</option>
                                                    <option value="420 - Entertainment">420 - Entertainment</option>
                                                    <option value="425 - Freight & Courier">425 - Freight & Courier
                                                    </option>
                                                    <option value="429 - General Expenses">429 - General Expenses
                                                    </option>
                                                    <option value="433 - Insurance">433 - Insurance</option>
                                                    <option value="437 - Interest Expense">437 - Interest Expense
                                                    </option>
                                                    <option value="441 - Legal expenses">441 - Legal expenses</option>
                                                    <option value="445 - Light, Power, Heating">445 - Light, Power,
                                                        Heating</option>
                                                    <option value="449 - Motor Vehicle Expenses">449 - Motor Vehicle
                                                        Expenses</option>
                                                    <option value="453 - Office Expenses">453 - Office Expenses
                                                    </option>
                                                    <option value="461 - Printing & Stationery">461 - Printing &
                                                        Stationery</option>
                                                    <option value="469 - Rent">469 - Rent</option>
                                                    <option value="473 - Repairs and Maintenance">473 - Repairs and
                                                        Maintenance</option>
                                                    <option value="477 - Wages and Salaries">477 - Wages and Salaries
                                                    </option>
                                                    <option value="478 - Superannuation">478 - Superannuation</option>
                                                </optgroup>
                                                <option value="485 - Subscriptions">485 - Subscriptions</option>
                                                <option value="489 - Telephone & Internet">489 - Telephone & Internet
                                                </option>
                                                <option value="493 - Travel - National">493 - Travel - National
                                                </option>
                                                <option value="494 - Travel - International">494 - Travel -
                                                    International</option>
                                                <option value="499 - Realised Currency Gains">499 - Realised Currency
                                                    Gains</option>
                                                <option value="505 - Income Tax Expense">505 - Income Tax Expense
                                                </option>
                                                <option value="620 - Prepayments">620 - Prepayments</option>
                                                <option value="710 - Office Equipment">710 - Office Equipment</option>
                                                <option
                                                    value="711 - Less Accumulated Depreciation on Office Equipment">711
                                                    - Less Accumulated Depreciation on Office Equipment</option>
                                                <option value="720 - Computer Equipment">720 - Computer Equipment
                                                </option>
                                                <option
                                                    value="721 - Less Accumulated Depreciation on Computer Equipment">
                                                    721 - Less Accumulated Depreciation on Computer Equipment</option>
                                                <option value="820 - Sales Tax">820 - Sales Tax</option>
                                                <option value="825 - Employee Tax Payable">825 - Employee Tax Payable
                                                </option>
                                                <option value="826 - Superannuation Payable">826 - Superannuation
                                                    Payable</option>
                                                <option value="830 - Income Tax Payable">830 - Income Tax Payable
                                                </option>
                                                <option value="840 - Historical Adjustment">840 - Historical Adjustment
                                                </option>
                                                <option value="850 - Suspense">850 - Suspense</option>
                                                <option value="860 - Rounding">860 - Rounding</option>
                                                <option value="880 - Owner A Drawings">880 - Owner A Drawings</option>
                                                <option value="881 - Owner A Funds Introduced">881 - Owner A Funds
                                                    Introduced</option>
                                                <option value="900 - Loan">900 - Loan</option>
                                                <option value="960 - Retained Earnings">960 - Retained Earnings
                                                </option>
                                                <option value="970 - Owner A Share Capital">970 - Owner A Share Capital
                                                </option>
                                                <option value="200 - Sales">200 - Sales</option>
                                                <option value="260 - Other Revenue">260 - Other Revenue</option>
                                                <option value="270 - Interest Income">270 - Interest Income</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="code" class="form-label">Tax rate</label>
                                            <select name="account" class="form-select" id="sales_tax_rate">
                                                <option value="">None</option>
                                                <option value="Sales Tax on Imports">Sales Tax on Imports
                                                </option>
                                                <option value="Tax Exempt">Tax Exempt</option>
                                                <option value="Tax on Purchase">Tax on Purchase</option>
                                                <option value="Tax on Sales">Tax on Sales</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="code" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="sales_description">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('track_inventory');
            const track_div = document.getElementById('track_div');
            const purchase_check = document.getElementById('purchase_check');
            const sell_check = document.getElementById('sell_check');
            const purchase_div = document.getElementById('purchase_div');
            const sell_div = document.getElementById('sell_div');

            function update_track_div() {
                if (checkbox.checked) {
                    track_div.style.display = 'block';
                    purchase_check.checked = true;
                    sell_check.checked = true;
                    purchase_check.disabled = true;
                    sell_check.disabled = true;
                    purchase_div.style.display = 'block'; // Ensure purchase_div is shown
                    sell_div.style.display = 'block'; // Ensure sell_div is shown
                } else {
                    track_div.style.display = 'none';
                    purchase_check.disabled = false;
                    sell_check.disabled = false;
                    // Do not hide purchase_div or sell_div here
                }
            }

            function update_sell_div() {
                if (sell_check.checked) {
                    sell_div.style.display = 'block';
                } else {
                    sell_div.style.display = 'none';
                }
            }

            function update_purchase_div() {
                if (purchase_check.checked) {
                    purchase_div.style.display = 'block';
                } else {
                    purchase_div.style.display = 'none';
                }
            }

            update_track_div(); // Initial state

            checkbox.addEventListener('change', update_track_div);
            sell_check.addEventListener('change', update_sell_div);
            purchase_check.addEventListener('change', update_purchase_div);
        });


        document.addEventListener('DOMContentLoaded', function() {
            const sell_checkbox = document.getElementById('sell_check');
            const sell_div = document.getElementById('sell_div');


            function update_sell_div() {
                if (sell_checkbox.checked) {
                    sell_div.style.display = 'block';

                } else {
                    sell_div.style.display = 'none';

                }
            }


            update_sell_div();


            sell_checkbox.addEventListener('change', update_sell_div);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const purchase_checkbox = document.getElementById('purchase_check');
            const purchase_div = document.getElementById('purchase_div');


            function update_purchase_div() {
                if (purchase_checkbox.checked) {
                    purchase_div.style.display = 'block';

                } else {
                    purchase_div.style.display = 'none';

                }
            }


            update_purchase_div();


            purchase_checkbox.addEventListener('change', update_purchase_div);
        });
    </script>
</x-admin.layouts>
