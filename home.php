<?php
session_start();
if(empty($_SESSION['id'])):
    header('location:login.php');
endif;
?>

<!doctype html>
<html lang="en">

<head>
    <title>Home Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0390a520c9.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <section id="nav-bar">

        <nav class="navbar navbar-expand-lg navbar-light">

            <a class="navbar-brand" href="#"><img src="images/demo-logo.png" </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars" area- hidden></i>
                    <span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#top"><i class="fa fa-home"></i>HOME</a>
                            <span class="sr-only">(current)</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#photoedit"><i class="fa fa-photo"></i>PHOTO EDITING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#videoedit"><i class="fas fa-file-video"></i>VIDEO EDITING</a>
                        </li>
                        <li class="nav-item" id="tutorials">
                            <a class="nav-link " href="#tutorials"><i class="fas fa-chalkboard-teacher"></i>TUTORIALS +</a>
                            <div class="sub-menu1">
                                <ul>
                                    <li><a href="videoediting.html"><i class="fas fa-video"></i>VIDEO EDITING  </a></li>
                                    <li><a href="photoediting.html"><i class="fa fa-photo"></i>PHOTO EDITING </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item" id="tutorials">
                            <a class="nav-link " href="#fromus"><i class="far fa-address-card"></i>FROM US +</a>
                            <div class="sub-menu1">
                                <ul>
                                    <li><a href="aboutusnew.html"><i class="far fa-address-card"></i>ABOUT US</a></li>
                                    <li><a href="contactus.html"><i class="far fa-address-card"></i>CONTACT US</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#profile"><i class="far fa-user-circle"></i>PROFILE</a>
                            <div class="sub-menu1">
                                <ul>
                                    <li><a href="">LOGOUT</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link " href="#profile">


                            <i class="far fa-user-circle"></i>LOGOUT
                           <!-- <?php

                include('databaseconnection.php');
        session_destroy();

            echo'<meta http-equiv="refresh" content="2;url=login.php">';
/*
            echo '<progress max=100><strong>progress: 60%
            done.</strong></progress><br>';
            echo '<span class="itext"> Logging out Please wait!...</span>';

                */
                  ?>-->

                        </a>
                        </li>
                    </ul>
                </div>
                </div>
        </nav>
    </section>
    <!------banner------->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="promo-tittle">Learn From Us</h1>
                    <p>We know how overwhelming it is trying to learn how to edit. We also know how frustrating it is that all everybody wants to teach you is which button to press. Don’t worry, we’ve got your back. Our step by step course is used by thousands
                        of editors to master the art of editing.</p>
                    <a href="#"><img src="images/play.png" class="play-btn">Watch Tutorial</a>
                </div>
                <div class="col-md-6 text-center">

                    <img src="images/Designer life-pana.png" class="img-fluid">

                </div>
            </div>
        </div>
        <img src="images/wave1.png" class="wave">

    </section>

    <!-----Photo editing----->

    <section id="photoedit">
        <div class="container text-center">
            <h1 class="tittle">PHOTO EDITING</h1>
            <div class="row text-center">
                <!--<div class="col-md-4 services">
                    <img src="/images/service2.png" class="service-img">-->
                <div class="photo-details">
                    <h3>Explore Photo Editing Classes Online</h3>
                    <p>
                        Expand your horizons as you learn more about photo editing. Try these classes that teach how to edit photos using digital tools with Photoshop, Lightroom, and other apps and software. Whether you’re working on a Mac or using Windows, these online classes
                        are filled with inspiration to take your photos to the next level. You’ll have the chance to develop new skills to help edit fine art photos, food photography and photo storytelling, And you can master your tools by trying different
                        photo editing techniques and shortcuts on both your laptop or iPhone. Each online class is broken down into short lessons that include hands-on projects to complete and share.
                    </p>
                </div>

                <div class="basic">
                    <h4>Photo Editing Basic</h4>
                    <p>We see digital image files every day in a wide range of places. Whenever you see a picture on a computer or smartphone, you're looking at a digital image file. When you take a picture with a digital camera, you're saving it as an image
                        file. Even the images you see offline, like those in newspapers and magazines, probably started as digital image files before they were printed. Have you ever thought about how image files actually work? Here are some of the basics.
                    </p>


                    <div class="basic-list">
                        <ul class="basic-edit">
                            <div class="row">
                                <div class="col-md-8">
                                    <li>
                                        <h5>Pixel</h5>
                                        <p>Every digital photo is made up of pixels, often abbreviated as px. You can think of a pixel as a tiny square that uses a specific color. When you look at an image file on a computer, you're really looking at thousands
                                            and thousands of pixels. But because each pixel is so small, you normally won't notice each of them unless you zoom in.</p>
                                    </li>
                                </div>
                                <div class="col-md-4"><img src="images/pixel.jpg">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <li>
                                        <h5>Dimention</h5>
                                        <p>When you refer to the height and width of an image, you're talking about its dimensions. For example, if an image is 500 pixels wide and 200 pixels high, you could say that its dimensions are 500px by 200px (the
                                            width is usually listed first). Let's look at a few other examples. The image below is 450px by 300px. Because this image is wider than it is tall, it's using a landscape orientation.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-md-4"><img src="images/dimention.jpg">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-8">
                                    <li>
                                        <h5>Resolution</h5>
                                        <p>You can think of an image's resolution as the amount of detail contained in the image. The higher the resolution, the more quality the image will have. Resolution is especially important if you're thinking of printing
                                            or resizing an image. This is because you can generally make an image smaller without noticing much of a difference in the quality. However, making an image larger than its original size will usually result
                                            in a noticeable loss in quality.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-md-4"><img src="images/resolution.jpg">
                                </div>
                            </div>

                        </ul>
                    </div>
                </div>

                <div class="advanced text-center">
                    <div class="advanced-edit">
                        <h4>Here are the key steps for editing your photos</h4>
                        <p>The basic photo editing techniques should be available in even simple editing programs, and each can enhance your images to make them more powerful and shareworthy. Advanced editing software will offer these basic tools and will
                            also include refinements that allow you to do more sophisticated editing that’s outside the scope of this article. You don’t have to do all of the basic editing steps on every image, but the steps you choose to do should be
                            done in the order listed.</p>
                        <ul>
                            <li>1 - Crop your images and clean them up.</li>
                            <li>2 - Adjust white balance.</li>
                            <li>3 - Adjust exposure and contrast.</li>
                            <li>4 - Adjust color vibrancy and saturation.</li>
                            <li>5 - Sharpen images</li>
                            <li>6 - Finalize and share.</li>
                        </ul>
                    </div>
                    <a type="button" class="btn btn-primary" href="photoediting.html">Photo Editing Tutorials</a>
                </div>
            </div>
        </div>
    </section>
    <!------Video editing-->
    <section id="videoedit">
        <div class="container">
            <h1 class="tittle text-center">VIDEO EDITING</h1>
            <div class="row ">
                <!--<div class="col-md-6 about-us ">-->
                <div class="video-details ">
                    <div class="video-details ">
                        <h3>Explore Video Editing Classes Online</h3>
                        <p>
                            Take the next step on your video editing journey. With these Skillshare classes, you can explore a wide range of topics, tools and techniques to help you transform a pile of footage into a cinematic masterpiece. Whether you’re looking for online film
                            editing classes for beginners or you’ve got lots of experience cutting films and videos, you can take your skills to the next level with classes in editing software, filmmaking, and video storytelling, all taught by talented
                            editors and filmmakers. You can learn video editing practices that will help you make better how-to videos, documentaries, travel stories, music videos, wedding films, commercials, and videos that stand out on YouTube. Learn
                            how to use post-production and editing software like Adobe Premiere, Final Cut Pro, After Effects, iMovie and DaVinci Resolve. You can even cut an amazing video right on your Apple iPhone. And you’ll get hands-on experience
                            by completing and sharing your own editing projects.
                        </p>
                    </div>
                </div>

                <div class="basic">
                    <h4>Video Editing Basic</h4>
                    <p>After you’ve recorded all your video footage it’s time to turn all those individual shots into your video. But where to start? Perhaps the most important, and lengthiest, workflow in your video production process is the editing phase,
                        but it can be intimidating. This is where you turn all of that footage into something artfully cut together and, hopefully, watchable - maybe even viral. Editing doesn’t have to be a challenge. Follow this checklist to ensure you’ve
                        ticked off all the essential steps.</p>
                    <div class="basic-list">
                        <ul class="basic-edit">
                            <div class="row">
                                <div class="col-md-8">
                                    <li>
                                        <h5>First things first: Choose your software</h5>
                                        <p>There’s a lot of video editing platforms out there for you ,We will gives you which software is the easiest to edit in and how to maximize their potential. The most widely used platforms by beginners and seasoned
                                            videographers alike are Adobe® Premiere® Pro CC, iMovie and Final Cut Pro X. Depending on the hardware you’re working on, some platforms may not be supported.Check out our list of basic video editing software
                                            <a href="">here</a>
                                        </p>
                                    </li>
                                </div>
                                <div class="col-md-4"><img src="images/list.jpg">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <li>
                                        <h5>Keep your video footage organized</h5>
                                        <p>Once you’ve imported your video clips and they’re safely housed on your device, it’s time to organize them. Make a folder for your project with a subfolder for all the raw, unedited files you’ve just transferred
                                            across. Organization will pay you back in time saved. Don’t forget to name your files, so you can recognize the sequence you’re hoping to create. At this stage it’s also handy to delete your unwanted takes;
                                            keep only the best version of each shot to save yourself time in cutting these down the line. Be ruthless! A range of factors such as poor camera angles, quality of audio and delivery of any speech can throw
                                            your project off.</p>
                                    </li>
                                </div>
                                <div class="col-md-4"><img src="images/savelocation.jpg">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-8">
                                    <li>
                                        <h5>Don't neglect audio</h5>
                                        <p>All good videos have background music; awkward silences should definitely not make it to your small-screen project, unless they’re intended to build suspense. Make sure you’re using royalty-free background music
                                            to avoid any copyright issues later down the line (another great time-saving tip).
                                        </p>
                                    </li>
                                </div>
                                <div class="col-md-4"><img src="images/audio.jpg">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <li>
                                        <h5>Use b-roll to tell the story</h5>
                                        <p>B-roll is an essential part of any final cut. It adds context to your video; it aids the transition between shots, including angle transitions and changes of scenery; and it adds that professional touch to your
                                            project.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-md-4"><img src="images/b roll.jpg">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <li>
                                        <h5> Correctlyrender your animation for export</h5>
                                        <p>If you’re using the powers of animation in your video, you’ll need to render this properly for export. It's possible to export animations in lots of different video formats, so do your research on which video format
                                            you need for your chosen platform. No matter the platform you use to create your animation - for example, Adobe Photoshop - it will have specific instructions on how to render your animation and export for video,
                                            so it’s important you research within your specific platform.</p>
                                    </li>
                                </div>
                                <div class="col-md-4"><img src="images/animation.jpg">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <li>
                                        <h5>Choose the right video exporting settings</h5>
                                        <p>Video exporting settings can seem like a minefield, but they’re important to know. You’ll need to export your videos to share them with the world. Each video editing software platform will have its own method of
                                            exporting, along with its own set of video exporting settings. You’ll dictate the video format to export to and the presets, such as the bitrate of your video, which tells the software the level quality you
                                            want to export your video in.</p>
                                    </li>
                                </div>
                                <div class="col-md-4"><img src="images/render.png">
                                </div>
                            </div>


                        </ul>
                    </div>
                </div>

                <div class="advanced text-center">
                    <div class="advanced-edit">
                        <h4>Here are the key steps for editing your Videos</h4>
                        <p>You’ve filmed a movie or shot a music video, and now it’s time for the other half of the battle: the post-processing stage. As with filming, this step requires a good mix of both creativity and technical knowledge. And in this
                            article, we aim to help make the video editing process much easier and more productive by providing a few helpful tips, techniques, and “life hacks” for you below.

                        </p>
                        <ul>
                            <li>1 - Craft a killer script</li>
                            <li>2 - Choose the right color combination for your video</li>
                            <li>3 - Use high-quality images</li>
                            <li>4 - Add Text and Graphics</li>
                            <li>5 - Utilize Keyboard Shortcuts</li>
                            <li>6 - Bringing it all together</li>
                            <li>7 - Finalize and share.</li>
                        </ul>
                    </div>
                    <a type="button " class="btn btn-primary" href="videoediting.html">Video Editing Tutorials</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!------service-->
    <section id="services">
        <div class="container text-center">
            <h1 class="tittle">WHAT WE DO ?</h1>
            <div class="row text-center ">
                <div class="col-md-4 services">
                    <img src="images/service3.png " class="service-img ">
                    <h4>Tutorials</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore illum eum libero praesentium ab! Deleniti error debitis magnam a, ipsa dicta iure blanditiis nam, commodi amet perferendis qui recusandae nisi. </p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/service2.png " class="service-img ">
                    <h4>Photo Editing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore illum eum libero praesentium ab! Deleniti error debitis magnam a, ipsa dicta iure blanditiis nam, commodi amet perferendis qui recusandae nisi. </p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/service2.png " class="service-img ">
                    <h4>Video Editing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore illum eum libero praesentium ab! Deleniti error debitis magnam a, ipsa dicta iure blanditiis nam, commodi amet perferendis qui recusandae nisi. </p>
                </div>
            </div>
            <button type="button " class="btn btn-primary ">All Services</button>
        </div>
    </section>

    <!----about us-->
    <section id="about-us">
        <div class="container">
            <h1 class="tittle text-center">WHY CHOOSE US?</h1>
            <div class="row ">
                <div class="col-md-6 about-us">
                    <p class="about-tittle ">Why we are diffrent </p>
                    <ul>
                        <li>Believe in doing Editing with us</li>
                        <li>Start yours Skills from our class</li>
                        <li>Learn from us do creative</li>
                        <li>Teach on EditorBuddy helps others</li>
                        <li>We will makes you a proffesional Editor</li>
                    </ul>
                </div>
                <div class="col-md-6 ">
                    <img src="images/network.png " class="img-fluid ">
                </div>
            </div>
        </div>
    </section>

    <!-----testimonial-->
    <section id="testimonials">
        <div class="container">
            <h1 class="tittle text-center ">WHAT EDITORS SAYS</h1>
            <div class="row offset-1 ">
                <div class="col-md-4 testimonials ">
                    <p>"Invaluable resource for editing students and professionals alike. It’s something new; bridges a gap in the market offering proper insight into what happens behind the closed doors of a high end edit suite. Would and will recommend
                        it to everyone. "</p>
                    <img src="images/angelo.jpeg " alt=" ">
                    <p class="user-details "><b>Angelo</b><br>Film Director</p>
                </div>
                <div class="col-md-4 testimonials">
                    <p>"It 's not so easy to find programs that go beyond basic editing theory or "just" software skills. This one is focused on the art-form and the storytelling rather than the technology, and it can really make a difference when you're
                        trying to get the best out of any footage. "</p>
                    <img src="images/user2.jpg " alt=" ">
                    <p class="user-details "><b>Shyamjith</b><br>Proffesional Photo Editor</p>
                </div>
                <div class="col-md-4 testimonials">
                    <p>"Inside The edit has finally provided me with answers for many of the questions on the “why” and “how” I experienced over my story editing career. It explained the “editing science” I couldn’t find anywhere else. Thank you! "</p>
                    <img src="images/user2.jpg " alt=" ">
                    <p class="user-details "><b>Abin Jojo</b><br>Proffesional Video Editor</p>
                </div>
            </div>
        </div>
    </section>

    <!--------social media-->
    <section id="social-media">
        <div class="container text-center">
            <p>FIND US ON SOCIAL MEDIA</p>
            <div class="social-icons">
                <a href=" "><img src="images/facebook-icon.png "></a>
                <a href=" "><img src="images/instagram-icon.png "></a>
                <a href=" "><img src="images/twitter-icon.png "></a>
                <a href=" "><img src="images/whatsapp-icon.png "></a>
                <a href=" "><img src="images/snapchat-icon.png "></a>
            </div>
        </div>
    </section>

    <!--------Footer section----->
    <section id="footer">
        <img src="images/wave2.png" class="footer-img ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-4 footer-box">
                    <img src="images/demo-logo.png">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora maxime laborum facilis deleniti similique, explicabo esse nobis perspiciatis adipisci ipsam id quae ducimus. A repellat magnam voluptatum quas sit in! </p>

                </div>
                <div class="col-md-6 footer-box">
                    <p><b>CONTACT US </b></p>

                    <p><i class="fas fa-map-marked-alt "></i>Bengaluru,Karnataka</p>
                    <p><i class="fas fa-mobile-alt "></i>+91-987-654-3210</p>
                    <p><i class="fas fa-envelope "></i></i>EditorBuddy@gmail.com</p>
                </div>
                <div class="col-md-2 footer-box">
                    <p><b>REVIEW</b></p>

                    <input type="text" name="Rate" placeholder="Review">
                    <button type="button " class="btn btn-primary ">Review Us</button>

                </div>
            </div>
        </div>
    </section>

    <!-------smooth scroll-->
    <script src="smooth-scroll.js">
    </script>
    <script>
        var scroll = new SmoothScroll('a[href*="# "]');
    </script>

</body>

</html>