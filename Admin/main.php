<?php
session_start();
if(!isset($_SESSION['username']))
{
  header("location:index.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- nav bar start -->
    <nav
      class="navbar navbar-expand-md navbar-dark"
      style="background-color: navy"
    >
      <a class="navbar-brand" href="main.php"
        ><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a
      >
      <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"
      ></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
        <form class="form-inline my-2 my-lg-0">
          <i class="fa fa-user-circle" aria-hidden="true" style="color: white">
            &nbsp; <?php echo $_SESSION['username'] ?></i
          >
          &nbsp; &nbsp;
          <a href="logout.php">
            <i class="fa fa-sign-out" aria-hidden="true" style="color: white">
              Logout
            </i></a
          >
        </form>
      </div>
    </nav>
    <!-- nav BAR end -->
    <!-- Content Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-3">
         
        
          <a
            href="Add-photo.php"
            class="btn btn-primary btn-block"
            style="margin-top: 20px"
          >
            <i
              class="fa fa-camera"
              aria-hidden="true"
              style="font-size: medium"
            ></i>
            &nbsp; Add-photo</a
          >
          <a
            href="reservation.php"
            class="btn btn-primary btn-block"
            style="margin-top: 20px"
          >
            <i
              class="fa fa-book"
              aria-hidden="true"
              style="font-size: medium"
            ></i>
            &nbsp; Reservation</a
          >
          <a
            href="users.php"
            class="btn btn-primary btn-block"
            style="margin-top: 20px"
          >
            <i
              class="fa fa-user"
              aria-hidden="true"
              style="font-size: medium"
            ></i>
            &nbsp; Users</a
          >
        </div>
        <div class="col-md-9">
          <h2 class="display-4 text-center" style="margin-top: 20px">
            Welcome
          </h2>
          <?php include 'count_data.php'; // Include the PHP script to fetch data ?>
<div class="row">
    <div class="col-md-4 bg-dark text-light text-center" style="padding: 20px">
        <i class="fa fa-user-circle" aria-hidden="true"> Total Users: <br> <br> <?php echo $total_users; ?></i>
    </div>

    <div class="col-md-4 bg-success text-light text-center" style="padding: 20px">
        <i class="fa fa-book" aria-hidden="true"> Total Bookings: <br> <br> <?php echo $total_bookings; ?></i>
    </div>
        </div>
      </div>
    </div>

    <!-- content end -->
  </body>
</html>

<?php 
}
?>