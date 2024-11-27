<?php
$page = 'Project';
$pageDesc = '""';
include 'includes/header.php';
$page = 'Project';
?>


<main>
    <style>
    /* Style the select dropdown */
    select {
        background-color: #f0f0f0;
        /* Default background color */
        color: #333;
        /* Text color */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    /* Add hover effect on select */
    select:hover {
        background-color: #e0e0e0;
        /* Lighter background on hover */
        border-color: #999;
    }

    /* Style individual options */
    option {
        background-color: #fff;
        /* Default background */
        color: #000;
        /* Text color */
    }

    /* Highlighted option on hover (for some browsers that support this) */
    option:hover {
        background-color: #007bff;
        /* Blue background */
        color: #fff;
        /* White text */
    }
    </style>
    <section class="main-reports">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="report-banner">
                        <h2>THE REPORT FY25</h2>
                        <p>The Report FY25 is your definitive guide to the dynamic residential property market in your
                            local area and the broader metropolitan Melbourne region.</p>

                        <ul>
                            <li><button class="mention-porper">Read The Report</button></li>
                            <li><button>Download The Report</button></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="looped-12">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="main-looperd">
                        <ul>
                            <li><a href="#">Ballarat & Central Victoria</a></li>
                            <li><a href="#">Bayside</a></li>
                            <li><a href="#">Bellarine Peninsula</a></li>
                            <li><a href="#">Boroondara</a></li>
                            <li><a href="#">Geelong & The Bellarine Peninsula</a></li>
                            <li><a href="#">Glen Eira</a></li>
                            <li><a href="#">Inner North</a></li>
                            <li><a href="#">Inner West</a></li>
                            <li><a href="#">Kensington & Moonee Valley</a></li>
                            <li><a href="#">Kingston</a></li>
                            <li><a href="#">Manningham</a></li>
                            <li><a href="#">Maroondah</a></li>
                            <li><a href="#">Monash</a></li>
                            <li><a href="#">Mornington Peninsula</a></li>
                            <li><a href="#">North East</a></li>
                            <li><a href="#">Northern</a></li>
                            <li><a href="#">Port Phillip</a></li>
                            <li><a href="#">Richmond & Surrounds</a></li>
                            <li><a href="#">Stonnington</a></li>
                            <li><a href="#">Whitehorse</a></li>
                            <li><a href="#">Yarra Ranges</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="position-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="position-center">
                        <h2>Enter your details to download</h2>
                        <form action="">
                            <ul>
                                <li class="intro-product-1"><select name="cars" id="cars">
                                        <option value="volvo">choose your report</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                    </select>
                                <li class="intro-product"><input type="text" placeholder="first name"></li>
                                <li class="intro-product"><input type="text" placeholder="last name"></li>
                                <li class="intro-product"><input type="text" placeholder="mobile"></li>
                                <li class="intro-product-12"><input type="checkbox"><span>Receive regular market updates
                                    </span> </li>
                                <button>submit now</button>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include 'includes/footer.php';
    $page = 'Sell';
    ?>


</main>