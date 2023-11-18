@extends('layouts.base')

@section('title', 'Donable | Charities')

@section('content')
  <!-- charities start -->
  <section id="charities">
    <div class="charities__container container">
      <h2 class="charities__title">Charities</h2>
      <div class="charities__main">
        <div class="charities__aside">
          <form action="#" class="charities__search-form">
            <h3 class="charities__search-title">Search</h3>
            <input
              type="text"
              placeholder="Search title"
              class="charities__search-input"
            />
            <div class="charities__search-btns">
              <button
                type="reset"
                class="charities__search-btn"
              >
                Reset
              </button>
              <button
                type="submit"
                class="charities__search-btn"
              >
                Search
              </button>
            </div>
          </form>
          <form action="#" class="charities__filter-form">
            <h3 class="charities__filter-title">Filter</h3>
            <div class="charities__filter-ratings">
              <h4 class="charities__filter-subtitle">
                Minimum Rating
              </h4>
              <ul class="charities__filter-ratings-items">
                <div class="charities__filter-rating">
                  <input
                    type="radio"
                    name="rating"
                    id="rating-1"
                    class="charities__filter-rating-input"
                  />
                  <label
                    for="rating-1"
                    class="charities__filter-rating-label"
                    ><span
                      class="charities__filter-rating-number"
                      >1</span
                    >
                    <i
                      class="fas fa-star charities__filter-rating-star"
                    ></i
                  ></label>
                </div>
                <div class="charities__filter-rating">
                  <input
                    type="radio"
                    name="rating"
                    id="rating-2"
                    class="charities__filter-rating-input"
                  />
                  <label
                    for="rating-2"
                    class="charities__filter-rating-label"
                  >
                    <span
                      class="charities__filter-rating-number"
                      >2</span
                    >
                    <i
                      class="fas fa-star charities__filter-rating-star"
                    ></i>
                  </label>
                </div>
                <div class="charities__filter-rating">
                  <input
                    type="radio"
                    name="rating"
                    id="rating-3"
                    class="charities__filter-rating-input"
                  />
                  <label
                    for="rating-3"
                    class="charities__filter-rating-label"
                    ><span
                      class="charities__filter-rating-number"
                      >3</span
                    >
                    <i
                      class="fas fa-star charities__filter-rating-star"
                    ></i
                  ></label>
                </div>
                <div class="charities__filter-rating">
                  <input
                    type="radio"
                    name="rating"
                    id="rating-4"
                    class="charities__filter-rating-input"
                  />
                  <label
                    for="rating-4"
                    class="charities__filter-rating-label"
                    ><span
                      class="charities__filter-rating-number"
                      >4</span
                    >
                    <i
                      class="fas fa-star charities__filter-rating-star"
                    ></i
                  ></label>
                </div>
                <div class="charities__filter-rating">
                  <input
                    type="radio"
                    name="rating"
                    id="rating-5"
                    class="charities__filter-rating-input"
                  />
                  <label
                    for="rating-5"
                    class="charities__filter-rating-label"
                    ><span
                      class="charities__filter-rating-number"
                      >5</span
                    >
                    <i
                      class="fas fa-star charities__filter-rating-star"
                    ></i
                  ></label>
                </div>
                <div class="charities__filter-rating">
                  <input
                    type="radio"
                    name="rating"
                    id="rating-all"
                    class="charities__filter-rating-input"
                    value="all"
                    checked
                  />
                  <label
                    for="rating-all"
                    class="charities__filter-rating-label"
                  >
                    <span
                      class="charities__filter-rating-number"
                      >All</span
                    >
                  </label>
                </div>
              </ul>
            </div>
            <div class="charities__filter-categories">
              <h4 class="charities__filter-subtitle">
                Categories
              </h4>
              <ul class="charities__filter-categories-items">
                <div class="charities__filter-category">
                  <input
                    type="checkbox"
                    name="category"
                    id="category-1"
                    class="charities__filter-category-input"
                  />
                  <label
                    for="category-1"
                    class="charities__filter-category-label"
                    >Category 1</label
                  >
                </div>
                <div class="charities__filter-category">
                  <input
                    type="checkbox"
                    name="category"
                    id="category-2"
                    class="charities__filter-category-input"
                  />
                  <label
                    for="category-2"
                    class="charities__filter-category-label"
                    >Category 2</label
                  >
                </div>
                <div class="charities__filter-category">
                  <input
                    type="checkbox"
                    name="category"
                    id="category-3"
                    class="charities__filter-category-input"
                  />
                  <label
                    for="category-3"
                    class="charities__filter-category-label"
                    >Category 3</label
                  >
                </div>
                <div class="charities__filter-category">
                  <input
                    type="checkbox"
                    name="category"
                    id="category-4"
                    class="charities__filter-category-input"
                  />
                  <label
                    for="category-4"
                    class="charities__filter-category-label"
                    >Category 4</label
                  >
                </div>
                <div class="charities__filter-category">
                  <input
                    type="checkbox"
                    name="category"
                    id="category-5"
                    class="charities__filter-category-input"
                  />
                  <label
                    for="category-5"
                    class="charities__filter-category-label"
                    >Category 5</label
                  >
                </div>
              </ul>
            </div>
            <button type="reset" class="charities__filter-btn">
              Reset Filters
            </button>
          </form>
        </div>
        <div class="charities__content">
          <div class="charities__grid">
            <div class="charities__item">
              <div class="charities__item-img">
                <img
                  src="{{ asset('img/charities/charity_1.jpg') }}"
                  alt="charity"
                  class="charities__item-img"
                />
              </div>
              <div class="charities__item-content">
                <h3 class="charities__item-title">
                  Charity 1
                </h3>
                <p class="charities__item-text">
                  Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam, voluptatum.
                </p>
                <!-- <a href="#" class="charities__item-btn"
                  >Donate</a
                > -->
                <div
                  class="charities__item-category"
                >
                  <p>Category 1</p>
                </div>
              </div>
            </div>
            <div class="charities__item">
              <div class="charities__item-img">
                <img
                  src="{{ asset('img/charities/charity_2.jpg') }}"
                  alt="charity"
                  class="charities__item-img"
                />
              </div>
              <div class="charities__item-content">
                <h3 class="charities__item-title">
                  Charity 2
                </h3>
                <p class="charities__item-text">
                  Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam, voluptatum.
                </p>
                <!-- <a href="#" class="charities__item-btn"
                  >Donate</a
                > -->
                <div
                  class="charities__item-category"
                >
                  <p>Category 2</p>
                </div>
              </div>
            </div>
            <div class="charities__item">
              <div class="charities__item-img">
                <img
                  src="{{ asset('img/charities/charity_3.jpg') }}"
                  alt="charity"
                  class="charities__item-img"
                />
              </div>
              <div class="charities__item-content">
                <h3 class="charities__item-title">
                  Charity 3
                </h3>
                <p class="charities__item-text">
                  Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam, voluptatum.
                </p>
                <!-- <a href="#" class="charities__item-btn"
                  >Donate</a
                > -->
                <div
                  class="charities__item-category"
                >
                  <p>Category 3</p>
                </div>
              </div>
            </div>
            <div class="charities__item">
              <div class="charities__item-img">
                <img
                  src="{{ asset('img/charities/charity_4.jpg') }}"
                  alt="charity"
                  class="charities__item-img"
                />
              </div>
              <div class="charities__item-content">
                <h3 class="charities__item-title">
                  Charity 4
                </h3>
                <p class="charities__item-text">
                  Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam, voluptatum.
                </p>
                <!-- <a href="#" class="charities__item-btn"
                  >Donate</a
                > -->
                <div
                  class="charities__item-category"
                >
                  <p>Category 4</p>
                </div>
              </div>
            </div>
            <div class="charities__item">
              <div class="charities__item-img">
                <img
                  src="{{ asset('img/charities/charity_5.jpg') }}"
                  alt="charity"
                  class="charities__item-img"
                />
              </div>
              <div class="charities__item-content">
                <h3 class="charities__item-title">
                  Charity 5
                </h3>
                <p class="charities__item-text">
                  Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam, voluptatum.
                </p>
                <!-- <a href="#" class="charities__item-btn"
                  >Donate</a
                > -->
                <div
                  class="charities__item-category"
                >
                  <p>Category 5</p>
                </div>
              </div>
            </div>
            <div class="charities__item">
              <div class="charities__item-img">
                <img
                  src="{{ asset('img/charities/charity_6.jpg') }}"
                  alt="charity"
                  class="charities__item-img"
                />
              </div>
              <div class="charities__item-content">
                <h3 class="charities__item-title">
                  Charity 6
                </h3>
                <p class="charities__item-text">
                  Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam, voluptatum.
                </p>
                <!-- <a href="#" class="charities__item-btn"
                  >Donate</a
                > -->
                <div
                  class="charities__item-category"
                >
                  <p>Category 6</p>
                </div>
              </div>
            </div>
          </div>
          <div class="charities__pagination">
            <a href="#" class="charities__pagination-controls charities__pagination-link"
              ><i class="fas fa-chevron-left"></i
            ></a>
            <div class="charities__pagination-numbers">
              <a href="#" class="charities__pagination-number charities__pagination-link"
                >1</a
              >
              <a href="#" class="charities__pagination-number charities__pagination-link"
                >2</a
              >
              <a href="#" class="charities__pagination-number charities__pagination-link charities__pagination-number--active"
                >3</a
              >
              <a href="#" class="charities__pagination-number charities__pagination-link"
                >4</a
              >
              <a href="#" class="charities__pagination-number charities__pagination-link"
                >5</a
              >
            </div>
            <a href="#" class="charities__pagination-controls charities__pagination-link"
              ><i class="fas fa-chevron-right"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- charities end -->
@endsection