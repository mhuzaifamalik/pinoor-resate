<?php
$page = 'Buy';
$pageDesc = '""';
include 'includes/header.php';
$page = 'Buy';
?>


<main>

    <style>
    .thumbnail-bg img {
        position: absolute;
        top: 0;
        left: 0%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    .video-bg {
        position: absolute;
        top: 0;
        left: 5%;
        width: 90%;
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
        left: 5%;
        width: 90%;
        height: 97%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #000000;
        z-index: 0;
        border: 10px solid #000;
    }

    .thumbnail-bg img {
        max-width: 100%;
        /* height: auto; */
        object-fit: cover;
    }

    /* Video Styling */
    .video-bg {
        position: absolute;
        top: 0;
        left: 5%;
        width: 90%;
        height: 90%;
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
    <section class="call-your-won">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="owen-career">
                        <h2>A place to grow and call your own</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="remoter-roper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="maintainer">
                        <h2>We build careers, not just jobs</h2>
                        <p>At pioneer realty, we focus on what’s important to you and your future. We’ll listen to your
                            ideas and champion your creativity. You’ll get to collaborate with some real game changers
                            in the industry. And you’ll always have the space and the support you need to succeed in an
                            exciting and rewarding career.</p>
                        <button class="button-theme">read more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="lition-rootes">
        <div class="container">
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
    <section class="liton-paraph">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="liton-paraphy">
                        <p>Working at pioneer realty is full of variety with no two days the same. In the office, you’ll
                            work with like-minded people who support and empower each other – with a lot of laughs along
                            the way. Outside the office, you’ll build great relationships with local community and
                            clients, based on trust, respect and getting the best results.</p>
                        <button class="button-theme">Discover more about us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Glimps">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="glimps-1">
                        <h2>A glimpse of your career at pioneer realty</h2>
                        <p>Whether you’re interested in Sales, Property Management or Administration, a career at Jellis
                            Craig could open a lot of doors for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gilmps-tabs">
        <div class="container-fluiid p-0">
            <div class="row">
                <div class="col-12 col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Residential
                                Sales</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Property
                                Management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Business
                                Administration</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <section class="user-1">
                                <div class="container">

                                    <div class="row align-items-center mt-5">
                                        <div class="col-12 col-md-6">
                                            <div class="text-content-tabs">
                                                <h4>SALES</h4>
                                                <h2>What a sales career looks like at pioneer realty</h2>
                                                <p>You’ll get to sell the best homes in Melbourne, providing clients
                                                    with expert advice and service </p>
                                                <p>Take an active role in fully integrated campaigns that deliver
                                                    results, including access to exclusive VPA products and bespoke
                                                    pre-list kits</p>
                                                <p>Create and nurture valuable relationships with buyers and vendors 
                                                </p>
                                                <p> 
                                                    Be part of a team of 500 highly skilled sales consultants selling
                                                    over 8,000 properties per year
                                                    Join our strong and connected network of 40 offices</p>
                                                <button class="button-theme">Explore Sales opportunities</button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="tabs-content">
                                                <img src="images/bg/tabs-1.png" class="img-fluid" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <section class="user-1">
                                <div class="container">

                                    <div class="row align-items-center mt-5">
                                        <div class="col-12 col-md-6">
                                            <div class="text-content-tabs">
                                                <h4>SALES</h4>
                                                <h2>What a sales career looks like at pioneer realty</h2>
                                                <p>You’ll get to sell the best homes in Melbourne, providing clients
                                                    with expert advice and service </p>
                                                <p>Take an active role in fully integrated campaigns that deliver
                                                    results, including access to exclusive VPA products and bespoke
                                                    pre-list kits</p>
                                                <p>Create and nurture valuable relationships with buyers and vendors 
                                                </p>
                                                <p> 
                                                    Be part of a team of 500 highly skilled sales consultants selling
                                                    over 8,000 properties per year
                                                    Join our strong and connected network of 40 offices</p>
                                                <button class="button-theme">Explore Sales opportunities</button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="tabs-content">
                                                <img src="images/bg/tabs-1.png" class="img-fluid" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <section class="user-1">
                                <div class="container">

                                    <div class="row align-items-center mt-5">
                                        <div class="col-12 col-md-6">
                                            <div class="text-content-tabs">
                                                <h4>SALES</h4>
                                                <h2>What a sales career looks like at pioneer realty</h2>
                                                <p>You’ll get to sell the best homes in Melbourne, providing clients
                                                    with expert advice and service </p>
                                                <p>Take an active role in fully integrated campaigns that deliver
                                                    results, including access to exclusive VPA products and bespoke
                                                    pre-list kits</p>
                                                <p>Create and nurture valuable relationships with buyers and vendors 
                                                </p>
                                                <p> 
                                                    Be part of a team of 500 highly skilled sales consultants selling
                                                    over 8,000 properties per year
                                                    Join our strong and connected network of 40 offices</p>
                                                <button class="button-theme">Explore Sales opportunities</button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="tabs-content">
                                                <img src="images/bg/tabs-1.png" class="img-fluid" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="industry-support">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="main-industry">
                        <h2>
                            Industry-leading support and training
                        </h2>
                        <p>We’re committed to creating an environment in which our team members are continually
                            encouraged
                            and empowered to grow. Our training programs, delivered both in person and online are
                            designed
                            to meet individual, group, departmental, office and office network needs and objectives. We
                            focus on sourcing the world’s best trainers and mentors so that we remain at the forefront
                            of
                            innovation and opportunity.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-md-4">
                    <div class="custom-card-industry">
                        <img src="images/icon/1.png" class="img-fluid" alt="img">
                        <p>Year-round health and wellbeing programs designed to unlock your potential both personally
                            and professionally</p>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="custom-card-industry">
                        <img src="images/icon/2.png" class="img-fluid" alt="img">
                        <p>Year-round health and wellbeing programs designed to unlock your potential both
                            personally
                            and professionally</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="custom-card-industry">
                        <img src="images/icon/3.png" class="img-fluid" alt="img">
                        <p>Year-round health and wellbeing programs designed to unlock your potential both
                            personally
                            and professionally</p>
                    </div>
                </div>
            </div>
    </section>

    <section class="buying-yesin-sellinp" id="repaer-career">
        <div class="container">
            <div class="row  justify-content-end align-items-center">
                <div class="col-12  col-md-6 ">
                    <div class="sell-suburb">
                        <h2>Supporting causes close to our heart</h2>
                        <p>The pioneer realty Foundation encourages and supports our staff to give back to the
                            communities where pioneer realty operate and to strengthen our connection through the impact
                            it makes to the organisations we partner with.</p>
                        <p><strong>We’ve raised over $3 million since 2013</strong></p>
                        <p> By creating an environment that offer opportunities for our staff to find purpose and
                            develop skills, this allows them to find pride in both pioneer realty and the work they do
                            in their roles and out in the community.</p>
                        <a href="#">Find out more</a>

                    </div>
                </div>
                <div class="col-12 col-md-6"></div>
            </div>
        </div>
    </section>

    <section class="values">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="video-values">
                        <h2>Our values</h2>
                        <p>United we thrive. Collaboration is the foundation of our success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lition-rootes">
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-12 text-center">
                    <!-- Thumbnail Background -->
                    <div class="thumbnail-bg">
                        <img src="images/bg/reper.png" alt="Video Thumbnail" class="img-fluid">
                    </div>
                    <!-- Video -->
                    <video class="video-bg" autoplay="" muted="" loop="">
                        <source src="images/services/React-Planner.mp4" type="video/mp4">

                    </video>
                    <!-- Centered Button -->
                    <button id="playButton" class="custom-btn"><i class="fa-solid fa-play"></i></button>
                </div>
            </div>

        </div>
    </section>
    <section class="United-We-Thrive">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="explore-value">
                        <ul>
                            <h4>EXPLORE OUR VALUES</h4>
                            <li>1. Good people live here</li>
                            <li>2. One big open house</li>
                            <li>3. Make it your space</li>
                            <li>4. Knock down the walls</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="explore-esey">
                        <h2>United We Thrive</h2>
                        <div class="mian-explorer">
                            <h4>Good people live here</h4>
                            <p>At the heart of our culture are genuine people who value integrity and good service. Our
                                team represents Melbourne’s rich diversity, creativity and innovation, and our knowledge
                                of the local property market is second to none.</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="custom-main-explore">
                                            <img src="images/icon/icon-1.png" class="img-fluid" alt="img">
                                            <p>5-star
                                            client reviews</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                    <div class="custom-main-explore">
                                            <img src="images/icon/icon-2.png" class="img-fluid" alt="img">
                                            <p>pioneer realty
                                            Craig Foundation</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                    <div class="custom-main-explore">
                                            <img src="images/icon/icon-3.png" class="img-fluid" alt="img">
                                            <p>Transparency with
                                            vendors</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faqs" id="career-faqs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <div class="motion-faqs">

                        <h2 class="intro-vert"><span>Our current career opportunities</h2>
                        <div class="accordion-container faq-item">
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <h2>01   &nbsp;Sales</h2>
                                    <p class="faqs-parap">6 positions available</p>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body" style="max-height: 0px;">
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
                                    <h2>02 &nbsp;&nbsp;Property Management</h2>

                                    <p class="faqs-parap">8 positions available</p>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body" style="max-height: 0px;">
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
                                    <h2>03 &nbsp;&nbsp;Office management and support</h2>
                                    <p class="faqs-parap">1 position available</p>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body" style="max-height: 0px;">
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
                                    <h2>04 &nbsp;Corporate</h2>
                                    <p class="faqs-parap">0 position available</p>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body" style="max-height: 0px;">
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
                                    <h2>05 &nbsp;&nbsp;Finance</h2>
                                    <p class="faqs-parap">0 position available</p>
                                    
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body" style="max-height: 0px;">
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
    </div></section>
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