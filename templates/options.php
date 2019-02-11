<div class="options">
        <button class="btn btn-theme" data-toggle="modal" data-target="#compose-modal" id="compose">Compose</button>
        <button class="btn btn-outline-success" id="refresh">Refresh</button>        
        <button class="btn btn-outline-danger" id="delete-all" data-toggle="modal" data-target="#delete-all-modal">Delete All</button>     
</div>
<!-- Compose Modal -->
<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-labelledby="composeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="composeModalLabel">Compose Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="scripts/send-message.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label for="to">To</label>
            <input type="text" maxlength="30" class="form-control" id="to" name="to" placeholder="Sending to" required>
        </div>
        <div class="form-group">
            <label for="message-body">Message</label>
            <textarea class="form-control" maxlength="1000" id="message-body" name="message-body" rows="10" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-theme">Send</button>  
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Delete All Modal -->
<div class="modal fade" id="delete-all-modal" tabindex="-1" role="dialog" aria-labelledby="deleteAllModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteAllModalLabel">Delete All</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="scripts/delete-all.php" method="POST">
      <div class="modal-body">
        <p>Are you sure? This action is cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Yes</button>  
      </div>
      </form>
    </div>
  </div>
</div>