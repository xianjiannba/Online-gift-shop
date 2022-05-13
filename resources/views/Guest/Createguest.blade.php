<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/common.css">
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <script src="static/js/jQuery_v3.1.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <title>Document</title>

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
            z-index: -1;

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
    <div class="form-warp">
        <p class="tips">Please enter your information</p>
        <div>
            <form action="Goshopping" method="post">
                <div class="form-item">
                    <div class="lable">Name:</div>
                    <div class="value">
                        <input name="Name" type="text">
                    </div>
                </div>
                <div class="form-item">
                    <div class="lable">Email:</div>
                    <div class="value">
                        <input name="Email" type="text">
                    </div>
                </div>
                <div class="form-item">
                    <div class="lable">Phonenumber:</div>
                    <div class="value">
                        <input name="Phonenumber" type="text">
                    </div>
                </div>
                <div class="hide">
                    <input type="text" style="visibility: hidden" name='amount' value="{{$amount}}">
                    <input type="text" style="visibility: hidden" name='Item' value="{{$Item}}">
                    <input type="text" style="visibility: hidden" name='Itemlistid' value="{{$Itemlistid}}">
                    <input type="text" style="visibility: hidden" name='total' value="{{$total}}">
                </div>

                {{csrf_field()}}
                <input type="submit" value="submit" class="btn btn-danger">
            </form>
            <div class="flex1"></div>
        </div>
    </div>
</div>
</body>

</html>
