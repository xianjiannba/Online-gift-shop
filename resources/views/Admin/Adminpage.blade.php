<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    @include('Admin/common/head')
    <style>
        .title {
            font-size: 22px;
            font-weight: bold;
        }

        .box {
            background: #3498db !important;
            background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #3498db), color-stop(1, #52a7e0)) !important;
            color: #fff;
            font-size: 20px;
            padding: 20px;
            border-radius: 10px;
        }

        .box p:nth-child(2) {
            text-align: right;
        }
    </style>
</head>

<body>
<div class="app flex">
    @include('Admin/common/aside')
    <main>
        <div class="panel-body">
            <p class="title">Welcome Manager {{$User->Name}}</p>

            <div class="box">
                <p>Sales:</p>
                <p>{{$profit->profit}}$ (AUD)</p>
            </div>
        </div>
    </main>
</div>
</body>

</html>
