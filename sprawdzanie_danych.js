/*$function () {
    $('#formularz').validate({
        rules: {
            imie: {
                required: true,
                minlength: 3,
            },
            nazwisko: {
                required: true,
                minlength: 3,
            },
            miejscowosc: 'required',
            ulica: 'required',
            kod: {
                required: true,
                minlength: 5,
                maxlength: 6,
            },
            telefon: 'required',
        },
        messages: {
            imie: {
                required: ' Imię jest wymagane!',
                minlength: ' Podaj min. 3 znaki!',
            },
            nazwisko: {
                required: ' Nazwisko jest wymagane!',
                minlength: ' Podaj min. 3 znaki!',
            },
            miejscowosc: ' Podaj miejscowość!',
            ulica: ' Podaj ulice!',
            kod: {
                required: ' Kod pocztowy jest wymagany!',
                minlength: ' Nie może być mniej niż 5 znaków!',
                maxlength: ' Nie może być więcej niż 6 znaków!',
            },
            telefon: ' Podaj numer telefonu!',
        }
    });
};