<h3>Sign up for free</h3>
<?php echo form_open('User/register'); ?>
	<input name="callback_url" value=<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?> hidden>
	<div class="sign-up">
		<h4>Email :</h4>
		<input name="username" type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
			<?php
			if($this->session->has_userdata('sign_up_bad_email'))
			echo "<p class='bg-danger'>Email already registered</p>";
			?>
	</div>
	<div class="sign-up">
		<h4>Password :</h4>
		<input name="password" type="password" onfocus="this.value = '';" required>

	</div>
	<div class="sign-up">
		<h4>Re-type Password :</h4>
		<input name="confirm_password" type="password" onfocus="this.value = '';" required>
		<?php
			if($this->session->has_userdata('sign_up_password_missmatch'))
			echo "<p class='bg-danger'>Password mismatch</p>";
			?>
	</div>
	<div class="sign-up">
		<input type="submit" value="REGISTER NOW" >
	</div>
</form>
