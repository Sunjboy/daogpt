<{include file='./index/header.tpl'}>
<link href="<{$web_url}>static/bazi/css/suanming/v2/dream.css" rel="stylesheet" type="text/css">

<div class="wrapper">
    <div class="main">
        <div class="menu_xy">
            <div class="menu_xy_inner">
                <ul class="clearfix">
                    <{include file='./index/public/top_nav.tpl'}>
                </ul>
            </div>
        </div>
        <div class="submenu">
            <{$topic}>
        </div>
        
<{include file='./index/public/path.tpl'}>         
        <div class="cont">

			<div class="col_left">

				<div class="mod_box_t1 fn_part fn_zhgjm">

					<div class="hd">
                    
                    <h1><{$data.title}></h1>
                    
                    </div>
                    
						<div class="bd dream_result">
                        
							<div class="newsinfo mb10">时间：<{$data.uptime}> &nbsp; 来源：神算网 &nbsp; 关键词：<{$data.contentKeyword}></div>	
                        
                        
							<div class="dream_detail mb10">
									<{$data.content}>
                                    
                                    
                                    <div class="page">
                                    <{$pageStr}>
                                    </div>
							</div>	
                            

							<div class="dream_other">

								<p>你可能感兴趣的</p>
                                
								<div class="dream_other_a mt10 adbox_con" id="astro_re">
                               <ul class="astro_re">
                               <{foreach from=$hot_data item=v}>
                                   <li>
                                   <a href="show-<{$v.id}>.html" target="_blank"><{$v.title}></a>
                                   </li>
                               <{/foreach}>    
                               </ul>
							   
									<div class="adbox2">
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

</div>

<{include file='./index/footer.tpl'}>

