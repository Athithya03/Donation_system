@extends('layouts.base')

@section('title', 'Donable | Log In')

@section('content')
  <!-- login start -->
  <section id="login">
    <div class="login__container container">
      <h2 class="login__title">Log In</h2>
      <form class="login__form">
        <div class="login__form-email login__form-group">
          <label for="email" class="login__form-email-label login__form-label">Email</label>
          <input type="email" class="login__form-email-input login__form-input" id="email" placeholder="Enter your email"/>
        </div>
        <div class="login__form-password login__form-group">
          <label for="password" class="login__form-password-label login__form-label">Password</label>
          <input type="password" class="login__form-password-input login__form-input" id="password" placeholder="Enter your password"/>
        </div>
        <div class="login__form-button login__form-group">
          <button class="login__form-button-btn login__form-btn">Log In</button>
        </div>
      </form>
    </div>
  </section>
  <!-- login end -->
@endsection