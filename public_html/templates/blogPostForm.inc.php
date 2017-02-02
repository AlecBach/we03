<div class="row">
  <div class="columns medium-offset-1 medium-10 xl-padding">
    <form id="loginForm" method="post" action="./?page=blog.store" enctype="multipart/form-data">
      <h2>New Blog Post</h2><hr>
      <label for="title">Title
        <input id="title" name="title" type="text" placeholder="yeezy in th house">
      </label>

      <label for="postContent">Content
        <textarea id="postContent" name="postContent" type="text" placeholder="Post content is goe here" rows="10"></textarea>
      </label>

      <label for="profileImageUpload" id="profileImageUploadText" class="button">Hero Image</label>
      <input type="file" name="image" id="profileImageUpload" id="profileImage" class="show-for-sr">
      <input type="submit" class="button" id="submitButton">
    </form>
  </div>
</div>