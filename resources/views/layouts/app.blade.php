<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config ('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/myyStyle.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('js/script.js')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/bootstrap-4.2.1')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/demo.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/Footer-with-button-logo.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/media-queries.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    
</head>

  <body>

  <nav class="navbar fixed-top navbar-expand-md navbar-no-bg navbar-dark">
      <div class="container">
          <a class="navbar-brand h5" href="../public/index">Brand</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarsExample07">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                  <a class="nav-link mr-3 h5" href="../public/index">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link mr-3 h5" href="../public/aboutme">About me</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link mr-3 h5" href="../public/contacts">Contacts</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

        
            
            @yield('content')
        
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-about wow fadeInUp">
                        <p>
                            We are a young company always looking for new and creative ideas to help you with our products in your everyday work.
                        </p>
                        <p><a href="#">Our Team</a></p>
                    </div>
                    <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                        <h3>Contact</h3>
                        <p><i class="fas"></i> Via Rossini 10, 10136 Turin Italy</p>
                        <p><i class="fas"></i> Phone: (0039) 333 12 68 347</p>
                        <p><i class="fas"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
                        <p><i class="fab"></i> Skype: you_online</p>
                    </div>
                    <div class="col-md-4 footer-links wow fadeInUp">
                        <div class="row">
                            <div class="col">
                                <h3>Links</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><a class="scroll-link" href="#top-content">Home</a></p>
                                <p><a href="#">Features</a></p>
                                <p><a href="#">How it works</a></p>
                                <p><a href="#">Our clients</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><a href="#">Plans &amp; pricing</a></p>
                                <p><a href="#">Affiliates</a></p>
                                <p><a href="#">Terms</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

      <a href="#0" class="cd-top js-cd-top">Top</a>
      <script src="js/main.js"></script>
    </body>
    
</html>