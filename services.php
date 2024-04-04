<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hyundai</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/styles.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php">HYUNDAI</a></h1>
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="services.php" style="color: #62cfea;">Services</a></li>
          <li><a href="price.php">Price</a></li>
          <li class="dropdown"><a href="about.php"><span>About</span> <i class="bx bx-chevron-down"></i></a>
          <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="visi-misi.php">Vission & Mission</a></li>
              <li><a href="structure.php">Structure</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bx bx-menu mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

      <!-- ======= Cta Section ======= -->
      <section class="cta">
      <div class="container">

      <div class="row">
        <div class="col text-center text-lg-left">
          <h3>We've served more than anyone else<span> -Booking Service- </span> Now!</h3>
        </div>
      </div>

      </div>
    </section><!-- End Cta Section -->


    <!------------------------ Form ------------------------>
    <div class="container container-fluid pt-4 pb-4 px-5">
        <h2 class="text-center">FORM BOOKING SERVICE</h2>
    <form class="row g-3 mt-3" id="bookingForm" action="proses.php" method="POST">
        <div class="col-md-6">
            <label for="inputFullName" class="form-label">Full Name</label>
            <input name="fullName" type="text" class="form-control" id="inputFullName" placeholder="Enter your full name" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter your email" required>
        </div>
        <div class="col-12">
            <label for="inputPhone" class="form-label">Phone Number</label>
            <input name="phoneNumber" type="tel" class="form-control" id="inputPhone" placeholder="Enter your phone number" required>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Enter your address" required>
        </div>
        <div class="col-md-6">
            <label for="inputCarModel" class="form-label">Police Number</label>
            <input name="policeNumber" type="text" class="form-control" id="inputCarModel" placeholder="Police Number" required>
        </div>
        <div class="col-md-6">
            <label for="inputCarYear" class="form-label">Car Year</label>
            <select id="inputCarYear" class="form-select" name="carYear">
                <option selected disabled>Choose...</option>
                <option>2024</option>
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputServiceDate" class="form-label">Service Date</label>
            <input type="date" class="form-control" id="inputServiceDate" name="serviceDate">
        </div>
        <div class="col-md-6">
            <label for="inputServiceType" class="form-label">Service Type</label>
            <select id="inputServiceType" class="form-select" name="serviceType">
                <option selected disabled>Choose...</option>
                <option>Oil Change</option>
                <option>Tire Rotation</option>
                <option>Brake Inspection</option>
            </select>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck" name="agree">
                    I agree to the terms and conditions
                </label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" value="creditCard" name="paymentMethod">
                <label class="form-check-label" for="creditCard">
                    Credit Card
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="cash" value="cash">
                <label class="form-check-label" for="cash">
                    Cash
                </label>
            </div>
        </div>
        <div class="col-12">
            <input type="submit" class="btn btn-primary" id="submitBtn" name="book_submit" value="Book Now">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Success</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your booking service has been successfully submitted.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
        </div>
    </form>
</div>


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>HYUNDAI</h3>
            <p>
            Jl. A. Wahab Syahranie No.102,<br>
              Kota Samarinda<br>
              Kalimantan Timur 75131 <br><br>
              <strong>Whatsapp:</strong> 021-31182572<br>
              <strong>Email:</strong> hyundai@email.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Get the latest news and exciting offers delivered directly to your email.</p>
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your email" style="color: black;"><input type="submit" value="Subscribe" style="background: grey">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Hyundai</span></strong>. All Rights Reserved
        </div>

      </div>
    </div>
  </footer><!-- End Footer -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#submitBtn').click(function() {
              if (validateForm()) {
                  $('#exampleModal').modal('show');
                  $('#exampleModal').on('hidden.bs.modal', function() {
                      $('#bookingForm')[0].reset();
                  });
              }
          });
      });

      function validateForm() {
          var formInputs = $('#bookingForm input, #bookingForm select');
          for (var i = 0; i < formInputs.length; i++) {
              if ($(formInputs[i]).val() === '' || $(formInputs[i]).val() === null) {
                  alert('Please fill in all fields.');
                  return false;
              }
          }
          alert('Your booking service has been successfully submitted.');
      }

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Main JS File -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>