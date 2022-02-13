<!DOCTYPE html>
<html>

<head>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap" rel="stylesheet">

</head>

<body>
  <div class="navbar">
    <a href="rights.html">الحقوق</a>
    <a href="aboutus.html">من نحن</a>
  </div>
  <div class="loader_bg">
    <div class="loader" id="loader"></div>
  </div>



  <div class="the-text">
    <h1 class="main">RateMyDoc</h1>
    <br>
    <p class="para">كـــــل ما تحتاج معرفته عن دكتورك لبداية ترم جديد</p>
  </div>


  <div class="search-container">
    <form class="search-container" onsubmit="return validateForm()" method="post" action="resultpage.php" required>
      <input type="text" name="search" placeholder="ابحث..." class="search-input" onsubmit="return validateForm()" required>
      <button type="submit" name="input" value="search">
        <i class="fas fa-search"></i>


    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      setTimeout(function() {
        $('.loader_bg').fadeToggle();
      }, 300);
    </script>
  </div>
  <?php
  ?>
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

    .oxy-search-form input[type=submit] {
      background: url(https://www.freeiconspng.com/uploads/search-icon-png-1.png) no-repeat center;
      background-size: 64px;
      text-indent: -9999em;
    }

    body {
      margin: 0;
      padding: 0;
      background-color: #b2e0df;
      animation: mymove 30s linear infinite alternate;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
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



    .the-text {
      height: 300px;
      width: absolute;
      line-height: 10px;
      align-items: center;
      text-align: center;

    }

    .main {
      font-family: 'Aref Ruqaa', serif;
      font-size: 38px;


    }

    .para {
      font-family: 'Aref Ruqaa', serif;
      font-size: 20px;
    }

    .search-container {
      position: absolute;
      background: #fff;
      height: 30px;
      border-radius: 30px;
      padding: 10px 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: 0.8s;
      box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
        inset -7px -7px 10px 0px rgba(0, 0, 0, .1),
        7px 7px 20px 0px rgba(0, 0, 0, .1),
        4px 4px 5px 0px rgba(0, 0, 0, .1);



    }

    .search-container:hover>.search-input {
      width: 400px;
      text-align: center;
    }

    .search-container .search-input {
      background: transparent;
      border: none;
      outline: none;
      width: 0px;
      font-weight: 500;
      font-size: 16px;
      transition: 0.8s;
      text-align: center;


    }

    button {
      color: #5cbdbb;
      background: transparent;
      border: none;
      font-weight: 500;
      font-size: 16px;
      transition: 0.8s;
      text-align: center;
      cursor: pointer;

    }

    .search-input:not(:placeholder-shown) {
      width: 400px;
    }


    .search-container .search-btn .fas {
      color: #5cbdbb;
    }

    @keyframes mymove {
      0% {
        background-color: #b2e0df;
      }

      50% {
        background-color: rgb(210, 145, 229);
      }

      100% {
        background-color: rgb(247, 247, 148);
      }


    }

    .search-container:hover {
      animation: hoverShake 0.15s linear 3;
      text-align: center;
    }

    /* The navigation bar */
    .navbar {
      overflow: hidden;
      background-color: rgba(255, 255, 255, 0);
      opacity: 100%;
      position: fixed;
      /* Set the navbar to fixed position */
      top: 0;
      /* Position the navbar at the top of the page */
      width: 100%;
      /* Full width */
      font-size: 20px;


    }

    /* Links inside the navbar */
    .navbar a {
      float: right;
      display: block;
      color: #000000;
      opacity: 100;
      text-align: right;
      padding: 14px 16px;
      text-decoration: overline;

    }

    /* Change background on mouse-over */
    .navbar a:hover {
      background: rgba(221, 221, 221, 0.438);
      opacity: 50%;
      color: black;
      text-decoration: none;


    }



    /* Main content */
    .main {
      margin-top: 30px;
      /* Add a top margin to avoid content overlay */
    }
  </style>
</body>

</html>