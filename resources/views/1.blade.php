<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="adduser" method="post">
              <p>Name ： <input type="text" name="Name" value=""></p>
              <p>Username ： <input type="text" name="Username" value=""></p>
              <p>Password ： <input type="text" name="Password" value=""></p>
              <p>Address ： <input type="text" name="Addresss" value=""></p>
              <p>Email ： <input type="text" name="Email" value=""></p>
    {{csrf_field()}}
    <input type="submit" value="submit">
</form>
</body>
</html>
