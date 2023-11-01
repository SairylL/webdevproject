<?php
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>
<!DOCTYPE html>
<html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
        }
        a {
            text-decoration: none;
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 20px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #0056b3;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e0e0e0;
        }
        .delete-link {
            color: #ff0000;
        }
    </style>
    <head>
        <title>Sample CRUD</title>
    </head>
    <body>
        <h1>My Subjects</h1>
        <a href="forms/addform.php" style="margin-left: 920px;">Add Subject</a><br/><br/>
        <table>
            <tr style="background:#CCCCCC;">
                <th>ID</th>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Action</th>
            </tr>
            <?php
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$res['Subject_ID']."</td>";
                    echo "<td>".$res['Subject_Code']."</td>";
                    echo "<td>".$res['Subject_Name']."</td>";
                    echo "<td>
                            <a href=\"forms/editform.php?id={$res['Subject_ID']}\">Edit</a> |
                            <a href=\"functions/delete.php?id={$res['Subject_ID']}\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
                          </td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
