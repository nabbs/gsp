<div class="footer-widget-area bg-violet black-bg pb-58">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30">
                <div class="footer-logo">
                    <a href="/"><img src="/app/webroot/img/logo.png" height="65" alt=""></a>
                </div>
            </div>
<!--            <div class="col-md-12">-->
<!--                <div class="social-links mt-25 mb-80">-->
<!--                    <a href="#"><i class="fa fa-facebook-f"></i></a>-->
<!--                    <a href="#"><i class="fab fa-twitter"></i></a>-->
<!--                    <a href="#"><i class="fa fa-google-plus-g"></i></a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="single-footer-widget">
                    <h3 class="text-white text-uppercase mb-21">About Us</h3>
                    <p class="pb-19">Lorem must explain to you how all this mistaolt cing pleasure and praising ain
                        wasnad I will give you a complete pain was prexplain to you lorem</p>
                    <form action="#" id="mc-form" class="mc-form fix">
                        <div class="subscribe-form-footer">
                            <input id="footer_email" type="email" name="EMAIL" placeholder="Email for Newsletter">
                            <button id="mc-submit" type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre fix text-small">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 pl-80 col-xs-12">
                <div class="single-footer-widget">
                    <h3 class="text-white text-uppercase mb-28">POPULAR POST</h3>
                    <div class="footer-widget-content">
                        <h5 class="mb-8">Duplex Villa Design</h5>
                        <span class="mb-27 block">Lorem ipsum dolor sit amet, tur<br>acinglit sed do eius </span>
                    </div>
                    <p>
                        <a href="https://www.zoopla.co.uk/" target="_blank">
                            <img alt="Property information powered by Zoopla" height="54" src="https://www.zoopla.co.uk/static/images/mashery/powered-by-zoopla.png" style="border: 0pt none;" title="Property information powered by Zoopla" width="111">
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 hidden-md hidden-sm pl-80 col-xs-12">
                <div class="single-footer-widget">
                    <h3 class="text-white text-uppercase mb-17">QUICK LINK</h3>
                    <ul class="footer-list">
                        <li><a href="/search">Properties</a></li>
                        <li><a href="/blog">From Blog</a></li>
                        <? if (!empty($footer_articles)){
                            foreach ($footer_articles as $article) { ?>
                                <li><a href="/page/<? echo $article['Article']['url']; ?>"><? echo $article['Article']['title']; ?></a></li>
                            <? }
                        } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="single-footer-widget pull_right">
                    <h3 class="text-white text-uppercase mb-21">CONTACT US</h3>
                    <div class="footer-contact-info mb-24">
                        <span class="pl-40 block">256, 1st AVE, Manchester<br>
                                    	125 , Noth England</span>
                    </div>
                    <div class="footer-contact-info mb-24">
                        <span class="pl-40 block">Telephone : +013 445 678 155</span>
                    </div>
                    <div class="footer-contact-info">
<!--                        <img src="images/icons/f-globe.png" alt="">-->
                        <span class="pl-40 block">Email : info@example.com<br>
                                    	Web : www.example.com</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer-area bg-violet text-center pt-27 pb-32 border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-text">
                    <span class="block">Copyright© 2018 <a href="#">GoSearchProperty</a>. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    $(document).on('click', '#mc-submit', function (e) {
        e.preventDefault();
        var email = $('#footer_email').val();
        if(email != '' && validateEmail(email)) {
            $.ajax({
                url: '/pages/subscribe',
                type: 'post',
                contentType: "application/json",
                dataType: 'json',
                data: JSON.stringify({
                    'email': email
                }),
                success: function (result) {
                    if (result.status === 'ok') {
                        $('#mc-submit').html('<i class="fas fa-check"></i>');
                        $('#footer_email').val('Thank you for subscription');
                        window.setTimeout(function () {
                            $('#mc-submit').html('<i class="fas fa-paper-plane"></i>');
                            $('#footer_email').val('');
                        }, 2000);
                    } else if(result.status === 'exist'){
                        $('#mc-submit').html('<i class="fas fa-check"></i>');
                        $('#footer_email').val('Email already subscribed');
                        window.setTimeout(function () {
                            $('#mc-submit').html('<i class="fas fa-paper-plane"></i>');
                            $('#footer_email').val('');
                        }, 2000);
                    }
                },
                error: function (xhr, status, error) {

                }
            });
        } else {
            $('#mc-submit').html('<i class="fas fa-times"></i>');
            $('#footer_email').val('Please enter correct email');
            window.setTimeout(function () {
                $('#mc-submit').html('<i class="fas fa-paper-plane"></i>');
                $('#footer_email').val('');
            }, 2000);
        }
    });

    function validateEmail(email)
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
</script>