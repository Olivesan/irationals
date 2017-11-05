<!DOCTYPE html>

<HTML>
	<HEAD>
		<title></title>

		<?php require("core/inclusions.php") ?>

		<STYLE>

			

		</STYLE>

	</HEAD>
	<BODY>

		<div id = "controls">
			
			<h1> Controls </h1>

			<label for = "number"> <b> Number to Visualise: </b> </label>

			<SELECT id = "number" oninput = "init()">
				<option value = "pi">Pi</option>
				<option value = "phi">Phi</option>
				<option value = "e">e</option>
			</SELECT>

			<br />
			<br />

			<label for = "xLength"> X-Side Length:</label>
			<br />
			<input type="range" id = "xLength" min = "1" max = "100" value = "25" oninput = "init(); rangeUpdate();">
			<input type = "text" id = "xText" oninput="document.getElementById('xLength').value = document.getElementById('xText').value; init();" class = "spanText" value = "25">

			<br />

			<label for = "yLength"> Y-Side Length:</label>
			<br />
			<input type="range" id = "yLength" min = "1" max = "100" value = "25" oninput = "init(); rangeUpdate();">
			<input type = "text" id = "yText" oninput="document.getElementById('yLength').value = document.getElementById('yText').value; init();" class = "spanText" value = "25">

			<h1>Colours</h1>

			<CENTER>
			<TABLE>
				
				<tr>
					<th>Number</th>
					<th>Colour</th>
				</tr>

				<tr>
					<td>0</td>
					<td><input type="color" value="#FFFFFF" id = "col0"></td>
				</tr>

				<tr>
					<td>1</td>
					<td><input type="color" value="#FF4136" id = "col1"></td>
				</tr>

				<tr>
					<td>2</td>
					<td><input type="color" value="#FF851B" id = "col2"></td>
				</tr>

				<tr>
					<td>3</td>
					<td><input type="color" value="#FFDC00" id = "col3"></td>
				</tr>

				<tr>
					<td>4</td>
					<td><input type="color" value="#01FF70" id = "col4"></td>
				</tr>

				<tr>
					<td>5</td>
					<td><input type="color" value="#3D9970" id = "col5"></td>
				</tr>

				<tr>
					<td>6</td>
					<td><input type="color" value="#39CCCC" id = "col6"></td>
				</tr>

				<tr>
					<td>7</td>
					<td><input type="color" value="#0074D9" id = "col7"></td>
				</tr>

				<tr>
					<td>8</td>
					<td><input type="color" value="#B10DC9" id = "col8"></td>
				</tr>

				<tr>
					<td>9</td>
					<td><input type="color" value="#F012BE" id = "col9"></td>
				</tr>

			</TABLE>
			</CENTER>

		</div>

		<canvas></canvas>

		<SCRIPT src = "core/js/canvas.js"></SCRIPT>

	</BODY>
</HTML>