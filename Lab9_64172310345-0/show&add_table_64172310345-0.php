<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show&Add Data</title>
</head>
<style>
    * {
        margin: 0px;
    }

    .bg-top {
        background-color: lightpink;
        text-align: center;
        padding: 2cm;
    }

    .bg-below {
        background-color: lightblue;
        padding: 2cm;
        padding-bottom: 5cm;
        text-align: center;
    }

    .form-example{
        display: flex;
        justify-content: center;
        text-align: center;
        padding: 3px;
    }

    .btn-example{
        display: flex;
        justify-content: center;
    }

    label{
        display: flex;
        justify-content: flex-start;
        width: 85px;
    }

    input{
        width: 225px;
    }
</style>

<body>
    <div class="bg-top">
        <h1>แสดงข้อมูลสัตว์เลี้ยง</h1>
        <br>
        <button onclick="document.location='show_data_64172310345-0.php'">แสดงข้อมูล</button>
    </div>

    <div class="bg-below">
        <h1>เพิ่มข้อมูลสัตว์เลี้ยง</h1><br>
        <div style="text-align: center;">
            <form action="add_data_64172310345-0.php" method="post">
                <div class="form-example" >
                    <label>รหัสสัตว์: </label>
                    <input type="text" name="pet_id" required>
                </div>

                <div class="form-example">
                    <label>ชื่อสัตว์: </label>
                    <input type="text" name="pet_name" required>
                </div>

                <div class="form-example">
                    <label>น้ำหนัก: </label>
                    <input type="text" name="pet_weight" required>
                </div>

                <div class="form-example">
                    <label>อายุ: </label>
                    <input type="text" name="pet_age" required>
                </div>

                <div class="form-example">
                    <label>ประเภท: </label>
                    <input type="text" name="pet_type" required>
                </div>

                <div class="form-example">
                    <label>รหัสเจ้าของ: </label>
                    <input type="text" name="own_id" required>
                </div>
                <br>
                <div>
                    <input style="width: 75px;" type="submit" value="เพิ่มข้อมูล">
                </div>
            </form>
        </div>
    </div>
</body>

</html>