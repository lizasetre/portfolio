<html>
	<head>
		<style>
			body{
background-color:#F2DA94;
}
	.header{
			/*-webkit-box-shadow: 0px 2px 11px -2px rgba(0,0,0,0.13);
			-moz-box-shadow: 0px 2px 11px -2px rgba(0,0,0,0.13);
			box-shadow: 0px 2px 11px -2px rgba(0,0,0,0.13);*/
			 background-repeat: no-repeat;
			width:1325px;
			height:250px;
			background: linear-gradient(60deg, #ea9999,#c2d6b8,#b9d2d4,#9ca6ba,#c3a1c2,#6d9ba6,#9ca5a6,#f2b9b3,#f29494);
			background-size: 300% 300%;
			-webkit-animation: Gradient 15s ease infinite;
			-moz-animation: Gradient 10s ease infinite;
			animation: Gradient 11s ease infinite;
			background-attachment:scroll;
			top:5;
			text-align:center;
			}

			@-webkit-keyframes Gradient {
				0% {
					background-position: 0% 50%
				}
				50% {
					background-position: 100% 50%
				}
				100% {
					background-position: 0% 50%
				}
			}

			@-moz-keyframes Gradient {
				0% {
					background-position: 0% 50%
				}
				50% {
					background-position: 100% 50%
				}
				100% {
					background-position: 0% 50%
				}
			}

			@keyframes Gradient {
				0% {
					background-position: 0% 50%
				}
				50% {
					background-position: 100% 50%
				}
				100% {
					background-position: 0% 50%
				}
		}

a {
  text-decoration: none;
}

nav {
	height:25px;
  font-family: Times New Roman;
}

ul {
  background: white;
  list-style: none;
  margin: 0;
  padding-left: 0;
}

li {
  color: white;
  background: #F78C8C;
  display: block;
  float: left;
  padding: 1rem;
  position: relative;
  text-decoration: none;
  transition-duration: 0.5s;
}
  
li a {
  color: black;
}

li:hover,
li:focus-within {
  background: #DBC6AD;
  cursor: pointer;
}

li:focus-within a {
  outline: black;
}

ul li ul {
  background: pink;
  visibility: hidden;
  opacity: 4;
  min-width: 10rem;
  position: absolute;
  transition: all 0.5s ease;
  margin-top: 1rem;
  left: 0;
  display: none;
}

ul li:hover > ul,
ul li:focus-within > ul,
ul li ul:hover,
ul li ul:focus {
  visibility: visible;
  opacity: 1;
  display: block
}

ul li ul li {
  clear: both;
  width: 90%;
}

@import "https://fonts.googleapis.com/css?family=Rubik+Mono+One";
.box {
	wrapper:2px;
  background: #DDF294;
  background-repeat: no-repeat;
  background-attachment:inherit;
  height:400px;
  width:1320px;
  overflow-x: hidden;
  font-family: 'Rubik Mono One', sans-serif;
  -webkit-text-stroke-width: 1.5px;
  -webkit-text-stroke-color: yellow;
  padding: 40px;
  text-align: center;
}
.words {
  color: gray;
  font-size: 2;
  line-height: 1;
}
.words span {
  font-size: 150px;
  display: inline-block;
  -webkit-animation: move 2s ease-in-out infinite;
          animation: move 2s ease-in-out infinite;
}
.words span:nth-child(2) {
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}
.words span:nth-child(3) {
  -webkit-animation-delay: 1.0s;
          animation-delay: 1.0s;
}
.words span:nth-child(4) {
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
}
.words span:nth-child(5) {
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
}

@-webkit-keyframes move {
  0% {
    -webkit-transform: translate(-33%, 0);
            transform: translate(-33%, 0);
  }
  50% {
    text-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
  }
  100% {
    -webkit-transform: translate(33%, 0);
            transform: translate(33%, 0);
  }
}

@keyframes move {
  0% {
    -webkit-transform: translate(-33%, 0);
            transform: translate(-33%, 0);
  }
  50% {
    text-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
  }
  100% {
    -webkit-transform: translate(33%, 0);
            transform: translate(33%, 0);
  }
}
.element {
  height: 200px;
  animation: pulse 10s infinite;
}

@keyframes pulse {
  0% {
    background-color: #001F3F;
  }
  25% {
    background-color: #FF5733;
  }
  35% {
    background-color: #AED841;
  }
  45% {
    background-color: #D841C8;
  }
  55% {
    background-color: #FF4136;
  }
}

html,
body {
  height: 100px;
}
/* Style all font awesome icons */
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
  height:15px;
  width:20px;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
  height:15px;
  width:20px;
}
/*  */
.fa-instagram {
  background: #A0522D;
  color: white;
  height:15px;
  width:20px;
}
			</html
			</head>
		</style>
		<title>final</title>
			<link rel="stylesheet" type="text/css" href="css/style.css"/>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
		<body>
			<div class="wrapper">
			<h3><nav role="navigation">
					
						  <ul><center>
							<li><a href="index.php">HOME</a></li>
							<li><div class="CSS">CSS</div>
							  <ul class="dropdown">
								<li><a href="css.php">Css Elements</a></li>
								<li><a href="transanim.php">Transitions & Animations</a></li>
								<li><a href="cssanim.php">Css Animation</a></li>
							  </ul>
							</li>
							<li><div class="SVG">SVG</div>
							  <ul class="dropdown">
								<li><a href="graph.php">Intro to SVG</a></li>
								<li><a href="canvas.php">SVG Animation</a></li>
							  </ul>
							<li><div class="CANVAS">CANVAS</div>
							  <ul class="dropdown">
								<li><a href="navigation.php">Intro to HTML5 Canvas</a></li>
							  </ul>
							  <li><a href="about.php">ABOUT ME</a></li>
						  </ul>
						</nav></center>
			<div class="clear"></div>
			</div> 
			<div class="About me"><br><br><br><center><h2>CSS Rotate<br>
				<a href="https://codepen.io/lizasetre/pen/zYqPgvd"><br>"https://codepen.io/lizasetre/pen/bGpYXeG"<br>"https://codepen.io/lizasetre/pen/mdPqNro"<br>"https://codepen.io/lizasetre/pen/abNVepq"<br>"https://codepen.io/lizasetre/pen/NWNwQpG"</a></div>
					
			<div class="About me"><br><br><br><center><h2>CSS Scale<br>
				<a href="https://codepen.io/lizasetre/pen/LYNOwWB"><br>"https://codepen.io/lizasetre/pen/eYZeqWR"<br>"https://codepen.io/lizasetre/pen/wvGPVeB"<br>"https://codepen.io/lizasetre/pen/yLOPmoM"<br>"https://codepen.io/lizasetre/pen/wvGPVra"<br>"https://codepen.io/lizasetre/pen/PoNOMOY"</a></div>
					
			<div class="About me"><br><br><br><center><h2>CSS Skew<br>
				<a href="https://codepen.io/lizasetre/pen/gOrXVoY"><br>"https://codepen.io/lizasetre/pen/wvGPVyK"<br>"https://codepen.io/lizasetre/pen/QWNOerG"<br>"https://codepen.io/lizasetre/pen/LYNOwrX"<br>"https://codepen.io/lizasetre/details/YzqEmjb"</a></div>
					<div class="element">
					<div>
					<div class="Footer"></div>
					</div>		
					<center><br><br><br><a div class="fa fa-facebook">
										<a div class="fa fa-twitter">
										<a div class="fa fa-instagram">
		</body>
</html>
