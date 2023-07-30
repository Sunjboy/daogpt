<?php exit();//<item name='软件应用' url='?ct=version3&ac=application'/>

?>
<root>


<menu name='算命频道'>
	<node name='分类'>
        <item name='添加分类' url='?ct=class&amp;ac=add&amp;model=video' ct='class' ac='add' />
        <item name='分类管理' url='?ct=class&amp;ac=index&amp;model=video' ct='class' ac='index' />
    </node>

    <node name='付费应用'>
        <item name='订单管理' url='?ct=ffsm_order&ac=index'/>
        <item name='姓名配对64卦' url='?ct=ffsm_xmpd&ac=index'/>
        <item name='生肖每月运势' url='?ct=ffsm_shengxiao&ac=index'/>
        <item name='五行健康' url='?ct=ffsm_whjk&ac=index'/>
        <item name='生肖综合运势' url='?ct=ffsm_xz_xg_cy_aq_jk_sy&ac=index'/>
    </node>

    <node name='常规管理'>
        <item name='缓存管理' url='?ct=cache&ac=index'/>
    </node> 
    
    <node name='八字算命'>
    	<item name='称骨论命' url='?ct=cglm&ac=index'/>
        <item name='淘宝客' url='?ct=sm_sxyc_taoke&ac=index'/>
        
        <item name='日干论命' url='?ct=rglm&ac=index'/>
        <item name='风水测算' url='?ct=fengshui&ac=index'/>
    	<item name='算命生肖性格' url='?ct=smsxxg&ac=index'/>
        <item name='三命通会' url='?ct=smth&ac=index'/>
        <item name='月日时命理' url='?ct=yuerishi&ac=index'/>
    </node>
    
    <node name='其他应用'>
        <item name='指纹算命' url='?ct=zhiwen&ac=index'/>
        <item name='配对信息' url='?ct=peidui&ac=index'/>
        <item name='笔画配对' url='?ct=peidui_bh&ac=index'/>
        <item name='抽签信息' url='?ct=chouqian&ac=index'/>
        <item name='诸葛测字' url='?ct=zhugeliang&ac=index'/>
        <item name='号码吉凶' url='?ct=haoma&ac=index'/>
    </node> 
    
    <node name='星座内容'>
    	<item name='星盘信息' url='?ct=xingpan&ac=index'/>
    	<item name='星座测试' url='?ct=xingzuo_test&ac=index'/>
        <item name='星座运势' url='?ct=xingzuo_yunshi&ac=index'/>
        <item name='上升星座' url='?ct=xingzuo_shangsheng&ac=index'/>
        <item name='星座每日运势' url='?ct=xingzuo_day&ac=index'/>
    </node>
    
    <node name='内容管理'>
        <item name='周公解梦' url='?ct=zgjm&ac=index'/>
        <item name='文章信息' url='?ct=news&ac=index'/>
        <item name='黄道吉日' url='?ct=hdjr&ac=index'/>
        <item name='历史今天' url='?ct=lishi&ac=index'/>
        <item name='百家姓' url='?ct=baijiaxing&ac=index'/>
        <item name='名字列表' url='?ct=xingming&ac=index'/>
        <item name='生日密码' url='?ct=srmm&ac=index'/>
        <item name='生肖性格' url='?ct=shengxiao&ac=index'/>
        <item name='单页面管理' url='?ct=page&ac=index'/>
    </node> 
    
    <node name='友链管理'>
    	<item name='链接管理' url='?ct=links&ac=index'/>
        <item name='添加链接' url='?ct=links&ac=add'/>
    </node> 
    
    <node name='手动数据'>
    	<item name='手动数据' url='?ct=hand&amp;ac=hand' ct='hand' ac='hand' />
        <item name='手动分类' url='?ct=hand&amp;ac=hand_type' ct='hand' ac='hand_type' />
    </node>

    <node name='专题管理'>
        <item name='专题' url='?ct=zhuanti&amp;ac=index' ct='zhuanti' ac='index' />
        <item name='添加专题' url='?ct=zhuanti&amp;ac=add' ct='zhuanti' ac='add' />
        <item name='专题模板' url='?ct=zttemplate&amp;ac=index' ct='zttemplate' ac='index' />
    </node>

    <node name='广告'>
    	<item name='广告设置' url='?ct=hand&amp;ac=ad' ct='hand' ac='hand' />
    </node> 
     
</menu>


<menu name='系统'> 
  <node name='帐号管理'>
    <item name='系统帐号管理' url='?ct=users&amp;ac=index' ct='users' ac='index' />
    <item name='组权限管理' url='?ct=users&amp;ac=edit_purview_groups' ct='users' ac='edit_purview_groups' />
    <item name='组权限XML配置' url='?ct=users&amp;ac=edit_purview_xml' ct='users' ac='edit_purview_xml' />
    <item name='登录IP限制' url='?ct=users&amp;ac=iplimit' ct='users' ac='iplimit' />
    <item name='我的权限' url='?ct=users&amp;ac=mypurview' default='1' ct='users' ac='mypurview' />
    <item name='修改密码' url='?ct=users&amp;ac=editpwd' ct='users' ac='editpwd' />
  </node>
  <node name='系统其它'>
    <item name='操作日志' url='?ct=users&amp;ac=log' ct='users' ac='log' />
    <item name='登录日志' url='?ct=users&amp;ac=login_log' ct='users' ac='login_log' /> 
  </node>
</menu>

</root> 
