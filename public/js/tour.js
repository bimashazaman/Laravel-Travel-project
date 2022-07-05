window.onload = () => {

    const tourForm = document.getElementById('tourForm')
    console.log(tourForm);
    tourForm.addEventListener('submit', e => {
        e.preventDefault();
        console.log('form submit');
    })
}