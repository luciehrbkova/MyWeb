<!DOCTYPE html>
<html lang="en">
<head>
    <!-- include head items -->
    <?php include'includes/head.php';?>
    <title>Document</title>

</head>
<body>
    <!-- home -->
    <section id="home" class="home">

        <!-- include navigation -->
        <?php include'includes/header.php';?>

        <!-- WHITE/BLACK BUTTON -->
        <div class="black_white_mode" id="black_white_mode"></div>
        <div class="left background_white" id="homepageBackground">
            <h2 class="black" data-aos="fade-left">web design <br> & development</h2>
            <!-- <p class="black" id="demo"></p> -->
            
            <div class="landing_img" data-aos="fade-right">
                <img src="images/arrow.svg" alt="" class="arrow" id="arrow">
                <img src="images/ellipse.png" alt="" class="el_sq" id="kruh">
                <img src="images/rect.png" alt="" class="el_sq"  id="ctverec">
                <img src="images/triangl.png" alt="" class="tria" id="trojuhelnik">
            </div>
            <a href="#services"><button class="white_button" id="landing_button" data-aos="fade-left">Show me more</button></a>
        </div>
        <div class="right background_black" id="landing_right"> 
            <div class="value" id="yellowValue">
                <img src="images/ellipse.png" alt="">
                <p class="white">creative</p>
            </div>
            <div class="value" id="blueValue">
                <img src="images/rect.png" alt="">
                <p class="white">reliable</p>
            </div>
            <div class="value" id="redValue">
                <img src="images/triangle_right.png" alt="" class="tria_right">
                <p class="tria_p white">goal-oriented</p>
            </div>
        </div>

    </section>

    <!-- SERVICES -->
    <section id="services" class="services">
        <div class="left background_white">
            <h3 class="black">services</h3>
            <div class="table" id="table">
                <div class="row">
                    <div class="sqx_first sqx" id="sq_one"></div>
                    <h4 class="black">USER RESEARCH & STRATEGY </h4>
                </div>
                <div class="row">
                    <div class="sqx_back" id="sq_two"></div>
                    <h4 class="black back_header">DESIGN</h4>
                </div>
                <div class="row">
                    <div class="sqx" id="sq_three"></div>
                    <h4 class="black">GRAPHICS</h4>
                </div>
                <div class="row">
                    <div class="sqx_back" id="sq_four"></div>
                    <h4 class="black back_header">DEVELOPMENT</h4>
                </div>
                <div class="row">
                    <div class="sqx" id="sq_five"></div>
                    <h4 class="black">SEO</h4>
                </div>
                <div class="row">
                    <div class="sqx_back" id="sq_six"></div>
                    <h4 class="black back_header">HOSTING & WEB LAUNCHING</h4>
                </div>
            </div>
        </div>

        <div class="right background_black text_services" >
            <p class="white" id="p_res">The process is initiated by competition analysis and user research. The definition of the target audience 
            and their needs is fundamental for setting up the strategy to meet these needs. Personas (fictive target users), Stylescapes (moodboards) 
            or surveys are popular methods to get desired results. </p>

            <p class="white" id="p_des">During the Design phase we create a complete visual style that touches on the User Experience - we are using 
            Wireframes, Navigation Maps, User flows etc. Designs are always responsive (adapting to mobile, tablet or desktop devices) and clients 
            get interactive prototypes to have a better understanding of the final product before the development phase begins.</p>
                
            <p class="white" id="p_gra">Unique graphics are an indispensable part of Web Design, wether it’s simple illustrations, particular 
            icons or more complicated photography edits. Tailored Animation or video could be the icing on the cake for your brand and I am 
            able to deliver it from the initial storyboards to the final editing.</p>

            <p class="white" id="p_dev">I develop Websites and Web Applications form scratch, tailored to client’s needs and fully responsive for all
             devices (mobile, tablet, desktop). CMS (Content Management System) and database systems could be connected as required. The final product 
             is thoroughly tested by users before the product launch and is optimized in terms of Accessibility, Performance, Best Practices, SEO etc.</p>

            <p class="white" id="p_seo">We consider SEO (Search Engine Optimization) during the start of the project, where we carry out Key Words Analysis
             to get results for a solid foundation of the web content. Technical optimization for browsers is carried during the development phase and combined 
             with the high quality content, creates the exceptional product that catches the target audiences attention by its added value.</p>

            <p class="white" id="p_hos">The choice of an accurate and memorable domain name is essential. Followed by optimal hosting solutions and web security. 
            After the launch we analyze website traffic using Google Analytics and set marketing campaigns with Google Ads. </p>

            <a href="#contact"><button class="black_button" id="ser_button_black">I am interested</button></a>

        </div>

    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="left background_white">
            <img src="images/smiley.png" alt="" id="smiley">
            <h3 class="black">about</h3>
            <p class="black">I am a Designer & Developer based in Edinburgh. I love to create. I use technologies as powerful tools to fulfill my creative vision. I believe in sophisticated solutions, 
            where functionality meets beauty. I admire architecture and art, museums and galleries will always be an infinite source of inspiration for me. I love travelling as I please to explore 
            and observe different countries.<br><br>
            </p>
            <p class="black" id="help_quote">I help clients become the best version of themselves on the web.</p>

                <a href="#contact"><button class="white_button" id="help_button">Message me</button></a>
       
        </div>
        <div id="help_cont_black" class="right background_black">
        <img src="images/luca.png" alt="" class="luca">
        <div id="help_box_black">
            <p class="white" id="help_quote_black">I help clients to be the best version of their own on web.</p>
            <a href="#contact"><button class="black_button" id="help_button_black">Message me</button></a>
        </div>
        </div>

    </section>

        <!-- PROJECTS -->
    <section class="projects" id="projects">
        <div class="left background_white">
            <h3 class="black">projects</h3>
            <!-- ONLY MOBILE -->
                <!-- project 1 -->
                <div class="project_card">
                    <a href="casestudy_helena.php"><img src="images/pr_helena.jpg" alt="" class="cover" id="cover2"></a> 
                    <div class="project_descr">
                        <a href="casestudy_helena.php"><img src="images/triangle_right.png" alt=""></a> 
                        <a href="casestudy_helena.php"><h4 class="black">Helena Kmochova Web</h4></a> 
                    </div>
                </div>
                <!-- project 2 -->
                <div class="project_card">
                    <a href="casestudy_boom.php"><img src="images/pr_boom.jpg" alt="" class="cover" id="cover1"></a> 
                    <div class="project_descr">
                        <a href="casestudy_boom.php"><img src="images/triangle_right.png" alt=""></a>
                        <a href="casestudy_boom.php"><h4 class="black">Boom Radio WebApp</h4></a> 
                    </div>
                </div>
            <!-- ------------------------------------ -->
               
            <!-- ------------------------------------ -->
            <!-- TAB + DESKTOP -->
            <div class="project_slider">
                <div class="pr_side" id="project_zero"></div>
                <a href="casestudy_helena.php" target="_blanc"><div class="pr_main" id="project_one"></div></a>
                <a href="casestudy_jana.php" target="_blanc"><div class="pr_side" id="project_two"></div></a>
                <a href="casestudy_boom.php" target="_blanc"><div class="pr_side" id="project_three"></div></a>
                <a href="casestudy_blueberry.php" target="_blanc"><div class="pr_side" id="project_four"></div></a>
                <a href="casestudy_lucie.php" target="_blanc"><div class="pr_side" id="project_five"></div></a>
                <a href="casestudy_sketchnoters.php" target="_blanc"><div class="pr_zero" id="project_six"></div></a>
            </div>
            <div class="pr_cont">
                <div class="project_number" id="pr_one_sketchnoters">
                    <h4 class="black" id="slider_button_one">01/06</h4>
                    <h4 class="black">Helena Kmochova Web</h4>
                </div>
                <!-- <div class="project_number" id="pr_two_boom">
                    <h4 id="slider_button_two">02/06</h4>
                    <h4>Blueberry Blog</h4>
                </div> -->
             </div>
            

        </div>
        <div class="tria_div" id="triangle_button"><img src="images/triangle_right.png" alt="" id="pro_tria"></div>
        
        <div class="right background_black">
            <!-- ONLY MOBILE -->
            <div class="more_container">
                <img src="images/arrow_white.svg" alt="" id="moreProjectArrow">
                <a href="projects.php"><p class="white">view more projects</p></a>
            </div>
            <!-- ------------------------------------ -->
            <!-- TAB + DESKTOP -->
            <div class="project_challenge" id="challenge_sketchnoters">
                <h4 class="white">challenge</h4>
                <p class="white"> The studio needed a professional presentation of their work, information on the web should explain what sketchnoting is and how it could possibly ...</p>
            </div>
            <div class="project_challenge" id="solution_sketchnoters">
                <h4 class="white">solution</h4>
                <p class="white">I came with the concept of the web page as a plain canvas that emphasizes hand-drawn illustrations and motion graphics to display the process of drawing.</p>
            </div>
            <div class="project_challenge" id="challenge_boom">
                <h4 class="white">challenge</h4>
                <p class="white">I had to completely redesign the current static web page and build an application where students would be able to edit their profiles ...</p>
            </div>
            <div class="project_challenge" id="solution_boom">
                <h4 class="white">solution</h4>
                <p class="white">To create a user system, where students will be able to individually create shows, edit their presenters profiles and share other users content, with the admin control 
                system ...</p>
            </div>
            <div class="project_challenge" id="challenge_berry">
                <h4 class="white">challenge</h4>
                <p class="white">To solved how and where to store all the content created by individual users, how to sort it and how to display specific content for users when they request it.</p>
            </div>
            <div class="project_challenge" id="solution_berry">
                <h4 class="white">solution</h4>
                <p class="white">The solution was to create a database driven web application. Registered users were able to edit their profiles and also create articles and share them. </p>
            </div>
            <div class="project_challenge" id="challenge_jana">
                <h4 class="white">challenge</h4>
                <p class="white">Our client was new in the business so firstly we had to analyze the niche market that she would like to target for optimal success.
                </p>
            </div>
            <div class="project_challenge" id="solution_jana">
                <h4 class="white">solution</h4>
                <p class="white">The final design is straightforward and modern at the same time. Special emphasis was placed on testimonials to build up confidence from new clients ...</p>
            </div>
            <div class="project_challenge" id="challenge_helena">
                <h4 class="white">challenge</h4>
                <p class="white">How to stand out from competitors? How to create a quality, trustworthy product despite the reputation this field has 
                in the public opinion of Czech Republic?</p>
            </div>
            <div class="project_challenge" id="solution_helena">
                <h4 class="white">solution</h4>
                <p class="white">With close cooperation with Helena, we created unique content focused on clients needs which would not be found anywhere else.</p>
            </div>
            <div class="project_challenge" id="challenge_lucie">
                <h4 class="white">challenge</h4>
                <p class="white">During the development stage it was challenging to find ways to build and technically master all the interaction ideas that I came up with ...</p>
            </div>
            <div class="project_challenge" id="solution_lucie">
                <h4 class="white">solution</h4>
                <p class="white">I have decided to preserve the decision of the canvas color for 
                the user to play with these two themes and fully enjoy and experience the potential of both colors ...</p>
            </div>
        </div>

      

    </section>

    <!-- REFERENCE -->
    <section class="reference" id="reference">
        <div class="left background_white">
            <h3 class="black">reference</h3>

            <div class="ref_container">
            <!-- reference 1 -->
            <div class="refcard" id="reference_card_1">
            <p class="black">Lucie was recommended to me by one of my friends who was happy with her work. Perfect communication despite working remotely and very flexible 
            to all my requirements. I am absolutely satisfied with the delivered outcome and will definitely recommend working with Lucie.
                <br><br>
            </p>
            <p class="black referee">Jana</p>
                <!-- <img src="images/sl_1.png" alt="" class="slider_white" id="sl_1_w">
                <img src="images/sl_1b.png" alt="" class="slider_black" id="sl_1_b"> -->
            </div>
            
            <!-- reference 2 -->
            <div class="refcard" id="reference_card_2">
                <p class="black">I requested a tailored website with original and interesting design, content and functionality. Why was this project successful? 
                Lucie, as well  as Martin both work really well and very professionaly. I was surprised mainly by the Research and overall Analysis of my bussiness, 
                clients and presonality at the very begining part of the project. Amazing and professional attitude! Would highly recommend!
                    <br><br>
                </p>
                <p class="black referee">Helena</p>
                    <!-- <img src="images/sl_2.png" alt="" class="slider_white" id="sl_2_w">
                    <img src="images/sl_2b.png" alt="" class="slider_black" id="sl_2_b"> -->
                </div>
            <!-- reference 3 -->
            <div class="refcard" id="reference_card_3">
                <p class="black">Lucie was recommended to me by one of my friends who was happy with her work. Perfect communication despite working remotely and very flexible 
            to all my requirements. I am absolutely satisfied with the delivered outcome and will definitely recommend working with Lucie.
                    <br><br>
                </p>
                <p class="black referee">Colin</p>
                    <!-- <img src="images/sl_3.png" alt="" class="slider_white" id="sl_3_w">
                    <img src="images/sl_3b.png" alt="" class="slider_black" id="sl_3_b"> -->
                </div>
            </div>
            <div id="newRefSlider">
                <!-- <div class="black_slider blackDotFull" id="#slider_dot_one"></div>
                <div class="black_slider blackDorEmpty" id="#slider_dot_two"></div>
                <div class="black_slider" id="#slider_dot_three"></div> -->
            </div>

            <a href="#contact"><button class="white_button" id="ref_button_white">Contact me</button></a>
        </div>
        <div class="right background_black">
        <a href="#contact"><button class="black_button" id="ref_button_black">Contact me</button></a>
            <!-- image -->
        <div class="reference_playground" id="pl_yel">
            <img src="images/ellipse.png" alt=""  id="kruh_ref">
        </div>
        <div class="reference_playground" id="pl_blu">
            <img src="images/rect.png" alt=""  id="ctverec_ref">
        </div>
        <div class="reference_playground" id="pl_red">
            <img src="images/triangl.png" alt="" id="trojuhelnik_ref">
        </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
        <div class="left background_white">
            <h3 class="black">contact</h3>
            <div class="contact_data">
                <h4 class="black">Lucie Hrbkova</h4>
                <h5 class="black">hrbkova.lucka@gmail.com
                    <br>
                    +447497920421</h5>
                <div class="socmedia">
                    <a href="https://www.instagram.com/lucieweb.dev/"><img src="images/insta.png" alt="" id="insta"></a>
                    <a href="https://www.linkedin.com/in/luciehrbkova/"><img src="images/linked.png" alt="" id="link"></a>
                </div>
            </div>
        </div>
        <div class="right background_black">
           
            <?php 
                $url = "https://www.lucieweb.dev/index.php#finalMessage";
                include'includes/contact.php';
            ?>

        </div>

    </section>
    <!-- FOOTER -->
    <?php include'includes/footer.php';?>
    
    
</body>
<script>
            
       
    $(document).ready(function()
    {
        // SERVICES CUBES---------------------------------------------------------------------------
        // set variables
        var x,a,b,c,d,e,f,g;
        var win = $(window);
        moveFirstSq(a);
        moveBackSq(x);
        win.resize(moveFirstSq);
        win.resize(moveBackSq);
        
        function moveFirstSq(a,b,c,d,e,f,g){
            // for mobile
            if (win.width() < 500)
            {
                var onRight = x;
                $(a).click(function()
                {
                    if (!onRight)
                    {
                        $(this).animate({left: '290px'}, "slow");
                        onRight = true;
                    }
                    else
                    {
                        $(this).animate({left: '0px'}, "slow");
                        onRight = false;   
                    }
                    $(b).fadeIn('slow'); 
                    $(c).hide();
                    $(d).hide();
                    $(e).hide();
                    $(f).hide();
                    $(g).hide();
                });
            }
            // for tablet
            else if (win.width() > 500 && win.width() < 1100 )
            {
                var onRight = false;
                $(a).click(function()
                {
                    if (!onRight)
                    {
                        $(this).animate({left: '492px'}, "slow");
                        onRight = true;
                    }
                    else
                    {
                        $(this).animate({left: '0px'}, "slow");
                        onRight = false;   
                    }
                    $(b).fadeIn('slow'); 
                    $(c).hide();
                    $(d).hide();
                    $(e).hide();
                    $(f).hide();
                    $(g).hide();
                });
            }
            // for desktop
            else
            {
                var onRight = false;
                $(a).click(function()
                {
                    if (!onRight)
                    {
                        $(this).animate({left: '40vw' }, "slow");
                        onRight = true;
                    }
                    else
                    {
                        $(this).animate({left: '0px'}, "slow");
                        onRight = false;   
                    }
                    $(b).fadeIn('slow'); 
                    $(c).hide();
                    $(d).hide();
                    $(e).hide();
                    $(f).hide();
                    $(g).hide();
                });
            }
        };

        function moveBackSq(x,b,c,d,e,f,g){
            // for mobile
            if (win.width() < 500)
            {
                var onRight = true;
                $(x).click(function()
                {
                    if (onRight)
                    {
                        $(this).animate({left: '-290px'}, "slow");
                        onRight = false;
                    }
                    else
                    {
                        $(this).animate({left: '0px'}, "slow");
                        onRight = true;   
                    }
                    $(b).fadeIn('slow'); 
                    $(c).hide();
                    $(d).hide();
                    $(e).hide();
                    $(f).hide();
                    $(g).hide();
                });
            }
            // for tablet
            else if (win.width() > 500 && win.width() < 1100 )
            {
                var onRight = true;
                $(x).click(function()
                {
                    if (onRight)
                    {
                        $(this).animate({left: '-492px'}, "slow");
                        onRight = false;
                    }
                    else
                    {
                        $(this).animate({left: '0px'}, "slow");
                        onRight = true;   
                    }
                    $(b).fadeIn('slow'); 
                    $(c).hide();
                    $(d).hide();
                    $(e).hide();
                    $(f).hide();
                    $(g).hide();
                });
            }
            // for desktop
            else
            {
                var onRight = true;
                $(x).click(function()
                {
                    if (onRight)
                    {
                        $(this).animate({left: '-40vw'}, "slow");
                        onRight = false; 
                        
                    }
                    else
                    {
                        $(this).animate({left: '0px' }, "slow");
                        onRight = true; 
                    }
                    $(b).fadeIn('slow'); 
                    $(c).hide();
                    $(d).hide();
                    $(e).hide();
                    $(f).hide();
                    $(g).hide();
                });
            }
        };

        moveFirstSq("#sq_one","#p_res","#p_des","#p_gra","#p_dev","#p_seo", "#p_hos");
        moveBackSq("#sq_two","#p_des","#p_res","#p_gra","#p_dev","#p_seo", "#p_hos");
        moveFirstSq("#sq_three","#p_gra","#p_res","#p_des","#p_dev","#p_seo", "#p_hos");
        moveBackSq("#sq_four","#p_dev","#p_gra","#p_res","#p_des","#p_seo", "#p_hos");
        moveFirstSq("#sq_five","#p_seo", "#p_hos","#p_dev","#p_gra","#p_res","#p_des");
        moveBackSq("#sq_six","#p_hos","#p_dev","#p_gra","#p_res","#p_des","#p_seo",);
        
        // // REFERENCE --------------------------------------------------------------------------------

        var sliderBackgroundImage
        var refCardFadeOut, refCardFadeIn
        var topMar, midMar, botMar, rotDeg
        var newBackgroundSlider
        var originalSource, newSouce
        var actualReference;
        var referenceButton;
        actualReference = "first";


        // function animate elements
        function animateRefElements(topMar, midMar, botMar, rotDeg) {
            var now
            now = 180
            // triangle
            $("#trojuhelnik_ref").animate({ marginTop: topMar, borderSpacing: rotDeg },
                {
                    step: function(now,fx) 
                    {
                        $("#trojuhelnik_ref").css('-webkit-transform','rotate('+now+'deg)'); 
                    },duration:'slow'
                }
                ,1500);
            // square
            $("#ctverec_ref").animate({marginTop: midMar, opacity: '1'}, 1000);
            // circle
            $("#kruh_ref").animate({marginTop: botMar, opacity: '1'}, 500); 
        }

        // function display ref card
        function swopRefCards (refCardFadeOut, refCardFadeIn){
            $(refCardFadeOut).fadeOut(250);
            $(refCardFadeIn).delay(300).fadeIn(250);
        }

        // function  chnage slider background
        function changeSliderBackground(sliderBackgroundImage) {
            $("#newRefSlider").css('background-image',sliderBackgroundImage);
        }


        // final function______________________________________________________________
        function displayNextRef(referenceButton)
        {
            $(referenceButton).click(function () 
            {
                if (actualReference == "first")
                {
                    animateRefElements("80px","0px","160px","0");
                    swopRefCards("#reference_card_1","#reference_card_2");
                    changeSliderBackground(" url('images/sl_2.png')");
                    actualReference = "second";

                }
                else if (actualReference == "second")
                {
                    animateRefElements("0px","160px","80px","180");
                    swopRefCards("#reference_card_2","#reference_card_3");
                    changeSliderBackground(" url('images/sl_3.png')");
                    actualReference = "third";

                }
                else
                {
                    animateRefElements("160px","80px","0px","180");
                    swopRefCards("#reference_card_3","#reference_card_1");
                    changeSliderBackground(" url('images/sl_1.png')");
                    actualReference = "first";

                }
            })
        }
        displayNextRef("#pl_yel");
        displayNextRef("#pl_blu");
        displayNextRef("#pl_red");
        displayNextRef( "#newRefSlider");

        

        // PROJECT SLIDER -----------------------------------------------------------------------

        var aa, bb, cc, xx
        var challenge_out,solution_out,challenge_in,solution_in
        var displayedProject = xx;
        displayedProject = "helena";
        var win = $(window);
        enlarge(aa);
        shrink(bb);
        narrow(cc);
        win.resize(enlarge);
        win.resize(shrink);
        win.resize(narrow);

        // set general function
        // ENLARGE
        function enlarge(aa){
            // for tablet
            if (win.width() < 1100)
            {
                $(aa).animate(
                {
                    width: "574px",
                    height: "314px",

                }, "slow"
                )
            }
            // for desktop
            else
            {
                $(aa).animate(
                {
                    width: "716px",
                    height: "391px",

                }, "slow"
                )   
            }
        
        }
        // SHRINK
        function shrink(bb){
            // for tablet
            if (win.width() < 1100)
            {
                $(bb).animate(
                {
                    width: "479px",
                    height: "262px",

                }, "slow"
                )
            }
            else
            {
                $(bb).animate(
                {
                    width: "588px",
                    height: "321px",

                }, "slow"
                )
            }
            
        }
        // "0" WIDTH - narrow
        function narrow(cc){
            $(cc).animate(
                {
                    width: "0px",
                    height: "262px",
                    margin: "0px",
                }, "slow"
            )
        }
        function margins(d){
            $(d).animate(
                {
                    margin: "10px"
                }, "fast"
            )
        }
        function fadeChallengeSolution(challenge_out,solution_out,challenge_in,solution_in){
            $(challenge_out).fadeOut(300);
            $(solution_out).fadeOut(300);
            $(challenge_in).delay(300).fadeIn(300);
            $(solution_in).delay(300).fadeIn(300);
        }
        
        var button

        function portfolio(button)
        {
            $(button).click(function()
        {

            if(displayedProject == "helena")
            {
                narrow("#project_zero");
                shrink("#project_one");
                enlarge("#project_two");
                shrink("#project_six");
                $("#slider_button_one").html("02/06");
                $("#slider_button_one").siblings().html("Jana Novotna Web");
                fadeChallengeSolution("#challenge_helena", "#solution_helena", "#challenge_jana", "#solution_jana");
                displayedProject = "jana";
            }
            else if (displayedProject == "jana")
            {
                narrow("#project_one");
                shrink("#project_two");
                enlarge("#project_three");
                $("#slider_button_one").html("03/06");
                $("#slider_button_one").siblings().html("Boom Radio WebApp");
                fadeChallengeSolution("#challenge_jana", "#solution_jana", "#challenge_boom", "#solution_boom");
                displayedProject = "boom";
            }
            else if (displayedProject == "boom")
            {
                narrow("#project_two");
                shrink("#project_three");
                enlarge("#project_four");
                $("#slider_button_one").html("04/06");
                $("#slider_button_one").siblings().html("Blueberry Blog WebApp");
                fadeChallengeSolution("#challenge_boom", "#solution_boom", "#challenge_berry", "#solution_berry");
                displayedProject = "berry";
            }
            else if (displayedProject == "berry")
            {
                narrow("#project_three");
                shrink("#project_four");
                enlarge("#project_five");
                $("#slider_button_one").html("05/06");
                $("#slider_button_one").siblings().html("Lucie Hrbkova Web");
                fadeChallengeSolution("#challenge_berry", "#solution_berry", "#challenge_lucie", "#solution_lucie");
                displayedProject = "lucie";
            }
            else if (displayedProject == "lucie")
            {
                narrow("#project_four");
                shrink("#project_five");
                enlarge("#project_six");
                $("#slider_button_one").html("06/06");
                $("#slider_button_one").siblings().html("Sketchnoters Web");
                fadeChallengeSolution("#challenge_lucie", "#solution_lucie", "#challenge_sketchnoters", "#solution_sketchnoters");
                displayedProject = "zero";
            }
            else if (displayedProject == "zero")
            {
                shrink("#project_two");
                enlarge("#project_one");
                margins("#project_zero");
                margins("#project_one");
                margins("#project_two");
                margins("#project_three");
                margins("#project_four");
                margins("#project_five");
                margins("#project_six");
                shrink("#project_three");
                shrink("#project_four");
                shrink("#project_five");
                narrow("#project_six");
                shrink("#project_zero");
                $("#slider_button_one").html("01/06");
                $("#slider_button_one").siblings().html("Helena Kmochova Web");
                fadeChallengeSolution("#challenge_sketchnoters", "#solution_sketchnoters", "#challenge_helena", "#solution_helena");
                displayedProject = "helena";
            }
        });



        }

        portfolio("#triangle_button");
        portfolio("#slider_button_one");

        // ABOUT--------------------------------------------------------------------------------
       $("#smiley").click(function() 
       {
        $("#smiley").fadeOut('fast');
       })
        
        // COLORED HOMEPAGE---------------------------------------------------------------------
        
        var colorElement, colorBackground, colorValue

        function getColored(colorElement,colorBackground, colorValue)
        {
            $(colorElement).click(function() {
            $("#homepageBackground").css("background", colorBackground);
            $(colorValue).animate({ opacity: 1}, 500);
            })
        }
        getColored("#kruh", "#FFF208", "#yellowValue");
        getColored("#ctverec", "#003EF4", "#blueValue");
        getColored("#trojuhelnik", "#E13022", "#redValue");

        //DARK AND LIGHT MODE-------------------------------------------------------------------
        ////////////////////////////////////////////////////////////////////////////////////////

        var inspectMode
        var originalSource, newSouce
        var buttonId, originalButton, newButton
        var projectSlide
        var mobileGradient, pcGradient
        var whiteMenu, blackMenu
        inspectMode = "light";
        var win = $(window);
        win.resize(changeGradient);
        win.resize(changeMenu);
    

        // change b&w button gardient
        function changeGradient(mobileGradient, pcGradient){
            if (win.width() < 1100)
            {
                $("#black_white_mode").css('background', mobileGradient)
            }
            else
            {
                $("#black_white_mode").css('background', pcGradient)
            }
        }
        // change menu and letter
        function changeMenu(blackMenu, whiteMenu){
            if (win.width() < 1100)
            {
                $(blackMenu).css('display', 'none');
                $(whiteMenu).css('display', 'flex');
            }
            else
            {
                $(blackMenu).css('display', 'flex');
                $(whiteMenu).css('display', 'none');
            }
        }

        // change esource of the image
        function changeScr(originalSource, newSouce){
            $(originalSource).attr('src',newSouce)
        }
        // change button
        function getOpositeButton(buttonId, originalButton, newButton) {
            $(buttonId).removeClass(originalButton).addClass(newButton);
        }
        // change projects borders in dark mode
        function projectBorders(projectSlide){
            $(projectSlide).css('border', '0.1px solid white');
        }


        // change projects borders back to light mode
        function projectBordersBack(projectSlide){
            $(projectSlide).css('border', '0.1px solid black');
        }



        function changeBlackWhiteMode() {

            $("#black_white_mode").click(function () 
            {
                if (inspectMode == "light") 
                {
                    // js function
                    goDark();
                    // arrow homepage
                    changeScr("#arrow", "images/arrow_w.svg");
                    //arrow project mobile
                    changeScr("#moreProjectArrow", "images/arrow.svg");
                    // contact sm icons
                    changeScr("#insta", "images/insta_w.png");
                    changeScr("#link", "images/linked_w.png");
                    
                    // change mode color
                    changeGradient('linear-gradient( #FFFFFF 50%, #000000 50%)', 'linear-gradient( 90deg, #FFFFFF 50%, #000000 50%)' );

                    // change menu
                    changeMenu("#black_icons","#white_icons");

                    // change project borders
                    projectBorders("#project_zero");
                    projectBorders("#project_one");
                    projectBorders("#project_two");
                    projectBorders("#project_three");
                    projectBorders("#project_four");
                    projectBorders("#project_five");
                    projectBorders("#project_six");
                    projectBorders("#cover1");
                    projectBorders("#cover2");


                    // table border
                    $("#table").css('border', '1px solid rgba(255, 255, 255, 0.5)');

                    // change buttons
                    getOpositeButton("#landing_button", "white_button", "black_button");
                    getOpositeButton("#help_button", "white_button", "black_button");
                    getOpositeButton("#ref_button_white", "white_button", "black_button");      

                    getOpositeButton("#ser_button_black", "black_button", "white_button");
                    getOpositeButton("#help_button_black", "black_button", "white_button");
                    getOpositeButton("#ref_button_black", "black_button", "white_button");

                    // change reference slider
                    $('#sl_1_w').css('display' , 'none');
                    $('#sl_1_b').css('display' , 'block');

                    // form
                    $('#form').children().css('background', "#000000").css('color','#FFFFFF')
                    getOpositeButton("#form_button", "form_button_black", "form_button_white")
                    // CHANGE MODE TO DARK----------------------
                    inspectMode = "dark";

                }
                
                else if (inspectMode == "dark") 
                {
                    // js function
                    goLight();
                    // arrow homepage
                    changeScr("#arrow", "images/arrow.svg");
                    //arrow project mobile
                    changeScr("#moreProjectArrow", "images/arrow_w.svg");
                    // contact sm icons
                    changeScr("#insta", "images/insta.png");
                    changeScr("#link", "images/linked.png");
                    
                    // change mode color
                    changeGradient('linear-gradient( #000000 50%, #FFFFFF 50%)', 'linear-gradient( 90deg, #000000 50%, #FFFFFF 50%)');

                    // change menu
                    changeMenu("#white_icons","#black_icons");

                    // change project borders
                    projectBordersBack("#project_zero");
                    projectBordersBack("#project_one");
                    projectBordersBack("#project_two");
                    projectBordersBack("#project_three");
                    projectBordersBack("#project_four");
                    projectBordersBack("#project_five");
                    projectBordersBack("#project_six");
                    projectBordersBack("#cover1");
                    projectBordersBack("#cover2");

                    // table border
                    $("#table").css('border', '1px solid rgba(0, 0, 0, 0.5)')

                    // change buttons
                    getOpositeButton("#landing_button", "black_button", "white_button");
                    getOpositeButton("#help_button", "black_button", "white_button");
                    getOpositeButton("#ref_button_white", "black_button", "white_button");      

                    getOpositeButton("#ser_button_black", "white_button", "black_button");
                    getOpositeButton("#help_button_black", "white_button", "black_button");
                    getOpositeButton("#ref_button_black", "white_button", "black_button");

                    // change reference slider
                    $('#sl_1_w').css('display' , 'block');
                    $('#sl_1_b').css('display' , 'none');

                    // form
                    $('#form').children().css('background', "#FFFFFF").css('color','#000000');
                    inspectMode = "light";
                }

                
            })
            
        }
        changeBlackWhiteMode();

    });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        // offset: 120, // offset (in px) from the original trigger point
        //delay: 0, // values from 0 to 3000, with step 50ms
        duration: 2000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
    });
</script>
</html>