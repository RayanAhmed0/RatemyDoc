<html>

<head>
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap" rel="stylesheet">
</head>

<body>
	<div class="loader_bg">
		<div class="loader" id="loader"></div>
	</div>

	<logo>
		<a href="collorful.php">RateMyDoc</a>
	</logo>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	setTimeout(function() {
		$('.loader_bg').fadeToggle();
	}, 400);
</script>
<style>
	.loader {
          border: 0 soild transparent;
          border-radius: 50%;
          width: 100%;
          height: 100%;
          position: absolute;
          top: calc(50vh - 75px);
          left: calc(50vw - 75px);
          -webkit-animation: spin 2s linear infinite;
          animation: spin 2s linear infinite;
        }

        .loader_bg {
          position: fixed;
          z-index: 999999;
          background: #000000;
          width: 100%;
          height: 100%;
          opacity: 55%;
        }

        body {
          height: 100%;
          widows: 100%;
          overflow: hidden;
        }

        .loader {
          position: absolute;
          height: 80px;
          width: 80px;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          margin: auto;
          border: 6px solid transparent;
          border-radius: 100%;
          border-top: 6px solid white;
          animation: spin 1s infinite linear;
        }

        @keyframes spin {
          from {
            transform: rotate(0deg);
          }

          to {
            transform: rotate(360deg);
          }
        }
	a {
		transition: all 1.5s ease;
	}

	a:link,
	a:visited {
		background-color: transparent;
		color: white;
		padding: 15px 25px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}

	a:hover,
	a:active {
		-webkit-animation: shadow-pop-tr 0.5s cubic-bezier(0.470, 0.000, 0.745, 0.715) alternate both;

	}

	logo {

		display: block;
		width: 20%;
		min-width: 200px;
		max-width: 230px;
		padding: 80px;
		position: relative;
		vertical-align: top;
		margin: 8px;
		font-size: 55px;
		font-family: 'Aref Ruqaa', serif;
		text-align: center;
	}

	body {
		background: linear-gradient(142deg, #5c415d, #393e41, #023351, #5d48a3);
		background-size: 300% 300%;

		-webkit-animation: AnimationName 30s ease infinite;
		-moz-animation: AnimationName 30s ease infinite;
		-o-animation: AnimationName 30s ease infinite;
		animation: AnimationName 30s ease infinite;
	}

	@-webkit-keyframes AnimationName {
		0% {
			background-position: 48% 0%
		}

		50% {
			background-position: 53% 100%
		}

		100% {
			background-position: 48% 0%
		}
	}

	@-moz-keyframes AnimationName {
		0% {
			background-position: 48% 0%
		}

		50% {
			background-position: 53% 100%
		}

		100% {
			background-position: 48% 0%
		}
	}

	@-o-keyframes AnimationName {
		0% {
			background-position: 48% 0%
		}

		50% {
			background-position: 53% 100%
		}

		100% {
			background-position: 48% 0%
		}
	}

	@keyframes AnimationName {
		0% {
			background-position: 48% 0%
		}

		50% {
			background-position: 53% 100%
		}

		100% {
			background-position: 48% 0%
		}
	}

	.tilesWrap {
		padding: 0;
		margin: 10px auto;
		list-style: none;
		text-align: center;
	}

	.tilesWrap li {
		display: block;
		width: 20%;
		min-width: 200px;
		max-width: 230px;
		padding: 100px 20px 40px;
		position: relative;
		vertical-align: top;
		margin: 0% 40%;
		font-family: 'helvetica', san-serif;
		min-height: 2vh;
		background: #262a2b;
		border: 1px solid #252727;
		text-align: center;

	}

	.tilesWrap li h2 {
		font-family: 'Aref Ruqaa', serif;
		font-size: 114px;
		margin: -30;
		position: absolute;
		opacity: 0.0;
		top: 50px;
		right: 10px;
		transition: all 0.3s ease-in-out;
	}

	.tilesWrap li h3 {
		font-family: 'Aref Ruqaa', serif;
		font-size: 20px;
		color: #b7b7b7;
		margin-bottom: 10px;
	}

	.tilesWrap li p {
		font-family: 'Aref Ruqaa', serif;
		font-size: 16px;
		line-height: 18px;
		color: #b7b7b7;
		margin-top: 5px;
	}

	.tilesWrap li button {
		background: transparent;
		border: 1px solid #b7b7b7;
		padding: 10px 20px;
		color: #b7b7b7;
		border-radius: 3px;
		position: relative;
		transition: all 0.3s ease-in-out;
		transform: translateY(-40px);
		opacity: 0;
		cursor: pointer;
		overflow: hidden;
	}

	.tilesWrap li button:before {
		content: '';
		position: absolute;
		height: 100%;
		width: 120%;
		background: #b7b7b7;
		top: 0;
		opacity: 0;
		left: -140px;
		border-radius: 0 20px 20px 0;
		z-index: -1;
		transition: all 0.3s ease-in-out;

	}

	.tilesWrap li:hover button {
		transform: translateY(5px);
		opacity: 1;
	}

	.tilesWrap li button:hover {
		color: #262a2b;
	}

	.tilesWrap li button:hover:before {
		left: 0;
		opacity: 1;
	}

	.tilesWrap li:hover h2 {
		top: 0px;
		opacity: 0.6;
	}

	.tilesWrap li:before {
		content: '';
		position: absolute;
		top: -2px;
		left: -2px;
		right: -2px;
		bottom: -2px;
		z-index: -1;
		background: #fff;
		transform: skew(2deg, 2deg);
	}

	.tilesWrap li:after {
		content: '';
		position: absolute;
		width: 40%;
		height: 100%;
		left: 0;
		top: 0;
		background: rgba(255, 255, 255, 0.02);
	}

	.tilesWrap li:nth-child(1):before {
		background: #C9FFBF;
		background: -webkit-linear-gradient(to right, #FFAFBD, #C9FFBF);
		background: linear-gradient(to right, #FFAFBD, #C9FFBF);
	}

	.tilesWrap li:nth-child(2):before {
		background: #f2709c;
		background: -webkit-linear-gradient(to right, #ff9472, #f2709c);
		background: linear-gradient(to right, #ff9472, #f2709c);
	}

	.tilesWrap li:nth-child(3):before {
		background: #c21500;
		background: -webkit-linear-gradient(to right, #ffc500, #c21500);
		background: linear-gradient(to right, #ffc500, #c21500);
	}

	.tilesWrap li:nth-child(4):before {
		background: #FC354C;
		background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
		background: linear-gradient(to right, #0ABFBC, #FC354C);
	}

	@-webkit-keyframes shadow-pop-tr {
		0% {
			-webkit-box-shadow: 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e;
			box-shadow: 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e;
			-webkit-transform: translateX(0) translateY(0);
			transform: translateX(0) translateY(0);
		}

		100% {
			-webkit-box-shadow: 1px -1px #FFAFBD, 2px -2px #3e3e3e, 3px -3px #3e3e3e, 4px -4px #ff9472, 5px -5px #ffc500, 6px -6px #C9FFBF, 7px -7px #3e3e3e, 8px -8px #3e3e3e;
			box-shadow: 1px -1px #3e3e3e, 2px -2px #c21500, 3px -3px #FC354C, 4px -4px #0ABFBC, 5px -5px #f2709c, 6px -6px #3e3e3e, 7px -7px #3e3e3e, 8px -8px #f2709c;
			-webkit-transform: translateX(-8px) translateY(8px);
			transform: translateX(-8px) translateY(8px);
		}

	}

	tt {
		font-family: 'Aref Ruqaa', serif;
		font-size: 37px;
		text-align: center;
		position: absolute;
		margin-left: 475px;
	}

	.sry {


		margin-left: 250px;
	}
</style>

</html>
<?php
ini_set('display_errors', 'Off');
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if ($_POST["search"] == "") {
	echo "يرجى إدخال قيمة";
} else {
	if (isset($_POST["search"])) {
		// (B1) SEARCH FOR USERS
		require "search.php";

		// (B2) DISPLAY RESULTS
		if (count($results) > 0) {
			foreach ($results as $r) {
?>

				<ul class="tilesWrap">

					<li id="card0">

						<h3><?php echo $r["name_1"] . " " . $r["name_2"] . " " . $r["name_3"] . "" ?></h3>
						<h2><?php echo $r["total by 5"] . "/5" ?></h2>
						<p style>
							<?php echo $r["major"] . "" ?>
							<br>
							<?php echo $r["college"] . "" ?>
						</p>
						<a href="Doc.php?id=<?php print $r["id"] ?>">

							<button>التفاصيل</button>
						</a>

					</li>
					<div id="destination"></div>

				</ul>
			<?php
				//printf("</div>%s </div>%s </div>%s </div>%s ", $r["name_1"], $r["name_2"], $r["name_3"], $r["major"]);
				//echo "تخصص: " . $r["major"]. " - الاسم: " . $r["name_1"]. " " . $r["name_3"]. "<br>";
			}
		} else {

			?>
			<tt>
				<h1>متاكد من الاسم؟</h1>
			</tt>
			<sry>
				<img src="assets\Photoleap28.png" alt="اسفين " width="800" height="600" style="margin-left: 250px;">
			</sry>
<?php }
		$r = (count($results));
		$re = strval(count($results));
		$res = "عدد النتائج :";
		$resu = $res . $re;
		//echo("عدد النتائج :");

		echo "<numofr>";
		echo $resu;
		echo "</numofr>";
	}
}
?>
<?php
$var = 'Metallica';
?>
<script>
	<?php
	echo "var jsvar ='$r';";
	?>

	// (C1) GET THE SOURCE & DESTINATION ELEMENTS
	//var source = document.getElementById("card0"),
	//  destination = document.getElementById("destination");

	// (C2) CREATE & APPEND EVIL CLONE
	//for(let i=0;i<jsvar-1;i++){
	//let evilclone = source.cloneNode(true);
	//evilclone.setAttribute("id","card"+(i+1));

	//destination.appendChild(evilclone);
</script>