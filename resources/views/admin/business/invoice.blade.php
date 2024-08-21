@php
    $forms = App\Models\SetupForm::all();
    $items = json_decode($forms, true);
@endphp

<x-admin.layouts title="Settings">



    <div class="row justify-content-center">
        <div class="col-md-8 card shadow p-5 my-5">
            <form method="POST" id="firstForm" action="{{ route('form.store') }}">
                @csrf
                <input type="hidden" name="page_id" value="{{ $setup->id }}">

                @foreach ($items as $item)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Select Input Type</label>
                                <select class="form-select" value="" name="input_type_1" id="input_type_1">
                                    <option>Open this select menu</option>
                                    <option value="text">Text</option>
                                    <option value="number">Number</option>
                                    <option value="email">Email</option>
                                </select>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Input name</label>
                                <input type="text" name="input_name_1" id="input_name_1" class="form-control">

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Select Input Type</label>
                                    <select class="form-select" name="input_type_2" id="input_type_2">
                                        <option>Open this select menu</option>
                                        <option value="text">Text</option>
                                        <option value="number">Number</option>
                                        <option value="email">Email</option>
                                    </select>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Input name</label>
                                    <input type="text" name="input_name_2" id="input_name_2" class="form-control">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Select Input Type</label>
                                    <select class="form-select" name="input_type_3" id="input_type_3">
                                        <option>Open this select menu</option>
                                        <option value="text">Text</option>
                                        <option value="number">Number</option>
                                        <option value="email">Email</option>
                                    </select>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Input name</label>
                                    <input type="text" name="input_name_3" id="input_name_3" class="form-control">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Select Input Type</label>
                                    <select class="form-select" name="input_type_4" id="input_type_4">
                                        <option>Open this select menu</option>
                                        <option value="text">Text</option>
                                        <option value="number">Number</option>
                                        <option value="email">Email</option>
                                    </select>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Input name</label>
                                    <input type="text" name="input_name_4" id="input_name_4" class="form-control">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Select Input Type</label>
                                    <select class="form-select" name="input_type_5" id="input_type_5">
                                        <option>Open this select menu</option>
                                        <option value="text">Text</option>
                                        <option value="number">Number</option>
                                        <option value="email">Email</option>
                                    </select>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Input name</label>
                                    <input type="text" name="input_name_5" id="input_name_5" class="form-control">

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
            </form>
        </div>


    </div>




    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-md-12 card shadow p-5">
                <form action="" id="secondForm" method="POST" class="formValidation">
                    @csrf
                    <div class="row" id="dynamic_fields">

                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="to" class="form-label">To</label>
                                <input type="text" name="to" class="form-control" id="to">
                            </div>
                        </div>


                        <div class="col-3" id="invoice_number_field">
                            <div class="mb-3">
                                <label for="invoice_number" class="form-label">Invoice number</label>
                                <input type="number" name="invoice_number" class="form-control"
                                    id="invoice_number">
                            </div>
                        </div>
                        <div class="col-3" id="issue_date_field">
                            <div class="mb-3">
                                <label for="issue_date" class="form-label">Issue date</label>
                                <input type="date" name="issue_date" class="form-control" id="issue_date">
                            </div>
                        </div>
                        <div class="col-3" id="due_date_field">
                            <div class="mb-3">
                                <label for="due_date" class="form-label">Due date</label>
                                <input type="date" name="due_date" class="form-control" id="due_date">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3" id="reference_field">
                            <div class="mb-3">
                                <label for="reference" class="form-label">Reference</label>
                                <input type="text" name="reference" class="form-control" id="reference">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3" id="online_payments_field">
                                <label for="online_payments" class="form-label">Online payments</label>
                                <input type="text" name="online_payments" class="form-control"
                                    id="online_payments">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3" id="currency_field">
                                <label for="currency" class="form-label">Currency</label>
                                <input type="text" name="currency" class="form-control" id="currency">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="amounts_are" class="form-label">Amounts are</label>
                                <select class="form-select" id="amounts_are">
                                    <option value="Tax exclusive">Tax exclusive</option>
                                    <option value="Tax inclusive">Tax inclusive</option>
                                    <option value="No tax">No tax</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="item-col">#</th>
                                <th scope="col" class="item-col">Item</th>
                                <th scope="col" class="description-col">Description</th>
                                <th scope="col" class="qty-col">Qty</th>
                                <th scope="col" class="price-col">Price</th>
                                <th scope="col" class="discount-col">Discount</th>
                                <th scope="col" class="account-col">Account</th>
                                <th scope="col" class="tax-rate-col">Tax rate</th>
                                <th scope="col" class="tax-amount-col">Tax Amount</th>
                                <th scope="col" class="project-col">Project</th>
                                <th scope="col" class="amount-col">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="invoiceTbody">
                            <!-- Rows will be added here -->
                        </tbody>
                    </table>



                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Show/hide fields
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="searchSuggestion">
        <div class="searchSugRow"></div>

    </div>




    <!-- Modal -->








    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Show/hide fields</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h5>Invoice Fields</h5>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_reference" checked>
                                    <label class="form-check-label" for="show_hide_reference">Reference</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_invoice_number"
                                        checked>
                                    <label class="form-check-label" for="show_hide_invoice_number">Invoice
                                        number</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_issue_date"
                                        checked>
                                    <label class="form-check-label" for="show_hide_issue_date">Issue date</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_due_date" checked>
                                    <label class="form-check-label" for="show_hide_due_date">Due date</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <br>
                    <h5>Table fields</h5>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_item" checked>
                                    <label class="form-check-label" for="">Item</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_quantity" checked>
                                    <label class="form-check-label" for="">Quantity
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_price" checked>
                                    <label class="form-check-label" for="">Price</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_discount" checked>
                                    <label class="form-check-label" for="">Discount</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_tax_amount"
                                        checked>
                                    <label class="form-check-label" for="">Tax amount</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="show_hide_project" checked>
                                    <label class="form-check-label" for="">Project</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <hr>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveChangesButton">Save changes</button>
                </div>
            </div>
        </div>
    </div>






    <style>
        .input-error {
            background-color: #f8d7da;
            /* Light red background */
            border-color: #f5c6cb;
            /* Red border */
        }

        .input-error:focus {
            background-color: #f8d7da;
            /* Light red background */
            border-color: #f5c6cb;
            /* Red border */
        }

        textarea {
            resize: none
        }
    </style>







    <script>
        document.getElementById('submit-btn').addEventListener('click', function(event) {
            event.preventDefault();

            const firstForm = document.getElementById('firstForm');
            const secondForm = document.getElementById('secondForm');

            // Clear existing dynamic fields
            const dynamicFields = secondForm.querySelectorAll('.dynamic-field-group');
            dynamicFields.forEach(field => field.remove());

            // Loop through each select and input in the first form
            for (let i = 1; i <= 5; i++) {
                const inputTypeElement = firstForm.querySelector(`#input_type_${i}`);
                const inputNameElement = firstForm.querySelector(`#input_name_${i}`);

                if (inputTypeElement && inputNameElement) { // Ensure elements exist
                    const inputType = inputTypeElement.value;
                    const inputName = inputNameElement.value;

                    if (inputType && inputName) {
                        // Create a div to group label and input
                        const fieldGroup = document.createElement('div');
                        fieldGroup.classList.add('dynamic-field-group', 'mb-3');

                        // Create and append the label
                        const newLabel = document.createElement('label');
                        newLabel.textContent = inputName;
                        newLabel.classList.add('form-label');
                        fieldGroup.appendChild(newLabel);

                        // Create and append the new field
                        const newField = document.createElement('input');
                        newField.type = inputType;
                        newField.name = inputName;
                        newField.classList.add('form-control', 'dynamic-field');
                        fieldGroup.appendChild(newField);

                        // Append the field group to the second form
                        secondForm.appendChild(fieldGroup);
                    }
                } else {
                    console.error(`Element not found for index ${i}`);
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const fieldMapping = {
                'show_hide_reference': 'reference_field',
                'show_hide_invoice_number': 'invoice_number_field',
                'show_hide_issue_date': 'issue_date_field',
                'show_hide_due_date': 'due_date_field',
                'show_hide_item': 'item_field',
                'show_hide_quantity': 'qty_field',
                'show_hide_price': 'price_field',
                'show_hide_discount': 'discount_field',
                'show_hide_tax_amount': 'tax_amount_field',
                'show_hide_project': 'project_field',
            };

            const headerMapping = {
                'show_hide_item': '.item-col',
                'show_hide_quantity': '.qty-col',
                'show_hide_price': '.price-col',
                'show_hide_discount': '.discount-col',
                'show_hide_tax_amount': '.tax-amount-col',
                'show_hide_project': '.project-col',
            };

            // Load and apply saved states
            function loadSavedStates() {
                Object.keys(fieldMapping).forEach(toggleId => {
                    const savedState = localStorage.getItem(toggleId);
                    if (savedState !== null) {
                        const toggleElement = document.getElementById(toggleId);
                        const fieldElement = document.getElementById(fieldMapping[toggleId]);

                        if (toggleElement && fieldElement) {
                            const isChecked = JSON.parse(savedState);
                            toggleElement.checked = isChecked;
                            fieldElement.style.display = isChecked ? '' : 'none';

                            // Apply header and column visibility based on saved state
                            const columnClass = headerMapping[toggleId];
                            const headers = document.querySelectorAll(`th${columnClass}`);
                            const columns = document.querySelectorAll(`td${columnClass}`);

                            headers.forEach(header => {
                                header.style.display = isChecked ? '' : 'none';
                            });
                            columns.forEach(column => {
                                column.style.display = isChecked ? '' : 'none';
                            });
                        }
                    }
                });
            }

            // Save the state of the toggle in local storage
            function saveState(toggleId) {
                const toggleElement = document.getElementById(toggleId);
                if (toggleElement) {
                    localStorage.setItem(toggleId, JSON.stringify(toggleElement.checked));
                }
            }

            // Toggle table columns and headers visibility
            function toggleTableColumns() {
                Object.keys(headerMapping).forEach(checkboxId => {
                    const checkbox = document.getElementById(checkboxId);
                    const columnClass = headerMapping[checkboxId];
                    const headers = document.querySelectorAll(`th${columnClass}`);
                    const columns = document.querySelectorAll(`td${columnClass}`);

                    if (checkbox) {
                        // Toggle table column visibility
                        columns.forEach(column => {
                            column.style.display = checkbox.checked ? '' : 'none';
                        });
                        // Toggle table header visibility
                        headers.forEach(header => {
                            header.style.display = checkbox.checked ? '' : 'none';
                        });
                    }
                });
            }

            // Initialize fields and headers on page load
            loadSavedStates();

            Object.keys(fieldMapping).forEach(toggleId => {
                const toggleElement = document.getElementById(toggleId);
                const fieldElement = document.getElementById(fieldMapping[toggleId]);

                if (toggleElement && fieldElement) {
                    toggleElement.addEventListener('change', function() {
                        fieldElement.style.display = toggleElement.checked ? '' : 'none';
                        saveState(toggleId); // Save state on change
                        toggleTableColumns(); // Update column and header visibility
                    });
                }
            });

            // Save changes button to apply modal selections
            document.getElementById('saveChangesButton').addEventListener('click', function() {
                toggleTableColumns(); // Apply column and header visibility changes
                const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
                modal.hide();
            });

            // Initialize table columns and headers on modal show
            $('#exampleModal').on('show.bs.modal', function() {
                toggleTableColumns();
            });
        });

        $(document).ready(function() {
            var defaultLine = 1; // Set the number of default rows you want

            // Function to create a new row
            function createNewRow(rowCount) {
                return `<tr>
                <td scope="row" class="item-col">${rowCount}</td>
                <td class="item-col"><div id="item_field"><input type="text" class="form-control item" name="item-${rowCount}" autocomplete="off"></div></td>
                <td class="description-col"><input type="text" class="form-control description" name="description-${rowCount}" autocomplete="off"></td>
                <td class="qty-col"><div id="qty_field"><input type="number" class="form-control qty-input" name="qty-${rowCount}" autocomplete="off"></div></td>
                <td class="price-col"><div id="price_field"><input type="number" class="form-control price" name="price-${rowCount}" autocomplete="off"></div></td>
                <td class="discount-col"><div id="discount_field"><input type="number" class="form-control discount" name="discount-${rowCount}" autocomplete="off"></div></td>
                <td class="account-col"><input type="text" class="form-control account" name="account-${rowCount}" autocomplete="off"></td>
                <td class="tax-rate-col"><input type="text" class="form-control tax-rate" name="tax-rate-${rowCount}" autocomplete="off"></td>
                <td class="tax-amount-col"><div id="tax_amount_field"><input type="text" class="form-control tax-amount" name="tax-amount-${rowCount}" autocomplete="off"></div></td>
                <td class="project-col"><div id="project_field"><input type="text" class="form-control project" name="project-${rowCount}" autocomplete="off"></div></td>
                <td class="amount-col"><input type="number" class="form-control amount" name="amount-${rowCount}" disabled autocomplete="off"></td>
                <td><button type="button" class="btn btn-danger delete-row" disabled><i class="bi bi-trash3"></i></button></td>
                </tr>`;
            }

            // Add default rows based on the defaultLine variable
            for (let i = 1; i <= defaultLine; i++) {
                $('.invoiceTbody').append(createNewRow(i));
            }

            // Function to enable/disable the delete button based on input fields
            function toggleDeleteButton(row) {
                let allFilled = true;
                row.find('input').each(function() {
                    if ($(this).val().trim() === '') {
                        allFilled = false;
                    }
                });
                row.find('.delete-row').prop('disabled', !allFilled);
            }

            // Append a new row when the last input in the current last row is filled
            $(document).on('keyup', '.invoiceTbody tr:last-child input', function() {
                let allFilled = true;
                $('.invoiceTbody tr:last-child input').each(function() {
                    if ($(this).val().trim() === '') {
                        allFilled = false;
                    }
                });

                if (allFilled) {
                    let rowCount = $('.invoiceTbody tr').length + 1;
                    let newRow = $(createNewRow(rowCount));
                    $('.invoiceTbody').append(newRow);
                    setUpRowEventHandlers(); // Reapply event handlers to new rows
                }
            });

            // Calculate total for each row on quantity or price input
            $(document).on('keyup', '.qty-input, .price', function() {
                var row = $(this).closest('tr');
                var qty = parseFloat(row.find('.qty-input').val()) || 0;
                var price = parseFloat(row.find('.price').val()) || 0;
                var total = qty * price;
                row.find('.amount').val(total.toFixed(2));
                toggleDeleteButton(row); // Check if delete button should be enabled
            });

            // Enable delete button for each row when all fields are filled
            $(document).on('input', '.invoiceTbody input', function() {
                var row = $(this).closest('tr');
                toggleDeleteButton(row);
            });

            // Handle row deletion
            $(document).on('click', '.delete-row', function() {
                if ($('.invoiceTbody tr').length > 1) {
                    $(this).closest('tr').remove();
                    $('.invoiceTbody tr').each(function(index) {
                        $(this).find('td:first-child').text(index + 1);
                    });
                }
            });

            // Function to toggle column visibility based on modal checkboxes
            function toggleTableColumns() {
                const columnMappings = {
                    'show_hide_item': '.item-col',
                    'show_hide_quantity': '.qty-col',
                    'show_hide_price': '.price-col',
                    'show_hide_discount': '.discount-col',
                    'show_hide_tax_amount': '.tax-amount-col',
                    'show_hide_project': '.project-col',
                };

                Object.keys(columnMappings).forEach(checkboxId => {
                    const checkbox = document.getElementById(checkboxId);
                    const columnClass = columnMappings[checkboxId];

                    if (checkbox) {
                        $(columnClass).toggle(checkbox.checked);
                    }
                });
            }

            // Apply the column visibility when the modal is shown
            $('#exampleModal').on('show.bs.modal', function() {
                toggleTableColumns();
            });
        });
    </script>
</x-admin.layouts>
