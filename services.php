<?php
$page = 'home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>

<main>

    <style>
    .accordion-item {
        border-bottom: 1px solid #ccc;
    }

    .accordion-item-header {
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        padding: 30px 0px;
    }

    .accordion-item-header.active img {
        transform: rotate(360deg);
    }

    .accordion-item-header h2 {
        font-family: "Montserrat", sans-serif;
        font-size: 18px;
        font-weight: 500;
        line-height: 24px;
    }

    .accordion-item-header img {
        height: 15px;
        width: 15px;
        object-fit: contain;
        transform: rotate(180deg);
        transition: transform 0.2s ease;
    }

    .accordion-item-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    .accordion-item-body-content {
        padding: 5px 80px 30px 0px;
        display: flex;
        flex-direction: column;
        gap: 35px;
    }

    .accordion-item-body-content p {
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
    }
    </style>

    <section class="about-us-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <h2 class="h2-theme">Our Services</h2>
                    <div class="about-fiter">

                        <ul>
                            <li><a href="Ourmission.php">our mission</a></li>
                            <li><a href="services.php">our services</a>
                            </li>
                            <li><a href="team.php">our team</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-top">
        <div class="container">
            <div class="row justify-space-between">
                <div class="col-12 col-md-6">
                    <div class="texture-motion">
                        <h3>Our Services</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-end">
                    <button class="button-theme">
                        view more
                    </button>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-4">
                    <div class="custom-services-card">
                        <img src="images/services/house-2.png" class="img-fluid" alt="img">
                        <div class="back-services">
                            <p>high quality project planning assistance</p>
                            <h4>Real Estate Sales</h4>
                            <ul>
                                <li>
                                    <a href="#">Details Goes Here</a>
                                </li>
                                <li class="introduct">
                                    <a href="#">Get More Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="custom-services-card">
                        <img src="images/services/house-1.png" class="img-fluid" alt="img">

                        <div class="back-services">
                            <p>high quality project planning assistance</p>
                            <h4>Property Management</h4>
                            <ul>
                                <li>
                                    <a href="#">Details Goes Here</a>
                                </li>
                                <li class="introduct">
                                    <a href="#">Get More Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="custom-services-card">
                        <img src="images/services/house-3.png" class="img-fluid" alt="img">
                        <div class="back-services">
                            <p>high quality project planning assistance</p>
                            <h4>Buyer Consultation</h4>
                            <ul>
                                <li>
                                    <a href="#">Details Goes Here</a>
                                </li>
                                <li class="introduct">
                                    <a href="#">Get More Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="lopper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="loter">
                        <img src="images/Group-5420.png" class="img-fluid" alt="img">
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

    <section class="faqs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="motion-faqs">

                        <h2 class="intro-vert">Frequently Asked Questions</h2>
                        <div class="accordion-container faq-item">
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <h2>01 What is the difference between a real estate agent and a real estate
                                        broker?</h2>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <p> Most states require real estate sales professionals to be licensed by the
                                            state, so that they can control education and experience requirements and
                                            have a central authority to resolve consumer problems. The terminology used
                                            to identify real estate professionals varies a little from state to state.
                                            Brokers are generally required to have more education and experience than
                                            real estate salespersons or agents. The person you normally deal with is a
                                            real estate agent or salesperson. The salesperson is licensed by the state,
                                            but must work for a broker. All listings are placed in the broker’s name,
                                            not the salesperson’s. A broker can deal directly with home buyers and
                                            sellers, or can have a staff of salespersons or agents working for him or
                                            her.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <h2>02   Why should I use a real estate salesperson?</h2>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it happily
                                            welcomes both hot and cold drinks without a peep. Plus, every sip stays true
                                            to taste, no lingering ghosts of drinks past. Easy peasy clean, happy taste
                                            buds – that's the FeelGood way!</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <h2>03   I have a family friend who is a Realtor. I like her and she is a help but
                                        she gives me one price to sell my hom for and I think it is too low. So I called
                                        another agent who suggested a price more in line with my expectations. Who do I
                                        choose?</h2>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it happily
                                            welcomes both hot and cold drinks without a peep. Plus, every sip stays true
                                            to taste, no lingering ghosts of drinks past. Easy peasy clean, happy taste
                                            buds – that's the FeelGood way!</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <h2>04  I have to make a choice between an updated home in an older neighborhood or
                                        a newer home in a
                                        more modern neighborhood. The home in the older neighborhood has almost
                                        everything I want and is
                                        much larger, but which makes the most sense as an investment?</h2>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it happily
                                            welcomes both hot and cold drinks without a peep. Plus, every sip stays true
                                            to taste, no lingering ghosts of drinks past. Easy peasy clean, happy taste
                                            buds – that's the FeelGood way!</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <h2>05 When buying a new home, what upgrades should we go for? What holds the most
                                        value? Do we
                                        upgrade the lot? Pick more square footage in the house? Add an extra bedroom?,
                                        etc.</h2>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it happily
                                            welcomes both hot and cold drinks without a peep. Plus, every sip stays true
                                            to taste, no lingering ghosts of drinks past. Easy peasy clean, happy taste
                                            buds – that's the FeelGood way!</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="filters">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6"></div>
                <div class="col-12 col-md-6">
                    <div class="main-filter">

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