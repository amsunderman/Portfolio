<?php 
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";

if ($page_name=='') {
	include "web/index.html";
	}
elseif ($page_name=='index.html') {
	include "web/index.html";
	}
elseif ($page_name=='reflections.html') {
	include "web/reflections.html";
	}
elseif ($page_name=='template.html') {
	include "web/template.html";
	}
elseif ($page_name=='seniordesign.html') {
	include "web/seniordesign.html";
	}
elseif ($page_name=='autocad_revisioncontrol.html') {
	include "web/autocad_revisioncontrol.html";
	}
elseif ($page_name=='memegenerator.html') {
	include "web/memegenerator.html";
	}
else
	{
		include "web/404page.html";
	}

?>
