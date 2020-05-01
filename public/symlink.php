<?php
 $target = $_SERVER['DOCUMENT_ROOT']."/../laravel/storage/app/public";  #Ruta que genera Laravel para el Storage ( a nivel de app )
 $link = $_SERVER['DOCUMENT_ROOT'].'/storage'; #Ruta en la carpeta publica para que se cree el enlace simbolico (public o public_html)
 symlink($target,$link);
 echo "OK";
