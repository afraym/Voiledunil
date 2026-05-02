   <style>
     .site-footer {
       background: linear-gradient(135deg, #1d2430 0%, #11161f 100%);
       color: rgba(255, 255, 255, 0.82);
       position: relative;
       overflow: hidden;
     }
     .site-footer::before {
       content: '';
       position: absolute;
       inset: 0;
       background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
       background-size: 22px 22px;
       opacity: 0.35;
       pointer-events: none;
     }
     .site-footer .container {
       position: relative;
       z-index: 1;
     }
     .footer-brand {
       font-size: 24px;
       font-weight: 700;
       letter-spacing: 0.5px;
       color: #fff;
       margin-bottom: 12px;
     }
     .footer-description {
       max-width: 420px;
       line-height: 1.7;
       color: rgba(255,255,255,0.72);
     }
     .footer-heading {
       font-size: 13px;
       font-weight: 700;
       letter-spacing: 1.4px;
       text-transform: uppercase;
       color: rgba(255,255,255,0.92);
       margin-bottom: 16px;
     }
     .footer-links {
       list-style: none;
       padding: 0;
       margin: 0;
     }
     .footer-links li {
       margin-bottom: 10px;
     }
     .footer-links a {
       color: rgba(255,255,255,0.72);
     }
     .footer-links a:hover {
       color: #f59b4a;
     }
     .footer-badge {
       display: inline-flex;
       align-items: center;
       gap: 10px;
       padding: 10px 16px;
       border-radius: 999px;
       background: rgba(255,255,255,0.06);
       margin-top: 18px;
       color: #fff;
     }
     .footer-social a {
       display: inline-flex;
       align-items: center;
       justify-content: center;
       width: 38px;
       height: 38px;
       border-radius: 50%;
       margin-right: 8px;
       background: rgba(255,255,255,0.08);
       color: #fff;
       transition: transform 0.2s ease, background 0.2s ease;
     }
     .footer-social a:hover {
       transform: translateY(-2px);
       background: #f59b4a;
     }
     .footer-meta {
       border-top: 1px solid rgba(255,255,255,0.08);
       margin-top: 34px;
       padding-top: 18px;
       color: rgba(255,255,255,0.62);
       font-size: 14px;
     }
   </style>

    <footer class="site-footer pt-5 pb-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 mb-4">
            <div class="footer-brand">Discover Egypt</div>
            <p class="footer-description">Plan trips, explore destinations, and discover the best of Egypt from ancient landmarks to beaches, cruises, and desert escapes.</p>
            <div class="footer-badge">
              <i class="fa fa-map-marker"></i>
              <span>Curated travel experiences across Egypt</span>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 mb-4">
            <div class="footer-heading">Explore</div>
            <ul class="footer-links">
              <li><a href="#">Ancient Egypt</a></li>
              <li><a href="#">Beaches</a></li>
              <li><a href="#">Cruises</a></li>
              <li><a href="#">Oases & Deserts</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 mb-4">
            <div class="footer-heading">Quick Links</div>
            <ul class="footer-links">
              <li><a href="#">Trips</a></li>
              <li><a href="#">Hotels</a></li>
              <li><a href="#">To Do</a></li>
              <li><a href="#">Events</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="footer-heading">Contact</div>
            <ul class="footer-links">
              <li><i class="fa fa-envelope mr-2"></i> hello@voiledunil.com</li>
              <li><i class="fa fa-phone mr-2"></i> +20 012 0094 9266</li>
              <li><i class="fa fa-clock-o mr-2"></i> Daily support 9:00 - 18:00</li>
            </ul>
            <div class="footer-social mt-3">
              <a href="https://www.facebook.com/voiledunil" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/voiledunil/" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/voiledunil" aria-label="YouTube"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>

        <div class="row footer-meta align-items-center">
          <div class="col-md-6 text-md-left text-center mb-2 mb-md-0">
            © <script>document.write(new Date().getFullYear())</script> Voile Du Nil. All rights reserved.
          </div>
          <div class="col-md-6 text-md-right text-center">
            Made with <i class="fa fa-heart heart"></i> for Egypt travel inspiration.
          </div>
        </div>
      </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./assets/js/plugins/moment.min.js"></script>
    <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script>
      $(document).ready(function() {

        if ($("#datetimepicker").length != 0) {
          $('#datetimepicker').datetimepicker({
            icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
            }
          });
        }

        // Init datepickers for Hotels tab
        if ($("#datetimepickerFrom").length != 0) {
          $('#datetimepickerFrom').datetimepicker({
            icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
            }
          });
        }
        if ($("#datetimepickerTo").length != 0) {
          $('#datetimepickerTo').datetimepicker({
            icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
            }
          });
        }

        // Tab switching for search widget
        $('.tab-link').on('click', function(e) {
          e.preventDefault();
          var tabName = $(this).data('tab');
          
          // Hide all tabs
          $('.tab-content').removeClass('active');
          // Show selected tab
          $('#' + tabName).addClass('active');
          
          // Update active nav link
          $('.tab-link').parent().find('.nav-link').removeClass('active');
          $(this).addClass('active');
        });

        $('.city-btn').on('click', function() {
          var cityName = $(this).data('city') || $(this).text().trim();
          $('#hotelCitySearch').val(cityName);
          $('.city-btn').removeClass('is-active');
          $(this).addClass('is-active');
        });

        function scrollToDownload() {

          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
      });
    </script>
</body>

</html>
