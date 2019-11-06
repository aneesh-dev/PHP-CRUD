<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMS</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/cosmo/bootstrap.min.css" type="text/css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid text-center">
                    <h1>Employee Management System</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            session_start();
            if (isset($_SESSION['message'])) {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $_SESSION['message']; ?>
                </div>
            <?php
                unset($_SESSION['message']);
            }
            ?>
            <div class="row">
                <div class="col-md-12">
                    <button data-toggle="modal" data-target="#createModal" class="btn btn-info">Add Employee</button>
                    <br />

                    <table class="table table-responsive">
                        <br />
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <?php
                        include('./dbconfig/dbconnect.php');
                        $sql = "SELECT * FROM enquiry";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['mobile'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['salary'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="alert('Are you sure?');">
                                            <span class="glyphicon glyphicon-trash">
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<h3>No Employee Found</h3>';
                        }
                        ?>
                        <br />
                    </table>
                </div>
            </div>
        </div>
        <!--create modal-->
        <div id="createModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" class="close">&times;</button>
                        <h3 class="text-center modal-title">Add New Employee</h3>
                    </div>
                    <div class="modal-body">
                        <form action="create.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Mobile</label>
                                <input type="number" name="mobile" id="mobile" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status">Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status">Salary</label>
                                <input type="text" name="salary" id="salary" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Create" name="enquiry" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </div>
</body>

</html>