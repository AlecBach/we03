<div class="row">
  <div class="columns medium-offset-1 medium-10 xl-padding">
    <?php $email = isset($_POST['email']) ? $_POST['email'] : '' ?>
    <form id="loginForm" method="post" action="./?page=login.send"><!--  method="post" action="login.send" -->
      <h2>Recover your account</h2><h6 id="registerLink"><a href="./?page=login">Back to Log in</a></h6><hr>
      <label for="email">Enter your Email:
        <input id="email" name="email" type="email" value="<?= $email ?>" placeholder="John.smith@mail.com" aria-describedby="emailHelpText">
      </label>
      <p class="help-text" id="emailHelpText"><?php if(isset($errors['login-error'])): $errors['login-error']; endif; ?></p>
      <a id="forgotPasswordText">Already have your code?</a>
      <input class="button" id="submitButton" type="submit">
    </form>
  </div>
</div>