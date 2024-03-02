<html>
<body>
	<h3>Send a Message</h3>

	<p>
		Enter the text of a message
		and an email address for a response,
		then click the Send button
		to send an email mesage to the contact account.
	</p>

	<form action="MessageSend.php" method="post">

		<div>
			<label>Email Address for Response:</label>
			<br />
			<input
				type="email"
				name="MessageSenderEmailAddress"
				maxlength="128"
				style="width:300px"
			></input>
			<br />
		</div>

		<div>
			<label>Send a Copy to the Email Address Above:</label>
			<input
				type="checkbox"
				name="MessageShouldBeSentToSenderAsWell"
				checked="true"
			></input>
			<br />
		</div>

		<div>
			<label>Message Text:</label>
			<br />
			<textarea
				name="MessageText"
				cols="48" rows="16"
				maxlength="1024"
			></textarea>
			<br/>
		</div>

		<button type="submit">Send Message</button>
	</form>
</body>
</html>