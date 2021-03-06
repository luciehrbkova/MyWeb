<!DOCTYPE php>
<php lang="cs">
<head>
    <!-- include head items -->
    <?php include'includes/head.php';?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152215959-4"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-152215959-4');
        </script>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- image for social media links -->
    <meta property="og:image" content="images/lucie5.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="137">
    <title>Projekty | lucieWEB.dev</title>
    <meta name="description" content="WEB DESIGN & DEVELOPMENT | Lucie Hrbková  | Nechte se inspirovat výběrem z mých realizovaných projektů">

</head>
<body>
   
    <!-- home -->
    <section id="projects">
        <!-- include navigation -->
        <?php include'includes/header.php';?>
       

              <!-- PROJECTS -->
    <section class="projects" id="allprojects">
        <div class="left background_white">
            <h3 class="black">projects</h3>
            <!-- ONLY MOBILE -->
                <!-- project 1 -->
                <div class="project_card">
                    <a href="casestudy_helena.php"><img src="../images/pr_helena.jpg" alt="Helena Kmochova web" class="cover"></a> 
                    <div class="project_descr">
                        <a href="casestudy_helena.php"><img src="../images/triangle_right.png" alt="červený trojúhelník"></a> 
                        <a href="casestudy_helena.php"><h4 class="black">Helena Kmochova Web</h4></a> 
                    </div>
                </div>
                <!-- project 2 -->
                <div class="project_card">
                    <a href="casestudy_boom.php"><img src="../images/pr_boom.jpg" alt="Boom Radio web" class="cover"></a> 
                    <div class="project_descr">
                        <a href="casestudy_boom.php"><img src="../images/triangle_right.png" alt="červený trojúhelník"></a> 
                        <a href="casestudy_boom.php"><h4 class="black">Boom Radio WebApp</h4></a> 
                    </div>
                </div>
                <!-- project 3 -->
                <div class="project_card">
                    <a href="casestudy_jana.php"><img src="../images/pr_jana.jpg" alt="Jana Novotna web" class="cover"></a> 
                    <div class="project_descr">
                        <a href="casestudy_jana.php"><img src="../images/triangle_right.png" alt="červený trojúhelník"></a> 
                        <a href="casestudy_jana.php"><h4 class="black">Jana Novotna Web</h4></a> 
                    </div>
                </div>
                <!-- project 4 -->
                <div class="project_card">
                    <a href="casestudy_blueberry.php"><img src="../images/pr_berry.jpg" alt="Blueberry Blog web" class="cover"></a> 
                    <div class="project_descr">
                        <a href="casestudy_blueberry.php"><img src="../images/triangle_right.png" alt="červený trojúhelník"></a> 
                        <a href="casestudy_blueberry.php"><h4 class="black">Blueberry Blog WebApp</h4></a> 
                    </div>
                </div>
                <!-- project 5 -->
                <div class="project_card">
                    <a href="casestudy_lucie.php"><img src="../images/pr_lucie.jpg" alt="LucieWeb" class="cover"></a> 
                    <div class="project_descr">
                        <a href="casestudy_lucie.php"><img src="../images/triangle_right.png" alt="červený trojúhelník"></a> 
                        <a href="casestudy_lucie.php"><h4 class="black">Lucie Hrbkova Web</h4></a> 
                    </div>
                </div>
                <!-- project 6 -->
                <div class="project_card">
                    <a href="casestudy_sketchnoters.php"><img src="../images/project_sketch.jpg" alt="Sketchnoters web" class="cover"></a> 
                    <div class="project_descr">
                        <a href="casestudy_sketchnoters.php"><img src="../images/triangle_right.png" alt="červený trojúhelník"></a> 
                        <a href="casestudy_sketchnoters.php"><h4 class="black">Sketchnoters Web</h4></a> 
                    </div>
                </div>
          
        
        <div class="right background_black">
            <!-- ONLY MOBILE -->
            <div class="more_container">
                <img src="../images/arrow_white.svg" alt="šipka" id="moreProjectArrow">
                <a href="index.php#projects"><p class="white">back to main page</p></a>
            </div>
            <!-- ------------------------------------ -->
            
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