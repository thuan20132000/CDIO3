
  
  
  <?php 
    require_once ("header.php");
  ?>






  


    <!--  -->
    <div id="slider-carousel" class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                   
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 slider-img" src="photo/slider1.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 slider-img" src="photo/slider2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 slider-img" src="photo/slider3.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                  <div id="form-search" >
                        <div class="row autocomplete" style="padding:0">
                               
                                        <form action="" >

                                        <label for="from">Điểm Đi:</label>
                                        <input name="from" id="myInput" type="text" size='20' >
                                        <label for="to">Điểm Đến: </label>
                                        <input name="to" id="myInput" type="text" size='20' >
                                      
                                         <label for="depart">Ngày: </label>
                                         <input name="depart" class="inputDate" type="date" size="10" >
                                  
                                        
                                        <button id="btnSearch" >Tìm Kiêm</button>
                                         </form>
                        </div>
                    

                         
                       
                     
                  </div>
    </div>

   
  <!--  -->
    <content>
            <div id="hotRoute" class="container">
                <div id="hotRoute-header" class="row">
                    <h4>Cac tuyen xe pho bien xuat phat tu
                        <select name="depart-city" id="depart-city">
                                <option value="">Ha Noi</option>
                                <option value="">Da Nang</option>
                                <option value="">TP. HCM</option>
                                <option value="">Nha Trang</option>
                        </select> 
                       
                    </h4>
                    

                </div>
                <div id="hotRoute-content" class="row" style="text-align:center">
                        <table >
                            <tr style="width:50%" class="hotRoute-brand">
                                <th class="hx">Hãng Xe</th><th class="cd">Cung Đường</th><th gd>Giờ Đi</th><th class="gv">Giá Vé</th><th class="ct">Chỗ trống</th><th></th>
                            </tr>
                            <tr class="hotRoute-item"> 
                                <td class="hx">Phi Long</td><td class="cd">Ha Noi - TP.HCM </td><td gd>14h30</td><td class="gv">132.000 cnd</td><td class="ct">02</td><td><a href="datve.php">Chon</a></td>
                            </tr>
                            <tr class="hotRoute-item"> 
                                <td class="hx">Phi Long</td><td class="cd">Ha Noi - TP.HCM </td><td gd>14h30</td><td class="gv">132.000 cnd</td><td class="ct">02</td><td><a href="datve.php">Chon</a></td>
                            </tr>
                            <tr class="hotRoute-item"> 
                                <td class="hx">Phi Long</td><td class="cd">Ha Noi - TP.HCM </td><td gd>14h30</td><td class="gv">132.000 cnd</td><td class="ct">02</td><td><a href="datve.php">Chon</a></td>
                            </tr>
                            <tr class="hotRoute-item"> 
                                <td class="hx">Phi Long</td><td class="cd">Ha Noi - TP.HCM </td><td gd>14h30</td><td class="gv">132.000 cnd</td><td class="ct">02</td><td><a href="datve.php">Chon</a></td>
                            </tr>
                            <tr class="hotRoute-item"> 
                                <td class="hx">Phi Long</td><td class="cd">Ha Noi - TP.HCM </td><td gd>14h30</td><td class="gv">132.000 cnd</td><td class="ct">02</td><td><a href="datve.php">Chon</a></td>
                            </tr>
                            <tr class="hotRoute-item"> 
                                <td class="hx">Phi Long</td><td class="cd">Ha Noi - TP.HCM </td><td gd>14h30</td><td class="gv">132.000 cnd</td><td class="ct">02</td><td><a href="datve.php">Chon</a></td>
                            </tr>
                            <tr class="hotRoute-item"> 
                                <td class="hx">Phi Long</td><td class="cd">Ha Noi - TP.HCM </td><td gd>14h30</td><td class="gv">132.000 cnd</td><td class="ct">02</td><td><a href="datve.php">Chon</a></td>
                            </tr>
                            <tr class="hotRoute-item"> 
                                <td class="hx">Phi Long</td><td class="cd">Ha Noi - TP.HCM </td><td gd>14h30</td><td class="gv">132.000 cnd</td><td class="ct">02</td><td><a href="datve.php">Chon</a></td>
                            </tr>
                            
                                
                           

                        </table>
                        
                       
                </div>
                <h4 style="margin-left:50%;margin-top:16px;"><a style="border-bottom:1px solid blue" href="datve.php">Xem them</a></h4>
            </div>
            <!--  -->
            
            <div class="container" style="margin-top:50px;" >
                    <div id="companyBrand-header" class="row">
                            <h3>Dia Diem Ban Ve Gan Nhat</h3>
                     </div>
                     <br>
                   <div id="map" style="width:100%;height:300px">

                   </div>
                </div>
            <!--  -->
            <div id="companyBrand" class="container">
                    <div id="companyBrand-header" class="row">
                           <h3>Cac Hang Xe Pho Bien</h3>
                    </div>
                    <div id="companyBrand-content" class="row">
                            <div class="card col-lg-3 col-md-4 col-sm-12 col-xs-12 " style="width: auto;padding: 0;">
                                    <a href="#"><img class="card-img-top" src="photo/xe1.png" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Nha Xe 1</h5>
                                      <p class="card-text">Nếu dịch vụ của chúng tôi đã đáp ứng được mong đợi của khách hàng, hãy dành cho chúng tôi một sự động viên, khích lệ</p>
                                      <a href="#" class="btn btn-primary">Chi tiet</a>
                                    </div>
                                    </a>
                             </div>
                             <div class="card col-lg-3 col-md-4 col-sm-12 col-xs-12 " style="width: auto;padding: 0;">
                                    <a href="#"><img class="card-img-top" src="photo/xe1.png" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Nha Xe 1</h5>
                                      <p class="card-text">Nếu dịch vụ của chúng tôi đã đáp ứng được mong đợi của khách hàng, hãy dành cho chúng tôi một sự động viên, khích lệ</p>
                                      <a href="#" class="btn btn-primary">Chi tiet</a>
                                    </div>
                                    </a>
                             </div>
                             <div class="card col-lg-3 col-md-4 col-sm-12 col-xs-12 " style="width: auto;padding: 0;">
                                    <a href="#"><img class="card-img-top" src="photo/xe1.png" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Nha Xe 1</h5>
                                      <p class="card-text">Nếu dịch vụ của chúng tôi đã đáp ứng được mong đợi của khách hàng, hãy dành cho chúng tôi một sự động viên, khích lệ</p>
                                      <a href="#" class="btn btn-primary">Chi tiet</a>
                                    </div>
                                    </a>
                             </div>
                             <div class="card col-lg-3 col-md-4 col-sm-12 col-xs-12 " style="width: auto;padding: 0;">
                                    <a href="#"><img class="card-img-top" src="photo/xe1.png" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Nha Xe 1</h5>
                                      <p class="card-text">Nếu dịch vụ của chúng tôi đã đáp ứng được mong đợi của khách hàng, hãy dành cho chúng tôi một sự động viên, khích lệ</p>
                                      <a href="#" class="btn btn-primary">Chi tiet</a>
                                    </div>
                                    </a>
                             </div>
                             <div class="card col-lg-3 col-md-4 col-sm-12 col-xs-12 " style="width: auto;padding: 0;">
                                    <a href="#"><img class="card-img-top" src="photo/xe1.png" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Nha Xe 1</h5>
                                      <p class="card-text">Nếu dịch vụ của chúng tôi đã đáp ứng được mong đợi của khách hàng, hãy dành cho chúng tôi một sự động viên, khích lệ</p>
                                      <a href="#" class="btn btn-primary">Chi tiet</a>
                                    </div>
                                    </a>
                             </div>
                             <div class="card col-lg-3 col-md-4 col-sm-12 col-xs-12 " style="width: auto;padding: 0;">
                                    <a href="#"><img class="card-img-top" src="photo/xe1.png" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Nha Xe 1</h5>
                                      <p class="card-text">Nếu dịch vụ của chúng tôi đã đáp ứng được mong đợi của khách hàng, hãy dành cho chúng tôi một sự động viên, khích lệ</p>
                                      <a href="#" class="btn btn-primary">Chi tiet</a>
                                    </div>
                                    </a>
                             </div>
                             <div class="card col-lg-3 col-md-4 col-sm-12 col-xs-12 " style="width: auto;padding: 0;">
                                    <a href="#"><img class="card-img-top" src="photo/xe1.png" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Nha Xe 1</h5>
                                      <p class="card-text">Nếu dịch vụ của chúng tôi đã đáp ứng được mong đợi của khách hàng, hãy dành cho chúng tôi một sự động viên, khích lệ</p>
                                      <a href="#" class="btn btn-primary">Chi tiet</a>
                                    </div>
                                    </a>
                             </div>
                             <div class="card col-lg-3 col-md-4 col-sm-12 col-xs-12 " style="width: auto;padding: 0;">
                                    <a href="#"><img class="card-img-top" src="photo/xe1.png" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Nha Xe 1</h5>
                                      <p class="card-text">Nếu dịch vụ của chúng tôi đã đáp ứng được mong đợi của khách hàng, hãy dành cho chúng tôi một sự động viên, khích lệ</p>
                                      <a href="#" class="btn btn-primary">Chi tiet</a>
                                    </div>
                                    </a>
                             </div>

                             
                             
                    </div>




            </div>


    </content>
    <!--  -->









    <?php 
    
    include_once "footer.php";
    ?>