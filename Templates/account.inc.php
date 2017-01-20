<div class="row expanded">
	<div class="columns medium-offset-1 medium-10 xl-padding account">
		<div class="row expanded show-for-small-only">
			<div class="columns top-sml">
				<img class="avatar avatar200 avatar-sml" src="<?php if(isset($_SESSION['user_image'])): echo $_SESSION['user_image']; else: echo 'imgs/defaultProfileImage.png'; endif; ?>">
			</div>
		</div>
		<div class="row expanded show-for-medium-only">
			<div class="columns top-med">
				<div class="block">
					<img class="avatar avatar200" src="<?php if(isset($_SESSION['user_image'])): echo $_SESSION['user_image']; else: echo 'imgs/defaultProfileImage.png'; endif; ?>">
				</div><!-- 
			 --><div class="textCont"><div class="block textBlock centerText">
					<h3 id="nameText">Alec Bach</h3>
					<h5 id="emailText"><?= $_SESSION['user_email'] ?></h5>
					<h6 id="statsText">Stats coming soon.</h6>
				</div></div>
			</div>
		</div>
		<div class="row expanded show-for-large">
			<div class="columns top-lrg">
				<div class="block">
					<img class="avatar avatar200" src="<?php if(isset($_SESSION['user_image'])): echo $_SESSION['user_image']; else: echo 'imgs/defaultProfileImage.png'; endif; ?>">
				</div><!-- 
			 --><div class="textCont"><div class="block textBlock centerText">
					<h2 id="nameText">Alec Bach</h3>
					<h3 id="emailText"><?= $_SESSION['user_email'] ?></h3>
					<h5 id="statsText">Stats coming soon.</h5>
				</div></div>
			</div>
			
		</div>
		<div class="row expanded settings">
			<a href="">Edit information</a>
			<a href="">Change password</a>
			<a href="">Delete account</a>
		</div>

	</div>
</div>