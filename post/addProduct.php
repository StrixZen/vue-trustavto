<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add product</title>
</head>
<body>
<a href="index.php">Home</a>

<form action="requestCreateProduct.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title">
    <textarea name="description"></textarea>
    <input type="file" name="image">
    <input type="submit" value="Отправить">
</form>

</body>
</html>