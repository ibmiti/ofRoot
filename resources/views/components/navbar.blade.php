<style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Anton&family=Rampart+One&family=Roboto:wght@700&display=swap');
    nav ul li {
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: 300;
        font-size: 28px;
        padding-left: 11px;
        line-height: 1.5;
        letter-spacing: .45px;
    }

    body {
        font-weight: 300;
        line-height: 1.5;
        letter-spacing: .45px;
    }
    #navbarSpacing {
        letter-spacing: .45px;
    }
</style>
<nav id="navbar" class="navbar navbar-light navbar container container-fluid">
    <div id="navbarSpacing" class="navbar-brand text-left"
        style="font-family: 'Anton', sans-serif; font-size: 27px; padding: 2px 2px 2px 12px;"
        href="#">
    <?php


        switch($uri = Request::getRequestUri()) {
            case ($uri == '/'):
                echo ('OFROOT');
            break;
            case($uri == '/babies'):
                echo ('OFROOT | Articles About Babies');
            break;
            case ($uri == '/articles'):
                echo ('OFROOT | All Articles');
            break;
            case($uri == '/about'):
                echo ('OFROOT | About Us');
            break;
            case ($uri == '/contact'):
                echo ('OFROOT | Contact Us');
            break;
            case ($uri == '/articleStore'):
                echo ('OFROOT | Edit Article');
            break;
            case ($uri == '/editArticleSelection'):
                echo ('OFROOT | Edit These Articles');
            break;
            case ($uri == '/admin'):
                echo ('OFROOT | Edit These Articles');
            break;
            case ($uri == '/confirmArticle'):
                echo ('OFROOT | Edit These Articles');
            break;
            case ($uri == '/confirmArticle'):
                echo ('OFROOT | Shop');
            break;
            default:
                echo (' OFROOT ');
        }
    ?>
</div>

  <button class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent15"
          aria-controls="navbarSupportedContent15"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="border: none;outline: none;"
          >
    <span class="navbar-toggler-icon"></span></button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent15">
    <ul class="navbar-nav ml-auto">
        <?php
            $uri = Request::getRequestUri();
            switch ($uri) {
                case ($uri == '/'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>ALL ARTICLES</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/videos"><strong>WATCH</strong></a></li>');
                break;
                case ($uri == '/articles'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>ALL ARTICLES</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');


                    echo ('<li class="nav-item active"><a class="nav-link" href="/videos"><strong>WATCH</strong></a></li>');

                break;
                case ($uri == '/babies'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>ALL ARTICLES</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');


                    echo ('<li class="nav-item active"><a class="nav-link" href="/videos"><strong>WATCH</strong></a></li>');
                break;
                case ($uri == '/child'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>ALL ARTICLES</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');


                    echo ('<li class="nav-item active"><a class="nav-link" href="/videos"><strong>WATCH</strong></a></li>');
                break;
                case ($uri == '/parent'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>ALL ARTICLES</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                case ($uri == '/editArticleSelection'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>ALL ARTICLES</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                case ($uri == '/about'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>ALL ARTICLES</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                case ($uri == '/contact'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                case ($uri == '/articleStore'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                case ($uri == '/update/$articleId'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                case ($uri == '/admin'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                case ($uri == '/editArticleSelection'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                case ($uri == '/confirmArticle'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                case ($uri == 'childArticle/{{$article->id}}'):
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');
                break;
                default:
                    echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT</strong></a></li>');

                    echo ('<li class="nav-item"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/shop"><strong>SHOP</strong></a></li>');

                    echo ('<li class="nav-item active"><a class="nav-link" href="/videos"><strong>WATCH</strong></a></li>');
                break;
            }
        ?>
   </ul>
  </div>
</nav>
