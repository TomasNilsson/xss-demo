Capturing input: <?php echo $_GET['value']; ?>
<?php
	$file = 'data.txt';
	$data = $_GET['value']. "\n";
	// Write the contents to the file, 
	// using the FILE_APPEND flag to append the content to the end of the file
	// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
	file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
?>
