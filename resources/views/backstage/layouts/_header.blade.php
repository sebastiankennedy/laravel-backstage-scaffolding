<header class="main-header">
    <a href="{{route('backstage.dashboard.index')}}" class="logo">Laravel <b>Tutorial</b></a>
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ $backstageCurrentUser->avatar }}" class="user-image"
                             alt="{{ $backstageCurrentUser->name }}">
                        <span class="hidden-xs">{{ $backstageCurrentUser->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="" class="btn btn-primary btn-flat">编辑</a>
                            </div>
                            <div class="pull-right">
                                <form action="{{route('backstage.authentication.logout')}}" method="post">
                                    {{csrf_field()}}
                                    <button class="btn btn-danger btn-flat">注销</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>