@extends('layouts.base')

@section('title', 'Donable | Log In')

@section('content')
  <!-- signup start -->
  <section id="signup">
    <div class="signup__container container">
      <h2 class="signup__title">Sign Up</h2>
      <form class="signup__form">
        <div class="signup__form-name signup__form-group">
          <label for="name" class="signup__form-name-label signup__form-label">Name</label>
          <input type="text" class="signup__form-name-input signup__form-input" id="name" placeholder="Enter your name"/>
        </div>
        <div class="signup__form-email signup__form-group">
          <label for="email" class="signup__form-email-label signup__form-label">Email</label>
          <input type="email" class="signup__form-email-input signup__form-input" id="email" placeholder="Enter your email"/>
        </div>
        <div class="signup__form-password signup__form-group">
          <label for="password" class="signup__form-password-label signup__form-label">Password</label>
          <input type="password" class="signup__form-password-input signup__form-input" id="password" placeholder="Enter your password"/>
        </div>
        <div class="signup__form-button signup__form-group">
          <button class="signup__form-button-btn signup__form-btn">Sign Up</button>
        </div>
      </form>
    </div>
  </section>
  <!-- signup end -->
@endsection