<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>add product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">

    <div class="row">
        <div class="col">
            <h1>Product Add</h1>
        </div>
    </div>
    <hr>

    <form action="store.php" method="post">
        <div class="form-group row">
            <label for="SKU" class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="SKU" name="SKU" placeholder="SKU" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" name="price" placeholder="Price" required
                       pattern="^[ 0-9]+$">
            </div>
        </div>
        <div class="form-group row">
            <label for="typeSwitcher" class="col-sm-2 col-form-label">Type Switcher</label>
            <div class="col-sm-10">
                <select id="typeSwitcher" class="form-control" name="type_id" required>
                    <option selected
                            value="<?= \App\Models\Product::TYPE_DVD_DISC ?>">
                        <?= \App\Models\Product::typeData()[\App\Models\Product::TYPE_DVD_DISC] ?>
                    </option>
                    <option value="<?= \App\Models\Product::TYPE_BOOK ?>">
                        <?= \App\Models\Product::typeData()[\App\Models\Product::TYPE_BOOK] ?>
                    </option>
                    <option value="<?= \App\Models\Product::TYPE_FURNITURE ?>">
                        <?= \App\Models\Product::typeData()[\App\Models\Product::TYPE_FURNITURE] ?>
                    </option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="my_collapse" id="collapse0">
                    <div class="form-group row">
                        <label for="size" class="col-sm-2 col-form-label">Size</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="size" name="size" placeholder="size" required
                                   pattern="^[ 0-9]+$">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="my_collapse d-none" id="collapse1">
                    <div class="form-group row">
                        <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control" id="weight" name="weight"
                                   placeholder="weight" required pattern="^[ 0-9]+$">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="my_collapse d-none" id="collapse2">
                    <div class="form-group row">
                        <label for="height" class="col-sm-2 col-form-label">Height</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control" id="height" name="height"
                                   placeholder="height" required pattern="^[ 0-9]+$">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="width" class="col-sm-2 col-form-label">Width</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control" id="width" name="width" placeholder="width"
                                   required pattern="^[ 0-9]+$">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="length" class="col-sm-2 col-form-label">Length</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control" id="length" name="length"
                                   placeholder="length" required pattern="^[ 0-9]+$">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group row">
            <button type="submit" id="submit" class="btn btn-success">Save</button>
        </div>
    </form>
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
    $(document).ready(function () {
        $("#typeSwitcher").change(function () {
            $(".my_collapse").hide();
            $(".my_collapse input").attr('disabled', 'disabled');
            $("select option:selected").each(function () {
                $("#collapse" + $(this).val()).show();
                $("#collapse" + $(this).val()).removeClass("d-none");
                $("#collapse" + $(this).val() + " input").removeAttr('disabled');
            });
        });
    });
</script>
</body>
</html>
