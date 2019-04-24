<div class="modal modal-alert fade modal-alert" id="lockStaff" tabindex="-1" role="dialog" aria-labelledby="lockStaff">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p class="text-center">Are you sure you want to lock <br>Therese Johan?</p><br>
        <div class="text-center">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" onclick="$('.account-active').removeClass('account-active').addClass('account-lock'); $('.lockDealer').hide();$('.unlockDealer').fadeIn();" data-dismiss="modal">Lock Account</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!--MODALS END-->

<!-- 
<script type="text/javascript">
  $(document).ready(function(){
    $('.lockDealer .fa-lock-open').onclick(function(){
      alert('HELLLoooo');
      $('.account-lock').removeClass('account-lock').addClass('account-active');
       $('.lockDealer svg.fa-lock-open').removeClass('fa-lock-open').addClass('fa-lock');
    });
  });
</script> -->