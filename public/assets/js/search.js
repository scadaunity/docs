let searchForm = document.getElementsByClassName('search-form');

window.addEventListener('submit',(e)=>{
    e.preventDefault();
    let form = e.target
    let method = e.target.method
    let url = e.target.action
    console.log(url)
    let input = e.target[0].value

    
    fetch(url, {
        method: method,
        body:new FormData(form),
        headers: {
            'Content-Type': 'application/json'
        }
        })
        .then(response => response.json())
        .then(data => console.log(JSON.parse(data)))
        .catch(error => console.error(JSON.parse(error)))
        
})