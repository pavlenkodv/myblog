<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/front.css">
    <link rel="icon" type="image/png" href="/images/favicon.png">
</head>
<body>
<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/images/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav text-uppercase">
                    @if(Auth::check())
                        <li><a href="/admin">Dashboard</a></li>
                        <li><a href="/admin/posts">My Posts</a></li>
                    @endif
                </ul>
                <ul class="nav navbar-nav text-uppercase pull-right">
                    @if(Auth::check())
                        <li><a href="/profile">My profile</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @else
                        <li><a href="/register">Register</a></li>
                        <li><a href="/login">Login</a></li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="show-search">
                <form role="search" method="get" id="searchform" action="#">
                    <div>
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-info">
                    {{session('status')}}
                </div>
            @endif
        </div>
    </div>
</div>
@yield('content')
<!--footer start-->
<div id="footer">
</div>
<footer class="footer-widget-section">
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center"> &copy; <?php echo date("Y");?> <a href="#"> Laravel Blog,
                        </a> Developed </i> by
                        <a href="https://github.com/dimap89/myblog">Dmitriy Pavlenko</a>
                        <a href="#" class="sf-back-to-top"
                           style="position: fixed;
                           bottom: 20px;
                           right: 30px;
                           z-index: 999;
                           font-size: 1.5em;
                           background-color: rgba(61, 60, 63, 0.64);
                           color: rgb(255, 255, 255);
                           cursor: pointer;
                           padding: 8px;
                           width: 44px;
                           border-radius: 18px;
                           display: block;">
                            <span class="arrow">
                            </span>^
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/js/front.js"></script>
<script>
    var amountScrolled = 300;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('a.sf-back-to-top').fadeIn('slow');
        } else {
            $('a.sf-back-to-top').fadeOut('slow');
        }
    });

    $('a.sf-back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });
</script>
</body>
</html>