<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="/favicon.ico?v=1" type="image/x-icon">
    <title>Docker Compose</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light"
	style="background-color: rgb(119, 62, 134);">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="./">Docker Compose</a>
      <ul class="navbar-nav mt-lg-0">
        <li class="nav-item btn btn-outline-primary"><a href="./index.php?a=createEmployee" class="navbar-brand">New register</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">        
        <li class="nav-item btn btn-outline-primary"><a href="./" class="navbar-brand" onclick="javascript:event.target.port=8080">Adminer</a>
        </li>    
      </ul>

    </div>
  </nav>

  <div class="container mt-3">
    <h3>Update Employee</h3>
    <form action="./index.php">
      <input type="hidden" name="a" value="updateEmployeeById">
      <input type="hidden" name="id" value='<?=$_GET['id']?>'>
      <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" value='<?=$_GET['name']?>' name="name" id="name" aria-describedby="name">
    </div>    
    <div class="mb-3">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" value='<?=$_GET['city']?>' name="city" id="city" aria-describedby="name">
    </div>

    <div class="mb-3">
      <label for="salary" class="form-label">Salary</label>
      <input  type="decimal" class="form-control" value='<?=$_GET['salary']?>' name="salary" id="salary">
    </div>
    <button class="btn btn-outline-success" type="submit" class="btn btn-outline-primary">Submit</button>
     </form>
    
  </div>
  
  <nav class="d-flex justify-content-center navbar navbar-expand-lg navbar-light bg-light mt-5 fixed-bottom">
      
      <a class="navbar-brand " href="https://web.dio.me/track/bootcamp-tqi-kotlin">
        <h6>Bootcamp TQI Kotlin - Backend Developer</h6>
      </a>

  </nav>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>