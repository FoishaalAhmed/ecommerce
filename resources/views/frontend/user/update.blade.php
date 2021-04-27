@extends('layouts.app')

@section('title', 'Profile Update')
@section('content')
    <div class="container-fluid" style="margin-bottom: 20px ;">
			<div class="dtl-2nd-nav">
				<div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
					<div class="container">
						<div class="row"
							style="text-align: center; padding-top: 10px; padding-bottom: 10px;margin: auto; ">
							<div class="col-12">
								<a href="{{URL::to('/')}}" style="text-decoration: none;color: black;">Home</a> /
								<a style="text-decoration: none;color: black;">Edite Profile</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!---MAIN CONTENT-->
		<div class="container">
			<section class="content">
				<div class="row">
					<div class="col-md-3">
						<!-- Profile Image -->
						<div class="box box-primary">
							<div class="box-body box-profile">
                                <form action="{{route('profile')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
								<img class="profile-user-img img-responsive img-circle" height="200px" width="100%" src="{{asset(auth()->user()->photo)}}" alt="User profile picture" id="user_photo">
								<h3 class="profile-username text-center">{{auth()->user()->name}}</h3>
								<input type="file" name="photo" onchange="readPicture(this);">
                            <br>
                            <center>
                                <button type="submit" class="btn btn-sm btn-info">Submit</button>
                            </center>
                        </form>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
					<!-- /.col -->
					<div class="col-md-9">
                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{{session('message')}}</strong>
                            </div>
                        @endif
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li style="margin-bottom: 25px;" class="active"><a
										style="text-decoration: none; color: black; padding: 2px; border: 1px solid red;"
										href="#activity" data-toggle="tab">Profile Info</a></li>
								<li style="padding-left: 20px;margin-bottom: 25px;"><a
										style="text-decoration: none; color: black; padding: 2px; border: 1px solid red;"
										href="#settings" data-toggle="tab">Password Change</a></li>
							</ul>
							<div class="tab-content" style="margin-top: 25px;">
								<div class="active tab-pane tbs " id="activity">
									<form action="{{route('profile.update')}}" class="form-horizontal" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{auth()->user()->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email"  value="{{auth()->user()->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" placeholder="Phone" name="phone" value="{{auth()->user()->phone}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" name="address" placeholder="Address" style="resize: vertical;">{{auth()->user()->address}}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane tbs " id="settings">
									<form action="{{route('password.change')}}" method="POST" class="form-horizontal">
                                @csrf
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputName" placeholder="Old Password" name="old_password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputName" placeholder="New Password" name="new_password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- /.nav-tabs-custom -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</section>
		</div>
        <script>
    // profile picture change
    function readPicture(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
    
          reader.onload = function (e) {
            $('#user_photo')
            .attr('src', e.target.result)
            .width(200)
            .height(200);
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    }
    
</script>
@endsection