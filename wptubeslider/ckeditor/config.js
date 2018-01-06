/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For the complete reference:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup', 'source' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'document',	   groups: [ 'mode' ] },
		{ name: 'others' },
		{ name: 'colors' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ] },
		{ name: 'styles' }
	];

	// Remove some buttons, provided by the standard plugins, which we don't
	// need to have in the Standard(s) toolbar.
	config.removeButtons = 'Subscript,Superscript,SpecialChar,HorizontalRule,Anchor,Font,Styles,RemoveFormat,Table';
	config.removePlugins = 'elementspath';

	config.codemirror = {

    // Set this to the theme you wish to use (codemirror themes)
    theme: 'default',

    // Whether or not you want to show line numbers
    lineNumbers: true,

    // Whether or not you want to use line wrapping
    lineWrapping: true,

    // Whether or not you want to highlight matching braces
    matchBrackets: true,

    // Whether or not you want tags to automatically close themselves
    autoCloseTags: true,

    // Whether or not you want Brackets to automatically close themselves
    autoCloseBrackets: true,

    // Whether or not to enable search tools, CTRL+F (Find), CTRL+SHIFT+F (Replace), CTRL+SHIFT+R (Replace All), CTRL+G (Find Next), CTRL+SHIFT+G (Find Previous)
    enableSearchTools: true,

    // Whether or not you wish to enable code folding (requires 'lineNumbers' to be set to 'true')
    enableCodeFolding: true,

    // Whether or not to enable code formatting
    enableCodeFormatting: false,

    // Whether or not to automatically format code should be done every time the source view is opened
    autoFormatOnStart: true,

    // Whether or not to automatically format code which has just been uncommented
    autoFormatOnUncomment: false,

    // Whether or not to highlight the currently active line
    highlightActiveLine: true,

    // Whether or not to highlight all matches of current word/selection
    highlightMatches: true,

    // Whether or not to show the format button on the toolbar
    showFormatButton: false,

    // Whether or not to show the comment button on the toolbar
    showCommentButton: false,

    // Whether or not to show the uncomment button on the toolbar
    showUncommentButton: false
};
	
	config.font_style =
    {
        element      : 'body',
        styles      : { 'font-family' : 'Georgia' },
        overrides   : [ { element : 'font', attributes : { 'face' : null } } ]
    };
};
