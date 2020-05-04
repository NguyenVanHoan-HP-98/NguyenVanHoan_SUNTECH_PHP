
<?php
 // tạo ra 1 triệu sv
    echo '<table border = "1" width ="800">';
    echo '
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
    ';
    $limit = 1000;
    $totalStudents =100000;
    $totalPage = $totalStudents/$limit;
    $currentPage = $_GET['page'] ?? 1;
    $start = ($currentPage-1)*$limit;
    $start+=1;
    $newLimit = $limit* $currentPage;

    echo '<div class = "paginate">';
    for($page = 1 ; $page<=$totalPage ; $page++)
    {
        $active = $page ==$currentPage ? 'active' : '';
        echo "<a href ='Phantrang.php?page=${page}' class='${active}'> ${page}</a>";
    }
    echo '</div>';

    for($start; $start<=$newLimit; $start++)
    {
        echo '<tr>';
        echo "<td>${start}</td>";
        echo "<td> Sinh vien thu : ${start}</td>";
        echo "<td>Sinhvienthu${start}@gmail.com</td>";
        echo '</tr>';
    }
    echo "</table>";
    
?>

<style>
    .paginate{
        margin-top: 10px;
        float: left;
    }
a{
    text-decoration: none;
    display: block;
    float: left;
    padding: 5px;
    margin-right: 5px;
    background: #ccc;
    line-height: 20px;
    text-align: center;
    margin-bottom: 5px;
}
.active{
    color: red;
}
</style>

