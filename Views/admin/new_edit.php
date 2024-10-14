<h1>Sua tin tuc</h1>
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>title</td>
            <td><input type="text" name="title" value="<?=$new_arr_edit['title']?>"></td>
        </tr>
        <tr>
            <td>content</td>
            <td><input type="text" name="content" value="<?=$new_arr_edit['content']?>"></td>
        </tr>
        <tr>
            <td>image
                <img src="assets/images/<?=$new_arr_edit['image']?>" alt="" width="100px">
            </td>
            <td><input type="file" name="image"></td>
        </tr>
    </table>
    <input type="submit" name="submit" id="">
</form>