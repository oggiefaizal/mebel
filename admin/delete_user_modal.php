<div class="modal fade" id="delete_user<?php echo $user_id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <h4 class="modal-title" id="myModalLabel"><center>Hapus Produk </center></h4>
                                        </div>
                                         <div class="modal-body">
                                            <div class="alert alert-danger">Anda Serius Untuk <strong>Menghapus &nbsp;</strong> <?php echo $row['firstname'] . " " . $row['lastname']; ?>?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete_user.php<?php echo '?id=' . $user_id; ?>" ><i class="icon-check"></i>&nbsp;Ya</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Tidak</button>

                                        </div>
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  
									  
									  
 </div>