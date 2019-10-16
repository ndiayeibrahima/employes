<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Custom Switch</h2>
  <p>To create a custom "toggle switch", wrap a container element, like div, with a class of .custom-control and .custom-switch around a checkbox. Then add the .custom-control-input class to the checkbox:</p>
                                        
  <form action="/action_page.php">
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="switch1" name="example">
      <label class="custom-control-label" for="switch1">Toggle me</label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
