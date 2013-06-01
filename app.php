<?php

//********************************************************************
// do not edit this section

if(!defined("APPSDIR"))
    die("Direct access is not allowed!");

$app_dir = realpath(dirname(__FILE__));
// remove the full path of the document root
$app_dir = str_replace(ROOTDIR, "", $app_dir);

$page->setActivePage(basename($app_dir));

//********************************************************************

$page->addScript("$app_dir/scripts/jquery.animate-colors.js");

$page->addInlineStyle('.intro-example:after { content: "Space API Example" }');
$page->addInlineStyle('.intro-hide-message { position: absolute; left: -1000px; top: -1000px}');
$page->addInlineStyle('.intro-example code { font-size: smaller; font-family: mono; line-height: 0px; }');

$page->addInlineStyle('.intro-note:after { content: "Note" }');
$page->addInlineStyle('.intro-note { background: #ffe; }');

$html = <<<HTML
    
    <section> 
        <h2>What is the Space API?</h2>
            
        <p>
            The purpose of the <strong>Space API</strong> is to define a unified specification across the hackerspaces that can be used to expose information to web apps or any other application.
        </p>
        
        <p>
            The specification is based on the JSON data interchange format. The following example shows how it looks like.
        </p>
        
        <!-- http://thejh.net/misc/website-terminal-copy-paste -->
        <pre class="spaceapi-box intro-example"><code>{<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    "api": "0.13",<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    "space": "Shackspace",<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    "logo": "http://rescue.shackspace.de/images/logo_shack_brightbg_highres.png",<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    "url": "http://shackspace.de",<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    "location": {<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "address": "Ulmer Strasse 255, 70327 Stuttgart, Germany",<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "lon": 9.236,<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "lat": 48.777<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    },<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    "contact": {<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "email": "info@shackspace.de",<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "irc": "irc://irc.freenode.net/shackspace",<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "ml": "public@lists.shackspace.de",<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "twitter": "@shackspace"<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    },<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    "state": {<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "icon": {<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
            "open": "http://shackspace.de/sopen.gif",
            "closed": "http://shackspace.de/sopen.gif"
        },<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "open": true
    },<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
    "projects": [<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
        "http://github.com/shackspace",
        "http://shackspace.de/wiki/doku.php?id=projekte"
    ]<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>
<span class="intro-hide-message">!!!THIS EXAMPLE IS NOT COMPLETE, PLEASE READ THE DOCUMENTATION!!!</span>}
</code></pre>
        <p>
            Some properties are mandatory, whereas others are optional. A hackerspace implementing this API should at least provide the mandatory fields.
        </p>
        <p class="spaceapi-box intro-note">
            Daily all the endpoints are revalidated and after a certain grace time permanent invalid implementations are likely to be removed from the directory to guarantee Space API-based applications a certain quality.
        </p>
        <p>
            Developers that want to write a Space API-based app should take a look at the <a href="directory">directory page</a>.
        </p>
    </section>
    
    <section>    
        <h2>What developers do with the API</h2>
    
        <!--
        There are maps available
        <img style="width: 600px;" src="$app_dir/img/apps.png">
        -->
        
        <div class="row">
            <div class="span9">
                <div id="inro-apps-carousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#inro-apps-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#inro-apps-carousel" data-slide-to="1"></li>
                        <li data-target="#inro-apps-carousel" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner" style="height: 400px;">
                        <div style="text-align: center" class="active item"><img style="width:100%" src="$app_dir/img/hackerspace-globe.png" title="globe"></div>
                        <div style="text-align: center" class="item"><img style="width: 100%;" src="$app_dir/img/hackerspace-wall.png" title="wall"></div>
                        <div style="text-align: center" class="item"><img style="height: 100%;" src="$app_dir/img/my-hackerspace.png" title="android"></div>
                    </div>
                    
                    <a class="carousel-control left" href="#inro-apps-carousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#inro-apps-carousel" data-slide="next">&rsaquo;</a>
                </div>
            </div>
            <div class="span3" height: 400px; color: #eee;">
                <script>
                    $(document).ready(function(){
                        $("#intro-apps-description").animate({backgroundColor: '#400101'});
                        $(".carousel")
                            .carousel({interval: 3000})
                            .on('slide',function(e){
                                //console.log($(".next", $(this)));
                                //var text = $(".item.active  + .item", $(this)).attr("title");
                                //$("#intro-apps-description").text(text);
                                console.log("change color");
                                $("#intro-apps-description").animate({backgroundColor: '#400101'});
                            });
                    });
                </script>
                <span id="intro-apps-description"></span>
            </div>
        </div>
        
    </section>
HTML;

$page->addContent($html);