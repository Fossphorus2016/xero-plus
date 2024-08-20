<x-admin.layouts title="Invite a user">

    <nav class="bg-white p-5">
        <h1>
            Invite a user

        </h1>
    </nav>

    <div class="container my-5 card shadow p-5">
        <form action="" id="invite_form">
            <div>
                <h1>Personal Details</h1>
                <div class="row card shadow p-5">



                    <div class="col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="col-md-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>


                </div>
            </div>

            <hr>

            <div class="container my-4">
                <h1 class="mb-4">Permissions</h1>

                <div class="row card shadow p-5 mb-4">
                    <div class="col-md-12">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="project_check">
                            <label class="form-check-label" for="project_check">
                                Projects
                            </label>
                        </div>
                        <div id="project_para">
                            <p>Allow this user to access Projects. There may be a per active user cost.</p>
                        </div>
                        <div id="access" class="my-3" style="display: none;">
                            <h6>How much access do they need?</h6>
                            <div>
                                <ul class="nav nav-tabs nav-line-tabs mb-4 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_tab_pane_1">Limited</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">Standard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3">Admin</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                    <p>Enable ‘Business and accounting’ to use Projects with other Xero business-related
                                        features such as invoicing</p>
                                    <div class="alert alert-primary" role="alert">
                                        This limited role is read only but their own time entries can be added and
                                        edited. It excludes all financial information.<a href="#"
                                            class="alert-link"></a>.
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                    <p>Enable ‘Business and accounting’ to use Projects with other Xero business-related
                                        features such as invoicing</p>
                                    <div class="alert alert-primary" role="alert">
                                        This role suits staff who run Projects but don't need to see staff and project
                                        cost information.<a href="#" class="alert-link"></a>.
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                                    <p>Enable ‘Business and accounting’ to use Projects with other Xero business-related
                                        features such as invoicing</p>
                                    <div class="alert alert-primary" role="alert">
                                        This role has the same access to Projects as Standard and includes staff and
                                        project cost information. It's ideal for business owners and admin staff.<a
                                            href="#" class="alert-link"></a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="row card shadow p-4">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="payroll">
                                <label class="form-check-label" for="payroll">
                                    Payroll admin
                                </label>
                                <p>Allow this user full payroll access, including preparing and posting pay runs and
                                    payroll reporting.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="row card shadow p-4">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="business">
                                <label class="form-check-label" for="payroll">
                                    Business and accounting
                                </label>

                            </div>

                            <div id="business_accounting" style="display: none">
                                <div class="my-3">
                                    <h6>How much access do they need?</h6>
                                </div>
                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#invoice_only">Invoice
                                            only</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#standard">Standard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#advoiser">Advoiser</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#read_only">Read only</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="invoice_only" role="tabpanel">
                                        <div class="alert alert-primary" role="alert">
                                            This limited role suits people who create quotes and invoices or enter
                                            bills,
                                            but don’t need access to bank accounts or reports.<a href="#"
                                                class="alert-link"></a>.
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Sales and purchases</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio"
                                                        name="sales_purchase" id="draft">
                                                    <label class="form-check-label" for="draft">Only create
                                                        draft</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio"
                                                        name="sales_purchase" id="sales">
                                                    <label class="form-check-label" for="sales">Sales (quoting and
                                                        invoicing)</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio"
                                                        name="sales_purchase" id="purchase">
                                                    <label class="form-check-label" for="purchase">Purchases (purchase
                                                        orders and bills)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="sales_purchase" id="approve">
                                                    <label class="form-check-label" for="approve">Approve and pay
                                                        (sales and purchase)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Bank accounts and balances</h6>
                                                <h6>Bank account admin</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio"
                                                        name="sales_purchase" id="" disabled>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="bank_account_admin" id="bank_account_admin">
                                                    <label class="form-check-label" for="bank_account_admin"
                                                        id="bank_account_label" style="display: none;">
                                                        Can add and edit bank account details held for customers and
                                                        suppliers
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Bank accounts and balances</h6>
                                                <h6>Bank account admin</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio"
                                                        name="sales_purchase" id="" disabled>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="bank_account_admin" id="bank_account_admin">
                                                    <label class="form-check-label" for="bank_account_admin"
                                                        id="bank_account_label" style="display: none;">
                                                        Can add and edit bank account details held for customers and
                                                        suppliers
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="standard" role="tabpanel">
                                        <div class="alert alert-primary" role="alert">
                                            This role suits business owners and admin staff that manage the day-to-day
                                            business and accounting. <a href="#" class="alert-link"></a>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Sales and purchases</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <i class="bi bi-check-lg fs-2 text-dark"></i>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 style="margin-bottom: 5px;">Bank accounts and balances</h6>
                                                <h6 style="margin-top: 45px;">Bank account admin</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio"
                                                        name="bank_account_balances" id="bank_account_balances_1">
                                                    <label class="form-check-label" for="bank_account_balances_1">
                                                        Reconcile and edit statement line (non-cash coding)
                                                    </label>
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio"
                                                        name="bank_account_balances" id="bank_account_balances_2">
                                                    <label class="form-check-label" for="bank_account_balances_2">
                                                        Bulk reconciliation and statement line editing (cash coding)
                                                    </label>
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="back_account_admin" id="back_account_admin" checked>
                                                    <label class="form-check-label" for="back_account_admin">
                                                        Can add and edit bank accounts details held for customers and
                                                        suppliers
                                                    </label>
                                                </div>
                                            </div>


                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Reports</h6>
                                                <h6>Publish reports</h6>
                                                <h6>Set lock dates</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" checked
                                                        name=""id="_">
                                                    <label class="form-check-label">
                                                        View and rerun reports
                                                    </label>
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name=""
                                                        disabled>
                                                    <label class="form-check-label" for="">

                                                    </label>
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name=""
                                                        disabled>
                                                    <label class="form-check-label" for="">

                                                    </label>
                                                </div>
                                            </div>



                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Reports</h6>
                                                <h6>Manage users</h6>

                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <i class="bi bi-check-lg fs-2 text-dark"></i>
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name="">
                                                    <label class="form-check-label" for="">
                                                        Can invite new users, edit user roles, and delete users
                                                    </label>
                                                </div>


                                            </div>



                                        </div>





                                    </div>

                                    <div class="tab-pane fade" id="advoiser" role="tabpanel">
                                        <div class="alert alert-primary" role="alert">
                                            This role has full access and includes advanced accounting features. It’s
                                            ideal for accountants and bookkeepers. <a href="#"
                                                class="alert-link"></a>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Sales and purchases</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <i class="bi bi-check-lg fs-2 text-dark"></i>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Bank accounts and balances</h6>
                                                <h6>Bank account admin</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <i class="bi bi-check-lg fs-2 text-dark"></i>
                                                </div>


                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name=""
                                                        id="" checked>
                                                    <label class="form-check-label" for="">
                                                        Can add and edit bank accounts details held for customers and
                                                        suppliers
                                                    </label>
                                                </div>
                                            </div>


                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Reports</h6>
                                                <h6>Publish reports</h6>
                                                <h6>Set lock dates</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <i class="bi bi-check-lg fs-2 text-dark"></i>
                                                </div>

                                                <div class="form-check mb-3">
                                                    <i class="bi bi-check-lg fs-2 text-dark"></i>
                                                </div>

                                                <div class="form-check mb-3">
                                                    <i class="bi bi-check-lg fs-2 text-dark"></i>
                                                </div>
                                            </div>



                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Edit settings</h6>
                                                <h6>Manage users</h6>

                                            </div>
                                            <div class="col-6 text-right">
                                                <i class="bi bi-check-lg fs-2 text-dark"></i>

                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" name="">
                                                    <label class="form-check-label" for="">
                                                        Can invite new users, edit user roles, and delete users
                                                    </label>
                                                </div>


                                            </div>



                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="read_only" role="tabpanel">
                                        <div class="alert alert-primary" role="alert">
                                            This role has full access but can’t add or make changes. It suits company
                                            directors, trustees and auditors.<a href="#" class="alert-link"></a>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Sales and purchases</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <i class="bi bi-check-lg fs-2 text-dark"></i> Read only

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Bank accounts and balances</h6>
                                                <h6>Bank account admin</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <i class="bi bi-check-lg fs-2 text-dark"></i> Read only
                                                </div>


                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" disabled
                                                        name="" id="">
                                                </div>
                                            </div>


                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Reports</h6>
                                                <h6>Publish reports</h6>
                                                <h6>Set lock dates</h6>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <i class="bi bi-check-lg fs-2 text-dark"></i> Read only
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" disabled
                                                        name="" id="">
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" disabled
                                                        name="" id="">
                                                </div>
                                            </div>



                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Edit settings</h6>
                                                <h6>Manage users</h6>

                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" disabled
                                                        name="" id="">
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" disabled
                                                        name="" id="">
                                                </div>


                                            </div>



                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="mb-5">
                <div class="row">
                    <h1>Personalize the invite</h1>
                    <div class="col-md-12 card shadow p-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="message">
                            <label class="form-check-label" for="message">
                                Add a message
                            </label>
                        </div>

                        <div id="message_div" style="display: none">
                            <textarea name="message" class="form-control" id="message_textarea" cols="30" rows="5"
                                placeholder="Type your message here..."></textarea>
                        </div>
                    </div>
                </div>

            </div>


            <div >
                <button class="btn btn-primary">submit</button>
            </div>

        </form>
    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('project_check');
            const paragrapgh = document.getElementById('project_para');
            const access_div = document.getElementById('access');


            function update_access_visibility_div_projects() {
                if (checkbox.checked) {
                    access_div.style.display = 'block';
                    paragrapgh.style.display = 'none';
                } else {
                    access_div.style.display = 'none';
                    paragrapgh.style.display = 'block';
                }
            }


            update_access_visibility_div_projects();


            checkbox.addEventListener('change', update_access_visibility_div_projects);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('business');
            const business_accounting = document.getElementById('business_accounting');
            const purchase_radio = document.getElementById('purchase');
            const approve_radio = document.getElementById('approve');
            const bank_account_checkbox = document.getElementById('bank_account_admin');
            const bank_account_label = document.getElementById('bank_account_label');


            function update_access_visibility_div_business_accounting() {
                if (checkbox.checked) {
                    business_accounting.style.display = 'block';

                } else {
                    business_accounting.style.display = 'none';

                }
            }


            update_access_visibility_div_business_accounting();


            checkbox.addEventListener('change', update_access_visibility_div_business_accounting);
        });

        document.addEventListener('DOMContentLoaded', function() {



            function check_bank_account() {
                bank_account_checkbox.checked = true;
                bank_account_label.style.display = 'block';
            }


            function uncheck_bank_account() {
                bank_account_checkbox.checked = false;
                bank_account_label.style.display = 'none';
            }


            purchase_radio.addEventListener('change', function() {
                if (purchase_radio.checked) {
                    check_bank_account();
                }
            });

            approve_radio.addEventListener('change', function() {
                if (approve_radio.checked) {
                    check_bank_account();
                }
            });


            const otherRadios = [document.getElementById('draft'), document.getElementById('sales')];

            otherRadios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    if (radio.checked) {
                        uncheck_bank_account();
                    }
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('message');

            const message_div = document.getElementById('message_div');


            function update_access_visibility_div_message() {
                if (checkbox.checked) {
                    message_div.style.display = 'block';

                } else {
                    message_div.style.display = 'none';

                }
            }


            update_access_visibility_div_message();


            checkbox.addEventListener('change', update_access_visibility_div_message);
        });
    </script>


</x-admin.layouts>
