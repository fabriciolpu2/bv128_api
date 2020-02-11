<?php

namespace App\Models;

use App\Traits\Blameable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
//use YourAppRocks\EloquentUuid\Traits\HasUuid;

class Cliente extends Model implements HasMedia
{

    use HasMediaTrait, Blameable;

    //protected $uuidColumnName = 'id';

    protected $fillable = [
        'nome',
        'depoimento',
        'ativo',
    ];

    public function isActive()
    {
        return $this->ativo ?? false ;
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
              ->width(250)
              ->height(250)
              ->sharpen(10);

        $this->addMediaConversion('square')
              ->width(412)
              ->height(412)
              ->sharpen(10);
    }
}
