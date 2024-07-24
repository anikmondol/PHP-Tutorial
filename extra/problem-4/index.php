<?php
if (isset($_POST['select-val'])) {
    $selVal = $_POST['select-val'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="container">
        <div class="select_box">
            <form id="select-opt" action="index.php" method="post" enctype="multipart/form-data">
                <select name="select-val" id="" onchange="selectVal()">
                    <option disabled selected value="">Select</option>
                    <option value="x">X</option>
                    <option value="o">O</option>
                </select>
            </form>
        </div>
        <input type="hidden" id="sel_val" value="<?php echo $selVal; ?>">
        <div class="game_box" id="game_con">
            <?php
            for ($i = 0; $i < 9; $i++) {
                echo "<div><button onclick='handleBtn()' type='button'></button></div>";
            }
            ?>
        </div>
        <h1 id="h1"></h1>
</body>
<script>
    const selectVal = () => {
        document.getElementById('select-opt').submit();
    }

    const handleBtn = () => {
        const sel_val = document.getElementById('sel_val');

        if (!event.target.innerText) {
            if (sel_val.value == "x") {
                event.target.innerText = sel_val.value.toUpperCase();
                sel_val.value = "o";
            } else if (sel_val.value == "o") {
                event.target.innerText = sel_val.value.toUpperCase();
                sel_val.value = "x";
            }
            const game_con = document.querySelector('#game_con').childNodes;
            const h1 = document.getElementById('h1');

            if (!h1.innerText) {
                let item_1 = game_con[1].children[0].innerText;
                let item_2 = game_con[2].children[0].innerText;
                let item_3 = game_con[3].children[0].innerText;
                let item_4 = game_con[4].children[0].innerText;
                let item_5 = game_con[5].children[0].innerText;
                let item_6 = game_con[6].children[0].innerText;
                let item_7 = game_con[7].children[0].innerText;
                let item_8 = game_con[8].children[0].innerText;
                let item_9 = game_con[9].children[0].innerText;

                if (item_1 && item_2 && item_3) {
                    if (item_1 == item_2 && item_1 == item_3 && item_2 == item_3) {
                        return h1.innerText = item_1;
                    }
                }
                if (item_4 && item_5 && item_6) {
                    if (item_4 == item_5 && item_4 == item_6 && item_5 == item_6) {
                        return h1.innerText = item_4;
                    }
                }
                if (item_7 && item_8 && item_9) {
                    if (item_7 == item_8 && item_7 == item_9 && item_8 == item_9) {
                        return h1.innerText = item_7;
                    }
                }
                if (item_3 && item_6 && item_9) {
                    if (item_3 == item_6 && item_3 == item_9 && item_6 == item_9) {
                        return h1.innerText = item_6;
                    }
                }
                if (item_1 && item_4 && item_7) {
                    if (item_1 == item_4 && item_1 == item_7 && item_4 == item_7) {
                        return h1.innerText = item_1;
                    }
                }
                if (item_5 && item_2 && item_8) {
                    if (item_2 == item_5 && item_2 == item_8 && item_5 == item_8) {
                        return h1.innerText = item_2;
                    }
                }
                if (item_1 && item_5 && item_9) {
                    if (item_1 == item_5 && item_1 == item_9 && item_5 == item_9) {
                        return h1.innerText = item_1;
                    }
                }
                if (item_5 && item_7 && item_3) {
                    if (item_3 == item_5 && item_3 == item_7 && item_5 == item_7) {
                        return h1.innerText = item_3;
                    }
                }
            }

        }
    }
</script>

</html>