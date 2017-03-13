<div class="page-header">
        <h1>Registreren</h1>
</div>
<p class="lead">
<form class="form-horizontal">
   <div class="form-group">
      <label for="stdnumber" class="col-sm-2 control-label">Studentnummer: </label>
      <div class="col-sm-5">
         <input type="number" class="form-control" id="stdnumber" placeholder="studentnummer">
      </div>
      <div class="col-sm-5">
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button class="btn btn-default" id="btn-register">Sign in</button>
      </div>
   </div>
</form>
</p>
<div class="alert alert-success" role="alert" id="is_now_registered">
        Uw bent succesvol geregistreerd. Klik 
        <a href="./index.php?content=login_form" class="alert-link">hier</a>
         om in te loggen
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
