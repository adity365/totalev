@extends('admin.dashboard')

@section('content')
<div style="border:1px solid #e5e5e5; background:#fafafa; padding:24px; max-width:700px; margin:auto;">
    <h2 style="color: #666; font-size: 2rem; margin-bottom: 18px;">Send Email</h2>
    <form>
        <div style="margin-bottom:14px;">
            <label for="to" style="display:inline-block; width:90px;">To:</label>
            <input type="email" id="to" name="to" style="width:320px; padding:4px;" required> <span style="color:red;">*</span>
        </div>
        <div style="margin-bottom:14px;">
            <label for="from" style="display:inline-block; width:90px;">From:</label>
            <input type="email" id="from" name="from" value="vtsales@vacanttree.com" style="width:320px; padding:4px;" required> <span style="color:red;">*</span>
        </div>
        <div style="margin-bottom:14px;">
            <label for="subject" style="display:inline-block; width:90px;">Subject:</label>
            <input type="text" id="subject" name="subject" style="width:320px; padding:4px;" required> <span style="color:red;">*</span>
        </div>
        <div style="margin-bottom:14px;">
            <label for="message" style="display:inline-block; width:90px; vertical-align:top;">Message:</label>
            <textarea id="message" name="message" rows="7" style="width:420px; padding:4px;" required></textarea> <span style="color:red; vertical-align:top;">*</span>
        </div>
        <div style="margin-left:90px;">
            <button type="submit" class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Preview</button>
        </div>
    </form>
</div>
@endsection 