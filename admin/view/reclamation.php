<?php  include '../includes/header.php'; ?>
<div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="ind.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                           <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border  ">
                        <a href="gerer_site.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Sites
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border ">
                        <a href="gerer_annonces.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Products
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border ">
                        <a href="../view/messages.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Messages
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="../view/reclamation.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Claim
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                </ul>

            </aside>
    <div class="container">
        <br>
    <h1 style="text-align:center">Claim</h1>

  <h2><br></h2>
  <table width="50%" class="table table-striped" >
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
        <form action="../controller/delRec.php" method="post" >
    <?php
 include_once('..\model\reclamation.php');
 $rec=new reclamation();
$result=$rec->listeReclamation();
    foreach($result as $row){
        echo"<tr><td>".($row['NomRec'])."</td>
        <td>".($row['Email'])."</td>
        <td>".($row['message'])."</td>
        <td><button type='submit' name='idToDelete' class='btn btn-danger' value=".$row['idRec'].">Supprimer</button></td>
        ";

    }
                           ?>  
    </tbody>
  </table>
</div>
</div>
</form>
<?php  include '../includes/footer.php'; ?>
