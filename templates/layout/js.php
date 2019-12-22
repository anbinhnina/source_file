<script language="javascript" type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=<?=$site_key?>"></script>
<script>
    grecaptcha.ready(function () {
      <?php if($com=='lien-he' || $template=='index'){ ?>
        grecaptcha.execute('<?=$site_key?>', { action: 'contact' }).then(function (token) {
            var recaptchaResponseContact = document.getElementById('recaptchaResponseContact');
            recaptchaResponseContact.value = token;
        });
      <?php } ?>
      <?php if($com=='dang-ky'){ ?>
        grecaptcha.execute('<?=$site_key?>', { action: 'register' }).then(function (token) {
            var recaptchaResponseRegister = document.getElementById('recaptchaResponseRegister');
            recaptchaResponseRegister.value = token;
        });
      <?php } ?>
      <?php if($com=='thanh-toan'){ ?>
        grecaptcha.execute('<?=$site_key?>', { action: 'pay' }).then(function (token) {
            var recapchaPay = document.getElementById('recapchaPay');
            recapchaPay.value = token;
        });
      <?php } ?>
        grecaptcha.execute('<?=$site_key?>', { action: 'email' }).then(function (token) {
            var recaptchaResponseEmail = document.getElementById('recaptchaResponseEmail');
            recaptchaResponseEmail.value = token;
        });
    });
</script>

<script >
  $(document).ready(function(e) {
    $('img').each(function(index, element) {
      if(!$(this).attr('alt') || $(this).attr('alt')=='')
      {
        $(this).attr('alt','<?=$row_setting['ten_'.$lang]?>');
      }
     });
   });
</script>

<!--jquery menu response-->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('nav#menu_mb').mmenu({extensions: ["position-right"]});
  });
</script>


<script>
  $(document).ready(function(){
    $(window).scroll(function(){
      var cach_top = $(window).scrollTop();
      var heaigt_header = $('#header_top').height();  

      if(cach_top > heaigt_header){         
        $('#menu_top').addClass('fixed');
      }else{
        $('#menu_top').removeClass('fixed');
      }     
    });
  });
</script>


<script type="text/javascript" src="js/lazyload.min.js"></script>
<script>
  var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#frm_timkiem').submit(function(){
        var str = "";
        $('.txt').each(function(index, el) {
          if($(this).val()!=''){
            str+='&'+$(this).attr('name')+'=';
            str+=$(this).val();
          }
        });
        window.location.href='tim-kiem'+str;
        return false;
    });
  });
</script>


<?php if($template=='news_detail' || $template=='news' || $template=='about'){ ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script  src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570467c6b3882b22"></script>
<?php }?>

<?php if($template=='index'){?>
<script src="js/jssor.slider-26.1.5.min.js"></script>
<script>
  jssor_1_slider_init = function() {
    var jssor_1_SlideshowTransitions = [
      {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
      {$Duration:500,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
      {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
      {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
      {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}
    ];

    var jssor_1_options = {
      $AutoPlay: 1,
      $SlideshowOptions: {
      $Class: $JssorSlideshowRunner$,
      $Transitions: jssor_1_SlideshowTransitions,
      $TransitionsOrder: 1
      },
      $ArrowNavigatorOptions: {
      $Class: $JssorArrowNavigator$
      },
      $BulletNavigatorOptions: {
      $Class: $JssorBulletNavigator$
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_rotator", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 1366;

    function ScaleSlider() {
      var containerElement = jssor_1_slider.$Elmt.parentNode;
      var containerWidth = containerElement.clientWidth;

      if (containerWidth) {

        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

        jssor_1_slider.$ScaleWidth(expectedWidth);
      }
      else {
        window.setTimeout(ScaleSlider, 30);
      }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
  };
</script>
<script>jssor_1_slider_init();</script>

<script>
  function load_project($page,$type,$idlist){
    $.ajax({
      url: 'ajax/load_product.php',
      type: 'POST',
      dataType: 'html',
      data: {id:$type,page:$page},
      })
      .done(function(result) {
        $('#loadlistnew').html(result);
        $('#loadlistnew .pagination li a').click(function(e){
            e.preventDefault();
            if($.isNumeric($(this).text())){
               var pager = $(this).text();
            }else{
               var pager = $(this).data("page");
            }
            load_project(pager,$type,$idlist);
          });          
    })
    .fail(function() {
        console.log("error");
    });
  }
  jQuery(document).ready(function(){
      $idload = $('#loadlistnew').data("type");
      $idlist = $('#loadlistnew').data("id");
      load_project(1,$idload,$idlist);
  });


  function load_congtrinh($page,$type,$idlist){
    $.ajax({
      url: 'ajax/load_baiviet.php',
      type: 'POST',
      dataType: 'html',
      data: {id:$type,page:$page},
      })
      .done(function(result) {
        $('#loadcongtrinh').html(result);
        $('#loadcongtrinh .pagination li a').click(function(e){
            e.preventDefault();
            if($.isNumeric($(this).text())){
               var pager = $(this).text();
            }else{
               var pager = $(this).data("page");
            }
            load_congtrinh(pager,$type,$idlist);
          });          
    })
    .fail(function() {
        console.log("error");
    });
  }
  jQuery(document).ready(function(){
      $idload = $('#loadcongtrinh').data("type");
      $idlist = $('#loadcongtrinh').data("id");
      load_congtrinh(1,$idload,$idlist);
  });
</script>


<!--slick-->
<script src="slick/slick.min.js"></script>
<script>
$(document).ready(function(e){  
  $('.auto_ts').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed:2000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      },
    {
        breakpoint: 901,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      },
    {
        breakpoint: 801,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      },
      {
        breakpoint: 421,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      }
      ]
  }); //end auto_video


  $('.auto_doitac').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed:2000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      },
    {
        breakpoint: 901,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      },
    {
        breakpoint: 651,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      },
      {
        breakpoint: 421,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      }
      ]
  }); //end auto_video

  $('.auto_tintuc').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed:2000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      },
    {
        breakpoint: 701,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      },
      {
        breakpoint: 601,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      },
      {
        breakpoint: 421,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows:false,
        }
      }
      ]
  }); //end auto_video

  $('.auto_playvideo').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed:2000,
  }); //end auto_video
 });
</script>

<!--scroller-->
<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
<script type="text/javascript">
  $(function() {
    $("#scroller").simplyScroll({orientation:'vertical',customClass:'vert',auto:true});
  });
</script>

<!--addon video-->
<script>
  $(document).ready(function(){
    $(".select_video").change(function(){
      var url="https://www.youtube.com/embed/"+$(this).val();
      $(".boxvideo_main iframe").attr('src',url);
    })
  })
</script>

<!--addon video-->
<script>
  $(document).ready(function(){
    $(".img_video").click(function(){
      var url="https://www.youtube.com/embed/"+$(this).attr("data-id");
      $(".box_s_video iframe").attr('src',url);
    })
  })
</script>
<?php }?>




<?php if($source=='product' || $template=='index' || $com=='tim-kiem'){ ?>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript">
    function flyToElement(flyer, flyingTo) {
      var $func = $(this);
      var flyerClone = $(flyer).clone();
      $(flyerClone).css({
        position: 'absolute',
        top: $(flyer).offset().top + "px",
        left: $(flyer).offset().left + "px",
        opacity: 1,
        'z-index': 1000
      }).appendTo($('body'));
      var gotoX = $(flyingTo).offset().left;
      var gotoY = $(flyingTo).offset().top;
      $(flyerClone).animate({
        opacity: 0.4,
        left: gotoX,
        top: gotoY,
        width: $(flyingTo).width(),
        height: $(flyingTo).height()
      }, 700,
      function () {
        $(flyerClone).remove();
      });
    }
    function addtocart(pid,sl,action){
       $.ajax({
         url: 'ajax/add_giohang.php',
         type: 'POST',
         dataType: 'json',
         data: {pid:pid,sl:sl},
       })
       .done(function(result) {
            if(action==1){
             window.location.href='gio-hang';
           }else{
            flyToElement(result.img, $('#numcart'));
            $('#numcart').text(result.sl);
          }
        })
       .fail(function() {
         console.log("error");
       });
    }
  </script>
<?php } ?>
<!--end-->



<?php if($template=='product_detail'){?>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/magiczoomplus.js"></script> 
  <script type="text/javascript" src="js/temp/js_tab.js"></script>
  <script type="text/javascript">
    var owl = $("#owl_img_detail");
    owl.owlCarousel({
      rtl:false,
      loop:false,
      margin:1,
      dots:false,
      nav:false,
      responsive:{
        0:{
          items:4
        },
        600:{
          items:5
        },
        1000:{
          items:6
        }
      }
    });
    $(".next_sub_detail").click(function(){
      owl.trigger('next.owl');
    });
    $(".prev_sub_detail").click(function(){
      owl.trigger('prev.owl');
    });
  </script>
  <script type="text/javascript">
    $('#minus').click(function(event) {
     var number = $('.amount').val();
     if(number > 1) number = parseInt(number) - 1;
     else number = 1;
     $('.amount').val(number);
     return false;
   });
    $('#plus').click(function(event) {
     var number = $('.amount').val();
     number = parseInt(number) + 1;
     $('.amount').val(number);
     return false;
   });
 </script>
<?php } ?>


<?php if($com=='dang-ky' || $com=='thanh-toan'){ ?>
<script type="text/javascript">
  $('#tinhthanh').change(function(event) {
    $('#quanhuyen').load('ajax/load_quanhuyen.php',{id:$(this).val()});
  });
</script>
<?php } ?>

<?php if($com=='dang-ky'){?>
<script>
  var password = document.getElementById("pass")
  , confirm_password = document.getElementById("renew_pass");

  function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
      confirm_password.setCustomValidity('');
    }
  }

  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
</script>
<?php } ?>


<?php if($com=='gio-hang'){ ?>
  <script type="text/javascript" src="js/temp/js_giohang.js"></script>
<?php } ?>


<?php if($com=='thanh-toan'){?>
  <script type="text/javascript">
    var id = $('.radio input[name=httt]:checked').val();
    $('.radio input[name=httt]').click(function() {
      id = $(this).val();
      $('div.content_httt').removeClass('active');
      $('#httt'+id).addClass('active');
    });
  </script>
<?php } ?>



<?php if($template=='index'){ ?>
<script type="text/javascript">
  $('#frmDK').submit(function(event) {
   $.ajax({
     url: 'ajax/ykienkhachhang.php',
     type: 'POST',
     data: $('#frmDK').serialize(),
   })
   .done(function(result) {
    if(result==1){
      alert("Gửi thông tin thành công!");
      $("#frmDK")[0].reset();
    }else if(result==0){
      alert("Hệ thống lỗi, thử lại sau!");
    }else if(result==2){
      alert("Hệ thống cho thấy bạn đang spam dữ liệu");
    }
  })
   .fail(function() {
     console.log("error");
   });
   return false;
 });
</script>
<?php } ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('.frmEmail').submit(function(event) {
      $.ajax ({
        type: "POST",
        url: "ajax/dangky_email.php",
        data: $('.frmEmail').serialize(),
        success: function(result) { 
          if(result==0){
            $('.frmEmail')[0].reset();
            alert('Đăng ký thành công ! ');
          }else if(result==1){
            $('.frmEmail')[0].reset();
            alert('Email đã được đăng ký ! ');
          }else if(result==2){
            alert(' ! Đăng ký không thành công . Vui lòng thử lại ');
          }else{
            alert(' ! Mã xác nhận không đúng ');
          }
        }
      });
      return false;
    });
  });
</script>

<?php if($template=='index'){ ?>
<script>
  var fired = false;
  window.addEventListener("scroll", function(){
    if ((document.documentElement.scrollTop != 0 && fired === false) || (document.body.scrollTop != 0 && fired === false)) {
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.async=true;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      $('.boxfooter_map').html('<?=$row_setting['googlemap']?>');
      $('.boxvideo_main').html('<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?=youtobi($video[0]['links'])?>" frameborder="0" allowfullscreen=""></iframe>');

      $('.chat_facebook').html('<div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-tabs="timeline" data-width="500" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>');

      <?php if($template=='index'){?>
      $('.formchat_main').html('<div class="fb-page chat-item" data-adapt-container-width="true" data-height="300" data-hide-cover="false" data-href="<?=$row_setting['facebook']?>" data-show-facepile="true" data-show-posts="true" data-small-header="true" data-tabs="messages" data-width="300"></div>');
      <?php }?>
      
      fired = true;
    }
  }, true);
</script>
<?php }else{ ?>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.async=true;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      $('.boxfooter_map').html('<?=$row_setting['googlemap']?>');
      $('.boxvideo_main').html('<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?=youtobi($video[0]['links'])?>" frameborder="0" allowfullscreen=""></iframe>');

      $('.chat_facebook').html('<div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-tabs="timeline" data-width="500" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>');

      <?php if($template=='index'){?>
      $('.formchat_main').html('<div class="fb-page chat-item" data-adapt-container-width="true" data-height="300" data-hide-cover="false" data-href="<?=$row_setting['facebook']?>" data-show-facepile="true" data-show-posts="true" data-small-header="true" data-tabs="messages" data-width="300"></div>');
      <?php }?>
</script>
<?php } ?>


<script>
jQuery(document).ready(function(){jQuery(".js-facebook-messenger-box").on("click",function(){jQuery(".js-facebook-messenger-box, .js-facebook-messenger-container").toggleClass("open"),jQuery(".js-facebook-messenger-tooltip").length&&jQuery(".js-facebook-messenger-tooltip").toggle()}),jQuery(".js-facebook-messenger-box").hasClass("cfm")&&setTimeout(function(){jQuery(".js-facebook-messenger-box").addClass("rubberBand animated")},3500),jQuery(".js-facebook-messenger-tooltip").length&&(jQuery(".js-facebook-messenger-tooltip").hasClass("fixed")?jQuery(".js-facebook-messenger-tooltip").show():jQuery(".js-facebook-messenger-box").on("hover",function(){jQuery(".js-facebook-messenger-tooltip").show()}),jQuery(".js-facebook-messenger-close-tooltip").on("click",function(){jQuery(".js-facebook-messenger-tooltip").addClass("closed")}))});
</script>