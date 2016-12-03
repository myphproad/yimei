<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<meta content="<?php echo C('WEB_SITE_KEYWORD');?>" name="keywords"/>
<meta content="<?php echo C('WEB_SITE_DESCRIPTION');?>" name="description"/>
<link rel="shortcut icon" href="<?php echo SITE_URL;?>/favicon.ico">
<title><?php echo empty($page_title) ? C('WEB_SITE_TITLE') : $page_title; ?></title>
<link href="/eciyuanWebsite/Yimei/Public/static/font-awesome/css/font-awesome.min.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
<link href="/eciyuanWebsite/Yimei/Public/Home/css/base.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
<link href="/eciyuanWebsite/Yimei/Public/Home/css/module.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
<link href="/eciyuanWebsite/Yimei/Public/Home/css/weiphp.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
<link href="/eciyuanWebsite/Yimei/Public/static/emoji.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/eciyuanWebsite/Yimei/Public/static/bootstrap/js/html5shiv.js?v=<?php echo SITE_VERSION;?>"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/static/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/static/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/static/zclip/ZeroClipboard.min.js?v=<?php echo SITE_VERSION;?>"></script>
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/Home/js/dialog.js?v=<?php echo SITE_VERSION;?>"></script>
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/Home/js/admin_common.js?v=<?php echo SITE_VERSION;?>"></script>
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/Home/js/admin_image.js?v=<?php echo SITE_VERSION;?>"></script>
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/static/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/eciyuanWebsite/Yimei/Public/static/jquery.dragsort-0.5.2.min.js"></script> 
<script type="text/javascript">
var  IMG_PATH = "/eciyuanWebsite/Yimei/Public/Home/images";
var  STATIC = "/eciyuanWebsite/Yimei/Public/static";
var  ROOT = "/eciyuanWebsite/Yimei";
var  UPLOAD_PICTURE = "<?php echo U('home/File/uploadPicture',array('session_id'=>session_id()));?>";
var  UPLOAD_FILE = "<?php echo U('File/upload',array('session_id'=>session_id()));?>";
var  UPLOAD_DIALOG_URL = "<?php echo U('home/File/uploadDialog',array('session_id'=>session_id()));?>";
</script>
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<!-- 提示 -->
<div id="top-alert" class="top-alert-tips alert-error" style="display: none;">
  <a class="close" href="javascript:;"><b class="fa fa-times-circle"></b></a>
  <div class="alert-content"></div>
</div>
<!-- 导航条
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="wrap">
    
       <a class="brand" title="<?php echo C('WEB_SITE_TITLE');?>" href="<?php echo U('index/index');?>">
       <?php if(!empty($userInfo[website_logo])): ?><img height="52" src="<?php echo (get_cover_url($userInfo["website_logo"])); ?>"/>
       	<?php else: ?>
       		<img height="52" src="/eciyuanWebsite/Yimei/Public/Home/images/logo.png"/><?php endif; ?>
       </a>
        <?php if(is_login()): ?><div class="switch_mp">
            	<?php if(!empty($public_info["public_name"])): ?><a href="#"><?php echo ($public_info["public_name"]); ?><b class="pl_5 fa fa-sort-down"></b></a><?php endif; ?>
                <ul>
                <?php if(is_array($myPublics)): $i = 0; $__LIST__ = $myPublics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/index/main', array('publicid'=>$vo[mp_id]));?>"><?php echo ($vo["public_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div><?php endif; ?>
      <?php $index_2 = strtolower ( MODULE_NAME . '/' . CONTROLLER_NAME . '/*' ); $index_3 = strtolower ( MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME ); ?>
       
            <div class="top_nav">
                <?php if(is_login()): ?><ul class="nav" style="margin-right:0">
                    	<?php if($myinfo["is_init"] == 0 ): ?><li><p>该账号配置信息尚未完善，功能还不能使用</p></li>
                    		<?php elseif($myinfo["is_audit"] == 0 and !$reg_audit_switch): ?>
                    		<li><p>该账号配置信息已提交，请等待审核</p></li>
                            <?php elseif($index_2 == 'home/public/*' or $index_3 == 'home/user/profile' or $index_2 == 'home/publiclink/*' or $index_3 == 'home/user/bind_login'): ?>
                    		
                    		<?php else: ?> 
                    		<?php if(is_array($core_top_menu)): $i = 0; $__LIST__ = $core_top_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ca): $mod = ($i % 2 );++$i;?><li data-id="<?php echo ($ca["id"]); ?>" class="<?php echo ($ca["class"]); ?>"><a href="<?php echo ($ca["url"]); ?>"><?php echo ($ca["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    	
                    	
                        
                        <li class="dropdown admin_nav">
                            <a href="#" class="dropdown-toggle login-nav" data-toggle="dropdown" style="">
                                <?php if(!empty($myinfo[headimgurl])): ?><img class="admin_head url" src="<?php echo ($myinfo["headimgurl"]); ?>"/>
                                <?php else: ?>
                                    <img class="admin_head default" src="/eciyuanWebsite/Yimei/Public/Home/images/default.png"/><?php endif; ?>
                                <?php echo (getShort($myinfo["nickname"],4)); ?><b class="pl_5 fa fa-sort-down"></b>
                            </a>
                            <ul class="dropdown-menu" style="display:none">
                               <?php if($mid==C('USER_ADMINISTRATOR')): ?><li><a href="<?php echo U ('Admin/Index/Index');?>" target="_blank">后台管理</a></li><?php endif; ?>
                            	<li><a href="<?php echo U ('Home/Public/lists');?>">公众号列表</a></li>
                                <li><a href="<?php echo U ('Home/Public/add');?>">账号配置</a></li>
                                <li><a href="<?php echo U('User/profile');?>">修改密码</a></li>
                                <li><a href="<?php echo U('User/logout');?>">退出</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php else: ?>
                    <ul class="nav" style="margin-right:0">
                    	<li style="padding-right:20px">你好!欢迎来到<?php echo C('WEB_SITE_TITLE');?></li>
                        <li>
                            <a href="<?php echo U('User/login');?>">登录</a>
                        </li>
                        <li>
                            <a href="<?php echo U('User/register');?>">注册</a>
                        </li>
                        <li>
                            <a href="<?php echo U('admin/index/index');?>" style="padding-right:0">后台入口</a>
                        </li>
                    </ul><?php endif; ?>
            </div>
        </div>
</div>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
<?php  if(!is_login()){ Cookie ( '__forward__', $_SERVER ['REQUEST_URI'] ); redirect(U('home/user/login',array('from'=>4))); } ?>
<div id="main-container" class="admin_container">
  <?php if(!empty($core_side_menu)): ?><div class="sidebar">
      <ul class="sidenav">
        <li>
          <?php if(!empty($now_top_menu_name)): ?><a class="sidenav_parent" href="javascript:;"> 
            <!--<img src="/eciyuanWebsite/Yimei/Public/Home/images/left_icon_<?php echo ($core_side_category["left_icon"]); ?>.png"/>--> 
            <?php echo ($now_top_menu_name); ?></a><?php endif; ?>
          <ul class="sidenav_sub">
            <?php if(is_array($core_side_menu)): $i = 0; $__LIST__ = $core_side_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="<?php echo ($vo["class"]); ?>" data-id="<?php echo ($vo["id"]); ?>"> <a href="<?php echo ($vo["url"]); ?>"> <?php echo ($vo["title"]); ?> </a><b class="active_arrow"></b></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </li>
        <?php if(!empty($addonList)): ?><li> <a class="sidenav_parent" href="javascript:;"> <img src="/eciyuanWebsite/Yimei/Public/Home/images/ico1.png"/> 其它功能</a>
            <ul class="sidenav_sub" style="display:none">
              <?php if(is_array($addonList)): $i = 0; $__LIST__ = $addonList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="<?php echo ($navClass[$vo[name]]); ?>"> <a href="<?php echo ($vo[addons_url]); ?>" title="<?php echo ($vo["description"]); ?>"> <i class="icon-chevron-right">
                  <?php if(!empty($vo['icon'])) { ?>
                  <img src="<?php echo ($vo["icon"]); ?>" />
                  <?php } ?>
                  </i> <?php echo ($vo["title"]); ?> </a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </li><?php endif; ?>
      </ul>
    </div><?php endif; ?>
  <div class="main_body">
    
  
  <!-- 标签页导航 -->
  <div class="span9 page_message">
    <section id="contents">
      <ul class="tab-nav nav">
  <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="<?php echo ($vo["class"]); ?>"><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?><span class="arrow fa fa-sort-up"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  
  <?php if (defined ( '_ADDONS' )) { $page = _ADDONS . '_' . _CONTROLLER . '_' . _ACTION; } else { $page = MODULE_NAME . '_' . CONTROLLER_NAME . '_' . ACTION_NAME; } $url = 'http://help.weiphp.cn/index.php?s=/Home/Help/index/page/' . strtolower($page); ?>
  <span class="fr" style="margin:10px;"><a target="_blank" href="<?php echo ($url); ?>"><b style="font-size:16px;" class="fa fa-question-circle"></b>查看配置教程</a></span>
</ul>
<?php if(!empty($sub_nav)): ?><div class="sub-tab-nav">
       <ul class="sub_tab">
       <?php if(is_array($sub_nav)): $i = 0; $__LIST__ = $sub_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class="<?php echo ($vo["class"]); ?>" href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?><span class="arrow fa fa-sort-up"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
</div><?php endif; ?>
<?php if(!empty($normal_tips)): ?><p class="normal_tips"><b class="fa fa-info-circle"></b> <?php echo ($normal_tips); ?></p><?php endif; ?>
<?php if(!empty($normal_tips1)): ?><p class="normal_tips"><b class="fa fa-info-circle"></b> <?php echo ($normal_tips1); ?></p><?php endif; ?>
      <div class="tab-content"> 
        <!-- 表单 -->
        <?php $post_url || $post_url = U('edit_index?model='.$model['id'], $get_param); ?>
        <form id="form" action="<?php echo ($post_url); ?>" method="post" class="form-horizontal form-center">
   	<div id='nid' style="display:none">
             	<input  name="id" value="<?php echo ($data["id"]); ?>">
            </div>
            <div class="controls" id='tiezi'>
		
		<a onClick="addPost()" >选择帖子</a>
		</div>
           <div class="form-item" id="post" >   
          	 <label class="item-label">帖子标题</label>
             <div class="controls">
             	<input type="text" class="text" name="title" value="<?php echo ($data["title"]); ?>" readonly>
             </div>
            </div>
            
            <div class="controls">
		
		</div>
            <div class="form-item">   
             <label class="item-label">帖子图片</label>
          	 <div class="controls uploadrow2" data-max="1" title="点击修改图片" rel="index_img">
                    <input type="file" id="upload_picture_index_img">
                    <input type="hidden" name="index_img" id="cover_id_index_img" value="<?php echo ($data["index_img"]); ?>"/>
                    <div class="upload-img-box">
                      <?php if(!empty($data['index_img'])): ?><div class="upload-pre-item2"><img width="100" height="100" src="<?php echo (get_cover_url($data["index_img"])); ?>"/></div>
                        <em class="edit_img_icon">&nbsp;</em><?php endif; ?>
                    </div>
                  </div>
            </div>
           
        </div>
        <div class="form-item form_bh" style="text-align:center">
            <?php if(!empty($data["id"])): ?><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"><?php endif; ?>
            <button class="btn submit-btn ajax-post" id="submit" type="submit" target-form="form-horizontal"><?php echo ((isset($submit_name) && ($submit_name !== ""))?($submit_name):'确 定'); ?></button>
          </div>
      </form>
      </div>
    </section>
  </div>

  </div>
</div>

	<!-- /主体 -->

	<!-- 底部 -->
	<div class="wrap bottom" style="background:#fff; border-top:#ddd;">
    <p class="copyright">本系统由<a href="http://www.eciyuan.net" target="_blank">亿次元科技</a>提供</p>
</div>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/eciyuanWebsite/Yimei", //当前网站地址
		"APP"    : "/eciyuanWebsite/Yimei/index.php?s=", //当前项目地址
		"PUBLIC" : "/eciyuanWebsite/Yimei/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>

  
  <script type="text/javascript">
  $(function(){
	var UploadFileExts = "<?php echo ($UploadFileExts); ?>";
	initUploadImg();
	if(UploadFileExts!=""){
		initUploadFile(function(){},UploadFileExts);
	}else{
		initUploadFile();
	}
    showTab();	

  });
   var _id =$('#nid').find('input').val();
	function addPost(){
		var $postHtml = $('<div class="chooseShopDialog"><ul><center><img src="/eciyuanWebsite/Yimei/Public/Home/images/loading.gif"/></center></ul><br/><div class="m15"><a href="javascript:;" class="btn" id="confirmBtn">确定</a></div></div>');
		$.Dialog.open("选择帖子",{width:600,height:500},$postHtml);
		
		$.ajax({
	  		url:"<?php echo addons_url('Weiba://Post/post_data',array('p'=>1));?>",
	  		data:{},
	  		dataType:'JSON',
	  		success:function(data){
	  			var html = "";
	  			var list_data = data.list_data;
	  			//console.log(list_data);
	  			if(list_data && list_data.length>0){
	  				//alert(123);
	  				for(var i=0;i<list_data.length;i++){
	  					//console.log(list_data[i].title);
	  					var id = list_data[i].id;
	  					var title = list_data[i].title;
	  					var post_uid = list_data[i].post_uid;
	  					var weiba_id=list_data[i].weiba_id;
	  					//var img_url=list_data[i].img_url;
	  					
	  					//console.log(id)
	  					if(_id==id){
	  						html += '<li><input type="radio" name="post" checked="checked" class="post_id" value="'+id+'"/><span class="title">'+title+'</span></li>';
	  					}else{
	  						html += '<li><input type="radio" name="post"  class="post_id" value="'+id+'"/><span class="title">'+title+'</span></li>';
	  					}
	  				}
	  				if(html!=""){
	  					$('ul',$postHtml).html(html);
	  					//$('#awardList').show();
	  				}
	  			}else{
	  				$('ul',$postHtml).html("<center>还没有帖子</center>");
	  			}
	  		}
	  	})
	  	
     $('#confirmBtn',$postHtml).click(function(){
        $('li',$postHtml).each(function(index, element) {
        if($(this).find('.post_id').prop("checked")==true){
            var title = $(this).find('.title').text();
            var nid = $(this).find('.post_id').val();
            //console.log(nid);
           // var titleHtml ='<div><input type="hidden" class="text" name="post_id" value="'+id+'"></div><div class="form-item">   <label class="item-label">帖子标题</label><div class="controls"><input type="text" class="text" name="id" value="'+title+'"> </div></div>';
          
           $('#post').find('input').val(title);
            $('#nid').find('input').val(nid);
            $.Dialog.close();
        }
    })
   
    })
	};
	
</script> 
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div style='display:none'><?php echo ($tongji_code); ?></div>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>
	<!-- /底部 -->
</body>
</html>