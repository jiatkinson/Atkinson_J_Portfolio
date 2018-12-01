<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.4.1/lottie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
</head>
<body>

    <?php

        include './includes/functions.php';
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

    ?>

    <script>
        function send_email(name, email, message) {
            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log('email sent');
            }
        };
        xmlhttp.open("GET", "./includes/email.php?name=" + name + "&email=" + email + "&message=" + message, true);
        xmlhttp.send();
        }

        function playvideo(path, description) {
            document.getElementById('video').setAttribute('src', './video/' + path);
            document.getElementById('video_description').innerHTML = description;
            document.getElementById('lightbox').className = "vid_container"; // lightbox class
        }
    </script>

<!-- HEADER -->
    <h1 class="hide">Jacob Atkinson's Portfolio</h1>
    <header id="mainHeaderCon">

        <div id="mainHeader" class="row">

        <div class="headerTitle small-12 large-3 columns">
            <h1>Jacob Atkinson</h1>
        </div>


        <nav class="small-12 large-9 columns">
                <h2 class="hide">Navigation</h2>
                <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="large">
                    <div class="title-bar-right">
                      <button class="menu-icon" type="button" data-toggle></button>
                    </div>
                  </div>

          
                  <div id="main-menu" class="large-offset-3 large-9 columns">
                    <ul id="mainNav">
                      <li><a href="#home-page">Home</a></li>
                      <li><a href="#about-me">About Me</a></li>
                      <li><a href="#divide-work">My Work</a></li>
                      <li><a href="#divide-clients">Clients</a></li>
                      <li><a href="#divide-contact">Contact</a></li>
                      </ul>
                  </div>
              </nav>

        </div>

    </header>


<!-- Video Background -->
    <div id="home-page">
        <div class="bg-video row">
            <video class="bg-video_content small-12 columns" autoplay muted loop></video>
        </div>
        <div class="homeText">
                <h1>Jacob Atkinson</h1>
                <h2>Content Creator</h2>
        </div>
    </div>

    <div class=""></div>

<!-- ABOUT ME -->
    <section id="about-me" class="row">
        <h1 class="hide">About Me</h1>

        <div id="education" class="small-12 columns">

            <div id="education-title">
                <h1>Education:</h1>
                <h2>Fanshawe College</h2>
            </div>

            <div id="education-bars" class="small-12 columns programsCon">

                <div id="program1" class="medium-4 columns programs">
                        <img src="images/bar1.svg" alt="Bar1" class="bar-wrap" id="first-program">                   
                        <h3>Broadcasting - Television</h3>
                        <p>2 years - Diploma</p>
                </div>

                <div id="program2" class="medium-4 columns programs">
                        <img src="images/bar2.svg" alt="Bar2" class="bar-wrap" id="second-program">    
                        <h3>Visual Effects and Editing for Contemporary Media</h3>
                        <p>1 year - Certificate</p>
                </div>

                <div id="program3" class="medium-4 columns programs">
                        <img src="images/bar3.svg" alt="Bar3" class="bar-wrap" id="third-program">  
                        <h3>Interactive Media Design</h3>
                        <p>2 years - Diploma</p>
                </div>

            </div>

        </div>

        <div id="skills" class="small-12 medium-offset-1 medium-10 columns">
            <h1>Skills</h1>

            <div id="mobile-chart" class="show-for-small-only columns">
            <?xml version="1.0" encoding="utf-8"?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 279 633" style="enable-background:new 0 0 279 633;" xml:space="preserve">
             
            <style type="text/css">
                .st0skills{fill:#B3212C;stroke:#B3212C;stroke-width:5;stroke-miterlimit:10;}
                .st1skills{fill:#E5E5E5;}
                .st2skills{fill:#3F3F3F;}
                .st3skills{font-family:'Metropolis-SemiBold';}
                .st4skills{font-size:17.4811px;}
                .st5skills{font-size:13.1108px;}
                .st6skills{font-size:10.9257px;}
                .st7skills{font-size:8px;}
                .st8skills{font-size:9px;}
                .st9skills{font-size:6px;}
            </style>

            <g id="lines">
                <g>
                    
                        <rect x="105.4" y="181.6" transform="matrix(0.6274 -0.7787 0.7787 0.6274 -153.8249 175.5784)" class="st0skills" width="2.4" height="133.8"/>
                </g>
                <g>
                    
                        <rect x="-9.5" y="125.7" transform="matrix(0.2823 -0.9593 0.9593 0.2823 -69.1063 161.4485)" class="st0skills" width="165.6" height="2.4"/>
                </g>
                <g>
                    
                        <rect x="50.5" y="173.5" transform="matrix(0.9278 -0.373 0.373 0.9278 -55.3017 63.451)" class="st0skills" width="171.6" height="2.4"/>
                </g>
                <g>
                    
                        <rect x="109.3" y="216.8" transform="matrix(0.3668 -0.9303 0.9303 0.3668 -84.2449 312.2434)" class="st0skills" width="155.9" height="2.4"/>
                </g>
                <g>
                    
                        <rect x="194.6" y="278.5" transform="matrix(0.8885 -0.4589 0.4589 0.8885 -142.9823 129.9206)" class="st0skills" width="2.4" height="161.3"/>
                </g>
                <g>
                    
                        <rect x="24.1" y="366.3" transform="matrix(0.507 -0.8619 0.8619 0.507 -260.8588 278.8808)" class="st0skills" width="178.6" height="2.4"/>
                </g>
                <g>
                    
                        <rect x="124" y="423.7" transform="matrix(0.7672 -0.6414 0.6414 0.7672 -299.7841 199.7202)" class="st0skills" width="2.4" height="178.1"/>
                </g>
            </g>

            <g id="circles">
                <g id="visual-effects-m">
                    
                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -357.5262 299.1581)" class="st1skills grow" cx="182.4" cy="581.2" rx="35.3" ry="35.3"/>
                </g>
                <g id="website-design-m">
                    <ellipse transform="matrix(0.738 -0.6748 0.6748 0.738 -6.6869 77.6996)" class="st1skills grow" cx="96.7" cy="47.5" rx="28.4" ry="28.4"/>
                </g>
                <g id="motion-graphics-m">
                    
                        <ellipse transform="matrix(0.1877 -0.9822 0.9822 0.1877 -236.3668 573.3231)" class="st1skills grow" cx="228.4" cy="429.6" rx="41.8" ry="41.8"/>
                </g>
                <g id="photography-m">
                    
                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -160.9304 204.0259)" class="st1skills grow" cx="165.8" cy="296.3" rx="50.3" ry="50.3"/>
                </g>
                <g id="videography-m">
                    
                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -287.4488 189.6539)" class="st1skills grow" cx="85.2" cy="441.8" rx="74.8" ry="74.8"/>
                </g>
                <g id="social-media-m">
                    
                        <ellipse transform="matrix(0.2291 -0.9734 0.9734 0.2291 -162.8485 207.0811)" class="st1skills grow" cx="49.3" cy="206.4" rx="42.3" ry="42.3"/>
                </g>
                <g id="graphic-design-m">
                    
                        <ellipse transform="matrix(0.8889 -0.4581 0.4581 0.8889 -43.1891 114.8334)" class="st1skills grow" cx="215.2" cy="146.5" rx="38" ry="38"/>
                </g>
                <text id="Videography-m" transform="matrix(1 0 0 1 31.3358 447.2184)" class="st2skills st3skills st4skills">Videography</text>
                <text id="Photography-m" transform="matrix(1 0 0 1 123.881 302.144)" class="st2skills st3skills st5skills">Photography</text>
                <text id="Social_Media-m" transform="matrix(1 0 0 1 16.1286 211.6527)" class="st2skills st3skills st6skills">Social Media</text>
                <text id="Graphic_Design-m" transform="matrix(1 0 0 1 185.6989 149.5892)" class="st2skills st3skills st7skills">Graphic Design</text>
                <text id="Motion_Graphics-m" transform="matrix(1 0 0 1 193.3746 434.8237)" class="st2skills st3skills st8skills">Motion Graphics</text>
                <text id="Website_Design-m" transform="matrix(1 0 0 1 73.0014 50.7745)" class="st2skills st3skills st9skills">Website Design</text>
                <text id="Visual_Effects-m" transform="matrix(1 0 0 1 156.8507 585.7412)" class="st2skills st3skills st7skills">Visual Effects</text>
            </g>

            </svg>
            </div>

            <div id="main_chart" class="show-for-medium-up columns mobile-hide">
                <?xml version="1.0" encoding="utf-8"?>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 623 282" style="enable-background:new 0 0 623 282;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:#B3212C;stroke:#B3212C;stroke-width:5;stroke-miterlimit:10;}
                    .st1{fill:#E5E5E5;}
                    .st2{fill:#3F3F3F;}
                    .st3{font-family:'Metropolis-SemiBold';}
                    .st4{font-size:17.4811px;}
                    .st5{font-size:13.1108px;}
                    .st6{font-size:10.9257px;}
                    .st7{font-size:8px;}
                    .st8{font-size:9px;}
                    .st9{font-size:6px;}
                </style>
                <g id="lines">
                    <g>
                        
                            <rect x="315" y="110.5" transform="matrix(0.6274 -0.7787 0.7787 0.6274 55.3522 339.0175)" class="st0" width="133.8" height="2.4"/>
                    </g>
                    <g>
                        
                            <rect x="502.3" y="-4.3" transform="matrix(0.2823 -0.9593 0.9593 0.2823 286.0887 539.334)" class="st0" width="2.4" height="165.6"/>
                    </g>
                    <g>
                        
                            <rect x="454.6" y="55.6" transform="matrix(0.9278 -0.373 0.373 0.9278 -19.8401 180.2129)" class="st0" width="2.4" height="171.6"/>
                    </g>
                    <g>
                        
                            <rect x="411.2" y="114.4" transform="matrix(0.3668 -0.9303 0.9303 0.3668 82.1955 505.4931)" class="st0" width="2.4" height="155.9"/>
                    </g>
                    <g>
                        
                            <rect x="190.6" y="199.7" transform="matrix(0.8885 -0.4589 0.4589 0.8885 -61.9539 146.8787)" class="st0" width="161.3" height="2.4"/>
                    </g>
                    <g>
                        
                            <rect x="261.7" y="29.2" transform="matrix(0.507 -0.8619 0.8619 0.507 27.4716 284.9602)" class="st0" width="2.4" height="178.6"/>
                    </g>
                    <g>
                        
                            <rect x="28.5" y="129.2" transform="matrix(0.7672 -0.6414 0.6414 0.7672 -56.2419 105.7477)" class="st0" width="178.1" height="2.4"/>
                    </g>
                </g>
                <g id="circles">
                    <g id="visual-effects-m">
                        <ellipse class="st1" cx="49.3" cy="187.4" rx="35.3" ry="35.3"/>
                    </g>
                    <g id="website-design-m">
                        
                            <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 98.7873 442.0406)" class="st1" cx="583" cy="101.8" rx="28.4" ry="28.4"/>
                    </g>
                    <g id="motion-graphics-m">
                        
                            <ellipse transform="matrix(0.1877 -0.9822 0.9822 0.1877 -66.1991 386.9421)" class="st1" cx="200.8" cy="233.5" rx="41.8" ry="41.8"/>
                    </g>
                    <g id="photography-m">
                        
                            <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -22.9437 286.3489)" class="st1" cx="334.2" cy="170.9" rx="50.3" ry="50.3"/>
                    </g>
                    <g id="videography-m">
                        
                            <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -8.6191 159.818)" class="st1" cx="188.6" cy="90.3" rx="74.8" ry="74.8"/>
                    </g>
                    <g id="social-media-m">
                        <ellipse class="st1" cx="424.1" cy="54.4" rx="42.3" ry="42.3"/>
                    </g>
                    <g id="graphic-design-m">
                        <ellipse transform="matrix(0.8889 -0.4581 0.4581 0.8889 -47.1014 246.1749)" class="st1" cx="484" cy="220.2" rx="38" ry="38"/>
                    </g>
                    <text id="Videography-m" transform="matrix(1 0 0 1 132.4233 96.9721)" class="st2 st3 st4">Videography</text>
                    <text id="Photography-m" transform="matrix(1 0 0 1 292.0319 174.5431)" class="st2 st3 st5">Photography</text>
                    <text id="Social_Media-m" transform="matrix(1 0 0 1 390.3627 57.7313)" class="st2 st3 st6">Social Media</text>
                    <text id="Graphic_Design-m" transform="matrix(1 0 0 1 454.3618 224.7313)" class="st2 st3 st7">Graphic Design</text>
                    <text id="Motion_Graphics-m" transform="matrix(1 0 0 1 164.3624 237.7312)" class="st2 st3 st8">Motion Graphics</text>
                    <text id="Website_Design-m" transform="matrix(1 0 0 1 560.3628 104.732)" class="st2 st3 st9">Website Design</text>
                    <text id="Visual_Effects-m" transform="matrix(1 0 0 1 22.362 190.7314)" class="st2 st3 st7">Visual Effects</text>
                </g>
                </svg>
                
            </div>

            </div>

            <div id="unique-info" class="small-12 columns">

            <div class="info-icons small-12 medium-offset-3 medium-2 columns">
                <div id="animate-plane"></div>

                <div class="info-text">
                    <h1 id="counter1">15</h1>
                    <p>countries travelled</p>
                </div>
            </div>

            <div class="info-icons small-12 medium-2 columns">
                <div id="animate-instagram"></div>

                <div class="info-text">
                    <h1 id="counter2">5000</h1>
                    <p>followers on Instagram</p>
                </div>
            </div>

            <div class="info-icons small-12 medium-2 columns end">
                <div id="animate-soccer"></div>

                <div class="info-text">
                    <h1 id="counter3">5</h1>
                    <p>years as a student athlete</p>
                </div>
            </div>


            </div>

    </section>

        <div class="row">
            <div id="divide-work" class="line-separator small-offset-2 small-8 end columns"></div>
        </div>

<!-- MY WORK -->
    <section id="my-work" class="row">
        <h2 class="hide">My Work</h2>


            <div id="lightbox" class="hide vid_container small-12 columns">
                <div onclick="javascript:document.getElementById('lightbox').className='hide test'">
                    <p class="exit" id="exit">X</p>
                </div>
                <div id="test" class="vid_elements">
                <video id="video" src="./video/video-1.mp4" controls></video>
                <p id="video_description"></p>
                </div>

            </div>

        <div class="small-12 medium-12 large-offset-1 large-10 columns" id="buttonCon">
            <button id="video-button">Videos</button>
            <span>/</span>
            <button id="photo-button">Photos</button>
        </div><br>


        <div class="video-section">
            <?php
                $video_data = get_all_items($conn, "portfolio_videos");
                $counter = 0;
                foreach ($video_data as $video) {
                    $counter++;
                    echo '<div onclick="playvideo(\'' . $video["videos_path"] . '\', \'' . $video["videos_desc"] . '\')" id="video'. $counter .'" class="small-12 medium-6 large-4 columns video">';
                    echo '<img src="images/'. $video["videos_thumb"] .'">';
                    echo '<p>'. $video["videos_name"] .'</p>';
                    echo '</div>';
                }
            ?>
        </div>

        
    </section>

    <div class="row">
        <div id="divide-clients" class="line-separator small-offset-2 small-8 end columns"></div>
    </div>

<!-- CLIENTS -->
    <section id="clients" class="row">
            <h1>Clients</h1>

        <ul id="clientList" class="small-12 columns">

            <?php
                $client_data = get_all_items($conn, "portfolio_clients");
                foreach ($client_data as $client) {
                echo '<li><a href="'. $client["clients_url"] .'">'. $client["clients_name"].'</a></li>';
                }
            ?>

        </ul>
    </section>

    <div class="row">
        <div id="divide-contact" class="line-separator small-offset-2 small-8 end columns"></div>
    </div>

<!-- CONTACT -->
    <div class="contact row">  
        <form id="contact" class="small-12 columns" action="" method="post">
        <h1>Great Minds Work Together</h1>
          <fieldset>
            <input id="name" placeholder="Name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input id="email" placeholder="Email" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <textarea id="message" placeholder="Message" tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <button type="button" onclick="send_email(document.getElementById('name').value,document.getElementById('email').value,document.getElementById('message').value)" id="contact-submit">Send Message</button>
          </fieldset>
        </form>
      </div>
    </section>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/countUp.js"></script>
    <script src="js/app.js"></script>

</body>
</html>