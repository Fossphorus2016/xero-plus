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
                    <form action="" method="" id="contact_form">
                        @csrf
                        <div id="contact-details" class="pt-3">

                            <div class="card shadow p-5">
                                <h4>Contact details</h4>


                                <div class="form-group mb-5">
                                    <label for="contact_name">Contact name (required)</label>
                                    <input type="text" class="form-control" id="contact_name"
                                        placeholder="A business or person's name" required>
                                    <label for="" id="error_contact_name" class="text-danger fw-bold "
                                        style="display: none">Name is required</label>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="account_number">Account number</label>
                                    <input type="text" class="form-control" id="account_number"
                                        placeholder="Enter account number">
                                    <label for="" id="error_account_number" class="text-danger fw-bold "
                                        style="display: none">Account number is required</label>
                                    <span class="text-muted">Add a unique account number to identify, reference, and
                                        search
                                        for the contact.</span>

                                </div>

                                <h4>Primary Person</h4>

                                <div class="row my-5">
                                    <div class="col-md-6">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name">
                                        <label for="" id="error_first_name" class="text-danger fw-bold "
                                            style="display: none">First name is required</label>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name">
                                        <label for="" id="error_last_name" class="text-danger fw-bold "
                                            style="display: none">Last name is required</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="name@email.com">
                                        <label for="invalid_email" id="invalid_email" class="text-danger fw-bold"
                                            style="display: none;">Invalid
                                            email</label>
                                        <label for="" id="error_email" class="text-danger fw-bold "
                                            style="display: none">
                                            Email is required
                                        </label>
                                    </div>
                                </div>

                                <div class="row my-5">
                                    <h4>Additional People</h4>

                                    <div class="col-md-6">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_person_modal">
                                            +Add another person</a>
                                    </div>
                                </div>


                                <div id="business" class="pt-3">
                                    <h4>Business information</h4>

                                    <div class="row phone mb-5" id="phone_div">
                                        <label for="phone_number">Phone number</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Country"
                                                id="phone_country">
                                            <label for="" id="error_phone_country"
                                                class="text-danger fw-bold" style="display: none">Country is
                                                required</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Area"
                                                id="phone_area">
                                            <label for="" id="error_phone_area" class="text-danger fw-bold"
                                                style="display: none">Area is required</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Number"
                                                id="phone_number">
                                            <label for="" id="error_phone_number" class="text-danger fw-bold"
                                                style="display: none">Number is required</label>
                                        </div>
                                    </div>

                                    <div class="row fax mb-5 hidden" id="fax_div">
                                        <label for="fax_number">Fax number</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Country"
                                                id="fax_country">
                                            <label for="" id="error_fax_country" class="text-danger fw-bold"
                                                style="display: none">Country is required</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Area"
                                                id="fax_area">
                                            <label for="" id="error_fax_area" class="text-danger fw-bold"
                                                style="display: none">Area is required</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Number"
                                                id="fax_number">
                                            <label for="" id="error_fax_number" class="text-danger fw-bold"
                                                style="display: none">Number is required</label>
                                        </div>
                                    </div>

                                    <div class="row mobile mb-5 hidden" id="mobile_div">
                                        <label for="mobile-number">Mobile number</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Country"
                                                id="mobile_country">
                                            <label for="" id="error_mobile_country"
                                                class="text-danger fw-bold" style="display: none">Country is
                                                required</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Area"
                                                id="mobile_area">
                                            <label for="" id="error_mobile_area" class="text-danger fw-bold"
                                                style="display: none">Area is required</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Number"
                                                id="mobile_number">
                                            <label for="" id="error_mobile_number"
                                                class="text-danger fw-bold" style="display: none">Number is
                                                required</label>
                                        </div>
                                    </div>

                                    <div class="row direct_dial mb-5 hidden" id="direct_dial_div">
                                        <label for="direct-dial-number">Direct Dial number</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Country"
                                                id="dial_country">
                                            <label for="" id="error_dial_country" class="text-danger fw-bold"
                                                style="display: none">Country is required</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Area"
                                                id="dial_area">
                                            <label for="" id="error_dial_area" class="text-danger fw-bold"
                                                style="display: none">Area is required</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Number"
                                                id="dial_number">
                                            <label for="" id="error_dial_number" class="text-danger fw-bold"
                                                style="display: none">Number is required</label>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <select id="contact_type" data-allow-clear="true" multiple="multiple"
                                                data-control="select2" data-placeholder="Select Category"
                                                class="form-select">
                                                <option value="Phone" selected>Phone</option>
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
                                            <label for="" id="error_website" class="text-danger fw-bold"
                                                style="display: none">Website is required</label>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <label for="business-registration-number">Business registration
                                                number</label>
                                            <input type="text" class="form-control"
                                                id="business_registration_number">
                                            <label for="" id="error_business_registration_number"
                                                class="text-danger fw-bold" style="display: none">Registration number
                                                is required</label>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <label for="business_notes">Business Notes</label>
                                            <textarea id="business_notes" class="form-control" rows="5"
                                                placeholder="Enter any additional business information here..."></textarea>
                                            <label for="" id="error_business_notes"
                                                class="text-danger fw-bold" style="display: none">Note is
                                                required</label>
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
                                            <label for="" id="error_bank_account_name"
                                                class="text-danger fw-bold" style="display: none">Bank acc name is
                                                required</label>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="bank_account_number">Bank account number</label>
                                            <input type="text" name="bank_account_number" id="bank_account_number"
                                                class="form-control" placeholder="e.g. 123456789">
                                            <label for="" id="error_bank_account_number"
                                                class="text-danger fw-bold" style="display: none">Bank acc number is
                                                required</label>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Details</label>
                                            <input type="text" name="" id="detail" class="form-control"
                                                placeholder="e.g. Rent">
                                            <label for="" id="error_detail" class="text-danger fw-bold"
                                                style="display: none">Detail is required</label>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Tax ID number</label>
                                            <input type="text" name="" id="tax_id_number"
                                                class="form-control" placeholder="e.g. 123456789">
                                            <label for="" id="error_tax_id_number"
                                                class="text-danger fw-bold" style="display: none">Tax Id number is
                                                required</label>
                                            <span>Enter your contact's Tax ID number if you'd like to show it on their
                                                invoices, credit notes, statements, and other PDF documents.</span>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="">Currency</label>
                                            <select id="currency-select" class="form-select">
                                                <optgroup label="My currencies">
                                                    <option value="AFN" selected>Afghan Afghani (default) - AFN
                                                    </option>
                                                </optgroup>
                                                <optgroup label="All currencies">
                                                    <option value="ALL">Albanian Lek - ALL</option>
                                                    <option value="AOA">Angolan Kwanza - AOA</option>
                                                    <option value="ARS">Argentine Peso - ARS</option>
                                                    <option value="AUD">Australian Dollar - AUD</option>
                                                    <option value="BAM">Bosnia-Herzegovina Convertible Mark - BAM
                                                    </option>
                                                    <option value="BBD">Barbadian Dollar - BBD</option>
                                                    <option value="BDT">Bangladeshi Taka - BDT</option>
                                                    <option value="BMD">Bermudian Dollar - BMD</option>
                                                    <option value="BRL">Brazilian Real - BRL</option>
                                                    <option value="BSD">Bahamian Dollar - BSD</option>
                                                    <option value="BTN">Bhutanese Ngultrum - BTN</option>
                                                    <option value="BZD">Belize Dollar - BZD</option>
                                                    <option value="CAD">Canadian Dollar - CAD</option>
                                                    <option value="CDF">Congolese Franc - CDF</option>
                                                    <option value="CHF">Swiss Franc - CHF</option>
                                                    <option value="CLP">Chilean Peso - CLP</option>
                                                    <option value="CNY">Chinese Yuan - CNY</option>
                                                    <option value="CRC">Costa Rican Colón - CRC</option>
                                                    <option value="CUC">Cuban Convertible Peso - CUC </option>
                                                    <option value="CUP">Cuban Peso - CUP</option>
                                                    <option value="DZD">Algerian Dinar</option>
                                                    <option value="EEK">Estonian Kroon</option>
                                                    <option value="EGP">Egyptian Pound</option>
                                                    <option value="ERN">Eritrean Nakfa</option>
                                                    <option value="ETB">Ethiopian Birr</option>
                                                    <option value="GMD">Gambian Dalasi</option>
                                                    <option value="GNF">Guinean Franc</option>
                                                    <option value="GTQ">Guatemalan Quetzal</option>
                                                    <option value="GYD">Guyanese dollar</option>
                                                    <option value="HKD">Hong Kong Dollar</option>
                                                    <option value="HNL">Honduran Lempira</option>
                                                    <option value="HRK">Croatian Kuna</option>
                                                    <option value="HTG">Haitian Gourde</option>
                                                    <option value="HUF">Hungarian Forint</option>
                                                    <option value="IDR">Indonesian Rupiah</option>
                                                    <option value="ILS">Israeli Shekel</option>
                                                    <option value="INR">Indian Rupee</option>
                                                    <option value="IQD">Iraqi Dinar</option>
                                                    <option value="KES">Kenyan Shilling</option>
                                                    <option value="KGS">Kyrgystani Som</option>
                                                    <option value="KHR">Cambodian riel</option>
                                                    <option value="KMF">Comorian Franc</option>
                                                    <option value="KPW">North Korean Won</option>
                                                    <option value="KRW">South Korean won</option>
                                                    <option value="KZT">Kazakhstani Tenge</option>
                                                    <option value="LAK">Laotian Kip - LAK</option>
                                                    <option value="LBP">Lebanese Pound - LBP</option>
                                                    <option value="LKR">Sri Lankan Rupee - LKR</option>
                                                    <option value="LRD">Liberian Dollar - LRD</option>
                                                    <option value="LSL">Lesotho Loti - LSL</option>
                                                    <option value="MWK">Malawian Kwacha - MWK</option>
                                                    <option value="MXN">Mexican Peso - MXN</option>
                                                    <option value="MYR">Malaysian Ringgit - MYR</option>
                                                    <option value="NAD">Namibian Dollar - NAD</option>
                                                    <option value="NGN">Nigerian Naira - NGN</option>
                                                    <option value="NIO">Nicaraguan Córdoba - NIO</option>
                                                    <option value="NOK">Norwegian Krone - NOK</option>
                                                    <option value="NPR">Nepalese Rupee - NPR</option>
                                                    <option value="NZD">New Zealand Dollar - NZD</option>
                                                    <option value="PAB">Panamanian Balboa - PAB</option>
                                                    <option value="AED">United Arab Emirates Dirham - AED</option>
                                                    <option value="AMD">Armenian Dram - AMD</option>
                                                    <option value="ANG">Netherlands Antillean Guilder - ANG</option>
                                                    <option value="AWG">Aruban Florin - AWG</option>
                                                    <option value="AZN">Azerbaijani Manat - AZN</option>
                                                    <option value="BGN">Bulgarian Lev - BGN</option>
                                                    <option value="BHD">Bahraini Dinar - BHD</option>
                                                    <option value="BIF">Burundian Franc - BIF</option>
                                                    <option value="BND">Brunei Dollar - BND</option>
                                                    <option value="BOB">Bolivian Boliviano - BOB</option>
                                                    <option value="BWP">Botswanan Pula - BWP</option>
                                                    <option value="BYR">BYR</option>
                                                    <option value="COP">Colombian Peso</option>
                                                    <option value="CVE">Cape Verdean Escudo</option>
                                                    <option value="CZK">Czech Koruna</option>
                                                    <option value="DJF">Djiboutian Franc</option>
                                                    <option value="DKK">Danish Krone</option>
                                                    <option value="DOP">Dominican Peso</option>
                                                    <option value="EUR">Euro</option>
                                                    <option value="FJD">Fijian Dollar</option>
                                                    <option value="FKP">Falkland Islands Pound</option>
                                                    <option value="GBP">British Pound</option>
                                                    <option value="GEL">Georgian Lari</option>
                                                    <option value="GHS">Ghanaian Cedi</option>
                                                    <option value="GIP">Gibraltar Pound</option>
                                                    <option value="IRR">Iranian Rial</option>
                                                    <option value="ISK">Icelandic Króna</option>
                                                    <option value="JMD">Jamaican Dollar</option>
                                                    <option value="JOD">Jordanian Dinar</option>
                                                    <option value="JPY">Japanese Yen</option>
                                                    <option value="KWD">Kuwaiti Dinar</option>
                                                    <option value="KYD">Cayman Islands Dollar</option>
                                                    <option value="LTL">LTL</option>
                                                    <option value="LVL">LVL</option>
                                                    <option value="LYD">Libyan Dinar</option>
                                                    <option value="MAD">Moroccan Dirham</option>
                                                    <option value="MDL">Moldovan Leu</option>
                                                    <option value="MGA">Malagasy Ariary</option>
                                                    <option value="MKD">Macedonian Denar</option>
                                                    <option value="MKK">Myanmar Kyat</option>
                                                    <option value="MNT">Mongolian Tugrik - MNT</option>
                                                    <option value="MOP">Macanese Pataca - MOP</option>
                                                    <option value="MRO">MRO</option>
                                                    <option value="MUR">Mauritian Rupee - MUR</option>
                                                    <option value="MVR">Maldivian Rufiyaa - MVR</option>
                                                    <option value="MZN">Mozambican Metical - MZN</option>
                                                    <option value="OMR">Omani Rial - OMR</option>
                                                    <option value="PGK">Papua New Guinean Kina - PGK</option>
                                                    <option value="PLN">Polish Zloty - PLN</option>
                                                    <option value="PYG">Paraguayan Guarani - PYG</option>
                                                    <option value="RON">Romanian Leu - RON</option>
                                                    <option value="RUB">Russian Rouble - RUB</option>
                                                    <option value="SGD">Singapore Dollar - SGD</option>
                                                    <option value="STD">STD</option>
                                                    <option value="SYP">Syrian Pound - SYP</option>
                                                    <option value="TRY">Turkish Lira - TRY</option>
                                                    <option value="TTD">Trinidad & Tobago Dollar - TTD</option>
                                                    <option value="PEN">Peruvian Sol - PEN</option>
                                                    <option value="PHP">Philippine Peso - PHP</option>
                                                    <option value="PKR">Pakistani Rupee - PKR</option>
                                                    <option value="QAR">Qatari Riyal - QAR</option>
                                                    <option value="RSD">Serbian Dinar - RSD</option>
                                                    <option value="RWF">Rwandan Franc - RWF</option>
                                                    <option value="SBD">Solomon Islands Dollar - SBD</option>
                                                    <option value="SCR">Seychellois Rupee</option>
                                                    <option value="SDG">Sudanese pound</option>
                                                    <option value="SLL">Sierra Leonean Leone (1964—2022)</option>
                                                    <option value="SOS">Somali Shilling</option>
                                                    <option value="SRD">Suriname Dollar</option>
                                                    <option value="SZL">Swazi Lilangeni</option>
                                                    <option value="TJS">Tajikistani Somoni</option>
                                                    <option value="TOP">Tongan Pa'anga</option>
                                                    <option value="TWD">New Taiwan dollar</option>
                                                    <option value="UAH">Ukrainian hryvnia</option>
                                                    <option value="VEF">VEF</option>
                                                    <option value="VND">Vietnamese dong</option>
                                                    <option value="XAF">Central African CFA franc</option>
                                                    <option value="XCD">East Caribbean Dollar</option>
                                                    <option value="YER">Yemeni Rial</option>
                                                    <option value="SAR">Saudi Riyal</option>
                                                    <option value="SEK">Swedish Krona</option>
                                                    <option value="SHP">St. Helena Pound</option>
                                                    <option value="SVC">Salvadoran Colón</option>
                                                    <option value="THB">Thai Bhat</option>
                                                    <option value="TMT">Turkmenistani Manat</option>
                                                    <option value="TND">Tunisian Dinar</option>
                                                    <option value="USD">US Dollar</option>
                                                    <option value="VUV">Vanuatu Vatu</option>
                                                    <option value="ZMK">ZMK</option>
                                                    <option value="ZWD">ZWD</option>
                                                    <option value="TZS">Tanzanian Shilling</option>
                                                    <option value="UGX">Ugandan Shilling</option>
                                                    <option value="UYU">Peso Uruguayo</option>
                                                    <option value="UZS">Uzbekistani Som</option>
                                                    <option value="WST">Samoan Tala</option>
                                                    <option value="XOF">West African CFA franc</option>
                                                    <option value="XPF">CFP Franc</option>
                                                    <option value="ZAR">South African Rand</option>
                                                    <option value="ZMW">Zambian Kwacha</option>
                                                    <option value="SKK">SKK</option>
                                                    <option value="BYN">BYN</option>
                                                    <option value="STN">São Tomé and Príncipe dobra</option>
                                                    <option value="MRU">Mauritanian ouguiya</option>
                                                    <option value="CLF">CLF</option>
                                                    <option value="MXV">MXV</option>
                                                    <option value="VES">Venezuelan Bolívar</option>
                                                    <option value="SLE">SLE</option>
                                                </optgroup>
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
                                            <input type="text" name="" id="sales_account"
                                                class="form-control" placeholder="Select sales account">
                                            <label for="" id="error_sales_account"
                                                class="text-danger fw-bold" style="display: none">Sales account is
                                                required</label>
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label for="invoice_due_date">Invoice due date</label>
                                            <div class="d-flex">
                                                <input type="date" name="invoice_due_date" id="invoice_due_date"
                                                    class="form-control me-2" placeholder="e.g. 123456789">
                                                <label for="" id="error_invoice_due_date"
                                                    class="text-danger fw-bold" style="display: none">Due date is
                                                    required</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="Off the following month">off the following month
                                                    </option>
                                                    <option
                                                        value="day(s) after the
                                                        invoice date">
                                                        day(s) after the
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
                                            <input type="number" class="form-control" name="" id="discount"
                                                placeholder="0.00">
                                            <label for="" id="error_discount" class="text-danger fw-bold"
                                                style="display: none">Discount is required</label>
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
                                                <input type="date" name="" id="bill_invoice_due_date"
                                                    class="form-control me-2" placeholder="e.g. 123456789">
                                                <label for="" id="error_bill_invoice_due_date"
                                                    class="text-danger fw-bold" style="display: none">Due date is
                                                    required</label>
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
                            <button class="btn btn-primary" type="button" onclick="validate()">Submit</button>
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
                            <input type="text" class="form-control" id="add_first_name">
                            <label for="" id="error_add_first_name" class="text-danger fw-bold"
                                style="display: none">First name is required</label>
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" id="add_last_name">
                            <label for="" id="error_add_last_name" class="text-danger fw-bold"
                                style="display: none">Last name is required</label>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 mb-5">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="add_email" placeholder="name@email.com">
                            <label for="invalid_email" id="invalid_add_email" class="text-danger fw-bold"
                                style="display: none;">Invalid
                                email</label>
                            <label for="" id="error_add_email" class="text-danger fw-bold "
                                style="display: none">
                                Email is required
                            </label>
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
                    <form action="">
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
                                <label for="" id="error_attention" class="text-danger fw-bold"
                                    style="display: none">Attention is required</label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label for="address">Address</label>
                                <textarea name="bill_address" id="bill_address" cols="30" rows="10"></textarea>
                                <label for="" id="error_bill_address" class="text-danger fw-bold"
                                    style="display: none">Address is required</label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="city">City</label>
                                <input type="text" name="" id="bill_city" class="form-control">
                                <label for="" id="error_bill_city" class="text-danger fw-bold"
                                    style="display: none">City is required</label>
                            </div>
                            <div class="col-md-6">
                                <label for="state">State</label>
                                <input type="text" name="" id="bill_state" class="form-control">
                                <label for="" id="error_bill_state" class="text-danger fw-bold"
                                    style="display: none">State is required</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="zip">Zip code</label>
                                <input type="text" name="" id="bill_zip" class="form-control">
                                <label for="" id="error_bill_zip" class="text-danger fw-bold"
                                    style="display: none">Zip is required</label>
                            </div>
                            <div class="col-md-6">
                                <label for="country">Country</label>
                                <input type="text" name="" id="bill_country" class="form-control">
                                <label for="" id="error_bill_country" class="text-danger fw-bold"
                                    style="display: none">Country is required</label>
                            </div>
                        </div>

                        <div class="row my-5">
                            <div class="col-md-12" style="border:1px solid black;padding:10px">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Use as a delivery address</label>
                            </div>
                        </div>
                </div>
                </form>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="bill_Validate()">Add address</button>
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
                    <form action="">
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input type="search" name="" id="" class="form-control"
                                    placeholder="Search address in Afghanistan">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label for="attention">Attention</label>
                                <input type="text" name="" id="delivery_attention" class="form-control">
                                <label for="" id="error_delivery_attention" class="text-danger fw-bold"
                                    style="display: none">Attention is required</label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label for="address">Address</label>
                                <textarea name="" id="delivery_address" cols="30" rows="10"></textarea>
                                <label for="" id="error_delivery_address" class="text-danger fw-bold"
                                    style="display: none">Address is required</label>

                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="city">City</label>
                                <input type="text" name="" id="delivery_city" class="form-control">
                                <label for="" id="error_delivery_city" class="text-danger fw-bold"
                                    style="display: none">City is required</label>
                            </div>
                            <div class="col-md-6">
                                <label for="state">State</label>
                                <input type="text" name="" id="delivery_state" class="form-control">
                                <label for="" id="error_delivery_city" class="text-danger fw-bold"
                                    style="display: none">State is required</label>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="zip">Zip code</label>
                                <input type="text" name="" id="delivery_zip" class="form-control">
                                <label for="" id="error_delivery_zip" class="text-danger fw-bold"
                                    style="display: none">Zip is required</label>
                            </div>
                            <div class="col-md-6">
                                <label for="country">Country</label>
                                <input type="text" name="" id="delivery_country" class="form-control">
                                <label for="" id="error_delivery_country" class="text-danger fw-bold"
                                    style="display: none">Country is required</label>
                            </div>
                        </div>

                        <div class="row my-5">
                            <div class="col-md-12" style="border:1px solid black;padding:10px">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Use as a billing address</label>
                            </div>
                        </div>
                </div>
                </form>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="delivery_Validate()"> Add
                        address</button>
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
        $('#mobile_number').on('input', function(event) {
            var inputValue = $(this).val();

            // Check if the first character is not a plus sign
            if (inputValue.charAt(0) !== '+') {
                // Prepend a plus sign to the value
                inputValue = '+' + inputValue;
            }

            // Remove all characters except digits and plus sign
            var cleanedValue = inputValue.replace(/[^\d+]/g, '');

            // Set the cleaned value back to the input field
            $(this).val(cleanedValue);
        });
        $('#phone_number').on('input', function(event) {
            var inputValue = $(this).val();

            // Check if the first character is not a plus sign
            if (inputValue.charAt(0) !== '+') {
                // Prepend a plus sign to the value
                inputValue = '+' + inputValue;
            }

            // Remove all characters except digits and plus sign
            var cleanedValue = inputValue.replace(/[^\d+]/g, '');

            // Set the cleaned value back to the input field
            $(this).val(cleanedValue);
        });
        $('#fax_number').on('input', function(event) {
            var inputValue = $(this).val();

            // Check if the first character is not a plus sign
            if (inputValue.charAt(0) !== '+') {
                // Prepend a plus sign to the value
                inputValue = '+' + inputValue;
            }

            // Remove all characters except digits and plus sign
            var cleanedValue = inputValue.replace(/[^\d+]/g, '');

            // Set the cleaned value back to the input field
            $(this).val(cleanedValue);
        });
        $('#dial_number').on('input', function(event) {
            var inputValue = $(this).val();

            // Check if the first character is not a plus sign
            if (inputValue.charAt(0) !== '+') {
                // Prepend a plus sign to the value
                inputValue = '+' + inputValue;
            }

            // Remove all characters except digits and plus sign
            var cleanedValue = inputValue.replace(/[^\d+]/g, '');

            // Set the cleaned value back to the input field
            $(this).val(cleanedValue);
        });

        function validate() {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if ($("#contact_name").val() == "") {
                $("#contact_name").addClass("is-invalid");
                $("#error_contact_name").show();
                return false;
            } else {
                $("#contact_name").removeClass("is-invalid");
                $("#error_contact_name").hide();
            }

            if ($("#account_number").val() == "") {
                $("#account_number").addClass("is-invalid");
                $("#error_account_number").show();
                return false;
            } else {
                $("#account_number").removeClass("is-invalid");
                $("#error_account_number").hide();
            }

            if ($("#first_name").val() == "") {
                $("#first_name").addClass("is-invalid");
                $("#error_first_name").show();
                return false;
            } else {
                $("#first_name").removeClass("is-invalid");
                $("#error_first_name").hide();
            }

            if ($("#last_name").val() == "") {
                $("#last_name").addClass("is-invalid");
                $("#error_last_name").show();
                return false;
            } else {
                $("#last_name").removeClass("is-invalid");
                $("#error_last_name").hide();
            }

            var email = $("#email").val();
            if ($("#email").val() == "") {
                $("#email").addClass("is-invalid");
                $("#error_email").show();
                return;

            } else {
                $("#email").removeClass("is-invalid");
                $("#error_email").hide();
                $("#invalid_email").hide();
            }

            if (!emailRegex.test(email)) {
                $("#email").addClass("is-invalid");
                $("#invalid_email").show();
                return;
            } else {
                $("#email").removeClass("is-invalid");
                $("#error_email").hide();
                $("#invalid_email").hide();
            }
            if ($("#website").val() == "") {
                $("#website").addClass("is-invalid");
                $("#error_website").show();
                return false;
            } else {
                $("#website").removeClass("is-invalid");
                $("#error_website").hide();
            }
            if ($("#business_registration_number").val() == "") {
                $("#business_registration_number").addClass("is-invalid");
                $("#error_business_registration_number").show();
                return false;
            } else {
                $("#business_registration_number").removeClass("is-invalid");
                $("#error_business_registration_number").hide();
            }
            if ($("#business_notes").val() == "") {
                $("#business_notes").addClass("is-invalid");
                $("#error_business_notes").show();
                return false;
            } else {
                $("#business_notes").removeClass("is-invalid");
                $("#error_business_notes").hide();
            }
            if ($("#bank_account_name").val() == "") {
                $("#bank_account_name").addClass("is-invalid");
                $("#error_bank_account_name").show();
                return false;
            } else {
                $("#bank_account_name").removeClass("is-invalid");
                $("#error_bank_account_name").hide();
            }
            if ($("#bank_account_number").val() == "") {
                $("#bank_account_number").addClass("is-invalid");
                $("#error_bank_account_number").show();
                return false;
            } else {
                $("#bank_account_number").removeClass("is-invalid");
                $("#error_bank_account_number").hide();
            }
            if ($("#detail").val() == "") {
                $("#detail").addClass("is-invalid");
                $("#error_detail").show();
                return false;
            } else {
                $("#detail").removeClass("is-invalid");
                $("#error_detail").hide();
            }
            if ($("#tax_id_number").val() == "") {
                $("#tax_id_number").addClass("is-invalid");
                $("#error_tax_id_number").show();
                return false;
            } else {
                $("#tax_id_number").removeClass("is-invalid");
                $("#error_tax_id_number").hide();
            }
            if ($("#sales_account").val() == "") {
                $("#sales_account").addClass("is-invalid");
                $("#error_sales_account").show();
                return false;
            } else {
                $("#sales_account").removeClass("is-invalid");
                $("#error_sales_account").hide();
            }
            if ($("#invoice_due_date").val() == "") {
                $("#invoice_due_date").addClass("is-invalid");
                $("#error_invoice_due_date").show();
                return false;
            } else {
                $("#invoice_due_date").removeClass("is-invalid");
                $("#error_invoice_due_date").hide();
            }
            if ($("#discount").val() == "") {
                $("#discount").addClass("is-invalid");
                $("#error_discount").show();
                return false;
            } else {
                $("#discount").removeClass("is-invalid");
                $("#error_discount").hide();
            }

            if ($("#bill_invoice_due_date").val() == "") {
                $("#bill_invoice_due_date").addClass("is-invalid");
                $("#error_bill_invoice_due_date").show();
                return false;
            } else {
                $("#bill_invoice_due_date").removeClass("is-invalid");
                $("#error_bill_invoice_due_date").hide();
            }


            $("#contact_form").submit();



        }
    </script>

</x-admin.layouts>
