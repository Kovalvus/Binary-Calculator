<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Wpisz liczbe: <input type="number" name="liczba">
        <input type="submit" value="zatwierdź"><br>
    </form>

    <?php
        $Liczba = @$_POST['liczba'];

        $Binarny = "";
        $licznik = 0;
        while($Liczba != 0)
        {
            $licznik++;
            $Binarny .= $Liczba % 2;
            $Liczba = floor($Liczba/2); 
            if ($licznik == 4)
            {
                $Binarny .= " ";
                $licznik = 0;
            }
        }
        $zmiana = strrev($Binarny);
        echo $zmiana;

    ?>
</body>
</html>