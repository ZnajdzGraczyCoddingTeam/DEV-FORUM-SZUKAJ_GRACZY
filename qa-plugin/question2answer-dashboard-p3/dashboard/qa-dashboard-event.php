<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-plugin/example-page/qa-example-lang-default.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: US English language phrases for example plugin


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

class qa_dashboard_event {

	function process_event ($event, $userid, $handle, $cookieid, $params) {

		if(!qa_opt('dashboard_redirect_enable') || trim(qa_opt('dashboard_redirect_path')) == '') return;		
		
		switch ($event) {
		case 'u_login':
			$topath=qa_get('to');
			if (isset($topath))
				qa_redirect_raw(qa_path_to_root().$topath);
			else
				qa_redirect(qa_opt('dashboard_redirect_path'));
			break;
		}
	}
}

/*
	Omit PHP closing tag to help avoid accidental output
*/