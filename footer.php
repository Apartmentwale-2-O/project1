 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
<!----------------------- Modal for Signup--------------------------------->

<div class="modal fade mt-5 ml-md-5 col-md-" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      
      <div class="d-flex justify-content-center my-2"><i class="fa fa-rebel fa-3x" ></i></div>
        <h3 class="mb-5" style="text-align:center;">Welcome to the Dark</h3>
        
        <form>
          <input type="hidden" name="signupActive" id="signupActive" value="0">
           <div class="form-group mx-5">
                    <input type="text" class="form-control" id="username" placeholder="Username" >
                </div>
          <div class="form-group mx-5">
            <input type="email" class="form-control" id="email" placeholder="Email address" aria-describedby="emailHelp">
          </div>
          <div class="form-group my-2 mx-5">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group form-check mx-5 mt-3">
            <input type="checkbox" class="form-check-input" id="signupCheckbox">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <div class="btn-block my-4 mx-5">
              <button type="button" id="signupButton"  class="btn btn-primary ">Signup</button> 
          </div>
        </form>
        <span class="float-right" style="color:white; cursor:pointer;" data-dismiss="modal">skip for now</span>
        
      </div>
     
    </div>
  </div>
</div>
<!-------------------------------End of Modal for Signup--------------------------------->



<!--------------------------------Modal for Login--------------------------------->

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Welcome to Dark</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
           <div class="form-group mx-5">
                    <input type="text" class="form-control" id="emailusername" placeholder="Username/Email" >
                </div>
          <div class="form-group my-2 mx-5">
            <input type="password" name="loginpassword" class="form-control" id="loginpassword" placeholder="Password">
          </div>
          <div class="form-group form-check mx-5 mt-3">
            <input type="checkbox" class="form-check-input" id="signupCheckbox">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <div class="btn-block my-4 mx-5">
              <button type="button" id="loginButton" class="btn btn-primary ">Login</button> 
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-------------------------------End of Modal for login--------------------------------->

<script> 
     $("#signupButton").click(function(){
         $("#signupActive").val("1");  // make this value 0 again when clicked on logout button
         $.ajax({
            type: "POST",
            url: "actions.php?action=signup",
            data:"email=" + $("#email").val() + "&password=" + $("#password").val()+ "&username=" + $("#username").val() + "&signupActive=" + $("#signupActive").val(),
            success: function(result) { 
                    window.location.assign("https://heisenbergg.000webhostapp.com/");
            }

        });
        
     });
     

$("#loginButton").click(function(){
    
    $.ajax({
            
            type: "POST",
            url: "actions.php?action=login",
            data:"emailusername=" + $("#emailusername").val() + "&loginpassword=" + $("#loginpassword").val()+ "&signupActive=" + $("#signupActive").val(),
            success: function(result) { 
                    window.location.assign("https://heisenbergg.000webhostapp.com/");
            }

        });
    
    });
</script>
