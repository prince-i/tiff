<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<title>TIFF VIEWER</title>
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
	<style type="text/css">
		canvas{
			/* zoom:120%; */
			width: 500px;
			overflow: auto;
		}
		.prevpanel {
			overflow: auto;
			width:fit-content;
			max-width: 60vw;
			max-height: 100vh;
			scroll-behavior: smooth;
		}
		#form {
			float:right;
			background-color: blue;
		}
	</style>
</head>
<body>

<nav class="white black-text">
	<span>CTRL + ARROW UP = ZOOM IN</span>
	<b>|</b>
	<span>CTRL + ARROW DOWN = ZOOM IN</span>
	<b>|</b>
	<span>CTRL + SHIFT + ARROW KEYS = SCROLL IMAGE</span>
</nav>
<hr>
	<div class="row">
		<div class="col s12">
			<div class="col s8 l8">
				<div class="prevpanel">
					<!-- PREVIEW TIFF -->
				</div>
			</div>

			<div class="col s4 l4">
				<div class="row">
					<div class="col s12">
						<div class="s12 input-field">
							<select name="" id="project_code" class="browser-default" onchange="fetchForm()">
								<option value=""></option>
								<?php
									require 'conn.php';
									$SQL = "SELECT DISTINCT(PROJECT_CODE) FROM formset";
									$stmt = $conn->prepare($SQL);
									$stmt->execute();
									foreach($stmt->fetchall() as $x){
										echo '<option value="'.$x['PROJECT_CODE'].'">'.$x['PROJECT_CODE'].'</option>';
									}
								?>
							</select>
						</div>
						<div class="col s12 input-field" id="render_form" style="max-height:100vh;overflow:auto;">
							<!-- <input type="text" name="" id=""> -->
						</div>
						<div class="col s12 input-field">
							<button class="btn blue col s12" id="saveEntry" onclick="saveData()">Save</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="node_modules/tiff.js/tiff.min.js"></script>
	<script src="main.js"></script>
	<script type="text/javascript">
	
	</script>
</body>
</html>