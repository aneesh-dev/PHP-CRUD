<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/cosmo/bootstrap.min.css" type="text/css">
</head>

<body>
    <div class="row">
        <div class="row">
            <div class="col-md-12 jumbotron text-center">
                <h1>Edit Employee Details</h1>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3 well">
            <?php
            $myId = $_GET['id'];
            include('./dbconfig/dbconnect.php');
            $sql = "SELECT * FROM enquiry WHERE id=$myId";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <form method="post" action="update.php" autocomplete="off">
                        <input type="number" name="id" value="<?php echo $myId; ?>" hidden>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="number" name="mobile" id="mobile" value="<?php echo $row['mobile']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" value="<?php echo $row['address']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="text" name="salary" id="salary" value="<?php echo $row['salary']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" name="updateEnquiry" class="btn btn-info">
                        </div>
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>