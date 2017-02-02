<div class="row">
  <div class="columns medium-offset-1 medium-10 xl-padding">
    <?php $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>
    <?php $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>
    <?php $email = isset($_POST['email']) ? $_POST['email'] : '' ?>
    <?php $emailConfirm = isset($_POST['emailConfirm']) ? $_POST['emailConfirm'] : '' ?>
    <form id="loginForm" method="post" action="./?page=register.store" enctype="multipart/form-data">
      <h2>Register</h2><a href="./?page=login"><h6 id="registerLink">Log in</h6></a><hr>
      <label for="firstName">First name
        <input id="firstName" name="firstName" type="text" value="<?= $firstName ?>" placeholder="John" aria-describedby="firstNameHelpText">
      </label>
      <p class="help-text" id="firstNameHelpText"><?= isset($this->data['firstName']) ? $this->data['firstName'] : '' ?></p>
      <label for="lastName">Last name
        <input id="lastName" name="lastName" type="text" value="<?= $lastName ?>" placeholder="Smith" aria-describedby="lastNameHelpText">
      </label>
      <p class="help-text" id="lastNameHelpText"><?= isset($this->data['lastName']) ? $this->data['lastName'] : '' ?></p>
      <label for="email">Email
        <input id="email" name="email" type="email" value="<?= $email ?>" placeholder="John.smith@mail.com" aria-describedby="emailHelpText">
      </label>
      <!-- <p class="help-text" id="emailHelpText"><?= isset($this->data['email']) ? $this->data['email'] : '' ?></p> -->
      <label for="emailConfirm">Confirm Email
        <input id="emailConfirm" name="emailConfirm" type="email" value="<?= $emailConfirm ?>" placeholder="John.smith@mail.com" aria-describedby="emailConfirmHelpText">
      </label>
      <p class="help-text" id="emailConfirmHelpText"><?= isset($this->data['email']) ? $this->data['email'] : '' ?></p>
      <label for="password">
        Password
        <input id="password" name="password" type="password" placeholder="**********" aria-describedby="passwordConfirmHelpText">
      </label>
      <!-- <p class="help-text" id="passwordConfirmHelpText"><?= isset($this->data['password']) ? $this->data['password'] : '' ?></p> -->
      <label for="passwordConfirm">
        Confirm Password
        <input id="passwordConfirm" name="passwordConfirm" type="password" placeholder="**********" aria-describedby="passwordHelpText">
      </label>
      <p class="help-text" id="passwordHelpText"><?= isset($this->data['password']) ? $this->data['password'] : '' ?></p>
      <label for="profileImageUpload" id="profileImageUploadText" class="button">Upload Profile Image (Optional)</label>
      <input type="file" name="image" id="profileImageUpload" id="profileImage" class="show-for-sr">
      <input type="submit" class="button" id="submitButton">
    </form>
  </div>
</div>