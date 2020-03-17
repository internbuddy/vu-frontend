

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>Alcorn Table</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<style>
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25b7c4, #25b7c4);
  background: linear-gradient(to right, #25b7c4, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #36f443;
}
</style>
</head>
<body translate="no">
<section>

<h1>College Details</h1>
<a href="schedule-interview.php">Schedule an Interview</a><br>
 <div class="tbl-header">

 
<table cellpadding="0" cellspacing="0" border="0">
<thead>
<tr>
<th>Course</th>
<th>Seats</th>
<th>Course Fee</th>
<th>Tution Fee</th>
<th>Duration</th>
</tr>
</thead>
</table>
</div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<tbody>
<tr>
<td>B.Sc(Hons)Chemistry</td>
<td>51 </td>
<td>36,000/year</td>
<td>2,000/year</td>
<td>3 years</td>
</tr>
<tr>
<td>B.com(Hons)</td>
<td>51</td>
<td>36,000/year</td>
<td>2,000/year</td>
<td>3 years</td>
</tr>
<tr>
<td>B.A(Hons)English</td>
<td>51</td>
<td>36,000/year</td>
<td>2,000/year</td>
<td>3 years</td>
</tr>
<tr>
<td>B.Sc(Hons)Maths</td>
<td>51</td>
<td>58,000/year</td>
<td>3,000/year</td>
<td>3 years</td>
</tr>
<tr>
<td>B.A Programm</td>
<td>45</td>
<td>27,000/year</td>
<td>1,000/year</td>
<td>3 years</td>
</tr>
<tr>
<td>B.C.A.</td>
<td>62</td>
<td>30,000/year</td>
<td>3,000/year</td>
<td>3 years</td>
 </tr>
<tr>
<td>B.Sc(prog)Electronics</td>
<td>51</td>
<td>36,000/year</td>
<td>3,000/year</td>
<td>3 years</td>
</tr>
<tr>
<td>B.Sc(prog)Computer Science</td>
<td>71</td>
<td>40,000/year</td>
<td>4,000/year</td>
<td>3 years</td>
</tr>
<tr>
<td>B.Sc(Hons)Physics</td>
<td>51</td>
<td>36,000/year</td>
<td>3,000/year</td>
<td>3 years</td>
</tr>
<tr>
<td>B.A(Hons)Sanskrit</td>
<td>32</td>
<td>20,000/year</td>
<td>1,000/year</td>
<td>2 years</td>
</tr>
<tr>
<td>M.com</td>
<td>70</td>
<td>55,000/year</td>
<td>4,000/year</td>
<td>2 years</td>
</tr>
<tr>
<td>M.A(English)</td>
<td>51</td>
<td>42,000/year</td>
<td>3,000/year</td>
<td>2 years</td>
</tr>
<tr>
<td>M.C.A.</td>
<td>120</td>
<td>65,000/year</td>
<td>5,000/year</td>
<td>3 years</td>
</tr>
</tbody>
</table>
</div>
</section>

<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-db44b196776521ea816683afab021f757616c80860d31da6232dedb8d7cc4862.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script id="rendered-js">
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function () {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({ 'padding-right': scrollWidth });
}).resize();
//# sourceURL=pen.js
    </script>
</body>
</html>
