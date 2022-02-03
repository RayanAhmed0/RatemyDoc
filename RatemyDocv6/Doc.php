<!DOCTYPE html>
<html lang="en">
<?php 
$url = $_SERVER['REQUEST_URI'];
$urla = ltrim(stristr($url, '='), '=');


?>
<?php
// (A) DATABASE CONFIG - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "data_docs");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");
 
// (B) CONNECT TO DATABASE
try {
  $pdo = new PDO(
    "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

// (C) SEARCH
ini_set('display_errors', 'Off');
$stmt = $pdo->prepare("SELECT * FROM `docs` WHERE `name_1` like ?");
$stmt->execute(["%".$_POST["search"]]);
$results = $stmt->fetchAll();	
if (isset($_POST["ajax"])) { echo json_encode($results); }
  
  if (count($results) > 0) {
	foreach ($results as $r) {
		if($r["id"]==$urla){
		$numofrate = $r["number of rate"];
		$mark = $r["marks"];
		$atnd = $r["attendance"];
		$teach = $r["teaching"];
		$comu = $r["communication"];
		

?>
	
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="style.css">
	<script>
		var currentLocation = window.location;
		
		var id = window.location;
		id = /=(.+)/.exec(id)[1];
		
		
	</script>

	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title> RateMyDoc </title>

	
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			
			<span class="title"> </span>
		
			<span class="tagline"  style="font-size:30px"><?php echo $r["name_1"]. " ".$r["name_2"]. " " . $r["name_3"].""  ?><br>
				<a><?php echo $r["major"]."" ?> <br><?php echo $r["college"]."" ?></a></span>
		</h1>
	</div>
	
	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
			 	
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a style="font-size:20px"> 5 / التحضير <?php echo $atnd/$numofrate; ?> </a> </li>
					<li><a style="font-size:20px"> 5 / الدرجات <?php echo $mark/$numofrate; ?> </a> </li>
					<li class="dropdown">
					<a style="font-size:20px"> 5 / الشرح <?php echo $teach/$numofrate; ?> </a> 
					</li>
					<li><a style="font-size:20px"> 5 / التعامل <?php echo $comu/$numofrate; ?> </a> </li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">
				<p class="lead text-center text-muted"> متوسط تقييم المحاضر من الطلاب <a ><?php echo $r["total by 5"]?> / 5<br></a> عدد مرات تقييم المحاضر <a><?php echo $r["number of rate"]?> مره/مرات </a></p>
			</div>
		</div> <!-- / section -->
		
		<div class="row section featured topspace" method='post'>
			<h2 class="section-title"><span>دورك تقيم</span></h2>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">التحضير</h3>
					<p style="text-align:center;">تقييم التحضير يعتمد على سهولة المحاضر في التحضير وسماحتة في قبول الاعذار</p>
					<bbody>
<divv>
        <span id="rangeValue">0</span>
        <Input class="range" type="range" name "v1" value="0" min="0" max="5" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
    </divv>
    <script type="text/javascript">
        function rangeSlide(value) {
            document.getElementById('rangeValue').innerHTML = value;
        }
    </script>

</bbody>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">الدرجات</h3>
					<p style="text-align:center;">تقييم الدرجات يعتد على سهولة الحصول على الدرجات والتجاوز عن الاخطاء</p>
					<bbody>
	
<divv>
        <span id="rangeValuee">0</span>
        <Input class="range" type="range" name "v2" value="0" min="0" max="5" onChange="rangeSlidee(this.value)" onmousemove="rangeSlidee(this.value)"></Input>
    </divv>
    <script type="text/javascript">
        function rangeSlidee(value) {
           document.getElementById('rangeValuee').innerHTML = value;
          
        }
        
        

    </script>
</bbody>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">الشرح</h3>
					<p style="text-align:center;">سهولة توصيل المعلومة الى الطالب وتوضيح الافكار المتعلقة بالموضوع</p>
					<bbody>
	
<divv  >
        <span method="POST" id="rangeValueee">0</span>
        <Input class="range" type="range" name "v3" value="0" min="0" max="5" onChange="rangeSlideee(this.value)" onmousemove="rangeSlideee(this.value)"></Input>
    </divv>
    <script type="text/javascript">
        function rangeSlideee(value) {
            document.getElementById('rangeValueee').innerHTML = value;
        }
    </script>
</bbody>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">التعامل </h3>
					<p style="text-align:center;">سهولة التعامل والتواصل مع الدكتور داخل و خارج اوقات الدراسة</p>
					<bbody>
<divv>
        <span id="rangeValueeee">0</span>
        <Input class="range" type="range" name "v4" value="0" min="0" max="5" onChange="rangeSlideeee(this.value)" onmousemove="rangeSlideeee(this.value)"></Input>
    </divv>
    <script type="text/javascript">
        function rangeSlideeee(value) {
            document.getElementById('rangeValueeee').innerHTML = value;
        }
    </script>

</bbody>
				</div>
			</div>
		</div> <!-- / section -->
	
		

<?php
	}
}
}
?>

</main>



<!-- JavaScript libs are placed at the end of the document so the pages load faster   <p class="text-center"><a href="" class="btn btn-action">Read more</a></p> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>







<body>

	</body>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
	* {
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}
bbody {
  margin: 9%;
  padding: 14px;
  justify-content: center;
  align-items: center;
  
  
}
divv {
  position: absolute;
  
  bottom: 170px;
  left:10px;
}
#rangeValue {
  position: relative;
  display: block;
  text-align: center;
  font-size: 6em;
  color: #999;
  font-weight: 400;
}
#rangeValuee {
  position: relative;
  display: block;
  text-align: center;
  font-size: 6em;
  color: #999;
  font-weight: 400;
}
#rangeValueee {
  position: relative;
  display: block;
  text-align: center;
  font-size: 6em;
  color: #999;
  font-weight: 400;
}
#rangeValueeee {
  position: relative;
  display: block;
  text-align: center;
  font-size: 6em;
  color: #999;
  font-weight: 400;
}
.range {
  width: 250px;

  height: 15px;
  -webkit-appearance: none;
  background: #656c6d;
  outline: none;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 1);
}
.range::-webkit-slider-thumb {
	
  -webkit-appearance: none;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #add8e6 ;
  cursor: pointer;
  border: 4px solid #333;
  box-shadow: -407px 0 0 400px #add8e6;
}

	</style>
  <form action="doc.php" method="post">
  <p type="submit" class="text-center" name="sendy" id="sendy" onclick="myFunction()"><a class="btn btn-action">أرسل</a></p>
</form>
 
 <script>
function myFunction() {
  $atnds= document.getElementById('rangeValue').innerHTML;

  $marks= document.getElementById('rangeValuee').innerHTML;
 
 $tea= document.getElementById('rangeValueee').innerHTML;

 $cumm= document.getElementById('rangeValueeee').innerHTML;
 <?php
$v1= $_POST["v1"];
$sql = "update docs set attendance='$v1' where id='$urla'"


?>
}
</script>

<br> <br> <br> <br> <br> <br> <br>
 



  
</html>
	
