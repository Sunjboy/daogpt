<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>
<h1 class="title">名字测试打分</h1>
<div class="detail">
    <dl>
        <dd class="form">传承周易、八字、卜卦、测字、五行等传统文化，从事业、婚姻、健康、爱情、运程、家庭、学业等多方面分析姓名的吉凶。</dd>
        <form name=form1 action="/index.php"  method="post">
            <input type="hidden" name="ac" value="xmfx" />
            <input type="hidden" name="ct" value="h5_xingming" />
            <input type="hidden" value="371" name="tid">
            <dd class="form">
                <strong>输入姓名</strong>：<input class="ipt" type="text" name="name" id="wd" maxLength=32 onBlur="if (value==''){value='请输入姓名'}" onFocus="if (value=='请输入姓名') {value=''}" value="王小丫">
            </dd>
            <dd>
                <div align="center">
                    <input type="submit" name="submit" class="button" value="马上测试" />
                    <input type="hidden" name="action" value="jieguo">
                </div>
            </dd>
    </dl>
</div>
<div class="detail">
    <h3>试试：</h3>
    <dl>
        <li> &nbsp; <a href="/name/%C0%EE%D2%D7%B7%E5" target="_blank">李易峰</a>  &nbsp; <a href="/name/%B7%B6%B1%F9%B1%F9" target="_blank">范冰冰</a>  &nbsp; <a href="/name/%C7%C7%C8%CE%C1%BA" target="_blank">乔任梁</a>  &nbsp; <a href="/name/%D1%EE%C3%DD" target="_blank">杨幂</a>  &nbsp; <a href="/name/%CD%F5%D7%D3%CE%C4" target="_blank">王子文</a>  &nbsp; <a href="/name/%BA%FA%B8%E8" target="_blank">胡歌</a>  &nbsp; <a href="/name/%CD%F5%BF%A1%BF%AD" target="_blank">王俊凯</a>  &nbsp; <a href="/name/%D5%C5%D2%D5%D0%CB" target="_blank">张艺兴</a>
        </li>
    </dl>
</div>
<div class="detail">
    <h3>姓名测试简介：</h3>
    <dl>
        <dd><strong>「姓名算命」</strong>《生辰八字起名测名》名字是一个符号不假，但它却是一个非常特别、极其重要的符号。他是一个人安身立命的根本，是人生的一面旗帜。神算网免费为你的姓名算命，提供生辰八字测名字打分，真正的好名字，必须拥有深刻的寓意，必须能体现一个人的社会层次。蕴涵了人的精、气、神，传达着天地之玄机。一个好的名字，不仅给别人印象深刻，而且还关系到人一生的命运、事业、婚姻、健康和人际关系。可通过姓名测试命运。也可通过姓名测试爱情，查看人一生的命运、三才五格，姓名测试爱情查看婚姻结果，名字笔画五行不要和命谱四柱五行相联系，它本身五格部象的五行相生相克是其本身独立一格的五行，与命谱五行没有联系的，看看你的名字测试打分到底能得多少分。</dd>
    </dl>
</div>



<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<div class="detail">
    <h3>免费起名简介：</h3>
    <dl>
        <dd>
            <strong>「<a href="/xingming/xmfx/">神算网名称测试</a>」</strong>为您的企业、公司名称评分。名字是一个符号不假，但它却是一个非常特别、极其重要的符号。详细名字评分分析还须要配合个人八字五行匹配，名字评分信则灵不信则不灵。请在下面输入你要测试的名称进行<a href="/xingming/xmfx/">评分测试</a>吧！
        </dd>
    </dl>
</div>
<{include file='./h5/public/news.tpl'}>
<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./index/footer.tpl'}>