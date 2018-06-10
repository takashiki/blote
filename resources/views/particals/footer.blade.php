<footer class="footer">

        <hr>

        <div class="columns">
            <div class="column">
                <p class="has-text-centered">
                    <small>
                        <a href="mailto:{{ config('blote.admin.email') }}">{{ config('blote.admin.email') }}</a>
                        <br>
                        {{ config('blote.footer.meta') }}
                        @if (config('blote.footer.beian'))
                            <a href="http://www.miitbeian.gov.cn">{{ config('blote.footer.beian') }}</a>
                        @endif
                    </small>
                </p>
            </div>
        </div>
    </div>
</footer>