<?php $date_level = $_GET['level']; ?>
<?php
  include('conn.php');
  $sql = "SELECT * FROM `teacher` WHERE `idTeacher` LIKE 'cs00$date_level%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

?>

<section id="maincontent" class="maincontent" role="maincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
          <div id="c5" class="csc-frame csc-frame-default">
<div id="c5" class="frame frame-default frame-type-header frame-layout-0"><header><h1 class="">
				ปฏิทิน <?php echo $row["Title"]; echo $row["Name_Surname"]; ?>
			</h1></header></div>

<iframe src="https://calendar.google.com/calendar/b/2/embed?height=600&amp;wkst=1&amp;bgcolor=%23a2a2a2&amp;ctz=Asia%2FBangkok&amp;src=c3NrcnVjczYwQGdtYWlsLmNvbQ&amp;src=dGgudGgjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=1&amp;showPrint=1" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

</div>
<?php
            }
          } else {
            echo "0 results";
          }
          $conn->close();

          ?>
<div id="c2200" class="csc-frame csc-frame-default">
<div id="c2200" class="frame frame-default frame-type-html frame-layout-0"><style>
.message-item {
margin-bottom: 25px;
margin-left: 40px;
position: relative;
}
.message-item .message-inner {
background: #fff;
border: 1px solid #ddd;
border-radius: 3px;
padding: 10px;
position: relative;
}
.message-item .message-inner:before {
border-right: 10px solid #ddd;
border-style: solid;
border-width: 10px;
color: rgba(0,0,0,0);
content: "";
display: block;
height: 0;
position: absolute;
left: -20px;
top: 6px;
width: 0;
}
.message-item .message-inner:after {
border-right: 10px solid #fff;
border-style: solid;
border-width: 10px;
color: rgba(0,0,0,0);
content: "";
display: block;
height: 0;
position: absolute;
left: -18px;
top: 6px;
width: 0;
}
.message-item:before {
background: #fff;
border-radius: 2px;
bottom: -30px;
box-shadow: 0 0 3px rgba(0,0,0,0.2);
content: "";
height: 100%;
left: -30px;
position: absolute;
width: 3px;
}
.message-item:after {
background: #fff;
border: 2px solid #ccc;
border-radius: 50%;
box-shadow: 0 0 5px rgba(0,0,0,0.1);
content: "";
height: 15px;
left: -36px;
position: absolute;
top: 10px;
width: 15px;
}
.clearfix:before, .clearfix:after {
content: " ";
display: table;
}
.message-item .message-head {
border-bottom: 1px solid #eee;
margin-bottom: 8px;
padding-bottom: 8px;
}
.message-item .message-head .avatar {
margin-right: 20px;
}
.message-item .message-head .user-detail {
overflow: hidden;
}
.message-item .message-head .user-detail h5 {
font-size: 16px;
font-weight: bold;
margin: 0;
}
.message-item .message-head .post-meta {
float: left;
padding: 0 15px 0 0;
}
.message-item .message-head .post-meta >div {
color: #333;
font-weight: bold;
text-align: right;
}
.post-meta > div {
color: #777;
font-size: 12px;
line-height: 22px;
}
.message-item .message-head .post-meta >div {
color: #333;
font-weight: bold;
text-align: right;
}
.post-meta > div {
color: #777;
font-size: 12px;
line-height: 22px;
}

</style><div class=""><div class=""><div class=""><div class=""><h5></h5>



           </div></div></div></div></div>

</div>
        </div> <!-- /.maincontent -->
        <div class="col-md-3 col-lg-3">
          <div class="clear-fix space-24"></div>
            <header>
              <h3>SSKRU LINK</h3>
            </header>
          <div class="clear-fix"></div>
            <ul class="mfu-link font-16"><li><a href="http://www.sskru.ac.th/2017/" target="blank">เว็บมหาลัย</a></li><li><a href="https://registable.sskru.ac.th/timetbl/" target="_blank">ตารางเรียนนักศึกษา<br class="hidden-xs hidden-sm">ตารางสอนอาจารย์</a></li><li><a href="mfulinks/clipping-news.html" target="_self">ข่าวสาร ยังไม่ลิ้ง</a></li><li><a href="mfulinks/gallery/all-album.html" target="_self">วิจัย ยังไม่ลิ้ง</a></li><li><a href="https://www.facebook.com/comsci.sskru/" target="_self">ภาพกิจกรรม</a></li><li><a href="http://lib.sskru.ac.th/libsskru/service" target="blank">เว็บไซต์ห้องสมุด</a></li><li><a href="https://registable.sskru.ac.th/cv/" target="_self">สมัครเรียนออลไลน์</a></li><li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfg80IYFq8ATWa1WCJjFbSYi0iWc5qUaTWSFtuli718W6mK7w/viewform?embedded=true&amp;formkey=dG81aEhjc3BTcS14T2Q5YWdHUlpIZGc6MQ" target="_self">สายตรงอธิการบดี</a></li><li><a href="https://www.facebook.com/comsci.sskru/" target="_self">ติดต่อสอบถาม</a></li></ul>
          <div class="clear-fix space-30"></div>

            <header>
            </header>
          </div>
        </div> <!-- /.rightcontent -->
            </div>

        <!-- /.container -->
  </section>
