/**
 *******************************************************************
 ************* ─────────────────── **************
 ************* ─── 在线订单系统2013正式版 ───   **************
 ************* ─────────────────── **************
 ************* 程序开发：Dencent                      **************
 ************* 模板制作：[鱼盆] xgyp@163.com          **************
 ************* 技术支持：[QQ] 15619972                **************
 *******************************************************************
 *************   官方正版 *** 版权所有 *** 盗版必究   **************
 *******************************************************************
 */

function GetDateStr(AddDayCount){
	var dd = new Date();
	dd.setDate(dd.getDate()+AddDayCount);
	var y = dd.getFullYear();
	var m = dd.getMonth()+1;
	var d = dd.getDate();
	return y+"-"+m+"-"+d;
}

var i=0;
for(i=0;i<50;i++){
	document.write(GetDateStr(-1));	
	var rand1=parseInt(Math.random()*50+1);	
	quotes=new Array 
	quotes[1]=' 北京市 ' 
	quotes[2]=' 上海市 '
	quotes[3]=' 天津市 '
	quotes[4]=' 西安市 '
	quotes[5]=' 十堰市 '
	quotes[6]=' 深圳市 '
	quotes[7]=' 贵阳市 '
	quotes[8]=' 郑州市 '
	quotes[9]=' 重庆市 '
	quotes[10]=' 福州市 '
	quotes[11]=' 佛山市 '
	quotes[12]=' 桂林市 '
	quotes[13]=' 贵阳市 '
	quotes[14]=' 聊城市 '
	quotes[15]=' 杭州市 '
	quotes[16]=' 开封市 '
	quotes[17]=' 中山市 '
	quotes[18]=' 北京市 '
	quotes[19]=' 广州市 '
	quotes[20]=' 上海市 '
	quotes[21]=' 绍兴市 '
	quotes[22]=' 苏州市 '
	quotes[23]=' 天津市 '
	quotes[24]=' 长沙市 '
	quotes[25]=' 重庆市 '
	quotes[26]=' 南京市 '
	quotes[27]=' 武汉市 '
	quotes[28]=' 哈尔滨市 '
	quotes[29]=' 郑州市 '
	quotes[30]=' 大连市 '
	quotes[31]=' 石家庄市 '
	quotes[32]=' 秦皇岛市 '
	quotes[33]=' 太原市 '
	quotes[34]=' 沈阳市 '
	quotes[35]=' 佛山市 '
	quotes[36]=' 济南市 '
	quotes[37]=' 西安市 '
	quotes[38]=' 厦门市 '
	quotes[39]=' 成都市 '
	quotes[40]=' 上海市 '
	quotes[41]=' 广州市 '
	quotes[42]=' 东莞市 '
	quotes[43]=' 保定市 '	
	quotes[44]=' 杭州市 '
	quotes[45]=' 丽水市 '
	quotes[46]=' 青岛市 '
	quotes[47]=' 合肥市 '
	quotes[48]=' 九江市 '
	quotes[49]=' 鄂尔多斯 '
	quotes[50]='大庆市 '
	var quote=quotes[rand1]
	document.write(quote)	
	var rand1=parseInt(Math.random()*50+1);	
	quotes=new Array
	quotes[1]='张女士'
	quotes[2]='刘先生'
	quotes[3]='周先生'
	quotes[4]='吴先生'
	quotes[5]='朱先生'
	quotes[6]='陈女士'
	quotes[7]='田先生'
	quotes[8]='钟先生'
	quotes[9]='马先生'
	quotes[10]='韩先生'
	quotes[11]='顾女士'
	quotes[12]='王先生'
	quotes[13]='李先生'
	quotes[14]='卢女士'
	quotes[15]='崔先生'
	quotes[16]='段先生'
	quotes[17]='胡先生'
	quotes[18]='潘先生'
	quotes[19]='陈先生'
	quotes[20]='林先生'
	quotes[21]='代先生'
	quotes[22]='苏先生'	
	quotes[23]='曾女士'
	quotes[24]='余先生'
	quotes[25]='顾先生'
	quotes[26]='李女士'
	quotes[27]='宋先生'
	quotes[28]='郭先生'
	quotes[29]='江先生'
	quotes[30]='刘先生'
	quotes[31]='赵先生'
	quotes[32]='孙先生'
	quotes[33]='周女士'
	quotes[34]='郑先生'
	quotes[35]='李先生'
	quotes[36]='冯先生'
	quotes[37]='段女士'
	quotes[38]='蒋先生'
	quotes[39]='沈先生'
	quotes[40]='郑女士'
	quotes[41]='杨先生'
	quotes[42]='许先生'
	quotes[43]='吕先生'	
	quotes[44]='彭女士'
	quotes[45]='方先生'
	quotes[46]='罗女士'
	quotes[47]='汤先生'
	quotes[48]='程先生'
	quotes[49]='洪女士'
	quotes[50]='华先生'
	var quote=quotes[rand1]
	document.write(quote)
	var rand1=parseInt(Math.random()*5+1)
	quotes=new Array
	quotes[1]='（13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
	quotes[2]='（15'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
	quotes[3]='（13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
	quotes[4]='（18'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
	quotes[5]='（13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
	var quote=quotes[rand1]
	document.write(quote)
	document.write('<br>')
	var rand1=parseInt(Math.random()*2+1)
	quotes=new Array
	quotes[1]='<p>订购的：张振亚戒烟香（1盒）已发货 <font color="#FF0000">√</font></p>'
	quotes[2]='<p>订购的：张振亚戒烟香（2盒）已发货 <font color="#FF0000">√</font></p>'
	var quote=quotes[rand1]
	document.write(quote)
	document.write('<br>');
}

// DXPHPORDER fahuo.js end