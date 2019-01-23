<?php

	$languageID=$_POST["language"];
	if(isset($_FILES["file"]) && isset($_FILES["file"]["name"]) && $_FILES["file"]["name"]!="")
	{
		include "../compilers1/make.php";
	}
	else
	{
		switch($languageID)
			{
				case "c":
				{
					include("../compilersGen/c.php");
					break;
				}
				case "cpp":
				{
					include("../compilersGen/cpp.php");
					break;
				}
				case "java":
				{
					include("../compilersGen/java.php");
					break;
				}
				case "python2.7":
				{
					include("../compilersGen/python27.php");
					break;
				}
				case "python3.2":
				{
					include("../compilersGen/python32.php");
					break;
				}
			}
	}
?>
