$(document).ready(function () {

    // Добавляем доп секцию для конференции
    $('[data-add-conference-section]').click(function () {

        // Копируем шаблон и вставляем
        let number = $(this).data('count');

        let section_template_html = $('[data-section-template]').clone().html();
        let section_template = $(section_template_html);
        section_template.find('[data-section-label]').text(`Секция №${number + 1}`);
        $(this).data('count', number + 1)

        $(this).closest('.form-group').before('<div class="form-group">' +
            section_template.html() + '</div>'
        );
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
