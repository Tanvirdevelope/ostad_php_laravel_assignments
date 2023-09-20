<?php  

$result ="";
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
        case 'addition':
            $result = $num1 + $num2;
            break;
        case 'subtraction':
            $result = $num1 - $num2;
            break;
        case 'multiplication':
            $result = $num1 * $num2;
            break;
        case 'division':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "<p class='bg-danger'>Cannot divide by zero.</p>";
                break; 
            }
            break;
        default:
            $result = "<p class='bg-danger'>Invalid operation.</p>";
            break;
    }

    // Display the result only if it's not an error message
    if (!strstr($result, 'Cannot divide by zero') && !strstr($result, 'Invalid operation')) {
        $result ="<p>Result: $result</p>";
    }
}
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="col-md-4 mx-auto mt-5">
  <h3 class="text-center fw-light text-uppercase" > Simple Calculator</h3>
  <form action="" method="POST">

        <div class="input-group mb-3">
        <span class="input-group-text mt-3"><i class="fa fa-user"></i></span>
        <input type="number"  name="num1" required value="" class="form-control mt-3" placeholder="Enter the first number:">
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa fa-user"></i></span>
        <input type="number"  name="num2" required value="" class="form-control" placeholder="Enter the second number:">
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa fa-user"></i></span>
        <select class="form-control" name="operation" id="conversion_type">
            <option>Please Select an operation:</option>
                <option value="addition">Addition (+)</option>
                <option value="subtraction">Subtraction (-)</option>
                <option value="multiplication">Multiplication (*)</option>
                <option value="division">Division (/)</option>
        </select>
        </div>
        
        </div>
        <div class="d-grid">
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
        
        <h4 class="mt-3"> <?php echo $result; ?> </h4>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
