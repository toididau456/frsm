<a class="btn btn-default" data-toggle="modal" href='#modal-cv'>{{ trans('interview.cvFile') }}</a>
<div class="modal fade" id="modal-cv">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
          <iframe src="{{ asset($cv_file) }}">
          </iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('interview.close') }}</button>
      </div>
    </div>
  </div>
</div>
