<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action="changeitem" method="post">
    <p>Item ： <input type="text" name="Item" value="{{$Item -> Item}}"></p>
    <p>Price ： <input type="text" name="Price" value="{{$Item -> Price}}"></p>
    <p>Remaining ： <input type="text" name="Remaining" value="{{$Item -> Remaining}}"></p>
    <input style="visibility: hidden" type="text" name="Id" value="{{$Item -> Id}}">
    {{csrf_field()}}
    <input type="submit" value="submit">
</form>
</body>
</html>
