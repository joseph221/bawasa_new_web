<div class="modal fade" id="viewRequestModal_{{ $not->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong></strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{ $not->data['request_service']['first_name'] }}{{ "  " }}{{ $not->data['request_service']['last_name'] }}
            <br/>
            <br/>
            <br/>

            <p style="font-size: 25px">
                <strong>Full Name:</strong> {{ $not->data['request_service']['first_name'] }}<br />
                <strong>phone number:</strong> {{ $not->data['request_service']['mobile_number'] }}<br />
                <strong>email:</strong> {{ $not->data['request_service']['email'] }}<br />
                <strong>plot number:</strong> {{ $not->data['request_service']['prot_number'] }}<br />
                <strong>Street name:</strong> {{ $not->data['request_service']['mtaa'] }}<br />
                <strong>House number:</strong> {{ $not->data['request_service']['house_no'] }}<br />
                <strong>NIDA number:</strong> {{ $not->data['request_service']['nida'] }}<br />
                <strong>Location staus:</strong> {{ $not->data['request_service']['location_status'] }}<br />
                <strong>Service Type:</strong> {{ $not->data['request_service']['service_type'] }}<br />

            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="ok()">Ok</button>
          </div>
      </div>
    </div>
  </div>

