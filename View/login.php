<div style="color: #ffffff" >

    <form action="../Controllers/authenticate_user.php" method="post" >
        <div class="row" style="padding-top: 8px">
            <div class="col-md-4" style="text-align: center;">User Name</div>
            <div class="col-md-8"><input class="form-control" type ="text"  value="" name ="user_name" Required></div>
        </div>

        <div class="row" style="padding-top: 5px">
            <div class="col-md-4" style="text-align: center;">Password</div>
            <div class="col-md-8"><input class="form-control" type ="password"  value="" name ="password" Required></div>
        </div>

        <div class="row" style="padding-top: 10px">
            <div class="col-md-6" ></div>
            <div class="col-md-3"><button class="btn btn-outline-success form-control" type="submit">Log in</button></div>
            <div class="col-md-3"><button class="btn btn-outline-danger form-control" data-dismiss="modal">Cancel</button></div>
        </div>
    </form>

    <div class="row" style="padding-top: 15px">
        <div class="col-md-7" ></div>
        <div class="col-md-5" style=" text-align: right; font-size: 10pt"><a href="" style="color: red;">Forget my password!</a></div>
    </div>
</div>
