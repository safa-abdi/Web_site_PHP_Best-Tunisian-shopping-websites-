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
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="gerer_annonces.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Products
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="../view/messages.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Messages
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="../view/reclamation.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Claim
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                </ul>

            </aside>

 <div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#Rcol" role="tab" aria-controls="profile" aria-selected="false">add ads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#editC" role="tab" aria-controls="edit" aria-selected="false">Edite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#delC" role="tab" aria-controls="edit" aria-selected="false">Delete</a>
                </li>
            </ul>
               
                <!----------------------------Remplissage des colones ------------------------>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Rcol" role="tabpanel" aria-labelledby="home-tab">
                <h4><br></h4>   
                <h3 class="register-heading">Add ads</h3>
                <form  method="post" action="../controller/addCol.php"> 
                    <div class="row register-form">
                    <div class="col-md-7">
                    <div class="form-group">
                                <input type="text" name="np" class="form-control" placeholder="Product name" value="" />
                            </div>
                          <div class="form-group">
                            <p class="font-weight-normal">site name</p>
                         </div>
                            <div class="form-group">
                                <!--afficher les noms des sites -->
                                <select  class="form-control form-control" name="taskOption">
                                    <option></option>
                            <?php
                               include_once('..\model\sites.php');
                               $st=new sites();
                               $result=$st->listeS();
                               if (array($result)){
                                     foreach($result as $row){
                                    	echo"<option value=".$row[0].">".($row[0])."<option />";
                                                  }
                                                             }
                           ?>  
                             </select>      
                            </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                                <input type="number" name="prixP" class="form-control" placeholder="Product price" value="" />
                            </div>
                            <div class="form-group">
                               <p>Photo</p>
                            </div>
                            <div class="form-group">
                               <input type="file" name="ima" value="" />
                            </div>
                            <input  type="submit" name="submit"  class="btn btn-outline-primary" value="Save" />
                        </div>
                     </form>         
               </div>    
            </div>
                <!------------------------editer les sites----------------------------->
                <div class="tab-pane fade show " id="editC" role="tabpanel" aria-labelledby="home-tab">
                                <h4><br></h4>   
                <h3 class="register-heading">edit a site</h3>
                    <div class="row register-form" >
                    <form action="../controller/editAnnonce.php" method="post">
                          <div class="col-md-12">
                          <div class="col-md-7">
                          <div class="form-group">
                            <p class="font-weight-normal">site name</p>
                         </div>
                      <div class="form-group">
                      <select  class="form-control form-control" name="siteName">
                                    <option></option>
                            <?php
                               include_once('..\model\sites.php');
                               $st=new sites();
                               $result=$st->listeS();
                               if (array($result)){
                                     foreach($result as $row){
                                    	echo"<option value=".$row[0].">".($row[0])."<option />";
                                                  }
                                                             }
                           ?>  
                             </select>
                             </form>

                            <input  type="submit" name="submit" class="btn btn-outline-primary" value="Save"  /></a>
     
                       </div>
                         
                        </div>
                        </div>
                    </div>
                </div>

         <!----------------------------Remplissage des colones ------------------------>
        <div class="tab-pane fade show" id="addC" role="tabpanel" aria-labelledby="profile-tab">   
                  <div class="col-md-12">
                            <div class="form-group">
                            <h3 class="register-heading">Add columns</h3>
                    <form  method="post" action="..\addCol.php"> 
                    <div class="row register-form">
                    <div class="col-md-7">
                    <div class="form-group">
                                <input type="text" name="np" class="form-control" placeholder="Product name" value="" />
                            </div>
                          <div class="form-group">
                            <p class="font-weight-normal">site name</p>
                         </div>
                            <div class="form-group">
                                <!--afficher les noms des sites -->
                                <select  class="form-control form-control" name="taskOption">
                                    <option></option>
                            <?php
                               include_once('..\model\sites.php');
                               $st=new sites();
                               $result=$st->listeS();
                               if (array($result)){
                                     foreach($result as $row){
                                    	echo"<option value=".$row[0].">".($row[0])."<option />";
                                                  }
                                                             }
                           ?>  
                             </select>      
                            </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                                <input type="number" name="prixP" class="form-control" placeholder="Product price" value="" />
                            </div>
                            <div class="form-group">
                               <p>Photo</p>
                            </div>
                            <div class="form-group">
                               <input type="file" name="ima" value="" />
                            </div>
                            <input  type="submit" name="submit" class="btn btn-outline-primary" value="Save" />
                               </div>
                            </form>                   
                           </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  include '../includes/footer.php'; ?>
