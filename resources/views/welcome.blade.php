<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <section id="navbar">
               <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="nav" data-spy="affix">
                  <a class="navbar-brand" href="#"><img src="{{ asset('img/Symbol_dragon.png') }}" width="50" height="50"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                     <form class="form-inline">
                        <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
                        <button type="submit" class="btn btn-outline-primary mr-sm-3"><i class="fa fa-search"></i></button>
                      </form>
                      <li class="nav-item dropdown mr-sm-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Dropdown 1</a>
                          <a class="dropdown-item" href="#">Dropdown 2</a>
                          <a class="dropdown-item" href="#">Dropdown 3</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </nav>
               </section>
               
                
                <!-- Banner -->
                <section id="banner">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="{{ asset('img/152931-nanatsu-no-taizai-wallpaper-2700x1080-for-meizu.jpg') }}" alt="First slide" height="550">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="{{ asset('img/smile.jpg') }}" alt="Second slide" height="550">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="{{ asset('img/kyokai_no_kanata__psd_file_by_regenald88-d6xmkf9.png') }}" alt="Third slide" height="550">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </section>
                
                <!-- Blog -->
                <section id="blog">
                    <div class="container">
                        <h1 class="font"><strong>BLOG</strong></h1>
                        <div class="btn-group">
                        <h6 class="font">Show More <a href="#">All Post</a></h6>  
                           <button class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Informasi</a>
                                <a href="#" class="dropdown-item">Tutorial</a>
                                <a href="#" class="dropdown-item">Source Code</a>
                            </div>
                        </div>
                        <br>
                        <br>
                        
                        <div class="card-deck">
                          <div class="card">
                            <img class="card-img-top" src="{{ asset('img/image-01-full.jpg') }}" alt="Card image cap" height="250">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="{{ asset('img/image-01-full.jpg') }}" alt="Card image cap" height="250">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        
                        <br>
                        
                        <div class="card-deck">
                          <div class="card">
                            <img class="card-img-top" src="{{ asset('img/image-01-full.jpg') }}" alt="Card image cap" height="250">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="{{ asset('img/image-01-full.jpg') }}" alt="Card image cap" height="250">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        
                    </div>
                </section>
                
                <section id="subscribe">
                       <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="{{ asset('img/152931-nanatsu-no-taizai-wallpaper-2700x1080-for-meizu.jpg') }}" alt="First slide">
                              <div class="carousel-caption d-none d-md-block">
                                 <form>
                                     <div class="form-group">
                                         <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Address">
                                     </div>
                                 </form>
                                  <button type="button" class="btn btn-primary btn-lg btn-block">Subscribe</button>
                              </div>
                            </div>
                          </div>
                        </div>
                </section>
                
                <section id="footer">
                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <h5 class="font">COMPANY</h5>
                                       <h6 class="font">
                                        <a href="#">Company Information</a><br>
                                        <a href="#">About us</a><br>
                                        <a href="#">Reviews</a>
                                        </h6>
                                </div>
                                <div class="col-sm">
                                    <h5 class="font">CONTACT</h5>
                                       <h6 class="font">
                                        <a href="mailto:company@mail.com">company@mail.com</a><br>
                                        +123456789
                                       </h6>
                                </div>
                                <div class="col-sm">
                                    <h5 class="font">ADRESS</h5>
                                       <h6 class="font">
                                        Lorem ipsum dolor sit amet. <br>
                                        Lorem ipsum dolor. <br>
                                        Lorem ipsum.
                                        </h6>
                                </div>
                            </div>
                               <hr/>
                                <div class="footer-right">
                                    <p>Copyright &copy; Blog. All Rights Reserved. Made with <i class="fa fa-heart"></i> in Indonesia.</p>
                                </div>
                            
                        </div>
                    </footer>
                </section>

        </div>
    </body>
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.css') }}"></script>
</html>
