
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Sign Up</title>
    <style>
        .signupForm{
            /* border: 5px solid; */
            background-image: url('/images/form-background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            /* border-radius: 5px; */
            display: flex;
            justify-content: center;
        }

        .title{
            color: #28a745;
            padding-top: 1.25rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 900;
        }

        .input-container{
            padding-top: 10px;
            padding-left: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 500;
        }

        .label{
            color: #28a745;
            font-weight: 600;
        }

        .textonly{
            color: #28a745;
            padding-top: 10px;
            font-weight: 500;
        }

        .header{
            padding-top: 3.5rem;
            color: white;
            background-color: black;
            display: flex;
            justify-content: center;
        }

        .moto{
            justify-content: center;
            font-weight: 900;
        }

        .jumbotron{
            margin-bottom: 0;
        }

        .footer-gym{
            background-color: black;
        }

        .footer-row{
            padding-top: 1.25rem;
            justify-content: space-between;
        }

        .footer-heading{
            color: white;
        }

        .footer-paragraph{
            color: white;
        }

        .footer-links{
            color: white;
            text-decoration: none;
        }

        .footer-links:hover{
            color: white;
            font-weight: 500;
        }

        .footer-bottom{
            display: flex;
            justify-content: center;
        }

        .footer-button{
            max-width: 100px;
            padding-top: 1rem;
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
    <x-header />
    <x-jumbotron />
<!-- <x-carousel /> -->

    <div class="signupForm">
        <form action="gymCustomer" method="post" class="form">

            <h1 class="title">Become a Member</h1>

            @csrf

            <div class="form-group">
                <label class="label" for="first_name">First name:</label>
                <input class="form-control" type="text" id="first_name" name="first_name" value="" required>
            </div>

            <div class="form-group">
                <label class="label" for="last_name">Last name:</label>
                <input class="form-control" type="text" id="last_name" name="last_name" value="">
            </div>

            <div class="form-group">
                <label class="label" for="email">Email:</label>
                <input class="form-control" type="email" id="email" name="email" value="" required>
            </div>

            <div class="form-group">
                <label class="label" for="phone_number">Phone Number:</label>
                <input class="form-control" type="tel" id="phone_number" name="phone_number" placeholder="9999-99-9999" pattern="[0-9]{4}-[0-9]{2}-[0-9]{4}" required>
                <span class="textonly">Please follow the format! ( xxxx-xx-xxxx )</span>
            </div>

            <div class="form-group">
                <label class="label" for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            
            <div class="form-group">
                <label class="label" for="age">Age:</label>
                <input class="form-control" type="text" id="age" name="age" value="" required>
            </div>
            
            <div class="form-group">
                <label class="label" for="password">Password:</label>
                <input class="form-control" type="password" id="password" name="password" value="" required>
                <span class="textonly">Create a strong Password</span>
            </div>

            <div class="form-group">
                <label class="label" for="reason">Main Concern:</label>
                <select class="form-control" name="reason" id="reason" required>
                    <option value="Body Building">Body Building</option>
                    <option value="Yoga">Yoga</option>
                    <option value="Weight Loss">Weight Loss</option>
                </select>
            </div>

            <input class="btn btn-outline-success" type="submit" value="Sign up">
        </form>
    </div>
    <x-footer />
</body>
</html>