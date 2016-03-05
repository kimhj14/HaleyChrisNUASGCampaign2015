<?php
	include "head.php";
?>
<body>
	<div class="container-fluid endorsement-form">
		<div class="endorsement-form-body">
			<img id="form-logo" class="img-responsive" src="images/HC_logo(slogan).png" />
			<div id="endorsement-form-information">
				<form name="endorser-information" method="POST" action="mail.php" enctype="multipart/form-data">
					<div class="form-group">
						<label for="endorser-name">Enter your Name</label>
						<input type="name" class="form-control" name="endorser-name" placeholder="">
					</div>
					<div class="form-group">
						<label for="endorser-email">Tell us your Email Address</label>
						<input type="email" class="form-control" name="endorser-email" placeholder="">
					</div>
					<!--<div class="form-group">
						<label for="endorser-photo">Upload a Photo of Yourself</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
						<input type="file" name="photo" />
						<p class="help-block">Please upload a high-quality, <i>square</i> photo of yourself.</p>
					</div>-->
					<div class="form-group">
						<label for"endorser-testimony">Tell Us Why You Support Haley & Chris</label>
						<textarea class="form-control" rows="5" name="endorser-testimony" placeholder=""></textarea>
					</div>
					<div class="form-group">
						<label for="endorser-bio">Please list any campus titles or positions you want to be identified by (director, outgoing/incoming/former president, etc.)</label>
						<textarea class="form-control" rows="5" name="endorser-bio" placeholder=""></textarea>
					</div>
					<div class="form-group">
						<label for="endorser-bio">Write your bio here (Optional)</label>
						<textarea class="form-control" rows="5" name="endorser-bio" placeholder=""></textarea>
					</div>
					<div class="text-center"><input type="Submit" value="Submit" class="endorse-btn" id="submit">
					</div>
					<br>
					<div class="picture-text">
						<p style="text-align: center;"><b>***Please send a square image of yourself to HaleyChrisNU@gmail.com***</b></p>
						<p style="text-align: center;">If you would like to get more involved, please click <a href="connect.php">here</a> to go our connect page!</p>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
		include "footer.php";
	?>
</body>
<script>
// check fields
	$(".endorse-btn").on("click", function () {
		console.log("clicked submit")
	})

</script>