@extends('feHotel.master')

@section('NoiDung')

<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <div class="brand">
            <div class="logo">
                <a href="index.html">
                    <img src="{{asset('feHotel/images/logo.svg')}}" alt="Hotel Himara">
                </a>
            </div>
        </div>
        <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <nav id="main-menu" class="main-menu">
            <ul class="menu">
                <li class="menu-item dropdown active">
                    <a href="#">HOME</a>
                    <ul class="submenu">
                        <li class="menu-item">
                            <a href="index.html">Home Version 1</a>
                        </li>
                        <li class="menu-item">
                            <a href="index2.html">Home Version 2</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">ROOMS</a>
                    <ul class="submenu">
                        <li class="menu-item dropdown">
                            <a href="#">Rooms</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="rooms-list.html">List View</a>
                                </li>
                                <li class="menu-item">
                                    <a href="rooms-grid.html">Grid View</a>
                                </li>
                                <li class="menu-item">
                                    <a href="rooms-block.html">Block View</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Room Details</a>
                            <ul class="submenu">
                                <li class="menu-item dropdown">
                                    <a href="#">Style 1</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="room.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="room-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="room-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Style 2</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="room-style2.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="room-style2-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="room-style2-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">BLOG</a>
                    <ul class="submenu">
                        <li class="menu-item dropdown">
                            <a href="#">Blog Archive</a>
                            <ul class="submenu">
                                <li class="menu-item dropdown">
                                    <a href="#">List View</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="blog.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Classic View</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="blog-classic.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-classic-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-classic-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Grid View</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="blog-grid.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-grid-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-grid-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Blog Post</a>
                            <ul class="submenu">
                                <li class="menu-item dropdown">
                                    <a href="#">Style 1</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="blog-post.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-post-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-post-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Style 2</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="blog-post-style2.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-post-style2-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-post-style2-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">PAGES</a>
                    <ul class="submenu">
                        <li class="menu-item dropdown">
                            <a href="#">Gallery</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="gallery.html">Gallery 4 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery-3columns.html">Gallery 3 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery-2columns.html">Gallery 2 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery-without-filters.html">Gallery Without Filters</a>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery-slider.html">Gallery Slider</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">More Pages</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="places.html">Places</a>
                                </li>
                                <li class="menu-item">
                                    <a href="place-details.html">Place Details</a>
                                </li>
                                <li class="menu-item">
                                    <a href="events.html">Events</a>
                                </li>
                                <li class="menu-item">
                                    <a href="event-details.html">Event Details</a>
                                </li>
                                <li class="menu-item">
                                    <a href="offers.html">Offers</a>
                                </li>
                                <li class="menu-item">
                                    <a href="offer.html">Offer Details</a>
                                </li>
                                <li class="menu-item">
                                    <a href="staff.html">Our Staff</a>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Loading Page</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="loading.html">Loading Page 1</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="loading-style2.html">Loading Page 2</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="loading-style3.html">Loading Page 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Coming Soon</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="coming-soon.html">Coming Soon Image</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="coming-soon-video.html">Coming Soon Video</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="page.html">Right Sidebar Page</a>
                                </li>
                                <li class="menu-item">
                                    <a href="page-left-sidebar.html">Left Sidebar Page</a>
                                </li>
                                <li class="menu-item">
                                    <a href="page-full-width.html">Full Width Page</a>
                                </li>
                                <li class="menu-item">
                                    <a href="404.html">404 Style 1</a>
                                </li>
                                <li class="menu-item">
                                    <a href="404-style2.html">404 Style 2</a>
                                </li>
                                <li class="menu-item">
                                    <a href="testimonials.html">Testimonials</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Contact</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="contact.html">Contact Style 1</a>
                                </li>
                                <li class="menu-item">
                                    <a href="contact-style2.html">Contact Style 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Shop</a>
                            <ul class="submenu">
                                <li class="menu-item dropdown">
                                    <a href="#">Shop</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="shop.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Shop Details</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="shop-details.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-details-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="restaurant.html">Our Restaurant</a>
                        </li>
                        <li class="menu-item">
                            <a href="spa.html">Our Spa</a>
                        </li>
                        <li class="menu-item">
                            <a href="about-us.html">About Us</a>
                        </li>
                        <li class="menu-item">
                            <a href="location.html">Our Location</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">ELEMENTS</a>
                    <ul class="submenu">
                        <li class="menu-item">
                            <a href="style-guide.html">Style Guide</a>
                        </li>
                        <li class="menu-item">
                            <a href="buttons.html">Buttons</a>
                        </li>
                        <li class="menu-item">
                            <a href="icons.html">Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="contact.html">CONTACT US</a>
                </li>
                <li class="menu-item menu-btn">
                    <a href="booking-form.html" class="btn">
                        <i class="fa fa-calendar"></i>BOOK ONLINE
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>



<div class="slider">
    <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
        <ul>

            <li data-transition="crossfade">

                <img src="{{asset('feHotel/images/slider/slider1.jpg')}}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">

                <h1 class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset="" data-responsive_offset="on" data-fontsize="['80','50','40','30']" data-lineheight="['60','50','40','30']" data-whitespace="nowrap" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 5; color: #fff; font-weight: 900;">
                    TOUCH THE DREAM</h1>

                <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset="" data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; color: #fff;">Live Your Myth In Hotel Himara</div>

                <div class="tp-caption" data-x="center" data-hoffset="-120" data-y="480" data-voffset="" data-responsive_offset="on" data-whitespace="nowrap" data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 11;">
                    <a class="btn" href="booking-form.html">
                        <i class="fa fa-calendar"></i>BOOK A ROOM NOW</a>
                </div>

                <div class="tp-caption" data-x="center" data-hoffset="128" data-y="480" data-voffset="" data-responsive_offset="on" data-whitespace="nowrap" data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 11;">
                    <a class="btn" href="contact.html">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>CONTACT US NOW</a>
                </div>

                <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="200" data-voffset="" data-responsive_offset="on" data-fontsize="['18','18','16','16']" data-lineheight="['18','18','16','16']" data-whitespace="nowrap" data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="color: #fff">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="240" data-voffset="" data-responsive_offset="on" data-fontsize="['25','25','18','18']" data-lineheight="['25','25','18','18']" data-whitespace="nowrap" data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="color: #fff">
                    Star Luxury Hotel
                </div>
            </li>

            <li data-transition="crossfade">
                <img src="{{asset('feHotel/images/slider/slider3.jpg')}}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">

                <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset="" data-responsive_offset="on" data-fontsize="['70','50','40','25']" data-lineheight="['60','50','40','25']" data-whitespace="nowrap" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 5; color: #fff; font-weight: 900;">WHERE DREAMS COME TRUE
                </div>

                <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset="" data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; color: #fff;">You'll Never Forget Your Stay
                </div>
            </li>

            <li data-transition="crossfade">
                <img src="{{asset('feHotel/images/slider/slider13.jpg')}}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">

                <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="305" data-voffset="" data-responsive_offset="on" data-fontsize="['80','70','60','40']" data-lineheight="['80','70','60','40']" data-whitespace="nowrap" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 5; color: #fff; font-weight: 900;">ENJOY YOUR HOLIDAYS
                </div>

                <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset="" data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; color: #fff;">Family Room from €89 per night
                </div>
            </li>
        </ul>
    </div>

    <div class="horizontal-booking-form">
        <div class="container">
            <div class="inner box-shadow-007">

                <div id="booking-notification" class="notification"></div>
                <form id="booking-form">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Name
                                    <a href="#" title="Your Name" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please type your first name and last name">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input class="form-control" name="booking-name" type="text" data-trigger="hover" placeholder="Write Your Name">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Email
                                    <a href="#" title="Your Email" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please type your email adress">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input class="form-control" name="booking-email" type="email" placeholder="Write your Email">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Room Type
                                    <a href="#" title="Room Type" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select room type">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <select class="form-control" name="booking-roomtype" title="Select Room Type" data-header="Room Type">
                                    <option value="Single">Single Room</option>
                                    <option value="Double">Double Room</option>
                                    <option value="Deluxe">Deluxe Room</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Check-In/Out
                                    <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input type="text" class="datepicker form-control" name="booking-date" placeholder="Arrival & Departure" readonly="readonly">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Guests
                                    <a href="#" title="Guests" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Select Adults / Children">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <div class="panel-dropdown">
                                    <div class="form-control guestspicker">Guests
                                        <span class="gueststotal"></span>
                                    </div>
                                    <div class="panel-dropdown-content">
                                        <div class="guests-buttons">
                                            <label>Adults
                                                <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="18+ years" data-original-title="Adults">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <div class="guests-button">
                                                <div class="minus"></div>
                                                <input type="text" name="booking-adults" class="booking-guests" value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                        <div class="guests-buttons">
                                            <label>Cildren
                                                <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <div class="guests-button">
                                                <div class="minus"></div>
                                                <input type="text" name="booking-children" class="booking-guests" value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-book">BOOK A ROOM</button>
                            <div class="advanced-form-link">
                                <a href="booking-form.html">
                                    Advanced Booking Form
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="about mt100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h4 class="text-uppercase">Hotel Himara. since 1992</h4>
                    <p class="section-subtitle">High quality accommodation services</p>
                </div>
                <div class="info-branding">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem
                        assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi
                        consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda.</p>
                    <div class="providers">
                        <span>Recommended on:</span>

                        <div class="item">
                            <a href="#">
                                <img src="{{asset('feHotel/images/providers/provider-1.png')}}" alt="Image">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <img src="{{asset('feHotel/images/providers/provider-2.png')}}" alt="Image">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <img src="{{asset('feHotel/images/providers/provider-3.png')}}" alt="Image">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <img src="{{asset('feHotel/images/providers/provider-4.png')}}" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="brand-info">
                    <div class="inner">
                        <div class="content">
                            <img src="{{asset('feHotel/images/logo-big-transparent.svg')}}" width="100" alt="Image">
                            <div class="stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <h5 class="title">LUXURY HOTEL</h5>
                            <p class="mt20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rooms gray">
    <div class="container">
        <div class="section-title">
            <h4>OUR ROOMS</h4>
            <p class="section-subtitle">Our favorite rooms</p>
            <a href="rooms-list.html" class="view-all">View all rooms</a>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="room-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="room.html">
                            <img src="{{asset('feHotel/images/rooms/single/single1.jpg')}}" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <div class="room-price">€89 / night</div>
                    </figure>
                    <div class="room-info">
                        <h2 class="room-title">
                            <a href="room.html">Single Room</a>
                        </h2>
                        <p>Enjoy our single room</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="room-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="room.html">
                            <img src="{{asset('feHotel/images/rooms/double/double.jpg')}}" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <div class="room-price">€129 / night</div>
                    </figure>
                    <div class="room-info">
                        <h2 class="room-title">
                            <a href="room.html">Double Room</a>
                        </h2>
                        <p>Enjoy our double room</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="room-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="room.html">
                            <img src="{{asset('feHotel/images/rooms/deluxe/deluxe.jpg')}}" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-bath" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <div class="room-price">€189 / night</div>
                    </figure>
                    <div class="room-info">
                        <h2 class="room-title">
                            <a href="room.html">Deluxe Room</a>
                        </h2>
                        <p>Enjoy our delux room</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="section-title">
            <h4>HIMARA. SERVICES</h4>
            <p class="section-subtitle">Check out our awesome services</p>
        </div>
        <div class="row">
            <div class="col-lg-7 col-12">
                <div data-slider-id="services" class="services-owl owl-carousel">
                    <figure class="gradient-overlay">
                        <img src="{{asset('feHotel/images/services/restaurant.jpg')}}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>Restaurant</h4>
                        </figcaption>
                    </figure>
                    <figure class="gradient-overlay">
                        <img src="{{asset('feHotel/images/services/spa.jpg')}}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>Spa</h4>
                        </figcaption>
                    </figure>
                    <figure class="gradient-overlay">
                        <img src="{{asset('feHotel/images/services/conference.jpg')}}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>Conference Room</h4>
                        </figcaption>
                    </figure>
                    <figure class="gradient-overlay">
                        <img src="{{asset('feHotel/images/services/swimming.jpg')}}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>Swimming Pool</h4>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="owl-thumbs" data-slider-id="services">
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            <i class="flaticon-tray-1"></i>
                        </span>
                        <div class="media-body">
                            <h5>Restaurant</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                        </div>
                    </div>
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            <i class="flaticon-nature"></i>
                        </span>
                        <div class="media-body">
                            <h5>Spa - Beauty &amp; Health</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                        </div>
                    </div>
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            <i class="flaticon-screen-1"></i>
                        </span>
                        <div class="media-body">
                            <h5>Conference Room</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                        </div>
                    </div>
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            <i class="flaticon-sports"></i>
                        </span>
                        <div class="media-body">
                            <h5>Swimming Pool</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <div class="section-title">
            <h4>HIMARA. GALLERY</h4>
            <p class="section-subtitle">Check out our image gallery</p>
            <a href="gallery.html" class="view-all">View gallery images</a>
        </div>
        <div class="gallery-owl owl-carousel image-gallery">

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery1.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery1.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Swimming Pool</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery2.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery2.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Room View</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery3.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery3.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Cocktail</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery4.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery4.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Breakfast</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery5.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery5.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Playground</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery6.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery6.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Restaurant</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery7.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery7.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Wedding Ceremony</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery8.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery8.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Beach</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery9.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery9.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Honeymoon Room</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/gallery/gallery10.jpg')}}">
                        <img src="{{asset('feHotel/images/gallery/gallery10.jpg')}}" alt="Image">
                    </a>
                    <figcaption>Sea</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="testimonials gray">
    <div class="container">
        <div class="section-title">
            <h4>OUR GUESTS LOVE US</h4>
            <p class="section-subtitle">What our guests are saying about us</p>
        </div>
        <div class="owl-carousel testimonials-owl">

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/user1.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Marlene Simpson</h4>
                        <div class="location">Madrid / Spain</div>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/user2.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Brad Knight</h4>
                        <div class="location">Athens / Greece</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/user3.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Daryl Phillips</h4>
                        <div class="location">Lisbon / Portugal</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/user4.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Felecia Lawson</h4>
                        <div class="location">Paris / France</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/user5.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Joanne Robinson</h4>
                        <div class="location">New York / USA</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/user6.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Emily Hill</h4>
                        <div class="location">Rome / Italy</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/user7.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Mabel Hicks</h4>
                        <div class="location">Moscow / Russia</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/user8.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Kent Lambert</h4>
                        <div class="location">Berlin / Germany</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/user9.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Gerald Schmidt</h4>
                        <div class="location">Zagreb / Croatia</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="restaurant image-bg parallax gradient-overlay op5" data-src="images/restaurant.jpg" data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
    <div class="container">
        <div class="section-title">
            <h4>HIMARA. RESTAURANT</h4>
            <p class="section-subtitle">Live a gourmet dining experience</p>
            <a href="restaurant.html" class="view-all uppercase">More About Our Restaurant</a>
        </div>
        <div class="row">

            <div class="col-md-6 col-sm-6 col-6">
                <div class="restaurant-menu-item">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <figure>
                                <img src="{{asset('feHotel/images/restaurant/restaurant1.jpg')}}" class="img-fluid " alt="Image">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="info">
                                <div class="title">
                                    <span class="name">Salat</span>
                                    <span class="price">
                                        <span class="amount">€16.99</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-6">
                <div class="restaurant-menu-item">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <figure>
                                <img src="{{asset('feHotel/images/restaurant/restaurant2.jpg')}}" class="img-fluid" alt="Image">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="info">
                                <div class="title">
                                    <span class="name">Croquettes</span>
                                    <span class="price">
                                        <span class="amount">€9.99</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="section-title">
            <h4 class="title">LATEST NEWS</h4>
            <p class="section-subtitle">Check out our latest news</p>
            <a href="blog.html" class="view-all">View all news</a>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="news-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="blog-post.html">
                            <img src="{{asset('feHotel/images/blog/blog-post1.jpg')}}" class="img-fluid" alt="Image">
                        </a>
                    </figure>
                    <div class="news-info">
                        <h4 class="title">
                            <a href="blog-post.html">10 Tips for Holiday Travel</a>
                        </h4>
                        <p>An examination of how the current political and economical climate is affecting the mental healthcare industry...</p>
                        <div class="post-meta">
                            <span class="author">
                                <a href="#"><img src="{{asset('feHotel/images/users/admin.jpg')}}" width="16" alt="Image">
                                    JANE</a>
                            </span>
                            <span class="date">
                                <i class="fa fa-clock-o"></i>
                                August 13, 2017</span>
                            <span class="comments">
                                <a href="#">
                                    <i class="fa fa-commenting-o"></i> 1 Comment</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="news-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="blog-post.html">
                            <img src="images/blog/blog-post2.jpg" class="img-fluid" alt="Image">
                        </a>
                    </figure>
                    <div class="news-info">
                        <h4 class="title">
                            <a href="blog-post.html">Enjoy your holidays</a>
                        </h4>
                        <p>An examination of how the current political and economical climate is affecting the mental healthcare industry...</p>
                        <div class="post-meta">
                            <span class="author">
                                <a href="#"><img src="{{asset('feHotel/images/users/admin.jpg')}}" width="16" alt="Image">
                                    JANE</a>
                            </span>
                            <span class="date">
                                <i class="fa fa-clock-o"></i>
                                August 16, 2017</span>
                            <span class="comments">
                                <a href="#">
                                    <i class="fa fa-commenting-o"></i>
                                    5 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="news-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="blog-post.html">
                            <img src="images/blog/blog-post3.jpg" class="img-fluid" alt="Image">
                        </a>
                    </figure>
                    <div class="news-info">
                        <h4 class="title">
                            <a href="blog-post.html">Honeymoon at Hotel Himara</a>
                        </h4>
                        <p>An examination of how the current political and economical climate is affecting the mental healthcare industry...</p>
                        <div class="post-meta">
                            <span class="author">
                                <a href="#"><img src="{{asset('feHotel/images/users/admin.jpg')}}" width="16" alt="Image">
                                    JANE</a>
                            </span>
                            <span class="date">
                                <i class="fa fa-clock-o"></i>
                                January 11, 2018</span>
                            <span class="comments">
                                <a href="#">
                                    <i class="fa fa-commenting-o"></i>
                                    3 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video np parallax gradient-overlay op6" data-src="images/video.jpg" data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
    <div class="inner gradient-overlay">
        <div class="container">
            <div class="video-popup">
                <a class="popup-vimeo" href="https://www.youtube.com/watch?v=BDDfopejpwk">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="events">
    <div class="container">
        <div class="section-title">
            <h4>UPCOMING EVENTS</h4>
            <p class="section-subtitle">Check ou our upcoming events</p>
            <a href="events.html" class="view-all">View all events</a>
        </div>
        <div class="events-owl owl-carousel">

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">31</div>
                    <div class="month">January</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Family Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">17</div>
                    <div class="month">Mars</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Traditional Music Festival</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">05</div>
                    <div class="month">July</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Summer Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">16</div>
                    <div class="month">August</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Wedding Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">10</div>
                    <div class="month">September</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Pool Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">20</div>
                    <div class="month">October</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Season Closing Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">06</div>
                    <div class="month">November</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Beer Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">28</div>
                    <div class="month">November</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Latin Dance Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-v2 gray">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title">
                    <h4>GET IN TOUCH</h4>
                    <p class="section-subtitle">Get in touch</p>
                </div>
                <ul class="contact-details">
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Lorem ipsum dolor, 25, Himara
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        Phone: +1 888 123 4567
                    </li>
                    <li>
                        <i class="fa fa-fax"></i>
                        Fax: +1 888 123 4567
                    </li>
                    <li>
                        <i class="fa fa-globe"></i>
                        Web: www.hotelhimara.com
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        Email:
                        <a href="https://preview.eagle-themes.com/cdn-cgi/l/email-protection#89e0e7efe6c9fae0fdeca7eae6e4"><span class="__cf_email__" data-cfemail="85e6eaebf1e4e6f1c5edeaf1e0e9edece8e4f7e4abe6eae8">[email&#160;protected]</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="section-title">
                    <h4>CONTACT US</h4>
                    <p class="section-subtitle">Say hello</p>
                </div>
                <form id="contact-form" name="contact-form">
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Your Name" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn" type="submit">
                        <i class="fa fa-location-arrow"></i>Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="instgram">
    <div class="section-title aligncenter">
        <p class="section-subtitle">Check out some pictures from our instagram page
            <a href="https://www.instagram.com/hotelhimara/" target="_blank">@hotelhimara</a>
        </p>
    </div>
    <div id="instafeed-gallery" class="owl-carousel instagram-owl"></div>
</section>

@endsection
