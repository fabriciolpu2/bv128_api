<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use  App\Helpers\LogActivity;

trait Blameable
{

    public static function boot()
    {

        parent::boot();

        if (Auth::check()) {

            static::created(function ($model) {

                $className = get_class($model);

                $subject = 'O usuario ' .  auth()->user()->name . ' criou um recurso do tipo ' . substr($className, 11) . '';

                LogActivity::addToLog($subject, $className, $model->getKey());
            });

            static::updating(function ($model) {

                $className = get_class($model);

                $model = $model->toArray();

                $id = '';

                foreach ($model as $chave => $valor) {
                    $id = $valor;
                    break;
                }

                $subject = 'O usuario ' .  auth()->user()->name . ' atualizou o recurso do tipo ' . substr($className, 11) . '';

                LogActivity::addToLog($subject, $className, $id);
            });

            static::deleting(function ($model) {

                $className = get_class($model);

                $model = $model->toArray();

                $id = '';

                foreach ($model as $chave => $valor) {
                    $id = $valor;
                    break;
                }

                $subject = 'O usuario ' .  auth()->user()->name . ' deletou o recurso do tipo ' . substr($className, 11) . '';

                LogActivity::addToLog($subject, $className, $id);
            });
        }
    }
}
