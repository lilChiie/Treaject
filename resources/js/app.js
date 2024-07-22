import './bootstrap';
import 'flowbite';

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.toggle-replies').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const target = document.getElementById(this.dataset.target);
            if (target) {
                target.classList.toggle('hidden');
            }
        });
    });
});
