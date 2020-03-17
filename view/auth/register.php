<div class="card-header">Register</div>
<div class="card-body">
	<form id="proses_login" method="post">
        <div id="notifikasi" class="alert alert-info">

        </div>
        <input type="hidden" name="_token" value="<?=token()?>">
		<div class="form-group row">
			<label for="email_address" class="col-md-4 col-form-label text-md-right">Full Name</label>
			<div class="col-md-6">
				<input type="text" id="name" class="form-control" name="name" autofocus="">
			</div>
        </div>
        <div class="form-group row">
			<label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
			<div class="col-md-6">
				<input type="text" id="email" class="form-control" name="email" required="" autofocus="">
			</div>
		</div>

		<div class="form-group row">
			<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
			<div class="col-md-6">
				<input type="password" id="password" class="form-control" name="password" required="">
			</div>
        </div>
        <div class="form-group row">
			<label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
			<div class="col-md-6">
				<input type="password" id="confirmpassword" class="form-control" name="confirmpassword" required="">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-md-6 offset-md-4">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember"> Remember Me
					</label>
				</div>
			</div>
		</div>

		<div class="col-md-6 offset-md-4">
			<span id="submit" class="btn btn-primary">
				Register
			</span>
			<a href="#" class="btn btn-link">
				Forgot Your Password?
			</a>
		</div>
	</form>
</div>

<script type="text/javascript">
	$(document).ready(function(){
        $('#notifikasi').hide();
		$("#submit").click(function(){
			var data = $('#proses_login').serialize();
			$.ajax({
				type: 'POST',
				url: "../controller/register.php",
				data: data,
				success: function(data) {
                    if(data=='ok'){
                        window.location.assign("login?page=login")
                    }else{
                        $('#notifikasi').show();
                        $('#notifikasi').html(data);
                        //alert(data);
                    }
                    
				}
			});
           
		});
	});
</script>