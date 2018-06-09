@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="article-list">
                @forelse($articles as $article)
                    <section class="hero">
                        <div class="hero-body">
                            <h6 class="article-title title">
                                <a href="{{ url($article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h6>
                            <p></p>
                            <p class="subtitle">
                                {{ $article->excerpt }}
                            </p>
                            <div class="extra">
                                <div class="info">
                                    <span class="icon is-small"><i class="fa fa-clock-o"></i></span>
                                    {{ $article->updated_at->format('Y-m-d') }}&nbsp;,&nbsp;
                                    <a href="{{ url($article->slug) }}">
                                        阅读全文 <span class="icon is-small"><i class="fa fa-chevron-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                @empty
                    <h3 class="text-center"></h3>
                @endforelse
            </div>
            {{ $articles->links('layouts.pagination') }}
        </div>
    </div>

@endsection