@extends('layouts.base')

@section('title', 'Donable | Charity 1')

@section('content')
  <!-- charity start -->
  <section id="charity">
    <div class="charity__container container">
      <div class="charity__navigation">
        <a href="{{ url('charities') }}" class="charity__navigation-link">
          <i class="fas fa-chevron-left charity__navigation-icon"></i>
          <span class="charity__navigation-text">Back</span>
        </a>
      </div>
      <div class="charity__header">
        <div class="charity__header-content">
          <h2 class="charity__title">Charity 1</h2>
          <div class="charity__category">
            <span class="charity__category-text">Category 1</span>
          </div>
        </div>
        <div class="charity__header-img">
          <img src="{{ asset('img/charities/charity_1.jpg') }}" alt="charity_1 image" class="charity__img"/>
        </div>
      </div>
      <div class="charity__content">
        <div class="charity__contact">
          <h3 class="charity__contact-title">Contact Us</h3>
          <div class="charity__contact-items">
            <div class="charity__contact-item">
              <span class="charity__contact-icon"><i class="fas fa-phone-alt"></i></span>
              <span class="charity__contact-text">+0123456789</span>
            </div>
            <div class="charity__contact-item">
              <span class="charity__contact-icon"><i class="fas fa-envelope"></i></span>
              <span class="charity__contact-text">chaity1@gmail.com</span>
            </div>
            <div class="charity__contact-item">
              <span class="charity__contact-icon"><i class="fas fa-map-marker-alt"></i></span>
              <span class="charity__contact-text">No 61, Nawala Road, Nugegoda</span>
            </div>
          </div>
        </div>
        <div class="charity__social">
          <h3 class="charity__social-title">Follow Us</h3>
          <div class="charity__social-items">
            <a href="#" class="charity__social-item"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="charity__social-item"><i class="fab fa-twitter"></i></a>
            <a href="#" class="charity__social-item"><i class="fab fa-instagram"></i></a>
            <a href="#" class="charity__social-item"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="charity__description">
          <h3 class="charity__description-title">About Us</h3>
          <p class="charity__description-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem unde laborum placeat eaque, beatae nam illum possimus dignissimos obcaecati consequatur magnam culpa asperiores eligendi in ratione eveniet voluptatibus perspiciatis itaque quisquam ipsam quod. Magnam recusandae illum quisquam voluptate omnis quae non! Nesciunt ipsam adipisci repudiandae, amet a, eveniet voluptatem quis laboriosam voluptatibus, iusto quibusdam porro? Eum animi exercitationem voluptatem explicabo consectetur veniam eos sint natus molestias at numquam officia fuga a nam itaque in dolores tempora, deleniti aut! Error molestiae id non, nemo nam assumenda quasi commodi itaque labore, corrupti veniam! Sapiente, nam quos aut obcaecati repellendus laudantium soluta error quas quis beatae. Fugit asperiores sed porro, voluptatem reiciendis in. Doloribus, animi autem odit dolorum modi cumque est pariatur cupiditate numquam earum ea vel architecto voluptas placeat nam fugit atque doloremque sint laborum. Est, quisquam provident illo voluptas consectetur aspernatur laborum officia fugiat maxime obcaecati, quia placeat recusandae iure ducimus fugit assumenda repellat velit aliquam omnis necessitatibus? Nam, cum? Accusamus animi odit, molestias magni impedit pariatur minima quaerat eos cupiditate ullam ut tenetur doloremque quo modi ducimus excepturi id saepe labore? Ab nesciunt nemo dignissimos cumque delectus! Alias eum corporis sed commodi in adipisci. Quaerat consequuntur facere praesentium, sequi impedit rerum illo dolorem omnis quo, numquam, doloribus pariatur. Non, obcaecati? Dolore delectus deleniti, similique ea cupiditate necessitatibus magnam earum veritatis.
          </p>
        </div>
      </div>
      <div class="charity__donate">
        <!-- <h3 class="charity__donate-title">Donate Us</h3> -->
        <button class="charity__donate-btn">Donate</button>
      </div>
      <div class="charity__feedback">
        <h3 class="charity__feedback-title">Ratings</h3>
        <div class="charity__ratings">
          <span class="charity__ratings-average">4.0</span>
          <span class="charity__ratings-star"><i class="fas fa-star"></i></span>
          <span class="charity__ratings-amount">(6)</span>
        </div>
        <div class="charity__reviews">
          <div class="charity__review">
            <div class="charity__review-header">
              <div class="charity__review-img">
                <img src="{{ asset('img/users/user_1.jpg') }}" alt="user_1" class="charity__review-img-image"/>
              </div>
              <div class="charity__review-content">
                <h4 class="charity__review-name">John Doe</h4>
                <span class="charity__review-date">2023/05/23</span>
                <div class="charity__review-rating">
                  <span class="charity__review-rating-number">5</span>
                  <span class="charity__review-rating-star"><i class="fas fa-star"></i></span>
                </div>
              </div>
            </div>
            <div class="charity__review-body">
              <p class="charity__review-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ratione praesentium cupiditate eius laudantium iste adipisci error veniam ea recusandae doloribus, laboriosam nemo minima excepturi amet quaerat maiores sapiente architecto voluptatum consequuntur omnis, nostrum voluptate nihil! Distinctio facere id porro at aut ut, error blanditiis dolorem a inventore animi, accusamus voluptatem iusto similique laudantium amet, quo quia molestias tempora magni cum quasi reprehenderit. Sed architecto atque voluptatibus voluptatem perferendis, doloribus blanditiis debitis facere at error tempore iusto animi amet consequatur.
              </p>
            </div>
          </div>
          <div class="charity__review">
            <div class="charity__review-header">
              <div class="charity__review-img">
                <img src="{{ asset('img/users/user_2.jpg') }}" alt="user_2" class="charity__review-img-image"/>
              </div>
              <div class="charity__review-content">
                <h4 class="charity__review-name">John Doe</h4>
                <span class="charity__review-date">2023/05/23</span>
                <div class="charity__review-rating">
                  <span class="charity__review-rating-number">5</span>
                  <span class="charity__review-rating-star"><i class="fas fa-star"></i></span>
                </div>
              </div>
            </div>
            <div class="charity__review-body">
              <p class="charity__review-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ratione praesentium cupiditate eius laudantium iste adipisci error veniam ea recusandae doloribus, laboriosam nemo minima excepturi amet quaerat maiores sapiente architecto voluptatum consequuntur omnis, nostrum voluptate nihil! Distinctio facere id porro at aut ut, error blanditiis dolorem a inventore animi, accusamus voluptatem iusto similique laudantium amet, quo quia molestias tempora magni cum quasi reprehenderit. Sed architecto atque voluptatibus voluptatem perferendis, doloribus blanditiis debitis facere at error tempore iusto animi amet consequatur.
              </p>
            </div>
          </div>
          <div class="charity__review">
            <div class="charity__review-header">
              <div class="charity__review-img">
                <img src="{{ asset('img/users/user_3.jpg') }}" alt="user_3" class="charity__review-img-image"/>
              </div>
              <div class="charity__review-content">
                <h4 class="charity__review-name">John Doe</h4>
                <span class="charity__review-date">2023/05/23</span>
                <div class="charity__review-rating">
                  <span class="charity__review-rating-number">5</span>
                  <span class="charity__review-rating-star"><i class="fas fa-star"></i></span>
                </div>
              </div>
            </div>
            <div class="charity__review-body">
              <p class="charity__review-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ratione praesentium cupiditate eius laudantium iste adipisci error veniam ea recusandae doloribus, laboriosam nemo minima excepturi amet quaerat maiores sapiente architecto voluptatum consequuntur omnis, nostrum voluptate nihil! Distinctio facere id porro at aut ut, error blanditiis dolorem a inventore animi, accusamus voluptatem iusto similique laudantium amet, quo quia molestias tempora magni cum quasi reprehenderit. Sed architecto atque voluptatibus voluptatem perferendis, doloribus blanditiis debitis facere at error tempore iusto animi amet consequatur.
              </p>
            </div>
          </div>
          <div class="charity__review">
            <div class="charity__review-header">
              <div class="charity__review-img">
                <img src="{{ asset('img/users/user_4.jpg') }}" alt="user_4" class="charity__review-img-image"/>
              </div>
              <div class="charity__review-content">
                <h4 class="charity__review-name">John Doe</h4>
                <span class="charity__review-date">2023/05/23</span>
                <div class="charity__review-rating">
                  <span class="charity__review-rating-number">5</span>
                  <span class="charity__review-rating-star"><i class="fas fa-star"></i></span>
                </div>
              </div>
            </div>
            <div class="charity__review-body">
              <p class="charity__review-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ratione praesentium cupiditate eius laudantium iste adipisci error veniam ea recusandae doloribus, laboriosam nemo minima excepturi amet quaerat maiores sapiente architecto voluptatum consequuntur omnis, nostrum voluptate nihil! Distinctio facere id porro at aut ut, error blanditiis dolorem a inventore animi, accusamus voluptatem iusto similique laudantium amet, quo quia molestias tempora magni cum quasi reprehenderit. Sed architecto atque voluptatibus voluptatem perferendis, doloribus blanditiis debitis facere at error tempore iusto animi amet consequatur.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="charity__rate">
        <h3 class="charity__rate-title">Rate Us</h3>
        <form action="" class="charity__rate-form">
          <div class="charity__rate-dropdown">
            <label for="rating" class="charity__rate-dropdown-label">Rate</label>
            <div class="charity__rate-dropdown-content">
              <select name="rating" id="rating" class="charity__rate-dropdown-input">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5" selected>5</option>
              </select>
              <span class="charity__rate-dropdown-star"><i class="fas fa-star"></i></span>
            </div>
          </div>
          <div class="charity__rate-textarea">
            <label for="review" class="charity__rate-textarea-label">Review</label>
            <textarea name="review" id="review" cols="30" rows="10" class="charity__rate-textarea-input"></textarea>
          </div>
          <button class="charity__rate-btn">Submit</button>
        </form>
      </div>
    </div>
  </section>
  <!-- charity end -->
@endsection