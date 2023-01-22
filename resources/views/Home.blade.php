<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apni Mandi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <style>
            #Usama{
                 animation: fadeIn 1s;
                }
   
            @keyframes fadeIn {
                0% { opacity: 0; transform: scale(.9,1.1)   translateY(-100px); }
                100% { opacity: 1; transform: scale(1,1)      translateY(0);}
                }
        </style>
    </head>
    <body class="antialiased">
        <!-- creating form -->

        <h5>Home Page:</h5>
      
            <div class="row mt-5">
            <div class="col-md-3">
                <button onclick="calculate()" class="btn btn-secondary"> Show</button>
            </div>
            <div class="col-md-6 bg-dark shadow-lg text-white p-3 d-none"  id="Usama"style="border-radius: 25px;">

                        <h5 class="text-center">Select Product</h5>
                        <div class="row mt-2" id="productDetails">
                        <div class="col-md-4">
                            <label for="firstName">First Name</label>
                            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" >
                        </div>
                        <div class="col-md-4" >
                            <label for="middleName">Middle Name</label>
                            <input type="text" name="middleName" id="middleName" class="form-control" placeholder="Middle Name" >
                        </div>
                        <div class="col-md-4">
                            <label for="lastName">last Name</label>
                            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" >
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Current Address" >
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="job">Job</label>
                            <input type="text" name="job" id="job" class="form-control" placeholder="Current Job" >
                        </div>
                        <div class="col-md-12 pt-3">
                            <span id="recommendedSize"></span>
                            <button class="btn btn-primary col-md-12 mt-3" onclick="calculate()">Calculate</button>
                        </div>
                 
                </div>




            </div>
            <div class="col-md-3"></div>
            </div>
       


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
            
        <script>
            function calculate() {
                document.getElementById('Usama').classList.remove('d-none');
            }
        </script>
   
   
    </body>
</html>
