export default class {
    constructor(app) {
        this.app = app;
        this.window = app.window;
        this.jQuery = app.jQuery;
    }

    init() {
        const $ = this.jQuery;

        $(() => {
            $(".table-filterable-user").on("click", ".assign-permission", (event) => {
                event.preventDefault();
                const permission = $(event.target);
                const modalContent = $(permission.attr("href") + " .modal-content");
                modalContent.html(modalContent.data("loading"));

                $.get(permission.data("url"), (html) => {
                    modalContent.html(html);
                });
            })
        });

        this.updatePermission();
    }

    updatePermission() {
        const $ = this.jQuery;
        $(() => {
            $(".modal-content-permission").on("click", ".btn-permission", (event) => {
                var form = $(event.target).closest('form');

                event.preventDefault();
                $.post(form.attr('action'), form.serialize());
            });
        });
    }
}
