jQuery(document).ready(function($) {
    let titulo = quizData.slug;
    let clave = 'quiz_' + titulo;

    function cargarQuiz() {
        $('#pregunta').empty();
        $('#opciones').empty();
        $('#anterior, #siguiente').addClass('deshabilitado');

        $.post(quizData.ajax_url, { titulo: titulo }, function(data) {
           
            $('#pregunta').text(data.pregunta);

            data.opciones.forEach(opcion => {
                let boton = $('<button></button>')
                    .addClass('btn boton-quiz m-2')
                    .text(opcion)
                    .click(function() {
                        if (opcion === data.respuesta_correcta) {
                            alert('¡Correcto!');
                            $('#anterior, #siguiente').removeClass('deshabilitado');
                            localStorage.setItem(clave, 'true');
                            $('#opciones button').attr('disabled', true);
                            $('#quiz').fadeOut(1000, function() {
                                $(this).css('opacity', 0);
                            });
                        } else {
                            alert('Incorrecto. Intenta de nuevo.');
                        }
                    });
                $('#opciones').append(boton);
            });

            let btnReintentar = $('<button></button>')
                .addClass('btn btn-danger mt-3')
                .text('Reintentar')
                .click(function() {
                    localStorage.removeItem(clave);
                    cargarQuiz();
                });

            $('#opciones').append('<div class="w-100 text-center"></div>').find('div').append(btnReintentar);
        });
    }

    if (localStorage.getItem(clave) === 'true') {
        $('#pregunta').text('Ya respondiste correctamente esta pregunta.');
        $('#anterior, #siguiente').removeClass('deshabilitado');

        let btnReintentar = $('<button></button>')
            .addClass('btn btn-danger mt-3')
            .text('Reintentar')
            .click(function() {
                localStorage.removeItem(clave);
                cargarQuiz();
            });

        $('#opciones').append(btnReintentar);
    } else {
        cargarQuiz();
    }

    $('#anterior, #siguiente').on('click', function(e) {
        if ($(this).hasClass('deshabilitado')) {
            e.preventDefault();
            alert('Debes responder correctamente el quiz antes de continuar.');
        }
    });
});