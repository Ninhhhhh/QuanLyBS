@extends('admin.layouts.Login')

@section('login')
<div class="row align-items-center">
    <div class="row align-items-center">
        <div class="col-md-6 d-none d-md-block">
            <img class="img-fluid" src="{{ asset('admin-assets/assets/images/others/sign-up-2.png') }}" alt="">
        </div>
        <div class="m-l-auto col-md-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="m-t-20">Sign In</h2>
                    <p class="m-b-30">Enter your credential to get access</p>
                    <form action="" method="post" id="addAccount" name="addAccounts">
                        <div class="form-group">
                            <label class="font-weight-semibold" for="userName">Username:</label>
                            <input type="text" class="form-control" id="userName" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                <div class="checkbox">
                                    <input id="checkbox" type="checkbox">
                                    <label for="checkbox"><span>I have read the <a href="#">agreement</a></span></label>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customJs')
<script>
    $('#addAccount').submit(function(event){
        event.preventDefault();
        var element = $(this);
        $.$.ajax({
            url: '{{ route("admin.store") }}',
            type:'post',
            data: element.serializeArray(),
            datatype:'json',
            success: function (response) {
                
            }, error:function(jqXHR, exception){
                console.log('Something went wrong');
            }
        });
    });

</script>
@endsection