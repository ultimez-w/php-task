<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2><center><u>User Data</u></center></h2>

    <!-- Search form -->
    <form action="<?= base_url('index.php/pagination/index'); ?>" method="get" class="form-inline" style="margin-bottom: 20px;">
                
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Image/document</th>
                <th>Language</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($arr)) { 
                foreach ($arr as $key => $value) { ?>
                <tr>
                    <td><?= ++$key; ?></td>
                    <td><?= $value->name; ?></td>
                    <td><?= $value->email; ?></td>
                    <td><?= $value->Password; ?></td>
                    <td><?= $value->address; ?></td>
                    <td><?= $value->number; ?></td>
                    <td><img src="<?= base_url('uploads/') . $value->image; ?>" width="50px"></td>
                    <td><?= $value->language; ?></td>
                </tr>
            <?php } } else { ?>
                <tr>
                    <td colspan="8"><center>No data found</center></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <div class="pagination">
        <?= $pagination_links; ?>
    </div>
</div>

</body>
</html>
