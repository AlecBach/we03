<div class="row expanded">
	<div class="blog-hero hero-image" style="background-image: url(<?= $post['image'] ?>) !important;">
		<div class="blog-hero-text-center">
			<div class="blog-hero-back">
				<a href="./?page=blog"><h3><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to blog</h3></a>
			</div>
			<div class="blog-hero-text">
				<h3><?= $post['title'] ?></h3>
			</div>
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
		</div>
	</div>
</div>
<div class="row expanded">
	<div class="blog">
<!-- 		<div class="row expanded">
			<div class="columns small-12">
				<h1 style="margin-top: 15px;">Insert Blog Title.</h1>
				<hr>
			</div>
		</div> -->

			<div class="blog-main">
				<div class="blog-article">
					<div class="blog-article-text">
						<h6 style="display:inline-block"><i class="fa fa-tags" aria-hidden="true"></i>Tags: <a href="">Current news</a> <a href="">Comedy</a> <a href="">Technology</a></h6><h6 style="display: inline-block; float:right;">Posted on <?= $post['date_posted']?></h6><hr>
						<?= $post['content'] ?>
					</div>
				</div>
				<div class="blog-article">
					<div class="blog-comments">
						<h4>Comments</h4><hr>
						<div class="comments-cont">
							<div class="comment-item">There are no comments yet! be the first below!</div>
						</div>
						<form id="comment-form">
							<label><span>Leave a comment:</span>
								<textarea placeholder="enter your comment!" rows="5"></textarea>
							</label>
							<button type="submit" class="button">Submit</button>
						</form>

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