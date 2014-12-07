<div class="container">
	<div class="row row-centered">
		<div class="col-sm-8" style="background-color: #028482; color: azure">
			<div class="page-header">
				<h1>My Blog</h1>
				<h2>Posts</h2>
			</div>
			<?php foreach ($blogs as $blog_item):?>
			<div class="main img-rounded" style="background-color: #7ABA7A;">
				<h3>
					<a class="blog-title"
						href="<?php echo 'blog/' . $blog_item['slug'] ?>">
						<?php echo $blog_item['title'] ?>
					</a>
				</h3>
				<p><?php echo $blog_item['content']?></p>
				<p>
					<a class="btn btn-info"
						href="<?php echo "blog/" . $blog_item['slug'] ?>">Read More</a>
				</p>
			</div>
			<?php endforeach ?>
			<div class="form">
				<form role="form" action="blog" method="post">
				<?php echo validation_errors(); ?>
					<h2>Create Blog Post:</h2>
					<div class="form-group form-group-lg">
						<input type="text" class="form-control" id="blogTitle"
							name="title" placeholder="Enter title">
					</div>
					<div class="form-group">
						<textarea name="content" class="form-control" rows="5"></textarea>
					</div>
					<div class="form-group form-group-lg">
						<button name="submit" type="submit" class="btn btn-default">Submit Post</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<h4>Recent Posts</h4>
			<div class="sidebar-offcanvas" role="navigation">
				<div class="list-group">
					<?php foreach ($blogs as $blog_item): ?>
					<div class="list-group-item">
						<a href="<?php echo "blog/" . $blog_item['slug'] ?>">
							<?php echo $blog_item['title'] ?>						
						</a>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>