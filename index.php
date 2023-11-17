<?php
$paypal_url='https://www.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='adnan.mirza68@gmail.com'; // Business email ID
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5BD8RFF');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Design NZ | Premium Website Design service in Hamilton</title>
    <meta name="description"
        content="StraLinks is the #1 Website Design Company in NZ. We are a professional website design agency which offering services in Auckland , Hamilton , ChristChurch and Wellington.">

    <meta name="keywords"
        content="Best Graphic Design Agency In Auckland New Zealand, Best Website Design Agency In Auckland New Zealand">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css?ver=1.1" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom -->
    <link href="css/custom.css?ver=2" rel="stylesheet">
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="canonical" href="https://www.starlinks.nz/">


</head>

<body>
    <!-- Header Starts Here -->
    <header>
        <?php include('inc/inc-header.php'); ?>
    </header>
    <!-- Header Ends Here -->
    <!-- Jumbotron Starts Here -->
    <div class="jumbotron jumbotron-fluid bgbanner">
        <div class="container">
            <div class="jumbtronbg">
                <div class="row padding10">
                    <div class="col-md-8 col-12 mainTxt hideOnDesktop">
                        <h2 class="display-3">Welcome to Starlinks</h2>
                        <h1>Website Design Agency in New Zealand</h1><br />
                        <h5 class="display-4">Web Design - Logo Design - Graphics Design</h5>
                        <div class="promoDiv">
                            <h4>Latest Spring Promotion</h4>
                            <h4>Logo Design in just $49 <sub class="font13">(+GST)</sub></h4>

                            <!--                        Promo Form  -->
                            <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
                                <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="language" value="ENGLISH">
                                <input type="hidden" name="item_name" value="CMS">
                                <input type="hidden" name="item_number" value="1">
                                <input type="hidden" name="credits" value="510">
                                <input type="hidden" name="userid" value="1">
                                <input type="hidden" name="amount" value="56.35">
                                <input type="hidden" name="cpp_header_image" value="https://starlinks.nz/">
                                <input type="hidden" name="no_shipping" value="1">
                                <input type="hidden" name="currency_code" value="NZD">
                                <input type="hidden" name="handling" value="0">
                                <input type="hidden" name="cancel_return" value="https://starlinks.nz/">
                                <input type="hidden" name="return" value="https://starlinks.nz/">
                                <!-- PRICE ITEM -->
                                <div class="text-center">

                                    <div class="promo-submit">
                                        <input class="btn-primary" type="submit" border="0" value="Order Now"
                                            name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    </div>
                                </div>
                            </form>


                            <!--                        Promo Form  -->


                        </div>
                    </div>

                    <div class="col-md-4 col-12 ">

                        <div class="package-main">
                            <div class="box"></div>
                        
                            <h3>
                                Starlinks Business Start up Promotional Package

                            </h3>
                            <h5>*Be online in 2 week’s **</h5>
                            <ul>
                                <li>Logo Design</li>
                                <li>Business card Design</li>
                                <li>Stationery Design </li>
                                <li>Business Branding </li>
                                <li>Social Media Banner </li>
                                <li>Flyer</li>

                            </ul>
                            <h4>**Professional CMS or E-commerce Website *</h4>
                            <ul>
                                <li>1 year Domain Registration </li>
                                <li>1 Year Website Hosting ( 5GB)</li>
                                <li>20 Email addresses </li>
                                <li>Professional content writing (4-5 pages)</li>
                                <li>Search Engine Optimisation on page </li>

                            </ul>

                            <h4 class="text-center text-main-red">All inclusive Package $ 799+GST</h4>

                            <!--                        new Package Form-->

                            <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
                                <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="language" value="ENGLISH">
                                <input type="hidden" name="item_name" value="CMS">
                                <input type="hidden" name="item_number" value="1">
                                <input type="hidden" name="credits" value="510">
                                <input type="hidden" name="userid" value="1">
                                <input type="hidden" name="amount" value="918.85">
                                <input type="hidden" name="cpp_header_image" value="https://starlinks.nz/">
                                <input type="hidden" name="no_shipping" value="1">
                                <input type="hidden" name="currency_code" value="NZD">
                                <input type="hidden" name="handling" value="0">
                                <input type="hidden" name="cancel_return" value="https://starlinks.nz/">
                                <input type="hidden" name="return" value="https://starlinks.nz/">
                                <!-- PRICE ITEM -->
                                <div class="text-center">

                                    <div class="">
                                        <input type="image" src="images/btn_buynowCC_LG.gif" border="0" name="submit"
                                            alt="PayPal - The safer, easier way to pay online!">
                                    </div>
                                </div>
                            </form>





                            <!--                        new Package Form-->

                        </div>









                        <!--                    Form Starts-->
                        <!--
                     <div class="c-discount-inner formonfront">
                    <h3 class="text-center">SIGN UP NOW AND REGISTER YOUR DISCOUNT</h3>
                    <form action="send_mail2.php" method="post">
                      <div class="row">
                        <div class="col-xs-12"><input type="text" required name="usrname" class="form-control" placeholder="Your Name"></div>
                        <div class="col-xs-12"><input type="email" required name="useremail" class="form-control" placeholder="Your Email"></div>
                        <div class="col-xs-12 margin5"><input type="text"  required name="usernumber" class="form-control" placeholder="Your Number"></div>
                        <div class="col-xs-12"><input type="text"  required name="usercompany" class="form-control" placeholder="Your Company"></div>
                        <div class="col-xs-12"><textarea name="msg" required placeholder="Your Message" class="form-control"></textarea></div>
                        <div class="col-xs-12 text-center"><input type="submit"  required name="submit" class="btn btn-primary btn-submit"></div>
                      </div>
                    </form>  
                      </div> -->

                        <!--                    Form Ends-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="quote-btn">
        <div class="container">
            <div class="row">


                <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
                    <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="language" value="ENGLISH">
                    <input type="hidden" name="item_name" value="Website Design">
                    <input type="hidden" name="item_number" value="1">
                    <input type="hidden" name="credits" value="510">
                    <input type="hidden" name="userid" value="1">
                    <input type="hidden" name="amount" value="799">
                    <input type="hidden" name="cpp_header_image" value="https://starlinks.nz/">
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="currency_code" value="NZD">
                    <input type="hidden" name="handling" value="0">
                    <input type="hidden" name="cancel_return" value="https://starlinks.nz/">
                    <input type="hidden" name="return" value="https://starlinks.nz/">
                    <h6 class="heading-style-4" style="color:white; font-size:28px;">Buy Our Business Startup Package
                        Now</h6>
                    <input type="image" src="images/btn_buynowCC_LG.gif" border="0" name="submit"
                        alt="PayPal - The safer, easier way to pay online!">


                </form>
            </div>
        </div>

    </section>
    <!-- Jumbotron Ends Here -->
    <!-- SEO AUDIT SECTION -->
    <section class="seo-audit">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h3 class="text-center">FREE SEO AUDIT</h3>
                </div>
            </div>
            <form action="send_mail2.php" method="post">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <input type="text" required name="seousrname" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-md-4 col-12">
                        <input type="text" required name="seoemail" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="col-md-4 col-12">
                        <input type="text" required name="weburl" class="form-control" placeholder="Website URL">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12 martopbot15 text-center">
                        <input type="submit" name="submit" class="seo-btn btn btn-large btn-info" />
                    </div>
                </div>
            </form>
        </div>
    </section>



    <!-- SEO AUDIT SECTION -->



    <!-- Quote Button Starts -->
    <section class="quote-btn">
        <div class="container">
            <div class="row">
                <a role="button" href="contact-us" class="btn btn-warning quote-btnstyle">Get Quote</a>
            </div>
        </div>
    </section>
    <!-- Quote Button End -->
    <!-- our recent work starts here -->
    <section class="tcssh padTopBot30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>SOME OF OUR RECENT WORK</h2>
                    <p class="text-center padBot5">Have a look through our wide range of successful design and
                        development work and don’t be shy. If you have any specific questions or quote requirements, do
                        please </p>
                    <p class="text-center disNone padTop5"><a href="contact-us"><i class="fa fa-envelope-o">GET IN
                                TOUCH</i></a></p>
                    <p class="text-center fontNormal"><a href="contact-us" class="btn btn-primary btn-lg">GET IN
                            TOUCH</a></p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive lazy" data-original="images/portfolio_responsive/1.jpg"
                            src="images/portfolio_responsive/1.jpg" alt="Starlinks logo design 1">
                        <div class="overlay">
                            <h4>Recent Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive lazy" data-original="images/portfolio_responsive/2.jpg"
                            src="images/portfolio_responsive/2.jpg" alt="Starlinks logo design 2">
                        <div class="overlay">
                            <h4>Branding Portfolio</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive lazy" data-original="images/portfolio_responsive/3.jpg"
                            src="images/portfolio_responsive/3.jpg" alt="Starlinks logo design 3">
                        <div class="overlay">
                            <h4>Logo Portfolio</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive lazy" data-original="images/portfolio_responsive/4.jpg"
                            src="images/portfolio_responsive/4.jpg" alt="Starlinks logo design 4">
                        <div class="overlay">
                            <h4>Full Branding Work</h4>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive lazy" data-original="images/recentwork/H.jpg"
                            src="images/recentwork/H.jpg" alt="Starlinks logo design 5">
                        <div class="overlay">
                            <h4>Corporate Branding</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive lazy" data-original="images/recentwork/G.jpg"
                            src="images/recentwork/G.jpg" alt="Starlinks logo design 6">
                        <div class="overlay">
                            <h4>Recently Designed Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive lazy" data-original="images/portfolio_responsive/6.jpg"
                            src="images/portfolio_responsive/6.jpg" alt="Starlinks logo design 7">
                        <div class="overlay">
                            <h4>Web & Logo</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive lazy" data-original="images/recentwork/B.jpg"
                            src="images/recentwork/B.jpg" alt="Starlinks logo design 8">

                        <div class="overlay point" data-toggle="modal" data-target="#modal6">
                            <h4>web design & logo</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our recent work end here -->
    <!-- full portfolio start-->
    <!-- full portfolio end -->
    <section class="pricing-table tcssh padTop0Bot10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <p>Invest in your business with a beautifully designed website with incredible returns. The majority
                        of the potential customers tend to stop engaging with a website if the layout or content is
                        unattractive. But do not worry about it; Starlinks is there to help you out with every possible
                        solution for your business.
                        We offer you a website with a combination of systematic layout, visuals, and smart navigation,
                        attractive logo design, etc. To incorporate these elements effectively into web design, there is
                        no better idea than to visit stralinks.com. It is one of the best Website Design Company across
                        the globe that represents your business with so many different elements like <a
                            href="seo"><strong>SEO Auckland</strong></a> .

                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Table Starts Here -->
    <section class="pricing-table tcssh padTop0Bot10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Standard Packages</h2>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
                        <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="item_name" value="Logo design">
                        <input type="hidden" name="language" value="ENGLISH">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="credits" value="510">
                        <input type="hidden" name="userid" value="1">
                        <input type="hidden" name="amount" value="29">
                        <input type="hidden" name="cpp_header_image" value="https://starlinks.nz/">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="currency_code" value="NZD">
                        <input type="hidden" name="handling" value="0">
                        <input type="hidden" name="cancel_return" value="https://starlinks.nz/">
                        <input type="hidden" name="return" value="https://starlinks.nz/">
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-red">
                            <div class="panel-heading  text-center">
                                <h3 class="font22">LOGO DESIGN</h3>
                                <p class="lead font30"><strong>$29</strong><span class="font10">(+GST)</span></p>
                                <p class="package-discount"><em>$99 </em> <strong>70% off !</strong></p>

                            </div>
                            <!--  <div class="panel-body text-center">
                                <p class="lead font30"><strong>$29</strong><span class="font10">(+GST)</span></p>
                                <p class="package-discount"><em>$99 </em> <strong>70% off !</strong></p>
-->
                            <div class="disNone">15 % GST = 5.35 <br /> Total cost =$34.35 <br /> (inclusive GST)
                            </div>

                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Professional logo design
                                </li>
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> 2 Revision</li>

                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Logo in jpg, eps, pdf,
                                    ai, psd</li>
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Website & print ready
                                    logos</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 2 Logo Design Concepts
                                </li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> <strong
                                        style="color:red;">Free</strong> Icon Design</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> <strong
                                        style="color:red;">Free</strong> File Format</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> <strong
                                        style="color:red;">Free</strong> Grayscale Format</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> <strong
                                        style="color:red;">Free</strong> Color Options</li>
                            </ul>
                            <div class="panel-footer">
                                <input type="image" src="images/btn_buynowCC_LG.gif" border="0" name="submit"
                                    alt="PayPal - The safer, easier way to pay online!">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
                        <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="language" value="ENGLISH">
                        <input type="hidden" name="item_name" value="Website Design">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="credits" value="510">
                        <input type="hidden" name="userid" value="1">
                        <input type="hidden" name="amount" value="295">
                        <input type="hidden" name="cpp_header_image" value="https://starlinks.nz/">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="currency_code" value="NZD" LOGO DESIGN>
                        <input type="hidden" name="handling" value="0">
                        <input type="hidden" name="cancel_return" value="https://starlinks.nz/">
                        <input type="hidden" name="return" value="https://starlinks.nz/">
                        <!-- PRICE ITEM -->
                        <div id="web-design" class="panel price panel-blue">
                            <div class="panel-heading arrow_box text-center">
                                <h3 class="font22">WEBSITE DESIGN</h3>
                                <p class="lead font30"><strong>$295</strong><span class="font10">(+GST)</span></p>
                                <p class="package-discount"><em>$590 </em> <strong>50% off !</strong></p>

                            </div>
                            <!--<div class="panel-body text-center">
                                <p class="lead font30"><strong>$295</strong><span class="font10">(+GST)</span></p>
                                <p class="package-discount"><em>$590 </em> <strong>50% off !</strong></p>
-->
                            <div class="disNone">15 % GST = 44.25 <br /> Total cost =$339.25 <br /> (inclusive GST)
                            </div>

                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Content Management
                                    System</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Standard Wordpress
                                    Template</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Self Editable/Control
                                    Panel</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Drop down menus</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Navigation bar</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Up to 5 CMS pages</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Contact us and query forms
                                </li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> SEO Friendly</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> -- </li>


                            </ul>
                            <div class="panel-footer">
                                <input type="image" src="images/btn_buynowCC_LG.gif" border="0" name="submit"
                                    alt="PayPal - The safer, easier way to pay online!">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
                        <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="language" value="ENGLISH">
                        <input type="hidden" name="item_name" value="CMS">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="credits" value="510">
                        <input type="hidden" name="userid" value="1">
                        <input type="hidden" name="amount" value="569.25">
                        <input type="hidden" name="cpp_header_image" value="https://starlinks.nz/">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="currency_code" value="NZD">
                        <input type="hidden" name="handling" value="0">
                        <input type="hidden" name="cancel_return" value="https://starlinks.nz/">
                        <input type="hidden" name="return" value="https://starlinks.nz/">
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-grey">
                            <div class="panel-heading arrow_box text-center">
                                <h3 class="font22">BASIC CMS</h3>
                                <p class="lead font30"><strong>$495</strong><span class="font10">(+GST)</span></p>
                                <p class="package-discount"><em>$990 </em> <strong>50% off !</strong></p>
                            </div>
                            <!-- <div class="panel-body text-center">
                                <p class="lead font30"><strong>$495</strong><span class="font10">(+GST)</span></p>
                                <p class="package-discount"><em>$990 </em> <strong>50% off !</strong></p>
-->
                            <div class="disNone">15 % GST = 149.25 <br /> Total cost =$1144.25 <br /> (inclusive
                                GST)</div>

                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Content Management
                                    System</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Self portal (Add / edit
                                    pages)</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Image gallery</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Contact form</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Layout design</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Search engine friendly
                                </li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> One Month Support</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Contact us and query forms
                                </li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> SEO Friendly</li>

                            </ul>
                            <div class="panel-footer">
                                <input type="image" src="images/btn_buynowCC_LG.gif" border="0" name="submit"
                                    alt="PayPal - The safer, easier way to pay online!">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
                        <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="language" value="ENGLISH">
                        <input type="hidden" name="item_name" value="Ecommerce">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="credits" value="510">
                        <input type="hidden" name="userid" value="1">
                        <input type="hidden" name="amount" value="914.25">
                        <input type="hidden" name="cpp_header_image" value="https://starlinks.nz/">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="currency_code" value="NZD">
                        <input type="hidden" name="handling" value="0">
                        <input type="hidden" name="cancel_return" value="https://starlinks.nz/">
                        <input type="hidden" name="return" value="https://starlinks.nz/">
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-green">
                            <div class="panel-heading arrow_box text-center">
                                <h3 class="font22">BASIC ECOMMERCE</h3>
                                <p class="lead font30"><strong>$795</strong><span class="font10">(+GST)</span></p>
                                <p class="package-discount"><em>$1590 </em> <strong>50% off !</strong></p>
                            </div>
                            <!-- <div class="panel-body text-center"> -->


                            <div class="disNone">15 % GST = 224.25 <br /> Total cost =$1719.25 <br /> (inclusive
                                GST)</div>

                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i>Standard Design</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited products</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Order management</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Newsletter</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Multiple payment
                                    options</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i>Self portal (Add / edit
                                    pages) </li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> One Month Support</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Contact us and query forms
                                </li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> SEO Friendly</li>

                            </ul>
                            <div class="panel-footer">
                                <input type="image" src="images/btn_buynowCC_LG.gif" border="0" name="submit"
                                    alt="PayPal - The safer, easier way to pay online!">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Table Ends Here -->
    <!-- More packages button Starts here -->
    <section class="pricing-table tcssh padTopBot10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a class="disNone" href="packages">
                        <h2>More Packages</h2>
                    </a>
                    <p class="text-center fontNormal"><a href="https://www.starlinks.nz/packages.php"
                            class="btn btn-primary btn-lg">More Packages</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- More packages button ends here -->
    <!-- Three Column Sections Starts Here -->
    <section class="tcssh padTop10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center"><span class="proWebDesign">Solutions with a blend of innovation and
                            creativity</span> </h2>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="media">
                        <div class="media-left">
                            <div class="vc-round">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2 class="section-h2">Website designing</h2>
                            <p>Starlinks focuses on three major areas including design, discovery, and development in
                                its website design services to build the best web experience for your users. Our process
                                of web design requires auditing, competition analysis, updating brand guidelines,
                                content creation, sitemap, and responsive design while maintaining <a
                                    href="seo"><strong>SEO Auckland</strong></a>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="media">
                        <div class="media-left">
                            <div class="vc-round">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2 class="section-h2">Ecommerce Websites</h2>
                            <p>As a profound web design company, we understand the importance of an admirable website
                                for your business. Our e-commerce service offers you to build an online reputation with
                                appealing web design services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="media">
                        <div class="media-left">
                            <div class="vc-round">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2 class="section-h2">Responsive Web Design</h2>
                            <p>In a technological era, your business required to delve into responsive web design to
                                provide your customers with a flexible and fluidic experience on different devices.
                                Starlinks will make this possible with their exemplary web design services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OTHER THREE SERVICES -->
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="media">
                        <div class="media-left">
                            <div class="vc-round">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2 class="section-h2">Graphics Design</h2>
                            <p>With the extensive creative competence of our teams, you would not have to worry about
                                the appearance of the website. With our extensive experience, we ensure to provide your
                                business’s online presence strong with exemplary visual design.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="media">
                        <div class="media-left">
                            <div class="vc-round">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2 class="section-h2">Logo Design</h2>
                            <p>Unique <a href="logo-design/"><strong>logo design</strong></a> will help you to identify
                                your brand. Our web designers can design a magnificent and original logo for your
                                business.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="media">
                        <div class="media-left">
                            <div class="vc-round">
                                <i class="fa fa-server" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2 class="section-h2">Search Engine Optimization</h2>
                            <p>Starlinks is the most popular website development and web Design Company. We deliver
                                aesthetical and functional website designs along with reliable and affordable <a
                                    href="seo"><strong>SEO Auckland</strong></a> and digital marketing services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OTHER THREE SERVICES -->
        </div>
    </section>
    <!-- Three Column Sections Ends Here -->
    <!-- Who We Are Starts Here -->
    <section class="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6"><img class="img-responsive lazy" src="images/elision011.png"
                        data-original="images/elision011.png" alt="Starlinks logo design 9" /></div>
                <div class="col-xs-12 col-sm-6">
                    <h2 class="heading-style-1 marTop0"><span>How Starlinks can fulfill your business requirement?
                        </span></h2>
                    <p>
                        Starlinks is an award-winning and world-class website development company with a specialization
                        in offering a pocket-friendly website with higher user- experience to best suit your business
                        requirement. We believe to support every need of our clients that helps in boosting their sales
                        and grow them rapidly. Our web design service comprises of services with an upgraded latest
                        technologies and mobile responsive for all small to large projects. You can reach your target
                        audiences and create your brand awareness digitally via SEO and digital marketing solutions
                        offered by the Starlinks.

                    </p>

                    <h2 class="heading-style-1 marTop5"><span>What makes us the best website development company?</span>
                    </h2>
                    <p>With the pocket-friendly budget and complete web solutions at one place, Starlinks online
                        solutions provide full web and digital support to their clients & customers. We understand our
                        client's business objective in the initial phase and deliver them an expected result with the
                        support and dedication of our professionals. To obtain the best results, we aim to develop 100%
                        transparency between our work and the client's need. The professional team at Starlinks makes us
                        proud by delivering the services for years and is growing more with modern technologies and
                        trends.</p>


                </div>
            </div>
        </div>
    </section>
    <!-- Who We Are Ends Here -->
    <!-- Ask Quote Starts Here -->
    <section class="ask-quote">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="expandDiv">
                        <h2 class="heading-style-1 marBot30">A Responsive Website Design Auckland Agency with a Soul
                        </h2>
                        <p>We always start with brand new ideas, an aim that includes paradigm shift, elegant and
                            user-friendly customer experiences. The focus is not just on the designs we craft but in the
                            soul, we put into those designs. We are a digital web design Auckland agency creating
                            websites that align with your brand persona and make your brand come alive.

                        </p>
                        <div class="cstmShowHide disNone">
                            <h2 class="heading-style-1 marBot30">Crafting Memorable Brand Experiences Right from Ground
                                Zero</h2>
                            <p>The best part is, we are not alone in this adventure. With us, we have developers,
                                thinkers, and website designers from New Zealand… which helps us to lay down a solid
                                foundation for instant ROI and brand recognition. </p>

                            <h2 class="heading-style-1 marBot30">How we Make the Magic Happen.</h2>
                            <p>A nicely designed business website will help you engage visitors and convert them into
                                customers.
                                As devotees to your business, we bring every crazy solution on the table for you to
                                analyze, choose and embrace. We then create a strategy that matches your business
                                persona with the potential customers on the other side on the screen.

                                Simply said: your generated idea will be customized and user-friendly with enticing
                                design atheistic. All your problems will be tackled by our highly passionate and
                                creative team. Our team is not just any other team, we love what we do and we are
                                obsessed with your success. We take your business goals seriously and we showcase those
                                elements on your website. This gives the visitor clean cut view about your business
                                before even doing business with you.</p>
                        </div>

                        <p class="btmBtn c-center">
                            <button
                                class="readMore btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square act ">Read
                                more</button>
                            <button class="readLess btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Read
                                less</button>
                        </p>
                        <!-- why choose us end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ask Quote Ends Here -->
    <?php include('inc/recent-blog-post.php'); ?>
    <?php include('inc/inc-reviews-home.php'); ?>
    <!-- Footer Starts Here -->
    <footer>
        <?php include('inc/inc-footer.php'); ?>
    </footer>
    <!-- Footer Ends Here -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.lazyload.js"></script>
    <!-- Custom -->
    <script src="js/custom.js"></script>
    <script>
    $(document).ready(function() {
        jQuery(function() {
            jQuery("img.lazy").lazyload({
                effect: "fadeIn"
            });
        });
        $(".chstardetails").hide();
        $(".chstar").click(function() {
            $(".chstar").hide();
            $(".chstardetails").show();
        });
        $(".expandDiv .readMore").on("click", function() {
            $(".cstmShowHide").slideDown(), $(".expandDiv .readLess").addClass("act"), $(
                ".expandDiv .readMore").removeClass("act")
        }), $(".expandDiv .readLess").on("click", function() {
            $(".cstmShowHide").slideUp(), $(".expandDiv .readMore").addClass("act"), $(
                ".expandDiv .readLess").removeClass("act")
        });
        $(".expandDiv2 .readMore2").on("click", function() {
            $(".cstmShowHide2").slideDown(), $(".expandDiv2 .readLess2").addClass("act2"), $(
                ".expandDiv2 .readMore2").removeClass("act2")
        }), $(".expandDiv2 .readLess2").on("click", function() {
            $(".cstmShowHide2").slideUp(), $(".expandDiv2 .readMore2").addClass("act2"), $(
                ".expandDiv2 .readLess2").removeClass("act2")
        });
    });
    </script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-81379808-1', 'auto');
    ga('send', 'pageview');
    </script>

    <!-- Schema by SEO Company -->

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "brand": "Starlinks",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "2 A Braund Place",
            "addressLocality": "Glenfield",
            "addressRegion": "Auckland",
            "addressCountry": "New Zealand",
            "postalCode": "0629"
        },
        "description": "Starlinks is your reliable and affordable partner in web design and digital marketing. The business is based in Auckland, NZ and offers comprehensive solutions for all business models. We specialize in ecommerce websites development, custom logo designing & corporate branding solutions. You can too benefit from professional and expert services from Starlinks and start scaling your business to new heights.",
        "name": "Starlinks",
        "email": "info@starlinks.nz",
        "logo": {
            "@type": "ImageObject",
            "url": "https://www.starlinks.nz/images/logo.png",
            "width": "203",
            "height": "94"
        },
        "url": "https://www.starlinks.nz/",
        "sameAs": [
            "https://www.facebook.com/Starlinks-Web-Design-Auckland-Studios-1358043890891017/",
            "https://twitter.com/starlinks_nz",
            "https://www.linkedin.com/in/starlinks-web-design-agency-164575128/"
        ],
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "0800 3278620",
            "contactType": "customer service",
            "areaServed": "NZ"
        }],
        "type": "Service",
        "image": "https://www.starlinks.nz/images/logo.png",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "ratingCount": "7694"
        }
    }
    </script>

    <!-- Schema by SEO Company -->

</body>
<!-- conversion -->
<div class="footer-btn-area-mobileonly">
    <ul>
        <li class="first"><a href="https://www.starlinks.nz/contact-us" target="_blank" class="startchatnow"><i
                    class="fa fa-user" aria-hidden="true"></i> Contact Us</a></li>
        <li class="last"><a href="tel:[08003278620]"><i class="fa fa-phone" aria-hidden="true"></i> Call Toll Free</a>
        </li>
    </ul>
</div>
<!--<div class="header-call"><a href="tel:[08003278620]"></a></div> -->
<!-- conversion -->

</html>