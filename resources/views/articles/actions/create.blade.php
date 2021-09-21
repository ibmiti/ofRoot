@extends('layouts.app')
@section('title', 'Create Article')
@section('content')

<style>
    /*  over view of all css needs  */
    /* css for fading elements, will also transition fade ( in/out ) */
                /* FADEOUT CLASSES */
    .fade-out {
        -webkit-animation-duration: 10s;animation-duration: 10s;
        -webkit-animation-fill-mode: both;animation-fill-mode: both;
    }
    @-webkit-keyframes fadeOut {
        0% {opacity: 1;}
        100% {opacity: 0;}
    }
    @keyframes fadeOut {
        0% {opacity: 1;}
        100% {opacity: 0;}
    }
    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }
                        /* SLAB MASTER CSS RULES  */
    .slab {
        /* margin: 10px 10px 10px 10px;   */
        border: 1px solid;
        position: relative;
        display: inline-block;
        width: 100%;
        height: 100%;
        background-color: #fff;
        border-radius: 5px;
        border-color: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
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
    #spin {
        color : black;
    }
    .title {
        letter-spacing: 0.2em;
    }
    .main-p {
        letter-spacing: 0.1em;
        font-size: 20px;
    }
    h1, h2, h3 {
        letter-spacing: 0.2em;
    }
    /* fade in all elements on load */
    body  {
        background-color: white;
        margin-top: 25px;
        font-size: 21px;
        text-align: center;
        /*  on load fade in all content */
        -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
        -moz-animation: fadein 2s; /* Firefox < 16 */
        -ms-animation: fadein 2s; /* Internet Explorer */
        -o-animation: fadein 2s; /* Opera < 12.1 */
        animation: fadein 2s;
    }
    @keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    /* Firefox < 16 */
    @-moz-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    /* Internet Explorer */
    @-ms-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    /* Opera < 12.1 */
    @-o-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    /* toggled rules for fade in / out */
    .inFade {
        background-color: white;
        margin-top: 25px;
        font-size: 21px;
        text-align: center;
        /*  on load fade in all content */
        -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
        -moz-animation: fadein 2s; /* Firefox < 16 */
        -ms-animation: fadein 2s; /* Internet Explorer */
        -o-animation: fadein 2s; /* Opera < 12.1 */
        animation: fadein 2s;
    }
    @keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    /* Firefox < 16 */
    @-moz-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    /* Internet Explorer */
    @-ms-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    /* Opera < 12.1 */
    @-o-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
}

</style>


<div class="container container-fluid text-center" id="firstDiv">
    <div class="container container-fluid">
        <div id="secondDiv">
            <div class="spinner-grow"
                 style="width: 3rem; height: 3rem;"
                 role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div id="thirdDiv">
            <h1 class="mt-5"
                style="font-size:25px; font-weight:700;">
                   THE AUTHORING PAGE
            </h1>
            <p class="mb-3 p-3 text-muted">BUILD A NEW ARTICLE OR EDIT AND EXISTING ONE.</p>
        </div>
        <div id="fourthDiv" class="m-2">
            <h2 class="text-muted mt-5 mb-5" id="welcome">WELCOME</h2>
        </div>
    </div>
</div>


<div id="div05" class="mb-5">
    <div class="row mt-3">
        <div class="col-12 text-center">
            <button type="button" id="button01" class="btn btn-outline-primary" onClick="buttonClicked(this.id)">Create Article</button>
            <a href="/editArticleSelection">
                <button type="button" class="btn btn-outline-secondary">
                    Edit Article
                </button>
            </a>
        </div>
    </div>
</div>

<div class="row text-center" >
        <div class="col-12">
            <div class="slab" id="fifthDiv">
                <div class="card-body">

                    <h2 style="font-size:25px;"
                        class="title card-title mt-3 mb-3">
                        FOUNDATIONS OF AN EXCELLENT ARTICLE
                    </h2>

                    <!-- place spinner in place of this p, after 2 seconds reveal and replace -->
                    <p id="mission-statement"
                        class="m-3 p-3 text-muted"
                        style="font-size:12px; font-weight:700;"
                    ><cite>We build high-quality products, every-time; this includes our articles.
                    </cite>
                    </p>



                    <!-- BOOTSTRAP SPINNERS  -->
                    <div class="spinners row mt-5 mb-5" id="sixthDiv">
                        <div class="col-12 text-center">
                            <div id="sixthDiv" class="spinner-grow text-info" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div id="seventhDiv" class="spinner-grow text-danger" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div id="ninthDiv" class="spinner-grow text-warning" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>




                    <ul class="list-group tutorial-list-items m-3 p-3">
                        <li class="list-group-item">Choose a topic and write a headline</li>
                        <li class="list-group-item">Write the lead <a href="https://owl.purdue.edu/owl/subject_specific_writing/journalism_and_journalistic_writing/writing_leads.html">paragraph</a></li>
                        <li class="list-group-item">List a few main points in the <a href="https://scienceissues.net/how-to-create-a-great-article-body-part">body</a></li>
                        <li class="list-group-item">Write your <a href="https://www.grammarly.com/blog/call-to-action/?gclid=Cj0KCQjwmIuDBhDXARIsAFITC_7I1gSDQ79T9HYm5LyTNy_ILLchTbSavGBUa2I-wp1LB2Tz3ZDserEaArmPEALw_wcB&gclsrc=aw.ds">call-to-action</a></li>
                        <li class="list-group-item"><a href="https://www.grammarly.com/blog/advice-on-editing/?gclid=Cj0KCQjwmIuDBhDXARIsAFITC_6i8zIdvLAFmxDjJIRGxNrPYjIHOqRPzNppYZf_VniExuL87S8IcTkaAu_yEALw_wcB&gclsrc=aw.ds">Edit</a> and <a href="https://owl.purdue.edu/owl/general_writing/the_writing_process/proofreading/steps_for_revising.html">revise</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://ualr.edu/writingcenter/tips-for-effective-proofreading/">Proofread
                            </a>
                        </li>
                        <li class="list-group-item">Run Through <a href="https://www.grammarly.com/?q=brand&utm_source=google&utm_medium=cpc&utm_campaign=brand_f1&utm_content=486649398671&utm_term=grammarly&matchtype=e&placement=&network=g&gclid=Cj0KCQjw9YWDBhDyARIsADt6sGZlAtzPNs24RJ6OFjWutPJfsAs9XozOZNKHOp8CGmaNzTc9hSz11QoaAmmTEALw_wcB&gclsrc=aw.ds">Grammarly</a></li>
                        <li class="list-group-item">Publish</li>
                    </ul>

                    <button class="dismiss btn btn-secondary mt-3 mt-3"
                            id="button02"
                            onClick="buttonClicked(this.id)">Got it!
                    </button>
            </div>
        </div>
    </div>
</div>

<div class=" mt-3" id="div11">
    <div id="create-article-section">

        <div class="row m-5">
            <div class="col-12 text-center">
               <h3 id="workFlowDialog">Build the article</h3>
               <hr>
               <button
                       id="workFlowDialog"
                       class="btn btn-secondary btn-lg mt-3"
                       data-toggle="modal" data-target="#exampleModal"
                >
                       Start Writing
               </button>
            </div>
        </div>

            <div class="row add-whitespace mb-5">
                <div class="text-center col-12 add-whitespace">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Build The Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('confirmArticle') }}">
                @csrf
                <div class="form-group">
                      <label for="type">Article Type</label>
                      <input type="text"
                             name="type"
                             class="form-control form-control-lg"
                             value="{{ old('type') }}"
                      >
                       @if ($errors->has('type'))
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                       @endif
                      <small id="typeHelp" class="form-text text-muted">
                          ex : Babies, Children, Parents
                      </small>
                    </div>

                    <div class="form-group">
                      <label for="subtype">Sub Type</label>
                      <small class="form-text text-muted">
                        ex : Wellness, Development, Reviews, Howtos, Activities
                      </small>
                      <input type="text"
                             name="subtype"
                             class="form-control form-control-lg"
                             value="{{ old('subtype') }}"
                       >
                       @if ($errors->has('subtype'))
                            <span class="text-danger">{{ $errors->first('subtype') }}</span>
                       @endif
                      <small id="subtypeHelp" class="form-text text-muted">Something short and interesting maybe even a quote for the quip field? Draw the potential reader in with a hook.</small>
                    </div>

                    <div class="form-group">
                      <label for="image_name">Main Article Image</label>
                      <input type="text"
                             name="image_name"
                             class="form-control form-control-lg"
                             value="{{ old('image_name') }}"
                       >
                       @if ($errors->has('image_name'))
                            <span class="text-danger">{{ $errors->first('image_name') }}</span>
                       @endif
                      <small id="imageHelp" class="form-text text-muted">
                        What should we share regarding this field?
                      </small>
                    </div>

                    <div class="form-group">
                      <label for="imageCredit1">Credit The Image</label>
                      <input type="text"
                             name="imageCredit1"
                             class="form-control form-control-lg"
                             value="{{ old('imageCredit1') }}"
                      >
                      @if ($errors->has('imageCredit1'))
                            <span class="text-danger">{{ $errors->first('imageCredit1') }}</span>
                       @endif
                      <small id="imageHelp" class="form-text text-muted">What should we share regarding this field?</small>
                    </div>

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text"
                             name="title"
                             class="form-control form-control-lg"
                             value="{{ old('title') }}"
                      >
                       @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                       @endif
                      <small id="titleHelp" class="form-text text-muted">This may appear in search engines.</small>
                    </div>

                    <div class="form-group">
                      <label for="quip">Quip</label>
                      <input type="text"
                             name="quip"
                             class="form-control form-control-lg"
                             value="{{ old('quip') }}"
                       >
                       @if ($errors->has('quip'))
                            <span class="text-danger">{{ $errors->first('quip') }}</span>
                       @endif
                      <small id="quipHelp" class="form-text text-muted">Something short and interesting maybe even a quote for the quip field? Draw the potential reader in with a hook.</small>
                    </div>

                    <div class="form-group">
                      <label for="excerpt">Excerpt</label>
                      <input type="textarea"
                             name="excerpt"
                             class="form-control form-control-lg"
                             value=" {{ old('excerpt') }} "
                      >
                        @if ($errors->has('excerpt'))
                            <span class="text-danger">{{ $errors->first('excerpt') }}</span>
                        @endif
                      <small id="excerptHelp" class="form-text text-muted">A short snippet from the article for the excerpt</small>
                    </div>

                    <div class="form-group">
                      <label for="heading1">First Header</label>
                      <input type="textarea"
                             name="heading1"
                             class="form-control form-control-lg"
                             value="{{ old('heading1') }}"
                       >
                       @if ($errors->has('heading1'))
                            <span class="text-danger">{{ $errors->first('heading1') }}</span>
                       @endif
                      <small id="header1Help" class="form-text text-muted">Very first header on page</small>
                    </div>

                    <div class="form-group">
                      <label for="image1_name">First Image</label>
                      <input type="text"
                             name="image1_name"
                             class="form-control form-control-lg"
                             value="{{ old('image1_name') }}"
                       >
                       @if ($errors->has('image1_name'))
                            <span class="text-danger">{{ $errors->first('image1_name') }}</span>
                       @endif
                      <small id="image1Help" class="form-text text-muted">
                        What should we share regarding this field?
                      </small>
                    </div>


                    <div class="form-group">
                      <label for="imageCredit">Credit The Image</label>
                      <input type="text"
                             name="imageCredit"
                             class="form-control form-control-lg"
                             value="{{ old('imageCredit') }}"
                      >
                      @if ($errors->has('imageCredit'))
                            <span class="text-danger">{{ $errors->first('imageCredit') }}</span>
                       @endif
                      <small id="imageCreditHelp" class="form-text text-muted">What should we share regarding this field?</small>
                    </div>
                    <div class="form-group">
                      <label for="paragraph1Heading1">First Paragraph For Heading 1</label>
                      <input type="textarea"
                             name="paragraph1Heading1"
                             class="form-control form-control-lg"
                             value="{{ old('paragraph1Heading1') }}"
                      >
                       @if ($errors->has('paragraph1Heading1'))
                            <span class="text-danger">{{ $errors->first('paragraph1Heading1') }}</span>
                       @endif
                      <small class="form-text text-muted">Very first paragraph of the article, the paragraph supports the header, and vice versa.</small>
                    </div>

                    <div class="form-group">
                      <label for="paragraph2Heading1">Second Paragraph For Heading 1</label>
                      <input type="textarea"
                             name="paragraph2Heading1"
                             class="form-control form-control-lg"
                             value="{{ old('paragraph2Heading1') }}"
                      >
                       @if ($errors->has('paragraph2Heading1'))
                            <span class="text-danger">{{ $errors->first('paragraph2Heading1') }}</span>
                       @endif
                      <small class="form-text text-muted">Second paragraph of the article, the paragraph supports the header, and vice versa.</small>
                    </div>

                    <div class="form-group">
                      <label for="paragraph3Heading1">Third Paragraph For Heading 1</label>
                      <input type="textarea"
                             name="paragraph3Heading1"
                             class="form-control form-control-lg"
                             value="{{ old('paragraph3Heading1') }}"
                      >
                       @if ($errors->has('paragraph3Heading1'))
                            <span class="text-danger">{{ $errors->first('paragraph3Heading1') }}</span>
                       @endif
                      <small class="form-text text-muted">Third paragraph of the article, the paragraph supports the header, and vice versa.</small>
                    </div>

                    <div class="form-group">
                        <div id="addSecondHeader">
                            <button type="button"
                                    id="secondHeaderButton"
                                    class="btn btn-secondary"
                                    onclick="buttonClicked(this.id)">
                                 Add Second Header?
                            </button>
                            <small id="extension1ButtonHelp"
                                   class="form-text text-muted">

                            </small>
                        </div>
                    </div>


                <div id='theSecondSegment'>
                      <small id="heading2Help" class="form-text text-muted">
                        Second segment of the article.
                      </small>
                    <div class="form-group">
                      <label for="heading2">Second Header</label>
                      <input type="textarea"
                             name="heading2"
                             class="form-control form-control-lg mt-3"
                             value="{{ old('heading2') }}"
                      >
                      @if ($errors->has('heading2'))
                            <span class="text-danger">{{ $errors->first('heading2') }}</span>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="image2_name">Second Image</label>
                      <input type="text"
                             name="image2_name"
                             class="form-control form-control-lg"
                             value="{{ old('image2_name') }}"
                       >
                       @if ($errors->has('image2_name'))
                            <span class="text-danger">{{ $errors->first('image2_name') }}</span>
                       @endif
                      <small id="image2Help" class="form-text text-muted">
                        What should we share regarding this field?
                      </small>
                    </div>

                    <div class="form-group">
                      <label for="imageCredit2">Credit The Image</label>
                      <input type="text"
                             name="imageCredit2"
                             class="form-control form-control-lg"
                             value="{{ old('imageCredit2') }}"
                      >
                      @if ($errors->has('imageCredit2'))
                            <span class="text-danger">{{ $errors->first('imageCredit2') }}</span>
                       @endif
                      <small id="imageCredit2Help" class="form-text text-muted">What should we share regarding this field?</small>
                    </div>

                    <div class="form-group">
                      <label for="paragraph1Heading2">First Paragraph Heading 2</label>
                      <input type="textarea"
                             name="paragraph1Heading2"
                             class="form-control form-control-lg"
                             value="{{ old('paragraph1Heading2') }}"
                      >
                      @if ($errors->has('paragraph1Heading2'))
                            <span class="text-danger">{{ $errors->first('paragraph1Heading2') }}</span>
                      @endif
                      <small id="paragraph1Heading2Help" class="form-text text-muted">Your article is getting long, nice.</small>
                    </div>

                    <div class="form-group">
                      <label for="paragraph2Heading2">Second Paragraph Heading 2</label>
                      <input type="textarea"
                             name="paragraph2Heading2"
                             class="form-control form-control-lg"
                             value="{{ old('paragraph2Heading2') }}"
                      >
                      @if ($errors->has('paragraph2Heading2'))
                            <span class="text-danger">{{ $errors->first('paragraph2Heading2') }}</span>
                      @endif
                      <small id="paragraph2Heading2Help" class="form-text text-muted">Your article is getting long, nice.</small>
                    </div>

                    <div class="form-group">
                      <label for="paragraph3Heading2">Third Paragraph Heading 2</label>
                      <input type="textarea"
                             name="paragraph3Heading2"
                             class="form-control form-control-lg"
                             value="{{ old('paragraph3Heading2') }}"
                      >
                      @if ($errors->has('paragraph3Heading2'))
                            <span class="text-danger">{{ $errors->first('paragraph3Heading2') }}</span>
                      @endif
                      <small id="paragraph3Heading2Help" class="form-text text-muted">Your article is getting long, nice.</small>
                    </div>
                </div>

                <button type="button"
                        id="thirdHeaderButton"
                        class="btn btn-secondary"
                        onclick="buttonClicked(this.id)">
                    Add Third Header?
                </button>
                <small id="thirdHeaderHelp" class="form-text text-muted"></small>

                <div id="theThirdSegment">
                    <div class="form-group">
                      <label for="heading3">Third Header</label>
                      <input type="textarea"
                             name="heading3"
                             class="form-control form-control-lg"
                             value="{{ old('heading3') }}"
                      >
                      @if ($errors->has('heading3'))
                            <span class="text-danger">{{ $errors->first('heading3') }}</span>
                      @endif
                      <small id="thirdSegmentHelp"
                             class="form-text text-muted"
                       >
                             What should we share regarding this field?
                      </small>
                    </div>

                    <div class="form-group">
                      <label for="image3_name">Third Image</label>
                      <input type="text"
                             name="image3_name"
                             class="form-control form-control-lg"
                             value="{{ old('image3_name') }}"
                       >
                       @if ($errors->has('image3_name'))
                            <span class="text-danger">{{ $errors->first('image3_name') }}</span>
                       @endif
                      <small id="imageHelp" class="form-text text-muted">
                        What should we share regarding this field?
                      </small>
                    </div>

                    <div class="form-group">
                      <label for="imageCredit3">Credit The Image</label>
                      <input type="text"
                             name="imageCredit3"
                             class="form-control form-control-lg"
                             value="{{ old('imageCredit3') }}"
                      >
                      @if ($errors->has('imageCredit3'))
                            <span class="text-danger">{{ $errors->first('imageCredit3') }}</span>
                       @endif
                      <small id="imageHelp" class="form-text text-muted">What should we share regarding this field?</small>
                    </div>

                    <div class="form-group">
                      <label for="paragraph1Heading3">First Paragraph For Heading 3</label>
                      <input type="textarea"
                             name="paragraph1Heading3"
                             class="form-control form-control-lg"
                             value="{{ old('paragraph1Heading3') }}"
                       >
                       @if ($errors->has('paragraph1Heading3'))
                            <span class="text-danger">{{ $errors->first('paragraph1Heading3') }}</span>
                       @endif
                      <small id="paragraph1Heading3Help" class="form-text text-muted">This should have wrapped up the article</small>
                    </div>
                    <div class="form-group">
                      <label for="paragraph2Heading3">Second Paragraph For Heading 3</label>
                      <input type="textarea"
                             name="paragraph2Heading3"
                             class="form-control form-control-lg"
                             value="{{ old('paragraph2Heading3') }}"
                       >
                       @if ($errors->has('paragraph2Heading3'))
                            <span class="text-danger">{{ $errors->first('paragraph2Heading3') }}</span>
                       @endif
                    </div>

                    <div class="form-group">
                      <label for="paragraph3Heading3">Third Paragraph For Heading 3</label>
                      <input type="textarea"
                             name="paragraph3Heading3"
                             class="form-control form-control-lg"
                             value="{{ old('paragraph3Heading3') }}"
                       >
                       @if ($errors->has('paragraph3Heading3'))
                            <span class="text-danger">{{ $errors->first('paragraph3Heading3') }}</span>
                       @endif
                      <small id="paragraph1Heading3Help" class="form-text text-muted">This should have wrapped up the article</small>
                    </div>
                </div>

    <button type="button"
            id="fourthHeaderButton"
            class="btn btn-secondary"
            onclick="buttonClicked(this.id)">
        Add Fourth Header?
    </button>

    <div id="theFourthSegment">
        <div class="form-group">
            <label for="heading4">Fourth Header</label>
            <input type="textarea"
                    name="heading4"
                    class="form-control form-control-lg"
                    value="{{ old('heading4') }}"
            >
            @if ($errors->has('heading4'))
                <span class="text-danger">{{ $errors->first('heading4') }}</span>
            @endif
            <small id="fourthSegmentHelp"
                    class="form-text text-muted"
            >
                    What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="image4_name">Fourth Image</label>
            <input type="text"
                    name="image4_name"
                    class="form-control form-control-lg"
                    value="{{ old('image4_name') }}"
            >
            @if ($errors->has('image4_name'))
                <span class="text-danger">{{ $errors->first('image4_name') }}</span>
            @endif
            <small id="imageHelp" class="form-text text-muted">
            What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="imageCredit4">Credit The Image</label>
            <input type="text"
                    name="imageCredit4"
                    class="form-control form-control-lg"
                    value="{{ old('imageCredit4') }}"
            >
            @if ($errors->has('imageCredit4'))
                <span class="text-danger">{{ $errors->first('imageCredit4') }}</span>
            @endif
            <small id="image4Help" class="form-text text-muted">What should we share regarding this field?</small>
        </div>

        <div class="form-group">
            <label for="paragraph1Heading4">First Paragraph Header 4</label>
            <input type="textarea"
                    name="paragraph1Heading4"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph1Heading4') }}"
            >
            @if ($errors->has('paragraph1Heading4'))
                <span class="text-danger">{{ $errors->first('paragraph1Heading4') }}</span>
            @endif
            <small id="paragraph1Heading4Help" class="form-text text-muted">This is the fourth heading, paragraph 1.</small>
        </div>

        <div class="form-group">
            <label for="paragraph2Heading4">Second Paragraph Heading 4</label>
            <input type="textarea"
                    name="paragraph2Heading4"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph2Heading4') }}"
            >
            @if ($errors->has('paragraph2Heading4'))
                <span class="text-danger">{{ $errors->first('paragraph2Heading4') }}</span>
            @endif
            <small id="paragraph2Heading4Help" class="form-text text-muted">This is the fourth</small>
        </div>

        <div class="form-group">
            <label for="paragraph3Heading4">Third Paragraph Heading 4</label>
            <input type="textarea"
                    name="paragraph3Heading4"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph3Heading4') }}"
            >
            @if ($errors->has('paragraph3Heading4'))
                <span class="text-danger">{{ $errors->first('paragraph3Heading4') }}</span>
            @endif
            <small id="paragraph3Heading4Help" class="form-text text-muted">This is the fourth</small>
        </div>
    </div>
    <button type="button"
        id="fifthHeaderButton"
        class="btn btn-secondary"
        onclick="buttonClicked(this.id)">
            Add Fifth Header?
    </button>
    <small id="fifthHeaderHelp" class="form-text text-muted"></small>

    <div id="theFifthSegment">
        <div class="form-group">
            <label for="heading5">Fifth Header</label>
            <input type="textarea"
                    name="heading5"
                    class="form-control form-control-lg"
                    value="{{ old('heading5') }}"
            >
            @if ($errors->has('heading5'))
                <span class="text-danger">{{ $errors->first('heading5') }}</span>
            @endif
            <small id="fifthSegmentHelp"
                    class="form-text text-muted"
            >
                    What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="image5_name">Fifth Article Image</label>
            <input type="text"
                    name="image5_name"
                    class="form-control form-control-lg"
                    value="{{ old('image5_name') }}"
            >
            @if ($errors->has('image5_name'))
                <span class="text-danger">{{ $errors->first('image5_name') }}</span>
            @endif
            <small id="image5Help" class="form-text text-muted">
            What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="imageCredit5">Credit The Image</label>
            <input type="text"
                    name="imageCredit5"
                    class="form-control form-control-lg"
                    value="{{ old('imageCredit5') }}"
            >
            @if ($errors->has('imageCredit5'))
                <span class="text-danger">{{ $errors->first('imageCredit5') }}</span>
            @endif
            <small id="image5Help" class="form-text text-muted">What should we share regarding this field?</small>
        </div>

        <div class="form-group">
            <label for="paragraph1Heading5">First Paragraph Heading 5</label>
            <input type="textarea"
                    name="paragraph1Heading5"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph1Heading5') }}"
            >
            @if ($errors->has('paragraph1Heading5'))
                <span class="text-danger">{{ $errors->first('paragraph1Heading5') }}</span>
            @endif
            <small id="paragraph1Heading5Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph2Heading5">Second Paragraph Heading 5</label>
            <input type="textarea"
                    name="paragraph2Heading5"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph2Heading5') }}"
            >
            @if ($errors->has('paragraph2Heading5'))
                <span class="text-danger">{{ $errors->first('paragraph2Heading5') }}</span>
            @endif
            <small id="paragraph2Heading5Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph3Heading5">Third Paragraph Heading 5</label>
            <input type="textarea"
                    name="paragraph3Heading5"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph3Heading5') }}"
            >
            @if ($errors->has('paragraph3Heading5'))
                <span class="text-danger">{{ $errors->first('paragraph3Heading5') }}</span>
            @endif
            <small id="paragraph3Heading5Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>
    </div>

<!-- Start of The Sixth Segment -->
    <button type="button"
            id="sixthHeaderButton"
            class="btn btn-secondary"
            onclick="buttonClicked(this.id)">
            Add Sixth Header?
    </button>
    <small id="sixthHeaderHelp" class="form-text text-muted"></small>

    <div id="theSixthSegment">
        <div class="form-group">
            <label for="heading6">Sixth Header</label>
            <input type="textarea"
                    name="heading6"
                    class="form-control form-control-lg"
                    value="{{ old('heading6') }}"
            >
            @if ($errors->has('heading6'))
                <span class="text-danger">{{ $errors->first('heading6') }}</span>
            @endif
            <small id="sixthSegmentHelp"
                    class="form-text text-muted"
            >
                    What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="image6_name">Main Article Image</label>
            <input type="text"
                    name="image6_name"
                    class="form-control form-control-lg"
                    value="{{ old('image6_name') }}"
            >
            @if ($errors->has('image6_name'))
                <span class="text-danger">{{ $errors->first('image6_name') }}</span>
            @endif
            <small id="image6Help" class="form-text text-muted">
            What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="imageCredit6">Credit The Image</label>
            <input type="text"
                    name="imageCredit6"
                    class="form-control form-control-lg"
                    value="{{ old('imageCredit6') }}"
            >
            @if ($errors->has('imageCredit6'))
                <span class="text-danger">{{ $errors->first('imageCredit6') }}</span>
            @endif
            <small id="image6Help" class="form-text text-muted">What should we share regarding this field?</small>
        </div>

        <div class="form-group">
            <label for="paragraph1Heading6">First Paragraph Heading 6</label>
            <input type="textarea"
                    name="paragraph1Heading6"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph1Heading6') }}"
            >
            @if ($errors->has('paragraph1Heading6'))
                <span class="text-danger">{{ $errors->first('paragraph1Heading6') }}</span>
            @endif
            <small id="paragraph1Heading6Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph2Heading6">First Paragraph Heading 6</label>
            <input type="textarea"
                    name="paragraph2Heading6"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph2Heading6') }}"
            >
            @if ($errors->has('paragraph2Heading6'))
                <span class="text-danger">{{ $errors->first('paragraph2Heading6') }}</span>
            @endif
            <small id="paragraph2Heading6Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph3Heading6">First Paragraph Heading 6</label>
            <input type="textarea"
                    name="paragraph3Heading6"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph3Heading6') }}"
            >
            @if ($errors->has('paragraph3Heading6'))
                <span class="text-danger">{{ $errors->first('paragraph3Heading6') }}</span>
            @endif
            <small id="paragraph3Heading6Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>
    </div>

    <button type="button"
            id="seventhHeaderButton"
            class="btn btn-secondary"
            onclick="buttonClicked(this.id)">
            Add Seventh Header?
    </button>
    <small id="seventhHeaderHelp" class="form-text text-muted"></small>

    <div id="theSeventhSegment">
        <div class="form-group">
            <label for="heading7">Seventh Header</label>
            <input type="textarea"
                    name="heading7"
                    class="form-control form-control-lg"
                    value="{{ old('heading7') }}"
            >
            @if ($errors->has('heading7'))
                <span class="text-danger">{{ $errors->first('heading7') }}</span>
            @endif
            <small id="seventhSegmentHelp"
                    class="form-text text-muted"
            >
                    What should we share regarding this field?
            </small>
        </div>


        <div class="form-group">
            <label for="image7_name">Main Article Image</label>
            <input type="text"
                    name="image7_name"
                    class="form-control form-control-lg"
                    value="{{ old('image7_name') }}"
            >
            @if ($errors->has('image7_name'))
                <span class="text-danger">{{ $errors->first('image7_name') }}</span>
            @endif
            <small id="image7Help" class="form-text text-muted">
            What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="imageCredit7">Credit The Image</label>
            <input type="text"
                    name="imageCredit7"
                    class="form-control form-control-lg"
                    value="{{ old('imageCredit7') }}"
            >
            @if ($errors->has('imageCredit7'))
                <span class="text-danger">{{ $errors->first('imageCredit7') }}</span>
            @endif
            <small id="image7Help" class="form-text text-muted">What should we share regarding this field?</small>
        </div>



        <div class="form-group">
            <label for="paragraph1Heading7">First Paragraph Heading 7</label>
            <input type="textarea"
                    name="paragraph1Heading7"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph1Heading7') }}"
            >
            @if ($errors->has('paragraph1Heading7'))
                <span class="text-danger">{{ $errors->first('paragraph1Heading7') }}</span>
            @endif
            <small id="paragraph1Heading7Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph2Heading7">Second Paragraph Heading 7</label>
            <input type="textarea"
                    name="paragraph2Heading7"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph2Heading7') }}"
            >
            @if ($errors->has('paragraph2Heading7'))
                <span class="text-danger">{{ $errors->first('paragraph2Heading7') }}</span>
            @endif
            <small id="paragraph2Heading7Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph3Heading7">Third Paragraph Heading 7</label>
            <input type="textarea"
                    name="paragraph3Heading7"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph3Heading7') }}"
            >
            @if ($errors->has('paragraph3Heading7'))
                <span class="text-danger">{{ $errors->first('paragraph3Heading7') }}</span>
            @endif
            <small id="paragraph3Heading7Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>
    </div>

    <button type="button"
            id="eighthHeaderButton"
            class="btn btn-secondary"
            onclick="buttonClicked(this.id)">
            Add Eighth Header?
    </button>
    <small id="eighthHeaderHelp" class="form-text text-muted"></small>

    <div id="theEighthSegment">
        <div class="form-group">
            <label for="heading8">Eighth Header</label>
            <input type="textarea"
                    name="heading8"
                    class="form-control form-control-lg"
                    value="{{ old('heading8') }}"
            >
            @if ($errors->has('heading8'))
                <span class="text-danger">{{ $errors->first('heading8') }}</span>
            @endif
            <small id="eighthSegmentHelp"
                    class="form-text text-muted"
            >
                    What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="image8_name">Main Article Image</label>
            <input type="text"
                    name="image8_name"
                    class="form-control form-control-lg"
                    value="{{ old('image8_name') }}"
            >
            @if ($errors->has('image8_name'))
                <span class="text-danger">{{ $errors->first('image8_name') }}</span>
            @endif
            <small id="image8Help" class="form-text text-muted">
            What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="imageCredit8">Credit The Image</label>
            <input type="text"
                    name="imageCredit8"
                    class="form-control form-control-lg"
                    value="{{ old('imageCredit8') }}"
            >
            @if ($errors->has('imageCredit8'))
                <span class="text-danger">{{ $errors->first('imageCredit8') }}</span>
            @endif
            <small id="image8Help" class="form-text text-muted">What should we share regarding this field?</small>
        </div>

        <div class="form-group">
            <label for="paragraph1Heading8">First Paragraph Heading 8</label>
            <input type="textarea"
                    name="paragraph1Heading8"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph1Heading8') }}"
            >
            @if ($errors->has('paragraph1Heading8'))
                <span class="text-danger">{{ $errors->first('paragraph1Heading8') }}</span>
            @endif
            <small id="pparagraph1Heading8Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph2Heading8">Second Paragraph Heading 8</label>
            <input type="textarea"
                    name="paragraph2Heading8"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph2Heading8') }}"
            >
            @if ($errors->has('paragraph2Heading8'))
                <span class="text-danger">{{ $errors->first('paragraph2Heading8') }}</span>
            @endif
            <small id="paragraph2Heading8Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph3Heading8">Third Paragraph Heading 8</label>
            <input type="textarea"
                    name="paragraph3Heading8"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph3Heading8') }}"
            >
            @if ($errors->has('paragraph3Heading8'))
                <span class="text-danger">{{ $errors->first('paragraph3Heading8') }}</span>
            @endif
            <small id="paragraph3Heading8Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>
    </div>

    <button type="button"
            id="ninthHeaderButton"
            class="btn btn-secondary"
            onclick="buttonClicked(this.id)">
            Add Ninth Header?
    </button>
    <small id="ninthHeaderHelp" class="form-text text-muted"></small>

    <div id="theNinthSegment">
        <div class="form-group">
            <label for="heading9">Ninth Header</label>
            <input type="textarea"
                    name="heading9"
                    class="form-control form-control-lg"
                    value="{{ old('heading9') }}"
            >
            @if ($errors->has('heading9'))
                <span class="text-danger">{{ $errors->first('heading9') }}</span>
            @endif
            <small id="ninthSegmentHelp"
                    class="form-text text-muted"
            >
                    What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="image9_name">Main Article Image</label>
            <input type="text"
                    name="image9_name"
                    class="form-control form-control-lg"
                    value="{{ old('image9_name') }}"
            >
            @if ($errors->has('image9_name'))
                <span class="text-danger">{{ $errors->first('image9_name') }}</span>
            @endif
            <small id="image9Help" class="form-text text-muted">
            What should we share regarding this field?
            </small>
        </div>

        <div class="form-group">
            <label for="imageCredit9">Credit The Image</label>
            <input type="text"
                    name="imageCredit9"
                    class="form-control form-control-lg"
                    value="{{ old('imageCredit9') }}"
            >
            @if ($errors->has('imageCredit9'))
                <span class="text-danger">{{ $errors->first('imageCredit9') }}</span>
            @endif
            <small id="image9Help" class="form-text text-muted">What should we share regarding this field?</small>
        </div>

        <div class="form-group">
            <label for="paragraph1Heading9">First Paragraph Heading 9</label>
            <input type="textarea"
                    name="paragraph1Heading9"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph1Heading9') }}"
            >
            @if ($errors->has('paragraph1Heading9'))
                <span class="text-danger">{{ $errors->first('paragraph1Heading9') }}</span>
            @endif
            <small id="paragraph1Heading9Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph2Heading9">Second Paragraph Heading 9</label>
            <input type="textarea"
                    name="paragraph2Heading9"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph2Heading9') }}"
            >
            @if ($errors->has('paragraph2Heading9'))
                <span class="text-danger">{{ $errors->first('paragraph2Heading9') }}</span>
            @endif
            <small id="paragraph2Heading9Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>

        <div class="form-group">
            <label for="paragraph3Heading9">Third Paragraph Heading 9</label>
            <input type="textarea"
                    name="paragraph3Heading9"
                    class="form-control form-control-lg"
                    value="{{ old('paragraph3Heading9') }}"
            >
            @if ($errors->has('paragraph3Heading9'))
                <span class="text-danger">{{ $errors->first('paragraph3Heading9') }}</span>
            @endif
            <small id="paragraph3Heading9Help" class="form-text text-muted">This should have wrapped up the article</small>
        </div>
    </div>

<button type="button"
        id="tenthHeaderButton"
        class="btn btn-secondary"
        onclick="buttonClicked(this.id)">
        Add Tenth Header?
</button>
<small id="tenthHeaderHelp"
       class="form-text text-muted">
        final section
</small>

<div id="theTenthSegment">
    <div class="form-group">
        <label for="heading10">Tenth Header</label>
        <input type="textarea"
                name="heading10"
                class="form-control form-control-lg"
                value="{{ old('heading10') }}"
        >
        @if ($errors->has('heading10'))
            <span class="text-danger">{{ $errors->first('heading9') }}</span>
        @endif
        <small id="tenthSegmentHelp"
                class="form-text text-muted"
        >
                What should we share regarding this field?
        </small>
    </div>

    <div class="form-group">
        <label for="image10_name">Main Article Image</label>
        <input type="text"
                name="image10_name"
                class="form-control form-control-lg"
                value="{{ old('image10_name') }}"
        >
        @if ($errors->has('image10_name'))
            <span class="text-danger">{{ $errors->first('image10_name') }}</span>
        @endif
        <small id="image10Help" class="form-text text-muted">
        What should we share regarding this field?
        </small>
    </div>

    <div class="form-group">
        <label for="imageCredit10">Credit The Image</label>
        <input type="text"
                name="imageCredit10"
                class="form-control form-control-lg"
                value="{{ old('imageCredit10') }}"
        >
        @if ($errors->has('imageCredit10'))
            <span class="text-danger">{{ $errors->first('imageCredit10') }}</span>
        @endif
        <small id="image10Help" class="form-text text-muted">What should we share regarding this field?</small>
    </div>



    <div class="form-group">
        <label for="paragraph1Heading10">First Paragraph Heading 10</label>
        <input type="textarea"
                name="paragraph1Heading10"
                class="form-control form-control-lg"
                value="{{ old('paragraph1Heading10') }}"
        >
        @if ($errors->has('paragraph1Heading10'))
            <span class="text-danger">{{ $errors->first('paragraph1Heading10') }}</span>
        @endif
        <small id="paragraph1Heading10Help" class="form-text text-muted">This should have wrapped up the article</small>
    </div>
    <div class="form-group">
        <label for="paragraph2Heading10">Second Paragraph Heading 10</label>
        <input type="textarea"
                name="paragraph2Heading10"
                class="form-control form-control-lg"
                value="{{ old('paragraph2Heading10') }}"
        >
        @if ($errors->has('paragraph2Heading10'))
            <span class="text-danger">{{ $errors->first('paragraph2Heading10') }}</span>
        @endif
        <small id="paragraph2Heading10Help" class="form-text text-muted">This should have wrapped up the article</small>
    </div>

    <div class="form-group">
        <label for="paragraph3Heading10">Third Paragraph Heading 10</label>
        <input type="textarea"
                name="paragraph3Heading10"
                class="form-control form-control-lg"
                value="{{ old('paragraph3Heading10') }}"
        >
        @if ($errors->has('paragraph3Heading10'))
            <span class="text-danger">{{ $errors->first('paragraph3Heading10') }}</span>
        @endif
        <small id="paragraph3Heading10Help" class="form-text text-muted">This should have wrapped up the article</small>
    </div>
</div>

<div id='createOrReturn' class="row mt-3">
    <div class="col-12">
        <button id="createArticleButton"
                class="btn btn-lg btn-success mt-3"
                type="submit"
                onclick="buttonClicked(this.id)"
                >
            CREATE
        </button>
    </div>
    <div class="col-4">
        <button id="backButton"
                class="btn btn-lg btn-dark mt-3"
                type="submit"
                onclick="buttonClicked(this.id)"
                >
            <a style="color:white;" href="{{ url('viewSelectArticlePage') }} ">
            BACK
            </a>
        </button>
    </div>
</div>
</form>
</div>
    <div class="modal-footer">
        <button type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
        >
            Close
        </button>
        <button type="button"
                id="showCreateOrReturn"
                class="btn btn-primary"
                onclick="buttonClicked(this.id)"
        >
            Keep changes
        </button>
    </div>
    </div>
  </div>
</div>


    </div>
                                    <!--  END OF FORM/SLAB -->

        </div>
    </div>


</div> <!-- this is the end of the div class=card slab -->

<script type="text/javascript">
//  : THESE DIVS ARE RELATED TO THE FIRST PIECES OF DATA USER'S SEE ON PAGE.
let firstDiv = document.getElementById('firstDiv');
let secondDiv = document.getElementById('secondDiv');
let thirdDiv = document.getElementById('thirdDiv');
let fourthDiv = document.getElementById('fourthDiv');
let fifthDiv = document.getElementById('fifthDiv');
let sixthDiv = document.getElementById('sixthDiv');
let seventhDiv = document.getElementById('seventhDiv');
let eigthDiv = document.getElementById('eigthDiv');
let ninthDiv = document.getElementById('ninthDiv');
let div11 = document.getElementById('div11');

//  : THESE BUTTONS MAY BE INVOLVED IN THE ANIMATION PROCESS OF THE PAGE
//      1. WE SHOULD REMOVE THE UNUSED BUTTONS
let button01 = document.getElementById('div05'),
button02     = document.getElementById('fifthDiv'), button03, button04, button05;
//  : THESE BUTTONS WILL GIVE USER ABILITY TO ADD ELEMENTS TO FORM
//           1. Hide them on load
//           2. Theres multiple of these so may have to loop
let articleChoices = document.getElementsByClassName('article-choices');
//  : THE SLAB IN THIS CASE IS THE FORM WHICH IS HOSTING THE INPUTS FOR THE EVENTUAL ARTICLE CREATION
let slab                   = document.getElementById('slab');
let createArticleButton   = document.getElementById('createArticleButton');
// : backButton exists directly on form
let backButton            = document.getElementById('backbutton');
let createOrReturnButtons = document.getElementById('createOrReturn');
let theSecondSegment = document.getElementById('theSecondSegment');
let addSecondHeaderButton = document.getElementById('secondHeaderButton');
let thirdHeaderButton = document.getElementById('thirdHeaderButton');
// this segment is hidden on load, revealed on click of 'addThirdHeader'
let addThirdHeader = document.getElementById('addThirdHeader');
let hideTheseThingsOnPageLoad  = setTimeout( () => {
            firstDiv.style.display    = 'none';
            secondDiv.style.display   = 'none';
            thirdDiv.style.display    = 'none';
            fourthDiv.style.display   = 'none';
            fifthDiv.style.display    = 'none';
            sixthDiv.style.display    = 'none';
            sixthDiv.style.display    = 'none';
            seventhDiv.style.display  = 'none';
            ninthDiv.style.display    = 'none';
            div11.style.display       = 'none';
            button01.style.display    = 'none';
            createOrReturnButtons.style.display        = 'none';
            // hide this on load.
            document.getElementById('thirdHeaderButton').style.display = 'none';
            document.getElementById('thirdHeaderHelp').style.display = 'none';

            // hide this portion of the form until needed
            theSecondSegment.style.display             = 'none';
            // hide this portion of the form until needed
            thirdHeaderButton.style.display            = 'none';
            // hiding the third segment on load, until it is called for
            theThirdSegment.style.display             = 'none';

            // place new headers and segments here
            let fourthHeaderButton = document.getElementById('fourthHeaderButton');

            fourthHeaderButton.style.display = 'none';

            let theFourthSegment = document.getElementById('theFourthSegment');

            theFourthSegment.style.display = 'none';

// fifth ...
            let fifthHeaderButton = document.getElementById('fifthHeaderButton');

            fifthHeaderButton.style.display = 'none';

            let theFifthSegment = document.getElementById('theFifthSegment');

            theFifthSegment.style.display = 'none';

// sixth ...

            let sixthHeaderButton = document.getElementById('sixthHeaderButton');

            sixthHeaderButton.style.display = 'none';

            let theSixthSegment = document.getElementById('theSixthSegment');

            theSixthSegment.style.display = 'none';

//  seventh

        let seventhHeaderButton = document.getElementById('seventhHeaderButton');

        seventhHeaderButton.style.display = 'none';

        let theSeventhSegment = document.getElementById('theSeventhSegment');

        theSeventhSegment.style.display = 'none';

// eigth ...


let eighthHeaderButton = document.getElementById('eighthHeaderButton');

eighthHeaderButton.style.display = 'none';

let theEighthSegment = document.getElementById('theEighthSegment');

theEighthSegment.style.display = 'none';

// ninth ...

let ninthHeaderButton = document.getElementById('ninthHeaderButton');

ninthHeaderButton.style.display = 'none';

let theNinthSegment = document.getElementById('theNinthSegment');

theNinthSegment.style.display = 'none';

// tenth ...

let tenthHeaderButton = document.getElementById('tenthHeaderButton');

tenthHeaderButton.style.display = 'none';

let theTenthSegment = document.getElementById('theTenthSegment');

theTenthSegment.style.display = 'none';



}, 10);
hideTheseThingsOnPageLoad;
//   : SHOW THESE THINGS AFTER X AMOUNT OF SECONDS
setTimeout( function() {
    firstDiv.style.display = 'block';
    secondDiv.style.display = 'block';
    setTimeout(function(){  // STEP 1
        secondDiv.style.display = 'none';
        thirdDiv.style.display = 'block';
        //   : SHOW THESE THINGS AFTER X AMOUNT OF SECONDS
        setTimeout(function(){ // STEP 2
            fourthDiv.style.display = 'block';
            setTimeout(function() { // STEP 3
                // start button should show div05
                button01.style.display = 'block';
            }, 1000 ); // step 3 ( 2.5 seconds later )
        }, 1000 ); // step 2 ( 1 second later )
    }, 1000 ); // step 1                                      } TODO : change times back to prev.
}, 2000); // start the clock

div11.style.display = 'block';                         // finally show the final div11,div12 elements
function buttonClicked (elementName) {
    if (elementName == 'secondHeaderButton')
    {
        showSecondHeader = theSecondSegment.style.display = 'inline';
        // hide the button
        addSecondHeaderButton.style.display = 'none';
        // show third header option
        document.getElementById('thirdHeaderButton').style.display = 'inline';
        document.getElementById('extension1ButtonHelp').style.display = 'none';
    }

    if ( elementName == 'thirdHeaderButton')
    {
        document.getElementById('thirdHeaderButton').style.display = 'none';
        document.getElementById('theThirdSegment').style.display = 'inline';

        //  show the fourth header button option.
        fourthHeaderButton.style.display = 'inline';
    }

    if ( elementName == 'fourthHeaderButton' )
    {
        // hide the button before moving on
        fourthHeaderButton.style.display = 'none';
        // show this segment
        theFourthSegment.style.display = 'inline';
        // show fifthHeaderButton
        fifthHeaderButton.style.display = 'inline';

    }

    if( elementName == 'fifthHeaderButton')
    {
        fifthHeaderButton.style.display = 'none';
        theFifthSegment.style.display   = 'inline';
        sixthHeaderButton.style.display = 'inline';

    }

    if ( elementName == 'sixthHeaderButton')
    {
        sixthHeaderButton.style.display   = 'none';
        theSixthSegment.style.display     = 'inline';
        seventhHeaderButton.style.display = 'inline';
    }

    if ( elementName == 'seventhHeaderButton')
    {
        seventhHeaderButton.style.display   = 'none';
        theSeventhSegment.style.display   = 'inline';
        eighthHeaderButton.style.display  = 'inline';
    }

    if ( elementName == 'eighthHeaderButton')
    {
        eighthHeaderButton.style.display   = 'none';
        theEighthSegment.style.display     = 'inline';
        ninthHeaderButton.style.display    = 'inline';
    }

    if ( elementName == 'ninthHeaderButton')
    {
        ninthHeaderButton.style.display = 'none';
        theNinthSegment.style.display   = 'inline';
        tenthHeaderButton.style.display = 'inline';
    }

    if ( elementName == 'tenthHeaderButton')
    {
        tenthHeaderButton.style.display   = 'none';
        theTenthSegment.style.display     = 'inline';
    }

    if (elementName == 'showCreateOrReturn') {
        document.getElementById('createOrReturn').style.display = 'inline';
    }
    // : These are the first few buttons clicked
    if (elementName == 'button01') {
        fifthDiv.style.display     = 'block';
        button01.style.display  = 'none';
        fourthDiv.style.display     = 'none';


    }

    if (elementName == 'button02') {
        fifthDiv.style.display = 'none';
        setTimeout(function() {
            div11.style.display = 'block';
        }, 1000 );

        // TODO : SHOW TITLE BUTTON NOW
    }
    // }
}
let formElements = [];
function addToFormElements(elementName, placeHolder, fieldInputType) {
    formElements.push(elementName);
    createChosenElements(formElements, placeHolder, fieldInputType);
}
function createChosenElements(formElements, placeHolder, fieldInputType) {

    // TODO : use this later potentially to change out paragraphs
    let paragraph = ' ... Enter Paragraph ... ';
    let input = document.createElement('input');
    //  : CHANGING THE WAY PLACE HOLDER STRING APPEARS TO USER
    if (placeHolder.includes('headingeaderParagraph')) {
        switch (placeHolder) {
            case placeHolder = 'firstHeaderParagraph1':
                input.placeholder = paragraph;
                break;
            case placeHolder = 'firstHeaderParagraph2':
                input.placeholder = paragraph;
                break;
            case placeHolder = 'secondHeaderParagraph1':
                    console.log('paragraph 1 header 2');
                input.placeholder = paragraph;
                break;
            case placeHolder = 'secondHeaderParagraph2':
                input.placeholder = paragraph;
                break;
            case placeHolder = 'thirdHeaderParagraph1':
                input.placeholder = paragraph;
                break;
            case placeHolder = 'thirdHeaderParagraph2':
                    input.placeholder = paragraph;
            break;
            //  : IN THIS CASE WE SHOULD SEND ERROR TO SOME LOG
            default:
                console.log('This should not happen.');
        }
    } else {
    //  : IF THERES NO NEED FOR STRING MODIFICATION
        input.placeholder = placeHolder;
    }

    //  : FINISH SETTING UP THE INPUT BEFORE APPENDED.
    input.setAttribute('type', fieldInputType);
    input.setAttribute('class', 'form-control mt-3 mb-3');
    appendToForm(input);
}
function appendToForm(input){
    let workflowButtonsContainer = document.getElementById('workflow');
    workflowButtonsContainer.appendChild(input);
}

</script>

<!--  bootstrap cdn css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- bootstrap 4.4 scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

@endsection
