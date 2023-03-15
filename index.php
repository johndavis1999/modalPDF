
    <script>
        $(document).ready(function() {
            $('.ver').click(function() {
                $($(this).attr('href')).modal('show');
            });
        });
    </script>
    
    
    
  {{-- Modal PDF--}}
  <div class="modal fade" id="DocumentoModal{{$docs["id"]}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="DocumentoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="DocumentoModalLabel{{$docs["id"]}}">{{$docs["nombre"]}}</h5>
              </div>
              <div class="modal-body">
                  <iframe src="{{$ruta.'/'.$docs['url']}}" frameborder="0" width="100%" height="100%"></iframe>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cerrar</button>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col"> <a href="#DocumentoModal{{$docs["id"]}}" target1="#DocumentoModal{{$docs["id"]}}" data-toggle="modal" class="ver btn btn-info btn-sm"> <i class="fas fa-file-archive"></i> Ver</a>
      </div
  </div>
