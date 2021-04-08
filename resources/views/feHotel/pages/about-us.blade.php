@extends('feHotel.master')

@section('NoiDung')

<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">

        <div class="brand">
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo.svg" alt="Hotel Himara">
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
                <li class="menu-item dropdown">
                    <a href="#">HOME</a>
                    <ul class="submenu">
                        <li class="menu-item">
                            <a href="index.html">Home Version 1</a>
                        </li>
                        <li class="menu-item">
                            <a href="index2.html">Home Version 2</a>
                        </li>
                        <li class="menu-item">
                            <a href="index3.html">Home Version 3</a>
                        </li>
                        <li class="menu-item">
                            <a href="index4.html">Home Version 4</a>
                        </li>
                        <li class="menu-item">
                            <a href="index5.html">Home Version 5</a>
                        </li>
                        <li class="menu-item">
                            <a href="index6.html">Home Version 6</a>
                        </li>
                        <li class="menu-item">
                            <a href="index7.html">Home Version 7</a>
                        </li>
                        <li class="menu-item">
                            <a href="index8.html">Home Version 8</a>
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
                <li class="menu-item dropdown active">
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
                        <i class="fa fa-calendar"></i>
                        BOOK ONLINE</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="inner">
            <h1>ABOUT HIMARA HOTEL</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>About Himara Hotel</li>
            </ol>
        </div>
    </div>
</div>


<main class="contact-page">
    <div class="container">
        <div class="entry">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-title">
                        <h4 class="text-uppercase">Himara. Hotel since 1992</h4>
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
                                    <img src="images/providers/provider-1.png" alt="Image">
                                </a>
                            </div>

                            <div class="item">
                                <a href="#">
                                    <img src="images/providers/provider-2.png" alt="Image">
                                </a>
                            </div>

                            <div class="item">
                                <a href="#">
                                    <img src="images/providers/provider-3.png" alt="Image">
                                </a>
                            </div>

                            <div class="item">
                                <a href="#">
                                    <img src="images/providers/provider-4.png" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-info">
                        <div class="inner">
                            <div class="content">
                                <img src="images/logo-big.svg" width="100" alt="Hotel Himara">
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
            <h4 class="text-uppercase mt40 mb20">Features</h4>
            <div class="row">

                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="flaticon-hotel"></i>
                        <span class="number" data-count="50"></span>
                        <div class="text">Rooms</div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="flaticon-tray"></i>
                        <span class="number" data-count="2"></span>
                        <div class="text">Restaurants</div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="flaticon-bell-boy"></i>
                        <span class="number" data-count="18"></span>
                        <div class="text">Staffs</div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="flaticon-sports"></i>
                        <span class="number" data-count="3"></span>
                        <div class="text">Swim. Pools</div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="flaticon-screen"></i>
                        <span class="number" data-count="2"></span>
                        <div class="text">Conf. Rooms</div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="flaticon-slider"></i>
                        <span class="number" data-count="2"></span>
                        <div class="text">Playgrounds</div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="flaticon-slider"></i>
                        <span class="number" data-count="2"></span>
                        <div class="text">Playgrounds</div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="flaticon-slider"></i>
                        <span class="number" data-count="2"></span>
                        <div class="text">Playgrounds</div>
                    </div>
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In optio magni aspernatur quia atque, laboriosam obcaecati esse dolor ut debitis sapiente ipsam, incidunt maxime fugiat nulla qui. Quos voluptates aperiam, laboriosam eos atque eius optio?
                Dolores unde ut amet et rerum minus aliquam doloremque obcaecati assumenda, quod autem optio dignissimos qui, cum minima, voluptas nostrum mollitia, perferendis similique asperiores fuga earum accusantium? Alias nesciunt recusandae autem quae quo
                consectetur laboriosam reprehenderit numquam. Nesciunt quae, eius aut rerum impedit, suscipit ducimus! Nam, aperiam officia ipsum illum ut fugit perspiciatis. Quis cumque ea nulla quaerat, debitis adipisci provident maxime odio odit atque.
            </p>
            <h4 class="text-uppercase mt40 mb20">Services</h4>
            <div class="image-gallery">
                <div class="row">

                    <div class="col-md-3">
                        <figure class="gradient-overlay-hover image-icon">
                            <a href="images/services/restaurant.jpg"><img src="images/services/restaurant.jpg" alt="Image" class="img-fluid"></a>
                        </figure>
                    </div>

                    <div class="col-md-3">
                        <figure class="gradient-overlay-hover image-icon">
                            <a href="images/services/gym.jpg"><img src="images/services/gym.jpg" alt="Image" class="img-fluid"></a>
                        </figure>
                    </div>

                    <div class="col-md-3">
                        <figure class="gradient-overlay-hover image-icon">
                            <a href="images/services/spa.jpg"><img src="images/services/spa.jpg" alt="Image" class="img-fluid"></a>
                        </figure>
                    </div>

                    <div class="col-md-3">
                        <figure class="gradient-overlay-hover image-icon">
                            <a href="images/services/bar.jpg"><img src="images/services/bar.jpg" alt="Image" class="img-fluid"></a>
                        </figure>
                    </div>
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, pariatur, excepturi modi rem debitis officiis vero quaerat vitae eum maiores perferendis doloribus blanditiis aliquid id praesentium provident animi dolore est libero et. Consequuntur
                voluptate omnis magnam velit deleniti saepe alias, nesciunt, odit labore soluta nihil dignissimos debitis tenetur doloremque tempore eaque quae suscipit aspernatur molestias voluptas vitae. Quisquam ipsum odit veritatis, laboriosam pariatur similique
                quidem et, omnis maxime neque illo nobis explicabo adipisci. Cum excepturi a, itaque fugiat, iste sed explicabo necessitatibus est odit labore porro suscipit voluptates incidunt mollitia ullam dolores, ab. Quidem laboriosam aperiam veniam iusto
                perspiciatis impedit cum deserunt officiis, consectetur error architecto vero amet quos suscipit nam voluptates ea at. Optio at asperiores culpa, officiis commodi qui eveniet, debitis deleniti atque, saepe quis quas blanditiis. Itaque placeat ab non
                qui ut commodi sed vitae, dicta mollitia beatae enim nobis architecto consectetur? Dolorum delectus voluptate est exercitationem.
            </p>
            <h4 class="text-uppercase mt40 mb20">Awards</h4>
            <div class="row mb40">

                <div class="col-md-4">
                    <div class="award-item">
                        <figure>
                            <img src="images/award1.svg" class="img-fluid" alt="Image">
                            <figcaption>
                                #1 Global Choice
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="award-item">
                        <figure>
                            <img src="images/award2.svg" class="img-fluid" alt="Image">
                            <figcaption>
                                #2 Top Quality
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="award-item">
                        <figure>
                            <img src="images/award3.svg" class="img-fluid" alt="Image">
                            <figcaption>
                                #1 Genuine Quality
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta cumque nobis fugit voluptatibus maiores, amet nemo distinctio cupiditate totam porro animi pariatur ipsa nihil debitis, officia perferendis at natus dolorem similique. Consequatur id
                eius ipsa ut debitis adipisci praesentium architecto facilis, dignissimos quibusdam iste tenetur beatae ab accusamus, omnis ullam cum assumenda distinctio accusantium perferendis nostrum fugiat sapiente blanditiis mollitia! Incidunt ea aliquid aut,
                hic esse, dolor veniam, magnam quam dolorem ipsa aspernatur fugit maiores ipsum omnis impedit consectetur. Delectus officia ullam numquam voluptatum necessitatibus quos alias nihil doloribus labore. Illo vero quam placeat, natus numquam officiis
                facere, libero quae.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem fugiat earum doloribus eum atque nesciunt ut consequatur distinctio, ipsum ex, laudantium voluptatum modi alias! Est explicabo id, quo distinctio. Repudiandae, consequuntur veniam
                provident. Voluptates quidem doloremque repudiandae accusantium molestiae animi optio quisquam vitae veniam hic eos fuga, sit id beatae, necessitatibus eligendi maxime eaque ea nostrum. Debitis, suscipit, totam iste perspiciatis, nostrum similique
                incidunt enim culpa fugiat esse quae. Alias iste porro veniam, eius, sit velit dignissimos asperiores ipsam magni aut deserunt ullam quod aspernatur assumenda a illo eum cum expedita, maiores vero consequatur obcaecati tempora impedit architecto
                sequi! Nobis tempore, fuga id expedita possimus, accusantium doloremque atque fugit repellat laudantium quibusdam officiis quisquam praesentium facere? Voluptatibus commodi tempore quae modi sint reiciendis eum sapiente minus, accusantium quasi
                ratione aliquam blanditiis mollitia id rerum fuga sunt animi odio distinctio voluptatem maiores et dicta corporis! Esse atque harum voluptatem quo, error.
            </p>
        </div>
    </div>
</main>

@endsection
