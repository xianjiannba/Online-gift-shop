<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    @include('Admin/common/head')
</head>

<body>
<div class="app flex">
    @include('Admin/common/aside')
    <main>
        <div class="panel-body">
            <form action="edituser" method="post" class="form-horizontal nice-validator n-default n-bootstrap">
                <div class="form-group">
                    <label for="Name" class="control-label col-xs-12 col-sm-2">Name:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input class="form-control" type="text" id="Name" name="Name" value="{{$user -> Name}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Username" class="control-label col-xs-12 col-sm-2">Username:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input class="form-control" type="text" id="Username" name="Username" value="{{$user -> Username}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Password" class="control-label col-xs-12 col-sm-2">Password:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input class="form-control" type="text" id="Password" name="Password" value="{{$user -> Password}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Address" class="control-label col-xs-12 col-sm-2">Address:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input class="form-control" type="text" id="Address" name="Address" value="{{$user -> Address}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Email" class="control-label col-xs-12 col-sm-2">Email:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input class="form-control" type="text" id="Email" name="Email" value="{{$user -> Email}}">
                    </div>
                </div>
                <input style="visibility: hidden" type="text" name="ID" value="{{$user -> ID}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="control-label col-xs-12 col-sm-2"></div>
                    <div class="col-xs-12 col-sm-8"> <input type="submit" value="Save" class="btn btn-success btn-embossed"></div>
                </div>
            </form>
        </div>
    </main>
</div>
</body>

</html>
