const btnSubmit = document.querySelector('#submitEmail');
const statusForm = document.querySelector('#statusForm');
const alert = document.querySelector('#customAlert');
const alertContent = document.querySelector('.alertText');

document.getElementById('formEmail').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    alert.classList.add("alertLoad");
    alert.classList.add("show");
    alertContent.textContent = 'Sending Message';

    const formData = new FormData(this); // Get form data
    const xhr = new XMLHttpRequest();

    xhr.open('POST', 'App/emailHandler.php', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            alertContent.textContent = 'Message Sent'
            alert.classList.add("alertDone");
            alert.classList.remove("alertLoad");
            setTimeout(() => {
                alert.classList.remove("show");
                window.location.reload();
            }, 3000);
            console.log(xhr.responseText);
        }
    };

    xhr.send(formData); // Send form data
});