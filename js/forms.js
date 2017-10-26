jQuery(document).ready(function($){

    // Input focus
    $(document).on('focus', 'input, textarea, select', function() {

        $(this).parent().addClass('form__field--fill form__field--focus');

    });

    // Input focus out
    $(document).on('focusout', 'input, textarea, select', function() {

        $(this).parent().removeClass('form__field--focus');

        if( $(this).val() == '' ){
            $(this).parent().removeClass('form__field--fill');
        }

    });

    // INPUT TYPES //

    // Input pasword
    $(document).on('click', '.toggle-password', function() {

        var $icon = $(this).children('.icon'); //icon
        var $input = $(this).next('.input--password'); //input

        if($icon.hasClass('eye-slash')) {
            $icon.removeClass('eye-slash');
            $icon.addClass('eye');
            $input.attr('type', 'text');
        } else {
            $icon.removeClass('eye');
            $icon.addClass('eye-slash');
            $input.attr('type', 'password');
        }

    });

});

function checkAllInputs() {
    $('input, textarea, select').each(function() {

        if( $(this).val() !== '' ){
            $(this).parent().addClass('form__field--fill');
        }

    });
}