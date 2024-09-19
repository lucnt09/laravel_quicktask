<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Lấy giá trị ngôn ngữ từ session (hoặc từ config mặc định)
        $locale = Session::get('locale', config('app.locale'));

        // Kiểm tra xem locale có hợp lệ không (chỉ hỗ trợ en và vi)
        if (!in_array($locale, ['en', 'vi'])) {
            $locale = config('app.locale');
        }

        // Đặt ngôn ngữ cho ứng dụng
        App::setLocale($locale);
    }
}
