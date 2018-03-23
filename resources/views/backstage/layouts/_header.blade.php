<header class="main-header">
    <a href="{{route('backstage.dashboard.index')}}" class="logo"><b>HD</b>Education</a>
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D400/sign=4b0345ec92cad1c8d0bbfd274f3f67c4/aa18972bd40735fa9d801b7a99510fb30e240884.jpg" class="user-image" alt=""/>
                        <span class="hidden-xs">登录账号</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="" class="btn btn-default btn-flat">编辑</a>
                            </div>
                            <div class="pull-right">
                                <form action="" method="post">
                                    {{csrf_field()}}
                                    <button class="btn btn-default btn-flat">注销</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>