<?php
/*
 * Copyright (C) 2011 Alex Thomson
  
 * This program is free software: you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation, either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<title>anatomical | v 0.1</title>
		
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/addatom.css" />
		
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.corner.js"></script>
		
		<link rel="shortcut icon" href="img/favicon.ico" />
	</head>	 
	<body>
		<div id="header" class="header">
			<img id="logo" class="logo" src="img/logo.png"/>
		</div>
		<div id="body" class="body">			
			<?php if(file_exists("addatom.html")){echo file_get_contents("addatom.html");}?>
			<div class="readatom-header">Latest Atoms</div>	
			<div id="readatom" class="readatom">				
				<div class="readatom1">Hello.</div>
				<div class="readatom2">How are you.</div>
				<div class="readatom1">This is a test.</div>
			</div>
			<script type="text/javascript">
				$('#readatom').corner();
				$('.readatom1').corner();
				$('.readatom2').corner();
				$('.readatom-header').corner("top");
			</script>
		</div>

	</body>	 
</html>