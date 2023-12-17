<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tieudetrang')</title>
    <!-- Css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.theme.default.min.css">
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




    <!-- javascript -->
    <script src="/assets/vendors/jquery.min.js"></script>
    <script src="/assets/owlcarousel/owl.carousel.js"></script>

    <script src="/js/script.min.js"></script>
    <script src="/js/script.js"></script>

    <script>
        let mybutton = document.getElementById("back-top");
        
        window.onscroll = function() {scrollFunction()};
        
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

      <script type="text/javascript">
        $(".cart-update").change(function (e){
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quanlity: ele.parents("tr").find(".quanlity").val()
                },
                success: function(response){
                    window.location.reload();
                }
            });
        });

        $(".cart-remove").click(function(e){
            e.preventDefault();
            var ele = $(this);
            if(confirm("Bạn có muốn xóa sản phẩm khỏi giỏ hàng không?")){
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>

        <script type="text/javascript">
          $(".cart-update").change(function (e){
              e.preventDefault();
              var ele = $(this);
              $.ajax({
                  url: '{{ route('update_cart') }}',
                  method: "patch",
                  data: {
                      _token: '{{ csrf_token() }}',
                      id: ele.parents("tr").attr("data-id"),
                      quanlity: ele.parents("tr").find(".quanlity").val()
                  },
                  success: function(response){
                      window.location.reload();
                  }
              });
          });
  
          $(".cart-remove").click(function(e){
              e.preventDefault();
              var ele = $(this);
              if(confirm("Bạn có muốn xóa sản phẩm khỏi giỏ hàng không?")){
                  $.ajax({
                      url: '{{ route('remove_from_cart') }}',
                      method: "DELETE",
                      data: {
                          _token: '{{ csrf_token() }}',
                          id: ele.parents("tr").attr("data-id")
                      },
                      success: function (response) {
                          window.location.reload();
                      }
                  });
              }
          });
      </script>

</body>
</html>