<? 	require 'header.php';
	require 'main_menu.php';
	require 'searchbar.php';		
	require 'image_slider.php'; 
?>
	
			<div id="left">
				<div id="contact_form">
					<h1>Contact us</h1>
					<p>Please use the form below to send us a message.</p>
					<form method="post" onsubmit="return sendContact();" action="sendContact.php">
						<p>
							<label for="name" id="lname">Full name:</label>
							<input type="text" class="text" name="name" id="name" onfocus="input_focus('name');" onblur="input_blur('name');" />
						</p>
						
						<p>
							<label for="email" id="lemail">Email address:</label>
							<input type="text" class="text" name="email" id="email" onfocus="input_focus('email');" onblur="input_blur('email');" />
						</p>
						<div class="x"></div>
						<p class="error" id="email-error">You must enter your email address.</p>
						
						<p>
							<label for="category" id="lcategory">Category:</label>
							<select name="category" id="category" onfocus="input_focus('category');" onblur="input_blur('category');">
								<option value="software">Software</option>
								<option value="hardwae">Hardware</option>
								<option value="consulting">Consulting</option>
								<option value="resources">Resources</option>
							</select>
						</p>

						<p>
							<label for="message" id="lmessage">Message:</label>
							<textarea name="message" id="message" onfocus="input_focus('message');" onblur="input_blur('message');"></textarea>
						</p>
						<div class="x"></div>
						<p class="error" id="message-error">You must enter your message.</p>

						<p>
							<label for="captcha" id="lcaptcha"></label>
							<input type="text" class="text" name="captcha" id="captcha" onfocus="input_focus('captcha');" onblur="input_blur('captcha');" />
						</p>
						<div class="x"></div>
						<p class="error" id="captcha-error">Are you sure about your calculations?</p>
						<script type="text/javascript">
							generate_captcha('lcaptcha');
						</script>
						
						<div class="x"></div>
						
						<input type="submit" class="submit" name="send_contact" value="Send" />
						
					</form>
					
					<span id="contact-back">or you can <a href="index.php" class="read-more">Go back</a></span>
				</div>
				
				<div id="message_sent" style="display:none;">
					<h1>Your message has been sent</h1>
					<p>We'll contact you in a shortest possible time.</p>
					<p>You can now <a href="index.php" class="read-more">go back</a> to home page.</p>
				</div>				
			</div>
						
			<div id="right">
				<br />
				<h3>Other Contact informations:</h3>
				<p>
					email: <strong>ru_cs@googlegroups.com</strong><br />
					phone: <strong>732.705.7265</strong><br />
					address: <strong>BCC Hill 252</strong><br />
					zip: <strong>08854</strong><br />
					state: <strong>New Jersey</strong>
				</p>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
			</div>
			
			<div class="x"></div>
			<div class="break no-border"></div>
		</div>

<?	require 'footer.php'; ?>		

	</div>

<?	require 'gallery.php'; ?>

	</body>
</html>
