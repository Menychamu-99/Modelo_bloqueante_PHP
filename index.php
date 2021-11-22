
<?php 
    printf("Abriendo Archivo")
    $archivo_url = fopen("el_quijote.txt","r");

    $texto = "";

    while($fragmento = fgets($archivo_url)){
        $texto = $fragento;
    }

    print($texto);
    printf("<br>Haciendo otra cosa");
?>