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

        .content {
            max-width: 600px;
            margin: 0 auto;
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
    </style>
</head>

<body>

<body>
<header>
    <a href="/">Home page</a>
    <div class="right">
    </div>
</header>

<div class="content">
    <div class="form-warp">
        <p class="tips">Please enter the wishlist code you need to query</p>

        <div>
            <form action="Searchwl" method="get">
                <div class="form-item">
                    <div class="lable">Code:</div>
                    <div class="value">
                        <input type="text" id="Listnumber" name="Listnumber" class="form-control">
                    </div>
                </div>
                {{csrf_field()}}
                <input type="submit" value="Check" class="submit">
            </form>
            <div class="flex1"></div>
        </div>
    </div>
</div>
</body>
</body>

</html>
