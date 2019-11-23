<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="ISO-8859-1">
      <title>Favorite Songs</title>
      {{-- <meta http-equiv="refresh" content="3" /> --}}
      {{-- https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js --}}

      <script src="{{ asset('Full_Project/js/jquery.min.js')}}"></script>
      <script src="{{ asset('Full_Project/js/isotope.pkgd.min.js')}}"></script>
      <link rel="stylesheet" href="{{ asset('Full_Project/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('Full_Project/css/style.css') }}">
   </head>

   <body>

      <!-------------- navbar  -------------->
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
         <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="{{ url('Add_Product') }}">Add Product<span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('add_category') }}">Add Category</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('all_product') }}">View Product</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
            </div>
      </nav>

      <div class="wrapper">
         <div class="container-fluid">
            @yield('body_part')
         </div>         
      </div>


      <!-- Footer -->
      <footer class="footer">
         <div class="text-center py-2">© 2019 Copyright:
            <a href="https://css-tricks.com/couple-takes-sticky-footer/" target="_blank"> Footer Design Click here</a>
         </div>    
      </footer>
      <!-- Footer -->


      <script type="text/javascript">
         $(document).ready( function () {
            $('#search').DataTable();
         } );
      </script>

      <script type="text/javascript">
         // external js: isotope.pkgd.js

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name',
    symbol: '.symbol',
    number: '.number parseInt',
    category: '[data-category]',
    weight: function( itemElem ) {
      var weight = $( itemElem ).find('.weight').text();
      return parseFloat( weight.replace( /[\(\)]/g, '') );
    }
  }
});

// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

// bind sort button click
$('#sorts').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $grid.isotope({ sortBy: sortByValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
  

      </script>



<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

  <script src="js/isotope-docs.min.js?6"></script>





   </body>
</html>