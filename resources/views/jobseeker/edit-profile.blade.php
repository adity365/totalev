@extends('frontend.layouts.main')

@section('main-container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit Your Profile</h4>
                    <p class="text-center text-muted">Update your jobseeker profile information</p>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('jobseeker.profile.update') }}">
                        @csrf
                        @method('PUT')
                        
                        <!-- Job Category -->
                        <div class="mb-3">
                            <label for="job_category" class="form-label">Job Category *</label>
                            <select class="form-select" id="job_category" name="job_category" required>
                                <option value="">Select Job Category</option>
                                <option value="Information Technology" {{ $profile && $profile->job_category == 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
                                <option value="Healthcare" {{ $profile && $profile->job_category == 'Healthcare' ? 'selected' : '' }}>Healthcare</option>
                                <option value="Finance" {{ $profile && $profile->job_category == 'Finance' ? 'selected' : '' }}>Finance</option>
                                <option value="Education" {{ $profile && $profile->job_category == 'Education' ? 'selected' : '' }}>Education</option>
                                <option value="Marketing" {{ $profile && $profile->job_category == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                                <option value="Sales" {{ $profile && $profile->job_category == 'Sales' ? 'selected' : '' }}>Sales</option>
                                <option value="Engineering" {{ $profile && $profile->job_category == 'Engineering' ? 'selected' : '' }}>Engineering</option>
                                <option value="Design" {{ $profile && $profile->job_category == 'Design' ? 'selected' : '' }}>Design</option>
                                <option value="Customer Service" {{ $profile && $profile->job_category == 'Customer Service' ? 'selected' : '' }}>Customer Service</option>
                                <option value="Administration" {{ $profile && $profile->job_category == 'Administration' ? 'selected' : '' }}>Administration</option>
                            </select>
                        </div>

                        <!-- Job Subcategory -->
                        <div class="mb-3">
                            <label for="job_subcategory" class="form-label">Job Subcategory *</label>
                            <select class="form-select" id="job_subcategory" name="job_subcategory" required>
                                <option value="">Select Job Subcategory</option>
                            </select>
                        </div>

                        <!-- Job Sub-subcategory -->
                        <div class="mb-3">
                            <label for="job_sub_subcategory" class="form-label">Job Sub-subcategory</label>
                            <select class="form-select" id="job_sub_subcategory" name="job_sub_subcategory">
                                <option value="">Select Job Sub-subcategory</option>
                            </select>
                        </div>

                        <!-- Experience Level -->
                        <div class="mb-3">
                            <label for="experience_level" class="form-label">Experience Level *</label>
                            <select class="form-select" id="experience_level" name="experience_level" required>
                                <option value="">Select Experience Level</option>
                                <option value="Entry Level" {{ $profile && $profile->experience_level == 'Entry Level' ? 'selected' : '' }}>Entry Level (0-2 years)</option>
                                <option value="Mid Level" {{ $profile && $profile->experience_level == 'Mid Level' ? 'selected' : '' }}>Mid Level (3-5 years)</option>
                                <option value="Senior Level" {{ $profile && $profile->experience_level == 'Senior Level' ? 'selected' : '' }}>Senior Level (6-10 years)</option>
                                <option value="Expert Level" {{ $profile && $profile->experience_level == 'Expert Level' ? 'selected' : '' }}>Expert Level (10+ years)</option>
                            </select>
                        </div>

                        <!-- Education Level -->
                        <div class="mb-3">
                            <label for="education_level" class="form-label">Education Level *</label>
                            <select class="form-select" id="education_level" name="education_level" required>
                                <option value="">Select Education Level</option>
                                <option value="High School" {{ $profile && $profile->education_level == 'High School' ? 'selected' : '' }}>High School</option>
                                <option value="Diploma" {{ $profile && $profile->education_level == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                <option value="Bachelor's Degree" {{ $profile && $profile->education_level == 'Bachelor\'s Degree' ? 'selected' : '' }}>Bachelor's Degree</option>
                                <option value="Master's Degree" {{ $profile && $profile->education_level == 'Master\'s Degree' ? 'selected' : '' }}>Master's Degree</option>
                                <option value="PhD" {{ $profile && $profile->education_level == 'PhD' ? 'selected' : '' }}>PhD</option>
                                <option value="Other" {{ $profile && $profile->education_level == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Professional Summary *</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Tell us about your professional background, achievements, and career goals..." required>{{ $profile ? $profile->description : old('description') }}</textarea>
                        </div>

                        <!-- Skills -->
                        <div class="mb-3">
                            <label class="form-label">Skills *</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="JavaScript" id="skill_js" {{ $profile && in_array('JavaScript', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_js">JavaScript</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="Python" id="skill_python" {{ $profile && in_array('Python', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_python">Python</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="Java" id="skill_java" {{ $profile && in_array('Java', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_java">Java</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="PHP" id="skill_php" {{ $profile && in_array('PHP', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_php">PHP</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="React" id="skill_react" {{ $profile && in_array('React', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_react">React</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="Angular" id="skill_angular" {{ $profile && in_array('Angular', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_angular">Angular</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="Vue.js" id="skill_vue" {{ $profile && in_array('Vue.js', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_vue">Vue.js</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="Node.js" id="skill_node" {{ $profile && in_array('Node.js', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_node">Node.js</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="Laravel" id="skill_laravel" {{ $profile && in_array('Laravel', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_laravel">Laravel</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="skills[]" value="MySQL" id="skill_mysql" {{ $profile && in_array('MySQL', $profile->skills ?? []) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="skill_mysql">MySQL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <input type="text" class="form-control" id="custom_skills" placeholder="Add custom skills (comma-separated)">
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Job category subcategories
const jobSubcategories = {
    'Information Technology': ['Software Development', 'Web Development', 'Mobile Development', 'Data Science', 'DevOps', 'Cybersecurity', 'IT Support'],
    'Healthcare': ['Nursing', 'Physiotherapy', 'Pharmacy', 'Medical Administration', 'Mental Health'],
    'Finance': ['Accounting', 'Banking', 'Investment', 'Insurance', 'Financial Analysis'],
    'Education': ['Teaching', 'Training', 'Curriculum Development', 'Educational Administration'],
    'Marketing': ['Digital Marketing', 'Content Marketing', 'Social Media Marketing', 'SEO', 'Brand Management'],
    'Sales': ['Inside Sales', 'Outside Sales', 'Sales Management', 'Business Development'],
    'Engineering': ['Mechanical Engineering', 'Electrical Engineering', 'Civil Engineering', 'Chemical Engineering'],
    'Design': ['Graphic Design', 'UI/UX Design', 'Web Design', 'Product Design'],
    'Customer Service': ['Customer Support', 'Technical Support', 'Call Center', 'Client Relations'],
    'Administration': ['Office Administration', 'Project Management', 'Human Resources', 'Operations']
};

// Sub-subcategories
const jobSubSubcategories = {
    'Software Development': ['Frontend Development', 'Backend Development', 'Full Stack Development', 'Mobile App Development'],
    'Web Development': ['Frontend', 'Backend', 'Full Stack', 'E-commerce'],
    'Digital Marketing': ['SEO', 'PPC', 'Social Media', 'Email Marketing', 'Content Marketing']
};

document.getElementById('job_category').addEventListener('change', function() {
    const category = this.value;
    const subcategorySelect = document.getElementById('job_subcategory');
    const subSubcategorySelect = document.getElementById('job_sub_subcategory');
    
    // Clear existing options
    subcategorySelect.innerHTML = '<option value="">Select Job Subcategory</option>';
    subSubcategorySelect.innerHTML = '<option value="">Select Job Sub-subcategory</option>';
    
    if (category && jobSubcategories[category]) {
        jobSubcategories[category].forEach(subcategory => {
            const option = document.createElement('option');
            option.value = subcategory;
            option.textContent = subcategory;
            option.selected = '{{ $profile ? $profile->job_subcategory : "" }}' === subcategory;
            subcategorySelect.appendChild(option);
        });
    }
});

document.getElementById('job_subcategory').addEventListener('change', function() {
    const subcategory = this.value;
    const subSubcategorySelect = document.getElementById('job_sub_subcategory');
    
    // Clear existing options
    subSubcategorySelect.innerHTML = '<option value="">Select Job Sub-subcategory</option>';
    
    if (subcategory && jobSubSubcategories[subcategory]) {
        jobSubSubcategories[subcategory].forEach(subSubcategory => {
            const option = document.createElement('option');
            option.value = subSubcategory;
            option.textContent = subSubcategory;
            option.selected = '{{ $profile ? $profile->job_sub_subcategory : "" }}' === subSubcategory;
            subSubcategorySelect.appendChild(option);
        });
    }
});

// Custom skills input
document.getElementById('custom_skills').addEventListener('blur', function() {
    const customSkills = this.value.split(',').map(skill => skill.trim()).filter(skill => skill);
    customSkills.forEach(skill => {
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.name = 'skills[]';
        checkbox.value = skill;
        checkbox.className = 'form-check-input';
        checkbox.checked = true;
        
        const label = document.createElement('label');
        label.className = 'form-check-label';
        label.textContent = skill;
        
        const div = document.createElement('div');
        div.className = 'form-check';
        div.appendChild(checkbox);
        div.appendChild(label);
        
        document.querySelector('.col-md-6').appendChild(div);
    });
    this.value = '';
});

// Load existing data on page load
document.addEventListener('DOMContentLoaded', function() {
    const categorySelect = document.getElementById('job_category');
    if (categorySelect.value) {
        categorySelect.dispatchEvent(new Event('change'));
    }
});
</script>
@endsection 