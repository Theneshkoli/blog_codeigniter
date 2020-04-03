
<div class="container mt-5">
	<div class="card">
		<div class="card-header">
			<h2><?= $post['title']?></h2>
			<small class="float-right">Posted on : <?= $post['created_at'];?></small>
		</div>
		<div class="card-body">
			<img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_images']; ?>" style="margin: 0 auto; " width="200">
			<p><?= $post['body']; ?></p>
		</div>
		<div class="card-footer">
			<div class="btn-group" role="group" aria-label="Basic example">
				<a href="<?= base_url(); ?>posts/edit/<?= $post['slug']; ?>" class="btn btn-primary">Edit</a>
				<?= form_open('posts/delete/'.$post['post_id']);?>
				<input type="submit" class="btn btn-danger" value="Delete Post">
			</form>
		</div>
		
	</div>
</div>
</div>