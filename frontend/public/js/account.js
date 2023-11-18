// Get all the buttons and sections
const buttons = document.querySelectorAll('.account__aside-btn');
const sections = document.querySelectorAll('.account__main-section');

// Add event listeners to the buttons
buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Get the ID of the section to show
    const target = button.dataset.target;
    
    // Show the corresponding section and hide the other sections
    sections.forEach(section => {
      if (section.id === target) {
        section.classList.add('active');
      } else {
        section.classList.remove('active');
      }
    });

    // Highlight the selected button and remove the highlight from the others
    buttons.forEach(btn => {
      if (btn === button) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });
  });
});