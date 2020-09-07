<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class = "navbar-brand">
                CRUD Application
            </a>
        </div>   
    </div>
    <div class="container">
        <h3>View Users</h3>
        <a href="<?php echo base_url().'index.php/user/create'?>" class = "btn btn-primary">Add User</a>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class = "table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        if(!empty($users)) {
                            foreach($users as $user){
                        
                    ?>
                    <tr>
                        <td><?php
                            echo $user['id']
                        ?></td>
                        <td><?php
                            echo $user['username']
                        ?></td>
                        <td><?php
                            echo $user['password']
                        ?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/edit/'.$user['id'] ?>" class = "btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/delete/'.$user['id'] ?>" class = "btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                            } } else {
                    ?>
                    <tr>
                        <td colspan='5'>
                            Records not found 
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>