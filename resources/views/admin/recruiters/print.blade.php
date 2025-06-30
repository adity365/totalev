@extends('admin.dashboard')

@section('content')
<div style="background:#fafafa; min-height:100vh; padding:0; margin:0;">
    <div style="padding: 8px 0 0 8px;">
        <span style="color:#666; font-size:2rem; font-weight:400;">List of Recruiters</span>
    </div>
    <div style="border:1px solid #ccc; background:#fff; margin:8px 8px 0 8px;">
        <div style="background:#fafafa; padding:16px 12px 8px 12px; display:flex; flex-wrap:wrap; align-items:flex-start; justify-content:space-between;">
            <div style="display:flex; flex-direction:column; gap:8px; width:220px;">
                <div><input type="checkbox" id="print_name"> <label for="print_name" style="font-size:16px; font-weight:400;">Name</label></div>
                <div><input type="checkbox" id="print_email"> <label for="print_email" style="font-size:16px; font-weight:400; color:#3366cc;">Email Address</label></div>
                <div><input type="checkbox" id="print_address"> <label for="print_address" style="font-size:16px; font-weight:400;">Address</label></div>
            </div>
            <div style="display:flex; flex-direction:column; gap:8px; width:220px;">
                <div><input type="checkbox" id="print_company"> <label for="print_company" style="font-size:16px; font-weight:400; color:#3366cc;">Company name</label></div>
                <div><input type="checkbox" id="print_telephone"> <label for="print_telephone" style="font-size:16px; font-weight:400; color:#3366cc;">Telephone number</label></div>
            </div>
        </div>
        <hr style="margin:0;">
        <div style="display:flex; justify-content:space-between; align-items:center; padding:12px 12px 12px 12px;">
            <div>
                <a href="#" style="color:#3366cc; font-size:15px;" onclick="toggleAllPrintCheckboxes(); return false;">Check All / Uncheck All</a>
            </div>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">Print</button>
        </div>
    </div>
</div>
<script>
function toggleAllPrintCheckboxes() {
    var boxes = [
        document.getElementById('print_name'),
        document.getElementById('print_email'),
        document.getElementById('print_address'),
        document.getElementById('print_company'),
        document.getElementById('print_telephone')
    ];
    var allChecked = boxes.every(function(box){ return box.checked; });
    boxes.forEach(function(box){ box.checked = !allChecked; });
}
</script>
@endsection 