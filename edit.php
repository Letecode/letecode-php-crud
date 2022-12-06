<?php
    if(isset($_GET['id'])) {
        include_once 'api/database.php';
        $db = new Database();
        $apprenant = $db->getApprenant($_GET['id'])->fetch_assoc();

        if(!$apprenant) {
            die('Pas de donnees');
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Modifier <?php echo $apprenant['name']; ?></h1>
            <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaladd"><i class="bi bi-plus"></i> Ajouter</div>
        </div>
       
        <form action="api/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <div class="mb-3">
                <label for="name" class="col-form-label">Nom complet</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $apprenant['name']; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="col-form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $apprenant['email']; ?>"/>
            </div>

            <div class="mb-3">
                <label for="country" class="col-form-label">Pays</label>
                <select class="form-control" id="country" name="country" value="<?php echo $apprenant['name']; ?>">
                    <option>country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Îles Åland</option>
                    <option value="Albania">Albanie</option>
                    <option value="Algeria">Algérie</option>
                    <option value="American Samoa">Samoa américaines</option>
                    <option value="Andorra">Andorre</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctique</option>
                    <option value="Antigua and Barbuda">Antigua-et-Barbuda</option>
                    <option value="Argentina">Argentine</option>
                    <option value="Armenia">Arménie</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australie</option>
                    <option value="Austria">Autriche</option>
                    <option value="Azerbaijan">Azerbaïdjan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahreïn</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbade</option>
                    <option value="Belarus">Biélorussie</option>
                    <option value="Belgium">Belgique</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Bénin</option>
                    <option value="Bermuda">Bermudes</option>
                    <option value="Bhutan">Bhoutan</option>
                    <option value="Bolivia">Bolivie</option>
                    <option value="Bonaire, Sint Eustatius and Saba">Pays-Bas caribéens</option>
                    <option value="Bosnia and Herzegovina">Bosnie-Herzégovine</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Île Bouvet</option>
                    <option value="Brazil">Brésil</option>
                    <option value="British Indian Ocean Territory">Territoire britannique de l’océan Indien</option>
                    <option value="Brunei Darussalam">Brunei</option>
                    <option value="Bulgaria">Bulgarie</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodge</option>
                    <option value="Cameroon">Cameroun</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cap-Vert</option>
                    <option value="Cayman Islands">Îles Caïmans</option>
                    <option value="Central African Republic">République centrafricaine</option>
                    <option value="Chad">Tchad</option>
                    <option value="Chile">Chili</option>
                    <option value="China">Chine</option>
                    <option value="Christmas Island">Île Christmas</option>
                    <option value="Cocos (Keeling) Islands">Îles Cocos</option>
                    <option value="Colombia">Colombie</option>
                    <option value="Comoros">Comores</option>
                    <option value="Congo">Congo-Brazzaville</option>
                    <option value="Congo, Democratic Republic of the Congo">Congo-Kinshasa</option>
                    <option value="Cook Islands">Îles Cook</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'Ivoire">Côte d’Ivoire</option>
                    <option value="Croatia">Croatie</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curacao">Curaçao</option>
                    <option value="Cyprus">Chypre</option>
                    <option value="Czech Republic">Tchéquie</option>
                    <option value="Denmark">Danemark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominique</option>
                    <option value="Dominican Republic">République dominicaine</option>
                    <option value="Ecuador">Équateur</option>
                    <option value="Egypt">Égypte</option>
                    <option value="El Salvador">Salvador</option>
                    <option value="Equatorial Guinea">Guinée équatoriale</option>
                    <option value="Eritrea">Érythrée</option>
                    <option value="Estonia">Estonie</option>
                    <option value="Ethiopia">Éthiopie</option>
                    <option value="Falkland Islands (Malvinas)">Îles Malouines (Îles Falkland)</option>
                    <option value="Faroe Islands">Îles Féroé</option>
                    <option value="Fiji">Fidji</option>
                    <option value="Finland">Finlande</option>
                    <option value="France">France</option>
                    <option value="French Guiana">Guyane française</option>
                    <option value="French Polynesia">Polynésie française</option>
                    <option value="French Southern Territories">Terres australes françaises</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambie</option>
                    <option value="Georgia">Géorgie</option>
                    <option value="Germany">Allemagne</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Grèce</option>
                    <option value="Greenland">Groenland</option>
                    <option value="Grenada">Grenade</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernesey</option>
                    <option value="Guinea">Guinée</option>
                    <option value="Guinea-Bissau">Guinée-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haïti</option>
                    <option value="Heard Island and Mcdonald Islands">Îles Heard-et-MacDonald</option>
                    <option value="Holy See (Vatican City State)">État de la Cité du Vatican</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hongrie</option>
                    <option value="Iceland">Islande</option>
                    <option value="India">Inde</option>
                    <option value="Indonesia">Indonésie</option>
                    <option value="Iran, Islamic Republic of">Iran</option>
                    <option value="Iraq">Irak</option>
                    <option value="Ireland">Irlande</option>
                    <option value="Isle of Man">Île de Man</option>
                    <option value="Israel">Israël</option>
                    <option value="Italy">Italie</option>
                    <option value="Jamaica">Jamaïque</option>
                    <option value="Japan">Japon</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordanie</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Corée du Nord</option>
                    <option value="Korea, Republic of">Corée du Sud</option>
                    <option value="Kosovo">Kosovo</option>
                    <option value="Kuwait">Koweït</option>
                    <option value="Kyrgyzstan">Kirghizstan</option>
                    <option value="Lao People's Democratic Republic">Laos</option>
                    <option value="Latvia">Lettonie</option>
                    <option value="Lebanon">Liban</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libye</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lituanie</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, the Former Yugoslav Republic of">Macédoine du Nord</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaisie</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malte</option>
                    <option value="Marshall Islands">Îles Marshall</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritanie</option>
                    <option value="Mauritius">Maurice</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexique</option>
                    <option value="Micronesia, Federated States of">Micronésie</option>
                    <option value="Moldova, Republic of">Moldavie</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolie</option>
                    <option value="Montenegro">Monténégro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Maroc</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar (Birmanie)</option>
                    <option value="Namibia">Namibie</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Népal</option>
                    <option value="Netherlands">Pays-Bas</option>
                    <option value="Netherlands Antilles">Curaçao</option>
                    <option value="New Caledonia">Nouvelle-Calédonie</option>
                    <option value="New Zealand">Nouvelle-Zélande</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Île Norfolk</option>
                    <option value="Northern Mariana Islands">Îles Mariannes du Nord</option>
                    <option value="Norway">Norvège</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palaos</option>
                    <option value="Palestinian Territory, Occupied">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papouasie-Nouvelle-Guinée</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Pérou</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Îles Pitcairn</option>
                    <option value="Poland">Pologne</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Porto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">La Réunion</option>
                    <option value="Romania">Roumanie</option>
                    <option value="Russian Federation">Russie</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Barthelemy">Saint-Barthélemy</option>
                    <option value="Saint Helena">Sainte-Hélène</option>
                    <option value="Saint Kitts and Nevis">Saint-Christophe-et-Niévès</option>
                    <option value="Saint Lucia">Sainte-Lucie</option>
                    <option value="Saint Martin">Saint-Martin</option>
                    <option value="Saint Pierre and Miquelon">Saint-Pierre-et-Miquelon</option>
                    <option value="Saint Vincent and the Grenadines">Saint-Vincent-et-les Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">Saint-Marin</option>
                    <option value="Sao Tome and Principe">Sao Tomé-et-Principe</option>
                    <option value="Saudi Arabia">Arabie saoudite</option>
                    <option value="Senegal">Sénégal</option>
                    <option value="Serbia">Serbie</option>
                    <option value="Serbia and Montenegro">Serbie</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapour</option>
                    <option value="Sint Maarten">Saint-Martin (partie néerlandaise)</option>
                    <option value="Slovakia">Slovaquie</option>
                    <option value="Slovenia">Slovénie</option>
                    <option value="Solomon Islands">Îles Salomon</option>
                    <option value="Somalia">Somalie</option>
                    <option value="South Africa">Afrique du Sud</option>
                    <option value="South Georgia and the South Sandwich Islands">Géorgie du Sud-et-les Îles Sandwich du Sud</option>
                    <option value="South Sudan">Soudan du Sud</option>
                    <option value="Spain">Espagne</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Soudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard et Jan Mayen</option>
                    <option value="Swaziland">Eswatini</option>
                    <option value="Sweden">Suède</option>
                    <option value="Switzerland">Suisse</option>
                    <option value="Syrian Arab Republic">Syrie</option>
                    <option value="Taiwan, Province of China">Taïwan</option>
                    <option value="Tajikistan">Tadjikistan</option>
                    <option value="Tanzania, United Republic of">Tanzanie</option>
                    <option value="Thailand">Thaïlande</option>
                    <option value="Timor-Leste">Timor oriental</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinité-et-Tobago</option>
                    <option value="Tunisia">Tunisie</option>
                    <option value="Turkey">Turquie</option>
                    <option value="Turkmenistan">Turkménistan</option>
                    <option value="Turks and Caicos Islands">Îles Turques-et-Caïques</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Ouganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">Émirats arabes unis</option>
                    <option value="United Kingdom">Royaume-Uni</option>
                    <option value="United States">États-Unis</option>
                    <option value="United States Minor Outlying Islands">Îles mineures éloignées des États-Unis</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Ouzbékistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viêt Nam</option>
                    <option value="Virgin Islands, British">Îles Vierges britanniques</option>
                    <option value="Virgin Islands, U.s.">Îles Vierges des États-Unis</option>
                    <option value="Wallis and Futuna">Wallis-et-Futuna</option>
                    <option value="Western Sahara">Sahara occidental</option>
                    <option value="Yemen">Yémen</option>
                    <option value="Zambia">Zambie</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="homme" value="Homme" <?php if($apprenant['gender'] == "Homme") { echo "checked"; }  ?>>
                <label class="form-check-label" for="homme">
                    Homme
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="femme" value="Femme" <?php if($apprenant['gender'] == "Femme") { echo "checked"; }  ?>>
                <label class="form-check-label" for="femme">
                    Femme
                </label>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Créer un apprenant</button>
            </div>
        </form>
                    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>