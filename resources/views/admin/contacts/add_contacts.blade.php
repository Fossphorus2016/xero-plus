<x-admin.layouts title="Add Contacts">


    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 bg-light" style="border:0.5px solid black ">
                <nav class="nav flex-column py-3 sticky-top" style="top: 75px;">
                    <div style="border-bottom:0.2px solid black;padding:20px">
                        <a class="nav-link active" href="#contact-details">Contact details</a>
                        <a class="nav-link" href="#business">Business information</a>
                        <a class="nav-link" href="#addresses">Addresses</a>
                        <a class="nav-link" href="#financial_details">Financial details</a>
                    </div>
                    <h6>Default settings</h6>
                    <a class="nav-link ml-3" href="#sales_defaults">Sales defaults</a>
                    <a class="nav-link ml-3" href="#purchase_defaults">Purchase defaults</a>
                </nav>
            </div>

            <div class="col-md-9" style="border:0.5px solid black ">
                <div class="scrollable-content card" style="max-height: calc(100vh - 75px); overflow-y: auto;">
                    <form>
                        <div id="contact-details" class="pt-3">

                            <div class="card shadow p-5">
                                <h4>Contact details</h4>


                                <div class="form-group mb-5">
                                    <label for="contact_name">Contact name (required)</label>
                                    <input type="text" class="form-control" id="contact_name"
                                        placeholder="A business or person's name" required>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="account_number">Account number</label>
                                    <input type="text" class="form-control" id="account_number"
                                        placeholder="Enter account number">
                                    <span class="text-muted">Add a unique account number to identify, reference, and
                                        search
                                        for the contact.</span>
                                </div>

                                <h4>Primary Person</h4>

                                <div class="row my-5">
                                    <div class="col-md-6">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="name@email.com">
                                    </div>
                                </div>

                                <div class="row my-5">
                                    <h4>Additional People</h4>

                                    <div class="col-md-6">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_person_modal">+
                                            Add
                                            another person</a>
                                    </div>
                                </div>


                                <div id="business" class="pt-3">
                                    <h4>Business information</h4>

                                    <div class="row phone mb-5" id="phone_div">
                                        <label for="phone_number">Phone number</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Country">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Area">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Number">
                                        </div>
                                    </div>

                                    <div class="row fax mb-5" id="fax_div">
                                        <label for="fax_number">Fax number</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Country">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Area">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Number">
                                        </div>
                                    </div>

                                    <div class="row mobile mb-5" id="mobile_div">
                                        <label for="mobile-number">Mobile number</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Country">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Area">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Number">
                                        </div>
                                    </div>

                                    <div class="row direct_dial mb-5" id="direct_dial_div">
                                        <label for="direct-dial-number">Direct Dial number</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Country">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Area">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Number">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <select class="form-select" id="type_select"
                                                aria-label="Default select example">
                                                <option value="None">Select Type</option>
                                                <option value="Phone">Phone</option>
                                                <option value="Fax">Fax</option>
                                                <option value="Mobile">Mobile</option>
                                                <option value="Direct Dial">Direct Dial</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-5">
                                            <label for="website">Website</label>
                                            <input type="text" class="form-control" id="website"
                                                placeholder="www.example.com">
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <label for="business-registration-number">Business registration
                                                number</label>
                                            <input type="text" class="form-control"
                                                id="business-registration-number">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <label for="business-notes">Business Notes</label>
                                            <textarea id="business-notes" class="form-control" rows="5"
                                                placeholder="Enter any additional business information here..."></textarea>
                                            <span>Notes can only be viewed by people in your organisation</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div style="border:1px solid black"></div>
                            <div id="addresses" class="pt-3">
                                <div class="card shadow p-5">
                                    <h4>Addresses</h4>
                                    <div class="row">
                                        <div class="col-md-12 my-5"
                                            style="border: 2px solid black;width:50%;padding:10px;margin-left:10px">
                                            <div>
                                                <i class="bi bi-geo-alt-fill fs-2"><strong>Billing address</strong></i>
                                            </div>
                                            <div>
                                                <input type="search">
                                            </div>
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#add_address_modal">Enter address manually</a>
                                        </div>
                                    </div>
                                    <div class="row my-5">
                                        <div class="col-md-12 my-5"
                                            style="border: 2px solid black;width:50%;padding:10px;margin-left:10px">
                                            <div>
                                                <i class="bi bi-truck fs-2"><strong>Delivery address</strong></i>
                                            </div>
                                            <div>
                                                <input type="search">
                                            </div>
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#add_delivery_address_modal">Enter address manually</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-3" id="financial_details">
                                <div class="card shadow p-5">
                                    <h4>Financial details</h4>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="bank_account_name">Bank account name</label>
                                            <input type="text" name="bank_account_name" id="bank_account_name"
                                                class="form-control" placeholder="e.g. A business or person's name">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="bank_account_number">Bank account number</label>
                                            <input type="text" name="bank_account_number" id="bank_account_number"
                                                class="form-control" placeholder="e.g. 123456789">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Details</label>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="e.g. Rent">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Tax ID number</label>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="e.g. 123456789">
                                            <span>Enter your contact's Tax ID number if you'd like to show it on their
                                                invoices, credit notes, statements, and other PDF documents.</span>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Currency</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-3" id="sales_defaults">
                                <div class="card shadow p-5">
                                    <h4>Sales defaults</h4>
                                    <br>
                                    <p>Defaults can be overridden on individual invoices, quotes, and receive money</p>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Sales account</label>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Select sales account">
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="invoice_due_date">Invoice due date</label>
                                            <div class="d-flex">
                                                <input type="date" name="invoice_due_date" id="invoice_due_date"
                                                    class="form-control me-2" placeholder="e.g. 123456789">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="Off the following month">off the following month
                                                    </option>
                                                    <option value="">day(s) after the
                                                        invoice date</option>
                                                    <option value="day(s) after the invoice month">day(s) after the
                                                        invoice month</option>
                                                    <option value="of the current month">of the current month</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Amounts are</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="Use organisation settings">Use organisation settings
                                                </option>
                                                <option value="Tax inclusive">Tax inclusive</option>
                                                <option value="Tax exclusive">Tax exclusive</option>
                                                <option value="No tax">No tax</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Sales tax</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="Use organisation settings">Use organisation settings
                                                </option>
                                                <option value="Sales Tax on imports">Sales Tax on imports</option>
                                                <option value="Tax Exempt">Tax Exempt</option>
                                                <option value="Tax on Purchase">Tax on Purchase</option>
                                                <option value="Tax on Sales">Tax on Sales</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Discount</label>
                                            <input type="number" class="form-control" name="" id=""
                                                placeholder="0.00">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div style="border:1px solid black;padding:10px">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Block new invoices
                                                    when credit limit is reached</label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>



                            <div class="pt-3" id="purchase_defaults">
                                <div class="card shadow p-5">
                                    <h4>Purchase defaults</h4>
                                    <br>
                                    <p>Defaults can be overridden on individual spend money, bills and purchase orders
                                    </p>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Purchase account</label>
                                            <select id="account-select" name="account-select" class="form-select">
                                                <!-- Expenses -->
                                                <optgroup label="Expenses">
                                                    <option value="f33d324f-4ea2-41e4-a60f-410c6fab4747">310 - Cost of
                                                        Goods Sold</option>
                                                    <option value="ff866572-8179-400f-9106-a77253fc4fdc">400 -
                                                        Advertising</option>
                                                    <option value="8b12521c-57ce-4d69-91a0-8bda1ae6561b">404 - Bank
                                                        Fees</option>
                                                    <option value="76eb9ddf-8af0-49c8-9364-0d498ae3434b">408 - Cleaning
                                                    </option>
                                                    <option value="7dba9831-6cab-4932-9450-abf0a5875784">412 -
                                                        Consulting & Accounting</option>
                                                    <option value="274d2c20-fedd-49e4-916f-bdb42a06ee31">416 -
                                                        Depreciation</option>
                                                    <option value="0710d62f-cde9-44d3-b3af-13cd3a97b7d0">420 -
                                                        Entertainment</option>
                                                    <option value="4dc20db0-c49f-4005-b1ec-6da573cb00f0">425 - Freight
                                                        & Courier</option>
                                                    <option value="bffa0794-2420-4625-b1f6-191455fb12cd">429 - General
                                                        Expenses</option>
                                                    <option value="ccd13b54-79df-4540-a147-48a1372efd39">433 -
                                                        Insurance</option>
                                                    <option value="f19ffc51-9fac-49b2-ae61-f9223d413ee3">437 - Interest
                                                        Expense</option>
                                                    <option value="08bbe183-9b88-4b72-8f26-db8c20edbabd">441 - Legal
                                                        expenses</option>
                                                    <option value="0fbbd22f-2459-46ba-a4a5-b3bf7ea6b2f1">445 - Light,
                                                        Power, Heating</option>
                                                    <option value="feab52c3-73b8-4c54-974a-8a51f3e1bc3b">449 - Motor
                                                        Vehicle Expenses</option>
                                                    <option value="f4493dc7-e5a3-426d-aa1a-fab88e782d95">453 - Office
                                                        Expenses</option>
                                                    <option value="7a7af9dc-7a26-4031-af86-d1dee89e4d4c">461 - Printing
                                                        & Stationery</option>
                                                    <option value="1ebdbf6e-af30-430d-afa4-1dce8352e0ca">469 - Rent
                                                    </option>
                                                    <option value="5f06b8ee-e436-46f7-bfd8-e325c1392fbb">473 - Repairs
                                                        and Maintenance</option>
                                                    <option value="3adfa680-7bb3-4b2f-91d7-3cb53418642d">477 - Wages
                                                        and Salaries</option>
                                                    <option value="a759ef57-4686-44af-b122-0cd3bba64154">478 -
                                                        Superannuation</option>
                                                    <option value="2ead571d-f600-4c7d-bd28-9d3f9d1e0e27">485 -
                                                        Subscriptions</option>
                                                    <option value="5b6adccf-0af7-411e-aecf-ae969165ed29">489 -
                                                        Telephone & Internet</option>
                                                    <option value="6e52e225-57f4-42db-8512-abc9805c477f">493 - Travel -
                                                        National</option>
                                                    <option value="d8315977-7e81-45ee-92ab-e27526e3b63a">494 - Travel -
                                                        International</option>
                                                    <option value="9c460fea-2e8e-4ebd-a1c9-570bac035429">499 - Realised
                                                        Currency Gains</option>
                                                    <option value="0e419add-a004-4218-a348-58a7bc26d967">505 - Income
                                                        Tax Expense</option>
                                                </optgroup>

                                                <!-- Assets -->
                                                <optgroup label="Assets">
                                                    <option value="52cba91f-c843-4bff-a073-d59a1bc5971a">620 -
                                                        Prepayments</option>
                                                    <option value="e3685ed2-c1a9-418f-90fd-c3e66eb3edb4">710 - Office
                                                        Equipment</option>
                                                    <option value="5959ff47-8e8d-44a6-b5ed-73772e91d0c5">711 - Less
                                                        Accumulated Depreciation on Office Equipment</option>
                                                    <option value="236a3022-b85b-41cb-bee3-4a7318583218">720 - Computer
                                                        Equipment</option>
                                                    <option value="21cd4ae6-592b-49ea-9370-67f27b593e13">721 - Less
                                                        Accumulated Depreciation on Computer Equipment</option>
                                                </optgroup>

                                                <!-- Liabilities -->
                                                <optgroup label="Liabilities">
                                                    <option value="ce10455e-9f08-4d14-b339-287b27b7024e">820 - Sales
                                                        Tax</option>
                                                    <option value="dce60d98-b90b-4d93-8ff7-f517adb46914">825 - Employee
                                                        Tax Payable</option>
                                                    <option value="ed9b346e-a127-40ee-bd54-b9aef0279a96">826 -
                                                        Superannuation Payable</option>
                                                    <option value="788f6fbf-5f81-4d52-a397-5a0f3ea8ddbf">830 - Income
                                                        Tax Payable</option>
                                                    <option value="6364c734-2c73-49b9-83eb-62925721197b">840 -
                                                        Historical Adjustment</option>
                                                    <option value="197e2ca0-adb2-4ace-ba02-f975e2b5afd0">850 - Suspense
                                                    </option>
                                                </optgroup>
                                            </select>

                                        </div>


                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="invoice_due_date">Bill due date</label>
                                            <div class="d-flex">
                                                <input type="date" name="invoice_due_date" id="invoice_due_date"
                                                    class="form-control me-2" placeholder="e.g. 123456789">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="Off the following month">off the following month
                                                    </option>
                                                    <option value="">day(s) after the
                                                        invoice date</option>
                                                    <option value="day(s) after the invoice month">day(s) after the
                                                        invoice month</option>
                                                    <option value="of the current month">of the current month</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Amounts are</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="Use organisation settings">Use organisation settings
                                                </option>
                                                <option value="Tax inclusive">Tax inclusive</option>
                                                <option value="Tax exclusive">Tax exclusive</option>
                                                <option value="No tax">No tax</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Purchase tax</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="Use organisation settings">Use organisation settings
                                                </option>
                                                <option value="Sales Tax on imports">Sales Tax on imports</option>
                                                <option value="Tax Exempt">Tax Exempt</option>
                                                <option value="Tax on Purchase">Tax on Purchase</option>
                                                <option value="Tax on Sales">Tax on Sales</option>
                                            </select>
                                        </div>
                                    </div>



                                </div>
                            </div>


                        </div>

                        <div class="mb-4">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>






















    {{-- Add person modal --}}
    <div class="modal fade" id="add_person_modal" tabindex="-1" aria-labelledby="add_person_modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="add_person_modalLabel">Add person</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 mb-5">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="" placeholder="name@email.com">
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Include this person in emails sent to the
                            contact</label>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">Add person</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Billing Address --}}
    <div class="modal fade" id="add_address_modal" tabindex="-1" aria-labelledby="add_address_modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="add_address_modalLabel">Add billing address</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <input type="search" name="" id="" class="form-control"
                                placeholder="Search address in Afghanistan">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label for="attention">Attention</label>
                            <input type="text" name="" id="attention" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label for="address">Address</label>
                            <input type="text" name="" id="address_1" class="form-control mb-2"
                                placeholder="Address line 1">
                            <input type="text" name="" id="address_2" class="form-control mb-2"
                                placeholder="Address line 2">
                            <input type="text" name="" id="address_3" class="form-control mb-2"
                                placeholder="Address line 3">
                            <input type="text" name="" id="address_4" class="form-control"
                                placeholder="Address line 4">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="city">City</label>
                            <input type="text" name="" id="city" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="state">State</label>
                            <input type="text" name="" id="state" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="zip">Zip code</label>
                            <input type="text" name="" id="zip" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="country">Country</label>
                            <input type="text" name="" id="country" class="form-control">
                        </div>
                    </div>

                    <div class="row my-5">
                        <div class="col-md-12" style="border:1px solid black;padding:10px">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Use as a delivery address</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">Add address</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Delivery Address --}}
    <div class="modal fade" id="add_delivery_address_modal" tabindex="-1"
        aria-labelledby="add_delivery_address_modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="add_delivery_address_modalLabel">Add Delivery address</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <input type="search" name="" id="" class="form-control"
                                placeholder="Search address in Afghanistan">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label for="attention">Attention</label>
                            <input type="text" name="" id="attention" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label for="address">Address</label>
                            <input type="text" name="" id="address_1" class="form-control mb-2"
                                placeholder="Address line 1">
                            <input type="text" name="" id="address_2" class="form-control mb-2"
                                placeholder="Address line 2">
                            <input type="text" name="" id="address_3" class="form-control mb-2"
                                placeholder="Address line 3">
                            <input type="text" name="" id="address_4" class="form-control"
                                placeholder="Address line 4">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="city">City</label>
                            <input type="text" name="" id="city" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="state">State</label>
                            <input type="text" name="" id="state" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="zip">Zip code</label>
                            <input type="text" name="" id="zip" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="country">Country</label>
                            <input type="text" name="" id="country" class="form-control">
                        </div>
                    </div>

                    <div class="row my-5">
                        <div class="col-md-12" style="border:1px solid black;padding:10px">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Use as a billing address</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">Add address</button>
                </div>
            </div>
        </div>
    </div>



    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phone_div = document.getElementById('phone_div');
            const fax_div = document.getElementById('fax_div');
            const mobile_div = document.getElementById('mobile_div');
            const direct_dial_div = document.getElementById('direct_dial_div');
            const typeSelect = document.getElementById('type_select');

            // Hide all divs initially
            phone_div.style.display = 'none';
            fax_div.style.display = 'none';
            mobile_div.style.display = 'none';
            direct_dial_div.style.display = 'none';

            typeSelect.addEventListener('change', function() {
                // Hide all divs
                phone_div.style.display = 'none';
                fax_div.style.display = 'none';
                mobile_div.style.display = 'none';
                direct_dial_div.style.display = 'none';


                switch (typeSelect.value) {
                    case 'Phone':
                        phone_div.style.display = 'block';
                        break;
                    case 'Fax':
                        fax_div.style.display = 'block';
                        break;
                    case 'Mobile':
                        mobile_div.style.display = 'block';
                        break;
                    case 'Direct Dial':
                        direct_dial_div.style.display = 'block';
                        break;
                    default:

                        phone_div.style.display = 'none';
                        fax_div.style.display = 'none';
                        mobile_div.style.display = 'none';
                        direct_dial_div.style.display = 'none';
                        break;
                }
            });
        });
    </script>

</x-admin.layouts>
