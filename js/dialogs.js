jQuery(document).ready(function($) {

    //Abrir Dialog
    $('[data-type="dialog-triger"]').on('click', function(eventOpen) {
        eventOpen.preventDefault();
        $('.dialog').addClass('is--visible');
    });


    //Cerrar Dialog
    $(document).on('click', function(eventClose){
        if( $(eventClose.target).is('.dialog__close') || $(eventClose.target).is('.dialog') ) {
            eventClose.preventDefault();
            $('.dialog').removeClass('is--visible');
        }
    });

    //Cerrar Dialog con la tecla ESC
    $(document).keyup(function(eventEscape) {
        if(eventEscape.which=='27'){
            $('.dialog').removeClass('is--visible');
        }
    });

});