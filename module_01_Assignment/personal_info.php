<?php
$name = "Tanvir Chowdhury";
$age = 27;
$country = "Bangladesh";
$intro = "Web development is one of my most popular areas of computer science, and for good reason. It's a versatile field that can be create a wide variety of websites.";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="col-md-6 mx-auto mt-5">
  <h2 class="text-center">Personal Information</h2>
  <table class="table mt-3 ">
  <thead class="table-info">
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">AGE</th>
      <th scope="col">COUNTRY</th>
      <th scope="col">INTRODUCTION</th>
    </tr>
  </thead>
  <tbody class="table-secondary">
    <tr>
      <td><?php echo $name; ?></td>
      <td><?php echo $age; ?></td>
      <td><?php echo$country; ?></td>
      <td><?php echo $intro; ?></td>
    </tr>
  </tbody>
</table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
