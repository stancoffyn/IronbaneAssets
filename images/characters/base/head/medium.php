<?php
/*
    This file is part of Ironbane MMO.

    Ironbane MMO is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Ironbane MMO is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Ironbane MMO.  If not, see <http://www.gnu.org/licenses/>.
*/
$i = isset($_GET['i']) ? (int)$_GET['i'] : null;

    $bigfrontmultiplier = 2.0;
    
    $final_front = imagecreatetruecolor(16*$bigfrontmultiplier, 16*$bigfrontmultiplier);
    
    if ( !is_numeric($i) ) die();
    
    if ( !file_exists("$i.png") ) die();
    
    $final_base = imagecreatefrompng("$i.png");
    

    imagesavealpha($final_front, true);
    imagealphablending($final_front, false);    
    
	// if ( $bigfrontmultiplier == 1 ) {
		// imagecopy ($final_front, $final_base, 0, 0, 16, 76, 16*$bigfrontmultiplier, 16*$bigfrontmultiplier);
	// }
	// else {
		imagecopyresampled ($final_front, $final_base, 0, 0, 0, 70, 16*$bigfrontmultiplier, 16*$bigfrontmultiplier, 16, 16);
	//}
	
    
    imagepng ($final_front);
    
    imagesavealpha($final_base, true);

    
    header('Content-Type: image/png');
?>
