<?php
require_once("header.php");

?>

<div class="nav-choosing-route">


    <div class="container ">
        <form id="searchForm" class="form-inline">
            <input type="hidden" id="search-busoperator-id" value="0">
            <input type="hidden" id="search-busoperator-name">
            <div class="form-group">
                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input onfocus="this.select();" onmouseup="return false;" id="departPlace" name="departPlace" type="text" class="ui-autocomplete-input location-search" placeholder="Gõ vào nơi đi" accesskey="1" tabindex="1" autocomplete="off" value="Sài Gòn">
                <input type="hidden" id="start-point-type" value="1">
                <input type="hidden" id="start-point-id" value="29">
            </div>
            <div class="form-group hidden-xs">
                <a href="#" class="switchButton">⇌</a>
            </div>
            <div class="form-group">
                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input onfocus="this.select();" onmouseup="return false;" id="destination" name="destination" type="text" class="ui-autocomplete-input location-search" placeholder="Gõ vào nơi đến" accesskey="2" tabindex="2" autocomplete="off" value="Nha Trang - Khánh Hòa">
                <input type="hidden" id="stop-point-type" value="2">
                <input type="hidden" id="stop-point-id" value="359">

            </div>
            <div class="form-group departDate-fg">
                <i class="fa fa-caret-left" id="mbtPrevDate"></i>
                <i class="fa fa-caret-right" id="mbtNextDate"></i>
                <input id="departDate" readonly="" name="departDate" type="text" class="date calendar-search hasDatepicker" placeholder="Chọn ngày đi" accesskey="1" tabindex="3" value="24-05-2019" selecteddate="true">
                <div class="form-group quick-date-select fr hidden-xs hidden-sm">
                    <button id="btToday" type="button" class="fl btn btn-gray btn-today">Hôm nay</button>
                    <button id="btTomorrow" type="button" class="fl btn btn-gray btn-tomorrow">
                        Ngày mai
                    </button>
                </div>
            </div>
            <div class="form-group pull-right">
                <button id="searchSubmit" name="searchSubmit" type="submit" class="submit-btn btn  search-btn" tabindex="4">
                    Tìm Vé Xe Rẻ
                </button>
            </div>
        </form>
    </div>
    <div class="mobi-display hidden-ms" style="display:none;">
        
    </div>


</div>

<!-- end nav-choosing-route -->


<!-- filter nav -->
<div id="nav-filter" class=" col-12 col-md-12 col-xs-12" style="padding: 0px; margin: 0px; display: block;">
    <div id="nav-filter-wrapper" class="container filter-container">
        
        <ul class="visible-xs filter-mobile-header">
            <li class="hidden-xs filter-title-list">
                Sắp xếp tuyến đường theo:

            </li>
            <li id="li-departure-time" class="dropdown">
                <a href="#" class="dropdown-toggle filter-label" data-toggle="dropdown">Giờ chạy <i class="fa fa-sort-desc" style="right: 0;margin-left: 0px;margin-top: 5px;font-size:20px;"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#" class="fromtime-sort-i sort-asc">Sắp xếp tăng dần</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="fromtime-sort-i sort-desc">Sắp xếp giảm dần</a></li>
                </ul>
            </li>
            <li id="li-rating" class="dropdown">
                <a href="#" class="dropdown-toggle filter-label" data-toggle="dropdown">Đánh giá <i class="fa fa-sort-desc" style="right: 0;margin-left: 0px;margin-top: 5px;font-size:20px;"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#" class="rate-sort-i sort-asc">Sắp xếp tăng dần</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="rate-sort-i sort-desc">Sắp xếp giảm dần</a></li>
                </ul>
            </li>
            <li id="li-fare" class="dropdown">
                <a href="#" class="dropdown-toggle filter-label" data-toggle="dropdown">Giá vé <i class="fa fa-sort-desc" style="right: 0;margin-left: 0px;margin-top: 5px;font-size:20px;"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#" class="fare-sort-i sort-asc">Sắp xếp tăng dần</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="fare-sort-i sort-desc">Sắp xếp giảm dần</a></li>
                </ul>
            </li>
            <li class="li-filter" data-toggle="modal" data-target="#modal-filter-mobi" style="text-align:left;"><a href="#">Lọc theo</a></li>
        </ul>

    </div>
    
</div>

<!-- begin route content -->



<div id="route-content-wrapper" class="container">
    <div class="row route-item-content">
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Phi Long</h5>
                    <span><i class="fas fa-wifi"></i><img src="https://img.icons8.com/office/16/000000/bottle-of-water.png"></span>

            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>21:30</h5>
                    <span>Bến Xe CV 29/3</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>7:30</h5>
                    <span>Bến Xe Nha Trang</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Xe Vip 31 giường</h5>
                    <span>21 Ghế Trống</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Đánh Giá: </h5>
                    <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>250.000 VND</h5>
                    <button>Chon Chỗ</button>
            </div>
    </div>
    <div class="row route-item-content">
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Phi Long</h5>
                    <span><i class="fas fa-wifi"></i><img src="https://img.icons8.com/office/16/000000/bottle-of-water.png"></span>

            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>21:30</h5>
                    <span>Bến Xe CV 29/3</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>7:30</h5>
                    <span>Bến Xe Nha Trang</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Xe Vip 31 giường</h5>
                    <span>21 Ghế Trống</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Đánh Giá: </h5>
                    <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>250.000 VND</h5>
                    <button>Chon Chỗ</button>
            </div>
    </div>
    <div class="row route-item-content">
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Phi Long</h5>
                    <span><i class="fas fa-wifi"></i><img src="https://img.icons8.com/office/16/000000/bottle-of-water.png"></span>

            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>21:30</h5>
                    <span>Bến Xe CV 29/3</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>7:30</h5>
                    <span>Bến Xe Nha Trang</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Xe Vip 31 giường</h5>
                    <span>21 Ghế Trống</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Đánh Giá: </h5>
                    <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>250.000 VND</h5>
                    <button>Chon Chỗ</button>
            </div>
    </div>
    <div class="row route-item-content">
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Phi Long</h5>
                    <span><i class="fas fa-wifi"></i><img src="https://img.icons8.com/office/16/000000/bottle-of-water.png"></span>

            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>21:30</h5>
                    <span>Bến Xe CV 29/3</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>7:30</h5>
                    <span>Bến Xe Nha Trang</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Xe Vip 31 giường</h5>
                    <span>21 Ghế Trống</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Đánh Giá: </h5>
                    <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>250.000 VND</h5>
                    <button>Chon Chỗ</button>
            </div>
    </div>
    <div class="row route-item-content">
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Phi Long</h5>
                    <span><i class="fas fa-wifi"></i><img src="https://img.icons8.com/office/16/000000/bottle-of-water.png"></span>

            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>21:30</h5>
                    <span>Bến Xe CV 29/3</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>7:30</h5>
                    <span>Bến Xe Nha Trang</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Xe Vip 31 giường</h5>
                    <span>21 Ghế Trống</span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>Đánh Giá: </h5>
                    <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            </div>
            <div class="item-info-col col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <h5>250.000 VND</h5>
                    <button>Chon Chỗ</button>
            </div>
    </div>
    


</div>













<!--  begin footer -->
<?php 

require_once("footer.php");

?>