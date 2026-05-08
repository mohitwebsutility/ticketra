<!-- FOOTER -->
<footer class="footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="widget widget-about">
                        <h4 class="widget-title">About Us</h4>
                        <p>At Ticketra, we simplify the way you discover and book events. From concerts and festivals to conferences and live shows, our platform connects you with unforgettable experiences. With seamless ticket booking, secure payments, and real-time updates.</p>
                        <address>
                            <div><i class="fa fa-phone"></i>+91 89284 18899</div>
                            <div><i class="fa fa-envelope"></i> <a href="mailto:admin@ticketra.com">admin@ticketra.com</a></div>
                        </address>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-categories">
                        <h4 class="widget-title">Popular searches</h4>
                        <ul>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Solutions</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Use Cases</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-twitter">
                        <h4 class="widget-title">Recent Tweets</h4>
                        <ul>
                            <li>
                                <a href="#">@isamercan</a> Cupcake chocolate cake sweet roll. Gummies macaroon biscuit cupcake candy dragée. <a href="#">#Conference about 2 hours ago</a>
                            </li>
                            <li>
                                <a href="#">@isamercan</a> Cupcake chocolate cake sweet roll. Gummies macaroon biscuit cupcake candy dragée. <a href="#">#Conference about 2 hours ago</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-flickr-feed">
                        <h4 class="widget-title"><span>Instagram Photos</span></h4>
                        <ul>
                            <li><a href="#"><img src="assets/img/preview/sidebar-1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/preview/sidebar-2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/preview/sidebar-3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/preview/sidebar-4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/preview/sidebar-5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="assets/img/preview/sidebar-6.jpg" alt=""></a></li>
                            <!--li><a href="#"><img src="assets/img/preview/sidebar-7.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/preview/sidebar-8.jpg" alt=""></a></li-->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-meta footer-meta-alt">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ul class="footer-menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Developers</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li>All Rights Reserved</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- /FOOTER -->

<div class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /Wrap all content -->

<!-- JS Global -->

<!--[if lt IE 9]><script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
<!--[if gte IE 9]><!-->
<script src="assets/plugins/jquery/jquery-2.1.1.min.js"></script><!--<![endif]-->
<script src="assets/plugins/modernizr.custom.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/plugins/superfish/js/superfish.js"></script>
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/placeholdem.min.js"></script>
<script src="assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>
<script src="assets/plugins/smooth-scrollbar.min.js"></script>

<!-- JS Page Level -->
<script src="assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/waypoints/waypoints.min.js"></script>
<script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
<script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<script src="assets/js/theme-ajax-mail.js"></script>
<script src="assets/js/theme.js"></script>
<script src="assets/js/custom.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/plugins/jquery.cookie.js"></script>
<!-- <script src="assets/js/theme-config.js"></script> -->
<!--<![endif]-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
<script src="assets/js/script.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        theme.init();
        theme.initMainSlider();
        theme.initCountDown();
        theme.initPartnerSlider();
        theme.initTestimonials();
        theme.initGoogleMap();
    });
    jQuery(window).load(function() {
        theme.initAnimation();
    });

    jQuery(window).load(function() {
        jQuery('body').scrollspy({
            offset: 100,
            target: '.navigation'
        });
    });
    jQuery(window).load(function() {
        jQuery('body').scrollspy('refresh');
    });
    jQuery(window).resize(function() {
        jQuery('body').scrollspy('refresh');
    });

    jQuery(document).ready(function() {
        theme.onResize();
    });
    jQuery(window).load(function() {
        theme.onResize();
    });
    jQuery(window).resize(function() {
        theme.onResize();
    });

    jQuery(window).load(function() {
        if (location.hash != '') {
            var hash = '#' + window.location.hash.substr(1);
            if (hash.length) {
                jQuery('html,body').delay(0).animate({
                    scrollTop: jQuery(hash).offset().top - 44 + 'px'
                }, {
                    duration: 1200,
                    easing: "easeInOutExpo"
                });
            }
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const items = document.querySelectorAll(".accordion-item");
        const slides = document.querySelectorAll(".card-slide");

        let current = 0;

        function updateSlider(index) {

            if (index >= slides.length) return;

            slides.forEach(slide => {
                slide.classList.remove("active", "next", "prev");
            });

            current = index;

            slides[current].classList.add("active");
            slides[(current + 1) % slides.length].classList.add("next");
            slides[(current - 1 + slides.length) % slides.length].classList.add("prev");
        }

        // CLICK FROM ACCORDION
        items.forEach((item, index) => {
            item.addEventListener("click", () => {

                items.forEach(i => i.classList.remove("active"));
                item.classList.add("active");

                updateSlider(index);
            });
        });

        // ✅ CLICK FROM SLIDES (ADDED)
        slides.forEach((slide, index) => {
            slide.addEventListener("click", () => {

                // update accordion
                items.forEach(i => i.classList.remove("active"));
                if (items[index]) items[index].classList.add("active");

                // update slider
                updateSlider(index);
            });
        });

        // INITIAL LOAD
        updateSlider(0);

    });
</script>
<script>
    const slides = document.querySelectorAll('.slide');
    const miniSlides = document.querySelectorAll('.mini-slide');
    let index = 0;

    function showSlide(i) {
        slides.forEach(s => s.classList.remove('active'));
        miniSlides.forEach(m => m.classList.remove('active'));

        slides[i].classList.add('active');
        miniSlides[i].classList.add('active');

        index = i;
    }

    // Auto slide
    setInterval(() => {
        index = (index + 1) % slides.length;
        showSlide(index);
    }, 5000);

    // Click mini slider
    miniSlides.forEach((mini, i) => {
        mini.addEventListener('click', () => {
            showSlide(i);
        });
    });
</script>

</body>

</html>