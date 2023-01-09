
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link" href="index.html">Home</a>
            <a class="nav-item nav-link" href="exam.php">examenes</a>
        </div>
    </nav>
  </header>
  <main>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">asignatura</th>
                <th scope="col">fecha</th>
                <th scope="col">created at</th>
                <th scope="col">sctions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'examenes');
            $query = 'SELECT * FROM examen';
            $result = mysqli_query($conn, $query);
            while($row=mysqli_fetch_array($result)){ ?>
<tr>

<td><?php echo $row['id'];?></td>
<td><?php echo $row['asignatura'];?></td>
<td><?php echo $row['fecha'];?></td>
<td><?php echo $row['fecha.creacion'];?></td>
<td>

<a href="eliminar.php?id=<?php $row['id'] ?>" class="btn btn-primary active" role="button">eliminar</a>
<a href="#" class="btn btn-primary active" role="button">editar</a>
</td>
</tr>

        <?php } ?>
            
        
        </tbody>
    </table>
</div>

  </main>
  <footer>

  </footer>
</body>

</html>