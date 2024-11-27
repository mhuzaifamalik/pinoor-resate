<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Tawakkal Enterprises | Your Custom Clearance Experts Since 1985!';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
                                        echo $pageTag;
                                    } else {
                                        echo 'desired tag';
                                    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
                                            echo $pageDesc;
                                        } else {
                                            echo 'desired description';
                                        } ?> />
    <link rel="shortcut icon" href="images/fav.png" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.css" rel="stylesheet"
        type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <style>
    .menu-icon a {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        flex-direction: column;
        width: 30px;
        height: 30px;
        box-shadow: none;
        transition: 0.3s;
    }

    .menu-icon a span {
        background-color: #fff;
        height: 3px;
        width: 35px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .menu-sec {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #fff;
        /* background-position: center center; */
        /* background-repeat: no-repeat; */
        /* background-size: cover; */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 990;
        height: 100vh;
        transform: translateX(-100%);
        transition: cubic-bezier(.77, 0, .175, 1) .8s, -webkit-transform cubic-bezier(.77, 0, .175, 1) .8s;
    }




    /* .menu-icon {
  position: fixed;
  top: 50%;
  transform: translateY(-50%);
  left: 25px;
  z-index: 991;
  transition: 0.3s;
} */

    .toggle-icon-text {
        color: #fff;
        font-size: 20px;
        font-family: 'Outfit', sans-serif;
        text-transform: capitalize;

    }

    .menu-icon a {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        flex-direction: column;
        width: 30px;
        height: 30px;
        box-shadow: none;
        transition: 0.3s;

    }

    .menu-icon a span {
        background-color: #fff;
        height: 3px;
        width: 35px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .menu-icon a .bar-1 {
        width: 30px;
    }

    .menu-icon a .bar-3 {
        width: 25px;
    }

    .menu-icon a.active {
        transform: rotate(180deg) translateX(-15px);
    }

    .menu-icon a.active .bar-1 {
        transform: rotate(-45deg) translateY(18px);
        width: 30px;
    }

    div#particle-canvass {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: -1;
    }

    .menu-icon a.active .bar-2 {
        opacity: 0;
    }

    .menu-icon a.active .bar-3 {
        transform: rotate(45deg) translateY(-19px);
        width: 30px;
    }

    .menu-sec {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 990;
        height: 100vh;
        transform: translatey(-100%);
        transition: cubic-bezier(.77, 0, .175, 1) .8s, -webkit-transform cubic-bezier(.77, 0, .175, 1) .8s;
    }

    .menu-bg-images {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .menu-bg-images img {
        opacity: 0;
        width: 100%;
        position: absolute;
        left: 50%;
        top: calc(50% + 10px);
        transform: translate(-50%, -50%);
        transition: 0.4s;
    }

    .menu-sec.show-menu {
        transform: translateX(0);
    }

    .menu-sec .menu {
        display: flex;
        align-items: unset;
        justify-content: center;
        flex-direction: column;
    }

    .menu-sec .menu .menu-item {
        position: relative;
        transition: opacity .3s ease, transform .3s ease, color .3s ease, -webkit-transform .3s ease;
        opacity: 0;
        transform: translate(0, 100%);
    }

    .menu-sec.show-menu .menu .menu-item {
        opacity: 1;
        transform: translate(0, 0);
    }

    .menu-sec .menu .menu-item .menu-link {
        font-family: 'Xolonium';
        text-transform: capitalize;
        margin: 0 30px;
        font-weight: 400;
        /* line-height: 30px; */
        transition: 0.3s;
        display: flex;
    }

    .menu-sec .menu .menu-item .menu-link span {
        color: #fff;
        font-size: 30px;
        padding: 0 0 0px 0;
        line-height: -3px;
        transition: 0.3s;
        font-family: 'Xolonium';
        font-family: "Alexandria", sans-serif;
    }

    .menu-sec .menu .menu-item:hover .menu-link span {
        color: #0dcaf2;
    }

    .menu-sec .menu .menu-item .menu-link::before {
        content: attr(data-index);
        color: #0dcaf2;
        display: block;
        font-size: 30px;
        /* font-family: 'Xolonium'; */
        font-weight: 700;
        padding: 0 0px 0 0px;
        font-family: "Alexandria", sans-serif;
        letter-spacing: 1px;
    }

    .menu-sec.show-menu .menu .menu-item:nth-child(1) {
        transition-delay: 0.6s;
    }

    .menu-sec.show-menu .menu .menu-item:nth-child(2) {
        transition-delay: 0.65s;
    }

    .menu-sec.show-menu .menu .menu-item:nth-child(3) {
        transition-delay: 0.7s;
    }

    .menu-sec.show-menu .menu .menu-item:nth-child(4) {
        transition-delay: 0.75s;
    }

    .menu-sec.show-menu .menu .menu-item:nth-child(5) {
        transition-delay: 0.8s;
    }

    .menu-sec.show-menu .menu .menu-item:nth-child(6) {
        transition-delay: 0.85s;
    }

    .menu-sec .menu .menu-item .m-sub-menu {
        position: absolute;
        left: 0;
        top: 105;
        padding: 15px 0;
        visibility: hidden;
        opacity: 0;
        transition: 0.3s;
    }

    .menu-sec .menu .menu-item:hover .m-sub-menu {
        visibility: visible;
        opacity: 1;
    }

    .menu-sec .menu .menu-item .m-sub-menu li a {
        color: #fff;
        font-size: 20px;
        font-family: 'Nexa';
        text-transform: capitalize;
        transition: 0.3s;
        font-weight: 100;
    }

    .menu-sec .menu .menu-item .m-sub-menu li a:hover {
        color: #3c3996;

    }

    .introduction ul {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 20px;
    }

    li {
        position: relative;
    }

    .hover-text {
        display: none;
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    li:hover .hover-text {
        display: block;
        opacity: 1;
        transform: translateX(-50%) translateY(-25px);
    }

    /* Basic styling for the main menu */
    .menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .menu-item {
        position: relative;
        margin-bottom: 10px;
    }

    .menu-link {
        text-decoration: none;
        color: #fff;
        font-size: 18px;
    }

    /* Hide submenu by default */
    .m-sub-menu {
        display: none;
        /* Hidden by default */
        padding-left: 20px;
        margin-top: 5px;
    }

    /* Show submenu on hover */
    .menu-item:hover .m-sub-menu {
        display: block;
        /* Display on hover */
    }

    /* Style submenu items */
    .m-sub-menu li {
        margin-bottom: 5px;
    }

    .m-sub-menu li a {
        color: #ccc;
        text-decoration: none;
        font-size: 16px;
    }

    .m-sub-menu li a:hover {
        color: #ddd;
        /* Hover color for submenu items */
    }

    /* Basic styling for the main menu */
    .menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .menu-item {
        margin-bottom: 0px;
    }

    .menu-link {
        text-decoration: none;
        color: #fff;
        font-size: 18px;
    }

    #metion-1:hover #metion-2 {
        display: block !important;
    }

    .menu-item {
        margin-bottom: 0px;
    }

    .menu-link {
        text-decoration: none;
        color: #fff;
        font-size: 18px;
    }

    #metion-1:hover #metion-2 {
        display: block !important;
    }
    </style>
    <header class="header-main">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo-large2.png" class="img-fluid" alt="img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="main-navbar-0">
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto ">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="buy.php">buy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sell.php">sell</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="projects.php">projects</a>
                            </li>


                            <ul class="navbar-nav  motion me-auto ">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:;" id="search-icon">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <ul>
                                        <li class="menu-item">
                                            <div class="menu-icon">

                                                <a id="menu-toggler" href="javascript:;" class="">
                                                    <span class="bar-1"></span>
                                                    <span class="bar-2"></span>
                                                    <span class="bar-3"></span>
                                                </a>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
        <div class="custom-filter" id="custom-filter" style="display: none;">
            <ul>
                <li id="metion-1">
                    <input type="text" placeholder="Search address or suburb">
                </li>
                <li id="metion-2">
                    <span></span>
                    <input type="text" placeholder="For sale">
                </li>
                <li>
                    <select name="cars" id="cars">
                        <option value="volvo">Filters</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </li>
                <li>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </li>
            </ul>
        </div>
        <div class="menu-sec" id="menu-nav">
            <div class="menu-bg-images">
                <img style="opacity: 0.3" src="images/onesourcetech.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-end align-items-center g-5">
                    <div class="col-12 col-md-5">
                        <img id="dynamic-image" src="images/introo.png" class="img-fluid" alt="img">
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="row mt-5 d-flex justify-content-end">
                            <div class="col-12 col-md-4">
                                <div class="invert-12">
                                    <h2>about us</h2>
                                    <ul class="list-unstyled">
                                        <li data-image="images/agent.png">
                                            <a href="#">Find a property</a>
                                        </li>
                                        <li data-image="images/agent.png">

                                            <a href="projects.php">Projects</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="invert-12">
                                    <h2>why sell with us</h2>
                                    <ul class="list-unstyled">
                                        <li data-image="images/agent.png">
                                            <a href="#">Find an agent</a>
                                        </li>
                                        <li data-image="images/agent.png">

                                            <a href="#">Request appraisal</a>
                                        </li>
                                        <li data-image="images/agent.png">

                                            <a href="#">Sold properties</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="invert-12">
                                    <h2>Lease</h2>
                                    <ul class="list-unstyled">

                                        <li data-image="images/agent.png">
                                            <a href="#">Sold properties</a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 d-flex justify-content-end">
                            <div class="col-12 col-md-4">
                                <div class="invert-12">
                                    <h2>About Us</h2>
                                    <ul class="list-unstyled">
                                        <li data-image="images/agent.png">
                                            <a href="services.php">services</a>
                                        </li>
                                        <li data-image="images/agent.png">

                                            <a href="#">Careers</a>
                                        </li data-image="images/agent.png">

                                        <li>

                                            <a href="#">Foundation</a>
                                        </li>
                                        <li data-image="images/agent.png">

                                            <a href="#">privacy policy</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="invert-12">
                                    <h2>Contact Us</h2>
                                    <ul class="list-unstyled">
                                        <li data-image="images/agent.png">
                                            <a href="#">Sign Up for alerts</a>
                                        </li>
                                        <li data-image="images/agent.png">

                                            <a href="#">General enquiry</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="invert-12">
                                    <h2>insights</h2>
                                    <ul class="list-unstyled">

                                        <li data-image="images/agent.png">
                                            <a href="#">The Report FY25</a>
                                        </li>
                                        <li data-image="images/agent.png">

                                            <a href="faqs.php">fAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- <div id="loader">
            <img src="images/Bio-Gas-Logo-Animation.gif" class="logo gif" alt="">
            <span class="side-loader"></span>
            <div class="digits">
                <ul>
                    <li>0</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                    <li>25</li>
                    <li>26</li>
                    <li>27</li>
                    <li>28</li>
                    <li>29</li>
                    <li>30</li>
                    <li>31</li>
                    <li>32</li>
                    <li>33</li>
                    <li>34</li>
                    <li>35</li>
                    <li>36</li>
                    <li>37</li>
                    <li>38</li>
                    <li>39</li>
                    <li>40</li>
                    <li>41</li>
                    <li>42</li>
                    <li>43</li>
                    <li>44</li>
                    <li>45</li>
                    <li>46</li>
                    <li>47</li>
                    <li>48</li>
                    <li>49</li>
                    <li>50</li>
                    <li>51</li>
                    <li>52</li>
                    <li>53</li>
                    <li>54</li>
                    <li>55</li>
                    <li>56</li>
                    <li>57</li>
                    <li>58</li>
                    <li>59</li>
                    <li>60</li>
                    <li>61</li>
                    <li>62</li>
                    <li>63</li>
                    <li>64</li>
                    <li>65</li>
                    <li>66</li>
                    <li>67</li>
                    <li>68</li>
                    <li>69</li>
                    <li>70</li>
                    <li>71</li>
                    <li>72</li>
                    <li>73</li>
                    <li>74</li>
                    <li>75</li>
                    <li>76</li>
                    <li>77</li>
                    <li>78</li>
                    <li>79</li>
                    <li>80</li>
                    <li>81</li>
                    <li>82</li>
                    <li>83</li>
                    <li>84</li>
                    <li>85</li>
                    <li>86</li>
                    <li>87</li>
                    <li>88</li>
                    <li>89</li>
                    <li>90</li>
                    <li>91</li>
                    <li>92</li>
                    <li>93</li>
                    <li>94</li>
                    <li>95</li>
                    <li>96</li>
                    <li>97</li>
                    <li>98</li>
                    <li>99</li>
                    <li>100</li>
                </ul>
            </div> -->
    </header>