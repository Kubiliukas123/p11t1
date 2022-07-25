<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>p11t1</title>
</head>
<body>
<div class="container">
    <div>
    <form action="" method="get">
        <input type="text" name="writer">
        <input type="text" name="book">
        <input type="text" name="publisher">
        <input type="text" name="pages">
        <button class="btn btn-success" type="submit">Įvesti</button>
    </form>
    <h1></h1>
    <?php
    if (isset($_GET["writer"]) && isset($_GET["book"]) && isset($_GET["publisher"]) && isset($_GET["pages"])) {
        echo "<h1>" . $_GET["writer"] . "-" . $_GET["book"] . "-" . $_GET["publisher"] . "-" . $_GET["pages"] . "</h1>";
    }
    session_start();
    if (!isset($_SESSION['elements'])) {
        $_SESSION['elements'] = [];
    }
    if (isset($_GET["writer"]) && isset($_GET["book"]) && isset($_GET["publisher"]) && isset($_GET["pages"])) {
        $_SESSION['elements'][] = ['writer' => $_GET["writer"], 'book' => $_GET["book"], 'publisher' => $_GET["publisher"], 'pages' => $_GET["pages"], ];
    }
    for ($i=0; $i < count($_SESSION['elements']); $i++) { 
        $elem = $_SESSION['elements'] [$i];
        echo '<h2 class="">' . $elem["writer"] . "-" . $elem["book"] . "-" . $elem["publisher"] . "-" . $elem["pages"] . "</h2>";
    }
    ?>
    </div>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Rašytojas</th>
                <th scope="col">Pavadinimas</th>
                <th scope="col">Leidykla</th>
                <th scope="col">Puslapių skaičius</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
      </table>
      <?php
     
      ?>
</div>
</body>
</html>