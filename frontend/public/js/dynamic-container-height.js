// const footer = document.getElementById('footer');
// const loginContainer = document.querySelector('.login__container');

// const minHeight = `calc(100vh - ${footer.offsetHeight}px - 4rem)`;

// console.log(footer.offsetHeight);
// console.log(minHeight);
// console.log(window.innerHeight);

// loginContainer.style.minHeight = minHeight;

// /* onLoad calculate dynamic container height */
// window.onload = function() {
//   const footer = document.getElementById('footer');
//   const loginContainer = document.querySelector('.login__container');

//   const minHeight = `calc(100vh - ${footer.offsetHeight}px - 4rem)`;

//   console.log(footer.offsetHeight);
//   // console.log(minHeight);
//   console.log(window.innerHeight);

//   loginContainer.style.minHeight = minHeight;

//   console.log(loginContainer.offsetHeight + 64);
//   console.log(footer.offsetHeight + loginContainer.offsetHeight + 64);
// };

/* onLoad and onResize calculate dynamic container height */
function calculateMinHeight() {
  const footer = document.getElementById('footer');
  const loginContainer = document.querySelector('.login__container');
  const signupContainer = document.querySelector('.signup__container');

  const minHeight = `calc(100vh - ${footer.offsetHeight}px - 4rem)`;

  if (loginContainer) {
    loginContainer.style.minHeight = minHeight;
  }

  if (signupContainer) {
    signupContainer.style.minHeight = minHeight;
  }

  console.log(window.innerHeight);
  console.log(footer.offsetHeight);
  console.log((loginContainer ? loginContainer.offsetHeight : 0) + (signupContainer ? signupContainer.offsetHeight : 0) + 64);
  console.log(footer.offsetHeight + (loginContainer ? loginContainer.offsetHeight : 0) + (signupContainer ? signupContainer.offsetHeight : 0) + 64);
}

window.onload = function() {
  calculateMinHeight();
};

window.addEventListener('resize', function() {
  calculateMinHeight();
});