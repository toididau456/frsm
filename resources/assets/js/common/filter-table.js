export default class {
    constructor(app) {
        this.app = app;
        this.window = app.window;
        this.jQuery = app.jQuery;
    }

    init() {
        const $ = this.jQuery;

        $(() => {
            const filterTable = $(".table-filterable");
            if (filterTable.length) {
                const inputWrapper = filterTable.find(".table-filterable-inputs");

                var maps = {};

                inputWrapper.find("input").on('keyup', () => {
                    inputWrapper.find("input, select").each((i, input) => {
                        let $input = $(input);
                        maps[$input.attr("name")] = $input.val();
                    });

                    $.post(filterTable.data("url"), maps, (data) => {
                        filterTable.find(".result").html(data);
                    });

                });

                inputWrapper.find("select").change(() => {
                    inputWrapper.find("input:first-child").keyup();
                });
            }
        });
    }
}
