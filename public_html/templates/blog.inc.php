<div class="row expanded">
	<div class="blog-hero hero-image">
		<div class="blog-hero-text-center">
			<div class="blog-hero-text">
				<h3>Alec's road to programming enlightenment</h3>
			</div>
		</div>
	</div>
</div>
<div class="row expanded">
	<?php if(isset($_SESSION['user_id']) && $_SESSION['privilage'] == "Admin"):?>
		<div class="blog">
			<div class="admin-text">
				<p>Greetings Alec! would you like to create blog post?</p>
				<div class="admin-icons"><i class="fa fa-check" id="create" aria-hidden="true"></i><i class="fa fa-times" id="close" aria-hidden="true"></i></div>
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
				<?php foreach($allPosts as $post): ?>
				<div class="blog-article">
					<a href="./?page=blog&id=<?= $post['id'] ?>"><div class="blog-article-img" style="background-image: url(<?= $post['image'] ?>); background-size: cover; background-position: center;">
						<div class="article-img-text">
							<h3><?= $post['title'] ?></h3>
						</div>
						
					</div></a>
					<?php if(isset($_SESSION['user_id']) && $_SESSION['privilage'] == "Admin"):?>
						<div class="change-article">
							<a data-open="deleteModal<?= $post['id'] ?>" id="del">Delete<i class="fa fa-times" aria-hidden="true"></i></a>
							<a href="./?page=blog.edit&id=<?= $post['id'] ?>" id="edit">Edit<i class="fa fa-pencil" aria-hidden="true"></i></a>

							<div class="reveal" id="deleteModal<?= $post['id']?>" data-reveal>
							  <h1>Delete Post.</h1>
							  <p class="lead">Are you sure you want to delete: "<?= $post['title']?>"?</p>
							  <span class="redText"><a href="./?page=blog.delete&id=<?= $post['id']?>">delete</a></span>
							  <button class="close-button" data-close aria-label="Close reveal" type="button">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>

						</div>
					<?php endif;?>
					<div class="blog-article-text">
						<?= $post['content'] ?>... <span><a href="./?page=blog&id=<?= $post['id'] ?>">View full post and comments.</a></span>
					</div>
				</div>
				<?php endforeach; ?>
				
				<div class="blog-article">
					<div class="blog-article-img" id="blogimg2">
						<div class="article-img-text">
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
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam........ <span><a href="">View full post and comments.</a>
					</div>
				</div>
				<div class="blog-article">
					<div class="blog-article-img" id="blogimg3">
						<div class="article-img-text">
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
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam........ <span><a href="">View full post and comments.</a>
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