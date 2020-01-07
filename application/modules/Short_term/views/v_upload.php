<div class="col-12 align-items-center">
		<div class="row">
			<div class="col">
				<ul class="nav d-sm-flex flex-column nav-pills" id="v-pills-tab" role="tablist"
					aria-orientation="vertical">
					<li class="nav-item"><a class="nav-link active" href="#upload"  style="width:100%;" data-toggle="pill">Upload</a></li>
					<li class="nav-item"><a class="nav-link" href="#excel" style="width:100%;" data-toggle="pill">Upload excel file</a></li>
					<li class="nav-item" style="display:none;"><a class="nav-link" data-toggle="pill">Upload excel file</a></li>
				</ul>

  	</div>
		<div class="col-10">
  	<div class="tab-content vertical-center" id="v-pills-tabContent">
  		<div id="upload"  role="tabpanel"  class="card tab-pane fade show active">
  			<div class="card-header">
  				<ul class="nav nav-tabs" id="" role="tablist">
  					<li class="nav-item" id="0">
  						<a class="nav-link active" style="pointer-events: none;" data-toggle="tab" href="#tabs-0"
  							role="tab" aria-controls="data-mahasiswa" aria-selected="true">Mahasiswa</a>
  					</li>
  					<li class="nav-item disabled" id="1">
  						<a class="nav-link"  style="pointer-events: none;" data-toggle="tab" href="#tabs-1" role="tab"
  							aria-controls="data-program" aria-selected="false">Program</a>
  					</li>
  					<li class="nav-item disabled" id="2">
  						<a class="nav-link" id="step-dokumen" style="pointer-events: none;" data-toggle="tab" href="#tabs-2" role="tab"
  							aria-controls="data-dokumen" aria-selected="false"></i>Dokumen</a>
  					</li>

  				</ul>
  			</div>
  			<div class="card-body">
  				<form id="form1" method="post" enctype="multipart/form-data"
  					action="<?php echo base_url('index.php/Short_term/input'); ?>">
  					<div class="tab-content" id="myTabContent">
  						<div class="tab-pane fade show active" id="tabs-0" role="tabpanel"
  							aria-labelledby="data-mahasiswa">
  							<div class="tab-content" id="v-pills-tabContent">
  								<div class="form-group">
  									<label for="nama">Nama:</label>
  									<input type="text" name="nama" class="form-control" id="nama" required>
  								</div>
  								<div class="form-group">
  									<label for="Tgl_lahir">Tanggal lahir:</label>
  									<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required>
  								</div>
  								<div class="form-group">
  									<label for="email">Email:</label>
  									<input type="email" name="email" class="form-control" id="email" required>
  								</div>
  								<div class="form-group">
  									<label for="no_passport">No Passport:</label>
  									<input type="text" name="no_passport" class="form-control" id="no_passport"
  										required>
  								</div>
  								<div class="form-group">
  									<label for="jurusan_asal">Jurusan Asal:</label>
  									<input type="text" name="jurusan_asal" class="form-control" id="juruan_asal"
  										required>
  								</div>
  								<div class="form-group">
  									<label for="fakultas_asal">Fakultas Asal:</label>
  									<input type="text" name="fakultas_asal" class="form-control" id="fakultas_asal"
  										required>
  								</div>
  								<div class="form-group">
  									<label for="univ_asal">Universitas Asal:</label>
  									<input type="text" name="univ_asal" class="form-control" id="univ_asal" required>
  								</div>
  								<div class="form-group">
  									<label for="univ_asal">Negara Tujuan:</label>
  									<select id="negara_tujuan" name="negara_tujuan" class="form-control" required>
  										<option value="Afghanistan">Afghanistan</option>
  										<option value="Åland Islands">Åland Islands</option>
  										<option value="Albania">Albania</option>
  										<option value="Algeria">Algeria</option>
  										<option value="American Samoa">American Samoa</option>
  										<option value="Andorra">Andorra</option>
  										<option value="Angola">Angola</option>
  										<option value="Anguilla">Anguilla</option>
  										<option value="Antarctica">Antarctica</option>
  										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
  										<option value="Argentina">Argentina</option>
  										<option value="Armenia">Armenia</option>
  										<option value="Aruba">Aruba</option>
  										<option value="Australia">Australia</option>
  										<option value="Austria">Austria</option>
  										<option value="Azerbaijan">Azerbaijan</option>
  										<option value="Bahamas">Bahamas</option>
  										<option value="Bahrain">Bahrain</option>
  										<option value="Bangladesh">Bangladesh</option>
  										<option value="Barbados">Barbados</option>
  										<option value="Belarus">Belarus</option>
  										<option value="Belgium">Belgium</option>
  										<option value="Belize">Belize</option>
  										<option value="Benin">Benin</option>
  										<option value="Bermuda">Bermuda</option>
  										<option value="Bhutan">Bhutan</option>
  										<option value="Bolivia">Bolivia</option>
  										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina
  										</option>
  										<option value="Botswana">Botswana</option>
  										<option value="Bouvet Island">Bouvet Island</option>
  										<option value="Brazil">Brazil</option>
  										<option value="British Indian Ocean Territory">British Indian Ocean
  											Territory</option>
  										<option value="Brunei Darussalam">Brunei Darussalam</option>
  										<option value="Bulgaria">Bulgaria</option>
  										<option value="Burkina Faso">Burkina Faso</option>
  										<option value="Burundi">Burundi</option>
  										<option value="Cambodia">Cambodia</option>
  										<option value="Cameroon">Cameroon</option>
  										<option value="Canada">Canada</option>
  										<option value="Cape Verde">Cape Verde</option>
  										<option value="Cayman Islands">Cayman Islands</option>
  										<option value="Central African Republic">Central African Republic
  										</option>
  										<option value="Chad">Chad</option>
  										<option value="Chile">Chile</option>
  										<option value="China">China</option>
  										<option value="Christmas Island">Christmas Island</option>
  										<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
  										</option>
  										<option value="Colombia">Colombia</option>
  										<option value="Comoros">Comoros</option>
  										<option value="Congo">Congo</option>
  										<option value="Congo, The Democratic Republic of The">Congo, The
  											Democratic Republic of The</option>
  										<option value="Cook Islands">Cook Islands</option>
  										<option value="Costa Rica">Costa Rica</option>
  										<option value="Cote D'ivoire">Cote D'ivoire</option>
  										<option value="Croatia">Croatia</option>
  										<option value="Cuba">Cuba</option>
  										<option value="Cyprus">Cyprus</option>
  										<option value="Czech Republic">Czech Republic</option>
  										<option value="Denmark">Denmark</option>
  										<option value="Djibouti">Djibouti</option>
  										<option value="Dominica">Dominica</option>
  										<option value="Dominican Republic">Dominican Republic</option>
  										<option value="Ecuador">Ecuador</option>
  										<option value="Egypt">Egypt</option>
  										<option value="El Salvador">El Salvador</option>
  										<option value="Equatorial Guinea">Equatorial Guinea</option>
  										<option value="Eritrea">Eritrea</option>
  										<option value="Estonia">Estonia</option>
  										<option value="Ethiopia">Ethiopia</option>
  										<option value="Falkland Islands (Malvinas)">Falkland Islands
  											(Malvinas)</option>
  										<option value="Faroe Islands">Faroe Islands</option>
  										<option value="Fiji">Fiji</option>
  										<option value="Finland">Finland</option>
  										<option value="France">France</option>
  										<option value="French Guiana">French Guiana</option>
  										<option value="French Polynesia">French Polynesia</option>
  										<option value="French Southern Territories">French Southern
  											Territories</option>
  										<option value="Gabon">Gabon</option>
  										<option value="Gambia">Gambia</option>
  										<option value="Georgia">Georgia</option>
  										<option value="Germany">Germany</option>
  										<option value="Ghana">Ghana</option>
  										<option value="Gibraltar">Gibraltar</option>
  										<option value="Greece">Greece</option>
  										<option value="Greenland">Greenland</option>
  										<option value="Grenada">Grenada</option>
  										<option value="Guadeloupe">Guadeloupe</option>
  										<option value="Guam">Guam</option>
  										<option value="Guatemala">Guatemala</option>
  										<option value="Guernsey">Guernsey</option>
  										<option value="Guinea">Guinea</option>
  										<option value="Guinea-bissau">Guinea-bissau</option>
  										<option value="Guyana">Guyana</option>
  										<option value="Haiti">Haiti</option>
  										<option value="Heard Island and Mcdonald Islands">Heard Island and
  											Mcdonald Islands</option>
  										<option value="Holy See (Vatican City State)">Holy See (Vatican City
  											State)</option>
  										<option value="Honduras">Honduras</option>
  										<option value="Hong Kong">Hong Kong</option>
  										<option value="Hungary">Hungary</option>
  										<option value="Iceland">Iceland</option>
  										<option value="India">India</option>
  										<option value="Indonesia">Indonesia</option>
  										<option value="Iran, Islamic Republic of">Iran, Islamic Republic of
  										</option>
  										<option value="Iraq">Iraq</option>
  										<option value="Ireland">Ireland</option>
  										<option value="Isle of Man">Isle of Man</option>
  										<option value="Israel">Israel</option>
  										<option value="Italy">Italy</option>
  										<option value="Jamaica">Jamaica</option>
  										<option value="Japan">Japan</option>
  										<option value="Jersey">Jersey</option>
  										<option value="Jordan">Jordan</option>
  										<option value="Kazakhstan">Kazakhstan</option>
  										<option value="Kenya">Kenya</option>
  										<option value="Kiribati">Kiribati</option>
  										<option value="Korea, Democratic People's Republic of">Korea,
  											Democratic People's Republic of</option>
  										<option value="Korea, Republic of">Korea, Republic of</option>
  										<option value="Kuwait">Kuwait</option>
  										<option value="Kyrgyzstan">Kyrgyzstan</option>
  										<option value="Lao People's Democratic Republic">Lao People's
  											Democratic Republic</option>
  										<option value="Latvia">Latvia</option>
  										<option value="Lebanon">Lebanon</option>
  										<option value="Lesotho">Lesotho</option>
  										<option value="Liberia">Liberia</option>
  										<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
  										</option>
  										<option value="Liechtenstein">Liechtenstein</option>
  										<option value="Lithuania">Lithuania</option>
  										<option value="Luxembourg">Luxembourg</option>
  										<option value="Macao">Macao</option>
  										<option value="Macedonia, The Former Yugoslav Republic of">
  											Macedonia, The Former Yugoslav Republic of</option>
  										<option value="Madagascar">Madagascar</option>
  										<option value="Malawi">Malawi</option>
  										<option value="Malaysia">Malaysia</option>
  										<option value="Maldives">Maldives</option>
  										<option value="Mali">Mali</option>
  										<option value="Malta">Malta</option>
  										<option value="Marshall Islands">Marshall Islands</option>
  										<option value="Martinique">Martinique</option>
  										<option value="Mauritania">Mauritania</option>
  										<option value="Mauritius">Mauritius</option>
  										<option value="Mayotte">Mayotte</option>
  										<option value="Mexico">Mexico</option>
  										<option value="Micronesia, Federated States of">Micronesia,
  											Federated States of</option>
  										<option value="Moldova, Republic of">Moldova, Republic of</option>
  										<option value="Monaco">Monaco</option>
  										<option value="Mongolia">Mongolia</option>
  										<option value="Montenegro">Montenegro</option>
  										<option value="Montserrat">Montserrat</option>
  										<option value="Morocco">Morocco</option>
  										<option value="Mozambique">Mozambique</option>
  										<option value="Myanmar">Myanmar</option>
  										<option value="Namibia">Namibia</option>
  										<option value="Nauru">Nauru</option>
  										<option value="Nepal">Nepal</option>
  										<option value="Netherlands">Netherlands</option>
  										<option value="Netherlands Antilles">Netherlands Antilles</option>
  										<option value="New Caledonia">New Caledonia</option>
  										<option value="New Zealand">New Zealand</option>
  										<option value="Nicaragua">Nicaragua</option>
  										<option value="Niger">Niger</option>
  										<option value="Nigeria">Nigeria</option>
  										<option value="Niue">Niue</option>
  										<option value="Norfolk Island">Norfolk Island</option>
  										<option value="Northern Mariana Islands">Northern Mariana Islands
  										</option>
  										<option value="Norway">Norway</option>
  										<option value="Oman">Oman</option>
  										<option value="Pakistan">Pakistan</option>
  										<option value="Palau">Palau</option>
  										<option value="Palestinian Territory, Occupied">Palestinian
  											Territory, Occupied</option>
  										<option value="Panama">Panama</option>
  										<option value="Papua New Guinea">Papua New Guinea</option>
  										<option value="Paraguay">Paraguay</option>
  										<option value="Peru">Peru</option>
  										<option value="Philippines">Philippines</option>
  										<option value="Pitcairn">Pitcairn</option>
  										<option value="Poland">Poland</option>
  										<option value="Portugal">Portugal</option>
  										<option value="Puerto Rico">Puerto Rico</option>
  										<option value="Qatar">Qatar</option>
  										<option value="Reunion">Reunion</option>
  										<option value="Romania">Romania</option>
  										<option value="Russian Federation">Russian Federation</option>
  										<option value="Rwanda">Rwanda</option>
  										<option value="Saint Helena">Saint Helena</option>
  										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
  										<option value="Saint Lucia">Saint Lucia</option>
  										<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
  										</option>
  										<option value="Saint Vincent and The Grenadines">Saint Vincent and
  											The Grenadines</option>
  										<option value="Samoa">Samoa</option>
  										<option value="San Marino">San Marino</option>
  										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
  										<option value="Saudi Arabia">Saudi Arabia</option>
  										<option value="Senegal">Senegal</option>
  										<option value="Serbia">Serbia</option>
  										<option value="Seychelles">Seychelles</option>
  										<option value="Sierra Leone">Sierra Leone</option>
  										<option value="Singapore">Singapore</option>
  										<option value="Slovakia">Slovakia</option>
  										<option value="Slovenia">Slovenia</option>
  										<option value="Solomon Islands">Solomon Islands</option>
  										<option value="Somalia">Somalia</option>
  										<option value="South Africa">South Africa</option>
  										<option value="South Georgia and The South Sandwich Islands">South
  											Georgia and The South Sandwich Islands</option>
  										<option value="Spain">Spain</option>
  										<option value="Sri Lanka">Sri Lanka</option>
  										<option value="Sudan">Sudan</option>
  										<option value="Suriname">Suriname</option>
  										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
  										</option>
  										<option value="Swaziland">Swaziland</option>
  										<option value="Sweden">Sweden</option>
  										<option value="Switzerland">Switzerland</option>
  										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
  										<option value="Taiwan, Province of China">Taiwan, Province of China
  										</option>
  										<option value="Tajikistan">Tajikistan</option>
  										<option value="Tanzania, United Republic of">Tanzania, United
  											Republic of</option>
  										<option value="Thailand">Thailand</option>
  										<option value="Timor-leste">Timor-leste</option>
  										<option value="Togo">Togo</option>
  										<option value="Tokelau">Tokelau</option>
  										<option value="Tonga">Tonga</option>
  										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
  										<option value="Tunisia">Tunisia</option>
  										<option value="Turkey">Turkey</option>
  										<option value="Turkmenistan">Turkmenistan</option>
  										<option value="Turks and Caicos Islands">Turks and Caicos Islands
  										</option>
  										<option value="Tuvalu">Tuvalu</option>
  										<option value="Uganda">Uganda</option>
  										<option value="Ukraine">Ukraine</option>
  										<option value="United Arab Emirates">United Arab Emirates</option>
  										<option value="United Kingdom">United Kingdom</option>
  										<option value="United States">United States</option>
  										<option value="United States Minor Outlying Islands">United States
  											Minor Outlying Islands</option>
  										<option value="Uruguay">Uruguay</option>
  										<option value="Uzbekistan">Uzbekistan</option>
  										<option value="Vanuatu">Vanuatu</option>
  										<option value="Venezuela">Venezuela</option>
  										<option value="Viet Nam">Viet Nam</option>
  										<option value="Virgin Islands, British">Virgin Islands, British
  										</option>
  										<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
  										<option value="Wallis and Futuna">Wallis and Futuna</option>
  										<option value="Western Sahara">Western Sahara</option>
  										<option value="Yemen">Yemen</option>
  										<option value="Zambia">Zambia</option>
  										<option value="Zimbabwe">Zimbabwe</option>
  									</select>
  								</div>
  								<div class="form-group">
  									<label for="univ_asal">Universitas Tujuan:</label>
  									<input type="text" name="univ_tujuan" class="form-control" id="univ_tujuan"
  										required>
  								</div>
  								<div class="form-group">
  									<label for="negara_asal">Negara Asal</label>
  									<select id="negara_asal" name="negara_asal" class="form-control" required>
  										<option value="Afghanistan">Afghanistan</option>
  										<option value="Åland Islands">Åland Islands</option>
  										<option value="Albania">Albania</option>
  										<option value="Algeria">Algeria</option>
  										<option value="American Samoa">American Samoa</option>
  										<option value="Andorra">Andorra</option>
  										<option value="Angola">Angola</option>
  										<option value="Anguilla">Anguilla</option>
  										<option value="Antarctica">Antarctica</option>
  										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
  										<option value="Argentina">Argentina</option>
  										<option value="Armenia">Armenia</option>
  										<option value="Aruba">Aruba</option>
  										<option value="Australia">Australia</option>
  										<option value="Austria">Austria</option>
  										<option value="Azerbaijan">Azerbaijan</option>
  										<option value="Bahamas">Bahamas</option>
  										<option value="Bahrain">Bahrain</option>
  										<option value="Bangladesh">Bangladesh</option>
  										<option value="Barbados">Barbados</option>
  										<option value="Belarus">Belarus</option>
  										<option value="Belgium">Belgium</option>
  										<option value="Belize">Belize</option>
  										<option value="Benin">Benin</option>
  										<option value="Bermuda">Bermuda</option>
  										<option value="Bhutan">Bhutan</option>
  										<option value="Bolivia">Bolivia</option>
  										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina
  										</option>
  										<option value="Botswana">Botswana</option>
  										<option value="Bouvet Island">Bouvet Island</option>
  										<option value="Brazil">Brazil</option>
  										<option value="British Indian Ocean Territory">British Indian Ocean Territory
  										</option>
  										<option value="Brunei Darussalam">Brunei Darussalam</option>
  										<option value="Bulgaria">Bulgaria</option>
  										<option value="Burkina Faso">Burkina Faso</option>
  										<option value="Burundi">Burundi</option>
  										<option value="Cambodia">Cambodia</option>
  										<option value="Cameroon">Cameroon</option>
  										<option value="Canada">Canada</option>
  										<option value="Cape Verde">Cape Verde</option>
  										<option value="Cayman Islands">Cayman Islands</option>
  										<option value="Central African Republic">Central African Republic</option>
  										<option value="Chad">Chad</option>
  										<option value="Chile">Chile</option>
  										<option value="China">China</option>
  										<option value="Christmas Island">Christmas Island</option>
  										<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
  										<option value="Colombia">Colombia</option>
  										<option value="Comoros">Comoros</option>
  										<option value="Congo">Congo</option>
  										<option value="Congo, The Democratic Republic of The">Congo, The Democratic
  											Republic
  											of The</option>
  										<option value="Cook Islands">Cook Islands</option>
  										<option value="Costa Rica">Costa Rica</option>
  										<option value="Cote D'ivoire">Cote D'ivoire</option>
  										<option value="Croatia">Croatia</option>
  										<option value="Cuba">Cuba</option>
  										<option value="Cyprus">Cyprus</option>
  										<option value="Czech Republic">Czech Republic</option>
  										<option value="Denmark">Denmark</option>
  										<option value="Djibouti">Djibouti</option>
  										<option value="Dominica">Dominica</option>
  										<option value="Dominican Republic">Dominican Republic</option>
  										<option value="Ecuador">Ecuador</option>
  										<option value="Egypt">Egypt</option>
  										<option value="El Salvador">El Salvador</option>
  										<option value="Equatorial Guinea">Equatorial Guinea</option>
  										<option value="Eritrea">Eritrea</option>
  										<option value="Estonia">Estonia</option>
  										<option value="Ethiopia">Ethiopia</option>
  										<option value="Falkland Islands (Malvinas)">Falkland Islands
  											(Malvinas)</option>
  										<option value="Faroe Islands">Faroe Islands</option>
  										<option value="Fiji">Fiji</option>
  										<option value="Finland">Finland</option>
  										<option value="France">France</option>
  										<option value="French Guiana">French Guiana</option>
  										<option value="French Polynesia">French Polynesia</option>
  										<option value="French Southern Territories">French Southern
  											Territories</option>
  										<option value="Gabon">Gabon</option>
  										<option value="Gambia">Gambia</option>
  										<option value="Georgia">Georgia</option>
  										<option value="Germany">Germany</option>
  										<option value="Ghana">Ghana</option>
  										<option value="Gibraltar">Gibraltar</option>
  										<option value="Greece">Greece</option>
  										<option value="Greenland">Greenland</option>
  										<option value="Grenada">Grenada</option>
  										<option value="Guadeloupe">Guadeloupe</option>
  										<option value="Guam">Guam</option>
  										<option value="Guatemala">Guatemala</option>
  										<option value="Guernsey">Guernsey</option>
  										<option value="Guinea">Guinea</option>
  										<option value="Guinea-bissau">Guinea-bissau</option>
  										<option value="Guyana">Guyana</option>
  										<option value="Haiti">Haiti</option>
  										<option value="Heard Island and Mcdonald Islands">Heard Island and
  											Mcdonald Islands</option>
  										<option value="Holy See (Vatican City State)">Holy See (Vatican City
  											State)</option>
  										<option value="Honduras">Honduras</option>
  										<option value="Hong Kong">Hong Kong</option>
  										<option value="Hungary">Hungary</option>
  										<option value="Iceland">Iceland</option>
  										<option value="India">India</option>
  										<option value="Indonesia">Indonesia</option>
  										<option value="Iran, Islamic Republic of">Iran, Islamic Republic of
  										</option>
  										<option value="Iraq">Iraq</option>
  										<option value="Ireland">Ireland</option>
  										<option value="Isle of Man">Isle of Man</option>
  										<option value="Israel">Israel</option>
  										<option value="Italy">Italy</option>
  										<option value="Jamaica">Jamaica</option>
  										<option value="Japan">Japan</option>
  										<option value="Jersey">Jersey</option>
  										<option value="Jordan">Jordan</option>
  										<option value="Kazakhstan">Kazakhstan</option>
  										<option value="Kenya">Kenya</option>
  										<option value="Kiribati">Kiribati</option>
  										<option value="Korea, Democratic People's Republic of">Korea,
  											Democratic People's Republic of</option>
  										<option value="Korea, Republic of">Korea, Republic of</option>
  										<option value="Kuwait">Kuwait</option>
  										<option value="Kyrgyzstan">Kyrgyzstan</option>
  										<option value="Lao People's Democratic Republic">Lao People's
  											Democratic Republic</option>
  										<option value="Latvia">Latvia</option>
  										<option value="Lebanon">Lebanon</option>
  										<option value="Lesotho">Lesotho</option>
  										<option value="Liberia">Liberia</option>
  										<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
  										</option>
  										<option value="Liechtenstein">Liechtenstein</option>
  										<option value="Lithuania">Lithuania</option>
  										<option value="Luxembourg">Luxembourg</option>
  										<option value="Macao">Macao</option>
  										<option value="Macedonia, The Former Yugoslav Republic of">
  											Macedonia, The Former Yugoslav Republic of</option>
  										<option value="Madagascar">Madagascar</option>
  										<option value="Malawi">Malawi</option>
  										<option value="Malaysia">Malaysia</option>
  										<option value="Maldives">Maldives</option>
  										<option value="Mali">Mali</option>
  										<option value="Malta">Malta</option>
  										<option value="Marshall Islands">Marshall Islands</option>
  										<option value="Martinique">Martinique</option>
  										<option value="Mauritania">Mauritania</option>
  										<option value="Mauritius">Mauritius</option>
  										<option value="Mayotte">Mayotte</option>
  										<option value="Mexico">Mexico</option>
  										<option value="Micronesia, Federated States of">Micronesia,
  											Federated States of</option>
  										<option value="Moldova, Republic of">Moldova, Republic of</option>
  										<option value="Monaco">Monaco</option>
  										<option value="Mongolia">Mongolia</option>
  										<option value="Montenegro">Montenegro</option>
  										<option value="Montserrat">Montserrat</option>
  										<option value="Morocco">Morocco</option>
  										<option value="Mozambique">Mozambique</option>
  										<option value="Myanmar">Myanmar</option>
  										<option value="Namibia">Namibia</option>
  										<option value="Nauru">Nauru</option>
  										<option value="Nepal">Nepal</option>
  										<option value="Netherlands">Netherlands</option>
  										<option value="Netherlands Antilles">Netherlands Antilles</option>
  										<option value="New Caledonia">New Caledonia</option>
  										<option value="New Zealand">New Zealand</option>
  										<option value="Nicaragua">Nicaragua</option>
  										<option value="Niger">Niger</option>
  										<option value="Nigeria">Nigeria</option>
  										<option value="Niue">Niue</option>
  										<option value="Norfolk Island">Norfolk Island</option>
  										<option value="Northern Mariana Islands">Northern Mariana Islands
  										</option>
  										<option value="Norway">Norway</option>
  										<option value="Oman">Oman</option>
  										<option value="Pakistan">Pakistan</option>
  										<option value="Palau">Palau</option>
  										<option value="Palestinian Territory, Occupied">Palestinian
  											Territory, Occupied</option>
  										<option value="Panama">Panama</option>
  										<option value="Papua New Guinea">Papua New Guinea</option>
  										<option value="Paraguay">Paraguay</option>
  										<option value="Peru">Peru</option>
  										<option value="Philippines">Philippines</option>
  										<option value="Pitcairn">Pitcairn</option>
  										<option value="Poland">Poland</option>
  										<option value="Portugal">Portugal</option>
  										<option value="Puerto Rico">Puerto Rico</option>
  										<option value="Qatar">Qatar</option>
  										<option value="Reunion">Reunion</option>
  										<option value="Romania">Romania</option>
  										<option value="Russian Federation">Russian Federation</option>
  										<option value="Rwanda">Rwanda</option>
  										<option value="Saint Helena">Saint Helena</option>
  										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
  										<option value="Saint Lucia">Saint Lucia</option>
  										<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
  										</option>
  										<option value="Saint Vincent and The Grenadines">Saint Vincent and
  											The Grenadines</option>
  										<option value="Samoa">Samoa</option>
  										<option value="San Marino">San Marino</option>
  										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
  										<option value="Saudi Arabia">Saudi Arabia</option>
  										<option value="Senegal">Senegal</option>
  										<option value="Serbia">Serbia</option>
  										<option value="Seychelles">Seychelles</option>
  										<option value="Sierra Leone">Sierra Leone</option>
  										<option value="Singapore">Singapore</option>
  										<option value="Slovakia">Slovakia</option>
  										<option value="Slovenia">Slovenia</option>
  										<option value="Solomon Islands">Solomon Islands</option>
  										<option value="Somalia">Somalia</option>
  										<option value="South Africa">South Africa</option>
  										<option value="South Georgia and The South Sandwich Islands">South
  											Georgia and The South Sandwich Islands</option>
  										<option value="Spain">Spain</option>
  										<option value="Sri Lanka">Sri Lanka</option>
  										<option value="Sudan">Sudan</option>
  										<option value="Suriname">Suriname</option>
  										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
  										</option>
  										<option value="Swaziland">Swaziland</option>
  										<option value="Sweden">Sweden</option>
  										<option value="Switzerland">Switzerland</option>
  										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
  										<option value="Taiwan, Province of China">Taiwan, Province of China
  										</option>
  										<option value="Tajikistan">Tajikistan</option>
  										<option value="Tanzania, United Republic of">Tanzania, United
  											Republic of</option>
  										<option value="Thailand">Thailand</option>
  										<option value="Timor-leste">Timor-leste</option>
  										<option value="Togo">Togo</option>
  										<option value="Tokelau">Tokelau</option>
  										<option value="Tonga">Tonga</option>
  										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
  										<option value="Tunisia">Tunisia</option>
  										<option value="Turkey">Turkey</option>
  										<option value="Turkmenistan">Turkmenistan</option>
  										<option value="Turks and Caicos Islands">Turks and Caicos Islands
  										</option>
  										<option value="Tuvalu">Tuvalu</option>
  										<option value="Uganda">Uganda</option>
  										<option value="Ukraine">Ukraine</option>
  										<option value="United Arab Emirates">United Arab Emirates</option>
  										<option value="United Kingdom">United Kingdom</option>
  										<option value="United States">United States</option>
  										<option value="United States Minor Outlying Islands">United States
  											Minor Outlying Islands</option>
  										<option value="Uruguay">Uruguay</option>
  										<option value="Uzbekistan">Uzbekistan</option>
  										<option value="Vanuatu">Vanuatu</option>
  										<option value="Venezuela">Venezuela</option>
  										<option value="Viet Nam">Viet Nam</option>
  										<option value="Virgin Islands, British">Virgin Islands, British
  										</option>
  										<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
  										<option value="Wallis and Futuna">Wallis and Futuna</option>
  										<option value="Western Sahara">Western Sahara</option>
  										<option value="Yemen">Yemen</option>
  										<option value="Zambia">Zambia</option>
  										<option value="Zimbabwe">Zimbabwe</option>
  									</select>
  								</div>
  								<button onclick="nextTab('data-program')" class="btn btn-primary">next</button>
  							</div>
  						</div>
  						<div class="tab-pane fade data-pane" id="data-program" role="tabpanel" aria-labelledby="data-program">

  						<div class="tab-pane fade" id="tabs-1" role="tabpanel" aria-labelledby="data-program">

  							<div class="form-group">
  								<label for="program">Program :</label>
  								<select id="program" name="program" class="form-control"
  									onchange="CheckProgram(this.value);" required>
  									<option value="" disabled selected>Pilih program</option>
  									<?php
								foreach($program as $p){
								?>
  									<option value="<?php echo $p->nama_program?>">
  										<?php echo $p->nama_program?>
  									</option>
  									<?php } ?>
  									<option value="others">Program lain</option>
  								</select>
  								<input type="text" name="p" placeholder="Masukkan nama program :" class="form-control"
  									id="edit_program" required style="display:none">
  							</div>
  							<div class="form-group">
  								<label for="jenis_program"> Jenis program : </label>
  								<select id="jenis_program" name="jenis_program" class="form-control" required>
  									<option value="" disabled selected>Pilih jenis program</option>
  									<option value="outbound">Outbound</option>
  									<option value="inbound">Inbound</option>
  								</select>
  							</div>
  							<div class="form-group">
  								<label for="tahun">Tahun :</label>
  								<input type="year" name="tahun" placeholder="Masukkan tahun program :"
  									class="form-control" required>
  							</div>
  							<div class="form-group">
  								<label for="tujuan">Tujuan kunjungan :</label>
  								<select id="tujuan" name="tujuan_kunjungan" , class="form-control" required>
  									<option value="Conference">Conference</option>
  									<option value="Seminar">Seminar</option>
  									<option value="Workshop">Workshop</option>
  									<option value="Magang">Magang</option>
  									<option value="Visit">Visit</option>
  									<option value="Summercamp">Summercamp</option>
  									<option value="Short-course">Short-course</option>
  									<option value="Darmasiswa">Darmasiswa</option>
  								</select>
  							</div>
  							<div class="form-group" id="tgl_mulai">
  								<label for="tgl_mulai">Tanggal mulai program :</label>
  								<input type="date" name="tgl_mulai" class="form-control" required>
  							</div>
  							<div class="form-group" id="tgl_akhir">
  								<label for="tgl_akhir">Tanggal akhir program:</label>
  								<input type="date" name="tgl_akhir" class="form-control" required>
  							</div>
  							<button onclick="prevTab('data-program')" class="btn btn-primary">prev</button>
  							<button onclick="nextTab('data-dokumen')" class="btn btn-primary">next</button>
  						</div>
  						<div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="data-dokumen">
  							<div class="form-group">
  								<label for="file">Masukkan Scan Passport :</label>
  								<input type="file" name="dokumen0" class="form-control" required>
  							</div>
								<div class="form-group">
  								<label for="file">Masukkan Scan Invitation Latter :</label>
  								<input type="file" name="dokumen1" class="form-control" required>
  							</div>
								<div class="form-group">
  								<label for="file">Masukkan Scan Application Form :</label>
  								<input type="file" name="dokumen2" class="form-control" required>
  							</div>
  							<div class="alert alert-danger" role="alert" id="#alert" style="display:none; width:100%;">
			  					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  					<strong id="msg"> </strong>
			  				</div>
  							<?php endif; ?> -->
  							<a onclick="prevTab('1')" href="#" class="btn btn-primary">prev</a>
  							<button type="submit" class="btn btn-primary">Submit</button>
  						</div>
  					</div>
  				</form>
  			</div>
  		</div>
  		<div id="excel" role="tabpanel" class="card tab-pane fade in active ">
  			<div class="card-body">
  				<a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a>
  				<form id="import_form" method="post"
  					action="<?php echo base_url("index.php/Short_term/insert_excel"); ?>"
  					enctype="multipart/form-data">
  					<div class="form-group">
  						<label for="daftar">Masukkan daftar mahasiswa (.xls)</label>
  						<input type="file" id="file" class="form-control" name="file" required>
  					</div>
  					<div class="form-group">
  						<label for="nama">Masukkan Dokumen (.zip/.rar)</label>
  						<input type='file' id="dokumen" class="form-control" name='dokumen[]' multiple> <br />
  					</div>
  					<input id="ton" type="text" value="preview" style="display:none;">
  					<button name="preview" type="submit" class=" btn btn-primary">Preview</button>
  					<button id="sub" type="submit" name="submit" class=" btn btn-primary" disabled>Submit</button>
  				</form>
  				<br />
  				<div class="alert alert-danger" role="alert" id="#alert" style="display:none; width:100%;">
  					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  					<strong>Info! Terdapat cell kosong pada file yang Anda upload. Silahkan pilih file
  						lain!</strong>
  				</div>
  				<table class="table" id="#myTable" style="max-height: 500px; overflow: auto; display:none;">
  					<thead>
  						<tr>
  							<th scope="col">No</th>
  							<th scope="col">Nama</th>
  							<th scope="col">Tanggal Lahir</th>
  							<th scope="col">Email</th>
  							<th scope="col">No passport</th>
  							<th scope="col">Juruan Asal</th>
  							<th scope="col">Fakultas asal</th>
  							<th scope="col">Universitas Asal</th>
  							<th scope="col">Negara tujuan</th>
  							<th scope="col">Universitas tujuan</th>
  							<th scope="col">Negara asal</th>
  							<th scope="col">Nama program</th>
  							<th scope="col">Jenis program</th>
  							<th scope="col">tahun</th>
  							<th scope="col">Tujuan Kunjungan</th>
  							<th scope="col">Tanggal mulai program</th>
  							<th scope="col">Tanggal akhir program</th>
  							<th scope="col">Dokumen</th>
  						</tr>
  					</thead>
  					<tbody id="body">

  					</tbody>
  				</table>
  			</div>
			</div>
  		</div>
  	</div>
	</div>
</div>
<script type="text/javascript">
<?php
 include(APPPATH."/modules/Short_term/ajax/short_term.js");s
?>
</script>
