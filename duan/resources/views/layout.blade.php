<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('tieudetrang')</title>

  <!-- Css -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/lienhe.css">
  <link rel="stylesheet" href="/css/gioithieu.css">
  <!-- Bootstrap 5 Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

</head>

<body>
  @include('navbar')

  <main>
    @yield('noidung')
  </main>

  <!-- Footer Start -->
  <footer>
    @include('footer')
  </footer>
  <!-- Footer End -->

  <!-- Back-to-top -->
  <button onclick="topFunction()" id="back-top" title="Tải lên">
    <i class="bi bi-arrow-up" style="font-size: 22px;"></i>
  </button>

  <!-- JavaScript -->
  <!-- Include jQuery once -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  
  <!-- Include Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Your custom scripts -->
  <script src="/assets/owlcarousel/owl.carousel.js"></script>
  <script src="/js/script.js"></script>

  <script>
    let mybutton = document.getElementById("back-top");

    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>
