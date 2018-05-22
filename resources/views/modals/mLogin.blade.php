<div id="modalLogin" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div>
                    <h3 class="panel-title text-center">
                        <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                        Sign In
                    </h3>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="/processLogin">
                {{ csrf_field() }}
                    <div class="" > <!--panel-body style="padding:20px"-->
                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="email" name="email" id="signUpEmail" class="form-control" required maxlength="40">
                        </div>

                        <div class="form-group">
                            <label for="synopsis">Password</label>
                            <input type="password" name="password" id="password" class="form-control"/>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" > <!-- style="padding:8px 100px;margin-top:25px;" form-group  -->
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="text-align:center">
                Don't have an account? <a href="/registrarse">Sign Up</a>
            </div>
        </div>
    </div>
</div>
