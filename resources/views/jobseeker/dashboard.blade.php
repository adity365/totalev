@extends('frontend.layouts.main')

@section('main-container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">My Profile</h4>
                    <form method="POST" action="{{ route('logout.jobseeker') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-light btn-sm">Logout</button>
                    </form>
                </div>
                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form method="POST" action="{{ route('jobseeker.profile.update') }}" enctype="multipart/form-data" id="profileForm">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4 align-items-center">
                            <div class="col-md-3 text-center">
                                @php $photo = Auth::guard('jobseeker')->user()->profile_photo_path; @endphp
                                <div class="position-relative d-inline-block">
                                    @if($photo)
                                        <img src="{{ asset('storage/' . $photo) }}" class="rounded-circle img-thumbnail" style="width: 120px; height: 120px; object-fit: cover;" alt="Profile Photo">
                                    @else
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::guard('jobseeker')->user()->name) }}&size=120" class="rounded-circle img-thumbnail" style="width: 120px; height: 120px; object-fit: cover;" alt="Profile Photo">
                                    @endif
                                    <input type="file" name="profile_photo" class="form-control mt-2" accept="image/*">
                                    @php $cv = Auth::guard('jobseeker')->user()->cv_path; @endphp
                                    @if($cv)
                                        <a href="{{ asset('storage/' . $cv) }}" class="btn btn-outline-primary btn-sm mt-2 w-100" download>Download CV</a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ Auth::guard('jobseeker')->user()->name }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ Auth::guard('jobseeker')->user()->email }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ Auth::guard('jobseeker')->user()->phone }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Country</label>
                                        <select class="form-select" name="country" id="countrySelect" required></select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control" name="state" value="{{ Auth::guard('jobseeker')->user()->state }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" name="city" value="{{ Auth::guard('jobseeker')->user()->city }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Pincode</label>
                                        <input type="text" class="form-control" name="pincode" value="{{ Auth::guard('jobseeker')->user()->pincode }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Street</label>
                                        <input type="text" class="form-control" name="street" value="{{ Auth::guard('jobseeker')->user()->street }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select" name="gender">
                                            <option value="male" {{ Auth::guard('jobseeker')->user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ Auth::guard('jobseeker')->user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                                            <option value="other" {{ Auth::guard('jobseeker')->user()->gender == 'other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="{{ Auth::guard('jobseeker')->user()->dob }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Job Category</label>
                                        <select class="form-select" name="category" id="jobCategorySelect" required></select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Sub Category</label>
                                        <select class="form-select" name="sub_category" id="jobSubCategorySelect" required></select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Sub Sub Category</label>
                                        <select class="form-select" name="sub_sub_category" id="jobSubSubCategorySelect"></select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Work Status</label>
                                        <input type="text" class="form-control" name="work_status" value="{{ Auth::guard('jobseeker')->user()->work_status }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Experience Years</label>
                                        <input type="text" class="form-control" name="experience_years" value="{{ Auth::guard('jobseeker')->user()->experience_years }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Job Type</label>
                                        <input type="text" class="form-control" name="job_type" value="{{ Auth::guard('jobseeker')->user()->job_type }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Education</label>
                                        <input type="text" class="form-control" name="education" value="{{ Auth::guard('jobseeker')->user()->education }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Roles</label>
                                        <div id="roles-list" class="d-flex flex-wrap gap-2 mb-2">
                                            <!-- Existing roles as tags -->
                                            @php $roles = Auth::guard('jobseeker')->user()->roles ? explode(',', Auth::guard('jobseeker')->user()->roles) : []; @endphp
                                            @foreach($roles as $role)
                                                @if($role)
                                                    <span class="badge bg-secondary role-tag mb-1">{{ $role }} <span class="ms-1 pointer text-danger remove-role">&times;</span><input type="hidden" name="roles[]" value="{{ $role }}"></span>
                                                @endif
                                            @endforeach
                                        </div>
                                        <input type="text" class="form-control d-inline-block w-auto" id="add-role-input" placeholder="Add role">
                                        <button type="button" class="btn btn-outline-primary btn-sm ms-2" id="add-role-btn">+</button>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Skills</label>
                                        <div id="skills-list" class="d-flex flex-wrap gap-2 mb-2">
                                            @php $skills = Auth::guard('jobseeker')->user()->skills ? explode(',', Auth::guard('jobseeker')->user()->skills) : []; @endphp
                                            @foreach($skills as $skill)
                                                @if($skill)
                                                    <span class="badge bg-info skill-tag mb-1">{{ $skill }} <span class="ms-1 pointer text-danger remove-skill">&times;</span><input type="hidden" name="skills[]" value="{{ $skill }}"></span>
                                                @endif
                                            @endforeach
                                        </div>
                                        <input type="text" class="form-control d-inline-block w-auto" id="add-skill-input" placeholder="Add skill">
                                        <button type="button" class="btn btn-outline-primary btn-sm ms-2" id="add-skill-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-success px-5">Update Info</button>
                            </div>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-primary text-white mb-3">
                                <div class="card-body text-center">
                                    <h5>Applied Jobs</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-success text-white mb-3">
                                <div class="card-body text-center">
                                    <h5>Saved Jobs</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-info text-white mb-3">
                                <div class="card-body text-center">
                                    <h5>Profile Views</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// Country dropdown
fetch('https://restcountries.com/v3.1/all?fields=name,cca2')
    .then(response => response.json())
    .then(data => {
        const countrySelect = document.getElementById('countrySelect');
        const currentCountry = "{{ Auth::guard('jobseeker')->user()->country }}";
        data.sort((a, b) => a.name.common.localeCompare(b.name.common));
        data.forEach(country => {
            const option = document.createElement('option');
            option.value = country.cca2;
            option.textContent = country.name.common;
            if (country.cca2 === currentCountry || country.name.common === currentCountry) option.selected = true;
            countrySelect.appendChild(option);
        });
    });
// Job category/subcategory/sub-subcategory dropdowns
const jobCategories = {
    'IT': ['Software', 'Hardware', 'Networking'],
    'Non-IT': ['Sales', 'Marketing', 'Support'],
    'Finance': ['Accounts', 'Audit', 'Tax'],
    'Healthcare': ['Nursing', 'Pharmacy', 'Lab'],
    'Education': ['Teaching', 'Administration'],
};
const jobSubSubCategories = {
    'Software': ['Frontend', 'Backend', 'Full Stack'],
    'Sales': ['Field', 'Inside'],
    'Accounts': ['Payable', 'Receivable'],
};
const jobCategorySelect = document.getElementById('jobCategorySelect');
const jobSubCategorySelect = document.getElementById('jobSubCategorySelect');
const jobSubSubCategorySelect = document.getElementById('jobSubSubCategorySelect');
const currentCategory = "{{ Auth::guard('jobseeker')->user()->category }}";
const currentSubCategory = "{{ Auth::guard('jobseeker')->user()->sub_category }}";
const currentSubSubCategory = "{{ Auth::guard('jobseeker')->user()->sub_sub_category }}";
// Populate job categories
jobCategorySelect.innerHTML = '<option value="">Select Category</option>';
Object.keys(jobCategories).forEach(cat => {
    const option = document.createElement('option');
    option.value = cat;
    option.textContent = cat;
    if (cat === currentCategory) option.selected = true;
    jobCategorySelect.appendChild(option);
});
function populateSubCategories() {
    const cat = jobCategorySelect.value;
    jobSubCategorySelect.innerHTML = '<option value="">Select Sub Category</option>';
    if (cat && jobCategories[cat]) {
        jobCategories[cat].forEach(sub => {
            const option = document.createElement('option');
            option.value = sub;
            option.textContent = sub;
            if (sub === currentSubCategory) option.selected = true;
            jobSubCategorySelect.appendChild(option);
        });
    }
    populateSubSubCategories();
}
function populateSubSubCategories() {
    const sub = jobSubCategorySelect.value;
    jobSubSubCategorySelect.innerHTML = '<option value="">Select Sub Sub Category</option>';
    if (sub && jobSubSubCategories[sub]) {
        jobSubSubCategories[sub].forEach(subsub => {
            const option = document.createElement('option');
            option.value = subsub;
            option.textContent = subsub;
            if (subsub === currentSubSubCategory) option.selected = true;
            jobSubSubCategorySelect.appendChild(option);
        });
    }
}
jobCategorySelect.addEventListener('change', populateSubCategories);
jobSubCategorySelect.addEventListener('change', populateSubSubCategories);
// Initial population
populateSubCategories();
// Tag input for skills
const skillsList = document.getElementById('skills-list');
const addSkillBtn = document.getElementById('add-skill-btn');
const addSkillInput = document.getElementById('add-skill-input');
addSkillBtn.addEventListener('click', function() {
    const val = addSkillInput.value.trim();
    if (val) {
        const tag = document.createElement('span');
        tag.className = 'badge bg-info skill-tag mb-1';
        tag.innerHTML = val + ' <span class="ms-1 pointer text-danger remove-skill">&times;</span>' + `<input type="hidden" name="skills[]" value="${val}">`;
        skillsList.appendChild(tag);
        addSkillInput.value = '';
    }
});
skillsList.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-skill')) {
        e.target.parentElement.remove();
    }
});
// Tag input for roles
const rolesList = document.getElementById('roles-list');
const addRoleBtn = document.getElementById('add-role-btn');
const addRoleInput = document.getElementById('add-role-input');
addRoleBtn.addEventListener('click', function() {
    const val = addRoleInput.value.trim();
    if (val) {
        const tag = document.createElement('span');
        tag.className = 'badge bg-secondary role-tag mb-1';
        tag.innerHTML = val + ' <span class="ms-1 pointer text-danger remove-role">&times;</span>' + `<input type="hidden" name="roles[]" value="${val}">`;
        rolesList.appendChild(tag);
        addRoleInput.value = '';
    }
});
rolesList.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-role')) {
        e.target.parentElement.remove();
    }
});
</script>
@endsection 