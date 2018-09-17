<?php

namespace App\Repositories;

use App\Blog;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ArticleRepository;
use App\Article;
use App\Validators\ArticleValidator;

/**
 * Class BlogRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BlogRepositoryEloquent extends ArticleRepositoryEloquent implements BlogRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Blog::class;
    }
}
