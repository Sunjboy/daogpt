<{include file='./index/header.tpl'}>
<link href="<{$web_url}>static/bazi/css/suanming/v2/test.css" rel="stylesheet" type="text/css">

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
				<div class="mod_box_t1 fn_part <{if $data.d!=''}><{$data.d}><{elseif $seo.id==432}>fn_suanming_zw<{elseif $seo.id==433}>fn_shouxiang<{elseif $seo.id==434}>fn_zhi<{elseif $seo.id==435}>fn_sasvyc<{elseif $seo.id==436}>fn_yanpi<{elseif $seo.id==437}>fn_penti<{elseif $seo.id==438}>fn_zhi2<{else}>fn_suanming_zw<{/if}>">
					<div class="hd">
                    
                    	<h1><{$data.t}></h1>
					</div>
                    
                    <div class="bd">
                    	
                        <{$data.content}>
                        
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

