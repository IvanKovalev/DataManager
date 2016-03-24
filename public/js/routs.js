define(function () {


    $(document).ready(function () {

        (function ($) {
            $.fn.router = function () {
                var self = this;
                self.show = (function () {
                    $.ajax({
                        url: $(this).attr('name'),
                        type: "GET",
                        dataType: 'json',
                        success: function (data) {

                            (function (data) {
                                renderfilters(data['columns']);
                                renderElements(data['allData']);
                                mixItUpInit();
                            }(data));

                        }
                    });
                });
                self.create = (function () {
                });
                self.update = (function () {
                });
                self.delete = (function () {
                });

                function renderElements(data) {
                    $("#grid").empty();
                    data.forEach(function (item, i, data) {
                        $("#grid").append('<tr></tr>');
                        for (var key in item) {
                            var td = document.createElement("td");
                            td.className = 'mix ' + key;
                            td.innerHTML = item[key];
                            $("#grid tr:last").append(td);
                        }

                    });


                }

                function renderfilters(data) {
                    $(".filter-list").empty();
                    $(".filter-list").append('<th class="filter btn btn-default btn-xs" data-filter="all" ><a>All</a></th>');
                    for (var key in data) {
                        var th = document.createElement("th");
                        th.className = 'filter btn btn-default btn-xs';
                        th.setAttribute('data-filter', '.' + data[key]);
                        th.innerHTML = "<a>" + data[key] + "</a>";
                        $(".filter-list").append(th);

                    }

                }

                function mixItUpInit() {
                    var opt = {
                        selectors: {
                            target: '.mix',
                            filter: '.filter'
                        },

                        controls: {
                            enable: true,
                            acticeClass: 'on',
                            toggleFilterButtons: true

                        },
                        animation: {
                            enable: false

                        },
                        load: {
                            filter: 'none'
                        },
                        layout: {
                            display: 'inline-block'
                        }
                    };
                    if ($('#gallery').mixItUp('isLoaded')) {
                        $('#gallery').mixItUp('destroy');
                        $('#gallery').mixItUp(opt);
                    } else {
                        $('#gallery').mixItUp(opt);
                    }


                }

                return self;
            };
        })(jQuery);


    });


});
