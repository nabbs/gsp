<div class="blog-area pt-120 pb-115 blog-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="blog-details">
                    <div class="blog-image box-hover block">
                        <img src="/app/webroot/img/blog/<? echo $record['Blog']['id'] .'/large_'. $record['Blog']['photo']; ?>" alt="">
<!--                        <span class="blog-text block bg-lemon pt-6">10 <span class="block pt-2 ">OCT</span></span>-->
                    </div>
                    <div class="single-blog-text">
                        <div class="blog-post-info bg-violet pl-20 pr-20 pt-17 pb-17">
                            <span class="pr-5"><i class="fa fa-user mr-12"></i>Admin</span>
                          <span class="pull-right"><? echo $record['Blog']['date']; ?></span>
                            <!-- span class="pl-60 pr-5"><i class="fa fa-heart mr-12"></i>15</span -->
                            <!--span class="pl-60"><i class="fa fa-comments mr-12"></i>10</span -->
                        </div>
                        <h5 class="pt-32 mb-22"><? echo $record['Blog']['title']; ?></h5>
                        <p class="mb-27"><? echo $record['Blog']['text']; ?></p>
                    </div>
                </div>
                <div class="tags-and-links fix pt-58 pb-12">
                    <div class="pull_right">
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <!--a class="a2a_dd" href="https://www.addtoany.com/share"></a-->
                    <a class="a2a_button_facebook" title="Share on FaceBook"></a>
                    <a class="a2a_button_twitter" title="Share on Twitter"></a>
                    <a class="a2a_button_google_plus" title="Share on Google+"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                    </div>
                    
                </div>

            </div>
            <div class="col-lg-3 col-md-4 pl-35">
                <div class="single-sidebar-widget fix mb-60">
                    <div class="sidebar-widget-title mb-38">
                        <h5>Latest Post</h5>
                    </div>
                    <div class="single-post-widget mb-41 fix hover-effect-one">
                        <div class="post-img">
                            <a href="blog-details.html" class="block white-hover"><img src="images/blog/s-1.jpg" alt=""></a>
                        </div>
                        <div class="post-texts pl-20">
                            <h5><a href="blog-details.html">Modern Design<br>Building</a></h5>
                            <span class="block pt-14">10 October, 2016</span>
                        </div>
                    </div>
                    <div class="single-post-widget mb-41 fix hover-effect-one">
                        <div class="post-img">
                            <a href="blog-details.html" class="block white-hover"><img src="images/blog/s-2.jpg" alt=""></a>
                        </div>
                        <div class="post-texts pl-20">
                            <h5><a href="blog-details.html">Real Eatate Expo<br>2016</a></h5>
                            <span class="block pt-14">22 August, 2016</span>
                        </div>
                    </div>
                    <div class="single-post-widget fix hover-effect-one">
                        <div class="post-img">
                            <a href="blog-details.html" class="block white-hover"><img src="images/blog/s-3.jpg" alt=""></a>
                        </div>
                        <div class="post-texts pl-20">
                            <h5><a href="blog-details.html">Construction and<br>Development</a></h5>
                            <span class="block pt-14">05 October, 2016</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>