<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="./src/css/estilos_reg_cliente.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script src="https://kit.fontawesome.com/ca21a15e6d.js" crossorigin="anonymous"></script>
  <title>Registro</title>
</head>

<body>
  <header>
    <div class="header">
      <a href="./index.php" class="u-image u-logo u-image-1"><img src="./src/images/default-logo.png"
          class="u-logo-image u-logo-image-1"></a>
      <div class="u-nav-container">
        <a class="user" href="./inicio_sesion.html"><i style="color: black" class="fa-solid fa-user"></i></a>
      </div>
    </div>
  </header>

  <div class="testbox">
    <h1 style="font-weight: bold;">Registro</h1>

    <form class="Registro" action="./src/php/registro.php" method="post">
      <hr>
      <div class="tipoDeCuenta">
        <input type="radio" value="cliente" id="cliente" name="cuenta" checked/>
        <label for="cliente" class="radio">Cliente</label>
        <input type="radio" value="proveedor" id="proveedor" name="cuenta"/>
        <label for="proveedor" class="radio">Proveedor</label>
      </div>
      <hr>
      <label id="icon" for="email"><i class="envelope-icon "><i class="fa-solid fa-envelope"></i></label>
      <input type="email" name="email" id="name" placeholder="Email" required />
      <label id="icon" for="nombre"><i class="usuario-icon"><i class="fa-solid fa-user"></i></label>
      <input type="text" name="nombre" id="name" placeholder="Nombre" required />
      <label id="icon" for="contraseña"><i class="shield-icon"><i class="fa-solid fa-key"></i></label>
      <input type="password" name="contraseña" id="name" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
              title="La contraseña debe contener al menos una letra mayuscula, una minuscula, un dígito y minimo 8 caracteres"  required />
      <label id="icon" for="confirm-contraseña"><i class="shield-icon"><i class="fa-solid fa-key"></i></label>
      <input type="password" name="confirm-contraseña" id="name" placeholder="Confirmar contraseña" required />
      <label id="icon" for="telefono"><i class="shield-icon"><i class="fa-solid fa-phone"></i></label>
      <select class="pais_tel" name="pais" id="pais_tel" required>
        <option></option>
        <option value="+93">Afganistán</option>
        <option value="+355">Albania</option>
        <option value="+49">Alemania</option>
        <option value="+376">Andorra</option>
        <option value="+244">Angola</option>
        <option value="+1">Antigua y Barbuda</option>
        <option value="+213">Argelia</option>
        <option value="+54">Argentina</option>
        <option value="+374">Armenia</option>
        <option value="+61">Australia</option>
        <option value="+43">Austria</option>
        <option value="+994">Azerbaiyán</option>
        <option value="+1">Bahamas</option>
        <option value="+880">Bangladés</option>
        <option value="+1">Barbados</option>
        <option value="+973">Baréin</option>
        <option value="+32">Bélgica</option>
        <option value="+501">Belice</option>
        <option value="+229">Benín</option>
        <option value="+591">Bolivia</option>
        <option value="+387">Bosnia y Herzegovina</option>
        <option value="+55">Brasil</option>
        <option value="+673">Brunéi</option>
        <option value="+359">Bulgaria</option>
        <option value="+226">Burkina Faso</option>
        <option value="+257">Burundi</option> 
        <option value="+238">Cabo Verde</option>
        <option value="+855">Camboya</option>
        <option value="+237">Camerún</option>
        <option value="+1">Canadá</option>
        <option value="+974">Catar</option>
        <option value="+56">Chile</option>
        <option value="+86">China</option>
        <option value="+57">Colombia</option>
        <option value="+82">Corea del Sur</option>
        <option value="+506">Costa Rica</option>
        <option value="+385">Croacia</option>
        <option value="+53">Cuba</option>
        <option value="+45">Dinamarca</option>
        <option value="+1">Dominica</option>
        <option value="+593">Ecuador</option>
        <option value="+20">Egipto</option>
        <option value="+503">El Salvador</option>
        <option value="+971">Emiratos Árabes Unidos</option>
        <option value="+291">Eritrea</option>
        <option value="+421">Eslovaquia</option>
        <option value="+386">Eslovenia</option>
        <option value="+34">España</option>
        <option value="+1">Estados Unidos</option>
        <option value="+372">Estonia</option>
        <option value="+251">Etiopía</option>
        <option value="+63">Filipinas</option>
        <option value="+358">Finlandia</option>
        <option value="+679">Fiyi</option>
        <option value="+33">Francia</option>
        <option value="+241">Gabón</option>
        <option value="+220">Gambia</option>
        <option value="+995">Georgia</option>
        <option value="+233">Ghana</option>
        <option value="+1">Granada</option>
        <option value="+30">Grecia</option>
        <option value="+502">Guatemala</option>
        <option value="+509">Haití</option>
        <option value="+504">Honduras</option>
        <option value="+36">Hungría</option>
        <option value="+91">India</option>
        <option value="+62">Indonesia</option>
        <option value="+964">Irak</option>
        <option value="+98">Irán</option>
        <option value="+353">Irlanda</option>
        <option value="+354">Islandia</option>
        <option value="+972">Israel</option>
        <option value="+39">Italia</option>
        <option value="+1">Jamaica</option>
        <option value="+81">Japón</option>
        <option value="+962">Jordania</option>
        <option value="+7">Kazajistán</option>
        <option value="+254">Kenia</option>
        <option value="+996">Kirguistán</option>
        <option value="+965">Kuwait</option>
        <option value="+856">Laos</option>
        <option value="+266">Lesoto</option>
        <option value="+371">Letonia</option>
        <option value="+961">Líbano</option>
        <option value="+231">Liberia</option>
        <option value="+218">Libia</option>
        <option value="+423">Liechtenstein</option>
        <option value="+370">Lituania</option>
        <option value="+352">Luxemburgo</option>
        <option value="+389">Macedonia del Norte</option>
        <option value="+261">Madagascar</option>
        <option value="+60">Malasia</option>
        <option value="+265">Malaui</option>
        <option value="+960">Maldivas</option>
        <option value="+223">Malí</option>
        <option value="+356">Malta</option>
        <option value="+212">Marruecos</option>
        <option value="+230">Mauricio</option>
        <option value="+222">Mauritania</option>
        <option value="+52">México</option>
        <option value="+691">Micronesia</option>
        <option value="+373">Moldavia</option>
        <option value="+377">Mónaco</option>
        <option value="+976">Mongolia</option>
        <option value="+382">Montenegro</option>
        <option value="+264">Namibia</option>
        <option value="+977">Nepal</option>
        <option value="+505">Nicaragua</option>
        <option value="+227">Níger</option>
        <option value="+234">Nigeria</option>
        <option value="+47">Noruega</option>
        <option value="+64">Nueva Zelanda</option>
        <option value="+968">Omán</option>
        <option value="+31">Países Bajos</option>
        <option value="+92">Pakistán</option>
        <option value="+680">Palaos</option>
        <option value="+507">Panamá</option>
        <option value="+675">Papúa Nueva Guinea</option>
        <option value="+595">Paraguay</option>
        <option value="+51">Perú</option>
        <option value="+48">Polonia</option>
        <option value="+351">Portugal</option>
        <option value="+44">Reino Unido</option>
        <option value="+420">República Checa</option>
        <option value="+242">República del Congo</option>
        <option value="+243">República Democrática del Congo</option>
        <option value="+1">República Dominicana</option>
        <option value="+27">República Sudafricana</option>
        <option value="+250">Ruanda</option>
        <option value="+40">Rumanía</option>
        <option value="+7">Rusia</option>
        <option value="+685">Samoa</option>
        <option value="+221">Senegal</option>
        <option value="+381">Serbia</option>
        <option value="+248">Seychelles</option>
        <option value="+232">Sierra Leona</option>
        <option value="+65">Singapur</option>
        <option value="+963">Siria</option>
        <option value="+252">Somalia</option>
        <option value="+94">Sri Lanka</option>
        <option value="+268">Suazilandia</option>
        <option value="+249">Sudán</option>
        <option value="+211">Sudán del Sur</option>
        <option value="+46">Suecia</option>
        <option value="+41">Suiza</option>
        <option value="+594">Surinam</option>
        <option value="+66">Tailandia</option>
        <option value="+255">Tanzania</option>
        <option value="+992">Tayikistán</option>
        <option value="+228">Togo</option>
        <option value="+676">Tonga</option>
        <option value="+1">Trinidad y Tobago</option>
        <option value="+216">Túnez</option>
        <option value="+993">Turkmenistán</option>
        <option value="+90">Turquía</option>
        <option value="+668">Tuvalu</option>
        <option value="+380">Ucrania</option>
        <option value="+256">Uganda</option>
        <option value="+598">Uruguay</option>
        <option value="+998">Uzbekistán</option>
        <option value="+678">Vanuatu</option>
        <option value="+58">Venezuela</option>
        <option value="+84">Vietnam</option>
        <option value="+967">Yemen</option>
        <option value="+260">Zambia</option>
        <option value="+263">Zimbabue</option>
      </select>
      <input type="text" id="telf" name="telefono" placeholder="Telefono" disabled="disabled" required/>
      <label id="icon" for="pais"><i class="fa-brands fa-font-awesome"></i></label>
      <select class="pais" name="pais">
        <option value="NA" selected>Selecciona una opcion</option>
        <option value="Afganistán">Afganistán</option>
        <option value="Albania">Albania</option>
        <option value="Alemania">Alemania</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Antigua y Barbuda">Antigua y Barbuda</option>
        <option value="Arabia Saudita">Arabia Saudita</option>
        <option value="Argelia">Argelia</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaiyán">Azerbaiyán</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bangladés">Bangladés</option>
        <option value="Barbados">Barbados</option>
        <option value="Baréin">Baréin</option>
        <option value="Bélgica">Bélgica</option>
        <option value="Belice">Belice</option>
        <option value="Benín">Benín</option>
        <option value="Bielorrusia">Bielorrusia</option>
        <option value="Birmania/Myanmar">Birmania/Myanmar</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
        <option value="Botsuana">Botsuana</option>
        <option value="Brasil">Brasil</option>
        <option value="Brunéi">Brunéi</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Bután">Bután</option>
        <option value="Cabo Verde">Cabo Verde</option>
        <option value="Camboya">Camboya</option>
        <option value="Camerún">Camerún</option>
        <option value="Canadá">Canadá</option>
        <option value="Catar">Catar</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Chipre">Chipre</option>
        <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoras">Comoras</option>
        <option value="Corea del Norte">Corea del Norte</option>
        <option value="Corea del Sur">Corea del Sur</option>
        <option value="Costa de Marfil">Costa de Marfil</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Croacia">Croacia</option>
        <option value="Cuba">Cuba</option>
        <option value="Dinamarca">Dinamarca</option>
        <option value="Dominica">Dominica</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egipto">Egipto</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Eslovaquia">Eslovaquia</option>
        <option value="Eslovenia">Eslovenia</option>
        <option value="España">España</option>
        <option value="Estados Unidos">Estados Unidos</option>
        <option value="Estonia">Estonia</option>
        <option value="Etiopía">Etiopía</option>
        <option value="Filipinas">Filipinas</option>
        <option value="Finlandia">Finlandia</option>
        <option value="Fiyi">Fiyi</option>
        <option value="Francia">Francia</option>
        <option value="Gabón">Gabón</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Ghana">Ghana</option>
        <option value="Granada">Granada</option>
        <option value="Grecia">Grecia</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guyana">Guyana</option>
        <option value="Guinea">Guinea</option>
        <option value="Guinea ecuatorial">Guinea ecuatorial</option>
        <option value="Guinea-Bisáu">Guinea-Bisáu</option>
        <option value="Haití">Haití</option>
        <option value="Honduras">Honduras</option>
        <option value="Hungría">Hungría</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Irak">Irak</option>
        <option value="Irán">Irán</option>
        <option value="Irlanda">Irlanda</option>
        <option value="Islandia">Islandia</option>
        <option value="Islas Marshall">Islas Marshall</option>
        <option value="Islas Salomón">Islas Salomón</option>
        <option value="Israel">Israel</option>
        <option value="Italia">Italia</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japón">Japón</option>
        <option value="Jordania">Jordania</option>
        <option value="Kazajistán">Kazajistán</option>
        <option value="Kenia">Kenia</option>
        <option value="Kirguistán">Kirguistán</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Laos">Laos</option>
        <option value="Lesoto">Lesoto</option>
        <option value="Letonia">Letonia</option>
        <option value="Líbano">Líbano</option>
        <option value="Liberia">Liberia</option>
        <option value="Libia">Libia</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lituania">Lituania</option>
        <option value="Luxemburgo">Luxemburgo</option>
        <option value="Macedonia del Norte">Macedonia del Norte</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malasia">Malasia</option>
        <option value="Malaui">Malaui</option>
        <option value="Maldivas">Maldivas</option>
        <option value="Malí">Malí</option>
        <option value="Malta">Malta</option>
        <option value="Marruecos">Marruecos</option>
        <option value="Mauricio">Mauricio</option>
        <option value="Mauritania">Mauritania</option>
        <option value="México">México</option>
        <option value="Micronesia">Micronesia</option>
        <option value="Moldavia">Moldavia</option>
        <option value="Mónaco">Mónaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montenegro">Montenegro</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Namibia">Namibia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Níger">Níger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Noruega">Noruega</option>
        <option value="Nueva Zelanda">Nueva Zelanda</option>
        <option value="Omán">Omán</option>
        <option value="Países Bajos">Países Bajos</option>
        <option value="Pakistán">Pakistán</option>
        <option value="Palaos">Palaos</option>
        <option value="Panamá">Panamá</option>
        <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Perú">Perú</option>
        <option value="Polonia">Polonia</option>
        <option value="Portugal">Portugal</option>
        <option value="Reino Unido">Reino Unido</option>
        <option value="República Centroafricana">República Centroafricana</option>
        <option value="República Checa">República Checa</option>
        <option value="República del Congo">República del Congo</option>
        <option value="República Democrática del Congo">República Democrática del Congo</option>
        <option value="República Dominicana">República Dominicana</option>
        <option value="República Sudafricana">República Sudafricana</option>
        <option value="Ruanda">Ruanda</option>
        <option value="Rumanía">Rumanía</option>
        <option value="Rusia">Rusia</option>
        <option value="Samoa">Samoa</option>
        <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
        <option value="San Marino">San Marino</option>
        <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
        <option value="Santa Lucía">Santa Lucía</option>
        <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
        <option value="Senegal">Senegal</option>
        <option value="Serbia">Serbia</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leona">Sierra Leona</option>
        <option value="Singapur">Singapur</option>
        <option value="Siria">Siria</option>
        <option value="Somalia">Somalia</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Suazilandia">Suazilandia</option>
        <option value="Sudán">Sudán</option>
        <option value="Sudán del Sur">Sudán del Sur</option>
        <option value="Suecia">Suecia</option>
        <option value="Suiza">Suiza</option>
        <option value="Surinam">Surinam</option>
        <option value="Tailandia">Tailandia</option>
        <option value="Tanzania">Tanzania</option>
        <option value="Tayikistán">Tayikistán</option>
        <option value="Timor Oriental">Timor Oriental</option>
        <option value="Togo">Togo</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad y Tobago">Trinidad y Tobago</option>
        <option value="Túnez">Túnez</option>
        <option value="Turkmenistán">Turkmenistán</option>
        <option value="Turquía">Turquía</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Ucrania">Ucrania</option>
        <option value="Uganda">Uganda</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Uzbekistán">Uzbekistán</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Yemen">Yemen</option>
        <option value="Yibuti">Yibuti</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabue">Zimbabue</option>
      </select>
      <br>
      <div class="foot">
        <div>
          <p style="font-weight: bold;">Haz click aqui para checar <a href="#">Terminos y condiciones</a></p>
        </div>
        <input type="submit" value="Registrarse" class="boton">
      </div>
    </form>
  </div>
</body>
<script>
  var pais = document.getElementById('pais_tel');
  var telf = document.getElementById('telf');
  
  pais.onchange = function(e) {
      telf.value = this.value;
      if((this.value).trim() != '') {
          telf.disabled = false;
      } else {
          telf.disabled = true
      }
  }
  
  telf.onkeyup = function(e) {
      var nums_v = this.value.match(/\d+/g);
      if (nums_v != null) {
          this.value = '+'+((nums_v).toString().replace(/\,/, ''));
      } else { 
          this.value = pais.value;
      }
  }
</script>

</html>