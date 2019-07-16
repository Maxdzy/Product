<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Products list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">

    <div class="row">
        <div class="col">
            <h1>Products list</h1>
        </div>
    </div>
    <hr>

    <form action="delete.php" method="post">
        <div class="row" id="products">
            <?php
            $result = "";
            if (count($arrayObject->getAll())) {
                foreach ($arrayObject->getAll() as $item) {
                    $result .= $item->render();
                }
            } else {
                $result = "<h2>Product not found</h2>";
            }
            echo $result;
            ?>
        </div>
        <div class="form-group row">
            <div class="col-1 ">
                <button type="submit" id="submit" class="btn btn-success">Apply</button>
            </div>
            <div class="col-3 ">
                <a href="#" id="checkbox_on" onclick="allCheckboxesOn()" class="btn btn-dark">Mass Delete Action</a>
            </div>
        </div>
    </form>

    <div class="row">
        <a href="add.php">Add product</a>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script>
    function allCheckboxesOn() {
        var allCheckboxes = $("input:checkbox:enabled");
        var notChecked = allCheckboxes.not(':checked');
        allCheckboxes.removeAttr('checked');
        notChecked.attr('checked', 'checked');
    }
</script>

</body>
</html>
