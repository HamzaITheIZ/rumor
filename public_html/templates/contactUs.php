<!--MODAL-->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact website support</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="simple_contact" onsubmit="return false">
                    <input type="hidden" id="username" name="username" value="<?php echo $_SESSION['username']; ?>" >
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="contact_message" id="contact_message" class="form-control contact-msg" placeholder="Write your message." maxlength="1000"  rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-md-12 ml-auto text-right">
                                    <button type="submit" class="btn  mainBackColor2 text-white">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

