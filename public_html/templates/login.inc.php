<div class="row">
  <div class="columns medium-offset-1 medium-10 xl-padding">
    <?php $email = isset($_POST['email']) ? $_POST['email'] : '' ?>
    <form id="loginForm" method="post" action="./?page=login.send"><!--  method="post" action="login.send" -->
      <h2>Log in</h2><h6 id="registerLink"><a href="./?page=register">Register</a></h6><hr>
      <label for="email">Email
        <input id="email" name="email" type="email" value="<?= $email ?>" placeholder="John.smith@mail.com" aria-describedby="emailHelpText">
      </label>
      <p class="help-text" id="emailHelpText"></p>
      <label for="password">
        Password
        <input id="password" name="password" type="password" placeholder="**********" aria-describedby="passwordHelpText">
      </label>
      <p class="help-text" id="passwordHelpText"><?php if(isset($errors['login-error'])){ echo $errors['login-error']; } ?></p>
      <a href="./?page=login.forgot" id="forgotPasswordText">Forgot password?</a>
      <input class="button" id="submitButton" type="submit">
    </form>
  </div>
</div>