<x-admin.layouts title="Bank Search">


    <nav class="bg-white p-5 d-flex justify-content-between">
        <h1>Add Bank Accounts</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add without bank feed
        </button>
    </nav>

    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card shadow p-5">
                <div class="card-body pt-0">
                    <div class="card-header px-0 align-content-center">
                        <div class="text-center">
                            <h1>Find account</h1>
                            <p>Search for a bank, credit card or payment provider to connect to Xero</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 10px;">
                        <input type="search" name="" id="" placeholder="search" style="width: 75%">
                        <select class="form-select" aria-label="Default select example">
                            <option value="0" selected>Afghanistan</option>
                            <option value="237">Åland Islands</option>
                            <option value="1">Albania</option>
                            <option value="2">Algeria</option>
                            <option value="3">American Samoa</option>
                            <option value="4">Andorra</option>
                            <option value="5">Angola</option>
                            <option value="6">Anguilla</option>
                            <option value="7">Antarctica</option>
                            <option value="8">Antigua and Barbuda</option>
                            <option value="9">Argentina</option>
                            <option value="10">Armenia</option>
                            <option value="11">Aruba</option>
                            <option value="12">Australia</option>
                            <option value="13">Austria</option>
                            <option value="14">Azerbaijan</option>
                            <option value="15">Bahamas</option>
                            <option value="16">Bahrain</option>
                            <option value="17">Bangladesh</option>
                            <option value="18">Barbados</option>
                            <option value="19">Belarus</option>
                            <option value="20">Belgium</option>
                            <option value="21">Belize</option>
                            <option value="22">Benin</option>
                            <option value="23">Bermuda</option>
                            <option value="24">Bhutan</option>
                            <option value="25">Bolivia</option>
                            <option value="238">Bonaire, Sint Eustatius and Saba</option>
                            <option value="26">Bosnia and Herzegovina</option>
                            <option value="27">Botswana</option>
                            <option value="28">Bouvet Island</option>
                            <option value="29">Brazil</option>
                            <option value="30">British Indian Ocean Territory</option>
                            <option value="31">Brunei Darussalam</option>
                            <option value="32">Bulgaria</option>
                            <option value="33">Burkina Faso</option>
                            <option value="34">Burundi</option>
                            <option value="35">Cambodia</option>
                            <option value="36">Cameroon</option>
                            <option value="37">Canada</option>
                            <option value="38">Cape Verde</option>
                            <option value="39">Cayman Islands</option>
                            <option value="40">Central African Republic</option>
                            <option value="41">Chad</option>
                            <option value="42">Chile</option>
                            <option value="44">Christmas Island</option>
                            <option value="45">Cocos (Keeling) Islands</option>
                            <option value="46">Colombia</option>
                            <option value="47">Comoros</option>
                            <option value="50">Cook Islands</option>
                            <option value="51">Costa Rica</option>
                            <option value="52">Cote D'Ivoire</option>
                            <option value="53">Croatia</option>
                            <option value="54">Cuba</option>
                            <option value="239">Curaçao</option>
                            <option value="55">Cyprus</option>
                            <option value="56">Czech Republic</option>
                            <option value="49">Democratic Republic of the Congo</option>
                            <option value="57">Denmark</option>
                            <option value="58">Djibouti</option>
                            <option value="59">Dominica</option>
                            <option value="60">Dominican Republic</option>
                            <option value="61">Ecuador</option>
                            <option value="62">Egypt</option>
                            <option value="63">El Salvador</option>
                            <option value="64">Equatorial Guinea</option>
                            <option value="65">Eritrea</option>
                            <option value="66">Estonia</option>
                            <option value="201">Eswatini</option>
                            <option value="67">Ethiopia</option>
                            <option value="68">Falkland Islands (Malvinas)</option>
                            <option value="69">Faroe Islands</option>
                            <option value="70">Fiji</option>
                            <option value="71">Finland</option>
                            <option value="72">France</option>
                            <option value="73">French Guiana</option>
                            <option value="74">French Polynesia</option>
                            <option value="75">French Southern Territories</option>
                            <option value="76">Gabon</option>
                            <option value="78">Georgia</option>
                            <option value="79">Germany</option>
                            <option value="80">Ghana</option>
                            <option value="81">Gibraltar</option>
                            <option value="82">Greece</option>
                            <option value="83">Greenland</option>
                            <option value="84">Grenada</option>
                            <option value="85">Guadeloupe</option>
                            <option value="86">Guam</option>
                            <option value="87">Guatemala</option>
                            <option value="240">Guernsey</option>
                            <option value="88">Guinea</option>
                            <option value="89">Guinea-Bissau</option>
                            <option value="90">Guyana</option>
                            <option value="91">Haiti</option>
                            <option value="92">Heard Island and McDonald Islands</option>
                            <option value="93">Holy See (Vatican City State)</option>
                            <option value="94">Honduras</option>
                            <option value="95">Hong Kong</option>
                            <option value="96">Hungary</option>
                            <option value="97">Iceland</option>
                            <option value="98">India</option>
                            <option value="99">Indonesia</option>
                            <option value="101">Iraq</option>
                            <option value="102">Ireland</option>
                            <option value="100">Islamic Republic of Iran</option>
                            <option value="241">Isle of Man</option>
                            <option value="103">Israel</option>
                            <option value="104">Italy</option>
                            <option value="105">Jamaica</option>
                            <option value="106">Japan</option>
                            <option value="242">Jersey</option>
                            <option value="107">Jordan</option>
                            <option value="108">Kazakhstan</option>
                            <option value="109">Kenya</option>
                            <option value="110">Kiribati</option>
                            <option value="249">Kosovo</option>
                            <option value="113">Kuwait</option>
                            <option value="114">Kyrgyzstan</option>
                            <option value="115">Lao People's Democratic Republic</option>
                            <option value="116">Latvia</option>
                            <option value="117">Lebanon</option>
                            <option value="118">Lesotho</option>
                            <option value="119">Liberia</option>
                            <option value="120">Libya</option>
                            <option value="121">Liechtenstein</option>
                            <option value="122">Lithuania</option>
                            <option value="123">Luxembourg</option>
                            <option value="124">Macao</option>
                            <option value="125">Madagascar</option>
                            <option value="126">Malawi</option>
                            <option value="127">Malaysia</option>
                            <option value="128">Maldives</option>
                            <option value="129">Mali</option>
                            <option value="130">Malta</option>
                            <option value="131">Marshall Islands</option>
                            <option value="132">Martinique</option>
                            <option value="133">Mauritania</option>
                            <option value="134">Mauritius</option>
                            <option value="135">Mayotte</option>
                            <option value="136">Mexico</option>
                            <option value="137">Micronesia, Federated States of</option>
                            <option value="138">Moldova, Republic of</option>
                            <option value="139">Monaco</option>
                            <option value="140">Mongolia</option>
                            <option value="243">Montenegro</option>
                            <option value="141">Montserrat</option>
                            <option value="142">Morocco</option>
                            <option value="143">Mozambique</option>
                            <option value="144">Myanmar</option>
                            <option value="145">Namibia</option>
                            <option value="146">Nauru</option>
                            <option value="147">Nepal</option>
                            <option value="148">Netherlands</option>
                            <option value="149">New Caledonia</option>
                            <option value="150">New Zealand</option>
                            <option value="151">Nicaragua</option>
                            <option value="152">Niger</option>
                            <option value="153">Nigeria</option>
                            <option value="154">Niue</option>
                            <option value="155">Norfolk Island</option>
                            <option value="111">North Korea</option>
                            <option value="157">Northern Mariana Islands</option>
                            <option value="158">Norway</option>
                            <option value="159">Oman</option>
                            <option value="160">Pakistan</option>
                            <option value="161">Palau</option>
                            <option value="163">Panama</option>
                            <option value="164">Papua New Guinea</option>
                            <option value="165">Paraguay</option>
                            <option value="43">People's Republic of China</option>
                            <option value="166">Peru</option>
                            <option value="167">Philippines</option>
                            <option value="168">Pitcairn</option>
                            <option value="169">Poland</option>
                            <option value="170">Portugal</option>
                            <option value="171">Puerto Rico</option>
                            <option value="172">Qatar</option>
                            <option value="48">Republic of the Congo</option>
                            <option value="77">Republic of The Gambia</option>
                            <option value="173">Reunion</option>
                            <option value="174">Romania</option>
                            <option value="175">Russian Federation</option>
                            <option value="176">Rwanda</option>
                            <option value="244">Saint Barthélemy</option>
                            <option value="177">Saint Helena</option>
                            <option value="178">Saint Kitts and Nevis</option>
                            <option value="179">Saint Lucia</option>
                            <option value="245">Saint Martin (French part)</option>
                            <option value="180">Saint Pierre and Miquelon</option>
                            <option value="181">Saint Vincent and the Grenadines</option>
                            <option value="182">Samoa</option>
                            <option value="183">San Marino</option>
                            <option value="184">Sao Tome and Principe</option>
                            <option value="185">Saudi Arabia</option>
                            <option value="186">Senegal</option>
                            <option value="246">Serbia</option>
                            <option value="187">Seychelles</option>
                            <option value="188">Sierra Leone</option>
                            <option value="189">Singapore</option>
                            <option value="247">Sint Maarten (Dutch part)</option>
                            <option value="190">Slovakia</option>
                            <option value="191">Slovenia</option>
                            <option value="192">Solomon Islands</option>
                            <option value="193">Somalia</option>
                            <option value="194">South Africa</option>
                            <option value="195">South Georgia and the South Sandwich Islands</option>
                            <option value="112">South Korea</option>
                            <option value="248">South Sudan</option>
                            <option value="196">Spain</option>
                            <option value="197">Sri Lanka</option>
                            <option value="162">State of Palestine</option>
                            <option value="198">Sudan</option>
                            <option value="199">Suriname</option>
                            <option value="200">Svalbard and Jan Mayen</option>
                            <option value="202">Sweden</option>
                            <option value="203">Switzerland</option>
                            <option value="204">Syrian Arab Republic</option>
                            <option value="205">Taiwan, Province of China</option>
                            <option value="206">Tajikistan</option>
                            <option value="208">Thailand</option>
                            <option value="156">The Republic of North Macedonia</option>
                            <option value="209">Timor-Leste</option>
                            <option value="210">Togo</option>
                            <option value="211">Tokelau</option>
                            <option value="212">Tonga</option>
                            <option value="213">Trinidad and Tobago</option>
                            <option value="214">Tunisia</option>
                            <option value="215">Türkiye</option>
                            <option value="216">Turkmenistan</option>
                            <option value="217">Turks and Caicos Islands</option>
                            <option value="218">Tuvalu</option>
                            <option value="219">Uganda</option>
                            <option value="220">Ukraine</option>
                            <option value="221">United Arab Emirates</option>
                            <option value="222">United Kingdom</option>
                            <option value="207">United Republic of Tanzania</option>
                            <option value="224">United States Minor Outlying Islands</option>
                            <option value="223">United States of America</option>
                            <option value="225">Uruguay</option>
                            <option value="226">Uzbekistan</option>
                            <option value="227">Vanuatu</option>
                            <option value="228">Venezuela</option>
                            <option value="229">Vietnam</option>
                            <option value="230">Virgin Islands, British</option>
                            <option value="231">Virgin Islands, U.S.</option>
                            <option value="232">Wallis and Futuna</option>
                            <option value="233">Western Sahara</option>
                            <option value="234">Yemen</option>
                            <option value="235">Zambia</option>
                            <option value="236">Zimbabwe</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add an account without a bank feed</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>You may want to do this if:</p>
                    <ul>
                        <li>Your bank doesn't currently provide a bank feed</li>
                        <li>Your bank doesn't provide a bank feed for your account type</li>
                        <li>You need a petty cash account</li>
                        <li>Your Xero subscription doesn't include bank feeds</li>
                    </ul>
                    <p>Transactions downloaded from your bank can be manually imported into this account</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{ route('add.bank') }}" class="btn btn-primary" target="_blank">continue</a>
                </div>
            </div>
        </div>
    </div>
</x-admin.layouts>
