/*******************************************************************/
Dashboard plugin for question2answer
/*******************************************************************/

/*-----------------------------------------------------------------*/
1. Summary
/*-----------------------------------------------------------------*/
This package is plugin for question2answer.

question2answer: http://www.question2answer.org/

/*-----------------------------------------------------------------*/
2. Feature of this plugin
/*-----------------------------------------------------------------*/
1. This plugin can add dashboard page to Q2A.
2. Three block contents can be changed as option.
3. Design of dashboard can be changed by jQuery UI or custom CSS.
4. After user logged in, he was redirect to dashboard page.

/*-----------------------------------------------------------------*/
3. Correspondence Version
/*-----------------------------------------------------------------*/
question2answer V1.5 later

/*-----------------------------------------------------------------*/
4. Installation/Settings
/*-----------------------------------------------------------------*/
1.Unzip archive any local folder.
2.Upload dashboard folder under qa-plugin folder.
3.Log in administrator account.
4.Select admin -> plugins menu.
5.After setting, and save.
6.Select admin -> pages menu.
7.Add link of dashboard page.

/*-----------------------------------------------------------------*/
5. Uninstallation
/*-----------------------------------------------------------------*/
1.Log in administrator account.
2.Select admin -> plugins menu.
3.Click option of "dashboard".
4.Click "Restore default" button.
5.Delete dashboard folder under qa-plugin folder.

/*-----------------------------------------------------------------*/
6. Options
/*-----------------------------------------------------------------*/
[Enable blockX]
The blockX of dashboard is displayed.

[Name of blockX]
The name of link in page to blockX of dashboard is specified. 

[Content of blockX - HTML allowed]
The contents of blockX of dashboard are inputted in HTML format. 

[Enable jQuery UI]
Dashboard is displayed in tab-format of jQuery-UI.

[CSS file path for jQuery UI]
The path to style sheet of jQuery-UI is specified with the relative path from Q2A root.

[CSS file path for custom style]
The path to custom style sheet is specified with the relative path from Q2A root.

[Enable Redirect]
The redirection feature becomes effective.

[Redirect URL(Relative path from Q2A root)]
The path of dashboard page redirected after user logged in is specified. 

/*-----------------------------------------------------------------*/
7. Additional Information
/*-----------------------------------------------------------------*/

[Edit of contents]
If "WYSIWYG Editor for admin plugin" is installed, the contents of dashboard can be
edited by WYSIWYG editor. 
http://www.question2answer.org/qa/21275/new-plugin-wysiwyg-editor-for-admin-beta
IDs which should be added: 
,dashboard_block1_content_field,dashboard_block2_content_field,dashboard_block3_content_field

[Design of jQuery-UI ]
Design of dashboard can be easily changed using jQuery-UI theme roller.
Upload theme file created at the lower site to server.
Specify CSS file path to "CSS file path for jQuery UI" option.
http://jqueryui.com/themeroller/

/*-----------------------------------------------------------------*/
8. License / Disclaimer
/*-----------------------------------------------------------------*/
1.This software obeys license of Question2Answer.
2.The author does not always promise to support.
3.The Author does not compensate you for what kind of damage that you used question2answer or this file.

/*-----------------------------------------------------------------*/
9. Author/Creator
/*-----------------------------------------------------------------*/
handle: sama55
site: http://cmsbox.jp/

/*-----------------------------------------------------------------*/
10. Version history
/*-----------------------------------------------------------------*/
Å°[2013/02/20] Beta1.0 Beta Release
Å°[2013/02/20] Beta1.1 Fix redirect off bug
Å°[2013/02/20] Beta1.2 Fix to-path bug (for AlartMail)
Å°[2013/02/25] Beta1.3 Fix redirect at Q2A V1.6dev


Have fun !!