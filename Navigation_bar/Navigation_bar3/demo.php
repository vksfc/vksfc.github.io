
<!DOCTYPE html>
<html>
<head>
    <title>Tab导航栏</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/Navigation_bar/Navigation_bar3/Navigation_bar3.css">
</head>
<body>
    <div class="navbar">
        <!-- 导航栏 -->
        <ul>
            <?php
            // 导航项数组
            $navbarItems = array(
                '1' => '选项1',
                '2' => '选项2',
                '3' => '选项3'
            );

            // 循环输出导航项
            foreach ($navbarItems as $key => $value) {
                echo '<li><a href="?tab=' . $key . '">' . $value . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="content">
        <!-- 内容区域 -->
        <?php
        // 检查URL参数以确定当前选项卡
        $tab = isset($_GET['tab']) ? $_GET['tab'] : '1';

        // 根据选项卡显示不同的内容
        switch ($tab) {
            case '1':
                ?>
                <h2>选项1的内容</h2>
                <!-- 在这里添加其他HTML结构 -->
                <?php
                break;
            case '2':
                ?>
                <h2>选项2的内容</h2>
                <!-- 在这里添加其他HTML结构 -->
                <?php
                break;
            case '3':
                ?>
                <h2>选项3的内容</h2>
                <!-- 在这里添加其他HTML结构 -->
                <?php
                break;
        }
        ?>
    </div>
</body>
</html>
