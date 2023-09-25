<!-- Start Navigation bar -->

<?php
include('../include/header.php')
?>

<!-- End Navigation bar -->

<!-- Start background image -->

<!-- End background image -->

<div class="courses-page-back-image">
    <img src="../Images/books.jpeg" alt="" style="width: 100%;height:300px;object-fit:cover;">
</div>

<!-- Start Contact form -->

<!-- Start course detail form -->

<div class="course-detail">
    <div class="course-detail-about">
        <div class="course-detail-about-img">
            <img src="../Images/python.jfif" alt="">
        </div>
        <div>
            <h4>Course Name : Python</h4>
            <p>Description : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, aspernatur a deserunt ea accusantium saepe voluptatibus natus impedit ad rerum temporibus dolorem quibusdam distinctio voluptas corporis quam modi, ut aliquid?</p>
            <p>Duration : 3 Houres</p>
            <div class="price">
                <p>Price: <del>1000 </del> 788</p>
                <a href="" class="btn btn-primary">Buy now</a>
            </div>
        </div>
    </div>
    <div class="course-detail-content">
        <table class="table table-bordered table-hover">
            <tr>
                <th>Lesson No.</th>
                <th>Lesson Name</th>
            </tr>
            <tr>
                <th>1</th>
                <td>Intrdoduction to python</td>
            </tr>
            <tr>
                <th>2</th>
                <td>Basics of python</td>
            </tr>
        </table>
    </div>
</div>

<!-- End course detail form -->

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