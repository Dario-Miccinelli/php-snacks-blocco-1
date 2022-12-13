<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$class = [
  [
    'nome' => 'Giuseppe',
    'cognome' => 'Miccinelli',
    'voti' => [
      'matematica' => 10,
      'italiano' => 9,
      'storia' => 8,
      'filosofia' => 11,
    ]
  ],
  [
    'nome' => 'Dario',
    'cognome' => 'Miccinelli',
    'voti' => [
      'matematica' => 9,
      'italiano' => 6,
      'storia' => 7,
      'filosofia' => 9,
    ]
  ],
  [
    'nome' => 'Noah',
    'cognome' => 'Miccinelli',
    'voti' => [
      'matematica' => 6,
      'italiano' => 7,
      'storia' => 9,
      'filosofia' => 6,
    ]
  ],
  [
    'nome' => 'Giulio',
    'cognome' => 'Cea',
    'voti' => [
      'matematica' => 9,
      'italiano' => 7,
      'storia' => 7,
      'filosofia' => 9,
    ]
  ],
  [
    'nome' => 'Simone',
    'cognome' => 'Stermi',
    'voti' => [
      'matematica' => 7,
      'italiano' => 4,
      'storia' => 7,
      'filosofia' => 7,
    ]
  ],
]
?>

<!doctype html>
<html lang="en">

<head>
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  </header>
  <main>
    <div>
      <?php
      foreach ($class as $studente) {
        $voti = $studente['voti'];
        $votiStudente = count($voti);
        $sumVoti = array_sum($studente['voti']);
        $mediaVoti = $sumVoti / $votiStudente;
      ?>

        <ul class="bg-danger p-4 fs-4 text-white">
          <li>
            <?php echo $studente['nome'] . ' ' . $studente['cognome'] . ' Medium of votes: ' . $mediaVoti ?>
          </li>
        </ul>


      <?php
      }
      ?>
    </div>
  </main>
  <footer>
   
  </footer>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>