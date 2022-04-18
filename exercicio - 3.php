<?php

    function ola(){

        echo '
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="header__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="header__nav">
                            <nav class="header__menu mobile-menu">
                                <ul>
                                    <li class="active"><a href="./index.html">Home</a></li>
                                    <li><a href="./listing.html">Listing</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./about.html">About</a></li>
                                            <li><a href="./listing-details.html">Listing Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                            <li><a href="./contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="#">Shop</a></li>
                                </ul>
                            </nav>
                            <div class="header__menu__right">
                                <a href="#" class="primary-btn"><i class="fa fa-plus"></i>Add Listing</a>
                                <a href="#" class="login-btn"><i class="fa fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </header>';
   
    }


?>