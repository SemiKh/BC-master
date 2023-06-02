"use strict";

let reglage = document.querySelector("#icon-reglage");
let menu = document.querySelector("#reglage");

function divReglage() {
  reglage.style.display = "none";
  menu.style.width = "15rem";
  menu.style.height = "10rem";
  menu.style.backgroundColor = "white";
  menu.style.position = "absolute";
  menu.style.right = "10px";
  menu.style.zIndex = "10";

  let menuItems = [
    { text: "Ajouter", href: "creationNft.php" },
    { text: "Modifier", href: "#" },
    { text: "Supprimer", href: "#" }
  ];

  let list = document.createElement("ul");
  list.style.height = "100%"; // Le ul prend toute la hauteur de la div
  list.style.display = "flex"; // Utiliser Flexbox
  list.style.flexDirection = "column"; // Aligner les li verticalement
  list.style.justifyContent = "center"; // Centrer les li verticalement
  menu.appendChild(list);

  menuItems.forEach(item => {
    let menuItem = createMenuItem(item.text, item.href);
    list.appendChild(menuItem);
  });
}

function createMenuItem(text, href) {
  let li = document.createElement("li");
  let a = document.createElement("a");
  li.style.height = "33%"; // Les li ont une hauteur de 33% chacune
  a.href = href; // Lien de l'élément a
  a.textContent = text;
  li.appendChild(a);
  return li;
}

function closeReglage(event) {
  if (!menu.contains(event.target) && event.target !== reglage) {
    reglage.style.display = "block";
    menu.style.display = "none";
  }
}

reglage.addEventListener("click", function () {
  divReglage();
});

document.addEventListener("click", closeReglage);
