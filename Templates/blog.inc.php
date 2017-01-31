<div class="row expanded">
	<div class="blog-hero hero-image">
		
	</div>
</div>

<div class="row expanded">
	<?php if(isset($_SESSION['user_id']) && $_SESSION['user_email'] == "alec.bach97@gmail.com"):?>
		<div class="blog">
			<div class="admin-text">
				<p>Alec! Would you like to create a new blog post?</p>
				<div class="admin-icons"><a href=""><i class="fa fa-check" aria-hidden="true"></i></a><i class="fa fa-times" id="close" aria-hidden="true"></i></div>
			</div>
		</div>
	<?php endif;?>
	<div class="blog">
<!-- 		<div class="row expanded">
			<div class="columns small-12">
				<h1 style="margin-top: 15px;">Insert Blog Title.</h1>
				<hr>
			</div>
		</div> -->

			<div class="blog-main">
				<div class="blog-article">
					<div class="blog-article-img" id="blogimg1">
						<div class="text">
							<h3>This is a title about a lonely chair.</h3>
						</div>
					</div>
					<div class="blog-article-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam........ <span><a href="">Read full post.</a></span>
					</div>
				</div>
				<div class="blog-article">
					<div class="blog-article-img" id="blogimg2">
						<div class="text">
							<h3>This is a title about programming issues and or tips for workspace flow.</h3>
						</div>
					</div>
					<div class="blog-article-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam........ <span><a href="">Read full post.</a>
					</div>
				</div>
				<div class="blog-article">
					<div class="blog-article-img" id="blogimg3">
						<div class="text">
							<h3>This is a title about this big ass river, probably thames river but not sure.</h3>
						</div>
					</div>
					<div class="blog-article-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. <br><br>Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam........ <span><a href="">Read full post.</a>
					</div>
				</div>
			</div><!-- 
		 --><div class="blog-side-bar">
		 		<div class="blog-side-bar-item mail-sub-box">
					<h3 style="text-align: center">Sign up to the mailing list</h3>
					<hr>
					
					<p>Get notified first for every blog post I make!</p>
					<span>I don't post regularly so you won't be spammed, you may unsubscribe at any time.</span>
					<input type="email" name="email-sub" value="<?php if (isset($_SESSION['user_id'])) {echo $_SESSION['user_email'];}?>">
					<a class="button" href="">SUBSCRIBE</a>
				</div>
				<div class="blog-side-bar-item">
					Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
				</div>
				<div class="blog-side-bar-item">
					Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
	</div>
</div>