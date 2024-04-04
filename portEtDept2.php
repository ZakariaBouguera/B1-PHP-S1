<?php
echo "Saisir le nom du port : ";
$port = rtrim(fgets(STDIN));
$dept = "Port non recensé";

switch (strtolower($port)) {
    case "quiberon":
    case "sauzon":
    case "le palais":
        $dept = "Morbihan";
        break;
        
    case "piriac-sur-mer":
    case "pornic":
        $dept = "Loire-Atlantique";
        break;

    case "concarneau":
    case "douarnenez":
        $dept = "Finistere";
        break;

    case "ile-d'yeu":
        $dept = "Vendee";
        break;
}

if ($dept === "Port non recensé") {
    echo "Port non recensé\n";
} else {
    echo "Département : ", $dept, "\n";
}
?>
