<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><img src="/assets/images/branding/logo.jpg" alt=" " /></h2>
			<p>Sandhoora Homes all your harware needs at one place.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href=<?php echo "'".base_url()."'"?>>Home</a></li>
						<?php
						foreach($mainCategories as $mainCategory)
						{
						echo "<li><a href='".base_url()."Category/".html_escape($mainCategory->id)."'>".html_escape($mainCategory->name)."</a></li>";
						}
						?>
						<li><a href=<?php echo "'".base_url()."Page/contactUs'"  ;?> >Contact us</a></li>
					</ul>
				</div>

				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 43B, Dharmapala mawawtha, Madiwela, <span>Kotte.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@sandhooraholdings.lk</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<!--div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.html"><img src="/assets/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="/assets/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="/assets/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="/assets/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="/assets/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="/assets/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="/assets/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="/assets/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="/assets/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div-->
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2016 Sandhoora Holdings . All rights reserved</p>
	</div>
</div>
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<?php
									if($this->session->has_userdata('user'))
										$this->load->view('templates/loggedIn');
									else $this->load->view('templates/register');
									?>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
</body>
</html>
