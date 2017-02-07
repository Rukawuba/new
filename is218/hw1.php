<?php

$menu= new menu();
$link = link::newlink("NJIT","http://www.njit.edu","_BLANK");
$menu->addMenuItem($link);
$html = $menu->getMenu();

echo $html

class menu {
	private $menu;

	public function addMenuItem($link) {

		$this->menu[] = $link;

		}
	public function getMenu() {
	$menuHTML = '<ul>';
	foreach($this->menu as $menuItem) {
		$menuHTML .= '<li>' . $menuItem . '</li>';
		}
		$menuHTML .= '</ul>';
		return $menuHTML;
	}

	}
	class link {
		{
	$link = '<a href="' .$href . '" target="' . $target . '">' . $title.
	'</a>' ;
	return $link;

	}
}



?>
