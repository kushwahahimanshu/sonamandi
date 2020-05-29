<div class="col-md-12">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Sonamandi Chat</h3>
    </div><!-- /.box-header -->
      <div class="box-body">
        <div id="app">
          <chat-app :user="{{ Auth::user() }}"></chat-app>
        </div>
      </div>
  </div><!-- /.box -->

</div><!--/.col (left) -->
