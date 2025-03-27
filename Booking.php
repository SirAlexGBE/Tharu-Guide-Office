<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Assets/CSS/Style.css" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <link rel="shortcut icon" href="Assets/Images/Favicon.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Chitwan Tharu Jungle Guide Office</title>
  </head>
  <body>
    <div style="padding-left: 20px">
      <a class="navbar-brand" href="Index.html" style="color: black">
        <img src="Assets/Images/Favicon.jpg" style="height: 100px" />
        Chitwan Tharu Jungle Guide Office
      </a>
      <div style="float: right; align-items: center; align-content: center; margin-right: 100px; padding-top: 40px; padding-right: 30px; font-size: larger">
        <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true" style="font-size: larger; color: rgb(0, 0, 0)"></i></a>
        &nbsp;
        <a href="https://www.Whatsapp.com"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size: larger; color: rgb(0, 0, 0)"></i></a>
        &nbsp;
        <a href="https://www.Instagram.com"><i class="fa fa-instagram" aria-hidden="true" style="font-size: larger; color: rgb(0, 0, 0)"></i></a>
        &nbsp;
        <a href="https://www.Youtube.com"><i class="fa fa-youtube" aria-hidden="true" style="font-size: larger; color: rgb(0, 0, 0)"></i></a>
        &nbsp;
      </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: black; justify-content: space-between; position: sticky; top: 0; z-index: 1000">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 120px">
        <li class="nav-item">
          <a class="nav-link" href="Index.php">Home</a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="About.php">About Us</a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Service.php">Activities</a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="Gallery.php">Photo Gallery</a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item ">
          <a class="nav-link" href="Contact.php">Contact Us</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0" style="margin-right: 120px">
        <a href="Booking.php" class="btn btn-outline-light">Book Now</a>
      </div>
    </nav>

    <!-- navbar end -->

    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-center bg-dark text-white">
          <h4>Book an Appointment</h4>
        </div>
        <div class="card-body">
          <form method="post">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required />
            </div>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required />
            </div>

            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" />
            </div>

            <div class="form-group">
              <label for="date">Select Date</label>
              <input type="date" class="form-control" id="date" name="date" required />
            </div>

            <div class="form-group">
              <label>Select Activities</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="jungle_walk" name="activities[]" value="Jungle Walk" />
                <label class="form-check-label" for="jungle_walk">Jungle Walk</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="jeep_safari" name="activities[]" value="Jeep Safari" />
                <label class="form-check-label" for="jeep_safari">Jeep Safari</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="canoeing" name="activities[]" value="Canoeing" />
                <label class="form-check-label" for="canoeing">Canoeing</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="bird_watching" name="activities[]" value="Bird Watching" />
                <label class="form-check-label" for="bird_watching">Bird Watching</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="mission_tiger" name="activities[]" value="Mission Tiger Tour" />
                <label class="form-check-label" for="mission_tiger">Mission Tiger Tour</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="lake_tour" name="activities[]" value="Twenty Thousand Lake Tour" />
                <label class="form-check-label" for="lake_tour">Twenty Thousand Lake Tour</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="cultural_tour" name="activities[]" value="Cultural Tour" />
                <label class="form-check-label" for="cultural_tour">Cultural Tour</label>
              </div>
            </div>

            <button type="submit" class="btn btn-dark btn-block" name="submit">Book Now</button>
          </form>

          <?php
          include 'admin/connection.php';

          if (isset($_POST['submit'])) {
              $a = mysqli_real_escape_string($conn, $_POST['name']);
              $b = mysqli_real_escape_string($conn, $_POST['email']);
              $c = mysqli_real_escape_string($conn, $_POST['phone']);
              $d = mysqli_real_escape_string($conn, $_POST['Date']);
              $e = isset($_POST['activities']) ? implode(", ", $_POST['activities']) : '';

              $query = "INSERT INTO bookings (Name, Email, Phone, Date, Activities) VALUES ('$a', '$b', '$c', '$d', '$e')";

              $run = mysqli_query($conn, $query);

              if ($run) {
                  echo "<script>alert('Booking Successful');</script>";
                  echo "<script>window.location.href='Booking.php';</script>";
              } else {
                  echo "<script>alert('Not Successful');</script>";
              }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- footer start -->
    <div class="container-fluid" style="background-color: rgb(0, 0, 0); color: #ffffff; padding: 30px 0px; margin-top: 10px">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Contact Details</h3>

            Chitwan Tharu Guide Office
            <br />
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            Ratnanagar, Chitwan
            <br />
            <i class="fa fa-envelope" aria-hidden="true"></i>
            info@Guide.chitwantharu.com.np
            <br />
            <i class="fa fa-phone" aria-hidden="true"></i>
            +977 9819228785
          </div>
          <div class="col-md-4">
            <h3>Google Maps</h3>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.6784920519135!2d84.5155453!3d27.5764085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994ef00570c785f%3A0xf9ccd836238cca83!2sChitwan%20Tharu%20Jungle%20Guide%20Office!5e1!3m2!1sen!2snp!4v1742893254983!5m2!1sen!2snp"
              width="300"
              height="250"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

          <div class="col-md-4">
            <h3>Affiliated with</h3>
            <p>
              <a href="https://www.chitwannationalpark.gov.np/">
                <img decoding="async" class="alignnone wp-image-114" src="Assets/Images/Chitwan-National-Park-logo-min-150x150.png" alt="Chitwan National Park" width="42" height="42"w "
                sizes="(max-width: 42px) 100vw, 42px" />
              </a>
              <a href="http://www.mrigakunja.org.np/">
                <img decoding="async" class="alignnone wp-image-118" src="Assets/Images/muc.png" alt="Mirgakunja User Committee" width="43" height="43" />
              </a>
              &nbsp;
              <a href="http://www.ratnanagarmun.np/en/">
                <img decoding="async" class="alignnone wp-image-113" src="Assets/Images/rastriya.png" alt="Local Government" width="44" height="37" sizes="(max-width: 44px) 100vw, 44px" />
                &nbsp;
              </a>

              <a href="https://ird.gov.np/">
                <img loading="lazy" decoding="async" class="alignnone wp-image-113" src="Assets/Images/muc.png" alt="Tax Office" width="41" height="34" sizes="auto, (max-width: 41px) 100vw, 41px" />
              </a>
              <a href="https://NTN.gov.np/">
                <img
                  loading="lazy"
                  decoding="async"
                  class="alignnone wp-image-113"
                  src="Assets/Images/tourism-board1-150x150.png"
                  alt="Tax Office"
                  width="41"
                  height="34"
                  sizes="auto, (max-width: 41px) 100vw, 41px"
                />
              </a>
            </p>
            <h3>We are in:</h3>
            <p>
              Trip Advisor
              <a href="https://www.tripadvisor.com">
                <img loading="lazy" decoding="async" class="alignnone wp-image-130" src="Assets/Images/Tripadvisor.png" alt="" width="227" height="128" sizes="auto, (max-width: 227px) 100vw, 227px" />
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- footer end -->
    © Copyright 2025 Chitwan Tharu Jungle Guide Office. All Rights Reserved.
  </body>
</html>
