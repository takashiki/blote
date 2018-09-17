<?php

namespace App;

use App\Enums\ArticleType;
use Illuminate\Database\Eloquent\Builder;

class Blog extends Article
{
    protected $table = 'articles';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function (Builder $builder) {
            $builder->where('type', ArticleType::Blog);
        });
    }
}
