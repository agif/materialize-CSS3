<!-- Circle Phone -->
<a href="tel:081362621616" class="tbd-phong-a">
    <div class="tbd-alo-phone">
      <div class="tbd-alo-ph-circle"></div>
      <div class="tbd-alo-ph-circle-fill"></div>
      <div class="tbd-alo-ph-img-circle delaiso"></div>
    </div>
</a>

<!-- End Circle Phone -->

<!-- In Left Chat -->
<!-- <div id="ks_ol_floatWin" class="ks_ol_comm_div" style="width: auto; z-index: 2147483645; left: 0px; bottom: 200px; position: fixed !important; display: block; visibility: visible;">
    <div id="ks_ol_floatWin_fl">
        <img id="ks_ol_floatWin_img" title="Jika Anda memiliki pertanyaan, silakan klik di sini untuk menanyakan！" src="assets/js/img/5283DC1.png" style="cursor: pointer; margin: 0px; width: 27px; height: auto; border-bottom: 1px solid #8d9794;" addload="true" loaded="true">
    </div>
</div> -->

<!-- footer images -->
<div id='swt0304' class='swt0304-wrap'>
	<div class='swt0304-wrap2'>
		<div class='swt0304-2'>
			<img src='assets/js/img/bottom1.png' alt=''>
			<a class='swt0304-2-a4' href='javascript:void(0)' onclick='myChat()' target='_blank'></a>
			<a class='swt0304-2-a1' href='javascript:void(0)' onclick='myChat()'></a>
			<a class='swt0304-2-a2' href='javascript:void(0)' onclick='myChat()' target='_blank'></a>
			<a class='swt0304-2-a3' href='tel:081362621616'></a>
		</div>
    <div id='BounceToTop'>
      <img alt='Back to top' src='assets/images/back-to-top.png'/>
    </div>
	</div>
</div>


<!-- For Wechat -->
<!-- <div id="contact">
	<div class="sz">8</div>
	<a class="tel" href="tel:081362621616"></a>
	<a class="zx" href="javascript:void(0)" onclick="myChat();"></a>
	<a class="toped" href="javascript:scroll(0,0)"></a>
</div> -->


<!-- For Top Black Chat Header -->
<!-- <div class="top_weixin">
 <a href="javascript:void(0)" onclick="myChat();">
    <div class="weixin_bg"></div>
    <div class="weixin_dh">
        <i></i>
        <div> -->
           <!-- <p> -->
             <!-- <img src="assets/img/whatsapp-50.png"><strong style='font-weight: bold; float:right;'> Konsultasi Sekarang  masalah anda sekarang</strong>
             <span></span>
             <br>
             <h3> Dokter : Ada yang bisa saya bantu?</h3> -->

             <!-- <table style="height: 20px;">
               <tr>
                <td rowspan="2" style=""><img src="assets/img/whatsapp-50.png"></td>
                <td><strong class="red-text blue-strong-bg">Kotak 1</strong></td>
                </tr>
                <tr>
                <td><h6 class="red-text blue-strong-bg">Kotak 2</h6></td>
              </tr>
             </table> -->

             <!-- <div class="row">
              <div class="col s1" style="height: 50px;line-height: 70px;">
                <img src="assets/img/whatsapp-50.png">
              </div>
              <div class="col s11" style="line-height: 25px;">
                <p style="font-size: 90%;" class="white-text" ><b>Konsultasi Sekarang  masalah anda sekarang</b></p>
                <p style="font-size: 90%;" class="white-text">Dokter : Ada yang bisa saya bantu?</p>
              </div>
             </div> -->
           <!-- </p><br/> -->
        <!-- </div>
    </div>
  </a>
</div> -->

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script type="text/javascript" src="assets/materialize/js/materialize.min.js" charset="utf-8"></script>
<script language="javascript" type="text/javascript" src="assets/js/swt.js"></script>
<script src="assets/js/show.js" type="text/javascript"></script>
<script language="javascript" src="http://mqa.zoosnet.net/JS/LsJS.aspx?siteid=MQA87261512&float=1&lng=en"></script>
<!-- <script language="javascript" src="http://mqa.zoosnet.net/JS/LsJS.aspx?siteid=MQA87261512&float=1&lng=en"></script> -->
<!-- <script type="text/javascript" src="assets/js/kst_m.js" charset="utf-8"></script> -->
<!-- <script type="text/javascript" src="assets/js/ks.js?cI=605571&fI=63440&ism=1" charset="utf-8"></script> -->
<!-- <script type="text/javascript" src="assets/js/onKST.js" charset="utf-8"></script> -->
<!-- <script type="text/javascript" src="assets/js/nav.js" charset="utf-8"></script> -->
<script type="text/javascript">
jQuery(function(a) {
    a(function() {
        var b;
        a("#rcslider").hover(function() {
            clearInterval(b)
        },
        function() {
            b = setInterval(function() {
                var b = a("#rcslider"),
                c = b.find("li:last").height();
                b.animate({
                    marginTop: c + 3 + "px"
                },
                1e3,
                function() {
                    b.find("li:last").prependTo(b),
                    b.find("li:first").hide(),
                    b.css({
                        marginTop: 0
                    }),
                    b.find("li:first").fadeIn(1e3)
                })
            },
            3e3)
        }).trigger("mouseleave")
    }),
    a(document).ready(function() {
        a("#rcslider li").hover(function() {
            a(this).stop().fadeTo(300, 1)
        },
        function() {
            a(this).stop().fadeTo(300, .6)
        })
    })
});
</script>


<!-- for list dropdown -->
<!-- <script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('li').attr("class", "browser-default");
  });
</script> -->

<script language=javascript>
var LiveAutoInvite0='halo, Selamat datang di Klinik Sentosa';
var LiveAutoInvite1='À´×ÔÊ×Ò³µÄ¶Ô»°';
var LiveAutoInvite2='<P>ahli perawatan andrologi, ginekologi, PMS<BR>100% melindungi privasi pasien<BR>24 jam konsultasi online<BR>reservasi online<BR>hubungi kami0813-6262-1616</P>';
var LrinviteTimeout=10;
</script>

<!-- Chat -->
<script type="text/javascript">
    function myChat() {
    window.open("https://mqa.zoosnet.net/LR/Chatpre.aspx?id=MQA87261512&lng=en" ,"_blank");
}
</script>

<!-- Togle Top -->
<script type="text/javascript">
    setInterval(function() { $(".top_weixin").slideToggle(300)},5000);
</script>

<!-- .slideToggle(300) -->
<!-- , 5000 -->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mEtG4rrtm6Vos4fOht%2fjY%2bTrbzz66VlCBLhU15lpVydl%2flCQaoLxyFZafOj1It4d9GdVGwanJ6RM1yeX%2bc6yJL8CiIKp5mapRfhp30OQvmjOH9i2XNpYZAHOjGbv1QrxJogagDUHSim%2bhnv8H6Q81Lv47fm1vGir7LWYhyaEGbM39rls6Z0ozUqbQp3fS1UHB2zTFbyI8xOGup7OK%2f7fwC%2fnmZNPfP1VFHwMLHyFd7xMnR1yRIr9rQvvlbt2ssoDYafJvGrAwTO280e%2b8VT0Owrk53wTbuJ%2bzQ9H%2fZNwyTbAmrREy3jH%2f9MLjaGKVBX7X%2bQUD3K2oVE9oUrQpdqKAAMruXBgaAN4sW8Up5hY9U1W53S3OdN6B8fHhY0%2fS58x%2bRO%2fDmp5c0IRXFKUCDUqabjqneIMJXqiW62rWFEth3JYiGobH716B%2fmqa6b5TUHuNOvxXnZrzJjUEwgQJLf59i62I20iBRfSxjIJX1P2aTiY4HKlUJNv%2bMpmakN%2fhfiZyrHfW%2fESvBYjjZlWzStoUkw6ye3B08Dqc" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script>

<!-- Location -->
<script type="text/javascript">
  function myLoc(){
    window.open('https://goo.gl/maps/1QaQYMjYs8G2','_blank');
  }
</script>

<!-- For Back To Top -->
<script type='text/javascript'>
  $(function() { $(window).scroll(function()
  { if($(this).scrollTop()>100)
  { $('#BounceToTop').slideDown(200); }
  else { $('#BounceToTop').slideUp(300); } });
  $('#BounceToTop').click(function() { $('body,html').animate({scrollTop:0},800) .animate({scrollTop:25},200) .animate({scrollTop:0},150) .animate({scrollTop:10},100) .animate({scrollTop:0},50); }); });
</script>
