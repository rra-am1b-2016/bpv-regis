<form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputStdNumber" class="sr-only">Student nummer</label>
        <input type="number" id="inputStdNumber" class="form-control" 
               placeholder="Student nummer" required autofocus >
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="btn_signIn">Sign in</button>
</form>
<div class="alert alert-danger" role="alert" id="error_id">
U heeft een niet bestaand studentnummer ingevuld. Probeer het opnieuw, 
  <a href="index.php?content=login_form" class="alert-link">klik</a> hier om direct naar de
  loginpagina te gaan
</div>