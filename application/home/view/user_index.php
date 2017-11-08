<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- meta使用viewport以确保页面可自由缩放 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 引入 jQuery Mobile 样式 -->
    <link rel="stylesheet" href="<?php echo ROUS.'/';?>jquery.mobile-1.4.5.min.css">

    <!-- 引入 jQuery 库 -->
    <script src="http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- 引入 jQuery Mobile 库 -->
    <script src="<?php echo ROUS.'/';?>jquery.mobile-1.4.5.min.js"></script>

    <title>Title</title>
</head>
<body>
<!--登陆页面-->
<div data-role="page" id="pageLogin">

    <div data-role="header">
        <h1 role="heading">欢迎登陆</h1>
    </div>

    <div data-role="main" class="ui-content">
        <form method="get" action="">

            <div class="ui-field-contain">
                <label for="name">姓名:</label>

                <input type="text" name="name" id="name">

                <br/>

                <label for="password">密码:</label>

                <input type="password" name="password" id="password">
                <div style="margin-top: 20%;">
                    <a href="#pagetwo" data-role="button" data-transition="flow">登录</a>
                    <a href="#pagetwo" data-role="button" data-transition="flip">注册</a>
                </div>
            </div>

        </form>
    </div>

    <div data-role="footer" style="text-align: center"  data-position="fixed">
        <p>CopyRight &copy;koastal</p>
    </div>

</div>
<!--注册页面-->
<div data-role="page" id="pagetwo" data-theme="b">

    <div data-role="header">
        <h1>欢迎注册</h1>
    </div>

    <div data-role="main" class="ui-content">
        <form method="get" action="">

            <div class="ui-field-contain">
                <label for="Rname">姓名:</label>

                <input type="text" name="name" id="Rname">

                <br/>

                <label for="Rpassword">密码:</label>

                <input type="password" name="password" id="Rpassword">

                <br/>

                <label for="Repassword">重复密码:</label>

                <input type="password" name="password" id="Repassword">

                <div style="margin-top: 20%;">
                    <a href="#pageLogin" data-role="button" data-transition="flow" data-direction="reverse">确定</a>
                    <a href="#pageLogin" data-role="button" data-transition="flip" data-direction="reverse">登录</a>
                </div>
            </div>

        </form>
    </div>

    <div data-role="footer" style="text-align: center"  data-position="fixed">
        <p>CopyRight &copy;koastal</p>
    </div>

</div>

</body>
</html