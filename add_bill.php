<html>
<head>
<title>New Bill | Billing System</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>New Bill</h2>
  <form class="was-validated" action="/action_page.php">
    <label for="email">Customer Name:</label>
    <input type="text" class="form-control" id="cname" placeholder="Enter Customer Name" name="cname"> <br><br>
    <label for="pwd">Phone Number:</label>
    <input type="number" class="form-control" id="cphone" placeholder="Enter Customer Phone" name="cphone">

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>