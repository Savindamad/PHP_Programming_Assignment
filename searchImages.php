<!DOCTYPE html>
<html>
<head>
	<title>Search images</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/imageStyle.css">
	<style>
    /* item styles */
.item-image {
  position: relative;
  overflow: hidden;
  padding-bottom: 50%;
}
.item-image img {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}
.item-content {
  padding: 5px;
  background: #72cffa;
}
.item-text {
  position: relative;
  overflow: hidden;
  height: 100px;
}

/* centering styles for jsbin */

  </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/image.js"></script>


<div class="container">

	<div class="row">
		<div class="col-xs-6 col-sm-3">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  				<input type="text" name="serach">
  				<input type="submit" value="Search">
		</form>
		</div>
	</div>
    <div class="row">
      
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["serach"];
	}  
?>
      <div class="col-xs-6 col-sm-3">
      <div class="panel panel-default">
        <div class="item-image">
          <img src="images/img1.jpg" class="img-responsive">
          <div class="caption" style="width: 100%; height: 100%">
            <h4>Thumbnail Headline</h4>
            <p>short thumbnail description</p>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>

</body>
</html>