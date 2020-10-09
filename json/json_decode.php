<?php

	$json_decode = '[{"nome":"Gabriel","idade":23},{"nome":"Gabriela","idade":19}]';

	$data = json_decode($json_decode, true);

	var_dump($data);

?>