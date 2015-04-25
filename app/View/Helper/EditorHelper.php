<?php
class EditorHelper extends Helper
{
 function loadCK($id){
 $buff = "<script type=\"text/javascript\">
 //<![CDATA[
 var editor_$id = CKEDITOR.replace('$id', {customConfig : '/js/ckeditor/config.js'});
 CKFinder.SetupCKEditor( editor_$id, '/js/ckfinder/' );
 //]]>
 </script>";
 return $buff;
 }
}
?>