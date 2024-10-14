<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <a href="home.php?route=user/logout">Logout</a>
    <h1>danh sach tin tuc</h1>
    <a href="home.php?route=admin/new/add">Them tin tuc moi</a>
    <table >
        <tr>
            <th>ID</th>
            <th>image</th>
            <th>title</th>
            <th>content</th>
            <th>action</th>
        </tr>
        <?php 
        foreach($ArrNew as $row){
        ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><img src="assets/images/<?=$row['image']?>" alt="" width="100px"></td>
            <td><?=$row['title']?></td>
            <td><?=$row['content']?></td>
            <td>
                <a href="home.php?route=admin/new/edit&id=<?=$row['id']?>" class="btn btn-warning">Edit</a>
                <a href="home.php?route=admin/new/delete&id=<?=$row['id']?>" onclick="return confirm('Bạn có chắc muốn xóa tin tức này không?')" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
