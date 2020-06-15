<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Auth; 


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
    public function boot(Dispatcher $events)
    {

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $hak_akses = Auth::user()->hak_akses;
            $event->menu->add('Selamat Datang : '.strtoupper($hak_akses));
            $event->menu->add('MENU');

            if ($hak_akses=="administrator") {
                $event->menu->add([
                    'text' => 'Dashboard',
                    'url' => '/admin/dashboard',
                    'icon' => 'fas fa-fw fa-address-card'
                 ],);
                 $event->menu->add([
                    'text' => 'Verifikasi',
                    'url' => '/admin/verifikasi',
                    'icon' => 'fas fa-fw fa-keyboard'
                 ],);
            } else if ($hak_akses=="petugas") {
             } else {
                 
            }
        });
    }
}
