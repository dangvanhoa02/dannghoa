<!DOCTYPE html>
<html>
<body>

<h1>UserForm.</h1>

<form action="/action_page.php" autocomplete="on">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <label for="email">phone:</label>
    <input type="phone" id="phone" name="phone"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3><center> Login Form</center></h3>

<div>
    <form action="/user/signin" method="get">
        @csrf
        <label for="name">FistName</label>
        <input type="text" id="name" name="firstname" placeholder="Your fistname..">

        <label for="email">lastName</label>
        <input type="text" id="lname" name="lname" placeholder="Your lastname..">

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone">

        <label>Gender
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
        </label>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
