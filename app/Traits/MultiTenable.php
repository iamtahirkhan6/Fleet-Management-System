<?php

namespace App\Traits;

use Auth;
use Illuminate\Database\Eloquent\Builder;

trait MultiTenable {

    protected static function bootMultiTenable()
    {
        if (Auth::check()) {
            static::creating(function ($model) {
                $model->company_id = auth()->user()->company_id;
            });

            if (!Auth::user()->hasRole('admin')) {
                static::addGlobalScope('company_id', function (Builder $builder) {
                    $builder->where('company_id', Auth::user()->company_id);
                });
            }
        }
    }

}
