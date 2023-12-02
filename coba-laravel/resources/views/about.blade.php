@extends('layouts.main')
@section('container')
<div class="jumbotron text-center">
    <h1>Company</h1> 
    <p>We specialize in blablabla</p> 
    <form>
      <div class="input-group">
        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
        <div class="input-group-btn">
          <button type="button" class="btn btn-danger">Subscribe</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>About Company Page</h2><br>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br><button class="btn btn-danger btn-lg">Get in Touch</button>
      </div>
      <div class="col-sm-4">
        {{-- <span class="glyphicon glyphicon-signal logo"></span> --}}
        <i class="bi bi-reception-4 logo"></i>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
        {{-- <span class="glyphicon glyphicon-globe logo slideanim"></span> --}}
        <i class="bi bi-globe-americas logo slideanim"></i>
      </div>
      <div class="col-sm-8">
        <h2>Our Values</h2><br>
        <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
  
  <!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <i class="bi bi-power logo-small"></i>
        <h4>POWER</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <i class="bi bi-heart-fill logo-small"></i>
        <h4>LOVE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <i class="bi bi-list-check logo-small"></i>
        <h4>JOB DONE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <i class="bi bi-shield-lock-fill logo-small"></i>
        <h4>SAFETY</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <i class="bi bi-calendar-check-fill logo-small"></i>
        <h4>UP TO DATE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <i class="bi bi-wrench logo-small"></i>
        <h4 style="color:#303030;">HARD WORK</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
  </div>

  <h2 class="text-center my-2 ">What our customers say</h2>

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner my-3 py-4">
        <!-- Wrapper for slides -->
      <div class="carousel-item active  my-3 py-4" data-bs-interval="4000">
        <div class="text-center my-4">
            <h4>"This company is the best. I am so happy with the result!"<br>
                <span><i>- Michael Roe, Vice President, Comment Box -</i></span>
                {{-- <address class="author">By <a rel="author">John Doe</a></address>  --}}
            </h4>
        </div>
      </div>
      <div class="carousel-item my-3 py-4" data-bs-interval="5000">
        <div class="text-center my-4">
            <h4>"One word... WOW!!"<br>
                <span><i>- John Doe, Salesman, Rep Inc - </i></span>
            </h4>
        </div>
      </div>
      <div class="carousel-item my-3 py-4">
        <div class="text-center my-4">
            <h4>"Could I... BE any more happy with this company?"<br>
                <span><i>- Chandler Bing, Actor, FriendsAlot -</i></span>
            </h4>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><i class="bi bi-geo-alt-fill"></i>  Semarang, ID</p>
        <p><i class="bi bi-telephone-fill"></i> +00 1515151515</p>
        <p><i class="bi bi-envelope-at-fill"></i> myemail@something.com</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group d-flex justify-content-end">
            <button class="btn btn-md btn-danger mb-4" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Image of location/map -->
<img src="/img/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <i class="bi bi-chevron-double-up logo-small"></i>
  </a>
  
</footer>

<script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
      
      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;
    
          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })
    </script>

{{-- <img src="img/295028974_1223774508435376_3747977503172709333_n.jpg" alt="gambar" class="rounded-circle shadow"> --}}
@endsection

