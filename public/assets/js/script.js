const isDone = document.querySelectorAll(".isDone-checkbox")
const token = document.querySelector('input[name=_token]').value

const doneTasks = document.querySelector('.doneTasks')
const totalTasks = document.querySelector('.total-tasks')

const barPercentage = document.querySelector('.progress-bar-percentage')
barPercentage.innerHTML = `${doneTasks.innerHTML*100 / totalTasks.innerHTML}%`
document.documentElement.style.setProperty('--graph-percentage', barPercentage.innerHTML)

for (let chkBox of isDone){
    chkBox.addEventListener('change', () => {
        makeIsDone(chkBox.getAttribute('value'), chkBox.checked, token)
        updatePercentage(chkBox.checked)  
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
    }).then((response) => {
        doneTasks
    })
}

function updatePercentage(change){
    if (change){
        doneTasks.innerHTML++
        barPercentage.innerHTML = `${doneTasks.innerHTML*100 / totalTasks.innerHTML}%`
        document.documentElement.style.setProperty('--graph-percentage', barPercentage.innerHTML)
    }else{
        doneTasks.innerHTML--
        barPercentage.innerHTML = `${doneTasks.innerHTML*100 / totalTasks.innerHTML}%`
        document.documentElement.style.setProperty('--graph-percentage', barPercentage.innerHTML)
    }
}