<?php include $_SERVER["DOCUMENT_ROOT"]."/admin_area/header.php";?>  
<p>
<h3>뉴스리스트</h3>
</p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<div>
    <a href="write.php">
    <button type="button" class="btn btn-secondary">등록</button>
</a>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/admin_area/footer.php";?>  