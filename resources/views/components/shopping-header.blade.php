<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Rampart+One&family=Roboto:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Rampart+One&family=Roboto:wght@700&display=swap');
#h1-header-text {
  font-family: 'Rampart One', sans-serif;
  font-weight: 700;
}
#header-text {
  font-family: 'Anton', sans-serif;
  font-family: 700;
}

body {
    /* font-family: 'Raleway', 'Roboto'; */
    font-family: 'Roboto Condensed', sans-serif;
}
.col-lg  {
    /* font-family: 'Raleway', 'Roboto'; */
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 26px;
}

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
        font-family: 'Roboto Condensed', sans-serif;
    }
    a {
        text-decoration: none;
    }

    .white-space {
        margin: 8%;
        padding: 5%;
    }

</style>
<section class="white-space wow fadeIn mt-5">
  <div style="min-height: 100px;">
    <div class="m-3 row">
      <div class="col-12 text-center mt-4 mb-5">
        <h1 id="h1-header-text">Shopping Baby</h1>
      </div>
    </div>
  </div>
</section>
