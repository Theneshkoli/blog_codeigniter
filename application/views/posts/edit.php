<div class="container mt-5">
	<h2><?= $title . ' ' . $post['slug']; ?></h2>
	<?= validation_errors(); ?>

	<?= form_open('posts/update'); ?>
		<input type="hidden" name="post_id" value="<?= $post['post_id']; ?>">
		<div class="form-group">
			<label>Blog Title</label>
			<input type="text" name="b_title"  class="form-control" placeholder="Blog Title" value="<?= $post['title']; ?>">

			<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		</div>
		<div class="form-group">
			<label>Blog Body</label>
			<textarea id="editor" type="text" name="b_body" class="form-control" placeholder="Type Blog details here"><?= $post['body'] ;?></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>

