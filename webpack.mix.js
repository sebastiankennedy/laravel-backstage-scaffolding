let mix = require('laravel-mix');

// 复制依赖的资源文件
mix.copyDirectory([
    'node_modules/font-awesome/fonts'
], 'public/fonts');

// 后台管理页面资源文件
mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
    })
    .babel([
        'public/js/app.js'
    ], 'public/js/app.js');

// 后台认证页面资源文件
mix.js('resources/assets/js/login.js', 'public/js')
    .sass('resources/assets/sass/login.scss', 'public/css')
    .options({
        processCssUrls: false
    })
    .babel([
        'public/js/login.js'
    ], 'public/js/login.js');

// 生产环境资源版本化
if (mix.inProduction()) {
    mix.version();
}
