
<?php
require ('scripts/config.php');
    $select = "SELECT * from `settings`";
    $aboutUs = null;
    $sel = mysqli_query($con, $select);
    while ($row = mysqli_fetch_assoc($sel)) {
        $aboutUs = $row['aboutUs'];
    }
    ?>
    <!--Main Section-->
    <div id="about">
        <div class="bgcolor">
            <main class="container wow fadeIn " data-wow-duration="1.5s">
                <div class="row">
                    <div class="title col-xs-12">
                        <h1>about</h1>
                        <hr>
                    </div>

                    <div class="aboutus">
                        <p class="lead">
                           <?php echo $aboutUs; ?>
                        </p>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!--End of Main Section-->

    <!--Our Team Section-->
    <section id="team" class="container">
        <div class="row">
            <div class="title col-xs-12 wow fadeIn" data-wow-duration="1.5s">

                <!--
                        <div class="member col-xs-12 col-md-5 wow fadeInRight" data-wow-duration="1.5s">
                            <div class="circle-container">
                                <img src="imgs/team/khadiga.JPG" draggable="false" title="khadiga mashaal" alt="khadiga mashaal photo">
                            </div>
                            <div class="member-info">
                                <p class="lead">khadiga mashaal</p>
                                <p class="lead">member</p>
                            </div>
                        </div>
                -->


    </section>
    <!--End of Our Team Section-->

    <!--Events Section-->
    <section id="events" class="wow fadeIn ">

        <div class="container">
            <div class="row wow fadeIn ">
                <div class="title col-xs-12">
                    <h1>our events</h1>
                    <hr>
                </div>
            </div>
        </div>

        <div class="upcomingEvent">
            <div class="bgcolor">
                <div class="container wow fadeIn ">
                    <div class="row wow fadeIn ">
                        <div class="event-info col-xs-12">
                            <div class="title wow fadeIn " data-wow-duration="1.5s">
                                <a href="http://devfest.gdgoctober.org" target="_blank" draggable="false"><h1>GDG 6th
                                        October DevFest'17</h1></a>
                            </div>
                        </div>
                    </div>

                    <div class="devfestTime row wow fadeIn ">
                        <div class="col-xs-12 text-center address wow fadeIn " data-wow-delay="0.5s">
                        <span class="place wow fadeIn " data-wow-delay="0.5s">
                            <a href="https://goo.gl/maps/rdCQUBHN4p92" target="_blank" draggable="false"><span
                                        class="glyphicon glyphicon-map-marker wow bounce " data-wow-duration="1.5s"
                                        data-wow-iteration="1"></span>
                                Information Technology Institute (ITI)
                                Smart Village - 28 Km by Cairo / Alexandria Desert Road - 6 October - Building B148 
                                Cairo</a>
                        </span>
                        </div>

                        <div class="col-xs-12 text-center address wow fadeIn " data-wow-delay="0.8s">
                        <span class="time">
                            <span class="fa fa-calendar-check-o"></span>
                            Friday, October 13, 2017

                            <span class="fa fa-clock-o"></span>
                            9:00 aM - 6:00 pM
                        </span>
                        </div>
                    </div>

                    <div class="row">
                        <!--
                                            <div class="counter col-xs-12 col-sm-6 col-sm-6 col-md-3 wow fadeIn " data-wow-duration="1.5s" data-wow-delay="1s">
                                                <div class="circle">
                                                    <div class="border"></div>
                                                    <div id="days"></div>
                                                </div>
                                            </div>

                                            <div class="counter col-xs-12 col-sm-6 col-sm-6 col-md-3 wow fadeIn " data-wow-duration="1.5s" data-wow-delay="1s">
                                                <div class="circle">
                                                    <div class="border"></div>
                                                    <div id="hours" id="days"></div>
                                                </div>
                                            </div>

                                            <div class="counter col-xs-12 col-sm-6 col-sm-6 col-md-3 wow fadeIn " data-wow-duration="1.5s" data-wow-delay="1s">
                                                <div class="circle">
                                                    <div class="border"></div>
                                                    <div id="minutes" id="days"></div>
                                                </div>
                                            </div>

                                            <div class="counter col-xs-12 col-sm-6 col-sm-6 col-md-3 wow fadeIn " data-wow-duration="1.5s" data-wow-delay="1s">
                                                <div class="circle">
                                                    <div class="border"></div>
                                                    <div id="seconds" id="days"></div>
                                                </div>
                                            </div>
                        -->
                        <h1 id="finish" class="text-center">The Event Is Over</h1>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="post" class="row wow fadeIn ">


                <?php include 'scripts/getPost.php'; ?>


            </div>
        </div>

        <!--
                    <div class="event col-xs-12 col-md-5 wow fadeIn " data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="imgBox">
                            <img src="imgs/event/io17.png" class="img-responsive" draggable="false" alt="I/O 2017 Logo" title="I/O 2017 Event in 6th October">
                            <span class="time">
                                <span class="fa fa-calendar-check-o"></span>
                                mAY 8,2017 <span class="fa fa-clock-o"></span>9:00 aM - 3:00 pM
                            </span>
                        </div>
                        <div class="title">
                            <a class="eventName" href="event.html" target="_blank" draggable="false"><h2>i/o 17 event</h2></a>
                            <span class="place">
                                <a href="https://goo.gl/maps/js3XSiEPTKN2" target="_blank" draggable="false"><span class="glyphicon glyphicon-map-marker wow bounce " data-wow-duration="1.5s" data-wow-iteration="1" data-wow-delay="1s"></span>
                                    akhbar el youm academy, 6th october/Egypt</a>
                            </span>
                            <p class="lead">
                                some text to test the style don't forget to send to me paragraphs of it.
                            </p>
                        </div>

                        <div class="hashtag">
                            <a href="https://www.facebook.com/search/top/?q=%23io17" draggable="false" target="_blank"><span>#IO17</span></a>
                            <a href="https://www.facebook.com/search/str/%23GDG_OCTOBER/keywords_search" draggable="false" target="_blank"><span>#GDG_OCTOBER</span></a>
                            <a href="https://www.facebook.com/search/str/%23GDGOCTOBER/keywords_blended_posts" draggable="false" target="_blank"><span>#GDGOctober</span></a>
                        </div>
                    </div>
        -->

        <!--
                    <div class="event col-xs-12 col-md-5 wow fadeIn " data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="imgBox">
                            <img src="imgs/event/io17.png" class="img-responsive" draggable="false" alt="I/O 2017 Logo" title="I/O 2017 Event in 6th October">
                            <span class="time">
                                <span class="fa fa-calendar-check-o"></span>
                                mAY 8,2017 <span class="fa fa-clock-o"></span>9:00 aM - 3:00 pM
                            </span>
                        </div>
                        <div class="title">
                            <a class="eventName" href="#" target="_blank" draggable="false"><h2>i/o 17 event</h2></a>
                            <span class="place">
                                <a href="https://goo.gl/maps/js3XSiEPTKN2" target="_blank" draggable="false"><span class="glyphicon glyphicon-map-marker wow bounce " data-wow-duration="1.5s" data-wow-iteration="1" data-wow-delay="1s"></span>
                                    akhbar el youm academy, 6th october/Egypt</a>
                            </span>
                            <p class="lead">
                                some text to test the style don't forget to send to me paragraphs of it.
                            </p>
                        </div>

                        <div class="hashtag">
                            <a href="https://www.facebook.com/search/top/?q=%23io17" draggable="false" target="_blank"><span>#IO17</span></a>
                            <a href="https://www.facebook.com/search/str/%23GDG_OCTOBER/keywords_search" draggable="false" target="_blank"><span>#GDG_OCTOBER</span></a>
                            <a href="https://www.facebook.com/search/str/%23GDGOCTOBER/keywords_blended_posts" draggable="false" target="_blank"><span>#GDGOctober</span></a>
                        </div>
                    </div>
        -->

        </div>
        </div>
    </section>

    <!--End of Events Section-->

    <!--IWD17 Section-->
    <section id="iwd17" class="wow fadeIn ">
        <div class="container">
            <div class="row wow fadeIn " data-wow-duration="1.5s">
                <div class="iwd17IMGBox col-xs-12 col-md-8">
                    <picture>
                        <source srcset="imgs/iwd17/IWD-icon-logo.png" media="(max-width:450px)" class="img-responsive">
                        <img src="imgs/iwd17/InternationalWomensDay-landscape.png" alt="IWD17"
                             title="INTERNATIONAL WOMEN’S DAY (IWD)" class="img-responsive" draggable="false">
                    </picture>
                </div>

                <div class="title col-xs-12">
                    <span class="time">Thursday, March 8</span>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <p class="lead title general wow fadeIn " data-wow-duration="1.5s">The Women Techmaker Global Event
                        Series Celebrating International Women’s Day.</p>

                    <p class="article lead wow fadeInLeft " data-wow-duration="1.5s">
                        <span class="q">What is International Women’s Day ?</span>
                        <br>
                        <a href="https://www.internationalwomensday.com" target="_blank" draggable="false">International
                            Women's Day (IWD)</a> is marked on March 8th every year. In different regions, the focus of
                        celebrations ranges from general respect and appreciation toward women to a celebration of
                        women's economic, political, and social achievements.
                    </p>

                    <p class="article lead wow fadeInRight " data-wow-duration="1.5s">
                        <span class="q">Why does Google Celebrate IWD ?</span>
                        <br>
                        From Ada Lovelace to Grace Hopper to thousands of Googlers, we're proud of the contributions
                        women in technology have made across our industry and across our company. And we're excited by
                        the contributions women continue to make today. Google supports and celebrates women in
                        technology through numerous initiatives including Small Business Supplier Diversity and
                        Accelerate with Google programs, the Google Cultural Institute, our Women@ employee resource
                        group and more. International Women's Day is an important moment to recognize how women have
                        influenced the tech industry and beyond.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!--END of IWD17 Section-->

    <!--MemberShip Section-->
    <section id="membership" class="wow fadeIn ">
        <div class="container">
            <div class="row wow fadeIn " data-wow-duration="1.5s">
                <div class="col-xs-12">
                    <div class="title">
                        <h1>membership</h1>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row wow fadeIn " data-wow-duration="1.5s">
                <div class="col-xs-12">
                    <p class="lead article">Membership empowers women in their careers by providing access to curated
                        resources and events, as well as information and tools from Google, our partners, and the global
                        tech ecosystem. 
                    </p>
                </div>
            </div>

            <div class="row wow pulse " data-wow-duration="0.9s" data-wow-iteration="5">
                <div class="col-xs-12">
                    <div class="joinus">
                        <a href="https://services.google.com/fb/forms/joinwomentechmakers/" target="_blank"
                           draggable="false">
                            <button class="btn btn-danger btn-lg">BECOME A MEMBER</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END of Membership Section-->

    <!--Sponsers Section-->
    <section id="sponsers" class="wow fadeIn ">
        <div class="container wow fadeIn " data-wow-offset="5" data-wow-duration="1.5s">
            <div class="row">

                <div class="col-xs-12">
                    <div class="title">
                        <h1>our sponsers</h1>
                        <hr>
                    </div>
                </div>



                <?php include 'scripts/getSponsers.php'; ?>





            </div>
            <!--Media Sponsers-->
            <!--
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="title">
                                <h1>media sponsers</h1>
                                <hr>
                            </div>
                        </div>

                    </div>
            -->
            <!--End of Media Sponsers-->
        </div>
    </section>
    <!--End of Sponsers Section-->

    <script>
    </script>
