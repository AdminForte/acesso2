const scriptURL = 'https://script.google.com/macros/s/AKfycbydTdWB0w46N8EjsM48Yv8uixg5n3nOiUihph-z1e5AHL6VJcvyHowMEk_jPGN2I1oAMw/exec'
const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})