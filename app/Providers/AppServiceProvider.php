<?php

namespace App\Providers;

use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // доп исключения
        Model::shouldBeStrict(!app()->isProduction());

        // оповещение если коннект выполняется дольше 500 мс
        if (app()->isProduction()) {
            DB::whenQueryingForLongerThan(CarbonInterval::seconds(5), function (Connection $connection) {
                // TODO: Сделать сюда удобное оповещение (например в ТГ)
                // Notify development team...
            });

            DB::listen(function ($query) {
                if ($query->time > 100) {
                    // Если запрос больше 100сек - можно сделать тут логировние в ТГ (так сделал автор)
                }
            });
        }
    }
}
