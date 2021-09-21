<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.scss') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a7bffd41d3.js"></script>
    <title>BabyBassinet - Blog {{ $article->title ?? '' }} </title>
    <!-- for share buttons -->
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61318964495f05001236fdfe&product=inline-share-buttons" async="async"></script>
</head>
<style>
/* may use this later roboto */
@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Rampart+One&family=Roboto:wght@700&display=swap');
a:visited {
  text-decoration: none;
}
.col-lg  {
  /* font-family: 'Raleway', 'Roboto'; */
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 300;
  letter-spacing: .45px;
  font-size: 26px;
}
nav ul li {
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 300;
  font-size: 28px;
  padding-left: 5px;
  line-height: 1.5;
  letter-spacing: .45px;
}
#navbarSpacing {
  letter-spacing: .45px;
}
.col-lg  {
  /* font-family: 'Raleway', 'Roboto'; */
  font-family: 'Big Shoulders Stencil Display';
  font-size: 32px;
}
.col-md {
  /* font-family: 'A';; */
  font-size: 16px;
  color: black;
  line-height: 1.5;
  letter-spacing: .45px;
  /* margin: 20px 20px 20px 20px;
  padding: 20px 100px 20px 100px; */
}
.col-sm {
  font-family: 'Big Shoulders Stencil Display';;
  font-size: 16px;
  color: #555555;
  line-height: 1.5;
  letter-spacing: .45px;
  /* margin: 20px 20px 20px 20px;
  padding: 20px 100px 20px 100px; */
}
ul {
  list-style-type: none;
}
a {
  text-decoration: none;
}
img {
  border-radius : 5%;
  /* -moz-border-radius:50%;
  -webkit-border-radius:50%; */
}
.image {
  border: 0;
  display: inline-block;
  position: relative;
}
.image img {
  display: block;
}
.image.left, .image.right {
  max-width: 40%;
}
.image.left img, .image.right img {
  width: 100%;
}
.image.left {
  float: left;
  padding: 0 1.5em 1em 0;
  top: 0.25em;
}
.image.right {
  float: right;
  padding: 0 0 1em 1.5em;
  top: 0.25em;
}
.image.fit {
  display: block;
  margin: 0 0 2em 0;
  width: 100%;
}
.image.fit img {
  width: 100%;
}
.image.featured {
  display: block;
  margin: 0 0 3em 0;
  width: 100%;
}
.image.featured img {
  width: 100%;
}
@media screen and (max-width: 736px) {
  .image.featured {
    margin: 0 0 1.5em 0;
  }
}
.image.main {
  display: block;
  margin: 0 0 3em 0;
  width: 100%;
}
.image.main img {
  width: 100%;
}
a {
  color: white;
}
a:hover {
  color: pink;
}
a:link {
  text-decoration: none;
}
a:visited {
  text-decoration: none;
}
#credit {
  color: grey;
}
#credit a {
  color: black;
}
a {
  color: grey;
}
.col-lg  {
  /* font-family: 'Raleway', 'Roboto'; */
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 300;
  letter-spacing: .45px;
  font-size: 26px;
}
ul {
  list-style-type: none;
}
body {
  line-height: 2.0;
  letter-spacing: .45px;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 300;
  background-color: #fcf0fc;
}
                  /* SLAB MASTER CSS RULES  */
.slab {
  /* margin: 10px 10px 10px 10px;   */
  border: 1px solid;
  position: relative;
  display: inline-block;
  width: 100%;
  max-width: 100%;
  height: 100%;
  background-color: #fff;
  border-radius: 5px;
  border-color: #fff;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  word-wrap: break-word;
}
.slab::after {
  content: "";
  border-radius: 5px;
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  opacity: 0;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.slab:hover {
  -webkit-transform: scale(0.99, 0.99);
  transform: scale(0.99, 0.99);
}
.slab:hover::after {
  opacity: 1;
}
p {
  text-align: left;
  font-weight: 400;
  color: grey;
}
h2 {
  line-height: 2.0;
  letter-spacing: .45p;
}

#article_signoff {
    background-color: #ebfafa;
}

/* styles for progress bar */
.progress-container {
  width: 100%;
  height: 4px;
  background: #ccc;
}

.progress-bar {
  height: 2px;
  background: black;
  width: 0%;
}

</style>
<x-pop-up/>
<nav class="navbar sticky-top navbar-light container container-fluid" style="background-color:white;">

  <strong class="navbar-brand"
          style="font-family: 'Anton'; font-size: 32px;"
          href="#">BabysBassinet
  </strong>
  <button class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent15"
          aria-controls="navbarSupportedContent15"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="border: none;outline: none;">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent15">
    <ul class="navbar-nav ml-auto">
    <?php
      $uri = Request::getRequestUri();
      $article_id = $article->id ?? '';
      if ($uri){
        echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
        echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');
        echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE </strong></a></li>');
        echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
      }
    ?>
   </ul>
  </div>
  <!-- progress bar -->
    <div class="progress-container rounded-circle">
        <div class="progress-bar" id="myBar"></div>
    </div>
</nav>
<body id="body" class="container container-fluid" style="opacity: 0;">
  <div class="slab container col-sm-12">

        <article>
            <div class="mt-5 row">
                <h1 class="col-lg text-center mb-1">
                     {{ $article->title ?? ''}}
                </h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-center"
                       style="font-size:12px;">
                       A {{ $readingTimeEstimate }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-center"
                       style="font-size:12px;">
                       Written By Father - {{ $article->created_at }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <a href="https://twitter.com/theBassinet?ref_src=twsrc%5Etfw"
                        class="twitter-follow-button"
                        data-show-count="false">Follow @theBassinet</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                       <blockquote style="color: grey; font-size: 12px;" class="blockquote">
                            {{ $article->quip ?? '' }}
                       </blockquote>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-center">
                      <img class="img-responsive" src="{{ $article->image_name ?? '' }}" alt="article image" height="auto" width="80%;">
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="margin-left: 10%;">
                     <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit1 !!} </p>
                </div>
            </div>

            @if ($article->heading1)
                <div class="row">
                    <div class="col-md mt-5 mb-1 text-center">
                        <h2> {{ $article->heading1 }} </h2>
                    </div>
                </div>
                @if($article->image1_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                          <img class="img-responsive" src="{{$article->image1_name ?? ''}}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="margin-left: 10%;">
                          <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit !!} </p>
                    </div>
                </div>
                @endif

                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {!! $article->paragraph1Heading1 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading1 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading1 }} </p>
                    </div>
                </div>
            @endif

            @if($article->heading2)
                <div class="row">
                    <div class="col-md mt-3 text-center">
                        <h2> {{ $article->heading2 }} </h2>
                    </div>
                </div>
                @if($article->image2_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                         <img class="img-responsive" src="{{$article->image2_name ?? ''}}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="margin-left: 10%;">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit2 !!} </p>
                    </div>
                </div>
            @endif
                <div class="row ">
                    <div class="col-md text-left">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading2 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-left">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading2 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-left">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading2 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading3)
                <div class="row">
                    <div class="col-md text-center">
                        <h2> {{ $article->heading3 }} </h2>
                    </div>
                </div>
                @if($article->image3_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image3_name }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%;">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit3 !!} </p>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading3 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading3 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading3 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading4)
                <div class="row">
                    <div class="col-md text-center">
                        <h2> {{ $article->heading4 }} </h2>
                    </div>
                </div>
                @if($article->image4_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                         <img class="img-responsive"
                              src="{{ $article->image4_name ?? '' }}" alt="article image" width="80%;" max-height="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%;">
                         <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit4 !!} </p>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading4 }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading4 }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading4 }}</p>
                    </div>
                </div>
            @endif
            @if($article->heading5)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading5 }} </h2>
                    </div>
                </div>
                @if($article->image5_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                      <img class="img-responsive" src="{{ $article->image5_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%;">
                       <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit5 !!} </p>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading5 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading5 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading5 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading6)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading6 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image6_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit6 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading6 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading6 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading6 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading7)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading7 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image7_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit7 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading7 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading7 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading7 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading8)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading8 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image8_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit8 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading8 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading8 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading8 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading9)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading9 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image9_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit9 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading9 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-2 ml-5 mr-5 mb-5"> {{ $article->paragraph2Heading9 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading9 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading10)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading10 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                    <img class="img-responsive" src="{{ $article->image10_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                    <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit10 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading10 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading10 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading10 }} </p>
                    </div>
                </div>
            @endif
      </article>
    </div>

  <!-- Because there's a few different articles types, lets make sure the correct route is chosen -->
  @php
    switch($article->type) {
      case 'Babies':
        $articleType = 'babies';
      break;
      case 'Children':
        $articleType = 'child';
      break;
      case 'Parents':
        $articleType = 'parent';
      break;
    }
  @endphp

    <div class="row justify-content-center mt-3 mb-4">
        <div class="col-lg text-center">
            <button class="btn btn-lg btn-dark">
                <a style="color:white;" href="/{{ $articleType }}">Go Back</a>
            </button>
        </div>
    </div>

    <section id="article_signoff" class="mt-5">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="mt-5">Thanks for reading!</h3>
                <p style="color:grey; font-size:12px;" class="text-center"> Help us reach parents everywhere! </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <div class="sharethis-inline-share-buttons text-center mb-4"></div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md text-center">
                    <img class="img-responsive"
                         src="{{url('/images/theFamilyBlueBackground.png')}}" alt="article image" height="auto" width="75%;">
                <p class="mt-3 ml-5 mr-5 mb-1 text-center">
                    Thanks for reading our article, if you find our content helpful please share it with others! </br></br>
                </P>
                <p class="mt-1 ml-5 mr-5 mb-5 text-center">
                    Have any questions? feel free to reach out to us via our socials - and if enough parents are asking the same question, we may write an article all about the topic!
                </P>
            </div>
        </div>
        <div class="row text-center ">
            <div class="col-md text-center mb-5">
                <a href="https://twitter.com/theBassinet?ref_src=twsrc%5Etfw"
                   class="twitter-follow-button"
                   data-show-count="false">Follow @theBassinet</a>
                   <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </section>

    <!-- Fading in the page on load ( can move functionality over to app.blade later ( will need to edit the top of this page ( remove body tag ))) -->
    <script type="text/javascript">
        var opacity = 0;
        var intervalID = 0;
        window.onload = fadeIn;

        function fadeIn() {
            setInterval(show, 75);
        }

        function show() {
            var body = document.getElementById("body");
            opacity = Number(window.getComputedStyle(body)
                                .getPropertyValue("opacity"));
            if (opacity < 1) {
                opacity = opacity + 0.1;
                body.style.opacity = opacity
            } else {
                clearInterval(intervalID);
            }
        }


        // When the user scrolls the page, execute myFunction
        window.onscroll = function() { progressTheBar()};

        function progressTheBar() {
           var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
           var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
           var scrolled = (winScroll / height) * 100;
           document.getElementById("myBar").style.width = scrolled + "%";
        }
    </script>
    <!-- bootstrap related scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <x-footer />
</body>
</html>
