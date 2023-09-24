<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="Css/style.CSS"> <!-- If extension .css not work then use .CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/a6998f0760.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

</head>

<body>

  <!-- Start Navigation bar -->

  <nav class="navbar navbar-expand-sm navbar-dark fixed-top px-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">iLearning</a>
      <span style="color:white; opacity:0.8">learn and implement</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Login</a></li>

        </ul>
      </div>

    </div>
  </nav>

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
        <button class="btn btn-danger">Get Started</button>
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
            <a href="#" class="btn btn-primary">Buy</a>
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
            <a href="#" class="btn btn-primary">Buy</a>
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
            <a href="#" class="btn btn-primary">Buy</a>
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
            <a href="#" class="btn btn-primary">Buy</a>
            <span>Price : <del>1200</del> 999</span>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-danger" style="margin:1rem;">View All Courses</button>
  </div>

  <!-- End popular courses -->

  <!-- Start Contact form -->

  <div class="contact-container">
    <h1>Contact</h1>
    <div class="form-conatiner">
      <form class="row g-3 form">
        <div class="col" class="form-input">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control " id="" required>
        </div>
        <div class="col">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control" id="" required>
        </div>
        <div class="col">
          <label for="" class="form-label">Mobile</label>
          <input type="text" class="form-control" id="" required>
        </div>
        <button class="btn btn-danger">Submit</button>
      </form>
      <div class="contact-banner">
        <address>
          +6147664673 <br>
          Visit us at:<br>
          Example.com<br>
          Box 564, Disneyland<br>
          USA
        </address>
      </div>
    </div>
  </div>

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

  <!-- Footer -->
  <footer>
    <div class="about">
      <h3>About us</h3>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    </div>

    <div class="category">
      <h3>Category</h3>
      <p>Web Designer</p>
      <p>Web Development</p>
      <p>Python Developer </p>
      <p>FrontEnd Developer </p>
    </div>

    <div class="contact">
      <h3>Contact us</h3>
      <address>
        +6147664673 <br>
        Visit us at:<br>
        Example.com<br>
        Box 564, Disneyland<br>
        USA
      </address>
    </div>
  </footer>

  <!-- Footer -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>