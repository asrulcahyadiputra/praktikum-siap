!(function (e) {
  "use strict";
  var a = function () {
    this.$realData = [];
  };
  (a.prototype.createBarChart = function (e, a, r, t, o, i) {
    Morris.Bar({
      element: e,
      data: a,
      xkey: r,
      ykeys: t,
      labels: o,
      hideHover: "auto",
      resize: !0,
      gridLineColor: "rgba(173, 181, 189, 0.1)",
      barSizeRatio: 0.2,
      dataLabels: !1,
      barColors: i,
    });
  }),
    (a.prototype.createLineChart = function (e, a, r, t, o, i, n, l, s) {
      Morris.Line({
        element: e,
        data: a,
        xkey: r,
        ykeys: t,
        labels: o,
        fillOpacity: i,
        pointFillColors: n,
        pointStrokeColors: l,
        behaveLikeLine: !0,
        gridLineColor: "rgba(173, 181, 189, 0.1)",
        hideHover: "auto",
        resize: !0,
        pointSize: 0,
        dataLabels: !1,
        lineColors: s,
      });
    }),
    (a.prototype.createDonutChart = function (e, a, r) {
      Morris.Donut({
        element: e,
        data: a,
        resize: !0,
        colors: r,
        backgroundColor: "transparent",
      });
    }),
    (a.prototype.init = function () {
      this.createBarChart(
        "morris-bar-example",
        [
          { y: "Jan", a: 75 },
          { y: "Feb", a: 42 },
          { y: "Mar", a: 75 },
          { y: "Apr", a: 38 },
          { y: "Mei", a: 19 },
          { y: "Jun", a: 93 },
          { y: "Jul", a: 68 },
          { y: "Agu", a: 90 },
          { y: "Sep", a: 65 },
          { y: "Okt", a: 78 },
          { y: "Nov", a: 93 },
          { y: "Des", a: 80 },
        ],
        "y",
        ["a"],
        ["Statistics"],
        ["#9d0208"]
      );
      this.createLineChart(
        "morris-line-example",
        [
          { y: "2008", a: 50, b: 0 },
          { y: "2009", a: 75, b: 50 },
          { y: "2010", a: 30, b: 80 },
          { y: "2011", a: 50, b: 50 },
          { y: "2012", a: 75, b: 10 },
          { y: "2013", a: 50, b: 40 },
          { y: "2014", a: 75, b: 50 },
          { y: "2015", a: 100, b: 70 },
        ],
        "y",
        ["a", "b"],
        ["Series A", "Series B"],
        ["0.9"],
        ["#ffffff"],
        ["#999999"],
        ["#ffba08", "#9d0208"]
      );
      this.createDonutChart(
        "morris-donut-example",
        [
          { label: "Denda", value: 12 },
          { label: "Air", value: 30 },
          { label: "Tunggakan", value: 20 },
        ],
        ["#ffba08", "#9d0208", "#e85d04"]
      );
    }),
    (e.Dashboard1 = new a()),
    (e.Dashboard1.Constructor = a);
})(window.jQuery),
  (function (e) {
    "use strict";
    window.jQuery.Dashboard1.init();
  })();
