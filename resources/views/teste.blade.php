<head>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='{{asset('css/teste.css')}}' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script>
    $(document).ready(function() {

      $(window).scroll(function() {

        var height = $('.first-container').height();
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= height - 40) {
          $('.nav-container').addClass('solid-nav');
        } else {
          $('.nav-container').removeClass('solid-nav');
        }

      });
    });
  </script>
  <div class="first-container">
    <div class="nav-container">
      <div class="nav-row">
        <div class="nav-logo">
          <a href="#">
            Transparent to Solid Nav Row
          </a>
        </div>
        <div class="nav-controls">
          <a href="#">Item One</a>
          <a href="#">Item Two</a>
          <a href="#">Item Three</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h1>
        Fixed &amp; Transparent Nav
      </h1>
      <p>
        The man in black fled across the desert and the gunslinger followed.
      </p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h1>
        Section
      </h1>
      <p>
        The man in black fled across the desert and the gunslinger followed.
      </p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h1>
        Section
      </h1>
      <p>
        The man in black fled across the desert and the gunslinger followed.
      </p>
    </div>
  </div>
</body>