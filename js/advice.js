const submit = document.getElementById('submit');
const block = document.getElementById('form');
const sending = document.getElementById('sending');

function nothing() {

}

submit.addEventListener('click', () => {
   block.style.display = "none";
   sending.style.visibility = "visible";
   sending.classList.toggle('move');
   setTimeout(() => { 
    sending.style.visibility = "hidden";
    block.style.display = "block";
    }, 2000);
   
});
