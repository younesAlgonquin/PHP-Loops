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
			
			
				
				<form action ="Prime.php" method ="get">
				
					<label for ="Range1">Range1: </label>
					<input type ="number"  id="Range1" name="Range1" min="0" value="<?php echo $_GET['Range1'];?>" />
					

					<label for ="Range2">Range2: </label>
					<input type ="number"  id="Range2" name="Range2" min="0" value="<?php echo $_GET['Range2'];?>" />
						
					<input type="submit" value="Generate">
					
				</form>
				
				
				<?php
				
				if(isset($_GET['Range1'])&& isset($_GET['Range2'])){
					
				$range1= $_GET["Range1"];
				$range2= $_GET["Range2"];
				
				$index=2;
				
				for($num=$range1; $num<=$range2; $num++){
					
					$index=2;
					$prime=true;
					while(($index*$index)<=$num && $prime==true){
					
						if(($num % $index)==0){
							
							$prime=false;
						}//end if
						$index++;
					
					}//end while
					
					if($prime==true){
						
						echo"$num is a prime number";
						echo"<br>";
					}//end if
					
				}//end for
				
				}//end if isset

				?>
				
			</div>
	</body>
	
</html>