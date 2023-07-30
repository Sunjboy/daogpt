<?php /* Smarty version 2.6.25, created on 2017-12-10 02:31:29
         compiled from index/chouqian/wanggong.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/divine.css"/>
<div class="wrapper">
    <div class="main">
        <div class="menu_xy">
            <div class="menu_xy_inner">
                <ul class="clearfix">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/top_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </ul>
            </div>
        </div>
        <div class="submenu">
            <?php echo $this->_tpl_vars['topic']; ?>

        </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="cont">
<div class="col_left">
			  <div class="mod_box_t1 fn_part fn_gy">
					<div class="hd">
						<h1><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/suanming/tit/chouqian.png">王公灵签</h1>
					</div>
					<div class="bd">
                    <div class="divine_special result-con clearfix">
                    
                    <?php if ($this->_tpl_vars['qid'] != ''): ?>
                        <div class="result-detail">
								<p class="title">您抽中了【第<span><?php echo $this->_tpl_vars['qian']['qid']; ?>
</span>签】<?php echo $this->_tpl_vars['qian']['qianming']; ?>
</p>
								<table>
									<colgroup>
										<col width="77">
										<col width="375">
									</colgroup>
									<tbody>
									<tr>
										<td class="col-1">解曰</td>
										<td><?php echo $this->_tpl_vars['qian']['jie']; ?>
</td>
									</tr>
									<tr>
										<td class="col-1">签语</td>
										<td><?php echo $this->_tpl_vars['qian']['qy']; ?>
</td>
									</tr>
									<tr>
										<td class="col-1">释义</td>
										<td><?php echo $this->_tpl_vars['qian']['shiyi']; ?>
</td>
									</tr>
									<tr>
										<td class="col-1">详解</td>
										<td><?php echo $this->_tpl_vars['qian']['xiangjie']; ?>
</td>
									</tr>
								</tbody></table>
							</div>
                            
                        <div style="display:block; float:left; margin-top:30px;">
                        	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/wanggong/" class="btn_orange_1">重新抽签</a>
                        </div>
					<?php endif; ?>
					
                   
              <?php if ($this->_tpl_vars['rand'] != ''): ?>
              
                  <?php if ($this->_tpl_vars['gysmile'] != '4' && $this->_tpl_vars['clicknum'] < 3): ?>
                        
                        <p class="first">您刚抽了第 <strong class="cRed"><?php echo $this->_tpl_vars['rand']; ?>
</strong> 签</p>
                        <?php if ($this->_tpl_vars['clicknum'] == 2): ?>
                        <h5><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/good_cup.gif" /></h5>
                        <?php else: ?>
                        <h5><a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/wanggong/<?php echo $this->_tpl_vars['clicknum']+2; ?>
/<?php echo $this->_tpl_vars['rand']; ?>
"></a><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/good_cup.gif" /></h5>
                        <?php endif; ?>
                        <p class="last"><span class="cRed">您掷出<?php echo $this->_tpl_vars['clicknum']+1; ?>
次圣杯，请点击上图再次掷出！</span></p>
                        
                        <?php if ($this->_tpl_vars['clicknum'] == 2): ?>
                        	<p class="last"><span class="cRed">恭喜，您连续掷出了三次圣杯，<a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/wanggong/4/<?php echo $this->_tpl_vars['rand']; ?>
">请点这里察看签词！</a></span></p>
                        <?php else: ?>
                        	<p class="last">需连续掷出三次圣杯，才是灵签！目前，您已经掷出<strong class="cRed"><?php echo $this->_tpl_vars['clicknum']+1; ?>
</strong>次</p>    
                  		<?php endif; ?>
                  <?php else: ?>
                  
                        <p class="first">您刚抽了第 <strong class="cRed"><?php echo $this->_tpl_vars['rand']; ?>
</strong> 签</p>
                        <h5><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/bad_cup.gif" /></h5>
                        <p class="last"><span class="cRed">您掷出笑杯了，此签不准。<a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/wanggong/">请点这里重新抽签！</a></span></p>
                  
                  <?php endif; ?>
                  
              <?php endif; ?>
                    
              <?php if ($this->_tpl_vars['qid'] == '' && $this->_tpl_vars['rand'] == ''): ?>
                    <h6><a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/wanggong/1" title="首先请您心无杂念，然后点这里开始抽签"><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/v2/qian.gif" alt="灵签"></a></h6>
 <p>王公灵签又称王公祖仔灵签，王公祖仔（320年－385年）姓谢名安，字安石，号东山。是东晋王朝有名的宰相，祖籍陈郡阳夏（今河南太康）人。他出身名门大族，祖父谢衡以儒学知名，官至国子祭酒；父亲谢裒（方音蒲），官至太常卿，母亲钱氏，生有谢奕、谢据、谢安、谢万、谢铁、谢石等六个儿子，谢安排行第三。</p>
 <p>王公灵签一共50签。请诚心向王公祖仔禀报求问之事，求签前须请求神明同意以连续三圣杯为准赐签，点击签筒开始抽签。抽取签支后，以连续不中断的三次圣杯为准，即求签时“连续三圣杯”是绝对必要的原则。就是说抽取签支后开始，在连续求得三圣杯之前，只要见到笑杯要重抽签。同一问题不可重复占卜！《易经·蒙》曰：“再三渎，渎则不告”。</p>
                    <ul>
                        <li>1. 抽签须虔诚认真，秉除杂念，不可玩笑试之。不可随意抽签，要遵守“无事不占卜”的规则，心诚则灵。</li>
                        <li>2. 净身（就是洗澡），如无条件洗澡的，也必须把双手洗干净。</li>
                        <li>3. 签的时间：中午十二点左右和晚上十一点前或者后，晚上十一点是阴阳相接之时，最适宜抽签，抽签的信息也最准确；房事后和打雷下大雨时不要抽签，因为此时信息不准。</li>
                        <li>4. 事先确定要占的事情，如婚姻、事业、运程、流年、工作、财运......等。</li>
                        <li>5. 默念自己姓名、出生时辰、年龄、现在居住地址。</li>
                        <li>6. 点击上面的签筒开始抽签。抽签完毕，需要掷出三次圣杯才算灵签，否则需要重新抽签。</li>
                        <li>7. 每天只能针对某一件事情进行一次抽签占卜，请勿多求，否则不灵。</li>
                    </ul>
                <?php endif; ?>
                
                    </div>
                    
                    </div>
					<i class="flag_tl_t1"></i><i class="flag_tr_t1"></i><i class="flag_bl_t1"></i><i class="flag_br_t1"></i>
				</div>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_sx.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div id="col_right" class="col_right">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
                    </div>
                </div>
            </div>
        </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
