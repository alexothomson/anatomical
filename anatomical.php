<?php
if(file_exists("anatomical.xml")){echo(1);}
?>
<html xmlns="http://www.w3.org/2002/06/xhtml2"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.w3.org/2002/06/xhtml2 TBD"
	xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<title>anatomical | v0.1</title>
		
		<link rel="stylesheet" type="text/css" href="css/main.css" />
	</head>	 
	<body>
		<div id="header" class="header">
			<img id="logo" class="logo" src="img/logo.png"/>
		</div>
		<div id="body" class="body">
			<div id="addatom" class="addatom">
				<form id="formatom" name="formatom" class="formatom">
					<div class="formatom-left">
						<table>
							<tr>
								<td class="formatom-header">Author</td>							
							</tr>
							<tr>
								<td>
									<input type="text" id="formatom-author" name="formatom-author">
								</td>
							</tr>
							<tr>							
								<td class="formatom-header">Downtime</td>							
							</tr>
							<tr>
								<td>
									<input type="text" id="formatom-author" name="formatom-author">
								</td>
							</tr>
							<tr>
								<td class="formatom-header">Machine Name</td>
							</tr>
							<tr>
								<td>
									<input type="text" id="formatom-author" name="formatom-author">
								</td>
							</tr>
						</table>
					</div>
					<div class="formatom-right">
						<table>
							<tr >							
								<td class="formatom-header" colspan=2>Summary</td>
							</tr>
							<tr>
								<td>
									<textarea style="height:75px;" colspan=2 cols="37" rows="3" id="formatom-summary" name="formatom-summary"></textarea>
								</td>
							</tr>
							<tr>
								<td class="formatom-header">Machine IP</td>
							</tr>
							<tr>
								<td >
									<input type="text" id="formatom-author" name="formatom-author">
								</td>
							</tr>
						</table>
					</div>					
				</form>
				<img class="formatom-post" src="img/post.png">
			</div>
			<div id="readatom" class="readatom">
			
			</div>
		</div>

	</body>	 
</html>