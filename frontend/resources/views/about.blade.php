@extends('layouts.base')

@section('title', 'Donable | About Us')

@section('content')
  <!-- about start -->
  <section id="about">
    <div class="about__container container">
      <h2 class="about__title">About Us</h2>
      <div class="about__content">
        <div class="about__values about__item">
          <h3 class="about__values-title about__item-title">Our Values</h3>
          <div class="about__values-content about__item-content">
            <div class="about__values-mission about__value">
              <h4 class="about__values-mission-title about__value-title">Mission</h4>
              <p class="about__values-mission-text about__value-text">
                At Donable, our mission is to empower individuals and organizations to make a meaningful and lasting impact on the lives of those in need. We believe in harnessing the power of compassion, generosity, and collective action to create positive change in the world. Our unwavering commitment is to facilitate the connection between those who wish to give and those who require support, ensuring that no one is left behind in our shared journey toward a better world.
              </p>
            </div>
            <div class="about__values-vision about__value">
              <h4 class="about__values-vision-title about__value-title">Vision</h4>
              <p class="about__values-vision-text about__value-text">
                Our vision at Donable is to create a global community driven by compassion and united by the desire to uplift the lives of the less fortunate. We envision a future where every person, regardless of their circumstances, has the opportunity to thrive and lead a life full of hope and dignity. Through innovative technology and a shared sense of responsibility, we aspire to foster a world where the act of giving is not just a momentary gesture but a way of life. We see a world where empathy and generosity are the cornerstones of our society, ensuring that no one is left behind, and together, we create a more equitable and compassionate world for all.
              </p>
            </div>
          </div>
        </div>
        <div class="about__achievements about__item">
          <h3 class="about__achievements-title about__item-title">Our Achievements</h3>
          <div class="about__achievements-content about__item-content">
            <div class="about__achievements-users about__achievement">
              <span class="about__achievements-users-icon about__achievement-icon"><i class="fas fa-users"></i></span>
              <span class="acout__achievements-users-number about__achievement-number">2000<span>+</span></span>
              <span class="about__achievements-users-text about__achievement-text">Users</span>
            </div>
            <div class="about__achievements-donations about__achievement">
              <span class="about__achievements-donations-icon about__achievement-icon"><i class="fas fa-hand-holding-heart"></i></span>
              <span class="about__achievements-donations-number about__achievement-number">1000<span>+</span></span>
              <span class="about__achievements-donations-text about__achievement-text">Donations</span>
            </div>
            <div class="about__achievements-charities about__achievement">
              <span class="about__achievements-charities-icon about__achievement-icon"><i class="fas fa-hands-helping"></i></span>
              <span class="about__achievements-charities-number about__achievement-number">100<span>+</span></span>
              <span class="about__achievements-charities-text about__achievement-text">Charities</span>
            </div>
            <div class="about__achievements-funds about__achievement">
              <span class="about__achievements-funds-icon about__achievement-icon"><i class="fas fa-hand-holding-usd"></i></span>
              <span class="about__achievements-funds-number about__achievement-number">100000<span>+</span></span>
              <span class="about__achievements-funds-text about__achievement-text">Funds<span>(Rs)</span></span>
            </div>
          </div>
        </div>
        <div class="about__features about__item">
          <h3 class="about__features-title about__item-title">Our Features</h3>
          <div class="about__features-content about__item-content">
            <div class="about__features-donations about__feature">
              <h4 class="about__features-donations-title about__feature-title">Donations</h4>
              <p class="about__features-donations-text about__feature-text">
                Our platform empowers users to make a positive impact on the causes they care about. With just a few clicks, users can easily donate to their chosen charities, making it convenient to support the organizations and initiatives that matter most to them.
              </p>
            </div>
            <div class="about__features-charities about__feature">
              <h4 class="about__features-charities-title about__feature-title">Charities</h4>
              <p class="about__features-charities-text about__feature-text">
                We believe in the power of individuals and communities to effect change. That's why we offer a unique feature that allows users to create their own charities or fundraising campaigns. Whether it's a personal passion or a local cause, our platform makes it simple to set up and promote charitable initiatives.
              </p>
            </div>
            <div class="about__features-categories about__feature">
              <h4 class="about__features-categories-title about__feature-title">Categories</h4>
              <p class="about__features-categories-text about__feature-text">
                To streamline the search for the perfect charity to support, we've implemented a robust category filtering system. Users can narrow down their options, making it effortless to discover charities aligned with their interests and values. Whether it's education, healthcare, or environmental causes, we've got you covered.
              </p>
            </div>
            <div class="about__features-ratings about__feature">
              <h4 class="about__features-ratings-title about__feature-title">Ratings</h4>
              <p class="about__features-ratings-text about__feature-text">
                Transparency is crucial when it comes to charitable giving. Our website encourages user engagement and accountability by enabling users to rate and leave reviews for charities. This feature helps donors make informed decisions and fosters a sense of community around the causes we support. Together, we can make a difference and ensure every charitable dollar counts.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about end -->
@endsection