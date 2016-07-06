<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-plugin/mouseover-layer/qa-mouseover-layer.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Theme layer class for mouseover layer plugin


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

class qa_html_theme_layer extends qa_html_theme_base {

	function doctype()
	{
		if(!qa_opt('dashboard_redirect_enable') || trim(qa_opt('dashboard_redirect_path')) == '') {
			qa_html_theme_base::doctype();
			return;
		}
		if (qa_is_logged_in()) {
			$req = qa_request();
			if ($req == '') {
				qa_redirect(qa_opt('dashboard_redirect_path'));
			} else {
				qa_html_theme_base::doctype();
			}
		}
	}

	function head_script() // change style of WYSIWYG editor to match theme better
	{
		qa_html_theme_base::head_script();

		$firstrequest=strtolower(qa_request_part(0));
		if (empty($firstrequest) || $firstrequest != 'dashboard') return;

		if(qa_opt('dashboard_jquery')) {
			$this->output('<SCRIPT SRC="'.qa_html(qa_path_to_root().'qa-plugin/dashboard/jquery-ui/js/jquery-ui-1.10.1.custom.min.js').'" TYPE="text/javascript"></SCRIPT>');
			$this->output('<SCRIPT TYPE="text/javascript"><!--');
			$this->output('$(function(){');
			$this->output('if($("#qa-dashboard").size()>0){$("#qa-dashboard").tabs();}');
			$this->output('});');
			$this->output('//--></SCRIPT>');
		}
	}

	function head_css()
	{
		qa_html_theme_base::head_css();

		$firstrequest=strtolower(qa_request_part(0));
		if (empty($firstrequest) || $firstrequest != 'dashboard') return;

		if(qa_opt('dashboard_jquery_csspath') != '') {
			$this->output('<LINK REL="stylesheet" TYPE="text/css" HREF="'.qa_html(qa_path_to_root().qa_opt('dashboard_jquery_csspath')).'"/>');
		}
		if(qa_opt('dashboard_custom_csspath') != '') {
			$this->output('<LINK REL="stylesheet" TYPE="text/css" HREF="'.qa_html(qa_path_to_root().qa_opt('dashboard_custom_csspath')).'"/>');
		}
	}
}

/*
	Omit PHP closing tag to help avoid accidental output
*/