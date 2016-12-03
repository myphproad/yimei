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
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
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
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css.min.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo ADDON_PUBLIC_PATH;?>/style.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo ADDON_PUBLIC_PATH;?>/swiper/dist/idangerous.swiper.css">

    <!--TS-U function-->
    <script type="text/javascript">
        var SITE_URL  = '<?php echo SITE_URL; ?>';
        //载入函数
        var U = function(url, params) {
            var website = SITE_URL+'/index.php';
            url = url.split('/');
            if(url[0]=='' || url[0]=='@')
                url[0] = APPNAME;
            if (!url[1])
                url[1] = 'Index';
            if (!url[2])
                url[2] = 'index';
            website = website+'?app='+url[0]+'&mod='+url[1]+'&act='+url[2];
            if(params) {
                params = params.join('&');
                website = website + '&' + params;
            }
            return website;
        };
        var _static = '/Yimei/index.php?s=';
    </script>
    <script src="<?php echo ADDON_PUBLIC_PATH;?>/jquery-2.1.1.min.js?v=<?php echo SITE_VERSION;?>"></script>
    <script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script src="<?php echo ADDON_PUBLIC_PATH;?>/appframework.js?v=<?php echo SITE_VERSION;?>"></script>
    <script src="<?php echo ADDON_PUBLIC_PATH;?>/jquery.tap.min.js?v=<?php echo SITE_VERSION;?>"></script>
  <script src="<?php echo ADDON_PUBLIC_PATH;?>/iscroll5.2.js?v=<?php echo SITE_VERSION;?>"></script>
    <script src="<?php echo ADDON_PUBLIC_PATH;?>/zepto.js?v=<?php echo SITE_VERSION;?>"></script>
    <script src="<?php echo ADDON_PUBLIC_PATH;?>/ui4jq.js?v=<?php echo SITE_VERSION;?>"></script>
    <script src="<?php echo ADDON_PUBLIC_PATH;?>/basic.js?v=<?php echo SITE_VERSION;?>"></script>
    <script src="<?php echo ADDON_PUBLIC_PATH;?>/app.js?v=<?php echo SITE_VERSION;?>"></script>
    <script src="<?php echo ADDON_PUBLIC_PATH;?>/form.js?v=<?php echo SITE_VERSION;?>"></script>
    <script src="<?php echo ADDON_PUBLIC_PATH;?>/core.js?v=<?php echo SITE_VERSION;?>"></script>
    <script src="<?php echo ADDON_PUBLIC_PATH;?>/swiper/dist/idangerous.swiper.min.js"></script>
    <script type="text/javascript" src="/Yimei/Public/Home/js/m/dialog.js"></script>
    <script type="text/javascript" src="/Yimei/Public/Home/js/m/mobile_module.js"></script>
<script>
/**
 * 全局变量
 */
var SITE_URL  = '<?php echo SITE_URL; ?>';
var UPLOAD_URL= '<?php echo UPLOAD_URL; ?>';
var THEME_URL = '__THEME__';
var APPNAME   = '<?php echo APP_NAME; ?>';
var MID       = '<?php echo $mid; ?>';
var UID       = '<?php echo $uid; ?>';
var initNums  =  '<?php echo $initNums; ?>';
var SYS_VERSION = '<?php echo $site["sys_version"]; ?>';
var _CITY = '<?php echo session("init_city");?>';
var ISWAP = 1;
var USER_UN_SETTING = '<?php echo ($unsetting); ?>';
// Js语言变量
var LANG = new Array();
</script>
<?php if(!empty($langJsList)) { ?>
<?php if(is_array($langJsList)): $i = 0; $__LIST__ = $langJsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><script src="<?php echo ($vo); ?>?v=<?php echo SITE_VERSION;?>"></script><?php endforeach; endif; else: echo "" ;endif; ?>
<?php } ?>
<!--
<script src="<?php echo ADDON_PUBLIC_PATH;?>/js.min.w3g.js?v=<?php echo SITE_VERSION;?>"></script>
-->
<script src="<?php echo ADDON_PUBLIC_PATH;?>/swiper/dist/idangerous.swiper.min.js"></script>
</head>
<body>
<div id="header">
    <div id="header-buttons">
    </div>
    <h1>
        
    </h1>
</div>
<div id="layout">
    <div id="main">
<div id="content">
    <div id="weiba" data-title="论坛" class="panel" data-selected="true"  data-menu="msgmenu" style="padding:0;">
        <header>
        	
            <div id="header-buttons">
            	 
            	<a href="javascript:history.go(-1);">
                    <div id="back" class="header-menu-link" data-back="false">
                    返回
                    </div>
                </a>
                
       
              
              <div id="otherLink" style="right:0">
                     <div id="headMenu" class="header-menu-link msg_tips_container" href="javascript:;">
                    	导航<em class="msg"></em>
                    	<ul class="head_sub_menu">
                        	<a href="<?php echo addons_url('Weiba://Wap/index');?>">首页</a>
                            <a href="<?php echo addons_url('Weiba://Wap/forum');?>">版块</a>
                            <a class="msg_tips_container" href="<?php echo addons_url('Weiba://Wap/my');?>">我<em class="msg"></em></a>
                        </ul>
                    </div>
                </div>
            </div>
            
            <h1>
            	<?php switch($type){ case 'myEdit':echo '修改个人信息';break; case 'myWeiba':echo '我关注的版块';break; case 'myFollowing':echo '我关注的版块帖子';break; case 'myCredit':echo '我的积分';break; case 'myGold':echo '赏金中心';break; case 'myPost':; case 'myReply':; case 'myFavorite':echo '我的聊天';break; case 'myFavoriteEvent':; case 'myJoinEvent':echo '我的活动';break;; case 'myDownload':echo '我的下载';break;; default:echo '我'; } ?>
                
            </h1>
        </header>
        <div class="mainWeiba">
        	<!--
        	<?php if($type=='index'){ ?>
            <div class="tab">
                <ul>
                    <li><a href="<?php echo U('index');?>">推荐</a></li>
                    <li><a href="<?php echo U('forum');?>">版块</a></li>
                    <li class="current"><a href="<?php echo U('my');?>" class="noborder" id="myTab">我<em class="msg"></em></a></li>
                </ul>
            </div>
            <?php } ?>
            -->
    <div class="weiba_forumlist" style="margin-top:0">
      <?php if($type == 'index'): ?><!-- 首页显示列表 -->
	      <div class="navlist" style="margin-top:10px">
	        <ul>
	            <li id="userCenter">
	            	<span><?php if($profile["headimgurl"] == ''): ?><img alt="" src="/Yimei/Public/static/face/default_head_50_buzhi.png"/><?php else: ?><img alt="" src="<?php echo ($profile["headimgurl"]); ?>"/><?php endif; ?></span>
	            	<span><?php echo ($profile["nickname"]); ?></span>
	            	<span><a href="<?php echo addons_url('Weiba://Wap/my', array('type'=>'myEdit','uid'=>'$profile.uid'));?>">修改</a></span>
	           </li>
	            <li><a href="<?php echo addons_url('Weiba://Wap/my', array('type'=>'myWeiba'));?>">我关注的版块</a></li>
	            <li><a href="<?php echo addons_url('Weiba://Wap/my', array('type'=>'myFollowing'));?>">我关注的版块帖子</a></li>
	            <li><a href="<?php echo addons_url('Weiba://Wap/my', array('type'=>'myPost'));?>">我的聊天<em class="msg"  id="my_topic_msg"></em></a></li>
	            <!--
	            <li><a href="<?php echo addons_url('Weiba://Wap/my', array('type'=>'myJoinEvent'));?>">我的活动<em class="msg"  id="my_event_msg"></em></a></li>
	            -->
	        </ul>
	      </div>
         <!-- 详细页面内容 -->
         <!-- 关注板块 -->
      <?php elseif($type == 'myWeiba'): ?>
      <?php if(!$post_list['list_data']): ?>
        <div class="empty_list">你还没有关注的版块！</div>
        <?php else: ?>
      	<div class="navlist" style="margin-top:10px">
            <ul style="margin:0">
                <?php if(is_array($post_list["list_data"])): $i = 0; $__LIST__ = $post_list["list_data"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="no_arrow has_arrow"><a href="<?php echo addons_url('Weiba://Wap/detail',array('weiba_id'=>$vo['id']));?>"><img class="s" src="<?php echo (get_cover_url($vo["logo"])); ?>"/><strong><?php echo ($vo["weiba_name"]); ?></strong> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                
            </ul>
            </div>
        <?php endif; ?>
        <!-- 关注板块结束 -->
         <!--  修改个人信息页面开始-->
      <?php elseif($type == 'myEdit'): ?>
         <div class="weibaPost">
      	<form method="post" action="<?php echo addons_url('Weiba://Wap/doPost');?>" id="doWeibaPost" enctype="multipart/form-data" onsubmit="doWeibaPost();return false;">
      	<div class="navlist" style="margin-top:10px">
            <ul style="margin:0">
             <li class="no_arrow has_arrow" id="userCenter">
	            <span><?php if($profile["headimgurl"] == ''): ?><img alt="" src="/Yimei/Public/static/face/default_head_50_buzhi.png"/><?php else: ?><img alt="" src="<?php echo ($profile["headimgurl"]); ?>"/><?php endif; ?></span>
	            	<span><strong><?php echo ($profile["nickname"]); ?></strong></span>
	           <!--  	<span><a href="<?php echo addons_url('Weiba://Wap/my', array('type'=>'myEdit','uid'=>'$profile.uid'));?>">上传微信头像和昵称</a></span> -->
	           </li>
            </ul>
            </div>
           <div class="pure-form send_box">
            <input type="text" id="nickname" name="nickname" class="ts-text" placeholder="填写昵称">
          </div>
            <!-- 图片 -->
              <div class="upload_img_wrap">
                 <div class="controls">
                    <div class="upload_row muti_picture_row">
                        <a class="img_item add_btn" href="javascript:;" onClick="$.WeiPHP.wxChooseImg(this,5,'img_ids[]')">
                        <img width="100%" src="/Yimei/Public/Home/images/add.png"/></a>
                    </div>
                  </div>
              </div>
              <div class="header-menu-link" id="hmp-send">
                    <a class="sendBtn disable" onClick="doWeibaPost()" id="postbut" href="javascript:;">发布</a>
                </div>
            </form>
            </div>
           <!--  修改个人信息页面结束-->
    	  <?php else: ?>
      	  <?php if($type == 'myJoinEvent'): ?><div class="weiba_tab">
             	<a <?php if($type == 'myJoinEvent'): ?>class="current"<?php endif; ?>  href="javascript:window.location.replace('<?php echo addons_url('Weiba://Wap/my', array('type'=>'myJoinEvent'));?>')">我参加的</a>
                <a <?php if($type == 'myFavoriteEvent'): ?>class="current"<?php endif; ?> href="javascript:window.location.replace('<?php echo addons_url('Weiba://Wap/my', array('type'=>'myFavoriteEvent'));?>')">我收藏的</a>
              </div>
          <?php else: ?>
              <div class="weiba_tab">
                <a <?php if($type == 'myPost'): ?>class="current"<?php endif; ?> href="javascript:window.location.replace('<?php echo addons_url('Weiba://Wap/my', array('type'=>'myPost'));?>')">发表帖子</a>
                <a <?php if($type == 'myReply'): ?>class="current"<?php endif; ?> href="javascript:window.location.replace('<?php echo addons_url('Weiba://Wap/my', array('type'=>'myReply'));?>')">回复帖子</a>
                <a <?php if($type == 'myFavorite'): ?>class="current"<?php endif; ?> href="javascript:window.location.replace('<?php echo addons_url('Weiba://Wap/my', array('type'=>'myFavorite'));?>')">收藏帖子</a>
              </div><?php endif; ?>  
      
      <div class="weiba_postlist_wrap" style="margin-top:10px">
        <?php $arrs = array('myPost'=>'我发表的帖子','myReply'=>'我回复的帖子','myFavorite'=>'我收藏的帖子','myFollowing'=>'我关注的版块帖子','myJoinEvent'=>'我参加的活动','myFavoriteEvent'=>'我收藏的活动'); ?>
        <!--
        <div class="slt"><?php echo ($arrs[$type]); ?>(<?php echo ($post_list["totalRows"]); ?>)</div>
        -->
        <div class="slc clearfix">
          <div class="bklist">
              <?php if(!$post_list['list_data']): ?>
              <div class="nodata"><?php echo str_replace('我','你还没有',$arrs[$type]);?>!</div>
              <?php else: ?>
              <div class="weiba_postlist">
                  <ul id="listData">
                    <?php if(is_array($post_list["list_data"])): $i = 0; $__LIST__ = $post_list["list_data"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li onclick="javascript:window.open('<?php echo addons_url('Weiba://Wap/postDetail',array('post_id'=>$vo['id']));?>','_self')">
                        <div class="name">
                        	<a href="<?php echo addons_url('Weiba://Wap/postDetail',array('post_id'=>$vo['id']));?>">
                            <?php if($vo['tag_id']): ?><span class="blue">[ <?php echo ($vo["tag_name"]); ?> ]</span><?php endif; ?>
                            <span><?php echo ($vo["title"]); ?></span>
                            <?php if($vo['attach']){ ?><i class="ico-bar-attach">&nbsp;</i><?php } ?>
                            <!--
                            <?php if($vo['is_img']){ ?><i class="ico-bar-image">&nbsp;</i><?php } ?>
                            -->
                            <?php if($vo['top']==1){ ?><i class="ico-bar-top">&nbsp;</i><?php } ?>
                            <?php if($vo['digest']==1){ ?><i class="ico-bar-fine">&nbsp;</i><?php } ?>
                            <?php if($vo['recommend']){ ?><i class="ico-bar-recd">&nbsp;</i><?php } ?>
                            <!--<?php if(preg_match('/<img/i',$vo['content'])){ ?><i class="ico-img"><img class="icons" width="16" src="<?php echo APPS_URL;?>/w3g/_static/images/ico-img.png"></i><?php } ?>-->
                            </a>
                        </div>
                        <?php if($vo['image']){ ?> 
                        <a class="weiba_postlist_pics" href="<?php echo addons_url('Weiba://Wap/postDetail',array('post_id'=>$vo['id']));?>">
                        <div class="ninepic_list">
                            <?php if(is_array($vo['image'])): $i = 0; $__LIST__ = $vo['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($i) < "4"): ?><span><img src="<?php echo ($vo2); ?>"/></span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        </a>
                        <?php } ?>
                        <div class="info clearfix">
                            <div class="left">
                                 <a href="<?php echo addons_url('Weiba://Wap/profile',array('uid'=>$vo['post_uid']));?>">
                                <img height="16" width="16" src="<?php echo ($vo["user"]["headimgurl"]); ?>"/>
                                <?php echo ($vo["user"]["nickname"]); ?></a><!--&nbsp;-&nbsp;<span><?php echo (time_format($vo["post_time"])); ?>--></span>
                            </div>
                            <div class="right">
                            <?php if($vo['event'] && $vo['event']['join_count']>0){ ?><span class="jlnum"><?php echo ($vo["event"]["join_count"]); ?></span><?php }if($vo['read_count']>0){ ?><span class="llnum"><?php echo ($vo["read_count"]); ?></span><?php }if($vo['reply_count']>0){ ?><span class="plnum"><?php echo ($vo["reply_count"]); ?></span><?php } ?>
                            </div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                  <?php if($post_list['totalPages']>1): ?>
                  <a id="load_page_btn" href="javascript:;" data-page="<?php echo ($post_list['totalPages']); ?>" data-url="<?php echo addons_url('Weiba://Wap/my',array('type'=>$type));?>">下一页</a>
                  <div class="no_more_data">没有更多数据了</div>
                  <div class="page_loading">正在加载中...</div>
                  
                  <?php endif; ?>
                  <!--
                  <?php if($post_list['totalPages']>1): ?>
                  <div id="pager_box">
                    <?php if($post_list['nowPage']>1): ?>
                    <a href="<?php echo U('detail',array('weiba_id'=>$weiba_detail['weiba_id'],'type'=>$type,'page'=>$post_list['nowPage']-1));?>" id="prev" class="pure-button pager_child pager_p_n pure-button-primary">上一页</a>
                    <?php endif; ?>
                    <?php if($post_list['nowPage']<$post_list['totalPages']): ?>
                    <a href="<?php echo U('detail',array('weiba_id'=>$weiba_detail['weiba_id'],'type'=>$type,'page'=>$post_list['nowPage']+1));?>" id="next" class="pure-button pager_child pager_p_n pure-button-primary">下一页</a>
                    <?php endif; ?>
                  </div>
                  <?php endif; ?>
                  -->
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
        <?php endif; ?>
        <!-- 修改个人信息 -->
    </div>

<script>
loadPageByMore();
</script>

        </div>
    </div>
    </div><!--content-->
        <script>
            (function(){
                TS.cache.profile = {
                    uid:'<?php echo ($profile["uid"]); ?>',
                    uname:'<?php echo ($profile["uname"]); ?>',
                    email:'<?php echo ($profile["email"]); ?>',
                    avatar_original:'<?php echo ($profile["avatar_original"]); ?>',
                    avatar_small:'<?php echo ($profile["avatar_small"]); ?>'
                };
//                $(document).on("touchmove",".pic-view-img",function(e){
//                        console.log(e);
//                });
            })();
        </script>

</div>
	<!--
    <div class="postentry">
        <?php if(MODULE_NAME == 'Index' && in_array(ACTION_NAME,array('index','rec','fri_weibo','doSearch'))){ ?>
            <a href="#new-weibo" id="postentry">&nbsp;</a>
        <?php }elseif(MODULE_NAME == 'Channel'){ ?>
            <a href="#new-channel-weibo" id="postentry">&nbsp;</a>
        <?php }elseif(MODULE_NAME == 'Weiba'){ ?>
            <?php if(ACTION_NAME == 'postDetail'){ ?>
            <a href="<?php echo U('reply', array('post_id'=>intval($_GET['post_id'])));?>" id="postentry">&nbsp;</a>
            <?php }elseif(!in_array(ACTION_NAME, array('reply', 'post'))){ ?>
            <a href="<?php echo U('post', array('weiba_id'=>intval($_GET['weiba_id'])));?>" id="postentry">&nbsp;</a>
            <?php } ?>
        <?php } ?>
    </div>
    -->
    
    <div id="pure-shadow"></div>
    <div id="footer"></div>
    <div id="custom"></div>
   
    <?php if($is_post_detail == 1){ ?>
    	<!-- 详情底部兰 -->
        <div class="weiba_detail_bar">
            <a href="javascript:;" onclick="showreplyDialog();"><i class="comment"></i><span>评论</span></a>
            <a href="javascript:;" onclick="doPostDigg()">
            	<div id="post-zan" class="<?php if(($is_digg) == "1"): ?>iszan<?php endif; ?>"><i class="zan"></i><em><?php if(($post_detail[praise]) > "0"): echo ($post_detail["praise"]); endif; ?></em></div><span class="mcount">点赞</span>
            </a>
            <?php if($isWeixin): ?><a onclick="ui.showShareTips();" href="javascript:;"><i class="share"></i><span>分享</span></a><?php endif; ?>
        </div>
        <div class="reply_dialog">
            <div class="dialog">
                <div class="textarea"><textarea autofocus name="weiba-reply-textarea" id="weiba-reply-textarea" placeholder="内容,2-70个字"></textarea></div>
                <div class="bar">
                    <a id="replybtn" class="btn" href="javascript:;" onclick="submitReply();">发送</a>
                    <a class="btn btn_border" href="javascript:;" onclick="hidereplyDialog();">取消</a>
                    
                </div>
            </div>
        </div> 
        <script type="text/javascript">
        	function showreplyDialog(data){
				$('.reply_dialog').height($('#layout').height()+50);
				$('.reply_dialog .dialog').css('top',$(window).scrollTop()+50);
				if('<?php echo ($mid); ?>'>0){
					$('.reply_dialog').show();
					$('.reply_dialog textarea').focus();
					if(data){
						window.replyData = data;
						$('#weiba-reply-textarea').attr('placeholder','回复'+window.replyData.to_comment_uname);
						//console.log(window.replyData)
					}else{
						window.replyData = null;
					}
				}else{
					$.ui.showMask("请先登录", true);
					setTimeout(function(){
						window.location.href = "<?php echo U('w3g/Public/login');?>";		
					},1500)
				}
				//window.location.href = "<?php echo U('reply', array('post_id'=>intval($_GET['post_id'])));?>";
			}
			function hidereplyDialog(){
				$('.reply_dialog').hide();
			}
			function submitReply(){
					var url = "<?php echo addons_url('Weiba://Wap/addReply');?>";
					var data = {};
					if(window.replyData){
						data.weiba_id = window.replyData.weiba_id;
						data.post_id = window.replyData.post_id;
						data.post_uid = window.replyData.post_uid;
						data.to_reply_id = window.replyData.to_reply_id;
						data.to_uid = window.replyData.to_uid;
						data.feed_id = window.replyData.feed_id;
						data.list_count= 0;
						
					}else{
						data.weiba_id = '<?php echo $post_detail["weiba_id"]; ?>';
						data.post_id = '<?php echo $post_detail["id"]; ?>';
						data.post_uid = '<?php echo $post_detail["post_uid"]; ?>';
						data.to_reply_id = data.reply_id?data.reply_id:0;
						data.to_uid = data.uid?data.uid:0;
						data.feed_id = '<?php echo $post_detail["feed_id"]; ?>';
						data.list_count= '<?php echo $list_count; ?>';
					}
					data.widget_appname = 'weiba';
					data.content = '';
					data.ifShareFeed = '0';
					data.attach_id = '0';
					var content = $.trim($('#weiba-reply-textarea').val());
					if(!content){
						$.ui.showMask("请输入内容！", true);
						return false;
					}
					if(content.length<2 || content.length>70){
						$.ui.showMask("评论限制2-70个字！", true);
						return false;
					}
					data.content = content;
					
					
					$.post(url, data, function(result){
						if(result.status == 1){
							hidereplyDialog();
							$.ui.showMask("评论成功！", true);
							//setTimeout(function(){
								window.location.href = "<?php echo addons_url('Weiba://Wap/postDetail', array('post_id'=>$post_detail['id']));?>";
							//}, 1200);
						}else{
							$.ui.showMask("回复失败，请稍候再试！", true);
						}
					}, 'json');
						
			}
		
			function doPostDigg(){
				if('<?php echo ($mid); ?>'<=0){
					$.ui.showMask("请先登录", true);
					setTimeout(function(){
						window.location.href = "<?php echo U('w3g/Public/login');?>";		
					},1500)
				}else{
				var type = $('#post-zan').hasClass('iszan')?0:1;
				//alert(type);
				if(type==1){
					var url = "<?php echo U('addPostDigg');?>";
				}else{
					var url = "<?php echo U('delPostDigg');?>";
				}
				
				var data = {};
					data.row_id = '<?php echo $post_detail["id"]; ?>';
				$.post(url, data,function(result){
					if(result == 1){
						if(type==1){
							$('#post-zan').addClass('iszan');
							if($('#post-zan em').text()==""){
								var count = 0;
							}else{
								var count = parseInt($('#post-zan em').text());
							}
							$('#post-zan em').text(count+1);
						}else{
							$('#post-zan').removeClass('iszan');
							var count = parseInt($('#post-zan em').text());
							if(count-1>0){
								$('#post-zan em').text(count-1);
							}else{
								$('#post-zan em').text('');
							}
						}
					}else{
						
					}
				}, 'json');
				}
			}
			
        </script>    
    <?php } ?>
  </div>  <!-- layout -->
    <!-- 统计代码-->
<div id="site_analytics_code" style="display:none;"> <?php echo (base64_decode($site["site_analytics_code"])); ?> </div>
<?php if(($site["site_online_count"]) == "1"): ?><script src="<?php echo SITE_URL;?>/online_check.php?uid=<?php echo ($mid); ?>&uname=<?php echo ($user["uname"]); ?>&mod=<?php echo MODULE_NAME;?>&app=<?php echo APP_NAME;?>&act=<?php echo ACTION_NAME;?>&action=trace&city=<?php echo session('city');?>"></script><?php endif; ?>
</body>
</html>