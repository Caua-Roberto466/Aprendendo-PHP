<?php

declare(strict_types=1);


function verificar(bool $verificado) : void{
    echo $verificado ? "Verificado<br>" : "Não verificado<br>";
}

verificar(false);
verificar(1);
verificar(0);
?>