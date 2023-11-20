<?php session_start();?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Shamsul Islam Rana</title>
    
</head>


<?php 

$conn = new mysqli('localhost', 'root','' ,'cse309');

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql='SELECT * FROM contact_me';
$result=$conn->query($sql);
$conn->close();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $data[]=$row;
  }
} else {
  echo "0 results";
}



?>



<!-- ABOUT SECTION -->
<section class="about" id="about">
  <div class="max-width">
    <h2 class="title">Contact With Me Request</h2>
      
  </div>
  <div class="col-md-12 col-sm-12">
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>SL. NO</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <?php $sl=1; foreach ($data as $key => $value) { ?>
        <tr>
          <td><?php echo $sl++;  ?></td>
          <td><?php echo $value['first_name'].' '.$value['last_name'];  ?></td>
          <td><?php echo $value['phone'] ; ?></td>
          <td><?php echo $value['email'] ; ?></td>
          <td><?php echo $value['subject'] ; ?></td>
          <td><?php echo $value['message'] ; ?></td>
        </tr>
      <?php } ?>
      </tbody>
      
    </table>
    
  </div>
</section>







 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- FOOTER SECTION -->
<footer style="position : absolute;bottom : 0;width: 100%; ">
  <span>Created By
    <a href="https://github.com/sirsheikh" target="_blank"><span class="fab fa-github"></span> Shamsul Islam Rana</a>
    </span>
</footer>
<script type="text/javascript" src="js.js"></script>