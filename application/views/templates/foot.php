<footer class="bg-dark text-center text-lg-start text-white">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-4">
            <h4 class="text-center fw-bold">SIPRAMA CAKRAWALA</h4>
              <p class="text-center">Don't Limit Your Challenges,<br>
                Challenge Your Limits
              </p>
            </div>
            <div class="col-lg-4">
              <h4 class="text-center fw-bold">ADDRESS</h4>
              <p class="text-center">Jl. Andara Raya No.20, RT.2/RW.3, <br>
                Pangkalan Jati Baru Kec. Cinere, <br>
                Kota Depok, Jawa Barat, 16513</p>
            </div>
              <div class="col-lg-4">
                <h4 class="text-center fw-bold">CONTACT</h4>
                <ul class="list-group text-center" style="list-style: none;">
                  <li><i class="bi bi-telephone"></i>&nbsp;(021) 27813599</li>
                  <li><i class="bi bi-envelope"></i>&nbsp;info@spcakrawala.com</li>
              </ul>
              </div>
          </div>
        </div>
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright: SIPRAMA CAKRAWALA
        </div>
        <!-- Copyright -->
      </footer>
    
    </div>
  </div>
  <!-- SCROLLBAR END-->

  <!-- BOOTSTRAP -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script> -->
    <script>
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

    var num = 200; //number of pixels before modifying styles

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > num) {
            $('.menu').addClass('fixed');
        } else {
            $('.menu').removeClass('fixed');
        }
    });

  </script>

</body>

</html>