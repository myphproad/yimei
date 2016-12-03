<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title><?php echo empty($page_title) ? C('WEB_SITE_TITLE') : $page_title; ?></title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" type="text/css" href="/Yimei/Public/Home/css/mobile_module.css?v=<?php echo SITE_VERSION;?>" media="all">
    <script type="text/javascript">
		//静态变量
		var SITE_URL = "<?php echo SITE_URL;?>";
		var IMG_PATH = "/Yimei/Public/Home/images";
		var STATIC_PATH = "/Yimei/Public/static";
		var WX_APPID = "<?php echo ($jsapiParams["appId"]); ?>";
		var	WXJS_TIMESTAMP='<?php echo ($jsapiParams["timestamp"]); ?>'; 
		var NONCESTR= '<?php echo ($jsapiParams["nonceStr"]); ?>'; 
		var SIGNATURE= '<?php echo ($jsapiParams["signature"]); ?>';
	</script>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/Yimei/Public/static/bootstrap/js/html5shiv.js?v=<?php echo SITE_VERSION;?>"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/Yimei/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/Yimei/Public/static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="/Yimei/Public/static/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Yimei/Public/static/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="/Yimei/Public/static/zclip/ZeroClipboard.min.js?v=<?php echo SITE_VERSION;?>"></script>
<script type="text/javascript" src="/Yimei/Public/Home/js/dialog.js?v=<?php echo SITE_VERSION;?>"></script>
	<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script type="text/javascript" src="minify.php?f=/Yimei/Public/Home/js/prefixfree.min.js,/Yimei/Public/Home/js/m/dialog.js,/Yimei/Public/Home/js/m/flipsnap.min.js,/Yimei/Public/Home/js/m/mobile_module.js&v=<?php echo SITE_VERSION;?>"></script>
</head>	
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Yimei/Public/static/font-awesome/css/font-awesome.min.css">
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<link href="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/ColorV1/main.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">
<style>
body{
	background:#eee url(<?php echo ($config["background"]); ?>) no-repeat; background-size:100% 100%
}
.container{
	width:auto;
}
.row{
margin:0px;
}
.input-group-addon{
	color:white;
}
</style>
<div class="container">
  <section>
   <?php if(empty($slideshow)): ?><p>&nbsp;</p><p>&nbsp;</p>
   <p>管理员还没有配置幻灯片数据，请先等配置后再看</p>
   <?php else: ?>
   <if condition="!empty($slideshow)">
   <section class="banner"  id="banner">
   		<ul>
       <?php if(is_array($slideshow)): $i = 0; $__LIST__ = $slideshow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
           	<a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["img"]); ?>"/></a>
           	<span class="title" ><?php echo ($vo["title"]); ?></span>
           </li><?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>
       <span class="identify">
       <?php if(is_array($slideshow)): $i = 0; $__LIST__ = $slideshow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><em></em><?php endforeach; endif; else: echo "" ;endif; ?>        
       </span>
   </section><?php endif; ?>
		<div class="mainbg" style="background:#7ABDE9;">
		    <?php if(is_array($config["background_arr"])): $i = 0; $__LIST__ = $config["background_arr"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><input type='hidden' id='bg_<?php echo ($key); ?>' value="<?php echo (get_cover_url($so)); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		  <section>
		<div class="life-body">
			<div class="row">
				<div class="search">
					<form action="<?php echo addons_url('WeiSite://Life/indexSearch');?>"  class="form-horizontal" method="post">
					<div class="input-group">
				    <input name="content"  type="text" class="form-control"><span class="input-group-addon btn-primary">搜索</span>
				    <input type="hidden" name="site" value=""/>
					</div>
					</form>
				</div>
			</div>
			
			<div class="row">
				<div class="clothes">
					<div class="col-md-12">
						<div class="blog-title">
								<div class="">
								<i class="fa fa-sitemap" aria-hidden="true"></i>服饰<a href="<?php echo addons_url('WeiSite://Life/more',array('id'=>$val.id,'type'=>WeisiteClothes));?>"><span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
						</div>
					</div>
					<div class="col-md-12">
							<div id="City" class="" >
								<?php if(is_array($ClothesCity)): $i = 0; $__LIST__ = $ClothesCity;if( count($__LIST__)==0 ) : echo "不限" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(empty($vo["s_province"])): else: ?>
								  <a href="<?php echo addons_url('WeiSite://Life/cityDetail',array('city'=>$vo['s_province'],'type'=>WeisiteClothes));?>">
									  <span class="label label-primary">
									  	 <?php echo ($vo["s_province"]); ?>
									 </span>
								 	</a><?php endif; endforeach; endif; else: echo "不限" ;endif; ?>
							</div>
						</div>
					<div class="col-md-12">
							<div class="row margin-right-left-5">
								<ul class="list-unstyled">
									 <?php if(is_array($clothes)): $i = 0; $__LIST__ = $clothes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="list-unstyled">
											<div class="row">
											<?php if(empty($val["url"])): ?><a href="<?php echo addons_url('WeiSite://Life/indexDetail',array('id'=>$val['id'],'type'=>WeisiteClothes));?>" target="_blank">
														<div class="col-xs-3 col-sm-3 ">
															<img  id="blog-img" a class="img-responsive img-polaroid thumbnail" alt="<?php echo ($val["title"]); ?>" src="<?php echo (url_img_html($vo["thumbnail"])); ?>"/>
														</div>
														<div class="col-xs-9 col-sm-9  blog-content">
															<span id=""><?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?></span><br>
															<span id="description" ><?php echo (msubstr($val["description"],0,40,'utf-8',true)); ?></span>
														</div>
													</a>
											<?php else: ?> 
												<a href="<?php echo ($val["url"]); ?>" target="_blank">
														<div class="col-xs-3 col-sm-3 "><!--/Yimei<?php echo ($val["thumbnail"]); ?>  -->
															<img  id="blog-img" alt="<?php echo ($val["title"]); ?>" class="img-responsive img-polaroid thumbnail" src="<?php echo (url_img_html($vo["thumbnail"])); ?>"/>
														</div>
														<div class="col-xs-9 col-sm-9  blog-content">
															<span id=""><?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?></span><br>
															<span id="description"><?php echo (msubstr($val["description"],0,40,'utf-8',true)); ?></span>
														</div>
													</a><?php endif; ?> 
												
											</div>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="clothes">
					<div class="col-md-12">
						<div class="blog-title">
								<div class="">
								<i class="fa fa-inbox" aria-hidden="true"></i>美食<a href="<?php echo addons_url('WeiSite://Life/more',array('id'=>$vo['id'],'type'=>WeisiteFood));?>"><span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
						</div>
					</div>
					
					<div class="col-md-12">
							<div id="City" class="" >
								<?php if(is_array($FoodCity)): $i = 0; $__LIST__ = $FoodCity;if( count($__LIST__)==0 ) : echo "不限" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(empty($vo["s_province"])): else: ?>
								  <a href="/Yimei/index.php?s=/Home/Addons/cityDetail?city=<?php echo ($vo['s_province']); ?>&type=WeisiteFood">
									  <span class="label label-primary">
									  	 <?php echo ($vo["s_province"]); ?>
									 </span>
								 	</a><?php endif; endforeach; endif; else: echo "不限" ;endif; ?>
							</div>
						</div>
						
					<div class="col-md-12">
							<div class="row">
								<ul class="list-unstyled">
									 <?php if(is_array($food)): $i = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="list-unstyled">
											<div class="row margin-right-left-5">
												<?php if(empty($val["url"])): ?><a href="<?php echo U('Life/detail',array('id'=>$val['aid'],'type'=>WeisiteFood));?>" target="_blank">
														<div class="col-xs-3 col-sm-3 ">
															<img  id="blog-img" class="img-responsive img-polaroid thumbnail" alt="<?php echo ($val["title"]); ?>" src="<?php echo (url_img_html($vo["thumbnail"])); ?>"/>
														</div>
														<div class="col-xs-9 col-sm-9  blog-content">
															<span id=""><?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?></span><br>
															<span id="description"><?php echo (msubstr($val["description"],0,40,'utf-8',true)); ?></span>
														</div>
													</a>
											<?php else: ?> 
												
												<a href="<?php echo ($val["url"]); ?>" target="_blank">
													<div class="col-xs-3 col-sm-3  ">
														<img  id="blog-img" class="img-responsive img-polaroid thumbnail " alt="<?php echo ($val["title"]); ?>" src="<?php echo (url_img_html($vo["thumbnail"])); ?>"/>
													</div>
													<div class="col-xs-9 col-sm-9  blog-content">
														<span id=""><?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?></span><br>
														<span id="description"><?php echo (msubstr($val["description"],0,40,'utf-8',true)); ?></span>
													</div>
												</a><?php endif; ?>
											</div>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="clothes">
					<div class="col-md-12">
						<div class="blog-title">
								<div class="">
								<i class="fa fa-building" aria-hidden="true"></i>房地产<a href="<?php echo addons_url('WeiSite://Life/more',array('id'=>$vo['id'],'type'=>WeisiteHousing));?>"><span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
						</div>
					</div>
						<div class="col-md-12">
							<div id="City" class="" >
								<?php if(is_array($HousingCity)): $i = 0; $__LIST__ = $HousingCity;if( count($__LIST__)==0 ) : echo "不限" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(empty($vo["s_province"])): else: ?>
								  <a href="/Yimei/index.php?s=/Home/Addons/cityDetail?city=<?php echo ($vo['s_province']); ?>&type=WeisiteHousing">
									  <span class="label label-primary">
									  	 <?php echo ($vo["s_province"]); ?>
									 </span>
								 	</a><?php endif; endforeach; endif; else: echo "不限" ;endif; ?>
							</div>
						</div>
					<div class="col-md-12">
							<div class="row">
								<ul class="list-unstyled">
									 <?php if(is_array($housing)): $i = 0; $__LIST__ = $housing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="list-unstyled">
											<div class="row margin-right-left-5">
											<?php if(empty($val["url"])): ?><a href="<?php echo U('Life/detail',array('id'=>$val['aid'],'type'=>WeisiteHousing));?>" target="_blank">
														<div class="col-xs-3 col-sm-3 ">
															<img  id="blog-img"class="img-responsive img-polaroid thumbnail" alt="<?php echo ($val["title"]); ?>" src="<?php echo (url_img_html($vo["thumbnail"])); ?>"/>
														</div>
														<div class="col-xs-9 col-sm-9  blog-content">
															<span id=""><?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?></span><br>
															<span id="description"><?php echo (msubstr($val["description"],0,40,'utf-8',true)); ?></span>
														</div>
													</a>
											<?php else: ?> 
												<a href="<?php echo ($val["url"]); ?>" target="_blank">
													<div class="col-xs-3 col-sm-3  ">
														<img  id="blog-img"  class="img-responsive img-polaroid thumbnail " alt="<?php echo ($val["title"]); ?>" src="/Yimei<?php echo ($val["thumbnail"]); ?>"/>
													</div>
													<div class="col-xs-9 col-sm-9  blog-content">
														<span id=""><?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?></span><br>
														<span id="description"><?php echo (msubstr($val["description"],0,40,'utf-8',true)); ?></span>
													</div>
												</a><?php endif; ?>
											</div>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="clothes">
					<div class="col-md-12">
						<div class="blog-title">
								<div class="">
								<i class="fa fa-car" aria-hidden="true"></i>旅行<a href="<?php echo addons_url('WeiSite://Life/more',array('id'=>$vo['id'],'type'=>WeisiteCarry));?>"><span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
						</div>
					</div>
					<div class="col-md-12">
							<div id="City" class="" >
								<?php if(is_array($CarryCity)): $i = 0; $__LIST__ = $CarryCity;if( count($__LIST__)==0 ) : echo "不限" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(empty($vo["s_province"])): else: ?>
								  <a href="/Yimei/index.php?s=/Home/Addons/cityDetail?city=<?php echo ($vo['s_province']); ?>&type=WeisiteCarry">
									  <span class="label label-primary">
									  	 <?php echo ($vo["s_province"]); ?>
									 </span>
								 	</a><?php endif; endforeach; endif; else: echo "不限" ;endif; ?>
							</div>
						</div>
					<div class="col-md-12">
							<div class="row">
								<ul class="list-unstyled">
									 <?php if(is_array($carry)): $i = 0; $__LIST__ = $carry;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="list-unstyled">
											<div class="row margin-right-left-5">
											<?php if(empty($val["url"])): ?><a href="<?php echo U('Life/more',array('id'=>$val['aid'],'type'=>WeisiteCarry));?>" target="_blank">
														<div class="col-xs-3 col-sm-3 ">
															<img  id="blog-img"  class="img-responsive img-polaroid thumbnail" alt="<?php echo ($val["title"]); ?>" src="<?php echo (url_img_html($vo["thumbnail"])); ?>"/>
														</div>
														<div class="col-xs-9 col-sm-9  blog-content">
															<span id=""><?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?></span><br>
															<span id="description"><?php echo (msubstr($val["description"],0,40,'utf-8',true)); ?></span>
														</div>
													</a>
											<?php else: ?> 
											<a href="<?php echo ($val["url"]); ?>" target="_blank">
													<div class="col-xs-3 col-sm-3 ">
														<img  id="blog-img"  class="img-responsive img-polaroid thumbnail " alt="<?php echo ($val["title"]); ?>" src="<?php echo (url_img_html($vo["thumbnail"])); ?>"/>
													</div>
													<div class="col-xs-9 col-sm-9  blog-content">
															<span id=""><?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?></span><br>
														<span id="description"><?php echo (msubstr($val["description"],0,40,'utf-8',true)); ?></span>
													</div>
												</a><?php endif; ?>
											</div>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</div>
				</div>
			</div>
	</div>
	</section>
	</div>
 <!-- 底部导航 -->
<?php echo ($footer_html); ?>
<!-- 统计代码 -->
<?php if(!empty($config["code"])): ?><p class="hide bdtongji">
<?php echo ($config["code"]); ?>
</p>
<?php else: ?>
<p class="hide bdtongji">
<?php echo ($tongji_code); ?>
</p><?php endif; ?>
</body>
<script src="/Yimei/Public/static/jquery-ui-bootstrap/assets/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
	</div>


<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
  $.WeiPHP.initBanner('#banner',true,5000);
	$.WeiPHP.setRandomColor('.random_color');
	var h=$(window).height();
	$('#weisite').css('min-height',h);
	
	var count = $('.mainbg input').length;
	var i=0;
	 var imgurl='';
	 setInterval(function(){
		imgurl=$('#bg_'+i).val();
// 		 $('.mainbg img').attr('src', imgurl).fadeTo('3000',1);
		$('#weisite').css('background-image',"url("+imgurl+")");
		 i++;
		 if(i==count){
			 i=0;
		 }
	 },3500);
	 
})

</script>
</html>