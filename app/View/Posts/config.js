/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	config.image_previewText=' ';
	config.filebrowserImageUploadUrl = "../../../cakephp/js/ckeditor/plugins/imgupload/imgupload.php"; 
    config.filebrowserBrowseUrl = "../../../cakephp/js/ckeditor/plugins/imgbrowse/imgbrowse.html?imgroot=/images/";
};
