<?php 

// $url = 'https://docs.google.com/forms/d/e/1FAIpQLSdsDdSUnQbO6fNZ0riQxXmSi3xb8tkVXQsCmJJx1-KIHPS_cg/formResponse';
// $data = array('entry.630789195' => 'from php 1');

// // use key 'http' even if you send the request to https://...
// $options = array(
//     'http' => array(
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($data)
//     )
// );
// $context  = stream_context_create($options);
// $result = file_get_contents($url, false, $context);
// if ($result === FALSE) { /* Handle error */ }

// var_dump($result);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Id card generator and mailer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-color: #E6F6F5; width: 98%" >
  <div class="row"> 
    <!-- navbar row -->
    <div class="col-4 text-center">
      <!-- search bar       -->
      <!-- search bar here -->
    </div>
    <div class="col-4 text-center" style="font-size: 28px; font-family: Royal King" >
      <b>CSI PCE</b>
      
    </div>
    <div class="col-4 text-center">
       <!-- something.. -->
    </div>
    <br>
    <br><br><br>
      <!-- big heading -->
      <div style="width: 100%; text-align: center;
      font-size: 50px; font-family: Poppins;">
            Get your CSI PCE <br><b>Volunteer ID</b> card immediately
      </div>
      <br><br><br><br><br><br><br><br>
        <div style="text-align: center; width: 100%;">
          <button style="background-color: black; width: 15%; color: white;" onclick="window.open('form.php', '_self')" type="button" class="btn btn-lg ">Get ID Card</button>
        </div>
        <!-- association -->
        <br><br><br>
        <div style="width: 100%; text-align: center;">
          In Association with
        </div>
        <!-- images here -->
        <div style="width: 100%; text-align: center;">
          <img src="1519864175311-removebg-preview 1.png">          
          <img src="636246618054799851_Mahatma_International_School__New_Panvel-removebg-preview 1.png">
        </div>
        <!-- footer -->
        <br><br><br><br><br><br><br>
        <div style="width: 100%">
          <div class="row">
          <div class="col-4 text-center" style="font-size: 18px; font-family: Poppins;border-left: 1px solid black;"><b>Freedom in Design</b>
            <p style="text-align: center; ">Choose from a variety of templetes,<br>or freely iterate the design to make<br> your card uniue</p>
          </div>

          <div class="col-4 text-center" style="font-size: 18px; font-family: Poppins;border-left: 1px solid black;"><b>Freedom in Design</b>
            <p style="text-align: center; ">Choose from a variety of templetes,<br>or freely iterate the design to make<br> your card uniue</p>
          </div>

          <div class="col-4 text-center" style="font-size: 18px; font-family: Poppins;border-left: 1px solid black;"><b>Freedom in Design</b>
            <p style="text-align: center; ">Choose from a variety of templetes,<br>or freely iterate the design to make<br> your card uniue</p>
          </div>
          
        </div>
        </div>
    
    
  </div>
  <!-- <img src="index.png" style="width: 100%;" > -->

  <!-- <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Generate Id card</a>
</nav>
<div class="container" style="padding: 10px;">
  <div class="row">
  <div class="col-6 my-auto">
    <form action = "sendData.php" action="GET">
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I have read and agree to <a href="">terms and conditions</a></label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  <div class="col-6">
    <div class="text-center">
     <img class="img-fluid" src="id_card.jpg" style="height: 600px;">
    </div>
  </div>
</div>
</div> -->
</body>
</html>
<script type="text/javascript">
//   function sendJSON() {
//     var data = {
//         "entry.630789195": "test email from javascript",
//     };

//     var json = JSON.stringify(data);

//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "https://cors-anywhere.herokuapp.com/https://docs.google.com/forms/d/e/1FAIpQLSdsDdSUnQbO6fNZ0riQxXmSi3xb8tkVXQsCmJJx1-KIHPS_cg/formResponse");
//     xhr.setRequestHeader("Content-Type", "multipart/form-data; boundary=<calculated when request is sent>");
//     // xhr.setRequestHeader("Access-Control-Allow-Origin", "https://docs.google.com/forms/d/e/1FAIpQLSdsDdSUnQbO6fNZ0riQxXmSi3xb8tkVXQsCmJJx1-KIHPS_cg/formResponse");
//     xhr.send({
//         "entry.630789195": "test email from javascript",
//     });
// }
// sendJSON();

// $.ajax({
//     url: 'https://docs.google.com/forms/d/e/1FAIpQLSdsDdSUnQbO6fNZ0riQxXmSi3xb8tkVXQsCmJJx1-KIHPS_cg/formResponse',
//     headers: {
//         'Content-Type': 'multipart/form-data; boundary=<calculated when request is sent>'
//     },
//     type: "POST", 
//     dataType: "json",
//     data: {
//       "entry.630789195": "test email from javascript",
//     },
//     success: function (result) {
//         console.log(result);
//     },
//     error: function () {
//         console.log("error");
//     }
// });
</script>