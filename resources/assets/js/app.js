import FilterTable from "./common/filter-table"
import Permission from "./user/permission"
import SettingTable from "./setting/update"

class App {
    constructor(window) {
        this.window = window;
        this.jQuery = window.jQuery;
    }

    run() {
        this.setup();
        this.readySetup();

        const filterTable = new FilterTable(this);
        filterTable.init();

        const permission = new Permission(this);
        permission.init();

        const settingTable = new SettingTable(this);
        settingTable.init();
    }

    setup() {
        this.jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    readySetup() {
        const $ = this.jQuery;
        $(() => {
            $('li#parent-list-group a').click(function (event) {
                $('li#parent-list-group ul#sub-list-group').slideUp();
                $(this).parent().children('ul#sub-list-group').slideToggle();
            });
        });
    }
}

(function (window) {
    const app = new App(window);
    app.run();
})(window);
