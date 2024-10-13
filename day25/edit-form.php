<?php
require_once "DBBlackbox.php";
var_dump($_GET);
$record_id=$_GET["id"]??null;
echo $record_id;
$edit_form=find(["id"]);
echo $edit_form;