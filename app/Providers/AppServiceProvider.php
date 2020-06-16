<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Auth; 

use App\User;
use App\Biodata;
 


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

            if(Auth::user()->biodata != null){
                
                if($hak_akses == 'adminisrator'){
                    $name = "Administrator";
                }else{
                    $name = Auth::user()->biodata->nama;
                }
            }
            else{
                $name = "Pendaftar";
            }
            
            $event->menu->add('Selamat Datang : '.strtoupper( $name));
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
            } else if ($hak_akses=="pendaftar") {
                $event->menu->add([
                    'text' => 'Dashboard',
                    'url' => '/pendaftar/dashboard',
                    'icon' => 'fas fa-fw fa-address-card'
                 ],);
                 $event->menu->add([
                    'text' => 'Isi Berkas Pendaftaran',
                    'url' => '/pendaftar/daftar',
                    'icon' => 'fas fa-fw fa-tasks'
                 ],);
                 if(Auth::user()->biodata != null){
                    $event->menu->add([
                        'text' => 'Cek Biodata',
                        'url' => '/pendaftar/Biodata',
                        'icon' => 'fas fa-fw fa-align-justify'
                    ],);

                    $event->menu->add([
                        'text' => 'Cek Status',
                        'url' => '/pendaftar/status',
                        'icon' => 'fas fa-fw fa-info-circle'
                    ],);
                }
            }
        });
    }
}
