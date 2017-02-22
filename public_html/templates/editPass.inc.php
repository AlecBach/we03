<div class="row">
	<div class="columns medium-offset-1 medium-10 xl-padding account">
		<form id="loginForm" method="post" action="./?page=account.editPass.try"  enctype="multipart/form-data"><!--  method="post" action="login.send" -->
	      <h2>Change your Password</h2><h6 id="registerLink"><a href="./?page=account">Back to Account</a></h6><hr>
	      <label for="currentPass">Current password:
	        <input id="currentPass" name="currentPass" type="password" placeholder="**********" aria-describedby="firstNameHelpText">
	      </label>
	      <p class="help-text" id="firstNameHelpText"><?php if(isset($errors['confirmCurrentPass'])){echo $errors['confirmCurrentPass'];}?></p>
	      <label for="newPass">New password:
	        <input id="newPass" name="newPass" type="password" placeholder="**********" aria-describedby="lastNameHelpText">
	      </label>
	      <p class="help-text" id="lastNameHelpText"><?php if(isset($errors['newPass'])){echo $errors['newPass'];}?></p>
	      <label for="confirmPass">Confirm new password:
	        <input id="confirmPass" name="confirmPass" type="password" placeholder="**********" aria-describedby="lastNameHelpText">
	      </label>
	      <p class="help-text" id="lastNameHelpText"><?php if(isset($errors['confirmPass'])){echo $errors['confirmPass'];}?></p>
	      <div class="button-spacer"></div>
	      <input class="button" id="submitButton" type="submit">
	    </form>
	</div>
</div>