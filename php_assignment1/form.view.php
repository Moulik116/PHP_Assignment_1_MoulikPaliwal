<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style>
    a:link { color:blue; text-decoration: none; }
    a:visited { color:purple; text-decoration: none; }
    a:hover { color:green; text-decoration: none; }
    a:active { color:red; text-decoration: underline; }
    .serial-number {
      counter-reset: serial-number;
    }

    .serial-number td:first-child::before {
      content: counter(serial-number);
      counter-increment: serial-number;
    }

    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #f2f2f2; /* Bright pattern */
    }

    .table-striped tbody tr:nth-of-type(even) {
      background-color: #dcdcdc; /* Dark pattern */
    }
  </style>
</head>
<body>

<div class="container">
  <h2><center>User Data</center></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody class="serial-number">
        <?php foreach ($users as $user):?>
      <tr>
        <td></td>
        <td><?=$user->name;?></td>
        <td><?=$user->emailId;?></td>
        <td><?=$user->gender;?></td>
        <td><?=$user->city;?></td>
      </tr>
       <?php endforeach; ?>
    </tbody>
  </table>
  <ul>
    <li><a href="form.html">Insert More Data</a></li>
  </ul>
</div>

</body>
</html>
