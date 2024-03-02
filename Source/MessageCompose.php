<html>
<body>
	<h3>Send a Message</h3>

	<p>
		Enter text and click the Send button
		to send an email mesage to the contact account.
	</p>

	<form action="MessageSend.php" method="post">

		<label>Message Text:</label>
		<br />
		<textarea
			name="MessageText"
			cols="48" rows="16"
		></textarea>
		<br/>

		<button type="submit">Send Message</button>
	</form>
</body>
</html>