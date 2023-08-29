<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login2.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="oneagain.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;400;500;600;700;800;900&family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 

<!--PLUGIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<!--TOP MENU-->
<!--NAV-->
<nav class="navbar">
    <section class="flex_content">
        <figure class="logo fixed_flex">
            <img src="bird.png.png" alt="logo">
            <figcaption>
                <strong class="title">V4U</strong> 
            </figcaption>
        </figure>
    </section>
    <section class="flex_content nav_content" id="nav_content">
        <a href="oneagain.html" class="active" ><b>Home</b></a>
        <a href="plansagain.html"><b>Plans</b></a>
        <a href="blog.html" ><b>Blogs</b></a>
        <a href="/aboutagain.html"><b>About us</b></a>
    </section>
    <a href="#contact_me" id="contact_link" class="link">
        <div class="new"><a href="login2.php"><button class="contactme contact"><b>Log In</b></button></a>
          <a href="signup2.php"><button class="contactme contact"><b>Sign Up</b></button></a></a>
        </div>
</nav>

<!--MENU-->



<!--HEADER-->
<header class="flex">
    <article>
        <h1 class="title big">Welcome to <br><em>Wellness </em>Club</h1>
        <p>"You don’t have to be positive all the time. It’s perfectly okay to feel sad, angry, annoyed, frustrated, scared and anxious. Having feelings doesn’t make you a negative person. It makes you human." 
            <b>— Lori Deschene</b></p>
        
    </article>
    <section class="flex">
        <aside class="padding_1x">
            <h2 class="sub_title">CHOOSE HELP</h2>
            <p>You don't have to go through it alone. Asking for help is a courageous step towards healing.</p>
            <a href="plansagain.html"><i class="fa fa-angle-right"></i></a>
        </aside>
        <aside class="padding_1x">
            <h2 class="sub_title">HOW IT WORKS</h2>
            <p>The most simple & convenient way to access talk therapy - anytime, anywhere, any device.</p>
            <a href="works.html"><i class="fa fa-angle-right"></i></a>
        </aside>
        <aside class="padding_1x">
            <h2 class="sub_title">OUR COUNSELLORS</h2>
            <p>Embrace your struggles, for they are the stepping stones to mental strength.</p>
            <a href="therapy.html"><i class="fa fa-angle-right"></i></a>
        </aside>
    </section>
</header>



<!--MAIN-->
<main>

    <!--division_2-->
    <div class="divisions division_2 flex">
        <section class="flex_content padding_2x">
            <div class="title_header">
                <h2 class="title medium">Affirmations</h2>
                <p>You deserve to live a life free from the burdens of the past. Therapy can help you find that freedom.You should acknowledge your emotions without judgment, knowing that they are a natural part of being human.</p>
                <span class="bar_blue"></span>
            </div>
            <marquee direction="up" id="notification" onmouseover="this.stop();" onmouseleave="this.start();">
                <!--notification begining-->
                <a href="#" class="flex fixed_flex">
                    <figure>
                        <img src="https://thelawofattraction.com/wp-content/uploads/30-Positive-Quotes-About-Life-And-Happiness-To-Live-By.png" alt="" loading="lazy" />
                    </figure>
                    <article>
                        <h3 class="title">Can I overcome the challenges I'm facing? </h3>
                        <p>Yes, you can! You possess the strength and resilience to face and conquer challenges. Trust in your abilities and take one step at a time towards overcoming them.</p>
                       
                    </article>
                </a>
                <!--notification ends-->
                <!--notification begining-->
                <a href="#" class="flex fixed_flex">
                    <figure>
                        <img src="https://www.goodmorningquote.com/wp-content/uploads/2022/06/learn-to-let-go-be-happy-quote.webp" alt="" loading="lazy" />
                    </figure>
                    <article>
                        <h3 class="title">Is it okay to ask for help when I'm feeling overwhelmed? </h3>
                        <p>Absolutely! Asking for help is a brave and healthy choice. Seeking support from friends, family, or a mental health professional is a sign of self-awareness and a positive step towards healing.</p>
                      
                    </article>
                </a>
                <!--notification ends-->
                <!--notification begining-->
                <a href="#" class="flex fixed_flex">
                    <figure>
                        <img src="https://www.goodmorningquote.com/wp-content/uploads/2022/06/real-happiness-is-enough-be-happy-quote.webp" alt="" loading="lazy" />
                    </figure>
                    <article>
                        <h3 class="title">Do I have the power to shape my thoughts and mindset?</h3>
                        <p>Yes, you do! Your thoughts are within your control. Embrace positive thinking and cultivate a mindset that empowers you to believe in yourself and your abilities.</p>
                        
                    </article>
                </a>
                <!--notification ends-->
                <!--notification begining-->
                <a href="#" class="flex fixed_flex">
                    <figure>
                        <img src="https://funzumo.com/wp-content/uploads/2020/03/Cute-Happy-Quotes-Inspiring-Happiness-Quotes.png" alt="" loading="lazy" />
                    </figure>
                    <article>
                        <h3 class="title">Is it okay to prioritize self-care and take time for myself? </h3>
                        <p>Absolutely! Self-care is vital for your well-being. Taking time for yourself allows you to recharge and nurture your mind, body, and soul.</p>
                        
                    </article>
                </a>
                <a href="#" class="flex fixed_flex">
                    <figure>
                        <img src="https://www.dizain.in/wp-content/uploads/2022/05/life-happiness-quotes-the-purpose-of-our-lives.jpg" alt="" loading="lazy" />
                    </figure>
                    <article>
                        <h3 class="title">Can I choose to focus on the positive aspects of my life? </h3>
                        <p>Yes, you can! You have the power to shift your focus to the positive aspects of your life. Cultivating gratitude and optimism can bring about a more positive outlook.</p>
                        
                    </article>
                </a>
                <a href="#" class="flex fixed_flex">
                    <figure>
                        <img src="https://wallpaperaccess.com/full/292314.jpg" alt="" loading="lazy" />
                    </figure>
                    <article>
                        <h3 class="title">Am I worthy of seeking happiness and joy in my life? </h3>
                        <p>Absolutely! You are worthy of happiness and joy. Embrace the things that bring you joy, and remember to be kind to yourself along the journey.</p>
                        
                    </article>
                </a>
                <a href="#" class="flex fixed_flex">
                    <figure>
                        <img src="https://lh3.googleusercontent.com/blogger_img_proxy/AAOd8Mybz3qMm7vgc_Uxca0c46prg2WH_fkYtTPdzRUTT__5UMzI-YWbZi72W74DkWjDD3u_wNvHiQmVJBfanAN_9323jFv7JtvxkP7ebV3Q_ALEzileStjafWuB6FGYw5RnXk7QUeWNSQVijYWnzBkLPG0AByCyFmq2vAcU=s0-d" alt="" loading="lazy" />
                    </figure>
                    <article>
                        <h3 class="title">Is it normal to experience a range of emotions </h3>
                        <p>Absolutely! Emotions are a natural part of being human. It's okay to experience a wide range of feelings. Remember to give yourself permission to feel and process these emotions in a healthy way.</p>
                        
                    </article>
                </a>
                <!--notification ends-->
            </marquee>
        </section>
        <section class="flex_content padding_2x" id="event">
            <div class="title_header">
                <h2 class="title medium">Events</h2>
                <p>In the embrace of understanding souls, our mental burdens grow lighter, and the journey towards healing becomes a shared endeavor, empowering us to rise above adversity together.</p>
                <span class="bar_white"></span>
                <ul class="logo-slider event-slider">
                    <li>
                        <h3 class="title small"> Session By Ankur Warikoo : Embrace Self-Love</h3>
                        <p>He is an Indian Entrepreneur and one of India’s top content creators. He is also a bestselling author and conducts courses online as an educator. </p>
                        <aside class="fixed_flex">
                            <span>25<sub>day</sub></span>
                            <span>11<sub>hrs</sub></span>
                            <span>30<sub>min</sub></span>
                            <span>03<sub>sec</sub></span>
                        </aside>
                        <a href="register.html" class="btn btn_2">Register</a>
                    </li>
                    <li>
                        <h3 class="title small">Session By Sandeep Maheshwari : Stop Wasting Time</h3>
                        <p>He is an Indian entrepreneur, photographer, and motivational speaker. He is also the founder and CEO of Imagesbazaar.com, which is largest collection of Indian images.</p>
                        <aside class="fixed_flex">
                            <span>50<sub>day</sub></span>
                            <span>11<sub>hrs</sub></span>
                            <span>30<sub>min</sub></span>
                            <span>03<sub>sec</sub></span>
                        </aside>
                        <a href="register.html" class="btn btn_2">Register</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    
    <!--division_4-->
    <div class="divisions division_4" onmousemove="animate_balls(event)">
        <div class="title_header">
            <h2 class="title medium">We promise best future for you.</h2>
            <p><b> TALK RESOLVE HEAL </b>Online Counselling Therapy with Top Psychologists, Anytime Anywhere AnyDevice. Your mental health is a priority and your self-care is a necessity.</p>
            <aside class="fixed_flex">
                <a href="therapy.html" class="btn btn_1">Get Started</a>
            </aside>
        </div>
        
    </div>
</main>

<div class="main">
    <div class="testimonials">
      <input type="radio" name="testimonial" id="input-testimonial1" checked>
      <input type="radio" name="testimonial" id="input-testimonial2">
      <input type="radio" name="testimonial" id="input-testimonial3">
      <input type="radio" name="testimonial" id="input-testimonial4">
      <div class="testimonials-inner">
        <div class="testimonial">
          <div class="testimonial-photo">
            <div class="photo-background"></div>
            <div class="photo-author"></div>
          </div>
          <div class="testimonial-text">
            <p class="crazy1">I was unsure about starting therapy initially. Their personalized therapy plans, 24/7 support & absolute flexibility in terms of choosing time or therapist got me to enroll. I have learnt to manage my anxiety so well. My panic attacks are a thing of distant past now.
            </p>
          </div>
          <div class="testimonial-author">Snehal Bandi</div>
        </div>
        <div class="testimonial">
          <div class="testimonial-photo">
            <div class="photo-background"></div>
            <div class="photo-author"></div>
          </div>
          <div class="testimonial-text">
            <p class="crazy2">It gave me a new lease of life. I was at the point of ending things & within a matter 21 days I felt like I got my life back. I am so grateful for the timely help and unconditional support from this platform.</p>
          </div>
          <div class="testimonial-author">Snigdha Kashyap</div>
        </div>
        <div class="testimonial">
          <div class="testimonial-photo">
            <div class="photo-background"></div>
            <div class="photo-author"></div>
          </div>
          <div class="testimonial-text">
            <p class="crazy3">College was not what I expected. I felt so marginalised, had lost all confidence & could not cope with the academic stress & my strained relationship. My therapist helped me find my self esteem & confidence. She also helped me with effective coping mechanisms for my stress & relationship issues.</p>
          </div>
          <div class="testimonial-author">Sony Mahato</div>
        </div>
        <div class="testimonial">
          <div class="testimonial-photo">
            <div class="photo-background"></div>
            <div class="photo-author"></div>
          </div>
          <div class="testimonial-text">
            <p class="crazy4">I feel so grateful to the psychologist & psychiatrist at V4U who made helped me understand & treat my depression.Within a few sessions my therapist pulled me out of this really dark place & helped me find joy and harmony.</p>
          </div>
          <div class="testimonial-author">Sanjana J Yaragal</div>
        </div>
      </div>
      <div class="testimonials-arrows">
        <div class="arrow arrow-left">
          <label for="input-testimonial1"></label>
          <label for="input-testimonial2"></label>
          <label for="input-testimonial3"></label>
          <label for="input-testimonial4"></label>
          <span></span>
        </div>
        <div class="arrow arrow-right">
          <label for="input-testimonial1"></label>
          <label for="input-testimonial2"></label>
          <label for="input-testimonial3"></label>
          <label for="input-testimonial4"></label>
          <span></span>
        </div>
      </div>
      <div class="testimonials-bullets">
        <label for="input-testimonial1">
          <div class="bullet">
            <div>
              <span></span>
            </div>
          </div>
        </label>
        <label for="input-testimonial2">
          <div class="bullet">
            <div>
              <span></span>
            </div>
          </div>
        </label>
        <label for="input-testimonial3">
          <div class="bullet">
            <div>
              <span></span>
            </div>
          </div>
        </label>
        <label for="input-testimonial4">
          <div class="bullet">
            <div>
              <span></span>
            </div>
          </div>
        </label>
      </div>
    </div>
  </div>
  <footer class="footbar">
    <div class="footer">
    <div class="row">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <a href="#"><i class="fa fa-youtube"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    </div>
    
    <div class="row">
    <ul>
    <li><a href="contactagain.html">Contact Us</a></li>
    <li><a href="privacy.html">Privacy Policy</a></li>
    <li><a href="terms.html">Terms & Conditions</a></li>
    <li><a href="/aboutagain.html">About Us</a></li>
    </ul>
    </div>
    
    <div class="row">
    INFERNO Copyright © 2023 Inferno - All rights reserved.
    </div>
    </div>
    </footer>
    


<!--ADDITIONAL-->
<div class="overlay"></div>
<div class="cursor"></div>

</body>

</body>
</html>