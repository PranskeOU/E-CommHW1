<?php require_once("header.php");?>
<button type="button" class="btn btn-secondary"
        data-bs-toggle="tooltip, modal" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        data-bs-title="This is the Tooltip. This button is going to open the Modal"
        data-bs-target="#examplemodal">
  Open Modal
</button>
<!--Modal-->
<div class="modal" tabindex="-1" id="examplemodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>