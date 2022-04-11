
@if(Session::has('warning'))
<script>
swal("Invalid OTP!", "Ensure that you have entered correct OTP!", "warning")
});

</script>
@endif

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstarp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<script>
swal("Invalid OTP!", "Ensure that you have entered correct OTP!", "warning");

</script>

<!-- <script>
swal("Successfully Sent!", "OTP sent on your registered mobile number", "success");

</script> -->

<style>

.center{
  position: absolute;
  top:50%;
  left: 50%;
  transform: translate(-50% , -50%);
  justify-content:center;
  align-items:center;
}

body{
                background-image: url('files/dhachik.jpg');
                background-repeat: no-repeat;
                 background-attachment: fixed;
                 background-size: cover;
   }
   .btn-outline-primary{
    background-color:green;
   }
</style>
 <div class="center p-4 ml-2 border border-sucess">

<form action="verifyOtp" method="POST">
                  @csrf

                  <div class=" row justify-content-center">
                  <input type="text"  id="codeotp"name="codeotp" class="invisible" value={{$otp}} >
                </div>
                <div  class="flex">
					        <div class="enter_otp"></div>
					        <h1 class="text-danger text-center">ENTER OTP</h1>
                <div class="row">
                <br>
                  <input type="text"  id="userotp"name="userotp" class="form-control border border-danger shadow" style="align-item:center" maxlength="6" required >
                </div>
<br>
             <div class="row  justify-content-center">
                 <br>
                <button type="submit" class="btn btn-outline-primary" style="width:250px;align-items:center;text-align:center ;color:white;" onClick="function()">Submit</button>
            </div>


</div>
             

            </div>
</form>

</div>
<script>
</script>
