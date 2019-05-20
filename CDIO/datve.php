
<?php 
  require_once("header.php");
?>


  

<!-- content here -->

<div id="process-order-wrapper" class="container" >

    <div class="content">
        <h1>Basic Demo</h1>

        <script>
            $(function ()
            {
                $("#wizard").steps({
                    headerTag: "h2",
                    bodyTag: "section",
                    transitionEffect: "slideLeft"
                });
            });
        </script>
    <div id="wizard">
        <h2>Thong tin tuyen</h2>
        <section>
            <div id="choosing-route-form" class="row">
                <div class="choosing-route col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <form action="">
                        <h3>Chon Tuyen</h3>
                        <label for="From">Diem Khoi Hanh</label>
                        <input type="text" disabled value="Ha Noi" name="From">
                        <label for="From">Diem Khoi Hanh</label>
                        <input type="text" disabled value="Ha Noi" name="to">
                        <label for="From">Ngay Khoi Hanh</label>
                        <input type="date" disabled value="Ha Noi" name="to">
                        <label for="From">So Luong Ve</label>
                        <input type="number" min="1"  value="1" name="to">
                    </form>
                </div>
                
                <div class="route-info col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <button class="tablink" onclick="openPage('Home', this, '#adb9d6')">Thông Tin Chung</button>
                        <button class="tablink" onclick="openPage('News', this, '#adb9d6')" id="defaultOpen">Điểm Đón Xe</button>
                        <button class="tablink" onclick="openPage('Contact', this, '#adb9d6')">Điểm Trung Chuyển</button>
                       
                        
                        <div id="Home" class="tabcontent">
                          <h3>Thông tin chung</h3>
                         
                        </div>
                        
                        <div id="News" class="tabcontent">
                          <h3>Điểm đón xe</h3>
                          
                        </div>
                        
                        <div id="Contact" class="tabcontent">
                          <h3>Điểm trung chuyển</h3>
                         
                        </div>
                        
                        
                </div>
            </div>
        </section>

        <h2>Chon ghe</h2>
        <section>
            <p>chon ghe</p>
        </section>

        <h2>Dien Thong Tin</h2>
        <section>
                <div id="order-form">

           
                        <label for="name">Nhap Ho Ten:</label>
                        <input type="text" required>
                        <br>
                        <label for="name">Nhap Ngay Sinh:</label>
                        <input type="date">
                        <br>
                        <label for="name">Nhap So Dien Thoai:</label>
                        <input type="text">
                        <br>
                        <label for="name">Nhap  :</label>
                        <input type="text">
                        <br>
                        <label for="name">Nhap Dia Chi Lien Lac:</label>
                        <input type="text">
            
                        </div>
        </section>

        <h2>Thanh Toan</h2>
        <section>
            <p>Thanh Toan.</p>
        </section>
    </div>
</div>
</div>

<!-- footer for all pages -->
       
       
       
       <?php
       
       require_once("footer.php")
       ?>