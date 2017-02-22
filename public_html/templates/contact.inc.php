<div class="row">
	<div id="contactPage">
		<div class="row">
			<div class="columns small-12"><h1>How can I help?</h1></div>
		</div>
		<div class="row">
			<div class="columns small-12 medium-5">
				<div class="hide-for-small-only">
					<div class="block imgCont">
						<img class="avatar avatar200" src="./imgs/users/admin/AdminPhoto.jpeg">
					</div>
					<div class="text-cont">
						<h3>Alec Bach</h3>
						<h4>Website Designer</h4>
					</div>
				</div>
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i><div class="txt-wrap"><a href="tel:64221964014">+64 22 196 4014</a></div></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><div class="txt-wrap"><a href="mailto:alec.bach97@gmail.com?subject=Enquiry for Alec Bach"">alec.bach97@gmail.com</a></div></li>
				</ul>
			</div>
			<div class="columns small-12 medium-7">
				<form method="post" action="./?page=contact.try">
					<input type="text" name="name" placeholder="Name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
					<p class="help-text" id="nameHelpText"><?php if(isset($errors['name'])){echo $errors['name'];}?></p>
					<input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
					<p class="help-text" id="emailHelpText"><?php if(isset($errors['email'])){echo $errors['email'];}?></p>
					<input type="text" name="phone" placeholder="Phone number" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>">
					<p class="help-text" id="phoneHelpText"><?php if(isset($errors['phone'])){echo $errors['phone'];}?></p>
					<textarea type="text" name="message" placeholder="Message" rows="5"><?php if(isset($_POST['message'])){echo $_POST['message'];}?></textarea>
					<p class="help-text" id="messageHelpText"><?php if(isset($errors['message'])){echo $errors['message'];}?></p>
					<input id="submitButton" type="submit" name="submit" class="button btn-primary">
				</form>
			</div>
		</div>
	</div>
</div>