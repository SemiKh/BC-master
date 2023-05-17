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
            list.style.display = 'flex';
            list.style.flexWrap = 'wrap';

            for(let i = 0; i < 9; i++) {
                index++;
                let listItem = document.createElement('div');

                let cardDiv = document.createElement('div');
                cardDiv.classList.add('card');
                cardDiv.style.width = '17rem';
                cardDiv.style.margin = '10px'

                let cardImg = document.createElement('img');
                cardImg.src = 'img/nft/crabnebula.svg';
                cardImg.classList.add('card-img-top');
                cardImg.alt = '...';
                cardDiv.appendChild(cardImg);

                let cardBody = document.createElement('div');
                cardBody.classList.add('card-body');

                let cardTitle = document.createElement('h5');
                cardTitle.classList.add('card-title');
                cardTitle.textContent = 'Card title ' + index;
                cardBody.appendChild(cardTitle);

                let cardText = document.createElement('p');
                cardText.classList.add('card-text');
                cardText.textContent = 'Some quick example text to build on the card title and make up the bulk of the card\'s content.';
                cardBody.appendChild(cardText);

                cardDiv.appendChild(cardBody);
                listItem.appendChild(cardDiv);

                
                list.appendChild(listItem);
                if(i === 8){
                    let elementToMove = document.getElementById("checker");
                    let parentElement = elementToMove.parentNode;
                    parentElement.removeChild(elementToMove);
                    parentElement.appendChild(elementToMove);
                }
            }
        }else {
            console.log('Target element is not intersecting!');
        }
    });
}, options);
const targetElement = document.getElementById('checker');
observer.observe(targetElement);


let search = document.getElementById('valeur');
function valueRange(){
   
    let unite = document.getElementById('unite');
    unite.style.height="auto";
    let devise= document.getElementById('devise');
    let optionIndex = devise.options[devise.selectedIndex];
    let option = optionIndex.value;
    if(option === 'euro'){
        unite.value = search.value + ' €';
    } else if(option === 'eth'){
        unite.value = search.value + ' Eth';
    }
    
}
unite.addEventListener('keyup', function(){
    search.value = unite.value;
});
search.addEventListener('mousemove', valueRange);
search.addEventListener('mouseup', valueRange);
search.addEventListener('mousedown', valueRange);