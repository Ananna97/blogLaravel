
@extends('main')

@section('title', ' | Contact')

@section('content')
  <style>
    body{
      background: url("../images/backgrounds/oct3.jpg");
      background-position: center;
      background-size: cover;
    }
  </style>
        <div class="row">
            <div class="col-md-12">
                      <h1 class="display-4">Contact</h1>
                      <h2>DO NOT HESITATE TO CONTACT US</h2>

                      <hr>
                      <!--there is url instead of route, becsause we do not have set a route named contact (check: php artisan route:list). we have csrf protection. csrf_token(0 shows the actual token.-->
                      <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                          <div class="form-group">
                            <label name="email">Email: </label>
                            <input id="email" name="email" class="form-control">
                          </div>

                          <div class="form-group">
                            <label name="subject">Subject: </label>
                            <input id="subject" name="subject" class="form-control">
                          </div>

                          <div class="form-group">
                            <label name="Message">Message: </label>
                            <textarea id="message" name="message" class="form-control" placeholder="Type your message here"></textarea>
                          </div>

                          <input type="submit" value="Send" class="btnSubmitContact">
                      </form>
            </div>      
        </div>
        @endsection


