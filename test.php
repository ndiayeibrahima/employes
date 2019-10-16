<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="/templates/yahoo/css/html.css" rel="stylesheet"></link>
        <link type="text/css" href="/templates/yahoo/css/Dropdown.ltr.css" rel="stylesheet"></link>
        <link href="/lib/fontawesome/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
        <script src="/lib/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function () {
        var totX = 0; 
        var totY = 0;
        var startx = 0; 
        var starty = 0;
        var mess = 0; 

            //test for javascript
            $.ajax({
                method: "GET",
                url: "/widgets/ms/js.php?sid=" +26576965            });
            document.addEventListener('touchstart', function (e) {
            var touchobj = e.changedTouches[0]; // first touch
            totX = totX + parseInt(touchobj.clientX);
            totY = totY + parseInt(touchobj.clientY);
        }, false);

        document.addEventListener('touchend', function (e) {
            var touchobj = e.changedTouches[0]; // last touch
            totX = totX + abs(parseInt(touchobj.clientX) - startx);
            totY = totY + abs(parseInt(touchobj.clientY) - starty);
        }, false);

        document.onmousemove = function (e) {
            totX = totX + e.pageX;
            totY = totY + e.pageY;
        };
        setInterval(checkCursor, 200);

        function checkCursor() {
            if ((totX !== 0) || (totY !== 0)) {
                if (mess !== 2) {
                    mess = 2;
                    $.ajax({
                        method: "GET",
                        url: "/widgets/ms/up.php?avgX=" + totX + "&avgY=" + totY + "&mess=" + mess + "&sid=" +26576965                    });
                }
            }
        }
    });
</script>        <script>
            $(document).ready(function () {
                if ($(".columns").text().length === 0) {
                    $('.columns').hide();
                }
            });
        </script>
    </head>
    <body id="mainbody">
        <div class="topmessage">
            <div class='domainmessage-text'>This domain may be available for registration or renewal.</div>        </div>
        <div class="largecontainer">
            <div id="container1">
                <div class="maincontent">
                        <div class='search-block'>
                    <div class='search-inputblock'>
                <h2 class='search-heading'>Comment pouvons-nous vous aider?</h2>
                <form method="post" action="/widgets/searches/rules.php" >
                                        <input type="text" name="q" value="Cherche ici"
                           onblur="if (this.value === '') {
                                               this.value = 'Cherche ici';
                                               this.style.color = '#BBB';
                                           }"
                           onfocus="if (this.value === 'Cherche ici') {
                                               this.value = '';
                                               this.style.color = '#000';
                                           }"
                           class='search-inputbox'/>
                    <input name="inputboxvar" type="hidden" value="q" />
                    <input name="ms" type="hidden" value="0" />
                    <input name="remote" type="hidden" value="0" />
                    &nbsp; <input name="sub" type="submit"  class='search-button' value='Persquisition'/>
                </form>
            </div>
                </div>
    <div class=invimage-block><a href='/widgets/invimage/rules.php?iid=23&wid=4&warid=6&tid=56'><img src='/widgets/invimage/t.gif' alt='small image'></a></div>                </div>
                <div class="columns">
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=324&acid=226&advid=27&icon=20' target='_BLANK' class='advertcode-icons' style='color:#EEEE44' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#EEEE44'"><i class='fas fa-camera fa-3x' ></i><br>Beauty            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=323&acid=227&advid=27&icon=16' target='_BLANK' class='advertcode-icons' style='color:#EECCEE' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#EECCEE'"><i class='fas fa-money-check-alt fa-3x' ></i><br>Finance            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=322&acid=228&advid=27&icon=11' target='_BLANK' class='advertcode-icons' style='color:#EE66EE' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#EE66EE'"><i class='fas fa-balance-scale fa-3x' ></i><br>Legal            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=321&acid=229&advid=27&icon=7' target='_BLANK' class='advertcode-icons' style='color:#CCEE66' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#CCEE66'"><i class='fas fa-shopping-basket fa-3x' ></i><br>Shopping            </a>
        </div>
    </div>
</div></div>
                <div class="columns">
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=325&acid=230&advid=27&icon=19' target='_BLANK' class='advertcode-icons' style='color:#44EECC' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#44EECC'"><i class='fas fa-graduation-cap fa-3x' ></i><br>Education            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=326&acid=231&advid=27&icon=15' target='_BLANK' class='advertcode-icons' style='color:#AAEECC' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#AAEECC'"><i class='fas fa-gamepad fa-3x' ></i><br>Games            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=327&acid=232&advid=27&icon=10' target='_BLANK' class='advertcode-icons' style='color:#44AACC' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#44AACC'"><i class='fas fa-money-bill-alt fa-3x' ></i><br>Loans            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=328&acid=233&advid=27&icon=5' target='_BLANK' class='advertcode-icons' style='color:#44EE88' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#44EE88'"><i class='fas fa-volleyball-ball fa-3x' ></i><br>Sports            </a>
        </div>
    </div>
</div></div>
                <div class="columns">
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=320&acid=225&advid=27&icon=1' target='_BLANK' class='advertcode-icons' style='color:#AAEE88' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#AAEE88'"><i class='fas fa-lightbulb fa-3x' ></i><br>Utilities            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=330&acid=234&advid=27&icon=14' target='_BLANK' class='advertcode-icons' style='color:#AA6688' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#AA6688'"><i class='fas fa-medkit fa-3x' ></i><br>Health            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=331&acid=235&advid=27&icon=9' target='_BLANK' class='advertcode-icons' style='color:#AACC88' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#AACC88'"><i class='fas fa-newspaper fa-3x' ></i><br>News            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=329&acid=236&advid=27&icon=4' target='_BLANK' class='advertcode-icons' style='color:#CC4488' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#CC4488'"><i class='fas fa-laptop fa-3x' ></i><br>Technology            </a>
        </div>
    </div>
</div></div>
                <div class="columns">
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=332&acid=237&advid=27&icon=18' target='_BLANK' class='advertcode-icons' style='color:#66CC66' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#66CC66'"><i class='fas fa-film fa-3x' ></i><br>Entertainment            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=333&acid=238&advid=27&icon=13' target='_BLANK' class='advertcode-icons' style='color:#4444EE' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#4444EE'"><i class='fas fa-home fa-3x' ></i><br>Home            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=334&acid=239&advid=27&icon=6' target='_BLANK' class='advertcode-icons' style='color:#444466' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#444466'"><i class='fas fa-users fa-3x' ></i><br>Social and Dating            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=335&acid=240&advid=27&icon=3' target='_BLANK' class='advertcode-icons' style='color:#CC4444' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#CC4444'"><i class='fas fa-bus fa-3x' ></i><br>Transport            </a>
        </div>
    </div>
</div></div>
                <div class="columns">
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=336&acid=241&advid=27&icon=17' target='_BLANK' class='advertcode-icons' style='color:#AACCAA' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#AACCAA'"><i class='fas fa-ticket-alt fa-3x' ></i><br>Event Tickets            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=337&acid=242&advid=27&icon=12' target='_BLANK' class='advertcode-icons' style='color:#44CC66' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#44CC66'"><i class='fas fa-bell fa-3x' ></i><br>Insurance            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=338&acid=243&advid=27&icon=8' target='_BLANK' class='advertcode-icons' style='color:#EEAA44' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#EEAA44'"><i class='fab fa-fort-awesome fa-3x' ></i><br>Real Estate            </a>
        </div>
    </div>
</div>
<div>
    <div style="margin:0px 0px 20px 0px;text-align:center;">
        <div style="text-align:center;">
            <a href='/widgets/adverts/r2.php?aiid=339&acid=244&advid=27&icon=2' target='_BLANK' class='advertcode-icons' style='color:#EE66CC' onMouseOver="this.style.color='#88e'" onMouseOut="this.style.color='#EE66CC'"><i class='fas fa-plane fa-3x' ></i><br>Travel            </a>
        </div>
    </div>
</div></div>
            </div>
                    </div>
        <div id="footer">
            <div class=invimage-block><a href='/widgets/invimage/rules.php?iid=24&wid=4&warid=6&tid=56'><img src='/widgets/invimage/t.gif' alt='small image'></a></div><div class='article-block'><a href='/Privacy-Policy'  class='article-titlelink'><h1 class='article-title'>Privacy Policy</h1></a></div>        </div>
    </body>
</html>


