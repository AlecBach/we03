<div class="row expanded">
	<div class="columns medium-offset-1 medium-10 xl-padding account">
		<form id="loginForm" method="post" action="./?page=account.edit.try"  enctype="multipart/form-data"><!--  method="post" action="login.send" -->
	      <h2>Edit your account</h2><h6 id="registerLink"><a href="./?page=account">Back to Account</a></h6><hr>
	      <label for="firstName">First name:
	        <input id="firstName" name="firstName" type="text" placeholder="John" value="<?=$user['firstName']?>" aria-describedby="firstNameHelpText">
	      </label>
	      <p class="help-text" id="firstNameHelpText"><?php if(isset($errors['firstName'])){echo $errors['firstName'];}?></p>
	      <label for="lastName">Last name:
	        <input id="lastName" name="lastName" type="text" placeholder="John" value="<?=$user['lastName']?>" aria-describedby="lastNameHelpText">
	      </label>
	      <p class="help-text" id="lastNameHelpText"><?php if(isset($errors['lastName'])){echo $errors['firstName'];}?></p>
	      <label for="profileImage" id="profileImageUploadText" class="button profileImageUploadText"><?php if(isset($_SESSION['user_image'])):echo"Change";else:echo"Upload";endif;?> Profile Image</label><?php if(isset($_SESSION['user_image'])):?><label class="profileImageUploadText currentImageText">Current Image: </label><div class="thumbCont editThumb"><img src="<?=$_SESSION['user_image'];?>"></div><?php endif;?>
      	  <input type="file" name="image" id="profileImage" class="show-for-sr">
	      <input class="button" id="submitButton" type="submit">
	    </form>
	</div>
</div>