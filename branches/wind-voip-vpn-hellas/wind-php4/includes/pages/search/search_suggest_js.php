<?php
/*
 * WiND - Wireless Nodes Database
 *
 * Copyright (C) 2006 John Kolovos <cirrus@awmn.net>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 dated June, 1991.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

class search_suggest_js {
	
	var $tpl;

	function search_suggest_js() {
		
	}
	
	function output() {

		$this->tpl['suggest_url'] = makelink(array("page" => "search", "subpage" => "suggest"),FALSE, TRUE, FALSE);

		echo template($this->tpl, __FILE__);
		exit;
	}

}

?>