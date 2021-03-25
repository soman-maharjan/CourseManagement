<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

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
        // dd(auth()->id());
        // $role_id = User::where('id',auth()->id())->pluck('role_id');
        // $user = User::all();
        // dd($user);
        // View::share('role_id', $role_id);
        Paginator::useBootstrap();
        view()->composer('*', function ($view) {
            $role_id = User::where('id',auth()->id())->pluck('role_id')->toArray();
            $view->with('role_id', $role_id);
        });
    }
}
