<!doctype html>
<html lang="en">

<head>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
	<div class="login" style="margin:50px; margin-left:100px; margin-right:100px">
		<div class="panel panel-default">
			<div class="panel-heading">Upload</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2 mb-3">
						<ul class=" nav d-sm-flex flex-column  nav-pills" id="v-pills-tab" role="tablist"
							aria-orientation="vertical">
							<li class="nav-item"><a href="#uploads" data-toggle="pill">Upload</a></li>
							<li class="nav-item"><a href="#excel" data-toggle="pill">Upload excel file</a></li>
						</ul>
					</div>
					<div class="col-md-10">
						<div class="tab-content" id="v-pills-tabContent">
							<div id="uploads" role="tabpanel" class="tab-pane fade in active">
								<ul class="nav nav-tabs">
									<li id="0" class="active"><a data-toggle="tab" href="#tabs-0"
											style="pointer-events: none;">Mahasiswa</a></li>
									<li id="1" class="disabled"><a href="#tabs-1"
											style="pointer-events: none;">Program</a></li>
									<li id="2" class="disabled"><a href="#tabs-2"
											style="pointer-events: none;">Dokumen</a></li>
								</ul>
								<form id="form1" method="post" enctype="multipart/form-data"
									action="<?php echo base_url('index.php/Short_term/input'); ?>">
									<div class="tab-content">
										<div id="tabs-0" class="tab-pane fade in active">
											<div class="form-group">
												<label for="nama">Nama:</label>
												<input type="text" name="nama" class="form-control" id="nama" required>
											</div>
											<div class="form-group">
												<label for="Tgl_lahir">Tanggal lahir:</label>
												<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir"
													required>
											</div>
											<div class="form-group">
												<label for="email">Email:</label>
												<input type="email" name="email" class="form-control" id="email"
													required>
											</div>
											<div class="form-group">
												<label for="no_passport">No Passport:</label>
												<input type="text" name="no_passport" class="form-control"
													id="no_passport" required>
											</div>
											<div class="form-group">
												<label for="jurusan_asal">Jurusan Asal:</label>
												<input type="text" name="jurusan_asal" class="form-control"
													id="juruan_asal" required>
											</div>
											<div class="form-group">
												<label for="fakultas_asal">Fakultas Asal:</label>
												<input type="text" name="fakultas_asal" class="form-control"
													id="fakultas_asal" required>
											</div>
											<div class="form-group">
												<label for="univ_asal">Universitas Asal:</label>
												<input type="text" name="univ_asal" class="form-control" id="univ_asal"
													required>
											</div>
											<div class="form-group">
												<label for="univ_asal">Negara Tujuan:</label>
												<select id="negara_tujuan" name="negara_tujuan" class="form-control"
													required>
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
												<input type="text" name="univ_tujuan" class="form-control"
													id="univ_tujuan" required>
											</div>
											<div class="form-group">
												<label for="negara_asal">Negara Asal</label>
												<select id="negara_asal" name="negara_asal" class="form-control"
													required>
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
											<a onclick="nextTab('1')" type="button" href="#"
												class="btn btn-primary">next</a>
										</div>
										<div id="tabs-1" class="tab-pane fade">
											<div class="form-group">
												<label for="program">Program :</label>
												<select id="program" name="program" class="form-control"
													onchange="CheckProgram(this.value);" required>
													<option value="" disabled selected>Pilih program</option>
													<?php
														foreach($program as $p){
													?>
													<option value="<?php echo $p->nama_program?>">
														<?php echo $p->nama_program?></option>
													<?php } ?>
													<option value="others">Program lain</option>
												</select>
												<input type="text" name="p" placeholder="Masukkan nama program :"
													class="form-control" id="edit_program" required
													style="display:none">
											</div>
											<div class="form-group">
												<label for="jenis_program"> Jenis program : </label>
												<select id="jenis_program" name="jenis_program" class="form-control"
													required>
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
												<select id="tujuan" name="tujuan_kunjungan" , class="form-control"
													required>
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
											<a onclick="prevTab('0')" href="#" class="btn btn-primary">prev</a>
											<a onclick="nextTab('2')" href="#" class="btn btn-primary">next</a>
										</div>
										<div id="tabs-2" class="tab-pane fade">
											<div class="form-group">
												<label for="file">Masukkan file :</label>
												<input type="file" name="userfile" class="form-control" required>
											</div>
											<?php if ($this->session->flashdata('error') == TRUE) : ?>
											<div class="alert alert-danger fade in" style="margin-top:15px;">
												<a href="#" class="close" data-dismiss="alert"
													aria-label="close">&times;</a>
												<strong>Info! </strong><?php echo $this->session->flashdata('error')?>
											</div>
											<?php endif; ?>
											<a onclick="prevTab('1')" href="#" class="btn btn-primary">prev</a>
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</form>
							</div>
							<div id="excel" role="tabpanel" class="tab-pane fade in active">
								<a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a>
								<form id="import_form" method="post"
									action="<?php echo base_url("index.php/Short_term/form"); ?>"
									enctype="multipart/form-data">
									<div class="form-group">
										<label for="nama">Masukkan file:</label>
										<input type="file" id="file" name="file" required>
									</div>
									<div class="form-group">
										<label for="nama">Masukkan Dokumen:</label>
										<input type='file' id="dokumen" name='dokumen[]' multiple> <br />
									</div>
									<input id="ton" type="text" value="preview" style="display:none;">
									<button name="preview" type="submit" class=" btn btn-primary">Preview</button>
									<button id="sub" type="submit" name="submit" class=" btn btn-primary"
										disabled>Submit</button>
								</form>
								<br />
								<div class="alert alert-danger fade in" id="alert" style="display:none">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Info! Terdapat cell kosong pada file yang Anda upload. Silahkan pilih file
										lain!</strong>
								</div>
								<table class="table" id="#myTable"
									style="max-height: 500px; overflow: auto; display:none;">
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
	</div>
	<!-- <script src="<?=base_url();?>assets/js/jquery.js"></script> -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		function nextTab(tab) {
			$("#form1").validate();
			if ($("#form1").valid()) {
				alert("tes");
				$("#" + tab).removeClass("disabled");
				$('#' + tab).css('pointer-events', '');
				$('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
			}
		}
		$("#form1").validate({
			rules: {
				nama: "required",
				tgl_lahir: "required",
				no_passport: {
					required: true,
					remote: {
						url: "<?php echo base_url('index.php/Short_term/check_passport')?>",
						type: "post"
					}
				},
				email: {
					required: true,
					email: true,
					remote: {
						url: "<?php echo base_url('index.php/Short_term/check_email')?>",
						type: "post"
					}
				},
				jurusan_asal: "required",
				fakultas_asal: "required",
				negara_asal: "required",
				univ_asal: "required",
				univ_tujuan: "required",
				negara_tujuan: "required"
			},
			messages: {
				nama: "Please enter your firstname",
				no_passport: {
					required: "Please enter your passport id",
					remote: "Passport id must be a unique value"
				},
				email: {
					required: "Please enter your email address",
					email: "Please enter a valid email addres",
					remote: "This email address is already registered"
				}
			},
			errorElement: "em",
			errorPlacement: function (error, element) {
				// Add the `help-block` class to the error element
				error.addClass("help-block");

				if (element.prop("type") === "checkbox") {
					error.insertAfter(element.parent("label"));
				} else {
					error.insertAfter(element);
				}
			}
		});

		function prevTab(tab) {
			$('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
		}

		function CheckProgram(val) {
			var element = document.getElementById('edit_program');
			if (val == 'others') {
				$('#edit_program').attr('name', 'program');
				$('#program').attr('name', 'p');
				element.style.display = 'block';
				document.getElementById("program").style.display = 'none';
				$('[name="tgl_mulai"]').val("");
				$('[name="tgl_akhir"]').val("");
				$('[name="tujuan"]').val("");
				$('[name="jenis_program"]').val("");
				$('[name="tahun"]').val("");
			} else {
				$.ajax({
					type: "POST",
					url: "<?php echo base_url('index.php/Short_term/get_program')?>",
					dataType: "JSON",
					data: {
						nama: val
					},
					cache: false,
					success: function (data) {
						$.each(data, function (id, nama, tujuan, tgl_mulai, tgl_akhir) {
							$('[name="tgl_mulai"]').val(data.tgl_mulai);
							$('[name="tgl_akhir"]').val(data.tgl_akhir);
							$('[name="tujuan"]').val(data.tujuan);
							$('[name="jenis_program"]').val(data.jenis);
							$('[name="tahun"]').val(data.tahun);
						});
					},
					error: function (XMLHttpRequest, textStatus, errorThrown) {
						alert("Status: " + textStatus);
						alert("Error: " + errorThrown);
					}
				});
				return false;
				element.style.display = 'none';
				document.getElementById("program").style.display = 'block';
			}
		}
		$(document).ready(function () {
			$(".nav-tabs a").click(function () {
				$(this).tab('show');
			});

			$('#sub').on('click', function (event) {
				$('#ton').val("submit");
			});


			$('#import_form').on('submit', function (event) {
				event.preventDefault();
				var empty = 1;
				if ($('#ton').val() == "submit") {
					alert("tes")
					$.ajax({
						url: "<?php echo base_url("
						index.php / Short_term / insert_excel "); ?>",
						method: "POST",
						data: new FormData(this),
						contentType: false,
						cache: false,
						processData: false,
						success: function (data) {
							alert(data);
							document.getElementById('#myTable').style.display = "inline-block";
							document.getElementById('#file').val("");
							document.getElementById('#dokumen').val("");
						},
						error: function (XMLHttpRequest, textStatus, errorThrown) {
							alert("Status: " + textStatus);
							alert("Error: " + errorThrown);
						}

					});
				} else {
					alert("tes")
					$("#body").empty();
					$.ajax({
						url: "<?php echo base_url("
						index.php / Short_term / read "); ?>",
						method: "POST",
						data: new FormData(this),
						contentType: false,
						cache: false,
						processData: false,
						success: function (data) {
							$('#file').val('');
							var sTxt = '';
							var i = 1;
							$.each(JSON.parse(data), function (i, item) {
								sTxt += '<tr>';
								sTxt += '<td>' + i + '</td>';
								$.each(this, function (k, v) {
									if (v == null || v == "WRONG FORMAT") {
										sTxt += '<td class="table-danger"> </td>';
										document.getElementById('alert').style
											.display = 'block';
										empty = 2;
									} else {
										sTxt += '<td>' + v + '</td>';
									}
								});
								sTxt += '</tr>';
								i = i + 1;
							});
							$('#body').append(sTxt);
							document.getElementById('#myTable').style.display = "inline-block";
							if (empty == 1) {
								$('#sub').prop('disabled', false);
							}

						},
					});
				}
			});
		});

	</script>

</body>
