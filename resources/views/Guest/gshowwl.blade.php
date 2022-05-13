<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist details</title>
    <link rel="stylesheet" href="/static/css/common.css">
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <script src="static/js/jQuery_v3.1.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <style>
        .hidden {
            width: 0;
            height: 0;
        }

        #appTable th,
        #appTable td {
            text-align: center;
            vertical-align: middle;
        }
    </style>

</head>

<body>
<header>
    <a href="/">Home page</a>
    <div class="right">
    </div>
</header>
<div class="content">
    <p class="tips" style="text-align: center;font-size: large">This is the wishlist No.{{$list->Listnumber}} created by {{$user->Name}}</p>

    <table class="table table-bordered table-striped table-hover" id="appTable">
        <thead>
        <tr>
            <th>
                Item
            </th>
            <th>
                Remaining unpurchased quantity
            </th>
            <th>
                Purchased quantity
            </th>
            <th>
                Unit Price
            </th>
            <th>
                Purchase
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($item as $val)
            <tr>
                <td>{{$val -> Item}}</td>
                <td>{{$val -> Itemamount}}</td>
                <td>{{$val -> Ifbuy}}</td>
                <td>{{$val -> Singleprice}}$</td>
                <td>
                    <form action="Createguest" class="form-inline">
                        <div class="form-group">
                            <span>Amount</span>
                            <input type="text" name="amount" id="amount" class="form-control">
                            <input type="submit" class="btn btn-danger" value="Purchase">
                        </div>
                        <div class="hidden">
                            <input type="text" style="visibility: hidden" name='Item' value="{{$val->Item}}">
                            <input type="text" style="visibility: hidden" name='Itemlistid' value="{{$val->Itemlistid}}">
                            <input type="text" style="visibility: hidden" name='Singleprice' value="{{$val->Singleprice}}">
                        </div>
                        {{csrf_field()}}
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
        </tr>
        </tfoot>
    </table>

</div>

</body>

</html>
