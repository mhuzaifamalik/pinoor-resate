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
        padding: 20px 20px;
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
        padding: 5px 80px 30px 20px;
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
                    <h2 class="h2-theme">About Us</h2>
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
    <section class="mission">
        <div class="container">
            <div class="row align-items-center g-5">
                <h2 class="theme-left-mission">our mission</h2>
                <div class="col-12 col-md-6">
                    <div class="mission-part-1">
                        <img src="images/ipad.jpg" class="img-fluid" alt="img">
                    </div>

                </div>
                <!-- <div class="col-12 col-md-1"></div> -->
                <div class="col-12 col-md-6">
                    <div class="mission-part-2">
                        <h2>your home our responsibility</h2>
                        <p>At our core, we are dedicated to empowering individuals to make informed decisions in the
                            realm of real estate. Our mission is to facilitate the discovery of the most suitable
                            properties and amplify our clients’ success in real estate investments. We achieve this by
                            offering personalized, one-on-one consulting services and crafting tailor-made solutions to
                            meet our clients’ specific needs.
                            We firmly believe in guiding our clients towards selecting the ideal property that aligns
                            seamlessly with their unique requirements and long-term objectives. With a comprehensive
                            understanding of their goals, purpose, and financial circumstances, we navigate the
                            intricate landscape of real estate to ensure their journey leads to triumph.</p>
                        <button class="button-theme">view more</button>
                    </div>
                </div>
            </div>
            <div class="row align-items-center g-5 mt-5">


                <!-- <div class="col-12 col-md-1"></div> -->
                <div class="col-12 col-md-6">
                    <div class="mission-part-2">
                        <h2>your home our responsibility</h2>
                        <p>At our core, we are dedicated to empowering individuals to make informed decisions in the
                            realm of real estate. Our mission is to facilitate the discovery of the most suitable
                            properties and amplify our clients’ success in real estate investments. We achieve this by
                            offering personalized, one-on-one consulting services and crafting tailor-made solutions to
                            meet our clients’ specific needs.
                            We firmly believe in guiding our clients towards selecting the ideal property that aligns
                            seamlessly with their unique requirements and long-term objectives. With a comprehensive
                            understanding of their goals, purpose, and financial circumstances, we navigate the
                            intricate landscape of real estate to ensure their journey leads to triumph.</p>
                        <button class="button-theme">view more</button>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mission-part-1">
                        <img src="images/noted.png" class="img-fluid" alt="img">
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
                        <h3>our services</h3>
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







    <section class="Team abouts-teams">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="tecture-motive">
                        <h4>Team</h4>
                        <h2>meet our team</h2>
                        <p>Our team is 100% committed to help you achieve your dreams and goals,
                            with our experts accompanying you&nbsp;from search to settlement, anytime and
                            anywhere.&nbsp; We are a
                            local Melbourne real estate one-stop shop,&nbsp;
                            providing a full range of services to Australian and international clients.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="custom-profile">
                        <img src="images/profile/profile-1.png" class="img-fluid" alt="img">
                        <h4>Ryan Fong</h4>
                        <a href="#">
                            view detail
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="custom-profile">
                        <img src="images/profile/profile-2.png" class="img-fluid" alt="img">
                        <h4>Charles Lam</h4>
                        <a href="#">
                            view detail
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="custom-profile">
                        <img src="images/profile/profile-3.png" class="img-fluid" alt="img">
                        <h4>Praveen Kumar</h4>
                        <a href="#">
                            view detail
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="custom-profile">
                        <img src="images/profile/profile-4.png" class="img-fluid" alt="img">
                        <h4>Catherine Cheah</h4>
                        <a href="#">
                            view detail
                        </a>
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

                        <h2 class="intro-vert"><span>Frequently</span> Asked Questions</h2>
                        <div class="accordion-container faq-item">
                            <div class="accordion-item">
                                <div class="accordion-item-header active">
                                    <h2>01 &nbsp;What is the difference between a real estate agent and a real estate
                                        broker?</h2>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body" style="max-height: 203px;">
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
                                    <h2>02 &nbsp;&nbsp;Why should I use a real estate salesperson?</h2>
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
                                    <h2>03 &nbsp;&nbsp;I have a family friend who is a Realtor. I like her and she is a
                                        help but
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
                                    <h2>04 &nbsp;I have to make a choice between an updated home in an older
                                        neighborhood or
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
                                    <h2>05 &nbsp;&nbsp;When buying a new home, what upgrades should we go for? What
                                        holds the most
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
        </div>
    </section>





    <?php
    include 'includes/footer.php';
    $page = 'home';
    ?>
</main>