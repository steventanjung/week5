<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mailer Test</title>
</head>
<body>
	<form action="send_email" method="POST">
		{{ csrf_field() }}
		Email
		<input type="email" name="email">
		Content
		<textarea name="content" rows="5"></textarea>
		<button type="submit">Kirim</button>
	</form>
</body>
</html>