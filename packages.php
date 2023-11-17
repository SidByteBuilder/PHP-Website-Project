<?php
$paypal_url='https://www.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='adnan.mirza68@gmail.com'; // Business email ID
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Starlinks - Website Design Company | SEO Web Design | eCommerce Website Design | Template Design | Wordpress
    </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css?ver=1.2" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom -->
    <link href="css/custom.css?ver=2.1" rel="stylesheet">

    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    .package-discount em {
        font-style: normal;
        text-decoration: line-through;
        font-size: 16px;
        color: #222;
        display: inline-block;
    }
    </style>

</head>

<body>

    <!-- Header Starts Here -->
    <header>

        <?php include('inc/inc-header.php'); ?>

    </header>
    <!-- Header Ends Here -->

    <!-- Pricing Table Starts Here -->
    <section class="pricing-table">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">&nbsp;</div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
                        <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="language" value="ENGLISH">
                        <input type="hidden" name="item_name" value="Standard CMS">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="credits" value="510">
                        <input type="hidden" name="userid" value="1">
                        <input type="hidden" name="amount" value="1495">
                        <input type="hidden" name="cpp_header_image" value="http://starlinks.nz/">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="currency_code" value="NZD">
                        <input type="hidden" name="handling" value="0">
                        <input type="hidden" name="cancel_return" value="http://starlinks.nz/">
                        <input type="hidden" name="return" value="http://starlinks.nz/">
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-grey">
                            <div class="panel-heading arrow_box text-center">
                                <h3>ADVANCE ECOMMERCE</h3>
                                <p class="lead" style="font-size:30px"><strong>$1495</strong><span
                                        style="font-size:10px;">(+GST)</span></p>
                                <p class="package-discount"><em>$2990 </em> <strong>50% off !</strong></p>

                            </div>

                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Custom design</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited products</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Order management</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Newsletter</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Multiple payment
                                    options</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i>Self portal (Add / edit
                                    pages) </li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Three Months Support
                                </li>
                            </ul>
                            <div class="cotact-us-btn text-center"><a href="contact-us" class="btn btn-success ">Contact
                                    Us</a></div>
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
                        <input type="hidden" name="item_name" value="Custom CMS">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="credits" value="510">
                        <input type="hidden" name="userid" value="1">
                        <input type="hidden" name="amount" value="995">
                        <input type="hidden" name="cpp_header_image" value="http://starlinks.nz/">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="currency_code" value="NZD">
                        <input type="hidden" name="handling" value="0">
                        <input type="hidden" name="cancel_return" value="http://starlinks.nz/">
                        <input type="hidden" name="return" value="http://starlinks.nz/">
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-grey">
                            <div class="panel-heading arrow_box text-center">
                                <h3>CUSTOMIZED CMS</h3>
                                <p class="lead" style="font-size:30px"><strong>$995</strong><span
                                        style="font-size:10px;">(+GST)</span></p>
                                <p class="package-discount"><em>$1990 </em> <strong>50% off !</strong></p>
                            </div>

                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Custom Design</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i>Self portal( Add / edit
                                    pages)</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Image gallery</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Contact form</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Layout design</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Search engine friendly
                                </li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Three Month Support
                                </li>
                            </ul>
                            <div class="cotact-us-btn text-center"><a href="contact-us" class="btn btn-success ">Contact
                                    Us</a></div>
                            <div class="panel-footer">
                                <input type="image" src="images/btn_buynowCC_LG.gif" border="0" name="submit"
                                    alt="PayPal - The safer, easier way to pay online!">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">&nbsp;</div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
                        <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="language" value="ENGLISH">
                        <input type="hidden" name="item_name" value="Standard Ecommerce">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="credits" value="510">
                        <input type="hidden" name="userid" value="1">
                        <input type="hidden" name="amount" value="795">
                        <input type="hidden" name="cpp_header_image" value="http://starlinks.nz/">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="currency_code" value="NZD">
                        <input type="hidden" name="handling" value="0">
                        <input type="hidden" name="cancel_return" value="http://starlinks.nz/">
                        <input type="hidden" name="return" value="http://starlinks.nz/">
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-green">
                            <div class="panel-heading arrow_box text-center">
                                <h3>STANDARD ECOMMERCE</h3>
                                <p class="lead" style="font-size:30px"><strong>$795</strong><span
                                        style="font-size:10px;">(+GST)</span></p>
                                <p class="package-discount"><em>$1590 </em> <strong>50% off !</strong></p>

                            </div>

                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Template Base</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited products</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Order management</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Newsletter</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Multiple payment
                                    options</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i>Self portal (Add / edit
                                    pages) </li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> One Month Support</li>
                            </ul>
                            <div class="cotact-us-btn text-center"><a href="contact-us" class="btn btn-success ">Contact
                                    Us</a></div>
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
                        <input type="hidden" name="item_name" value="Custom Ecommerce">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="credits" value="510">
                        <input type="hidden" name="userid" value="1">
                        <input type="hidden" name="amount" value="499">
                        <input type="hidden" name="cpp_header_image" value="http://starlinks.nz/">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="currency_code" value="NZD">
                        <input type="hidden" name="handling" value="0">
                        <input type="hidden" name="cancel_return" value="http://starlinks.nz/">
                        <input type="hidden" name="return" value="http://starlinks.nz/">
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-green">
                            <div class="panel-heading arrow_box text-center">
                                <h3>BASIC CMS</h3>
                                <p class="lead" style="font-size:30px"><strong>$499</strong><span
                                        style="font-size:10px;">(+GST)</span></p>
                                <p class="package-discount"><em>$990 </em> <strong>50% off !</strong></p>
                            </div>

                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Template Base</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Self portal(Add / edit
                                    pages)</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Image gallery</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Contact form</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Layout design</li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> Search engine friendly
                                </li>
                                <li class="list-group-item"><i class="icon-ok text-success"></i> One Month Support</li>
                            </ul>
                            <div class="cotact-us-btn text-center"><a href="contact-us" class="btn btn-success ">Contact
                                    Us</a></div>
                            <div class="panel-footer">
                                <input type="image" src="images/btn_buynowCC_LG.gif" border="0" name="submit"
                                    alt="PayPal - The safer, easier way to pay online!">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">&nbsp;</div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">&nbsp;</div>

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
                        <input type="hidden" name="cpp_header_image" value="http://starlinks.nz/">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="currency_code" value="NZD">
                        <input type="hidden" name="handling" value="0">
                        <input type="hidden" name="cancel_return" value="http://starlinks.nz/">
                        <input type="hidden" name="return" value="http://starlinks.nz/">
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-blue">
                            <div class="panel-heading arrow_box text-center">
                                <h3>Basic CMS</h3>
                                <p class="lead" style="font-size:30px"><strong>$295</strong><span
                                        style="font-size:10px;">(+GST)</span></p>
                                <p class="package-discount"><em>$590 </em> <strong>50% off !</strong></p>

                            </div>

                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Content Management Service
                                </li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Responsive layout</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Responsive layout</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Drop down menus</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Navigation bar</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Up to 5 html pages</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 5 unique layouts</li>
                            </ul>
                            <div class="cotact-us-btn text-center"><a href="contact-us" class="btn btn-success ">Contact
                                    Us</a></div>
                            <div class="panel-footer">
                                <input type="image" src="images/btn_buynowCC_LG.gif" border="0" name="submit"
                                    alt="PayPal - The safer, easier way to pay online!">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">&nbsp;</div>
            </div>

        </div>
    </section>
    <!-- Pricing Table Ends Here -->

    <!-- Ask Quote Starts Here -->
    <section class="ask-quote">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="heading-style-4">
                        Do you want to Design Your <span>Website</span> Feel Free to ask for a <span>FREE QUOTE</span>
                    </h3>
                    <p><a href="contact-us" class="btn btn-primary btn-lg" style="margin-top: 15px;">GET QUOTE</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Ask Quote Ends Here -->

    <!-- Footer Starts Here -->
    <footer>
        <?php include('inc/inc-footer.php'); ?>
    </footer>
    <!-- Footer Ends Here -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom -->
    <script src="js/custom.js"></script>
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
</body>

</html>