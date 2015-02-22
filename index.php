<?php

	error_reporting(E_ALL ^ E_WARNING);

	$config = file_get_contents("/home/davetaz/code.json");
	$config = json_decode($config,true);
	
	$code = $_GET["code"];
	if ($code != $config["code"])	{
		http_response_code(403);
		echo "403 Forbidden";
		exit();
	}

	include('_includes/header.html');
	
	$movies = file_get_contents("/home/davetaz/movies.list");
	$list = explode("\n",$movies);
	echo '<ul id="mlist">';
	for($i=0;$i<count($list);$i++) {
		$movie = str_replace(".m4v","",$list[$i]);
		echo "<li><a href='#".$movie."'>" . $movie . "</a></li>";
	}
	echo '</ul>';

	include('_includes/footer.html');

?>
