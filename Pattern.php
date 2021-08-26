<html>

	<head>
			<title>Prime</title>
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
				
				
				for($i=0; $i<5; $i++){
					
					echo "<br>";
					
					for($j=0; $j<5; $j++){
						
						if($i==0 || $i==4){
							
							echo "*";
						
						}else if($j==0 || $j==4){
							
							echo "*";
							
						}else{
							
							echo "&nbsp;&nbsp;";
						}
						
					}//end for
					
					echo "<br>";
					
				}//end for


				?>
				
			</div>
	</body>
	
</html>