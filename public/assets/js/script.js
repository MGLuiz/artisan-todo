const isDone = document.querySelectorAll(".isDone-checkbox")
const token = document.querySelector('input[name=_token]').value

for (let chkBox of isDone){
    chkBox.addEventListener('change', () => {
        makeIsDone(chkBox.getAttribute('value'), chkBox.checked, token)
    })
}

async function makeIsDone(chkBoxValue, isDone, _token){
    const url = `/task/isDone/`
    
    await fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',  // Required for Laravel CSRF protection
        },
        body: JSON.stringify({id: chkBoxValue, isDone, _token}),
    }).then(response => response.json)
}