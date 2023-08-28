<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Download</title>
	<link rel="stylesheet" href="<?= base_url('assets/sematic/menu.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/sematic/segment.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/sematic/container.css') ?>">
	<style>
		body {font-family: 'Courier New', monospace;}
		.judul{
			text-align : center;
		}
		.tabcontent {
			display: none;
			padding: 6px 12px;
			/*border: 1px solid #ccc;*/
			border-top: none;
		}
	</style>
</head>
<body>
	<div class="ui container">
	<div class="judul">
		<h1>IT Toolkit</h1>
	</div>
	<div class="ui mini red compact inverted stackable four item menu tab">
		<a class="item" onclick="Menu(event,'download')">Download</a>
		<a class="item" onclick="Menu(event,'upload')">Upload</a>
		<a class="item" onclick="Menu(event,'soon1')">Soon 1</a>
		<a class="item" onclick="Menu(event,'soon2')">Soon 2</a>
	</div>


	<div class="ui segment">
		<div id="download" class="tabcontent">
			<?php include "tab/download.php"; ?>
		</div>
		<div class="tabcontent" id="upload">
			<?php include "tab/upload.php"; ?>
		</div>
		<div class="tabcontent" id="soon1">
			<h2>Soon1</h2>
			<p>upload kuy</p>
		</div>
		<div class="tabcontent" id="soon2">
			<h2>soon2</h2>
			<p>upload kuy</p>
		</div>
	</div>
	</div>
</body>
<script src="<?= base_url('assets/custom.js') ?>"></script>
</html>