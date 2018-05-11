<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Tutorial | 后台登录</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>Laravel</b> Tutorial</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Happy Coding</p>
        <form action="{{route('backstage.authentication.login')}}" method="post">
            {{csrf_field()}}
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="登录账号" id="name" name="name">
                <span class="fa fa-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="登录密码" id="password" name="password">
                <span class="fa fa-key form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-success btn-block btn-flat">登录</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/login.js')}}"></script>
</body>
</html>
