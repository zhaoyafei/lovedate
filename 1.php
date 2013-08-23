 <?php 

/* define the default value of counter ... */ 

$counters = array( 

'num1'	=>	'1', 

); 



/* init counters ... */ 

foreach( $counters as $counter => $value ) 

file_put_contents( './' . $counter, $value );?>

