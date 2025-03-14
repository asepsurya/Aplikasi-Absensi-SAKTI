<?php

namespace App\Providers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
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
        
        if (Schema::hasTable('users')) {
            // Jika tabel 'users' ada, lanjutkan untuk mengambil data pengguna aktif
            $activeUsers = User::where('status', '1')->get();
            $countActiveUsers = $activeUsers->count();
        
            // Bagikan data pengguna aktif ke semua tampilan
            view()->share('countActiveUsers', $countActiveUsers);
        } else {
            // Jika tabel 'users' tidak ada, bisa melakukan sesuatu atau memberi peringatan
            // Misalnya, tidak melanjutkan proses atau menampilkan pesan error
            // Log::warning('Tabel users tidak ditemukan.');
        }



        // ubah lokasi ke Indi
        config(['app.locale' => 'id']);
	    Carbon::setLocale('id');


        // user super Admin
        Gate::before(function ($user, $ability) {
            if ($user->hasRole('superadmin')) {
                return true;
            }
        });


        // paginator
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        // App Settings
        $this->app->singleton('settings',function(){
            return Cache::rememberForever('settings', function () {
                return Setting::all()->pluck('value','key');
            });
        });

    }
}
