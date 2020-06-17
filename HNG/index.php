<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>HNG Project</title>
</head>
<body>
   <br><br>

   <div class="container">
       <h3 class="text-center">CALCULATE 10% INTEREST</h3>

       <form action="result.php" method="post">
            <div class="form-group">
                <label for="input">Number</label>
                <input type="number" name="val" placeholder="your number" class="form-control">
            </div>
            <button class="btn btn-primary pull-right" type="submit" name="result">Calculate Interest</button>
        </form>
        
        <br>
        <br><a href="index2.php"><button class="btn btn-success pull-right" type="submit" name="result">Calculate for 13% Interest</button></a>
   </div> 


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
  if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
  }
</script>
</body>
</html>