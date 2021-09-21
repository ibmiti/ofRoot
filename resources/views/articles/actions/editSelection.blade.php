@extends ('layouts.app')
<!-- make title unqique to article -->
<!--  TODO: this view needs to be styled for all view sizes -->
@section('title', 'Blog')
@section ('content')

<!-- | Styles for this file -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
.col-lg  {
    /* font-family: 'Raleway', 'Roboto'; */
    font-family: 'Big Shoulders Stencil Display', cursive;
    font-size: 40px;

}
.col-md {
    font-family: Verdana;
    font-size: 16px;
    color: #555555;
    line-height: 1.5;
    letter-spacing: .45px;
    margin: 20px 20px 20px 20px;
    padding: 20px 100px 20px 100px;
}
#title {
    line-height: 1.5;
    letter-spacing: .45px;
    font-family: 'Big Shoulders Stencil Display', cursive;
}
a {
    text-decoration: none;
}
#imgPost {
    /* padding-right: 20px; */
    width: 75%;
}
a:hover {
    color: grey;
}
a:link {
    text-decoration: none;
}
a:visited {
    text-decoration: none;
}
img {
    border-radius : 7%;
    -moz-border-radius: 7%;
    -webkit-border-radius:7%;
}
p {
    color: grey;
}
.card-articles {
    -moz-box-shadow: 0 0 3px grey !important;
    -webkit-box-shadow: 0 0 3px grey !important ;
    box-shadow: 0 0 20px grey !important;
}
.add-whitespace {
    padding : auto;
    margin : auto;
}
/* master style for the slab here */
/* secondary style for slab here */
/* third style-choice for slab here */
/* fourth style-choice for slab here */
</style>

    <!--  TODO: place all styles within separate dir. -->


<div class="container">
    <div class="row">
        <h1 class="col-lg text-center mt-5">Edit Page</h1>
    </div>

    <div class="row">
        <div class="col-lg text-center mb-5"
             style="padding-bottom: 40px;"
        >
            <h2>Select the article you wish to edit</h2>
        </div>
    </div>

<!-- buttons  -->
    <div class="row add-whitespace">
        <div class="text-center col-sm-12 add-whitespace">
            <!-- <button id="popular" type="button" class="btn btn-outline-primary">Popular</button> -->
            <button id="recentButton"  type="button" class="btn btn-outline-secondary">Recent</button>
            <button id="babyButton"  type="button" class="btn btn-outline-success">Baby</button>
            <button id="childButton"type="button" class="btn btn-outline-danger">Child</button>
            <button id="parentButton" type="button" class="btn btn-outline-primary">Parent</button>
        </div>
    </div>

<!-- card which buttons interact with -->
    <div class="mt-4 row card card-articles add-whitespace">
        <div class="col-lg-12 mt-2 container add-whitespace">
            <div class="container">
        <!-- | This data to be swapped out based on button push -->
                <h2 id="article-type" class="col-lg mt-3">
                    <!-- this h2 filled with script on button click -->
                </h2>
                <p style="color: grey;" id="discription-type">
                    Edit the latest BabysBassinet Articles
                </p>
                <hr style="border: 2px solid black;">
                <div id="mostRecentArticles">
                    @foreach($mostRecentArticles as $a)
                    @php

                        switch($a->type) {
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
                        <div class="row add-whitespace mt-4 mb-4">
                            <div class="col-lg">
                                <h2 id="title"><a href="/edit/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>
                                <p style="color: grey; font-size: 15px;">
                                    {{ $a->excerpt }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="babyArticles">
                    @foreach($babyArticles as $a)
                    <div class="row add-whitespace mt-4 mb-4">
                        <div class="col-lg">
                            <h2 id="title"><a href="/edit/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>
                            <p style="color: grey; font-size: 15px;">
                                {{ $a->excerpt }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="childArticles">
                    @foreach($childArticles as $a)
                    <div class="row add-whitespace mt-4 mb-4">
                        <div class="col-lg">
                            <h2 id="title"><a href="/edit/{{ $a->id }}">{{ $a->title ?? ''}}</a></h2>
                            <p style="color: grey; font-size: 15px;">
                                {{ $a->excerpt }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="parentArticles">
                    @foreach($parentArticles as $a)
                    <div class="row add-whitespace mt-4 mb-4">
                        <div class="col-lg">
                            <h2 id="title"><a href="/edit/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>
                            <p style="color: grey; font-size: 15px;">
                                {{ $a->excerpt }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">

    // - buttons for article type selection
    let recentButton = document.getElementById('recentButton');
    let babyButton   = document.getElementById('babyButton');
    let childButton  = document.getElementById('childButton');
    let parentButton = document.getElementById('parentButton');

    // - Div's for various article types
    let recentArticles = document.getElementById('mostRecentArticles');
    let babyArticles  = document.getElementById('babyArticles');
    let childArticles  = document.getElementById('childArticles');
    let parentArticles = document.getElementById('parentArticles');

    //  | default article selection
    window.onload = () =>  {
        recentButton.click();
        addActiveClassOnClick(recentButton);
     }

    function hideDivsWithArticles(x) {
        console.log(x);
        x.style.display = "none";
    }
    //  - Hide divs on load
    hideDivsWithArticles(recentArticles);
    hideDivsWithArticles(babyArticles);
    hideDivsWithArticles(childArticles);
    hideDivsWithArticles(parentArticles);

let count = 0;
// - add active class to buttons on click
    function addActiveClassOnClick(x){
        //  reload dom - to keep card carrying articles fresh.
        count++;
        console.log(count);
        if(count>10){
            window.location.reload();
        }
//  - so that we can refresh document to be able to refresh card on click
        x.className += " active";
// - remove active class
         setTimeout(()=>{
            x.classList.remove("active");
        }, 1500);

    }
// - show div with articles on click
   function showDivWithArticlesOnClick(x){
         x.style.display = 'inline';
    }

    recentButton.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Recent articles';

// - add active class r
        addActiveClassOnClick(recentButton);
// - show div with articles
        showDivWithArticlesOnClick(recentArticles);

// - add active class to div
        recentArticles.className += " active";
        if (recentArticles.className == " active"){
            // - hide all other articles if this po is active
            // hideDivsWithArticles(gu);
            hideDivsWithArticles(babyArticles);
            hideDivsWithArticles(childArticles);
            hideDivsWithArticles(parentArticles);
        }
    }

    babyButton.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Baby articles';
        addActiveClassOnClick(babyButton);
        // - show div with articles
        showDivWithArticlesOnClick(babyArticles);
        // - add active class to div
        babyArticles.className += " active";
        if (babyArticles.className == " active"){
            // - hide all other articles if this po is active
            // hideDivsWithArticles(gu);
            hideDivsWithArticles(recentArticles);
            hideDivsWithArticles(childArticles);
            hideDivsWithArticles(parentArticles);
        }
    }

    childButton.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Child Articles';
        addActiveClassOnClick(childButton);
        // - show div with articles
        showDivWithArticlesOnClick(childArticles);
        // - add active class to div
        childArticles.className += " active";
        if (childArticles.className == " active"){
            // - hide all other articles if this po is active

            // hideDivsWithArticles(gu);
            hideDivsWithArticles(babyArticles);
            hideDivsWithArticles(recentArticles);
            hideDivsWithArticles(parentArticles);
        }
    }

    // - when btn#g clicked run func.
    parentButton.onclick = () => {
        document.getElementById('article-type').innerHTML = 'Parent articles';
    // - add .active onclick func.
            addActiveClassOnClick(parentButton);
    // - show div with articles
            showDivWithArticlesOnClick(parentArticles);
    // - add active class to div
            parentArticles.className += " active";
            if (parentArticles.className == " active"){
    // - hide all other articles if this po is active

                hideDivsWithArticles(recentArticles);
                hideDivsWithArticles(babyArticles);
                hideDivsWithArticles(childArticles);
            }
        }

</script>
@endsection
