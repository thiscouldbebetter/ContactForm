<html>
<body>

	<?php
		if (isset($_POST["MessageText"]) == false)
		{
			echo "<pre>" . wordwrap("MessageText not set!") . "</pre>";
		}
		else
		{
			$messageTextEntered = $_POST["MessageText"];

			$emailAddressToSendTo = "test@test.test";

			$wasMailSentSuccessfully = mail
			(
				$emailAddressToSendTo,
				"Contact Form Message", // subject
				$messageTextEntered
			);

			$statusMessage =
				$wasMailSentSuccessfully
				? "The message was sent successfully!"
				: "An error occurred while sending the message.";
		
			echo "<pre>" . wordwrap($statusMessage) . "</pre>";
		}

	?>

</body>
</html>