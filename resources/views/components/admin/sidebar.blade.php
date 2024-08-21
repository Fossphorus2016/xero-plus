<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Aside Toolbarl-->

    <!--end::Aside Toolbarl-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5  " id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px"
            style="overflow-x: hidden !important; height: 778px;">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary     menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <a class="menu-link gap-3 {{ Route::is('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <span class="menu-bullet">

                        </span>
                        <span class="menu-title text-white">Dashboard</span>
                    </a>
                </div>



                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Route::is('contact', 'customer', 'supplier') ? 'hover show' : '' }}">
                    <span class="menu-link {{ Route::is('contact', 'customer', 'supplier') ? 'active' : '' }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <i class="bi bi-person-rolodex fs-2"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Contacts</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion " kt-hidden-height="312" style="">
                        <div class="menu-item">
                            <a class="menu-link " href="{{ route('contact') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('contact') ? 'text-dark ' : '' }}">Contact
                                </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('customer') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('customer') ? 'text-dark' : '' }}">Customer</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('supplier') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('supplier') ? 'text-dark' : '' }}">Supplier</span>
                            </a>
                        </div>




                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Route::is('all.project', 'time.entries', 'staff.overview', 'staff.permission', 'staff.rate') ? 'hover show' : '' }}">
                    <span
                        class="menu-link {{ Route::is('all.project', 'time.entries', 'staff.overview', 'staff.permission', 'staff.rate') ? 'active' : '' }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <i class="bi bi-person-workspace fs-2"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Projects</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion " kt-hidden-height="312" style="">
                        <div class="menu-item">
                            <a class="menu-link " href="{{ route('all.project') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('all.project') ? 'text-dark ' : '' }}">All
                                    Projects
                                </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('time.entries') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('time.entries') ? 'text-dark' : '' }}">Time
                                    Entries</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('staff.overview') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('staff.overview') ? 'text-dark' : '' }}">Staff
                                    Time Over view</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a>
                                <span class="">
                                    <span class=""><i class="bi bi-gear fs-2 text-dark"></i> Project
                                        settings</span>
                                </span>

                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('staff.permission') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('staff.permission') ? 'text-dark' : '' }}">Staff
                                    Permissions</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('staff.rate') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('staff.rate') ? 'text-dark' : '' }}">Staff
                                    Cost Rate</span>
                            </a>
                        </div>




                    </div>
                </div>

                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Route::is('bank', 'report', 'advanced', 'profit.loss', 'sales.tax', 'chart.of.account', 'fixed.asset') ? 'hover show' : '' }}">
                    <span
                        class="menu-link {{ Route::is('bank', 'report', 'advanced', 'profit.loss', 'sales.tax', 'chart.of.account', 'fixed.asset') ? 'active' : '' }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <i class="bi bi-person-square fs-2"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Accounting</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion " kt-hidden-height="312" style="">
                        <div class="menu-item">
                            <a class="menu-link " href="{{ route('bank') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('bank') ? 'text-dark ' : '' }}">Bank Accounts
                                </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('report') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('report') ? 'text-dark' : '' }}">Reports</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('advanced') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span
                                    class="menu-title {{ Route::is('advanced') ? 'text-dark' : '' }}">Advanced</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a>
                                <span class="">
                                    <span class=""><i class="bi bi-star-fill fs-2"></i> Reports</span>
                                </span>

                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('profit.loss') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('profit.loss') ? 'text-dark' : '' }}">Profit &
                                    Loss</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('sales.tax') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('sales.tax') ? 'text-dark' : '' }}">Sales Tax
                                    Report</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a>
                                <span class="">
                                    <span class=""><i class="bi bi-star-fill fs-2"></i> Advanced</span>
                                </span>

                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('chart.of.account') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('chart.of.account') ? 'text-dark' : '' }}">Chart
                                    of account</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('fixed.asset') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('fixed.asset') ? 'text-dark' : '' }}">Fixed
                                    assets</span>
                            </a>
                        </div>




                    </div>
                </div>

                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Route::is('invoice', 'payments', 'quotes') ? 'hover show' : '' }}">
                    <span class="menu-link {{ Route::is() ? 'active' : 'invoice', 'payments', 'quotes' }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <i class="bi bi-person-square fs-2"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Business</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion " kt-hidden-height="312" style="">
                        <div class="menu-item">
                            <a class="menu-link " href="{{ route('invoice') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('invoice') ? 'text-dark ' : '' }}">Invoice
                                </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('payments') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('payments') ? 'text-dark' : '' }}">Online
                                    payments</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('quotes') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title {{ Route::is('quotes') ? 'text-dark' : '' }}">Quotes</span>
                            </a>
                        </div>




                    </div>
                </div>
            </div>
            <!--end:Menu sub-->
        </div>
        <!--begin::Menu-->
        <!--end::Footer-->
    </div>
</div>
