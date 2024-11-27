<?php
$page = 'Buy';
$pageDesc = '""';
include 'includes/header.php';
$page = 'Buy';
?>

<main>
    <style>
    header .navbar {

        filter: brightness(0.5) invert(1) !important;

    }

    .thumbnail-bg img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    .video-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .custom-btn {
        position: relative;
        z-index: 3;
    }

    /* General Section Styling */
    .lition-rootes {
        position: relative;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    /* Thumbnail Background */
    .thumbnail-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #000;
        z-index: 0;
    }

    .thumbnail-bg img {
        max-width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* Video Styling */
    .video-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    /* Button Styling */
    .custom-btn {
        background-color: #182B17;
        color: white;
        border: none;
        padding: 25px 30px;
        border-radius: 50%;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .custom-btn:hover {
        background-color: darkgreen;
        transform: scale(1.05);
    }
    </style>

    <section class="banner-tursted ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    <div class="trusted-img">
                        <img src="images/bg/v152.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="custom-text-trusted">
                        <h2>Your Trusted Partners in Real Estate</h2>
                        <p>Our team is 100% committed to help you achieve your dreams and goals, with our experts
                            accompanying you from search to settlement, anytime and anywhere.  We are a local Melbourne
                            real estate one-stop shop, providing a full range of services to Australian and
                            international clients.</p>
                        <h3>charles lam</h3>
                        <h6>Director</h6>
                        <button class="view-more">view detail <span></span></button>
                        <ul class="mention-tursted">
                            <li><a href="#"><span><i class="fa-solid fa-phone"></i></span>0490307717</a></li>
                            <li><a href="#"><span><i
                                            class="fa-solid fa-envelope"></i></span>info@pioneerrealty.com.au</a></li>
                        </ul>
                        <ul class="loper-turseted">
                            <li class="trust-1"><button>Request Appraisal</button></li>
                            <li class="trust-2"><button>Request Appraisal</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-urested">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-12 col-md-6">
                    <div class="turst-abut">
                        <h2>About Ryan Fong</h2>
                        <p>Our team is 100% committed to help you achieve your dreams and goals, with our experts
                            accompanying you from search to settlement, anytime and anywhere. We are a local Melbourne
                            real estate one-stop shop, providing a full range of services.</p>
                        <button class="button-theme">read more</button>
                    </div>
                </div>
                <div class=" col-12 col-md-6">
                    <div class="tursted-profiles">
                        <div class="turst-images">
                            <img src="images/bg/15group.png" class="img-fluid" alt="img">
                        </div>
                        <div class="turst-text-profiles">
                            <h2>charles lam</h2>
                            <p>director</p>
                            <ul>
                                <li><a href="#"><span><i class="fa-solid fa-phone"></i>0490307717</span></a></li>
                                <li><a href="#"><span><i class="fa-solid fa-envelope"></i>
                                            info@pioneerrealty.com.au</span></a></li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="lition-rootes">
        <div class="container-fluid p-0">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-12 text-center">
                    <!-- Thumbnail Background -->
                    <div class="thumbnail-bg">
                        <img src="images/bg/thumnails.png" alt="Video Thumbnail" class="img-fluid" />
                    </div>
                    <!-- Video -->
                    <video class="video-bg" autoplay muted loop>
                        <source src="images/services/React-Planner.mp4" type="video/mp4">

                    </video>
                    <!-- Centered Button -->
                    <button id="playButton" class="custom-btn"><i class="fa-solid fa-play"></i></button>
                </div>
            </div>
        </div>
    </section>

    <section class="sellpage-place buypsge9763" id="selling-req">
        <div class="container">
            <div class="row g-5">

                <h2>Property listings</h2>
                <p class="h2-down-heading">Current Listings Sold Properties</p>
                <div class="col-12 col-md-4">
                    <div class="buy-custom-place">
                        <img src="images/sell/buy-56.png" class="img-fluid" alt="img">
                        <a href="#">For Sale</a>
                    </div>
                    <div class="custom-place-1 buy-page-951">
                        <h4 class="sing-sell">110/25-33 Wills Street, Melbourne VIC 3000</h4>
                        <p><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp;Wills Court, 25-33, Wills Street,
                            Melbourne, City of Melbourne, Victoria, 3000, Australia</p>
                        <h5 class="sing-sell">From $375,000- $395,000</h5>
                        <ul>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>1 bed</span></li>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>2 bed</span></li>
                            <li><img src="images/icon/square.png" class="img-fluid" alt="img"><span>1200 sqft</span>
                            </li>
                        </ul>
                        <div class="sell-place-holder buy-pageeees-951">

                            <ul>
                                <li><span>for sell</span></li>
                                <li>
                                    <ul>
                                        <li><a href="#"><img src="images/icon/next-tap.png" alt="img"></a></li>
                                        <li><a href="#"><img src="images/icon/copypest.png" alt="img"></a></li>
                                        <li>
                                            <a href="#"><img src="images/icon/heart.png" class="img-fluid"
                                                    alt="img"></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="buy-custom-place">
                        <img src="images/sell/buy-56.png" class="img-fluid" alt="img">
                        <a href="#">For Sale</a>
                    </div>
                    <div class="custom-place-1 buy-page-951">
                        <h4 class="sing-sell">110/25-33 Wills Street, Melbourne VIC 3000</h4>
                        <p><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp;Wills Court, 25-33, Wills Street,
                            Melbourne, City of Melbourne, Victoria, 3000, Australia</p>
                        <h5 class="sing-sell">From $375,000- $395,000</h5>
                        <ul>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>1 bed</span></li>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>2 bed</span></li>
                            <li><img src="images/icon/square.png" class="img-fluid" alt="img"><span>1200 sqft</span>
                            </li>
                        </ul>
                        <div class="sell-place-holder buy-pageeees-951">

                            <ul>
                                <li><span>for sell</span></li>
                                <li>
                                    <ul>
                                        <li><a href="#"><img src="images/icon/next-tap.png" alt="img"></a></li>
                                        <li><a href="#"><img src="images/icon/copypest.png" alt="img"></a></li>
                                        <li>
                                            <a href="#"><img src="images/icon/heart.png" class="img-fluid"
                                                    alt="img"></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="buy-custom-place">
                        <img src="images/sell/buy-56.png" class="img-fluid" alt="img">
                        <a href="#">For Sale</a>
                    </div>
                    <div class="custom-place-1 buy-page-951">
                        <h4 class="sing-sell">110/25-33 Wills Street, Melbourne VIC 3000</h4>
                        <p><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp;Wills Court, 25-33, Wills Street,
                            Melbourne, City of Melbourne, Victoria, 3000, Australia</p>
                        <h5 class="sing-sell">From $375,000- $395,000</h5>
                        <ul>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>1 bed</span></li>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>2 bed</span></li>
                            <li><img src="images/icon/square.png" class="img-fluid" alt="img"><span>1200 sqft</span>
                            </li>
                        </ul>
                        <div class="sell-place-holder buy-pageeees-951">

                            <ul>
                                <li><span>for sell</span></li>
                                <li>
                                    <ul>
                                        <li><a href="#"><img src="images/icon/next-tap.png" alt="img"></a></li>
                                        <li><a href="#"><img src="images/icon/copypest.png" alt="img"></a></li>
                                        <li>
                                            <a href="#"><img src="images/icon/heart.png" class="img-fluid"
                                                    alt="img"></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="tursted-reviews">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-md-4">
                    <div class="custom-next-reviews">
                    <span class="arrow-trust"><img src="images/roper-78/arrow.png" class="img-fluid" alt="img"></span>
                        <h3>pioneerrealty.com.au</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            <span class="trested"><img src="images/roper-78/carwon.png" class="img-fluid" alt="img"></span>
                    </div>
                    <div class="main-reviews-profiles">
                        <div class="reviews-img">
                        <img src="images/roper-78/profile-1.png" class="img-fluid" alt="img">
                        </div>
                        <div class="reviews-text">
                            <h4>Alex James</h4>
                            <p>clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="custom-next-reviews">
                        <span class="arrow-trust"><img src="images/roper-78/arrow.png" class="img-fluid" alt="img"></span>
                        <h3>pioneerrealty.com.au</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            <span class="trested"><img src="images/roper-78/carwon.png" class="img-fluid" alt="img"></span>
                    </div>
                    <div class="main-reviews-profiles">
                        <div class="reviews-img">
                            <img src="images/roper-78/profile-2.png" class="img-fluid" alt="img">
                        </div>
                        <div class="reviews-text">
                            <h4>Lisa</h4>
                            <p>clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="custom-next-reviews">
                    <span class="arrow-trust"><img src="images/roper-78/arrow.png" class="img-fluid" alt="img"></span>
                        <h3>pioneerrealty.com.au</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            <span class="trested"><img src="images/roper-78/carwon.png" class="img-fluid" alt="img"></span>
                    </div>
                    <div class="main-reviews-profiles">
                        <div class="reviews-img">
                        <img src="images/roper-78/profile-3.png" class="img-fluid" alt="img">
                        </div>
                        <div class="reviews-text">
                            <h4>Maria</h4>
                            <p>clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="Enquiry" id="tusted-enqiry">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="main-enquiry">
                        <h2>Make an Enquiry</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi.</p>
                            <ul>
                                <li><button>I'm thinking of selling</button></li>
                                <li><button class="center">I need a property manager</button></li>
                                <li><button>General enquiry</button></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" main-news-sell-page">
        <div class="container">
            <div class="row pt-4">
                <h2 class="sell802-news">News &amp; Insights</h2>
                <div class="col-md-4">
                    <div class="nehri-sell">
                        <img class="img-fluid" src="images/sell/main-image.png" alt="no-img">
                        <span>FEATURED NEWS</span>
                        <h2>The art of designing romantic gardens with Ashley James</h2>
                        <p><strong>Meet The Maker</strong> September 10</p>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-6">
                            <div class="nehri-sell">
                                <img class="img-fluid" src="images/sell/image1.png" alt="no-img">
                                <span>FEATURED NEWS</span>
                                <h2>Behind the design: A maximalist house by Flack Studio</h2>
                                <p><strong>Meet The Maker</strong> September 10</p>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="nehri-sell">
                                <img class="img-fluid" src="images/sell/image2.png" alt="no-img">
                                <span>FEATURED NEWS</span>
                                <h2>How to create a focal point in a space</h2>
                                <p><strong>Meet The Maker</strong> September 10</p>
                            </div>

                        </div>


                    </div>
                    <div class="row" style="margin-top: 45px;">
                        <div class="col-6">
                            <div class="nehri-sell">
                                <img class="img-fluid" src="images/sell/image3.png" alt="no-img">
                                <span>FEATURED NEWS</span>
                                <h2>Behind the design: A maximalist house by Flack Studio</h2>
                                <p><strong>Meet The Maker</strong> September 10</p>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="nehri-sell">
                                <img class="img-fluid" src="images/sell/image4.png" alt="no-img">
                                <span>FEATURED NEWS</span>
                                <h2>How to create a focal point in a space</h2>
                                <p><strong>Meet The Maker</strong> September 10</p>
                            </div>

                        </div>


                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="sell-page-lopper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="loter">
                        <img src="images/sell/seling-expection.png" class="img-fluid" alt="img">
                        <h2>Explore</h2>
                        <ul>
                            <li>the pioneer mission</li>
                            <li>Services</li>
                            <li>Careers</li>
                            <li>Foundation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    $page = 'home';
    ?>
</main>