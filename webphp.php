<?php
 $lists =[
    [
        'title' => "xxxxxxxxxxx课程",
        'img'  => "https://th.bing.com/th/id/OIP.TXhIcNSAOj13eBjn1yZMkQHaFW?w=233&h=180&c=7&r=0&o=7&dpr=1.4&pid=1.7&rm=3",
        'content' => "xxxxxxxxxxxx课程介绍xxxxxxxxxxxx课程介绍xxxxxxxxxxxx课程介绍",
        'date' => "2024-06-01",
        'class' => "前端"
    ],
    [
        'title' => "xxxxxxxxxxx课程",
        'img'  => "https://th.bing.com/th/id/OIP.TXhIcNSAOj13eBjn1yZMkQHaFW?w=233&h=180&c=7&r=0&o=7&dpr=1.4&pid=1.7&rm=3",
        'content' => "xxxxxxxxxxxx课程介绍xxxxxxxxxxxx课程介绍xxxxxxxxxxxx课程介绍",
        'date' => "2024-06-01",
        'class' => "后端"
    ],
    [
        'title' => "xxxxxxxxxxx课程",
        'img'  => "https://th.bing.com/th/id/OIP.TXhIcNSAOj13eBjn1yZMkQHaFW?w=233&h=180&c=7&r=0&o=7&dpr=1.4&pid=1.7&rm=3",
        'content' => "xxxxxxxxxxxx课程介绍xxxxxxxxxxxx课程介绍xxxxxxxxxxxx课程介绍",
        'date' => "2024-06-01",
        'class' => "测试"
    ],
    [
        'title' => "xxxxxxxxxxx课程",
        'img'  => "https://th.bing.com/th/id/OIP.TXhIcNSAOj13eBjn1yZMkQHaFW?w=233&h=180&c=7&r=0&o=7&dpr=1.4&pid=1.7&rm=3",
        'content' => "xxxxxxxxxxxx课程介绍xxxxxxxxxxxx课程介绍xxxxxxxxxxxx课程介绍",
        'date' => "2024-06-01",
        'class' => "运维"
    ],
];
$str=strtolower("MENU1,menu2,Menu3,meNu4");
$strArr=explode(",",$str);
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>课程列表</title>
  <link rel="icon" href="favicon.ico" />
  <style>
    body { font-family: -apple-system, "PingFang SC", "Helvetica Neue", Arial; margin: 0; padding: 24px; background:#f7f9fc; color:#333; }
    .container { max-width: 900px; margin: 0 auto; background: #fff; border-radius: 8px; padding: 24px; box-shadow: 0 6px 18px rgba(0,0,0,0.06); }
  </style>
</head>

<body>
  <?php 
    foreach ($lists as $item) {
        echo "<div style='border-bottom:1px solid #eee;padding:16px 0;'>";
        echo "<h2>".$item['title']."</h2>";
        echo "<img src='".$item['img']."' alt='".$item['title']."' style='max-width:200px;'/>";
        echo "<p>".$item['content']."</p>";
        echo "<p>发布日期：".$item['date']." | 分类：".$item['class']."</p>";
        echo "</div>";
    }
    foreach($strArr as $str){
        echo "<button onclick=\"alert('$str')\"style='margin:4px;padding:8px;background:#409eff;color:#fff;border:none;border-radius:4px;'>".$str."</button>";
    }
  ?>

</body>
</html>
