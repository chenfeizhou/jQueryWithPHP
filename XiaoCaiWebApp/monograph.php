<?php require( 'header.php'); ?>
  <header>
    <nav>
      <div class="header-skills-evaluating">
          <ul>
            <li><span class="glyphicon glyphicon-menu-left" id="skills-evaluating-back"></span></li>
            <li class="header-skillsEvaluating-li skill1"><span class="glyphicon glyphicon-eye-open"></span>268</li>
            <li class="header-skillsEvaluating-li skill2"><span class="glyphicon glyphicon-inbox"></span></li>
            <li class="header-skillsEvaluating-li skill3"><span class="glyphicon glyphicon-link" id="mono-share"></span></li>
          </ul>
      </div>
    </nav>
  </header>

  <section>
     
     <div class="monograph-img1">
       <img src="">
     </div>

      <div class="skills-evaluating-title">
          <h3>春意盎然时分桂馥兰香，红了草莓绿了香椿，盘点春桌美味</h3>
          <p>2015-03-28</p>
        </div>

        <div class="content-summary">
         <div class="content-summaryIn">
           内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要内容摘要
         </div>
       </div>

        <div class="skeva-content">
              内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
          </div>

         <div class="teacher-brand" id="monograph-member">
        会员专享
      </div>
        <div class="skeva-img">
              <img src="">
          </div>
             <div class="teacher-brand" id="monograph-brand">
        ALVIN LEE
      </div>

      <div class="vip-content">
      <div class="vip-title monograph-title">会员专享标题</div>
      <div class="vip-post monograph-title">内容标题内容标题内容标题内容标题内容标题内容标题内容标题内容标题</div>
      <div class="vip-menu">
        <ul>
          <li><span class="glyphicon glyphicon-eye-open"></span> 268</li>
          <li><span class="glyphicon glyphicon-heart-empty"></span></li>
          <li><span class="glyphicon glyphicon-link"></span></li>
        </ul>
      </div>
    </div>
          <div class="skeva-xiaocai">
                   <div class="skeva-xiaocai-content">
                     晓菜
                   </div>
            
          </div>

  </section>
<section>
  <div class="monoshare">
          <div class="monoshareDiv">
            <ul id="line">
              <li id="shareTofriend"><img src=""></li>
              <li id="shareTocircle"><img src=""></li>
            </ul>
             <ul id="monoshare-content">
               <li>发送给朋友</li>
               <li>分享至朋友圈</li>
             </ul>
          </div>
  </div>
  </section>
  <script type="text/javascript">
  $(document).ready(function(){
 
       $('#skills-evaluating-back').click(function(){
                backPreviosPage('monograph.php');
    });
       $('#mono-share').click(function(){
                $('.monoshare').css('display','block');
                $('body').css('overflow','hidden');
       });
       $('#shareTofriend').click(function(){
                 $('.monoshare').css('display','none');
                 $('body').css('overflow','visible');
       });
        $('#shareTocircle').click(function(){
                 $('.monoshare').css('display','none');
                 $('body').css('overflow','visible');
       });
  });
  </script>