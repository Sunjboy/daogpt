<?php /* Smarty version 2.6.25, created on 2017-12-03 16:48:52
         compiled from h5/peidui/hehun_form.tpl */ ?>
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
<h1 class="title">八字合婚</h1>
<div class="detail">
    <dl>
        <dd class="form"><img src="/static/img/hh.png" width="90" class="fright p10">合婚又称"合年命"、"合八字"，古称"卜吉"。八字合婚是中国传统婚配预测方法之一，有着悠久的历史文化渊源；依据传统的八字合婚算命命理，用生辰八字对两人进行八字合婚,合婚算命，预测两人发展结果，防患不幸的婚姻于未燃之际，从而提高婚姻质量。</dd>
        <form name="s" action="/index.php" method="post">
            <input type="hidden" name="ac" value="hehun" />
            <input type="hidden" name="ct" value="h5_peidui" />
            <input type="hidden" name="tid" value="383" />
            <dd class="form">
                <img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/v2/girl_icon.png" alt="女性" class="item_imgIcon">女生姓名: <input class="ipt" name="user_a" size="12" id="name2" type="text" /></dd>
            <dd class="form">
                公历生日: <select class="select" name="year_a" id="year2">
                    <option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982" selected>1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option></select>
                <select class="select" name="month_a" id="month2">
                    <option value="1">1月</option><option value="2">2月</option><option value="3">3月</option><option value="4">4月</option><option value="5">5月</option><option value="6">6月</option><option value="7">7月</option><option value="8">8月</option><option value="9">9月</option><option value="10">10月</option><option value="11">11月</option><option value="12">12月</option></select>
                <select class="select" name="day_a" id="day2">
                    <option value="1">1日</option><option value="2">2日</option><option value="3">3日</option><option value="4">4日</option><option value="5">5日</option><option value="6">6日</option><option value="7">7日</option><option value="8">8日</option><option value="9">9日</option><option value="10">10日</option><option value="11">11日</option><option value="12">12日</option><option value="13">13日</option><option value="14">14日</option><option value="15">15日</option><option value="16">16日</option><option value="17">17日</option><option value="18">18日</option><option value="19">19日</option><option value="20">20日</option><option value="21">21日</option><option value="22">22日</option><option value="23">23日</option><option value="24">24日</option><option value="25">25日</option><option value="26">26日</option><option value="27">27日</option><option value="28">28日</option><option value="29">29日</option><option value="30">30日</option><option value="31">31日</option></select></dd>
            <dd class="form">
                出生时辰: <select class="select" name="t_ime_a" id="hour2">
                    <option value="0">时辰不清楚</option><option value="0">子 0</option><option value="1">丑 1</option><option value="2">丑 2</option><option value="3">寅 3</option><option value="4">寅 4</option><option value="5">卯 5</option><option value="6">卯 6</option><option value="7">辰 7</option><option value="8">辰 8</option><option value="9">巳 9</option><option value="10">巳 10</option><option value="11">午 11</option><option value="12">午 12</option><option value="13">未 13</option><option value="14">未 14</option><option value="15">申 15</option><option value="16">申 16</option><option value="17">酉 17</option><option value="18">酉 18</option><option value="19">戌 19</option><option value="20">戌 20</option><option value="21">亥 21</option><option value="22">亥 22</option><option value="23">子 23</option></select>
            </dd>

            <div class="line"></div>

            <dd class="form">
                <img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/v2/boy_icon.png" alt="男性" class="item_imgIcon">男生姓名: <input class="ipt" size="12" name="user" id="name1" type="text" /></dd>
            <dd class="form">
                公历生日:
                <select class="select" name="year" id="year1">
                    <option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981" selected>1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option></select>
                <select class="select" name="month" id="month1">
                    <option value="1">1月</option><option value="2">2月</option><option value="3">3月</option><option value="4">4月</option><option value="5">5月</option><option value="6">6月</option><option value="7">7月</option><option value="8">8月</option><option value="9">9月</option><option value="10">10月</option><option value="11">11月</option><option value="12">12月</option></select>
                <select class="select" name="day" id="day1">
                    <option value="1">1日</option><option value="2">2日</option><option value="3">3日</option><option value="4">4日</option><option value="5">5日</option><option value="6">6日</option><option value="7">7日</option><option value="8">8日</option><option value="9">9日</option><option value="10">10日</option><option value="11">11日</option><option value="12">12日</option><option value="13">13日</option><option value="14">14日</option><option value="15">15日</option><option value="16">16日</option><option value="17">17日</option><option value="18">18日</option><option value="19">19日</option><option value="20">20日</option><option value="21">21日</option><option value="22">22日</option><option value="23">23日</option><option value="24">24日</option><option value="25">25日</option><option value="26">26日</option><option value="27">27日</option><option value="28">28日</option><option value="29">29日</option><option value="30">30日</option><option value="31">31日</option></select>
            </dd>
            <dd class="form">出生时辰:
                <select class="select" name="t_ime" id="hour1">
                    <option value="0">时辰不清楚</option><option value="0">子 0</option><option value="1">丑 1</option><option value="2">丑 2</option><option value="3">寅 3</option><option value="4">寅 4</option><option value="5">卯 5</option><option value="6">卯 6</option><option value="7">辰 7</option><option value="8">辰 8</option><option value="9">巳 9</option><option value="10">巳 10</option><option value="11">午 11</option><option value="12">午 12</option><option value="13">未 13</option><option value="14">未 14</option><option value="15">申 15</option><option value="16">申 16</option><option value="17">酉 17</option><option value="18">酉 18</option><option value="19">戌 19</option><option value="20">戌 20</option><option value="21">亥 21</option><option value="22">亥 22</option><option value="23">子 23</option></select>
            </dd>

            <div class="line"></div>

            <div align="center">
                <input type="submit" name="submit" class="button" value="开始分析"/>
                <p class="remark">已有76,105人测算，97.8%好评。</p>
                <input type="hidden" name="action" value="test">
                <input type="hidden" name="t" value="hh">
                <input type="hidden" name="from" value="navi">
            </div>
        </form>
    </dl>
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