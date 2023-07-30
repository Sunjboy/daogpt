<?php /* Smarty version 2.6.25, created on 2018-02-02 01:07:54
         compiled from h5/suanming/sm.tpl */ ?>
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

        <h2>王小丫的五行八字分析：</h2>

        <div class="h2_content">

            <table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#ddd" style="margin-top:10px;">

                <tbody>

                <tr>

                    <td  width="100" align="center" bgcolor="#F5F8FD" class="suanming"><strong>公历生辰</strong></td>

                    <td  width="65" bgcolor="#F5F8FD" class="suanming"><?php echo $this->_tpl_vars['cookies']['nianling']['y']; ?>
年</td>

                    <td  width="65" bgcolor="#F5F8FD" class="suanming"><?php echo $this->_tpl_vars['cookies']['nianling']['m']; ?>
月</td>

                    <td  width="65" bgcolor="#F5F8FD" class="suanming"><?php echo $this->_tpl_vars['cookies']['nianling']['d']; ?>
日</td>

                    <td  width="70" bgcolor="#F5F8FD" class="suanming"><?php echo $this->_tpl_vars['cookies']['nianling']['h']; ?>
点</td>

                </tr>

                <tr>

                    <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>农历生辰</strong></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['jiuli']['y']; ?>
年</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['jiuli']['m']; ?>
月</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['jiuli']['d']; ?>
日</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['jiuli']['h']; ?>
时</td>

                </tr>

                <tr>

                    <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>八字：</strong></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['bazi']['0']; ?>
<?php echo $this->_tpl_vars['cookies']['bazi']['1']; ?>
　</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['bazi']['2']; ?>
<?php echo $this->_tpl_vars['cookies']['bazi']['3']; ?>
　</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['bazi']['4']; ?>
<?php echo $this->_tpl_vars['cookies']['bazi']['5']; ?>
　</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['bazi']['6']; ?>
<?php echo $this->_tpl_vars['cookies']['bazi']['7']; ?>
　</td>

                </tr>

                <tr>

                    <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>五行：</strong></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['wh']['0']; ?>
<?php echo $this->_tpl_vars['cookies']['wh']['1']; ?>
</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['wh']['2']; ?>
<?php echo $this->_tpl_vars['cookies']['wh']['3']; ?>
</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['wh']['4']; ?>
<?php echo $this->_tpl_vars['cookies']['wh']['5']; ?>
</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['cookies']['wh']['6']; ?>
<?php echo $this->_tpl_vars['cookies']['wh']['7']; ?>
</td>

                </tr>

                <tr>

                    <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>纳音：</strong></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['nayin']['0']['layin']; ?>
</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['nayin']['1']['layin']; ?>
</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['nayin']['2']['layin']; ?>
</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['nayin']['3']['layin']; ?>
</td>

                </tr>

                </tbody>

            </table>

            <p><strong>八字五行个数</strong> : <?php echo $this->_tpl_vars['jmsh']['jin']; ?>
个金，<?php echo $this->_tpl_vars['jmsh']['mu']; ?>
个木，<?php echo $this->_tpl_vars['jmsh']['shui']; ?>
个水，<?php echo $this->_tpl_vars['jmsh']['huo']; ?>
个火，<?php echo $this->_tpl_vars['jmsh']['tu']; ?>
个土</p>

            <p><strong>四季用神参考</strong> 日主天干<?php echo $this->_tpl_vars['cookies']['wh']['4']; ?>
生于<?php echo $this->_tpl_vars['cookies']['siji']; ?>
季,<?php echo $this->_tpl_vars['sjrs']['sjrs']; ?>
</p>

            <p><strong>穷通宝鉴调候用神参考 <?php echo $this->_tpl_vars['cookies']['bazi']['4']; ?>
<?php echo $this->_tpl_vars['cookies']['wh']['4']; ?>
生于<?php echo $this->_tpl_vars['cookies']['bazi']['3']; ?>
月，<?php echo $this->_tpl_vars['qtbj']['content']; ?>
</strong></p>

            <p>本命属<?php echo $this->_tpl_vars['cookies']['sx']; ?>
，<?php echo $this->_tpl_vars['nayin']['0']['layin']; ?>
命。<?php echo $this->_tpl_vars['wang']['wang']; ?>
<?php echo $this->_tpl_vars['wang']['que']; ?>
；日主天干为<?php echo $this->_tpl_vars['nayin']['0']['layin']; ?>
<?php echo $this->_tpl_vars['wang']['wang']; ?>
<?php echo $this->_tpl_vars['wang']['que']; ?>
<?php echo $this->_tpl_vars['cookies']['bazi']['4']; ?>
，生于<?php echo $this->_tpl_vars['cookies']['siji']; ?>
季。 </p>

        </div>

        <h2>生肖个性：</h2>

        <div class="h2_content">

            <p>
                <strong>生肖个性</strong>
                根据分析，您的生肖为"<?php echo $this->_tpl_vars['cookies']['sx']; ?>
"<br/>
                <?php echo $this->_tpl_vars['sxgx']['sxgx']; ?>

            </p>

        </div>


        <h2>日干心性：</h2>

        <div class="h2_content">

            <p><?php echo $this->_tpl_vars['rgxx']['rgxx']; ?>
</p>

        </div>

        <h2>日干支层次：</h2>

        <div class="h2_content">

            <p><?php echo $this->_tpl_vars['rgxx']['rgcz']; ?>
</p>

        </div>

        <h2>日干支分析：</h2>

        <div class="h2_content">

            <p><?php echo $this->_tpl_vars['rgxx']['rgzfx']; ?>
</p>

        </div>

        <h2>五行生克(制化宜忌)：</h2>

        <div class="h2_content">

            <p><?php echo $this->_tpl_vars['tywh']['skzhyj']; ?>
</p>

        </div>

        <h2>五行之性：</h2>

        <div class="h2_content">

            <p><?php echo $this->_tpl_vars['tywh']['whzx']; ?>
</p>

        </div>

        <h2>四柱五行生克中对应需补的脏腑和部位：</h2>

        <div class="h2_content">

            <p><?php echo $this->_tpl_vars['tywh']['szwh']; ?>
</p>

        </div>


        <h2>宜从事行业与方位：</h2>

        <div class="h2_content">

            <p><?php echo $this->_tpl_vars['tywh']['hyhw']; ?>
</p>

            <div align="center" style="paping-top:10px"><div class="bdlikebutton"></div></div>

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
