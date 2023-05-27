$(document).ready(function () {

    // Добавляем доп секцию для конференции
    $('body').on('click', '[data-add-conference-section]', function () {

        // Кол-во секций
        let number = $(this).attr('data-count');

        $(this).attr('data-count', ++number);

        // Копируем шаблон и вставляем
        let section_template_html = $('[data-section-template]').clone().html();
        let section_template = $(section_template_html);
        section_template.find('[data-section-label]').text(`Секция №${number}`);

        $(this).closest('.form-group').before('<div class="form-group">' +
            section_template.html() + '</div>'
        );
    });

    // Удаляем доп секцию у конференции
    $('body').on('click', '[data-delete-section]', function () {

        // Удаляем текущую
        $(this).closest('.form-group').remove();
    });


    $('.select2').select2();

    $('#summernote').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
    });

    // Датапикеры
    let reg_date_start = $('#reg_date_start').data('date');
    $('#reg_date_start').datetimepicker({
        format: 'L',
        locale: 'ru',
        date: reg_date_start,
    });

    let reg_date_end = $('#reg_date_end').data('date');
    $('#reg_date_end').datetimepicker({
        format: 'L',
        locale: 'ru',
        date: reg_date_end
    });

    let conf_date = $('#conf_date').data('date');
    $('#conf_date').datetimepicker({
        format: 'L',
        locale: 'ru',
        date: conf_date
    });

    //Файл инпут
    bsCustomFileInput.init();

});
