$(document).ready(function() {
//  VALORACIÓN RESTAURANTES MÁS POPULARES
    $('.ui.rating').rating();

//  SOBRE TU MESA
    $('.ui.accordion').accordion();

//  NINGÚN MODAL SE PODRÁ CERRAR PULSANDO FUERA
    $('.modal').modal('setting', 'closable', false);

//  FORMULARIOS DE REGISTRO E INICIO DE SESIÓN
    $('.modal.signin').modal('attach events', '.item.signin', 'show');
    $('.modal.login').modal('attach events', '.item.login', 'show');
    $('.close.icon').click(function() {
        $('.modal').trigger('reset');
        $('.formMessage').hide();
        $('.ui.error.message').hide();
//        $('.modal').modal('refresh');
    });
    
    /*  VALIDACIÓN FORMULARIOS POPUP  */
//  VALIDA EL FORMULARIO DE REGISTRO
    var validSignInForm = {
        email: {
            identifier: 'email',
            rules: [{
                    type: 'empty',
                    prompt: 'Por favor, introduce un correo electrónico'
                }, {
                    type: 'email',
                    prompt: 'Por favor, introduce un correo electrónico válido'
                }]
        },
        nombre: {
            identifier: 'nombre',
            rules: [{
                    type: 'empty',
                    prompt: 'Por favor, introduce el nombre de tu restaurante'
                }]
        },
        password: {
            identifier: 'password',
            rules: [{
                    type: 'empty',
                    prompt: 'Por favor, introduce una contraseña'
                }, {
                    type: 'length[6]',
                    prompt: 'La contraseña debe tener al menos 6 caracteres'
                }]
        },
        password2: {
            identifier: 'password2',
            rules: [{
                    type: 'empty',
                    prompt: 'Por favor, vuelve a introducir la contraseña'
                }, {
                    type: 'length[6]',
                    prompt: 'La contraseña debe tener al menos 6 caracteres'
                }, {
                    type: 'match[password]',
                    prompt: 'Las contraseñas no coinciden'
                }]
        }
    };
    $('.ui.form.signin').form(validSignInForm, {
        inline: true,
        onSuccess: sendSignInForm
    });

//  VALIDA LOS FORMULARIOS DE INICIO DE SESIÓN
    var validLogInForm = {
        email: {
            identifier: 'email',
            rules: [{
                    type: 'empty',
                    prompt: 'Por favor, introduce un correo electrónico'
                }, {
                    type: 'email',
                    prompt: 'Por favor, introduce un correo electrónico válido'
                }]
        },
        password: {
            identifier: 'password',
            rules: [{
                    type: 'empty',
                    prompt: 'Por favor, introduce una contraseña'
                }, {
                    type: 'length[6]',
                    prompt: 'La contraseña debe tener al menos 6 caracteres'
                }]
        }
    };
    $('.ui.form.login').form(validLogInForm, {
        inline: true,
        onSuccess: sendLogInForm
    });

//  OBTIENE EL VALOR DE UN CAMPO DE UN FORMULARIO
    function getFieldValue(idForm, fieldName) {
        return $(idForm).form('get field', fieldName).val();
    }

//  ENVÍA EL FORMULARIO DE REGISTRO
    function sendSignInForm() {
        var formData = {
            email: getFieldValue('.ui.form.signin', 'email'),
            nombre: getFieldValue('.ui.form.signin', 'nombre'),
            password: getFieldValue('.ui.form.signin', 'password')
        };
        $.ajax({
            url: "signin",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function(response) {
                $('<div class="formMessage">\n\
                    <h4>' + response.message + '<h4/>\n\
                    <a class="ui small teal button" href="">Aceptar</a>\n\
                   </div>').appendTo(".modal.signin");
                //TRANSICIONES
                $('.ui.error.message').hide();
                $('.form').transition({animation: 'fade down', duration: '500ms',
                    complete: function() {
                        $('.formMessage').show();
                        $('.close.icon').hide();
                    }
                });
            },
            error: function() {
                $('<div class="ui error message">\n\
                    <h4>Hubo un error. No se ha podido completar el registro.</h4>\n\
                   </div>').appendTo(".modal.signin");
            }
        });
    }

//  ENVÍA EL FORMULARIO DE INICIO DE SESIÓN
    function sendLogInForm() {
        var formData = {
            email: getFieldValue('.ui.form.login', 'email'),
            password: getFieldValue('.ui.form.login', 'password')
        };
        $.ajax({
            url: "login",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function(response) {
                if (response.success === true) {
                    document.location.href = 'restaurantes';
                } else if (response.success === false) {
                    $('.ui.error.message').hide();
                    $('<div class="ui error message">\n\
                        <h4>' + response.message + '</h4>\n\
                       </div>').appendTo(".modal.login");
                }
            },
            error: function() {
                $('.ui.error.message').hide();
                $('<div class="ui error message">\n\
                    <h4>Ha habido un error</h4>\n\
                   </div>').appendTo(".modal.login");
            }
        });
    }

//  PÁGINA DE RESTAURANTES
//    $('.modal.datosRestaurante1').modal('show');
//
//    $('.button.siguiente2').click(function() {
//        $('.modal.datosRestaurante2').modal('show');
//        $('.modal.datosRestaurante1').modal('hide');
//    });
//    $('.button.anterior1').click(function() {
//        $('.modal.datosRestaurante1').modal('show');
//        $('.modal.datosRestaurante2').modal('hide');
//    });
//
//    $('.ui.checkbox').checkbox();
//    $('.ui.selection.dropdown').dropdown();

    //FORMULARIO INFORMACIÓN RESTAURANTES
//    $('.ui.segment.informacionRestaurante').transition('fade up');

    //MENU PÁGINA RESTAURANTES
    $('.menu.menuRestaurante.a.item').click(function() {
        $('.a.item').removeClass('active');
        $(this).addClass('active');
    });
    
    //MENU LATERAL
    $('.ui.sidebar.menu').sidebar('show').sidebar('attach events', '.menu.button');
    
    //CUENTA
    $('.modal.changePass').modal('attach events', '.button.changePass', 'show');
    
    //  VALIDA EL FORMULARIO DE CAMBIO DE CONTRASEÑA
    var validChangePassForm = {
        currentPassword: {
            identifier: 'currentPassword',
            rules: [{
                    type: 'empty',
                    prompt: 'Por favor, introduce tu contraseña'
                }, {
                    type: 'length[6]',
                    prompt: 'La contraseña debe tener al menos 6 caracteres'
                }]
        },
        password: {
            identifier: 'password',
            rules: [{
                    type: 'empty',
                    prompt: 'Por favor, introduce una contraseña nueva'
                }, {
                    type: 'length[6]',
                    prompt: 'La contraseña debe tener al menos 6 caracteres'
                }]
        },
        password2: {
            identifier: 'password2',
            rules: [{
                    type: 'empty',
                    prompt: 'Por favor, confirma la nueva contraseña'
                }, {
                    type: 'length[6]',
                    prompt: 'La contraseña debe tener al menos 6 caracteres'
                }, {
                    type: 'match[password]',
                    prompt: 'Las contraseñas nuevas no coinciden'
                }]
        }
    };
    $('.ui.form.changePass').form(validChangePassForm, {
        inline: true,
        onSuccess: sendChangePassForm
    });
    //  ENVÍA EL FORMULARIO DE CAMBIO DE CONTRASEÑA
    function sendChangePassForm() {
        var formData = {
            currentPassword: getFieldValue('.ui.form.changePass', 'currentPassword'),
            password: getFieldValue('.ui.form.changePass', 'newPassword')
        };
        $.ajax({
            url: "changePass",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function(response) {
                if (response.success === true) {
                    $('<div class="formMessage">\n\
                    <h4>' + response.message + '<h4/>\n\
                    <a class="ui small teal button" href="">Aceptar</a>\n\
                    </div>').appendTo(".modal.changePass");
                    //TRANSICIONES
                    $('.ui.error.message').hide();
                    $('.form').transition({animation: 'fade down', duration: '500ms',
                        complete: function() {
                            $('.formMessage').show();
                            $('.close.icon').hide();
                        }
                    });
                } else if (response.success === false) {
                    $('.ui.error.message').hide();
                    $('<div class="ui error message">\n\
                        <h4>' + response.message + '</h4>\n\
                       </div>').appendTo(".modal.changePass");
                }
            },
            error: function() {
                $('.ui.error.message').hide();
                $('<div class="ui error message">\n\
                    <h4>Hubo un error. No se ha podido cambiar la contraseña</h4>\n\
                   </div>').appendTo(".modal.changePass");
            }
        });
    }

});