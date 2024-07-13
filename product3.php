<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="margin: 50px;">
    <h1>List of Registered user's</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <td>name</td>
                <td>email</td>
                <td>pass</td>
                <td>cpass</td>
                <td>user_type</td>
            </tr>
        </thead>
        <?php
        $severname="localhost";
        $username="root";
        $password="";
        $database="contact_db";

        $conn=new mysqli($severname,$username,$password,$database);

        if($conn->connect_error){
            die("Connecion failed: " . $conn->connect_error);
        }


        // read all the  vegetable name

        $sql="SELECT * FROM user_form";
        $result = $conn->query($sql);


        


        while($row=$result->fetch_assoc()){
         echo"   <tr>
            <td>" . $row["name"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["pass"] . "</td>
            <td>" . $row["cpass"] . "</td>
            <td>" . $row["user_type"] . "</td>
        </tr>";

        }


        ?>

       
    </table>

</body>
</html>