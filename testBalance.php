<!DOCTYPE html >
<html lang="en" >
<head>
    <title>
      My Tours Travel Agency
      Vacation Accounts
    </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Proj4_2R.css">
<script type="text/javascript">
      var navigationPosition = 200;
        var navigationSlider;
        function showNavigation() {
            clearInterval(navigationSlider);
            navigationSlider = setInterval("showNavigationMenu()", 10);
        }
        function showNavigationMenu() {
            if (navigationPosition <= 250) {
                navigationPosition = navigationPosition + 3;
                document.getElementById("navigation").style.top = navigationPosition + "px";
            }
            else
                document.getElementById("navigation").style.zIndex = 1;
        }
        function hideNavigation() {
            clearInterval(navigationSlider);
            navigationSlider = setInterval("hideNavigationMenu()", 10);
        }
        function hideNavigationMenu() {
            if (navigationPosition > 200) {
                navigationPosition = navigationPosition - 3;
                document.getElementById("navigation").style.top = navigationPosition + "px";
            }
            document.getElementById("navigation").style.zIndex = -1;
	}
      var navigationPosition = 150;
        var navigationSlider;
        function showNavigation() {
            clearInterval(navigationSlider);
            navigationSlider = setInterval("showNavigationMenu()", 10);
        }
        function showNavigationMenu() {
            if (navigationPosition <= 250) {
                navigationPosition = navigationPosition + 4;
                document.getElementById("navigation").style.top = navigationPosition + "px";
            }
            else
                document.getElementById("navigation").style.zIndex = 1;
        }
        function hideNavigation() {
            clearInterval(navigationSlider);
            navigationSlider = setInterval("hideNavigationMenu()", 10);
        }
        function hideNavigationMenu() {
            if (navigationPosition > 150) {
                navigationPosition = navigationPosition - 4;
                document.getElementById("navigation").style.top = navigationPosition + "px";
            }
            document.getElementById("navigation").style.zIndex = -1;
        }
</script>        
</head>
<body>
<div id="body_wrapper">
		    <h1><strong>Welcome to My Tours Travel Agency</strong></h1>
	            <img style="float: left;" src="images/fe1_2.jpg" alt="logo" height="150" width="1100">
		    <p><img src="images/dove-animation-1.gif" id="bird" style="position:absolute; left: -122px; top: 200px" alt="Image of a bird" height="42" width="130" /></p>
                                         
		  <table>
                        <tr>                      
                    
			<td id="nav" onmouseover="showNavigation();" onmouseout="hideNavigation();">
                                <a href=""><img src="images/navigation1.jpg" alt="home" id="b1" style='border:0px; margin:1px'
                                    onmouseover="document.getElementById(this.id).src='images/navigation1.jpg'"
                                    onmouseout="document.getElementById(this.id).src='images/navigation2.jpg'" />
                                </a>
                                <div id="navigation" class="dropmenu" style="top:0px; z-index:-1; position:absolute">
                                    <ul>
                                        <li><a href="Proj4Index.htm">Home</a></li>
					<li><a href="Proj4Workshop.htm">Workshops</a></li>
					<li><a href="Project4Vacation.htm">Vacation Account</a></li>
                                        <li><a href="currency7.html">Currency Exchange</a></li>
					<li><a href="topStories6.htm">News</a></li>
				        <li><a href="weather.htm">Weather</a></li>
                                    </ul>
                                </div>
				</td>
                            </tr>
                    </table> 


<h1>Check Your Account Balance</h1>
<?php
include 'getBalance.php';
$returnValue = readBalance();
echo "<p>Account balance: " ;
printf ( "%01.2f", $returnValue ) ;
echo "</p>" ;
echo "For another transaction return to the Vacation Account page.";
?>

  </body>
  </html>
