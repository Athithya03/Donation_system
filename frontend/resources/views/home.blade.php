@extends('layouts.base')

@section('title', 'Donable')

@section('content')
  <!-- hero start -->
  <section id="hero">
    <div class="hero__container container">
      <div class="hero__background">
        <img
          src="{{ asset('img/hero_background.jpg') }}"
          alt="hero"
          class="hero__img"
        />
        <div class="hero__overlay"></div>
      </div>
      <div class="hero__content">
        <h1 class="hero__title">
          Let's make the world a better place
        </h1>
        <p class="hero__text">
          Welcome to Donable where compassion meets action. Our
          mission is to make a positive impact on the lives of
          those in need, and it all starts with your generosity.
          Together, we can create a world where no one is left
          behind.
        </p>
        <a href="{{ url('charities') }}" class="hero__btn">Donate</a>
      </div>
    </div>
  </section>
  <!-- hero end -->

  <!-- search start -->
  <section id="search">
    <div class="search__container container">
      <h2 class="search__title">Search for a charity</h2>
      <form action="#" class="search__form">
        <input
          type="text"
          class="search__input"
          placeholder="Search for a charity"
        />
        <button class="search__btn">Search</button>
      </form>
    </div>
  </section>
  <!-- search end -->

  <!-- popular charities start -->
  <section id="popular-charities">
    <div class="popular-charities__container container">
      <h2 class="popular-charities__title">Popular Charities</h2>
      <div class="popular-charities__grid">
        <div class="popular-charities__item">
          <div class="popular-charities__item-img">
            <img
              src="{{ asset('img/charities/charity_1.jpg') }}"
              alt="charity"
              class="popular-charities__item-img"
            />
          </div>
          <div class="popular-charities__item-content">
            <h3 class="popular-charities__item-title">
              Charity 1
            </h3>
            <p class="popular-charities__item-text">
              Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Quisquam, voluptatum.
            </p>
            <!-- <a href="#" class="popular-charities__item-btn"
              >Donate</a
            > -->
            <div class="popular-charities__item-category">
              <p>Category 1</p>
            </div>
          </div>
        </div>
        <div class="popular-charities__item">
          <div class="popular-charities__item-img">
            <img
              src="{{ asset('img/charities/charity_2.jpg') }}"
              alt="charity"
              class="popular-charities__item-img"
            />
          </div>
          <div class="popular-charities__item-content">
            <h3 class="popular-charities__item-title">
              Charity 2
            </h3>
            <p class="popular-charities__item-text">
              Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Quisquam, voluptatum.
            </p>
            <!-- <a href="#" class="popular-charities__item-btn"
              >Donate</a
            > -->
            <div class="popular-charities__item-category">
              <p>Category 2</p>
            </div>
          </div>
        </div>
        <div class="popular-charities__item">
          <div class="popular-charities__item-img">
            <img
              src="{{ asset('img/charities/charity_3.jpg') }}"
              alt="charity"
              class="popular-charities__item-img"
            />
          </div>
          <div class="popular-charities__item-content">
            <h3 class="popular-charities__item-title">
              Charity 3
            </h3>
            <p class="popular-charities__item-text">
              Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Quisquam, voluptatum.
            </p>
            <!-- <a href="#" class="popular-charities__item-btn"
              >Donate</a
            > -->
            <div class="popular-charities__item-category">
              <p>Category 3</p>
            </div>
          </div>
        </div>
        <div class="popular-charities__item">
          <div class="popular-charities__item-img">
            <img
              src="{{ asset('img/charities/charity_4.jpg') }}"
              alt="charity"
              class="popular-charities__item-img"
            />
          </div>
          <div class="popular-charities__item-content">
            <h3 class="popular-charities__item-title">
              Charity 4
            </h3>
            <p class="popular-charities__item-text">
              Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Quisquam, voluptatum.
            </p>
            <!-- <a href="#" class="popular-charities__item-btn"
              >Donate</a
            > -->
            <div class="popular-charities__item-category">
              <p>Category 4</p>
            </div>
          </div>
        </div>
        <div class="popular-charities__item">
          <div class="popular-charities__item-img">
            <img
              src="{{ asset('img/charities/charity_5.jpg') }}"
              alt="charity"
              class="popular-charities__item-img"
            />
          </div>
          <div class="popular-charities__item-content">
            <h3 class="popular-charities__item-title">
              Charity 5
            </h3>
            <p class="popular-charities__item-text">
              Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Quisquam, voluptatum.
            </p>
            <!-- <a href="#" class="popular-charities__item-btn"
              >Donate</a
            > -->
            <div class="popular-charities__item-category">
              <p>Category 5</p>
            </div>
          </div>
        </div>
        <div class="popular-charities__item">
          <div class="popular-charities__item-img">
            <img
              src="{{ asset('img/charities/charity_6.jpg') }}"
              alt="charity"
              class="popular-charities__item-img"
            />
          </div>
          <div class="popular-charities__item-content">
            <h3 class="popular-charities__item-title">
              Charity 6
            </h3>
            <p class="popular-charities__item-text">
              Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Quisquam, voluptatum.
            </p>
            <!-- <a href="#" class="popular-charities__item-btn"
              >Donate</a
            > -->
            <div class="popular-charities__item-category">
              <p>Category 6</p>
            </div>
          </div>
        </div>
      </div>
      <a href="{{ url('charities') }}" class="popular-charities__btn">View All</a>
    </div>
  </section>
  <!-- popular charities end -->
@endsection