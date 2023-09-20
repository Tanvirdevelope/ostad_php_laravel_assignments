<?php
$resultText = "";

if (isset($_POST['submit'])) {
    $temperature = $_POST['temperature'];
    $conversion_type = $_POST['conversion_type'];

    if ($conversion_type == 'cel_fah') {
        $converted_temperature = ($temperature * 9 / 5) + 32;
        $resultText = "$temperature °C = $converted_temperature °F.";
    } elseif ($conversion_type == 'fah_cel') {
        $converted_temperature = ($temperature - 32) * 5 / 9;
        $resultText = "$temperature °F = $converted_temperature °C.";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="col-md-4 mx-auto mt-5">
  <h3 class="text-center fw-light text-uppercase" > Temperature Converter</h3>
  <form action="" method="POST">
        <div class="input-group mb-3">
        <span class="input-group-text mt-3"><i class="fa fa-user"></i></span>
        <input type="number"  name="temperature" required value="" class="form-control mt-3" placeholder="Enter Temperature:">
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa fa-user"></i></span>
        <select class="form-control" name="conversion_type" id="conversion_type">
            <option>Please select conversion</option>
            <option value="cel_fah">Celsius to Fahrenheit</option>
            <option value="fah_cel">Fahrenheit to Celsius</option>
        </select>
        </div>
        
        </div>
        <div class="d-grid">
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
        
        <h4 class="mt-3">Result: <?php echo $resultText; ?> </h4>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
