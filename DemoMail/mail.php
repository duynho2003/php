<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
</head>
<body>
    <h1>Send Mail</h1>
    <form action="send.php" method="POST">
        <div>Người nhận: <input name="receiver"/></div>
        <div>Tiêu đề: <input name="subject"/></div>
        <div>Nội dung: <textarea rows="4" name="message"></textarea></div>
        <div><input type="submit" value="Send"/></div>
    </form>
</body>
</html>