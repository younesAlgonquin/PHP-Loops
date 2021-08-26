<html>

	<head>
			<title>Chess Board</title>
			<link type= "text/css" href="StyleSheet.css" rel="StyleSheet">
	</head>
	
	<body>
	
            <?php
                    include_once "Header.php";
                    include_once "Footer.php";
                    include_once "Menu.php";
            
            ?>
			
			
			
			
			
			<div id="content">
			
			<?php
				
				
				echo"<table class=\"tab\">";

					
					for ($countRow=0; $countRow <4; $countRow++ ){
						
						echo "<tr>";
						
							for ($countCol=0; $countCol <4; $countCol++ ){
								
							echo "<td class=\"whitecell\"></td> <td class=\"blackcell\"></td>";
							
							}//end for
						
						echo"</tr>";
						
						echo "<tr>";
						
							for ($countCol=0; $countCol <4; $countCol++ ){
								
							echo "<td class=\"blackcell\"></td> <td class=\"whitecell\"></td>";
							
							}//end for
						
						echo"</tr>";

					}//end for
					
				echo"</table>";

				?>
				
				
				</table>
			</div>
	</body>
	
</html>