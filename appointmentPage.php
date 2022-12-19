<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment</title>
    <link rel="stylesheet" type="text/css" href="css/appointment.css">
</head>
<body>
    <form action="appointment.php" method="POST">
        <div class="home">
            <div class="form-box">
                <h2>appointment </h2>
        <label> Doctor name:</label>
                <label for="docName"></label><input name="docName" id="docName" placeholder="doctors name"> <br>

        <label> Patient name:</label>

                <label for="patName"></label><input name="patName" id="patName" placeholder="patient name"><br>
        <label>Date:</label>
                <label for="date"></label><input name="date" id="date" placeholder="appointment date">
        <button type="submit" class="submit-btn">Submit</button>
        </div>
        </div>
    </form>
</body>
</html>
