<?php 


abstract class fatherBlock
{
	function __construct()
	{
	}
	abstract protected function add($tablename, $body, $dbname);
	abstract protected function render_layout_main_menu();

	abstract protected function render_layout_add();

	abstract protected function render_layout_edit($id);

	abstract protected function render_layout_search();
	abstract protected function delete($table,$condition,$dbname);

	abstract protected function saveAfterEdit($name, $body, $condition, $dbname);

	abstract protected function display_Frontend($table, $dbname);
}
 ?>