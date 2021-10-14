@extends('admin_muster')


<main>
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 mt-4">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Change password</h3></div>
                    <div class="card-body">

                        @if (session('success'))
                        <strong class="text-danger">{{ session('success') }}</strong>
                        @endif  
                        <br><br>
                        
                        <form method="POST" action="{{ route('update.password') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input  id="old_password" type="text" autocomplete="off" placeholder="change password"  class="form-control @error('old_password') is-invalid @enderror" name="old_password" value="{{ old('old_password') }}" required autocomplete="old_password" autofocus/>
                                <label for="old_password">Old password</label>

                                @if (session('error'))
                                    <strong class="text-danger">{{ session('error') }}</strong>
                                @endif


                                @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            

                            <div class="form-floating mb-3" style="margin-top:10px;">
                                <input id="new_password" type="text" class="form-control @error('new_password') is-invalid @enderror" autocomplete="off" name="new_password" required autocomplete="new-password">
                                <label for="inputPassword">New Password</label>
                                
                                @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
  
                            <div class="form-floating mb-3" style="margin-top:10px;">
                                <input id="Confrim_password" type="text" class="form-control @error('Confrim_password') is-invalid @enderror" autocomplete="off" name="Confrim_password" required autocomplete="Confrim-password">
                                <label for="inputPassword">Confrim Password</label>
                                
                                 @if (session('error_comfrom'))
                                <strong class="text-danger">{{ session('error_comfrom') }}</strong>
                                @endif  

                                @error('Confrim_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        
                           
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
              
                            </div>
                        </form>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</main>
 
 