<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/all.min.css">
<link rel="stylesheet" href="CSS/style.CSS">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&family=Open+Sans:ital,wght@0,300;1,300&family=Work+Sans:ital,wght@0,200;0,500;0,700;
1,400;1,500;1,
600&display=swap"
 rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand btn rounded-pill main-btn bg-info mr-3" href="#"><h5><span class="text-black">E-commerce</span></h5></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-black "  href="{{route('home.index')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <span> Dropdown</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">all producs</a></li>
                  <li><a class="dropdown-item" href="#">best seller</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">reduction</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-black" href="{{route('home.shope')}}"><span>Shope</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-black" href="{{route('home.contact')}}"><span >Contact</span></a>
              </li>
            </ul>
            <a href="{{route('home.login')}}" class="btn rounded-pill main-btn bg-info ms-1">Log in</a>
            <a href="{{route('home.singin')}}" class="btn rounded-pill main-btn bg-info ms-1 ">Sing in </a>
          </div>
        </div>
</nav>
<section> 
@yield('content')
</section>
         <div class="footer pt-5 pb-5 text-white-50 text-md-start text-center  ">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="info">
                    <a href="#" class="btn rounded-pill main-btn bg-info mr-3"><h3>E-commerce</h3></a>
                    <p class="mb-5 text-black-50 ">Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, 
                      lacinia eget consectetur sed, convallis at tellus.</p>
                  </div>
                  <div class="copyright text-black ">
                    Created By<span class="copyright text-black-50"> Btissam</span>
                    <div>&copy; 2023 - <span class="text-black-50">e-commerce</span></div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-2">
                 <div class="links">
                  <div class="text-light ">
                  <h5 class="text-black">Links</h5>
                  <ul class="list-unstyled lh-lg">
                    <li class="text-black-50 ">Home</li>
                    <li class="text-black-50">Our Services</li>
                  </ul>
                  </div>
                 </div> 
                </div>
                <div class="col-md-6 col-lg-2">
                  <div class="links">
                   <div class="text-light ">
                   <h5 class="text-black">About</h5>
                   <ul class="list-unstyled lh-lg ">
                     <li class="text-black-50 ">Sign In</li>
                     <li class="text-black-50 ">Register</li>
                     <li class="text-black-50 ">Contact Us</li>
                   </ul>
                   </div>
                  </div> 
                 </div>
                 <div class="col-md-6 col-lg-4">
                    <h5 class="text-black"> Contact Us</h5>
                    <p class=" mb-4 mt-4 text-black-50"> Get in touch with us via mail phone.We are waiting for
                       your call or message</p>
                    <a href="#" class="btn rounded-pill main-btn bg-info text-black">btissamchaibi1912@gmail.com</a>
                  <ul class="list-unstyled d-flex mt-3 gap-3 ">
                   <li> <a class="d-block text-light" href="#">
                    <i class="fa-brands fa-facebook facebook"></i>
                   </a></li>
                   <li> <a class="d-block text-light" href="#">
                    <i class="fa-brands fa-twitter twitter"></i>
                   </a></li>
                   <li><a class="d-block text-light" href="#">
                    <i class="fa-brands fa-linkedin linkedin"></i>
                   </a></li>
                   <li><a class="d-block text-light" href="#">
                    <i class="fa-brands fa-youtube youtub"></i>
                   </a></li>
                  </ul> 
                  </div>
                 </div>
              </div>
            </div>
          </div>
        </section> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>