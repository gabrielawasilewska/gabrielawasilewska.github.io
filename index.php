<?php

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == 'off') {
  header("Location: https://accelerateme.co/");
  exit();  
}

?><!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-67864944-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-67864944-3');
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AccelerateME</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand  js-scroll-trigger" href="#page-top">
            <img class="img" src="img/paperplane.svg" alt="" height="60px" width="60px"></a>
          <button class="navbar-toggler navbar-toggler-right pull-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services">Programme</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Startups</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#sponsors">Partners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#news">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="faq">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/contactus">Contact Us</a>
              </li>
            </ul>
          </div>
          <a class="btn btn-apply navbar-brand pull-right" href="/application">APPLY</a>
        </div>
      </nav>

    <!-- Header -->
    
    <header class="masthead">
      <div class="jumbotron">
        <div clas="topofpage">
          <div class="intro-text">
            <img class="img-fluid d-block mx-auto" src="img/AME_logo(for_dark).png" width="768px">
            <div class="intro-lead-in"></div>
            <div class="intro-heading text-uppercase">The Accelerator for students by students</div>
            <a class="btn btn-findoutmore btn-lg text-uppercase js-scroll-trigger" href="#services">Find Out More</a>
            <a class="btn btn-apply btn-lg text-uppercase js-scroll-trigger" href="application">Apply</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Sponsors 1 -->
    <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <a href="#">
                <img class="img-fluid d-flex mx-auto" src="img/logos/unimfmanchesterlogo.jpg" width="160" alt="">
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="#">
                <img class="img-fluid d-flex mx-auto" src="img/logos/msplogo.jpg" width="250" alt="">
              </a>
            </div>
            <div class="col-md-4 col-sm-12">
              <a href="#">
                <img class="img-fluid d-flex mx-auto" src="img/logos/moretba.png" width="200" alt="">
              </a>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="bg-light" id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="section-heading text-uppercase">Programme</h1>
          
          </div>
        </div>
        <div class="row text-center sub-head">
          <div class="col-md-4 col-sm-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-money fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Funding</h4>
            <p class="text-muted">You will receive up to £1500 of funding. We take no equity for this. Part of the programme is focused on how to spend this money.</p>
          </div>
          <div class="col-md-4 col-sm-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-home fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Office Space</h4>
            <p class="text-muted">For the length of the programme you will have access to office space sponsored by Mancehster Science Partnerships.</p>
          </div>
          <div class="col-md-4 col-sm-12">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-send fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Guidance</h4>
            <p class="text-muted">During a 12 week long programme, you will receive mentorship, progress tracking and professional help from our partners.</p>
          </div>
        </div>

        <div class="container">
    

        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline annoying-margin">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>February</h4>
                    <h4 class="subheading">Bootcamp</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Bootcamp is the last stage of the selection process. It is a day-long event happening on the 3rd of February and which is designed to get to know more about you, your team and your startup.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>February</h4>
                    <h4 class="subheading">Take-Off</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">After Bootcamp, teams will be taken onto the programme. During take-off we will deep-dive into your startup’s stage, needs and aims in order to tailor the programme to its needs.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>February - June</h4>
                    <h4 class="subheading">Programme</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">AccelerateME is a 12-week programme aimed to get your startup to the next stage of growth. It is designed to fit around your studies with sessions taking place on weekends and week day evenings.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>June</h4>
                    <h4 class="subheading">Demo Day</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">At Demo Day, you get to showcase your startup and your achievements over the course of the programme. We will be inviting investors, mentors, other accelerators and entrepreneurs to attend.</p>
                  </div>
                </div>
              </li>
              <li>
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>June -></h4>
                      <h4 class="subheading">Growth</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">After AccelerateME, you will be well-equipped to take your startup to new heights and change the world.
                          We might shed a tear to see you go :’) 
                          </p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <a href="application">
                  <div class="timeline-image">
                  <h4>Take the
                    <br>journey
                    <br>with us.</h4>
                  </div>
                  </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </section>
   
 
    <!-- Portfolio Grid -->

    <section id="portfolio">

        <div class="container">
    
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="section-heading text-uppercase">Startups</h2>
              <h3 class="section-subheading text-muted"></h3>
            </div>
          </div>
    
      <div id="accordion" role="tablist">
        
        <div class="card invis-card">
  
          <div class="card-header invis-card" role="tab" id="headingOne">
  
              <a class="btn btn-md btn-primary card-title" data-toggle="collapse" href="#2018" aria-expanded="false" aria-controls="2018">
                  2018
              </a>
              
              <a class="btn btn-md btn-primary card-title" data-toggle="collapse" href="#2017" aria-expanded="false" aria-controls="2017">
                  2017
              </a>
  
              <a class="btn btn-md btn-primary card-title" data-toggle="collapse" href="#2016" aria-expanded="false" aria-controls="2016">
                  2016
              </a>
  
              <a class="btn btn-md btn-primary card-title" data-toggle="collapse" href="#2015" aria-expanded="false" aria-controls="2015">
                  2015
              </a>
  
          </div>
  
          <div id="2018" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <div class="row">
                  <h3 class="section-subheading text-muted">Applications to join the 2018 cohort are open until the 22nd of Decemember 2017!</h3>
              </div>
            </div>
          </div>
        
          <div id="2017" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                  <div class="row">

                      <div class="col-md-4">
                          <div class="card teams invis-card">
                              <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/huf.jpg" alt="Card image cap">
                              <div class="card-body social-mid">
                                <h4 class="card-title team-title">Hive Urban Farms</h4>
                                <p class="card-text text-muted">Gareth Williams &amp; Dien Curtis</p>
                                <!--<ul class="list-inline social-buttons social-mid">
                                    <li class="list-inline-item">
                                      <a href="mailto:vojta@manchesterentrepreneurs.co.uk">
                                        <i class="fa fa-envelope"></i>
                                      </a>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="https://www.linkedin.com/in/vojtech-petrus-84659180/">
                                        <i class="fa fa-linkedin"></i>
                                      </a>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="https://www.facebook.com/vojta.petrus">
                                        <i class="fa fa-facebook"></i>
                                      </a>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="https://twitter.com/Vojtrrr">
                                        <i class="fa fa-twitter"></i>
                                      </a>
                                    </li>
                                </ul>-->
                                
                              </div>
                          </div>  
                      </div>
  
                      <div class="col-md-4">
                          <div class="card teams invis-card">
                              <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/etymo.jpg" alt="Card image cap">
                              <div class="card-body social-mid">
                                <h4 class="card-title team-title">Etymo</h4>
                                <p class="card-text text-muted">Weijian Zhang, Jonathan Deakin &amp; Wiktor Komorowski</p>

                              </div>
                          </div>  
                      </div>
  
                      <div class="col-md-4">
                          <div class="card teams invis-card">
                              <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/homefans.jpg" alt="Card image cap">
                              <div class="card-body social-mid">
                                <h4 class="card-title team-title">Homefans</h4>
                                <p class="card-text text-muted">Daniel Velasquez &amp; Luke Verbeek</p>

                              </div>
                          </div>  
                      </div>
  
                      <div class="col-md-4">
                          <div class="card teams invis-card">
                              <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/sud.jpg" alt="Card image cap">
                              <div class="card-body social-mid">
                                <h4 class="card-title team-title">Shut Up &amp; Dance</h4>
                                <p class="card-text text-muted">Maggie Chen, Daniel Ma &amp; Lavika Sachdeva</p>

                              </div>
                          </div>  
                      </div>
  
                      <div class="col-md-4">
                          <div class="card teams invis-card">
                              <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/shirt-happens.jpg" alt="Card image cap">
                              <div class="card-body social-mid">
                                <h4 class="card-title team-title">Shirt Happens</h4>
                                <p class="card-text text-muted">Kiran Arokiasamy</p>

                              </div>
                          </div>  
                      </div>
  
                      <div class="col-md-4">
                          <div class="card teams invis-card">
                              <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/unifiy.jpg" alt="Card image cap">
                              <div class="card-body social-mid">
                                <h4 class="card-title team-title">Unifiy</h4>
                                <p class="card-text text-muted">Nick Singh, Chuck Paiusi &amp; Cameron Lee</p>

                              </div>
                          </div>  
                      </div>
  
                      <div class="col-md-4">
                          <div class="card teams invis-card">
                              <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/ndn.jpg" alt="Card image cap">
                              <div class="card-body social-mid">
                                <h4 class="card-title team-title">Neural Diversity Network</h4>
                                <p class="card-text text-muted">Daniel Laing</p>

                              </div>
                          </div>  
                      </div>
              </div>
            </div>
          </div>
          
          <div id="2016" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <div class="row">

                  <div class="col-md-4">
                      <div class="card teams invis-card">
                          <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/reroo.jpg" alt="Card image cap">
                          <div class="card-body social-mid">
                            <h4 class="card-title team-title">Reroo</h4>
                            <p class="card-text text-muted">Haider Khokar, Ulrich Boulon, Thomas Edwards &amp; George McDonnell</p>
                            <!--<ul class="list-inline social-buttons social-mid">
                                <li class="list-inline-item">
                                  <a href="mailto:vojta@manchesterentrepreneurs.co.uk">
                                    <i class="fa fa-envelope"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="https://www.linkedin.com/in/vojtech-petrus-84659180/">
                                    <i class="fa fa-linkedin"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="https://www.facebook.com/vojta.petrus">
                                    <i class="fa fa-facebook"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="https://twitter.com/Vojtrrr">
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                            </ul>-->
                            
                          </div>
                      </div>  
                  </div>

                  <div class="col-md-4">
                      <div class="card teams invis-card">
                          <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/dentaliq.jpeg" alt="Card image cap">
                          <div class="card-body social-mid">
                            <h4 class="card-title team-title">DentaliQ</h4>
                            <p class="card-text text-muted">Rajen Nagar</p>

                          </div>
                      </div>  
                  </div>

                  <div class="col-md-4">
                      <div class="card teams invis-card">
                          <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/vital-voice.jpg" alt="Card image cap">
                          <div class="card-body social-mid">
                            <h4 class="card-title team-title">Vital Voice</h4>
                            <p class="card-text text-muted">Bilal El Sayed, Benedict Vardey &amp; Francisco Ponce de Leon</p>

                          </div>
                      </div>  
                  </div>

                  <div class="col-md-4">
                      <div class="card teams invis-card">
                          <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/the-student-games.jpg" alt="Card image cap">
                          <div class="card-body social-mid">
                            <h4 class="card-title team-title">The Student Games</h4>
                            <p class="card-text text-muted">Tom Richmond &amp; Greg Pearson</p>

                          </div>
                      </div>  
                  </div>

                  <div class="col-md-4">
                      <div class="card teams invis-card">
                          <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/sex-in-a-box.jpg" alt="Card image cap">
                          <div class="card-body social-mid">
                            <h4 class="card-title team-title">Sex in a Box</h4>
                            <p class="card-text text-muted">Georgia Farrugia</p>

                          </div>
                      </div>  
                  </div>
              </div>
            </div>
          </div>

          <div id="2015" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card teams invis-card">
                            <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/percent.jpg" alt="Card image cap">
                            <div class="card-body social-mid">
                              <h4 class="card-title team-title">Percent (TeamFirst)</h4>
                              <p class="card-text text-muted">Henry Ludlam</p>
                              <!--<ul class="list-inline social-buttons social-mid">
                                  <li class="list-inline-item">
                                    <a href="mailto:vojta@manchesterentrepreneurs.co.uk">
                                      <i class="fa fa-envelope"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/in/vojtech-petrus-84659180/">
                                      <i class="fa fa-linkedin"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item">
                                    <a href="https://www.facebook.com/vojta.petrus">
                                      <i class="fa fa-facebook"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item">
                                    <a href="https://twitter.com/Vojtrrr">
                                      <i class="fa fa-twitter"></i>
                                    </a>
                                  </li>
                              </ul>-->
                              
                            </div>
                        </div>  
                    </div>
  
                    <div class="col-md-4">
                        <div class="card teams invis-card">
                            <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/impact.png" alt="Card image cap">
                            <div class="card-body social-mid">
                              <h4 class="card-title team-title">Impact</h4>
                              <p class="card-text text-muted">Manith Sethi</p>
  
                            </div>
                        </div>  
                    </div>
  
                    <div class="col-md-4">
                        <div class="card teams invis-card">
                            <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/popspot.jpg" alt="Card image cap">
                            <div class="card-body social-mid">
                              <h4 class="card-title team-title">Popspot</h4>
                              <p class="card-text text-muted"></p>
  
                            </div>
                        </div>  
                    </div>
  
                    <div class="col-md-4">
                        <div class="card teams invis-card">
                            <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/umbrello.png" alt="Card image cap">
                            <div class="card-body social-mid">
                              <h4 class="card-title team-title">Umbrello</h4>
                              <p class="card-text text-muted"></p>
  
                            </div>
                        </div>  
                    </div>
  
                    <div class="col-md-4">
                        <div class="card teams invis-card">
                            <img class="card-img-top mx-auto rounded-circle border-team-img" src="img/teams/ventry.png" alt="Card image cap">
                            <div class="card-body social-mid">
                              <h4 class="card-title team-title">Ventry</h4>
                              <p class="card-text text-muted"></p>
  
                            </div>
                        </div>  
                    </div>
                
 
        </div>
      </div>
      </div>
 

      </section>   

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About Us</h2>
            <h3 class="section-subheading text-muted">Who are the amazing people giving up their time for AccelerateME?</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.png" alt="">
              <h4>Vojta Petrus</h4>
              <p class="text-muted">Director</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="mailto:vojta@manchesterentrepreneurs.co.uk">
                    <i class="fa fa-envelope"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/vojtech-petrus-84659180/">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/vojta.petrus">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://twitter.com/Vojtrrr">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.png" alt="">
              <h4>Myrto Lalacos</h4>
              <p class="text-muted">Programme Manager</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="mailto:myrto@manchesterentrepreneurs.co.uk">
                    <i class="fa fa-envelope"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/myrto-lalacos-972a7282/">
                      <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/myrto.lalacos">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.png" alt="">
              <h4>Kiran Arokiasamy</h4>
              <p class="text-muted">Programme Manager</p>
              <ul class="list-inline social-buttons"> 
                <li class="list-inline-item">
                      <a href="mailto:Kiran@manchesterentrepreneurs.co.uk">
                        <i class="fa fa-envelope"></i>
                      </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/kiran-arokiasamy/">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-sm-4">
              <div class="team-member">
                <img class="mx-auto rounded-circle" src="img/team/4.jpg" alt="">
                <h4>Alejandro Echeverri</h4>
                <p class="text-muted">Entrepreneur in Residence</p>
                <ul class="list-inline social-buttons">
                  <li class="list-inline-item">
                    <a href="mailto:alejandro.echeverri@postgrad.manchester.ac.uk">
                      <i class="fa fa-envelope"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/alejandroecheverri">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

          <div class="col-sm-4">
              <div class="team-member">
                <img class="mx-auto rounded-circle" src="img/team/5.jpg" alt="">
                <h4>Sven Grospitsch</h4>
                <p class="text-muted">Programme Associate</p>
                <ul class="list-inline social-buttons">
                  <li class="list-inline-item">
                    <a href="mailto:sven@manchesterentrepreneurs.co.uk">
                      <i class="fa fa-envelope"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/sven-grospitsch-b53205a8/">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

          <div class="col-sm-4">
              <div class="team-member">
                <img class="mx-auto rounded-circle" src="img/team/6.jpg" alt="">
                <h4>Luana Mihai</h4>
                <p class="text-muted">Marketing Associate</p>
                <ul class="list-inline social-buttons">
                  <li class="list-inline-item">
                    <a href="mailto:luana@manchesterentrepreneurs.co.uk">
                      <i class="fa fa-envelope"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/luana-mihai-85784712a/">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Sponsors 2 -->
    <section id="sponsors">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Partners</h2>
              <h3 class="section-subheading text-muted">Coming Soon</h3>
            </div>
          </div>
        </div>
      </section>

     <!-- News -->
     <section class="bg-light" id="news">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">News</h2>
              <h3 class="section-subheading text-muted">Coming Soon</h3>
            </div>
          </div>
        </div>
      </section>


    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; AccelerateME 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/m_entrepreneurs">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/ManchesterEntrepreneurs">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/manchester-entrepreneurs/">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
