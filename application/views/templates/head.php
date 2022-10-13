<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title;?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Outfit:wght@700&display=swap" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/css/styles.css" rel="stylesheet">
  <!-- <link href="<?= base_url() ?>/assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
  <script src="<?= base_url() ?>/assets/jquery/jquery-3.6.0.min.js"></script>
  <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/css/styles.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script> -->
  <script src="<?= base_url() ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script>
    $(".option").click(function () {
      $(".option").removeClass("active");
      $(this).addClass("active");
    });

    $('#play-video').on('click', function (e) {
      e.preventDefault();
      $('#video-overlay').addClass('open');
      $("#video-overlay").append('<iframe width="1200" height="600" src="https://www.youtube.com/embed/JRSwAD51_LM" frameborder="0" allowfullscreen></iframe>');
    });

    $('.video-overlay, .video-overlay-close').on('click', function (e) {
      e.preventDefault();
      close_video();
    });

    $(document).keyup(function (e) {
      if (e.keyCode === 27) { close_video(); }
    });

    function close_video() {
      $('.video-overlay.open').removeClass('open').find('iframe').remove();
    };

  </script> -->
</head>

<body>