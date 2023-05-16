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
      <a class="navbar-brand text-light" href="./">Docker Compose</a>
      <ul class="navbar-nav mt-lg-0">
        <li class="nav-item btn btn-outline-primary"><a href="./index.php?a=createEmployee" class="navbar-brand text-light">New Employee</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto me-3">        
        <li class="nav-item btn btn-outline-primary"><a href="./" class="navbar-brand text-light" onclick="javascript:event.target.port=8080">Adminer</a>
        </li>    
      </ul>
    </div>
  </nav>

  <div class="container mt-3">
    <h3>Employees List</h3>
    <table class="table table-striped">
      <thead  class="table-dark">
        <tr>
          <th>Name</th>
          <th>City</th>
          <th>Salary</th>
          <th></th>
          <th></th>
        </tr>      
      </thead>
      <tbody>
        <?php foreach($resultData as $data): ?>
          <tr>
            <td><?= $data['name'] ?></td>
            <td><?= $data['city'] ?></td>
            <td><?= $data['salary'] ?></td>
            <td>
              <a
              class="btn btn-outline-danger"
              onClick="javascript: return confirm('Please confirm deletion');" 

              href="./index.php?a=deleteEmployee&id=<?= $data['id']?>"
              type="submit">Delete</a>
            </td> 
            <td>
              <a 
              class="btn btn-outline-warning"
              href="./index.php?a=updateEmployee&id=<?= $data['id']?>&name=<?= $data['name'] ?>&salary=<?= $data['salary'] ?>&city=<?= $data['city'] ?>"
              type="submit">Update</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <nav class="d-flex justify-content-center navbar navbar-expand-lg navbar-light bg-light mt-5 fixed-bottom">
      
      <a class="navbar-brand " href="https://web.dio.me/track/bootcamp-tqi-kotlin">
        <h6>Bootcamp TQI Kotlin - Backend Developer</h6>
      </a>

  </nav>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>