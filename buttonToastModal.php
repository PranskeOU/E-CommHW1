<?php require_once("header.php");?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Click to show Modal
</button>
<!--Modal-->
<div class="modal" tabindex="-1" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
        <button type="button" class="btn btn-primary" id="toast">Show Toast</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="https://tractive.com/blog/wp-content/uploads/2016/04/puppy-care-guide-for-new-parents.jpg" class="rounded me-2" alt="puppy">
      <strong class="me-auto">T O A S T</strong>
      <small>0 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      This is a toast.
    </div>
  </div>
</div>
<script>
  const toastTrigger = document.getElementById('toast')
  const toastLiveExample = document.getElementById('liveToast')
  if (toastTrigger) {
    toastTrigger.addEventListener('click', () => {
      const toast = new bootstrap.Toast(toastLiveExample)
    
      toast.show()
    })
  }
</script>