@extends('layout')
  
@section('content')

<style>
    body{
        padding: 20px
    }
    .nnn{
        width: 300px;
        box-shadow: 1px 2px 3px rgba(66, 66, 66, 0.211), -1px 2px 3px rgba(66, 66, 66, 0.211),
        -1px -2px 3px rgba(66, 66, 66, 0.211), 1px -2px 3px rgba(66, 66, 66, 0.211);
        padding: 7px;
        border-radius: 7px;
        margin: 10px auto
    }
    button{
        margin: 8px;
    }
</style>
                      <form action="{{ route('login.post') }}" class="nnn" method="POST">
                          @csrf
                          <h5 align="center">Login</h5>
                          
                              <label>E-Mail Address</label>
                              
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                             
  
                          <br>
                              <label>Password</label>
                              
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
  
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                            
                                <div class="checkbox">
                                    <label>
                                        <a href="{{ route('forget.password.get') }}">Reset Password</a>
                                    </label>
                                </div>
                            
                          
                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>
                          
                      </form>
                        
                  
@endsection