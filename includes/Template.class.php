<?php
class Template {
	
	
	public function fetch($file,$vars){
		$this->Cache($file);
	}
	
	public function Cache($file){
		$content 	= file_get_contents($file);
		$patt      = array('__PUBLIC__', '__ACTION__', '__CONTROL__', '__WEB__', '__APP__');
		$replace  = array('<?php echo(__PUBLIC__); ?>', '<?php echo(__ACTION__); ?>', '<?php echo(__CONTROL__); ?>', '<?php echo(__WEB__); ?>', '<?php echo(__APP__); ?>');
		$content  = str_ireplace('../public', '<?php echo(TEMPLATE_PUBLIC); ?>', $content);
		$content  = str_replace($patt, $replace, $content);
	}
}

?>