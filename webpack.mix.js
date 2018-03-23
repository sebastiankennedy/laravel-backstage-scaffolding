let mix = require('laravel-mix');

// 复制依赖的文字文件
mix.copyDirectory([
    'node_modules/font-awesome/fonts'
], 'public/fonts');

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
    });
