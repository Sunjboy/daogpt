<{include file='./index/header.tpl'}>
<link type="text/css" rel="stylesheet" href="<{$web_url}>static/bazi/css/style.css">
<script type="text/javascript" src="<{$web_url}>static/bazi/js/jquery.min.js"></script>
<script type="text/javascript" src="<{$web_url}>static/bazi/js/ainatec.js"></script>
<div class="wrapper">
    <div class="main">
        <div class="menu_xy">
            <div class="menu_xy_inner">
                <ul class="clearfix">
                    <{include file='./index/public/top_nav.tpl'}>
                </ul>
            </div>
        </div>
<{include file='./index/public/path.tpl'}>         
       
        
       <div class="star_con">
	<a href="<{$web_url}>xingzuo/baiyang/" class="star_icon star1 <{if $seo.id==401}>star_current<{/if}>">
		<span class="star_name">白羊座</span>
		<span class="star_date">(3.21-4.19)</span>
	</a>
	<a href="<{$web_url}>xingzuo/jinniu/" class="star_icon star2 <{if $seo.id==402}>star_current<{/if}>">
		<span class="star_name">金牛座</span>
		<span class="star_date">(4.20-5.20)</span>
	</a>
	<a href="<{$web_url}>xingzuo/shuangzi/" class="star_icon star3 <{if $seo.id==403}>star_current<{/if}>">
		<span class="star_name">双子座</span>
		<span class="star_date">(5.21-6.21)</span>
	</a>
	<a href="<{$web_url}>xingzuo/juxie/" class="star_icon star4 <{if $seo.id==404}>star_current<{/if}>">
		<span class="star_name">巨蟹座</span>
		<span class="star_date">(6.22-7.22)</span>
	</a>
	<a href="<{$web_url}>xingzuo/shizi/" class="star_icon star5 <{if $seo.id==405}>star_current<{/if}>">
		<span class="star_name">狮子座</span>
		<span class="star_date">(7.23-8.22)</span>
	</a>
	<a href="<{$web_url}>xingzuo/chunv/" class="star_icon star6 <{if $seo.id==406}>star_current<{/if}>">
		<span class="star_name">处女座</span>
		<span class="star_date">(8.23-9.22)</span>
	</a>
	<a href="<{$web_url}>xingzuo/tiancheng/" class="star_icon star7 <{if $seo.id==407}>star_current<{/if}>">
		<span class="star_name">天秤座</span>
		<span class="star_date">(9.23-10.23)</span>
	</a>
	<a href="<{$web_url}>xingzuo/tianxie/" class="star_icon star8 <{if $seo.id==408}>star_current<{/if}>">
		<span class="star_name">天蝎座</span>
		<span class="star_date">(10.24-11.22)</span>
	</a>
	<a href="<{$web_url}>xingzuo/sheshou/" class="star_icon star9 <{if $seo.id==409}>star_current<{/if}>">
		<span class="star_name">射手座</span>
		<span class="star_date">(11.23-12.21)</span>
	</a>
	<a href="<{$web_url}>xingzuo/mojie/" class="star_icon star10 <{if $seo.id==410}>star_current<{/if}>">
		<span class="star_name">摩羯座</span>
		<span class="star_date">(12.22-1.19)</span>
	</a>
	<a href="<{$web_url}>xingzuo/shuiping/" class="star_icon star11 <{if $seo.id==411}>star_current<{/if}>">
		<span class="star_name">水瓶座</span>
		<span class="star_date">(1.20-2.18)</span>
	</a>
	<a href="<{$web_url}>xingzuo/shuangyu/" class="star_icon star12 <{if $seo.id==412}>star_current<{/if}>">
		<span class="star_name">双鱼座</span>
		<span class="star_date">(2.19-3.20)</span>
	</a>
</div>



<div class="cont">

			<div class="col_left">

				<div class="mod_box_t1 fn_part fn_zhgjm">

					<div class="hd">
                    
                    <h1><{$data.shorttxt}></h1>
                    
                    </div>
                    
						<div class="bd dream_result">
                        
							<div class="newsinfo mb10">时间：<{$data.uptime}> &nbsp; 来源：神算网 &nbsp; 关键词：<{$data.title}></div>	
                        
                        
							<div class="dream_detail mb10">
                            
                            <h4 class="cut_tit"><{$data.title}>今日指数：</h4>
                                <div class="sr_txt mt10">
                                    <p>综合：<{$data.content.zonghe}>%; 爱情：<{$data.content.aiqing}>%; 工作：<{$data.content.gongzuo}>%;</p>
                                   
                                    <p>财富：<{$data.content.caiyun}>%; 健康：<{$data.content.jiankang}>; 开运方位：<{$data.content.kaiyunfangwei}></p>
                                    
                                    <p>幸运数字：<{$data.content.xingyunshuzi}>; 幸运颜色：<{$data.content.yanse}></p>
                                </div>	
                            <h4 class="cut_tit"><{$data.title}>今日建议：</h4>
                                <div class="sr_txt mt10">
                                        <{$data.des}>
                                </div>
                            <h4 class="cut_tit"><{$data.title}>宜忌：</h4>
                                <div class="sr_txt mt10">
                                        <p>宜：<{$data.yi}></p>
                                        <p>忌：<{$data.ji}></p>
                                </div>   
                                 
                            <h4 class="cut_tit"><{$data.title}>图解：</h4>
                                <div class="sr_txt mt10">
                                        <img src="<{$data.img}>" style="border:0;" />
                                </div>       
                                
                            <hr class="jm_hr">
                             
                                	        
							</div>	
                            

							<div class="dream_other">

								<p>你可能感兴趣的</p>
                                
								<div class="dream_other_a mt10 adbox_con" id="astro_re">
                               <ul class="astro_re">
                                   <{foreach from=$hot_data item=v}>
                                       <li>
                                       <a href="<{$v.url}>" target="_blank"><{$v.title}></a>
                                       </li>
                                   <{/foreach}>    
                               </ul>
							   
									<div class="adbox2">
										300250
									</div>
								</div>
								

							</div>

						</div>

					

					<i class="flag_tl_t1"></i><i class="flag_tr_t1"></i><i class="flag_bl_t1"></i><i class="flag_br_t1"></i>

</div>

<{include file='./index/public/left_sx.tpl'}>


</div>

<div id="col_right" class="col_right">

<{include file='./index/public/right.tpl'}>  

</div>

</div>



</div>

<{include file='./index/footer.tpl'}>

