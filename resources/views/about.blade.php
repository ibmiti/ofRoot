@extends ('layouts.app')
@section ('title', 'Causes We Support')
@section ('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap');
body {
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 300;
  line-height: 1.5;
  letter-spacing: .45px;
}
.slab {
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
    font-family: 'Roboto Condensed', sans-serif;
  }
  .col-lg  {
    font-family: 'Roboto Condensed', sans-serif;
    /* font-weight: bold; */
    letter-spacing: .45px;
    font-size: 32px;
  }
  .col-md {
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 16px;
    color: #555555;
    line-height: 1.5;
    letter-spacing: .45px;
    margin: 2em 2em 2em 2em;
    padding: 2em 100px 2em 100px;
  }
  .col-sm {
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 16px;
    color: #555555;
    line-height: 1.5;
    letter-spacing: .45px;
    margin: 2em 2em 2em 2em;
    padding: 2em 100px 2em 100px;
  }
  ul {
    list-style-type: none;
  }
  a {
    color: black;
  }
</style>

<x-header-image/>
<div class="container">
  <div class="row text-center m-5">
    <div class="col-12">
      <h1 class="text-center mt-5 mb-3">About Us</h1>
      <p style="color:grey;">
      We are an independent publication-studio built for parents by parents. This means our primary rule is true and accurate information and helpful content directed toward parents. Our studio also is actively building various other digital-media and digital-products aimed at entertaining and educating baby.
      </p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row text-center m-5">
    <div class="col-12">
      <h1 class="col-lg text-center mt-5 mb-3">Charities we're excited about</h1>
      <p style="color:grey;">
        Check out the below links and see who we're supporting this season
      </p>
    </div>
  </div>
</div>
<div class="container slab">
  <div class="row text-left">
    <div class="col-12">
      <ul class="list-group list-group-flush m-2 text-center">
        <li class="list-group-item">
          <p>
            <a href="https://newbornsinneed.org/">
              Newborns in Need
            </a>
          </p>
        </li>
        <li class="list-group-item">
          <p>
            <a href="https://www.sos-usa.org/">
              Health and Education Needs
            </a>
          </p>
        </li>
        <li class="list-group-item">
          <p>
            <a href="https://reachoutandread.org">
            Reach Out and Read
             </a>
          </p>
        </li>
        <li class="list-group-item">
          <p>
            <a href="https://doctorsoftheworld.org/">Doctors of the World</a>
          </p>
        </li>
        <li class="list-group-item">
          <p>
            <a href="https://parentsasteachers.org/">
              Parents As Teachers
            </a>
          </p>
        </li>
      </ul>
    </div>
  </div>
</div>

@endsection

<div class="row">
    <div class="col-12 text-center mt-5 mb-2">
        <h2>What We're Saying</h2>
        <a class="twitter-timeline" href="https://twitter.com/theBassinet?ref_src=twsrc%5Etfw">Tweets by theBassinet</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>
