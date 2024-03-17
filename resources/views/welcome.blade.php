<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e6cdcd;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <main>
        <form method="post" action="{{ url('/') }}">
    @csrf <!-- Include CSRF token -->>
            <h1>Enter the details</h1>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" required><br>
            <input type="submit" value="Submit">
        </form>
        
    </main>
    <?php
    // PHP code starts here
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $address = $_POST['address'];
       

        // Outputting submitted data
        echo "<p>Submitted Data:</p>";
        echo "<p>Name: $name</p>";
        echo "<p>address: $address</p>";
        
    }
    ?>

</body>
</html>