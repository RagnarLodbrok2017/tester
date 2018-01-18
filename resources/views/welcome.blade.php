<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/prettyPhoto.css') }}">

        <!-- Stylesheet
            ================================================== -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="preloader">
      <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
          <a class="navbar-brand page-scroll" href="#page-top"> <i class="fa fa-paper-plane-o"></i> Modus</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li class="hidden"> <a href="#page-top"></a> </li>
            <li> <a class="page-scroll" href="#about">About</a> </li>
            <li> <a class="page-scroll" href="#services">Services</a> </li>
            <li> <a class="page-scroll" href="#works">Portfolio</a> </li>
            <li> <a class="page-scroll" href="#team">Team</a> </li>
            <li> <a class="page-scroll" href="#testimonials">Testimonials</a> </li>
            <li> <a class="page-scroll" href="#contact">Contact</a> </li>
            <!-- Authentication Links -->
            <li class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
              </a>
            @guest
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: #333;padding: 10px;">
                  <a class="dropdown-item" href="{{ route('login') }}" style="padding: 10px;">Login</a>
                  <a class="dropdown-item" href="{{ route('register') }}" style="padding: 10px;">Register</a>
                </ul>
            </li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
            @endguest
          </ul>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Header -->
    <div id="intro">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h1>We are <span class="brand-heading">Modus</span></h1>
              <p class="intro-text">A full-service digital agency that loves what we do</p>
              <a href="#about" class="btn btn-default page-scroll">Learn More</a>
              @if (Route::has('login'))
              @auth
                @if(Auth::user()->usertype == 0)
              <a  class="btn btn-default page-scroll" href="{{ url('/home/products') }}">Products</a>
                  @endif
                  @if(Auth::user()->usertype == 1)
                    <a  class="btn btn-default page-scroll" href="{{ url('/adminhome') }}">Users</a>
                  @endif
              @else
              <a  class="btn btn-default page-scroll" href="{{ route('login') }}">Login</a>
              <a  class="btn btn-default page-scroll" href="{{ route('register') }}">Register</a>
              @endauth
              @endif
            </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Section -->
    <div id="about">
      <div class="container">
        <div class="section-title text-center center">
          <h2>About us</h2>
          <hr>
        </div>
        <div class="row">
          <div class="col-md-4"><img src="img/about.jpg" class="img-responsive"></div>
          <div class="col-md-4">
            <div class="about-text">
              <h4>Who We Are</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum. </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about-text">
              <h4>What We Do</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam.</p>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing commodo</li>
                <li>Duis sed dapibus leo sed dapibus</li>
                <li>Sed commodo nibh ante bibendum</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services Section -->
    <div id="services" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>Our Services</h2>
          <hr>
        </div>
        <div class="space"></div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="service"> <i class="fa fa-desktop"></i>
              <h3>Web Design</h3>
              <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="service"> <i class="fa fa-cogs"></i>
              <h3>Web Development</h3>
              <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="service"> <i class="fa fa-tablet"></i>
              <h3>App Design</h3>
              <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="service"><i class="fa fa-html5"></i>
              <h3>PSD to HTML5</h3>
              <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
            </div>
          </div>
        </div>
        <div class="space"></div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="service"><i class="fa fa-wordpress"></i>
              <h3>WordPress</h3>
              <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="service"><i class="fa fa-bullhorn"></i>
              <h3>Marketing</h3>
              <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="service"><i class="fa fa-rocket"></i>
              <h3>Branding</h3>
              <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="service"><i class="fa fa-leaf"></i>
              <h3>Print Design</h3>
              <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Section -->
    <div id="works">
      <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
          <h2>Our Portfolio</h2>
          <hr>
          <div class="clearfix"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
        </div>
        <div class="categories">
          <ul class="cat">
            <li>
              <ol class="type">
                <li><a href="#" data-filter="*" class="active">All</a></li>
                <li><a href="#" data-filter=".lorem">Web Design</a></li>
                <li><a href="#" data-filter=".consectetur">Web Development</a></li>
                <li><a href="#" data-filter=".dapibus">Branding</a></li>
              </ol>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="row">
          <div class="portfolio-items">
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/portfolio/01.jpg" title="Project description" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <p>Web Design</p>
                  </div>
                  <img src="img/portfolio/01.jpg" class="img-responsive" alt="Project Title"> </a> </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 consectetur">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/portfolio/02.jpg" title="Project description" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <p>Web Development</p>
                  </div>
                  <img src="img/portfolio/02.jpg" class="img-responsive" alt="Project Title"> </a> </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/portfolio/03.jpg" title="Project description" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <p>Web Design</p>
                  </div>
                  <img src="img/portfolio/03.jpg" class="img-responsive" alt="Project Title"> </a> </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/portfolio/04.jpg" title="Project description" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <p>Web Design</p>
                  </div>
                  <img src="img/portfolio/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 consectetur">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/portfolio/05.jpg" title="Project description" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <p>Web Development</p>
                  </div>
                  <img src="img/portfolio/05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 dapibus">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/portfolio/06.jpg" title="Project description" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <p>Branding</p>
                  </div>
                  <img src="img/portfolio/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 dapibus consectetur">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/portfolio/07.jpg" title="Project description" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <p>Web Development, Branding</p>
                  </div>
                  <img src="img/portfolio/07.jpg" class="img-responsive" alt="Project Title"> </a> </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/portfolio/08.jpg" title="Project description" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <p>Web Design</p>
                  </div>
                  <img src="img/portfolio/08.jpg" class="img-responsive" alt="Project Title"> </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team Section -->
    <div id="team" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>Meet the team</h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
        </div>
        <div id="row">
          <div class="col-xs-6 col-md-3 col-sm-6">
            <div class="thumbnail"> <img src="img/team/01.jpg" alt="..." class="img-thumbnail team-img">
              <div class="caption">
                <h3>John Doe</h3>
                <p>Founder / CEO</p>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-3 col-sm-6">
            <div class="thumbnail"> <img src="img/team/02.jpg" alt="..." class="img-thumbnail team-img">
              <div class="caption">
                <h3>Mike Doe</h3>
                <p>Web Designer</p>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-3 col-sm-6">
            <div class="thumbnail"> <img src="img/team/03.jpg" alt="..." class="img-thumbnail team-img">
              <div class="caption">
                <h3>Jane Doe</h3>
                <p>Creative Director</p>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-3 col-sm-6">
            <div class="thumbnail"> <img src="img/team/04.jpg" alt="..." class="img-thumbnail team-img">
              <div class="caption">
                <h3>Larry Show</h3>
                <p>Project Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials Section -->
    <div id="testimonials" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>What our clients say</h2>
          <hr>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row testimonials">
              <div class="col-sm-4">
                <blockquote><i class="fa fa-quote-left"></i>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
                  <div class="clients-name">
                    <p><strong>John Doe</strong><br>
                      <em>CEO, Company Inc.</em></p>
                  </div>
                </blockquote>
              </div>
              <div class="col-sm-4">
                <blockquote><i class="fa fa-quote-left"></i>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
                  <div class="clients-name">
                    <p><strong>Jane Doe</strong><br>
                      <em>CEO, Company Inc.</em></p>
                  </div>
                </blockquote>
              </div>
              <div class="col-sm-4">
                <blockquote><i class="fa fa-quote-left"></i>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
                  <div class="clients-name">
                    <p><strong>Chris Smith</strong><br>
                      <em>CEO, Company Inc.</em></p>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>Contact us</h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <div class="col-md-4">
            <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
              <p>4321 California St,<br>
                San Francisco, CA 12345</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
              <p>info@company.com</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
              <p> +1 123 456 1234<br>
                +1 321 456 1234</p>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <h3>Leave us a message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div id="success"></div>
            <button type="submit" class="btn btn-default">Send Message</button>
          </form>
          <div class="social">
            <h3>Follow us</h3>
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="footer">
      <div class="container">
        <p>Copyright &copy; Modus. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src={{asset('js/jquery.1.11.1.js')}}></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script type="text/javascript" src={{asset('js/bootstrap.js')}}></script>
    <script type="text/javascript" src={{asset('js/SmoothScroll.js')}}></script>
    <script type="text/javascript" src={{asset('js/jquery.prettyPhoto.js')}}></script>
    <script type="text/javascript" src={{asset('js/jquery.isotope.js')}}></script>
    <script type="text/javascript" src={{asset('js/jquery.parallax.js')}}></script>
    <script type="text/javascript" src={{asset('js/jqBootstrapValidation.js')}}></script>
    <script type="text/javascript" src={{asset('js/contact_me.js')}}></script>

    <!-- Javascripts
        ================================================== -->
    <script type="text/javascript" src={{asset('js/main.js')}}></script>

    </body>
</html>
