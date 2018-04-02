<header class="header-area">
    <div id="sticky-header" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <div class="logo"><a href="/"><img src="/app/webroot/img/logo.png" alt="GoSearchPropery - Find Your Dream Home"></a></div>
                </div>
                <div class="col-md-10 hidden-sm hidden-xs">
                    <div class="text-center">
                        <nav id="primary-menu">
                            <ul class="main-menu text-right">
<!--                                --><?// var_dump($this->params); ?>
                                <li class="mega-parent <?php echo (!empty($this->params['action']) && ($this->params['action'] === 'home')) ? 'active' : '' ?>"><a href="/">HOME</a></li>
                                <li class="mega-parent <?php echo (!empty($this->params['action']) && ($this->params['action'] === 'search')) ? 'active' : '' ?>"><a href="/search">SEARCH</a></li>
                                <li class="mega-parent <?php echo (!empty($this->params['action']) && ($this->params['action'] === 'blog' || $this->params['action'] === 'blog_record')) ? 'active' : '' ?>"><a href="/blog">BLOG</a></li>
                                <? if (!empty($header_articles)){
                                    foreach ($header_articles as $article) { ?>
                                        <li class="mega-parent <?php echo (!empty($this->params['action']) && ($this->params['action'] === 'page' && isset($this->params->pass[0]) && $this->params->pass[0] == $article['Article']['url'])) ? 'active' : '' ?>"><a href="/page/<? echo $article['Article']['url']; ?>"><? echo $article['Article']['title']; ?></a></li>
                                    <? }
                                } ?>
<!--                                <li class="mega-parent --><?php //echo (!empty($this->params['action']) && ($this->params['action'] === 'page' && isset($this->params->pass[0]) && $this->params->pass[0] == 'about-us')) ? 'active' : '' ?><!--"><a href="/page/about-us">ABOUT US</a></li>-->
                              <ul class="login">
                                <li>
                                    <a href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
                                    <div class="login-form">
                                        <h4>Login</h4>
                                        <form action="#" method="post">
                                            <div class="input-box mb-19">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="user-name" placeholder="Username">
                                            </div>
                                            <div class="input-box">
                                                <i class="fa fa-lock"></i>
                                                <input type="password" name="user-password" placeholder="Password">
                                            </div>
                                            <div class="button-box">
                                                <div class="fix">
                                                    <input type="checkbox" value="remember" name="remember">
                                                    <span>Remember me</span>
                                                </div>
                                                <button type="submit" class="register-btn button lemon pull_right">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <ul class="login">
                                <li>
                                    <a href="#"><i class="fas fa-user-plus"></i> Register</a>
                                    <div class="login-form">
                                        <h4>Sign Up</h4>
                                        <form action="#" method="post">
                                            <div class="input-box mb-19">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="first-name" placeholder="Firstname">
                                            </div>
                                            <div class="input-box mb-19">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="last-name" placeholder="Lastname">
                                            </div>
                                            <div class="input-box mb-19">
                                                <i class="fa fa-envelope"></i>
                                                <input type="email" name="user-email" placeholder="Email">
                                            </div>
                                            <div class="input-box">
                                                <i class="fa fa-lock"></i>
                                                <input type="password" name="user-password" placeholder="Password">
                                            </div>
                                            <div class="button-box mt-20">
                                                <button type="submit" class="register-btn button lemon pull_right">Sign Up</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            </ul>
                          
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container mean-container">
            <div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="right: 0px; left: auto; text-align: center; text-indent: 0px; font-size: 18px;">
                    <span></span><span></span><span></span></a><nav class="mean-nav">
                    <ul style="display: none;">
                        <li><a href="/">HOME</a></li>
                        <li><a href="/search">SEARCH</a></li>
                        <li><a href="/blog">BLOG</a></li>
                        <li><a href="/page/about-us">ABOUT US</a></li>
                    </ul>
                </nav></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <div class="mean-push"></div><nav id="dropdown" style="display: none;">
                            <ul>
                                <li><a href="/">HOME</a></li>
                                <li><a href="/search">SEARCH</a></li>
                                <li><a href="/blog">BLOG</a></li>
                                <li><a href="/page/about-us">ABOUT US</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</header>