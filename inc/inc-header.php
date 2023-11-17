<style>
/* unvisited link */
.ph_anc a:link {
    color: #FFFFFF;
}

/* visited link */
.ph_anc a:visited {
    color: #FFFFFF;
}

/* mouse over link */
.ph_anc a:hover {
    color: #FFFFFF;
}

/* selected link */
.ph_anc a:active {
    color: #FFFFFF;
}
</style>

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="top-details">
                    <strong>24/7 Dedicated Customer Service :</strong>
                    <!--<span class="mail-info">
            <small><i class="fa fa-envelope-o"></i></small>
            <a href="mailto:info@starlinks.nz">info@starlinks.nz</a>
          </span>-->
                    <span class="phone-info ph_anc">
                        <small><i class="fa fa-phone "></i></small> <!-- +6499097879 --> <a
                            href="tel:[08003278620]">0800 EASTMAN (0800 3278620)</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="social">
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/Starlinks-Web-Design-Auckland-Studios-1358043890891017/"
                                class="s-fb"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/starlinks_nz" class="s-tw"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/starlinks-web-design-agency-164575128/" class="s-li"><i
                                    class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="logo">
                <a href="https://www.starlinks.nz/"><img height="" src="images/logo.png" alt="Starlinks Logo" /></a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="email-address">
                <span class="emailusat">EMAIL US AT:</span>
                <span class="mail-info">
                    <small><i class="fa fa-envelope-o"></i></small>
                    <a href="mailto:info@starlinks.nz">info@starlinks.nz</a>
                </span>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="https://www.starlinks.nz/">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        Services <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="logo-design/">Logo Design</a></li>
                        <li><a href="https://www.starlinks.nz/web-design/">Web Design and Development</a></li>
                        <li><a href="domain-registration.php">Domain Registration</a></li>
                        <li><a href="web-hosting.php">Web Hosting</a></li>
                        <li><a href="sms-marketing.php">SMS Marketing</a></li>
                        <li><a href="email-marketing.php">Email Marketing</a></li>
                        <li><a href="digital-marketing.php">Digital Marketing</a></li>
                        <li><a href="seo.php">Search Engine Optimization</a></li>
                        <li><a href="ui-design.php">UI Design</a></li>
                        <li><a href="app-development.php">App Development</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li style="display:none;"><a href="success-stories.php">Success Stories</a></li>
                <li><a href="best-deals.php">Best Deals</a></li>
                <li><a href="https://www.starlinks.nz/blog">Blog</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php

$url='https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if($_SERVER['REQUEST_URI']!='/'){
$link = $_SERVER["REQUEST_URI"];
$link_array = explode('/',$link);
$lastPart = str_replace('/', '', $link_array[count($link_array) - 1]);
?>


<?php } ?>