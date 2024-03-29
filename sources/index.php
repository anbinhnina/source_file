<?php  if(!defined('_source')) die("Error");
    $upload_file = _upload_hinhanh_l;
    $title_bar = $row_setting['title'];
    $keywords_bar = $row_setting['keywords'];
    $description_bar = $row_setting['description'];
    $row_detail['photo'] = $logo['photo_'.$lang];
    
    $d->reset();
    $d->query("select ten_vi,id,link,photo_vi as photo,thumb_vi as thumb from #_photo where hienthi=1 and type='slider' order by id asc");
    $slider = $d->result_array();

	$d->reset();
	$d->query("select ten_$lang,id,tenkhongdau,photo,giaban,giacu,soluong from #_product where type='product' and banchay=1 and hienthi=1 order by stt,id desc");
	$product_index = $d->result_array();
	

    $d->reset();
    $sql="select p.id as idp,p.ten_vi,p.tenkhongdau,p.photo,p.giaban,p.giacu,p.new,p.soluong,l.id,l.ten_vi as ten,l.tenkhongdau as tenkhongdaul,l.photo as photol,l.slider";
    $sql.=" from #_product p,#_product_list l";
    $sql.=" where p.id_list=l.id and l.type='product' and l.noibat=1 and l.hienthi=1  and p.noibat=1 and p.hienthi=1";
    $sql.=" order by l.stt,l.id desc, p.stt,p.id desc";
    $d->query($sql);
    $result_productlist = $d->result_array();

    foreach ($result_productlist as $key => $val_l) {
        $list_pro[$val_l['id']]['list'] = array('ten'=>$val_l['ten'],'tenkhongdau'=>$val_l['tenkhongdaul'],'id'=>$val_l['id'],'photo'=>$val_l['photol'],'slider'=>$val_l['slider']);
        // tao moi danh sach product theo list
        if($list_pro[$val_l['id']]['product']){
            array_push($list_pro[$val_l['id']]['product'],array('id'=>$val_l['idp'],'ten_vi'=>$val_l['ten_vi'],'tenkhongdau'=>$val_l['tenkhongdau'],'photo'=>$val_l['photo'],'giaban'=>$val_l['giaban'],'giacu'=>$val_l['giacu'],'soluong'=>$val_l['soluong']));
        }else{
            $list_pro[$val_l['id']]['product'] = array();
            array_push($list_pro[$val_l['id']]['product'],array('id'=>$val_l['idp'],'ten_vi'=>$val_l['ten_vi'],'tenkhongdau'=>$val_l['tenkhongdau'],'photo'=>$val_l['photo'],'giaban'=>$val_l['giaban'],'giacu'=>$val_l['giacu'],'soluong'=>$val_l['soluong']));
        }
    }


    $d->reset();
    $d->query("select id,ten_$lang as ten,photo,mota_$lang as mota,tenkhongdau,ngaytao from #_baiviet where type='tintuc' and noibat=1 and hienthi=1 order by stt asc,id desc");
    $news_scroll=$d->result_array();

    $d->reset();
    $d->query("select photo_$lang as photo from #_photo where type='bgemail'");
    $bgemail = $d->fetch_array();


    if(!empty($_POST) && $_POST['input_email']!='' && $_POST['recaptcha_responseEmail']){
        $recaptcha_response = $_POST['recaptcha_responseEmail'];
        
        $ch = curl_init();

        curl_setopt_array($ch,array(

            CURLOPT_URL => $api_url,

            CURLOPT_RETURNTRANSFER => true,

            CURLOPT_ENCODING => "",

            CURLOPT_MAXREDIRS => 10,

            CURLOPT_TIMEOUT => 30,

            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

            CURLOPT_CUSTOMREQUEST => "POST",

            CURLOPT_POSTFIELDS => array(

               'secret' => $secret_key,

               'response' => $recaptcha_response,

            )

        ));

        $recaptcha = curl_exec($ch);
        curl_close($recaptcha);


        $recaptcha = json_decode($recaptcha);

        if($recaptcha->score >= 0.5) { 
            $data2['email'] = $d->escape_str($_POST['input_email']);

            $data2['ngaytao'] = time();
            $data2['hienthi'] = 1;
            $d->setTable('newsletter');
            if($d->insert($data2))
            {
              transfer("Chúc mừng bạn đã đăng ký nhận tin thành công!", "index.php");
            }
        }else{
            transfer("Có lỗi xảy ra!", "index.php");
        }
    }

?>