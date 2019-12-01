$('#example2').calendar({
    type: 'date',
    inline: true,
    text: {
        days: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
        today: 'Aujourd\'hui',
        now: 'Maintenant',
    },
});

$('#validator').click(function () {
    $('#validator').toggleClass('active');
});