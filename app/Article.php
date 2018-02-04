<?php

namespace App;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Markdown;
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

    public function getHtmlAttribute()
    {
        return Markdown::convertToHtml($this->content);
    }

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->html), 300);
    }
}
