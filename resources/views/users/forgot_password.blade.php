@extends('layouts.frontLayout.frontend')

@section('content')



  <!-- Cart view section -->
 <section id="aa-myaccount">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <div class="aa-myaccount-area">         
           <div class="row">
              @include('layouts.message')
             <div class="col-md-6">
               <div class="aa-myaccount-login">
               <h4>Forgot Password</h4>
               
                <form action="{{ route('forgot-password') }}" id="forgotPasswordForm" class="aa-login-form" name="forgotPasswordForm" method="POST">
                  @csrf
                  <div class="form-group">
                    <input type="text" name='email' placeholder="Email" required>
                   </div>

                  <div class="form-group">
                    <button type="submit" class="aa-browse-btn">Submit</button> <br>
                  </div> <br>

                   {{-- <label class="rememberme" for="rememberme"><input type="checkbox" name='rememberme'> Remember me </label>
                   <p class="aa-lost-password"><a href="#">Lost your password?</a></p> --}}
                 </form>
               </div>
             </div>
             <div class="col-md-6">
               <div class="aa-myaccount-register">                 
                <h4>Register</h4>
                <form method="POST" id="registerForm" action="{{ route('user-register') }}" class="aa-login-form">
                  @csrf 
                  <div class="form-group">
                   <input type="text" name='name' placeholder="Name">
                  </div>

                  <div class="form-group">
                   <input type="text" name='email' placeholder="Email">
                  </div>

                  <div class="form-group">
                   <input id="Password" type="password" name="password" placeholder="Password">
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" class="aa-browse-btn">Register</button>   
                    
                  </div> 
                                    
                 </form>
               </div>
             </div>
           </div>          
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

