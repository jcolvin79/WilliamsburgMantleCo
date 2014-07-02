<?php include("inc/header.php"); ?>

<h1 class="shop-title">Contact</h1>

<div id="contact-area">
			<form method="post" action="contactengine.php">
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name" />

				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" />

				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
</div>

<?php include("inc/footer.php"); ?>
