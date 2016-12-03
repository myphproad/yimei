<?php if (!defined('THINK_PATH')) exit();?><html>
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
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><!--  从 CDN 引用 jQuery Mobile-->
 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo ADDON_PUBLIC_PATH;?>/css/wapStyle.css">
 <link rel="stylesheet" href="/Yimei/Public/static/font-awesome/css/font-awesome.min.css">
<!-- 网页自身 -->
 <script type="text/javascript">
		//静态变量
		var IMG_PATH = "/Yimei/Public/Home/images";
		var STATIC_PATH = "/Yimei/Public/static";
		var SITE_URL = "<?php echo SITE_URL;?>";
		var WX_APPID = "<?php echo ($jsapiParams["appId"]); ?>";
		var	WXJS_TIMESTAMP='<?php echo ($jsapiParams["timestamp"]); ?>'; 
		var NONCESTR= '<?php echo ($jsapiParams["nonceStr"]); ?>'; 
		var SIGNATURE= '<?php echo ($jsapiParams["signature"]); ?>';
	</script>
	 <link rel="stylesheet" type="text/css" href="/Yimei/Public/Home/css/mobile_module.css" media="all">
<link href="/Yimei/Public/Home/css/main.css" rel="stylesheet" type="text/css">
  </head>
<body id="pagebody">
	<div data-role="header" id="header" data-position="fixed" data-theme="b" role="banner" class="ui-header ui-bar-b ui-header-fixed slidedown">
        <h1 class="ui-title" role="heading" aria-level="1">伊媒公益</h1>
        <a href="#demo-intro" data-rel="back" data-icon="carat-l" data-iconpos="notext" class="ui-link ui-btn-left ui-btn ui-icon-carat-l ui-btn-icon-notext ui-shadow ui-corner-all" data-role="button" role="button">返回</a>
        <a href="#" onclick="window.location.reload()" data-icon="back" data-iconpos="notext" class="ui-link ui-btn-right ui-btn ui-icon-back ui-btn-icon-notext ui-shadow ui-corner-all" data-role="button" role="button">刷新</a>
    </div>
  <div class="container">	
  <div class="row">
	<!--幻灯片开始  -->
	<?php if(empty($slideshow)): ?><p>&nbsp;</p><p>&nbsp;</p>
   <p>管理员还没有配置幻灯片数据，请先等配置后再看</p>
   <?php else: ?>
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
   </div>
 <!--已有多少人参与  -->
		<div class="row">
			<div class="col-md-12">
			<div class="panel-heading text-center list-group-item-warning love-heart">
			        <span class="glyphicon glyphicon-heart"></span>已有<em id="sumHeart" value="<?php echo ($sumLove); ?>"></em>位人士关注
				</div>
			  </div>
			  </div>
	  	<div class="row">
						<ul class="list-unstyled">
							 <?php if(is_array($categoryRe)): $i = 0; $__LIST__ = $categoryRe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="col-xs-6">
								<li class="list-unstyled">
									<div class="row">
										<a href="<?php echo addons_url('Donation://Wap/listCategory',array('id'=>$val['id']));?>" target="_blank">
												<div class="col-xs-3 col-sm-6 ">
													<img  id="blog-img" a class="img-responsive img-circle thumbnail" alt="<?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?>" src="<?php echo ($val["thumbnail"]); ?>"/>
												</div>
												<div class="col-xs-9 col-sm-6  blog-content">
													<h4  id=""><?php echo (msubstr($val["name"],0,12,'utf-8',true)); ?></h4 >
													<p id="">共有<em id="sumHeart"><?php echo ($val["click"]); ?></em>位人士关注</p>
<!-- 													<p id="">共收到<em id="sumHeart"><?php echo ($val["count_love"]); ?></em>份爱心</p> -->
												</div>
											</a>
									</div>
								</li>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
				</div>
		<div class="row">
			<div class="panel panel-warning">
				  <div class="panel-heading">
				  			<h3>公益项目</h3> 
				  </div>
				  <div class="panel-body">
				   <div class="row">
  				<div class="col-md-12">
							<div class="row margin-right-left-5">
								<ul class="list-unstyled">
									 <?php if(is_array($modelRe)): $i = 0; $__LIST__ = $modelRe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="list-unstyled">
											<div class="row">
												<a href="<?php echo addons_url('Donation://Wap/detail',array('id'=>$val['id']));?>" target="_blank">
														<div class="col-xs-3 col-sm-3 ">
															<img  id="blog-img" a class="img-responsive img-polaroid thumbnail" alt="<?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?>" src="<?php echo ($val["thumbnail"]); ?>"/>
														</div>
														<div class="col-xs-9 col-sm-9  blog-content">
															<h4 id=""><?php echo (msubstr($val["title"],0,12,'utf-8',true)); ?></h4>
															<p id="description" ><?php echo (msubstr($val["description"],0,40,'utf-8',true)); ?></p><br>
															<!-- <div class="progress">
																  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 15px;width: <?php echo ($val["count_money"]); ?>;">
																  	 <?php echo ($val["count_money"]); ?>
																  </div>
																</div> -->
																	<p>
																	<ul class="donation-money-detail">
																	<li>共有<em id="sumHeart"><?php echo ($val["click"]); ?></em>位人士关注</li>
<!-- 																	<li>共收到<em id="sumHeart"><?php echo ($val["count_love"]); ?></em>份爱心</li> -->
																	<li><em>目标</em><em id="sumHeart"><?php echo ($val["summoney"]); ?></em>元</li>
																	</ul>
																	</p>
														</div>
													</a>
											</div>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</div>
				</div>
				</div>
				  </div>
			</div>
				<div class="row" data-animated="0">
				<div class="col-md-12">
					<div id="add-donation">
						<a href="<?php echo addons_url('Donation://Wap/add');?>" class="">我要发布</a>
					</div>
				</div>
			</div>
	</div>
		  <div class="footer" data-role="footer">
<p class="copyright">
 <span class=" text-center">伊媒微时代@伊媒公益</span>
   <span class=" text-center">copyright©2016 <a href="#">亿次元科技</a></span>
   <span  class=" text-center">建议及投诉：ma.running@foxmail.com</span>
</p>
  </div>

		    <!-- 统计代码-->
<div id="site_analytics_code" style="display:none;"> <?php echo (base64_decode($site["site_analytics_code"])); ?> </div>
<?php if(($site["site_online_count"]) == "1"): ?><script src="<?php echo SITE_URL;?>/online_check.php?uid=<?php echo ($mid); ?>&uname=<?php echo ($user["uname"]); ?>&mod=<?php echo MODULE_NAME;?>&app=<?php echo APP_NAME;?>&act=<?php echo ACTION_NAME;?>&action=trace&city=<?php echo session('city');?>"></script><?php endif; ?>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="/Yimei/Public/static/jquery-2.0.3.min.js"></script>
     <script type="text/javascript" src="/Yimei/Public/Home/js/m/mobile_module.js"></script>
  <script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
  	<script type="text/javascript" src="minify.php?f=/Yimei/Public/Home/js/prefixfree.min.js,/Yimei/Public/Home/js/m/dialog.js,/Yimei/Public/Home/js/m/flipsnap.min.js,/Yimei/Public/Home/js/m/mobile_module.js"></script>
</body>
</html>
  	<script type="text/javascript">
  	 $.WeiPHP.initBanner('#banner',true,5000);
 	$.WeiPHP.setRandomColor('.random_color');
 // $.WeiPHP.showShareTips();分享按钮
 	var h=$(window).height();
 	$('#pagebody').css('min-height',h);
 	
 	var count = $('.mainbg input').length;
 	var i=0;
 	 var imgurl='';
 	 setInterval(function(){
 		imgurl=$('#bg_'+i).val();
//  		 $('.mainbg img').attr('src', imgurl).fadeTo('3000',1);
 		$('#weisite').css('background-image',"url("+imgurl+")");
 		 i++;
 		 if(i==count){
 			 i=0;
 		 }
 	 },3500);
 	 
  		setInterval("startRequest()",10000);
  		function startRequest()
  		{
  			 var url = "<?php echo addons_url('Donation://Wap/sumLove');?>";
  			 //<?php echo addons_url('Donation://Wap/sumLove',array('p'=>1));?>
  	  		 var data = {type:1};
  	  		 $.ajax({
  	  		  type : "get",
  	  		  async : true, //同步请求
  	  		  url : url,
  	  		  timeout:1000,
  	  		 cache: false,
  	  		  success:function(data){
  	  			 $("#sumHeart").text(data);//要刷新的div
  	  		  },
  	  		  error: function() {
  	  		        alert("失败，请稍后再试！");
  	  		      }
  	  		 });
  		}
  		
	</script>