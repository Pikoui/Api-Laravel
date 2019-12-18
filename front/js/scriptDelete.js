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
              
                studentFName = data.description[0].firstname
              
                let p = document.deleteElement('p');
                p.innerHTML = studentFName;

                let h2 = document.deleteElement('h2');
                h2.innerHTML = studentFName;

                document.querySelector('#student-infos').innerHTML = '';
                document.querySelector('#student-infos').appendChild(h2);
                debugger;
            })
        })
    
    })