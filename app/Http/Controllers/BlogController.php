<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleCreateRequest;

use App\Http\Requests\ArticleUpdateRequest;
use App\Repositories\ArticleRepository;
use App\Repositories\BlogRepository;
use App\Validators\ArticleValidator;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class BlogController.
 *
 * @package namespace App\Http\Controllers;
 */
class BlogController extends Controller
{
    /**
     * @var ArticleRepository
     */
    protected $repository;

    /**
     * @var ArticleValidator
     */
    protected $validator;

    /**
     * blogsController constructor.
     *
     * @param BlogRepository $repository
     * @param ArticleValidator  $validator
     */
    public function __construct(BlogRepository $repository, ArticleValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $blogs = $this->repository->orderBy(
            config('blote.article.sortColumn'),
            config('blote.article.sort')
        )->paginate(config('blote.article.pageSize'));

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $blogs,
            ]);
        }

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = $this->repository->findByIdentity($id);

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $blog,
            ]);
        }

        return view('blogs.show', compact('blog'));
    }
}
