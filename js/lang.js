/*!
 * Multi-Language v0.1.3
 * Copyleft 2014 - AOSC - Lion Yang
 * Licensed under GPL version 3
 */

////configuration of multi language script

var storge_in_cookie = true;

////end


var g_defaultText = new Array();
var g_defaultTitle;
var cookie_enabled = false;
var first_setting = true;
function defaultText_find(a){
    for (var x in g_defaultText){
        if (x[0] == a) {return true;}
    }
    return false;
}
function $t(a){
    document.title = a;
}
function $r(a,b){
    var item = $("#"+a);
    if (first_setting){
        var p = new Array (a, item.html());
        g_defaultText.push(p);
    }
    item.html(b);
}
function $e(){
    first_setting = false;
}
function set_lang(a){
    try{document.body.removeChild(document.getElementById("lang-js"));}catch(err){}
    if (g_location == undefined) return;
    var obj_langjs = document.createElement("script"); 
    obj_langjs.type = "text/javascript"; 
    obj_langjs.id = "lang-js";
    obj_langjs.src = g_location + "." + a.toLowerCase() + ".js"; 
    document.body.appendChild(obj_langjs); 
}
function reset_lang(){
    if (cookie_enabled) $.cookie("lang", "default", { path: '/' });
    for (var i=0; i < g_defaultText.length; ++i){
        $("#"+g_defaultText[i][0]).html(g_defaultText[i][1]);
    }
    $("title").text(g_defaultTitle);
}
function manual_set_lang(a){
    if (cookie_enabled) $.cookie("lang", a, { path: '/' });
    set_lang(a);
}
function auto_set_lang(){
    if (!cookie_enabled){
        set_lang(navigator.language || navigator.browserLanguage);
    }else if ($.cookie("lang") == "default"){
        reset_lang();
    }else if ($.cookie("lang") == undefined){
        set_lang(navigator.language || navigator.browserLanguage);
    }else {
        set_lang($.cookie("lang"));
    }
}
function check_cookie(){
    if (!storge_in_cookie) return;
    $.cookie("test", "value", { path: '/' });
    if ($.cookie("test") == "value"){
        cookie_enabled = true;
    }
    $.removeCookie("test", { path: '/' });
}
$(document).ready(function(){
    $("#reset_lang").click(function(){
        reset_lang();
    }); 
    $("#auto_set_lang").click(function(){
        if (cookie_enabled) $.removeCookie("lang", { path: '/' });
        auto_set_lang();
    });
    check_cookie();
    auto_set_lang();
    g_defaultTitle = $("title").text();
});
