<html>
	<head>
	<title> HW1</title>
	<style type = "text/css">
	
	p.red
	{
		color:red;
	}
	p.blue
	{
		color:blue;
	}
	
	</style>
	</head>
	
	<body>
		<p>
		<?php
			$parameter = $_GET["number"];
		?>
		</p>
		
		<p class = "red">
			<?php
			 if(!(is_numeric($parameter)))
				echo "The parameter is not a number!";
	
			 if(!(in_array($parameter, range(0,19999))))
				printf("The parameter is not within the range[0,19999]!");
			?>
		</p>
			
		<p>
			<?php
			 function is_prime($num)
				{
				if($num == 1) return false;
				 for($i = 2; $i < $num; $i++) {
				  if($num % $i == 0) {
				   return false;
				  }

				 }

				return true;

				}
			?>		
		</p>
			 
		<p>
			<?php
			 if(is_prime($parameter))
				printf( "The number %d is prime!",$parameter);
			?>
		</p>
			
		<p class = "blue">
			<?php
				if(!(is_prime($parameter)))
				printf( "The number %d is not prime!",$parameter);
			?>
		</p>
		
	</body>
</html>	