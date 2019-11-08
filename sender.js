addEventListener('load', () => {
  document.querySelector('form').addEventListener('submit', passFormData);
});

async function passFormData() {
  event.preventDefault();
  let body = this.querySelector('input[name=url]').value;

  await fetch('server.php', {
    method: 'POST',
    body,
  }).then(async response => {
    if (response.status === 200) {
      let json = await response.json();
      let resultEl = document.createElement('a');

      resultEl.classList.add('readyLink');
      resultEl.textContent = json.link;
      resultEl.setAttribute('href', json.url);
      document.body.append(resultEl);
    }
  });
}
