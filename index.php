<?php 
require_once('templates/head.php');
?>
    
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Header & jumbotron wrapper-->
        <div class="wrapper"><!-- 100% width -->
            <?php require_once('templates/header.php'); ?>
            <section id="front-page" class="flex-col"> <!-- Column for header and carousel, 100 vh -->
                
                <div id="slider">
                    <div class="jumbo flex-item">
                        <img src="img/jumbo/bespoke.jpg" alt="Bespoke Software">
                        <div class="overlay flex-col">
                            <div class="jumbo-content">
                                <h2>Bespoke Software</h2>
                                <p>Bring your business together<br> with solutions that grow with you.</p>
                                <a class="btn btn-1">Find out more<i class="fa-regular fa-arrow-right"></i></a>
                            </div>                            
                        </div>
                    </div>
                    <div class="jumbo hidden flex-item ">
                        <img src="img/jumbo/itsupport.jpg" alt="Bespoke Software">
                        <div class="overlay flex-col">
                            <div class="jumbo-content">
                                <h2>IT Support</h2>
                                <p>Fast and cost-effective IT support<br>  services for your business.</p>
                                <a class="btn btn-2">Find out more<i class="fa-regular fa-arrow-right"></i></a>
                            </div>                            
                        </div>
                    </div>
                    <div class="jumbo flex-item hidden">
                        <img src="img/jumbo/digital.jpg" alt="Bespoke Software">
                        <div class="overlay flex-col">
                            <div class="jumbo-content">
                                <h2>Digital Marketing</h2>
                                <p>Generating you new business through<br>  results-driven marketing activities.</p>
                                <a class="btn btn-3">See how we can help you<i class="fa-regular fa-arrow-right"></i></a>
                            </div>                            
                        </div>
                    </div>
                    <div class="jumbo flex-item hidden">
                        <img src="img/jumbo/telecoms.jpg" alt="Bespoke Software">
                        <div class="overlay flex-col">
                            <div class="jumbo-content">
                                <h2>Telecoms Services</h2>
                                <p>A new approach to connectivity, see how<br>  we can help your business.</p>
                                <a class="btn">Find out more<i class="fa-regular fa-arrow-right"></i></a>
                            </div>                            
                        </div>
                    </div>
                    <div class="jumbo flex-item hidden">
                        <img src="img/jumbo/web.jpg" alt="Bespoke Software">
                        <div class="overlay flex-col">
                            <div class="jumbo-content">
                                <h2>Web Design</h2>
                                <p>For businesses looking to make a strong<br>  and effective first impression.</p>
                                <a class="btn">Find out more<i class="fa-regular fa-arrow-right"></i></a>
                            </div>                            
                        </div>
                    </div>
                    <div class="jumbo flex-item hidden">
                        <img src="img/jumbo/cyber.jpg" alt="Bespoke Software">
                        <div class="overlay flex-col">
                            <div class="jumbo-content">
                                <h2>Cyber Security</h2>
                                <p>Keeping businesses and their customers<br>  sensitive information protected.</p>
                                <a class="btn">Find out more<i class="fa-regular fa-arrow-right"></i></a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="flex-col section-pad">
                <div class="card card-1">
                    <!-- Link the whole card -->
                    <a href="#" class="card-link">
                        <div class="card-top">
                            <!-- icon -->
                            <div class="service-icon"><span class="iconify" data-icon="ci:grid"></span></div>
                            <!-- h3 -->
                            <h3>Bespoke software</h3>
                            <!-- hr -->
                            <hr>
                            <!-- p -->
                            <p>Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.</p>
                        </div>
                        <!-- Read more -->
                        <span class="btn">Read more</span>
                    </a>
                </div>
                <div class="card card-2">
                    <!-- Link the whole card -->
                    <a href="#" class="card-link">
                        <div class="card-top">
                        <!-- icon -->
                        <div class="service-icon"><span class="iconify" data-icon="el:screen"></span></div>
                        <!-- h3 -->
                        <h3>IT Support</h3>
                        <!-- hr -->
                        <hr>
                        <!-- p -->
                        <p>Remotely managed IT services that is catered to your businesses needs, adds value and reduces costs.</p></div>
                        <!-- Read more -->
                        <span class="btn">Read more</span>
                    </a>
                </div>
                <div class="card card-3">
                    <!-- Link the whole card -->
                    <a href="#" class="card-link">
                        <div class="card-top">
                        <!-- icon -->
                        <div class="service-icon"><span class="iconify" data-icon="entypo:bar-graph"></span></div>
                        <!-- h3 -->
                        <h3>Digital Marketing</h3>
                        <!-- hr -->
                        <hr>
                        <!-- p -->
                        <p>Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor online performances.</p>
                    </div>
                    <!-- Read more -->
                        <span class="btn">Read more</span>
                    </a>
                </div>
                <div class="card card-4">
                    <!-- Link the whole card -->
                    <a href="#" class="card-link">
                        <div class="card-top">
                            <!-- icon -->
                            <div class="service-icon"><span class="iconify" data-icon="carbon:phone-voice-filled"></span></div>
                            <!-- h3 -->
                            <h3>Telecoms Services</h3>
                            <!-- hr -->
                            <hr>
                            <!-- p -->
                            <p>Stay connected with bespoke telecoms solutions when you need it most.</p>
                        </div>
                        <!-- Read more -->
                        <span class="btn">Read more</span>
                    </a>
                </div>
                <div class="card card-5">
                    <!-- Link the whole card -->
                    <a href="#" class="card-link">
                        <div class="card-top">
                        <!-- icon -->
                        <div class="service-icon"><span class="iconify" data-icon="bx:code-alt"></span></div>
                        <!-- h3 -->
                        <h3>Web Design</h3>
                        <!-- hr -->
                        <hr>
                        <!-- p -->
                        <p>User-centric design for businesses looking to make a lasting first impression.</p></div>
                        <!-- Read more -->
                        <span class="btn">Read more</span>
                    </a>
                </div>
                <div class="card card-6">
                    <!-- Link the whole card -->
                    <a href="#" class="card-link">
                        <div class="card-top">
                        <!-- icon -->
                        <div class="service-icon"><span class="iconify" data-icon="bx:shield-quarter"></span>
                        </div>
                        <!-- h3 -->
                        <h3>Cyber Security</h3>
                        <!-- hr -->
                        <hr>
                        <!-- p -->
                        <p>Ensuring your online business stays secure 24/7, 365 days of the year.</p></div>
                        <!-- Read more -->
                        <span class="btn">Read more</span>
                    </a>
                </div>
                <div class="card card-7">
                    <!-- Link the whole card -->
                    <a href="#" class="card-link">
                        <div class="card-top">
                        <!-- icon -->
                        <div class="service-icon"><span class="iconify" data-icon="fluent:hat-graduation-20-filled" data-flip="horizontal"></span>
                        </div>
                        <!-- h3 -->
                        <h3>Developer Training</h3>
                        <!-- hr -->
                        <hr>
                        <!-- p -->
                        <p>Have you considered a career in web development but you aren’t sure where to start?</p></div>
                        <!-- Read more -->
                        <span class="btn">Read more</span>
                    </a>
                </div>
            </section>
            <section id="culture" class="section-pad">
                <div class="width">
                    <h2>Netmatters</h2>
                    <p>Netmatters Ltd is a leading web design, IT support and digital marketing agency based in the East of England with offices in Cambridge, Wymondham and Great Yarmouth.</p>
                    <p>Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture existing leads and further grow their sales.</p>
                    <p>We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning.</p>
                    <a class="btn" href="#">Our Culture<i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </section>
            <div class="full-width">
                <div class="latest section-pad">
                    <h3>Latest</h3>
                </div>
            </div>
            <div class="full-width">
                <section id="news" class="section-pad">
                    <div class="card">
                        <div class="card-image">
                            <a href="#"><img src="img/business-dev.jpg" alt="Business Development Account Manager"></a><a href="#"><div class="tag">Careers</div></a>
                        </div>
                        <div class="card-body flex-col">
                            <div class="top">
                                <h4><a href="#">Business Development Account Manager</a></h4>
                                <p>Salary Range £25k+ per annum + Bonus + Benefits Hours 40 hours per week, Mon – Fri Location Wymondha...</p>
                            </div>
                            <div class="bottom">
                                <a class="button" href="#">Read more</a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <img src="img/author-1.jpg" alt="Elliott Peacock">
                            <span>Posted by Elliott Peacock</span>
                            <span>25th March 2022</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <a href="#"><img src="img/junior.jpg" alt="Junior New Business Executive"></a><a href="#"><div class="tag">Careers</div></a>
                        </div>
                        <div class="card-body flex-col">
                            <div class="top">
                                <h4><a href="#">Junior New Business Executive</a></h4>
                                <p>Salary Range £20,000 Hours 40 hours per week, Mon – Fri  Location Wymondham, Norfolk/Part-time remot...</p>
                            </div>
                            <div class="bottom">
                                <a class="button" href="#">Read more</a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <img src="img/author-2.jpg" alt="Mark Reilly">
                            <span>Posted by Mark Reilly</span>
                            <span>24th March 2022</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <a href="#"><img src="img/receptionist.jpg" alt="Receptionist"></a><a href="#"><div class="tag">Careers</div></a>
                        </div>
                        <div class="card-body flex-col">
                            <div class="top">
                                <h4><a href="#">Receptionist</a></h4>
                                <p>Salary Range £20,000-£21,000 Hours 40 hours per week, Monday - Friday Location Wymondham, Norfolk Wh...</p>
                            </div>
                            <div class="bottom">
                                <a class="button" href="#">Read more</a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <img src="img/author-3.jpg" alt="Bethany Shakespeare">
                            <span>Posted by Bethany Shakespeare</span>
                            <span>23rd March 2022</span>
                        </div>
                    </div>
                </section>
            </div>
            <section id="clients">
                <div class="client-img">
                    <div class="pop-up">
                        <div class="contents">
                            <h3>busseys</h3>
                            <p>One of the UK's leading Ford dealerships.</p>
                        </div>
                        <div class="spacer"></div>
                    </div>
                    <img src="img/busseys-grey.jpg" alt="Busseys Logo" class="base">
                    <img src="img/busseys-color.png" alt="Busseys Logo" class="overlay">
                </div>
                <div class="client-img">
                    <div class="pop-up">
                        <div class="contents">
                            <h3>Crane Garden Builders</h3>
                            <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                        </div>
                        <div class="spacer"></div>
                    </div>
                    <a href="#"><img src="img/crane-grey.jpg" alt="Crane Garden Building Logo" class="base">
                    <img src="img/crane-color.png" alt="Crane Garden Building Logo" class="overlay"></a>
                </div>
                <div class="client-img">
                    <div class="pop-up">
                        <div class="contents">
                            <h3>Beat</h3>
                            <p>The UK's eating disorder charity founded in 1989.</p>
                        </div>
                        <div class="spacer"></div>
                    </div>
                    <img src="img/beat-grey.jpg" alt="Beat Logo" class="base">
                    <img src="img/beat-color.png" alt="Beat Logo" class="overlay">
                </div>
                <div class="client-img">
                    <div class="pop-up">
                        <div class="contents">
                            <h3>Northern Diver</h3>
                            <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                        </div>
                        <div class="spacer"></div>
                    </div>
                    <a href="#"><img src="img/northern-grey.jpg" alt="Northern Diver Logo" class="base">
                    <img src="img/northern-color.png" alt="Northern Diver Logo" class="overlay"></a>
                </div>
            </section>
            <?php require_once('templates/footer.php'); ?>