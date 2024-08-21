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
                                <input type="text" name="contact" class="form-control contactVal" id="contact">

                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Summary</label>
                                <textarea name="" id="" class="form-control contactVal" cols="30" rows="10"></textarea>

                            </div>
                        </div>
                        <input type="checkbox" id="form_feilds_check" class="d-none">
                        <button class="btn btn-secondary" type="button" id="add_remove">+ Add a title &
                            summary</button>
                    </div>
                    <div class="col-md-7 d-flex flex-column justify-content-between">
                        <div class="row justify-content-end">
                            <div class="mb-3 col-md-4">
                                <label for="contact" class="form-label">Title</label>
                                <input type="text" name="contact" class="form-control contactVal" id="contact">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="contact" class="form-label">Title</label>
                                <input type="text" name="contact" class="form-control contactVal" id="contact">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="contact" class="form-label">Title</label>
                                <input type="text" name="contact" class="form-control contactVal" id="contact">
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="contact" class="form-label">Title</label>
                                <input type="text" name="contact" class="form-control contactVal" id="contact">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="contact" class="form-label">Title</label>
                                <input type="text" name="contact" class="form-control contactVal" id="contact">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row justify-content-end ">
                    <div class="mb-3 col-md-3 ">
                        <label for="contact" class="form-label">Title</label>
                        <input type="text" name="contact" class="form-control contactVal" id="contact">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label for="contact" class="form-label">Title</label>
                        <input type="text" name="contact" class="form-control contactVal" id="contact">
                    </div>
                </div>
                <div class="mb-5">
                    <div class="row">

                    </div>
                </div>




                <div class="row">
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="bill to" class="form-label">Bill To</label>
                            <input type="text" name="bill_to" class="form-control billVal" id="bill_to">

                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="ship_to" class="form-label">Ship To </label>
                            <input type="text" name="ship_to" class="form-control shipVal" id="ship_to">

                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="tax" class="form-label">Tax </label>
                            <input type="text" name="tax" class="form-control taxVal" id="tax">

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="schedule_date" class="form-label">Schedule Date </label>
                            <input type="date" name="schedule_date" class="form-control schedule_dateVal"
                                id="schedule_date">

                        </div>
                    </div>



                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="note" class="form-label">Note</label>
                            <br>
                            <textarea name="notes" class="form-control notesVal" id="notes" cols="5" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="back_order" class="form-label">Back Order</label>
                            <br>
                            <textarea name="back_order" class="form-control back_orderVal" id="back_order" cols="5" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <table class="table table-bordered table-striped my-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="invoiceTbody">

                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary btnSubmit">Submit</button>


            </form>
        </div>
    </div>

    <div class="searchSuggestion">
        <div class="searchSugRow"></div>

    </div>



    </x-admin.layout>

    <script>
        $(document).ready(function() {
            $('#add_remove').click(function() {
                // Check if the checkbox is checked
                if ($('#form_feilds_check').is(':checked')) {
                    // If checked, uncheck it and hide the form fields
                    $('#form_feilds_check').prop('checked', false);
                    $('#FormToggle').hide();
                    $("#add_remove").text('+ Add a title & summary');
                } else {
                    // If not checked, check it and show the form fields
                    $('#form_feilds_check').prop('checked', true);
                    $('#FormToggle').show();
                    $("#add_remove").text('- Remove title & summary');
                }
            });

            // Set initial state based on checkbox
            if ($('#form_feilds_check').is(':checked')) {
                $('#FormToggle').show();
                $("#add_remove").text('- Remove title & summary');
            } else {
                $('#FormToggle').hide();
                $("#add_remove").text('+ Add a title & summary');
            }


            $(".formValidation").submit(function(event) {
                event.preventDefault();
                let isValid = true;
                $(this)
                    .find(
                        ".companyVal, .projectVal, .contractVal, .billVal, .shipVal, .taxVal, .schedule_dateVal, .notesVal, .back_orderVal"
                    )
                    .each(function() {
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
            <td>
                <div class="searchNameInp">
                    <input type="text" class="suggestion_input form-control" name="product" id="input-${rowCount}" autocomplete="off">

                    <input type="hidden" class="product-id noVal" name="product_id" id="product-id-${rowCount}">
                    <input type="hidden" class="moq noVal" name="moq" id="moq-${rowCount}">
                    <input type="hidden" class="supplier-id noVal" name="supplier_id" id="supplier-id-${rowCount}">
                </div>
            </td>
            <td><input type="number" class="amount form-control" name="amount" id="amount-${rowCount}" autocomplete="off"></td>
            <td style="position:relative"><input type="number" class="form-control qty-input" name="qty" id="qty-${rowCount}" autocomplete="off"></td>
            <td><input type="number" disabled class="form-control total" name="total" id="" autocomplete="off"></td>
            <td><button type="button" class="btn btn-danger delete-row"><i class="bi bi-trash3"></i></button></td>
        </tr>`;
            }

            for (let i = 1; i <= defaultLine; i++) {
                $('.invoiceTbody').append(createNewRow(i));
            }

            function setUpRowEventHandlers() {
                $(document).mouseup(function(e) {
                    var container = $('.searchNameInp');
                    var suggestion = $('.searchSuggestion');
                    if (!container.is(e.target) && container.has(e.target).length === 0 && !suggestion.is(e
                            .target) && suggestion.has(e.target).length === 0) {
                        suggestion.hide();
                    }
                });

                $(document).on('focus', '.suggestion_input', function() {
                    $(this).closest('.searchNameInp').find('.searchSuggestion').show();
                });

                $(document).on('keyup', '.suggestion_input', function() {
                    var inputVal = $(this).val().trim();
                    var suggestionList = $(this).closest('.searchNameInp').find('.searchSuggestion');

                    if (inputVal) {
                        suggestionList.show();
                    } else {
                        suggestionList.hide();
                    }
                });

                $(document).on('click', '.searchSugRow', function() {
                    var productId = $(this).data('product-id');
                    var supplierId = $(this).data('supplier-id');
                    var moq = $(this).data('moq');
                    var value = $(this).text();
                    var parentDiv = $(this).closest('.searchNameInp');
                    parentDiv.find('.suggestion_input').val(value);
                    parentDiv.find('.moq').val(moq);
                    parentDiv.find('.product-id').val(productId);
                    parentDiv.find('.supplier-id').val(supplierId);
                    parentDiv.find('.searchSuggestion').hide();
                    parentDiv.find('.qty-input').trigger('keyup');
                });

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
                    $('.invoiceTbody tr:last-child').find('select, input').each(function() {
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

            function calculateTotal() {
                $('.invoiceTbody tr').each(function() {
                    var amount = $(this).find('.amount').val().trim();
                    var qty = $(this).find('.qty-input').val().trim();
                    var totalRow = $(this).find('.total');

                    if (amount && qty) {
                        var total = parseFloat(amount) * parseInt(qty);
                        totalRow.val(total.toFixed(2));
                    } else {
                        totalRow.val('');
                    }
                });
            }

            $(document).on('keyup', '.amount, .qty-input', function() {
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
    </style>
