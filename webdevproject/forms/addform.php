<!DOCTYPE html>
<html>
<head>
    <title>Add Subject</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        table {
            width: 100%;
        }
        table tr {
            margin: 10px;
        }
        table td {
            padding: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left:80px;
        }
        a {
            text-decoration: none;
            margin-left:480px;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .space{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Add Subject</h1>
    <a href="../index.php">Home</a>
    <div class="space"></div>
    <div class="container">
        <form action="../functions/add.php" method="post" name="form1">
            <table style="border:0;">
                <tr>
                    <td>Subject Code</td>
                    <td><input type="text" name="code"></td>
                </tr>
                <tr>
                    <td>Subject Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
