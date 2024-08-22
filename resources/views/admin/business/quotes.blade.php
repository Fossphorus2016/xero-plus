<x-admin.layouts>


    <div class="row justify-content-center ">
        <div class="col-md-12 card shadow p-5">
            <form action="" method="POST" class="formValidation">
                @csrf
                <div class="row mb-5 ">
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" name="contact" class="form-control contactVal" id="contact">

                        </div>
                        <div id="FormToggle">
                            <div class="mb-3">
                                <label for="contact" class="form-label">Title</label>
                                <input type="text" name="tital" class="form-control titalVal" id="tital">

                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Summary</label>
                                <textarea name="summary" id="summary" class="form-control summaryVal" cols="30" rows="10"></textarea>

                            </div>
                        </div>
                        <input type="checkbox" id="form_feilds_check" class="d-none">
                        <button class="btn btn-secondary" type="button" id="add_remove">+ Add a title &
                            summary</button>
                    </div>
                    <div class="col-md-7 d-flex flex-column justify-content-between">
                        <div class="row justify-content-end">
                            <div class="mb-3 col-md-4">
                                <label for="issue_date" class="form-label">Issue date</label>
                                <input type="date" name="issue_date" class="form-control issue_dateVal"
                                    id="issue_date">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="expiry_date" class="form-label">Expiry date</label>
                                <input type="date" name="expiry_date" class="form-control expiry_dateVal"
                                    id="expiry_date">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="quote_number" class="form-label">Quote number</label>
                                <input type="text" name="quote_number" class="form-control quote_numberVal"
                                    id="quote_number">
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="reference" class="form-label">Reference</label>
                                <input type="text" name="reference" class="form-control referenceVal" id="reference">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="currency" class="form-label">Currency</label>
                                <input type="text" name="currency" class="form-control currencyVal" id="currency">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row justify-content-end ">
                    <div class="mb-3 col-md-3 ">
                        <label for="project" class="form-label">Project</label>
                        <input type="text" name="project" class="form-control projectVal" id="project">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label for="tax" class="form-label">Tax</label>
                        <select class="form-select taxVal" name="tax" id="tax">
                            <option>select tax</option>
                            <option value="Tax exclusive">Tax exclusive</option>
                            <option value="Tax inclusive">Tax inclusive</option>
                            <option value="No tax">No tax</option>
                        </select>
                    </div>
                </div>


                <div class="mb-5">
                    <div>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Show/hide columns
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <div class="mb-3">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="item"
                                                    checked id="item_check">
                                                <span class="form-check-label">Item</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mb-3">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="quantity"
                                                    checked id="quantity_check">
                                                <span class="form-check-label">Quantity</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mb-3">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="price"
                                                    checked id="price_check">
                                                <span class="form-check-label">Price</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mb-3">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="discount"
                                                    checked id="discount_check">
                                                <span class="form-check-label">Discount</span>
                                            </label>
                                        </div>
                                    </li>

                                    <small class="text-muted mt-2 d-block">
                                        This won’t change which columns are visible to your customers. To change what
                                        customers see, edit the branding theme in <a href="#">Invoice
                                            settings</a>.
                                    </small>
                                </ul>


                            </div>

                        </div>
                    </div>
                    <div>
                        <table class="table table-bordered table-striped my-5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Disc</th>
                                    <th scope="col">Account</th>
                                    <th scope="col">Tax rate</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="invoiceTbody">

                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="term" class="form-label">Terms</label>
                                <textarea name="term" id="term" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <!-- Default dropup button -->
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Attach File
                                </button>
                                <ul class="dropdown-menu w-500px">
                                    <!--begin::Form-->

                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="kt_dropzonejs_example_1">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                        class="path1"></span><span class="path2"></span></i>

                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drag and Drop files or
                                                        select manually</h3>
                                                    <span
                                                        class="fs-7 fw-semibold btn btn-outline-secondary mt-3 text-gray-500">Upload
                                                        files</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->
                                    <span class="text-danger mt-3">Error</span>

                                </ul>
                            </div>

                        </div>
                        <div class="col-md-4 d-flex flex-column  justify-content-end">
                            <div class="d-flex justify-content-between">
                                <p>SubTotal</p>
                                <p><span>0.00</span></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Discount</p>
                                <p><span>0.00</span></p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p>Total</p>
                                <p><span>0.00</span></p>
                            </div>
                        </div>

                    </div>
                </div>



            </form>
        </div>
    </div>

    <div class="searchSuggestion">
        <div class="searchSugRow"></div>

    </div>



    </x-admin.layout>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.querySelector('.table');

            const itemCheckbox = document.getElementById('item_check');
            const quantityCheckbox = document.getElementById('quantity_check');
            const priceCheckbox = document.getElementById('price_check');
            const discountCheckbox = document.getElementById('discount_check');

            function updateColumnVisibility(checkbox, columnIndex) {
                const columns = table.querySelectorAll(
                    `td:nth-child(${columnIndex}), th:nth-child(${columnIndex})`);
                if (checkbox.checked) {
                    columns.forEach(column => column.style.display = '');
                } else {
                    columns.forEach(column => column.style.display = 'none');
                }
            }

            // Initial check on page load for all columns
            updateColumnVisibility(itemCheckbox, 2); // Item column
            updateColumnVisibility(quantityCheckbox, 4); // Quantity column
            updateColumnVisibility(priceCheckbox, 5); // Price column
            updateColumnVisibility(discountCheckbox, 6); // Discount column

            // Event listeners for checkboxes
            itemCheckbox.addEventListener('change', () => updateColumnVisibility(itemCheckbox, 2));
            quantityCheckbox.addEventListener('change', () => updateColumnVisibility(quantityCheckbox, 4));
            priceCheckbox.addEventListener('change', () => updateColumnVisibility(priceCheckbox, 5));
            discountCheckbox.addEventListener('change', () => updateColumnVisibility(discountCheckbox, 6));
        });


        $(document).ready(function() {

            var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
                url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 10,
                maxFilesize: 10, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                    if (file.name == "wow.jpg") {
                        done("Naha, you don't.");
                    } else {
                        done();
                    }
                }
            });

            // Toggle Form Fields
            $('#add_remove').click(function() {
                if ($('#form_feilds_check').is(':checked')) {
                    $('#form_feilds_check').prop('checked', false);
                    $('#FormToggle').hide();
                    $("#add_remove").text('+ Add a title & summary');
                } else {
                    $('#form_feilds_check').prop('checked', true);
                    $('#FormToggle').show();
                    $("#add_remove").text('- Remove title & summary');
                }
            });

            if ($('#form_feilds_check').is(':checked')) {
                $('#FormToggle').show();
                $("#add_remove").text('- Remove title & summary');
            } else {
                $('#FormToggle').hide();
                $("#add_remove").text('+ Add a title & summary');
            }

            // Form Validation
            $(".formValidation").submit(function(event) {
                event.preventDefault();
                let isValid = true;

                $(this).find(
                    ".contactVal, .titalVal, .summaryVal, .issue_dateVal, .expiry_date, .quote_numberVal, .referenceVal, .currencyVal, .projectVal, .taxVal"
                ).each(function() {
                    if ($(this).val().trim() === "") {
                        $(this).addClass("is-invalid");
                        isValid = false;
                    } else {
                        $(this).removeClass("is-invalid");
                    }
                });

                $(".invoiceTbody tr").each(function() {
                    let rowValid = true;
                    let anyFilled = false;

                    $(this).find("input").each(function() {
                        if ($(this).val().trim() !== "") {
                            anyFilled = true;
                        }
                    });

                    if (anyFilled) {
                        $(this).find("input").each(function() {
                            if ($(this).val().trim() === "") {
                                $(this).addClass("is-invalid");
                                rowValid = false;
                            } else {
                                $(this).removeClass("is-invalid");
                            }
                        });
                    }

                    if (!rowValid) {
                        isValid = false;
                    }
                });

                let allRowsEmpty = true;
                $(".invoiceTbody tr input").each(function() {
                    if ($(this).val().trim() !== "") {
                        allRowsEmpty = false;
                    }
                });

                if (allRowsEmpty) {
                    $(".invoiceTbody tr input").addClass("is-invalid");
                    isValid = false;
                }
                if (isValid) {
                    this.submit();
                }
            });

            $(".formValidation").find("input, select, textarea, .emailVal").on("input change", function() {
                if ($(this).val().trim() !== "" || $(this).is(":checkbox:checked")) {
                    $(this).removeClass("is-invalid");
                }
            });

            var defaultLine = 1;

            function createNewRow(rowCount) {
                return `<tr>
                    <td scope="row">${rowCount}</td>
                    <div id="item_div"><td><input type="text" class="form-control" name="item[]" autocomplete="off"></td></div>
                    <td><input type="text" class="form-control" name="description[]" autocomplete="off"></td>
                   <div id="qty_div"> <td><input type="number" class="form-control qty-input" name="qty[]" autocomplete="off"></td></div>
                    <div id="price_div"><td><input type="number" class="form-control price-input" name="price[]" autocomplete="off"></td></div>
                    <div id="disc_div"><td><input type="number" class="form-control disc-input" name="disc[]" autocomplete="off"></td></div>
                    <td><input type="text" class="form-control account-input" name="account[]" autocomplete="off"></td>
                    <td><input type="number" class="form-control taxrate-input" name="taxrate[]" autocomplete="off"></td>
                    <td><input type="number" disabled class="form-control amount" name="amount[]" autocomplete="off"></td>
                    <td><button type="button" class="btn btn-danger delete-row"><i class="bi bi-trash3"></i></button></td>
                </tr>`;
            }

            for (let i = 1; i <= defaultLine; i++) {
                $('.invoiceTbody').append(createNewRow(i));
            }

            function setUpRowEventHandlers() {
                $(document).on('click', '.delete-row', function() {
                    if ($('.invoiceTbody tr').length > 1) {
                        $(this).closest('tr').remove();
                        $('.invoiceTbody tr').each(function(index) {
                            $(this).find('td:first-child').text(index + 1);
                        });
                    }
                });

                function checkAndAddRow() {
                    let allFilled = true;
                    $('.invoiceTbody tr:last-child').find('input').each(function() {
                        if ($(this).val().trim() === '') {
                            allFilled = false;
                        }
                    });

                    if (allFilled) {
                        let rowCount = $('.invoiceTbody tr').length + 1;
                        let newRow = $(createNewRow(rowCount));
                        $('.invoiceTbody').append(newRow);
                        setUpRowEventHandlers(); // Reapply event handlers to new rows
                        newRow.find('input:first').focus();
                    }
                }

                $(document).on('keydown', '.invoiceTbody input', function(e) {
                    if (e.key === 'Tab' || e.keyCode === 9) {
                        e.preventDefault();
                        checkAndAddRow();
                    }
                });
            }

            setUpRowEventHandlers();

            // function calculateTotal() {
            //     $('.invoiceTbody tr').each(function() {
            //         var price = $(this).find('.price-input').val().trim();
            //         var qty = $(this).find('.qty-input').val().trim();
            //         var disc = $(this).find('.disc-input').val().trim();
            //         var totalRow = $(this).find('.amount');

            //         if (price && qty) {
            //             let amount = parseFloat(price) * parseInt(qty);
            //             if (disc) {
            //                 amount -= (amount * parseFloat(disc) / 100);
            //             }
            //             totalRow.val(amount.toFixed(2));
            //         } else {
            //             totalRow.val('');
            //         }
            //     });
            // }

            // $(document).on('keyup', '.price-input, .qty-input, .disc-input', function() {
            //     calculateTotal();
            // });

            function calculateTotal() {
                let subTotal = 0;
                let totalDiscount = 0;

                $('.invoiceTbody tr').each(function() {
                    var price = $(this).find('.price-input').val().trim();
                    var qty = $(this).find('.qty-input').val().trim();
                    var disc = $(this).find('.disc-input').val().trim();
                    var totalRow = $(this).find('.amount');

                    if (price && qty) {
                        let amount = parseFloat(price) * parseInt(qty);
                        let discountAmount = 0;

                        if (disc) {
                            discountAmount = (amount * parseFloat(disc) / 100);
                            amount -= discountAmount;
                        }

                        totalRow.val(amount.toFixed(2));

                        // Add to subtotal and total discount
                        subTotal += parseFloat(price) * parseInt(qty);
                        totalDiscount += discountAmount;
                    } else {
                        totalRow.val('');
                    }
                });

                let total = subTotal - totalDiscount;

                // Update the SubTotal, Discount, and Total fields
                $('.col-md-4').find('.d-flex').eq(0).find('span').text(subTotal.toFixed(2));
                $('.col-md-4').find('.d-flex').eq(1).find('span').text(totalDiscount.toFixed(2));
                $('.col-md-4').find('.d-flex').eq(2).find('span').text(total.toFixed(2));
            }

            $(document).on('keyup', '.price-input, .qty-input, .disc-input', function() {
                calculateTotal();
            });

        });
    </script>



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

        .dropdown-menu {
            padding: 15px;
        }

        .dropdown-menu label {
            margin-bottom: 0;
        }
    </style>
