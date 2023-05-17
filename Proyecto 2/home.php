<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d52a823d8a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <h1>University DataBase</h1>
                <br><br><br>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a class= "link" href="">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        Profesores
                        </a>
                    </li>
                    <br>
                    <li class="list-group-item">
                        <a class="link" href="">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            Estudiantes
                        </a>
                    </li>
                    <br>
                    <li class="list-group-item">
                        <a class="link" href="">
                            <i class="fa fa-school" aria-hidden="true"></i>
                            Facultades
                        </a>
                    </li>
                    <br>
                    <li class="list-group-item">
                        <a class="link" href="">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            Carreras
                        </a>
                    </li>
                    <br>
                    <li class="list-group-item">
                        <a class="link" href="">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Materias
                        </a>
                    </li>
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <li class="list-group-item">
                        <a class="link" href="../../index.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Log Out
                        </a>
                    </li>
                    <br>  
                </ul>
            </div>
            <div class="col-10">
                <br>
                <div class="container-fluid">
                    <div class="dashboard">
                        <h3>Dashboard</h3>
                        <form action="./config/objectUsuario.php" method="POST">
                            <i class="fa-solid fa-right-from-bracket">
                                <button type="submit" name="logout" class="btn btn-primary">Log Out</button>
                        
                            </i>
                        </form>
                        </a>
                    </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <a class="link" href="">
                            <div class="card text-center">
                                <br>
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <div class="card-body">
                                <h5 class="card-title">Profesores</h5>
                                <p class="card-text">Info</p>                            
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="link" href="">
                        <div class="card text-center">
                            <br>
                            <i class="fa-solid fa-user"></i>                            
                            <div class="card-body">
                                <h5 class="card-title">Estudiantes</h5>
                                <p class="card-text">Info</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="link" href="">
                            <div class="card text-center">
                                <br>
                                <i class="fa-solid fa-school"></i>                            
                                <div class="card-body">
                                <h5 class="card-title">Facultades</h5>
                                <p class="card-text">Info </p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="link" href="">
                            <div class="card text-center">
                                <br>
                                <i class="fa-solid fa-graduation-cap"></i>                            
                                <div class="card-body">
                                <h5 class="card-title">Carreras</h5>
                                <p class="card-text">Info </p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="link" href="">
                            <div class="card text-center">
                            <br>
                            <i class="fa-solid fa-book"></i>
                            <div class="card-body">
                                <h5 class="card-title">Materias</h5>
                                <p class="card-text">Info </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                </div>
                <br>
                <div class="container-fluid">
                <table class="table">
                    <i class="fa fa-calendar-o" aria-hidden="true">
                        Recent Activity
                    </i>
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Joined</th>
                        <th scope="col">Type</th>
                        <th scope="col">Stat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Prem Shahi</td>
                        <td>premshahi@gmail.com</td>
                        <td>2022-02-12</td>
                        <td>New</td>
                        <td>Liked</td>
                        </tr>
                        <tr>
                        <td>Deepa Chand</td>
                        <td>deepachand@gmail.com</td>
                        <td>2022-02-12</td>
                        <td>Member</td>
                        <td>Shared</td>
                        </tr>
                        <tr>
                        <td>Prakash Shahi</td>
                        <td>prakashshahi@gmail.com</td>
                        <td>2022-02-13</td>
                        <td>New</td>
                        <td>Liked</td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        <td>Manisha Chand</td>
                        <td>manishachand@gmail.com</td>
                        <td>2022-02-13</td>
                        <td>Member</td>
                        <td>Shared</td>
                        </tr>    
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>