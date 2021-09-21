@extends ('layouts.app')
@section('title', 'Welcome Home')
@section('content')
 <style>
    a {
      color: white;
    }
    p a {
      color: grey;
    }
    ul li a {
      color: black;
      font-weight: 300;
    }
    ul {
      list-style-type: none;
    }
</style>
<div class="container container-fluid">
    <!-- TODO New Header: -->
        <!-- include a header for the shopping section -->
    <x-video-header/>


<div class="row">
    <div class="col-4">
 <iframe width="100%" height="100%"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
    </div>
    <div class="col-4">
 <iframe width="100%" height="100%"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
    </div>
    <div class="col-4">
 <iframe width="100%" height="100%"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
    </div>
</div>

<div class="row mt-3 mb-3">
    <div class="col-4">
 <iframe width="100%" height="100%"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
    </div>
    <div class="col-4">
 <iframe width="100%" height="100%"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
    </div>
    <div class="col-4">
 <iframe width="100%" height="100%"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
    </div>
</div>

<div class="row mt-3 mb-3">
    <div class="col-4">
 <iframe width="100%" height="100%"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
    </div>
    <div class="col-4">
 <iframe width="100%" height="100%"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
    </div>
    <div class="col-4">
 <iframe width="100%" height="100%"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
    </div>
</div>







    <!-- end of general marketplace Section -->
    <!-- for latest article from each subtype ( subcategory ) -->
    <section id="latestArticles">
        <div class="row text-center">
            <div class="col-12 mt-5 mb-3">
                <h1>The Latest From BabysBassinet</h1>
                <hr width="40%">
            </div>
        </div>
        <div class="container container-fluid mt-5 slab text-center">
            <!-- requires data from ArticlesController::latestArticlesBySubtype -->
            @foreach($articles as $a)
                @php
                    switch($a->type ?? '')
                    {
                        case '':
                            'error, no articles returned to view';
                        break;
                        case 'Babies':
                            $articleType = 'babyArticle';
                        break;
                        case 'Children':
                            $articleType = 'childArticle';
                        break;
                        case 'Parents':
                            $articleType = 'parentArticle';
                        break;
                    }
                @endphp
                <div class="row mt-4 text-center">
                    <div class='col-12'>
                        <h2 id="title" class="mb-1">
                            <a style="color:black;" href="/{{ $articleType }}/{{ $a->id ?? '' }}">
                            {{ $a->title }}
                        </a>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="{{ $a->image_name }}" alt="..."
                             class="text-center rounded"
                             height="auto" width="70%;">
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg'>
                        <p style="color: grey; font-size: 12px;" class="mt-3">
                            {{ $a->excerpt }}
                        </p>
                    </div>
                </div>
                <hr style="border:light-grey 0.5px solid;" width="85%;">
            @endforeach
        </div>
    </section>
</div> <!-- end of main container -->

<div class="container container-fluid slab mt-5">
    <div class="row text-center">
        <a class="twitter-timeline" href="https://twitter.com/theBassinet?ref_src=twsrc%5Etfw">Tweets by theBassinet</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>
@endsection
