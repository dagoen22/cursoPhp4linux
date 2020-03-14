<?php

foreach (new DirectoryIterator('/home/developer/cursoPhp') as $dir){
    echo $dir->getFilename();
    echo "<br>";
}