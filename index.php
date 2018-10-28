<!DOCTYPE html>
<html lang="en" style="height:100%;">
<head>
  <title>Amazon Scraper</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background: linear-gradient(to bottom, #43516d 0%, #ccd2e0 100%); height:100%;">
<div class="container text-center"  style="padding-top: 160px;">
<img src="logo.png" alt="amazon scraber" style="width:50px;margin-bottom: 12px;"><span style="font-size: 18px;font-weight: bold;color: #000;">amazon scraper</span>
  <form >
    <div class="form-group col-md-10">
      <input type="text" class="form-control" id="url" name="url" placeholder="URL" >
    </div>
	<div class="col-md-2" style="text-align: left;">
	<button type="button" class="btn btn-success" id="scrab" style="background-color: #000; border: 1px solid #000;; font-weight: bold;">SCRAP</button>
	</div>
  </form>
</div>
 <script src="amazonscraper.js"></script>
</body>
</html>
