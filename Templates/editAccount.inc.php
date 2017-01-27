<div class="row expanded">
	<div class="columns medium-offset-1 medium-10 xl-padding account">
		<form id="loginForm" method="post" action="./?page=account.edit.try"><!--  method="post" action="login.send" -->
	      <h2>Edit your account</h2><h6 id="registerLink"><a href="./?page=account">Back to Account</a></h6><hr>
	      <label for="email">Email:
	        <input id="email" name="email" type="text" value="<?=$user['email']?>" aria-describedby="emailHelpText">
	      </label>
	      <p class="help-text" id="emailHelpText"><?php if(isset($errors['email'])): $errors['email']; endif; ?></p>
	      <label for="emailConfirm">Confirm Email:
	        <input id="emailConfirm" name="emailConfirm" type="text" value="<?=$user['email']?>" aria-describedby="emailConfirmHelpText">
	      </label>
	      <p class="help-text" id="emailConfirmHelpText"><?php if(isset($errors['emailConfirm'])): $errors['emailConfirm']; endif; ?></p>
	      <label for="firstName">First name:
	        <input id="firstName" name="firstName" type="text" placeholder="John" value="<?=$user['firstName']?>" aria-describedby="firstNameHelpText">
	      </label>
	      <p class="help-text" id="firstNameHelpText"><?php if(isset($errors['firstName'])): $errors['firstName']; endif; ?></p>
	      <label for="lastName">Last name:
	        <input id="lastName" name="lastName" type="text" placeholder="John" value="<?=$user['lastName']?>" aria-describedby="lastNameHelpText">
	      </label>
	      <p class="help-text" id="lastNameHelpText"><?php if(isset($errors['lastName'])): $errors['lastName']; endif; ?></p>
	      <label for="profileImageUpload" id="profileImageUploadText" class="button profileImageUploadText"><?php if(isset($_SESSION['user_image'])):echo"Change";else:echo"Upload";endif;?> Profile Image</label><?php if(isset($_SESSION['user_image'])):?><label class="profileImageUploadText currentImageText">Current Image: </label><div class="thumbCont editThumb"><img src="<?=$_SESSION['user_image'];?>"></div><?php endif;?>
      	  <input type="file" name="image" id="profileImageUpload" id="profileImage" class="show-for-sr">
	      <!-- <h6 id="finalDeleteWarning">It is impossible to recover your account, "no backsies".</h6> -->
	      <input class="button" id="submitButton" type="submit">
	    </form>
	</div>
</div>