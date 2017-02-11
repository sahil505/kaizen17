<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaizen '17</title>
    <meta name="description" content="Beleive & Be the Change | 2017" />
    <meta name="author" content="Sahil Khokhar" />
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    <link rel="shortcut icon" href="./img/kaizen_tab.png">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="./test.css" rel="stylesheet">
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
                <script type="text/javascript">
                    var text = $('#homeHeading').text();
                    var length = text.length;
                    var timeOut;
                    var character = 0;
                    (function typeWriter() { 
                        timeOut = setTimeout(function() {
                            character++;
                            var type = text.substring(0, character);
                            $('#homeHeading').text(type);
                            typeWriter();
                            if (character == length) {
                                clearTimeout(timeOut);
                            }
                        }, 300);
                    }());
                </script>
                <div class="number" style="font-family: 'Raleway', sans-serif; font-size: 50px; font-weight: 400; color: #333333;">
                    <?php
                    $date = date("d");
                    $days_to_go = 24-$date;
                    echo $days_to_go;
                    ?></div>
                    <div class="emblem" style="font-family: 'Raleway', sans-serif; font-weight: bolder;">DAYS-TO-GO-</div>
                    <hr>
                    <h2 id="homeHeading1" style="font-family: 'Raleway', sans-serif; font-size: 40px; font-weight: 330; color: #333333;">Believe &amp; Be the Change</h2>
                    <br />
                    <a href="#about" class="page-scroll"><span class="down_button">&#11015;</span></a>
                </div>
            </div>
        </header>
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
