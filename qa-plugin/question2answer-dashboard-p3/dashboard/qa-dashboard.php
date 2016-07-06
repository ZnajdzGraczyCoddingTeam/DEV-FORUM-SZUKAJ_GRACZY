<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-plugin/example-page/qa-example-page.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Page module class for example page plugin


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

class qa_dashboard {
	
	var $directory;
	var $urltoroot;

	var $row;
	
	var $option_block1_enable;
	var $option_block1_name;
	var $option_block1_content;
	var $option_block2_enable;
	var $option_block2_name;
	var $option_block2_content;
	var $option_block3_enable;
	var $option_block3_name;
	var $option_block3_content;
	var $option_jquery;
	var $option_jquery_csspath;
	var $option_custom_csspath;
	var $option_redirect_enable;
	var $option_redirect_path;
	
	function qa_dashboard() {
		$this->row = 10;
		$this->option_block1_enable = false;
		$this->option_block1_name = qa_lang_html('dashboard/option_block1_name_default');
		$this->option_block1_content = qa_lang_html('dashboard/option_block1_content_default');
		$this->option_block2_enable = false;
		$this->option_block2_name = qa_lang_html('dashboard/option_block2_name_default');
		$this->option_block2_content = qa_lang_html('dashboard/option_block2_content_default');
		$this->option_block3_enable = false;
		$this->option_block3_name = qa_lang_html('dashboard/option_block3_name_default');
		$this->option_block3_content = qa_lang_html('dashboard/option_block3_content_default');
		$this->option_jquery = false;
		$this->option_jquery_csspath = 'qa-plugin/dashboard/jquery-ui/css/Flick/jquery-ui-1.10.1.custom.css';
		$this->option_custom_csspath = 'qa-plugin/dashboard/qa-dashboard-styles.css';
		$this->option_redirect_enable = false;
		$this->option_redirect_path = 'dashboard';
	}
	
	function load_module($directory, $urltoroot) {
		$this->directory=$directory;
		$this->urltoroot=$urltoroot;
	}

	function option_default($option) {
		if ($option=='dashboard_block1_enable') return $this->option_block1_enable;
		if ($option=='dashboard_block1_name') return $this->option_block1_name;
		if ($option=='dashboard_block1_content') return $this->option_block1_content;
		if ($option=='dashboard_block2_enable') return $this->option_block2_enable;
		if ($option=='dashboard_block2_name') return $this->option_block2_name;
		if ($option=='dashboard_block2_content') return $this->option_block2_content;
		if ($option=='dashboard_block3_enable') return $this->option_block3_enable;
		if ($option=='dashboard_block3_name') return $this->option_block3_name;
		if ($option=='dashboard_block3_content') return $this->option_block3_content;
		if ($option=='dashboard_jquery') return $this->option_jquery;
		if ($option=='dashboard_jquery_csspath') return $this->option_jquery_csspath;
		if ($option=='dashboard_custom_csspath') return $this->option_custom_csspath;
		if ($option=='dashboard_redirect_enable') return $this->option_redirect_enable;
		if ($option=='dashboard_redirect_path') return $this->option_redirect_path;
	}

	function admin_form(&$qa_content) {
		$saved=false;
		if (qa_clicked('dashboard_save_button')) {
			qa_opt('dashboard_block1_enable',(bool)qa_post_text('dashboard_block1_enable_field'));
			qa_opt('dashboard_block1_name',qa_post_text('dashboard_block1_name_field'));
			qa_opt('dashboard_block1_content',qa_post_text('dashboard_block1_content_field'));
			qa_opt('dashboard_block2_enable',(bool)qa_post_text('dashboard_block2_enable_field'));
			qa_opt('dashboard_block2_name',qa_post_text('dashboard_block2_name_field'));
			qa_opt('dashboard_block2_content',qa_post_text('dashboard_block2_content_field'));
			qa_opt('dashboard_block3_enable',(bool)qa_post_text('dashboard_block3_enable_field'));
			qa_opt('dashboard_block3_name',qa_post_text('dashboard_block3_name_field'));
			qa_opt('dashboard_block3_content',qa_post_text('dashboard_block3_content_field'));
			qa_opt('dashboard_jquery',(bool)qa_post_text('dashboard_jquery_field'));
			qa_opt('dashboard_jquery_csspath',qa_post_text('dashboard_jquery_csspath_field'));
			qa_opt('dashboard_custom_csspath',qa_post_text('dashboard_custom_csspath_field'));
			qa_opt('dashboard_redirect_enable',(bool)qa_post_text('dashboard_redirect_enable_field'));
			qa_opt('dashboard_redirect_path',qa_post_text('dashboard_redirect_path_field'));
			$saved=true;
		}
		if (qa_clicked('dashboard_default_button')) {
			qa_opt('dashboard_block1_enable',$this->option_block1_enable);
			qa_opt('dashboard_block1_name',$this->option_block1_name);
			qa_opt('dashboard_block1_content',$this->option_block1_content);
			qa_opt('dashboard_block2_enable',$this->option_block2_enable);
			qa_opt('dashboard_block2_name',$this->option_block2_name);
			qa_opt('dashboard_block2_content',$this->option_block2_content);
			qa_opt('dashboard_block3_enable',$this->option_block3_enable);
			qa_opt('dashboard_block3_name',$this->option_block3_name);
			qa_opt('dashboard_block3_content',$this->option_block3_content);
			qa_opt('dashboard_jquery',$this->option_jquery);
			qa_opt('dashboard_jquery_csspath',$this->option_jquery_csspath);
			qa_opt('dashboard_custom_csspath',$this->option_custom_csspath);
			qa_opt('dashboard_redirect_enable',$this->option_redirect_enable);
			qa_opt('dashboard_redirect_path',$this->option_redirect_path);
			$saved=true;
		}
		qa_set_display_rules($qa_content, array(
			'dashboard_block1_name' => 'dashboard_block1_enable_field',
			'dashboard_block1_content' => 'dashboard_block1_enable_field',
			'dashboard_block2_name' => 'dashboard_block2_enable_field',
			'dashboard_block2_content' => 'dashboard_block2_enable_field',
			'dashboard_block3_name' => 'dashboard_block3_enable_field',
			'dashboard_block3_content' => 'dashboard_block3_enable_field',
			'dashboard_jquery_csspath' => 'dashboard_jquery_field',
			'dashboard_redirect_path' => 'dashboard_redirect_enable_field',
		));
		return array(
			'ok' => $saved ? qa_lang_html('dashboard/option_saved_message') : null,
			'fields' => array(
				array(
					'id' => 'dashboard_block1_enable',
					'label' => qa_lang_html('dashboard/option_block1_enable_label'),
					'type' => 'checkbox',
					'value' => qa_opt('dashboard_block1_enable'),
					'tags' => 'NAME="dashboard_block1_enable_field" ID="dashboard_block1_enable_field"',
				),
				array(
					'id' => 'dashboard_block1_name',
					'label' => qa_lang_html('dashboard/option_block1_name_label'),
					'value' => qa_opt('dashboard_block1_name'),
					'tags' => 'NAME="dashboard_block1_name_field"',
				),
				array(
					'id' => 'dashboard_block1_content',
					'label' => qa_lang_html('dashboard/option_block1_content_label'),
					'type' => 'textarea',
					'value' => qa_opt('dashboard_block1_content'),
					'tags' => 'NAME="dashboard_block1_content_field"',
					'rows' => $this->row,
				),
				array(
					'id' => 'dashboard_block2_enable',
					'label' => qa_lang_html('dashboard/option_block2_enable_label'),
					'type' => 'checkbox',
					'value' => qa_opt('dashboard_block2_enable'),
					'tags' => 'NAME="dashboard_block2_enable_field" ID="dashboard_block2_enable_field"',
				),
				array(
					'id' => 'dashboard_block2_name',
					'label' => qa_lang_html('dashboard/option_block2_name_label'),
					'value' => qa_opt('dashboard_block2_name'),
					'tags' => 'NAME="dashboard_block2_name_field"',
				),
				array(
					'id' => 'dashboard_block2_content',
					'label' => qa_lang_html('dashboard/option_block2_content_label'),
					'type' => 'textarea',
					'value' => qa_opt('dashboard_block2_content'),
					'tags' => 'NAME="dashboard_block2_content_field"',
					'rows' => $this->row,
				),
				array(
					'id' => 'dashboard_block3_enable',
					'label' => qa_lang_html('dashboard/option_block3_enable_label'),
					'type' => 'checkbox',
					'value' => qa_opt('dashboard_block3_enable'),
					'tags' => 'NAME="dashboard_block3_enable_field" ID="dashboard_block3_enable_field"',
				),
				array(
					'id' => 'dashboard_block3_name',
					'label' => qa_lang_html('dashboard/option_block3_name_label'),
					'value' => qa_opt('dashboard_block3_name'),
					'tags' => 'NAME="dashboard_block3_name_field"',
				),
				array(
					'id' => 'dashboard_block3_content',
					'label' => qa_lang_html('dashboard/option_block3_content_label'),
					'type' => 'textarea',
					'value' => qa_opt('dashboard_block3_content'),
					'tags' => 'NAME="dashboard_block3_content_field"',
					'rows' => $this->row,
				),
				array(
					'id' => 'dashboard_jquery',
					'label' => qa_lang_html('dashboard/option_jquery_label'),
					'type' => 'checkbox',
					'value' => qa_opt('dashboard_jquery'),
					'tags' => 'NAME="dashboard_jquery_field" ID="dashboard_jquery_field"',
				),
				array(
					'id' => 'dashboard_jquery_csspath',
					'label' => qa_lang_html('dashboard/option_jquery_csspath_label'),
					'value' => qa_opt('dashboard_jquery_csspath'),
					'tags' => 'NAME="dashboard_jquery_csspath_field"',
				),
				array(
					'id' => 'dashboard_custom_csspath',
					'label' => qa_lang_html('dashboard/option_custom_csspath_label'),
					'value' => qa_opt('dashboard_custom_csspath'),
					'tags' => 'NAME="dashboard_custom_csspath_field"',
				),
				array(
					'id' => 'dashboard_redirect_enable',
					'label' => qa_lang_html('dashboard/option_redirect_enable_label'),
					'type' => 'checkbox',
					'value' => qa_opt('dashboard_redirect_enable'),
					'tags' => 'NAME="dashboard_redirect_enable_field" ID="dashboard_redirect_enable_field"',
				),
				array(
					'id' => 'dashboard_redirect_path',
					'label' => qa_lang_html('dashboard/option_redirect_path_label'),
					'value' => qa_opt('dashboard_redirect_path'),
					'tags' => 'NAME="dashboard_redirect_path_field"',
				),
			),
			'buttons' => array(
				array(
					'label' => qa_lang_html('dashboard/option_save_button'),
					'tags' => 'NAME="dashboard_save_button"',
				),
				array(
					'label' => qa_lang_html('dashboard/option_default_button'),
					'tags' => 'NAME="dashboard_default_button"',
				),
			),
		);
	}

	function suggest_requests() { // for display in admin interface
		return array(
			array(
				'title' => qa_lang_html('dashboard/page_title'),
				'request' => 'dashboard',
				'nav' => 'B', // 'M'=main, 'F'=footer, 'B'=before main, 'O'=opposite main, null=none
			),
		);
	}

	function match_request($request) {
		if ($request=='dashboard')
			return true;
		return false;
	}
	
	function make_template() {

		// Dashboard wrapper
		$html = '<DIV ID="qa-dashboard">'."\n";
		// Dashboard inner menu
		$html.= '<UL ID="qa-dashboard-menu">'."\n";
		if (qa_opt('dashboard_block1_enable'))
			$html.= '<li><a href="#qa-dashboard-block1">'.qa_opt('dashboard_block1_name').'</a></li>'."\n";
		if (qa_opt('dashboard_block2_enable'))
			$html.= '<li><a href="#qa-dashboard-block2">'.qa_opt('dashboard_block2_name').'</a></li>'."\n";
		if (qa_opt('dashboard_block3_enable'))
			$html.= '<li><a href="#qa-dashboard-block3">'.qa_opt('dashboard_block3_name').'</a></li>'."\n";
		$html.= '</UL>'."\n";
		// Dashboard block1
		if (qa_opt('dashboard_block1_enable')) {
			$html.= '<DIV ID="qa-dashboard-block1">'."\n";
			if(!qa_opt('dashboard_jquery'))
				$html.= '<H2 CLASS="qa-dashboard-block-header qa-dashboard-block1-header">'.qa_opt('dashboard_block1_name').'</H2>'."\n";
			$html.= '{{block1}}';
			$html.= '</DIV>'."\n";
		}
		// Dashboard block 2
		if (qa_opt('dashboard_block2_enable')) {
			$html.= '<DIV ID="qa-dashboard-block2">'."\n";
			if(!qa_opt('dashboard_jquery'))
				$html.= '<H2 CLASS="qa-dashboard-block-header qa-dashboard-block2-header">'.qa_opt('dashboard_block2_name').'</H2>'."\n";
			$html.= '{{block2}}';
			$html.= '</DIV>'."\n";
		}
		// Dashboard block 3
		if (qa_opt('dashboard_block3_enable')) {
			$html.= '<DIV ID="qa-dashboard-block3">'."\n";
			if(!qa_opt('dashboard_jquery'))
				$html.= '<H2 CLASS="qa-dashboard-block-header qa-dashboard-block3-header">'.qa_opt('dashboard_block3_name').'</H2>'."\n";
			$html.= '{{block3}}';
			$html.= '</DIV>'."\n";
		}
		// Clear Fix
		$html.= '<DIV style="clear:both;"></DIV>'."\n";

		// Dashboard wrapper end
		$html.= '</DIV>'."\n";
		
		return $html;
	}
	
	function process_request($request) {
	
		$qa_content=qa_content_prepare();

		if(!qa_is_logged_in()) {
			$qa_content['error']=qa_lang_html('dashboard/error_loggedin');
			return $qa_content;
		}	
		$flags = qa_get_logged_in_flags();
		if ($flags & QA_USER_FLAGS_MUST_CONFIRM) {
			$qa_content['error']=qa_lang_html('dashboard/error_confirm');
			return $qa_content;
		}
		if ($flags & QA_USER_FLAGS_USER_BLOCKED) {
			$qa_content['error']=qa_lang_html('dashboard/error_blocked');
			return $qa_content;
		}

		// Set page title
		$qa_content['title'] = qa_lang_html('dashboard/page_title');

		// Set header message
		$qa_content['custom'] = '';
		if(qa_get_logged_in_level() >= QA_USER_LEVEL_ADMIN) {
			$qa_content['custom'] .= '<P class="qa-dashboard-editlink">';
			$qa_content['custom'] .= strtr(qa_lang_html('dashboard/edit_link'),
				array(
					'^1' => '<A HREF="'.qa_path_html('admin/plugins', null, null, null, md5('page/Dashboard')).'">',
					'^2' => '</A>')
				);
			$qa_content['custom'] .= '</P>'."\n";
		}
		$qa_content['custom'] .= '<P class="qa-dashboard-message">'.strtr(qa_lang_html('dashboard/header_message'), array('^1' => qa_get_logged_in_handle(),'^2' => qa_opt('site_title'))).'</P>'."\n";
		
		/**********************************************
		 Edit Dashbord content
		 **********************************************/
		// Get contents template
		$template = $this->make_template();

		// Get block's contents
		if (qa_opt('dashboard_block1_enable'))
			$block1 = qa_opt('dashboard_block1_content');
		else
			$block1 = '';
		if (qa_opt('dashboard_block2_enable'))
			$block2 = qa_opt('dashboard_block2_content');
		else
			$block2 = '';
		if (qa_opt('dashboard_block3_enable'))
			$block3 = qa_opt('dashboard_block3_content');
		else
			$block3 = '';
		
		/* !!!!! [Future option] Set block's content by program !!!!! */
		/*
		$usrlevel = qa_get_logged_in_level();
		switch ($usrlevel) {
		case QA_USER_LEVEL_BASIC:
			break;
		case QA_USER_LEVEL_EXPERT:
			break;
		case QA_USER_LEVEL_EDITOR:
			break;
		case QA_USER_LEVEL_MODERATOR:
			break;
		case QA_USER_LEVEL_ADMIN:
		default:	// QA_USER_LEVEL_SUPER:
			break;
		}
		*/
		/* !!!!! [Future option] Set block's content by program !!!!! */
		 
		// Replace block's contents
		if (qa_opt('dashboard_block1_enable'))
			$template = str_replace('{{block1}}', $block1, $template);
		if (qa_opt('dashboard_block2_enable'))
			$template = str_replace('{{block2}}', $block2, $template);
		if (qa_opt('dashboard_block3_enable'))
			$template = str_replace('{{block3}}', $block3, $template);
		// Set contents
		$qa_content['custom'] .= $template;

		
		return $qa_content;
	}
}

/*
	Omit PHP closing tag to help avoid accidental output
*/