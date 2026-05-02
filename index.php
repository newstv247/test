<?php

$token = bin2hex(random_bytes(6));

$file = "/pdfs/demo.pdf";

header("Location: /pdfjs/web/viewer.html?file=$file&io0=$token");

exit;

?>
