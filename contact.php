<?php
include('cabecera.php');
?>
				<div class="clearfix"></div>
			</div>
			<div class="banner-main">
				<div class="container">	
					<div class="banner-top bnr-top">
						<h1>Hey, come to contact with us</h1>
					</div>
				</div>
			</div>
		</div>	
	<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->		
	<!--end-banner-->
	<!--start-banner-->
	<div class="stop">
		<div class="container">
			<div class="stop-top">
				<h3>STOP BY FOR A GOOD COFFEE</h3>
			</div>
			<div class="stop-bottom">
				<div class="col-md-4 stop-left">
					<div class="address">
						<h4>ADDRESS</h4>
						<p>Planeto Ltd.<span>Drayton Park 243</span>N5 1BU London</p>
					</div>
					<div class="email">
						<h4>EMAIL</h4>
						<p><a href="mailto:example@email.com">hello@planeto.com</a></p>
					</div>
					<div class="phone">
						<h4>PHONE</h4>
						<p>421.909.123.456</p>
					</div>
				</div>
				<div class="col-md-8 stop-left">
					<h4>SAY HELLO</h4>
					<div class="stop-btm">
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" />
						<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" />
						<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
				        <input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" />
						<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<div class="s-btn">
								<form>
									<input type="submit" value="SEND MESSAGE">
						    	</form>
						    </div>	
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-banner-->
	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<div class="contact">
					<div class="col-md-8 contact-left">
						<a href="index.html"><img src="images/logo-2.png" alt="" /></a>
						<p>Lorem ipsum dolor sit tamet, consectetur adipiscing elit. Quisque vel lobortis neque, nec dictum erat. Proin malesuada, neque at facilisis posuere, tortor arcu vulputate dui, in sodales sem lacus sit amet diam.</p>
					</div>
					<div class="col-md-4 contact-right">
						<h3>QUICK CONTACTS</h3>
						<p>421.909.123.456</p>
						<p><a href="mailto:example@email.com">hello@planeto.com</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="footer-bottom">
					<div class="col-md-4 footer-left">
						<ul>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="sky"> </span></a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-middle">
						<p>Template by <a href="http://w3layouts.com/"> W3layouts</a></p>
					</div>
					<div class="col-md-4 footer-right">
						<p><a href="#home" class="scroll">TO THE TOP</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-footer-->
</body>
</html>