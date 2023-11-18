@extends('layouts.base')

@section('title', 'Donable | Contact Us')

@section('content')
  <!-- contact start -->
  <section id="contact">
    <div class="contact__container container">
      <h2 class="contact__title">Contact Us</h2>
      <div class="contact__content">
        <form class="contact__form">
          <h3 class="contact__form-title">Leave a message</h3>
          <div class="contact__form-name contact__form-group">
            <label for="name" class="contact__form-name-label contact__form-label">Name</label>
            <input type="text" class="contact__form-name-input contact__form-input" id="name" placeholder="Enter your name"/>
          </div>
          <div class="contact__form-email contact__form-group">
            <label for="email" class="contact__form-email-label contact__form-label">Email</label>
            <input type="email" class="contact__form-email-input contact__form-input" id="email" placeholder="Enter your email"/>
          </div>
          <div class="contact__form-phone contact__form-group">
            <label for="phone" class="contact__form-phone-label contact__form-label">Phone</label>
            <input type="tel" class="contact__form-phone-input contact__form-input" id="phone" placeholder="Enter your phone"/>
          </div>
          <div class="contact__form-message contact__form-group">
            <label for="message" class="contact__form-message-label contact__form-label">Message</label>
            <textarea class="contact__form-message-input contact__form-textarea" id="message" placeholder="Enter your message"></textarea>
          </div>
          <div class="contact__form-button contact__form-group">
            <button class="contact__form-button-btn contact__form-btn">Send Message</button>
          </div>
        </form>
        <div class="contact__info">
          <h3 class="contact__info-title">Get in touch</h3>
          <div class="contact__info-description">
            You can meet us in our office during office hours. Please make sure to book an appointment in advance.<br>Thank you!
          </div>
          <div class="contact__info-contacts">
            <div class="contact__info-phone contact__info-contact">
              <span class="contact__info-phone-icon contact__info-icon"><i class="fas fa-phone-alt"></i></span>
              <span class="contact__info-phone-text contact__info-text">+94  112 345 678</span>
            </div>
            <div class="contact__info-email contact__info-contact">
              <span class="contact__info-email-icon contact__info-icon"><i class="fas fa-envelope"></i></span>
              <span class="contact__info-email-text contact__info-text">contact@donable.com</span>
            </div>
            <div class="contact__info-address contact__info-contact">
              <span class="contact__info-address-icon contact__info-icon"><i class="fas fa-map-marker-alt"></i></span>
              <span class="contact__info-address-text contact__info-text">No. 123, Galle Road, Colombo 03</span>
            </div>
          </div>
          <div class="contact__info-socials">
            <a href="#" class="contact__info-facebook contact__info-social contact__info-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="contact__info-twitter contact__info-social contact__info-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="contact__info-instagram contact__info-social contact__info-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="contact__info-youtube contact__info-social contact__info-icon"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact end -->
@endsection