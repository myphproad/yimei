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
   <link type="text/css" href="/Yimei/Public/static/jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Yimei/Public/static/font-awesome/css/font-awesome.min.css">
   <!--  <link rel="stylesheet" href="/Yimei/Public/static/bootstrap/css/bootstrap.min.css"> -->
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<link href="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/ColorV1/main.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">
<style>
body{
	background:#eee url(<?php echo ($config["background"]); ?>) no-repeat; background-size:100% 100%
}
</style>
<body id="weisite">
<div class="container">
		    <?php if(empty($slideshow)): ?><p>&nbsp;</p><p>&nbsp;</p>
		    <p>管理员还没有配置幻灯片数据，请先等配置后再看</p>
		    <?php else: ?>
		    <if condition="!empty($slideshow)">
		    <section class="banner"  id="banner">
		    	<ul>
		        <?php if(is_array($slideshow)): $i = 0; $__LIST__ = $slideshow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
		            	<a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["img"]); ?>"/></a>
		            	<span class="title"><?php echo ($vo["title"]); ?></span>
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
			<div class="" >
					<div class="col-md-12">
						<div class="mosque">
							<div id="City" class="" >
								<?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo addons_url('WeiSite://Mosque/indexCityDetail',array('city'=>$vo['province'],'type'=>1));?>" charset="utf-8">
									  <span class="label label-primary">
									  	 <?php echo ($vo["province"]); ?>
									 </span>
								 	</a><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
							</div>
						<!-- 	<div id="myTabContent" class="">
									   <div class="tab-pane fade in active" id="tab-mosque-content">
									    <?php if(is_array($mosque)): $i = 0; $__LIST__ = $mosque;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><a href="/Yimei/index.php?s=/Home/Addons/perMosque?id=<?php echo ($vo["id"]); ?>" id="mosqueName" target="_blank" ><?php echo ($vo["name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
									   </div>
							</div> -->
						</div>
				<div class="col-md-12">
				<p class="bg-info">点击城市即可进入该城市下的清真寺列表哟！</p>
				</div>
			</div>
			<div class="row" data-animated="0">
				<div class="col-md-12">
					<div id="addMosque">
						<cate id="1">
						<a href="<?php echo addons_url('WeiSite://Mosque/indexAdd');?>" class="btn btn-primary btn-block btn-center">我要入驻</a>
						</cate>
					</div>
				</div>
			</div>
			<div class="row" data-animated="0">
				<div class="col-md-12">
					<div id="notice">
						<cate id="1">
						<a href="<?php echo addons_url('WeiSite://MosqueNotice/indexAddNotice');?>" class="btn btn-primary  btn-block btn-center">我要通知</a>
						</cate>
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
 <link href="/Yimei/Public/static/datetimepicker/css/datetimepicker.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">
  <?php if(C('COLOR_STYLE')=='blue_color') echo '
    <link href="/Yimei/Public/static/datetimepicker/css/datetimepicker_blue.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">
    '; ?>
  <link href="/Yimei/Public/static/datetimepicker/css/dropdown.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/Yimei/Public/static/datetimepicker/js/bootstrap-datetimepicker.min.js"></script> 
  <script type="text/javascript" src="/Yimei/Public/static/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js?v=<?php echo SITE_VERSION;?>" charset="UTF-8"></script> 
 
<script src="/Yimei/Public/static/jquery-ui-bootstrap/assets/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
<script src="/Yimei/Public/static/jquery-ui-bootstrap/assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
<!-- <script src="/Yimei/Public/static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->

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