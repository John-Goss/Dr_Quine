<?php
//
//	ONE COMMENT
//
function foo()
{
	//
	//	SECOND COMMENT
	//
	$str = "<?php%c//%c//%cONE COMMENT%c//%cfunction foo()%c{%c%c//%c%c//%cSECOND COMMENT%c%c//%c%c%cstr = %c%s%c;%c%c%cing = sprintf(%cstr,10,10,9,10,10,10,10,9,10,9,9,10,9,10,9,36,34,%cstr,34,10,9,36,36,36,10,9,36,10,10,10,10,9,10,10,10,10);%c%cecho %cing;%c}%cfunction maine()%c{%c%cfoo();%c}%cmaine();%c?>%c";
	$ing = sprintf($str,10,10,9,10,10,10,10,9,10,9,9,10,9,10,9,36,34,$str,34,10,9,36,36,36,10,9,36,10,10,10,10,9,10,10,10,10);
	echo $ing;
}
function maine()
{
	foo();
}
maine();
?>

