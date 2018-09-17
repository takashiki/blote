<header class="header">
    <div class="container">
        <div class="columns">
            <div class="column is-three-fifths is-offset-one-fifth">
                <ul class="nav-item">
                    <li class="nav-link"><a href="/">首页</a></li>
                </ul>
                <diV class="search-item">
                    <form action="{{ route('blogs.search') }}" method="get">
                        <input type="text" name="keyword" value="{{ Request::query('keyword') }}">
                        <button type="submit">
                            <span class="icon"><i class="fa fa-search"></i></span>
                        </button>
                    </form>
                </diV>
            </div>
        </div>
    </div>
</header>