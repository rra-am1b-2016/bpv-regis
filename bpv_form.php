<form class="form-bpv">
        <h2 class="form-signin-heading">Invoer BPV-bedrijf</h2>
        
        <label for="nameCompany" class="sr-only">Naam van het bedrijf</label>
        <input type="text" 
               id="nameCompany" 
               class="form-control" 
               placeholder="Naam van het bedrijf" 
               value="Bissmark"
               required>

        <label for="phoneNumberCompany" class="sr-only">Telefoonnr. vast</label>
        <input type="text" 
               id="phoneNumberCompany" 
               class="form-control" 
               placeholder="Telefoonnr vast" 
               value="0251-674209"
               required>


        <label for="nameContact" class="sr-only">Naam contact</label>
        <input type="text" 
               id="nameContact" 
               class="form-control" 
               placeholder="Naam contact"
               value="Harry Heens" 
               required>

        <label for="mobileContact" class="sr-only">06-nr. contact</label>
        <input type="text" 
               id="mobileContact" 
               class="form-control" 
               placeholder="06-nr. contact"
               value="+31 6 2560 5242" 
               required>

        
        <label for="streetName" class="sr-only">Straatnaam</label>
        <input type="text" 
               id="streetName" 
               class="form-control" 
               placeholder="Straatnaam"
               value="Vreeswijksestraatweg" 
               required>

        <label for="houseNumber" class="sr-only">huisnummer</label>
        <input type="text" 
               id="houseNumber" 
               class="form-control" 
               placeholder="Huisnummer" 
               value="42"
               required>
        
        <label for="postalcode" class="sr-only">Postcode</label>
        <input type="text" 
               id="postalcode" 
               class="form-control" 
               placeholder="Postcode" 
               value="1905 BC"
               required>
        
        <label for="city" class="sr-only">Woonplaats</label>
        <input type="text" 
               id="city" 
               class="form-control" 
               placeholder="Woonplaats" 
               value="Oudegein"
               required>
        
        
        <label for="urlCompany" class="sr-only">URL website BPVbedrijf</label>
        <input type="url" 
               id="urlCompany" 
               class="form-control" 
               placeholder="URL website BPV bedrijf" 
               value="bissmark.nl"
               required>
        
        
        <label for="emailContact" class="sr-only">E-mail contactpersoon</label>
        
        <input type="email" 
               id="emailContact" 
               class="form-control" 
               placeholder="E-mailadres contactpersoon" 
               value="hheens@bissmark.nl"
               required>
        
        <label for="whatToDo" class="sr-only">Korte omschrijving</label>
        <textarea id="whatToDo" 
                  class="form-control" 
                  placeholder="Korte omschrijving verwachte werkzaamheden"
                  required>Alle voorkomende werkzaamheden
        </textarea>
        
        <label for="dateTime" class="sr-only">Datum Tijd</label>
        <input type="hidden" 
               id="dateTime" 
               class="form-control" 
               placeholder="<?php echo date('Y-m-d H:i:s') ?>" 
               value="<?php echo date('Y-m-d H:i:s') ?>"
               required>
        
        
        <button class="btn btn-lg btn-primary btn-block" id="btn_bpv_form">Verstuur</button>
        <div class="alert alert-success" role="alert" id="succes_insert">
          Het bedrijf is succesvol toegevoegd
        </div>
        <div class="alert alert-warning" role="alert" id="duplicate_entry">          
          Het door u ingevoerde bedrijf is al bekent. U kunt het niet opnieuw invoeren.
        </div>
</form>

<div class="alert alert-danger" role="alert" id="error_id">
U heeft een niet bestaand studentnummer ingevuld. Probeer het opnieuw, 
  <a href="index.php?content=login_form" class="alert-link">klik</a> hier om direct naar de
  loginpagina te gaan
</div>

<div class="alert alert-info" role="alert" id="error_activate">
  Uw account is nog niet geactiveerd. Check uw mail en klik op de activatielink.Probeer daarna opnieuw in te loggen
</div>
<div class="alert alert-warning" role="alert" id="error_no_mail_send">
  U dient zich nog te registreren. U ontvangt dan een activatiemail. 
  <a href="index.php?content=register" class="alert-link">klik</a> hier om direct naar de
  registratiepagina te gaan
</div>