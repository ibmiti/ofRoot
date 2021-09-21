@if($mostRecentArticles ?? '')
    @foreach($mostRecentArticles ?? '' as $article)
    <div class="row add-whitespace mt-4 mb-4">
        <div class="col-lg">
            <h2  id="title"><a href="/babyArticle/{{ $article->id ?? '' }}">{{ $article->title ?? ''}}</a></h2> 
            <p style="color: grey; font-size: 15px;">
                {{ $article->excerpt }}
            </p>                
        </div>
    </div>
    @endforeach
@endif