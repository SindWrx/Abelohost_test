addEventListener('load', () => {
  document.querySelector('form[name=login_form]').addEventListener('submit', passAuthData);
});

function passAuthData(){
  event.preventDefault();

  let dataForm = {
    login: this.login.value,
    pass: this.pass.value,
  };

  if(dataForm.hasOwnProperty('login') && dataForm.hasOwnProperty('pass')){
    dataForm = JSON.stringify(dataForm);
    fetch('../php/guard.php', { method: 'POST', body: dataForm })
      .then(async response => {
      if(response.ok){
        let data = await response.text();
        if(data === 'Успешно') location.replace('links.php');
        else showError();
      }
      else { throw new Error('Ошибка fetch запроса в logger.js'); }
    })
  }
}

function showError(){

}