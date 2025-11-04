<?php
echo "php is ok";
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>项目首页</title>
  <link rel="icon" href="favicon.ico" />
  <!-- 引入本地 css（如果有） -->
  <link rel="stylesheet" href="assets/styles.css" />
  <style>
    /* 简单样式，方便预览 */
    body { font-family: -apple-system, "PingFang SC", "Helvetica Neue", Arial; margin: 0; padding: 24px; background:#f7f9fc; color:#333; }
    .container { max-width: 900px; margin: 0 auto; background: #fff; border-radius: 8px; padding: 24px; box-shadow: 0 6px 18px rgba(0,0,0,0.06); }
    header h1 { margin: 0 0 8px 0; font-size: 24px; }
    p.desc { color: #666; margin-top: 0; }
    .assets-list { margin-top: 16px; }
    .assets-list li { margin-bottom: 6px; }
    footer { margin-top: 24px; color: #999; font-size: 13px; }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>我的静态页面</h1>
      <p class="desc">这是从项目打包后的 dist 转为普通 HTML 的示例页。把实际的资源（JS/CSS/图片）放到 <code>assets/</code> 目录。</p>
    </header>
<?php   echo  "这是一个插入的php" ;
$map = array(
    "name" => "小李",
    "email" => "asda698@gmail.com",
    "age" => 18,
    "description" => "我是一名前端开发者"
);
echo json_encode($map, JSON_UNESCAPED_UNICODE);
echo "name=>".$map['name'];
print_r($map);
foreach ($map as $key => $value) {
    echo $key . " : " . $value . "\n";
}
$isTrue = true;
if ($isTrue) {
    echo "条件为真";
} else {
    echo "条件为假";
}

$isArr=array(
    "a1"=>array(
        array("a1"=>"vip","b1"=>"svip"),
        array("a2"=>"普通","b2"=>"高级"),
    ),
      "a2"=>array(
        array("a2"=>"vip","b2"=>"svip"),
        array("a3"=>"普通","b3"=>"高级"),
    ),
);
echo "<br>";
foreach($isArr as $k => $v){
    foreach($v as $k1 => $v1){
          foreach($v1 as $k2 => $v2){
             echo $k2."=>".$v2."<br>";
          }
    }
};
$menu = [
    '首页','关于我们','服务','联系我们','博客','帮助中心','常见问题','隐私政策','使用条款','反馈'
]
?>
    <section>
      <h2>页面内容示例</h2>
  <?php
    foreach ($menu as $item) {
        echo "<button onclick=\"alert('$item')\" style=\"background:pink\" >$item</button>";
    }
    ?>
      <p>你可以把这里替换成你项目的 HTML 结构。下面给了两个常见用例：</p>
      <h3>1. 引入打包好的 JS（单页应用常见）</h3>
<pre><code>&lt;!-- 如果你有打包生成的 main.js --&gt;
&lt;script src="assets/main.js"&gt;&lt;/script&gt;
</code></pre>

      <h3>2. 直接写普通 HTML 内容</h3>
      <p>这是一个普通段落，左侧可以放图片：</p>
      <img src="assets/img.png" alt="示例图片" style="max-width:100%;height:auto;border-radius:6px;margin-top:8px;" />

      <ul class="assets-list">
        <li><strong>favicon</strong>: <code>favicon.ico</code></li>
        <li><strong>图片</strong>: <code>assets/...</code></li>
        <li><strong>样式</strong>: <code>assets/styles.css</code></li>
        <li><strong>脚本</strong>: <code>assets/main.js</code></li>
      </ul>
    </section>

    <footer>
      Build time: <span id="build-time"></span>
    </footer>
  </div>

  <script>
    // 简短脚本：显示当前时间（示例）
    document.getElementById('build-time').textContent = new Date().toLocaleString();
  </script>
</body>
</html>
