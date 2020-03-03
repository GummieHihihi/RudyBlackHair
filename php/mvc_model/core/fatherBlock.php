<?php 


abstract class fatherBlock
{

	function __construct()
	{

	}
	abstract protected function render_layout_main_menu();

	abstract protected function render_layout_add();

	abstract protected function render_layout_edit($id);

	abstract protected function render_layout_update();

	abstract protected function render_layout_search();
}
 ?>