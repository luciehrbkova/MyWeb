<!DOCTYPE html>
<html lang="cs">
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
    <title>WEB DESIGN & DEVELOPMENT | lucieWEB.dev</title>
    <meta name="description" content="WEB DESIGN & DEVELOPMENT | Lucie Hrbková | Pomáhám klientům být na webu tou nejlepší verzí sebe sama.">

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
                <img src="../images/arrow.svg" alt="šipka" class="arrow" id="arrow">
                <img src="../images/ellipse.png" alt="žlutý kruh" class="el_sq" id="kruh">
                <img src="../images/rect.png" alt="modrý čtverec" class="el_sq"  id="ctverec">
                <img src="../images/triangl.png" alt="červený trojúhelník" class="tria" id="trojuhelnik">
            </div>
            <a href="#services"><button class="white_button" id="landing_button" data-aos="fade-left">Ukaž mi víc</button></a>
        </div>
        <div class="right background_black" id="landing_right"> 
            <div class="value" id="yellowValue">
                <img src="../images/ellipse.png" alt="žlutý kruh">
                <p class="white">kreativita</p>
            </div>
            <div class="value" id="blueValue">
                <img src="../images/rect.png" alt="modrý čtverec">
                <p class="white">spolehlivost</p>
            </div>
            <div class="value" id="redValue">
                <img src="../images/triangle_right.png" alt="červený trojúhelník" class="tria_right">
                <p class="tria_p white">fokus</p>
            </div>
        </div>

    </section>

    <!-- SERVICES -->
    <section id="services" class="services">
        <div class="left background_white">
            <h3 class="black">služby</h3>
            <div class="table" id="table">
                <div class="row">
                    <div class="sqx_first sqx" id="sq_one"></div>
                    <!-- <h4 class="black">UŽIVATELSKÝ VÝZKUM & STRATEGIE </h4> -->
                    <h4 class="black">UŽIVATELSKÝ VÝZKUM A STRATEGIE </h4>
                </div>
                <div class="row">
                    <div class="sqx_back" id="sq_two"></div>
                    <h4 class="black back_header">DESIGN</h4>
                </div>
                <div class="row">
                    <div class="sqx" id="sq_three"></div>
                    <!-- <h4 class="black">GRAFIKA</h4> -->
                    <h4 class="black">GRAFIKA</h4>
                </div>
                <div class="row">
                    <div class="sqx_back" id="sq_four"></div>
                    <h4 class="black back_header">DEVELOPMENT</h4>
                </div>
                <div class="row">
                    <div class="sqx" id="sq_five"></div>
                    <!-- <h4 class="black">OPTIMALIZACE PRO VYHLEDÁVAČE</h4> -->
                    <h4 class="black">OPTIMALIZACE PRO VYHLEDÁVAČE</h4>
                </div>
                <div class="row">
                    <div class="sqx_back" id="sq_six"></div>
                    <!-- <h4 class="black back_header">HOSTING A SPUŠTĚNÍ WEBU</h4> -->
                    <h4 class="black back_header">HOSTING A SPUŠTĚNÍ WEBU</h4>
                </div>
            </div>
        </div>

        <div class="right background_black text_services" >
            <p class="white" id="p_res"> Proces zahajujeme Analýzou konkurence a Uživatelským výzkumem. Určení cílové skupiny uživatelů a jejích potřeb je 
                klíčové pro definici strategie vedoucí k jejich naplnění. Mezi metody, které používáme patří například Persony 
                (fiktivní cíloví uživatelé), Stylescapy (designové koláže) nebo dotazníkové ankety.</p>

            <p class="white" id="p_des">Během Designové fáze tvoříme ucelený vizuální styl a zabýváme se Uživatelskou zkušeností - používáme wireframy, navigační mapy,
                 Userflows a jiné. Designy navrhuji responsivní (přizpůsobené pro mobil, tablet a desktop) a interaktivní prototypy
                  dostává klient pro lepší představení finálního produktu ještě před započetím samotného vývoje.</p>
                
            <p class="white" id="p_gra"> Unikátní grafika je součástí Designu webu, může se jednat o jednoduché ilustrace, vlastní ikony či komplikovanější 
                editace série fotografií. Animace a video na míru bývá jako element pomyslnou třešňičkou na dortu a jsem schopná ho 
                dodat od počátečního storyboardingu, přes produkci až po finální editaci.</p>

            <p class="white" id="p_dev">Weby a webové aplikace vyvíjím od základů klientovi na mírů a responsivní pro
                 všechny typy zařízení (mobil, tablet a desktop).  Dle požadavků napojíme CMS (Systém pro zprávu obsahu) 
                 a databázy. Výsledný produkt je před finálním spuštěním důkladně uživatelsky testován a optimalizován z 
                 hlediska Nalezitelnosti, Dostupnosti, Přístupnosti, Použitelnosti aj.</p>

            <p class="white" id="p_seo">SEO (Optimaizace pro vyhledávače) zohledňujeme již v přípravné fázy, kde provádíme Analýzu klíčových slov a na 
                jejím základě stavíme obsah webu. Během vývoje webu provádím technickou optimalizaci pro vyhledávače, která společně s kvalitním 
                obsahem webu vytváří produkt, který zaujme cílového uživatele přidanou hodnotou.</p>

            <p class="white" id="p_hos">Výběr výstižné a dobře zapamatovatelné domény je zcela zásadní. Následuje optimální 
                řešení hostingu a zabezpečení celého webu. Po spuštění analyzujeme návštěvnost pomocí Google Analytics 
                a nastavujeme marketingové kampaně jako například Google Ads.</p>

            <a href="#contact"><button class="black_button" id="ser_button_black">Mám zájem</button></a>

        </div>

    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="left background_white">
            <img src="../images/smiley.png" alt="smajlík" id="smiley">
            <h3 class="black">o mně</h3>
            <p class="black">Jsem Designer a Developer žíjící v Edinburghu. Ráda tvořím. Technologie používám jako mocné nástroje k vyjádření své kreativní vize. 
                                Věřím v sofistikovaná řešení, která jsou funkční a krásná zároveň. 
                                Obdivuji architekturu a umění, muzea a galerie pro mne vždy budou zdrojem nekonečné inspirace. Ráda cestuji po vlastní ose a poznávám a pozoruji odlišné kultury.<br><br>
            </p>
            <p class="black" id="help_quote">Pomáhám klientům být na webu tou nejlepší verzí sebe sama.</p>

            <a href="#contact"><button class="white_button" id="help_button">Napište mi</button></a>
       
        </div>
        <div id="help_cont_black" class="background_black">
        <img src="../images/luca.png" alt="portrét Lucie" class="luca">
        <div id="help_box_black">
            <p class="white" id="help_quote_black">I help clients to be the best version of their own on web.</p>
            <a href="#contact"><button class="black_button" id="help_button_black">Napište mi</button></a>
        </div>
        </div>

    </section>

        <!-- PROJECTS -->
    <section class="projects" id="projects">
        <div class="left background_white">
            <h3 class="black">projekty</h3>
            <!-- ONLY MOBILE -->
                <!-- project 1 -->
                <div class="project_card">
                    <a href="casestudy_helena.php"><img src="../images/pr_helena.jpg" alt="Helena Kmochová web" class="cover" id="cover2"></a> 
                    <div class="project_descr">
                        <a href="casestudy_helena.php"><img src="../images/triangle_right.png" alt="červený trojúhelník"></a> 
                        <a href="casestudy_helena.php"><h4 class="black">Helena Kmochová Web</h4></a> 
                    </div>
                </div>
                <!-- project 2 -->
                <div class="project_card">
                    <a href="casestudy_boom.php"><img src="../images/pr_boom.jpg" alt="Boom Radio website" class="cover" id="cover1"></a> 
                    <div class="project_descr">
                        <a href="casestudy_boom.php"><img src="../images/triangle_right.png" alt="červený trojúhelník"></a>
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
        <div class="tria_div" id="triangle_button"><img src="../images/triangle_right.png" alt="červený trojúhelník" id="pro_tria"></div>
        
        <div class="right background_black">
            <!-- ONLY MOBILE -->
            <div class="more_container">
                <img src="../images/arrow_white.svg" alt="šipka" id="moreProjectArrow">
                <a href="projects.php"><p class="white">view more projects</p></a>
            </div>
            <!-- ------------------------------------ -->
            <!-- TAB + DESKTOP -->
            <div class="project_challenge" id="challenge_sketchnoters">
                <h4 class="white">výzva</h4>
                <p class="white"> Studio Sketchnoters potřebovalo profesionální portfolio a také uživatelům přiblížit, co to Sketchnoting je.</p>
            </div>
            <div class="project_challenge" id="solution_sketchnoters">
                <h4 class="white">řešení</h4>
                <p class="white">Design webu vycházel z konceptu stránky jako bílého plátna aby vynikly ručně tvořené ilustrace a animace 
                přibližující proces kreslení.</p>
            </div>
            <div class="project_challenge" id="challenge_boom">
                <h4 class="white">výzva</h4>
                <p class="white">Kompletní redesign webu a tvorba aplikace, která studentům umožní nezávisle vytvářet obsah 
                a lektorům ho administrovat.</p>
            </div>
            <div class="project_challenge" id="solution_boom">
                <h4 class="white">řešení</h4>
                <p class="white">Výsledným řešením byla aplikace se třemi urovněmi uživatelů - studenti, letoři a fanoušci. Každý z těchto uživatelů ...</p>
            </div>
            <div class="project_challenge" id="challenge_berry">
                <h4 class="white">výzva</h4>
                <p class="white">V tomto projektu jsem řešila jak a kde ukládat obsah tvořený uživateli, jak ho třídit a jak zobrazit uživateli požadovaný obsah.</p>
            </div>
            <div class="project_challenge" id="solution_berry">
                <h4 class="white">řešení</h4>
                <p class="white">Řešením bylo vytvoření webové aplikace napojené na databázi. Registrovaní uživatelé si mohou upravovat profil a psát články,
                 spravovat je a sdílet.</p>
            </div>
            <div class="project_challenge" id="challenge_jana">
                <h4 class="white">výzva</h4>
                <p class="white">Klientka v nedávné době založila svůj byznys, takže jsme nejříve museli analyzovat tržní příležitost, 
                    kde vyniknout, aby uspěla. </p>
            </div>
            <div class="project_challenge" id="solution_jana">
                <h4 class="white">řešení</h4>
                <p class="white">Postavili jsme web, který odráží Janin originální přístup - mířit na různé cílové skupiny uživatelů a 
                    vytvořili jsme obsah atraktivní pro každého zvlášť. </p>
            </div>
            <div class="project_challenge" id="challenge_helena">
                <h4 class="white">výzva</h4>
                <p class="white">Jak vyniknout mezi konkurencí? Jak vytvořit 
                    kvalitní web navzdory komplikovanější reputaci, kterou finanční poradenství v Česku má?</p>
            </div>
            <div class="project_challenge" id="solution_helena">
                <h4 class="white">řešení</h4>
                <p class="white">V úzké spolupráci s Helenou jsme dali dohromady unikátní obsah reflektující potřeby jejích klientů, 
                    informace, které na webu nejsou běžně dostupné.</p>
            </div>
            <div class="project_challenge" id="challenge_lucie">
                <h4 class="white">výzva</h4>
                <p class="white">Výzvou bylo zjednodušení designu a práce je se základními prvky - kruh, čtverec a trojúhelník a černo-bílá kombinace.</p>
            </div>
            <div class="project_challenge" id="solution_lucie">
                <h4 class="white">řešení</h4>
                <p class="white">Minimalistický design plný interaktivních prvků, které uživatele nabádají hrát si a objevovat. Tyto elementy uživatele přirozeně 
                provádí sekcemi ...</p>
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
            <p class="black">Na Lucii jsem dostala tip od své kamarádky, které také dělala webové stránky a byla velmi spokojená.
                Komunikaci hodnotím jako vynikající, i na vzdálenost ve všech směrech flexibilní. S odvedenou prací jsem naprosto spokojená a určitě budu doporučovat dál.
                <br><br>
            </p>
            <p class="black referee">Jana</p>
                <!-- <img src="../images/sl_1.png" alt="" class="slider_white" id="sl_1_w">
                <img src="../images/sl_1b.png" alt="" class="slider_black" id="sl_1_b"> -->
            </div>
            
            <!-- reference 2 -->
            <div class="refcard" id="reference_card_2">
                <p class="black">Měla jsem požadavek na tvorbu webovek na míru. Design, obsah a funkčnost stránek měli být originální a zajímavé. Lucka s Martinem jsou dobře sehraná dvojka, každý je odborník na to své a tak se skvěle doplňují. 
                    Překvapil mě hlavně celkový rozbor a analýza mého podnikání, klientů i mé osobnosti na začátku tvorby stránek. Opravdu profesionální přístup!
                    Vřele doporučuji:)
                    <br><br>
                </p>
                <p class="black referee">Helena</p>
                    <!-- <img src="../images/sl_2.png" alt="" class="slider_white" id="sl_2_w">
                    <img src="../images/sl_2b.png" alt="" class="slider_black" id="sl_2_b"> -->
                </div>
            <!-- reference 3 -->
            <div class="refcard" id="reference_card_3">
                <p class="black">Lucie mi byla doporučena a musím uznat, že předčila má očekávání. Již od počátečních průzkumů mi poodkryla mnoho zajímavých faktů, například jak důležité je řešit, jak web bude vnímán uživatelem a co ho skutečně zajímá.
                Cením si jejího profesionálního přístupu a energie kterou do naší spolupráce vložila. Doporučuji každému, kdo chce web, který vynikne.
                    <br><br>
                </p>
                <p class="black referee"></p>
                    <!-- <img src="../images/sl_3.png" alt="" class="slider_white" id="sl_3_w">
                    <img src="../images/sl_3b.png" alt="" class="slider_black" id="sl_3_b"> -->
                </div>
            </div>
            <div id="newRefSlider">
                <!-- <div class="black_slider blackDotFull" id="#slider_dot_one"></div>
                <div class="black_slider blackDorEmpty" id="#slider_dot_two"></div>
                <div class="black_slider" id="#slider_dot_three"></div> -->
            </div>

            <a href="#contact"><button class="white_button" id="ref_button_white">Vaše přání</button></a>
        </div>
        <div class="right background_black">
            <a href="#contact"><button class="black_button" id="ref_button_black">Vaše přání</button></a>
            <!-- image -->
        <div class="reference_playground" id="pl_yel">
            <img src="../images/ellipse.png" alt="žlutý kruh"  id="kruh_ref">
        </div>
        <div class="reference_playground" id="pl_blu">
            <img src="../images/rect.png" alt="modrý čtverec"  id="ctverec_ref">
        </div>
        <div class="reference_playground" id="pl_red">
            <img src="../images/triangl.png" alt="červený trojúhelník" id="trojuhelnik_ref">
        </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
        <div class="left background_white">
            <h3 class="black">kontakt</h3>
            <div class="contact_data">
                <h4 class="black">Lucie Hrbkova</h4>
                <h5 class="black">hrbkova.lucka@gmail.com
                    <br>
                    +447497920421</h5>
                <div class="socmedia">
                    <a href="https://www.instagram.com/lucieweb.dev/"><img src="../images/insta.png" alt="insta icon" id="insta"></a>
                    <a href="https://www.linkedin.com/in/luciehrbkova/"><img src="../images/linked.png" alt="LinkedIn icon" id="link"></a>
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
            <a href="#navbar"><img src="../images/up.png" alt="šipka nahoru"></a>
            <a href="https://www.instagram.com/lucieweb.dev/"><img src="../images/insta.png" alt="insta icon"></a>
            <a href="https://www.linkedin.com/in/luciehrbkova/"><img src="../images/linked.png" alt="LinkedIn icon"></a>
        </div>
    </div>
    <p class="copyright">© Lucie Hrbkova 2020</p>
    </section>
    
    
    
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
                    changeSliderBackground(" url('../images/sl_2.png')");
                    actualReference = "second";

                }
                else if (actualReference == "second")
                {
                    animateRefElements("0px","160px","80px","180");
                    swopRefCards("#reference_card_2","#reference_card_3");
                    changeSliderBackground(" url('../images/sl_3.png')");
                    actualReference = "third";

                }
                else
                {
                    animateRefElements("160px","80px","0px","180");
                    swopRefCards("#reference_card_3","#reference_card_1");
                    changeSliderBackground(" url('../images/sl_1.png')");
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
                    changeScr("#arrow", "../images/arrow_w.svg");
                    //arrow project mobile
                    changeScr("#moreProjectArrow", "../images/arrow.svg");
                    // contact sm icons
                    changeScr("#insta", "../images/insta_w.png");
                    changeScr("#link", "../images/linked_w.png");
                    
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
                    changeScr("#arrow", "../images/arrow.svg");
                    //arrow project mobile
                    changeScr("#moreProjectArrow", "../images/arrow_w.svg");
                    // contact sm icons
                    changeScr("#insta", "../images/insta.png");
                    changeScr("#link", "../images/linked.png");
                    
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