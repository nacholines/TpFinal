<?php
	require_once('header.php');
    require_once('nav.php');
?>

<div class="limiter">
	<div class="container">
		<div class="">
			<form action="<?php echo VIEWS_PATH."HomeController/login" ?>" method="POST">
				<div class="form-group" >
					<span style="color: red"><?php echo $message ?> <br></span>
					
					<label for="email">Email address</label>
					<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>

					<br>

               		<label for="pass"></label>
               		<input type="password" name="pass" class="form-control" id="email" placeholder="Enter Password" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>

	<div class="container">
               <form action="<?php echo FRONT_ROOT."Home/showRegisterView"?>" method="post">
                    <button type="submmit" class="large-button">Dont you have account? Register right now</button>
               </form>
          </div>
</div>
	
