<div class="fixed-action-btn vertical click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">settings</i>
    </a>
    <ul>
      <li><a title="Buat Artikel" href="{{ route('dasboard') }}" class="btn-floating blue tooltipped"  data-position="left" data-delay="50" data-tooltip="Buat Artikel"><i class="material-icons">mode_edit</i></a></li>
      <li><a href="{{ route('logout') }}" class="btn-floating green tooltipped"  data-position="left" data-delay="50" data-tooltip="Logout"><i class="material-icons">power_settings_new</i></a></li>
    </ul>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
});
</script>