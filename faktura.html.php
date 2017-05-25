<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Faktura</title>
    <link rel="Stylesheet" type="text/css" href="stylowanie_tabeli.css"/>
</head>

<body>
<table>
    <tr class="heading">
        <td>Nazwa produktu</td>

        <td>Ilość szt.</td>

        <td>Cena Netto</td>

        <td align="center">Podatek</td>

        <td align="left">Cena Brutto</td>
    </tr>
    <?php foreach ($koszyk1->produkty_w_koszyku as $produkt): ?>
        <tr>
            <td class="first" align="left"><?php echo $produkt->Nazwa ?></td>

            <td align="center"><?php echo $koszyk1->liczba_sztuk[$produkt->Nazwa] ?></td>

            <td align="right"><?php echo $produkt->Cena ?></td>

            <td align="center"><?php echo (($produkt->Podatek) * 100) . "%" ?></td>

            <td align="right"><?php echo $produkt->Cena * ($produkt->Podatek + 1) ?> </td>
        </tr>
    <?php endforeach ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Cena całkowita</td>
        <td align="right"><?php $koszyk1->totalPriceBrutto() ?></td>
    </tr>
</table>
</body>
</html>
