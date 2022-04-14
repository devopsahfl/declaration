
<!DOCTYPE html>
<head>
    <title>Declaration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .leftside, .rightside{
        height:50vh;
        width:100%;
    }

    @media screen and (min-width:768px) 
    {
      .leftside, .rightside{
        height:100vh;
    }
      
    }


    .leftside{
      /* background: red; */
      
      background:url("files/dhachik.jpg") no-repeat fixed center;
    }
    .rightside{
      /* background:blue; */
      background:url("files/white.png") no-repeat fixed center;
    }
  </style>
</head>
<body >
<!-- <div class="logo" style="padding-top:5px;padding-left:70px;padding-bottom:3px;">
    <div class="form-inline">
    <a href="{{url('/')}}"><img  src="files/logo.png"></a>
    </div>
</div> -->
<style>
  
@media screen and (max-width: 992px) {
  .mainbar {
   
  }
}
  </style>
 <div class="container  p-4 ml-2  border-sucess" style=" margin-top: 10px; justify-content:center;">
                  <textarea style="display:none;" id="master" name="master">{{$country_list}}</textarea>

  <form action="sendOtp" method="POST">
<div class="row no-gutters">
  <div class="col-lg-6 col-md-12 no-gutters">
    <div class="leftside">

    </div>
  </div>

  <div class="col-lg-6 col-md-12 no-gutters">
    <div class="rightside d-flex justify-content-center align-items-center">
      <div class="row-lg-12 row-md-12 row-md-12">

                    <div class="mainbar">
                        <h3 style="margin-left:50px;" ><b>Channel Partner Details</b></h3><br />
                    </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                          
                          <label for="type">TYPE</label>
                          <select name="type" id="type" class="form-control input-lg dynamic" data-dependent="partner_code" onChange="getpartner_code()">
                          <option disabled="disabled" value="Selected">Select Type</option>

                          </select>
            </div>
                    <br />
            <div class="form-group">
                      <label for="partner_code">PARTNER CODE</label>
                      <select name="partner_code" id="partner_code" class="form-control input-lg dynamic" data-dependent="contact_number" onChange="getContact_number()">
                      </select>
            </div>
                    <br />
                    <!-- <div class="form-group">
                      <select  type ="text" name="contact_number" id="contact_number" class="form-control input-lg"  aria-expanded="false" readonly></select>
                    </div> -->
            <div class="form-group">
                    <label for="contact_number"> MOBILE NUMBER</label>
                    <input  type ="text" name="contact_number" id="contact_number" class="form-control input-lg"></select><br>
                    
                    <button type="submit" id="sendotp" class="btn btn-primary">Send OTP</button>
            </div>
                    {{ csrf_field() }}
                    <br />
                    <br />
          
          </div>

      </div>         
    </div>
  </div>

</div>
  </form>
  
  

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
      // var master =document.getElementById("master").value;

      // console.log("master",master);
        
      //  dataObj = JSON.parse(master);

      window.onload = function() {
        var master =document.getElementById("master").value;

        console.log("master",master);
          
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
          console.log("DATA",result);
          select.innerHTML = "";
          select.innerHTML += "<option>--Choose Option--</option>";
          for(var i = 0; i < result.length; i++) {
              var opt = result[i];
              select.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";
          }




        }

        function getpartner_code()
        {
            var type = document.getElementById("type").value;
            console.log(type);   
            console.log("second"); 
            var result = []; 
            var lookup = {};
            
            var found = dataObj.filter(function(item) { return item.type === type; });
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
            for(var i = 0; i < result.length; i++) {
                var opt = result[i];
                setPartner_code.innerHTML += "<option value=\"" + opt + "\">" + opt+ "</option>";
            }

        }
// -----------------------------------------------------------------------------------------------------------
function getContact_number()
      {
            var type = document.getElementById("type").value;
            console.log(type);  
            var partner_code = document.getElementById("partner_code").value;
            console.log(partner_code); 

            var result = []; 
            var lookup = {};
            var found = dataObj.filter(function(item) { return (item.type === type && item.partner_code === partner_code); });
            var setContact_number = document.getElementById("contact_number");
            setContact_number.innerHTML = "";
            setContact_number.innerHTML += "$contact_number";

            console.log("setContact_number found",found);

            var lookup = {};
            var items = found;
            var result = [];
            for (var item, i = 0; item = items[i++];) {
            var name = item.contact_number;

            if (!(name in lookup)) {
            lookup[name] = 1;
            result.push(name);
            }
            setContact_number.value=result;
            }

      }

//--------------------------------------------------------------------------------------------------------------     
            </script>
    