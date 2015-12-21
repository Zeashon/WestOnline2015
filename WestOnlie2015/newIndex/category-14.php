<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html style="overflow-x: hidden;">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>成员风采</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/member.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zzx_index.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/common.css" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/image/ico.ico" type="image/x-icon" />
  <style>
* { margin: 0; padding: 0; text-decoration: none;}
.dowebok { font-family: "Microsoft Yahei"; background:black; width: 1366px; overflow-x: hidden;}
.dowebok .memberContent { width: 1064px; margin: 0 auto; overflow: hidden; zoom: 1; margin-top: 120px;}
.dowebok .memberContent ul { float: left; width: 246px; margin: 0 10px; list-style-type: none;overflow: hidden;}
.dowebok .memberContent li { margin-bottom: 20px; overflow: hidden;}
.dowebok .memberContent img { width: 246px; border-radius: 5px; vertical-align: top; float: left;}
.dowebok .memberContent img :hover{margin-left: -245px;}
.f14{font-size:14px}
.fl{float:left;display:inline}
.ml20{margin-left:20px}
.mt15{margin-top:15px}
.w80{width:80px}
.ml30{margin-left:30px}
.mt5{margin-top:5px}
</style>
<script src="<?php bloginfo('template_directory'); ?>/js/jquerymin.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.notice.js"></script>
<!--Image Fade -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.lazyload.js"></script>

</head>

<body class="dowebok">
		<div>
			<span class="IndexNavi" style="z-index: 6;">
				<ul class="IndexNaviUl f14" style="">
					<li><a href="<?php echo get_category_link(17);?>">首页</a></li>
					<li><a href="<?php echo get_category_link(27);?>">新闻快报</a></li>
					<li><a href="<?php echo get_category_link(26);?>">作品展示</a></li>
					<li><a href="<?php echo get_category_link(14);?>" id="IndexNaviUlLiANow">成员风采</a></li>
					<li><a href="http://www.w2fzu.com/join/">加入我们</a></li>
				</ul>
			</span>
			<span><img src="<?php bloginfo('template_directory'); ?>/image/logoB.png" style="position: fixed; top: 0; z-index: 7;"></img></span>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" id="searchform" >
				<input type="text" name="s" id="s" class="search" value=""/>
				<input type="submit" name="searchEnter" class="searchEnter" />
				<span class="searchEnterBG">
					<img src="<?php bloginfo('template_directory'); ?>/image/searchButton.png" width="20" height="20" border="none" />
				</span>
			</form>
		</div>
<!--头部-->
<!--主体-->
<div class="memberContent"> 
   

	<ul>
		<li data-scroll-reveal="enter top">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//58.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">王洪根</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机班</p>
			<p>方向 : iOs</p>
			<p>职位 : 总负责人</p>
			<p>座右铭 : 不折腾死不休，不疯魔不成活。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//60.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">吴英文</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 软件班</p>
			<p>方向 : PHP</p>
			<p>职位 : 成员</p>
			<p>作品地址 :</p>
			<p>座右铭 : </p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//51.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">林威</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机班</p>
			<p>方向 : j2ee</p>
			<p>代表作 : 学生信息管理系统</p>
			</span> 
			</span>
		</li>
		<li data-scroll-reveal="enter left">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//49.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">陈铭钦</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机班</p>
			<p>方向 : java、ndroid</p>
			<p>代表作 : 福大助手第二版</p>
			<p>座右铭 : No pain,No gain</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 0.5s and move 200px">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//55.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">出陈铖</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机班</p>
			<p>方向 : 前端</p>
			<p>座右铭 : What doesn't kill you makes you </p>
			<p>stronger.</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//53.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">吴锦秋</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机班</p>
			<p>方向 : 前端</p>
			<p>座右铭 : 要有最简单的生活与最遥远的梦想，</p>
			<p>即使明天天寒地冻，路远马亡。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 100px">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//54.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">林渊腾</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13软件工程班</p>
			<p>方向 : php</p>
			<p>代表作 : 西二在线财务管理系统</p>
			<p>座右铭 : 我们可以慢慢向前走，但绝对不能后</p>
			<p>退</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//1.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">张哲骐</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09级信息安全</p>
			<p>方向 : php语言、信息安全、操作系统、</p>
			<p>oracle数据库</p>
			<p>代表作 : 西二在线</p>
			<p>座右铭 : 认真做事，只能把事情做对；用心做</p>
			<p>事，才能把事情做好</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//2.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">刘孟佳</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09计算机班</p>
			<p>方向 : php组</p>
			<p>座右铭 : 如果你以前的成就显得很了不起，那</p>
			<p>么只能说明你现在做的还不够。</p>
			</span>
			</span>
        </li>
		<li data-scroll-reveal="enter bottom over 1s and move 300px after 0.3s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//3.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">罗洪祥</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 ：计算机班</p>
			<p>方向 ：java</p>
			<p>座右铭 ：never say never~~</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 0.5s and move 200px">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//4.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">林瑞敏</p>
			<p>学院:数学与计算机科学学院</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 100px">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//5.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">黄福强</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09计算机班</p>
			<p>方向 : java组</p>
			<p>座右铭 : 强者创造机会，智者抓住机会，弱者</p>
			<p>等待机会</p>
			</span>
			</span>
        </li>
		<li data-scroll-reveal="enter bottom over 1s and move 300px after 0.3s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//6.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">赵维佳</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09级信息安全</p>
			<p>方向 : 网攻组</p>
			<p>座右铭 : 不高傲，不谦卑，时刻清楚自己的位</p>
			<p>置。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//7.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">张浩</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机一班</p>
			<p>主攻方向:.NET</p>
			<p>座右铭:。。。。。。。</p>
			</span>
			</span>
        </li>
		<li data-scroll-reveal="enter top">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//35.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">姓名:张小云</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机班</p>
			<p>方向 : 美工</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//39.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">姜琪琪</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 信息安全</p>
			<p>方向 : 运营</p>
			<p>职位 : 运营组组长</p>
			<p>座右铭 : 人若有志，就不会在半坡停止</p>
			</span> 
			</span>
		</li>
		</li>
		<li data-scroll-reveal="enter top">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//43.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">张祖文</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 10级计算机班</p>
			<p>方向 : php/嵌入式</p>
			<p>职位 : 成员</p>
			<p>座右铭 : 高调做人低调做事。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 0.5s and move 200px">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//45.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">孙朝旭</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 11级三班</p>
			<p>方向 : 前端</p>
			<p>职位 : 成员</p>
			<p>座右铭 : 事到无心即是仙</p>
			</span>
			</span>
		</li>
	</ul>



<ul>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//40.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">林世雄</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 12级计算机实验班班</p>
			<p>方向 : ios/美工/php</p>
			<p>职位 : 协助总负责</p>
			<p>座右铭 : write the code,change the world</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 0.5s and move 200px">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//37.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">肖磊</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 软件班</p>
			<p>方向 : PHP</p>
			<p>职位 : 成员</p>
			<p>座右铭 : 你讨厌的现在，是将来回不去的曾经。</p>
			</span>
			</span>
        </li>
        <li data-scroll-reveal="enter top over 0.5s and move 200px">
			<span class="MemberShow ml100 fl">
				<img src="<?php bloginfo('template_directory'); ?>/image//29.jpg" class="cover" alt="Rolex Awards 2014">
				<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
					<p align="center" class="fb">郑泽雄</p>
					<p>学院 : 数学与计算机科学学院</p>
					<p>班级 : 计算机</p>
					<p>方向 : 前端</p>
					<p>代表作 : 西二在线(2015)</p>
				</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//34.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">杨绳春</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机班</p>
			<p>方向 : php</p>
			<p>代表作 : 西二在线(wordpress年版本)</p>
			<p>座右铭 : 没有一天不敲一行。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 100px">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//36.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">叶倩</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机班</p>
			<p>方向 : 美工</p>
			<p>代表作 : 福大助手第二版海报</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter left">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//59.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">孙元臻</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13软件学院班</p>
			<p>方向 : 数据挖掘 spring框架机制研究</p>
			<p>代表作 : 微博数据挖掘平台</p>
			<p>座右铭 : 不深思则不能造于道。不深思而得</p>
			<p>者，其得易失。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter left">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//8.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">许秋娟</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09计算机班</p>
			<p>方向 : 前端、美工</p>
			<p>代表作 : 西二工作室网站第二版</p>
			<p>座右铭 : 未来，我来</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//9.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">张士凡</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09计算机班</p>
			<p>方向 : .net组</p>
			<p>座右铭 : 做事要胆大心细，负责任</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//10.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">李智閩</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 計算機班</p>
			<p>方向 : java 組</p>
			<p>座右铭 : 遇挫而進</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 300px after 0.3s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//11.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">吕子凯</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09计算机班</p>
			<p>方向 : Net</p>
			<p>座右铭 : 天上的云朵在对你微笑</p>
			</span> 
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 100px">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//12.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">林明</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09计算机班</p>
			<p>开发环境：java + php</p>
			<p>座右铭 : 有心皆苦，无心即乐</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 300px after 0.3s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//13.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">林秋云</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09级信息安全</p>
			<p>方向 : 网络攻防</p>
			<p>座右铭 : 学习！学习！</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//14.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">叶俊</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机班</p>
			<p>方向 : java组</p>
			<p>座右铭 : 培训是磨灭兴趣的开始！</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter left">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//15.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">李腾</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09级计算机五班</p>
			<p>方向 : PHP</p>
			<p>座右铭 : 这个世界只有小孩子可以无所忧虑</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//68.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">王燕梅</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09级班</p>
			<p>方向 : 美工组</p>
			</span>
			</span>
        </li>
		<li data-scroll-reveal="enter top">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//69.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">李俊</p>
			<p>学院:数学与计算机科学学院</p>
			<p>班级:09计算机一班</p>
			<p>方向:.NET</p>
			<p>座右铭:我的地盘我做主</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 100px">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//70.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">魏小霞</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 级信息安全</p>
			<p>方向 : 网络攻防</p>
			<p>座右铭 : 就加油哈</p>
			</span>
			</span>
		</li>
</ul>



<ul>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//48.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">张华焱</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 软件班</p>
			<p>方向 : php/java/android</p>
			<p>职位 : java/android组负责人</p>
			<p>座右铭 : 不忘初心，才能始终。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//42.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">檀灵潇</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13软件工程班</p>
			<p>方向 : android,java Web</p>
			<p>座右铭 : 相信自己，永不止步</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//57.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">姚靖岚</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机</p>
			<p>方向 : 前端</p>
			<p>座右铭 : 明天又是新的一天</p>
			</span>
			</span>
		</li>	
		<li data-scroll-reveal="enter left">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//33.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">李瑶池</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13级软件工程</p>
			<p>方向 : 抓娃</p>
			<p>代表作 : 福大助手第二版</p>
			<p>座右铭 : 不抓娃不成魔</p>
			</span>
			</span>
		</li>
		</li>
			<li data-scroll-reveal="enter bottom over 1s and move 100px">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//62.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">温荣泉</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 数理综合班</p>
			<p>方向 : 前端、Unity3D游戏及应用开发</p>
			<p>座右铭 : 没有不可能，只有不努力，迈出一小</p>
			<p>步，离成功更近一步</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 0.5s and move 200px">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//63.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">马凛凛</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机实验班</p>
			<p>方向 : 前端</p>
			<p>座右铭 : 每天都要比昨天进步一点</p>
			</span>
			</span>
			</li>
		<li data-scroll-reveal="enter bottom over 1s and move 100px">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//20.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">柯妤珏</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 级信息安全</p>
			<p>方向 : 后台</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 0.5s and move 200px">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//21.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">谢玮</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 10计算机班</p>
			<p>方向 : 美工组</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//22.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">孙绪聪</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机班</p>
			<p>方向 : 美工、PHP、JAVA</p>
			<p>座右铭 : 勤学如群起之苗，不见其增，日有所</p>
			<p>长；辍学如磨刀之石，不见其短，日有所亏。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//23.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">张雨婷</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 软件一班</p>
			<p>方向 : 美工组</p>
			<p>代表作 : 张雨婷</p>
			<p> 座右铭 : 心情好一切都会好</p>
			</span>
			</span>
		</li>	
		<li data-scroll-reveal="enter top">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//24.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">肖守冬</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机班</p>
			<p>方向 : 后台</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter left">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//25.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">穆云飞</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 11级计算机五班</p>
			<p>方向 : php</p>
			</span>
		</li>
		<li data-scroll-reveal="enter top">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//26.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">姓名:李鑫</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机五班</p>
			<p>方向 : PHP</p>
			<p>代表作 : “考勤系统”</p>
			<p>座右铭 : step step</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//27.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">林青</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 11计算机班</p>
			<p>方向 : 美工</p>
			<p>座右铭 : 进步是因为你以前落下太多</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 100px">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//28.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">钟启富</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 11级信息安全</p>
			<p>方向 : Web安全、系统运维</p>
			<p>座右铭 : 像狼一样往前冲！为梦想而战！！</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//30.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">汪兆光</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机班</p>
			<p>方向 : PHP</p>
			<p>座右铭 : 一件事要么不做要么就努力做到最好</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//32.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">黎雨楠</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 11信息安全</p>
			<p>方向 : PS</p>
			<p>代表作 : 黎雨楠</p>
			</span>
			</span>
		</li>
	</ul>




<ul>
		<li data-scroll-reveal="enter left">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//41.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">洪伟鹏</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 软件班</p>
			<p>方向 : PHP</p>
			<p>职位 : 成员</p>
			<p>座右铭 : 永远要相信边上的人比你聪明。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 100px">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//44.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">吴先滇</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机班</p>
			<p>方向 : ios编程</p>
			<p>代表作 : 福大助手第二版</p>
			<p>座右铭 : 你不能左右天气，但你能转变自己的</p>
			<p>心情</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//31.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">郑家兴</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机班</p>
			<p>方向 : j2ee</p>
			<p>代表作 : 西二OA</p>
			<p>座右铭 : today lazy,tomorrow die。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 300px after 0.3s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//56.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">吴浩文</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13软件工程班</p>
			<p>方向 : iOS</p>
			<p>代表作 : 福大助手第二版ios版</p>
			<p>座右铭 : 一切皆有可能</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 300px after 0.3s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//46.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">江佳扬</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13级软件工程班</p>
            <p>方向 : php</p>
			<p>座右铭 : 共生命之慷慨繁华相爱，纵岁月以刻</p>
			<p>薄荒芜相欺</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//47.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">吴泽钦</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 13计算机班</p>
			<p>方向 : iOS</p>
			<p>代表作 : 福大助手第二版</p>
			<p>座右铭 : stay foolish，stay hungry</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//16.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">蓝玉梅</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09计算机班</p>
			<p>方向 : 美工组</p>
			</span>
			</span>
        </li>
		<li data-scroll-reveal="enter left">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//17.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">陈雪如</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09级计算机班</p>
			<p>方向 : 美工组</p>
			<p>座右铭 : 天道酬勤</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//18.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">翁诗宁</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09软件一班</p>
			<p>方向 : Java组</p>
			<p>座右铭 : You never know until you try.</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
			<span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//19.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">郑令飞</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机一班</p>
			<p>方向 : Java组</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter top over 0.5s and move 200px">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//71.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">陈昌荣</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机班</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter bottom over 1s and move 300px after 0.3s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//38.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">黄钦泉</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 信息安全</p>
			<p>方向 : PHP</p>
			<p>职位 : 成员</p>
			<p>座右铭 : HelloWorld</p>
			</span>
			</span>
        </li>
		<li data-scroll-reveal="enter right after 0.5s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//73.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">蓝铭铭</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 :</p>
			<p>方向 : 前端</p>
			<p>职位 : 成员</p>
			<p>座右铭 :</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter left">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//74.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">施霖杰</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 软件四班</p>
			<p>方向 : web开发</p>
			<p>职位 : 汉得技术顾问</p>
			<p>座右铭 : </p>
			</span>
			</span>
		</li>
		</li>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//64.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">林锦波</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 11级计算机班</p>
			<p>方向 : Java</p>
			<p>职位 : Java负责人</p>
			<p>座右铭 : 路漫漫其修远兮，吾将上下而求索。</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter right after 0.5s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//65.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">张雯楚</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 计算机班</p>
			<p>方向 : 运营组</p>
			<p>座右铭 : Follow your own course , and let </p>
			<p>people talk .</p>
			</span>
			</span>
        </li>
		<li data-scroll-reveal="enter top over 3s after 0.5s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//66.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">周强</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09计算机班</p>
			<p>方向 : JAVA组</p>
			</span>
			</span>
		</li>
		<li data-scroll-reveal="enter left">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//67.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">张清峰</p>
			<p>学院 : 数学与计算机科学学院</p>
			<p>班级 : 09计算机班</p>
			<p>方向 : Java组</p>
			</span>
			</span>
		</li>
        <li data-scroll-reveal="enter bottom over 1s and move 300px after 0.3s">
		    <span class="MemberShow ml100 fl">
			<img src="<?php bloginfo('template_directory'); ?>/image//72.jpg" class="cover" alt="Rolex Awards 2014">
			<span class="fl ml5 MemberShowDetail f12" style="font-size: 12px;">
			<p align="center" class="fb">姚珣珣</p>
			<p>班级 : 11级班</p>
			<p>方向 : 美工</p>
			<p>代表作 : 姚珣珣</p>
			</span>
			</span>
		</li>
	</ul>



</div>
<!--尾部-->
			<div class="comFooter" style="float: left;">
			<?php get_footer();?>
		</div>
<script src="<?php bloginfo('template_directory'); ?>/js/scrollReveal.js"></script> 
<script>
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		(function(){
		window.scrollReveal = new scrollReveal({reset: true});
	})();
};
</script>

 </body>
</html>