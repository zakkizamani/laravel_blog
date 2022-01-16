<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //agar pagination pakai templatenya bootstrap
        Paginator::useBootstrap();

        Gate::define('admin', function (User $user) {
            // auth()->user()->username !== "admin"; //ini nggak dipakai karena sudah pakai routebinding
            return $user->is_admin;
        });
    }
}
