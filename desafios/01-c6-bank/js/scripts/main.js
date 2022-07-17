const header = document.getElementById('js-header');

function fixedMenu() {
  if (window.scrollY > 80) {
    header.classList.add('fixed-menu');
  } else {
    header.classList.remove('fixed-menu');
  }
}

document.addEventListener('scroll', fixedMenu);

const allFilters = document.querySelectorAll('.js-btns button');
const tabPane = document.querySelectorAll('.js-bottom');

allFilters.forEach((filter, index) => {
  filter.addEventListener('click', () => {
    allFilters.forEach((item) => {
      item.classList.remove('active');
    });

    tabPane.forEach((item) => {
      item.classList.remove('active');
    });

    tabPane[index].classList.add('active');

    filter.classList.add('active');
  });
});

AOS.init({
  duration: 800,
  once: true,
});
