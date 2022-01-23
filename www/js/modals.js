 //Форма обратного звонка

!function(e){"function"!=typeof e.matches&&(e.matches=e.msMatchesSelector||e.mozMatchesSelector||e.webkitMatchesSelector||function(e){for(var t=this,o=(t.document||t.ownerDocument).querySelectorAll(e),n=0;o[n]&&o[n]!==t;)++n;return Boolean(o[n])}),"function"!=typeof e.closest&&(e.closest=function(e){for(var t=this;t&&1===t.nodeType;){if(t.matches(e))return t;t=t.parentNode}return null})}(window.Element.prototype);


document.addEventListener('DOMContentLoaded', function() {

   var modalButtons = document.querySelectorAll('.js-open-modal'),
       overlay      = document.querySelector('.js-overlay-modal'),
       closeButtons = document.querySelectorAll('.js-modal-close');


   modalButtons.forEach(function(item){

    
      item.addEventListener('click', function(e) {

         e.preventDefault();

         var modalId = this.getAttribute('data-modal'),
             modalElem = document.querySelector('.modal_1[data-modal="' + modalId + '"]');

         modalElem.classList.add('active');
         overlay.classList.add('active');
      }); 

   }); 


   closeButtons.forEach(function(item){

      item.addEventListener('click', function(e) {
         var parentModal = this.closest('.modal_1');

         parentModal.classList.remove('active');
         overlay.classList.remove('active');
      });

   }); 


    document.body.addEventListener('keyup', function (e) {
        var key = e.keyCode;

        if (key == 27) {

            document.querySelector('.modal_1.active').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
        };
    }, false);


    overlay.addEventListener('click', function() {
        document.querySelector('.modal_1.active').classList.remove('active');
        this.classList.remove('active');
    });
});



// Форма "Получить результат"


!function(e){"function"!=typeof e.matches&&(e.matches=e.msMatchesSelector||e.mozMatchesSelector||e.webkitMatchesSelector||function(e){for(var t=this,o=(t.document||t.ownerDocument).querySelectorAll(e),n=0;o[n]&&o[n]!==t;)++n;return Boolean(o[n])}),"function"!=typeof e.closest&&(e.closest=function(e){for(var t=this;t&&1===t.nodeType;){if(t.matches(e))return t;t=t.parentNode}return null})}(window.Element.prototype);


document.addEventListener('DOMContentLoaded', function() {

   var modalButtons = document.querySelectorAll('.js-open-modal_result'),
       overlay      = document.querySelector('.js-overlay-modal_result'),
       closeButtons = document.querySelectorAll('.js-modal-close_result');


   modalButtons.forEach(function(item){

    
      item.addEventListener('click', function(e) {

         e.preventDefault();

         var modalId = this.getAttribute('data-modal'),
             modalElem = document.querySelector('.modal_get_result[data-modal="' + modalId + '"]');

         modalElem.classList.add('active');
         overlay.classList.add('active');
      }); 

   }); 


   closeButtons.forEach(function(item){

      item.addEventListener('click', function(e) {
         var parentModal = this.closest('.modal_get_result');

         parentModal.classList.remove('active');
         overlay.classList.remove('active');
      });

   }); 


    document.body.addEventListener('keyup', function (e) {
        var key = e.keyCode;

        if (key == 27) {

            document.querySelector('.modal_get_result.active').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
        };
    }, false);


    overlay.addEventListener('click', function() {
        document.querySelector('.modal_get_result.active').classList.remove('active');
        this.classList.remove('active');
    });
});