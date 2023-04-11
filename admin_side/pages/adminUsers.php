<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/adminUsers.css">
	<title>admin users</title>
</head>

<body>
	<!--hadi diri liha include fga3 les pages bach tb9a tla3 dik list-->
	<?php require_once('../includes/sidebar.inc.php'); ?>
	<div class="table-style">
		<table>
			<thead>
				<tr>
					<td>user id</td>
					<td>name</td>
					<td>lastname</td>
					<td>e_mail</td>
					<td>role</td>
				</tr>
			</thead>
			<tbody>
				<?php
				require_once('../functions/connect.fun.php');
				require_once('../functions/loginFunctions.fun.php');
				$users = fetchUsersFromDb();
				if ($users != null) {
					for ($i = 0; $i < count($users); $i++) {
				?>
						<tr>
							<td><?php echo $users[$i]['id_client']; ?></td>
							<td><?php echo $users[$i]['nom']; ?></td>
							<td><?php echo $users[$i]['prenom']; ?></td>
							<td><?php echo $users[$i]['email']; ?></td>
							<td><?php echo $users[$i]['role1']; ?></td>
						</tr>
				<?php }
				} ?>
			</tbody>
		</table>
	</div>    <?php require_once('../includes/sidebar.inc.php');?>

	<div class="box">
		<form action="../includes/addUser.inc.php" method="post">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="text" name="name" autofocus required>
				<span>Nom</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" name="lastname" required>
				<span>Prenom</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" name="e_mail" required>
				<span>Email</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required>
				<span>Password</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="cpassword" required>
				<span>Confirm Password</span>
				<i></i>
			</div>
			<div class="coul">

				<select style="margin-top:10px" name="role" id="role">
					<option value="admin">admin</option>
					<option value="user">user</option>
				</select>

				<div class="links">
					<a href="#">Forgot Password ?</a>

				</div>
				<input type="submit" name="submit_new_user" value="add user">
		</form>
	</div>
</body>

</html>