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
	/* <![CDATA[ */
     var navigationPosition = 200;
        var navigationSlider;
        function showNavigation() {
            clearInterval(navigationSlider);
            navigationSlider = setInterval("showNavigationMenu()", 10);
        }
        function showNavigationMenu() {
            if (navigationPosition <= 265) {
                navigationPosition = navigationPosition + 2;
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
                navigationPosition = navigationPosition - 2;
                document.getElementById("navigation").style.top = navigationPosition + "px";
            }
            document.getElementById("navigation").style.zIndex = -1;
        }
	function validWithdrawal()
	{
		if(document.forms[0].withdrawalAmt.value=="")
		{
				window.alert("Please enter a withdrawal amount");
				return false;
		}
		if(isNaN(document.forms[0].withdrawalAmt.value))
		{
				window.alert("Error! Please enter a number");
				return false;
		}
		else		
		return true;
	}

	/* ]]> */
	</script>	

</head>
<body>
 
<div id="body_wrapper">
		    <h1><strong>Welcome to My Tours Travel Agency</strong></h1>
	            <h1><img src="images/saving.png" alt="savings" width="250" height="150"></h1>
		    
                                         
		                        
                    
                <div id="nav" onmouseover="showNavigation();" onmouseout="hideNavigation();">
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
                                </div></div>

<?php
include 'getBalance.php';
$returnValue = readBalance();
echo "<p>Starting balance: " ;
printf ( "%01.2f", $returnValue );
echo "</p>";
?>
<h1>Withdrawal Page</h1>
<h2>Please enter amount to be withdrawn from your account</h2>
<form method="post" action="withdrawal.php" enctype="application/x-www-form-urlencoded" onsubmit="return validWithdrawal();">
    <p>Withdrawal Amount:<input type="text" name= "withdrawalAmt" id="withdrawalAmt" /></p>
    
</form>

 <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0 Strict" height="31" width="88" style="border: 0px;" /></a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img src="http://www.austincc.edu/jscholl/images/vcss.png" 
    alt="Valid CSS!" height="31" width="88" style="border: 0px;" /></a>    
</p>
</div>
  </body>
  </html>
