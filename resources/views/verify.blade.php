<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstarp.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<style>
  .center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    justify-content: center;
    align-items: center;
    max-width: 100%;
  }

  body {
    background-image: url('files/tp.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }

  /* .btn-outline-primary{
    background-color:green;
   } */
  @media only screen and (max-width: 600px) {
    .form-control {
      width: 300px;
      height: 45px;
    }

    .submit-wrap {
      justify-content: center;
    }
  }
  .row{
    color:red;
  }
</style>  

<div class="center justify-content-center text-align-center">

  <form action="verifyOtp" method="POST">
    @csrf

    <div class=" row" style="text-size-adjust:auto;">
      <input type="text" id="codeotp" name="codeotp" class="invisible" value={{$otp}}>
    </div>

    <div class="row justify-content-center">
      <h1 for="enterOtp" style="text-align-center">ENTER OTP</h1>
    </div>
    <br>

    <div class="row">
      <input type="text" id="userotp" name="userotp" style="text-align:center" class="form-control border border-danger shadow" maxlength="6" required style="width:500px;align-items:center;">
    </div>
    <br>

    <div class="row submit-wrap">
      <br>
      <button type="submit" class="btn btn-outline-primary" style="width:250px;align-items:center;text-align:center;" onClick="function()">Submit</button>
    </div>




  </form>


</div>
</body>
</html>