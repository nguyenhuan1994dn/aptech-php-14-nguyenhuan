<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-12">
      
      <table class="table">
    <thead>
    <tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    </tr>
    </thead>

    <tbody>
    <?php
    $arr = [
        [
            "id" => 13,
            "name" => "Nguyen Hai Nam",
            "email" => "cz@gmail.com",
            "password" => "123456",
            "created_at" => "2018-08-24 12:05:50",
            "updated_at"
                => "2018-08-24 12:05:50"
        ],
        [
            "id" => 14,
            "name" => "Prof. Elvis Mann V",
            "email" => "rconroy@example.org",
            "password" => "L|^F{L)2^`",
            "created_at" => "2018-08-25 11:16:53",
            "updated_at" => "2018-08-25 11:16:53"
        ], [
            "id" => 15,
            "name" => "Daren Davis",
            "email" => "hlabadie@example.org",
            "password" => "4alYWUNlb!I@%ue^pMi",
            "created_at" => "2018-08-25 11:16:53",
            "updated_at" => "2018-08-25 11:16:53"
        ]
    ];
    var_dump($arr);
    echo "<br>";
    echo "<br>";
    var_dump($arr[0]);
    


    foreach ($arr as $key => $value) {
        echo "<tr>
        <th>" . $value['id'] . "</th>
        <td>" . $value['name'] . "</td>
        <td>" . $value['email'] . "</td>
        <td>" . $value['password'] . "</td>
        </tr>";
    }

    ?>
    </tbody>
    </table>
      </div></div></div>
    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>