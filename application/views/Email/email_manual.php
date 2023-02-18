<div class="mailbox-compose-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <a href="mailbox_compose.html" class="btn btn-success compose-btn btn-block m-b-md">Compose</a>
                                <ul class="mailbox-list">
                                    <li>
                                        <a href="#">
												<span class="pull-right">12</span>
												<i class="fa fa-envelope"></i> Inbox
											</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-paper-plane"></i> Sent</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pencil"></i> Draft</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-trash"></i> Trash</a>
                                    </li>
                                </ul>
                                <hr>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="hpanel email-compose mg-b-15">
                            <div class="panel-heading hbuilt">
                                <div class="p-xs h4">
                                    New message
                                </div>
                                <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                            </div>
                            <div class="panel-heading hbuilt">
                                <div class="p-xs">
                                    <form  action="<?= base_url('Email_manual/emailSend') ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                   
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label text-left">To:</label>
                                            <div class="col-sm-11">
                                            <input type="email" name="email_peminjam" placeholder="Email Peminjam" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label text-left">Subject:</label>
                                            <div class="col-sm-11">
                                            <input type="text" name="subjek" placeholder="Subjek" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label text-left">Message:</label>
                                            <div class="col-sm-11">
                                            <textarea name="pesan" placeholder="Pesan" rows="8" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label text-left">File</label>
                                            <div class="col-sm-11">
                                            <input type="file" name="attachment" class="form-control"></textarea>
                                            </div>
                                        </div>
                                       
                                        <div class="panel-footer">
                               
                                            <button type = "submit"class="btn btn-primary ft-compse">Send email</button>
                                             <div class="btn-group">
                                                  <button class="btn btn-default"><i class="fa fa-image"></i> </button>
                                                
                                             </div>

                                          </div>
                                    </form>
                                </div>
                            </div>
                           

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>