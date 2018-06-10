<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleCreateRequest;

use App\Http\Requests\ArticleUpdateRequest;
use App\Repositories\ArticleRepository;
use App\Validators\ArticleValidator;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class ArticlesController.
 *
 * @package namespace App\Http\Controllers;
 */
class ArticlesController extends Controller
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
     * ArticlesController constructor.
     *
     * @param ArticleRepository $repository
     * @param ArticleValidator  $validator
     */
    public function __construct(ArticleRepository $repository, ArticleValidator $validator)
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
        $articles = $this->repository->orderBy(
            config('blote.article.sortColumn'),
            config('blote.article.sort')
        )->paginate(config('blote.article.pageSize'));

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $articles,
            ]);
        }

        return view('articles.index', compact('articles'));
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
        $article = $this->repository->findByIdentity($id);

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $article,
            ]);
        }

        return view('articles.show', compact('article'));
    }
}
