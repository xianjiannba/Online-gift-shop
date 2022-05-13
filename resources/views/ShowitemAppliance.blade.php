<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Additem</title>
    <style type="text/css">
        #pull_right {
            text-align: center;
        }

        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }

        .pagination>li {
            display: inline;
        }

        .pagination>li>a,
        .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .pagination>li:first-child>a,
        .pagination>li:first-child>span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .pagination>li:last-child>a,
        .pagination>li:last-child>span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .pagination>li>a:hover,
        .pagination>li>span:hover,
        .pagination>li>a:focus,
        .pagination>li>span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }

        .pagination>.active>a,
        .pagination>.active>span,
        .pagination>.active>a:hover,
        .pagination>.active>span:hover,
        .pagination>.active>a:focus,
        .pagination>.active>span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }

        .pagination>.disabled>span,
        .pagination>.disabled>span:hover,
        .pagination>.disabled>span:focus,
        .pagination>.disabled>a,
        .pagination>.disabled>a:hover,
        .pagination>.disabled>a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }

        .clear {
            clear: both;
        }

        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #F5F5F5;
        }

        a:link,
        a:visited,
        a:hover,
        a:active {
            text-decoration: none;
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

        .list {
            display: flex;
            flex-wrap: wrap;

        }

        .list .item {
            width: 20%;
            padding: 5px;
            box-sizing: border-box;
        }

        .list .item .card {
            background-color: #fff;
            padding: 20px;
            transition: all .2s linear;
            cursor: pointer;

        }

        .list .item .card:hover {
            z-index: 2;
            -webkit-box-shadow: 0 15px 30px rgb(0 0 0 / 10%);
            box-shadow: 0 15px 30px rgb(0 0 0 / 10%);
            -webkit-transform: translate3d(0, -2px, 0);
            transform: translate3d(0, -2px, 0);
        }

        .list .item .card .pic {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: 200px;
            object-fit: cover;

        }

        .title {
            text-align: center;
            margin-top: 10px;
        }


        .price {
            margin-top: 10px;
            color: #DC3541;
            font-weight: bold;
            text-align: center;
        }

        .price .ellipsis {
            height: 34px;
            line-height: 34px;
        }

        input[type="submit"] {
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
            margin-top: 10px;
        }

        .footer {
            height: 34px;
            line-height: 34px;
            margin-top: 20px;
        }

        .footer input[name="amount"] {
            width: 40px;
            margin: 0 10px;
        }

        .footer input[name="amount"] {
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

        .footer input:hover {
            border-color: #DC3541;

        }

        .footer input:focus {
            outline: none;
            border-color: #DC3541;
        }


        .amount {
            /* background: #f6f6f6; */
            padding-left: 5px;
        }

        .ellipsis {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }


        nav {
            text-align: center;
        }

        .pagination>.active>a,
        .pagination>.active>span,
        .pagination>.active>a:hover,
        .pagination>.active>span:hover,
        .pagination>.active>a:focus,
        .pagination>.active>span:focus {
            background-color: #DC3541;
            border-color: #DC3541;
        }

        .pagination>li>a,
        .pagination>li>span {
            color: #DC3541;
        }

        .pagination>li>a:hover,
        .pagination>li>span:hover,
        .pagination>li>a:focus,
        .pagination>li>span:focus {
            color: #DC3541;
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

    </style>
</head>

<body>
<header>
    <a href="/">Home page</a>
    <div class="right">
    </div>
</header>
<div class="content">
    <!-- <p class="tips">Let's add something to your Wishlist</p> -->

    <div class="list">
        @foreach($data as $val)
        <div class="item">
            <div class="card">
                <img class="pic" src="{{$val -> Pic}}">
                <p class="title ellipsis">{{$val -> Item}}</p>
                <div class="price">
                    <span>{{$val -> Price}}$</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$data->links('pagination::bootstrap-4')}}
    <!--表格 -->
</body>

</html>
