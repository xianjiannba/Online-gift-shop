
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/common.css">
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <script src="static/js/jQuery_v3.1.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <title>Thanks</title>
    <style>
        body {
            background-color: #F5F5F5;
        }

        .content {
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
        }

        p {
            padding: 20px;
            margin-top: 20px;
            text-align: center;
        }
        .footer {
            text-align: right;
        }
    </style>
</head>

<body>
<header>

    <div class="right">
    </div>
</header>
<div class="content">
    <p> Approved! Thanks for your payment,we will send a email to your friend ^ ^
    </p>
    <div class="footer">
        <button class="btn btn-danger" onclick="goHome()" style="position: absolute;left: 47%; top: 20%" >Home page</button>
    </div>
</div>
<script>
    function goHome(){
        location.href = '/'
    }
</script>
</body>

</html>
