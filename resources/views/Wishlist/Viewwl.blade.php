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


        .flex {
            display: flex;
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
            color: #fff;
        }

        header .right {
            flex: 1;
            text-align: right;
            height: 60px;
            line-height: 60px;
            color: #fff;
            padding-right: 20px;
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
            display: flex;
            flex-wrap: wrap;
        }

        .list .item {
            background: #fff;
            width: calc(50% - 10px);
            background: #fff;
            display: flex;
            border-bottom: solid 1px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all .2s linear;
            color: #000;
            margin: 0 5px;
        }

        .list .item:hover {
            background: rgba(0, 0, 0, 0.1);
        }


        .list .item .left {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .list .item .right {
            text-align: right;
            padding: 10px;
            display: flex;
            color: #377EFD;
        }

        .list .item .right svg {
            margin-right: 5px;
        }


        .listnumber {
            color: red;
            margin-right: 10px;
            color: #fff;
            padding: 10px;
        }

        .list .item:nth-child(even) .listnumber {
            background-color: #377EFD;
        }

        .list .item:nth-child(odd) .listnumber {
            background-color: #377EFD;

        }

        .btn-view {
            color: #fff;
            font-size: 14px;
            background-color: #D83642;
            padding: 5px 10px;
            border-radius: 5px;
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

        .itemprice {
            color: #666;
            display: flex;
            align-items: center;
            margin-right: 5px;
            font-size: 12px;
        }

    </style>
</head>

<body>
<div id="app">
    <header>
        <a href="/">Home page</a>
        <div class="right">
        </div>
    </header>

    <div class="content">
        <div class="list">
            @foreach($list as $val)
                <a class="item" href="Checkwl?Listnumber={{$val->Listnumber}}">
                    <div class="left">
                        <div class="listnumber">{{$val -> Listnumber}} </div>
                        <div>
                            <div>{{$val -> Festival}} </div>
                            <div class="itemprice"> {{$val -> Deliverydate}}</div>
                        </div>
                    </div>
                    <div class="right">
                        <!-- <svg t="1651570943966" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          p-id="3130" width="24" height="24">
                          <path
                            d="M512 608a96 96 0 1 1 0-192 96 96 0 0 1 0 192m0-256c-88.224 0-160 71.776-160 160s71.776 160 160 160 160-71.776 160-160-71.776-160-160-160"
                            fill="#D83642" p-id="3131"></path>
                          <path
                            d="M512 800c-212.064 0-384-256-384-288s171.936-288 384-288 384 256 384 288-171.936 288-384 288m0-640C265.248 160 64 443.008 64 512c0 68.992 201.248 352 448 352s448-283.008 448-352c0-68.992-201.248-352-448-352"
                            fill="#D83642" p-id="3132"></path>
                        </svg> -->
                        <div class="btn-view">view</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
</body>



</html>
