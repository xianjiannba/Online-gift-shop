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
                <th>Item</th>
                <th>Amount</th>
                <th>User</th>
                <th>Address</th>
                <th>Email</th>
                <th>Delivery Date</th>

                </thead>
                <tbody>
                @foreach($order as $val)
                    <tr>
                        <td class="middle">{{$val->Item}}</td>
                        <td class="middle">{{$val->Ifbuy}}</td>
                        <td class="middle">{{$val->Name}}</td>
                        <td class="middle">{{$val->Address}}</td>
                        <td class="middle">{{$val->Email}}</td>
                        <td class="middle">{{$val->Deliverydate}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$order->links('pagination::bootstrap-4')}}
        </div>
    </main>
</div>
</body>

</html>
