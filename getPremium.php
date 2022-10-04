<?php 
include("includes/includedFiles.php");
if($_SESSION['premiumValidity'] == true) {
	echo "<div id='getPremium-modal'>
				<h2>🌠 SyncPhonic Premium</h2>
     			<h3>Subscription Status :You have ".floor($_SESSION['premiumDaysLeft'])." days remaining.</h3>
     			<span>Incase you want to renew your subscription ,contact at +91-1234567890.</span>
     		</div";
}
else {
	echo "<div id='getPremium-modal'>
     			<h2>🌠 SyncPhonic Premium</h2>
			
				</ul>
				<span></span>
				</div>";
}

?>


