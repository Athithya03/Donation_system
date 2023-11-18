@extends('layouts.base')

@section('title', 'Donable | User 1')

@section('content')
<!-- account start -->
<section id="account">
  <div class="account__container container">
    <h2 class="account__title">Account</h2>
    <div class="account__content">
      <div class="account__aside">
        <button class="account__aside-btn active" data-target="account__profile">Profile</button>
        <button class="account__aside-btn" data-target="account__password">Password</button>
        <button class="account__aside-btn" data-target="account__donations">Donations</button>
        <button class="account__aside-btn" data-target="account__charities">Charities</button>
        <button class="account__aside-btn" data-target="account__add">Add Charity</button>
      </div>
      <div class="account__main">
        <div class="account__profile account__main-section active" id="account__profile">
          <h3 class="account__profile-title">Account Info</h3>
          <form class="account__profile-form">
            <div class="account__profile-image">
              <img src="{{ asset('img/users/user_1.jpg') }}" alt="User Image" class="account__profile-image-img">
              <label for="profile-image" class="account__profile-image-label">Choose new photo</label>
              <input type="file" accept="image/*" id="profile-image" class="account__profile-image-input" name="profile-image">
            </div>
            <div class="account__profile-name">
              <label for="profile-name" class="account__profile-name-label">Name</label>
              <input type="text" id="profile-name" class="account__profile-name-input" value="User 1" name="profile-name" required>
            </div>
            <div class="account__profile-email">
              <label for="profile-add-email" class="account__profile-email-label">Email</label>
              <input type="email" id="profile-add-email" class="account__profile-email-input" value="user1@gmail.com" name="profile-add-email" required>
            </div>
            <button type="submit" class="account__profile-btn">Save Info</button>
          </form>
        </div>
        <div class="account__password account__main-section" id="account__password">
          <h3 class="account__password-title">Change Password</h3>
          <form class="account__password-form">
            <div class="account__password-current">
              <label for="password-current" class="account__password-current-label">Current Password</label>
              <input type="password" id="password-current" class="account__password-current-input" name="password-current" required>
            </div>
            <div class="account__password-new">
              <label for="password-new" class="account__password-new-label">New Password</label>
              <input type="password" id="password-new" class="account__password-new-input" name="password-new" required>
            </div>
            <div class="account__password-confirm">
              <label for="password-confirm" class="account__password-confirm-label">Confirm Password</label>
              <input type="password" id="password-confirm" class="account__password-confirm-input" name="password-confirm" required>
            </div>
            <button type="submit" class="account__password-btn">Change Password</button>
          </form>
        </div>
        <div class="account__donations account__main-section" id="account__donations">
          <h3 class="account__donations-title">Donations</h3>
          <div class="account__donations-headings">
              <div class="account__donations-heading-name">
                <span>Charity</span>
              </div>
              <div class="account__donations-heading-date">
                <span>Date</span>
              </div>
              <div class="account__donations-heading-amount">
                <span>Amount</span>&nbsp;<span>(Rs)</span>
              </div>
          </div>
          <div class="account__donations-items">
            <div class="account__donation">
              <div class="account__donation-name">
                <span>Charity 1</span>
              </div>
              <div class="account__donation-date">
                <span>2023/06/18</span>
              </div>
              <div class="account__donation-amount">
                <span>100</span>
              </div>
            </div>
            <div class="account__donation">
              <div class="account__donation-name">
                <span>Charity 2</span>
              </div>
              <div class="account__donation-date">
                <span>2023/06/18</span>
              </div>
              <div class="account__donation-amount">
                <span>100</span>
              </div>
            </div>
            <div class="account__donation">
              <div class="account__donation-name">
                <span>Charity 3</span>
              </div>
              <div class="account__donation-date">
                <span>2023/06/18</span>
              </div>
              <div class="account__donation-amount">
                <span>100</span>
              </div>
            </div>
            <div class="account__donation">
              <div class="account__donation-name">
                <span>Charity 4</span>
              </div>
              <div class="account__donation-date">
                <span>2023/06/18</span>
              </div>
              <div class="account__donation-amount">
                <span>100</span>
              </div>
            </div>
            <div class="account__donation">
              <div class="account__donation-name">
                <span>Charity 5</span>
              </div>
              <div class="account__donation-date">
                <span>2023/06/18</span>
              </div>
              <div class="account__donation-amount">
                <span>100</span>
              </div>
            </div>
          </div>
          <div class="account__donations-summary">
            <div class="account__donations-summary-title">
              <span>Total</span>
            </div>
            <div class="account__donations-summary-date">
            </div>
            <div class="account__donations-summary-total">
              <span>500</span>
            </div>
          </div>
        </div>
        <div class="account__charities account__main-section" id="account__charities">
          <h3 class="account__charities-title">Charities</h3>
          <div class="account__charities-headings">
              <div class="account__charities-heading-name">
                <span>Charity</span>
              </div>
              <div class="account__charities-heading-amount">
                <span>Amount</span>
              </div>
          </div>
          <div class="account__charities-items">
            <div class="account__charity">
              <div class="account__charity-name">
                <span>Charity 1</span>
              </div>
              <div class="account__charity-amount">
                <span>10000</span>
              </div>
            </div>
            <div class="account__charity">
              <div class="account__charity-name">
                <span>Charity 2</span>
              </div>
              <div class="account__charity-amount">
                <span>10000</span>
              </div>
            </div>
          </div>
          <div class="account__charities-summary">
            <div class="account__charities-summary-title">
              <span>Total</span>
            </div>
            <div class="account__charities-summary-total">
              <span>20000</span>
            </div>
          </div>
        </div>
        <div class="account__add account__main-section" id="account__add">
          <h3 class="account__add-title">Add Charity</h3>
          <form class="account__add-form">
            <div class="account__add-info">
              <h4 class="account__add-info-title">Charity Details</h4>
              <div class="account__add-info-items">
                <div class="account__add-name">
                  <label for="add-name" class="account__add-name-label">Name</label>
                  <input type="text" id="add-name" class="account__add-name-input" name="add-name" required>
                </div>
                <div class="account__add-category">
                  <label for="add-category" class="account__add-category-label">Category</label>
                  <select id="add-category" class="account__add-category-input" name="add-category" required>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                    <option value="3">Category 3</option>
                    <option value="4">Category 4</option>
                    <option value="5">Category 5</option>
                  </select>
                </div>
                <div class="account__add-image">
                  <label for="add-image" class="account__add-image-label">Choose photo</label>
                  <input type="file" accept="image/*" id="add-image" class="account__add-image-input" name="add-image">
                </div>
              </div>
            </div>
            <div class="account__add-contact">
              <h4 class="account__add-contact-title">Contact</h4>
              <div class="account__add-contact-items">
                <div class="account__add-phone">
                  <label for="add-phone" class="account__add-phone-label">Phone</label>
                  <input type="tel" id="add-phone" class="account__add-phone-input" name="add-phone" required>
                </div>
                <div class="account__add-email">
                  <label for="add-email" class="account__add-email-label">Email</label>
                  <input type="email" id="add-email" class="account__add-email-input" name="add-email" required>
                </div>
                <div class="account__add-address">
                  <label for="add-address" class="account__add-address-label">Address</label>
                  <input type="text" id="add-address" class="account__add-address-input" name="add-address" required>
                </div>
              </div>
            </div>
            <div class="account__add-social">
              <h4 class="account__add-social-title">Social</h4>
              <div class="account__add-social-items">
                <div class="account__add-facebook">
                  <label for="add-facebook" class="account__add-facebook-label">Facebook</label>
                  <input type="text" id="add-facebook" class="account__add-facebook-input" name="add-facebook">
                </div>
                <div class="account__add-twitter">
                  <label for="add-twitter" class="account__add-twitter-label">Twitter</label>
                  <input type="text" id="add-twitter" class="account__add-twitter-input" name="add-twitter">
                </div>
                <div class="account__add-instagram">
                  <label for="add-instagram" class="account__add-instagram-label">Instagram</label>
                  <input type="text" id="add-instagram" class="account__add-instagram-input" name="add-instagram">
                </div>
                <div class="account__add-youtube">
                  <label for="add-youtube" class="account__add-youtube-label">Youtube</label>
                  <input type="text" id="add-youtube" class="account__add-youtube-input" name="add-youtube">
                </div>
              </div>
            </div>
            <div class="account__add-about">
              <h4 class="account__add-about-title">About</h4>
              <div class="account__add-about-items">
                <div class="account__add-description">
                  <label for="add-description" class="account__add-description-label">Description</label>
                  <textarea id="add-description" class="account__add-description-input" name="add-description" required></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="account__add-btn">Add Charity</button>
          </form>
      </div>
    </div>
  </div>
</section>
<!-- account end -->
<!-- script start -->
<script src="{{ asset('js/account.js') }}"></script>
<!-- script end -->
@endsection