<?php
$content = file_get_contents("https://api.scratch.mit.edu/projects/" . $_GET["id"]);
echo $content;
