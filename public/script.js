let button = document.querySelector('.palette');

function changeBG() {
  let header = document.querySelector('header');
  let footer = document.querySelector('footer');
  let body = document.querySelector('main');
  let section = document.querySelector('presentation');
  


  if (!header.classList.contains('gradh2')) {
    header.classList.add('gradh2');
    footer.classList.add('gradf2');
    body.classList.add('gradBody2');
    section.classList.add('presentation2');
  } else {
    header.classList.remove('gradh2');
    footer.classList.remove('gradf2');
    body.classList.remove('gradBody2');
    section.classList.remove('presentation2');
  }
}


  button.addEventListener("click", changeBG);
