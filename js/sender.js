addEventListener('load', () => {
  document.querySelector('form[name=url_converter]').addEventListener('submit', passFormData);
});

async function passFormData() {
  event.preventDefault();
  let body = this.querySelector('input[name=url]').value;

  if(body){
    await fetch('../php/server.php', {
      method: 'POST',
      body,
    }).then(async response => {
      if (response.status === 200) {
        let json = await response.json();
        let resultEl = document.createElement('a');

        resultEl.classList.add('readyLink');
        resultEl.textContent = json.link;
        resultEl.setAttribute('href', json.link);
        document.body.append(resultEl);
      }
    });
  }
}
