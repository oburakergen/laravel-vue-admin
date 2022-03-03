require('./libs/other.min');

(($) => {
    $(document).ready(() => {
        const ddslick = $('select.ddslick');

        if (ddslick.length > 0) {
            ddslick.each((a, b) => {
                const name = $(b).attr('name');
                const id = $(b).attr('id');

                $(`#${id}`).ddslick({
                    width: '100%',
                    imagePosition: 'left',
                    onSelected() {
                        $(`#${id} .dd-selected-value`).prop('name', name);
                    },
                });
            });
        }
    });
})(jQuery);
