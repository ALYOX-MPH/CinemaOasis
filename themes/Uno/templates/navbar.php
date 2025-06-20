<style>

  #SearchBar{
    max-width:280px;
  }

  @media screen and (min-width: 760px ) {
    #SearchBar{
      min-width:400px;
    }
  }
</style>




<header class=" row">

  <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed  " style="z-index: 1046" id="Nav">

    <div class="container-fluid px-0 justify-content-between  ">

      <!-- LOGO -->
      <div class="Logo_And_Menu ">

        <button class=" p-2 me-0 btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
          <i style="font-size: 30px;" class="bi bi-list"></i>
        </button>

        <a class="navbar-brand " href="#">
          <!-- <img src="modules/Home/views/assets/icons/Alegra.svg" alt=""> -->
        </a>

      </div>



      <!-- SEARCH BAR
      <form class="d-flex  mt-0" role="search" >
        <button type="button" class="btn border ">+</button> 
        <input class=" py-1 px-1 form-control mx-0" id="SearchBar" type="search" placeholder="Buscar..." aria-label="Search">
        <img src="modules/Home/views/assets/icons/Search.svg" id="SEARCHICON" alt="">
      </form> -->

      <!-- BUTTON TOGGLE -->
      <button class="p-0 navbar-toggler border-0 me-4 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="max-width: 20px;">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS -->
      <div class="collapse navbar-collapse flex-grow-0 " id="navbarSupportedContent">

        <ul class="navbar-nav  mb-2 mb-lg-0 align-items-center" id="NavLinks">

          <!-- ? -->
          <li class="nav-item">
            <a class="nav-link my-2my-2active border rounded px-3 py-2" aria-current="page" href="#">
              ?
            </a>
          </li>

          <!-- Leaf icon -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img style="width: 25px;" src="modules/Home/views/assets/icons/leaf.svg" alt="">
            </a>
          </li>


          <!-- MENU  ICON -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i style="font-size: 20px;" class="bi bi-grid-3x3-gap-fill"></i>
            </a>
          </li>

          <!-- Email icon -->
          <li class="nav-item">
            <i style="font-size: 20px;" class="bi bi-envelope"></i>
          </li>

          <!-- User icon -->
          <li class="nav-item">
            <img style="width: 100px;" class="mx-2" width="80px" src="modules/Home/views/assets/icons/Logo-Dreamed-Services.png" alt="">
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/Login/logout">Logout</a>
          </li>

        </ul>
      </div>

    </div>
  </nav>


</header>
