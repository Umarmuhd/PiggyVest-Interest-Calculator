<?php
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($post['result'])){
    $val = $post['val'];
    /** 
     Calculate for 10% 
    */
    $int = $val * 0.00000274;
}

if(isset($post['second'])){
    $val = $post['val'];
    /** 
     Calculate for 13% 
     0.13
     0.00035616

    */
    $inte = $val * 0.00000356;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Result Page</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center">Result</h3>
        
        <br>
        <?php if(isset($int)){ ?><div class="alert alert-primary">Your Daily Interest for ₦<?php echo number_format($val, 2); ?> is: ₦<?php echo $int; ?></div> <?php } ?>
        <?php if(isset($inte)){ ?><div class="alert alert-primary">Your Daily Interest for ₦<?php echo number_format($val, 2); ?> is: <?php echo $inte; ?></div> <?php } ?>
        <br>
        
        <br><a href="index.php"><button class="btn btn-primary pull-right">Calculate 10% Interest</button></a>
        <a href="index2.php"><button class="btn btn-success pull-right">Calculate 13% Interest</button></a>
        
        
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