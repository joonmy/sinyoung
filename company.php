<?php
require("./config.php");
require("./db.php");
$conn = db_init($config["host"], $config["duser"],$config["dpw"],$config["dname"]);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="myCss.css">
</head>
<body id = "body" class = "white">
    <script src = "Script.js"></script>
    <header>
        <h1><a href="index2.php" style = "text-decoration-line:none;">신영 C&C</a></h1>
        <div>
            <button id = "b1"><a href="index2.php">입력장</a></button>
            <button id = "b2">본사</button>
            <button id = "b3"><a href="company.php">업체</a></button>
            <button id = "b4"><a href="field.php">현장</a></button>
            <button id = "b5">업체별 잔액현황</button>
            <span id = "bw">
                <input type="button" name = "name", value="흰" onclick="whiteVersion()">
                <input type="button" name = "name", value="검" onclick="blackVersion()">
            </span>
        </div>
    </header>

    <nav>
        
    </nav>

    <article>
        <table style="width:100%">
            <tr>
                <th>NO.</th>
                <th>일자</th>
                <th>거래처</th>
                <th>입/출</th>
                <th>분류</th>
                <th>현장</th>
                <th>품목</th>
                <th>단위</th>
                <th>수량</th>
                <th>단가</th>
                <th>금액</th>
                <th>부가세</th>
                <th>합계</th>
                <th>비고</th>
            </tr>
            <?php
                $sql = "SELECT * FROM sy";
                $result = mysqli_query($conn,$sql);
            ?>
            <tr>
                <?php
                while($item = mysqli_fetch_assoc($result)){
                ?>
                <td><?=$item['id'] ?></td>
                <td><?php echo $item['data']; ?></td>
                <td><?php echo $item['company']; ?></td>
                <td><?php echo $item['inandout']; ?></td>
                <td><?php echo $item['type']; ?></td>
                <td><?php echo $item['place']; ?></td>
                <td><?php echo $item['item']; ?></td>
                <td><?php echo $item['unit']; ?></td>
                <td><?php echo $item['amount']; ?></td>
                <td><?php echo $item['price']; ?></td>
                <td><?php echo $item['tprice']; ?></td>
                <td><?php echo $item['tax']; ?></td>
                <td><?php echo $item['sum']; ?></td>
                <td><?php echo $item['note']; ?></td>
            </tr>
            <?php }?>
        </table>
    </article>
</body>
</html>


