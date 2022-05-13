<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        a:link,
        a:visited,
        a:hover,
        a:active {
            text-decoration: none;
        }

        body {
            background-color: #F5F5F5;
        }


        header a {
            color: #fff;
            transition: all ease 0.3s;
        }

        header a:hover {
            background-color: #fff;
            color: #000;
        }

        header {
            display: flex;
            background-color: #000000;
        }

        header a {
            display: inline-block;
            height: 60px;
            line-height: 60px;
            padding-left: 20px;
            padding-right: 20px;
        }

        header .right {
            flex: 1;
            text-align: right;
            height: 60px;
            line-height: 60px;
            color: #fff;
            padding-right: 20px;
        }

        .flex {
            display: flex;
        }

        .content {
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
        }

        p {
            padding: 20px;
            margin-top: 20px;
            text-align: center;
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
    <p>Wishlist created successfully! Wishlist number is {{$list->Listnumber}}
    </p>
    <p><span id="seconds">5</span> seconds</p>
</div>

<script>
    (function() {
        var mSeconds = 5;
        setInterval(() => {
            mSeconds--;
            document.querySelector('#seconds').innerHTML = mSeconds
            if (mSeconds === 0) {
                location.href = 'login'
            }
        }, 1000);
    })();
</script>
</body>

</html>
