
var mc_NTIyOTE = 'NTIyOTE';
var mc_num_NTIyOTE = '52291';
var w_NTIyOTE = '300';
var h_NTIyOTE = '250';
var ps_NTIyOTE = '';
var url_NTIyOTE = '';
var le_NTIyOTE = '';
var ri_NTIyOTE = '155';
var to_NTIyOTE = '';
var bo_NTIyOTE = '100';
var tf_NTIyOTE = '';
var vs_NTIyOTE = '300';	//노출 시작 지점(스크롤 값)
var vsf_NTIyOTE = '1';	//노출 시작 후 사라지는 옵션 (0: 사라짐, 1:유지)
var full_NTIyOTE = '';	//가로 100% 여부
var dp_NTIyOTE = '';
var pos_NTIyOTE = (le_NTIyOTE) ? ((le_NTIyOTE.indexOf('%')!= -1)?'left:'+le_NTIyOTE+';':'left:'+le_NTIyOTE+'px;') : '';
pos_NTIyOTE = (ri_NTIyOTE) ? ((ri_NTIyOTE.indexOf('%')!= -1)?pos_NTIyOTE + 'right:'+ri_NTIyOTE+';':pos_NTIyOTE + 'right:'+ri_NTIyOTE+'px;') : pos_NTIyOTE;
pos_NTIyOTE = (to_NTIyOTE) ? ((to_NTIyOTE.indexOf('%')!= -1)?pos_NTIyOTE + 'top:'+to_NTIyOTE+';':pos_NTIyOTE + 'top:'+to_NTIyOTE+'px;') : pos_NTIyOTE;
pos_NTIyOTE = (bo_NTIyOTE) ? ((bo_NTIyOTE.indexOf('%')!= -1)?pos_NTIyOTE + 'bottom:'+bo_NTIyOTE+';':pos_NTIyOTE + 'bottom:'+bo_NTIyOTE+'px;') : pos_NTIyOTE;
var tansform_NTIyOTE = (tf_NTIyOTE) ? "transform: translateX(-50%)":"";
var body_NTIyOTE = top.document.body || window.parent.document.body;
var dcamp_mv_div_NTIyOTE = document.createElement('div');
dcamp_mv_div_NTIyOTE.id = 'dcamp_ad_' + mc_num_NTIyOTE;
dcamp_mv_div_NTIyOTE.setAttribute('style', 'display:flex; width:'+w_NTIyOTE+'px; position:fixed; z-index:9999999999;' + pos_NTIyOTE + tansform_NTIyOTE);
body_NTIyOTE.appendChild(dcamp_mv_div_NTIyOTE);

var med_dv;
var dc_dv;
var isOlap;
var rt1 = 0;
var rt2 = 0;
function isOlapping_NTIyOTE(e1, e2) {
    try {
        rt1 = e1.getBoundingClientRect();
        rt2 = e2.getBoundingClientRect();

    return !(
        rt1.right < rt2.left ||
        rt1.left > rt2.right ||
        rt1.bottom < rt2.top ||
        rt1.top > rt2.bottom
    );
    }catch(e){}
}

function chkOlap_NTIyOTE() {
    if (dp_NTIyOTE != '') {
        med_dv = document.querySelector(dp_NTIyOTE);
        dc_dv = document.querySelector("#dcamp_ad_" + mc_num_NTIyOTE);

		//한경닷컴_P_기사_팝업동영상_R_300x250 패스백시 가림이 제대로 되지 않아 예외처리- 2025.03.19
		//if (dc_dv == null && mc_num_NTIyOTE == '52291') {
		//	mc_num_NTIyOTE = '52292';
		//}

        isOlap = isOlapping_NTIyOTE(med_dv, dc_dv);

        if (isOlap) {
            dc_dv.style.visibility = 'hidden';
        }
        else {
            dc_dv.style.visibility = '';
        }

        reDisplay_NTIyOTE();
    }
}

window.onresize = chkOlap_NTIyOTE;
chkOlap_NTIyOTE();

var isloaded_NTIyOTE = "N";
function loadscript_NTIyOTE(){
	var dcamp_load_script_NTIyOTE = document.createElement('script');
	if(full_NTIyOTE == "Y")	dcamp_load_script_NTIyOTE.src = 'https://tracker.digitalcamp.co.kr/dcamp_load_V2.php?mc='+mc_NTIyOTE+'&t=script&bt=fl&w=100%&ps='+ps_NTIyOTE+'&url='+url_NTIyOTE;
	else dcamp_load_script_NTIyOTE.src = 'https://tracker.digitalcamp.co.kr/dcamp_load_V2.php?mc='+mc_NTIyOTE+'&t=script&bt=fl&w='+w_NTIyOTE+'&h='+h_NTIyOTE+'&ps='+ps_NTIyOTE+'&url='+url_NTIyOTE;
	body_NTIyOTE.appendChild(dcamp_load_script_NTIyOTE);
	isloaded_NTIyOTE = "Y";
}

if(vs_NTIyOTE >= 0){
	var globalEvents_NTIyOTE = {};
	var scrolltop_NTIyOTE = 0;
	var dcamp_ad_id_NTIyOTE = document.getElementById('dcamp_ad_' + mc_num_NTIyOTE);
	dcamp_ad_id_NTIyOTE.style.opacity = "0";
    dcamp_ad_id_NTIyOTE.style.zIndex = "2147483637";
	dcamp_ad_id_NTIyOTE.style.visibility = "hidden";
	//dcamp_ad_id_NTIyOTE.style.transform = "translate(0%, 100%)";
	dcamp_ad_id_NTIyOTE.style.transition = "all 1s";
	globalEvents_NTIyOTE.scrollToWindow = function () {
		scrolltop_NTIyOTE = document.documentElement.scrollTop;
		if(scrolltop_NTIyOTE <= vs_NTIyOTE ) {
			if(vsf_NTIyOTE != "1"){
				dcamp_ad_id_NTIyOTE.style.opacity = "0";
				dcamp_ad_id_NTIyOTE.style.visibility = "hidden";
			}
		} else {
			if(isloaded_NTIyOTE == "N" && !isOlap) loadscript_NTIyOTE();
			dcamp_ad_id_NTIyOTE.style.opacity = "1";
			dcamp_ad_id_NTIyOTE.style.visibility = "visible";
		}
		chkOlap_NTIyOTE();
	}
	window.addEventListener("scroll", globalEvents_NTIyOTE.scrollToWindow );
} else {
	if (!isOlap) loadscript_NTIyOTE();
}

function reDisplay_NTIyOTE() {
    if (!isOlap && isloaded_NTIyOTE == "N") loadscript_NTIyOTE();
}