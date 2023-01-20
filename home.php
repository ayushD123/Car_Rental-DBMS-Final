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
}
span.hightlight{
    background: yellow;
}
.banner{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 26vh;
        width: calc(30%);
    }
    .banner img{
        width: calc(100%);
        height: calc(100%);
        cursor :pointer;
    }
.cars-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}

.cars-list .banner {
    width: calc(40%)
}
.cars-list .card-body {
    width: calc(60%)
}
.cars-list .banner img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    min-height: 50vh;
    box-shadow: 1px 0 #e1e1e1;

}
span.hightlight{
    background: yellow;
}
.banner{
   min-height: calc(100%)
}
#carousel-field{
    position: fixed;
    z-index: -1;
    width: calc(100%)
}
#carousel-field, #carsCarousel, #carsCarousel .carousel-inner,#carsCarousel .carousel-item,#carsCarousel img{
    height:calc(100%);
    /*max-height: 60vh*/
} 
.masthead{
    background: unset!important;
    height:calc(80%)!important;
}
.masthead:before{
    content: unset!important;
}
</style>
        
<div>
            <div class="container mt-3 pt-2">
                <h4 class="text-center text-white">Our Vehicles</h4>
                <hr class="divider">
                
                                <div class="card cars-list" data-id="3">
                     <div class="banner">
                                                    <img src="admin/assets/uploads/ford.jpg" alt="">
                                            </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt">2020 Ford Escape</b></h3>
                                <div><small><p><b>Ford</b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt">The redesigned 2020 Ford Escape finishes in the top third of our compact SUV rankings. It has a great predicted reliability rating, a spacious interior, and engaging performance, but its middling interior quality keeps it from being a class leader.</larger>
                                <br>
                                <span><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> SUV</small></span>
                                <span><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Continuously variable transmission</small></span>
                                <span><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Gasoline</small></span>
                                <hr class="divider" style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="3">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                                <div class="card cars-list" data-id="4">
                     <div class="banner">
                                                    <img src="admin/assets/uploads/verna.jpg" alt="">
                                            </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt">Hyundai Verna</b></h3>
                                <div><small><p><b>Hyundai</b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt">Hyundai Verna&nbsp;is a 5 seater Sedan available in a price range of Rs 9.03 - 15.19 Lakh. It is available in 12 variants, 1 engine option and 4 transmission options : Manual,&nbsp;Automatic&nbsp;(CVT),&nbsp;Automatic&nbsp;(Torque Converter) and&nbsp;Automatic&nbsp;(Dual Clutch).</larger>
                                <br>
                                <span><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> SEDAN</small></span>
                                <span><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Automatic transmission</small></span>
                                <span><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Diesel</small></span>
                                <hr class="divider" style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="4">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                                <div class="card cars-list" data-id="5">
                     <div class="banner">
                                                    <img src="admin/assets/uploads/civic.jpg" alt="">
                                            </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt">2020 Honda Civic</b></h3>
                                <div><small><p><b>Honda</b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo accumsan varius efficitur. Sed sit amet massa quam. Aenean dictum urna nulla, nec iaculis ligula ullamcorper eleifend. Nulla imperdiet semper leo. Aliquam elit lectus, cursus sit amet felis sed, sollicitudin sollicitudin dui. Ut placerat consectetur tortor non eleifend. Integer dignissim ex ac dignissim pharetra. Curabitur gravida hendrerit tempus. Nunc fringilla tempor ex quis malesuada. Suspendisse laoreet sem egestas aliquam semper.Curabitur elementum molestie dignissim. Ut vel urna metus. Suspendisse blandit lacus quis mauris ultricies dictum. Quisque accumsan ornare ligula sit amet dignissim. Maecenas a sollicitudin purus. In porta risus enim, congue porttitor sapien efficitur ut. Curabitur finibus enim a massa egestas luctus. Proin ornare ante tincidunt, rutrum mauris id, tristique massa. Quisque convallis neque dui, eu ultricies elit eleifend et. Curabitur nec finibus libero, a iaculis orci. Cras nec dapibus elit. Vivamus blandit dignissim ipsum, nec vestibulum nisl tincidunt tempor. Aliquam ex eros, cursus ac pretium eu, commodo ut eros. Cras id arcu nulla. Cras in ultricies augue.</larger>
                                <br>
                                <span><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> Coupe</small></span>
                                <span><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Manual transmission</small></span>
                                <span><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Gasoline</small></span>
                                <hr class="divider" style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="5">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                                <div class="card cars-list" data-id="5">
                     <div class="banner">
                                                    <img src="admin/assets/uploads/thar.jpg" alt="">
                                            </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt">2022 Mahindra Thar</b></h3>
                                <div><small><p><b>Mahindra</b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo accumsan varius efficitur. Sed sit amet massa quam. Aenean dictum urna nulla, nec iaculis ligula ullamcorper eleifend. Nulla imperdiet semper leo. Aliquam elit lectus, cursus sit amet felis sed, sollicitudin sollicitudin dui. Ut placerat consectetur tortor non eleifend. Integer dignissim ex ac dignissim pharetra. Curabitur gravida hendrerit tempus. Nunc fringilla tempor ex quis malesuada. Suspendisse laoreet sem egestas aliquam semper.Curabitur elementum molestie dignissim. Ut vel urna metus. Suspendisse blandit lacus quis mauris ultricies dictum. Quisque accumsan ornare ligula sit amet dignissim. Maecenas a sollicitudin purus. In porta risus enim, congue porttitor sapien efficitur ut. Curabitur finibus enim a massa egestas luctus. Proin ornare ante tincidunt, rutrum mauris id, tristique massa. Quisque convallis neque dui, eu ultricies elit eleifend et. Curabitur nec finibus libero, a iaculis orci. Cras nec dapibus elit. Vivamus blandit dignissim ipsum, nec vestibulum nisl tincidunt tempor. Aliquam ex eros, cursus ac pretium eu, commodo ut eros. Cras id arcu nulla. Cras in ultricies augue.</larger>
                                <br>
                                <span><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> Coupe</small></span>
                                <span><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Manual transmission</small></span>
                                <span><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Gasoline</small></span>
                                <hr class="divider" style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="5">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                
                <br>
                                <div class="card cars-list" data-id="6">
                     <div class="banner">
                                                    <img src="admin/assets/uploads/dzire.jpg" alt="">
                                            </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt">2022 Swift Dezire</b></h3>
                                <div><small><p><b>Maruti Suzuki</b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet justo accumsan varius efficitur. Sed sit amet massa quam. Aenean dictum urna nulla, nec iaculis ligula ullamcorper eleifend. Nulla imperdiet semper leo. Aliquam elit lectus, cursus sit amet felis sed, sollicitudin sollicitudin dui. Ut placerat consectetur tortor non eleifend. Integer dignissim ex ac dignissim pharetra. Curabitur gravida hendrerit tempus. Nunc fringilla tempor ex quis malesuada. Suspendisse laoreet sem egestas aliquam semper.Curabitur elementum molestie dignissim. Ut vel urna metus. Suspendisse blandit lacus quis mauris ultricies dictum. Quisque accumsan ornare ligula sit amet dignissim. Maecenas a sollicitudin purus. In porta risus enim, congue porttitor sapien efficitur ut. Curabitur finibus enim a massa egestas luctus. Proin ornare ante tincidunt, rutrum mauris id, tristique massa. Quisque convallis neque dui, eu ultricies elit eleifend et. Curabitur nec finibus libero, a iaculis orci. Cras nec dapibus elit. Vivamus blandit dignissim ipsum, nec vestibulum nisl tincidunt tempor. Aliquam ex eros, cursus ac pretium eu, commodo ut eros. Cras id arcu nulla. Cras in ultricies augue.</larger>
                                <br>
                                <span><small><svg class="svg-inline--fa fa-circle fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fa fa-circle text-primary"></i> --> Coupe</small></span>
                                <span><small><svg class="svg-inline--fa fa-cog fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fa fa-cog text-primary"></i> --> Manual transmission</small></span>
                                <span><small><svg class="svg-inline--fa fa-gas-pump fa-w-16 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="gas-pump" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336 448H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h320c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm157.2-340.7l-81-81c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-6.2 6.2-6.2 16.4 0 22.6L416 97.9V160c0 28.1 20.9 51.3 48 55.2V376c0 13.2-10.8 24-24 24s-24-10.8-24-24v-32c0-48.6-39.4-88-88-88h-8V64c0-35.3-28.7-64-64-64H96C60.7 0 32 28.7 32 64v352h288V304h8c22.1 0 40 17.9 40 40v27.8c0 37.7 27 72 64.5 75.9 43 4.3 79.5-29.5 79.5-71.7V152.6c0-17-6.8-33.3-18.8-45.3zM256 192H96V64h160v128z"></path></svg><!-- <i class="fa fa-gas-pump text-primary"></i> --> Gasoline</small></span>
                                <hr class="divider" style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="5">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                                                
            </div>

</div>

</div>
<script>
     $('.read_more').click(function(){
         location.href = "index.php?page=view_car&id="+$(this).attr('data-id')
     })
     $('.banner img').click(function(){
        viewer_modal($(this).attr('src'))
    })
    $('#filter').keyup(function(e){
        var filter = $(this).val()

        $('.card.cars-list .filter-txt').each(function(){
            var txto = $(this).html();
            txt = txto
            if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                $(this).closest('.card').toggle(true)
            }else{
                $(this).closest('.card').toggle(false)
               
            }
        })
    })
</script>