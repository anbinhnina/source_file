<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>

  <li class="categories_li <?php if($_GET['com']=='info') echo ' activemenu' ?>" id="menu_ttgt"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='gioithieu') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=gioithieu">Giới thiệu</a></li>
    </ul>
  </li>

  <li class="categories_li <?php if($_GET['com']=='product' || $_GET['com']=='order' || $_GET['com']=='excel') echo ' activemenu' ?>" id="menu2"><a href="" title="" class="exp"><span>Sản phẩm</span><strong></strong></a>
    <ul class="sub">
      
      <li<?php if($_GET['act']=='man_list'&& $_GET['type']=='product') echo ' class="this"' ?>><a href="index.php?com=product&act=man_list&type=product">Quản lý danh mục 1</a></li>
      <li<?php if($_GET['act']=='man_cat'&& $_GET['type']=='product') echo ' class="this"' ?>><a href="index.php?com=product&act=man_cat&type=product">Quản lý danh mục 2</a></li>
      <?php /* ?><li<?php if($_GET['act']=='man_item'&& $_GET['type']=='product') echo ' class="this"' ?>><a href="index.php?com=product&act=man_item&type=product">Quản lý danh mục 3</a></li>
      <li<?php if($_GET['act']=='man_sub'&& $_GET['type']=='product') echo ' class="this"' ?>><a href="index.php?com=product&act=man_sub&type=product">Quản lý danh mục 4</a></li><?php */ ?>
      <li<?php if($_GET['act']=='man' && $_GET['type']=='product') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=product">Quản lý sản phẩm</a></li>
      <li<?php if($_GET['com']=='order') echo ' class="this"' ?>><a href="index.php?com=order&act=man">Quản lý đơn hàng</a></li>
    </ul>
  </li> 


  <li class="categories_li <?php if($_GET['com']=='httt') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Hình thức thanh toán</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['com']=='httt') echo ' class="this"' ?>><a href="index.php?com=httt&act=man">Hình thức thanh toán</a></li>
    </ul>
  </li>


  <li class="categories_li <?php if($_GET['com']=='tags' && $_GET['type']=='tags') echo ' activemenu' ?>" id="menu_tags"><a href="" title="" class="exp"><span>Quản lý Tags</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['com']=='tags') echo ' class="this"' ?>><a href="index.php?com=tags&act=man&type=tags">Tags seo</a></li>
    </ul>
  </li>


  <li class="categories_li <?php if($_GET['com']=='baiviet') echo ' activemenu' ?>" id="menu_bv"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='tintuc'&&$_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tintuc">Quản lý tin tức </a></li>
      <li<?php if($_GET['type']=='dichvu') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=dichvu">Quản lý dịch vụ </a></li>
      <li<?php if($_GET['type']=='about') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=about">Quản lý về chúng tôi </a></li>
      <li<?php if($_GET['type']=='chinhsach' && $_GET['com']=='baiviet') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=chinhsach">Quản lý bài viết chính sách</a></li>
    </ul>
  </li>
  
  <?php /* ?><li class="categories_li <?php if($_GET['com']=='bannerqc' && $_GET['type']=='bocongthuong') echo ' activemenu' ?>" id="menu_bct"><a href="" title="" class="exp"><span>ĐK bộ công thương</span><strong></strong></a>
      <ul class="sub">
          
          <li<?php if($_GET['type']=='bocongthuong' && $_GET['com']=='bannerqc') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=bocongthuong" title="">Logo bộ công thương</a></li>
          <li<?php if($_GET['type']=='bocongthuong' && $_GET['com']=='bocongthuong') echo ' class="this"' ?>><a href="index.php?com=bocongthuong&act=man&type=bocongthuong" title="">Hướng dẫn đăng ký bộ công thương</a></li>
      </ul>
  </li><?php*/?>
  <li class="template_li<?php if(($_GET['com']=='setting' || $_GET['com']=='newsletter' || $_GET['com']=='bannerqc' || $_GET['com']=='background'  || $_GET['com']=='company') && $_GET['type']!='bocongthuong') echo ' activemenu' ?>" id="menu5"><a href="#" title="" class="exp"><span>Thông tin công ty</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='logo') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>      
      <li<?php if($_GET['type']=='banner') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=banner" title="">Banner</a></li>
      <li<?php if($_GET['type']=='favicon') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=favicon" title="">Favicon</a></li>
      <li<?php if($_GET['type']=='lienhe') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=lienhe" title="">Liên hệ</a></li>
      <li<?php if($_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=footer" title="">Footer</a></li>
      <li<?php if($_GET['com']=='setting') echo ' class="this"' ?>><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
      <li<?php if($_GET['com']=='newsletter') echo ' class="this"' ?>><a href="index.php?com=newsletter&act=man" title="">Gửi Mail</a></li>
      <?php /*<li<?php if($_GET['com']=='lang') echo ' class="this"' ?>><a href="index.php?com=lang&act=man&type=lang" title="">Define ngôn ngữ</a></li>*/ ?>
    </ul>
  </li>

  <li class="gallery_li<?php if($_GET['com']=='photo') echo ' activemenu' ?>" id="menu7"><a href="#" title="" class="exp"><span>Slider - Mạng xã hội</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=slider" title="">Hình ảnh slider</a></li>
      <li<?php if($_GET['type']=='mxh') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=mxh" title="">Mạng xã hội</a></li>
    </ul>
  </li>

  <li class="marketing_li<?php if($_GET['com']=='video') echo ' activemenu' ?>" id="menu_video"><a href="#" title="" class="exp"><span>Quản lý video</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='video') echo ' class="this"' ?>><a href="index.php?com=video&act=man&type=video" title="">Video</a></li>
    </ul>
  </li>

  <li class="marketing_li<?php if($_GET['com']=='title') echo ' activemenu' ?>" id="menu6"><a href="#" title="" class="exp"><span>Hổ Trợ SEO</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='product') echo ' class="this"' ?>><a href="index.php?com=title&act=capnhat&type=product" title="">Sản phẩm</a></li>
      <li<?php if($_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=title&act=capnhat&type=tintuc" title="">Tin tức</a></li>
      <li<?php if($_GET['type']=='dichvu') echo ' class="this"' ?>><a href="index.php?com=title&act=capnhat&type=dichvu" title="">Dịch vụ</a></li>
      <li<?php if($_GET['type']=='about') echo ' class="this"' ?>><a href="index.php?com=title&act=capnhat&type=about" title="">Về chúng tôi</a></li>
    </ul>
  </li>




  <?php /* ?>
  
  <li class="categories_li <?php if($_GET['com']=='coupon') echo ' activemenu' ?>" id="menu_mgg"><a href="" title="" class="exp"><span>Mã giảm giá</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['com']=='coupon') echo ' class="this"' ?>><a href="index.php?com=coupon&act=man">Quản lý mã giảm giá</a></li>
    </ul>
  </li>
  
  <li class="categories_li <?php if($_GET['com']=='tags' && $_GET['type']!='tags' && $_GET['type']!='tailieu') echo ' activemenu' ?>" id="menu_tags"><a href="" title="" class="exp"><span>Quản lý thuộc tính</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['com']=='tags' && $_GET['type']=='color') echo ' class="this"' ?>><a href="index.php?com=tags&act=man&type=color">Màu</a></li>
      <li<?php if($_GET['com']=='tags' && $_GET['type']=='size') echo ' class="this"' ?>><a href="index.php?com=tags&act=man&type=size">Size</a></li>
    </ul>
  </li>

  <li class="marketing_li<?php if($_GET['com']=='download' || ($_GET['com']=='tags' && $_GET['type']=='tailieu')) echo ' activemenu' ?>" id="menu6"><a href="#" title="" class="exp"><span>Tài liệu</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['com']=='tags' && $_GET['type']=='tailieu') echo ' class="this"' ?>><a href="index.php?com=tags&act=man&type=tailieu">Danh mục cấp 1</a></li>
      <li<?php if($_GET['com']=='download' && $_GET['type']=='tailieu') echo ' class="this"' ?>><a href="index.php?com=download&act=man&type=tailieu" title="">Tài liệu</a></li>
    </ul>
  </li>

  <li class="marketing_li<?php if($_GET['com']=='yahoo' || $_GET['com']=='lkweb') echo ' activemenu' ?>" id="menu6"><a href="#" title="" class="exp"><span>Hổ Trợ Online</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='bgweb') echo ' class="this"' ?>><a href="index.php?com=lkweb&act=man&type=mxh" title="">Mạng xã hội</a></li>
    </ul>
  </li>

  <li class="gallery_li<?php if($_GET['com']=='album') echo ' activemenu' ?>" id="menualbum"><a href="#" title="" class="exp"><span>Thư viện ảnh</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='album') echo ' class="this"' ?>><a href="index.php?com=album&act=man&type=album" title="">Thư viện ảnh</a></li>
    </ul>
  </li>

  <?php */ ?>
</ul>