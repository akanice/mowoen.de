<?php
    define('F_HOME', 'home/');
?>

	<div class="main">
		<?php
			$this->load->view(FRONTEND.F_HOME.'main_content',$this->data);
		?>
	</div>