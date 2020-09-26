<!DOCTYPE php>
<php lang="en">
<head>
    <!-- include head items -->
    <?php include'includes/head.php';?>
    <title>Document</title>

</head>
<body>
    
    <!-- home -->
    <section id="sketchnoters">
        <!-- include navigation -->
        <?php include'includes/header.php';?>

        <div class="cs_left">
            <div class="cs_top">
                <h2 class="black" data-aos="fade-left">The Sketchnoters</h2>
            </div>
            <img src="images/sketchnoters1.jpg" alt="">
            <div class="cs_text">
                <h4>sercices</h4>
                <ul class="white">
                    <li>UI/UX</li>
                    <li>WEB DEVELOPMENT</li>
                </ul>
                <br><br>
                <h4>brief</h4>
                <p>To design and develop a website reflecting a unique discipline - sketchnoting. </p>
                <br><br>
            </div>
            <img src="images/sketchnoters5.jpg" class="cs_image_pc_no" alt="">
            <div class="cs_text">
                <h4>challenge</h4>
                <p>The studio needed a professional presentation of their work, information on the web should explain what sketchnoting is and how it could possibly be a piece of art itself.</p>
            </div>
            <img src="images/sketchnoters3b.jpg" alt="">
            <img src="images/sketchnoters4.png" alt="">
            <div class="cs_text">
                <h4>solution</h4>
                <p>I came with the concept of the web page as a plain canvas that emphasizes hand-drawn illustrations and motion graphics to display the process of drawing. 
                The bright orange & dark-pink gradient sections on the other hand contrast the white clean canvas.</p>
                 <br><br><br>
                <a href="https://www.youtube.com/watch?v=8C2MAUeNFz4" target="_blank"><h4><span class="iconify" data-inline="false" data-icon="clarity:music-note-solid" style="color: #fff;"></span>Lala Land</h4></a>
                <p>I discovered listening music helps me to focus on coding. In this project I listened the Lalaland soundtrack!</p>   
                <br><br><br>
                <a href="http://thesketchnoters.com/" target="_blank"><p><img src="images/arrow_w.svg" alt="" class="arrow">  view project</p></a>
            </div>
            
            <img src="images/sketchnoters6.jpg" class="cs_image_pc_no" alt="">
            <div class="cs_image_pc_only">
                <img src="images/sketchnoters5.jpg" alt="">
                <img src="images/sketchnoters6.jpg" alt="">
            </div>
        </div>
        <!-- right -->
        <div class="cs_right">
            <img src="images/triangl.png" alt="" class="cs_tria">
            <div class="cs_text">
                <h4>services</h4>
                <ul class="white">
                    <li>UI/UX</li>
                    <li>WEB DEVELOPMENT</li>
                </ul>
            </div>
            <div class="cs_text">
                <h4>brief</h4>
                <p>To design and develop a website reflecting a unique discipline - sketchnoting. </p>
            </div>
            <div class="cs_text">
                <h4>challenge</h4>
                <p>The studio needed a professional presentation of their work, information on the web should explain what sketchnoting is and how it could possibly be a piece of art itself.</p>
            </div>
            <div class="cs_text">
                <h4>solution</h4>
                <p>I came with the concept of the web page as a plain canvas that emphasizes hand-drawn illustrations and motion graphics to display the process of drawing.
                 The bright orange & dark-pink gradient sections on the other hand contrast the white clean canvas.</p>
            </div>
            <div class="cs_text">
                <a href="https://www.youtube.com/watch?v=8C2MAUeNFz4" target="_blank"><h4><span class="iconify" data-inline="false" data-icon="clarity:music-note-solid" style="color: #fff;"></span> Lala Land</h4></a>
                <p>I discovered listening music helps me to focus on coding. In this project I listened the Lalaland soundtrack!</p>   
            </div>
            <div class="cs_text">
                <a href="http://thesketchnoters.com/" target="_blank"><p><img src="images/arrow_w.svg" alt="" class="arrow">  view project</p></a>
            </div>
            
            <!-- FORM -->
            <div class="cs_form contact">
                <h3>contact</h3>
                <!-- INCLUDE CONTACT FORM -->
                <?php 
                $url = "https://www.lucieweb.dev/casestudy_sketchnoters.php#finalMessage";
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
                $url = "https://www.lucieweb.dev/casestudy_sketchnoters.php#finalMessage";
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