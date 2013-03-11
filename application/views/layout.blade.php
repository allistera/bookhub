<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BookHub</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        {{ HTML::style('css/normalize.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/custom.css') }}
            
        {{ HTML::script('js/vendor/modernizr-2.6.2.min.js') }}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>

            <h1>{{ HTML::image('img/logo.png', 'BookHub') }}</h1>

            <nav>
                <ul>
                    <li id="active"><a href="#">Whats Hot</a></li>
                    <li><a href="#">Latest</a></li>
                    <li class="menuSplitter"><img src="img/menuSplitter.gif"></li>
                    <li><a href="#" id="genresOpen">Genres</a></li>
                </ul>
            </nav>


            <div id="userBox">
                <a href="#" id="userDetails">
                    <img src="img/menuArrow.gif">
                    John Doe
                </a>
                <ul class="sub_menu" style="display: none">
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">Download History</a></li>
                    <li><hr/></li>
                    <li><a href="#">Logout</a></li>
                </uL>

            </div>

            <div id="searchBox">
                <form action="#">
                    <input type="text" placeholder="Search...">
                </form>
            </div>

        </header>

        <div id="genres">
          
            <div id="genresContainer">
              <h2>Genres</h2>
              
              <ul>
                  <li><a href="#">Genre 1</a></li>
                  <li><a href="#">Genre 2</a></li>
                  <li><a href="#"> Genre 3</a></li>
              </ul>
              <ul>
                  <li><a href="#">Genre 1</a></li>
                  <li><a href="#">Genre 2</a></li>
                  <li><a href="#"> Genre 3</a></li>
              </ul>
              <ul>
                  <li><a href="#">Genre 1</a></li>
                  <li><a href="#">Genre 2</a></li>
                  <li><a href="#"> Genre 3</a></li>
              </ul>
            </div>
          
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>

        <div id="content">

        @yield('content')

        </div>

        <footer id="footer">
            BookHub &copy; 2013
            <span id="footerLinks"><a href="#">Contact Us</span>
        </footer>

        {{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}
        {{ HTML::script('js/vendor/jquery.masonry.min.js') }}
        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/main.js') }}

    </body>
</html>