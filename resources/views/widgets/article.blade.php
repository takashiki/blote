<div class="container list">
    <div class="row">
        <ul class="list-unstyled col-md-10 offset-md-1">
            @forelse($articles as $article)
            <li class="media">
                <div class="media-body">
                    <h6 class="media-heading">
                        <a href="{{ url($article->slug) }}">
                            {{ $article->title }}
                        </a>
                    </h6>
                    <div class="meta">
                        <span class="cinema">{{ $article->subtitle }}</span>
                    </div>
                    <div class="description">
                        {{ $article->meta_description }}
                    </div>
                    <div class="extra">
                        <div class="info">
                            <i class="fas fa-clock"></i>{{ $article->updated_at->diffForHumans() }}&nbsp;,&nbsp;
                            <a href="{{ url($article->slug) }}" class="float-right">
                                Read More <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            @empty
                <h3 class="text-center"></h3>
            @endforelse
        </ul>
    </div>
</div>