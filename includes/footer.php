<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Kirtipur-8, Lalitpur</li>
                        <li>Phone: 9818454785</li>
                        <li>Email: bakas@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | Bakas </a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="btn btn-primary scrollTo" href="#top"><i class="fa fa-arrow-up"></i></a>

<!-- Footer Section End -->
<!-- Js Plugins -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos == currentScrollPos) {
        document.getElementById("top-nav").style.top = "-100px";
    }
    if (prevScrollpos > currentScrollPos && prevScrollpos > 100) {

        // document.querySelector(".humberger__menu__logo").style.visibility = "hidden";
        document.getElementById("top-nav").style.top = "0";
    } else {
        // document.querySelector(".humberger__menu__logo").style.visibility = "visible";

        document.getElementById("top-nav").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}

$("a[href='#top']").click(function() {
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
    return false;
});
// $('#btn-cross-mobile').click(function(){
//     $('div').removeAttr('.show__humberger__menu__wrapper');
// });
$('.header__menu__dropdown').hide();
$('.mobile__list__item').on('click', function() {
    $('.header__menu__dropdown').toggle('slow');
})
$('.subheader__menu__dropdown').hide();
$('.mobile__sublist__item').on('click', function() {
    $('.subheader__menu__dropdown').toggle('slow');
})
$('.header__menu__dropdown1').hide();
$('.mobile__list__item1').on('click', function() {
    $('.header__menu__dropdown1').toggle('slow');
})

// hide navlists 
$('.list1').hide();
$('.sublist1').hide();
$('.list2').hide();
// toggle nav lists 
$('.id1').on('click', function() {
    $('.list1').toggle('slow');
    $('.sublist1').hide('slow');
    $('.list2').hide('slow');
});
$('.subid1').on('click', function() {
    $('.sublist1').toggle('slow');
});
$('.id2').on('click', function() {
    $('.list2').toggle('slow');
    $('.list1').hide('slow');
    $('.sublist1').hide('slow');

});
// set height of sublists 
var sideH = $('.side__ul').height();
$('.list1').css('height', sideH);
$('.sublist1').css('height', sideH);
$('.list2').css('height', sideH);
</script>

</body>

</html>