<?php /* Smarty version 2.6.25, created on 2018-04-19 14:44:49
         compiled from h5/suanming/bzsm.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>stepMenu();</script>

<div id="path">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<h1 class="title"><?php echo $this->_tpl_vars['cookies']['xingming']['xing']; ?>
<?php echo $this->_tpl_vars['cookies']['xingming']['ming']; ?>
的八字测名算命结果</h1>

<div class="detail">

    <dl>

        <dd></dd>

        <h2>当前算命者信息</h2>

        <div class="h2_content">

            <p><span>姓名：<strong><?php echo $this->_tpl_vars['cookies']['xingming']['xing']; ?>
<?php echo $this->_tpl_vars['cookies']['xingming']['ming']; ?>
</strong> 年龄：<strong><?php echo $this->_tpl_vars['cookies']['nianling']['nl']; ?>
岁</strong> 出生时间：<strong><?php echo $this->_tpl_vars['cookies']['nianling']['y']; ?>
年<?php echo $this->_tpl_vars['cookies']['nianling']['m']; ?>
月<?php echo $this->_tpl_vars['cookies']['nianling']['d']; ?>
日<?php echo $this->_tpl_vars['cookies']['nianling']['h']; ?>
时<?php echo $this->_tpl_vars['cookies']['nianling']['i']; ?>
分</strong> 生肖：<strong><?php echo $this->_tpl_vars['cookies']['sx']; ?>
</strong></span></p>

        </div>

        <div class="detail">
        
            <h3>三世书算命结果：</h3>
            
            <dl>
            
            <dd><strong>你的大运：</strong></dd>
            
            <dd><?php echo $this->_tpl_vars['dayundate']; ?>
</dd>
            
            <dd>大运十神：<?php echo $this->_tpl_vars['dr_ss']; ?>
</dd>
            
            <dd>大运干支：<?php echo $this->_tpl_vars['dr_gz']; ?>
</dd>
            
            <dd>交运年份：<?php echo $this->_tpl_vars['dr_y']; ?>
>><?php echo $this->_tpl_vars['dr_y']+10; ?>
>><?php echo $this->_tpl_vars['dr_y']+20; ?>
>><?php echo $this->_tpl_vars['dr_y']+30; ?>
>><?php echo $this->_tpl_vars['dr_y']+40; ?>
>><?php echo $this->_tpl_vars['dr_y']+50; ?>
>><?php echo $this->_tpl_vars['dr_y']+60; ?>
>><?php echo $this->_tpl_vars['dr_y']+70; ?>
</dd>
            
            <dd>交运年龄：<?php echo $this->_tpl_vars['nnnn']+1; ?>
>>><?php echo $this->_tpl_vars['nnnn']+11; ?>
>>><?php echo $this->_tpl_vars['nnnn']+21; ?>
>>><?php echo $this->_tpl_vars['nnnn']+31; ?>
>>><?php echo $this->_tpl_vars['nnnn']+41; ?>
>><?php echo $this->_tpl_vars['nnnn']+51; ?>
>>><?php echo $this->_tpl_vars['nnnn']+61; ?>
>>><?php echo $this->_tpl_vars['nnnn']+71; ?>
</dd>
            
            <dd><strong>近12月运气：</strong></dd>
            
            <dd><?php echo $this->_tpl_vars['myq_text']; ?>
</dd>
            
            <dd>对你的忠言：喜神是<font color=#0033FF><b><?=$wh[$whh]?></b></font> <font color="#FF0000"><b><?php echo $this->_tpl_vars['wh123']; ?>
</b></font>  趋吉避凶的忠言</dd>
            
            <div align="center">
            
                <div class="bdlikebutton"></div>
            
            </div>
            
            </dd>
            
            </dl>
        
        </div>

</div>

<div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/more_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- 将此代码放在适当的位置，建议在body结束前 -->

<div id="navi">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/h5_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
