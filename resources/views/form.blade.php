
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agreement Policies</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha512-hAFMASi3RewTdcR5m7meVmbFAwEu+2t9oXGrckvHgW5ozmKpk7AIfOM9Y/DfdKvfVMTZB6cwXpCBPeIyaCqT2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> -->


    <style>
            .container{
                padding:30px;
                
                

            }
            h3{
                text-align:center;
                color: Black;
            }
            .row{
                padding-right: 400px;
                padding-left:  400px;
            }
            .col{
                position: relative;
                left: 150px;
                color:black;
            
            }
            .col-1{
                display: flex;
                justify-content: center; 
            }
            
            .btn:hover {
            background-color: #008CBA;
            color: white;
            }
        
            .details{
                margin-top:40px;
            margin-left: 100px;
            }
            body{
                background-image: url('files/dhachik.jpg');
                background-repeat: no-repeat;
                 background-attachment: fixed;
                 background-size: cover;
   }
    </style>
</head>
<body>
    <h3><b><u>Code of Conduct for Aadhar Mitra (AM), Mahila Aadhar Mitra (MAM) and Direct Selling Agent (DSA)</u></b></h3>


     <div class="details">
     <h4><b>TYPE:-</b> {{$type}}</h4>
     <h4><b>PARTNER CODE:-</b> {{$partner_code}}</h4>
     <h4><b>MOBILE NUMBER:-</b> {{$mobileNumber}}</h4>
        </div>



    <form action="save" method="POST">
    @csrf
    <div class="container">
        <embed src="files/codeOfConduct.pdf" type="application/pdf" width="100%" height="600px">
    </div>
            <!-- <div class="row"> -->
            <div class="col">
         
                <p><input type="checkbox" id="checkbox" required name="terms"><b>I hereby<u> declare and confirm that I have read, understood and agree to abide by the DSA Code of Conduct, Anti-Corruption, Anti Money Laundering,<p> KYC and social media Policy of Aadhar Housing Finance Ltd. I further confirm that the same has been explained to my employees.<p></u></p></b>
                        
            </div></br>
                <div class="col-1">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                </div></br></br>
        <!-- </div> -->
        </form>

        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
         crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js" 
        integrity="sha512-ENqEDq2o2Ho8dh8tkYjoJ8m7Xvyz8f1H8OCD2ub4b3HfZAxD+TahCpJombeLtO6+E9nLRFmktCN2LcroxZj3hg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <!-- <script>
        $('#submit').on('click', function(){
            console.log("submit");
            var data=$('#checkbox').val();

            console.log(data);

            if(data=='checkbox'){
                Swal.fire({
                title: 'Hello Its mina',
                type: 'success',
                showCloseButton: true
                })

            }

        })
    </script> -->
</body>
</html>