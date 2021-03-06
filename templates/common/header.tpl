<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Pivot - {{title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/css/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/theme-zest.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="/css/ie9.css" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="/css/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="/css/css/font-roboto.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="nav-container">
    <nav class="top-bar overlay-bar">
        <div class="container">

            <div class="row utility-menu">
                <div class="col-sm-12">
                    <div class="utility-inner clearfix">
                        <span class="alt-font"><i class="icon icon_pin"></i> 300 Collins St Melbourne</span>
                        <span class="alt-font"><i class="icon icon_mail"></i> hello@pivot.net</span>

                        <div class="pull-right">
                            {% if session.isLogged == false %}
                            <a href="/login" class="btn btn-primary btn-white btn-xs">Login</a>
                            <a href="/signup" class="btn btn-primary btn-filled btn-xs">Signup</a>
                            {% else %}
                            <a href="/myAccount" class="btn btn-primary btn-white btn-xs">Profile</a>
                            <a href="/logout" class="btn btn-primary btn-filled btn-xs">Logout</a>
                            {% endif %}
                            <a href="#" class="language"><img alt="English" src="/css/img/english.png"></a>
                            <a href="#" class="language"><img alt="English" src="/css/img/denmark.png"></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row nav-menu">
                <div class="col-md-2 col-sm-3 columns">
                    <a href="home"><img class="logo logo-light" alt="Logo" src="/css/img/logo-light.png"></a>
                    <a href="home"><img class="logo logo-dark" alt="Logo" src="/css/img/logo-dark.png"></a>
                </div>

                <div class="col-md-10 col-sm-9 columns">
                    <ul class="menu">
                        <li><a href="home">Home</a></li>
                        <li class="has-dropdown"><a href="#">Dropdown</a>
                            <ul class="subnav">
                                {% if session.isLogged == false %}
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Example</a></li>
                                {% else %}
                                <li><a href="#">Logged Example</a></li>
                                <li><a href="#">Logged Example</a></li>
                                <li><a href="#">Logged Example</a></li>
                                <li><a href="#">Logged Example</a></li>
                                {% endif %}
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#">Half Width</a>
                            <div class="subnav subnav-halfwidth">
                                <div class="col-md-6">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="has-dropdown"><a href="#">Fullwidth</a>
                            <div class="subnav subnav-fullwidth">
                                <div class="col-md-3">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="social-icons text-right">
                        <li>
                            <a href="#">
                                <i class="icon social_twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mobile-toggle">
                <i class="icon icon_menu"></i>
            </div>

        </div>
    </nav>

</div>