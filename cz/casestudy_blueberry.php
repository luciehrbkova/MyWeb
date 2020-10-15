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
    <title>Blueberry Blog | lucieWEB.dev</title>
    <meta name="description" content="WEB DESIGN & DEVELOPMENT | Lucie Hrbková | Blueberry Blog - Webová platforma pro blogery">

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
            <img src="../images/blue1.png" alt="mobile design">
          
            
            <div class="cs_text">
                <h4>služby</h4>
                <ul class="white">
                    <li>UI/UX</li>
                    <li>WEB APP DEVELOPMENT</li>
                    <li>CMS - SYSTÉM PRO SPRÁVU OBSAHU</li>
                </ul>
                <br><br>
                <h4>zadání</h4>
                <p>Cílem bylo vytvořit webovou aplikaci pro blogery z důrazem na čistý a minimalistycký design.</p>
                <br><br>
            </div>
            <img src="../images/blue8.png" alt="hero page design">
            <div class="cs_text">
                <h4>výzva</h4>
                <p>V tomto projektu jsem řešila jak a kde ukládat obsah tvořený uživateli, jak ho třídit a také zobrazit, pokud si to uživatel přeje.</p>
            </div>
            <div class="cs_image_pc_only">
                <img src="../images/blue4.png" alt="borůvkový design">
                <img src="../images/blue3.png" alt="mobilní design">
            </div>
            <img src="../images/blue2.png"  alt="design Blueberry Blog">
            <div class="cs_text">
                <h4>řešení</h4>
                <p>Řešením bylo vytvoření webové aplikace napojené na databázi. Registrovaní uživatelé mohou upravovat svůj profil a psát články,
                 spravovat je a sdílet. Mohou také procházet články ostatních blogerů a zobrazovat přednostně témata, která je zajímají nebo nejnovější 
                 sdílený obsah. Systém vyžadoval také administrativní sekci pro správu uživatelů a obsahu.</p>
            </div>
            
            <img src="../images/blue3.png" class="cs_image_pc_no" alt="Blueberry blog design">
            <img src="../images/blue4.png" class="cs_image_pc_no" alt="Blueberry design">
        </div>
        <!-- right -->
        <div class="cs_right">
            <img src="../images/triangl.png" alt="red triangle" class="cs_tria">
            <div class="cs_text">
                <h4>služby</h4>
                <ul class="white">
                    <li>UI/UX</li>
                    <li>WEB APP DEVELOPMENT</li>
                    <li>CMS - SYSTÉM PRO SPRÁVU OBSAHU</li>
                </ul>
            </div>
            <div class="cs_text">
                <h4>zadání</h4>
                <p>Cílem bylo vytvořit vebovou aplikaci pro blogery z důrazem na čistý a minimalistycký design.</p>
            </div>
            <div class="cs_text">
                <h4>výzva</h4>
                <p>V tomto projektu jsem řešila jak a kde ukládat obsah tvořený uživateli, jak ho třídit a také zobrazit, pokud si to uživatel přeje.</p>
            </div>
            <div class="cs_text">
                <h4>řešení</h4>
                <p>Řešením bylo vytvoření webové aplikace napojené na databázi. Registrovaní uživatelé mohou upravovat svůj profil a psát články,
                 spravovat je a sdílet. Mohou také procházet články ostatních blogerů a zobrazovat přednostně témata, která je zajímají nebo nejnovější 
                 sdílený obsah. Systém vyžadoval také administrativní sekci pro správu uživatelů a obsahu.</p>
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
</php>