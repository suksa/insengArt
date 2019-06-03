$(function(){
  /*gnb*/
  var menuover=false; //메뉴가 활성화 되고있는지 파악
  var clearenter;
  var gnb_link_depth1=$("ul#lnb>li");	// 1depth
  var d_time = 100; // 마우스 아웃시 돌아가는 시간

  gnb_link_depth1.each(function(){
      $(this).bind('mouseenter keyup focus' , function(){
          clearTimeout(clearenter);
          $(this).addClass("on").siblings().removeClass("on");
          menuover=true;
      });
      $(this).bind('mouseleave blur focusout' , function(){
          menuover=false;
          clearenter = setTimeout(menuclear,d_time);
      });
  });
  function menuclear(){
      if(!menuover){
          gnb_link_depth1.removeClass("on"); //지워야할 클래스위치
      }
  }
  $('.gnb_close').on('click',function(){
      gnb_link_depth1.removeClass("on");
  })
})