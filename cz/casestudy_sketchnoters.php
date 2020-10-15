<!DOCTYPE php>
<php lang="cs">
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
    <title>Sketchnoters | lucieWEB.dev</title>
    <meta name="description" content="WEB DESIGN & DEVELOPMENT | Lucie Hrbková | Sketchnoters - Business web pro grafické studio">

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
            <img src="../images/sketchnoters1.jpg" alt="webdesign">
            <div class="cs_text">
                <h4>služby</h4>
                <ul class="white">
                    <li>UI/UX</li>
                    <li>WEB DEVELOPMENT</li>
                </ul>
                <br><br>
                <h4>zadání</h4>
                <p>Design a vývoj webové prezentace grafického dua Sketchnoters.</p>
                <br><br>
            </div>
            <img src="../images/sketchnoters5.jpg" class="cs_image_pc_no" alt="sketchnoters mockup">
            <div class="cs_text">
                <h4>výzva</h4>
                <p>Studio Sketchnoters potřebovalo profesionální prezentaci vlastní práce, informace na webu měly uživateli přiblížit, co to vlastně sketchnoting je.
                Požadavkem bylo zahrnout myšlenku kreslení do celého webu.</p>
            </div>
            <img src="../images/sketchnoters3b.jpg" alt="sketchnoters design">
            <img src="../images/sketchnoters4.png" alt="mobile design">
            <div class="cs_text">
                <h4>řešení</h4>
                <p>Design webu vycházel z konceptu webové stránky jako bílého plátna pro zdůraznění ručně tvořených ilustrací a animací 
                zobrazujících proces kreslení. Výrazný oranžovo-růžový gradient kontrastuje ve střídavém rytmu a tvoří opticky vyvážený celek.</p>
                <br><br><br>
                <a href="https://www.youtube.com/watch?v=8C2MAUeNFz4" target="_blank"><h4><span class="iconify" data-inline="false" data-icon="clarity:music-note-solid" style="color: #fff;"></span> Lala Land</h4></a>
                <p>Hudba mi pomáhá udržet se během kódování v rytmu. V tomto projektu mě bavilo poslouchat soundtrack k filmu Lala Land.</p>   
                <br><br><br>
                <a href="http://thesketchnoters.com/" target="_blank"><p><img src="../images/arrow_w.svg" alt="arrow" class="arrow">  zobrazit projekt</p></a>
            </div>
            
            <img src="../images/sketchnoters6.jpg" class="cs_image_pc_no" alt="gradient design colors">
            <div class="cs_image_pc_only">
                <img src="../images/sketchnoters5.jpg" alt="sketchnoters website">
                <img src="../images/sketchnoters6.jpg" alt="design showcase">
            </div>
        </div>
        <!-- right -->
        <div class="cs_right">
            <img src="../images/triangl.png" alt="red triangle" class="cs_tria">
            <div class="cs_text">
                <h4>služby</h4>
                <ul class="white">
                    <li>UI/UX</li>
                    <li>WEB DEVELOPMENT</li>
                </ul>
            </div>
            <div class="cs_text">
                <h4>zadání</h4>
                <p>Design a vývoj webové prezentace grafického dua Sketchnoters.</p>
            </div>
            <div class="cs_text">
                <h4>výzva</h4>
                <p>Studio Sketchnoters potřebovalo profesionální prezentaci vlastní práce, informace na webu měly uživateli přiblížit, co to vlastně sketchnoting je.
                Požadavkem bylo zahrnout myšlenku kreslení do celého webu.</p>
            </div>
            <div class="cs_text">
                <h4>řešení</h4>
                <p>Design webu vycházel z konceptu webové stránky jako bílého plátna pro zdůraznění ručně tvořených ilustrací a animací 
                zobrazujících proces kreslení. Výrazný oranžovo-růžový gradient kontrastuje ve střídavém rytmu a tvoří opticky vyvážený celek.</p>
            </div>
            <div class="cs_text">
                <a href="https://www.youtube.com/watch?v=8C2MAUeNFz4" target="_blank"><h4><span class="iconify" data-inline="false" data-icon="clarity:music-note-solid" style="color: #fff;"></span> Lala Land</h4></a>
                <p>Hudba mi pomáhá udržet se během kódování v rytmu. V tomto projektu mě bavilo poslouchat soundtrack k filmu Lala Land.</p>   
            </div>
            <div class="cs_text">
            <a href="http://thesketchnoters.com/"><p> <img src="../images/arrow_w.svg" alt="arrow" class="arrow">  zobrazit projekt</p></a>
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
   <section class="footer">
    <div class="footer_container">
        <div class="list">
            <a href="index.php#home"><p>Home</p></a>
            <a href="index.php#services"><p>Služby</p></a>
            <a href="index.php#about"><p>O mně</p></a>
            <a href="index.php#projects"><p>Projekty</p></a>
            <a href="index.php#reference"><p>Reference</p></a>
            <a href="index.php#contact"><p>Kontakt</p></a>
        </div>
        <div class="links">
            <a href="#navbar"><img src="../images/up.png" alt="arrow up"></a>
            <a href="https://www.instagram.com/lucieweb.dev/"><img src="../images/insta.png" alt="insta icon"></a>
            <a href="https://www.linkedin.com/in/luciehrbkova/"><img src="../images/linked.png" alt="LinkedIn icon"></a>
        </div>
    </div>
    <p class="copyright">© Lucie Hrbkova 2020</p>
    </section>
    
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