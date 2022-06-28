<?php

namespace App\Providers;

use Illuminate\Database\Query\Builder;
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
        Builder::macro('whereLike', function ($field, $string) {
            return $string ? $this->orWhere($field, 'like', '%' . $string . '%') : $this;
        });


        // Builder::macro('hasWhereLike', function ($field, $string, $relation) {
        //     return $string ? $this->whereRelation($relation, $field, 'like', '%' . $string . '%') : $this;
        // });
    }
}
