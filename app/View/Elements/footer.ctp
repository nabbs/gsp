<footer class="footer">
  <div class="footer-overlay">
    <div class="container">
      <div class="row subscribe">
        <form action="#" id="mc-form" class="mc-form fix">
          <div class="col-md-5 newsletter"> <span>Subscribe to our newsletter</span> </div>
          <div class="col-md-5 subscribe-email">
            <input type="email" placeholder="Email for Newsletter" id="footer_email" name="EMAIL">
          </div>
          <div class="col-md-2">            
            <!-- button id="mc-submit" type="submit"><i class="fas fa-paper-plane"></i></button -->            
            <input id="mc-submit" type="submit" value="Subscribe">
          </div>
        </form>
        <div class="mailchimp-alerts text-centre fix text-small">
          <div class="mailchimp-submitting"></div>
          <div class="mailchimp-success"></div>
          <div class="mailchimp-error"></div>
        </div>
      </div>
      <div class="footer-middle">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-widget about-us">
              <h3>About us</h3>
              <p>Proin sed accumsan justo Morbi nec convallis dui in rhoncus sem Duis nec ipsum sagittis mattis turpis quis, luctus urna Fusce gravida dictum lectus ut interdum.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-widget twitter-widget">
              <h3>Site Links</h3>
              <ul class="footer-list">
            <!--li><a href="/search">Properties</a></li>
            <li><a href="/blog">From Blog</a></li-->
            <? if (!empty($footer_articles)){

               foreach ($footer_articles as $article) { ?>
            <li><a href="/page/<? echo $article['Article']['url']; ?>"><? echo $article['Article']['title']; ?></a></li>
            <? }

                        } ?>
          </ul>
            </div>
          </div>
          <div class="col-md-3  col-sm-6">
            <div class="footer-widget latest-news">
              <h3>From the Blog</h3>
              <p class="pic1"><img src="../img/post1.png" alt="" class="img-responsive pull-left"> <a href="#">sed do eiusmod tem incididunt ut labore</a> <span>Jan 9, 2017</span></p>
              <p class="pic2"><img src="../img/post2.png" alt="" class="img-responsive pull-left"> <a href="#">sed do eiusmod tem incididunt ut labore</a> <span>Jan 9, 2017</span></p>
              <p class="pic3"><img src="../img/post3.png" alt="" class="img-responsive pull-left"> <a href="#">sed do eiusmod tem incididunt ut labore</a> <span>Jan 9, 2017</span></p>
            </div>
          </div>
          <!--div class="col-md-3 col-sm-6">
            <div class="footer-widget contact-info">
              <h3>Contact Info</h3>
              <div class="contact-info">
                <p class="clearfix"> <span class="contact-icon pull-left"><i class="fa fa-map-marker fa-2x"></i></span> <span class="contact-details">777 seventh avenue,Downtown New York,NY 01234</span> </p>
                <p class="clearfix"> <span class="contact-icon pull-left"><i class="fa fa-envelope fa-2x"></i></span> <span class="contact-details">email@yourdomain.com</span> </p>
                <p class="clearfix"> <span class="contact-icon pull-left"><i class="fa fa-phone fa-2x"></i></span> <span class="contact-details">0123-456-7890</span> </p>
                <p class="clearfix"> <span class="contact-icon pull-left"><i class="fa fa-globe fa-2x"></i></span> <span class="contact-details">www.yourwebsite.com</span> </p>
              </div>
            </div>
          </div -->
        </div>
      </div>
    </div>
    <section class="footer-below">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-10 copy-right">
            <p>Copyright © 2018 <a href="http://www.gosearchproperty.com/">GoSearchProperty</a> All rights reserved</p>
          </div>
          <div class="col-md-2 col-sm-2 social-widget-links">
            <ul class="list-unstyled list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
          </div>
        </div>
      </div>
    </section>
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