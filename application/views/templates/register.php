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
	<?php echo form_open('User/login'); ?>
		<input name="callback_url" value=<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?> hidden>

		<div class="sign-in">
			<h4>Email :</h4>
			<input type="email" name="username" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
		</div>
		<?php
			if($this->session->has_userdata('sign_in_user_not_verified'))
			echo "<p class='bg-danger'>Email not verified</p>";
			?>
		<div class="sign-in">
			<h4>Password :</h4>
			<input type="password" name="password" onfocus="this.value = '';" required="">
			<a href="#">Forgot password?</a>
		</div>
		<?php
			if($this->session->has_userdata('sign_in_password_missmatch'))
			echo "<p class='bg-danger'>Email password missmatch</p>";
			?>
		<div class="single-bottom">
			<input type="checkbox" name="remember_me"  id="brand" value="">
			<label for="brand"><span></span>Remember Me.</label>
		</div>
		<div class="sign-in">
			<input type="submit" value="SIGNIN" >
		</div>
	</form>
</div>
