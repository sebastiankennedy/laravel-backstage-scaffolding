<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
    <title>{{ $pageTitle ?? 'Laravel Backstage Scaffolding' }} @yield('title')</title>
    <meta name="keywords" content="{{ $pageKeywords ?? 'Laravel Backstage Scaffolding' }}">
    <meta name="description" content="{{ $pageDescription ?? 'Laravel Backstage Scaffolding' }}">
    @yield('before.app.css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    @yield('after.app.css')
</head>
<body class="skin-black">
<div class="wrapper">
    @include('layouts._header')
    @include('layouts._sidebar')
    <div class="content-wrapper">
        @if(!empty($pageTitle))
            <section class="content-header">
                <h1>
                    {{ $pageTitle ?? null }}
                    <small>{{ $pageDescription ?? null }}</small>
                </h1>
                @yield('breadcrumbs')
            </section>
        @endif
        <section class="content">
            @yield('content')
        </section>
    </div>
    @include('layouts._footer')
</div>
@yield('before.app.js')
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
    if ($('.select2').length > 0) {
        $('.select2').select2();
    }

    @if(Session::has('success'))
    swal({
        title: '操作成功',
        text: '{{session()->get('success')}}',
        type: 'success',
        timer: 3000,
        showConfirmButton: false
    });
    @endif

    @if(session()->has('errors'))
    swal({
        title: '操作失败',
        text: '{{implode('  ', $errors->all())}}',
        type: 'error',
        showConfirmButton: false
    });
    @endif

    $(function () {
        // 通用删除
        $(".delete-button").click(function () {
            swal({
                title: '确定执行删除操作?',
                text: '一旦删除，你将无法恢复这个数据!',
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: '取消',
                confirmButtonText: '删除',
                confirmButtonColor: '#d33',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    swal({
                        title: '请稍等',
                        text: '正在执行数据删除操作...',
                        onOpen: () => {
                            swal.showLoading()
                        }
                    });
                    $(this).parent('form').submit();
                } else if (result.dismiss === swal.DismissReason.cancel) {
                    swal({
                        title: '取消',
                        text: '没有执行删除数据操作',
                        type: 'info',
                        showConfirmButton: false,
                        timer: 2000
                    })
                }
            })
        });
    });
</script>
@yield('after.app.js')
</body>
</html>