<!DOCTYPE html>
<html>

<head>
    <title>User Information Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">

    <style>
        body {
            background-color: white;
        }

      

        form {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 5px;
            /* width: 300px; */
            margin: 0 auto;
        }

        label {
            /* display: inline-block; */
            /* width: 100px; */
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="file"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #DAA624;
            color: #FFFFFF;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body class="flex flex-col justify-center items-center">
    <h2>User Information Form</h2>
    <form action="process_form.php" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-2">
            <div>

                <label for="name">Name:</label>
                <input type="text" name="name" required><br><br>
            </div>
            <div>

                <label for="linkedin">LinkedIn:</label>
                <input type="text" name="linkedin"><br><br>
            </div>
            <div>

                <label for="twitter">Twitter:</label>
                <input type="text" name="twitter"><br><br>
            </div>
            <div>

                <label for="github">GitHub:</label>
                <input type="text" name="github"><br><br>
            </div>
            <div>

                <label for="facebook">Facebook:</label>
                <input type="text" name="facebook"><br><br>
            </div>
            <div>

                <label for="instagram">Instagram:</label>
                <input type="text" name="instagram"><br><br>
            </div>
            <div>

                <label for="phone">Phone Number:</label>
                <input type="text" name="phone"><br><br>
            </div>
            <div>

                <label for="profile_image">Profile Image:</label>
                <input type="file" name="profile_image"><br><br>
            </div>
        </div>

        <input type="submit" value="Submit">
    </form>
</body>

</html>