<?php
define('IN_FRAME', true);

$anthonos_download_urls = array(
  'en' => array(
    'url' => 'http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_en-US_patch-1.iso',
    'url-tr' => 'http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_en-US_patch-1.iso.torrent',
    'url-ml' => 'magnet:?xt=urn:btih:12728A172CC4EBB26AFBE7CA982731EBA1363F4F&dn=anthonos_final-doge_kde_pc%2bmac_en-US_patch-1.iso',
    'cs' => 'c94c6612ced99764e94aaaf6d93f4b7b',
    ),
  'zh-CN' => array(
    'url' => 'http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_zh-CN_patch-1.iso',
    'url-tr' => 'http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_zh-CN_patch-1.iso.torrent',
    'url-ml' => 'magnet:?xt=urn:btih:A53100967E99A68A24FC52756EA32F7E1EC367B2&dn=anthonos_final-doge_kde_pc%2bmac_zh-CN_patch-1.iso',
    'cs' => 'b061230a3fdae3fd7aa23c15ec18964e',
    ),
  'zh-TW' => array(
    'url' => 'http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_zh-TW_patch-1.iso',
    'url-tr' => 'http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_zh-TW_patch-1.iso.torrent',
    'url-ml' => 'magnet:?xt=urn:btih:040D1E626C1051A97AA257BC46E319EEAB8A1F26&dn=anthonos_final-doge_kde_pc%2bmac_zh-TW_patch-1.iso',
    'cs' => '33d967e042e32838f7558f013a9ff6ab',
    ),
);

$langues = array(
  'en' => array(
    'title' => 'Downloads - AOSC',
    'download-title' => 'Downloads / <span class="text-muted">Community Projects</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">Final Release - Patch 1</span>',
    '64bit' => '64-bit',
    'anthonos-ad' => 'Simple, while feature rich.',
    'anthonos-relnote' => 'Release Notes &raquo;',
    'anthonos-download' => 'Download English Version',
    'anthonos-download-directly' => 'HTTP Direct Download',
    'anthonos-download-magnetlink' => 'via Magnet link',
    'anthonos-download-torrent' => 'via Torrent',
    'anthonos-download-other' => 'Other Languages\'',
    'anthonos-checksum' => 'MD5 Checksum : ',
    'anthonos-password' => 'Password of Live CD: ',
    'spins' => 'Spins',
    
    'changelog' => 'Changelog',
    'changelog-patch1' => 'version AnthonOS "Doge" - Patch 1',
    'changelog-patch1-p' => '<ol><li>Fixed the issue that the installer cannot skip GRUB installation.</li><li>Fixed format failure when choosing xfs, btrfs or jfs when a file system already exists on the specific partition.</li></ol>',
    
    'screenshot' => 'Screenshots',
    'close-modal' => 'Close',
    'awesome-title' => 'Awesome Spin',
    'awesome-desc' => 'An Awesome spin (that is awesome), from Zhanlin Shang. Awesome is a highly customizable window manager.',
    'download-button' => 'Download &raquo;',
    'xfce-title' => 'Xfce Spin',
    'xfce-desc' => 'A Xfce spin based on AnthonOS.',
    'cp-title' => 'CentralPoint <span class="text-muted">Radio Noise</span>',
    'cp-download' => 'Announcement and Download &raquo;',
    'cp-ad' => 'A lightweight Turn-key style server release.',
    'ast-title' => 'Anthon Starter <span class="text-muted">Start Me Up!',
    'ast-ad' => 'Installation helper for AOSC Linux distributions.',
    'src-button' => 'Homepage &raquo;',
    /*
		'warn' => '<strong>WARNING:</strong> A major flaw is discovered in the currently released ISO. So now please wait for the fixed one to be released at earliest July 11, 12:00 UTC, no later than Sunday.',
		'warn-modal-p' => 'A major flaw is discovered in the currently released ISO. So now please wait for the fixed one to be released at earliest July 11, 12:00 UTC, no later than Sunday.',
		'warn-modal' => 'WARNING',
		'warn-tk' => 'Take this action',
		'warn-wt' => 'Or wait for it',*/
  ),
  'zh-CN' => array(
    'title' => '下载 - 安同开源社区',
    'download-title' => '下载 / <span class="text-muted">社区项目</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">正式版本 - Patch 1</span>',
    '64bit' => '64 位',
    'anthonos-ad' => '简而不减的桌面发行版',
    'anthonos-relnote' => '发行注记 &raquo;',
    'anthonos-download' => '下载简体中文版',
    'anthonos-download-directly' => '直接下载',
    'anthonos-download-magnetlink' => '磁力链接',
    'anthonos-download-torrent' => 'BitTorrent 种子',
    'anthonos-download-other' => '其它语言',
    'anthonos-checksum' => 'MD5 校验码 : ',
    'anthonos-password' => 'Live CD 登陆密码为: ',
    'spins' => '//TODO: Spins',
    
    'changelog' => '更改日志',
    'changelog-patch1' => 'AnthonOS "Doge" - Patch 1',
    'changelog-patch1-p' => '<ol><li>修复安装时无法跳过 GRUB 的问题。</li><li>修复当选择 xfs 、jfs 或 btrfs 文件系统时格式化失败的问题。</li></ol>',
    
    'screenshot' => '系统界面截图',
    'close-modal' => '返回',
    'awesome-title' => 'Awesome 版',
    'awesome-desc' => '一个非常赞的 Awesome 定制版本, 来自 Zhanlin Shang. Awesome 是一个高度可定制的窗口管理器',
    'download-button' => '下载 &raquo;',
    'xfce-title' => 'Xfce 版',
    'xfce-desc' => '基于 AnthonOS 制作的 Xfce Spin.',
    'cp-title' => 'CentralPoint <span class="text-muted">"缺陷电气"</span>', //此处注意使用半角引号
    'cp-ad' => '轻量化的 Turn-key 型服务器发行版',
    'cp-download' => '发布及下载 &raquo;',
    'ast-title' => '安同开始程序 <span class="text-muted">Start Me Up!', //不要翻译 Start Me Up!
    'ast-ad' => '安同开源社区发行版硬盘安装助手',
    'src-button' => '项目主页 &raquo;',
    /*
		'warn' => '<strong>警告：</strong>当前的AnthonOS正式版本出现了一个问题，将可能导致桌面无法正常显示。请等待即将发布的修复版本，时间于北京时间7月11日八点至最晚本周日。',
		'warn-modal-p' => '当前的AnthonOS正式版本出现了一个问题，将可能导致桌面无法正常显示。请等待即将发布的修复版本，时间于北京时间7月11日八点至最晚本周日。',
		'warn-modal' => '警告',
		'warn-tk' => '继续下载',
		'warn-wt' => '再等等',*/
  ),
  'zh-TW' => array(
    'title' => '下載 - 安同開源社區',
    'download-title' => '下載 / <span class="text-muted">社區項目</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">正式版本 - Patch 1</span>',
    '64bit' => '64 位元',
    'anthonos-ad' => '簡而不剪的桌面發行版.',
    'anthonos-relnote' => '發行注記 &raquo;',
    'anthonos-download' => '下載正體中文版',
    'anthonos-download-directly' => '直接下載',
    'anthonos-download-magnetlink' => '磁力鏈接',
    'anthonos-download-torrent' => 'BitTorrent 种子',
    'anthonos-download-other' => '其它語言',
    'anthonos-checksum' => 'MD5 校驗碼 : ',
    'anthonos-password' => 'Live CD 登陸密碼為: ',
    'spins' => '//TODO: Spins',
    
    'changelog' => '更改日誌',
    'changelog-patch1' => 'AnthonOS "Doge" - Patch 1',
    'changelog-patch1-p' => '<ol><li>修復安裝時無法跳過 GRUB 的問題。</li><li>修復當選擇 xfs 、jfs 或 btrfs 檔案系統時格式化失敗的問題。</li></ol>',
    
    'screenshot' => '系統界面截屏',
    'close-modal' => '返回',
    'awesome-title' => 'Awesome 版',
    'awesome-desc' => '一個非常贊的 Awesome 定製版本, 來自 Zhanlin Shang. Awesome 是一個可以高度定製的窗口管理器.',
    'download-button' => '下載 &raquo;',
    'xfce-title' => 'Xfce 版',
    'xfce-desc' => '基於 AnthonOS 製作的Xfce Spin.',
    'cp-title' => 'CentralPoint <span class="text-muted">代號 "Radio Noise"</span>',
    'cp-ad' => '輕量化的 turn-key 類型的伺服器發行版.',
    'cp-download' => '發佈及下載 &raquo;',
    'ast-title' => '安同開始程式 <span class="text-muted">Start Me Up!',
    'ast-ad' => '安同開源社區發行版安裝助手',
    'src-button' => '項目主頁 &raquo;',
    /*
		'warn' => '<strong>警告：</strong>當前的AnthonOS正式版本出現了一個問題，將可能導致桌面無法正常顯示。請等待即將發布的修正版，時間於北京時間7月11日八點至最晚本週日。',
		'warn-modal-p' => '當前的AnthonOS正式版本出現了一個問題，將可能導致桌面無法正常顯示。請等待即將發布的修正版，時間於北京時間7月11日八點至最晚本週日。',
		'warn-modal' => '警告',
		'warn-tk' => '繼續下載',
		'warn-wt' => '再等等',*/
  ),
);
include '../modules/langue.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jeff Bai <jeffbaichina@gmail.com>, YeXiaoxing <ye@xiaoxing.us>">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title><?php echo $langues[$langue]['title'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/carousel.css" rel="stylesheet"> 
    <link href="/css/common.css" rel="stylesheet"> 
    <script type="application/javascript">
      var anthonos_download_urls = new Array(
      '<?php echo $anthonos_download_urls['en']['cs'];?>', '<?php echo $langues['en']['anthonos-download'];?>', 
      '<?php echo $anthonos_download_urls['en']['url'];?>', '<?php echo $langues['en']['anthonos-download-directly'];?>', 
      '<?php echo $langues['en']['anthonos-download-torrent'];?>', '<?php echo $anthonos_download_urls['en']['url-tr'];?>', 
      '<?php echo $langues['en']['anthonos-download-magnetlink'];?>', '<?php echo $anthonos_download_urls['en']['url-ml'];?>', 
      
      '<?php echo $anthonos_download_urls['zh-CN']['cs'];?>', '<?php echo $langues['zh-CN']['anthonos-download'];?>', 
      '<?php echo $anthonos_download_urls['zh-CN']['url'];?>', '<?php echo $langues['zh-CN']['anthonos-download-directly'];?>', 
      '<?php echo $langues['zh-CN']['anthonos-download-torrent'];?>', '<?php echo $anthonos_download_urls['zh-CN']['url-tr'];?>', 
      '<?php echo $langues['zh-CN']['anthonos-download-magnetlink'];?>', '<?php echo $anthonos_download_urls['zh-CN']['url-ml'];?>', 
      
      '<?php echo $anthonos_download_urls['zh-TW']['cs'];?>','<?php echo $langues['zh-TW']['anthonos-download'];?>', 
      '<?php echo $anthonos_download_urls['zh-TW']['url'];?>', '<?php echo $langues['zh-TW']['anthonos-download-directly'];?>', 
      '<?php echo $langues['zh-TW']['anthonos-download-torrent'];?>', '<?php echo $anthonos_download_urls['zh-TW']['url-tr'];?>', 
      '<?php echo $langues['zh-TW']['anthonos-download-magnetlink'];?>', '<?php echo $anthonos_download_urls['zh-TW']['url-ml'];?>'
      );
    </script>
  </head>
  <body>
  <!-- NAVBAR
  ================================================== -->
  <?php include '../templates/navbar.php';?>
  <div class="container marketing">
    <h1 class="featurette-heading"><?php echo $langues[$langue]['download-title'];?></h1>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-3">
        <img src="/img/anos.png" height=200 width=200>
      </div>
      <div class="col-md-9">
        <h2 class="heading"><?php echo $langues[$langue]['anthonos-title'];?><span class="badge" style="margin-left: 10px;"><?php echo $langues[$langue]['64bit'];?></span></h2>
        <p class="lead">
          <?php echo $langues[$langue]['anthonos-ad'];?>
          <div class="btn-toolbar">
            <a class="btn btn-default" href="http://wenda.anthonos.org/article/17" role="button"><?php echo $langues[$langue]['anthonos-relnote'];?></a><span style="margin: 5px;"></span>
            <div class="btn-group">
              
              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle download-button" data-toggle="dropdown">
                  <?php echo $langues[$langue]['anthonos-download'];?></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a class="download-a-ml" role="button" href="<?php echo $anthonos_download_urls[$langue]['url-ml']?>"><?php echo $langues[$langue]['anthonos-download-magnetlink'];?></a></li>
                  <li><a class="download-a-tr" role="button" href="<?php echo $anthonos_download_urls[$langue]['url-tr']?>"><?php echo $langues[$langue]['anthonos-download-torrent'];?></a></li>
                  <li><a class="download-a" role="button" href="<?php echo $anthonos_download_urls[$langue]['url']?>"><?php echo $langues[$langue]['anthonos-download-directly'];?></a></li>
                </ul>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <?php echo $langues[$langue]['anthonos-download-other'];?><span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a herf="#" class="download-handle" id="dl-0">English</a></li>
                  <li><a herf="#" class="download-handle" id="dl-1" >简体中文</a></li>
                  <li><a herf="#" class="download-handle" id="dl-2">正體中文</a></li>
                </ul>
              </div>
            </div>
          </div>
        </p>
        <p>
          <span class="label label-default" style="font-weight: normal;"><?php echo $langues[$langue]['anthonos-checksum'];?><span id="checksum"><?php echo $anthonos_download_urls[$langue]['cs'] ?></span></span>
          <span class="label label-danger" style="font-weight: normal;"><?php echo $langues[$langue]['anthonos-password'];?><em>live</em></span>
        </p>
        <p>
          <button class="btn btn-default" data-toggle="modal" data-target="#myModal">
            <?php echo $langues[$langue]['spins'];?>
          </button>
          <button class="btn btn-default" data-toggle="modal" data-target="#myModalChangelog">
            <?php echo $langues[$langue]['changelog'];?>
          </button>
        </p>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            <?php echo $langues[$langue]['screenshot'];?>
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="my_gallery">
            <?php
              for ($a=1;$a<=11;$a++)
                echo '<a target="_blank" href="/img/screenshot/'.$a.'.png"><img src="/img/screenshot/'.$a.'_small.png" id="img'.$a.'" alt="img'.$a.'" width="250"></a>';
            ?>
          </div>
        </div>
      </div>
    </div>
    
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-3">
        <img src="/img/cp.png" height=200 width=200>
      </div>
      <div class="col-md-9">
        <h2 class="heading"><?php echo $langues[$langue]['cp-title'];?></h2>
        <p class="lead"><?php echo $langues[$langue]['cp-ad'];?></p>
        <p><a class="btn btn-default" href="http://wenda.anthonos.org/question/9" role="button"><?php echo $langues[$langue]['cp-download'];?></a></p>
      </div>
    </div>

    <hr class="featurette-divider">
        
    <div class="row featurette">
      <div class="col-md-3">
        <img src="/img/ast.png" height=200 width=200>
      </div>
      <div class="col-md-9">
        <h2 class="heading"><?php echo $langues[$langue]['ast-title'];?></h2>
        <p class="lead"><?php echo $langues[$langue]['ast-ad'];?></p>
        <p><a class="btn btn-default" href="http://ast.projects.anthonos.org/" role="button"><?php echo $langues[$langue]['src-button'];?></a></p>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- FOOTER -->
    <?php include '../templates/footer.php';?>
  
  </div><!-- /.container -->
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $langues[$langue]['close-modal'];?></span></button>
            <h3 class="modal-title" id="myModalLabel"><?php echo $langues[$langue]['spins'];?></h3>
          </div>
          <div class="modal-body">
            <h4>
              <?php echo $langues[$langue]['awesome-title'];?>
            </h4>
            <p>
                <b><?php echo $langues[$langue]['awesome-desc'];?></b>
                <p><a class="btn btn-default" href="http://mb.anthonos.org/os2-releases/aosc-os2-spins/awesome/" role="button"><?php echo $langues[$langue]['download-button'];?></a></p> 
            </p>
            <hr>
            <h4>
              <?php echo $langues[$langue]['xfce-title'];?>
            </h4>
            <p>
              <b><?php echo $langues[$langue]['xfce-desc'];?></b>
              <p><a class="btn btn-default" href="http://mb.anthonos.org/os2-releases/aosc-os2-spins/xfce/" role="button"><?php echo $langues[$langue]['download-button'];?></a></p> 
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $langues[$langue]['close-modal'];?></button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModalChangelog" tabindex="-1" role="dialog" aria-labelledby="myModalChangelogLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $langues[$langue]['close-modal'];?></span></button>
            <h3 class="modal-title" id="myModalChangelogLabel"><?php echo $langues[$langue]['changelog'];?></h3>
          </div>
          <div class="modal-body">
            <h4>
              <?php echo $langues[$langue]['changelog-patch1'];?>
            </h4>
            <p>
                <?php echo $langues[$langue]['changelog-patch1-p'];?>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $langues[$langue]['close-modal'];?></button>
          </div>
        </div>
      </div>
    </div>
    <?php /*
    <!-- Modal -->
    <div class="modal fade" id="myModalW" tabindex="-1" role="dialog" aria-labelledby="myModalWLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $langues[$langue]['close-modal'];?></span></button>
            <h3 class="modal-title" id="myModalWLabel"><?php echo $langues[$langue]['warn-modal'];?></h3>
          </div>
          <div class="modal-body">
            <p class=""><?php echo $langues[$langue]['warn-modal-p'];?></p>
          <div class="modal-footer">
            <a role="button" class="btn btn-danger download-a" href="<?php echo $anthonos_download_urls[$langue]['url']?>"><?php echo $langues[$langue]['warn-tk'];?></a>
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $langues[$langue]['warn-wt'];?></button>
          </div>
        </div>
      </div>
    </div>
    */
    ?>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://lib.sinaapp.com/js/jquery/2.0.3/jquery-2.0.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script type="application/javascript">
    $(document).ready(function() { 
      var $img = $("img"); 
      $img.hover(function() { 
        $(this).attr("src",$(this).attr("src").replace("_normal", "_hover")); 
      },function() { 
        $(this).attr("src",$(this).attr("src").replace("_hover", "_normal")); 
      });
      $(".download-handle").click(function(){
        var arr_index = parseInt(this.id.substr(3)) * 8;
        $(".download-button").html(anthonos_download_urls[arr_index + 1]);
        $(".download-a").attr("href",anthonos_download_urls[arr_index + 2]);
        $(".download-a").html(anthonos_download_urls[arr_index + 3]);
        $(".download-a-tr").attr("href",anthonos_download_urls[arr_index + 5]);
        $(".download-a-tr").html(anthonos_download_urls[arr_index + 4]);
        $(".download-a-ml").attr("href",anthonos_download_urls[arr_index + 7]);
        $(".download-a-ml").html(anthonos_download_urls[arr_index + 6]);
        $("#checksum").html(anthonos_download_urls[arr_index + 0]);
      });
    });
    </script>
  </body>
</html>
