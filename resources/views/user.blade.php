<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

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

        .content {
            display: flex;
            flex-direction: column;
            max-width: 1200px;
            background: #fff;
            margin: 0 auto;
            margin-top: 120px;
            padding: 20px;
            padding-bottom: 40px;
            border-radius: 15px;
        }

        .card {
            background-color: #fff;
            display: block;
            height: 100px;
            margin: 0 20px;
            position: relative;
            border-radius: 10px;
            box-shadow: 3px 3px 3px rgba(0, 0, 0, .1);
            transition: all ease 0.3s;
            background: linear-gradient(270deg, #ee9ca7 0%, #ffdde1 100%);
            margin-top: 20px;
        }

        .card:hover {
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4);
        }

        .card:hover .title {
            transform: scale(1.1) translateX(-50%) translateY(-50%);
        }

        .card svg {
            transition: all ease 0.3s;
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);

        }

        .card:hover svg {
            transform: translateY(-50%) rotate(180deg);
        }

        .card:nth-child(2) {
            background: linear-gradient(270deg, #2193b0 0%, #6dd5ed 100%);
        }

        .card:nth-child(3) {
            background: linear-gradient(270deg, #2c3e50 0%, #bdc3c7 100%);
        }


        #ee9ca7 .card:hover {
            box-shadow: 3px 3px 10px rgba(0, 0, 0, .3);

        }

        .card span.title {
            position: absolute;
            right: 20px;
            transition: all ease 0.3s;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            font-size: 20px;
            color: #fff;
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
    <a class="card" href="Createwl">
        <svg t="1651506016424" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
             p-id="3130" width="64" height="64">
            <path
                d="M512 448c-35.296 0-64-28.704-64-64s28.704-64 64-64 64 28.704 64 64-28.704 64-64 64m0-192c-70.592 0-128 57.408-128 128s57.408 128 128 128 128-57.408 128-128-57.408-128-128-128"
                fill="#ffffff" p-id="3131"></path>
            <path
                d="M768 797.632v-69.92a151.904 151.904 0 0 0-151.712-151.68h-208.576A151.904 151.904 0 0 0 256 727.68v69.92C177.632 727.36 128 625.6 128 512 128 299.904 299.936 128 512 128s384 171.904 384 384c0 113.6-49.632 215.36-128 285.632m-448 46.56v-116.48a87.776 87.776 0 0 1 87.712-87.68h208.576A87.776 87.776 0 0 1 704 727.68v116.48a381.568 381.568 0 0 1-384 0m192-780.16C264.96 64 64 264.96 64 512c0 246.976 200.96 448 448 448s448-201.024 448-448c0-247.04-200.96-448-448-448"
                fill="#ffffff" p-id="3132"></path>
        </svg>
        <span class="title">Welcome！ {{$User->Name}}</span>
    </a>
    <a class="card" href="Createwl">
        <svg t="1651503571231" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
             p-id="2813" width="64" height="64">
            <path
                d="M512 938.666667C276.362667 938.666667 85.333333 747.637333 85.333333 512S276.362667 85.333333 512 85.333333s426.666667 191.029333 426.666667 426.666667-191.029333 426.666667-426.666667 426.666667z m0-64c200.298667 0 362.666667-162.368 362.666667-362.666667S712.298667 149.333333 512 149.333333 149.333333 311.701333 149.333333 512s162.368 362.666667 362.666667 362.666667z m32-394.666667h128a32 32 0 0 1 0 64H544v128a32 32 0 0 1-64 0V544H352a32 32 0 0 1 0-64h128V352a32 32 0 0 1 64 0v128z"
                p-id="2814" fill="#ffffff"></path>
        </svg>
        <span class="title">Create WishList</span>
    </a>
    <a class="card" href="Viewwl">
        <svg t="1651504167427" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
             p-id="3351" width="64" height="64">
            <path
                d="M544 661.333333a32 32 0 0 1-64 0V362.666667a32 32 0 0 1 64 0v298.666666z m160 0a32 32 0 0 1-64 0V490.666667a32 32 0 0 1 64 0v170.666666z m-320 0a32 32 0 0 1-64 0V448a32 32 0 0 1 64 0v213.333333zM202.666667 138.666667h618.666666c64.8 0 117.333333 52.533333 117.333334 117.333333v512c0 64.8-52.533333 117.333333-117.333334 117.333333H202.666667c-64.8 0-117.333333-52.533333-117.333334-117.333333V256c0-64.8 52.533333-117.333333 117.333334-117.333333z m0 64a53.333333 53.333333 0 0 0-53.333334 53.333333v512a53.333333 53.333333 0 0 0 53.333334 53.333333h618.666666a53.333333 53.333333 0 0 0 53.333334-53.333333V256a53.333333 53.333333 0 0 0-53.333334-53.333333H202.666667z"
                p-id="3352" fill="#ffffff"></path>
        </svg>
        <span class="title">View WishList</span>
    </a>
    <a class="card" href="Viewwl">
        <svg t="1651504734022" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
             p-id="3601" width="64" height="64">
            <path
                d="M288 384v-74.666667c0-123.722667 100.266667-224 224-224s224 100.224 224 224v74.666667h10.677333C811.445333 384 864 436.597333 864 501.333333v320c0 64.821333-52.469333 117.333333-117.322667 117.333334H277.333333C212.554667 938.666667 160 886.069333 160 821.333333V501.333333c0-64.821333 52.469333-117.333333 117.322667-117.333333H288z m64 0h320v-74.666667c0-88.426667-71.605333-160-160-160-88.384 0-160 71.626667-160 160v74.666667zM224 501.333333v320c0 29.397333 23.914667 53.333333 53.322667 53.333334H746.666667A53.269333 53.269333 0 0 0 800 821.333333V501.333333c0-29.397333-23.914667-53.333333-53.322667-53.333333H277.333333A53.269333 53.269333 0 0 0 224 501.333333z"
                p-id="3602" fill="#ffffff"></path>
        </svg>
        <span class="title">Logout</span>
    </a>
</div>
</body>

</html>
