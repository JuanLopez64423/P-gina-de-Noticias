const nombresJuegos = JSON.parse('[{"id":0,"nombre":"League of Legends"},{"id":1,"nombre":"Counter strike"},{"id":2,"nombre":"Valorant"},{"id":3,"nombre":"Rocket league"},{"id":4,"nombre":"Mortal Kombat"},{"id":5,"nombre":"Fifa"},{"id":6,"nombre":"Rainbow six"}]');
console.log(nombresJuegos);

let textoJason1 = document.getElementById("textoJason1");
let textoJason2 = document.getElementById("textoJason2");
let textoJason3 = document.getElementById("textoJason3");
let textoJason4 = document.getElementById("textoJason4");
let textoJason5 = document.getElementById("textoJason5");
let textoJason6 = document.getElementById("textoJason6");
let textoJason7 = document.getElementById("textoJason7");

textoJason1.innerText= nombresJuegos[0].nombre;
textoJason2.innerText= nombresJuegos[1].nombre;
textoJason3.innerText= nombresJuegos[2].nombre;
textoJason4.innerText= nombresJuegos[3].nombre;
textoJason5.innerText= nombresJuegos[4].nombre;
textoJason6.innerText= nombresJuegos[5].nombre;
textoJason7.innerText= nombresJuegos[6].nombre;