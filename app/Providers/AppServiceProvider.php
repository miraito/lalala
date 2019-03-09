<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Lalala\Movie\UseCase\InputPort\MovieRegister::class,
            \Lalala\Movie\UseCase\Interactor\MovieRegisterInteractor::class
        );
        $this->app->bind(
            \Lalala\Movie\UseCase\GateWay\MovieRepository::class,
            \Lalala\Movie\Infra\LaravelMovieRepository::class
        );
        $this->app->bind(
            \Lalala\Movie\UseCase\OutPutPort\MovieRegisteredResult::class,
            \Lalala\Movie\App\MovieRegisteredOutputPresenter::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
