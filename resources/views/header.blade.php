<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
        <a class="navbar-brand" href="#">Nhà Tù ShawShank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/pham-nhan') }}">Danh sách phạm nhân<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/giam-thi') }}">Danh sách giám thị</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/phong-giam') }}">Danh sách phòng giam</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>
    <script type="text/javascript">
            {{--  $(".nav-link").on("click", function(){
                $('.nav-link').addClass('active');
                alert('add active');

        });  --}}

    </script>
