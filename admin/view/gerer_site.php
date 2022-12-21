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
                    <li class="w-full h-full py-3 px-2 border-b border-light-border  bg-white">
                        <a href="gerer_site.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Sites
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
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
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Rcol" role="tab" aria-controls="profile" aria-selected="false">Replace</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#delete" role="tab" aria-controls="edit" aria-selected="false">delete/Empty</a>
                </li>
            </ul>
               <!------------------------------Ajouter un site ------------------------->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h4><br></h4>   
                <h3 class="register-heading">Create a site</h3>
                        <form method="post" action="../controller/addSite.php" enctype="multipart/form-data">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                     <input type="text" name="Nsite" class="form-control" placeholder="Site Name *" value="" />
                                  </div>
                                 </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <input type="text" name="lien" class="form-control" placeholder="Link *" value="" />
                                </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                               <p>LOGO</p>
                            </div>
                          </div>
                          <div class="col-md-6">
                               <input type="file" name="imge" value="" />
                            </div>
                        <table width="60%" align="center">            
                         <tr> 
                             <td style="text-align:center;" width="60%">
                               <input type="submit" name="submit" class="btnRegister" value="create" />
                             </td>
                        </tr>
                    </table>  
                        </form> 
                    </div>
</div>
                <!----------------------------remplacer des sites ------------------------>
                <div class="tab-pane fade show " id="Rcol" role="tabpanel" aria-labelledby="home-tab">
                <h4><br></h4>   
                <h3 class="register-heading">Replace site</h3>
                <form  method="post" action="../controller/renameSite.php"> 
                    <div class="row register-form">
                    <div class="col-md-7">
                    <div class="form-group">
                                <h5>site name</h5>
                            </div>
                            <div class="form-group">
                                <h5>replace name</h5>
                            </div>  
                        </div>
                        <div class="col-md-5">
                        <div class="form-group">
                                <!--afficher les noms des sites -->
                                <select  class="form-control form-control" name="stes">
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
                            <div class="form-group">
                               <input type="text" name="Sn" class="form-control form-control"  >    
                            </div>
                        </div>
                     <table width="60%" align="center">            
                         <tr> 
                             <td style="text-align:center;" width="60%">
                               <input  type="submit" name="submit"  class="btnReg" value="Replace" />
                             </td>
                        </tr>
                    </table> 
                    </form>         
               </div>    
            </div>

            <!------------------------supprimer les sites----------------------------->
            <div class="tab-pane fade show " id="delete" role="tabpanel" aria-labelledby="home-tab">
                <h4><br></h4>   
                <h3 class="register-heading">Delete site</h3>
                <form  method="post" action="../controller/DeleteSite.php"> 
                    <div class="row register-form">
                    <div class="col-md-6">
                    <div class="form-group">
                                <h5>site name</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <!--afficher les noms des sites -->
                                <select  class="form-control form-control" name="sites">
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
                     <table width="70%" align="center">            
                         <tr> 
                             <td style="text-align:center;" width="35%">
                                <input  type="submit" name="dele"  class="btnRegister" value="Delete" />
                             </td>
                             <td style="text-align:center;" width="35%">
                                 <input  type="submit" name="Emp"  class="btnRegister" value="Empty" />
                             </td>
                        </tr>
                    </table>   
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
    </div>
</div>
<?php  include '../includes/footer.php'; ?>
