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
    <style>
      body {
        background-color: #f8f9fa;
      }
      .hero {
        background: url("https://source.unsplash.com/1600x900/?jungle") no-repeat center center;
        background-size: cover;
        height: 40vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-shadow: 2px 2px 4px #000;
      }
      .section-title {
        margin-top: 40px;
        margin-bottom: 20px;
      }
    </style>
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
        <li class="nav-item active">
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
    <!-- Hero Section -->
    <header class="hero">
      <h1>Chitwan National Park Tours</h1>
    </header>

    <!-- Main Content -->
    <div class="container my-5">
      <!-- Activities Overview -->
      <section id="activities">
        <h2 class="section-title text-center">Our Activities</h2>
        <div class="row">
          <!-- Jungle Walk Card -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="Assets/Images/11.jpg" class="card-img-top" alt="Jungle Walk" />
              <div class="card-body">
                <h5 class="card-title">Jungle Walk</h5>
                <p class="card-text">Immerse yourself in a peaceful walking safari through the heart of the jungle.</p>
                <a href="#jungle-walk" class="btn btn-dark">View Details</a>
              </div>
            </div>
          </div>
          <!-- Jeep Safari Card -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="Assets/Images/8.jpg" class="card-img-top" alt="Jeep Safari" />
              <div class="card-body">
                <h5 class="card-title">Jeep Safari</h5>
                <p class="card-text">Explore varied terrains and spot wildlife on an exciting full-day jeep adventure.</p>
                <a href="#jeep-safari" class="btn btn-dark">View Details</a>
              </div>
            </div>
          </div>
          <!-- Canoeing Card -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="Assets/Images/6.jpg" class="card-img-top" alt="Canoeing" />
              <div class="card-body">
                <h5 class="card-title">Canoeing</h5>
                <p class="card-text">Enjoy a serene ride along the Rapti River and get a close view of aquatic life.</p>
                <a href="#canoeing" class="btn btn-dark">View Details</a>
              </div>
            </div>
          </div>
          <!-- Bird Watching Card -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="Assets/Images/12.jpg" class="card-img-top" alt="Bird Watching" />
              <div class="card-body">
                <h5 class="card-title">Bird Watching</h5>
                <p class="card-text">Spot over 600 species of birds in their natural habitat.</p>
                <a href="#bird-watching" class="btn btn-dark">View Details</a>
              </div>
            </div>
          </div>
          <!-- Mission Tiger Tour Card -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="Assets/Images/14.jpg" class="card-img-top" alt="Mission Tiger Tour" />
              <div class="card-body">
                <h5 class="card-title">Mission Tiger Tour</h5>
                <p class="card-text">Join our expert guides to increase your chances of spotting tigers in the wild.</p>
                <a href="#mission-tiger" class="btn btn-dark">View Details</a>
              </div>
            </div>
          </div>
          <!-- Twenty Thousand Lake Tour Card -->
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="Assets/Images/18.jpg" class="card-img-top" alt="Lake Tour" />
              <div class="card-body">
                <h5 class="card-title">Twenty Thousand Lake Tour</h5>
                <p class="card-text">Explore an extensive oxbow lake system and its diverse ecosystems.</p>
                <a href="#lake-tour" class="btn btn-dark">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Jungle Walk Safari Section -->
      <section id="jungle-walk">
        <h2 class="section-title">Jungle Walk Safari</h2>
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">A Peaceful Exploration of the Wild</h5>
            <p>
              Experience Chitwan National Park like never before on a jungle walking safari. Unlike a jeep safari, this walking experience lets you immerse yourself in the natural sounds and scents of
              the jungle.
            </p>
            <h6>Duration:</h6>
            <ul>
              <li>Half Day: 6:30 AM - 10:30 AM or 1:00 PM - 5:00 PM</li>
              <li>Full Day: 6:30 AM - 5:00 PM</li>
              <li>Multi-Day: Up to 7 days</li>
            </ul>
            <h6>Wildlife & Habitat Highlights:</h6>
            <ul>
              <li>Sal Forests, Grasslands, Rivers & Lakes, Riverbanks</li>
              <li>Wildlife: One-Horned Rhinoceros, Wild Elephants, Tigers, Sloth Bears, Various Deer, Monkeys, Crocodiles</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Jeep Safari Section -->
      <section id="jeep-safari">
        <h2 class="section-title">Jeep Safari Tours</h2>
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Explore the Wild Heart of the Jungle</h5>
            <p>
              This full-day jeep safari covers approximately 90 km of varied terrain, from dense forests to open grasslands and winding rivers. Enjoy multiple stops for wildlife sightings including
              rhinoceros, elephants, and even tigers!
            </p>
            <h6>Duration:</h6>
            <p>6:30 AM - 5:00 PM</p>
            <h6>Wildlife Highlights:</h6>
            <ul>
              <li>Rhinoceros, Wild Elephants, Tigers, Sloth Bears, Wild Boars</li>
              <li>Four Species of Deer, Crocodiles, and Monkeys</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Canoeing Section -->
      <section id="canoeing">
        <h2 class="section-title">Canoeing</h2>
        <div class="card mb-4">
          <div class="card-body">
            <p>
              Embark on a canoe ride along the Rapti River within the park. Choose from 1-hour, 2-hour, or 3-hour trips and enjoy a close view of aquatic birds, crocodiles, and other riverine
              wildlife.
            </p>
          </div>
        </div>
      </section>

      <!-- Bird Watching Section -->
      <section id="bird-watching">
        <h2 class="section-title">Bird Watching</h2>
        <div class="card mb-4">
          <div class="card-body">
            <p>
              Chitwan National Park is a paradise for bird watchers and photographers. With over 600 recorded species, explore different habitats on foot, by jeep, or via canoe to catch glimpses of
              both residential and migratory birds.
            </p>
          </div>
        </div>
      </section>

      <!-- Mission Tiger Tour Section -->
      <section id="mission-tiger">
        <h2 class="section-title">Mission Tiger Tour</h2>
        <div class="card mb-4">
          <div class="card-body">
            <p>
              Join our special tour aimed at increasing your chances of spotting the elusive tiger. Depending on your preference, choose between a jungle walk (minimum 3 days) or a jeep safari (3
              days) – with expert naturalists guiding you every step of the way.
            </p>
          </div>
        </div>
      </section>

      <!-- Twenty Thousand Lake Tour Section -->
      <section id="lake-tour">
        <h2 class="section-title">Twenty Thousand Lake Tour</h2>
        <div class="card mb-4">
          <div class="card-body">
            <p>
              Visit the extensive oxbow lake system located outside the park boundary. Recognized as part of a World Ramsar Site, this area features a mix of dry and wetland vegetation, offering
              excellent opportunities for bird, tiger, and rhino sightings.
            </p>
          </div>
        </div>
      </section>
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
