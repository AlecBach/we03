<div class="row">
  <div class="columns medium-offset-1 medium-10 xl-padding">
    <form id="loginForm" method="post" action="./?page=account.delete.try"><!--  method="post" action="login.send" -->
      <h2>Delete your account</h2><h6 id="registerLink"><a href="./?page=home">Back to Home</a></h6><hr>
      <label for="password">Enter your Password:
        <input id="password" name="password" type="password" placeholder="**********" aria-describedby="passwordHelpText">
      </label>
      <p class="help-text" id="passwordHelpText"><?php if(isset($error['the-error'])): $error['the-error']; endif; ?></p>
      <h6 id="finalDeleteWarning">It is impossible to recover your account, "no backsies".</h6>
      <input class="button" id="submitButton" type="submit">
    </form>
  </div>
</div>