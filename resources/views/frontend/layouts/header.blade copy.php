<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header style3 modify1 header-transparent">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                       <div class="logo-part">
                           <a href="/"><img src="{{ asset('assets/frontend/images/app_logo.png') }}" alt=""></a>
                       </div>
                       <div class="mobile-menu">
                           <a href="#" class="rs-menu-toggle rs-menu-toggle-close secondary">
                               <i class="fa fa-bars"></i>
                           </a>
                       </div>
                    </div>
                    <div class="col-lg-10 text-right">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu pr-90 md-pr-0">
                                    <ul id="onepage-menu" class="nav-menu">
                                        <li class="current-menu-item">
                                            <a href="/#rs-header">{{__('karbari.home')}}</a>
                                        </li>
                                        <li>
                                            <a href="/#rs-services">{{__('karbari.services')}}</a>
                                        </li>
                                        <li>
                                            <a href="/#rs-about">{{__('karbari.about')}}</a>
                                        </li>
                                        <li>
                                            <a href="/#rs-project">{{__('karbari.project')}}</a>
                                        </li>
                                        <li>
                                            <a href="/#rs-pricing">{{__('karbari.pricing')}}</a>
                                        </li>

                                        <li>
                                            <a href="/#rs-blog">{{__('karbari.blog')}}</a>
                                        </li>
                                        <li>
                                            <a href="/#rs-contact">{{__('karbari.contact')}}</a>
                                        </li>
                                              <li class="menu-item-has-children">
                                            <a href="#">{{__('karbari.language')}}</a>
                                            <ul class="sub-menu">
                                                <li class="{{ App()->getLocale() === 'en' ? 'active' : '' }}"><a href="/locale/en">English</a> </li>
                                                <li class="{{ App()->getLocale() === 'bn' ? 'active' : '' }}"><a href="/locale/bn">বাংলা</a></li>
                                            </ul>
                                         </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->
                            <div class="expand-btn-inner search-icon hidden-md">
                                <ul>
                                    <li class="sidebarmenu-search">
                                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="nav-expander" class="humburger nav-expander" href="#">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->

    <!-- Canvas Menu start -->
    <nav class="right_menu_togle hidden-md">
        <div class="close-btn">
            <div class="nav-link">
                <a id="nav-close" class="humburger" href="#">
                    <span class="dot1"></span>
                    <span class="dot2"></span>
                    <span class="dot3"></span>
                    <span class="dot4"></span>
                    <span class="dot5"></span>
                    <span class="dot6"></span>
                    <span class="dot7"></span>
                    <span class="dot8"></span>
                    <span class="dot9"></span>
                </a>
            </div>
        </div>
        <div class="canvas-logo">
            <a href="index-2.html"><img src="{{ asset('assets/frontend/images/app_logo.png') }}" alt="logo"></a>
        </div>
        <div class="offcanvas-text">
            <p>{{__('karbari.side-desc')}}</p>
        </div>
        <div class="canvas-contact">
              <div class="address-area">
                  <div class="address-list">
                      <div class="info-icon">
                          <i class="flaticon-location"></i>
                      </div>
                      <div class="info-content">
                          <h4 class="title">{{__('karbari.address')}}</h4>
                          <em>05 kandi BR. New York</em>
                      </div>
                  </div>
                  <div class="address-list">
                      <div class="info-icon">
                          <i class="flaticon-email"></i>
                      </div>
                      <div class="info-content">
                          <h4 class="title">{{__('karbari.email')}}</h4>
                          <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                      </div>
                  </div>
                  <div class="address-list">
                      <div class="info-icon">
                          <i class="flaticon-call"></i>
                      </div>
                      <div class="info-content">
                          <h4 class="title">{{__('karbari.phone')}}</h4>
                          <em>+019988772</em>
                      </div>
                  </div>
              </div>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Canvas Menu end -->
</div>
