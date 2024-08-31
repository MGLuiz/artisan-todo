const isDone = document.querySelectorAll(".isDone-checkbox")

for (let chkBox of isDone){
    chkBox.addEventListener('change', () => {
        makeIsDone(chkBox.getAttribute('value'), chkBox.checked)
    })
}

async function makeIsDone(chkBoxValue, isDone){
    const url = `/task/isDone/${chkBoxValue}?isDone=${isDone ? 1 : 0}`
    
    await fetch(url, {method: "GET"})
        .then((response) => response.json())
        .then((json) => console.log(json));
    console.log("final request")
}