// send ajax attribute create
let formAttribute = document.forms.attribute
const succes = document.querySelector('.succes')
formAttribute.addEventListener('submit', async (event) => {
    event.preventDefault()
    let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    const attribute = {
        product_id: formAttribute.product_id.value,
        attr_name:  formAttribute.attr_name.value,
        attr_value: formAttribute.attr_value.value,
    };

    let response =   await fetch('http://localhost:8080/attribute/store', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN':  csrfToken,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(attribute)
        });
        console.log(response.status);
    if (response.status === 200) {
        succes.classList.remove('hidden')
        setTimeout(() => {
            succes.classList.add('hidden')
        }, 2500);
    }
});