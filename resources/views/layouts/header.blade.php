<header @if(url('') == url()->current()) class="header-floating" @endif>
                <!--Mobile Header-->
                <div class="mobile-header bg-white typo-dark">
                    <div class="mobile-header-inner">
                        <div class="sticky-outer">
                            <div class="sticky-head">
                                <div class="basic-container clearfix">
                                    <ul class="nav mobile-header-items pull-left">
                                        <li class="nav-item"><a href="#" class="zmm-toggle img-before"><i class="ti-menu"></i></a></li>
                                    </ul>
                                    <ul class="nav mobile-header-items pull-center">
                                        <li>
                                            <a href="{{ url('') }}" class="img-before"><img src="{{ asset('storage/app/public/'.setting('site.logo')) }}"  class="img-fluid changeable-dark" width="149" height="45" alt="Logo"></a>
                                        </li>
                                    </ul> 
                                </div>
                                <!-- .basic-container -->
                            </div>
                            <!-- .sticky-head -->
                        </div>
                        <!-- .sticky-outer -->
                    </div>
                    <!-- .mobile-header-inner -->
                </div>
                <!-- .mobile-header -->
                <!--Header-->
                <div @if(url('') == url()->current()) class="header-inner header-2 header-absolute" @else class="header-inner header-1" @endif >
                    <!--Topbar-->
                    @if(url('') == url()->current()) 
                    <div class="topbar">
                        <div class="basic-container clearfix">
                            <ul class="nav topbar-items pull-left">
                                <li class="nav-item">
                                    <ul class="nav header-info">
                                        <div class="header-address typo-white"></div>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav topbar-items pull-right">
                                <li class="nav-item">
                                    <div class="social-icons typo-white">
                                       
                                    </div>
                                </li> 
								<!--Search-->
                                <div class="full-view-wrapper hide">
									
								</div>
                            </ul>
                        </div>
                    </div>
                    @endif
                    <!--Topbar-->
                    <!--Sticky part-->
                    <div class="sticky-outer">
                        <div class="sticky-head">
                            <!--Navbar-->
                            <nav class="navbar">
                                <div class="basic-container bg-light b-radius-10 clearfix">
                                    <div class="navbar-inner">
                                        <!--Overlay Menu Switch-->
                                        <ul class="nav navbar-items pull-left">
                                            <li class="list-item">
                                                <a href="{{ url('') }}" class="logo-general"><img src="{{ asset('storage/app/public/'.setting('site.logo')) }}" class="img-fluid changeable-dark" width="166" height="50" alt="Logo" /></a>
												<a href="{{ url('') }}" class="logo-sticky"><img src="{{ asset('storage/app/public/'.setting('site.logo')) }}" class="img-fluid changeable-dark" width="166" height="50" alt="Logo" /></a>
                                            </li>
                                        </ul>
                                        <!-- Menu -->
                                        {{ menu('front-menu','menu') }} 
                                        <!-- Menu -->
                                    </div>
                                </div>
                                <!--Search-->                                
                            </nav>
                        </div>
                        <!--sticky-head-->
                    </div>
                    <!--sticky-outer-->
                </div>
            </header>