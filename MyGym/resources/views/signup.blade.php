<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    
    <div class="signupForm">
        <form action="gymCustomer" method="post" class="form">

            <h1 class="title">Become a Member</h1>

            @csrf

            <div class="input-container">
                <label class="label" for="first_name">First name:</label>
                <input class="input" type="text" id="first_name" name="first_name" value="" required>
            </div>

            <div class="input-container">
                <label class="label" for="last_name">Last name:</label>
                <input class="input" type="text" id="last_name" name="last_name" value="">
            </div>

            <div class="input-container">
                <label class="label" for="email">Email:</label>
                <input class="input" type="email" id="email" name="email" value="" required>
            </div>

            <div class="input-container">
                <label class="label" for="phone_number">Phone Number:</label>
                <input class="input" type="tel" id="phone_number" name="phone_number" placeholder="9999-99-9999" pattern="[0-9]{4}-[0-9]{2}-[0-9]{4}" required>
            </div>

            <div class="input-container">
                <label class="label" for="gender">Gender:</label>
                <select name="gender" id="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            
            <div class="input-container">
                <label class="label" for="age">Age:</label>
                <input class="input" type="text" id="age" name="age" value="" required>
            </div>
            
            <div class="input-container">
                <label class="label" for="password">Password:</label>
                <input class="input" type="password" id="password" name="password" value="" required>
            </div>

            <div class="input-container">
                <label class="label" for="reason">Main Concern:</label>
                <select name="reason" id="reason" required>
                    <option value="Body Building">Body Building</option>
                    <option value="Yoga">Yoga</option>
                    <option value="Weight Loss">Weight Loss</option>
                </select>
            </div>

            <input class="submitBtn" type="submit" value="Sign up">
        </form>
    </div>
</body>
</html>