<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
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
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property int $order
 * @property int $type
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\User|null $creator
 * @property-read string $created_by_name
 * @property-read mixed $excerpt
 * @property-read mixed $html
 * @property-read string $updated_by_name
 * @property-read \App\User|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article owned()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereUpdatedBy($value)
 */
class Article extends Model implements Transformable
{
    use AuditableTrait;
    use SoftDeletes;
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'type',
        'order',
    ];

    public function getHtmlAttribute()
    {
        return Markdown::convertToHtml($this->content);
    }

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->html), 300);
    }
}
