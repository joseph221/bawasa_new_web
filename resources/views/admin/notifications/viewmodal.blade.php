<div class="modal fade" id="viewModal_{{ $not->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>{{ $not->data['contact']['subject'] }}</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{ $not->data['contact']['message'] }}
            <br/>
            <br/>
            <br/>

            <p>
                <strong>name:</strong> {{ $not->data['contact']['names'] }}<br />
                <strong>phone:</strong> {{ $not->data['contact']['phone'] }}<br />
                <strong>email:</strong> {{ $not->data['contact']['email'] }}<br />
                <strong>organisation:</strong> {{ $not->data['contact']['organization'] }}
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="ok()">Ok</button>
          </div>
      </div>
    </div>
  </div>

