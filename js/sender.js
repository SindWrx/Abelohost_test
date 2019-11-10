addEventListener('load', () => {
  document.querySelector('form.urlConverter').addEventListener('submit', passFormData);
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

        resultEl.classList.add('btn', 'btn-ready-link');
        resultEl.textContent = json.link;
        resultEl.setAttribute('href', json.link);

        let container = document.querySelector('.page-box[name=indexPageBox]');
        let oldLink = container.querySelector('.btn-ready-link');

        if(oldLink) oldLink.remove();
        container.append(resultEl);
      }
    });
  }
}
