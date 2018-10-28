<?php
header('Content-Type: application/json');
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str);
?>
{"result": [{"vat_label": false, "name": "Afghanistan", "id": 3}, {"vat_label": false, "name": "Albania", "id": 6}, {"vat_label": false, "name": "Algeria", "id": 62}, {"vat_label": false, "name": "American Samoa", "id": 11}, {"vat_label": false, "name": "Andorra", "id": 1}, {"vat_label": false, "name": "Angola", "id": 8}, {"vat_label": false, "name": "Anguilla", "id": 5}, {"vat_label": false, "name": "Antarctica", "id": 9}, {"vat_label": false, "name": "Antigua and Barbuda", "id": 4}, {"vat_label": false, "name": "Argentina", "id": 10}, {"vat_label": false, "name": "Armenia", "id": 7}, {"vat_label": false, "name": "Aruba", "id": 14}, {"vat_label": false, "name": "Australia", "id": 13}, {"vat_label": "VAT", "name": "Austria", "id": 12}, {"vat_label": false, "name": "Azerbaijan", "id": 16}, {"vat_label": false, "name": "Bahamas", "id": 32}, {"vat_label": false, "name": "Bahrain", "id": 23}, {"vat_label": false, "name": "Bangladesh", "id": 19}, {"vat_label": false, "name": "Barbados", "id": 18}, {"vat_label": false, "name": "Belarus", "id": 36}, {"vat_label": "VAT", "name": "Belgium", "id": 20}, {"vat_label": false, "name": "Belize", "id": 37}, {"vat_label": false, "name": "Benin", "id": 25}, {"vat_label": false, "name": "Bermuda", "id": 27}, {"vat_label": false, "name": "Bhutan", "id": 33}, {"vat_label": false, "name": "Bolivia", "id": 29}, {"vat_label": false, "name": "Bonaire, Sint Eustatius and Saba", "id": 30}, {"vat_label": false, "name": "Bosnia and Herzegovina", "id": 17}, {"vat_label": false, "name": "Botswana", "id": 35}, {"vat_label": false, "name": "Bouvet Island", "id": 34}, {"vat_label": false, "name": "Brazil", "id": 31}, {"vat_label": false, "name": "British Indian Ocean Territory", "id": 105}, {"vat_label": false, "name": "Brunei Darussalam", "id": 28}, {"vat_label": "VAT", "name": "Bulgaria", "id": 22}, {"vat_label": false, "name": "Burkina Faso", "id": 21}, {"vat_label": false, "name": "Burundi", "id": 24}, {"vat_label": false, "name": "Cambodia", "id": 116}, {"vat_label": false, "name": "Cameroon", "id": 47}, {"vat_label": "HST", "name": "Canada", "id": 38}, {"vat_label": false, "name": "Cape Verde", "id": 52}, {"vat_label": false, "name": "Cayman Islands", "id": 123}, {"vat_label": false, "name": "Central African Republic", "id": 40}, {"vat_label": false, "name": "Chad", "id": 214}, {"vat_label": false, "name": "Chile", "id": 46}, {"vat_label": false, "name": "China", "id": 48}, {"vat_label": false, "name": "Christmas Island", "id": 54}, {"vat_label": false, "name": "Cocos (Keeling) Islands", "id": 39}, {"vat_label": false, "name": "Colombia", "id": 49}, {"vat_label": false, "name": "Comoros", "id": 118}, {"vat_label": false, "name": "Congo", "id": 42}, {"vat_label": false, "name": "Cook Islands", "id": 45}, {"vat_label": false, "name": "Costa Rica", "id": 50}, {"vat_label": "VAT", "name": "Croatia", "id": 97}, {"vat_label": false, "name": "Cuba", "id": 51}, {"vat_label": false, "name": "Cura\u00e7ao", "id": 53}, {"vat_label": "VAT", "name": "Cyprus", "id": 55}, {"vat_label": "VAT", "name": "Czech Republic", "id": 56}, {"vat_label": false, "name": "C\u00f4te d'Ivoire", "id": 44}, {"vat_label": false, "name": "Democratic Republic of the Congo", "id": 41}, {"vat_label": "VAT", "name": "Denmark", "id": 59}, {"vat_label": false, "name": "Djibouti", "id": 58}, {"vat_label": false, "name": "Dominica", "id": 60}, {"vat_label": "RNC", "name": "Dominican Republic", "id": 61}, {"vat_label": false, "name": "Ecuador", "id": 63}, {"vat_label": false, "name": "Egypt", "id": 65}, {"vat_label": false, "name": "El Salvador", "id": 209}, {"vat_label": false, "name": "Equatorial Guinea", "id": 87}, {"vat_label": false, "name": "Eritrea", "id": 67}, {"vat_label": "VAT", "name": "Estonia", "id": 64}, {"vat_label": false, "name": "Ethiopia", "id": 69}, {"vat_label": false, "name": "Falkland Islands", "id": 72}, {"vat_label": false, "name": "Faroe Islands", "id": 74}, {"vat_label": false, "name": "Fiji", "id": 71}, {"vat_label": "VAT", "name": "Finland", "id": 70}, {"vat_label": "VAT", "name": "France", "id": 75}, {"vat_label": false, "name": "French Guiana", "id": 79}, {"vat_label": false, "name": "French Polynesia", "id": 174}, {"vat_label": false, "name": "French Southern Territories", "id": 215}, {"vat_label": false, "name": "Gabon", "id": 76}, {"vat_label": false, "name": "Gambia", "id": 84}, {"vat_label": false, "name": "Georgia", "id": 78}, {"vat_label": "VAT", "name": "Germany", "id": 57}, {"vat_label": false, "name": "Ghana", "id": 80}, {"vat_label": false, "name": "Gibraltar", "id": 81}, {"vat_label": "VAT", "name": "Greece", "id": 88}, {"vat_label": false, "name": "Greenland", "id": 83}, {"vat_label": false, "name": "Grenada", "id": 77}, {"vat_label": false, "name": "Guadeloupe", "id": 86}, {"vat_label": false, "name": "Guam", "id": 91}, {"vat_label": false, "name": "Guatemala", "id": 90}, {"vat_label": false, "name": "Guernsey", "id": 82}, {"vat_label": false, "name": "Guinea", "id": 85}, {"vat_label": false, "name": "Guinea-Bissau", "id": 92}, {"vat_label": false, "name": "Guyana", "id": 93}, {"vat_label": false, "name": "Haiti", "id": 98}, {"vat_label": false, "name": "Heard Island and McDonald Islands", "id": 95}, {"vat_label": false, "name": "Holy See (Vatican City State)", "id": 236}, {"vat_label": false, "name": "Honduras", "id": 96}, {"vat_label": false, "name": "Hong Kong", "id": 94}, {"vat_label": "VAT", "name": "Hungary", "id": 99}, {"vat_label": false, "name": "Iceland", "id": 108}, {"vat_label": "GSTIN", "name": "India", "id": 104}, {"vat_label": false, "name": "Indonesia", "id": 100}, {"vat_label": false, "name": "Iran", "id": 107}, {"vat_label": false, "name": "Iraq", "id": 106}, {"vat_label": "VAT", "name": "Ireland", "id": 101}, {"vat_label": false, "name": "Isle of Man", "id": 103}, {"vat_label": false, "name": "Israel", "id": 102}, {"vat_label": "VAT", "name": "Italy", "id": 109}, {"vat_label": false, "name": "Jamaica", "id": 111}, {"vat_label": false, "name": "Japan", "id": 113}, {"vat_label": false, "name": "Jersey", "id": 110}, {"vat_label": false, "name": "Jordan", "id": 112}, {"vat_label": false, "name": "Kazakhstan", "id": 124}, {"vat_label": false, "name": "Kenya", "id": 114}, {"vat_label": false, "name": "Kiribati", "id": 117}, {"vat_label": false, "name": "Kuwait", "id": 122}, {"vat_label": false, "name": "Kyrgyzstan", "id": 115}, {"vat_label": false, "name": "Laos", "id": 125}, {"vat_label": "VAT", "name": "Latvia", "id": 134}, {"vat_label": false, "name": "Lebanon", "id": 126}, {"vat_label": false, "name": "Lesotho", "id": 131}, {"vat_label": false, "name": "Liberia", "id": 130}, {"vat_label": false, "name": "Libya", "id": 135}, {"vat_label": false, "name": "Liechtenstein", "id": 128}, {"vat_label": "VAT", "name": "Lithuania", "id": 132}, {"vat_label": "VAT", "name": "Luxembourg", "id": 133}, {"vat_label": false, "name": "Macau", "id": 147}, {"vat_label": false, "name": "Macedonia, the former Yugoslav Republic of", "id": 143}, {"vat_label": false, "name": "Madagascar", "id": 141}, {"vat_label": false, "name": "Malawi", "id": 155}, {"vat_label": false, "name": "Malaysia", "id": 157}, {"vat_label": false, "name": "Maldives", "id": 154}, {"vat_label": false, "name": "Mali", "id": 144}, {"vat_label": "VAT", "name": "Malta", "id": 152}, {"vat_label": false, "name": "Marshall Islands", "id": 142}, {"vat_label": false, "name": "Martinique", "id": 149}, {"vat_label": false, "name": "Mauritania", "id": 150}, {"vat_label": false, "name": "Mauritius", "id": 153}, {"vat_label": false, "name": "Mayotte", "id": 246}, {"vat_label": "RFC", "name": "Mexico", "id": 156}, {"vat_label": false, "name": "Micronesia", "id": 73}, {"vat_label": false, "name": "Moldova", "id": 138}, {"vat_label": false, "name": "Monaco", "id": 137}, {"vat_label": false, "name": "Mongolia", "id": 146}, {"vat_label": false, "name": "Montenegro", "id": 139}, {"vat_label": false, "name": "Montserrat", "id": 151}, {"vat_label": false, "name": "Morocco", "id": 136}, {"vat_label": false, "name": "Mozambique", "id": 158}, {"vat_label": false, "name": "Myanmar", "id": 145}, {"vat_label": false, "name": "Namibia", "id": 159}, {"vat_label": false, "name": "Nauru", "id": 168}, {"vat_label": false, "name": "Nepal", "id": 167}, {"vat_label": "VAT", "name": "Netherlands", "id": 165}, {"vat_label": false, "name": "New Caledonia", "id": 160}, {"vat_label": false, "name": "New Zealand", "id": 170}, {"vat_label": false, "name": "Nicaragua", "id": 164}, {"vat_label": false, "name": "Niger", "id": 161}, {"vat_label": false, "name": "Nigeria", "id": 163}, {"vat_label": false, "name": "Niue", "id": 169}, {"vat_label": false, "name": "Norfolk Island", "id": 162}, {"vat_label": false, "name": "North Korea", "id": 120}, {"vat_label": false, "name": "Northern Mariana Islands", "id": 148}, {"vat_label": false, "name": "Norway", "id": 166}, {"vat_label": false, "name": "Oman", "id": 171}, {"vat_label": false, "name": "Pakistan", "id": 177}, {"vat_label": false, "name": "Palau", "id": 184}, {"vat_label": false, "name": "Panama", "id": 172}, {"vat_label": false, "name": "Papua New Guinea", "id": 175}, {"vat_label": false, "name": "Paraguay", "id": 185}, {"vat_label": false, "name": "Peru", "id": 173}, {"vat_label": false, "name": "Philippines", "id": 176}, {"vat_label": false, "name": "Pitcairn Islands", "id": 180}, {"vat_label": "VAT", "name": "Poland", "id": 178}, {"vat_label": "VAT", "name": "Portugal", "id": 183}, {"vat_label": false, "name": "Puerto Rico", "id": 181}, {"vat_label": false, "name": "Qatar", "id": 186}, {"vat_label": "VAT", "name": "Romania", "id": 188}, {"vat_label": false, "name": "Russian Federation", "id": 190}, {"vat_label": false, "name": "Rwanda", "id": 191}, {"vat_label": false, "name": "R\u00e9union", "id": 187}, {"vat_label": false, "name": "Saint Barth\u00e9l\u00e9my", "id": 26}, {"vat_label": false, "name": "Saint Helena, Ascension and Tristan da Cunha", "id": 198}, {"vat_label": false, "name": "Saint Kitts and Nevis", "id": 119}, {"vat_label": false, "name": "Saint Lucia", "id": 127}, {"vat_label": false, "name": "Saint Martin (French part)", "id": 140}, {"vat_label": false, "name": "Saint Pierre and Miquelon", "id": 179}, {"vat_label": false, "name": "Saint Vincent and the Grenadines", "id": 237}, {"vat_label": false, "name": "Samoa", "id": 244}, {"vat_label": false, "name": "San Marino", "id": 203}, {"vat_label": false, "name": "Saudi Arabia", "id": 192}, {"vat_label": false, "name": "Senegal", "id": 204}, {"vat_label": false, "name": "Serbia", "id": 189}, {"vat_label": false, "name": "Seychelles", "id": 194}, {"vat_label": false, "name": "Sierra Leone", "id": 202}, {"vat_label": "GST No.", "name": "Singapore", "id": 197}, {"vat_label": false, "name": "Sint Maarten (Dutch part)", "id": 210}, {"vat_label": "VAT", "name": "Slovakia", "id": 201}, {"vat_label": "VAT", "name": "Slovenia", "id": 199}, {"vat_label": false, "name": "Solomon Islands", "id": 193}, {"vat_label": false, "name": "Somalia", "id": 205}, {"vat_label": false, "name": "South Africa", "id": 247}, {"vat_label": false, "name": "South Georgia and the South Sandwich Islands", "id": 89}, {"vat_label": false, "name": "South Korea", "id": 121}, {"vat_label": false, "name": "South Sudan", "id": 207}, {"vat_label": "VAT", "name": "Spain", "id": 68}, {"vat_label": false, "name": "Sri Lanka", "id": 129}, {"vat_label": false, "name": "State of Palestine", "id": 182}, {"vat_label": false, "name": "Sudan", "id": 195}, {"vat_label": false, "name": "Suriname", "id": 206}, {"vat_label": false, "name": "Svalbard and Jan Mayen", "id": 200}, {"vat_label": false, "name": "Swaziland", "id": 212}, {"vat_label": "VAT", "name": "Sweden", "id": 196}, {"vat_label": false, "name": "Switzerland", "id": 43}, {"vat_label": false, "name": "Syria", "id": 211}, {"vat_label": false, "name": "S\u00e3o Tom\u00e9 and Pr\u00edncipe", "id": 208}, {"vat_label": false, "name": "Taiwan", "id": 227}, {"vat_label": false, "name": "Tajikistan", "id": 218}, {"vat_label": false, "name": "Tanzania", "id": 228}, {"vat_label": false, "name": "Thailand", "id": 217}, {"vat_label": false, "name": "Timor-Leste", "id": 223}, {"vat_label": false, "name": "Togo", "id": 216}, {"vat_label": false, "name": "Tokelau", "id": 219}, {"vat_label": false, "name": "Tonga", "id": 222}, {"vat_label": false, "name": "Trinidad and Tobago", "id": 225}, {"vat_label": false, "name": "Tunisia", "id": 221}, {"vat_label": false, "name": "Turkey", "id": 224}, {"vat_label": false, "name": "Turkmenistan", "id": 220}, {"vat_label": false, "name": "Turks and Caicos Islands", "id": 213}, {"vat_label": false, "name": "Tuvalu", "id": 226}, {"vat_label": false, "name": "USA Minor Outlying Islands", "id": 232}, {"vat_label": false, "name": "Uganda", "id": 230}, {"vat_label": false, "name": "Ukraine", "id": 229}, {"vat_label": false, "name": "United Arab Emirates", "id": 2}, {"vat_label": "VAT", "name": "United Kingdom", "id": 231}, {"vat_label": false, "name": "United States", "id": 233}, {"vat_label": false, "name": "Uruguay", "id": 234}, {"vat_label": false, "name": "Uzbekistan", "id": 235}, {"vat_label": false, "name": "Vanuatu", "id": 242}, {"vat_label": false, "name": "Venezuela", "id": 238}, {"vat_label": false, "name": "Vietnam", "id": 241}, {"vat_label": false, "name": "Virgin Islands (British)", "id": 239}, {"vat_label": false, "name": "Virgin Islands (USA)", "id": 240}, {"vat_label": false, "name": "Wallis and Futuna", "id": 243}, {"vat_label": false, "name": "Western Sahara", "id": 66}, {"vat_label": false, "name": "Yemen", "id": 245}, {"vat_label": false, "name": "Zambia", "id": 248}, {"vat_label": false, "name": "Zimbabwe", "id": 249}, {"vat_label": false, "name": "\u00c5land Islands", "id": 15}], "jsonrpc": "2.0", "id": 7423778}