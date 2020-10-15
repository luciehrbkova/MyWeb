<!DOCTYPE php>
<php lang="en">
<head>
    <!-- include head items -->
    <?php include'includes/head.php';?>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- image for social media links -->
    <meta property="og:image" content="images/lucie5.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="137">
    <title>Boom Radio | lucieWEB.dev</title>
    <meta name="description" content="WEB DESIGN & DEVELOPMENT | Lucie Hrbkova | Boom Radio - web application for student radio">

</head>
<body>
    <!-- home -->
    <section id="boom">
        <!-- include navigation -->
        <?php include'includes/header.php';?>

        <div class="cs_left">
            <div class="cs_top">
                <h2 class="black" data-aos="fade-left">The Boom Radio</h2>
            </div>
            <img src="images/boom1.jpg" alt="Boom radio mobile design">
            <div class="cs_text">
                <h4>services</h4>
                    <ul>
                        <li>UI/UX</li>
                        <li>WEB APP DEVELOPMENT</li>
                        <li>CMS</li>
                    </ul>
                <br><br>
                <h4>brief</h4>
                <p>Creating a website application for the online student radio. The website should stream music and allows students and tutors to create and share content.</p>
                <br><br>
            </div>
            
            <img src="images/boom2.jpg" alt="main page design">
            <div class="cs_text">
                <h4>client</h4>
                <p>Bradcasting course tutor at Edinburgh College and Fife College.</p>
                <br><br>
                <h4>challenge</h4>
                <p>I had to completely redesign the current static web page and build an application where students would be able to independently edit their presenters profiles, 
                shows, news and content. Tutors would have the ability to manage all content using the admin section. The challenge was to find a compromise between customizations 
                and the systems unified look.</p>
            </div>
            <img src="images/boom7.jpg" alt="tablet design">
            <div class="cs_text">
                <h4>solution</h4>
                <p>I came with the solution to create a user system, where students will be able to individually create shows, edit their presenters profiles and share other users content, 
                with the admin control system above it and a public website, where the actual content will be displayed, completely running from database. A wide set of templates is available
                 for users to customize their content but the overall look will remain unified.</p>
            </div>
            <img src="images/boom3.jpg" alt="user interface design">
            <div class="cs_text">
                <h4>process</h4>
                <p>In the beginning of the project I have deeply dived into competition research and carried out a survey for tens of students to gather information and ideas. 
                I found out how they wish to have a platform to independently present themselves. I processed two design directions, one light and airy and the second one darker with neon elements. 
                The final direction was set by the majority of students votes.</p>
                <br><br><br>
                <a href="https://www.youtube.com/watch?v=OVx0tJcPQCo" target="_blank"><h4><span class="iconify" data-inline="false" data-icon="clarity:music-note-solid" style="color: #000;"></span> Taron Egerton</h4></a>
                <p>I discovered that listening to music helps me to focus on coding. I recently saw Rocketman, the story of talented Elton John and it inspired me during hard work.</p>  
            </div>
            
            <!-- <img src="images/boom5.jpg" alt=""> -->
            <img src="images/boom6.jpg" alt="tablet design Boom Radio">
            
          
        </div>
        <!-- right -->
        <div class="cs_right">
            <img src="images/triangl.png" alt="red triangle" class="cs_tria">
            <div class="cs_text">
                <h4>services</h4>
                <ul>
                    <li>UI/UX</li>
                    <li>WEB APP DEVELOPMENT</li>
                    <li>CMS</li>
                </ul>
            </div>
            <div class="cs_text">
                <h4>brief</h4>
                <p>Creating a website application for the online student radio. The website should stream music and allows students and tutors to create and share content.</p>
            </div>
            <div class="cs_text">
                <h4>client</h4>
                <p>Bradcasting course tutor at Edinburgh College and Fife College.</p>
            </div>
            <div class="cs_text">
                <h4>challenge</h4>
                <p>I had to completely redesign the current static web page and build an application where students would be able to independently edit their presenters profiles,
                 shows, news and content. Tutors would have the ability to manage all content using the admin section. The challenge was to find a compromise between customizations and the systems unified look.</p>
            </div>
            <div class="cs_text">
                <h4>solution</h4>
                <p>I came with the solution to create a user system, where students will be able to individually create shows, edit their presenters profiles and share other users content, with the admin control 
                system above it and a public website, where the actual content will be displayed, completely running from database. A wide set of templates is available for users to customize their content but 
                the overall look will remain unified.</p>
            </div>
            <div class="cs_text">
                <h4>process</h4>
                <p>In the beginning of the project I have deeply dived into competition research and carried out a survey for tens of students to gather information and ideas. I found out how they wish to have
                 a platform to independently present themselves. I processed two design directions, one light and airy and the second one darker with neon elements. The final direction was set by the majority 
                 of students votes.</p>
            </div>
            <div class="cs_text">
            <a href="https://www.youtube.com/watch?v=OVx0tJcPQCo" target="_blank"><h4><span class="iconify" data-inline="false" data-icon="clarity:music-note-solid" style="color: #000;"></span> Taron Egerton</h4></a>
                <p>I discovered that listening to music helps me to focus on coding. I recently saw Rocketman, the story of talented Elton John and it inspired me during hard work.</p>  
            </div>
            
            <!-- FORM -->
            <div class="cs_form contact">
                <h3>contact</h3>
                <!-- INCLUDE CONTACT FORM -->
                <?php 
                $url = "https://www.lucieweb.dev/casestudy_boom.php#finalMessage";
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
                $url = "https://www.lucieweb.dev/casestudy_boom.php#finalMessage";
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
</html>