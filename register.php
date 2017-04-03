<p class="lead">
<form class="form-signin">
   <h2 class="form-signin-heading">registreren</h2>
   <label for="inputStdNumber" class="sr-only">Student nummer</label>
         <input type="text" 
                class="form-control" 
                data-toggle="tooltip"
                title="<i style='color: pink; font-size: 1.2em'>Studenten:</i> vul je studentnummer in<br><i style='color: pink; font-size: 1.2em'>Docenten: </i> voer je <l></l>ettercode in"
                id="stdnumber" 
                placeholder="studentnummer" 
                autofocus 
                required>
         <button class="btn btn-lg btn-primary btn-block" id="btn-register">Verstuur</button>
</form>
</p>
<div class="alert alert-success" role="alert" id="is_now_registered">
        U heeft een activatiemail in uw mailbox. Klik op de activatelink om in te loggen
</div>
<div class="alert alert-danger" role="alert" id="is_already_registered">Uw account is al geactiveerd. Klik <a href="./index.php?content=login_form" class="alert-link">hier</a> om in te loggen</div>
<div class="alert alert-warning" role="alert" id="studentnumber_error">
        U heeft een niet bestaand studentnummer ingevoerd. Klik
  <a href="index.php?content=register" class="alert-link">hier</a> om het opnieuw te proberen
</div>
<div class="alert alert-info" role="alert" id="id_error">
        U heeft geen studentnummer opgegeven. Voer uw studentnummer in. Klik
  <a href="index.php?content=register" class="alert-link">hier</a> om dit te doen.
</div>
