<!-- Start Navigation bar -->

<?php
include('include/header.php')
?>

<!-- End Navigation bar -->

<!-- Start background video-section -->

<div class="remove-vid-margin">
  <div class="video-conatiner">
    <video class="video" autoplay muted loop>
      <source src="Videos/main_video.mp4">
    </video>

    <div class="video-overlay"></div>

    <div class="video-content">
      <h1 class="my-content">Welcome to iLearning</h1>
      <small class="my-content">Leran and implement</small>
      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#registration">Get Started</button>
    </div>
  </div>
</div>

<!-- End background video-section -->

<!-- Start banner -->

<div class="container-fluid bg-danger banner">
  <div class="txt-banner">
    <i class="fa-solid fa-book-open"></i><span>100+ online courses</span>
  </div>
  <div class="txt-banner">
    <i class="fa-solid fa-user-group"></i><span>Expert Instructor</span>
  </div>
  <div class="txt-banner">
    <i class="fa-regular fa-keyboard"></i></i><span>Lifetime Access</span>
  </div>
  <div class="txt-banner">
    <i class="fa-solid fa-indian-rupee-sign"></i><span>Money Back gaurantee*</span>
  </div>
</div>

<!-- End banner -->

<!-- Start popular courses -->

<div class="courses">

  <h1 class="course-heading">Popular Courses</h1>
  <div class="courses-conatiner">

    <div class=" card-container">
      <div class="card-item">
        <img src="Images/html.jfif" class="card-image" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">HTML 5</h5>
        <p class="card-text">This course will teach you how to create a structure of websites.</p>
        <div class="price-buy">
          <a href="Pages/coursedetails.php" class="btn btn-primary">Enroll</a>
          <span>Price : <del>800</del> 600</span>
        </div>
      </div>
    </div>

    <div class="card-container">
      <div class="card-item">
        <img src="Images/css.jfif" class="card-image" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">CSS 3</h5>
        <p class="card-text">This course will teach you how to design a website.</p>
        <div class="price-buy">
          <a href="Pages/coursedetails.php" class="btn btn-primary">Enroll</a>
          <span>Price : <del>900</del> 700</span>
        </div>
      </div>
    </div>
    <div class="card-container">
      <div class="card-item">
        <img src="Images/javascript.jfif" class="card-image" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">JavaScript</h5>
        <p class="card-text">This course will teach you how to make website interactive.</p>
        <div class="price-buy">
          <a href="Pages/coursedetails.php" class="btn btn-primary">Enroll</a>
          <span>Price : <del>1100</del> 800</span>
        </div>
      </div>
    </div>
    <div class="card-container">
      <div class="card-item">
        <img src="Images/python.jfif" class="card-image" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">Python</h5>
        <p class="card-text">This website will teach you how to store website data into databases.</p>
        <div class="price-buy">
          <a href="Pages/coursedetails.php" class="btn btn-primary">Enroll</a>
          <span>Price : <del>1200</del> 999</span>
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-danger" style="margin:1rem;">View All Courses</button>
</div>

<hr>

<!-- End popular courses -->

<!-- Start Contact form -->

<?php

include('include/contact.php')

?>

<!-- End Contact from -->

<!-- Start feedback slider -->

<div class="feedback-container">

  <h1 style="color: whitesmoke; margin-bottom:1rem;">Student's Feedback</h1>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="feedback">
          <div class="feedback-item">
            <div class="feedback-text-content">
              <p>
                It's the details that make Dummy such a winner. By way of comparison, consider last summer's "My Big Fat Greek Wedding," in which each actor put a heartfelt spin on his or her one-joke character (the father who believes that Windex cures everything). Well, here's an entire movie built on nuggets like that.
              </p>
            </div>

            <div class="feedback-img-content">

              <div class="feedback-image">
                <img src="Images\prem.jpg" alt="">
              </div>
              <h4 class="feedbacker-name">Prem Singh</h4>
              <span class="feedbacker-role">Web Designer</span>

            </div>

          </div>

          <div class="feedback-item">
            <div class="feedback-text-content">
              <p>
                It's the details that make Dummy such a winner. By way of comparison, consider last summer's "My Big Fat Greek Wedding," in which each actor put a heartfelt spin on his or her one-joke character (the father who believes that Windex cures everything). Well, here's an entire movie built on nuggets like that.
              </p>
            </div>

            <div class="feedback-img-content">

              <div class="feedback-image">
                <img src="Images\punit.jpg" alt="">
              </div>
              <h4 class="feedbacker-name">Punit Sharma</h4>
              <span class="feedbacker-role">Web Developer</span>

            </div>

          </div>

          <div class="feedback-item">
            <div class="feedback-text-content">
              <p>
                It's the details that make Dummy such a winner. By way of comparison, consider last summer's "My Big Fat Greek Wedding," in which each actor put a heartfelt spin on his or her one-joke character (the father who believes that Windex cures everything). Well, here's an entire movie built on nuggets like that.
              </p>
            </div>

            <div class="feedback-img-content">

              <div class="feedback-image">
                <img src="Images\photo.jpeg" alt="">
              </div>
              <h4 class="feedbacker-name">Priyanshu</h4>
              <span class="feedbacker-role">Python Developer</span>

            </div>

          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="feedback">
          <div class="feedback-item">
            <div class="feedback-text-content">
              <p>
                It's the details that make Dummy such a winner. By way of comparison, consider last summer's "My Big Fat Greek Wedding," in which each actor put a heartfelt spin on his or her one-joke character (the father who believes that Windex cures everything). Well, here's an entire movie built on nuggets like that.
              </p>
            </div>

            <div class="feedback-img-content">

              <div class="feedback-image">
                <img src="Images\prem.jpg" alt="">
              </div>
              <h4 class="feedbacker-name">Prem Singh</h4>
              <span class="feedbacker-role">Web Designer</span>

            </div>

          </div>

          <div class="feedback-item">
            <div class="feedback-text-content">
              <p>
                It's the details that make Dummy such a winner. By way of comparison, consider last summer's "My Big Fat Greek Wedding," in which each actor put a heartfelt spin on his or her one-joke character (the father who believes that Windex cures everything). Well, here's an entire movie built on nuggets like that.
              </p>
            </div>

            <div class="feedback-img-content">

              <div class="feedback-image">
                <img src="Images\punit.jpg" alt="">
              </div>
              <h4 class="feedbacker-name">Punit Sharma</h4>
              <span class="feedbacker-role">Web Developer</span>

            </div>

          </div>

          <div class="feedback-item">
            <div class="feedback-text-content">
              <p>
                It's the details that make Dummy such a winner. By way of comparison, consider last summer's "My Big Fat Greek Wedding," in which each actor put a heartfelt spin on his or her one-joke character (the father who believes that Windex cures everything). Well, here's an entire movie built on nuggets like that.
              </p>
            </div>

            <div class="feedback-img-content">

              <div class="feedback-image">
                <img src="Images\photo.jpeg" alt="">
              </div>
              <h4 class="feedbacker-name">Priyanshu</h4>
              <span class="feedbacker-role">Python Developer</span>

            </div>

          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="feedback ">
          <div class="feedback-item">
            <div class="feedback-text-content">
              <p>
                It's the details that make Dummy such a winner. By way of comparison, consider last summer's "My Big Fat Greek Wedding," in which each actor put a heartfelt spin on his or her one-joke character (the father who believes that Windex cures everything). Well, here's an entire movie built on nuggets like that.
              </p>
            </div>

            <div class="feedback-img-content">

              <div class="feedback-image">
                <img src="Images\prem.jpg" alt="">
              </div>
              <h4 class="feedbacker-name">Prem Singh</h4>
              <span class="feedbacker-role">Web Designer</span>

            </div>

          </div>

          <div class="feedback-item">
            <div class="feedback-text-content">
              <p>
                It's the details that make Dummy such a winner. By way of comparison, consider last summer's "My Big Fat Greek Wedding," in which each actor put a heartfelt spin on his or her one-joke character (the father who believes that Windex cures everything). Well, here's an entire movie built on nuggets like that.
              </p>
            </div>

            <div class="feedback-img-content">

              <div class="feedback-image">
                <img src="Images\punit.jpg" alt="">
              </div>
              <h4 class="feedbacker-name">Punit Sharma</h4>
              <span class="feedbacker-role">Web Developer</span>

            </div>

          </div>

          <div class="feedback-item">
            <div class="feedback-text-content">
              <p>
                It's the details that make Dummy such a winner. By way of comparison, consider last summer's "My Big Fat Greek Wedding," in which each actor put a heartfelt spin on his or her one-joke character (the father who believes that Windex cures everything). Well, here's an entire movie built on nuggets like that.
              </p>
            </div>

            <div class="feedback-img-content">

              <div class="feedback-image">
                <img src="Images\photo.jpeg" alt="">
              </div>
              <h4 class="feedbacker-name">Priyanshu</h4>
              <span class="feedbacker-role">Python Developer</span>

            </div>

          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon backward" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>

<!-- End feedback slider -->

<!-- Start Social media link -->

<div class="container-fluid bg-danger banner">
  <div class="txt-banner">
    <a href=""><i class="fa-brands fa-facebook"></i><span>facebook</span></a>
  </div>
  <div class="txt-banner">
    <a href=""> <i class="fa-brands fa-twitter"></i></i><span>twitter</span></a>
  </div>
  <div class="txt-banner">
    <a href=""><i class="fa-brands fa-whatsapp"></i></i></i><span>whatsapp</span></a>
  </div>
  <div class="txt-banner">
    <a href=""> <i class="fa-brands fa-instagram"></i></i><span>instagram</span></a>
  </div>
</div>

<!-- End Social media link -->

<!--  Start Student Registration form -->

<?php
include('include/registration.php')
?>

<!-- End Student Registartion form -->

<!--  Start Student Login form -->

<?php
include('include/login.php')
?>

<!-- End Student Login form -->

<!--  Start Admin Login form -->

<?php
include('include/admin.php')
?>

<!-- End Admin Login form -->

<!-- Footer -->
<?php
include('include/footer.php')
?>

<!-- Footer -->