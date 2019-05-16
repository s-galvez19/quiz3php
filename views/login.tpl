<?php include "partials/header.tpl" ?>

<div class="row">
	<div class="col-sm">
		<?php if($error) { ?>
			<div class="alert alert-danger">
				<strong>Error!</strong> Username and Password does not match. 
			</div>
		<?php } ?>

		<h1>Login</h1>
		<form action="?p=login_submit" method="post">
			<div class="form-group">
				<label for="user">Username</label>
					<select class="form-control" id="user" name="user">
					<option value=""></option>
					<?php foreach($users as $user) { ?>
						<option value="<?= $user->username ?>"><?= $user->username ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="pass">Password</label>
				<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

<?php include "partials/footer.tpl" ?>