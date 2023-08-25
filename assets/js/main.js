jQuery(document).ready(function () {
  const mediaQuery = window.matchMedia("(min-width: 767px)");

  jQuery("#slick").slick({
    variableWidth: true,
    slidesToShow: 4,
    slidesToScroll: 1,
  });

  jQuery("#slick-congressos").slick({
    variableWidth: true,
    slidesToShow: 4,
    slidesToScroll: 1,
  });

  jQuery("#segundo-dia, #primeiro-dia").on("click", function () {
    jQuery([document.documentElement, document.body]).animate(
      {
        scrollTop: jQuery(this).offset().top - 150,
      },
      0
    );
  });

  // jQuery(".sponsor .row div.p-master").slick({
  //   variableWidth: true,
  //   infinite: false,
  //   slidesToShow: 2,
  //   slidesToScroll: 1,
  //   centerMode: true,
  // });

  // jQuery(".sponsor .row div.p-prata").slick({
  //   variableWidth: true,
  //   infinite: false,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   centerMode: true,
  // });

  // jQuery(".sponsor .row div.p-bronze").slick({
  //   variableWidth: true,
  //   infinite: false,
  //   slidesToShow: 2,
  //   slidesToScroll: 1,
  //   centerMode: true,
  // });

  // jQuery(".sponsor .row div.p-plus").slick({
  //   variableWidth: true,
  //   infinite: false,
  //   slidesToShow: 2,
  //   slidesToScroll: 1,
  //   centerMode: true,
  //   responsive: [
  //     {
  //       breakpoint: 1366,
  //       settings: {
  //         infinite: true,
  //         slidesToShow: 1,
  //       },
  //     },
  //   ],
  // });

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
  tooltipTriggerList.map(function (tooltipTriggerEl) {
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
