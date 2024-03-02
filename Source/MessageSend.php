<html>
<body>

	<?php

		include("MessageEmailAddressToSendTo.php");

		$messageSenderEmailAddress = $_POST["MessageSenderEmailAddress"];
		$messageShouldBeSentToSenderAsWell =
			isset($_POST["MessageShouldBeSentToSenderAsWell"]);
		$messageText = $_POST["MessageText"];

		$postVariablesAreSet =
			$messageSenderEmailAddress != ""
			&& ($messageText != "");

		if ($postVariablesAreSet == false)
		{
			echo
				"<p>"
				. "Error: The required information was not set!  "
				. "Message text and a return email address must be specified."
				. "</p>";
		}
		else if ($emailAddressToSendTo == "test@test.test")
		{
			echo
				"<p>"
				. "Error: The emailAddressToSendTo variable "
				. "is not configured in MessageEmailAddressToSendTo.php!"
				. "</p>";
		}
		else
		{
			$headers = array
			(
				"Reply-To" => $messageSenderEmailAddress
			);

			$messageSubject = "Contact Form Message from " . $messageSenderEmailAddress;

			$wasMailSentSuccessfully = mail
			(
				$emailAddressToSendTo,
				$messageSubject,
				$messageText,
				$headers
			);

			if ($messageShouldBeSentToSenderAsWell)
			{
				$wasMailSentSuccessfully = mail
				(
					$messageSenderEmailAddress,
					$messageSubject,
					$messageText,
					$headers
				);
			}

			$statusMessage =
				$wasMailSentSuccessfully
				? "The message was sent successfully!"
				: "An error occurred while sending the message.";

			echo "<p>" . $statusMessage . "</p>";
		}
	?>

	<a href="MessageCompose.php">Send another message</a>

</body>
</html>