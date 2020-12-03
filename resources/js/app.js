require('./bootstrap');
import Turbolinks from 'turbolinks';
Turbolinks.start()


document.addEventListener("turbolinks:load", function() {
    setTimeout(function(){    
        window.dispatchEvent(new Event('closebar'));
     }, 50); 
});
