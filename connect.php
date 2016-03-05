<?php
	include "head.php";
	include "header.php"; ?>

<div class="container centerwrap">
	<div class="connect-content">
		<h1>CONNECT</h1>
		<br>
		<div class="connect-icons">
			<a href="files/HaleyChris_Cover.png" download="HaleyChris_CoverPhoto"><img class="coverphoto-button" onmouseover="DownloadButton(this)" onmouseout="CoverPhoto_Button(this)" src="images/CoverPhoto_Button.jpg"></a>
			<a href="files/HaleyChris_Profile.png" download="HaleyChris_ProfilePic"><img class="profilepic-button" onmouseover="DownloadButton(this)" onmouseout="ProfilePicture_Button(this)" src="images/ProfilePicture_Button.jpg"></a>
		</div>
		<div class="social-icons">
			<a href="https://www.facebook.com/JoinHaleyandChris"><img class="fb-button" onmouseover="FBHover(this)" onmouseout="FB_Button(this)" src="images/FacebookButton.jpg"></a>
			<a href="https://instagram.com/haleychrisnu/"><img class="insta-button" onmouseover="SocialHover(this)" onmouseout="Insta_Button(this)" src="images/InstagramButton.jpg"></a>
			<a href="https://twitter.com/HaleyChrisNU"><img class="twitter-button" onmouseover="SocialHover(this)" onmouseout="Twitter_Button(this)" src="images/TwitterButton.jpg"></a>
			<a href="#"><img class="snap-button" onmouseover="Snap_ComingSoon(this)" onmouseout="Snap_Button(this)" src="images/SnapChatButton.jpg"></a>
		</div>
		<br>
		<p style="text-align:center;">If you want to view the pdf file of the platform, click <a href="http://issuu.com/haleychrisnu/docs/haleychrisplatform">here!</a></p>
		<br><br><br><br><br>
	</div>
</div>

<?php
	include "footer.php"; ?>

<script>
function CoverPhoto_Button(x) {
    x.src = "images/CoverPhoto_Button.jpg";
}
function ProfilePicture_Button(x) {
    x.src = "images/ProfilePicture_Button.jpg";
}
function DownloadButton(x) {
    x.src = "images/DownloadButton.jpg";
}
function FBHover(x) {
    x.src = "images/FBHover.jpg";
}
function SocialHover(x) {
    x.src = "images/SocialHover.jpg";
}
function FB_Button(x) {
    x.src = "images/FacebookButton.jpg";
}
function Insta_Button(x) {
    x.src = "images/InstagramButton.jpg";
}
function Twitter_Button(x) {
    x.src = "images/TwitterButton.jpg";
}
function Snap_Button(x) {
    x.src = "images/SnapChatButton.jpg";
}
function Snap_ComingSoon(x) {
	x.src ="images/ComingSoon_Snapchat-01.png";
}
</script>