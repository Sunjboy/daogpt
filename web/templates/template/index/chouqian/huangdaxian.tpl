<{include file='./index/header.tpl'}>
<link type="text/css" rel="stylesheet" href="<{$web_url}>static/bazi/css/suanming/v2/divine.css"/>
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
			  <div class="mod_box_t1 fn_part fn_dx">
					<div class="hd">
						<h1><img src="<{$web_url}>static/bazi/images/suanming/tit/chouqian.png">黄大仙灵签</h1>
					</div>
					<div class="bd">
                    <div class="divine_special result-con clearfix">
                    
                    <{if $qid!=''}>
                     	<div class="img-dx">
							  <{$qian.huangdaxian_img}>
						  </div>
                        <div class="result-detail">
								<p class="title">您抽中了【第<span><{$qian.qid}></span>签】<{$qian.qianming}></p>
								<table>
									<colgroup>
										<col width="77">
										<col width="375">
									</colgroup>
									<tbody><tr>
										<td class="col-1">凶吉</td>
										<td><strong><{$qian.jx}></strong></td>
									</tr>
									<tr>
										<td class="col-1">解曰</td>
										<td><{$qian.jie}></td>
									</tr>
									<tr>
										<td class="col-1">签语</td>
										<td><{$qian.qy}></td>
									</tr>
									<tr>
										<td class="col-1">释义</td>
										<td><{$qian.shiyi}></td>
									</tr>
									<tr>
										<td class="col-1">古人典故</td>
										<td><{$qian.guren}></td>
									</tr>
								</tbody></table>
							</div>
                            
                        <div style="display:block; float:left; margin-top:30px;">
                        	<a href="<{$web_url}>chouqian/huangdaxian/" class="btn_orange_1">重新抽签</a>
                        </div>
					<{/if}>
					
                   
              <{if $rand!=''}>
              
                  <{if $gysmile!='4' && $clicknum<3}>
                        
                        <p class="first">您刚抽了第 <strong class="cRed"><{$rand}></strong> 签</p>
                        <{if $clicknum==2}>
                        <h5><img src="<{$web_url}>static/bazi/img/suanming/good_cup.gif" /></h5>
                        <{else}>
                        <h5><a href="<{$web_url}>chouqian/huangdaxian/<{$clicknum+2}>/<{$rand}>"></a><img src="<{$web_url}>static/bazi/img/suanming/good_cup.gif" /></h5>
                        <{/if}>
                        <p class="last"><span class="cRed">您掷出<{$clicknum+1}>次圣杯，请点击上图再次掷出！</span></p>
                        
                        <{if $clicknum==2}>
                        	<p class="last"><span class="cRed">恭喜，您连续掷出了三次圣杯，<a href="<{$web_url}>chouqian/huangdaxian/4/<{$rand}>">请点这里察看签词！</a></span></p>
                        <{else}>
                        	<p class="last">需连续掷出三次圣杯，才是灵签！目前，您已经掷出<strong class="cRed"><{$clicknum+1}></strong>次</p>    
                  		<{/if}>
                  <{else}>
                  
                        <p class="first">您刚抽了第 <strong class="cRed"><{$rand}></strong> 签</p>
                        <h5><img src="<{$web_url}>static/bazi/img/suanming/bad_cup.gif" /></h5>
                        <p class="last"><span class="cRed">您掷出笑杯了，此签不准。<a href="<{$web_url}>chouqian/huangdaxian/">请点这里重新抽签！</a></span></p>
                  
                  <{/if}>
                  
              <{/if}>
                    
              <{if $qid=='' && $rand==''}>
                    <h6><a href="<{$web_url}>chouqian/huangdaxian/1" title="首先请您心无杂念，然后点这里开始抽签"><img src="<{$web_url}>static/bazi/img/suanming/v2/qian.gif" alt="灵签"></a></h6>
 <p>专业版黄大仙灵签有100签，黄大仙算命为您提供解签，三种签的签文自古至今流传久远，各地吕祖善抽签略有不同。也有少数佛寺院使用这种签种黄大仙灵签解签，首先要有一棵真诚的心态，闭上眼睛请求指点的事情。如婚姻、事业、运程、流年、工作、财运......所谓的心诚则灵啊，之后才开始。</p>
                    <ul>
                       <li>1. 抽签前先净手后双手合十虔诚默念 "大仙大仙、指点迷津"。</li>
						<li>2. 默念自己姓名、出生日期，年龄、现在居住地址。</li>
						<li>3. 请求指点的事情。如婚姻、事业、运程、流年、工作、财运...... 等等。</li>
						<li>4. 点上面的签筒开始抽签！</li>
                    </ul>
                <{/if}>
                
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

