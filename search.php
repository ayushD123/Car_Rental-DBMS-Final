<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.cars-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}
.cars-img,.cars-list .card-body {
    width: calc(50%)
}
.cars-img img{
    border-radius: 5px;
    min-height: 50vh;
    max-width: calc(100%);
}
span.hightlight{
    background: yellow;
}
.carousel,.carousel-inner,.carousel-item{
   min-height: calc(100%)
}
header.masthead,header.masthead:before {
        min-height: 50vh !important;
        height: 50vh !important
    }
.row-items{
    position: relative;
}
.card-left{
    left:0;
}
.card-right{
    right:0;
}
.rtl{
    direction: rtl ;
}
.cars-text{
    justify-content: center;
    align-items: center ;
}
.masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }
.car-details p {
    margin:unset;
}
</style>
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                        <h3 class="text-white"></h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                         <form action="" id="find-car">
                            <div class="row form-group">
                                <!-- <?php echo date("Y-m-d H:i",strtotime($_GET['pickup'])) ?> -->
                              <div class="col-md-4">
                                <label for="" class="control-label text-white">Pickup Date/Time</label>
                                <input type="text" class="form-control datetimepicker" required="" name="pickup" value="<?php echo date("Y-m-d H:i",strtotime($_GET['pickup'])) ?>" autocomplete="off">
                              </div>
                              <div class="col-md-4">
                                <label for="" class="control-label text-white">Drop off Date/Time</label>
                                <input type="text" class="form-control datetimepicker" required="" name="dropoff" value="<?php echo date("Y-m-d H:i",strtotime($_GET['dropoff'])) ?>" autocomplete="off">
                              </div>
                              <div class="col-md-4">
                                <label for="" class="control-label text-white">Category</label>
                                <select class="custom-select select2" name="category_id">
                                  <option value="0">Any</option>
                                  <?php
                                  $qry = $conn->query("SELECT * FROM categories order by name asc");
                                  while($row=$qry->fetch_assoc()):
                                  ?>
                                  <option value="<?php echo $row['id'] ?>" <?php echo $_GET['category_id']== $row['id'] ? "selected" : '' ?>><?php echo $row['name'] ?></option>
                                  <?php endwhile; ?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group ">
                              <center>
                                <button class="btn btn-primary">Find Availability</button>
                              </center>
                            </div>
                          </form>
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>
        <div class="container-fluid mt-3 pt-2">
               
               <div class="row-items">
               <div class="col-lg-12">
                   <div class="row">
                               <div class="col-md-6">
               <div class="card cars-list" data-id="5">
                       <div class="cars-img" card-img-top="">

                           <img src="admin/assets/uploads/civic.jpg" alt="">
                       </div>
                   <div class="card-body">
                       <div class="row align-items-center justify-content-center  h-100">
                           <div class="w-100">
                               <div>
                               <p>
                                   2020 Honda Civic                                </p>
                                <p>
                                   Honda                                </p>
                               <div class="car-details">
                                   <p><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> Coupe</small></p>
                                   <p><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Manual transmission</small></p>
                                   <p><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Gasoline</small></p>  
                                   <p><small><svg class="svg-inline--fa fa-tags fa-w-20 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"></path></svg><!-- <i class="fa fa-tags text-primary"></i> --> 1,200.00 /day</small></p>  
                               </div>
                               <div class="w-100">
                                   <button class="btn-primary btn btn-sm float-right book-cars" type="button" data-id="5">Book Now</button>
                               </div>

                                   <br>
                               </div>
                           </div>
                       </div>
                       

                   </div>
               </div>
               <br>
               </div>
                                               <div class="col-md-6">
               <div class="card cars-list" data-id="4">
                       <div class="cars-img" card-img-top="">

                           <img src="admin/assets/uploads/verna.jpg" alt="">
                       </div>
                   <div class="card-body">
                       <div class="row align-items-center justify-content-center  h-100">
                           <div class="w-100">
                               <div>
                               <p>
                                   Hyundai Verna                                </p>
                                <p>
                                   Hyundai                                </p>
                               <div class="car-details">
                                   <p><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> SEDAN</small></p>
                                   <p><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Automatic transmission</small></p>
                                   <p><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Diesel</small></p>  
                                   <p><small><svg class="svg-inline--fa fa-tags fa-w-20 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"></path></svg><!-- <i class="fa fa-tags text-primary"></i> --> 1,500.00 /day</small></p>  
                               </div>
                               <div class="w-100">
                                   <button class="btn-primary btn btn-sm float-right book-cars" type="button" data-id="4">Book Now</button>
                               </div>

                                   <br>
                               </div>
                           </div>
                       </div>
                       

                   </div>
               </div>
               <br>
               </div>
               <div class="col-md-6">
               <div class="card cars-list" data-id="4">
                       <div class="cars-img" card-img-top="">

                           <img src="admin/assets/uploads/verna.jpg" alt="">
                       </div>
                   <div class="card-body">
                       <div class="row align-items-center justify-content-center  h-100">
                           <div class="w-100">
                               <div>
                               <p>
                                   Hyundai Verna                                </p>
                                <p>
                                   Hyundai                                </p>
                               <div class="car-details">
                                   <p><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> SEDAN</small></p>
                                   <p><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Automatic transmission</small></p>
                                   <p><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Diesel</small></p>  
                                   <p><small><svg class="svg-inline--fa fa-tags fa-w-20 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"></path></svg><!-- <i class="fa fa-tags text-primary"></i> --> 1,500.00 /day</small></p>  
                               </div>
                               <div class="w-100">
                                   <button class="btn-primary btn btn-sm float-right book-cars" type="button" data-id="4">Book Now</button>
                               </div>

                                   <br>
                               </div>
                           </div>
                       </div>
                       

                   </div>
               </div>
               <br>
               </div>
               <div class="col-md-6">
               <div class="card cars-list" data-id="4">
                       <div class="cars-img" card-img-top="">

                           <img src="admin/assets/uploads/dzire.jpg" alt="">
                       </div>
                   <div class="card-body">
                       <div class="row align-items-center justify-content-center  h-100">
                           <div class="w-100">
                               <div>
                               <p>
                                   Swift Dzire                                </p>
                                <p>
                                   Maruti Suzuki                            </p>
                               <div class="car-details">
                                   <p><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> SEDAN</small></p>
                                   <p><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Automatic transmission</small></p>
                                   <p><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Diesel</small></p>  
                                   <p><small><svg class="svg-inline--fa fa-tags fa-w-20 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"></path></svg><!-- <i class="fa fa-tags text-primary"></i> --> 1,500.00 /day</small></p>  
                               </div>
                               <div class="w-100">
                                   <button class="btn-primary btn btn-sm float-right book-cars" type="button" data-id="4">Book Now</button>
                               </div>

                                   <br>
                               </div>
                           </div>
                       </div>
                       

                   </div>
               </div>
               <br>
               </div>
               <div class="col-md-6">
               <div class="card cars-list" data-id="4">
                       <div class="cars-img" card-img-top="">

                           <img src="admin/assets/uploads/thar.jpg" alt="">
                       </div>
                   <div class="card-body">
                       <div class="row align-items-center justify-content-center  h-100">
                           <div class="w-100">
                               <div>
                               <p>
                                   Mahindra Thar                                </p>
                                <p>
                                   Mahindra                                </p>
                               <div class="car-details">
                                   <p><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> Compact SUV</small></p>
                                   <p><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Automatic transmission</small></p>
                                   <p><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Diesel</small></p>  
                                   <p><small><svg class="svg-inline--fa fa-tags fa-w-20 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"></path></svg><!-- <i class="fa fa-tags text-primary"></i> --> 3,500.00 /day</small></p>  
                               </div>
                               <div class="w-100">
                                   <button class="btn-primary btn btn-sm float-right book-cars" type="button" data-id="4">Book Now</button>
                               </div>

                                   <br>
                               </div>
                           </div>
                       </div>
                       

                   </div>
               </div>
               <br>
               </div>
                                               <div class="col-md-6">
               <div class="card cars-list" data-id="3">
                       <div class="cars-img" card-img-top="">

                           <img src="admin/assets/uploads/ford.jpg" alt="">
                       </div>
                   <div class="card-body">
                       <div class="row align-items-center justify-content-center  h-100">
                           <div class="w-100">
                               <div>
                               <p>
                                   2020 Ford Escape                                </p>
                                <p>
                                   Ford                                </p>
                               <div class="car-details">
                                   <p><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> SUV</small></p>
                                   <p><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Continuously variable transmission</small></p>
                                   <p><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Gasoline</small></p>  
                                   <p><small><svg class="svg-inline--fa fa-tags fa-w-20 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"></path></svg><!-- <i class="fa fa-tags text-primary"></i> --> 2,000.00 /day</small></p>  
                               </div>
                               <div class="w-100">
                                   <button class="btn-primary btn btn-sm float-right book-cars" type="button" data-id="3">Book Now</button>
                               </div>

                                   <br>
                               </div>
                           </div>
                       </div>
                       

                   </div>
               </div>
               <br>
               </div>
                                               </div>
               </div>
               </div>
           </div>


<script>
   
    $('.book-cars').click(function(){
        uni_modal("Submit Booking Request","booking.php?car_id="+$(this).attr('data-id')+'&pickup=<?php echo $_GET['pickup'] ?>&dropoff=<?php echo $_GET['dropoff'] ?>','mid-large')
    })
    $('.cars-img img').click(function(){
        viewer_modal($(this).attr('src'))
    })
     $('#find-car').submit(function(e){
        e.preventDefault()
        location.href = 'index.php?page=search&'+$(this).serialize()
      })

</script>