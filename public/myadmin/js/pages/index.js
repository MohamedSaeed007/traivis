"use strict";

    
    new Lister({
        el: ".table-1",
        search: !0,
        searchables: ["name", "position", "office"],
        per_page: 5,
        url: "https://SY3Y1U5IKU-dsn.algolia.net/1/indexes/company_staff",
        algolia: { app_key: "SY3Y1U5IKU", api_key: "76d2b4e459b98852f97d02f80962a4e8" },
        table: !0,
        table_headers: { id: { label: "ID" }, name: { label: "Name" }, position: { label: "Position" }, office: { label: "Office" }, start_date: { label: "Start Date" }, salary: { label: "Salary" } },
        templates: {
            tableRow: function (e, a, t) {
                return (
                    "<tr>\n                    <td>" +
                    a.id +
                    "</td>\n                    <td>" +
                    a.name +
                    "</td>\n                    <td>" +
                    a.position +
                    "</td>\n                    <td>" +
                    a.office +
                    "</td>\n                    <td>" +
                    a.start_date +
                    "</td>\n                    <td>$" +
                    parseInt(a.salary).num() +
                    "</td>\n                    </tr>"
                );
            },
            search: function () {
                return '\n                <div class="search-group">\n\n                    <div class="form-group credit-right mb-3" style="max-width: 300px;">\n                        <span class="credit">\n                            Search By <i class="fab fa-algolia"></i> Algolia\n                        </span>\n                        <div class="input-group input-group-merged">\n                            <input type="search" id="lister-search-query" class="form-control lister-search-input" placeholder="Search table...">\n                            <div class="input-group-append">\n                                <div class="input-group-text bg-white">\n                                    <svg viewBox="0 0 1024 1024"><path class="path1" d="M966.070 981.101l-304.302-331.965c68.573-71.754 106.232-165.549 106.232-265.136 0-102.57-39.942-199-112.47-271.53s-168.96-112.47-271.53-112.47-199 39.942-271.53 112.47-112.47 168.96-112.47 271.53 39.942 199.002 112.47 271.53 168.96 112.47 271.53 112.47c88.362 0 172.152-29.667 240.043-84.248l304.285 331.947c5.050 5.507 11.954 8.301 18.878 8.301 6.179 0 12.378-2.226 17.293-6.728 10.421-9.555 11.126-25.749 1.571-36.171zM51.2 384c0-183.506 149.294-332.8 332.8-332.8s332.8 149.294 332.8 332.8-149.294 332.8-332.8 332.8-332.8-149.294-332.8-332.8z"></path></svg>\n                                </div>\n                            </div>\n                        </div>\n                    </div>\n\n                </div> \x3c!-- / .search-group --\x3e';
            },
        },
    }),
    $("span.bar-2").peity("bar", { height: "20px", width: "80px", fill: ["#fab72b"] }),
    new ApexCharts(document.querySelector("#basic-column"), {
        series: [
            { name: "Net Profit", data: [44, 55, 57, 56, 61, 58, 63, 60, 66] },
            { name: "Revenue", data: [76, 85, 101, 98, 87, 105, 91, 114, 94] },
            { name: "Free Cash Flow", data: [35, 41, 36, 26, 45, 48, 52, 53, 41] },
        ],
        colors: ["#6794dc", "#a367dc", "#dc67ab"],
        chart: { type: "bar", height: 285, toolbar: { show: !1 } },
        plotOptions: { bar: { horizontal: !1, columnWidth: "55%", endingShape: "rounded" } },
        dataLabels: { enabled: !1 },
        stroke: { show: !0, width: 2, colors: ["transparent"] },
        xaxis: { categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"] },
        yaxis: { title: { text: "$ (thousands)" } },
        fill: { opacity: 1 },
        legend: { offsetY: 10 },
        tooltip: {
            y: {
                formatter: function (e) {
                    return "$ " + e + " thousands";
                },
            },
        },
    }).render(),
    am4core.ready(function () {
        am4core.useTheme(am4themes_animated);
        for (var e = ["am-donut-1"], a = 0; a < e.length; a++) {
            var t = e[a],
                r = am4core.create(t, am4charts.PieChart);
            (r.startAngle = 160),
                (r.endAngle = 380),
                (r.innerRadius = am4core.percent(40)),
                (r.data = [
                    { country: "Lithuania", litres: 501.9, bottles: 1500 },
                    { country: "Czech Republic", litres: 301.9, bottles: 990 },
                    { country: "Ireland", litres: 201.1, bottles: 785 },
                    { country: "Germany", litres: 165.8, bottles: 255 },
                    { country: "Australia", litres: 139.9, bottles: 452 },
                    { country: "Austria", litres: 128.3, bottles: 332 },
                    { country: "UK", litres: 99, bottles: 150 },
                    { country: "Belgium", litres: 60, bottles: 178 },
                    { country: "The Netherlands", litres: 50, bottles: 50 },
                ]);
            var s = r.series.push(new am4charts.PieSeries());
            (s.dataFields.value = "litres"),
                (s.dataFields.category = "country"),
                (s.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background")),
                (s.slices.template.strokeWidth = 1),
                (s.slices.template.strokeOpacity = 1),
                (s.labels.template.disabled = !0),
                (s.ticks.template.disabled = !0),
                (s.slices.template.states.getKey("hover").properties.shiftRadius = 0),
                (s.slices.template.states.getKey("hover").properties.scale = 1),
                (s.radius = am4core.percent(40)),
                (s.innerRadius = am4core.percent(30));
            var l = s.colors;
            (l.list = [am4core.color(new am4core.ColorSet().getIndex(0))]), (l.stepOptions = { lightness: -0.05, hue: 0 }), (l.wrap = !1);
            var i = r.series.push(new am4charts.PieSeries());
            (i.dataFields.value = "bottles"),
                (i.dataFields.category = "country"),
                (i.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background")),
                (i.slices.template.strokeWidth = 1),
                (i.slices.template.strokeOpacity = 1),
                (i.slices.template.states.getKey("hover").properties.shiftRadius = 0.05),
                (i.slices.template.states.getKey("hover").properties.scale = 1),
                (i.labels.template.disabled = !0),
                (i.ticks.template.disabled = !0);
            var o = r.seriesContainer.createChild(am4core.Label);
            (o.textAlign = "middle"),
                (o.horizontalCenter = "middle"),
                (o.verticalCenter = "middle"),
                o.adapter.add("text", function (e, a) {
                    return "[font-size:18px]total[/]:\n[bold font-size:30px]" + s.dataItem.values.value.sum + "[/]";
                });
        }
    }),
    $(".check-list, .check-list-2").each(function () {
        $(this)
            .find(".custom-control-input")
            .on("change", function (e) {
                $(this).closest(".list-group-item").toggleClass("done");
            }),
            $(this).find(".list-group-item.done .custom-control-input:not(:checked)").prop("checked", !0),
            $(this).find(".list-group-item:not(.done) .custom-control-input:checked").closest(".list-group-item").addClass("done");
    });