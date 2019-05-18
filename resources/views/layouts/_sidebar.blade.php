<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->avatar }}" class="img-circle" alt="麦浚龙">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="">
                    <i class="fa fa-circle text-success"></i> 在线
                </a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">网站运营</li>
            <li class="">
                <a href=""><i class="fa fa-dashboard"></i> <span>后台首页</span></a>
            </li>
        </ul>
    </section>
</aside>