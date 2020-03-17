<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 240px;
    margin: auto;
    text-align: center;
    font-family: arial;
    height:50%;
    border-radius: 18px;

  }
  
  .title {
    color: grey;
    font-size: 18px;
  }
  
  button{
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #3e5c8a;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    border-radius: 12px;
  }
  
 a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }
  
  button:hover, a:hover {
    opacity: 0.7;
  }
  
  html {
    box-sizing: border-box;
  }
  
  *, *:before, *:after {
    box-sizing: inherit;
  }
  
  img {
    width: 80%;
    height: 170px;
    padding: 5px;
    border-radius: 12px;
  }
  
  h2 {
    text-align: center;
    
  }
  
  .slick-dots {
    text-align: center;
    margin: 0 0 10px 0;
    padding: 0;
  }
  .slick-dots li {
    display: inline-block;
    margin-left: 4px;
    margin-right: 4px;
  }
  .slick-dots li.slick-active button {
    background-color: black;
  }
  .slick-dots li button {
    font: 0/0 a;
    text-shadow: none;
    color: transparent;
    background-color: #999;
    border: none;
    width: 15px;
    height: 15px;
    border-radius: 50%;
  }
  .slick-dots li :hover {
    background-color: black;
  }
  
  /* Custom Arrow */
  .prev {
    color: #999;
    position: absolute;
    top: 38%;
    left: -2em;
    font-size: 1.5em;
  }
  .prev :hover {
    cursor: pointer;
    color: black;
  }
  
  .next {
    color: #999;
    position: absolute;
    top: 38%;
    right: -2em;
    font-size: 1.5em;
  }
  .next :hover {
    cursor: pointer;
    color: black;
  }
  
  @media screen and (max-width: 800px) {
    .next {
      display: none !important;
    }
  }
</style>
<script>
  window.console = window.console || function(t) {};
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<div class="container">
<h2>Courses Provides</h2><br/>
<div class="row">
<div class="col-md-12 heroSlider-fixed">
<div class="overlay">
</div>

<div class="slider responsive">
<div>
<div class="card">
  <img src="https://adityakirancollege.com/wp-content/uploads/2017/06/BCA.jpg" alt="John" style="width:100%">
  <h3>BCA</h3>
  <p class="title">UG Course</p>
  <h4>Duration: 3 Yrs</h4>
  <h5>Seats Available:100</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
<div>
<div class="card">
  <img src="https://www.acetamritsar.ac.in/acet/mca.png" alt="John" style="width:100%">
  <h3>MCA</h3>
  <p class="title">PG Course</p>
  <h4>Duration: 3 Yrs</h4>
  <h5>Seats Available:120</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
<div>
<div class="card">
  <img src="https://engineering.eckovation.com/wp-content/uploads/2018/07/electronics-1024x683.jpg" alt="John" style="width:100%">
  <h3>ECE</h3>
  <p class="title">UG Course</p>
  <h4>Duration: 4 Yrs</h4>
  <h5>Seats Available:150</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
<div>
<div class="card">
  <img src="https://media-exp1.licdn.com/dms/image/C4D1BAQFgtfZhKlB_Gg/company-background_10000/0?e=2159024400&v=beta&t=7htgb8u5R8xczGaE2c4s_0Gv9u05eLfwn2jEA1gjhio" alt="John" style="width:100%">
  <h3>ISE</h3>
  <p class="title">UG Course</p>
  <h4>Duration: 4 Yrs</h4>
  <h5>Seats Available:160</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
<div>
<div class="card">
  <img src="https://adityakirancollege.com/wp-content/uploads/2017/06/BCA.jpg" alt="John" style="width:100%">
  <h3>BCA</h3>
  <p class="title">UG Course</p>
  <h4>Duration: 3 Yrs</h4>
  <h5>Seats Available:60</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
<div>
<div class="card">
  <img src="https://adityakirancollege.com/wp-content/uploads/2017/06/BCA.jpg" alt="John" style="width:100%">
  <h3>BCA</h3>
  <p class="title">UG Course</p>
  <h4>Duration: 3 Yrs</h4>
  <h5>Seats Available:60</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
<div>
<div class="card">
  <img src="https://adityakirancollege.com/wp-content/uploads/2017/06/BCA.jpg" alt="John" style="width:100%">
  <h3>BCA</h3>
  <p class="title">UG Course</p>
  <h4>Duration: 3 Yrs</h4>
  <h5>Seats Available:60</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
<div>
<div class="card">
  <img src="https://adityakirancollege.com/wp-content/uploads/2017/06/BCA.jpg" alt="John" style="width:100%">
  <h3>BCA</h3>
  <p class="title">UG Course</p>
  <h4>Duration: 3 Yrs</h4>
  <h5>Seats Available:60</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
<div>
<div class="card">
  <img src="https://adityakirancollege.com/wp-content/uploads/2017/06/BCA.jpg" alt="John" style="width:100%">
  <h3>BCA</h3>
  <p class="title">UG Course</p>
  <h4>Duration: 3 Yrs</h4>
  <h5>Seats Available:60</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
<div>
<div class="card">
  <img src="https://adityakirancollege.com/wp-content/uploads/2017/06/BCA.jpg" alt="John" style="width:100%">
  <h3>BCA</h3>
  <p class="title">UG Course</p>
  <h4>Duration: 3 Yrs</h4>
  <h5>Seats Available:60</h5>
  <a href="campus_course_details.php"><p><button>Know More</button></p></a>
</div></div>
</div>
<div class="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
</div>
<div class="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
</div>
</div>
</div>
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-db44b196776521ea816683afab021f757616c80860d31da6232dedb8d7cc4862.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
<script id="rendered-js">
$('.responsive').slick({
  dots: true,
  prevArrow: $('.prev'),
  nextArrow: $('.next'),
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true } },


  {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2 } },


  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1 } }


 
  ] });
    </script>
</body>
</html>
