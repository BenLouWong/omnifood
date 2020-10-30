<!DOCTYPE html> <!--make sure you save your html file in the parent folder that contains all the subfolders of the relevant information-->

<html lang="en"> <!--lang defines the language-->
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta tag defines metadata about an HTML document. Metadata is information about data. The meta tag always goes inside the head and are typically used to specify character set, page description, keywords, author of ht edocument and viewport settings--> <!--https://www.w3schools.com/tags/tag_meta.asp-->
        <meta name="description" content="Omnifood is a premium food delivery service with the mession to bring affordable and healthy meals to as many people as possible.">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css"> 
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css"> <!--integrates the ionicons css file-->
        <link rel="stylesheet" type="text/css" href="resources/css/style.css"> <!--What is a stylesheet: https://www.w3.org/TR/html401/present/styles.html-->
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300;1,400&display=swap" rel="stylesheet"> <!--found from google fonts-->
        <title>Omnifood</title>
        
        <!--creating favicon: https://realfavicongenerator.net/ -->
        
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
    </head>
    
    <body>
        
        <header> <!--header represents a container for introductory content such as a logo, heading or a set of navigational links-->
            
            <nav> <!--Nav defines a set of navigation links. Nav is only intended for a major block of navigational links-->
                
                <div class="row"> <!--a row will always be centered--> 
                    
                    <img src="resources/images/logo-white.png" alt="Omnifood logo white" class="logo"> <!--you can insert images as long as they are located within the folder that your project is saved in-->
                    <img src="resources/images/logo.png" alt="Omnifood logo black" class="logo_black"> <!--you can insert images as long as they are located within the folder that your project is saved in-->
                    <ul class="main-navigation js--main-nav"> <!--"ul" defines an unorderd bulleted list-->
                        <li><a href="#features">Food delivery</a></li> <!--create anchor by using "#xxx"-->
                        <li><a href="#works">How it works</a></li>
                        <li><a href="#cities">Our cities</a></li>
                        <li><a href="#plans">Sign up</a></li><!--"li" defines each link-->
                    </ul> 
                    
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                    
                </div>
                
            </nav>
            
            <div class="hero-textbox"> <!--this is the textbox that floats over the hero image-->
                
                <h1>Goodbye junk food. <br> Hello super healthy meals.</h1>
                <a class="button button_full js--scroll-to-plans" href="#">I’m hungry </a> <!--button contains all the formatting--> <!--button full contains all the colours and whatnot-->
                <a class="button button_ghost js--scroll-to-start" href="#">Show me more </a>
                
            </div>
            
        </header>
        
        <section class="section-features js--section-features" id="features"> <!--works like a header, creates a container for a section--> <!--id is required for anchors-->
            
            <div class="row"> 
                
                <h2>Get food fast &mdash; not fast food</h2> <!--&mdash; is a special character/entity. There are mroe of these here: https://www.w3schools.com/charsets/ref_utf_punctuation.asp -->   
                <p class="long-copy">      
                    Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!         
                </p>
                
            </div> 
            
            <div class="row js--wp-1">
                
                <div class="col span-1-of-4 box"> <!--this is related to the grid.css file. The span option is flexible and any of the options like 1-of-3 can be selected depending on layout-->                    
                    <i class="ion-ios-calendar-outline icon_big"></i> <!--"i" defines a part of text in an alternate voice or mood. It is often used to indicate a technical term, a thought, a phrase from a nother language etc. You should only use "i" when there is not a mroe appropriate semantic element--> <!--https://ionicons.com/v2/-->
                    <h3>Up to 365 days/year</h3>              
                    <p>                 
                        Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.              
                    </p>               
                </div> 
                
                <div class="col span-1-of-4 box">      
                    <i class="ion-ios-timer-outline icon_big"></i> <!--"i" defines a part of text in an alternate voice or mood. It is often used to indicate a technical term, a thought, a phrase from a nother language etc. You should only use "i" when there is not a mroe appropriate semantic element-->                 
                    <h3>Ready in 20 minutes</h3>         
                    <p>                  
                        You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.                   
                    </p>                
                </div>
                    
                <div class="col span-1-of-4 box">                   
                    <i class="ion-ios-sunny-outline icon_big"></i> <!--"i" defines a part of text in an alternate voice or mood. It is often used to indicate a technical term, a thought, a phrase from a nother language etc. You should only use "i" when there is not a mroe appropriate semantic element-->              
                    <h3>100% organic</h3>         
                    <p>               
                        All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!                 
                    </p>                   
                </div>
                    
                <div class="col span-1-of-4 box">              
                    <i class="ion-ios-cart-outline icon_big"></i> <!--"i" defines a part of text in an alternate voice or mood. It is often used to indicate a technical term, a thought, a phrase from a nother language etc. You should only use "i" when there is not a mroe appropriate semantic element-->                    
                    <h3>Order anything</h3>           
                    <p>                    
                        We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!                    
                    </p>                   
                </div> 
                
            </div>
        
        </section>
        
        <section class="section-meals" id="meals"> <!--making a grid of images-->
            
            <ul class="meals-showcase clearfix"> <!--this means that the float will be cleared after the end of hte ul element-->
                
                <li>   
                    <figure class="meal-photo">                
                        <img src="resources/images/1.jpg" alt="Korean bibimbap with egg and vegetables">                    
                    </figure>                
                </li>
                
                <li>             
                    <figure class="meal-photo">                   
                        <img src="resources/images/2.jpg" alt="Simple italian pizza with cherry tomatoes">                      
                    </figure>                
                </li>
                
                <li>             
                    <figure class="meal-photo">                      
                        <img src="resources/images/3.jpg" alt="Chicken breast steak with vegetables">                     
                    </figure>                 
                </li>
                
                <li>            
                    <figure class="meal-photo">                    
                        <img src="resources/images/4.jpg" alt="Autumn pumpkin soup">                 
                    </figure> <!--figure specifies self-contained content, like illustrations, diagrams, photos, code listings etc-->     
                </li>
            
            </ul>
            
            <ul class="meals-showcase clearfix">
            
                <li>           
                    <figure class="meal-photo">                
                        <img src="resources/images/5.jpg" alt="Paleo beef steak with vegetables">                   
                    </figure>               
                </li>  
                
                <li>           
                    <figure class="meal-photo">                         
                        <img src="resources/images/6.jpg" alt="Healthy baguette with egg and vegetables">                 
                    </figure>         
                </li>  
                
                <li>  
                    <figure class="meal-photo">              
                        <img src="resources/images/7.jpg" alt="Burger with cheddar and bacon">      
                    </figure>    
                </li>      
                        
                <li>
                    <figure class="meal-photo">                 
                        <img src="resources/images/8.jpg" alt="Granola with cherries and strawberries">   
                    </figure> <!--figure specifies self-contained content, like illustrations, diagrams, photos, code listings etc-->
                </li>
            
            </ul>
            
        </section>
        
        <section class="section-steps" id="works">
        
            <div class="row">
                
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
                
            </div>
            
            <div class="row">
            
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/images/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
                </div>
                
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>
                    <a href="#" class="button-app">
                        <img src="resources/images/download-app.svg" alt="App store button">
                    </a>
                    <a href="#" class="button-app">
                        <img src="resources/images/download-app-android.png" alt="Play store button">
                    </a> 
                </div>
                
            </div>
        
        </section>
        
        <section class="section-citites" id="cities">
        
            <div class="row">
                
                <h2>We're currently in these cities</h2>
                
            </div>
            
            <div class="row js--wp-3">
                
                <div class="col span-1-of-4 box">
                    <img src="resources/images/lisbon-3.jpg" alt="Lisbon">
                    <h3>Lisbon</h3>
                    <div class="city-feature">
                        <i class="ion-ios-people icon-small"></i>
                        1600+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        60+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_lx</a>
                    </div>
                </div>
                
                <div class="col span-1-of-4 box">
                    <img src="resources/images/san-francisco.jpg" alt="San Francisco">
                    <h3>San Francisco</h3>
                    <div class="city-feature">
                        <i class="ion-ios-people icon-small"></i>
                        3700+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        160+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_sf</a>
                    </div>
                
                </div>
                
                <div class="col span-1-of-4 box">
                    <img src="resources/images/berlin.jpg" alt="Berlin">
                    <h3>Berlin</h3>
                    <div class="city-feature">
                        <i class="ion-ios-people icon-small"></i>
                        2300+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        110+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_berlin</a>
                    </div>
                </div>
                
                <div class="col span-1-of-4 box">
                    <img src="resources/images/london.jpg" alt="London">
                    <h3>London</h3>
                    <div class="city-feature">
                        <i class="ion-ios-people icon-small"></i>
                        1200+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        50+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_london</a>
                    </div>
                </div>
            
            </div>
           
        </section>
        
        <section class="section-testomonials">
        
            <div class="row">
            
                <h2>Our customers can't live without us</h2>
            
            </div>
            
            <div class="row">
            
                <div class="col span-1-of-3">
                    <blockquote>
                        Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                        <cite><img src="resources/images/customer-1.jpg" alt="Person01">Alberto Duncan</cite> <!--cite defines the title of a creative work-->
                    </blockquote><!--blockquote specifies a section that is quote from another source-->                    
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                        <cite><img src="resources/images/customer-2.jpg" alt="Person02">Joana Silva</cite>
                    </blockquote><!--blockquote specifies a section that is quote from another source-->
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                        <cite><img src="resources/images/customer-3.jpg" alt="Person03">Milton Chapman</cite>
                    </blockquote><!--blockquote specifies a section that is quote from another source-->                    
                </div>
                
            </div>
        
        </section>
        
        <section class="section-plans js--section-plans" id="plans">
        
            <div class="row">
            
                <h2>Start eating healthy today</h2>
            
            </div>
            
            <div class="row">
            
                <div class="col span-1-of-3">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3>Premium</h3>
                            <p class="plan-price">$399 <span>/month</span></p> <!--span is an inline container used to markup a part of a text or a part of a document. The span tag is easiliy styled by CSS or manipulated with JavaScript using the class or id attribute. Span acts in the same way as a div element exccept the span is an inline element-->
                            <p class="plan-price-meal">That's only $13.30 per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day
                                </li>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7
                                </li>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations
                                </li>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>Free Delivery
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="button button_full">Sign up now!</a>
                        </div>
                    </div>
                </div>
                    
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">$149 <span>/month</span></p>
                            <p class="plan-price-meal">That's only $14.9 per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days per month
                                </li>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7
                                </li>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations
                                </li>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>Free Delivery
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="button button_ghost">Sign up</a>
                        </div>
                    </div>
                </div>
                        
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">$19 <span>/meal</span></p>
                            <p class="plan-price-meal">&nbsp;</p> <!--in order to add a space after a certain item, you need to use a special character-->
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>Unsure? Try us out per meal!
                                </li>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>Order from 8am to 12pm
                                </li>
                                <li>
                                    <i class="ion-ios-close-empty icon-small"></i>
                                </li>
                                <li>
                                    <i class="ion-ios-checkmark-empty icon-small"></i>Free Delivery
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="button button_ghost">Sign up</a>
                        </div>
                    </div>
                </div>
            
            </div>
        
        </section>
        
        <section class="section-form" id="form">
        
            <div class="row">
                
                <h2>We're happy to hear from you</h2>
                
            </div>
            
            <div class="row">
            
                <form method="post" action="mailer.php" class="contact-form"> <!--The method attribute specifies how to send form-data (the form-data is sent to the page specified in the action attribute).https://www.w3schools.com/tags/att_form_method.asp--> 
                    <!--The action attribute specifies where to send the form-data when a form is submitted.--> <!--https://github.com/PHPMailer/PHPMailer-->
                    
                    <div class="row">
                        
                        <?php
                        
                        if($_GET['success']==1){
                            echo "<div class=\"form-messages success\">
                                Thank you! Your message has been sent.
                        </div>";
                        }
                        
                        if($_GET['success']== -1){
                            echo "<div class=\"form-messages error\">
                            Oops! Something went wrong. Please try again!
                        </div>";
                        }
                        
                        ?>

                    </div>
                    
                    <div class="row">
                                                
                        
                        
                        <div class="col span-1-of-3">
                            <label for="name">Name</label> <!--label defines a lable for several elements--> <!--for specifies the id of the form element the label should be bound to. The "for" attribute must equal the "id" attribute-->
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required> <!--input specifies an input field where the use can enter data. Can be displayed in several ways, depending on the type attribute--> <!--name specifies a name for the element. Can also be used to reference the element in JavaScript--> <!--id specifies a unique id for an HTML element--> <!--placeholder specifies a short hint that describes the expected value of an input field - it is the text that appears inside the field before anythign is written--> <!--required specifies that an input field must be filled out before submitting the form -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label> <!--label defines a lable for several elements-->
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required> <!--input specifies an input field where the use can enter data. Can be displayed in several ways, depending on the type attribute--> <!--name specifies a name for the element. Can also be used to reference the element in JavaScript--> <!--id specifies a unique id for an HTML element--> <!--placeholder specifies a short hint that describes the expected value of an input field - it is the text that appears inside the field before anythign is written--> <!--required specifies that an input field must be filled out before submitting the form -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label> <!--label defines a lable for several elements-->
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us"> <!--select is used to create a drop down list--> <!--name defines a name for the drop down list--> <!--id is needed to associate the drop down list with a label-->
                                <option value="friends" selected>Friends</option> <!--option defines an option in a select list--> <!--value is a text that specifies the value to be sent to a server--> <!--selected specifies tha an option should be pre-selected whent he page loads-->
                                <option value="search">Search Engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="Social_Media">Social Media</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Sign Up for Weekly Newsletter</label> <!--label defines a lable for several elements-->
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes, please
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Send us a message</label> <!--label defines a lable for several elements-->
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea> <!--text area defines a multi-line text input control. Often used in a form to collect use rinputs-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label> <!--label defines a lable for several elements-->
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Submit"> <!--text area defines a multi-line text input control. Often used in a form to collect use rinputs-->
                        </div>
                    </div>
                </form> <!--method attribute specifies how to send form-data. Can be either get or post. Post sends the form-data as an HTTP post transaction and get appends the form data to teh url in name/value pairs--> <!--action specifies where to send the form data when a form is submitted-->
            
            </div>
        
        </section>
        
        <footer>
        
            <div class="row">
            
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                        
                    </ul>
                </div>
            
            </div>
            
            <div class="row">
            
                <p>
                
                    Copyright &copy; 2015 Omnifood. All Rights Reserved.
                
                </p>
            
            </div>
            
            <!--back to top button-->
            <a href="#" class="back2top" title="Back to top">
                <i class="ion-arrow-up-c"></i> 
            </a>
        
        </footer>
        
    <script src="https://cdn.jsdelivr.net/npm/respond@0.9.0/main.min.js"></script> <!--taken from jsdelivr; allows integration of some css functions in older web browser versions-->
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script> <!--allows uswe of html5 in browsers that came before html5-->
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script> <!--allows use of css3 pseudo classes in older versions of internet explorer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!--taken from jquery: jquery is a javascript file that can be used to make tools-->
    <script src="vendors/javascript/jquery.waypoints.min.js"></script> <!--waypoints triggers a function in jquery when you scroll to an element-->
    <script src="vendors/javascript/jquery-ui.js"></script> <!--jquery ui - plugin that includes additional features such as toggle and slide-->
    <script src="resources/Javascript/script.js"></script>
    
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180780709-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-180780709-1');
    </script>

        
    </body>
    
    







</html>