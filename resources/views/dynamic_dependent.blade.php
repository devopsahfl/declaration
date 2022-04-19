<!DOCTYPE html>

<head>
  <title>Declaration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 
  <style type="text/css">
    .leftside,
    .rightside {
      height: 100%;
      background-size: 100%;

    }

    .form-wrap {
      height: 100vh;
      display: flex;
    }

    .leftside {
      background-color: #00237d;
      justify-content: center;
    }

    .rightside {
      background: white;
    }

    @media screen and (max-width:1000px) {
      .form-wrap {
        flex-direction: column;
        height: auto;
      }
    }
  </style>
</head>

<body>
  <form action="sendOtp" method="POST">
    <div class="no-gutters form-wrap">
      <div class="col-lg-6 col-md-12 no-gutters">
        <div class="leftside d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20" style="padding-top:90px;">
          <a href="{{url('/')}}" class="py-9"><img src="files/logo.png" class="h-70px"></a>
          <h2 class=" fw-bolder fs-2qx pb-5 pb-md-10 form-title" style="color: #ffffff;">Welcome to Channel Partner Panel</h2>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 no-gutters">
        <div class="rightside d-flex justify-content-center align-items-center">

          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
            <H4 style="color:Red;"><b><u class="form-heading">ENTER YOUR REGISTERED MOBILE NUMBER</u></b></H4><br><br>
              <label class="form-label" for="contact_number"> MOBILE NUMBER</label>
              <input type="text" name="contact_number" id="contact_number" class="form-control form-control-lg form-control-solid"></select><br>

              <button type="submit" id="sendotp" class="btn btn-primary">Send OTP</button>
            </div>
            {{ csrf_field() }}
            <br />
            <br />

          </div>


          <!-- </div> -->
        </div>

    </div>
  </form>

@include('sweetalert::alert')

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>

  window.onload = function() {
    var master = document.getElementById("master").value;

    console.log("master", master);

    dataObj = JSON.parse(master);

    console.log("clicked");
    var select = document.getElementById("type");
    var lookup = {};
    var items = dataObj;
    var result = [];

    for (var item, i = 0; item = items[i++];) {
      //item.probCategory='Request'; 
      var type = item.type;

      if (!(type in lookup)) {
        lookup[type] = 1;
        result.push(type);

      }



    }
    //document.getElementById("probCategory").innerHTML = result;
    console.log("DATA", result);
    select.innerHTML = "";
    select.innerHTML += "<option>--Choose Option--</option>";
    for (var i = 0; i < result.length; i++) {
      var opt = result[i];
      select.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";
    }




  }

  function getpartner_code() {
    var type = document.getElementById("type").value;
    console.log(type);
    console.log("second");
    var result = [];
    var lookup = {};

    var found = dataObj.filter(function(item) {
      return item.type === type;
    });
    var setPartner_code = document.getElementById("partner_code");
    setPartner_code.innerHTML = "";
    setPartner_code.innerHTML += "<option>--Choose Option--</option>";


    console.log(found);


    var lookup = {};
    var items = found;
    var result = [];
    for (var item, i = 0; item = items[i++];) {
      //item.probType='Loan'; 
      var name = item.partner_code;

      if (!(name in lookup)) {
        lookup[name] = 1;
        result.push(name);
      }
      // setProbType.innerHTML += "<option value=\"" + result + "\">" + result+ "</option>";
    }



    setPartner_code.innerHTML = "";
    setPartner_code.innerHTML += "<option>--Choose Option--</option>";
    for (var i = 0; i < result.length; i++) {
      var opt = result[i];
      setPartner_code.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";
    }

  }
  // -----------------------------------------------------------------------------------------------------------
  function getContact_number() {
    var type = document.getElementById("type").value;
    console.log(type);
    var partner_code = document.getElementById("partner_code").value;
    console.log(partner_code);

    var result = [];
    var lookup = {};
    var found = dataObj.filter(function(item) {
      return (item.type === type && item.partner_code === partner_code);
    });
    var setContact_number = document.getElementById("contact_number");
    setContact_number.innerHTML = "";
    setContact_number.innerHTML += "$contact_number";

    console.log("setContact_number found", found);

    var lookup = {};
    var items = found;
    var result = [];
    for (var item, i = 0; item = items[i++];) {
      var name = item.contact_number;

      if (!(name in lookup)) {
        lookup[name] = 1;
        result.push(name);
      }
      setContact_number.value = result;
    }

  }

  //--------------------------------------------------------------------------------------------------------------     
</script>