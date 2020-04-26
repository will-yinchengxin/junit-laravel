#Willyin/sjunit-laravel

- 方便与laravel框架中对于某一个类的方法调试；类似于单元测试

- 框架要求
>Laravel >= 5.5 && php >= 7.0.*

- 安装
>composer require "willyin/junit-laravel"

- 配置(Laravel中应用)

在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5以上版本无需手动注册)
'providers' => [
     Willyin\JunitLaravel\Providers\JunitServiceProvider::class,
]

- 然后在浏览器中直接访问路由
````
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');

访问方式:
先通过 php artisan route:list 查看下

你的域名/junit
如:
http://test.com/junit/
````