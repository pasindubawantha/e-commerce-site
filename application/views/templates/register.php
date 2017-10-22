<div class="login-bottom">
<?php
	if($this->session->has_userdata('registered') && $this->session->registered)
	{
		echo "<h3>Sign up</h3>";
		echo "<p class='bg-success'>Verify your email and sign in</p>";
		echo form_open('User/register');
		echo "<input name='callback_url' value=".(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"." hidden>";
		echo"<div class='sign-up'>
				<input type='submit' value='New User' >
			</div>";
		echo form_close();
	}else $this->load->view('templates/signUpForm');
?>
</div>
<div class="login-right">
	<h3>Sign in with your account</h3>
	<form>
		<div class="sign-in">
			<h4>Email :</h4>
			<input type="emial" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
		</div>
		<div class="sign-in">
			<h4>Password :</h4>
			<input type="password" onfocus="this.value = '';" required="">
			<a href="#">Forgot password?</a>
		</div>
		<div class="single-bottom">
			<input type="checkbox"  id="brand" value="">
			<label for="brand"><span></span>Remember Me.</label>
		</div>
		<div class="sign-in">
			<input type="submit" value="SIGNIN" >
		</div>
	</form>
</div>
