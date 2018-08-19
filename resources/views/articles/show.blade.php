@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="article-header">
                <h1 class="title is-3 has-text-centered">{{ $article->title }}</h1>
                <p class="title is-6 has-text-centered is-gray">
                    <span class="icon"><i class="fa fa-clock-o"></i></span>{{ $article->created_at->format('Y-m-d') }}
                </p>
            </div>

            <div class="content">{!! $article->html !!}</div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        hljs.initHighlightingOnLoad();
    </script>
@endsection