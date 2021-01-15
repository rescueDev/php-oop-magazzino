<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazzino</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: coral;
            color: white;
            height: 100vh;
            font-size: 18px;
        }
    </style>

    <!-- GOAL:
    Definire la classe Magazzino e la classe Prodotto nel seguente modo:

    Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori

    Prodotto: definire gli attributi per nome, peso e prezzo

    Generare alcune istanze di ogni classe, ai fini di test e per meglio comprendere i concetti -->
</head>

<body>
    <?php

    class Magazzino
    {
        public $nome;
        public $location;
        public $prodotti;

        public function __construct($nome, $location)
        {
            $this->nome = $nome;
            $this->location = $location;
        }

        public function magLocation()
        {
            echo 'Funzione Location:'
                . $this->location
                . '<br>';
        }
    }

    class Prodotto
    {
        public $nome;
        public $peso;
        public $prezzo;

        public function __construct($nome, $peso)
        {
            $this->nome = $nome;
            $this->peso = $peso;
        }
    }

    // Prima istanza di Magazzino
    $magazzino = new Magazzino('Amazon', 'Bergamo');

    //Inserisco Array di prodotti
    $magazzino->prodotti = ['aspirapolvere', 'microonde', 'mascherine'];

    //Prima istanza di Prodotto
    $prodotto = new Prodotto('TV', 16);

    /* provo a mettere $prodotto dentro $magazzino */
    $magazzino->prodotto = $prodotto;
    var_dump($magazzino);


    echo "<br>";
    echo "<br>";


    // Seconda istanza di Magazzino
    $magazzino2 = new Magazzino('Feltrinelli', 'Milano');

    //provo methods creato che mi restituisce location di $magazzino2
    $magazzino2->magLocation();

    echo '<br>';

    var_dump($magazzino2);

    echo '<br>';
    echo "<br>";


    var_dump($prodotto);

    echo "<br>";
    echo "<br>";


    //Seconda istanza di Prodotto
    $prodotto2 = new Prodotto('Laptop', 2);
    $prodotto2->prezzo = 1000;

    var_dump($prodotto2);









    ?>
</body>

</html>