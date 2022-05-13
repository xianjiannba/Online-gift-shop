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
            <table class="table table-bordered table-striped table-hover" id="appTable">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Address</th>
                <th>Email</th>
                <th>Operate</th>
                </thead>
                <tbody>
                @foreach($user as $val)
                    <tr>
                        <td class="middle">{{$val->ID}}</td>
                        <td class="middle">{{$val->Name}}</td>
                        <td class="middle">{{$val->Username}}</td>
                        <td class="middle">{{$val->Password}}</td>
                        <td class="middle">{{$val->Address}}</td>
                        <td class="middle">{{$val->Email}}</td>
                        <td class="middle">
                            <a href="editusershow?ID={{$val->ID}}" class="btn btn-success btn-editone">Edit</a>
                            <a href="deleteuser?ID={{$val->ID}}" class="btn btn-danger btn-delone">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$user->links('pagination::bootstrap-4')}}
        </div>


    </main>
</div>
<script>

</script>
</body>

</html>
