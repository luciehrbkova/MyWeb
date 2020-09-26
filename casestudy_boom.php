<!DOCTYPE php>
<php lang="en">
<head>
    <!-- include head items -->
    <?php include'includes/head.php';?>
    <title>Document</title>

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
            <img src="images/boom1.jpg" alt="">
            <div class="cs_text">
                <h4>services</h4>
                    <ul>
                        <li>UI/UX</li>
                        <li>WEB APP DEVELOPMENT</li>
                        <li>CMS - CONTENT MANAGEMENT SYSTEM</li>
                    </ul>
                <br><br>
                <h4>brief</h4>
                <p>To create a website application for online student radio. The website should be streaming music and allows students and tutors to create and share content.</p>
                <br><br>
            </div>
            
            <img src="images/boom2.jpg" alt="">
            <div class="cs_text">
                <h4>client</h4>
                <p>Tutor of the bradcasting course in Edinburghn College and Fife College.</p>
                <br><br>
                <h4>challenge</h4>
                <p>I had to completely redesign current static web and build an application where students would be 
                able to independently edit their presenters profiles, shows, news content and tutors 
                would manage entire content through admin section. Challenge was to find a compromise between 
                customisation and system unified look.</p>
            </div>
            <img src="images/boom7.jpg" alt="">
            <div class="cs_text">
                <h4>solution</h4>
                <p>I came with the solution to create a user system, where students will be able to individually
                 create shows, edit their presenter's profiles and share other content, with the admin control
                  system above it and a public website, where the actual content will be displayed, completely ruuning 
                  from database. The wide set of templates availible for users to customise their content but the overall 
                  look will remain unified.</p>
            </div>
            <img src="images/boom3.jpg" alt="">
            <div class="cs_text">
                <h4>process</h4>
                <p>In the beggining of the project I have deeply dived into competition research and carried out a
                 survey for tens of student to gather information and ideas. I found out how much they wish to have 
                 place to independently present themselves. I processed 2 design direction, one lighter and airy and 
                 second darker with neon elements. Final direction was set by the choice of majority of students.</p>
                <br><br><br>
                <a href="https://www.youtube.com/watch?v=OVx0tJcPQCo" target="_blank"><h4><span class="iconify" data-inline="false" data-icon="clarity:music-note-solid" style="color: #000;"></span> Taron Egerton</h4></a>
                <p>I discovered listening music helps me to focus on coding. I recently saw Rocketman and the story of talented Elton John ispired me during hard work.</p>  
            </div>
            
            <!-- <img src="images/boom5.jpg" alt=""> -->
            <img src="images/boom6.jpg" alt="">
            
          
        </div>
        <!-- right -->
        <div class="cs_right">
            <img src="images/triangl.png" alt="" class="cs_tria">
            <div class="cs_text">
                <h4>services</h4>
                <ul>
                    <li>UI/UX</li>
                    <li>WEB APP DEVELOPMENT</li>
                    <li>CMS - CONTENT MANAGEMENT SYSTEM</li>
                </ul>
            </div>
            <div class="cs_text">
                <h4>brief</h4>
                <p>To create a website application for online student radio. The website should be streaming music and allows students and tutors to create and share content.</p>
            </div>
            <div class="cs_text">
                <h4>client</h4>
                <p>Tutor of the bradcasting course in Edinburghn College and Fife College.</p>
            </div>
            <div class="cs_text">
                <h4>challenge</h4>
                <p>I had to completely redesign current static web and build an application where students would be 
                able to independently edit their presenters profiles, shows, news content and tutors 
                would manage entire content through admin section. Challenge was to find a compromise between 
                customisation and system unified look.</p>
            </div>
            <div class="cs_text">
                <h4>solution</h4>
                <p>I came with the solution to create a user system, where students will be able to individually
                 create shows, edit their presenter's profiles and share other content, with the admin control
                  system above it and a public website, where the actual content will be displayed, completely ruuning 
                  from database. The wide set of templates availible for users to customise their content but the overall 
                  look will remain unified.</p>
            </div>
            <div class="cs_text">
                <h4>process</h4>
                <p>In the beggining of the project I have deeply dived into competition research and carried out a
                 survey for tens of student to gather information and ideas. I found out how much they wish to have 
                 place to independently present themselves. I processed 2 design direction, one lighter and airy and 
                 second darker with neon elements. Final direction was set by the choice of majority of students.</p>
            </div>
            <div class="cs_text">
            <a href="https://www.youtube.com/watch?v=OVx0tJcPQCo" target="_blank"><h4><span class="iconify" data-inline="false" data-icon="clarity:music-note-solid" style="color: #000;"></span> Taron Egerton</h4></a>
                <p>I discovered listening music helps me to focus on coding. I recently saw Rocketman and the story of talented Elton John ispired me during hard work.</p>  
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