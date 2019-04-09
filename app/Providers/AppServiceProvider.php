<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


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
        Blade::component('layouts.app', 'appview');
        Blade::component('components.index.slide', 'slide');
        Blade::component('index', 'index');
        Blade::component('components.menu.header', 'header');
        Blade::component('components.footer', 'footer');
        Blade::component('components.index.servicos', 'servicos');
        Blade::component('components.index.pesquisarapida', 'pesquisarapida');
        Blade::component('components.index.carrosrecentes', 'carrosrecentes');
        Blade::component('components.index.depoimentos', 'depoimentos');
        Blade::component('components.register.formregister', 'formregister');
        Blade::component('components.login.formlogin', 'formlogin');
        Blade::component('components.form.cadastrarCnh', 'cadastrarCnh');
        Blade::component('components.form.registraAgencia', 'registraAgencia');
        Blade::component('components.adm.painel', 'painel');
        Blade::component('components.carros.filtro_avancado', 'filtro');
        Blade::component('components.carros.listarcarros', 'listacarros');
    }
}
