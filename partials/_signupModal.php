<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">SignUp to iDiscuss Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/forum/partials/_handleSignup.php" method="POST">
              <div class="modal-body">
                <div class="form-group">
                    <label for="signupInputEmail1">Username</label>
                    <input type="text" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="form-group">
                    <label for="signupInputPassword1">Password</label>
                    <input type="password" class="form-control" name="signupPassword" id="signupPassword">
                </div>
                <div class="form-group">
                    <label for="signupcInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="signupcPassword" id="signupcPassword">
                </div>
                <button type="submit" class="btn btn-primary">SignUp</button>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </form>
        </div>
    </div>
</div>