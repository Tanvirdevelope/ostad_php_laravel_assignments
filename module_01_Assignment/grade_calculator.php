<?php
$average="";
$grade = '';

if(isset($_POST['submit'])){
    $score1 = $_POST['grade1'];
    $score2 = $_POST['grade2'];
    $score3 = $_POST['grade3'];

        $avg = ($score1 + $score2 + $score3) / 3;
        $average = number_format($avg , 0); 

    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="col-md-4 mx-auto mt-5">
  <h3 class="text-center fw-light text-uppercase" > Grade Calculator</h3>
  <form action="" method="POST">
        <div class="input-group mb-3">
        <span class="input-group-text mt-3"><i class="fa fa-user"></i></span>
        <input type="number"  name="grade1" required value="" class="form-control mt-3" placeholder="English:">
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text mt-3"><i class="fa fa-user"></i></span>
        <input type="number"  name="grade2" required value="" class="form-control mt-3" placeholder="Bangla:">
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text mt-3"><i class="fa fa-user"></i></span>
        <input type="number"  name="grade3" required value="" class="form-control mt-3" placeholder="Math:">
        </div>
        
        
        </div>
        <div class="d-grid">
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
        
        <h4> Average Score : <?php echo $average; ?> <br>
        Letter Grade : <?php echo $grade; ?> </h4>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
