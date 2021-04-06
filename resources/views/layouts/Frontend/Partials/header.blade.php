<div id="Header_wrapper">

    <!-- Header -->
    <header id="Header">
        <!-- Header Top -  Info Area -->
        <div id="Action_bar">
            <div class="container">
                <div class="column one">

                    <!-- Header - contact info area-->
                    <ul class="contact_details">
                        <li class="slogan">
                            Etiam ullamcorper <span style="color: #697886">suspendisse a pellente</span>
                        </li>
                    </ul>

                    <nav id="social-menu" class="menu-secondary-menu-container">
                        <ul id="menu-secondary-menu" class="social-menu">
                            <li>
                                <a href="#">Partnership information</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Help Center</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Header -  Logo and Menu area -->
        <div id="Top_bar">

            <div class="container">
                <div class="column one">

                    <div class="top_bar_left clearfix loading">

                        <!-- Logo-->
                        <div class="logo">
                            <a id="logo" href="{{route('welcome')}}" title="Multitech Engineering"><img class="logo-main scale-with-grid" src="agro/images/agro.png" alt="BeAgro - BeTheme" /><img class="logo-sticky scale-with-grid" src="agro/images/agro.png" alt="">
                            </a>
                        </div>

                        <!-- Main menu-->
                        <div class="menu_wrapper">
                            <nav id="menu" class="menu-main-menu-container">
                                <ul id="menu-main-menu" class="menu">
                                    <li class="current_page_item">
                                        <a href="{{route('welcome')}}"><span>Home</span></a>
                                    </li>
                                    <li >
                                        <a href="{{route('products')}}"><span>Products</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('services')}}"><span>Services</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}"><span>About Us</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}"><span>Contact and support</span></a>
                                    </li>
                                </ul>
                            </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                        </div>

                        <!-- Secondary menu area - only for certain pages -->
                        <div class="secondary_menu_wrapper">
                            <!-- #secondary-menu -->
                        </div>

                        <!-- Banner area - only for certain pages-->
                        <div class="banner_wrapper"></div>

                        <!-- Header Searchform area-->
                        <div class="search_wrapper">
                            <!-- #searchform -->
                            <form method="get" id="searchform" action="#">
                                <i class="icon_search icon-search"></i>
                                <a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                <input type="text" class="field" name="s" id="s" placeholder="Enter your search" />
                                <input type="submit" class="submit flv_disp_none" value="" />
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        @stack('slider')
    </header>
    @stack('subheader')
</div>