<?php  include('inc/header.php'); ?>

    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New User</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border">
            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" >
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
         
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
<?php  include('inc/footer.php'); ?>

 
  