<style>
#socials {
  margin-top: -80px;
}
#footer {
  height: 100px;
}
a {
  color: black;
}
</style>
@php
    $uri = Request::getRequestUri();

@endphp
<!-- we will allow all of the indexBaby, indexChil... etc files to have their own defined footer for now. -->

    <div id = 'footer' class="text-center" >
        <footer class="page-footer font-small cyan darken-3 mt-5">
                <div class="row">
                    <div class="col-md-12 py-5 text-center">
                        <!-- do not show this to /contact view -->
                        @if ($uri != '/contact')
                            <p style="color:grey" class="text-center">Hello World, Follow Our Creative Studio Socially.</p>
                            <x-contact/>
                        @endif
                    </div>
                </div>
            <div id="socials" translate="no" class="footer-copyright text-center py-3 mt-1">
                OfRoot
                <!-- <a href="">ofRoot.com</a> -->
            </div>
        </footer>
    </div>

<script type="text/javascript">
// fade out footer element onload, activate func in 3 seconds
  let footerElement = document.getElementById('footer');    // select the footer element by id=footer
  setTimeout(function(){                                    // function which runs after x amount of time passes.
    let fadeOutEffect = setInterval(function () {
        if (!footerElement.style.opacity) {
          footerElement.style.opacity = 1;
        }
        if (footerElement.style.opacity > 0) {
          footerElement.style.opacity -= 0.1;
        } else {
            clearInterval(fadeOutEffect);
        }
    }, 200);
  }, 3000);
  let fadeInEffect = setTimeout(function(){
    var opacity = 0;
    var intervalID = 0;
    if (opacity < 1) {
      opacity = opacity + 1;
      footerElement.style.opacity = opacity
    } else {
        clearInterval(intervalID);
    }
  }, 30000 );
</script>
