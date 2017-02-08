<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kaizen '17</title>
  <meta name="description" content="Beleive & Be the Change | 2017" />
  <meta name="author" content="Sahil Khokhar" />
  <link rel="shortcut icon" href="./img/kaizen_tab.png">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="css/creative.css" rel="stylesheet">

</head>
<body id="page-top">
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top"><img src="img/kaizen.png" width="90" height="90" style="display: inline;" /></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a class="page-scroll" href="#about">About</a>
          </li>
          <li>
            <a class="page-scroll" href="#services">Get Involved</a>
          </li>
          <li>
            <a class="page-scroll" href="#portfolio">Gallery</a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div class="header-content">
      <div class="header-content-inner">
        <h1 id="homeHeading" style="font-family: 'Raleway', sans-serif; font-size: 95px; font-weight: 400; color: #333333;">Kaizen '17</h1>
        <div class="number" style="font-family: 'Raleway', sans-serif; font-size: 50px; font-weight: 400; color: #333333;">
          <?php
          $date = date("d");
          $days_to_go = 24-$date;
          echo $days_to_go;
          ?></div>
          <div class="emblem" style="font-family: 'Raleway', sans-serif; font-weight: bolder;">DAYS-TO-GO-</div>
          <hr>
          <h2 id="homeHeading" style="font-family: 'Raleway', sans-serif; font-size: 40px; font-weight: 330; color: #333333;">Believe &amp; Be the Change</h2>
          <br />
          <a href="#about" class="page-scroll"><span class="down_button">&#11015;</span></a>
        </div>
      </div>
    </header>
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading" style="font-family: 'Raleway', sans-serif; color: #20303c; font-size: 60px; font-weight: 300;">About Kaizen</h2>
            <hr class="light">
            <p class="text-faded">Kaizen is a joint initiative of <a href="http://nss.iitd.ac.in/home.html">NSS IIT Delhi</a> &amp; Professional Ethics &amp; Social Responsibility (PESR), a platform to recognize the continuous improvements that are happening in our society as a result of the combined efforts of all socially motivated student bodies and NGOs across India and abroad. </p>
            <p class="text-faded">Interaction and opinion sharing is the prime focal point of Kaizen. It aims at providing a single platform for exchange of a plethora of ideologies, stories & experiences of people who stood up against the tides and sailed through them, so that any idea or solution implemented at one place can also become success model for others.</p>
            <a href="#services" class="page-scroll btn btn-default btn-xl sr-button rad-button dark flat">Get Started!</a>
          </div>
        </div>
      </div>
    </section>
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading" style="font-family: 'Raleway', sans-serif; color: #20303c; font-size: 50px; font-weight: 300;">What's in it for you?</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container" id="register">
        <div class="row photos">
          <div class="photo photo-4">
            <div class="service-box">
              <i class="fa fa-4x fa-users text-primary sr-icons"></i>
              <h3>Convention</h3>
              <p class="text-muted">Bringing social entities on a single platform.</p>
              <br />
              <button class = "rad-button static small dark flat" data-toggle="modal" data-target="#myModal">REGISTER</button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h2 class="modal-title">Convention Registration</h2></center>
                </div>
                <img src="img/conven_modal.png" width="600">
                <div class="modal-body text-center">
                  <p>Date - 25th February</p>
                  <p>Time - 10:30 AM - 4:30 PM</p>
                  <hr>
                  <a href="./conv_guidelines.pdf" target="_blank"><button class = "rad-button static small dark flat"  data-toggle="modal" data-target="#myModal">Guidelines</button></a>
                  <hr>
                  <p>If the work of your organization pertains to, <br /><strong>'Education', 'Health'</strong> or <strong>'Environment'</strong> domain</p>
                  <a href="https://goo.gl/forms/C4F62O5OHu2hvYqB2" target="_blank"><button class = "rad-button static small dark flat"  data-toggle="modal" data-target="#myModal">Fill the Form</button></a>
                  <hr>
                  <p>Any other domain</p>
                  <a href="https://goo.gl/forms/ieRWvyQl5fAtRESh1" target="_blank"><button class = "rad-button static small dark flat"  data-toggle="modal" data-target="#myModal">Fill the Form</button></a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <div class="photo photo-5">
            <div class="service-box">
              <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              <h3>Success Stories</h3>
              <p class="text-muted">Inspire to initiate action!<br />LEARN | ACT | BUILD</p>
              <br />
              <button class = "rad-button static small dark flat" disabled>KNOW MORE</button>
            </div>
          </div>
          <div class="photo photo-6">
            <div class="service-box">
              <i class="fa fa-4x fa-wrench text-primary sr-icons"></i>
              <h3>Workshops</h3>
              <p class="text-muted">We update dependencies to keep things fresh.</p>
              <br />
              <button class = "rad-button static small dark flat" disabled>KNOW MORE</button>
            </div>
          </div>
          <div class="photo photo-7">
            <div class="service-box">
              <i class="fa fa-4x fa-bullhorn text-primary sr-icons"></i>
              <h3>Stalls</h3>
              <p class="text-muted">A platform to interact, exchange opinion & network.</p><br />
              <button class = "rad-button static small dark flat" data-toggle="modal" data-target="#myModal1">REGISTER</button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h2 class="modal-title">Stall Registration</h2></center>
                </div>
                <img src="img/stall_modal.png" width="600">
                <div class="modal-body">
                  <center>
                    <p>Date - 24th &amp; 25th February</p>
                    <p>Time - 10:00 AM - 6:00 PM</p>
                    <hr>
                    
                    <h3>NOTE</h3></center><br />
                    <ul>
                      <li><strong>Stall registration is only allowed for registered NGOs &amp; Trust.</li>
                      <li>Registering for stall does not guarantee allotment of a stall. </li>
                      <li>Final allocation would be mailed to you prior enough to the main event.</strong></li>
                    </ul>
                    <br />
                    <center><a href="https://goo.gl/forms/edDZLxSZWiPGLdKY2" target="_blank"><button class = "rad-button static small dark flat"  data-toggle="modal" data-target="#myModal1">REGISTER</button></a></center>
                    <hr>
                    <p>For any query or help you can mail us at <strong>info@kaizen-iitd.com</strong> OR contact us at
                      <strong>9999425238</strong>(Bala Sai), <strong>9643810992</strong>(Jishnudeep Kar).</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
        <aside class="bg-dark">
          <div class="container text-center">
            <div class="call-to-action">
              <h2 style="font-family: 'Raleway', sans-serif; color: #20303c; font-size: 50px; font-weight: 300;">Brochure-2017</h2>
              <hr class="light">
              <a href="./NSS_Kaizen_brochure.pdf" target="_blank" class="btn btn-default btn-xl sr-button rad-button dark flat">Download Now!</a>
            </div>
          </div>
        </aside>
        <section class="no-padding" id="portfolio">
          <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
              <div class="col-lg-4 col-sm-6">
                <a href="img/1.JPG" class="portfolio-box">
                  <img src="img/1.JPG" class="img-responsive" alt="">
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a href="img/2.JPG" class="portfolio-box">
                  <img src="img/2.JPG" class="img-responsive" alt="">
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a href="img/3.JPG" class="portfolio-box">
                  <img src="img/3.JPG" class="img-responsive" alt="">
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a href="img/4.JPG" class="portfolio-box">
                  <img src="img/4.JPG" class="img-responsive" alt="">
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a href="img/6.JPG" class="portfolio-box">
                  <img src="img/6.JPG" class="img-responsive" alt="">
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a href="img/7.JPG" class="portfolio-box">
                  <img src="img/7.JPG" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>
        </section>

        
        <section id="contact">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading" style="font-family: 'Raleway', sans-serif; color: #20303c; font-size: 45px; font-weight: 300;">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Have any queries? <br />Give us a call or send us an email and we will get back to you as soon as possible!</p>
              </div>
              <div class="col-lg-2 col-lg-offset-3 text-center">
                <a href="https://www.facebook.com/kaizeniitd4society/?fref=ts" target="_blank"><i class="fa fa-facebook fa-3x sr-contact" style="color: #3b5998;"></i>
                  <p>@kaizeniitd4society</p></a>
                </div>
                <div class="col-lg-2 text-center">
                  <i class="fa fa-phone fa-3x sr-contact" style="color: green;"></i>
                  <p>+91-9643810992<br />+91-7042771709</p>
                </div>
                <div class="col-lg-2 text-center">
                  <a href="mailto:info@kaizen-iitd.com"><i class="fa fa-envelope-o fa-3x sr-contact" style="color: #da3b32;"></i>
                    <p>info@kaizen&#8209;iitd.com</a></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-lg-offset-3 text-center">
                    Made with <i class="fa fa-heart heart" style="color: #990513;"></i> for <a href="http://nss.iitd.ac.in" target="_blank">NSS IIT Delhi</a>
                  </div>
                  <div class="col-lg-6">
                    <a href="http://www.sahil505.com" class="made-with-mk" target="_blank">
                      <div class="brand">SK</div>
                      <div class="made-with">Made by <strong>Sahil Khokhar</strong></div>
                    </a>
                  </div>

                </div>
              </div>
            </section>
            <script type="text/javascript">
              var Emblem = {
                init: function(el, str) {
                  var element = document.querySelector(el);
                  var text = str ? str : element.innerHTML;
                  element.innerHTML = '';
                  for (var i = 0; i < text.length; i++) {
                    var letter = text[i];
                    var span = document.createElement('span');
                    var node = document.createTextNode(letter);
                    var r = (360/text.length)*(i);
                    var x = (Math.PI/text.length).toFixed(0) * (i);
                    var y = (Math.PI/text.length).toFixed(0) * (i);
                    span.appendChild(node);
                    span.style.webkitTransform = 'rotateZ('+r+'deg) translate3d('+x+'px,'+y+'px,0)';
                    span.style.transform = 'rotateZ('+r+'deg) translate3d('+x+'px,'+y+'px,0)';
                    element.appendChild(span);
                  }
                }
              };

              Emblem.init('.emblem');</script>
              <script src="vendor/jquery/jquery.min.js"></script>
              <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
              <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
              <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
              <script src="js/creative.min.js"></script>
            </body>
            </html>