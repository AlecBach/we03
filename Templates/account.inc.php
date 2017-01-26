<div class="row expanded">
	<div class="columns medium-offset-1 medium-10 xl-padding account">
		<div class="row expanded show-for-small-only">
			<div class="columns top-sml">
				<img class="avatar avatar200 avatar-sml" src="<?php if(isset($user['profileImage'])): echo $user['profileImage']; else: echo 'imgs/defaultProfileImage.png'; endif; ?>">
				<div class="textCont"><div class="block textBlock">
					<h2 id="nameText"><?=$user['firstName']?> <?=$user['lastName']?></h2>
					<h3 id="emailText"><?=$user['email']?></h3>
					<h5 id="statsText">Posts = 0 | Date Joined = 11th | |</h5>
				</div></div>
			</div>
		</div>
		<div class="row expanded show-for-medium-only">
			<div class="columns top-med">
				<div class="block">
					<img class="avatar avatar200" src="<?php if(isset($user['profileImage'])): echo $user['profileImage']; else: echo 'imgs/defaultProfileImage.png'; endif; ?>">
				</div><!-- 
			 --><div class="textCont"><div class="block textBlock centerText">
					<h3 id="nameText"><?=$user['firstName']?> <?=$user['lastName']?></h3>
					<h5 id="emailText"><?=$user['email']?></h5>
					<h6 id="statsText">Posts = 0 | Date Joined = 11th | |</h6>
				</div></div>
			</div>
		</div>
		<div class="row expanded show-for-large">
			<div class="columns top-lrg">
				<div class="block">
					<img class="avatar avatar200" src="<?php if(isset($user['profileImage'])): echo $user['profileImage']; else: echo 'imgs/defaultProfileImage.png'; endif; ?>">
				</div><!-- 
			 --><div class="textCont"><div class="block textBlock centerText">
					<h2 id="nameText"><?=$user['firstName']?> <?=$user['lastName']?></h2>
					<h3 id="emailText"><?=$user['email']?></h3>
					<h5 id="statsText">Posts = 0 | Date Joined = <?=$user['dateCreated']?> | Last Active = </h5>
				</div></div>
			</div>
			
		</div>
		<?if($_GET['id'] === $_SESSION['user_id']):?>
		<div class="row expanded settings">
			<a href="">Edit information</a>
			<a href="">Change password</a>
			<a href="">Delete account</a>
		</div>
		<?endif;?>
		<div class="row expanded posts">
			<p id="noPosts">This user has no posts yet!</p>
			
		</div>
	</div>
</div>