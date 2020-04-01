<div class="container">
	<h2><?= $title; ?></h2>

	<?= validation_errors(); ?>

	<?= form_open('posts/create'); ?>
		<div class="form-group">
			<label>Blog Title</label>
			<input type="text" name="b_title"  class="form-control" placeholder="Blog Title">

			<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		</div>
		<div class="form-group">
			<label>Blog Body</label>
			<textarea id="editor" type="text" name="b_body" class="form-control" placeholder="Type Blog details here"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

