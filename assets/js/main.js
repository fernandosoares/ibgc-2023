jQuery(document).ready(function () {
  jQuery("#slick").slick({
    variableWidth: true,
    slidesToShow: 4,
    slidesToScroll: 1,
  });

  jQuery("#slick-congressos").slick({
    variableWidth: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  jQuery(".sponsor .row div.p-master").slick({
    variableWidth: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    centerMode: true,
  });

  jQuery(".sponsor .row div.p-prata").slick({
    variableWidth: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
  });

  jQuery(".sponsor .row div.p-bronze").slick({
    variableWidth: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    centerMode: true,
  });

  jQuery(".sponsor .row div.p-plus").slick({
    variableWidth: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: false,
  });

  jQuery("#contador").countdown("2023/10/17 10:00:00", function (event) {
    jQuery("#contador .day").html(event.strftime("%D <span>dias</span>"));
    jQuery("#contador .hour").html(event.strftime("%H <span>horas</span>"));
    jQuery("#contador .minutes").html(
      event.strftime("%M <span>minutos</span>")
    );
    jQuery("#contador .seconds").html(
      event.strftime("%S <span>segundos</span>")
    );
  });

  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  jQuery(".navbar-nav>li>a").on("click", function () {
    jQuery(".navbar-collapse").collapse("hide");
  });

  var currentDate = new Date().toJSON();
  var from = new Date("2022/11/08 00:00:00");
  var to = new Date("2022/12/01 23:59:59");
  var check = new Date(currentDate);

  if (check > from && check < to) {
    jQuery("#modal").modal("show");
  }
});
