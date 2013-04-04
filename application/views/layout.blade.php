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

            <h1><a href="/">{{ HTML::image('img/logo.png', 'BookHub') }}</a></h1>

            <nav>
                <ul id="sort-by">
                    <li id="active" class="sortable"><a href="#whatshot">Whats Hot</a></li>
                    <li class="sortable"><a href="#latest">Latest</a></li>
                    <li class="menuSplitter">{{ HTML::image('img/menuSplitter.gif') }}</li>
                    <?php if(isset($genres)) : ?>
                        <li><a href="#" id="genresOpen">Genres</a></li>
                    <?php endif; ?>
                </ul>
            </nav>


            <div id="userBox">
                <a href="#" id="userDetails">
                    {{ HTML::image('img/menuArrow.gif') }}
                    John Doe
                </a>
                <ul class="sub_menu" style="display: none">
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">Download History</a></li>
                    <li><hr/></li>
                    <li>{{ HTML::link('ebook/create', 'Upload Ebook') }}</li>
                    <li><hr/></li>
                    <li><a href="#">Logout</a></li>
                </uL>

            </div>

            <div id="searchBox">
                <form action="{{ URL::to('ebook/search') }}" method="post">
                    <input type="text" placeholder="Search..." name="query">
                </form>
            </div>

        </header>

        <?php if(isset($genres)) : ?>
        <div id="genres">
          
            <div id="genresContainer">
              <h2>Genres</h2>

              <ul class="filters">
              @foreach ($genres as $count => $genre)
                <li><a href="#" data-filter=".{{ $genre->genre }}"> {{ $genre->genre }}</a></li>
                @if ( $count == 2 )
                </ul>
                <ul class="filters">
                @endif
              @endforeach
              </ul>
            </div>
          
            <div class="clearfix"></div>
        </div>
        <?php endif; ?>

        <div class="clearfix"></div>

        @if( Session::has('success') )
          <div class="success">
            <p>{{ Session::get('success') }}</p>
          </div>
        @endif

        @if( Session::has('error') )
          <div class="error">
            <p>{{ Session::get('error') }}</p>
          </div>
        @endif

        @if( Session::has('info') )
          <div class="info">
            <p>{{ Session::get('info') }}</p>
          </div>
        @endif

        <div id="content">

        @yield('content')

        </div>

        <footer id="footer">
            BookHub &copy; 2013
            <span id="footerLinks">{{ HTML::link('contact', 'Contact Us') }}</span>
        </footer>

        {{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}
        {{ HTML::script('http://code.jquery.com/ui/1.10.2/jquery-ui.js') }}
        {{ HTML::script('js/vendor/jquery.isotope.min.js') }}
        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/main.js') }}

    </body>
</html>
