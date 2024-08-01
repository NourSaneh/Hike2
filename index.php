<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css"> 
    <link rel="stylesheet" href="index.css"> 
    <link rel="stylesheet" href="services.css"> 

   
</head>
<?php


require("Config.php");
include ("authentication.php");

?>

<div class="container" >
  <h1 style="color:white">TrailMix</h1>
  <p>Are You Ready</p>
</div>

<div class="blank" style="height:7cm" id="sport">
<link rel="stylesheet" href="index1.css">
<h2 style="text-align: center;font-size: xx-large; font-family:poppins, sans-serif; padding: 30px ;border-bottom: 2px solid orange;">Sports</h2>

<main class="main1" style="margin-top:20px">

        <section class="card-area1">
            <!-- Card: City -->
            <section class="card-section1">
                <div class="card1">
                    <div class="flip-card1">
                        <div class="flip-card__container1">
                            <div class="card-front1">
                                <div class="card-front__tp1 card-front__tp--city1">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/ssfrfbhy.json"
    trigger="hover"
    style="width:250px;height:250px">
</lord-icon>

                               <h2 class="card-front__heading1">
                                Biking
                            </h2>
                            
                                </div>

                                <div class="card-front__bt1">
                                    <p class="card-front__text-view1 card-front__text-view--city1">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back1">
                                <video class="video__container1" autoplay muted loop>
                                    <source class="video__media1" src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page1">
                        <div class="inside-page__container1">
                            <h3 class="inside-page__heading1 inside-page__heading--city1">
                                Mountain Biking
                            </h3>
                            <p class="inside-page__text1">
                               As cities never sleep, there are always something going on, no matter what time!
                            </p>
                            <a href="#" class="inside-page__btn1 inside-page__btn--city1">View </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Ski -->
            <section class="card-section1">
                <div class="card1">
                    <div class="flip-card1">
                        <div class="flip-card__container1">
                            <div class="card-front1">
                                <div class="card-front__tp1 card-front__tp--ski1">
                            
                                               <h2 class="card-front__heading1">
                                                   Hiking
                                               </h2>
                                             
                                </div>

                                <div class="card-front__bt1">
                                    <p class="card-front__text-view1 card-front__text-view--ski1">
                                        View me
                                    </p>
                                </div>
                            </div>

                            <div class="card-back1">
                                <video class="video__container1" autoplay muted loop>
                                    <source class="video__media1" src="https://player.vimeo.com/external/195913085.sd.mp4?s=7c12f7a83de62a8900fd2ae049297070b9bc8a54&profile_id=164&oauth2_token_id=574477611" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page1">
                        <div class="inside-page__container1">
                            <h3 class="inside-page__heading1 inside-page__heading--ski1">
                                Mountain Hiking
                            </h3>
                            <p class="inside-page__text1">
                               Love snow? Why not take up exciting ski-in sessions and hit the slope? 
                            </p>
                            <a href="#" class="inside-page__btn1 inside-page__btn--ski1" style="padding-top:20px">View deals</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Beach -->
            <section class="card-section1">
                <div class="card1">
                    <div class="flip-card1">
                        <div class="flip-card__container1">
                            <div class="card-front1">
                                <div class="card-front__tp1 card-front__tp--beach1">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                               <path d="M57.2,28h-7.4c-0.4-4-2-7.7-4.4-10.6l3.2-3.2c0.8-0.8,0.8-2,0-2.8c-0.8-0.8-2-0.8-2.8,0l-3.2,3.2c-3-2.4-6.6-4-10.6-4.4V2.8
                                   c0-1.1-0.9-2-2-2s-2,0.9-2,2v7.4c-4,0.4-7.7,2-10.6,4.4l-3.2-3.2c-0.8-0.8-2-0.8-2.8,0c-0.8,0.8-0.8,2,0,2.8l3.2,3.2
                                   c-2.4,3-4,6.6-4.4,10.6H2.8c-1.1,0-2,0.9-2,2s0.9,2,2,2h7.4c0.4,4,2,7.7,4.4,10.6l-3.2,3.2c-0.8,0.8-0.8,2,0,2.8
                                   c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6l3.2-3.2c3,2.4,6.6,4,10.6,4.4v7.4c0,1.1,0.9,2,2,2s2-0.9,2-2v-7.4c4-0.4,7.7-2,10.6-4.4
                                   l3.2,3.2c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6c0.8-0.8,0.8-2,0-2.8l-3.2-3.2c2.4-3,4-6.6,4.4-10.6h7.4c1.1,0,2-0.9,2-2
                                   S58.3,28,57.2,28z M30,45.9c-8.8,0-15.9-7.2-15.9-15.9c0-8.8,7.2-15.9,15.9-15.9c8.8,0,15.9,7.2,15.9,15.9
                                   C45.9,38.8,38.8,45.9,30,45.9z"/>
                               </svg>
                               
                                               <h2 class="card-front__heading1">
                                                   Running
                                               </h2>
                                               
                                </div>

                                <div class="card-front__bt1">
                                    <p class="card-front__text-view1 card-front__text-view--beach1">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back1">
                                <video class="video__container1" autoplay muted loop>
                                    <source class="video__media1" src="https://player.vimeo.com/external/332588783.sd.mp4?s=cab1817146dd72daa6346a1583cc1ec4d9e677c7&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page1">
                        <div class="inside-page__container1">
                            <h3 class="inside-page__heading1 inside-page__heading--beach1">
                                Running
                            </h3>
                            <p class="inside-page__text1">
                               Relax and get sun-kissed tan in the sea or take up surfting for an adventure!
                            </p>
                            <a href="#" class="inside-page__btn1 inside-page__btn--beach1">View deals</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Camping -->
            <section class="card-section1">
                <div class="card1">
                    <div class="flip-card1">
                        <div class="flip-card__container1">
                            <div class="card-front1">
                                <div class="card-front__tp1 card-front__tp--camping1">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                               <path d="M57,52.1c0-0.4-0.1-0.7-0.3-1.1l-6.3-10.8L32.4,9l2.3-4c0.6-1,0.2-2.2-0.7-2.7c-1-0.6-2.2-0.2-2.7,0.7L30,5.2L28.7,3
                                   c-0.6-1-1.8-1.3-2.7-0.7c-1,0.6-1.3,1.8-0.7,2.7l2.3,4l-18,31.1L3.3,51C3.1,51.3,3,51.7,3,52.1c0,0.4,0.1,0.7,0.3,1
                                   c0.4,0.6,1,1,1.7,1h50c0.7,0,1.4-0.4,1.7-1C56.9,52.8,57,52.4,57,52.1z M34.7,49.8C34.2,50,32.1,50,30,50s-4.2,0-4.7-0.2
                                   c-0.2-0.5-0.2-2.1-0.2-3.6l0-4.3c0-2.7,2.2-4.9,4.9-4.9s4.9,2.2,4.9,4.9l0,4.3C34.9,47.7,34.9,49.3,34.7,49.8z M13.1,42.1L28,16.5
                                   v16.7c-3.9,0.9-6.9,4.4-6.9,8.6l0,4.3c0,1.7,0,2.9,0.2,4H8.5L13.1,42.1z M38.7,50.1c0.2-1,0.2-2.3,0.2-4l0-4.3
                                   c0-4.2-2.9-7.7-6.9-8.6V16.5l15,25.7l4.6,7.9H38.7z"/>
                               </svg>
                                               <h2 class="card-front__heading1">
                                                  Climbing
                                               </h2>
                                              
                                </div>

                                <div class="card-front__bt1">
                                    <p class="card-front__text-view1 card-front__text-view--camping1">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back1">
                                <video class="video__container1" autoplay muted loop>
                                    <source class="video__media1" src="https://player.vimeo.com/external/180185916.sd.mp4?s=c893e4770f87b00e0d6b5a1de138b01b02aaa085&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page1">
                        <div class="inside-page__container1">
                            <h3 class="inside-page__heading1 inside-page__heading--camping1">
                                For nature lovers
                            </h3>
                            <p class="inside-page__text1">
                               Get your boots on for some hiking and explore all the beautiful scenery of nature!
                            </p>
                            <a href="#" class="inside-page__btn1 inside-page__btn--camping1">View deals</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
       
    </main>
</div>


<div class="container second" id="trail">
<h2 class="title">Lebanon</h2>

  <div class="item">
    <div class="img img-first"></div>
    <div class="card">
      <h3>Public Trail</h3>
      <p>The goal is to reach the summit of a formation or the endpoint of a usually pre-defined route without falling</p>
      <a href="Trail/publicTrails.php">Learn more</a>
    </div>
  </div>
  <div class="item">
    <div class="img img-second"></div>
    <div class="card">
      <h3>Private Trail</h3>
      <p>Exploring underground through networks of tunnels and passageways, which can be natural or artificial.</p>
      <a href="Trail/privatetrail.php">Learn more</a>
    </div>
  </div>
  
</div>

<div class="blank" id="blog">
<link rel="stylesheet" href="index2.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
 
  <?php
// blog_page.php

// Database connection

$sql = "SELECT * FROM blog";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="blank">';
    echo '<h2 style="text-align: center;font-size: xx-large; font-family:poppins, sans-serif; padding: 30px ;border-bottom: 2px solid orange;">Blog</h2>';
    echo '<div class="body1">';
    echo '<div class="blog-slider swiper-container">';
    echo '<div class="blog-slider__wrp swiper-wrapper">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="blog-slider__item swiper-slide">';
        echo '<div class="blog-slider__img">';
        echo '<img src="Uploads/'.$row["image"].'" alt="">';
        echo '</div>';
        
        echo '<div class="blog-slider__content">';
        echo '<span class="blog-slider__code">'.$row["date"].'</span>';
        echo '<div class="blog-slider__title">'.$row["title"].'</div>';
        echo '<div class="blog-slider__text">'.$row["content"].'</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    echo '<div class="blog-slider__pagination swiper-pagination"></div>';
    echo '</div>';
    echo '</div>';
    if(isset($_SESSION["LoggedIN"]) && $_SESSION["LoggedIN"] == 1){

    echo'<div class="add-blog-button">
    <a href="blog.php" class="button">Add Your Blog</a>
     </div>'; 
    }else{
        echo '<div class="add-blog-button" class="button">Login to Add yor blog</div>';
    }
} else {
    echo "0 results";
}

$con->close();
?>



  <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
  <script src="blogblank.js" defer></script>







  <main class="Main" id="services">
  <h2 style="text-align: center;font-size: xx-large; font-family:poppins, sans-serif; padding: 30px ;border-bottom: 2px solid orange;">OUR SERVICES</h2>
  
  <section class="Carousel" id="carousel" tabindex="-1">
    <h2 class="Hidden">Carousel</h2>
    <article class="Card Card--overlay Card--square" id="card-1">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="480" height="480" loading="lazy" src="https://www.sundried.com/cdn/shop/articles/running-coach-benefits.jpg?v=1579857129">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="Health/healthy.php">Healthy</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    <!--/Card-->
    <article class="Card Card--overlay Card--wide" id="card-2">
      <div class="Card__media">
        <img class="Card__image" alt="Card image description" width="720" height="480" loading="lazy" src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxMTE5MA&ixlib=rb-1.2.1&q=85&height=480">
      </div>
      <div class="Card__main">
        <h2 class="Card__heading"><a class="Card__link" href="Trail/tourism.php">Tourism</a></h2>
        <p>This is a generic card pattern.</p>
      </div>
    </article>
    
   
  </section>
  <!--/Carousel-->
  
  
  
 
</main>
<!--/Main-->









<footer class="footer">
    <p class="footer-text">&copy; 2024 Created by Ali.Z & Nour.S </p>
    <a href="chat/chat.php" class="contact-us-button">Contact Us</a>
    

</footer>



         
<script>
    
document.addEventListener('DOMContentLoaded', function() {
    const internalLinks = document.querySelectorAll('nav a[href^="#"]');

    internalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const sectionId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(sectionId);

            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});
