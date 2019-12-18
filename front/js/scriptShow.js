fetch(`http://192.168.33.12/api/students`)

.then((response) => {
    response.json()
    .then((data) => {
       
    })
})

document.querySelector("button").addEventListener("click", () => {
    let studentID = document.querySelector('#student-id').value;
    
    fetch(`http://192.168.33.12/api/students/${studentID}`)
    .then((response) => {
        response.json()
        .then((data) => {

let tableElement = document.createElement("table");

// Création de notre <thead> en HTML
let theadElement = document.createElement("thead");
tableElement.appendChild(theadElement);

// Création de notre premier <tr> en HTML
let trElement1 = document.createElement("tr");
theadElement.appendChild(trElement1);

// Création de nos <th> en HTML
let thElement1 = document.createElement("th");
let thElement2 = document.createElement("th");
let thElement3 = document.createElement("th");
let thElement4 = document.createElement("th");
let thElement5 = document.createElement("th");
let thElement6 = document.createElement("th");
let thElement7 = document.createElement("th");

// Insertion de données dans nos <th>
thElement1.innerHTML = "Name";
thElement2.innerHTML = "";
thElement3.innerHTML = "";
thElement4.innerHTML = "";
thElement5.innerHTML = "";
thElement6.innerHTML = "";
thElement7.innerHTML = "";

trElement1.appendChild(thElement1);
trElement1.appendChild(thElement2);
trElement1.appendChild(thElement3);
trElement1.appendChild(thElement4);
trElement1.appendChild(thElement5);
trElement1.appendChild(thElement6);
trElement1.appendChild(thElement7);

// Création de notre <tbody> et ajout à notre <table>
let tbodyElement = document.createElement("tbody");
tableElement.appendChild(tbodyElement);

// Création de notre second <tr> et ajout à notre <tbody>
let trElement2 = document.createElement("tr");
tbodyElement.appendChild(trElement2);

// Création de nos <td> en HTML
let tdElement1 = document.createElement("td");
let tdElement2 = document.createElement("td");
let tdElement4 = document.createElement("td");
let tdElement5 = document.createElement("td");
let tdElement6 = document.createElement("td");
let tdElement7 = document.createElement("td");
let tdElement8 = document.createElement("td");

// Insertion de données dans nos <td>
tdElement1.innerHTML = data.name[1];
tdElement2.innerHTML = data.name[2];
tdElement3.innerHTML = data.name[3];
tdElement4.innerHTML = data.name[4];
tdElement5.innerHTML = data.name[5];
tdElement6.innerHTML = data.name[6];


trElement2.appendChild(tdElement1);
trElement2.appendChild(tdElement2);
trElement2.appendChild(tdElement3);
trElement2.appendChild(tdElement4);
trElement2.appendChild(tdElement5);
trElement2.appendChild(tdElement6);
trElement2.appendChild(tdElement7);
trElement2.appendChild(tdElement8);
})
})
});