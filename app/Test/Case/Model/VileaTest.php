<?php
App::uses('Vilea', 'Model');

/**
 * @author: Saman Sedighi Rad
 * @email: saman.sr@gmail.com
 * @date: 12.12.12
 * @time: 22:08
 *
 * @property Vilea $Vilea
 */
class VileaTest extends CakeTestCase {

    /**
     * @test
     */
    public function extractHTML() {
        $data = $this->Vilea->fetch('IiqjFHOrH6');
        var_dump($data);
    }

    /**
     * Raw test HTML content from vilea.
     */
    private function getDemoHTML() {
    // Data from http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/playlists/IiqjFHOrH6.js
$html = <<< EOD

//var _0x209b=["\x65\x6D\x62\x65\x64\x2E\x63\x73\x73","\x63\x75\x73\x74\x6F\x6D\x5F\x63\x73\x73\x2E\x63\x73\x73","\x77\x72\x69\x74\x65","","\x74\x79\x70\x65\x6F\x66\x28","\x29","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x24","\x6A\x51\x75\x65\x72\x79","\x41\x6A\x61\x78","\x73\x77\x66\x6F\x62\x6A\x65\x63\x74","\x69\x6E\x63\x6C\x75\x64\x65\x64\x46\x69\x6C\x65\x73","\x69\x6E\x63\x6C\x75\x64\x65\x64\x46\x69\x6C\x65\x73\x5B\x22","\x22\x5D","\x68\x65\x61\x64","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x54\x61\x67\x4E\x61\x6D\x65","\x6C\x69\x6E\x6B","\x63\x72\x65\x61\x74\x65\x45\x6C\x65\x6D\x65\x6E\x74","\x74\x79\x70\x65","\x74\x65\x78\x74\x2F\x63\x73\x73","\x73\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x72\x65\x6C","\x73\x74\x79\x6C\x65\x73\x68\x65\x65\x74","\x68\x72\x65\x66","\x6D\x65\x64\x69\x61","\x73\x63\x72\x65\x65\x6E","\x61\x70\x70\x65\x6E\x64\x43\x68\x69\x6C\x64","\x73\x65\x74\x54\x69\x6D\x65\x6F\x75\x74"];function loadRequiredFiles(){if(!cssObjectLoaded()){inject_css('stylesheets/embed.css',false,_0x209b[0]);} ;if(!customCSSLoaded()){inject_css('http://electure-ms.studiumdigitale.uni-frankfurt.de/playlists/IiqjFHOrH6/custom_css?changed=1355324586',true,_0x209b[1]);} ;if(!jqueryLoaded()){document[_0x209b[2]]('<script src=\"/javascripts/jquery-min.js?1353057439\" type=\"text/javascript\"></script>');} ;} ;function varDefined(_0x9f52x3){varName=_0x209b[3]+_0x9f52x3;return (eval(_0x209b[4]+varName+_0x209b[5])!=_0x209b[6]);} ;function prototypeLoaded(){return varDefined(_0x209b[7]);} ;function jqueryLoaded(){return varDefined(_0x209b[8]);} ;function ajaxLoaded(){return varDefined(_0x209b[9]);} ;function swfobjectLoaded(){return varDefined(_0x209b[10]);} ;function cssObjectLoaded(){return isIncluded(_0x209b[0]);} ;function customCSSLoaded(){return isIncluded(_0x209b[1]);} ;function requiredFilesLoaded(){return (cssObjectLoaded()&&customCSSLoaded()&&jqueryLoaded());} ;function isIncluded(_0x9f52xc){if(!varDefined(_0x209b[11])){includedFiles= new Array();} ;return varDefined(_0x209b[12]+_0x9f52xc+_0x209b[13]);} ;function inject_css(_0x9f52xe,_0x9f52xf,_0x9f52x10){if(!isIncluded(_0x9f52x10)){var _0x9f52x11=document[_0x209b[15]](_0x209b[14])[0];var _0x9f52x12=document[_0x209b[17]](_0x209b[16]);_0x9f52x12[_0x209b[20]](_0x209b[18],_0x209b[19]);_0x9f52x12[_0x209b[20]](_0x209b[21],_0x209b[22]);if(_0x9f52xf){_0x9f52x12[_0x209b[20]](_0x209b[23],_0x9f52xe);} else {_0x9f52x12[_0x209b[20]](_0x209b[23],'http://electure-ms.studiumdigitale.uni-frankfurt.de/'+_0x9f52xe);} ;_0x9f52x12[_0x209b[20]](_0x209b[24],_0x209b[25]);_0x9f52x11[_0x209b[26]](_0x9f52x12);includedFiles[_0x9f52x10]=_0x9f52x10;} ;} ;function waitUntilLoaded(_0x9f52x14){if(!requiredFilesLoaded()){window[_0x209b[27]](function (){waitUntilLoaded(_0x9f52x14);} ,100);return ;} else {} ;eval(_0x9f52x14);} ;
var _0x7caa=["\x65\x6D\x62\x65\x64\x2E\x63\x73\x73","\x63\x75\x73\x74\x6F\x6D\x5F\x63\x73\x73\x2E\x63\x73\x73","\x77\x72\x69\x74\x65","","\x74\x79\x70\x65\x6F\x66\x28","\x29","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x24","\x6A\x51\x75\x65\x72\x79","\x41\x6A\x61\x78","\x73\x77\x66\x6F\x62\x6A\x65\x63\x74","\x69\x6E\x63\x6C\x75\x64\x65\x64\x46\x69\x6C\x65\x73","\x69\x6E\x63\x6C\x75\x64\x65\x64\x46\x69\x6C\x65\x73\x5B\x22","\x22\x5D","\x68\x65\x61\x64","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x54\x61\x67\x4E\x61\x6D\x65","\x6C\x69\x6E\x6B","\x63\x72\x65\x61\x74\x65\x45\x6C\x65\x6D\x65\x6E\x74","\x74\x79\x70\x65","\x74\x65\x78\x74\x2F\x63\x73\x73","\x73\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x72\x65\x6C","\x73\x74\x79\x6C\x65\x73\x68\x65\x65\x74","\x68\x72\x65\x66","\x6D\x65\x64\x69\x61","\x73\x63\x72\x65\x65\x6E","\x61\x70\x70\x65\x6E\x64\x43\x68\x69\x6C\x64","\x73\x65\x74\x54\x69\x6D\x65\x6F\x75\x74"];function loadRequiredFiles(){if(!cssObjectLoaded()){inject_css('stylesheets/embed.css',false,_0x7caa[0]);} ;if(!customCSSLoaded()){inject_css('http://electure-ms.studiumdigitale.uni-frankfurt.de/playlists/IiqjFHOrH6/custom_css?changed=1355324586',true,_0x7caa[1]);} ;if(!jqueryLoaded()){document[_0x7caa[2]]('<script src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/javascripts/jquery-min.js\" type=\"text/javascript\"></script>');} ;} ;function varDefined(_0xade1x3){varName=_0x7caa[3]+_0xade1x3;return (eval(_0x7caa[4]+varName+_0x7caa[5])!=_0x7caa[6]);} ;function prototypeLoaded(){return varDefined(_0x7caa[7]);} ;function jqueryLoaded(){return varDefined(_0x7caa[8]);} ;function ajaxLoaded(){return varDefined(_0x7caa[9]);} ;function swfobjectLoaded(){return varDefined(_0x7caa[10]);} ;function cssObjectLoaded(){return isIncluded(_0x7caa[0]);} ;function customCSSLoaded(){return isIncluded(_0x7caa[1]);} ;function requiredFilesLoaded(){return (cssObjectLoaded()&&customCSSLoaded()&&jqueryLoaded());} ;function isIncluded(_0xade1xc){if(!varDefined(_0x7caa[11])){includedFiles= new Array();} ;return varDefined(_0x7caa[12]+_0xade1xc+_0x7caa[13]);} ;function inject_css(_0xade1xe,_0xade1xf,_0xade1x10){if(!isIncluded(_0xade1x10)){var _0xade1x11=document[_0x7caa[15]](_0x7caa[14])[0];var _0xade1x12=document[_0x7caa[17]](_0x7caa[16]);_0xade1x12[_0x7caa[20]](_0x7caa[18],_0x7caa[19]);_0xade1x12[_0x7caa[20]](_0x7caa[21],_0x7caa[22]);if(_0xade1xf){_0xade1x12[_0x7caa[20]](_0x7caa[23],_0xade1xe);} else {_0xade1x12[_0x7caa[20]](_0x7caa[23],'http://electure-ms.studiumdigitale.uni-frankfurt.de/'+_0xade1xe);} ;_0xade1x12[_0x7caa[20]](_0x7caa[24],_0x7caa[25]);_0xade1x11[_0x7caa[26]](_0xade1x12);includedFiles[_0xade1x10]=_0xade1x10;} ;} ;function waitUntilLoaded(_0xade1x14){if(!requiredFilesLoaded()){window[_0x7caa[27]](function (){waitUntilLoaded(_0xade1x14);} ,100);return ;} else {} ;eval(_0xade1x14);} ;


//Replace the div's contents
function replaceContent_IiqjFHOrH6(){
	//alert("replacing");
	//console.log("replacing")

	jQuery.noConflict()
		jQuery('#IiqjFHOrH6').replaceWith("  <div id=\"sortable_clips\" >\n	    		<div class=\"videoms_clip_box\">\n		<h2>V6 Die Koketterie <\/h2>\n		<div class=\"videoms_preview\">\n			<img alt=\"Deliver_poster\" class=\"videoms_posterimage\" src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/7MuhuQ62hA/deliver_poster\" />\n		<\/div>\n\n		<ul class=\"videoms_player_formats videoms_format_btn\">\n	\n			\n						<li class=\"videoms_quicktime\" title=\"QuickTime High Quality\" alt=\"QuickTime High Quality\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/7MuhuQ62hA/quicktime.mp4\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_flash\" title=\"Flash\" alt=\"Flash\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/7MuhuQ62hA/flash.html\" target=\"_blank\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_html5\" title=\"HTML5 Player\" alt=\"HTML5 Player\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/7MuhuQ62hA/html5.html\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mp3_audio\" title=\"MP3 Audio\" alt=\"MP3 Audio\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/7MuhuQ62hA/mp3_audio.mp3\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mobile\" title=\"Mobile\" alt=\"Mobile\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/7MuhuQ62hA/mobile.mp4\"><\/a>\n						<\/li>			    \n		<\/ul>\n\n		<ul class=\"videoms_details\">\n			\n			<li><span>Sprecher:<\/span>&nbsp;Prof. Dr. Tilman Allert<\/li>\n			<li><span>Ort:<\/span>&nbsp;Campus Bockenheim - H 12<\/li>\n			<li><span>Datum:<\/span>&nbsp;28.11.2012 <\/li>\n			<li><span>Beschreibung:<\/span>&nbsp;<p><\/p><\/li>\n			<li>&nbsp;<\/li>\n<li>&nbsp;<\/li>\n\n		<\/ul>\n		\n		\n		<div id=\"flash_7MuhuQ62hA\" style=\"display:none\">\n			\n\n<object width=\"100%\" height=\"99%\">\n	<param name=\"movie\" value=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\"/>\n	<param name=\"allowFullScreen\" value=\"true\"/>\n	<param name=\"allowscriptaccess\" value=\"always\"/>\n	<param name=\"wmode\" value=\"transparent\"/>\n	<param name=\"flashvars\" value=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/7MuhuQ62hA/get_flash_application_clip_data.xml&autoPlay=true&wmode=transparent\"/>\n	<embed src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\" type=\"application/x-shockwave-flash\" flashvars=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/7MuhuQ62hA/get_flash_application_clip_data.xml&autoPlay=true\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"transparent\" width=\"100%\" height=\"99%\"/>\n<\/object>\n		<\/div>\n	<\/div>\n\n	    		<div class=\"videoms_clip_box\">\n		<h2>V5 Akademische Terminologie - Die Koketterie<\/h2>\n		<div class=\"videoms_preview\">\n			<img alt=\"Deliver_poster\" class=\"videoms_posterimage\" src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/4qY7PMq96A/deliver_poster\" />\n		<\/div>\n\n		<ul class=\"videoms_player_formats videoms_format_btn\">\n	\n			\n						<li class=\"videoms_quicktime\" title=\"QuickTime High Quality\" alt=\"QuickTime High Quality\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/4qY7PMq96A/quicktime.mp4\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_flash\" title=\"Flash\" alt=\"Flash\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/4qY7PMq96A/flash.html\" target=\"_blank\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_html5\" title=\"HTML5 Player\" alt=\"HTML5 Player\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/4qY7PMq96A/html5.html\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mp3_audio\" title=\"MP3 Audio\" alt=\"MP3 Audio\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/4qY7PMq96A/mp3_audio.mp3\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mobile\" title=\"Mobile\" alt=\"Mobile\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/4qY7PMq96A/mobile.mp4\"><\/a>\n						<\/li>			    \n		<\/ul>\n\n		<ul class=\"videoms_details\">\n			\n			<li><span>Sprecher:<\/span>&nbsp;Prof. Dr. Tilman Allert<\/li>\n			<li><span>Ort:<\/span>&nbsp;Campus Bockenheim - H 12<\/li>\n			<li><span>Datum:<\/span>&nbsp;21.11.2012 <\/li>\n			<li><span>Beschreibung:<\/span>&nbsp;<p>Wegen technischer Probleme konnte leider nur ein Bruchteil der Aufzeichnung zur Verfügung gestellt werden. Wir bitten dies zu entschuldigen;<\/p><\/li>\n			<li>&nbsp;<\/li>\n\n		<\/ul>\n		\n		\n		<div id=\"flash_4qY7PMq96A\" style=\"display:none\">\n			\n\n<object width=\"100%\" height=\"99%\">\n	<param name=\"movie\" value=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\"/>\n	<param name=\"allowFullScreen\" value=\"true\"/>\n	<param name=\"allowscriptaccess\" value=\"always\"/>\n	<param name=\"wmode\" value=\"transparent\"/>\n	<param name=\"flashvars\" value=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/4qY7PMq96A/get_flash_application_clip_data.xml&autoPlay=true&wmode=transparent\"/>\n	<embed src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\" type=\"application/x-shockwave-flash\" flashvars=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/4qY7PMq96A/get_flash_application_clip_data.xml&autoPlay=true\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"transparent\" width=\"100%\" height=\"99%\"/>\n<\/object>\n		<\/div>\n	<\/div>\n\n	    		<div class=\"videoms_clip_box\">\n		<h2>V4 Die Mode und der Schmuck<\/h2>\n		<div class=\"videoms_preview\">\n			<img alt=\"Deliver_poster\" class=\"videoms_posterimage\" src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/MuB6AouPMs/deliver_poster\" />\n		<\/div>\n\n		<ul class=\"videoms_player_formats videoms_format_btn\">\n	\n			\n						<li class=\"videoms_quicktime\" title=\"QuickTime High Quality\" alt=\"QuickTime High Quality\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/MuB6AouPMs/quicktime.mp4\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_flash\" title=\"Flash\" alt=\"Flash\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/MuB6AouPMs/flash.html\" target=\"_blank\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_html5\" title=\"HTML5 Player\" alt=\"HTML5 Player\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/MuB6AouPMs/html5.html\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mp3_audio\" title=\"MP3 Audio\" alt=\"MP3 Audio\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/MuB6AouPMs/mp3_audio.mp3\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mobile\" title=\"Mobile\" alt=\"Mobile\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/MuB6AouPMs/mobile.mp4\"><\/a>\n						<\/li>			    \n		<\/ul>\n\n		<ul class=\"videoms_details\">\n			\n			<li><span>Sprecher:<\/span>&nbsp;Prof. Dr. Tilman Allert<\/li>\n			<li><span>Ort:<\/span>&nbsp;Campus Bockenheim - H 12<\/li>\n			<li><span>Datum:<\/span>&nbsp;14.11.2012 <\/li>\n			<li><span>Beschreibung:<\/span>&nbsp;<p><\/p><\/li>\n			<li>&nbsp;<\/li>\n<li>&nbsp;<\/li>\n\n		<\/ul>\n		\n		\n		<div id=\"flash_MuB6AouPMs\" style=\"display:none\">\n			\n\n<object width=\"100%\" height=\"99%\">\n	<param name=\"movie\" value=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\"/>\n	<param name=\"allowFullScreen\" value=\"true\"/>\n	<param name=\"allowscriptaccess\" value=\"always\"/>\n	<param name=\"wmode\" value=\"transparent\"/>\n	<param name=\"flashvars\" value=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/MuB6AouPMs/get_flash_application_clip_data.xml&autoPlay=true&wmode=transparent\"/>\n	<embed src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\" type=\"application/x-shockwave-flash\" flashvars=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/MuB6AouPMs/get_flash_application_clip_data.xml&autoPlay=true\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"transparent\" width=\"100%\" height=\"99%\"/>\n<\/object>\n		<\/div>\n	<\/div>\n\n	    		<div class=\"videoms_clip_box\">\n		<h2>V3 Die Mode<\/h2>\n		<div class=\"videoms_preview\">\n			<img alt=\"Deliver_poster\" class=\"videoms_posterimage\" src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/o40JGeAzCv/deliver_poster\" />\n		<\/div>\n\n		<ul class=\"videoms_player_formats videoms_format_btn\">\n	\n			\n						<li class=\"videoms_quicktime\" title=\"QuickTime High Quality\" alt=\"QuickTime High Quality\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/o40JGeAzCv/quicktime.mp4\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_flash\" title=\"Flash\" alt=\"Flash\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/o40JGeAzCv/flash.html\" target=\"_blank\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_html5\" title=\"HTML5 Player\" alt=\"HTML5 Player\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/o40JGeAzCv/html5.html\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mp3_audio\" title=\"MP3 Audio\" alt=\"MP3 Audio\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/o40JGeAzCv/mp3_audio.mp3\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mobile\" title=\"Mobile\" alt=\"Mobile\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/o40JGeAzCv/mobile.mp4\"><\/a>\n						<\/li>			    \n		<\/ul>\n\n		<ul class=\"videoms_details\">\n			\n			<li><span>Sprecher:<\/span>&nbsp;Prof. Dr. Tilman Allert<\/li>\n			<li><span>Ort:<\/span>&nbsp;Campus Bockenheim - H12<\/li>\n			<li><span>Datum:<\/span>&nbsp;07.11.2012 <\/li>\n			<li><span>Beschreibung:<\/span>&nbsp;<p><\/p><\/li>\n			<li>&nbsp;<\/li>\n<li>&nbsp;<\/li>\n\n		<\/ul>\n		\n		\n		<div id=\"flash_o40JGeAzCv\" style=\"display:none\">\n			\n\n<object width=\"100%\" height=\"99%\">\n	<param name=\"movie\" value=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\"/>\n	<param name=\"allowFullScreen\" value=\"true\"/>\n	<param name=\"allowscriptaccess\" value=\"always\"/>\n	<param name=\"wmode\" value=\"transparent\"/>\n	<param name=\"flashvars\" value=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/o40JGeAzCv/get_flash_application_clip_data.xml&autoPlay=true&wmode=transparent\"/>\n	<embed src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\" type=\"application/x-shockwave-flash\" flashvars=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/o40JGeAzCv/get_flash_application_clip_data.xml&autoPlay=true\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"transparent\" width=\"100%\" height=\"99%\"/>\n<\/object>\n		<\/div>\n	<\/div>\n\n	    		<div class=\"videoms_clip_box\">\n		<h2>V2 Das Abenteuer<\/h2>\n		<div class=\"videoms_preview\">\n			<img alt=\"Deliver_poster\" class=\"videoms_posterimage\" src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/uyeiRAmngt/deliver_poster\" />\n		<\/div>\n\n		<ul class=\"videoms_player_formats videoms_format_btn\">\n	\n			\n						<li class=\"videoms_quicktime\" title=\"QuickTime High Quality\" alt=\"QuickTime High Quality\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/uyeiRAmngt/quicktime.mp4\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_flash\" title=\"Flash\" alt=\"Flash\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/uyeiRAmngt/flash.html\" target=\"_blank\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_html5\" title=\"HTML5 Player\" alt=\"HTML5 Player\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/uyeiRAmngt/html5.html\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mp3_audio\" title=\"MP3 Audio\" alt=\"MP3 Audio\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/uyeiRAmngt/mp3_audio.mp3\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mobile\" title=\"Mobile\" alt=\"Mobile\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/uyeiRAmngt/mobile.mp4\"><\/a>\n						<\/li>			    \n		<\/ul>\n\n		<ul class=\"videoms_details\">\n			\n			<li><span>Sprecher:<\/span>&nbsp;Prof. Dr. Tilman Allert<\/li>\n			<li><span>Ort:<\/span>&nbsp;Campus Bockenheim - Jügelhaus - H12<\/li>\n			<li><span>Datum:<\/span>&nbsp;31.10.2012 <\/li>\n			<li><span>Beschreibung:<\/span>&nbsp;<p><\/p><\/li>\n			<li>&nbsp;<\/li>\n<li>&nbsp;<\/li>\n\n		<\/ul>\n		\n		\n		<div id=\"flash_uyeiRAmngt\" style=\"display:none\">\n			\n\n<object width=\"100%\" height=\"99%\">\n	<param name=\"movie\" value=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\"/>\n	<param name=\"allowFullScreen\" value=\"true\"/>\n	<param name=\"allowscriptaccess\" value=\"always\"/>\n	<param name=\"wmode\" value=\"transparent\"/>\n	<param name=\"flashvars\" value=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/uyeiRAmngt/get_flash_application_clip_data.xml&autoPlay=true&wmode=transparent\"/>\n	<embed src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\" type=\"application/x-shockwave-flash\" flashvars=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/uyeiRAmngt/get_flash_application_clip_data.xml&autoPlay=true\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"transparent\" width=\"100%\" height=\"99%\"/>\n<\/object>\n		<\/div>\n	<\/div>\n\n	    		<div class=\"videoms_clip_box\">\n		<h2>V1 Begrüßung und Einleitung<\/h2>\n		<div class=\"videoms_preview\">\n			<img alt=\"Deliver_poster\" class=\"videoms_posterimage\" src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/S3Zz9TLWOb/deliver_poster\" />\n		<\/div>\n\n		<ul class=\"videoms_player_formats videoms_format_btn\">\n	\n			\n						<li class=\"videoms_quicktime\" title=\"QuickTime High Quality\" alt=\"QuickTime High Quality\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/S3Zz9TLWOb/quicktime.mp4\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_flash\" title=\"Flash\" alt=\"Flash\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/S3Zz9TLWOb/flash.html\" target=\"_blank\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_html5\" title=\"HTML5 Player\" alt=\"HTML5 Player\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/S3Zz9TLWOb/html5.html\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mp3_audio\" title=\"MP3 Audio\" alt=\"MP3 Audio\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/S3Zz9TLWOb/mp3_audio.mp3\"><\/a>\n						<\/li>			    \n	\n			\n						<li class=\"videoms_mobile\" title=\"Mobile\" alt=\"Mobile\">\n									<a href=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/vod/clips/S3Zz9TLWOb/mobile.mp4\"><\/a>\n						<\/li>			    \n		<\/ul>\n\n		<ul class=\"videoms_details\">\n			\n			<li><span>Sprecher:<\/span>&nbsp;Prof. Dr. Tilman Allert<\/li>\n			<li><span>Ort:<\/span>&nbsp;Campus Bockenheim - Jügelhaus - H12<\/li>\n			<li><span>Datum:<\/span>&nbsp;24.10.2012<\/li>\n			<li><span>Beschreibung:<\/span>&nbsp;<p><\/p><\/li>\n			<li>&nbsp;<\/li>\n<li>&nbsp;<\/li>\n\n		<\/ul>\n		\n		\n		<div id=\"flash_S3Zz9TLWOb\" style=\"display:none\">\n			\n\n<object width=\"100%\" height=\"99%\">\n	<param name=\"movie\" value=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\"/>\n	<param name=\"allowFullScreen\" value=\"true\"/>\n	<param name=\"allowscriptaccess\" value=\"always\"/>\n	<param name=\"wmode\" value=\"transparent\"/>\n	<param name=\"flashvars\" value=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/S3Zz9TLWOb/get_flash_application_clip_data.xml&autoPlay=true&wmode=transparent\"/>\n	<embed src=\"http://electure-ms.studiumdigitale.uni-frankfurt.de/flash/VideoET.swf\" type=\"application/x-shockwave-flash\" flashvars=\"theme=VideoMS&settingsURL=http://electure-ms.studiumdigitale.uni-frankfurt.de/clips/S3Zz9TLWOb/get_flash_application_clip_data.xml&autoPlay=true\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"transparent\" width=\"100%\" height=\"99%\"/>\n<\/object>\n		<\/div>\n	<\/div>\n\n  <\/div>\n");

}

//Load necessary javascript and CSS files
loadRequiredFiles();

//Make sure the files are loaded
waitUntilLoaded('replaceContent_IiqjFHOrH6();');

EOD;
    }

}
