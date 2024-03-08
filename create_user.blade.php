<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
<h1>User Form</h1>
<hr/><br>
<form action="store" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_Token();?>">
    <label for="">Name: </label><input type="text" name="name"><br><br>
    <label for="">Phone: </label><input type="text" name="phone"><br><br>
    <label for="">Age: </label><input type="text" name="age"><br><br>
    <input type="submit" value="Create User">
</form>
</body>
</html>
