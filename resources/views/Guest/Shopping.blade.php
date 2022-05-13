<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/static/css/common.css">
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <script src="static/js/jQuery_v3.1.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.4);
        }

        body::after {
            content: "";
            background: url(pic/bg.jpg) no-repeat;
            background-size: cover;
            opacity: 0.5;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -5;

        }

        .content {
            max-width: 600px;
            margin: 0 auto;
        }


        input[type="text"] {
            width: 40px;
            height: 34px;
            line-height: 34px;
            padding: 0 5px;

            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            vertical-align: middle;
            display: table-cell;
            -webkit-appearance: none;
            background-color: #fff;
            background-image: none;
            border-radius: 4px;
            border: 1px solid #dcdfe6;
            box-sizing: border-box;
            color: #606266;
            display: inline-block;
            font-size: inherit;
            outline: none;
            padding: 0 15px;
            transition: border-color .2s cubic-bezier(.645, .045, .355, 1);
            width: 100%;
        }

        .datetimepicker-warp {
            position: relative;
        }

        form {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-warp {
            background: #fff;
            padding-right: 40px;
            margin-top: 20px;
            padding: 20px;

        }

        form .lable {
            width: 120px;
            text-align: left;
            font-weight: bold;
        }

        form .value {
            width: 100%;
        }

        form .form-item {
            margin-top: 20px
        }

        .submit {
            background: transparent;
            border: none;
            color: #fff;
            background-color: #DC3541;
            cursor: pointer;
            height: 34px;
            line-height: 34px;
            padding-left: 10px;
            padding-right: 10px;
            width: 100%;
            margin: 0 auto;
            display: block;
            margin: 0 5px;
            margin-top: 20px;
            text-align: center;
        }

        .flex1 {
            flex: 1;
        }

        .hide {
            width: 0;
            height: 0;
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



    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Approved</h4>
                </div>
                <div class="modal-body">
                    Approved! Thanks for your payment,we will send a email to your friend
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="confirm()"  class="btn btn-primary">confirm</button>
                </div>
            </div>
        </div>
    </div>

    <div class="form-warp">
        <p class="tips">Please check your payment list</p>
        <table class="table table-bordered table-striped table-hover" id="appTable">
            <thead>
            <th>Wishlist</th>
            <th>Item</th>
            <th>Price</th>
            </thead>
            <tbody>
            <tr>
                <td>No. {{$Itemlistid}}</td>
                <td>{{$Item}}</td>
                <td>{{$total}}</td>
            </tr>
            </tbody>
        </table>
        <form class="hide" action="Finishshopping" style="visibility: hidden">
            <input name="Itemlistid" value="{{$Itemlistid}}">
            <input name="Item" value="{{$Item}}">
            <input name="amount" value="{{$amount}}">
            <input name="price" value="{{$total}}">
            {{csrf_field()}}
            <button id="submit" type="submit"></button>
        </form>
        <div id="paypal-button-container"></div>
    </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=test&currency=AUD"></script>
<!-- Set up a container element for the button -->
<script>
    function confirm ( ){
        document.getElementById('submit').click();
    };

    paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            var amount = {{$total}};
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: amount
                    }
                }]
            });
        },
        onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
                const transaction = orderData.purchase_units[0].payments.captures[0];
                $('#myModal').modal({
                    keyboard: false
                });

            });
        }
    }).render('#paypal-button-container');
</script>
</body>

</html>
