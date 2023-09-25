<!-- Start Navigation bar -->

<?php
include('../include/header.php')
?>

<!-- End Navigation bar -->

<!-- Start background image -->

<!-- End background image -->

<div class="courses-page-back-image">
    <img src="../Images/books.jpeg" alt="" style="width: 100%;height:600px;object-fit:cover;">
</div>

<!-- Start Contact form -->

<!-- Start popular courses -->

<div class="courses">

    <h1 class="course-heading">All Courses</h1>
    <div class="courses-conatiner">

        <div class=" card-container">
            <div class="card-item">
                <img src="../Images/html.jfif" class="card-image" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">HTML 5</h5>
                <p class="card-text">This course will teach you how to create a structure of websites.</p>
                <div class="price-buy">
                    <a href="coursedetails.php" class="btn btn-primary">Enroll</a>
                    <span>Price : <del>800</del> 600</span>
                </div>
            </div>
        </div>

        <div class="card-container">
            <div class="card-item">
                <img src="../Images/css.jfif" class="card-image" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">CSS 3</h5>
                <p class="card-text">This course will teach you how to design a website.</p>
                <div class="price-buy">
                    <a href="coursedetails.php" class="btn btn-primary">Enroll</a>
                    <span>Price : <del>900</del> 700</span>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card-item">
                <img src="../Images/javascript.jfif" class="card-image" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">JavaScript</h5>
                <p class="card-text">This course will teach you how to make website interactive.</p>
                <div class="price-buy">
                    <a href="coursedetails.php" class="btn btn-primary">Enroll</a>
                    <span>Price : <del>1100</del> 800</span>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card-item">
                <img src="../Images/python.jfif" class="card-image" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Python</h5>
                <p class="card-text">This website will teach you how to store website data into databases.</p>
                <div class="price-buy">
                    <a href="coursedetails.php" class="btn btn-primary">Enroll</a>
                    <span>Price : <del>1200</del> 999</span>
                </div>
            </div>
        </div>
    </div>

</div>

<hr>

<!-- End popular courses -->

<?php

include('../include/contact.php')

?>

<!-- End Contact from -->

<!--  Start Student Registration form -->

<?php
include('../include/registration.php')
?>

<!-- End Student Registartion form -->

<!--  Start Student Login form -->

<?php
include('../include/login.php')
?>

<!-- End Student Login form -->

<!--  Start Admin Login form -->

<?php
include('../include/admin.php')
?>

<!-- End Admin Login form -->

<!-- Footer -->
<?php
include('../include/footer.php')
?>

<!-- Footer -->