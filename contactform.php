<!doctype html>
<html class="no-js"><!-- InstanceBegin template="/Templates/MainTemplate.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
    <!-- INCLUDE THIS BLOCK OF CODE IN ALL HTML DOCUMENTS!^-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>DRPrep</title>
    <!-- InstanceEndEditable -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Esteban' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/nivoslider-default.css" />
    <link rel="stylesheet" href="https://cdn.moot.it/1/moot.css">
    
    <script src="js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://cdn.moot.it/1/moot.min.js"></script>
    <script src="js/jquery.tools.min.js"></script>
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>
<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <nav class="st-menu st-effect-8" id="menu-8">
                <h2 class="icon icon-stack">Menu</h2>
                <ul>
                    <li><a class="icon icon-world" href="index.html">Home</a></li>
                    <li><a class="icon icon-params" href="mobile.html">Mobile Application</a></li>
                    <li><a class="icon icon-user" href="aboutus.html">About Us</a></li>
                    <li><a class="icon icon-note" href="faq.html">FAQ</a></li>
                    <li><a class="icon icon-mail" href="contactus.html">Contact</a></li>
                    <li><a class="icon icon-bubble" href="forum.html">Support</a></li>
                </ul>
            </nav>
            <div class="st-content"><!-- this is the wrapper for the content -->
                <div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
                    <!-- Top Navigation -->
                        <div id="st-trigger-effects" class="column">
                            <button data-effect="st-effect-8">Menu</button>
                        </div>
                    <header>
                        <img src="images/Logo.png" id="logo">
                    </header>
                    <div class="main clearfix">
						<!-- InstanceBeginEditable name="MainContent" -->
                        	<?php
                                $to = "zackeleit@gmail.com";
                                $subject = "DR Prep Form Submission";
                                $body = "Name = ".$_POST['name']."\n From = ".$_POST['email']."\n Message = ".$_POST['comments'];
                                $headers = 'From: '.$_POST['email']."\r\n".
                                			'Reply-To: '.$_POST['email']."\r\n".
                                            'X-Mailer: PHP/'.phpversion();
                                
                                if(mail ($to, $subject, $body, $headers) ) {
                                    echo "<h2 class='frmMsg'>Thank you!</h2>";	
                                } else {
                                    echo "<h2 class='frmMsg'>Something went wrong! =(</h2>";	
                                }                                
                            ?>					
                        <!-- InstanceEndEditable -->                        
                    </div><!-- /main -->
                    <footer>
						<script>
						$(document).ready(function() {
                          $(function() {
                            $("a[rel]").overlay({mask: '#000'});
                          });
						});
                        </script>
                        <ul>
                            <li><a href="aboutus.html">About </a>-</li>
                            <li><a href="#">Twitter </a >-</li>
                            <li><a href="#">Facebook </a>-</li>
                            <li><a href="#" rel="#disclosure">Disclosure </a>-</li>
                            <li><a href="#" rel="#terms">Terms</a></li>
                        </ul>
                        <p>&copy; DRPrep</p>
                    </footer>
                </div><!-- /st-content-inner -->
            </div><!-- /st-content -->
        </div><!-- /st-pusher -->
    </div><!-- /st-container -->
    <div class="effect" id="disclosure">
    <h3>Disclosure</h3>
    	<p id="info">Access to FTSE Media
      It is your responsibility to ensure your computer or mobile device meets all the necessary technical specifications to enable you to access and use the FTSE Media. Apple Applications and Andriod Applications are only licensed for use on a device owned or controlled by you and using the Apple iPhone OS or Andriod OS (as applicable) so you must make sure that you use an appropriate device to access and use any Apple Application or Andriod Application. Other Applications may only be used on a device owned or controlled by you running the OS for which the Other Application concerned was designed.
      We may, from time to time, restrict access to certain features, parts or content of the Website, or the entire Website.
      Operation of the FTSE Media
      We cannot guarantee the continuous, uninterrupted or error-free operability of the FTSE Media. There may be times when all of, or certain features, parts or content of, the FTSE Media, becomes unavailable (whether on a scheduled or unscheduled basis) or are modified, suspended or withdrawn by us, in our sole discretion, without notice to you. You agree that we will not be liable to you or to any third party for any unavailability, modification, suspension or withdrawal of any FTSE Media, or any features, parts or content of any FTSE Media.
      What you are allowed to do
      You may only use the FTSE Media for your own non-commercial personal use and only in accordance with these terms.
      Subject to the following sections, you may retrieve and display content from the FTSE Media on a computer or mobile device, print pages from our website and store the FTSE Media in electronic form.</p>
    </div>
    <div class="effect" id="terms">
        <span class="close"></span>
        <h3>Terms of Agreement</h3>
        <p id="info">Access to FTSE Media
      It is your responsibility to ensure your computer or mobile device meets all the necessary technical specifications to enable you to access and use the FTSE Media. Apple Applications and Andriod Applications are only licensed for use on a device owned or controlled by you and using the Apple iPhone OS or Andriod OS (as applicable) so you must make sure that you use an appropriate device to access and use any Apple Application or Andriod Application. Other Applications may only be used on a device owned or controlled by you running the OS for which the Other Application concerned was designed.
      We may, from time to time, restrict access to certain features, parts or content of the Website, or the entire Website.
      Operation of the FTSE Media
      We cannot guarantee the continuous, uninterrupted or error-free operability of the FTSE Media. There may be times when all of, or certain features, parts or content of, the FTSE Media, becomes unavailable (whether on a scheduled or unscheduled basis) or are modified, suspended or withdrawn by us, in our sole discretion, without notice to you. You agree that we will not be liable to you or to any third party for any unavailability, modification, suspension or withdrawal of any FTSE Media, or any features, parts or content of any FTSE Media.
      What you are allowed to do
      You may only use the FTSE Media for your own non-commercial personal use and only in accordance with these terms.
      Subject to the following sections, you may retrieve and display content from the FTSE Media on a computer or mobile device, print pages from our website and store the FTSE Media in electronic form.
      Additional terms may also apply to certain features, parts or content of the FTSE Media and, where they apply, are set out in these terms or will be displayed before you access the relevant features, parts or content.
      What you are not allowed to do
      Except to the extent expressly set out in these terms, you are not allowed to:
      create (whether for yourself or someone else) any financial product or service which seeks to match the performance of, or the capital or income value of which is related to, any FTSE Media (including any FTSE Index);
      republish, redistribute or re-transmit any FTSE Media;
      copy or store the FTSE Media other than for your own personal non-commercial use and as may occur incidentally in the normal course of use of your browser or mobile device;
      store the FTSE Media (including pages of our website) on a server or other storage device connected to a network or create a database by systematically downloading and storing any data from the FTSE Media;
      remove or change any content of the FTSE Media or attempt to circumvent security or interfere with the proper working of the FTSE Media or any servers on which it is hosted;
      create links to our website from any other website, without our prior written consent, although you may link from a website that is operated by you provided the link is not misleading or deceptive and fairly indicates its destination, you do not imply that we endorse you, your website, or any products or services you offer, you link to (and do not frame or replicate) the home page of our website, and the linked website does not contain any content that is unlawful, threatening, abusive, libellous, pornographic, obscene, vulgar, indecent, offensive or which infringes on the intellectual property rights or other rights of any third party; or
      otherwise do anything that it is not expressly permitted by these terms.
      You must only use the FTSE Media and anything available via the FTSE Media for lawful purposes (complying with all applicable laws and regulations), in a responsible manner, and not in a way that might damage our name or reputation or that of any of our affiliates.
      All rights granted to you under these terms will terminate immediately in the event that you are in breach of any of them.
      To do anything with the FTSE Media that is not expressly permitted by these terms, you will need a separate licence from us. Please contact us via info@ftse.com.
      Apple Applications
      If the FTSE Media that you access and use is an Apple Application:
      the Apple Application may only be accessed and used on a device owned or controlled by you and using the Apple iPhone OS;
      you acknowledge and agree that:
      • Apple has no obligation at all to provide any support or maintenance services in relation to the Apple Application. If you have any maintenance or support questions in relation to the Apple Apps, please contact us, not Apple, using the contacting us details at the end of these terms;
      • although these terms are entered into between us and you (and not Apple), Apple, as a third party beneficiary under these terms, will have the right to enforce these terms against you;
      • except as otherwise expressly set out in these terms, any claims relating to the possession or use of the Apple Application are between you and us (and not between you, or anyone else, and Apple); and
      • in the event of any claim by a third party that your possession or use (in accordance with these terms) of the Apple Application infringes any intellectual property rights, Apple will not be responsible or liable to you in relation to that claim;
      you represent and warrant that:
      • you are not, and will not be, located in any country that is the subject of a US Government embargo or that has been designated by the US Government as a "terrorist supporting" country; and
      • you are not listed on any US Government list of prohibited or restricted parties; and
      if the Apple Application that you have purchased does not conform to any warranty applying to it, you may notify Apple, which will then refund the purchase price of the Apple Application to you. Subject to that, and to the maximum extent permitted by law, Apple does not give or enter into any warranty, condition or other term in relation to the Apple Application and will not be liable to you for any claims, losses, costs or expenses of whatever nature in relation to the Apple Application or as a result of you or anyone else using the Apple Apps or relying on any of its content.
      Android Applications
      If the FTSE Media that you access and use is an Android Application:
      the Andriod Application may only be accessed and used on a device owned or controlled by you and using the Apple iPhone OS;
      you acknowledge and agree that:
      • Google has no obligation at all to provide any support or maintenance services in relation to the Android Application. If you have any maintenance or support questions in relation to the Andriod Application, please contact us, not Google, using the contacting us details at the end of these terms;
      • although these terms are entered into between us and you (and not Google), Google, as a third party beneficiary under these terms, will have the right to enforce these terms against you;
      • except as otherwise expressly set out in these terms, any claims relating to the possession or use of the Andriod Application are between you and us (and not between you, or anyone else, and Google); and
      • in the event of any claim by a third party that your possession or use (in accordance with these terms) of the Google Application infringes any intellectual property rights, Google will not be responsible or liable to you in relation to that claim;
      Intellectual property rights
      All intellectual property rights in the FTSE Media and in any content of the FTSE Media (including text, graphics, software, photographs and other images, videos, sound, trade marks and logos) are owned by us or our licensors. The trade marks “FTSE”, “FT-SE” and “Footsie” are owned by the London Stock Exchange Group companies and are used by FTSE under licence. Except as expressly set out here, nothing in these terms gives you any rights in respect of any intellectual property owned by us or our licensors and you acknowledge that you do not acquire any ownership rights by downloading or using any FTSE Media. In the event you print off, copy or store any FTSE Media (only as permitted by these terms), you must ensure that any copyright, trade mark or other intellectual property right notices contained in the original content are reproduced.
      Content and its intended use
      We may change the format and content of the FTSE Media from time to time. You agree that your use of the FTSE Media is on an 'as is' and 'as available' basis and at your sole risk.
      Whilst we try to make sure that all information contained in the FTSE Media (other than any user-generated content) is correct, it is not intended to amount to authority or advice on which reliance should be placed.
      The FTSE Media are not intended to constitute or form the basis of any advice (professional or otherwise) or to be used in, or in relation to, any investment or other decision or transaction.
      We do not accept any liability (regardless of how it might arise) for any claim or loss arising from:
      any advice given;
      any investment or other decision made; or
      any transaction made or effected;
      in reliance on, or on the basis of, any FTSE Media nor for any such liability arising from any other use of, or reliance on, the FTSE Media.
      We do not enter into any terms or make any representations as to the accuracy, completeness, currency, correctness, reliability, integrity, quality, fitness for purpose or originality of any content of the FTSE Media and, to the fullest extent permitted by law, all implied warranties, conditions or other terms of any kind are hereby excluded. To the fullest extent permitted by law, we accept no liability for any loss or damage of any kind incurred as a result of you or anyone else using the FTSE Media or relying on any of its content.
      We cannot and do not guarantee that any content of the FTSE Media will be free from viruses and/or other code that may have contaminating or destructive elements. It is your responsibility to implement appropriate IT security safeguards (including anti-virus and other security checks) to satisfy your particular requirements as to the safety and reliability of content.
      Your personal information
      Use of your personal information submitted to us (whether via our website or otherwise) is governed by our privacy policy .
      External links
      Our website may, from time to time, include links to external sites. We have included links to these sites to provide you with access to information and services that you may find useful or interesting. We are not responsible for the content of these sites or for anything provided by them and do not guarantee that they will be continuously available. The fact that we include links to such external sites does not imply any endorsement of, or association with, their operators.
      General
      Nothing in these terms shall limit or exclude our liability to you for death or personal injury caused by our negligence or for fraudulent misrepresentation or any other liability that may not, under English law, be limited or excluded. Subject to this, if you are a consumer and not a business user, in no event shall we be liable to you for any business losses and any liability we do have for losses you suffer is strictly limited to losses that were reasonably foreseeable, and if you are a business user, in no event shall we be liable to you for any indirect or consequential losses, or for any loss of profit, revenue, contracts, data, goodwill or other similar losses.
      These terms shall be governed by English law, and you agree that any dispute between us regarding them or the FTSE Media will only be dealt with by the English courts, provided that, if you are a consumer and not a business user and live in a part of the United Kingdom other than England, the applicable law of that part of the United Kingdom will govern and any dispute will only be dealt with by the courts there. Nothing shall prevent us from bringing proceedings to protect our intellectual property rights before any competent court.</p>
	</div>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/classie.js"></script>
	<script src="js/sidebarEffects.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect: 'slide', // Specify sets like: 'fold,fade,sliceDown'
                slices: 15, // For slice animations
                boxCols: 8, // For box animations
                boxRows: 4, // For box animations
                animSpeed: 250, // Slide transition speed
                pauseTime: 2000, // How long each slide will show
                startSlide: 0, // Set starting Slide (0 index)
                directionNav:false, // Arrow navigation
                controlNav: false, // 1,2,3... navigation
                pauseOnHover: false, // Stop animation while hovering
                captionOpacity:0					
            });
        });
    </script>
</body>
<!-- InstanceEnd --></html>