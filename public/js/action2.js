$(document).ready(init);

var h1, h2, h3, h4, h5, h6, info, head, msg, data, currPage;

function init(){
	//Elems
	h1 = 	$('.h1');
	h2 = 	$('.h2');
	h3 = 	$('.h3');
	h4 = 	$('.h4');
	h5 = 	$('.h5');
	h6 = 	$('.h6');
	info =  $('#info');
	head =  $('#info').find('h1');
	msg =  	$('#info').find('p');
	prtl = 	$('#clntPrtl');
	
	setData();
	
	//OVERS
	h1.bind('mouseenter', function(){h1.animate({'opacity':'1'}, 250); clicker(h1)});
	h2.bind('mouseenter', function(){h2.animate({'opacity':'1'}, 250); clicker(h2)});
	h3.bind('mouseenter', function(){h3.animate({'opacity':'1'}, 250); clicker(h3)});
	h4.bind('mouseenter', function(){h4.animate({'opacity':'1'}, 250); clicker(h4)});
	h5.bind('mouseenter', function(){h5.animate({'opacity':'1'}, 250); clicker(h5)});
	h6.bind('mouseenter', function(){h6.animate({'opacity':'1'}, 250); clicker(h6)});
	
	//Portal
	function update_height(){
		var portal_count = $('#clntPrtl ul li').length;
		var portal_height = $('#clntPrtl').height();
		if (portal_count >= 10) {
			var xxx = portal_count-10;
		} else {
			var xxx = portal_count;
		} 
		var xx = xxx*22;
		$('#clntPrtl').css('height', portal_height+xx);
	}

	function reset_height(){
		$('#clntPrtl').css('height', 280);
	}

	prtl.bind('mouseenter', function(e){
	    e.stopPropagation();
	    var height = 0;
	    var elemHeight = $(this).find('ul li').each(function(){
	        height = height + $(this).height();
	    });
	    var top = $(this).position().top;
	    top = top + height + 10;
	    if (top > 0) top = 0;
	    prtl.animate({'top': top + 'px'}, 200);
	    update_height();
	    return false;
	});
	prtl.bind('mouseleave', function(e){
	    e.stopPropagation();
	    prtl.animate({'top':'-200px'}, 200);
	    reset_height();
	    return false;
	});

	//OUTS
	h1.bind('mouseleave', function(){h1.animate({'opacity':'0'}, 100); clicker()});
	h2.bind('mouseleave', function(){h2.animate({'opacity':'0'}, 100); clicker()});
	h3.bind('mouseleave', function(){h3.animate({'opacity':'0'}, 100); clicker()});
	h4.bind('mouseleave', function(){h4.animate({'opacity':'0'}, 100); clicker()});
	h5.bind('mouseleave', function(){h5.animate({'opacity':'0'}, 100); clicker()});
	h6.bind('mouseleave', function(){h6.animate({'opacity':'0'}, 100); clicker()});
}

function setData(){
	data = Array(
		{title:'Association Meetings', msg:"Schedule of Annual Association Meetings<br/>Schedule of Board Meetings<br/>Schedule of Budget Meetings"},
		{title:'Budgeting', msg:"Current Annual Budget<br/>Next Year's Proposed Budget<br/>"},
		{title:'Architectural Review', msg:"ARB Request Form<br/>Pending Requests<br/>Approved Requests"},
		{title:'Accounting', msg:"Monthly Financial Statements<br/>Income Tax Returns"},
		{title:'Board Communications', msg:"Schedule of Association, Board and Budget Meetings<br/>Monthly Financial Statements<br/>Action Item Update"},
		{title:'Owner Communications', msg:"Regime Fees<br/>Special Assessments Due<br/>Change of Address Form"}
	);
}

function clicker(el){
	switch(el){
		case h1:
			expander(0);
		break;
		case h2:
			expander(1);
		break;
		case h3:
			expander(2);
		break;
		case h4:
			expander(3);
		break;
		case h5:
			expander(4);
		break;
		case h6:
			expander(5);
		break;
		default:
			collapse();
		break;
	}
}

function collapse(){
		info.animate({'height':'50px', 'margin-top':'-25px'},250);
		head.html('Services<span class="d">(Mouse over on any of the services to view more details)</span>');
}

function expander(index){
//	if(index == currPage) return;
	
	if(info.height() == 200){
		info.queue("fx", []).animate({'height':'50px', 'margin-top':'-25px'},250);
		head.html(data[index].title);
		setTimeout(function(){
			msg.html(data[index].msg);
		},150);
		info.queue("fx", []).animate({'height':'200px', 'margin-top':'-100px'},250);
	}else{
		head.html(data[index].title);
		setTimeout(function(){
			msg.html(data[index].msg);
		},150);
		info.queue("fx", []).animate({'height':'200px', 'margin-top':'-100px'},250);
	}

	currPage = index;
	
}