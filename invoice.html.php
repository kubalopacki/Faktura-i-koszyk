<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Faktura</title>
    <link rel="stylesheet" href="faktura_proba.css">
    <link rel="license" href="https://www.opensource.org/licenses/mit-license/">
</head>
<body>
<header>
    <h1>Faktura</h1>
    <address contenteditable>
        <p>Kuba Łopacki</p>
        <p>Norwida 1<br>58-100 Świdnica </p>
        <p>+48 601 288 895</p>
    </address>
    <span><img alt="" src="https://d30y9cdsu7xlg0.cloudfront.net/png/70648-200.png"><input type="file" accept="image/*"></span>
</header>
<article>
    <address contenteditable>
        <p>Dane klienta:</p><span class="kropki">
            <br>......................................
            <br>......................................
            <br>......................................
            <br>......................................
        <br>......................................</span>
    </address>
    <table class="meta">
        <tr>
            <th><span contenteditable class="data">Numer faktury</span></th>
            <td><span contenteditable></span></td>
        </tr>
        <tr>
            <th><span contenteditable class="data">Data</span></th>
            <td><span contenteditable></span></td>
        </tr>
    </table>
    <table class="inventory">
        <thead>
        <tr>
            <th><span contenteditable>Produkt</span></th>
            <th><span contenteditable>Cena/szt</span></th>
            <th><span contenteditable>Podatek</span></th>
            <th><span contenteditable>Ilość</span></th>
            <th><span contenteditable>Cena brutto</span></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($koszyk1->produkty_w_koszyku as $produkt): ?>
            <tr>
                <td><a class="cut">-</a><span contenteditable><?php echo $produkt->Nazwa ?></span></td>
                <td><span contenteditable><?php echo $produkt->Cena ?></span></td>
                <td><span data-prefix></span><span
                            contenteditable><?php echo ((($produkt->Podatek) * 100) + 1) . "%" ?></span>
                </td>
                <td><span contenteditable></span><?php echo $koszyk1->liczba_sztuk[$produkt->Nazwa] ?></td>
                <td>
                    <span data-prefix></span><span><?php echo $koszyk1->liczba_sztuk[$produkt->Nazwa] * $produkt->Cena * (1 + $produkt->Podatek) ?></span>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <table class="balance">
        <tr>
            <th><span contenteditable>Suma</span></th>
            <td><span data-prefix></span><span><?php $koszyk1->totalPriceBrutto() ?></span></td>
        </tr>
    </table>
</article>
<aside>
    <div contenteditable>.......................................................<br>Podpis osoby wystawiającej fakturę
    </div>
</aside>
</body>
</html>
