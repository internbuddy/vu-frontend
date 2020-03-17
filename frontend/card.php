

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>card view</title>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<head>
<title>DealerSocket University</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:300,400,700" rel="stylesheet">
<style>
      body {
        font-family: "Roboto", sans-serif;
        padding: 0;
        margin: 0;
      }

      section#dsu {
        width: 100%;
        padding: 30px 0 30px 0;
        text-align: center;
        background-size: cover;
      }

      #dsu > header {
        color: white;
        margin-bottom: 40px;
      }

      #dsu > header > p {
        opacity: 0.79;
        font-size: 22px;
        color: #333;
        font-weight: 300;
      }

      .card-view {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        max-width: 1024px;
        margin: auto;
      }
      @media (max-width: 510px) {
        .card-view {
          justify-content: center;
        }
      }

      @media (max-width: 749px) and (min-width: 511px){
        .card-view {
          justify-content: space-around;
        }
      }
      .card {
        background: #F5F5F5;
        box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.26);
        border-radius: 2px;
        min-width: 230px;
        height: 280px;
        margin: 0 10px 30px 10px;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        align-items: center;
        -webkit-flex-direction: column;
        -moz-flex-direction: column;
        -ms-flex-direction: column;
        -o-flex-direction: column;
        flex-direction: column;
        position: relative;
        transition: .25s ease;
      }

      .card:hover {
        box-shadow: 0px 12px 24px 0px rgba(0,0,0,.3);
      }

      .card__icon {
        margin-top: 44px;
        margin-bottom: 28px;
      }

      .card__title {
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 10px;
      }

      .card__description {
        color: #898989;
        font-size: 13px;
        margin-bottom: 10px;
      }

      .card__link {
        font-size: 13px;
        color: #1D86B8;
        margin-bottom: 10px;
      }

      .card__button {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 44px;
        color: #FFF;
        text-transform: uppercase;
        line-height: 44px;
        background-color: #1D86B8;
        width: 100%;
        font-size: 13px;
        text-align: center;
        border-radius: 0 0 2px 2px;
        text-decoration: none;
        transition: .25s ease;
      }

      .card__button:hover {
        background-color: #2199D1;
      }
    </style>
</head>
<body>
<section ng-app="dsu" id="dsu">
<header>
<p>Choose a path to get started</p>
</header>
<div ui-view="" class="card-view" ng-controller="PathCtrl">
<div class="card" ng-repeat="path in paths">
<div class="card__icon"><img src="{{path.iconURL}}" alt="{{path.title}}"></div>
<div class="card__title">{{path.title}}</div>
<a href="alcorn_details.php" class="card__button">Select</a>
</div>
</div>
</section>
<script type="text/javascript">
      'use strict';

      var app = angular.module('dsu', [])

      .run(function() {
        console.log("App is running");
      })

      // Edit the contents of these objects to modify
      // or add new cards to the page.
      .controller('PathCtrl', ['$scope', function($scope) {
        $scope.paths = [
          {
            "iconURL": "https://res.cloudinary.com/dpdmedxbk/image/upload/v1478546262/revradar.svg",
            "title": "Alcorn College",
            "courseCount": 10,
            "assessmentURL": "/sandbox/collage_details.php",
            "registerURL": "/sandbox/collage_details.php"
            
           
          }, {
            "iconURL": "https://res.cloudinary.com/dpdmedxbk/image/upload/v1478546262/revradar.svg",
            "title": "California Western College",
            
          }, {
            "iconURL": "https://res.cloudinary.com/dpdmedxbk/image/upload/v1478546262/revradar.svg",
            "title": "Beaver College",
            "courseCount": 6,
            "courseLength": 1.5,
            "assessmentURL": "https://google.com",
            "registerURL": "https://google.com"
          }, {
            "iconURL": "https://res.cloudinary.com/dpdmedxbk/image/upload/v1478546262/revradar.svg",
            "title": "Gateway Technical College",
            "courseCount": 6,
            "courseLength": 1.5,
            "assessmentURL": "https://google.com",
            "registerURL": "https://google.com"
          }, {
            "iconURL": "https://res.cloudinary.com/dpdmedxbk/image/upload/v1478546262/revradar.svg",
            "title": "Denver Automotive College",
            "courseCount": 5,
            "courseLength": 3,
            "assessmentURL": "https://google.com",
            "registerURL": "https://google.com"
          }, {
            "iconURL": "https://res.cloudinary.com/dpdmedxbk/image/upload/v1478546262/revradar.svg",
            "title": "California College of Arts",
            "courseCount": 18,
            "courseLength": 7,
            "assessmentURL": "https://google.com",
            "registerURL": "https://google.com"
          }, {
            "iconURL": "https://res.cloudinary.com/dpdmedxbk/image/upload/v1478546262/revradar.svg",
            "title": "Centenary College",
            "courseCount": 5,
            "courseLength": 5,
            "assessmentURL": "https://google.com",
            "registerURL": "https://google.com"
          }, {
            "iconURL": "https://res.cloudinary.com/dpdmedxbk/image/upload/v1478546262/revradar.svg",
            "title": "Macon Technical College",
            "courseCount": 5,
            "courseLength": 4,
            "assessmentURL": "https://google.com",
            "registerURL": "https://google.com"
          }
        ]
      }])
  
    </script>
</body>
</body>
</html>
