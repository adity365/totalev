        <div style="display: flex; justify-content: flex-end; align-items: center; margin-bottom: 8px;">
            <button type="button" class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;" data-bs-toggle="modal" data-bs-target="#printJobseekerModal">Print</button>
        </div>
        <table style="width:100%; border-collapse:collapse; font-size:14px;">
        </table>
        <!-- Print Modal -->
        <div class="modal fade" id="printJobseekerModal" tabindex="-1" aria-labelledby="printJobseekerModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="printJobseekerModalLabel">List of Jobseekers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background:#fafafa;">
                <div style="display:flex; flex-wrap:wrap; gap:32px 48px; margin-bottom:12px;">
                  <div><input type="checkbox" id="print_name"> <label for="print_name">Name</label></div>
                  <div><input type="checkbox" id="print_email"> <label for="print_email">Email Address</label></div>
                  <div><input type="checkbox" id="print_address"> <label for="print_address">Address</label></div>
                  <div><input type="checkbox" id="print_telephone"> <label for="print_telephone">Telephone No.</label></div>
                </div>
                <div style="font-size:14px; color:#3366cc; cursor:pointer; margin-bottom:12px;" onclick="toggleAllPrintCheckboxes()">Check All / Uncheck All</div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-light border" style="font-weight:bold; font-size:17px; padding:2px 18px;">Print</button>
              </div>
            </div>
          </div>
        </div>
        <script>
        function toggleAllPrintCheckboxes() {
            var boxes = [
                document.getElementById('print_name'),
                document.getElementById('print_email'),
                document.getElementById('print_address'),
                document.getElementById('print_telephone')
            ];
            var allChecked = boxes.every(function(box){ return box.checked; });
            boxes.forEach(function(box){ box.checked = !allChecked; });
        }
        </script> 