








   

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
               
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content" style="
    margin-top: 100px;
">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
			  	<h4 id="myModalLabel" class="modal-title">Ajouter Un Rendez-Vous</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titre</label>

					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Type</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color" style="
    height: 36.5px;
">
						  <option value="">Choisir</option>
						  <option style="color:#008000;" value="#008000">&#9724; Disponible</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Non Disponible</option>  
						</select>
					</div>
				  </div>
				   <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Heure Debut</label>
					<div class="col-sm-10">
					  <input type="time" name="hstart" class="form-control" id="hstart" >
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Heure Fin</label>
					<div class="col-sm-10">
					  <input type="time" name="hend" class="form-control" id="hend" >
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Date Debut</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Date Fin</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>
				 
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
	<div class="modal-content" style="
    margin-top: 100px;
">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
			  	<h4 class="modal-title" id="myModalLabel">Modifier Rendez-Vous</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titre</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Heure Debut</label>
					<div class="col-sm-10">
					  <input type="time" name="hstart" class="form-control" id="hstart" >
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Heure Fin</label>
					<div class="col-sm-10">
					  <input type="time" name="hend" class="form-control" id="hend" >
					</div>
				</div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Type</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color" style="
    height: 36.5px;
">
						   <option value="">Choisir</option>
						   <option style="color:#008000;" value="#008000">&#9724; Disponible</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Non Disponible</option>  
						</select>
					</div>
				  </div>
				    
					<div class="form-group">
					<label for="title" class="col-sm-2 control-label"></label>
					 
							<label class="text-danger" style="
    padding-left: 50px;
    padding-top: 20px;
"><input type="checkbox" name="delete">Supprimer Rendez-Vous</label>
						
					<div class="col-sm-10">
					 
					</div>
				  </div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
   

