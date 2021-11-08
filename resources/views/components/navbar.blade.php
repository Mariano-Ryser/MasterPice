<style>
    .navbar-toggler {
    z-index: 2;
    padding: .25rem .75rem;
    font-size: 0.8rem;
    line-height: 0;
    background-color: rgb(40, 83, 109);
    border: 2px solid black;
    /* border-radius: .25rem; */
    transition: box-shadow .15s ease-in-out;
    transition: 0.3s;
    box-shadow: 0px 0px 10px rgb(45, 86, 97);


   }
   .btn-close{
    width: 1em;
    height: 1em;
    border: none;
   }
   .btn-close:hover {
    width: 1em;
    height: 1em;
    border: none;
    border-radius: 8px;
   }

    a:-webkit-any-link {
    color: rgb(255, 255, 255);
    cursor: pointer;
    text-decoration: none;
    font-size: 25px;
}


#formLogout{height: 20px;}
</style>


             {{-- NAVBAR --}}
              <nav class="pb-3 navbar navbar-light p-3 mb-0" style="background-color:rgb(255, 255, 255); position:fixed; width:100% ;border-bottom: solid 2px rgb(0, 0, 0);">
                <div class="container-fluid d-flex justify-content-end sample-row">
                  {{-- <a class="navbar-brand" style="color:rgb(0, 0, 0)" href="#">PNL</a> --}}

                  <h4 class="m-3 color:white" style="color: rgb(0, 0, 0)"> Welcome {{ Auth::user()->spitzname }}</h4>
                  <button class="navbar-toggler"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span  class="navbar-toggler-icon"></span>
                  </button>

                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h4 class="offcanvas-title" id="offcanvasNavbarLabel">Information</h4>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body bg-white">

                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{ route('login') }}"><h4>Home</h3></a>
                        </li>
                        <li class="nav-item">

                          <a class="nav-link" href="/"><h5>_ _ _ _ _ _</h5></a>
                          <a class="nav-link" href="/"><h5>_ _ _ _ _ _</h5></a>
                          <a class="nav-link" href="/"><h5>_ _ _ _ _ _</h5></a>
                          <a class="nav-link" href="/"><h5>_ _ _ _ _ _</h5></a>
                          <a class="nav-link" href="/"><h5>_ _ _ _ _ _</h5></a>
                          <a class="nav-link" href="/"><h5>_ _ _ _ _ _</h5></a>



                        </li>
                        <li >
                            <form id="formLogout" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <h5>{{ __('Log Out') }}</h5>
                                </x-dropdown-link>
                            </form>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
