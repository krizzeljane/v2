<div class="modal fade" id="invoice-pdf" tabindex="-1" role="dialog" aria-labelledby="invoice-buyer">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content" id="arb-1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Invoice</h4>
      </div>

      <!-- <div class="modal-body no-padding"> -->

        <!-- <img src="images/invoice-header.jpg" class="img-responsive" width="100%"> -->
        <div style="overflow: auto;-webkit-overflow-scrolling: touch;">
          <object data="invoice.pdf" type="application/pdf" width="100%" height="1000px">
            <p><a href="invoice.pdf">Your Invoice</a></p>
          </object>
        </div>
        <!-- <div class="invoice-header">
          <div class="row">
            <div class="col-xs-12 text-center">
              <h4 style="display: none;">The Dealers' Forum</h4>
              <img src="http://www.thedealersforum.com/themes/standard/images3/logo2.png">
              <p>Phone: 844-428-9638 | Email: admin@thedealersforum.com</p>
            </div>
          </div>
        </div> -->

        

       
      <div class="modal-footer">
        <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#send-invoice">Email</button>
        <button type="button" class="btn btn-primary btnPrint" data-print="invoice-franchise-buyer" >Print</button>
      </div>
    </div> 
</div>
  </div>
</div>

<script type="text/javascript">
  document.getElementById("btnPrint").onclick = function () {
    printElement(document.getElementById("printThis"));
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}
</script>