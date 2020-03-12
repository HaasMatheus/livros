<?php 	  
	require_once('functions.php'); 	  
	if(!empty($_SESSION['number'])){
		findServidor($_SESSION['number']);
		getAreas();
		index();		
		add();
?>	
	
<?php include(HEADER_TEMPLATE); ?>	
<script src="../cdn/js/emprestimo.js" type="text/javascript"></script>


	
	
<?php include(FOOTER_TEMPLATE); ?>