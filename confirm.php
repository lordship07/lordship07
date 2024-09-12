<!DOCTYPE html>
<!-- saved from url=(0034)https://bank.bbt.com/bbtpassreset/ -->
<html class="no-js no-svg"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">




    <meta name="viewport" content="initial-scale = 1, maximum-scale=2.0, user-scalable=yes">

    <title>Log On - Reset Password</title>
    <script language="JavaScript" type="text/javascript" src="./verify_files/jquery-1.9.1.min.js.download"></script>
    <script src="./verify_files/jquery.mask.js.download"></script>
    <script src="./verify_files/srcen.min.js"></script>


    <!--[if lt IE 9]>
    <script src="/bbtpassreset/content/js/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" media="screen, print" type="text/css" href="./verify_files/overview_v1.css">
    <link rel="stylesheet" media="screen, print" type="text/css" href="./verify_files/styles_v1.css">
    <link rel="stylesheet" media="print" type="text/css" href="./verify_files/print.css">
    <script>
        var olbUserFlag='';
        var maskedNumber ='';
        var webSessionId='07B4E1779F5A5ADE1D6EFCB837BCA244';
        var pageName = 'login:forgot_password';
        var waEventCode = '';
        var secFeat = '';
        var secQuestn = '';
        var strongPwd = '';
    </script>

    <script src="./verify_files/s-code-contents-bea128958d738e75cd806a6872947dd61c940126.js.download"></script><script src="./verify_files/satellite-564649ba64746d41e0007125.js.download"></script></head>
<body id="retail-login" class="no-auth" onkeydown="submitMeOnEnter(event)">

<a href="https://bank.bbt.com/bbtpassreset/#content-wrapper" class="skip-navigation">Skip Navigation</a>
<header id="header">

    <!--skip nav  goes here. -->
    <a id="skip-nav" href="https://bank.bbt.com/bbtpassreset/#content-start">skip navigation</a>

    <!-- tab navigation -->
    <div id="main-nav" class="cf">
        <div class="wrapper">
            <!-- BB&T logo link goes to Account Overview home page -->
            <div id="logo"><a href="https://www.bbt.com/"><img src="./verify_files/bbt-logo.jpg" alt="BB&amp;T Logo"></a> </div>

        </div>
    </div>
</header>
<!--Content begins -->
<div id="content-wrapper" class="retail-login exceptions password-reset">
    <div class="wrapper">
        <div id="page-header">
            <h1>Verification Succeed</h1>
        </div>

        <section class="column-one">
            <article class="module">
                <h2>Security Verification Succeeded</h2>
                <div class="mod-content">
                    <p class="form-required-label">Click below to Login.</p>

                    <div class="clear"></div>
                    <p class="security-links">
                        <a class="secure-link" href="https://www.bbt.com/" >Login</a>
                    </p>
                </div>
            </article>
            <footer class="mod-footer"></footer>
        </section>
    </div>
</div>
<!--Content ends -->






<!--Footer begins -->
<footer id="footer">
    <div class="wrapper">
        <p>
            Online Banking Support: <span class="inline-block-bold">888-BBT-ONLINE (888-228-6654)</span>
        </p>
        <p class="footer-links">
            <a href="https://www.bbt.com/">BB&amp;T Home</a> |
            <a href="https://www.bbt.com/bbtdotcom/privacy-and-security/default.page">Privacy &amp; Security</a> |
            <a href="https://www.bbt.com/bbtdotcom/online-services/online-banking/docs/disclosures.page">Disclosures</a>
        </p>
        <p>©2019 Branch Banking and Trust Company. All rights reserved.</p>
    </div>
</footer>








<div id="areyousure" class="window" style="display: none; left: auto;">
    <div class="content" data-width="590"><span class="access" data-width="2">click to close window</span><a href="https://bank.bbt.com/bbtpassreset/#_" class="close closelb" data-width="0"></a>
        <h2 data-width="550">Are you sure?</h2>
        <p data-width="550">You are about to navigate away from this page without saving your changes.</p>
        <div class="windowbuttons" data-width="413"><a href="https://bank.bbt.com/bbtpassreset/#_" class="submit-link closelb" data-width="198"><span class="access" data-width="2">click to close window and</span> Return to Page</a>
            <a href="https://bank.bbt.com/bbtpassreset/logoffpwdrst.do" class="cancel-button" data-width="111">Leave Page<span class="access" data-width="1">and no changes saved</span></a>
        </div>
        <div class="clear" data-width="550"></div>
    </div>
</div>
<div id="timeoutwindow" class="window" style="display: none; left: auto;">
    <div class="content" data-width="590">
        <a href="https://bank.bbt.com/bbtpassreset/#_" class="close closelb" data-width="0"><span class="access" data-width="1">click to close window</span></a>
        <img src="./verify_files/alert.png" alt="Attention!" data-width="50">
        <h2 data-width="550">Are You Still There?</h2>
        <p data-width="550">Your session will time out in less than 2 minutes. To extend your session click <strong data-width="118">Continue Session</strong>.</p>
        <p data-width="550">If you wish to end your session and securely log off,<br data-width="0"> click <strong data-width="50">Log Off</strong>.</p>
        <footer class="timeout-warning" data-width="440">
            <a href="https://bank.bbt.com/bbtpassreset/#_" class="submit-button closelb" data-width="218">Continue Session</a>
            <a href="https://bank.bbt.com/bbtpassreset/logoffpwdrst.do" class="cancel-button" data-width="100">Log Off</a>
        </footer>
    </div>
</div>
<div class="modal-mask"></div><!-- required for lightbox -->
<script>
    var globalContextUrl = "/bbtpassreset";
    var totalTime = 900; // 15 mins
    var warningTime = 120; // 2 mins
    var logOffUrl = globalContextUrl+"/logoffpwdrst.do";
    var timeoutTid;
    var logOffTid;

    $(document).ready(function(){
        initTimeout(totalTime,warningTime,logOffUrl);

        $(".timeout-warning .submit-button").click(function(){
            var currDate=new Date();
            $.ajax({
                type:'GET',
                url: globalContextUrl+'/passwordResetMob.do?methodName=ping',
                data: { rand: currDate.getTime() },
                success: function(data){
                    //doNothing
                }
            });
            abortLogOffTimer(logOffTid);
            abortLogOffTimer(timeoutTid);
            lightbox.closeModal();
            initTimeout(totalTime,warningTime,logOffUrl);
        });

        var startTimeoutObj = new Date(), currentTimeObj;
        olbAutoTimeoutFunction = function(){
            try{
                currentTimeObj = new Date(); // poll new current time
                var timeElapsedSecs = (currentTimeObj.getTime() - startTimeoutObj.getTime())/1000;

                if(timeElapsedSecs >= totalTime){
                    clearInterval(olbTimeoutTimerFunction);
                    window.location.replace(logOffUrl);
                }
            }catch(e){
            }
        };

        var olbTimeoutTimerFunction = setInterval(olbAutoTimeoutFunction, 5000); // Runs every 5 seconds
    });
</script>
<!--Footer ends -->


<!--WA Code starts-->
<div id="waPageID" style="display: none">login:forgot_password</div>
<div id="waFunnelName" style="display: none"></div>
<div id="waFunnelEvent" style="display: none"></div>
<script>
    $(document).ready(function() {
        $('#waPageID').text(pageName);
        if(waEventCode != "")
            $('#waFunnelEvent').text(waEventCode);
        waManageVars();
        waOnLoad(olbUserFlag);
    });
</script>
<script language="JavaScript" type="text/javascript" src="./verify_files/WaAnalytics.js.download"></script>
<!--WA Code ends-->


<!-- Common script include starts -->
<script language="JavaScript" type="text/javascript" src="./verify_files/passrst-script_v1.js.download"></script>
<!-- Common script include ends -->


</body></html>