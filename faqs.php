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

    .header-main nav .navbar-brand img {
        width: 200px;
        height: 95px;
        filter: brightness(1.5) invert(3) !important;
        object-fit: contain;
        object-fit: cover;
    }
    </style>

    <section class="banner" id="routers">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>FAQS<br></h2>

                </div>
            </div>
        </div>
    </section>




    <section class="faqs">
        
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Agents FAQs</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Choosing a Property</button>
            </li>
        </ul>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="motion-faqs">

                        <h2 class="intro-vert"><span>Frequently</span> Asked Questions</h2>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="accordion-container faq-item">
                                    <div class="accordion-item">
                                        <div class="accordion-item-header active">
                                            <h2>01 &nbsp;What is the difference between a real estate agent and a real
                                                estate
                                                broker?</h2>
                                            <img src="Assets/images/up-icon.svg" alt="">
                                        </div>
                                        <div class="accordion-item-body" style="max-height: 227px;">
                                            <div class="accordion-item-body-content">
                                                <p> Most states require real estate sales professionals to be licensed
                                                    by the
                                                    state, so that they can control education and experience
                                                    requirements and
                                                    have a central authority to resolve consumer problems. The
                                                    terminology used
                                                    to identify real estate professionals varies a little from state to
                                                    state.
                                                    Brokers are generally required to have more education and experience
                                                    than
                                                    real estate salespersons or agents. The person you normally deal
                                                    with is a
                                                    real estate agent or salesperson. The salesperson is licensed by the
                                                    state,
                                                    but must work for a broker. All listings are placed in the broker’s
                                                    name,
                                                    not the salesperson’s. A broker can deal directly with home buyers
                                                    and
                                                    sellers, or can have a staff of salespersons or agents working for
                                                    him or
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
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
                                                    buds – that's the FeelGood way!</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-item-header">
                                            <h2>03 &nbsp;&nbsp;I have a family friend who is a Realtor. I like her and
                                                she is a
                                                help but
                                                she gives me one price to sell my hom for and I think it is too low. So
                                                I called
                                                another agent who suggested a price more in line with my expectations.
                                                Who do I
                                                choose?</h2>
                                            <img src="Assets/images/up-icon.svg" alt="">
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content">
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
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
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
                                                    buds – that's the FeelGood way!</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-item-header">
                                            <h2>05 &nbsp;&nbsp;When buying a new home, what upgrades should we go for?
                                                What
                                                holds the most
                                                value? Do we
                                                upgrade the lot? Pick more square footage in the house? Add an extra
                                                bedroom?,
                                                etc.</h2>
                                            <img src="Assets/images/up-icon.svg" alt="">
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content">
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
                                                    buds – that's the FeelGood way!</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="accordion-container faq-item">
                                    <div class="accordion-item">
                                        <div class="accordion-item-header active">
                                            <h2>01 &nbsp;What is the difference between a real estate agent and a real
                                                estate
                                                broker?</h2>
                                            <img src="Assets/images/up-icon.svg" alt="">
                                        </div>
                                        <div class="accordion-item-body" style="max-height: 227px;">
                                            <div class="accordion-item-body-content">
                                                <p> Most states require real estate sales professionals to be licensed
                                                    by the
                                                    state, so that they can control education and experience
                                                    requirements and
                                                    have a central authority to resolve consumer problems. The
                                                    terminology used
                                                    to identify real estate professionals varies a little from state to
                                                    state.
                                                    Brokers are generally required to have more education and experience
                                                    than
                                                    real estate salespersons or agents. The person you normally deal
                                                    with is a
                                                    real estate agent or salesperson. The salesperson is licensed by the
                                                    state,
                                                    but must work for a broker. All listings are placed in the broker’s
                                                    name,
                                                    not the salesperson’s. A broker can deal directly with home buyers
                                                    and
                                                    sellers, or can have a staff of salespersons or agents working for
                                                    him or
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
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
                                                    buds – that's the FeelGood way!</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-item-header">
                                            <h2>03 &nbsp;&nbsp;I have a family friend who is a Realtor. I like her and
                                                she is a
                                                help but
                                                she gives me one price to sell my hom for and I think it is too low. So
                                                I called
                                                another agent who suggested a price more in line with my expectations.
                                                Who do I
                                                choose?</h2>
                                            <img src="Assets/images/up-icon.svg" alt="">
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content">
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
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
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
                                                    buds – that's the FeelGood way!</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-item-header">
                                            <h2>05 &nbsp;&nbsp;When buying a new home, what upgrades should we go for?
                                                What
                                                holds the most
                                                value? Do we
                                                upgrade the lot? Pick more square footage in the house? Add an extra
                                                bedroom?,
                                                etc.</h2>
                                            <img src="Assets/images/up-icon.svg" alt="">
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content">
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
                                                    buds – that's the FeelGood way!</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="accordion-container faq-item">
                                    <div class="accordion-item">
                                        <div class="accordion-item-header active">
                                            <h2>01 &nbsp;What is the difference between a real estate agent and a real
                                                estate
                                                broker?</h2>
                                            <img src="Assets/images/up-icon.svg" alt="">
                                        </div>
                                        <div class="accordion-item-body" style="max-height: 227px;">
                                            <div class="accordion-item-body-content">
                                                <p> Most states require real estate sales professionals to be licensed
                                                    by the
                                                    state, so that they can control education and experience
                                                    requirements and
                                                    have a central authority to resolve consumer problems. The
                                                    terminology used
                                                    to identify real estate professionals varies a little from state to
                                                    state.
                                                    Brokers are generally required to have more education and experience
                                                    than
                                                    real estate salespersons or agents. The person you normally deal
                                                    with is a
                                                    real estate agent or salesperson. The salesperson is licensed by the
                                                    state,
                                                    but must work for a broker. All listings are placed in the broker’s
                                                    name,
                                                    not the salesperson’s. A broker can deal directly with home buyers
                                                    and
                                                    sellers, or can have a staff of salespersons or agents working for
                                                    him or
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
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
                                                    buds – that's the FeelGood way!</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-item-header">
                                            <h2>03 &nbsp;&nbsp;I have a family friend who is a Realtor. I like her and
                                                she is a
                                                help but
                                                she gives me one price to sell my hom for and I think it is too low. So
                                                I called
                                                another agent who suggested a price more in line with my expectations.
                                                Who do I
                                                choose?</h2>
                                            <img src="Assets/images/up-icon.svg" alt="">
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content">
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
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
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
                                                    buds – that's the FeelGood way!</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-item-header">
                                            <h2>05 &nbsp;&nbsp;When buying a new home, what upgrades should we go for?
                                                What
                                                holds the most
                                                value? Do we
                                                upgrade the lot? Pick more square footage in the house? Add an extra
                                                bedroom?,
                                                etc.</h2>
                                            <img src="Assets/images/up-icon.svg" alt="">
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content">
                                                <p> No fuss, all flavour! Your FeelGood cup doesn't discriminate – it
                                                    happily
                                                    welcomes both hot and cold drinks without a peep. Plus, every sip
                                                    stays true
                                                    to taste, no lingering ghosts of drinks past. Easy peasy clean,
                                                    happy taste
                                                    buds – that's the FeelGood way!</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-container faq-item">
                            <div class="accordion-item">
                                <div class="accordion-item-header active">
                                    <h2>01 &nbsp;What is the difference between a real estate agent and a real estate
                                        broker?</h2>
                                    <img src="Assets/images/up-icon.svg" alt="">
                                </div>
                                <div class="accordion-item-body" style="max-height: 227px;">
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