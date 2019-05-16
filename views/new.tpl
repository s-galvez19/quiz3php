<?php include "partials/header.tpl" ?>

<div class="row">
	<div class="col-sm">
		<h1>New image</h1>

		<form action="?p=new_submit" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="image">Add new Post</label>
				<input type="file" class="form-control-file" id="image" name="image">
			</div>
			<div class="form-group">
				<label for="title">Add post title</label>
				<input type="text" class="form-control" id="title" name="title">
			</div>

			<div class="form-group">
				<label for="title">Add post content</label>
			
                <textarea rows="4" cols="50" id="content" name="content">
                     
                </textarea>

			</div>


			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

<?php include "partials/footer.tpl" ?>