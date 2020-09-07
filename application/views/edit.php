<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
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
    <h3>Edit User</h3>
        <form method = "POST" name = "updateUser" action="<?php echo base_url().'index.php/user/edit/'.$user['id'];?>">            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name = "username" value = "<?php echo set_value('username',$user['username']) ?>" class= "form-control">  
                        <?php //echo form_error('username') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name = "password" value = "<?php echo set_value('password',$user['password']) ?>" class= "form-control">  
                        <?php //echo form_error('password') ?>
                    </div>

                    <div class="form-group">
                        <button class = "btn btn-primary">Update</button>
                        <a href="<?php echo base_url().'index.php/user/index'?>" class = "btn btn-warning">List</a>
                    </div>
                </div>
            </div> 
        </form>
    </div>
</body>
</html>