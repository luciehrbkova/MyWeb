<!DOCTYPE php>
<php lang="en">
<head>
    <!-- include head items -->
    <?php include'includes/head.php';?>
    <title>Document</title>

</head>
<body>
    
    <!-- home -->
    <section id="berry">
        <!-- include navigation -->
        <?php include'includes/header.php';?>
        
        <div class="cs_left">
            <div class="cs_top">
                <h2 class="black" data-aos="fade-left">Blueberry Blog</h2>
            </div>
            <img src="images/blue1.png" alt="">
            <!-- <div class="cs_image_pc_only">
                <img src="images/blue1.png" alt="">
                <img src="images/blue2.png" alt="">
            </div> -->
            <!-- <img src="images/blue6.png" alt=""> -->
            
            <div class="cs_text">
                <h4>services</h4>
                <ul class="white">
                    <li>UI/UX</li>
                    <li>WEB APP DEVELOPMENT</li>
                    <li>CMS - CONTENT MANAGEMENT SYSTEM</li>
                </ul>
                <br><br>
                <h4>brief</h4>
                <p>I had to develop web application for bloggers with emphasis on the clear and minimalistic design.</p>
                <br><br>
            </div>
            <!-- <img src="images/sketchnoters5.jpg" class="cs_image_pc_no" alt=""> -->
            <img src="images/blue8.png" alt="">
            <div class="cs_text">
                <h4>challenge</h4>
                <p>In this project I had to solve how and where to store all the content created by individual users, how to sort it and how to display desired content for users when they want.</p>
            </div>
            <div class="cs_image_pc_only">
                <img src="images/blue4.png" alt="">
                <img src="images/blue3.png" alt="">
            </div>
            <img src="images/blue2.png"  alt="">
            <!-- <img src="images/sketchnoters3.jpg" alt="">
            <img src="images/sketchnoters4.png" alt=""> -->
            <div class="cs_text">
                <h4>solution</h4>
                <p>The solution was to create a database driven web application. Registered users were able to edit their 
                profiles and aslo to create articles and share it. They can browse other articles by themes or to see 
                resent news. System required also admin to maintain users and overall content.</p>
            </div>
            <!-- <img src="images/blue7.png" alt=""> -->
            
            <img src="images/blue3.png" class="cs_image_pc_no" alt="">
            <img src="images/blue4.png" class="cs_image_pc_no" alt="">
            <!-- <div class="cs_image_pc_only">
                <img src="images/sketchnoters5.jpg" alt="">
                <img src="images/sketchnoters6.jpg" alt="">
            </div> -->
        </div>
        <!-- right -->
        <div class="cs_right">
            <img src="images/triangl.png" alt="" class="cs_tria">
            <div class="cs_text">
                <h4>services</h4>
                <ul class="white">
                    <li>UI/UX</li>
                    <li>WEB APP DEVELOPMENT</li>
                    <li>CMS - CONTENT MANAGEMENT SYSTEM</li>
                </ul>
            </div>
            <div class="cs_text">
                <h4>brief</h4>
                <p>I had to develop web application for bloggers with emphasis on the clear and minimalistic design.</p>
            </div>
            <div class="cs_text">
                <h4>challenge</h4>
                <p>In this project I had to solve how and where to store all the user's information and how to display desired information for users.</p>
            </div>
            <div class="cs_text">
                <h4>solution</h4>
                <p>The solution was to create a database driven web application. Registered users were able to edit their profiles and also 
                    to create articles and share it. They can browse other articles by themes or to see resent news. System required also 
                    admin to maintain users adn overall content.</p>
            </div>
            <div class="cs_text">
                <h4></h4>
                <p></p>
            </div>

            <!-- FORM -->
            <div class="cs_form contact">
                <h3>contact</h3>
                <!-- INCLUDE CONTACT FORM -->
                <?php 
                $url = "https://www.lucieweb.dev/casestudy_blueberry.php#finalMessage";
                include'includes/contact.php';
                ?>
    
            </div>
        </div>
    </section>
    <!-- CONTACT -->
    <section class="contact cs_contact">
        <div class="cs_form">
            <h3>contact</h3>
            <!-- INCLUDE CONTACT FORM -->
            <?php 
                $url = "https://www.lucieweb.dev/casestudy_blueberry.php#finalMessage";
                include'includes/contact.php';
            ?>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include'includes/footer.php';?>
    
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        // offset: 120, // offset (in px) from the original trigger point
        //delay: 0, // values from 0 to 3000, with step 50ms
        duration: 2000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
    });
</script>
</php>