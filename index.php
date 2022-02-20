<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <br>

    <div class="container">
        <h2>Create Data</h2>

        <p>Click the button to put data</p>

        <a class="btn btn-primary" href="create.php">Add Data</a>

        <br>


        <?php
        //database connection
        include 'connection.php';

        $sql = "SELECT id,name,email,website,comment,age FROM testtable";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row

            echo "<table class='table table-bordered table-striped'>
     <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Wbsite</th>
     <th>Comment</th>
     <th>Age</th>
     <th>Action</th>
     </tr>";

            $counter = 1;
            while ($row = $result->fetch_assoc()) {



                echo "<tr>
        <td>{$counter}</td>   
 
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['website']}</td>
        <td>{$row['comment']}</td>
        <td>{$row['age']}</td>
        <td>
           <a class='btn btn-primary' href='edit.php?editid={$row['id']}'>Edit</a>
            <a class='btn btn-danger' href='delete.php?deleteid={$row['id']}'>Delete</a>
        </td>

        <td></td>
     </tr>";
                $counter = $counter + 1;
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();




        ?>
    </div><br>
</body>

</html>