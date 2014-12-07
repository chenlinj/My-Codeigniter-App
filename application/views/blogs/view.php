<div class="container">
	<div class="row row-centered">
		<div class="col-sm-8" style="background-color: #028482; color: azure">
			<div class="page-header">
				<h1><?php echo $blogs_item['title']?></h1>
			</div>
			<div class="main img-rounded" style="background-color: #7ABA7A;">
				<p><?php echo $blogs_item['content']?></p>
			</div>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<h4>Recent Posts</h4>
			<div class="sidebar-offcanvas" role="navigation">
				<div class="list-group">
					<?php foreach ($blogs as $blog_item): ?>
					<div class="list-group-item">
						<a href="<?php echo $blog_item['slug'] ?>">
							<?php echo $blog_item['title'] ?>						
						</a>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>