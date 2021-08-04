//Contact Form Submit
console.log('hello');

const form = document.getElementById('form');

form.addEventListener("submit", function (event) {
  console.log(event.target);
  event.preventDefault();
  event.target.reset();
});