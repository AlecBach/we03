<div class="row">
  <div class="columns medium-offset-1 medium-10 xl-padding">
    <form id="loginForm" method="post" action="./?page=blog.edit.try&id=<?=$post['id']?>" enctype="multipart/form-data">
      <h2>Edit Blog Post</h2><hr>
      <label for="title">Title
        <input id="title" name="title" type="text" value="<?=$post['title']?>">
      </label>

      <label for="postContent">Content
        <textarea id="postContent" name="postContent" type="text" rows="10"><?=$post['content']?></textarea>
      </label>

      <label for="profileImageUpload" id="profileImageUploadText" class="button">Hero Image</label>
      <input type="file" name="image" id="profileImageUpload" id="profileImage" class="show-for-sr">
      <div id="current-img">
        <p>Current Image: </p><img src="<?=$post['image']?>">
      </div>
      <div class="button-spacer"></div>
      <input type="submit" class="button" id="submitButton">
    </form>
  </div>
</div>