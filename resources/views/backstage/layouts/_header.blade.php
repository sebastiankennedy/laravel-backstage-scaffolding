<header class="main-header">
    <a href="{{route('backstage.dashboard.index')}}" class="logo"><b>HD</b>Education</a>
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlqDPXyHFAikb1l1RJapqnp7SzrdoMCkCn373OE3-cAJWhjHzH" class="user-image" alt=""/>
                        <span class="hidden-xs">麦浚龙</span>
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