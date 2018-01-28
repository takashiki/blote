<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Yajra\Auditable\AuditableTrait;

/**
 * Class Article.
 *
 * @package namespace App;
 */
class Article extends Model implements Transformable
{
    use AuditableTrait;
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
