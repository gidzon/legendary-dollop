let menu = document.querySelectorAll('.parent-menu');
for (let liElement of menu) {
    liElement.addEventListener('click', (event) => {
        liElement.children[0].classList.remove('hidden')
    })
}