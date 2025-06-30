@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">Search and rate resumes</h2>
<div style="background:#fff; border:1px solid #ddd; border-radius:4px; padding:20px; max-width:1200px; margin:0 0 0 10px;">
    <form>
        <div class="row mb-2">
            <div class="col-md-8">
                <label for="keyword" style="font-weight:bold;">Keyword :</label>
                <input type="text" class="form-control form-control-sm d-inline-block" id="keyword" name="keyword" style="width:60%; display:inline-block; font-size:14px;">
                <span style="font-size:13px; color:#888; margin-left:8px;">e.g. Sales Executive</span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <span style="font-weight:bold; font-size:13px;">Choose your search criteria:</span>
                <input type="radio" id="any" name="criteria" checked style="margin-left:10px;">
                <label for="any" style="font-weight:normal; font-size:13px;">any of the above words or phrases</label>
                <input type="radio" id="exact" name="criteria" style="margin-left:10px;">
                <label for="exact" style="font-weight:normal; font-size:13px;">exact match of words or phrases</label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3">
                <label for="first_name" style="font-weight:bold;">First name :</label>
                <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" style="font-size:13px;">
            </div>
            <div class="col-md-3">
                <label for="last_name" style="font-weight:bold;">Last name :</label>
                <input type="text" class="form-control form-control-sm" id="last_name" name="last_name" style="font-size:13px;">
            </div>
            <div class="col-md-3">
                <label for="email" style="font-weight:bold;">Email-address :</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" style="font-size:13px;">
            </div>
        </div>
        <hr>
        <div class="row mb-2">
            <div class="col-md-3">
                <label for="country" style="font-weight:bold;">Country :</label>
                <select class="form-control form-control-sm" id="country" name="country" style="font-size:13px;">
                    <option>All countries</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="state" style="font-weight:bold;">State :</label>
                <input type="text" class="form-control form-control-sm" id="state" name="state" style="font-size:13px;">
            </div>
            <div class="col-md-3">
                <label for="city" style="font-weight:bold;">City :</label>
                <input type="text" class="form-control form-control-sm" id="city" name="city" style="font-size:13px;">
            </div>
            <div class="col-md-3">
                <label for="zip" style="font-weight:bold;">Zip :</label>
                <input type="text" class="form-control form-control-sm" id="zip" name="zip" style="font-size:13px;">
            </div>
        </div>
        <hr>
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="job_category" style="font-weight:bold;">Job category :</label>
                <select class="form-control form-control-sm" id="job_category" name="job_category" size="4" style="font-size:13px;">
                    <option>All Job Categorys</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="experience" style="font-weight:bold;">Experience :</label>
                <select class="form-control form-control-sm" id="experience" name="experience" style="font-size:13px;">
                    <option>Any experience</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12 text-end">
                <button type="submit" class="btn btn-light border" style="font-weight:bold; font-size:15px; padding:2px 18px;">Search</button>
            </div>
        </div>
    </form>
</div>
@endsection 