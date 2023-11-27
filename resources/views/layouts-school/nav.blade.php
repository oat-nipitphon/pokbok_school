<nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 0px; background-color: #f162ea;" id="fontNav">
    <div class="container-fluid" style="margin-left: 50px;" id="fontNav">
      <a id="font-menu" class="navbar-brand" href="/" >
            <img src="http://www.thaischool.in.th/images/img/itop_04.png" style="width: 20px; height: 20px;" alt="">
          <label id="fontNav">
            หน้าแรก
          </label>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a id="font-menu" class="nav-link active" aria-current="page" href="{{ route('view.detail-menu', $id=4) }}" style="margin-left: 50px;">
                <img src="http://www.thaischool.in.th/images/img/itop_05.png" id="img-menu" width="20" height="20">
                <label id="fontNav">
                    คณะผู้บริหาร
                </label>
            </a>
          </li>
          <li class="nav-item">
            <a id="font-menu" class="nav-link" href="{{ route('view.detail-menu', $id=5) }}" style="margin-left: 50px;">
                <img src="http://www.thaischool.in.th/images/img/itop_06.png" id="img-menu">

                <label id="fontNav">
                    ข่าวประชาสัมพันธ์
                </label>
            </a>
          </li>
          <li class="nav-item">
            <a id="font-menu" class="nav-link" href="{{ route('view.detail-menu', $id=6) }}" style="margin-left: 50px;">
                <img src="http://www.thaischool.in.th/images/img/itop_07.png" id="img-menu">

                <label id="fontNav">
                    ภาพกิจกรรม
                </label>
            </a>
          </li>
          <li class="nav-item">
            <a id="font-menu" class="nav-link" href="{{ route('view.detail-menu', $id=7) }}" style="margin-left: 50px;">
                <img src="http://www.thaischool.in.th/images/img/itop_01.png" id="img-menu">

                <label id="fontNav">
                    เว็บบอร์ด
                </label>
            </a>
          </li>
          <li class="nav-item">
            <a id="font-menu" class="nav-link" href="{{ route('view.detail-menu', $id=8) }}" style="margin-left: 50px;">
                <img src="http://www.thaischool.in.th/images/img/itop_02.png" id="img-menu">

                <label id="fontNav">
                    สมุดเยี่ยม
                </label>
            </a>
          </li>
          <li class="nav-item">
            <a id="font-menu" class="nav-link" href="{{ route('view.detail-menu', $id=9) }}" style="margin-left: 50px;">
                <img src="http://www.thaischool.in.th/images/img/itop_03.png" alt="" width="30" height="24">

                <label id="fontNav">
                    ติดต่อเรา
                </label>
            </a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>
        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
