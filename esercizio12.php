<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function scegliColore($inizialeColore){
            switch($inizialeColore){
                case 'r':
                    return 'red';
                    break;
                case 'g':
                    return 'green';
                    break;
                case 'b':
                    return 'blue';
                    break;
                case 'y':
                    return 'yellow';
                    break;
                case 'p':
                    return 'purple';
                    break;
                default:
                    return 'black';
                    break;
            }
        }
    $colore = scegliColore('bg');
    echo "<p style='color:{$colore};'>Questo paragrafo ha la proprietà color con valore {$colore}</p>"
    ?>
</body>
</html>