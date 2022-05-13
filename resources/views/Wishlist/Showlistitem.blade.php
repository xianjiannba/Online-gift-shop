<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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
    }

    .tips {
        padding: 5px 20px;
        position: relative;
        background: #EDF8FF;
        margin-top: 20px;
    }

    .tips::after {
        content: "";
        position: absolute;
        left: 5px;
        top: 2px;
        bottom: 2px;
        width: 2px;
        background-color: red;
    }

    .list {
        margin-top: 20px;
    }

    .list .item {
        background: #fff;
        padding: 10px 20px;
        display: flex;
        border-bottom: solid 1px rgba(0, 0, 0, 0.1)
    }

    .list .item .left {
        flex: 1;
        display: flex;
        align-items: center;
    }

    .list .item .right {
        text-align: right;
    }

    .itemprice {
        font-weight: bold;
        color: #D83642;
    }

    .sub-price {
        font-size: 12px;
        color: #666;
    }

    .btn {
        background: transparent;
        border: none;
        color: #fff;
        background-color: #DC3541;
        cursor: pointer;
        height: 34px;
        line-height: 34px;
        padding-left: 10px;
        padding-right: 10px;
        width: 95%;
        margin: 0 auto;
        display: block;
        margin: 0 5px;
        margin-top: 10px;
        text-align: center;
    }

    .btn.cancel {
        background: #999;
    }

    .footer {
        display: flex;
    }

</style>

<body>
<header>
    <a href="/">Home page</a>
    <div class="right">
    </div>
</header>
<div class="content">
    <p class="tips">This is a list of items that have been added</p>

    <div class="list">
        @foreach($item as $val)
            <div class="item">
                <div class="left">
                    <div>{{$val -> Item}} </div>
                </div>
                <div class="right">
                    <div class="sub-price"><span> {{$val -> Singleprice}}$</span> * {{$val -> Itemamount ?? '0'}}</div>
                    <div class="itemprice"> {{$val -> Itemprice}}$</div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="footer">
        <a href="continueadd" class="btn cancel">Continue Shopping</a>
        <a href="addend" class="btn">OK,it's enough!</a>
    </div>
</div>

</body>

</html>
