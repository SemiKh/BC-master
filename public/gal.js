'use strict';
let options = {
    root: null,
    rootMargin: '0px',
    threshold: 1
};
let index = 0;
const observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            let list = document.getElementById('scroller');

            for(let i = 0; i < 6; i++) {
                let listItem = document.createElement('li');

                let cardDiv = document.createElement('div');
                cardDiv.classList.add('card');
                cardDiv.style.width = '18rem';

                let cardImg = document.createElement('img');
                cardImg.src = 'img/nft/crabnebula.svg';
                cardImg.classList.add('card-img-top');
                cardImg.alt = '...';
                cardDiv.appendChild(cardImg);

                let cardBody = document.createElement('div');
                cardBody.classList.add('card-body');

                let cardTitle = document.createElement('h5');
                cardTitle.classList.add('card-title');
                cardTitle.textContent = 'Card title ' + i;
                cardBody.appendChild(cardTitle);

                let cardText = document.createElement('p');
                cardText.classList.add('card-text');
                cardText.textContent = 'Some quick example text to build on the card title and make up the bulk of the card\'s content.';
                cardBody.appendChild(cardText);

                cardDiv.appendChild(cardBody);
                listItem.appendChild(cardDiv);

                list.appendChild(listItem);
                if(i === 4){
                    let elementToMove = document.getElementById("scroller");
                    let parentElement = elementToMove.parentNode;
                    parentElement.removeChild(elementToMove);
                    parentElement.appendChild(elementToMove);
                }
            }
        }
    });
}, options);

const targetElement = document.getElementById('galerie');
observer.observe(targetElement);