<!DOCTYPE html>
<html>
   <head> <script type="text/javascript" src="{% static 'js/store/cart.js'  %}"></script>
       <title>Login</title>
    </head>
<body bgcolor="Gainsboro">
<div class="backgroudpic">
    <div class="leftinterface">
        <div class="logo"></div>
        <div id="loginterface">
            <div class="logtext">
                <div class="userlog"><button onclick="fn()"id="userlog">Password Login</button></div>
                <div class="app"><button onclick="fn(true)"id="app">Login With Code</button> </div>

            </div>
            <div id="hidepage">
                <form action="loginb" method="post">
            <div class="logpic">
                <div class="number"></div>
                <div class="box">><input type="text" class="input" name="fname"style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: solid;width:210px;padding-left:5px;outline:none;border-width:0.6px;"></div>

                <div class="password"></div>
                    <div class="box2"><input type="password" class="input" name="password"style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: solid;width:210px;padding-left:5px;outline:none;border-width:0.6px;"></div>
            </div>

            <div class="rkey">
                <div class="checkbox"><input type="checkbox" name="Bike"></div>
                <div class="rk">Save Password</div>
                <div class="fk"><a href="http://10.52.50.238/zszqsso/changePWDSyncNoRightAction.do?_funccode_=C_Null">Forgot Password?</a></div>
            </div>
                    {{csrf_field()}}
            <div class="button" ><button class="button" type="submit">LOGIN</button></div>
                </form>
            </div>
        </div>
        ‬‭‪​‍‏‏‬​‎⁠‌‫‍‮‮‏​‫‪‍‌‪‭‬‭‪​‍‏‏‬​‎⁠‌‫‍‮‮‏​‫‪‍‌‪‭<div id="code">
            </p>Login With Code
        </div>
    </div>
        <div id="rightinterface">
           <img src='pic/4.jpg'id="p1"style=" width: 704px;
           height: 617px; "/>
           <div id="ol">
               <div><button><img scr="/pic/4.jpg"id="p1"></button>></div>
               <div><img scr="/pic/5.jpg"id="p2"></div>
               <div><img scr="/pic/6.jpg"id="p3"></div>
               <div><img scr="/pic/7.jpg"id="p4"></div>
           </div>
            </div>
        </div>
    </div>

    </body>
    <style>

        .backgroudpic{
width:1100px;

height:617px;

position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;



text-align: center;

background: rgb(251, 252, 252);

border:2px solid rgb(240, 245, 245);

box-shadow: rgb(139, 137, 137) 10px 10px 30px 5px ;
        }
        #rightinterface{
        width: 704px;
        height: 617px;




            background: url(pic/4.jpg)no-repeat;
            float:right;

        }
        .leftinterface{
            display: block;
    width: 260px;
    height: 617px;
    float: left;
    padding: 0 68px;
        }
        a{text-decoration: none;
            color:rgb(161, 159, 159)}
        .logo{

            width: 400px;
            height: 150px;
            display:inline-block;
            display: block;
            background:url(pic/1.jpg)no-repeat;
            background-position:70px 30px;
            background-size: 30% 60%
        }
        .logtext{
            width: 260px;
            height: 55px;
            color:rgb(141, 139, 139);
        font-size:15px;
        }
        #userlog{
            float:left;
            border: none;
            outline: none;
            background-color: white;
            color:rgb(236, 86, 86);
            font-size:15px;
        }
        #app{
            float:right;
            border: none;
            outline: none;
            background-color: white;
            color:rgb(141, 139, 139);
            font-size:15px;
        }
        .logpic{
            width:260px;
            height:115px;
        }

        .box{

            background:url(pic/3.png)no-repeat;

        width: 100%;
        height: 50px;
    border:0;
    z-index: 1;
            border-width: 0.5px;

        }
        .box2{
            width: 50px;
            height: 50px;
            background:url(pic/2.png)no-repeat;
            width:100%;
            height:50px;

        }
        .rkey{
            width:260px;
            height:60px;
            color:rgb(161, 159, 159);
            font-size:10px;
        }
        .rk{
            float:left;
            margin-left: 2px;
            margin-top: 3px;
        }
        .fk{
            text-decoration:none;
            float: right;
            margin-top: 3px;
        }
        .checkbox{
            float:left;
        }
        .button{
            width: 250px;
            height:35px;
            border-width:0px;
            border-radius: 12px;
            background:rgb(201, 111, 111);
            outline:none;
            color:white;
        }
        #code{
            width:100%;
            height: 100px;
            background:url(pic/header.png)no-repeat;

            display: none;

        }
        #img{
            width: 704px;
            height: 617px;
        }
        #ol{
            position: absolute;
            bottom: 85px;
            width:617px;
            text-align: center;
            right: 15px;

        }
        element.style{
            width: 704px;
        height: 617px;
        }
        </style>
        <script>
          function fn(isApp){
              document.getElementById("hidepage").style.display= isApp ? 'none' : 'block';
              document.getElementById("code").style.display= isApp ? 'block' : 'none';
              document.getElementById("app").style.color= isApp ? 'rgb(236, 86, 86)' : 'rgb(141, 139, 139)';
              document.getElementById("userlog").style.color= isApp ? 'rgb(141, 139, 139)' : 'rgb(236, 86, 86)';

        }
        function fx(){
            commomFun()

        }
        function commomFun(param1){
            document.getElementById("hidepage").style.display="block";
            document.getElementById("code").style.display='none';
            document.getElementById("app").style.color='rgb(141, 139, 139)';
            document.getElementById("userlog").style.color='rgb(236, 86, 86)';
        }
        var i= 0;
        var imgs=["pic/4.jpg","pic/5.jpg","pic/6.jpg","pic/7.jpg"];
        setInterval(function(){
            i++;
            if(i>3){
                i=0;
            }
            document.getElementById("p1").src=imgs[i] ;"width: 704px";"height: 617px";
        },3000);


        window.onload=function(){
                var c1=document.getElementById("p1");
                var c2=document.getElementById("p2");
                var c3=document.getElementById("p3");
                var c4=document.getElementById("p4");

                c1.onclick=function(){
                    document.getElementById("img").src=imgs[0];
                }
                c2.onclick=function(){
                    document.getElementById("img").src=imgs[1];
                }
                c3.onclick=function(){
                    document.getElementById("img").src=imgs[2];
                }
                c4.onclick=function(){
                    document.getElementById("img").src=imgs[3];
                }
            }


            </script>
