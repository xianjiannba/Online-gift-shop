<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action="showitem" method="post">
    <p>ID ： <input type="text" name="Id" value=""></p>
    {{csrf_field()}}
    <input type="submit" value="submit">
</form>
</body>
</html>
